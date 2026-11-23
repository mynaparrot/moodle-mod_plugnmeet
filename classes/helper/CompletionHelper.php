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

use cache;
use coding_exception;
use Exception;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/mod/plugnmeet/lib.php');
require_once($CFG->dirroot . '/lib/completionlib.php');

/**
 * Helper class for handling activity completion.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class CompletionHelper {
    /**
     * Update completion and grades for all users in a room based on its analytics.
     *
     * @param \stdClass $plugnmeet
     * @param string $artifactid
     * @return bool
     * @throws coding_exception
     */
    public static function update_completion_for_room(\stdClass $plugnmeet, string $artifactid): bool {
        global $DB;

        $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id);
        if (!$cm) {
            return false;
        }

        try {
            $analytics = new AnalyticsHelper($artifactid);
            $data = $analytics->get_formatted_event_data();
            $users = $data['users'] ?? [];

            foreach ($users as $user) {
                $userid = $user['ex_user_id'] ?? null;
                if (!$userid) {
                    continue;
                }

                // Verify if $userid exists in Moodle before processing completion.
                if (!$DB->record_exists('user', ['id' => $userid])) {
                    continue;
                }

                // 1. Get existing stats.
                $statsrecord = $DB->get_record('plugnmeet_user_stats', ['plugnmeetid' => $plugnmeet->id, 'userid' => $userid]);
                $aggregatedstats = [];
                if ($statsrecord && !empty($statsrecord->statsdata)) {
                    $aggregatedstats = json_decode($statsrecord->statsdata, true) ?: [];
                }

                // 2. Prepare new session stats (store durations in SECONDS).
                // Use naming consistent with AnalyticsHelper and user fields.
                $sessionstats = [
                    'duration' => (int)($user['duration'] ?? 0),
                    'raise_hand' => (int)($user['raise_hand'] ?? 0),
                    'chat_messages' => (int)(($user['public_chat'] ?? 0) + ($user['private_chat'] ?? 0)),
                    'webcam_status' => (int)(($user['webcam_status'] ?? 0) > 0 ? 1 : 0),
                    'webcam_duration' => (int)($user['webcam_duration'] ?? 0),
                    'mic_status' => (int)(($user['mic_status'] ?? 0) > 0 ? 1 : 0),
                    'mic_duration' => (int)($user['mic_duration'] ?? 0),
                    'talked_duration' => (int)($user['talked_duration'] ?? 0),
                    'voted_poll' => (int)($user['voted_poll'] ?? 0),
                    'whiteboard_annotated' => (int)($user['whiteboard_annotated'] ?? 0),
                ];

                // 3. Aggregate: Sum durations and counts.
                foreach ($sessionstats as $key => $value) {
                    $aggregatedstats[$key] = ($aggregatedstats[$key] ?? 0) + $value;
                }

                // 4. Evaluate criteria based on TOTALS.
                $results = self::evaluate_criteria($aggregatedstats, $plugnmeet);

                // Hook to allow modification of completion results.
                try {
                    foreach (ExtensionManager::get_completion_addons() as $addon) {
                        $results = $addon->after_evaluate_completion($results, $aggregatedstats, $plugnmeet, (int)$userid);
                    }
                } catch (Exception $e) {
                    debugging('Error in PlugNmeet subplugin after_evaluate_completion: ' . $e->getMessage(), DEBUG_DEVELOPER);
                    RoomHelper::write_log_event($plugnmeet->id, 'after_evaluate_completion', $e->getMessage());
                }

                // 5. Save aggregated stats and attendance.
                self::save_user_stats((int)$userid, $plugnmeet, $aggregatedstats, $results['all_met'], $statsrecord);

                // 6. Update Grade (Partial Progress). AI Tutor keeps the best summary score.
                $gradeprogress = $results['progress'];
                if (self::is_ai_graded($plugnmeet) && !empty($aggregatedstats['ai_sessions_completed'])) {
                    $gradeprogress = (float)$aggregatedstats['ai_best_score'];
                }
                self::update_grade((int)$userid, $plugnmeet, $gradeprogress);

                // 7. If ALL criteria met, mark as complete.
                if ($results['all_met']) {
                    self::mark_as_complete((int)$userid, $cm);
                }

                if ($results['metcount'] > 0) {
                    self::invalidate_completion_cache((int)$userid, $plugnmeet->course, (int)$cm->id);
                }
            }
        } catch (\Exception $e) {
            RoomHelper::write_log_event($plugnmeet->id, 'update_completion_for_room', $e->getMessage());
            return false;
        }

        return true;
    }

    /**
     * Aggregate an AI agent session summary into the user's stats, completion and grade.
     *
     * @param \stdClass $plugnmeet
     * @param string $artifactid
     * @param \Mynaparrot\PlugnmeetProto\RoomArtifactMetadata|null $metadata
     * @return bool
     */
    public static function update_ai_session_summary(\stdClass $plugnmeet, string $artifactid, $metadata = null): bool {
        global $DB;

        $summary = RoomHelper::get_ai_agent_session_summary($artifactid);
        if (!$summary) {
            return false;
        }

        $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id);
        if (!$cm) {
            return false;
        }

        $summaryuserinfo = $summary['user_info'] ?? [];
        $metadatauserinfo = $metadata?->getUserInfo();
        $userid = ($summaryuserinfo['ex_user_id'] ?? null)
            ?: ($summaryuserinfo['user_id'] ?? null)
            ?: ($metadatauserinfo?->getExUserId() ?: $metadatauserinfo?->getUserId());

        if (!$userid || !is_numeric($userid) || !$DB->record_exists('user', ['id' => (int)$userid])) {
            return false;
        }
        $userid = (int)$userid;

        $statsrecord = $DB->get_record('plugnmeet_user_stats', ['plugnmeetid' => $plugnmeet->id, 'userid' => $userid]);
        $aggregatedstats = ($statsrecord && !empty($statsrecord->statsdata)) ? (json_decode($statsrecord->statsdata, true) ?: []) : [];

        // Count each artifact only once.
        if ((string)($aggregatedstats['ai_session_summary']['artifact_id'] ?? '') !== $artifactid) {
            $aggregatedstats['ai_sessions_completed'] = (int)($aggregatedstats['ai_sessions_completed'] ?? 0) + 1;

            // Fold the AI session activity into the attendance counters.
            $aggregatedstats['duration'] = (int)($aggregatedstats['duration'] ?? 0)
                + (int)($summary['session']['duration_seconds'] ?? 0);
            if ((int)($summary['quiz_evaluation']['total_responses'] ?? 0) > 0) {
                $aggregatedstats['voted_poll'] = 1;
            }
            if (!empty($summary['workspace_activity']['whiteboard_used'])) {
                $aggregatedstats['whiteboard_annotated'] = 1;
            }
            if ((int)($summary['session']['turns_count'] ?? 0) > 0) {
                $aggregatedstats['mic_status'] = 1;
            }
        }

        $overallscore = max(0, min(100, (int)($summary['evaluation']['overall_score'] ?? 0)));
        $aggregatedstats['ai_latest_score'] = $overallscore;
        $aggregatedstats['ai_best_score'] = max((int)($aggregatedstats['ai_best_score'] ?? 0), $overallscore);
        $aggregatedstats['ai_session_summary'] = [
            'artifact_id' => $artifactid,
            'topic' => (string)($summary['session']['topic'] ?? ''),
            'agent_display_name' => (string)($summary['session']['agent_display_name'] ?? ''),
            'duration_seconds' => (int)($summary['session']['duration_seconds'] ?? 0),
            'turns_count' => (int)($summary['session']['turns_count'] ?? 0),
            'overall_score' => $overallscore,
            'mastery_level' => (string)($summary['evaluation']['mastery_level'] ?? ''),
            'participation_level' => (string)($summary['evaluation']['participation_level'] ?? ''),
            'narrative_summary' => (string)($summary['narrative_summary'] ?? ''),
            'concepts_mastered' => array_values((array)($summary['evaluation']['concepts_mastered'] ?? [])),
            'concepts_practiced' => array_values((array)($summary['evaluation']['concepts_practiced'] ?? [])),
            'struggled_with' => array_values((array)($summary['evaluation']['struggled_with'] ?? [])),
            'quiz_total' => (int)($summary['quiz_evaluation']['total_quizzes'] ?? 0),
            'quiz_accuracy_percent' => (int)($summary['quiz_evaluation']['accuracy_percent'] ?? 0),
            'next_session_focus' => (string)($summary['continuation']['next_session_focus'] ?? ''),
            'recommended_warm_up' => (string)($summary['continuation']['recommended_warm_up'] ?? ''),
            'unfinished_subtopics' => array_values((array)($summary['continuation']['unfinished_subtopics'] ?? [])),
            'previous_session_context_prompt' => (string)($summary['continuation']['previous_session_context_prompt'] ?? ''),
            'generated_at' => (string)($summary['generated_at'] ?? ''),
        ];

        $results = self::evaluate_criteria($aggregatedstats, $plugnmeet);

        // Hook to allow modification of completion results.
        try {
            foreach (ExtensionManager::get_completion_addons() as $addon) {
                $results = $addon->after_evaluate_completion($results, $aggregatedstats, $plugnmeet, $userid);
            }
        } catch (Exception $e) {
            debugging('Error in PlugNmeet subplugin after_evaluate_completion: ' . $e->getMessage(), DEBUG_DEVELOPER);
            RoomHelper::write_log_event($plugnmeet->id, 'after_evaluate_completion', $e->getMessage());
        }

        self::save_user_stats($userid, $plugnmeet, $aggregatedstats, $results['all_met'], $statsrecord);

        $gradeprogress = self::is_ai_graded($plugnmeet)
            ? (float)$aggregatedstats['ai_best_score']
            : (float)$results['progress'];
        self::update_grade($userid, $plugnmeet, $gradeprogress);

        if ($results['all_met']) {
            self::mark_as_complete($userid, $cm);
        }

        if ($results['metcount'] > 0 || $results['all_met']) {
            self::invalidate_completion_cache($userid, (int)$plugnmeet->course, (int)$cm->id);
        }

        return true;
    }

    /**
     * Whether the grade comes from AI session summaries instead of attendance progress.
     *
     * @param \stdClass $plugnmeet
     * @return bool
     */
    private static function is_ai_graded(\stdClass $plugnmeet): bool {
        if (!(bool)(get_config('mod_plugnmeet', 'enable_ai_agent') ?? 1)) {
            return false;
        }
        $roommetadata = json_decode($plugnmeet->roommetadata ?? '', true) ?: [];

        return (bool)($roommetadata['ai_grade_from_summary'] ?? (($roommetadata['activity_mode'] ?? 'conference') === 'ai_tutor'));
    }

    /**
     * Records that a participant has joined. Used for attendance when no criteria are set.
     *
     * @param int $userid
     * @param \stdClass $plugnmeet
     * @return bool
     */
    public static function record_participant_join(int $userid, \stdClass $plugnmeet): bool {
        global $DB;

        // Skip recording join for external guests (they won't have a record in Moodle's user table).
        if (!$DB->record_exists('user', ['id' => $userid])) {
            return false;
        }

        $statsrecord = $DB->get_record('plugnmeet_user_stats', ['plugnmeetid' => $plugnmeet->id, 'userid' => $userid]);

        $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id, 0, false, MUST_EXIST);
        if (!$cm) {
            return false;
        }

        $completion = new \completion_info(get_course($cm->course));
        // Attendance Logic.
        $ispresent = 0;
        if (!$completion->is_enabled($cm)) {
            // If NO custom completion criteria are set, mark as present immediately upon joining.
            $ispresent = 1;
        }

        $data = new \stdClass();
        $data->plugnmeetid = $plugnmeet->id;
        $data->userid = $userid;
        $data->timemodified = time();

        if ($statsrecord) {
            $data->id = $statsrecord->id;
            // Never downgrade presence from 1 to 0.
            $data->is_present = max($ispresent, $statsrecord->is_present);
            $DB->update_record('plugnmeet_user_stats', $data);
        } else {
            $data->is_present = $ispresent;
            $data->statsdata = json_encode([]);
            $DB->insert_record('plugnmeet_user_stats', $data);
        }

        return true;
    }

    /**
     * Save user stats to database for later UI reporting using JSON.
     *
     * @param int $userid
     * @param \stdClass $plugnmeet
     * @param array $aggregatedstats
     * @param bool $allmet
     * @param \stdClass|null $statsrecord
     */
    private static function save_user_stats(int $userid, \stdClass $plugnmeet, array $aggregatedstats, bool $allmet, $statsrecord = null): void {
        global $DB;

        // Attendance Logic.
        $ispresent = self::calculate_is_present($plugnmeet, $aggregatedstats, $allmet);

        $data = new \stdClass();
        $data->plugnmeetid = $plugnmeet->id;
        $data->userid = $userid;
        $data->statsdata = json_encode($aggregatedstats);
        $data->is_present = $ispresent;
        $data->timemodified = time();

        if ($statsrecord) {
            $data->id = $statsrecord->id;
            // Attendance status only upgrades from 0 to 1, never back to 0.
            $data->is_present = max($ispresent, $statsrecord->is_present);
            $DB->update_record('plugnmeet_user_stats', $data);
        } else {
            $DB->insert_record('plugnmeet_user_stats', $data);
        }
    }

    /**
     * Calculate if the user is present.
     *
     * @param \stdClass $plugnmeet
     * @param array $aggregatedstats
     * @param bool $allmet
     * @return int
     */
    private static function calculate_is_present(\stdClass $plugnmeet, array $aggregatedstats, bool $allmet): int {
        $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id);
        $completion = new \completion_info(get_course($cm->course));

        if (!$completion->is_enabled($cm)) {
            return 1;
        }

        if (!empty($plugnmeet->completionminutes)) {
            $requiredseconds = (int)$plugnmeet->completionminutes * 60;
            return (($aggregatedstats['duration'] ?? 0) >= $requiredseconds) ? 1 : 0;
        }

        // If other criteria are set but not minutes, meet ANY/ALL criteria makes them present.
        return $allmet ? 1 : 0;
    }

    /**
     * Evaluate criteria and return progress.
     *
     * @param array $aggregatedstats Statistics already in seconds/counts format.
     * @param \stdClass $plugnmeet
     * @return array ['all_met' => bool, 'progress' => float, 'metcount' => int]
     */
    public static function evaluate_criteria(array $aggregatedstats, \stdClass $plugnmeet): array {
        $enabledcount = 0;
        $metcount = 0;

        // 1. Check duration.
        if (!empty($plugnmeet->completionminutes)) {
            $enabledcount++;
            $required = (int)$plugnmeet->completionminutes * 60;
            if (($aggregatedstats['duration'] ?? 0) >= $required) {
                $metcount++;
            }
        }

        // 2. Check raised hand.
        if (!empty($plugnmeet->completionraisedhand)) {
            $enabledcount++;
            if (($aggregatedstats['raise_hand'] ?? 0) > 0) {
                $metcount++;
            }
        }

        // 3. Check chat messages.
        if (!empty($plugnmeet->completionchatmessages)) {
            $enabledcount++;
            if (($aggregatedstats['chat_messages'] ?? 0) > 0) {
                $metcount++;
            }
        }

        // 4. Check webcam enabled.
        if (!empty($plugnmeet->completionwebcam)) {
            $enabledcount++;
            if (($aggregatedstats['webcam_status'] ?? 0) > 0) {
                $metcount++;
            }
        }

        // 5. Check webcam duration.
        if (!empty($plugnmeet->completionwebcamduration)) {
            $enabledcount++;
            $required = (int)$plugnmeet->completionwebcamduration * 60;
            if (($aggregatedstats['webcam_duration'] ?? 0) >= $required) {
                $metcount++;
            }
        }

        // 6. Check mic enabled.
        if (!empty($plugnmeet->completionmic)) {
            $enabledcount++;
            if (($aggregatedstats['mic_status'] ?? 0) > 0) {
                $metcount++;
            }
        }

        // 7. Check mic duration.
        if (!empty($plugnmeet->completionmicduration)) {
            $enabledcount++;
            $required = (int)$plugnmeet->completionmicduration * 60;
            if (($aggregatedstats['mic_duration'] ?? 0) >= $required) {
                $metcount++;
            }
        }

        // 8. Check talk duration.
        if (!empty($plugnmeet->completiontalkduration)) {
            $enabledcount++;
            $required = (int)$plugnmeet->completiontalkduration * 60;
            if (($aggregatedstats['talked_duration'] ?? 0) >= $required) {
                $metcount++;
            }
        }

        // 9. Check poll voted.
        if (!empty($plugnmeet->completionpollvoted)) {
            $enabledcount++;
            if (($aggregatedstats['voted_poll'] ?? 0) > 0) {
                $metcount++;
            }
        }

        // 10. Check whiteboard annotated.
        if (!empty($plugnmeet->completionwhiteboardannotated)) {
            $enabledcount++;
            if (($aggregatedstats['whiteboard_annotated'] ?? 0) > 0) {
                $metcount++;
            }
        }

        // 11. Check AI session completed.
        if (!empty($plugnmeet->completionaisessioncompleted)) {
            $enabledcount++;
            if (($aggregatedstats['ai_sessions_completed'] ?? 0) > 0) {
                $metcount++;
            }
        }

        // 12. Check AI best score.
        if (!empty($plugnmeet->completionaiminscore)) {
            $enabledcount++;
            if (($aggregatedstats['ai_best_score'] ?? 0) >= (int)$plugnmeet->completionaiminscore) {
                $metcount++;
            }
        }

        if ($enabledcount === 0) {
            return ['all_met' => true, 'progress' => 100.0, 'metcount' => 0];
        }

        return [
            'all_met' => ($metcount === $enabledcount),
            'progress' => ($metcount / $enabledcount) * 100.0,
            'metcount' => $metcount,
        ];
    }

    /**
     * Update the user's grade in the Moodle Gradebook.
     *
     * @param int $userid
     * @param \stdClass $plugnmeet
     * @param float $progress 0-100
     */
    private static function update_grade(int $userid, $plugnmeet, float $progress): void {
        // Only point-based grades can be derived from completion progress.
        // Grade type None (0) and scale grades (negative) are not auto-updated here.
        if (empty($plugnmeet->grade) || $plugnmeet->grade < 0) {
            return;
        }

        // Calculate actual grade based on activity max grade.
        $gradevalue = ($progress / 100.0) * $plugnmeet->grade;

        $grade = new \stdClass();
        $grade->userid = $userid;
        $grade->rawgrade = $gradevalue;

        plugnmeet_grade_item_update($plugnmeet, $grade);
    }

    /**
     * Mark the activity as complete for a user.
     *
     * @param int $userid
     * @param \stdClass $cm
     */
    private static function mark_as_complete(int $userid, $cm): void {
        $completion = new \completion_info(get_course($cm->course));
        if ($completion->is_enabled($cm)) {
            $completion->update_state($cm, COMPLETION_COMPLETE, $userid);
        }
    }

    /**
     * Clears the completion cache for a specific user, course, and module.
     *
     * @param int $userid
     * @param int $courseid
     * @param int $cmid
     */
    private static function invalidate_completion_cache(int $userid, int $courseid, int $cmid): void {
        $completioncache = cache::make('core', 'completion');
        $cachekey = $userid . '_' . $courseid;
        $completiondata = $completioncache->get($cachekey);

        if ($completiondata !== false) {
            unset($completiondata[$cmid]);
            $completioncache->set($cachekey, $completiondata);
        }
    }
}
