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
use mod_plugnmeet\helper\QuizPollHelper;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Get the quiz questions that can be converted into a plugNmeet poll.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class get_quiz_questions extends external_api {
    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'cmid' => new external_value(PARAM_INT, 'The plugNmeet course module ID'),
            'quizcmid' => new external_value(PARAM_INT, 'The quiz course module ID (required when source is quiz)', VALUE_DEFAULT, 0),
            'source' => new external_value(PARAM_ALPHAEXT, 'The question source: quiz or question_bank', VALUE_DEFAULT, 'quiz'),
            'categoryid' => new external_value(PARAM_INT, 'The question category ID (required when source is question_bank)', VALUE_DEFAULT, 0),
        ]);
    }

    /**
     * Gets the questions that can be converted into a plugNmeet poll.
     *
     * The questions can come from a quiz or directly from a question category.
     *
     * @param int $cmid The plugNmeet course module ID.
     * @param int $quizcmid The quiz course module ID (required when source is quiz).
     * @param string $source The question source: quiz or question_bank.
     * @param int $categoryid The question category ID (required when source is question_bank).
     * @return array
     * @throws \coding_exception
     * @throws \dml_exception
     * @throws \invalid_parameter_exception
     * @throws \moodle_exception
     * @throws \required_capability_exception
     */
    public static function execute($cmid, $quizcmid = 0, $source = 'quiz', $categoryid = 0) {
        $params = self::validate_parameters(self::execute_parameters(), [
            'cmid' => $cmid,
            'quizcmid' => $quizcmid,
            'source' => $source,
            'categoryid' => $categoryid,
        ]);

        $cm = get_coursemodule_from_id('plugnmeet', $params['cmid'], 0, false, MUST_EXIST);
        $context = \context_module::instance($cm->id);
        self::validate_context($context);

        // Enforce capability (services.php declarations are metadata only).
        require_capability('mod/plugnmeet:manage', $context);

        if ($params['source'] === 'question_bank') {
            if (empty($params['categoryid'])) {
                throw new \invalid_parameter_exception('categoryid is required when source is question_bank');
            }

            // The category must be usable as a poll source for this course.
            $categorycontext = QuizPollHelper::getValidCategoryContext((int) $params['categoryid'], (int) $cm->course);
            require_capability('moodle/question:viewall', $categorycontext);

            return QuizPollHelper::getValidQuestionsFromCategory((int) $params['categoryid']);
        }

        if ($params['source'] !== 'quiz') {
            throw new \invalid_parameter_exception('source must be either quiz or question_bank');
        }
        if (empty($params['quizcmid'])) {
            throw new \invalid_parameter_exception('quizcmid is required when source is quiz');
        }

        // The quiz must exist and belong to the same course.
        // MUST_EXIST also throws when the cmid is not a quiz module.
        $quizcm = get_coursemodule_from_id('quiz', $params['quizcmid'], $cm->course, false, MUST_EXIST);
        require_capability('mod/quiz:view', \context_module::instance($quizcm->id));

        return QuizPollHelper::getValidQuestionsFromQuiz((int) $quizcm->id);
    }

    /**
     * Returns description of method return values
     * @return external_multiple_structure
     */
    public static function execute_returns() {
        return new external_multiple_structure(
            new external_single_structure([
                'questionid' => new external_value(PARAM_INT, 'The question ID'),
                'name' => new external_value(PARAM_TEXT, 'The question name'),
                'qtype' => new external_value(PARAM_TEXT, 'The question type (multichoice or truefalse)'),
                'questiontext' => new external_value(PARAM_TEXT, 'The question text, stripped of HTML and truncated to 100 characters'),
            ])
        );
    }
}
