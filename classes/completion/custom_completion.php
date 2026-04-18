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
     * Returns an associative array of the descriptions of custom completion rules.
     *
     * @return array
     */
    public function get_custom_rule_descriptions(): array {
        $customdata = (array)$this->cm->customdata;
        $rules = $customdata['customcompletionrules'] ?? [];

        return [
            'completionminutes' => get_string('completion_minutes_desc', 'mod_plugnmeet', $rules['completionminutes'] ?? 0),
            'completionraisedhand' => get_string('completion_raised_hand', 'mod_plugnmeet'),
            'completionchatmessages' => get_string('completion_chat_messages', 'mod_plugnmeet'),
            'completionwebcam' => get_string('completion_webcam_enabled', 'mod_plugnmeet'),
            'completionwebcamduration' => get_string('completion_webcam_duration_desc', 'mod_plugnmeet', $rules['completionwebcamduration'] ?? 0),
            'completionmic' => get_string('completion_mic_enabled', 'mod_plugnmeet'),
            'completionmicduration' => get_string('completion_mic_duration_desc', 'mod_plugnmeet', $rules['completionmicduration'] ?? 0),
            'completiontalkduration' => get_string('completion_talk_duration_desc', 'mod_plugnmeet', $rules['completiontalkduration'] ?? 0),
            'completionpollvoted' => get_string('completion_poll_voted', 'mod_plugnmeet'),
            'completionwhiteboardannotated' => get_string('completion_whiteboard_annotated', 'mod_plugnmeet'),
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

        switch ($rule) {
            case 'completionminutes':
                $required = (int)($rules['completionminutes'] ?? 0);
                $actual = (int)($stats['minutes'] ?? 0);
                return ($actual >= $required) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
            case 'completionraisedhand':
                $actual = (int)($stats['raisedhand'] ?? 0);
                return ($actual > 0) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
            case 'completionchatmessages':
                $actual = (int)($stats['chatmessages'] ?? 0);
                return ($actual > 0) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
            case 'completionwebcam':
                $actual = (int)($stats['webcam'] ?? 0);
                return ($actual > 0) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
            case 'completionwebcamduration':
                $required = (int)($rules['completionwebcamduration'] ?? 0);
                $actual = (int)($stats['webcamduration'] ?? 0);
                return ($actual >= $required) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
            case 'completionmic':
                $actual = (int)($stats['mic'] ?? 0);
                return ($actual > 0) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
            case 'completionmicduration':
                $required = (int)($rules['completionmicduration'] ?? 0);
                $actual = (int)($stats['micduration'] ?? 0);
                return ($actual >= $required) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
            case 'completiontalkduration':
                $required = (int)($rules['completiontalkduration'] ?? 0);
                $actual = (int)($stats['talkduration'] ?? 0);
                return ($actual >= $required) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
            case 'completionpollvoted':
                $actual = (int)($stats['pollvoted'] ?? 0);
                return ($actual > 0) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
            case 'completionwhiteboardannotated':
                $actual = (int)($stats['whiteboardannotated'] ?? 0);
                return ($actual > 0) ? COMPLETION_COMPLETE : COMPLETION_INCOMPLETE;
        }

        return COMPLETION_INCOMPLETE;
    }

    /**
     * Fetch the list of custom completion rules that this module defines.
     *
     * @return array
     */
    public static function get_defined_custom_rules(): array {
        return [
            'completionminutes',
            'completionraisedhand',
            'completionchatmessages',
            'completionwebcam',
            'completionwebcamduration',
            'completionmic',
            'completionmicduration',
            'completiontalkduration',
            'completionpollvoted',
            'completionwhiteboardannotated',
        ];
    }

    /**
     * Returns an array of all completion rules, in the order they should be displayed to users.
     *
     * @return array
     */
    public function get_sort_order(): array {
        return [
            'completionminutes',
            'completionraisedhand',
            'completionchatmessages',
            'completionwebcam',
            'completionwebcamduration',
            'completionmic',
            'completionmicduration',
            'completiontalkduration',
            'completionpollvoted',
            'completionwhiteboardannotated',
        ];
    }
}
