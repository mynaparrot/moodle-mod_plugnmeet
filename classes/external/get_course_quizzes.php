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
use external_multiple_structure;
use external_single_structure;
use external_value;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Get the quizzes of the course of a plugNmeet activity.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_course_quizzes extends external_api {
    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'cmid' => new external_value(PARAM_INT, 'The plugNmeet course module ID'),
        ]);
    }

    /**
     * Gets the visible quizzes of the course the given plugNmeet activity belongs to.
     *
     * @param int $cmid The plugNmeet course module ID.
     * @return array
     * @throws \dml_exception
     * @throws \invalid_parameter_exception
     * @throws \moodle_exception
     * @throws \required_capability_exception
     */
    public static function execute($cmid) {
        global $DB;

        $params = self::validate_parameters(self::execute_parameters(), [
            'cmid' => $cmid,
        ]);

        $cm = get_coursemodule_from_id('plugnmeet', $params['cmid'], 0, false, MUST_EXIST);
        $context = \context_module::instance($cm->id);
        self::validate_context($context);

        // Enforce capability (services.php declarations are metadata only).
        require_capability('mod/plugnmeet:manage', $context);

        $course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);

        $quizzes = [];
        $modinfo = get_fast_modinfo($course);
        if (isset($modinfo->instances['quiz'])) {
            foreach ($modinfo->instances['quiz'] as $quizcm) {
                if (!$quizcm->visible) {
                    continue;
                }
                $quizzes[] = [
                    'cmid' => (int) $quizcm->id,
                    'name' => format_string($quizcm->name, true, ['context' => $quizcm->context]),
                ];
            }
        }

        usort($quizzes, function ($a, $b) {
            return strnatcasecmp($a['name'], $b['name']);
        });

        return $quizzes;
    }

    /**
     * Returns description of method return values
     * @return external_multiple_structure
     */
    public static function execute_returns() {
        return new external_multiple_structure(
            new external_single_structure([
                'cmid' => new external_value(PARAM_INT, 'The quiz course module ID'),
                'name' => new external_value(PARAM_TEXT, 'The quiz name'),
            ])
        );
    }
}
