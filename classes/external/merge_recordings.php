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
 * External API for merging recordings.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_plugnmeet\external;

use core_external\external_single_structure;
use external_api;
use external_function_parameters;
use external_value;
use mod_plugnmeet\helper\plugNmeetConnect;
use Mynaparrot\PlugnmeetProto\MergeRecordingsByIds;
use Mynaparrot\PlugnmeetProto\MergeRecordingsReq;
use context_module;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Class for merging recordings.
 */
class merge_recordings extends external_api {
    /**
     * Parameters for the execute method.
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'instanceid' => new external_value(PARAM_INT, 'Course module ID', VALUE_REQUIRED),
            'record_ids' => new external_value(PARAM_RAW, 'Comma-separated recording IDs'),
        ]);
    }

    /**
     * execute merging recordings.
     * @param $instanceid
     * @param $recordids
     * @return array|true[]
     * @throws \dml_exception
     */
    public static function execute($instanceid, $recordids) {
        global $DB;

        $cm = get_coursemodule_from_id('plugnmeet', $instanceid, 0, false, MUST_EXIST);
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        $instance = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));

        $byid = new MergeRecordingsByIds();
        $byid->setRoomId($instance->roomid);
        $byid->setRecordingIds(explode(',', $recordids));

        $req = new MergeRecordingsReq();
        $req->setByIds($byid);

        $res = $pnc->mergeRecordings($req);
        if (!$res->getStatus()) {
            return [
                'status' => false,
                'error' => $pnc->getResponseError($res, get_string('recording', 'mod_plugnmeet')),
            ];
        }

        return [
            'status' => true,
        ];
    }

    /**
     * Returns description of the execute method.
     * @return external_single_structure
     */
    public static function execute_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'Status'),
            'error' => new external_value(PARAM_TEXT, 'Error message', VALUE_OPTIONAL),
        ]);
    }
}
