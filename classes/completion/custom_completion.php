<?php

namespace mod_plugnmeet\completion;

defined('MOODLE_INTERNAL') || die();

use core_completion\activity_custom_completion;

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
            'completionmic' => get_string('completion_mic_enabled', 'mod_plugnmeet'),
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
            'userid' => $this->userid
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
            case 'completionmic':
                $actual = (int)($stats['mic'] ?? 0);
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
            'completionmic',
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
            'completionmic',
        ];
    }
}
