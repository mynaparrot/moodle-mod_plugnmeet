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
 * External API for creating a room.
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
use mod_plugnmeet\helper\plugNmeetConnect;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Class for creating a room external API.
 */
class create_room extends external_api {
    /**
     * Parameters for the execute method.
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'instanceid' => new external_value(PARAM_INT, 'Course module ID', VALUE_REQUIRED),
        ]);
    }

    /**
     * Create a new room.
     * @param int $instanceid The course module ID.
     * @return array
     * @throws dml_exception
     */
    public static function execute(int $instanceid) {
        global $DB;

        $cm = get_coursemodule_from_instance('plugnmeet', $instanceid, 0, false, MUST_EXIST);
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        $instance = $DB->get_record('plugnmeet', ['id' => $instanceid], '*', MUST_EXIST);

        // Check availability.
        $timenow = time();
        $canmanage = has_capability('mod/plugnmeet:manage', $context);

        if ($instance->available && $timenow < $instance->available && !$canmanage) {
            return [
                'status' => false,
                'msg' => get_string('session_not_started_yet', 'mod_plugnmeet'),
            ];
        }

        if ($instance->deadline && $timenow > $instance->deadline) {
            return [
                'status' => false,
                'msg' => get_string('session_ended', 'mod_plugnmeet'),
            ];
        }

        $roommetadata = json_decode($instance->roommetadata, true) ?: [];
        $config = get_config('mod_plugnmeet');

        if (!empty($config->copyright_display)) {
            $roommetadata["copyright_conf"] = [
                "display" => (bool)$config->copyright_display,
                "text" => $config->copyright_text,
            ];
        }

        $connect = new plugNmeetConnect($config);
        $logouturl = (new \moodle_url('/mod/plugnmeet/view.php', ['id' => $cm->id, 'returned' => 'true']))->out(false);
        $webhookurl = (new \moodle_url('/mod/plugnmeet/webhook.php', ['id' => $instanceid]))->out(false);
        $extradata = [
            "platform" => "moodle",
            "php-version" => phpversion(),
            "plugin-version" => $config->version,
            "activity" => json_encode(["id" => $cm->id, "course" => $cm->course]),
        ];

        $res = $connect->createRoom(
            $instance->roomid,
            $instance->name,
            $roommetadata,
            $instance->welcomemessage,
            $logouturl,
            $webhookurl,
            $instance->maxparticipants,
            0,
            $extradata
        );

        return ['status' => $res->getStatus(), 'msg' => $res->getMsg()];
    }

    /**
     * Returns description of the execute method.
     * @return external_single_structure
     */
    public static function execute_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'Status of the request'),
            'msg' => new external_value(PARAM_TEXT, 'Status message'),
        ]);
    }
}
