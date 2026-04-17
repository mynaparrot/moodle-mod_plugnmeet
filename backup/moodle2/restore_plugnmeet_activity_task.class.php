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

/**
 * Activity task for mod_plugnmeet restore.
 *
 * @package    mod_plugnmeet
 * @copyright  2024 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/plugnmeet/backup/moodle2/restore_plugnmeet_stepslib.php');

/**
 * Activity task for mod_plugnmeet restore.
 */
class restore_plugnmeet_activity_task extends restore_activity_task {
    /**
     * Define particular settings this activity can have.
     */
    protected function define_my_settings() {
        // No particular settings for this activity.
    }

    /**
     * Define particular steps this activity can have.
     */
    protected function define_my_steps() {
        $this->add_step(new restore_plugnmeet_activity_structure_step('plugnmeet_structure', 'plugnmeet.xml'));
    }

    /**
     * Define the decoding rules for links in this activity.
     */
    public static function define_decode_rules() {
        $rules = [];

        $rules[] = new restore_decode_rule('PLUGNMEETVIEWBYID', '/mod/plugnmeet/view.php?id=$1', 'course_module');
        $rules[] = new restore_decode_rule('PLUGNMEETINDEX', '/mod/plugnmeet/index.php?id=$1', 'course');

        return $rules;
    }

    /**
     * Define the decoding rules for logs in this activity.
     */
    public static function define_restore_log_rules() {
        $rules = [];

        $rules[] = new restore_log_rule('plugnmeet', 'add', 'view.php?id={course_module}', '{name}');
        $rules[] = new restore_log_rule('plugnmeet', 'update', 'view.php?id={course_module}', '{name}');
        $rules[] = new restore_log_rule('plugnmeet', 'view', 'view.php?id={course_module}', '{name}');

        return $rules;
    }
}
