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
use mod_plugnmeet\helper\plugNmeetConnect;

defined('MOODLE_INTERNAL') || die();

require_once($GLOBALS['CFG']->libdir . '/externallib.php');

class get_active_room_info extends external_api {

    /**
     * Parameters for the execute method.
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
        $participants_info = [];

        if ($res->getStatus() && $res->getRoom()) {
            $room = $res->getRoom();
            $info = $room->getRoomInfo();
            if ($info) {
                $response['room_info'] = [
                    'room_id' => $info->getRoomId(),
                    'is_recording' =>$info->getIsRecording(),
                    'joined_participants' => $info->getJoinedParticipants(),
                    'creation_time' => $info->getCreationTime(),
                ];
            }

            $participants = $room->getParticipantsInfo();
            if ($participants) {
                foreach ($participants as $participant) {
                    $metadata = $participant->getMetadata();
                    if (!empty($metadata)) {
                        $userInfo = json_decode($metadata);
                        $participants_info[] = [
                            'name' => $participant->getName(),
                            'user_id' => $participant->getIdentity(),
                            'is_admin' => $userInfo->is_admin,
                            'is_presenter' => $userInfo->is_presenter,
                            'joined_at' => $participant->getJoinedAt(),
                        ];
                    }
                }
            }
        }
        $response['participants_info'] = $participants_info;

        return $response;
    }

    /**
     * Returns description of the execute method.
     * @return external_single_structure
     */
    public static function execute_returns() {
        return new external_single_structure([
            'room_info' => new external_single_structure([
                'room_id' => new external_value(PARAM_TEXT, 'Room ID'),
                'is_recording' => new external_value(PARAM_BOOL, 'Is recording'),
                'joined_participants' => new external_value(PARAM_INT, 'Joined participants'),
                'creation_time' => new external_value(PARAM_INT, 'Creation time'),
            ], 'Room info', VALUE_OPTIONAL),
            'participants_info' => new external_multiple_structure(
                new external_single_structure([
                    'name' => new external_value(PARAM_TEXT, 'Participant name'),
                    'user_id' => new external_value(PARAM_TEXT, 'Participant user ID'),
                    'is_admin' => new external_value(PARAM_BOOL, 'Is admin'),
                    'is_presenter' => new external_value(PARAM_BOOL, 'Is presenter'),
                    'joined_at' => new external_value(PARAM_INT, 'Joined at'),
                ]), 'Participants info', VALUE_OPTIONAL),
        ]);
    }
}
