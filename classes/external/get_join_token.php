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

global $CFG;
require_once($CFG->libdir . '/externallib.php');

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
            'guestname' => new external_value(PARAM_TEXT, 'Guest name', VALUE_DEFAULT, ''),
            'expiry' => new external_value(PARAM_INT, 'Guest token expiry', VALUE_DEFAULT, 0),
            'sig' => new external_value(PARAM_ALPHANUM, 'Guest token signature', VALUE_DEFAULT, ''),
        ]);
    }

    /**
     * Get a join token for the current user.
     * @param int $cmid The course module ID.
     * @param string $guestname The guest name.
     * @param int $expiry Guest token expiry.
     * @param string $sig Guest token signature.
     * @return array
     * @throws \Exception
     */
    public static function execute(int $cmid, string $guestname = '', int $expiry = 0, string $sig = '') {
        global $DB, $USER;

        $cm = get_coursemodule_from_id('plugnmeet', $cmid, 0, false, MUST_EXIST);
        $context = context_module::instance($cm->id);
        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);
        $config = get_config('mod_plugnmeet');

        $isguest = false;
        if (!isloggedin() || isguestuser()) {
            $isguest = true;

            // 1. Global Security Check: Is guest access allowed site-wide?
            if (isset($config->allow_guest_global) && $config->allow_guest_global == 0) {
                return ['status' => false, 'msg' => get_string('guest_access_denied', 'mod_plugnmeet')];
            }

            if (empty($guestname) || empty($expiry) || empty($sig)) {
                return ['status' => false, 'msg' => get_string('invalid_guest_token', 'mod_plugnmeet')];
            }
            if (empty($plugnmeet->allow_guest)) {
                return ['status' => false, 'msg' => get_string('guest_access_denied', 'mod_plugnmeet')];
            }

            // 2. Validate Signature.
            $expectedsig = sha1($plugnmeet->guest_token . $expiry);
            if ($sig !== $expectedsig) {
                return ['status' => false, 'msg' => get_string('invalid_guest_token', 'mod_plugnmeet')];
            }

            // 3. Check Expiration.
            if (time() > $expiry) {
                return ['status' => false, 'msg' => get_string('guest_link_expired', 'mod_plugnmeet')];
            }
        } else {
            self::validate_context($context);
            require_capability('mod/plugnmeet:view', $context);
        }

        // Check availability.
        $timenow = time();
        $isadmin = !$isguest && has_capability('mod/plugnmeet:manage', $context);

        if ($plugnmeet->available && $timenow < $plugnmeet->available && !$isadmin) {
            return [
                'status' => false,
                'msg' => get_string('session_not_started_yet', 'mod_plugnmeet'),
            ];
        }

        if ($plugnmeet->deadline && $timenow > $plugnmeet->deadline) {
            return [
                'status' => false,
                'msg' => get_string('session_ended', 'mod_plugnmeet'),
            ];
        }

        $connect = new plugNmeetConnect($config);

        // 1. Check if room is active.
        $isactiveres = $connect->isRoomActive($plugnmeet->roomid);
        if (!$isactiveres->getStatus()) {
            return [
                'status' => false,
                'msg' => $connect->getResponseError($isactiveres, get_string('room_subject', 'mod_plugnmeet')),
            ];
        }

        if (!$isactiveres->getIsActive()) {
            // Room is not active.
            if ($isguest) {
                return [
                    'status' => false,
                    'msg' => get_string('moderator_not_joined', 'mod_plugnmeet'),
                ];
            }

            if (!$isadmin) {
                // Not a moderator, check if moderator must join first.
                $roommetadata = json_decode($plugnmeet->roommetadata, true) ?: [];
                $moderatorjoinfirst = $roommetadata['room_features']['moderator_join_first'] ?? 0;

                if ($moderatorjoinfirst) {
                    return [
                        'status' => false,
                        'msg' => get_string('moderator_not_joined', 'mod_plugnmeet'),
                    ];
                }
            }

            // Room is not active but user is admin or moderator_join_first is disabled.
            // Create the room first.
            $createres = create_room::execute($plugnmeet->id);
            if (!$createres['status']) {
                return $createres;
            }
        }

        // 2. Get join token.
        if ($isguest) {
            $name = $guestname;
            // Generate userId using a hash of the session ID for uniqueness within the browser session.
            $userid = 'guest_' . session_id();
        } else {
            $name = fullname($USER);
            $userid = (string)$USER->id;
        }

        $res = $connect->getJoinToken($plugnmeet->roomid, $name, $userid, $isadmin);

        $result = ['status' => $res->getStatus(), 'msg' => $connect->getResponseError($res, get_string('room_subject', 'mod_plugnmeet'))];
        if ($result['status']) {
            // Generate meeting URL.
            $serverurl = rtrim($config->plugnmeet_server_url, '/');
            if ($config->client_load === "1") {
                $result['url'] = (new \moodle_url('/mod/plugnmeet/conference.php', [
                    'access_token' => $res->getToken(),
                    'id' => $cm->id,
                ]))->out(false);
            } else {
                $result['url'] = $serverurl . '/?access_token=' . $res->getToken();
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
