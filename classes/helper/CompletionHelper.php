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

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/mod/plugnmeet/lib.php');
require_once($CFG->dirroot . '/lib/completionlib.php');

/**
 * Helper class for handling activity completion.
 *
 * @package    mod_plugnmeet
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

                // 5. Save aggregated stats and attendance.
                self::save_user_stats((int)$userid, $plugnmeet, $aggregatedstats, $results['all_met'], $statsrecord);

                // 6. Update Grade (Partial Progress).
                self::update_grade((int)$userid, $plugnmeet, $results['progress']);

                // 7. If ALL criteria met, mark as complete.
                if ($results['all_met']) {
                    self::mark_as_complete((int)$userid, $cm);
                }

                if ($results['metcount'] > 0) {
                    self::invalidate_completion_cache((int)$userid, $plugnmeet->course, (int)$cm->id);
                }
            }
        } catch (\Exception $e) {
            return false;
        }

        return true;
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
