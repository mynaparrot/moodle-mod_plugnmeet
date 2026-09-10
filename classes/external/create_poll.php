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
use Mynaparrot\PlugnmeetProto\CreatePollOptions;
use Mynaparrot\PlugnmeetProto\CreatePollReq;
use mod_plugnmeet\helper\plugNmeetConnect;
use mod_plugnmeet\helper\QuizPollHelper;
use qtype_multichoice_single_question;
use qtype_truefalse_question;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Create a plugNmeet poll from a Moodle quiz question.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class create_poll extends external_api {
    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'cmid' => new external_value(PARAM_INT, 'The plugNmeet course module ID'),
            'quizcmid' => new external_value(
                PARAM_INT,
                'The quiz course module ID (required when source is quiz)',
                VALUE_DEFAULT,
                0
            ),
            'source' => new external_value(PARAM_ALPHAEXT, 'The question source: quiz or question_bank', VALUE_DEFAULT, 'quiz'),
            'categoryid' => new external_value(
                PARAM_INT,
                'The question category ID (required when source is question_bank)',
                VALUE_DEFAULT,
                0
            ),
            'questionid' => new external_value(PARAM_INT, 'The question ID'),
            'isquiz' => new external_value(PARAM_BOOL, 'Hide correct answers during the poll', VALUE_DEFAULT, false),
            'isanonymous' => new external_value(PARAM_BOOL, 'Hide the identity of the voters', VALUE_DEFAULT, false),
            'duration' => new external_value(PARAM_INT, 'Auto-close duration in seconds (0 = no limit)', VALUE_DEFAULT, 0),
        ]);
    }

    /**
     * Creates a poll in the active plugNmeet room from a quiz or question bank question.
     *
     * @param int $cmid The plugNmeet course module ID.
     * @param int $quizcmid The quiz course module ID (required when source is quiz).
     * @param string $source The question source: quiz or question_bank.
     * @param int $categoryid The question category ID (required when source is question_bank).
     * @param int $questionid The question ID.
     * @param bool $isquiz Whether correct answers should be hidden during the poll.
     * @param bool $isanonymous Whether the votes should be anonymous.
     * @param int $duration Auto-close duration in seconds (0 = no limit).
     * @return array
     * @throws \dml_exception
     * @throws \invalid_parameter_exception
     * @throws \moodle_exception
     * @throws \required_capability_exception
     */
    public static function execute(
        $cmid,
        $quizcmid = 0,
        $source = 'quiz',
        $categoryid = 0,
        $questionid = 0,
        $isquiz = false,
        $isanonymous = false,
        $duration = 0
    ) {
        global $DB, $USER;

        $params = self::validate_parameters(self::execute_parameters(), [
            'cmid' => $cmid,
            'quizcmid' => $quizcmid,
            'source' => $source,
            'categoryid' => $categoryid,
            'questionid' => $questionid,
            'isquiz' => $isquiz,
            'isanonymous' => $isanonymous,
            'duration' => $duration,
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
            $categorycontext = QuizPollHelper::get_valid_category_context((int) $params['categoryid'], (int) $cm->course);
            require_capability('moodle/question:viewall', $categorycontext);

            $validquestions = QuizPollHelper::get_valid_questions_from_category((int) $params['categoryid']);
        } else if ($params['source'] === 'quiz') {
            if (empty($params['quizcmid'])) {
                throw new \invalid_parameter_exception('quizcmid is required when source is quiz');
            }

            // The quiz must exist and belong to the same course.
            $quizcm = get_coursemodule_from_id('quiz', $params['quizcmid'], $cm->course, false, MUST_EXIST);
            require_capability('mod/quiz:view', \context_module::instance($quizcm->id));

            $validquestions = QuizPollHelper::get_valid_questions_from_quiz((int) $quizcm->id);
        } else {
            throw new \invalid_parameter_exception('source must be either quiz or question_bank');
        }

        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);
        $config = get_config('mod_plugnmeet');

        // The polls feature must be enabled for this room.
        $metadata = json_decode($plugnmeet->roommetadata ?? '', true);
        if (empty($metadata['polls_features']['is_allow'])) {
            return [
                'status' => false,
                'msg' => get_string('polls_not_allowed', 'mod_plugnmeet'),
            ];
        }

        // The question must be one of the poll convertible questions of the selected source.
        $validids = array_column($validquestions, 'questionid');
        if (!in_array((int) $params['questionid'], array_map('intval', $validids), true)) {
            return [
                'status' => false,
                'msg' => get_string('poll_invalid_question', 'mod_plugnmeet'),
            ];
        }

        $pnm = new plugNmeetConnect($config);

        // The room must be active to create a poll.
        try {
            $isactiveres = $pnm->isRoomActive($plugnmeet->roomid);
        } catch (\Exception $e) {
            return [
                'status' => false,
                'msg' => html_entity_decode(strip_tags($e->getMessage())),
            ];
        }
        if (!$isactiveres->getStatus() || !$isactiveres->getIsActive()) {
            return [
                'status' => false,
                'msg' => get_string('room_not_active', 'mod_plugnmeet'),
            ];
        }

        // Load and validate the question.
        $question = \question_bank::load_question((int) $params['questionid'], false);
        if (
            !$question instanceof qtype_multichoice_single_question
            && !$question instanceof qtype_truefalse_question
        ) {
            return [
                'status' => false,
                'msg' => get_string('poll_invalid_question', 'mod_plugnmeet'),
            ];
        }

        try {
            $polldata = QuizPollHelper::transform_question_to_poll($question, (bool) $params['isquiz']);
        } catch (\moodle_exception $e) {
            return [
                'status' => false,
                'msg' => $e->getMessage(),
            ];
        }

        // The plugNmeet server accepts at most one hour as duration.
        $duration = min(max(0, (int) $params['duration']), 3600);

        $req = new CreatePollReq();
        $req->setRoomId($plugnmeet->roomid);
        $req->setUserId((string) $USER->id);
        $req->setQuestion($polldata['question']);
        $req->setIsQuiz((bool) $params['isquiz']);
        $req->setIsAnonymous((bool) $params['isanonymous']);
        $req->setIsMultiple($polldata['is_multiple']);
        $req->setDuration($duration);

        $options = [];
        foreach ($polldata['options'] as $opt) {
            $option = new CreatePollOptions();
            $option->setId((int) $opt['id']);
            $option->setText((string) $opt['text']);
            $option->setIsCorrect((bool) $opt['is_correct']);
            $options[] = $option;
        }
        $req->setOptions($options);

        try {
            $res = $pnm->createPoll($req);
        } catch (\Exception $e) {
            return [
                'status' => false,
                'msg' => html_entity_decode(strip_tags($e->getMessage())),
            ];
        }

        return [
            'status' => $res->getStatus(),
            'msg' => $res->getMsg(),
            'poll_id' => $res->getPollId(),
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
            'poll_id' => new external_value(PARAM_TEXT, 'The ID of the created poll', VALUE_OPTIONAL),
        ]);
    }
}
