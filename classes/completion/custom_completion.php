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

/**
 * Custom completion for the plugnmeet module.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_plugnmeet\completion;

use core_completion\activity_custom_completion;

/**
 * Custom completion class for the plugnmeet module.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class custom_completion extends activity_custom_completion {
    /**
     * Maps user stats fields to activity completion fields.
     *
     * @return array [stats_key => completion_field]
     */
    public static function get_field_mapping(): array {
        return [
            'duration' => 'completionminutes',
            'raise_hand' => 'completionraisedhand',
            'chat_messages' => 'completionchatmessages',
            'webcam_status' => 'completionwebcam',
            'webcam_duration' => 'completionwebcamduration',
            'mic_status' => 'completionmic',
            'mic_duration' => 'completionmicduration',
            'talked_duration' => 'completiontalkduration',
            'voted_poll' => 'completionpollvoted',
            'whiteboard_annotated' => 'completionwhiteboardannotated',
        ];
    }

    /**
     * Returns an associative array of the descriptions of custom completion rules.
     *
     * @return array
     */
    public function get_custom_rule_descriptions(): array {
        $customdata = (array)$this->cm->customdata;
        $rules = $customdata['customcompletionrules'] ?? [];
        $mapping = self::get_field_mapping();

        return [
            $mapping['duration'] => get_string('completion_minutes_desc', 'mod_plugnmeet', $rules[$mapping['duration']] ?? 0),
            $mapping['raise_hand'] => get_string('completion_raised_hand', 'mod_plugnmeet'),
            $mapping['chat_messages'] => get_string('completion_chat_messages', 'mod_plugnmeet'),
            $mapping['webcam_status'] => get_string('completion_webcam_enabled', 'mod_plugnmeet'),
            $mapping['webcam_duration'] => get_string('completion_webcam_duration_desc', 'mod_plugnmeet', $rules[$mapping['webcam_duration']] ?? 0),
            $mapping['mic_status'] => get_string('completion_mic_enabled', 'mod_plugnmeet'),
            $mapping['mic_duration'] => get_string('completion_mic_duration_desc', 'mod_plugnmeet', $rules[$mapping['mic_duration']] ?? 0),
            $mapping['talked_duration'] => get_string('completion_talk_duration_desc', 'mod_plugnmeet', $rules[$mapping['talked_duration']] ?? 0),
            $mapping['voted_poll'] => get_string('completion_poll_voted', 'mod_plugnmeet'),
            $mapping['whiteboard_annotated'] => get_string('completion_whiteboard_annotated', 'mod_plugnmeet'),
        ];
    }

    /**
     * Fetches the completion state for a given completion rule.
     *
     * @param string $rule The completion rule.
     * @return int The completion state.
     */
    public function get_state(string $rule): int {
        global $DB;

        $statsrecord = $DB->get_record('plugnmeet_user_stats', [
            'plugnmeetid' => $this->cm->instance,
            'userid' => $this->userid,
        ]);

        if (!$statsrecord || empty($statsrecord->statsdata)) {
            return COMPLETION_INCOMPLETE;
        }

        $stats = json_decode($statsrecord->statsdata, true);
        if (!$stats) {
            return COMPLETION_INCOMPLETE;
        }

        $customdata = (array)$this->cm->customdata;
        $rules = $customdata['customcompletionrules'] ?? [];
        $mapping = array_flip(self::get_field_mapping());

        if (!isset($mapping[$rule])) {
            return COMPLETION_INCOMPLETE;
        }

        $statskey = $mapping[$rule];
        $actual = (int)($stats[$statskey] ?? 0);

        // Handle duration-based rules (value is required minutes, actual is seconds).
        $durationrules = ['completionminutes', 'completionwebcamduration', 'completionmicduration', 'completiontalkduration'];
        if (in_array($rule, $durationrules)) {
            $requiredseconds = (int)($rules[$rule] ?? 0) * 60;
            return ($actual >= $requiredseconds) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
        }

        // Handle count-based or boolean rules (at least 1 is required).
        return ($actual > 0) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
    }

    /**
     * Fetch the list of custom completion rules that this module defines.
     *
     * @return array
     */
    public static function get_defined_custom_rules(): array {
        return array_values(self::get_field_mapping());
    }

    /**
     * Returns an array of all completion rules, in the order they should be displayed to users.
     *
     * @return array
     */
    public function get_sort_order(): array {
        return array_values(self::get_field_mapping());
    }
}
