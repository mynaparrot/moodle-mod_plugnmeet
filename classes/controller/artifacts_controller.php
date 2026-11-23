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

namespace mod_plugnmeet\controller;

use core\output\notification;
use mod_plugnmeet\helper\plugNmeetConnect;
use mod_plugnmeet\helper\AnalyticsHelper;
use mod_plugnmeet\helper\RoomHelper;
use Mynaparrot\PlugnmeetProto\RoomArtifactType;
use moodle_url;
use cache;

defined('MOODLE_INTERNAL') || die();

/**
 * Controller class for handling room artifacts.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class artifacts_controller {
    /**
     * @var \cm_info
     */
    private $cm;

    /**
     * @var \stdClass
     */
    private $course;

    /**
     * @var \stdClass
     */
    private $plugnmeet;

    /**
     * @var \context_module
     */
    private $context;

    /**
     * Constructor.
     *
     * @param \stdClass $cm
     * @param \stdClass $course
     * @param \stdClass $plugnmeet
     */
    public function __construct($cm, $course, $plugnmeet) {
        $this->cm = $cm;
        $this->course = $course;
        $this->plugnmeet = $plugnmeet;
        $this->context = \context_module::instance($cm->id);
    }

    /**
     * Gets page data for artifacts.
     *
     * @return array
     */
    public function get_page_data() {
        $artifactid = optional_param('artifact_id', '', PARAM_TEXT);

        if (!empty($artifactid)) {
            return [
                'content' => $this->render_single_artifact($artifactid),
            ];
        }

        return [
            'content' => $this->render_artifacts_list(),
        ];
    }

    /**
     * Renders single artifact details.
     *
     * @param string $artifactid
     * @return string
     */
    private function render_single_artifact($artifactid) {
        global $OUTPUT;
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $cache = cache::make('mod_plugnmeet', 'artifact_info');

        $artifactinfores = $cache->get($artifactid);

        if ($artifactinfores === false) {
            $artifactinfores = $pnc->getArtifactInfo($artifactid);
            if ($artifactinfores->getStatus()) {
                $cache->set($artifactid, $artifactinfores);
            }
        }

        if (!$artifactinfores || !$artifactinfores->getStatus()) {
            return $OUTPUT->notification($pnc->getResponseError($artifactinfores, get_string('artifact', 'mod_plugnmeet')), 'error');
        }

        $info = $artifactinfores->getArtifactInfo();
        $metadata = $info->getMetadata();
        $isfilebased = ($metadata && $metadata->hasFileInfo());
        $page = optional_param('page', 0, PARAM_INT);

        $context = [
            'can_download' => $isfilebased && $info->getType() !== RoomArtifactType::MEETING_ANALYTICS &&
                has_capability('mod/plugnmeet:downloadartifacts', $this->context),
            'download_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'artifact_id' => $artifactid,
                'action' => 'download',
                'page' => $page,
            ]))->out(false),

            'is_analytics' => $info->getType() === RoomArtifactType::MEETING_ANALYTICS,
            'can_download_analytics' => $info->getType() === RoomArtifactType::MEETING_ANALYTICS &&
                has_capability('mod/plugnmeet:downloadanalyticsreport', $this->context),
            'download_excel_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'artifact_id' => $artifactid,
                'action' => 'download_excel',
                'page' => $page,
            ]))->out(false),
            'download_json_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'artifact_id' => $artifactid,
                'action' => 'download_json',
                'page' => $page,
            ]))->out(false),

            'is_meeting_summary' => $info->getType() === RoomArtifactType::MEETING_SUMMARY,
            'meeting_summary_content' => '',

            'can_delete' => $isfilebased &&
                has_capability('mod/plugnmeet:deleteartifacts', $this->context),
            'delete_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'action' => 'delete',
                'artifact_id' => $artifactid,
                'page' => $page,
                'sesskey' => sesskey(),
            ]))->out(false),

            'back_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'page' => $page,
            ]))->out(false),
            'details' => [],
            'room_details' => [],
            'has_users' => false,
            'user_headers' => [],
            'user_rows' => [],
        ];

        $details = [
            get_string('artifact_id', 'mod_plugnmeet') => $info->getArtifactId(),
            get_string('room_id', 'mod_plugnmeet') => $info->getRoomId(),
            get_string('type', 'mod_plugnmeet') => $this->format_type_name($info->getType()),
            get_string('created_at', 'mod_plugnmeet') => RoomHelper::format_iso_to_moodle_time($info->getCreated()),
        ];

        if ($metadata) {
            if ($metadata->hasUserInfo()) {
                $userinfo = $metadata->getUserInfo();
                $username = trim((string)$userinfo->getName());
                if ($username !== '') {
                    $details[get_string('name', 'mod_plugnmeet')] = $username;
                }
                $details[get_string('user_id', 'mod_plugnmeet')] = $userinfo->getExUserId() ?: $userinfo->getUserId();
            }
            if ($metadata->hasFileInfo()) {
                $fileinfo = $metadata->getFileInfo();
                $details[get_string('file_size', 'mod_plugnmeet')] = RoomHelper::format_bytes($fileinfo->getFileSize());
                $details[get_string('mime_type', 'mod_plugnmeet')] = $fileinfo->getMimeType();
            }
            if ($metadata->hasTokenUsage()) {
                $usage = $metadata->getTokenUsage();
                $details[get_string('token_usage', 'mod_plugnmeet')] = $usage->getTotalTokens();
                $details[get_string('estimated_cost', 'mod_plugnmeet')] = number_format($usage->getTotalTokensEstimatedCost(), 4);
            }
            if ($metadata->hasDurationUsage()) {
                $usage = $metadata->getDurationUsage();
                $details[get_string('duration_usage', 'mod_plugnmeet')] = $usage->getDurationSec() . 's';
                $details[get_string('estimated_cost', 'mod_plugnmeet')] = number_format($usage->getDurationSecEstimatedCost(), 4);
            }
            if ($metadata->hasCharacterCountUsage()) {
                $usage = $metadata->getCharacterCountUsage();
                $details[get_string('character_count_usage', 'mod_plugnmeet')] = $usage->getTotalCharacters();
                $details[get_string('estimated_cost', 'mod_plugnmeet')] = number_format($usage->getTotalCharactersEstimatedCost(), 4);
            }
        }

        foreach ($details as $label => $value) {
            $context['details'][] = ['label' => $label, 'value' => $value];
        }

        if ($context['is_analytics']) {
            $this->populate_analytics_context($artifactid, $context);
        } else if ($context['is_meeting_summary']) {
            $this->populate_meeting_summary_context($artifactid, $context);
        } else if ($info->getType() === RoomArtifactType::AI_AGENT_SESSION_SUMMARY) {
            $this->populate_ai_session_summary_context($context, $artifactid, $info);
        }

        return $OUTPUT->render_from_template('mod_plugnmeet/artifact_details', $context);
    }

    /**
     * Populates the context array with meeting analytics details.
     *
     * @param string $artifactid
     * @param array &$context
     */
    private function populate_analytics_context($artifactid, &$context) {
        global $OUTPUT;
        try {
            $analyticshelper = new AnalyticsHelper($artifactid);
            $formatteddata = $analyticshelper->get_formatted_event_data();
            $roomfields = $analyticshelper->get_room_fields();
            $userfields = $analyticshelper->get_user_fields();

            foreach ($roomfields as $field) {
                $value = $formatteddata['room'][$field] ?? 0;
                if (is_array($value)) {
                    continue;
                }

                if ($field === "room_duration" || $field === "speech_service_total_usage") {
                    $value = $analyticshelper->format_seconds_to_time($value);
                } else if ($field === "enabled_e2ee") {
                    $value = $value ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
                }
                $context['room_details'][] = ['label' => get_string('analytics_room_' . $field, 'mod_plugnmeet'), 'value' => $value];
            }

            if (!empty($formatteddata['users'])) {
                $context['has_users'] = true;
                $context['user_headers'] = array_map(function ($field) {
                    return get_string('analytics_user_' . str_replace("user_", "", $field), 'mod_plugnmeet');
                }, $userfields);

                foreach ($formatteddata['users'] as $userrow) {
                    $rowdata = [];
                    foreach ($userfields as $field) {
                        $value = $userrow[$field] ?? 0;
                        if (is_bool($value)) {
                            $value = $value ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
                        } else if (is_array($value)) {
                            if ($field === "joined" || $field === "left") {
                                $arr = array_map(function ($d) use ($analyticshelper) {
                                    return $analyticshelper->format_timestamp($d);
                                }, empty($value) ? [] : $value);
                                $value = implode("<br><br>", $arr);
                            } else if ($field === "connection_quality") {
                                $arr = array_map(function ($k, $v) {
                                    return get_string('analytics_user_connection_quality_' . $k, 'mod_plugnmeet') . ": " . $v;
                                }, array_keys(empty($value) ? [] : $value), array_values(empty($value) ? [] : $value));
                                $value = implode("<br>", $arr);
                            } else {
                                $value = get_string('see_excel_report', 'mod_plugnmeet');
                            }
                        } else if ($field === "duration" || $field === "talked_duration" || $field === "speech_service_total_usage") {
                            $value = $analyticshelper->format_seconds_to_time($value);
                        }
                        $rowdata[] = ['value' => $value];
                    }
                    $context['user_rows'][] = $rowdata;
                }
            }
        } catch (\Exception $e) {
            $context['is_analytics'] = false; // Prevent rendering analytics section on error.
            echo $OUTPUT->notification(get_string('error_loading_analytics', 'mod_plugnmeet', $e->getMessage()), 'error');
        }
    }

    /**
     * Populates the context array with meeting summary details.
     *
     * @param string $artifactid
     * @param array &$context
     */
    private function populate_meeting_summary_context($artifactid, &$context) {
        global $OUTPUT;
        try {
            $summarycontent = RoomHelper::get_meeting_summary($artifactid);
            if ($summarycontent) {
                $context['meeting_summary_content'] = $summarycontent;
            } else {
                echo $OUTPUT->notification(get_string('error_loading_meeting_summary', 'mod_plugnmeet'), 'error');
            }
        } catch (\Exception $e) {
            echo $OUTPUT->notification(get_string('error_loading_meeting_summary', 'mod_plugnmeet', $e->getMessage()), 'error');
        }
    }

    /**
     * Populates the context array with the AI agent session summary (mastery report).
     *
     * @param array &$context
     * @param string $artifactid
     * @param object|null $info Artifact info from the plugNmeet server, if available.
     */
    private function populate_ai_session_summary_context(array &$context, string $artifactid, $info = null): void {
        global $DB, $OUTPUT;

        $summary = RoomHelper::get_ai_agent_session_summary($artifactid);
        $metadatauserinfo = $info?->getMetadata()?->getUserInfo();
        $summaryuserinfo = $summary['user_info'] ?? [];
        $userid = (string)((($summaryuserinfo['ex_user_id'] ?? '') ?: ($summaryuserinfo['user_id'] ?? ''))
            ?: ($metadatauserinfo?->getExUserId() ?: (string)($metadatauserinfo?->getUserId() ?? '')));
        $username = (string)(($summaryuserinfo['name'] ?? '') ?: (string)($metadatauserinfo?->getName() ?? ''));

        $statsdata = $this->get_user_stats_data($userid);

        // The remote artifact may no longer be available, but the last summary is kept locally.
        if (!$summary) {
            $summary = $this->summary_from_user_stats($statsdata);
        }
        if (!$summary) {
            $context['ai_summary_notice'] = $OUTPUT->notification(
                get_string('ai_summary_unavailable', 'mod_plugnmeet'),
                'warning'
            );
            return;
        }

        $studentuser = is_numeric($userid) ? $DB->get_record('user', ['id' => (int)$userid]) : false;
        if ($studentuser && $username === '') {
            $username = fullname($studentuser);
        }

        $roommetadata = json_decode($this->plugnmeet->roommetadata ?? '', true) ?: [];
        $aifeatures = $roommetadata['insights_features']['ai_agent_features'] ?? [];

        $session = $summary['session'] ?? [];
        $evaluation = $summary['evaluation'] ?? [];
        $quiz = $summary['quiz_evaluation'] ?? [];
        $workspace = $summary['workspace_activity'] ?? [];
        $continuation = $summary['continuation'] ?? [];
        $masterylevel = (string)($evaluation['mastery_level'] ?? '');

        $context['is_ai_session_summary'] = true;
        $context['student_name'] = $username;
        $context['student_user_id'] = $userid;
        $context['agent_name'] = (string)($session['agent_display_name'] ?? '')
            ?: (string)($aifeatures['agent_display_name'] ?? 'AI Tutor');
        $context['topic'] = (string)($session['topic'] ?? '') ?: (string)($aifeatures['topic'] ?? '');
        $context['started_at'] = $this->format_session_time((int)($session['started_at'] ?? 0));
        $context['ended_at'] = $this->format_session_time((int)($session['ended_at'] ?? 0));
        $context['duration_formatted'] = RoomHelper::format_duration((int)($session['duration_seconds'] ?? 0));
        $context['turns_count'] = (int)($session['turns_count'] ?? 0);
        $context['end_reason'] = (string)($session['end_reason'] ?? '');
        $context['off_topic_redirects'] = (int)($session['off_topic_redirects_count'] ?? 0);

        $context['overall_score'] = max(0, min(100, (int)($evaluation['overall_score'] ?? 0)));
        $context['best_score'] = (int)($statsdata['ai_best_score'] ?? $context['overall_score']);
        $context['sessions_completed'] = (int)($statsdata['ai_sessions_completed'] ?? 1);
        $context['mastery_level'] = ucfirst($masterylevel);
        $context['mastery_badge_class'] = RoomHelper::mastery_badge_class($masterylevel);
        $context['participation_level'] = ucfirst((string)($evaluation['participation_level'] ?? ''));
        $context['narrative_summary'] = (string)($summary['narrative_summary'] ?? '');
        $context['rubric_notes'] = (string)($evaluation['rubric_notes'] ?? '');

        foreach (['concepts_mastered', 'concepts_practiced', 'struggled_with', 'vocabulary_or_key_terms'] as $key) {
            $context[$key] = array_values((array)($evaluation[$key] ?? []));
            $context['has_' . $key] = !empty($context[$key]);
        }

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
        $context['has_quiz'] = ((int)($quiz['total_quizzes'] ?? 0) > 0);
        $context['total_quizzes'] = (int)($quiz['total_quizzes'] ?? 0);
        $context['total_responses'] = (int)($quiz['total_responses'] ?? 0);
        $context['correct_responses'] = (int)($quiz['correct_responses'] ?? 0);
        $context['accuracy_percent'] = (int)($quiz['accuracy_percent'] ?? 0);
        $context['quiz_accuracy_percent'] = $context['accuracy_percent'];
        $context['questions'] = $questions;
        $context['has_questions'] = !empty($questions);

        $progresslog = [];
        foreach ((array)($summary['progress_log'] ?? []) as $entry) {
            $status = strtolower(trim((string)($entry['status'] ?? '')));
            $progresslog[] = [
                'concept' => (string)($entry['concept'] ?? ''),
                'status' => ucfirst($status),
                'status_badge_class' => RoomHelper::mastery_badge_class($status),
                'notes' => (string)($entry['notes'] ?? ''),
            ];
        }
        $context['has_progress_log'] = !empty($progresslog);
        $context['progress_log'] = $progresslog;

        $context['whiteboard_used'] = !empty($workspace['whiteboard_used'])
            ? get_string('yes', 'mod_plugnmeet')
            : get_string('no', 'mod_plugnmeet');
        $context['notepad_used'] = !empty($workspace['notepad_used'])
            ? get_string('yes', 'mod_plugnmeet')
            : get_string('no', 'mod_plugnmeet');
        $toolsused = [];
        foreach ((array)($workspace['tools_used'] ?? []) as $tool => $count) {
            $toolsused[] = ['name' => (string)$tool, 'count' => (int)$count];
        }
        $context['has_tools_used'] = !empty($toolsused);
        $context['tools_used'] = $toolsused;

        $context['next_session_focus'] = (string)($continuation['next_session_focus'] ?? '');
        $context['recommended_warm_up'] = (string)($continuation['recommended_warm_up'] ?? '');
        $context['unfinished_subtopics'] = array_values((array)($continuation['unfinished_subtopics'] ?? []));
        $context['has_unfinished_subtopics'] = !empty($context['unfinished_subtopics']);
        $context['previous_session_context_prompt'] = (string)($continuation['previous_session_context_prompt'] ?? '');
        $context['continuity_enabled'] = !empty($roommetadata['enable_continuity'] ?? 1);
        $context['has_continuation'] = $context['next_session_focus'] !== ''
            || $context['recommended_warm_up'] !== ''
            || $context['has_unfinished_subtopics']
            || $context['previous_session_context_prompt'] !== '';

        $usagerows = [];
        $usageprompt = 0;
        $usagecompletion = 0;
        $usagetotal = 0;
        $usagecost = 0.0;
        foreach ((array)($summary['usage'] ?? []) as $role => $usage) {
            $prompttokens = (int)($usage['prompt_tokens'] ?? 0);
            $completiontokens = (int)($usage['completion_tokens'] ?? 0);
            $totaltokens = (int)($usage['total_tokens'] ?? 0);
            $cost = (float)($usage['total_tokens_estimated_cost'] ?? 0);
            $usagerows[] = [
                'role' => ucfirst((string)$role),
                'prompt_tokens' => $prompttokens,
                'completion_tokens' => $completiontokens,
                'total_tokens' => $totaltokens,
                'estimated_cost' => number_format($cost, 4),
            ];
            $usageprompt += $prompttokens;
            $usagecompletion += $completiontokens;
            $usagetotal += $totaltokens;
            $usagecost += $cost;
        }
        $context['has_ai_usage'] = !empty($usagerows);
        $context['ai_usage'] = $usagerows;
        $context['usage_total_prompt_tokens'] = $usageprompt;
        $context['usage_total_completion_tokens'] = $usagecompletion;
        $context['usage_total_tokens'] = $usagetotal;
        $context['usage_total_estimated_cost'] = number_format($usagecost, 4);
    }

    /**
     * Returns the statistics of the given user in this activity.
     *
     * @param string $userid
     * @return array
     */
    private function get_user_stats_data(string $userid): array {
        global $DB;

        if (!is_numeric($userid)) {
            return [];
        }

        $statsrecord = $DB->get_record('plugnmeet_user_stats', [
            'plugnmeetid' => $this->plugnmeet->id,
            'userid' => (int)$userid,
        ]);
        if (!$statsrecord || empty($statsrecord->statsdata)) {
            return [];
        }

        return json_decode($statsrecord->statsdata, true) ?: [];
    }

    /**
     * Rebuilds a session summary from the locally cached stats of the last AI session.
     *
     * @param array $statsdata
     * @return array|null
     */
    private function summary_from_user_stats(array $statsdata): ?array {
        $cached = $statsdata['ai_session_summary'] ?? null;
        if (empty($cached) || !is_array($cached)) {
            return null;
        }

        return [
            'session' => [
                'agent_display_name' => (string)($cached['agent_display_name'] ?? ''),
                'topic' => (string)($cached['topic'] ?? ''),
                'duration_seconds' => (int)($cached['duration_seconds'] ?? 0),
                'turns_count' => (int)($cached['turns_count'] ?? 0),
            ],
            'evaluation' => [
                'overall_score' => (int)($cached['overall_score'] ?? 0),
                'mastery_level' => (string)($cached['mastery_level'] ?? ''),
                'participation_level' => (string)($cached['participation_level'] ?? ''),
                'concepts_mastered' => (array)($cached['concepts_mastered'] ?? []),
                'concepts_practiced' => (array)($cached['concepts_practiced'] ?? []),
                'struggled_with' => (array)($cached['struggled_with'] ?? []),
            ],
            'narrative_summary' => (string)($cached['narrative_summary'] ?? ''),
            'quiz_evaluation' => [
                'total_quizzes' => (int)($cached['quiz_total'] ?? 0),
                'accuracy_percent' => (int)($cached['quiz_accuracy_percent'] ?? 0),
            ],
            'continuation' => [
                'next_session_focus' => (string)($cached['next_session_focus'] ?? ''),
                'recommended_warm_up' => (string)($cached['recommended_warm_up'] ?? ''),
                'unfinished_subtopics' => (array)($cached['unfinished_subtopics'] ?? []),
                'previous_session_context_prompt' => (string)($cached['previous_session_context_prompt'] ?? ''),
            ],
        ];
    }

    /**
     * Formats a b-server timestamp given in Unix milliseconds.
     *
     * @param int $ms
     * @return string
     */
    private function format_session_time(int $ms): string {
        return $ms > 0 ? userdate((int)floor($ms / 1000)) : '';
    }

    /**
     * Renders artifacts list.
     *
     * @return string
     */
    private function render_artifacts_list() {
        global $OUTPUT;

        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $page = optional_param('page', 0, PARAM_INT);
        $limit = 20;
        $from = $page * $limit;

        $cache = cache::make('mod_plugnmeet', 'artifacts_list');
        $cachekey = $this->plugnmeet->roomid . '_' . $from . '_' . $limit;

        $response = $cache->get($cachekey);

        if ($response === false) {
            $response = $pnc->getArtifacts([$this->plugnmeet->roomid], null, null, $from, $limit);
            if ($response->getStatus()) {
                $cache->set($cachekey, $response);
            }
        }

        if (!$response || !$response->getStatus()) {
            return $OUTPUT->notification($pnc->getResponseError($response, get_string('artifacts', 'mod_plugnmeet')), 'error');
        }

        $result = $response->getResult();
        if (!$result || empty($result->getArtifactsList())) {
            return $OUTPUT->notification(get_string('no_artifacts', 'mod_plugnmeet'), 'info');
        }

        $artifacts = $result->getArtifactsList();
        $context = [
            'artifacts' => [],
            'paging_bar' => '',
        ];

        foreach ($artifacts as $artifact) {
            $context['artifacts'][] = [
                'artifact_id' => $artifact->getArtifactId(),
                'type' => $this->format_type_name($artifact->getType()),
                'user_name' => (string)($artifact->getMetadata()?->getUserInfo()?->getName() ?? ''),
                'created' => RoomHelper::format_iso_to_moodle_time($artifact->getCreated()),
                'view_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                    'id' => $this->cm->id,
                    'artifact_id' => $artifact->getArtifactId(),
                    'page' => $page,
                ]))->out(false),
            ];
        }

        if ($result->getTotalArtifacts() > $limit) {
            $baseurl = new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id]);
            $context['paging_bar'] = $OUTPUT->paging_bar($result->getTotalArtifacts(), $page, $limit, $baseurl);
        }

        return $OUTPUT->render_from_template('mod_plugnmeet/artifacts_list', $context);
    }

    /**
     * Deletes artifact.
     *
     * @param string $artifactid
     * @return void
     */
    public function delete_artifact($artifactid) {
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $artifactinfores = $pnc->getArtifactInfo($artifactid);

        $msg = get_string('delete_success', 'mod_plugnmeet');
        $msgtype = notification::NOTIFY_SUCCESS;

        if ($artifactinfores->getStatus()) {
            $info = $artifactinfores->getArtifactInfo();
            $metadata = $info->getMetadata();
            if ($metadata && $metadata->hasFileInfo()) {
                $res = $pnc->deleteArtifact($artifactid);
                if (!$res->getStatus()) {
                    $msg = $pnc->getResponseError($res, get_string('artifact', 'mod_plugnmeet'));
                    $msgtype = notification::NOTIFY_ERROR;
                }

                // Purge artifact info and list cache.
                cache::make('mod_plugnmeet', 'artifact_info')->delete($artifactid);
                $summerykey = sprintf("meeting_summer_%s", $artifactid);
                cache::make('mod_plugnmeet', 'artifact_info')->delete($summerykey);
                cache::make('mod_plugnmeet', 'artifact_info')->delete('ai_summary_' . $artifactid);
                cache::make('mod_plugnmeet', 'artifacts_list')->purge();
            }
        }

        redirect(new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id]), $msg, null, $msgtype);
    }

    /**
     * Downloads artifact.
     *
     * @param string $artifactid
     * @return void
     */
    public function download_artifact($artifactid) {
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $downloadres = $pnc->getArtifactDownloadToken($artifactid);

        if ($downloadres->getStatus()) {
            $serverurl = rtrim(get_config('mod_plugnmeet', 'plugnmeet_server_url'), '/');
            $downloadurl = $serverurl . '/download/artifact/' . $downloadres->getToken();
            redirect($downloadurl);
        } else {
            redirect(
                new moodle_url('/mod/plugnmeet/artifacts.php', [
                    'id' => $this->cm->id,
                    'artifact_id' => $artifactid,
                ]),
                $pnc->getResponseError($downloadres, get_string('artifact', 'mod_plugnmeet')),
                null,
                notification::NOTIFY_ERROR
            );
        }
    }

    /**
     * Downloads excel report.
     *
     * @param string $artifactid
     * @return void
     */
    public function download_excel_report($artifactid) {
        try {
            $analyticshelper = new AnalyticsHelper($artifactid);
            $filename = 'plugnmeet_analytics_' . $artifactid . '.xlsx';
            $analyticshelper->generate_xlsx_file($filename);
        } catch (\Exception $e) {
            redirect(
                new moodle_url('/mod/plugnmeet/artifacts.php', [
                    'id' => $this->cm->id,
                    'artifact_id' => $artifactid,
                ]),
                get_string('error_generating_excel', 'mod_plugnmeet', $e->getMessage()),
                null,
                notification::NOTIFY_ERROR
            );
        }
        exit;
    }

    /**
     * Downloads JSON report.
     *
     * @param string $artifactid
     * @return void
     */
    public function download_json_report($artifactid) {
        try {
            $analyticshelper = new AnalyticsHelper($artifactid);
            $rawdata = $analyticshelper->get_raw_analytics_data();
            $filename = 'plugnmeet_analytics_raw_' . $artifactid . '.json';

            header('Content-Type: application/json');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            echo json_encode($rawdata, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            redirect(
                new moodle_url('/mod/plugnmeet/artifacts.php', [
                    'id' => $this->cm->id,
                    'artifact_id' => $artifactid,
                ]),
                get_string('error_generating_json', 'mod_plugnmeet', $e->getMessage()),
                null,
                notification::NOTIFY_ERROR
            );
        }
        exit;
    }

    /**
     * Formats type name.
     *
     * @param int $type
     * @return string
     */
    private function format_type_name(int $type): string {
        switch ($type) {
            case RoomArtifactType::AI_AGENT_SESSION_SUMMARY:
                return get_string('artifact_type_ai_agent_session_summary', 'mod_plugnmeet');
            case RoomArtifactType::AI_AGENT_USAGE:
                return get_string('artifact_type_ai_agent_usage', 'mod_plugnmeet');
            case RoomArtifactType::AI_AGENT_TRANSCRIPT:
                return get_string('artifact_type_ai_agent_transcript', 'mod_plugnmeet');
        }

        $name = RoomArtifactType::name($type);
        return ucwords(strtolower(str_replace('_', ' ', $name)));
    }
}
