<?php

/**
 * Activity task for mod_plugnmeet.
 *
 * @package    mod_plugnmeet
 * @copyright  2024 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/plugnmeet/backup/moodle2/backup_plugnmeet_stepslib.php');

/**
 * Activity task for mod_plugnmeet.
 */
class backup_plugnmeet_activity_task extends backup_activity_task {

    /**
     * Define (add) particular settings this activity can have.
     */
    protected function define_my_settings() {
        // No particular settings for this activity.
    }

    /**
     * Define (add) particular steps this activity can have.
     */
    protected function define_my_steps() {
        $this->add_step(new backup_plugnmeet_activity_structure_step('plugnmeet_structure', 'plugnmeet.xml'));
    }

    /**
     * Code the substitutions to happen in titles for this activity.
     */
    static public function encode_content_links($content) {
        global $CFG;

        $base = preg_quote($CFG->wwwroot . '/mod/plugnmeet', '/');

        // Link to the list of plugnmeets.
        $search = "/(" . $base . "\/index.php\?id\=)([0-9]+)/";
        $content = preg_replace($search, '$@PLUGNMEETINDEX*$2@$', $content);

        // Link to plugnmeet view by moduleid.
        $search = "/(" . $base . "\/view.php\?id\=)([0-9]+)/";
        $content = preg_replace($search, '$@PLUGNMEETVIEWBYID*$2@$', $content);

        return $content;
    }
}
