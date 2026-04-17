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
 * External API for ending a room.
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
 * Class for ending a room external API.
 */
class end_room extends external_api {
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
     * End a room.
     * @param int $cmid The course module ID.
     * @return array
     * @throws dml_exception
     */
    public static function execute(int $cmid) {
        global $DB;

        $cm = get_coursemodule_from_id('plugnmeet', $cmid, 0, false, MUST_EXIST);
        $context = context_module::instance($cm->id);
        self::validate_context($context);
        require_capability('mod/plugnmeet:manage', $context);

        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);
        $config = get_config('mod_plugnmeet');

        $connect = new plugNmeetConnect($config);
        $res = $connect->endRoom($plugnmeet->roomid);

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
