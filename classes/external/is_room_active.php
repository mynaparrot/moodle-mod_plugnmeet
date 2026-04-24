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
 * External API for checking if a room is active.
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
use mod_plugnmeet\helper\RoomHelper;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Class for checking if a room is active.
 */
class is_room_active extends external_api {
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
     * Check if a room is active.
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
        $config = get_config('mod_plugnmeet');
        $connect = new plugNmeetConnect($config);
        $res = $connect->isRoomActive($instance->roomid);
        if (!$res->getStatus()) {
            RoomHelper::write_log_event($instance->roomid, 'is_room_active', $res->getMsg());
        }

        return ['status' => $res->getStatus(), 'is_active' => $res->getIsActive(), 'msg' => $connect->getResponseError($res, get_string('room_subject', 'mod_plugnmeet'))];
    }

    /**
     * Returns description of the execute method.
     * @return external_single_structure
     */
    public static function execute_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'Status of the request'),
            'is_active' => new external_value(PARAM_BOOL, 'Whether the room is active'),
            'msg' => new external_value(PARAM_TEXT, 'Status message', VALUE_OPTIONAL),
        ]);
    }
}
