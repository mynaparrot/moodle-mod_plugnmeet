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

use context_course;
use context_coursecat;
use context_module;
use context_system;
use external_api;
use external_function_parameters;
use external_multiple_structure;
use external_single_structure;
use external_value;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Get the question categories that can be used as a poll source.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_question_categories extends external_api {
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
     * Gets the question categories of the course the given plugNmeet activity
     * belongs to, plus the shared categories of the system.
     *
     * Only the categories of contexts the user is allowed to browse the question
     * bank of are returned.
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
        $context = context_module::instance($cm->id);
        self::validate_context($context);

        // Enforce capability (services.php declarations are metadata only).
        require_capability('mod/plugnmeet:manage', $context);

        $course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);

        // Candidate contexts, course level first: the question banks of the
        // activities of this course, the course itself, its course category and
        // the system shared bank.
        // Hardcoded list of activity modules that use the question bank.
        // This is compatible with Moodle 4.5+ where question_bank_helper doesn't exist.
        $questionmods = ['quiz', 'lesson', 'feedback'];

        $candidatecontextids = [];
        $modinfo = get_fast_modinfo($course);
        foreach ($modinfo->cms as $coursemod) {
            if (!$coursemod->visible || !in_array($coursemod->modname, $questionmods, true)) {
                continue;
            }
            $candidatecontextids[] = (int) context_module::instance($coursemod->id)->id;
        }
        $candidatecontextids[] = (int) context_course::instance($course->id)->id;
        if (!empty($course->category)) {
            $candidatecontextids[] = (int) context_coursecat::instance($course->category)->id;
        }
        $candidatecontextids[] = (int) context_system::instance()->id;

        // Keep only the contexts the user can browse the question bank of.
        $contexts = [];
        $allowedcontextids = [];
        foreach (array_unique($candidatecontextids) as $candidatecontextid) {
            $candidatecontext = \core\context::instance_by_id($candidatecontextid, IGNORE_MISSING);
            if (!$candidatecontext) {
                continue;
            }
            if (!has_capability('moodle/question:viewall', $candidatecontext)) {
                continue;
            }
            $allowedcontextids[] = $candidatecontextid;
            $contexts[$candidatecontextid] = $candidatecontext;
        }

        if (empty($allowedcontextids)) {
            return [];
        }

        [$insql, $inparams] = $DB->get_in_or_equal($allowedcontextids, SQL_PARAMS_NAMED, 'ctx');
        $sql = "SELECT c.id, c.name, c.contextid, ctx.contextlevel
                  FROM {question_categories} c
                  JOIN {context} ctx ON ctx.id = c.contextid
                 WHERE c.parent <> 0 AND c.contextid {$insql}
              ORDER BY ctx.contextlevel DESC, c.sortorder, c.name ASC";

        $categories = [];
        foreach ($DB->get_records_sql($sql, $inparams) as $category) {
            $categories[] = [
                'id' => (int) $category->id,
                'name' => format_string($category->name, true, ['context' => $contexts[$category->contextid]]),
                'contextlevel' => (int) $category->contextlevel,
            ];
        }

        return $categories;
    }

    /**
     * Returns description of method return values
     * @return external_multiple_structure
     */
    public static function execute_returns() {
        return new external_multiple_structure(
            new external_single_structure([
                'id' => new external_value(PARAM_INT, 'The question category ID'),
                'name' => new external_value(PARAM_TEXT, 'The question category name'),
                'contextlevel' => new external_value(PARAM_INT, 'The context level of the question category'),
            ])
        );
    }
}
