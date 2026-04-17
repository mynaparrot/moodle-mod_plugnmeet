<?php

namespace mod_plugnmeet\controller;

use mod_plugnmeet\helper\plugNmeetConnect;
use html_writer;
use moodle_url;

defined('MOODLE_INTERNAL') || die();

/**
 * Controller class for handling room recordings.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class recordings_controller
{
    private $cm;
    private $course;
    private $plugnmeet;
    private $context;

    public function __construct($cm, $course, $plugnmeet)
    {
        $this->cm = $cm;
        $this->course = $course;
        $this->plugnmeet = $plugnmeet;
        $this->context = \context_module::instance($cm->id);
    }

    public function get_page_data()
    {
        $record_id = optional_param('record_id', '', PARAM_TEXT);

        if (!empty($record_id)) {
            return [
                'content' => $this->render_single_recording($record_id),
            ];
        }

        return [
            'content' => $this->render_recordings_list(),
        ];
    }

    private function render_single_recording($record_id)
    {
        global $OUTPUT;

        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $recording_info_res = $pnc->getRecordingInfo($record_id);

        if (!$recording_info_res->getStatus()) {
            return $OUTPUT->notification($recording_info_res->getMsg(), 'error');
        }

        $info = $recording_info_res->getRecordingInfo();
        $room_info = $recording_info_res->getRoomInfo();

        $download_res = $pnc->getRecordingDownloadLink($record_id);

        if (!$download_res->getStatus()) {
            return $OUTPUT->notification($download_res->getMsg(), 'error');
        }

        $token = $download_res->getToken();
        $server_url = rtrim(get_config('mod_plugnmeet', 'plugnmeet_server_url'), '/');
        $download_url = $server_url . '/download/recording/' . $token;

        $page = optional_param('page', 0, PARAM_INT);

        $header_html = html_writer::start_div('d-flex justify-content-between align-items-center mb-3');
        $header_html .= html_writer::tag('h3', get_string('recording_details', 'plugnmeet'), ['class' => 'm-0']);

        $buttons = html_writer::start_div('btn-group');
        $buttons .= html_writer::link($download_url, get_string('download', 'plugnmeet'), ['class' => 'btn btn-primary', 'target' => '_blank']);

        if (has_capability('mod/plugnmeet:deleterecording', $this->context)) {
            $delete_url = new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $this->cm->id, 'action' => 'delete', 'recording_id' => $record_id, 'page' => $page]);
            $buttons .= html_writer::link($delete_url, get_string('delete', 'plugnmeet'), [
                'class' => 'btn btn-danger',
                'onclick' => 'return confirm("' . get_string('delete_confirm', 'plugnmeet') . '");'
            ]);
        }

        $buttons .= html_writer::link(new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $this->cm->id, 'page' => $page]), get_string('back_to_list', 'plugnmeet'), ['class' => 'btn btn-secondary']);
        $buttons .= html_writer::end_div();

        $header_html .= $buttons;
        $header_html .= html_writer::end_div();

        $html = $header_html;

        $video_html = html_writer::start_tag('video', [
            'controls' => 'controls',
            'width' => '100%',
            'height' => 'auto',
            'style' => 'max-width: 800px; display: block; margin-bottom: 20px;'
        ]);
        $video_html .= html_writer::empty_tag('source', ['src' => $download_url, 'type' => 'video/mp4']);
        $video_html .= get_string('browser_not_support_video', 'plugnmeet');
        $video_html .= html_writer::end_tag('video');

        $html .= $video_html;

        $details = [
            get_string('recording_id', 'plugnmeet') => $info->getRecordId(),
            get_string('room_id', 'plugnmeet') => $info->getRoomId(),
            get_string('room_sid', 'plugnmeet') => $info->getRoomSid(),
            get_string('file_size', 'plugnmeet') => $this->format_mb($info->getFileSize()),
            get_string('recording_creation_time', 'plugnmeet') => userdate($info->getCreationTime()),
        ];

        if ($room_info) {
            $details[get_string('room_title', 'plugnmeet')] = $room_info->getRoomTitle();
            $details[get_string('session_started_at', 'plugnmeet')] = userdate(strtotime($room_info->getCreated()));
            $details[get_string('session_ended_at', 'plugnmeet')] = userdate(strtotime($room_info->getEnded()));
        }else{
            $details[get_string('room_creation_time', 'plugnmeet')] = userdate($info->getRoomCreationTime());
        }

        $table = new \html_table();
        foreach ($details as $label => $value) {
            $table->data[] = [html_writer::tag('strong', $label), $value];
        }
        $html .= html_writer::table($table);

        return $html;
    }

    private function render_recordings_list()
    {
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
            $view_url = new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $this->cm->id, 'record_id' => $recording->getRecordId(), 'page' => $page]);
            $actions = html_writer::link($view_url, get_string('view', 'plugnmeet'), ['class' => 'btn btn-sm btn-info']);

            $table->data[] = [
                $recording->getRecordId(),
                userdate($recording->getCreationTime()),
                userdate($recording->getRoomCreationTime()),
                $this->format_mb($recording->getFileSize()),
                $actions,
            ];
        }

        $html = html_writer::table($table);

        // Pagination
        if ($result->getTotalRecordings() > $limit) {
            $base_url = new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $this->cm->id]);
            $html .= html_writer::div($OUTPUT->paging_bar($result->getTotalRecordings(), $page, $limit, $base_url), 'mt-2');
        }

        return $html;
    }

    public function delete_recording($recording_id)
    {
        if (!has_capability('mod/plugnmeet:deleterecording', $this->context)) {
            return;
        }

        $page = optional_param('page', 0, PARAM_INT);
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $pnc->deleteRecording($recording_id);

        redirect(new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $this->cm->id, 'page' => $page]));
    }

    private function format_mb($mb, $precision = 2)
    {
        if ($mb < 1024) {
            return round($mb, $precision) . ' MB';
        }
        $gb = $mb / 1024;
        return round($gb, $precision) . ' GB';
    }
}
