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

namespace mod_plugnmeet\helper;

use mod_quiz\question\bank\qbank_helper;
use mod_quiz\quiz_settings;
use qtype_multichoice_single_question;
use qtype_truefalse_question;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/engine/lib.php');

/**
 * Helper to convert Moodle quiz questions into plugNmeet polls.
 *
 * Only single-answer multiple choice and true/false questions are supported,
 * because plugNmeet polls only support single-answer polls.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class QuizPollHelper {
    /**
     * Get the questions of a quiz that can be converted into a plugNmeet poll.
     *
     * @param int $quizcmid The course module ID of the quiz.
     * @return array List of questions with questionid, name, qtype and questiontext.
     * @throws \moodle_exception If the quiz module does not exist.
     */
    public static function get_valid_questions_from_quiz(int $quizcmid): array {
        $quizsettings = quiz_settings::create_for_cmid($quizcmid);
        $structure = qbank_helper::get_question_structure(
            $quizsettings->get_quizid(),
            $quizsettings->get_context()
        );

        $valid = [];
        foreach ($structure as $slot) {
            // Random question slots and slots with missing questions cannot be used.
            if (empty($slot->qtype) || in_array($slot->qtype, ['random', 'missingtype'], true)) {
                continue;
            }
            // Random/missing slots store a placeholder string instead of a question id.
            if (!isset($slot->questionid) || !is_number($slot->questionid)) {
                continue;
            }
            if (!in_array($slot->qtype, ['multichoice', 'truefalse'], true)) {
                continue;
            }

            $question = \question_bank::load_question((int) $slot->questionid, false);
            if (!$question instanceof qtype_multichoice_single_question
                    && !$question instanceof qtype_truefalse_question) {
                // Multiple answers multichoice questions are not supported by polls.
                continue;
            }

            $valid[] = [
                'questionid' => (int) $question->id,
                'name' => self::strip_html($question->name),
                'qtype' => $slot->qtype,
                'questiontext' => shorten_text(
                    self::strip_html($question->questiontext, $question->questiontextformat),
                    100
                ),
            ];
        }

        return $valid;
    }

    /**
     * Get the context of a question category, verifying that it can be used as
     * a poll source for the given course.
     *
     * @param int $categoryid The question category ID.
     * @param int $courseid The course the plugNmeet activity belongs to.
     * @return \core\context The context of the question category.
     * @throws \dml_exception If the category or its related records do not exist.
     * @throws \moodle_exception If the category cannot be used as a poll source for the course.
     */
    public static function get_valid_category_context(int $categoryid, int $courseid): \core\context {
        global $DB;

        $category = $DB->get_record('question_categories', ['id' => $categoryid], '*', MUST_EXIST);
        $context = \core\context::instance_by_id((int) $category->contextid, IGNORE_MISSING);
        if (!$context) {
            throw new \moodle_exception('invalid_question_category', 'mod_plugnmeet');
        }

        // The category must belong to the course (one of its question banks or
        // the course itself), to the category of the course, or to the system.
        switch ($context->contextlevel) {
            case CONTEXT_COURSE:
                if ((int) $context->instanceid !== $courseid) {
                    throw new \moodle_exception('invalid_question_category', 'mod_plugnmeet');
                }
                break;
            case CONTEXT_COURSECAT:
                $coursecategoryid = (int) $DB->get_field('course', 'category', ['id' => $courseid], MUST_EXIST);
                if ((int) $context->instanceid !== $coursecategoryid) {
                    throw new \moodle_exception('invalid_question_category', 'mod_plugnmeet');
                }
                break;
            case CONTEXT_MODULE:
                $modcourseid = (int) $DB->get_field('course_modules', 'course', ['id' => $context->instanceid], MUST_EXIST);
                if ($modcourseid !== $courseid) {
                    throw new \moodle_exception('invalid_question_category', 'mod_plugnmeet');
                }
                break;
            case CONTEXT_SYSTEM:
                // The shared system bank: access is controlled by capability.
                break;
            default:
                throw new \moodle_exception('invalid_question_category', 'mod_plugnmeet');
        }

        return $context;
    }

    /**
     * Get the questions of a question category that can be converted into a plugNmeet poll.
     *
     * Only the latest ready version of every question of the category is considered.
     *
     * @param int $categoryid The question category ID.
     * @return array List of questions with questionid, name, qtype and questiontext.
     * @throws \dml_exception If the category does not exist.
     */
    public static function get_valid_questions_from_category(int $categoryid): array {
        $questionids = \question_finder::get_instance()->get_questions_from_categories([$categoryid], '');

        $valid = [];
        foreach (array_keys($questionids) as $questionid) {
            $question = \question_bank::load_question((int) $questionid, false);
            if ($question instanceof qtype_multichoice_single_question) {
                $qtype = 'multichoice';
            } else if ($question instanceof qtype_truefalse_question) {
                $qtype = 'truefalse';
            } else {
                // Multiple answers multichoice and other question types are not supported by polls.
                continue;
            }

            $valid[] = [
                'questionid' => (int) $question->id,
                'name' => self::strip_html($question->name),
                'qtype' => $qtype,
                'questiontext' => shorten_text(
                    self::strip_html($question->questiontext, $question->questiontextformat),
                    100
                ),
            ];
        }

        usort($valid, function($a, $b) {
            return strnatcasecmp($a['name'], $b['name']);
        });

        return $valid;
    }

    /**
     * Transform a supported question into the data needed to create a plugNmeet poll.
     *
     * @param \question_definition $question The question object.
     * @param bool $isQuiz Whether the poll is a quiz (correct answers hidden during the poll).
     * @return array With question, options (list of id, text and is_correct) and is_multiple.
     * @throws \coding_exception If the question type is not supported.
     * @throws \moodle_exception If the question cannot be converted into a poll.
     */
    public static function transform_question_to_poll($question, bool $isQuiz = false): array {
        if ($question instanceof qtype_multichoice_single_question) {
            return self::transform_multichoice($question);
        }
        if ($question instanceof qtype_truefalse_question) {
            return self::transform_truefalse($question);
        }

        throw new \coding_exception('Question type ' . s($question->qtype ?? 'unknown') . ' is not supported for polls.');
    }

    /**
     * Transform a single answer multichoice question into poll data.
     *
     * @param qtype_multichoice_single_question $question The question object.
     * @return array With question, options and is_multiple.
     * @throws \coding_exception If the question has no answers.
     * @throws \moodle_exception If the answers cannot unambiguously mark a single correct option.
     */
    protected static function transform_multichoice(qtype_multichoice_single_question $question): array {
        // question_bank::load_question() returns a question instance where the
        // answers live in $question->answers (the ->options record is not loaded).
        $answers = $question->answers ?? [];
        $fractions = [];
        foreach ($answers as $answer) {
            $fractions[] = (float) $answer->fraction;
        }
        if (empty($fractions)) {
            throw new \coding_exception('Question ' . $question->id . ' has no answers.');
        }

        // Find the highest fraction among the answers and verify it is unique.
        $max = max($fractions);
        $maxcount = 0;
        foreach ($fractions as $fraction) {
            if (abs($fraction - $max) < 1e-9) {
                $maxcount++;
            }
        }
        if ($maxcount > 1) {
            throw new \moodle_exception('poll_question_tie', 'mod_plugnmeet');
        }

        $options = [];
        foreach ($answers as $answer) {
            $text = self::strip_html($answer->answer, $answer->answerformat ?? FORMAT_HTML);
            if ($text === '') {
                continue;
            }
            $options[] = [
                'id' => count($options) + 1,
                'text' => $text,
                'is_correct' => abs((float) $answer->fraction - $max) < 1e-9,
            ];
        }
        if (empty($options)) {
            throw new \moodle_exception('poll_invalid_question', 'mod_plugnmeet');
        }

        return [
            'question' => self::strip_html($question->questiontext, $question->questiontextformat),
            'options' => $options,
            'is_multiple' => false,
        ];
    }

    /**
     * Transform a true/false question into poll data.
     *
     * @param qtype_truefalse_question $question The question object.
     * @return array With question, options and is_multiple.
     */
    protected static function transform_truefalse(qtype_truefalse_question $question): array {
        $rightanswer = (bool) $question->rightanswer;

        return [
            'question' => self::strip_html($question->questiontext, $question->questiontextformat),
            'options' => [
                [
                    'id' => 1,
                    'text' => get_string('true', 'qtype_truefalse'),
                    'is_correct' => $rightanswer,
                ],
                [
                    'id' => 2,
                    'text' => get_string('false', 'qtype_truefalse'),
                    'is_correct' => !$rightanswer,
                ],
            ],
            'is_multiple' => false,
        ];
    }

    /**
     * Convert rich text (HTML, markdown, etc.) into a single line of plain text.
     *
     * @param string|null $text The rich text.
     * @param int $format The text format (FORMAT_HTML, FORMAT_MARKDOWN, etc.).
     * @return string Plain text with all tags and extra whitespace removed.
     */
    protected static function strip_html(?string $text, int $format = FORMAT_HTML): string {
        $text = format_text((string) $text, (int) $format, ['para' => false, 'filter' => false]);
        $text = html_entity_decode(strip_tags($text), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/\s+/u', ' ', $text);

        return trim($text);
    }
}
