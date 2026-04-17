<?php

namespace mod_plugnmeet\helper;

use coding_exception;

defined('MOODLE_INTERNAL') || die();

require_once($GLOBALS['CFG']->dirroot . '/mod/plugnmeet/lib.php');
require_once($GLOBALS['CFG']->dirroot . '/lib/completionlib.php');

/**
 * Helper class for handling activity completion.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class CompletionHelper
{
    /**
     * Update completion and grades for all users in a room based on its analytics.
     *
     * @param \stdClass $plugnmeet
     * @param string $artifact_id
     * @return bool
     * @throws coding_exception
     */
    public static function update_completion_for_room(\stdClass $plugnmeet, string $artifact_id): bool
    {
        $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id);
        if (!$cm) {
            return false;
        }

        try {
            $analytics = new AnalyticsHelper($artifact_id);
            $data = $analytics->get_formatted_event_data();
            $users = $data['users'] ?? [];

            foreach ($users as $user) {
                $userid = $user['ex_user_id'] ?? null;
                if (!$userid) {
                    continue;
                }

                // Check criteria and calculate progress.
                $results = self::evaluate_criteria($user, $plugnmeet);

                // Save individual stats and attendance.
                self::save_user_stats($userid, $plugnmeet, $user, $results['all_met']);

                // Update Grade (Partial Progress).
                self::update_grade($userid, $plugnmeet, $results['progress']);

                // If ALL criteria met, mark as complete.
                if ($results['all_met']) {
                    self::mark_as_complete($userid, $cm);
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
    public static function record_participant_join(int $userid, \stdClass $plugnmeet) {
        global $DB;

        $stats_record = $DB->get_record('plugnmeet_user_stats', ['plugnmeetid' => $plugnmeet->id, 'userid' => $userid]);

        $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id, 0, false, MUST_EXIST);
        if (!$cm) {
            return false;
        }

        $completion = new \completion_info(get_course($cm->course));
        // Attendance Logic:
        $is_present = 0;
        if (!$completion->is_enabled($cm)) {
            // If NO custom completion criteria are set, mark as present immediately upon joining.
            $is_present = 1;
        }

        $data = new \stdClass();
        $data->plugnmeetid = $plugnmeet->id;
        $data->userid = $userid;
        $data->timemodified = time();

        if ($stats_record) {
            $data->id = $stats_record->id;
            // Never downgrade presence from 1 to 0.
            $data->is_present = max($is_present, $stats_record->is_present);
            $DB->update_record('plugnmeet_user_stats', $data);
        } else {
            $data->is_present = $is_present;
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
     * @param array $user_data
     * @param bool $all_criteria_met
     */
    private static function save_user_stats(int $userid, \stdClass $plugnmeet, array $user_data, bool $all_criteria_met) {
        global $DB;

        $stats_record = $DB->get_record('plugnmeet_user_stats', ['plugnmeetid' => $plugnmeet->id, 'userid' => $userid]);
        $current_stats = [];
        if ($stats_record && !empty($stats_record->statsdata)) {
            $current_stats = json_decode($stats_record->statsdata, true) ?: [];
        }

        $new_stats = [
            'minutes' => (int)(($user_data['duration'] ?? 0) / 60),
            'raisedhand' => (int)($user_data['raise_hand'] ?? 0),
            'chatmessages' => (int)(($user_data['public_chat'] ?? 0) + ($user_data['private_chat'] ?? 0)),
            'webcam' => (int)(($user_data['webcam_status'] ?? 0) > 0 ? 1 : 0),
            'mic' => (int)(($user_data['mic_status'] ?? 0) > 0 ? 1 : 0),
        ];

        // Merge stats using max values.
        foreach ($new_stats as $key => $value) {
            $current_stats[$key] = max($value, ($current_stats[$key] ?? 0));
        }

        // Attendance Logic:
        $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id);
        $completion = new \completion_info(get_course($cm->course));
        
        $is_present = 0;
        if ($completion->is_enabled($cm)) {
            if (!empty($plugnmeet->completionminutes)) {
                $required_seconds = (int)$plugnmeet->completionminutes * 60;
                if (($user_data['duration'] ?? 0) >= $required_seconds) {
                    $is_present = 1;
                }
            } else {
                // If other criteria are set but not minutes, meet ANY/ALL criteria makes them present.
                if ($all_criteria_met) {
                    $is_present = 1;
                }
            }
        } else {
            // Completion disabled, any join data makes them present.
            $is_present = 1;
        }

        $data = new \stdClass();
        $data->plugnmeetid = $plugnmeet->id;
        $data->userid = $userid;
        $data->statsdata = json_encode($current_stats);
        $data->is_present = $is_present;
        $data->timemodified = time();

        if ($stats_record) {
            $data->id = $stats_record->id;
            // Attendance status only upgrades from 0 to 1, never back to 0.
            $data->is_present = max($is_present, $stats_record->is_present);
            $DB->update_record('plugnmeet_user_stats', $data);
        } else {
            $DB->insert_record('plugnmeet_user_stats', $data);
        }
    }

    /**
     * Evaluate criteria and return progress.
     *
     * @param array $user_data
     * @param \stdClass $plugnmeet
     * @return array ['all_met' => bool, 'progress' => float]
     */
    private static function evaluate_criteria(array $user_data, \stdClass $plugnmeet): array
    {
        $enabled_count = 0;
        $met_count = 0;

        // 1. Check duration (minutes).
        if (!empty($plugnmeet->completionminutes)) {
            $enabled_count++;
            $required_seconds = (int)$plugnmeet->completionminutes * 60;
            if (($user_data['duration'] ?? 0) >= $required_seconds) {
                $met_count++;
            }
        }

        // 2. Check raised hand.
        if (!empty($plugnmeet->completionraisedhand)) {
            $enabled_count++;
            if (($user_data['raise_hand'] ?? 0) > 0) {
                $met_count++;
            }
        }

        // 3. Check chat messages.
        if (!empty($plugnmeet->completionchatmessages)) {
            $enabled_count++;
            $public_chat = $user_data['public_chat'] ?? 0;
            $private_chat = $user_data['private_chat'] ?? 0;
            if (($public_chat + $private_chat) > 0) {
                $met_count++;
            }
        }

        // 4. Check webcam enabled.
        if (!empty($plugnmeet->completionwebcam)) {
            $enabled_count++;
            if (($user_data['webcam_status'] ?? 0) > 0) {
                $met_count++;
            }
        }

        // 5. Check mic enabled.
        if (!empty($plugnmeet->completionmic)) {
            $enabled_count++;
            if (($user_data['mic_status'] ?? 0) > 0) {
                $met_count++;
            }
        }

        if ($enabled_count === 0) {
            return ['all_met' => true, 'progress' => 100.0];
        }

        return [
            'all_met' => ($met_count === $enabled_count),
            'progress' => ($met_count / $enabled_count) * 100.0
        ];
    }

    /**
     * Update the user's grade in the Moodle Gradebook.
     *
     * @param int $userid
     * @param \stdClass $plugnmeet
     * @param float $progress 0-100
     */
    private static function update_grade(int $userid, $plugnmeet, float $progress)
    {
        // Calculate actual grade based on activity max grade.
        $grade_value = ($progress / 100.0) * $plugnmeet->grade;

        $grade = new \stdClass();
        $grade->userid = $userid;
        $grade->rawgrade = $grade_value;

        plugnmeet_grade_item_update($plugnmeet, $grade);
    }

    /**
     * Mark the activity as complete for a user.
     *
     * @param int $userid
     * @param \cm_info $cm
     */
    private static function mark_as_complete(int $userid, $cm)
    {
        $completion = new \completion_info(get_course($cm->course));
        if ($completion->is_enabled($cm)) {
            $completion->update_state($cm, COMPLETION_COMPLETE, $userid);
        }
    }
}
