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

namespace mod_plugnmeet\external;

use external_api;
use external_function_parameters;
use external_single_structure;
use external_value;
use mod_plugnmeet\helper\plugNmeetConnect;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Upload whiteboard file external API class.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class upload_whiteboard_file extends external_api {
    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'cmid' => new \external_value(PARAM_INT, 'The course module ID'),
            'itemid' => new \external_value(PARAM_INT, 'The draft file area ID'),
            'filename' => new \external_value(PARAM_RAW, 'The name of the file to upload'),
        ]);
    }

    /**
     * Uploads a file to the whiteboard.
     *
     * @param int $cmid The course module ID.
     * @param int $itemid The draft file area ID.
     * @param string $filename The name of the file to upload.
     * @return array
     * @throws \coding_exception
     * @throws \dml_exception
     * @throws \invalid_parameter_exception
     * @throws \moodle_exception
     */
    public static function execute($cmid, $itemid, $filename) {
        global $DB, $USER;

        $cm = get_coursemodule_from_id('plugnmeet', $cmid, 0, false, MUST_EXIST);
        $context = \context_module::instance($cm->id);
        self::validate_context($context);

        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);
        $config = get_config('mod_plugnmeet');

        // The file selected by the file picker is in the user's draft area.
        $usercontext = \context_user::instance($USER->id);
        $fs = get_file_storage();
        $file = $fs->get_file($usercontext->id, 'user', 'draft', $itemid, '/', $filename);

        if (!$file) {
            return [
                'status' => false,
                'msg' => get_string('file_not_found', 'mod_plugnmeet'),
            ];
        }

        // Create a temporary file to get a local path, as the API requires a path, not content.
        $tempdir = make_temp_directory('plugnmeet');
        $temppath = $tempdir . '/' . $file->get_filename();

        if (!$file->copy_content_to($temppath)) {
            fulldelete($tempdir);
            return [
                'status' => false,
                'msg' => get_string('error_file_copy', 'mod_plugnmeet'),
            ];
        }

        $pnm = new plugNmeetConnect($config);
        $res = $pnm->uploadWhiteboardFile($plugnmeet->roomid, ['document' => $temppath]);

        // Clean up the temporary file and directory.
        fulldelete($tempdir);

        // After successfully using the file, delete it from the draft area.
        $file->delete();

        return [
            'status' => $res->getStatus(),
            'msg' => $res->getMsg(), // use direct message here
        ];
    }

    /**
     * Returns description of method return values
     * @return external_single_structure
     */
    public static function execute_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'Status of the request'),
            'msg' => new external_value(PARAM_TEXT, 'Status message'),
        ]);
    }
}
