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

use core\output\notification;
use mod_plugnmeet\helper\plugNmeetConnect;
use html_writer;
use mod_plugnmeet\helper\RoomHelper;
use moodle_url;
use cache;

defined('MOODLE_INTERNAL') || die();

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
     * @param \stdClass $cm
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
        $cache = cache::make('mod_plugnmeet', 'recording_info');

        $recordinginfores = $cache->get($recordid);

        if ($recordinginfores === false) {
            $recordinginfores = $pnc->getRecordingInfo($recordid);
            if ($recordinginfores->getStatus()) {
                $cache->set($recordid, $recordinginfores);
            }
        }

        if (!$recordinginfores || !$recordinginfores->getStatus()) {
            return $OUTPUT->notification($pnc->getResponseError($recordinginfores, get_string('recording', 'mod_plugnmeet')), 'error');
        }

        $info = $recordinginfores->getRecordingInfo();
        $roominfo = $recordinginfores->getRoomInfo();
        $page = optional_param('page', 0, PARAM_INT);

        $downloadres = $pnc->getRecordingDownloadLink($recordid);
        if (!$downloadres->getStatus()) {
            return $OUTPUT->notification($pnc->getResponseError($downloadres, get_string('recording', 'mod_plugnmeet')), 'error');
        }

        $serverurl = rtrim(get_config('mod_plugnmeet', 'plugnmeet_server_url'), '/');
        $downloadurl = $serverurl . '/download/recording/' . $downloadres->getToken();

        $context = [
            'can_download' => !empty($downloadurl) && has_capability('mod/plugnmeet:downloadrecordings', $this->context),
            'download_url' => $downloadurl,
            'can_delete' => has_capability('mod/plugnmeet:deleterecording', $this->context),
            'delete_url' => (new moodle_url('/mod/plugnmeet/recordings.php', [
                'id' => $this->cm->id,
                'action' => 'delete',
                'recording_id' => $recordid,
                'page' => $page,
            ]))->out(false),
            'back_url' => (new moodle_url('/mod/plugnmeet/recordings.php', [
                'id' => $this->cm->id,
                'page' => $page,
            ]))->out(false),
            'details' => [],
        ];

        $details = [
            get_string('recording_id', 'mod_plugnmeet') => $info->getRecordId(),
            get_string('room_id', 'mod_plugnmeet') => $info->getRoomId(),
            get_string('room_sid', 'mod_plugnmeet') => $info->getRoomSid(),
            get_string('file_size', 'mod_plugnmeet') => RoomHelper::format_mb($info->getFileSize()),
            get_string('recording_creation_time', 'mod_plugnmeet') => userdate($info->getCreationTime()),
        ];

        if ($roominfo) {
            $details[get_string('room_title', 'mod_plugnmeet')] = $roominfo->getRoomTitle();
            $details[get_string('session_started_at', 'mod_plugnmeet')] = userdate(strtotime($roominfo->getCreated()));
            $details[get_string('session_ended_at', 'mod_plugnmeet')] = userdate(strtotime($roominfo->getEnded()));
        } else {
            $details[get_string('room_creation_time', 'mod_plugnmeet')] = userdate($info->getRoomCreationTime());
        }

        foreach ($details as $label => $value) {
            $context['details'][] = ['label' => $label, 'value' => $value];
        }

        return $OUTPUT->render_from_template('mod_plugnmeet/recording_details', $context);
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

        $cache = cache::make('mod_plugnmeet', 'recordings_list');
        $cachekey = $this->plugnmeet->roomid . '_' . $from . '_' . $limit;

        $response = $cache->get($cachekey);

        if ($response === false) {
            $response = $pnc->getRecordings([$this->plugnmeet->roomid], null, $from, $limit);
            if ($response->getStatus()) {
                $cache->set($cachekey, $response);
            }
        }

        if (!$response || !$response->getStatus()) {
            return $OUTPUT->notification($pnc->getResponseError($response, get_string('recordings', 'mod_plugnmeet')), 'error');
        }

        $result = $response->getResult();
        if (!$result || empty($result->getRecordingsList())) {
             return $OUTPUT->notification(get_string('no_recordings', 'mod_plugnmeet'), 'info');
        }

        $recordings = $result->getRecordingsList();
        $context = [
            'recordings' => [],
            'paging_bar' => '',
        ];

        foreach ($recordings as $recording) {
            $context['recordings'][] = [
                'record_id' => $recording->getRecordId(),
                'creation_time' => userdate($recording->getCreationTime()),
                'room_creation_time' => userdate($recording->getRoomCreationTime()),
                'file_size' => RoomHelper::format_mb($recording->getFileSize()),
                'view_url' => (new moodle_url('/mod/plugnmeet/recordings.php', [
                    'id' => $this->cm->id,
                    'record_id' => $recording->getRecordId(),
                    'page' => $page,
                ]))->out(false),
            ];
        }

        if ($result->getTotalRecordings() > $limit) {
            $baseurl = new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $this->cm->id]);
            $context['paging_bar'] = $OUTPUT->paging_bar($result->getTotalRecordings(), $page, $limit, $baseurl);
        }

        return $OUTPUT->render_from_template('mod_plugnmeet/recordings_list', $context);
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

        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $res = $pnc->deleteRecording($recordingid);
        $msg = get_string('delete_success', 'mod_plugnmeet');
        $msgtype = notification::NOTIFY_SUCCESS;

        if (!$res->getStatus()) {
            $msg = $pnc->getResponseError($res, get_string('recording', 'mod_plugnmeet'));
            $msgtype = notification::NOTIFY_ERROR;
        }

        // Purge recording info and list cache.
        cache::make('mod_plugnmeet', 'recording_info')->delete($recordingid);
        cache::make('mod_plugnmeet', 'recordings_list')->purge();

        redirect(new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $this->cm->id]), $msg, null, $msgtype);
    }
}
