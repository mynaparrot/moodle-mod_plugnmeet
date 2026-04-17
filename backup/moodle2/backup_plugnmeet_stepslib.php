<?php

/**
 * Define all the backup steps for mod_plugnmeet.
 *
 * @package    mod_plugnmeet
 * @copyright  2024 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Define the structure step for mod_plugnmeet.
 */
class backup_plugnmeet_activity_structure_step extends backup_activity_structure_step {

    /**
     * Define the structure of the plugnmeet activity.
     */
    protected function define_structure() {

        // To know if we are including userinfo.
        $userinfo = $this->get_setting_value('userinfo');

        // Define each element.
        $plugnmeet = new backup_nested_element('plugnmeet', ['id'], [
            'name', 'roomid', 'welcomemessage', 'maxparticipants', 'roommetadata',
            'timecreated', 'timemodified', 'intro', 'introformat',
            'available', 'deadline', 'usermodified', 'grade',
            'completionminutes', 'completionraisedhand', 'completionchatmessages',
            'completionwebcam', 'completionmic'
        ]);

        $userstats = new backup_nested_element('user_stats');

        $userstat = new backup_nested_element('user_stat', ['id'], [
            'userid', 'statsdata', 'timemodified'
        ]);

        // Build the tree.
        $plugnmeet->add_child($userstats);
        $userstats->add_child($userstat);

        // Define sources.
        $plugnmeet->set_source_table('plugnmeet', ['id' => backup::VAR_ACTIVITYID]);

        if ($userinfo) {
            $userstat->set_source_table('plugnmeet_user_stats', ['plugnmeetid' => backup::VAR_PARENTID]);
        }

        // Define id annotations.
        $plugnmeet->annotate_ids('user', 'usermodified');
        $userstat->annotate_ids('user', 'userid');

        // Define file annotations (if you store files in intro).
        $plugnmeet->annotate_files('mod_plugnmeet', 'intro', 'id');

        // Return the root element (plugnmeet).
        return $this->prepare_activity_structure($plugnmeet);
    }
}
