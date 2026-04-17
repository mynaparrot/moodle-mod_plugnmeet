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

                // Check criteria and calculate progress.
                $results = self::evaluate_criteria($user, $plugnmeet);

                // Save individual stats and attendance.
                self::save_user_stats((int)$userid, $plugnmeet, $user, $results['all_met']);

                // Update Grade (Partial Progress).
                self::update_grade((int)$userid, $plugnmeet, $results['progress']);

                // If ALL criteria met, mark as complete.
                if ($results['all_met']) {
                    self::mark_as_complete((int)$userid, $cm);
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
     * @param array $userdata
     * @param bool $allmet
     */
    private static function save_user_stats(int $userid, \stdClass $plugnmeet, array $userdata, bool $allmet): void {
        global $DB;

        $statsrecord = $DB->get_record('plugnmeet_user_stats', ['plugnmeetid' => $plugnmeet->id, 'userid' => $userid]);
        $currentstats = [];
        if ($statsrecord && !empty($statsrecord->statsdata)) {
            $currentstats = json_decode($statsrecord->statsdata, true) ?: [];
        }

        $newstats = [
            'minutes' => (int)(($userdata['duration'] ?? 0) / 60),
            'raisedhand' => (int)($userdata['raise_hand'] ?? 0),
            'chatmessages' => (int)(($userdata['public_chat'] ?? 0) + ($userdata['private_chat'] ?? 0)),
            'webcam' => (int)(($userdata['webcam_status'] ?? 0) > 0 ? 1 : 0),
            'mic' => (int)(($userdata['mic_status'] ?? 0) > 0 ? 1 : 0),
        ];

        // Merge stats using max values.
        foreach ($newstats as $key => $value) {
            $currentstats[$key] = max($value, ($currentstats[$key] ?? 0));
        }

        // Attendance Logic.
        $ispresent = self::calculate_is_present($plugnmeet, $userdata, $allmet);

        $data = new \stdClass();
        $data->plugnmeetid = $plugnmeet->id;
        $data->userid = $userid;
        $data->statsdata = json_encode($currentstats);
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
     * @param array $userdata
     * @param bool $allmet
     * @return int
     */
    private static function calculate_is_present(\stdClass $plugnmeet, array $userdata, bool $allmet): int {
        $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id);
        $completion = new \completion_info(get_course($cm->course));

        if (!$completion->is_enabled($cm)) {
            return 1;
        }

        if (!empty($plugnmeet->completionminutes)) {
            $requiredseconds = (int)$plugnmeet->completionminutes * 60;
            return (($userdata['duration'] ?? 0) >= $requiredseconds) ? 1 : 0;
        }

        // If other criteria are set but not minutes, meet ANY/ALL criteria makes them present.
        return $allmet ? 1 : 0;
    }

    /**
     * Evaluate criteria and return progress.
     *
     * @param array $userdata
     * @param \stdClass $plugnmeet
     * @return array ['all_met' => bool, 'progress' => float]
     */
    private static function evaluate_criteria(array $userdata, \stdClass $plugnmeet): array {
        $enabledcount = 0;
        $metcount = 0;

        // 1. Check duration (minutes).
        if (!empty($plugnmeet->completionminutes)) {
            $enabledcount++;
            $requiredseconds = (int)$plugnmeet->completionminutes * 60;
            if (($userdata['duration'] ?? 0) >= $requiredseconds) {
                $metcount++;
            }
        }

        // 2. Check raised hand.
        if (!empty($plugnmeet->completionraisedhand)) {
            $enabledcount++;
            if (($userdata['raise_hand'] ?? 0) > 0) {
                $metcount++;
            }
        }

        // 3. Check chat messages.
        if (!empty($plugnmeet->completionchatmessages)) {
            $enabledcount++;
            $publicchat = $userdata['public_chat'] ?? 0;
            $privatechat = $userdata['private_chat'] ?? 0;
            if (($publicchat + $privatechat) > 0) {
                $metcount++;
            }
        }

        // 4. Check webcam enabled.
        if (!empty($plugnmeet->completionwebcam)) {
            $enabledcount++;
            if (($userdata['webcam_status'] ?? 0) > 0) {
                $metcount++;
            }
        }

        // 5. Check mic enabled.
        if (!empty($plugnmeet->completionmic)) {
            $enabledcount++;
            if (($userdata['mic_status'] ?? 0) > 0) {
                $metcount++;
            }
        }

        if ($enabledcount === 0) {
            return ['all_met' => true, 'progress' => 100.0];
        }

        return [
            'all_met' => ($metcount === $enabledcount),
            'progress' => ($metcount / $enabledcount) * 100.0,
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
}
