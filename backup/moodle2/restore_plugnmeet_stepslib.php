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
 * Define all the restore steps for mod_plugnmeet.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
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
        $paths[] = new restore_path_element('session', '/activity/plugnmeet/sessions/session');
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
        $data->eventid = 0; // Fresh calendar event will be created later if needed.

        // Insert the plugnmeet record.
        $newid = $DB->insert_record('plugnmeet', $data);

        // Add mapping.
        $this->set_mapping('plugnmeet', $oldid, $newid);
    }

    /**
     * Process the session element.
     */
    protected function process_session($data) {
        global $DB;

        $data = (object)$data;
        $data->plugnmeetid = $this->get_new_parentid('plugnmeet');

        $DB->insert_record('plugnmeet_sessions', $data);
    }

    /**
     * Process the user_stat element.
     */
    protected function process_user_stat($data) {
        global $DB;

        $data = (object)$data;

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
        global $DB, $CFG;
        // Add files.
        $this->add_related_files('mod_plugnmeet', 'intro', 'plugnmeet');

        // Recreate calendar events.
        $plugnmeetid = $this->get_new_parentid('plugnmeet');
        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $plugnmeetid]);

        if ($plugnmeet) {
             // Moodle activities typically use a helper to update calendar events.
             // Include lib.php using the standard Moodle path.
             require_once($CFG->dirroot . '/mod/plugnmeet/lib.php');
            if (function_exists('plugnmeet_update_calendar_event')) {
                plugnmeet_update_calendar_event($plugnmeet);
            }
        }
    }
}
