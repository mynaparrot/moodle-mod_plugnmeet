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

/**
 * External API for getting active room info.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_plugnmeet\external;

use external_api;
use external_function_parameters;
use external_value;
use context_module;
use dml_exception;
use core_external\external_single_structure;
use core_external\external_multiple_structure;
use Livekit\TrackSource;
use mod_plugnmeet\helper\plugNmeetConnect;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Class for getting active room info.
 */
class get_active_room_info extends external_api {
    /**
     * Parameters for the execute method.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'cmid' => new external_value(PARAM_INT, 'Course module ID', VALUE_REQUIRED),
        ]);
    }

    /**
     * Get active room info.
     * @param int $cmid The course module ID.
     * @return array
     * @throws dml_exception
     */
    public static function execute(int $cmid) {
        global $DB;

        $cm = get_coursemodule_from_id('plugnmeet', $cmid, 0, false, MUST_EXIST);
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);

        $config = get_config('mod_plugnmeet');
        $pnc = new plugNmeetConnect($config);
        $res = $pnc->getActiveRoomInfo($plugnmeet->roomid);

        $response = [];
        $participantsinfo = [];
        $totalwebcams = 0;
        $totalmics = 0;
        $totalscreenshares = 0;

        $response['status'] = $res->getStatus();
        $response['msg'] = $pnc->getResponseError($res, get_string('room_subject', 'mod_plugnmeet'));

        if ($res->getStatus() && $res->getRoom()) {
            $room = $res->getRoom();
            $info = $room->getRoomInfo();
            if ($info) {
                $response['room_info'] = [
                    'room_id' => $info->getRoomId(),
                    'is_recording' => $info->getIsRecording(),
                    'joined_participants' => $info->getJoinedParticipants(),
                    'creation_time' => $info->getCreationTime(),
                ];
            }

            $participants = $room->getParticipantsInfo();
            if ($participants) {
                foreach ($participants as $participant) {
                    $metadata = $participant->getMetadata();
                    $webcams = 0;
                    $mics = 0;
                    $screenshares = 0;

                    $tracks = $participant->getTracks();
                    foreach ($tracks as $track) {
                        if ($track->getSource() === TrackSource::CAMERA) {
                            $webcams++;
                        } else if ($track->getSource() === TrackSource::MICROPHONE) {
                            $mics++;
                        } else if ($track->getSource() === TrackSource::SCREEN_SHARE) {
                            $screenshares++;
                        }
                    }

                    $totalwebcams += $webcams;
                    $totalmics += $mics;
                    $totalscreenshares += $screenshares;

                    if (!empty($metadata)) {
                        $userinfo = json_decode($metadata);
                        $participantsinfo[] = [
                            'name' => $participant->getName(),
                            'user_id' => $participant->getIdentity(),
                            'is_admin' => $userinfo->is_admin,
                            'is_presenter' => $userinfo->is_presenter,
                            'joined_at' => $participant->getJoinedAt(),
                            'webcams' => $webcams,
                            'mics' => $mics,
                            'screenshares' => $screenshares,
                        ];
                    }
                }
            }
            if (isset($response['room_info'])) {
                $response['room_info']['total_webcams'] = $totalwebcams;
                $response['room_info']['total_mics'] = $totalmics;
                $response['room_info']['total_screen_shares'] = $totalscreenshares;
            }
        }
        $response['participants_info'] = $participantsinfo;

        return $response;
    }

    /**
     * Returns description of the execute method.
     * @return external_single_structure
     */
    public static function execute_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'Status of the request'),
            'msg' => new external_value(PARAM_TEXT, 'Status message', VALUE_OPTIONAL),
            'room_info' => new external_single_structure([
                'room_id' => new external_value(PARAM_TEXT, 'Room ID'),
                'is_recording' => new external_value(PARAM_BOOL, 'Is recording'),
                'joined_participants' => new external_value(PARAM_INT, 'Joined participants'),
                'creation_time' => new external_value(PARAM_INT, 'Creation time'),
                'total_webcams' => new external_value(PARAM_INT, 'Total webcams'),
                'total_mics' => new external_value(PARAM_INT, 'Total mics'),
                'total_screen_shares' => new external_value(PARAM_INT, 'Total screen shares'),
            ], 'Room info', VALUE_OPTIONAL),
            'participants_info' => new external_multiple_structure(
                new external_single_structure([
                    'name' => new external_value(PARAM_TEXT, 'Participant name'),
                    'user_id' => new external_value(PARAM_TEXT, 'Participant user ID'),
                    'is_admin' => new external_value(PARAM_BOOL, 'Is admin'),
                    'is_presenter' => new external_value(PARAM_BOOL, 'Is presenter'),
                    'joined_at' => new external_value(PARAM_INT, 'Joined at'),
                    'webcams' => new external_value(PARAM_INT, 'Number of webcams'),
                    'mics' => new external_value(PARAM_INT, 'Number of mics'),
                    'screenshares' => new external_value(PARAM_INT, 'Number of screen shares'),
                ]),
                'Participants info',
                VALUE_OPTIONAL
            ),
        ]);
    }
}
