<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace mod_plugnmeet\controller;

use mod_plugnmeet\helper\plugNmeetConnect;
use html_writer;
use moodle_url;

/**
 * Controller class for handling room recordings.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class recordings_controller {
    /** @var \cm_info */
    private $cm;
    /** @var \stdClass */
    private $course;
    /** @var \stdClass */
    private $plugnmeet;
    /** @var \context_module */
    private $context;

    /**
     * Constructor.
     *
     * @param \cm_info $cm
     * @param \stdClass $course
     * @param \stdClass $plugnmeet
     */
    public function __construct($cm, $course, $plugnmeet) {
        $this->cm = $cm;
        $this->course = $course;
        $this->plugnmeet = $plugnmeet;
        $this->context = \context_module::instance($cm->id);
    }

    /**
     * Gets page data.
     *
     * @return array
     */
    public function get_page_data() {
        $recordid = optional_param('record_id', '', PARAM_TEXT);

        if (!empty($recordid)) {
            return [
                'content' => $this->render_single_recording($recordid),
            ];
        }

        return [
            'content' => $this->render_recordings_list(),
        ];
    }

    /**
     * Renders a single recording.
     *
     * @param string $recordid
     * @return string
     */
    private function render_single_recording($recordid) {
        global $OUTPUT;

        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $recordinginfores = $pnc->getRecordingInfo($recordid);

        if (!$recordinginfores->getStatus()) {
            return $OUTPUT->notification($recordinginfores->getMsg(), 'error');
        }

        $info = $recordinginfores->getRecordingInfo();
        $roominfo = $recordinginfores->getRoomInfo();

        $downloadres = $pnc->getRecordingDownloadLink($recordid);

        if (!$downloadres->getStatus()) {
            return $OUTPUT->notification($downloadres->getMsg(), 'error');
        }

        $token = $downloadres->getToken();
        $serverurl = rtrim(get_config('mod_plugnmeet', 'plugnmeet_server_url'), '/');
        $downloadurl = $serverurl . '/download/recording/' . $token;

        $page = optional_param('page', 0, PARAM_INT);

        $headerhtml = html_writer::start_div('d-flex justify-content-between align-items-center mb-3');
        $headerhtml .= html_writer::tag('h3', get_string('recording_details', 'plugnmeet'), ['class' => 'm-0']);

        $buttons = html_writer::start_div('btn-group');
        $buttons .= html_writer::link(
            $downloadurl,
            get_string('download', 'plugnmeet'),
            ['class' => 'btn btn-primary', 'target' => '_blank']
        );

        if (has_capability('mod/plugnmeet:deleterecording', $this->context)) {
            $deleteurl = new moodle_url('/mod/plugnmeet/recordings.php', [
                'id' => $this->cm->id,
                'action' => 'delete',
                'recording_id' => $recordid,
                'page' => $page,
            ]);
            $buttons .= html_writer::link($deleteurl, get_string('delete', 'plugnmeet'), [
                'class' => 'btn btn-danger',
                'onclick' => 'return confirm("' . get_string('delete_confirm', 'plugnmeet') . '");',
            ]);
        }

        $buttons .= html_writer::link(new moodle_url(
            '/mod/plugnmeet/recordings.php',
            ['id' => $this->cm->id, 'page' => $page]
        ), get_string('back_to_list', 'plugnmeet'), ['class' => 'btn btn-secondary']);
        $buttons .= html_writer::end_div();

        $headerhtml .= $buttons;
        $headerhtml .= html_writer::end_div();

        $html = $headerhtml;

        $videohtml = html_writer::start_tag('video', [
            'controls' => 'controls',
            'width' => '100%',
            'height' => 'auto',
            'style' => 'max-width: 800px; display: block; margin-bottom: 20px;',
        ]);
        $videohtml .= html_writer::empty_tag('source', ['src' => $downloadurl, 'type' => 'video/mp4']);
        $videohtml .= get_string('browser_not_support_video', 'plugnmeet');
        $videohtml .= html_writer::end_tag('video');

        $html .= $videohtml;

        $details = [
            get_string('recording_id', 'plugnmeet') => $info->getRecordId(),
            get_string('room_id', 'plugnmeet') => $info->getRoomId(),
            get_string('room_sid', 'plugnmeet') => $info->getRoomSid(),
            get_string('file_size', 'plugnmeet') => $this->format_mb($info->getFileSize()),
            get_string('recording_creation_time', 'plugnmeet') => userdate($info->getCreationTime()),
        ];

        if ($roominfo) {
            $details[get_string('room_title', 'plugnmeet')] = $roominfo->getRoomTitle();
            $details[get_string('session_started_at', 'plugnmeet')] = userdate(strtotime($roominfo->getCreated()));
            $details[get_string('session_ended_at', 'plugnmeet')] = userdate(strtotime($roominfo->getEnded()));
        } else {
            $details[get_string('room_creation_time', 'plugnmeet')] = userdate($info->getRoomCreationTime());
        }

        $table = new \html_table();
        foreach ($details as $label => $value) {
            $table->data[] = [html_writer::tag('strong', $label), $value];
        }
        $html .= html_writer::table($table);

        return $html;
    }

    /**
     * Renders recordings list.
     *
     * @return string
     */
    private function render_recordings_list() {
        global $OUTPUT;

        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $page = optional_param('page', 0, PARAM_INT);
        $limit = 20;
        $from = $page * $limit;

        $response = $pnc->getRecordings([$this->plugnmeet->roomid], null, $from, $limit);

        if (!$response->getStatus()) {
            return $OUTPUT->notification($response->getMsg(), 'error');
        }

        $result = $response->getResult();
        if (!$result) {
             return $OUTPUT->notification(get_string('no_recordings', 'plugnmeet'), 'info');
        }

        $recordings = $result->getRecordingsList();

        if (empty($recordings)) {
            return $OUTPUT->notification(get_string('no_recordings', 'plugnmeet'), 'info');
        }

        $table = new \html_table();
        $table->head = [
            get_string('recording_id', 'plugnmeet'),
            get_string('recording_creation_time', 'plugnmeet'),
            get_string('room_creation_time', 'plugnmeet'),
            get_string('file_size', 'plugnmeet'),
            get_string('actions', 'plugnmeet'),
        ];

        foreach ($recordings as $recording) {
            $viewurl = new moodle_url(
                '/mod/plugnmeet/recordings.php',
                ['id' => $this->cm->id, 'record_id' => $recording->getRecordId(), 'page' => $page]
            );
            $actions = html_writer::link($viewurl, get_string('view', 'plugnmeet'), ['class' => 'btn btn-sm btn-info']);

            $table->data[] = [
                $recording->getRecordId(),
                userdate($recording->getCreationTime()),
                userdate($recording->getRoomCreationTime()),
                $this->format_mb($recording->getFileSize()),
                $actions,
            ];
        }

        $html = html_writer::table($table);

        // Pagination.
        if ($result->getTotalRecordings() > $limit) {
            $baseurl = new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $this->cm->id]);
            $html .= html_writer::div($OUTPUT->paging_bar($result->getTotalRecordings(), $page, $limit, $baseurl), 'mt-2');
        }

        return $html;
    }

    /**
     * Deletes a recording.
     *
     * @param string $recordingid
     */
    public function delete_recording($recordingid) {
        if (!has_capability('mod/plugnmeet:deleterecording', $this->context)) {
            return;
        }

        $page = optional_param('page', 0, PARAM_INT);
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $pnc->deleteRecording($recordingid);

        redirect(new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $this->cm->id, 'page' => $page]));
    }

    /**
     * Formats MB to readable size.
     *
     * @param float $mb
     * @param int $precision
     * @return string
     */
    private function format_mb($mb, $precision = 2) {
        if ($mb < 1024) {
            return round($mb, $precision) . ' MB';
        }
        $gb = $mb / 1024;
        return round($gb, $precision) . ' GB';
    }
}
