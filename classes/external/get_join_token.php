<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be website,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External API for getting a join token.
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
use core_external\external_single_structure;
use mod_plugnmeet\helper\plugNmeetConnect;

defined('MOODLE_INTERNAL') || die();

require_once($GLOBALS['CFG']->libdir . '/externallib.php');

/**
 * Class for getting a join token external API.
 */
class get_join_token extends external_api {

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
     * Get a join token for the current user.
     * @param int $cmid The course module ID.
     * @return array
     * @throws \Exception
     */
    public static function execute(int $cmid) {
        global $DB, $USER;

        $cm = get_coursemodule_from_id('plugnmeet', $cmid, 0, false, MUST_EXIST);
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);

        // Check availability.
        $timenow = time();
        $isadmin = has_capability('mod/plugnmeet:manage', $context);

        if ($plugnmeet->available && $timenow < $plugnmeet->available && !$isadmin) {
            return [
                'status' => false,
                'msg' => get_string('session_not_started_yet', 'mod_plugnmeet')
            ];
        }

        if ($plugnmeet->deadline && $timenow > $plugnmeet->deadline) {
            return [
                'status' => false,
                'msg' => get_string('session_ended', 'mod_plugnmeet')
            ];
        }

        $config = get_config('mod_plugnmeet');
        $connect = new plugNmeetConnect($config);

        // 1. Check if room is active.
        $is_active_res = $connect->isRoomActive($plugnmeet->roomid);
        if (!$is_active_res->getStatus()) {
            return [
                'status' => false,
                'msg' => $is_active_res->getMsg()
            ];
        }

        if (!$is_active_res->getIsActive()) {
            // Room is not active.
            if (!$isadmin) {
                // Not a moderator, check if moderator must join first.
                $roommetadata = json_decode($plugnmeet->roommetadata, true) ?: [];
                $moderator_join_first = $roommetadata['room_features']['moderator_join_first'] ?? 0;

                if ($moderator_join_first) {
                    return [
                        'status' => false,
                        'msg' => get_string('moderator_not_joined', 'mod_plugnmeet')
                    ];
                }
            }

            // Room is not active but user is admin or moderator_join_first is disabled.
            // Create the room first.
            $create_res = create_room::execute($plugnmeet->id);
            if (!$create_res['status']) {
                return $create_res;
            }
        }

        // 2. Get join token.
        $name = fullname($USER);
        $res = $connect->getJoinToken($plugnmeet->roomid, $name, (string)$USER->id, $isadmin);

        $result = ['status' => $res->getStatus(), 'msg' => $res->getMsg()];
        if ($result['status']) {
            // Generate meeting URL.
            $server_url = rtrim($config->plugnmeet_server_url, '/');
            if ($config->client_load === "1") {
                $result['url'] = (new \moodle_url('/mod/plugnmeet/conference.php', [
                    'access_token' => $res->getToken(),
                    'id' => $cm->id
                ]))->out(false);
            } else {
                $result['url'] = $server_url . '/?access_token=' . $res->getToken();
            }
        }

        return $result;
    }

    /**
     * Returns description of the execute method.
     * @return external_single_structure
     */
    public static function execute_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'Status of the request'),
            'msg' => new external_value(PARAM_TEXT, 'Status message'),
            'url' => new external_value(PARAM_RAW, 'Meeting URL', VALUE_OPTIONAL),
        ]);
    }
}
