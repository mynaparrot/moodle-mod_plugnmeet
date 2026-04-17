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

namespace mod_plugnmeet\privacy;

defined('MOODLE_INTERNAL') || die();

use core_privacy\local\metadata\collection;
use core_privacy\local\request\approved_contextlist;
use core_privacy\local\request\approved_userlist;
use core_privacy\local\request\contextlist;
use core_privacy\local\request\helper;
use core_privacy\local\request\userlist;
use core_privacy\local\request\writer;

/**
 * Privacy Subsystem for mod_plugnmeet.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\provider, \core_privacy\local\request\core_userlist_provider, \core_privacy\local\request\plugin\provider {
    /**
     * Returns metadata about the data stored by this plugin.
     *
     * @param collection $collection The collection of metadata.
     * @return collection
     */
    public static function get_metadata(collection $collection): collection {
        $collection->add_database_table(
            'plugnmeet_user_stats',
            [
                'userid' => 'privacy:metadata:plugnmeet_user_stats:userid',
                'statsdata' => 'privacy:metadata:plugnmeet_user_stats:statsdata',
                'timemodified' => 'privacy:metadata:plugnmeet_user_stats:timemodified',
            ],
            'privacy:metadata:plugnmeet_user_stats'
        );

        return $collection;
    }

    /**
     * Get the list of contexts that contain user information for the specified user.
     *
     * @param int $userid The user to search.
     * @return contextlist
     */
    public static function get_contexts_for_userid(int $userid): contextlist {
        $contextlist = new contextlist();

        $sql = "SELECT c.id
                  FROM {context} c
                  JOIN {course_modules} cm ON cm.id = c.instanceid AND c.contextlevel = :contextlevel
                  JOIN {modules} m ON m.id = cm.module AND m.name = :modname
                  JOIN {plugnmeet} p ON p.id = cm.instance
                  JOIN {plugnmeet_user_stats} pus ON pus.plugnmeetid = p.id
                 WHERE pus.userid = :userid";

        $params = [
            'modname' => 'plugnmeet',
            'contextlevel' => CONTEXT_MODULE,
            'userid' => $userid,
        ];

        $contextlist->add_from_sql($sql, $params);

        return $contextlist;
    }

    /**
     * Get the list of users who have data within a context.
     *
     * @param userlist $userlist The userlist to add the users to.
     */
    public static function get_users_in_context(userlist $userlist) {
        $context = $userlist->get_context();

        if ($context->contextlevel != CONTEXT_MODULE) {
            return;
        }

        $params = [
            'modname' => 'plugnmeet',
            'contextid' => $context->id,
        ];

        $sql = "SELECT pus.userid
                  FROM {plugnmeet_user_stats} pus
                  JOIN {plugnmeet} p ON p.id = pus.plugnmeetid
                  JOIN {course_modules} cm ON cm.instance = p.id
                  JOIN {modules} m ON m.id = cm.module AND m.name = :modname
                  JOIN {context} c ON c.instanceid = cm.id AND c.contextlevel = " . CONTEXT_MODULE . "
                 WHERE c.id = :contextid";

        $userlist->add_from_sql('userid', $sql, $params);
    }

    /**
     * Export all user data for the specified user, in the specified contexts.
     *
     * @param approved_contextlist $contextlist The approved contexts to export information for.
     */
    public static function export_user_data(approved_contextlist $contextlist) {
        global $DB;

        $user = $contextlist->get_user();

        foreach ($contextlist as $context) {
            if ($context->contextlevel != CONTEXT_MODULE) {
                continue;
            }

            $cm = get_coursemodule_from_id('plugnmeet', $context->instanceid);
            if (!$cm) {
                continue;
            }

            $stats = $DB->get_record('plugnmeet_user_stats', [
                'plugnmeetid' => $cm->instance,
                'userid' => $user->id,
            ]);

            if ($stats) {
                // Get standard data (name, intro, etc.).
                $data = helper::get_context_data($context, $user);

                // Add our custom statistics.
                $data->session_stats = json_decode($stats->statsdata);
                $data->stats_last_updated = \core_privacy\local\request\transform::datetime($stats->timemodified);

                // Export.
                writer::with_context($context)->export_data([], $data);

                // Also export files (like activity intro images).
                helper::export_context_files($context, $user);
            }
        }
    }

    /**
     * Delete all use data which matches the specified context.
     *
     * @param \context $context A user approved context.
     */
    public static function delete_data_for_all_users_in_context(\context $context) {
        global $DB;

        if ($context->contextlevel != CONTEXT_MODULE) {
            return;
        }

        $cm = get_coursemodule_from_id('plugnmeet', $context->instanceid);
        if (!$cm) {
            return;
        }

        $DB->delete_records('plugnmeet_user_stats', ['plugnmeetid' => $cm->instance]);
    }

    /**
     * Delete all user data for the specified user, in the specified contexts.
     *
     * @param approved_contextlist $contextlist The approved contexts and user to delete information for.
     */
    public static function delete_data_for_user(approved_contextlist $contextlist) {
        global $DB;

        foreach ($contextlist as $context) {
            if ($context->contextlevel != CONTEXT_MODULE) {
                continue;
            }

            $cm = get_coursemodule_from_id('plugnmeet', $context->instanceid);
            if (!$cm) {
                continue;
            }

            $DB->delete_records('plugnmeet_user_stats', [
                'plugnmeetid' => $cm->instance,
                'userid' => $contextlist->get_user()->id,
            ]);
        }
    }

    /**
     * Delete multiple users within a single context.
     *
     * @param approved_userlist $userlist The approved userlist to delete information for.
     */
    public static function delete_data_for_users(approved_userlist $userlist) {
        global $DB;

        $context = $userlist->get_context();

        if ($context->contextlevel != CONTEXT_MODULE) {
            return;
        }

        $cm = get_coursemodule_from_id('plugnmeet', $context->instanceid);
        if (!$cm) {
            return;
        }

        [$insql, $inparams] = $DB->get_in_or_equal($userlist->get_userids(), SQL_PARAMS_NAMED);
        $sql = "plugnmeetid = :plugnmeetid AND userid {$insql}";
        $params = array_merge(['plugnmeetid' => $cm->instance], $inparams);

        $DB->delete_records_select('plugnmeet_user_stats', $sql, $params);
    }
}
