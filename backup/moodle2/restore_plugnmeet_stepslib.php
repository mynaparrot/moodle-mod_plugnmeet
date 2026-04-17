<?php

/**
 * Define all the restore steps for mod_plugnmeet.
 *
 * @package    mod_plugnmeet
 * @copyright  2024 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Define the structure step for mod_plugnmeet restore.
 */
class restore_plugnmeet_activity_structure_step extends restore_activity_structure_step {

    /**
     * Define the structure of the plugnmeet activity.
     */
    protected function define_structure() {

        $paths = [];

        $paths[] = new restore_path_element('plugnmeet', '/activity/plugnmeet');
        $paths[] = new restore_path_element('user_stat', '/activity/plugnmeet/user_stats/user_stat');

        // Return the paths wrapped into standard activity structure.
        return $this->prepare_activity_structure($paths);
    }

    /**
     * Process the plugnmeet element.
     */
    protected function process_plugnmeet($data) {
        global $DB;

        $data = (object)$data;
        $oldid = $data->id;
        $data->course = $this->get_courseid();

        // Map user ID.
        $data->usermodified = $this->get_mappingid('user', $data->usermodified);

        // Reset some fields that shouldn't be copied or need fresh values.
        $data->roomid = \mod_plugnmeet\helper\plugNmeetConnect::generateUuid4();
        $data->eventid = 0; // Fresh calendar event will be created later if needed.

        // Insert the plugnmeet record.
        $newid = $DB->insert_record('plugnmeet', $data);

        // Add mapping.
        $this->set_mapping('plugnmeet', $oldid, $newid);
    }

    /**
     * Process the user_stat element.
     */
    protected function process_user_stat($data) {
        global $DB;

        $data = (object)$data;
        $oldid = $data->id;

        $data->plugnmeetid = $this->get_new_parentid('plugnmeet');
        $data->userid = $this->get_mappingid('user', $data->userid);

        if ($data->userid) {
            $DB->insert_record('plugnmeet_user_stats', $data);
        }
    }

    /**
     * After restore logic.
     */
    protected function after_execute() {
        // Add files.
        $this->add_related_files('mod_plugnmeet', 'intro', 'plugnmeet');

        // Handle calendar events (optional, Moodle core might handle some automatically).
        // If you want to recreate the 'available' event, call your helper here.
        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $this->get_new_parentid('plugnmeet')]);
        if ($plugnmeet) {
             plugnmeet_update_calendar_event($plugnmeet);
        }
    }
}
