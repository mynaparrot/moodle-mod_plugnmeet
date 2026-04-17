<?php
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

    if ($oldversion < 2026012211) {
        // 1. Add fields to plugnmeet table.
        $table = new xmldb_table('plugnmeet');
        $fields = [
            'completionminutes' => new xmldb_field('completionminutes', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, 0),
            'completionraisedhand' => new xmldb_field('completionraisedhand', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'completionchatmessages' => new xmldb_field('completionchatmessages', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'completionwebcam' => new xmldb_field('completionwebcam', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'completionmic' => new xmldb_field('completionmic', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, 0),
            'eventid' => new xmldb_field('eventid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, 0),
        ];

        foreach ($fields as $name => $field) {
            if (!$dbman->field_exists($table, $field)) {
                $dbman->add_field($table, $field);
            }
        }

        // 2. Create plugnmeet_user_stats table.
        $stats_table = new xmldb_table('plugnmeet_user_stats');

        $stats_table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $stats_table->add_field('plugnmeetid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $stats_table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, null);
        $stats_table->add_field('statsdata', XMLDB_TYPE_TEXT, null, null, null, null, null);
        $stats_table->add_field('is_present', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0');
        $stats_table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

        // Adding keys to table plugnmeet_user_stats.
        $stats_table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        $stats_table->add_key('plugnmeetid', XMLDB_KEY_FOREIGN, ['plugnmeetid'], 'plugnmeet', ['id']);
        $stats_table->add_key('userid', XMLDB_KEY_FOREIGN, ['userid'], 'user', ['id']);

        // Adding indexes to table plugnmeet_user_stats.
        $stats_table->add_index('plugnmeetid_userid', XMLDB_INDEX_UNIQUE, ['plugnmeetid', 'userid']);

        if (!$dbman->table_exists($stats_table)) {
            $dbman->create_table($stats_table);
        }

        upgrade_mod_savepoint(true, 2026012211, 'plugnmeet');
    }

    return true;
}
