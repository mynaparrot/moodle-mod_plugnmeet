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
 * Define all the backup steps for mod_plugnmeet.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_plugnmeet\backup\moodle2;

use backup_activity_structure_step;
use backup_nested_element;
use backup;
use mod_plugnmeet\helper\ExtensionManager;
use mod_plugnmeet\helper\RoomHelper; // Import RoomHelper.
use Exception; // Import Exception.

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
            'available', 'deadline', 'usermodified', 'grade', 'eventid',
            'allow_guest', 'guest_token',
            'completionminutes', 'completionraisedhand', 'completionchatmessages',
            'completionwebcam', 'completionwebcamduration', 'completionmic',
            'completionmicduration', 'completiontalkduration', 'completionpollvoted',
            'completionwhiteboardannotated',
        ]);

        $sessions = new backup_nested_element('sessions');

        $session = new backup_nested_element('session', ['id'], [
            'sid', 'roomid', 'status', 'analytics_processed',
            'timecreated', 'timemodified',
        ]);

        $userstats = new backup_nested_element('user_stats');

        $userstat = new backup_nested_element('user_stat', ['id'], [
            'userid', 'statsdata', 'is_present', 'timemodified',
        ]);

        // Build the tree.
        $plugnmeet->add_child($sessions);
        $sessions->add_child($session);

        $plugnmeet->add_child($userstats);
        $userstats->add_child($userstat);

        // Add extension tables.
        try {
            foreach (ExtensionManager::get_mod_instance_addons() as $addon) {
                $jointables = $addon->get_join_tables();
                foreach ($jointables as $tablename) {
                    // Assuming a simple structure for join tables with 'id' as PK and 'plugnmeetid' as FK.
                    // Moodle's backup system might be able to infer other fields, or we might need to enhance the interface.
                    $extensionelement = new backup_nested_element($tablename, ['id'], []); // No other fields specified for now.
                    $plugnmeet->add_child($extensionelement);
                    $extensionelement->set_source_table($tablename, ['plugnmeetid' => backup::VAR_PARENTID]);

                    // If userinfo is relevant for this extension table, it should be handled here.
                    // This would require the addon to provide more metadata about its table structure.
                    // For now, we'll assume no userinfo for dynamically added tables unless specified by the addon.
                }
            }
        } catch (Exception $e) {
            debugging('Error in PlugNmeet subplugin get_join_tables: ' . $e->getMessage(), DEBUG_DEVELOPER);
            // Use a generic object ID or the instance ID if available.
            $objectid = $this->task->get_courseid() ?? 0;
            RoomHelper::write_log_event($objectid, 'backup_get_join_tables', $e->getMessage());
        }

        // Define sources.
        $plugnmeet->set_source_table('plugnmeet', ['id' => backup::VAR_ACTIVITYID]);
        $session->set_source_table('plugnmeet_sessions', ['plugnmeetid' => backup::VAR_PARENTID]);

        if ($userinfo) {
            $userstat->set_source_table('plugnmeet_user_stats', ['plugnmeetid' => backup::VAR_PARENTID]);
        }

        // Define id annotations.
        $plugnmeet->annotate_ids('user', 'usermodified');
        $userstat->annotate_ids('user', 'userid');

        // Define file annotations.
        $plugnmeet->annotate_files('mod_plugnmeet', 'intro', 'id');

        // Return the root element (plugnmeet).
        return $this->prepare_activity_structure($plugnmeet);
    }
}
