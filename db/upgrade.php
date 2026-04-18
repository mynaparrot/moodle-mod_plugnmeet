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
 * Plugin upgrade steps are defined here.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Execute mod_plugnmeet upgrade from the given old version.
 *
 * @param int $oldversion
 * @return bool
 */
function xmldb_plugnmeet_upgrade($oldversion) {
    global $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2026041400) {
        // 1. Add fields to plugnmeet table.
        $table = new xmldb_table('plugnmeet');
        $fields = [
            'completionminutes' => new xmldb_field('completionminutes', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, 0),
            'completionraisedhand' => new xmldb_field('completionraisedhand', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'completionchatmessages' => new xmldb_field('completionchatmessages', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'completionwebcam' => new xmldb_field('completionwebcam', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'completionwebcamduration' => new xmldb_field('completionwebcamduration', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, 0),
            'completionmic' => new xmldb_field('completionmic', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'completionmicduration' => new xmldb_field('completionmicduration', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, 0),
            'completiontalkduration' => new xmldb_field('completiontalkduration', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, 0),
            'completionpollvoted' => new xmldb_field('completionpollvoted', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'completionwhiteboardannotated' => new xmldb_field('completionwhiteboardannotated', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'eventid' => new xmldb_field('eventid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, 0),
        ];

        foreach ($fields as $name => $field) {
            if (!$dbman->field_exists($table, $field)) {
                $dbman->add_field($table, $field);
            }
        }

        // 2. Create plugnmeet_sessions table.
        $sessionstable = new xmldb_table('plugnmeet_sessions');

        $sessionstable->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $sessionstable->add_field('plugnmeetid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $sessionstable->add_field('sid', XMLDB_TYPE_CHAR, '64', null, XMLDB_NOTNULL, null, null);
        $sessionstable->add_field('roomid', XMLDB_TYPE_CHAR, '64', null, XMLDB_NOTNULL, null, null);
        $sessionstable->add_field('status', XMLDB_TYPE_INTEGER, '2', null, XMLDB_NOTNULL, null, '1');
        $sessionstable->add_field('analytics_processed', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0');
        $sessionstable->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $sessionstable->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

        // Adding keys to table plugnmeet_sessions.
        $sessionstable->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $sessionstable->add_key('plugnmeetid', XMLDB_KEY_FOREIGN, ['plugnmeetid'], 'plugnmeet', ['id']);

        // Adding index to table plugnmeet_sessions.
        $sessionstable->add_index('sid', XMLDB_INDEX_UNIQUE, ['sid']);

        if (!$dbman->table_exists($sessionstable)) {
            $dbman->create_table($sessionstable);
        }

        // 3. Create plugnmeet_user_stats table.
        $statstable = new xmldb_table('plugnmeet_user_stats');

        $statstable->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $statstable->add_field('plugnmeetid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $statstable->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $statstable->add_field('statsdata', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $statstable->add_field('is_present', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0');
        $statstable->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

        // Adding keys to table plugnmeet_user_stats.
        $statstable->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $statstable->add_key('plugnmeetid', XMLDB_KEY_FOREIGN, ['plugnmeetid'], 'plugnmeet', ['id']);
        $statstable->add_key('userid', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);

        // Adding indexes to table plugnmeet_user_stats.
        $statstable->add_index('plugnmeetid_userid', XMLDB_INDEX_UNIQUE, ['plugnmeetid', 'userid']);

        if (!$dbman->table_exists($statstable)) {
            $dbman->create_table($statstable);
        }

        upgrade_mod_savepoint(true, 2026041400, 'plugnmeet');
    }

    return true;
}
