<?php

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
    static public function define_decode_rules() {
        $rules = [];

        $rules[] = new restore_decode_rule('PLUGNMEETVIEWBYID', '/mod/plugnmeet/view.php?id=$1', 'course_module');
        $rules[] = new restore_decode_rule('PLUGNMEETINDEX', '/mod/plugnmeet/index.php?id=$1', 'course');

        return $rules;
    }

    /**
     * Define the decoding rules for logs in this activity.
     */
    static public function define_restore_log_rules() {
        $rules = [];

        $rules[] = new restore_log_rule('plugnmeet', 'add', 'view.php?id={course_module}', '{name}');
        $rules[] = new restore_log_rule('plugnmeet', 'update', 'view.php?id={course_module}', '{name}');
        $rules[] = new restore_log_rule('plugnmeet', 'view', 'view.php?id={course_module}', '{name}');

        return $rules;
    }
}
