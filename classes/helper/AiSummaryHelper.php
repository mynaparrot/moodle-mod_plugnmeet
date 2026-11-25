<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace mod_plugnmeet\helper;

use MoodleExcelFormat;
use MoodleExcelWorkbook;

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->libdir . '/excellib.class.php');

/**
 * Builds the XLSX report of an AI agent session summary.
 *
 * The formatted context of the artifacts controller is reused when it is provided,
 * otherwise the summary is loaded from the server (or the locally cached one).
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class AiSummaryHelper {
    /**
     * @var array The formatted summary data.
     */
    private array $context;

    /**
     * Constructor.
     *
     * @param string $artifactid
     * @param array|null $summary Raw summary data, loaded from the server when not given.
     * @param array $contextdata Context produced by the artifacts controller, used as is when given.
     */
    public function __construct(string $artifactid, ?array $summary = null, array $contextdata = []) {
        if ($contextdata) {
            $this->context = $contextdata;
        } else {
            $this->context = self::build_context($summary ?? RoomHelper::get_ai_agent_session_summary($artifactid) ?? []);
        }
    }

    /**
     * Whether the helper holds summary data to report.
     *
     * @return bool
     */
    public function has_data(): bool {
        return !empty($this->context['is_ai_session_summary']);
    }

    /**
     * Generates and sends the XLSX file.
     *
     * @param string $filename
     * @return void
     */
    public function generate_xlsx_file(string $filename): void {
        $workbook = new MoodleExcelWorkbook($filename);
        $header = new MoodleExcelFormat(['bold' => 1, 'size' => 12, 'color' => '1171A3']);

        $this->write_overview($workbook, $header);

        if (!empty($this->context['has_ai_usage']) || !empty($this->context['has_avatar_usage'])) {
            $this->write_usage($workbook, $header, new MoodleExcelFormat(['bold' => 1]));
        }

        if (!empty($this->context['has_quiz']) && !empty($this->context['questions'])) {
            $this->write_quiz($workbook, $header);
        }

        if (!empty($this->context['has_progress_log'])) {
            $this->write_progress_log($workbook, $header);
        }

        $workbook->close();
    }

    /**
     * Writes the overview sheet.
     *
     * @param MoodleExcelWorkbook $workbook
     * @param MoodleExcelFormat $header
     * @return void
     */
    private function write_overview(MoodleExcelWorkbook $workbook, MoodleExcelFormat $header): void {
        $sheet = $workbook->add_worksheet(get_string('ai_session_overview', 'mod_plugnmeet'));
        $sheet->set_column(0, 0, 32);
        $sheet->set_column(1, 1, 80);

        $rowindex = 0;
        foreach ($this->get_overview_rows() as $label => $value) {
            $sheet->write_string($rowindex, 0, $label, $header);
            $sheet->write_string($rowindex, 1, (string)$value);
            $rowindex++;
        }
    }

    /**
     * Labels and values of the overview sheet.
     *
     * @return array
     */
    private function get_overview_rows(): array {
        $context = $this->context;
        $get = static fn(string $key) => $context[$key] ?? '';

        $tools = [];
        foreach ((array)$get('tools_used') as $tool) {
            $tools[] = $tool['name'] . ' (' . $tool['count'] . ')';
        }

        $rows = [
            get_string('ai_student', 'mod_plugnmeet') => $get('student_name'),
            get_string('user_id', 'mod_plugnmeet') => $get('student_user_id'),
            get_string('ai_agent', 'mod_plugnmeet') => $get('agent_name'),
            get_string('ai_topic', 'mod_plugnmeet') => $get('topic'),
            get_string('ai_started_at', 'mod_plugnmeet') => $get('started_at'),
            get_string('ai_ended_at', 'mod_plugnmeet') => $get('ended_at'),
            get_string('ai_duration', 'mod_plugnmeet') => $get('duration_formatted'),
            get_string('ai_turns', 'mod_plugnmeet') => $get('turns_count'),
            get_string('ai_end_reason', 'mod_plugnmeet') => $get('end_reason'),
            get_string('ai_off_topic_redirects', 'mod_plugnmeet') => $get('off_topic_redirects'),
            get_string('ai_score', 'mod_plugnmeet') => $get('overall_score'),
            get_string('ai_best_score', 'mod_plugnmeet') => $get('best_score'),
            get_string('ai_sessions_completed', 'mod_plugnmeet') => $get('sessions_completed'),
            get_string('ai_mastery_level', 'mod_plugnmeet') => $get('mastery_level'),
            get_string('ai_participation_level', 'mod_plugnmeet') => $get('participation_level'),
            get_string('ai_whiteboard_used', 'mod_plugnmeet') => $get('whiteboard_used'),
            get_string('ai_notepad_used', 'mod_plugnmeet') => $get('notepad_used'),
            get_string('ai_tools_used', 'mod_plugnmeet') => implode(', ', $tools),
            get_string('ai_concepts_mastered', 'mod_plugnmeet') => implode(', ', (array)$get('concepts_mastered')),
            get_string('ai_concepts_practiced', 'mod_plugnmeet') => implode(', ', (array)$get('concepts_practiced')),
            get_string('ai_struggled_with', 'mod_plugnmeet') => implode(', ', (array)$get('struggled_with')),
            get_string('ai_vocabulary', 'mod_plugnmeet') => implode(', ', (array)$get('vocabulary_or_key_terms')),
            get_string('ai_narrative_summary', 'mod_plugnmeet') => $get('narrative_summary'),
            get_string('ai_rubric_notes', 'mod_plugnmeet') => $get('rubric_notes'),
            get_string('ai_next_session_focus', 'mod_plugnmeet') => $get('next_session_focus'),
            get_string('ai_recommended_warm_up', 'mod_plugnmeet') => $get('recommended_warm_up'),
            get_string('ai_unfinished_subtopics', 'mod_plugnmeet') => implode(', ', (array)$get('unfinished_subtopics')),
            get_string('ai_total_tokens', 'mod_plugnmeet') => $get('usage_total_tokens'),
            get_string('ai_estimated_cost', 'mod_plugnmeet') => $get('usage_total_estimated_cost'),
        ];

        if (!empty($context['has_avatar_usage'])) {
            $rows[get_string('ai_avatar_duration', 'mod_plugnmeet')] = $get('avatar_duration_formatted');
            $rows[get_string('ai_avatar_estimated_cost', 'mod_plugnmeet')] = $get('avatar_estimated_cost');
        }

        if (!empty($context['has_quiz'])) {
            $rows[get_string('ai_quizzes', 'mod_plugnmeet')] = $get('total_quizzes');
            $rows[get_string('ai_correct_responses', 'mod_plugnmeet')] = $get('correct_responses');
            $rows[get_string('ai_accuracy', 'mod_plugnmeet')] = $get('accuracy_percent') . '%';
        }

        return $rows;
    }

    /**
     * Writes the token and avatar usage sheet.
     *
     * @param MoodleExcelWorkbook $workbook
     * @param MoodleExcelFormat $header
     * @param MoodleExcelFormat $bold
     * @return void
     */
    private function write_usage(MoodleExcelWorkbook $workbook, MoodleExcelFormat $header, MoodleExcelFormat $bold): void {
        $context = $this->context;
        $sheet = $workbook->add_worksheet(get_string('ai_token_usage', 'mod_plugnmeet'));
        $sheet->set_column(0, 0, 20);
        $sheet->set_column(1, 4, 20);

        $rowindex = 0;
        if (!empty($context['has_ai_usage'])) {
            $columns = [
                get_string('ai_role', 'mod_plugnmeet'),
                get_string('ai_prompt_tokens', 'mod_plugnmeet'),
                get_string('ai_completion_tokens', 'mod_plugnmeet'),
                get_string('ai_total_tokens', 'mod_plugnmeet'),
                get_string('ai_estimated_cost', 'mod_plugnmeet'),
            ];
            foreach ($columns as $column => $title) {
                $sheet->write_string($rowindex, $column, $title, $header);
            }

            foreach ((array)($context['ai_usage'] ?? []) as $usage) {
                $rowindex++;
                $sheet->write_string($rowindex, 0, (string)$usage['role']);
                $sheet->write_number($rowindex, 1, (int)$usage['prompt_tokens']);
                $sheet->write_number($rowindex, 2, (int)$usage['completion_tokens']);
                $sheet->write_number($rowindex, 3, (int)$usage['total_tokens']);
                $sheet->write_string($rowindex, 4, (string)$usage['estimated_cost']);
            }

            $rowindex++;
            $sheet->write_string($rowindex, 0, get_string('total'), $bold);
            $sheet->write_number($rowindex, 1, (int)($context['usage_total_prompt_tokens'] ?? 0), $bold);
            $sheet->write_number($rowindex, 2, (int)($context['usage_total_completion_tokens'] ?? 0), $bold);
            $sheet->write_number($rowindex, 3, (int)($context['usage_total_tokens'] ?? 0), $bold);
            $sheet->write_string($rowindex, 4, (string)($context['usage_total_estimated_cost'] ?? ''), $bold);
        }

        if (!empty($context['has_avatar_usage'])) {
            $rowindex += 2;
            $sheet->write_string($rowindex, 0, get_string('ai_avatar_usage', 'mod_plugnmeet'), $header);
            $rowindex++;
            $sheet->write_string($rowindex, 0, get_string('ai_avatar_duration', 'mod_plugnmeet'), $bold);
            $sheet->write_string($rowindex, 1, (string)($context['avatar_duration_formatted'] ?? ''));
            if (!empty($context['has_avatar_cost'])) {
                $rowindex++;
                $sheet->write_string($rowindex, 0, get_string('ai_avatar_estimated_cost', 'mod_plugnmeet'), $bold);
                $sheet->write_string($rowindex, 1, (string)($context['avatar_estimated_cost'] ?? ''));
            }
        }
    }

    /**
     * Writes the quiz sheet.
     *
     * @param MoodleExcelWorkbook $workbook
     * @param MoodleExcelFormat $header
     * @return void
     */
    private function write_quiz(MoodleExcelWorkbook $workbook, MoodleExcelFormat $header): void {
        $sheet = $workbook->add_worksheet(get_string('ai_quiz_evaluation', 'mod_plugnmeet'));
        $sheet->set_column(0, 0, 70);
        $sheet->set_column(1, 4, 18);

        $columns = [
            get_string('ai_question', 'mod_plugnmeet'),
            get_string('ai_correct_option', 'mod_plugnmeet'),
            get_string('ai_votes', 'mod_plugnmeet'),
            get_string('ai_correct_votes', 'mod_plugnmeet'),
            get_string('ai_passed', 'mod_plugnmeet'),
        ];
        foreach ($columns as $column => $title) {
            $sheet->write_string(0, $column, $title, $header);
        }

        $rowindex = 1;
        foreach ((array)($this->context['questions'] ?? []) as $question) {
            $sheet->write_string($rowindex, 0, (string)($question['question'] ?? ''));
            $sheet->write_string($rowindex, 1, (string)($question['correct_option'] ?? ''));
            $sheet->write_number($rowindex, 2, (int)($question['total_votes'] ?? 0));
            $sheet->write_number($rowindex, 3, (int)($question['correct_votes'] ?? 0));
            $sheet->write_string(
                $rowindex,
                4,
                !empty($question['passed']) ? get_string('yes') : get_string('no')
            );
            $rowindex++;
        }
    }

    /**
     * Writes the progress log sheet.
     *
     * @param MoodleExcelWorkbook $workbook
     * @param MoodleExcelFormat $header
     * @return void
     */
    private function write_progress_log(MoodleExcelWorkbook $workbook, MoodleExcelFormat $header): void {
        $sheet = $workbook->add_worksheet(get_string('ai_progress_log', 'mod_plugnmeet'));
        $sheet->set_column(0, 0, 40);
        $sheet->set_column(1, 1, 20);
        $sheet->set_column(2, 2, 70);

        $columns = [
            get_string('ai_concept', 'mod_plugnmeet'),
            get_string('ai_status', 'mod_plugnmeet'),
            get_string('ai_notes', 'mod_plugnmeet'),
        ];
        foreach ($columns as $column => $title) {
            $sheet->write_string(0, $column, $title, $header);
        }

        $rowindex = 1;
        foreach ((array)($this->context['progress_log'] ?? []) as $entry) {
            $sheet->write_string($rowindex, 0, (string)($entry['concept'] ?? ''));
            $sheet->write_string($rowindex, 1, (string)($entry['status'] ?? ''));
            $sheet->write_string($rowindex, 2, (string)($entry['notes'] ?? ''));
            $rowindex++;
        }
    }

    /**
     * Formats raw summary data like the artifacts controller does.
     *
     * @param array $summary
     * @return array
     */
    private static function build_context(array $summary): array {
        if (empty($summary)) {
            return [];
        }

        $session = (array)($summary['session'] ?? []);
        $evaluation = (array)($summary['evaluation'] ?? []);
        $quiz = (array)($summary['quiz_evaluation'] ?? []);
        $workspace = (array)($summary['workspace_activity'] ?? []);
        $continuation = (array)($summary['continuation'] ?? []);
        $userinfo = (array)($summary['user_info'] ?? []);

        $usagerows = [];
        $prompttokens = 0;
        $completiontokens = 0;
        $totaltokens = 0;
        $totalcost = 0.0;
        foreach ((array)($summary['usage'] ?? []) as $role => $usage) {
            $usagerows[] = [
                'role' => ucfirst((string)$role),
                'prompt_tokens' => (int)($usage['prompt_tokens'] ?? 0),
                'completion_tokens' => (int)($usage['completion_tokens'] ?? 0),
                'total_tokens' => (int)($usage['total_tokens'] ?? 0),
                'estimated_cost' => number_format((float)($usage['total_tokens_estimated_cost'] ?? 0), 4),
            ];
            $prompttokens += (int)($usage['prompt_tokens'] ?? 0);
            $completiontokens += (int)($usage['completion_tokens'] ?? 0);
            $totaltokens += (int)($usage['total_tokens'] ?? 0);
            $totalcost += (float)($usage['total_tokens_estimated_cost'] ?? 0);
        }

        $avatarusage = (array)($summary['avatar_usage'] ?? []);
        $avatarduration = (int)($avatarusage['duration_sec'] ?? 0);
        $avatarcost = isset($avatarusage['duration_sec_estimated_cost'])
            ? (float)$avatarusage['duration_sec_estimated_cost'] : null;

        $questions = [];
        foreach ((array)($quiz['questions'] ?? []) as $question) {
            $questions[] = [
                'question' => (string)($question['question'] ?? ''),
                'correct_option' => (string)($question['correct_option'] ?? ''),
                'total_votes' => (int)($question['total_votes'] ?? 0),
                'correct_votes' => (int)($question['correct_votes'] ?? 0),
                'passed' => !empty($question['passed']),
            ];
        }

        $progresslog = [];
        foreach ((array)($summary['progress_log'] ?? []) as $entry) {
            $progresslog[] = [
                'concept' => (string)($entry['concept'] ?? ''),
                'status' => ucfirst(strtolower(trim((string)($entry['status'] ?? '')))),
                'notes' => (string)($entry['notes'] ?? ''),
            ];
        }

        $toolsused = [];
        foreach ((array)($workspace['tools_used'] ?? []) as $tool => $count) {
            $toolsused[] = ['name' => (string)$tool, 'count' => (int)$count];
        }

        return [
            'is_ai_session_summary' => true,
            'student_name' => (string)($userinfo['name'] ?? ''),
            'student_user_id' => (string)(($userinfo['ex_user_id'] ?? '') ?: ($userinfo['user_id'] ?? '')),
            'agent_name' => (string)($session['agent_display_name'] ?? ''),
            'topic' => (string)($session['topic'] ?? ''),
            'started_at' => !empty($session['started_at']) ? userdate((int)floor($session['started_at'] / 1000)) : '',
            'ended_at' => !empty($session['ended_at']) ? userdate((int)floor($session['ended_at'] / 1000)) : '',
            'duration_formatted' => RoomHelper::format_duration((int)($session['duration_seconds'] ?? 0)),
            'turns_count' => (int)($session['turns_count'] ?? 0),
            'end_reason' => (string)($session['end_reason'] ?? ''),
            'off_topic_redirects' => (int)($session['off_topic_redirects_count'] ?? 0),
            'overall_score' => max(0, min(100, (int)($evaluation['overall_score'] ?? 0))),
            'best_score' => max(0, min(100, (int)($evaluation['overall_score'] ?? 0))),
            'sessions_completed' => 1,
            'mastery_level' => ucfirst((string)($evaluation['mastery_level'] ?? '')),
            'participation_level' => ucfirst((string)($evaluation['participation_level'] ?? '')),
            'whiteboard_used' => !empty($workspace['whiteboard_used']) ? get_string('yes') : get_string('no'),
            'notepad_used' => !empty($workspace['notepad_used']) ? get_string('yes') : get_string('no'),
            'tools_used' => $toolsused,
            'concepts_mastered' => array_values((array)($evaluation['concepts_mastered'] ?? [])),
            'concepts_practiced' => array_values((array)($evaluation['concepts_practiced'] ?? [])),
            'struggled_with' => array_values((array)($evaluation['struggled_with'] ?? [])),
            'vocabulary_or_key_terms' => array_values((array)($evaluation['vocabulary_or_key_terms'] ?? [])),
            'narrative_summary' => (string)($summary['narrative_summary'] ?? ''),
            'rubric_notes' => (string)($evaluation['rubric_notes'] ?? ''),
            'next_session_focus' => (string)($continuation['next_session_focus'] ?? ''),
            'recommended_warm_up' => (string)($continuation['recommended_warm_up'] ?? ''),
            'unfinished_subtopics' => array_values((array)($continuation['unfinished_subtopics'] ?? [])),
            'has_ai_usage' => !empty($usagerows),
            'ai_usage' => $usagerows,
            'usage_total_prompt_tokens' => $prompttokens,
            'usage_total_completion_tokens' => $completiontokens,
            'usage_total_tokens' => $totaltokens,
            'usage_total_estimated_cost' => number_format($totalcost, 4),
            'has_avatar_usage' => $avatarduration > 0,
            'avatar_duration_formatted' => RoomHelper::format_duration($avatarduration),
            'has_avatar_cost' => $avatarcost !== null,
            'avatar_estimated_cost' => number_format((float)$avatarcost, 4),
            'has_quiz' => ((int)($quiz['total_quizzes'] ?? 0) > 0),
            'total_quizzes' => (int)($quiz['total_quizzes'] ?? 0),
            'correct_responses' => (int)($quiz['correct_responses'] ?? 0),
            'accuracy_percent' => (int)($quiz['accuracy_percent'] ?? 0),
            'questions' => $questions,
            'has_progress_log' => !empty($progresslog),
            'progress_log' => $progresslog,
        ];
    }
}
