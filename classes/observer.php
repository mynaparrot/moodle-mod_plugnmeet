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

namespace mod_plugnmeet;

/**
 * Event observer for mod_plugnmeet.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class observer {
    /**
     * Triggered when a recording is proceeded and ready.
     *
     * @param \mod_plugnmeet\event\recording_proceeded $event
     */
    public static function recording_ready(\mod_plugnmeet\event\recording_proceeded $event) {
        self::send_notification($event, 'recording_ready_notification', 'recording_ready');
    }

    /**
     * Triggered when an artifact is created.
     *
     * @param \mod_plugnmeet\event\artifact_created $event
     */
    public static function artifact_ready(\mod_plugnmeet\event\artifact_created $event) {
        $artifacttype = $event->other['type'] ?? get_string('artifact', 'mod_plugnmeet'); // Default to 'artifact' if type is missing.
        self::send_notification($event, 'artifact_ready_notification', 'artifact_ready', ['type' => $artifacttype]);
    }

    /**
     * Internal helper to send notifications to managers.
     *
     * @param \core\event\base $event
     * @param string $messagetype Prefix for the language strings.
     * @param string $provider The message provider name from db/messages.php.
     * @param array $extraparams Additional parameters to pass to the language string.
     */
    private static function send_notification(\core\event\base $event, string $messagetype, string $provider, array $extraparams = []) {
        global $DB;

        $cm = get_coursemodule_from_id('plugnmeet', $event->contextinstanceid, 0, false, MUST_EXIST);
        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);
        $context = \context_module::instance($cm->id);

        // Get all users with the capability to manage plugnmeet in this context.
        $managers = get_users_by_capability($context, 'mod/plugnmeet:manage');

        if (empty($managers)) {
            return;
        }
        $roomname = clean_string($plugnmeet->name);

        $langparams = [
            'roomname' => $roomname,
            'url' => $event->get_url()->out(false),
        ];
        $langparams = array_merge($langparams, $extraparams);

        foreach ($managers as $manager) {
            $message = new \core\message\message();
            $message->component = 'mod_plugnmeet';
            $message->name = $provider;
            $message->userfrom = \core_user::get_noreply_user();
            $message->userto = $manager;
            $message->subject = get_string($messagetype . '_subject', 'mod_plugnmeet', $roomname);
            $message->fullmessage = get_string($messagetype . '_fullmessage', 'mod_plugnmeet', $langparams);
            $message->fullmessageformat = FORMAT_PLAIN;
            $message->fullmessagehtml = get_string($messagetype . '_fullmessagehtml', 'mod_plugnmeet', $langparams);
            $message->smallmessage = get_string($messagetype . '_smallmessage', 'mod_plugnmeet', $roomname);
            $message->contexturl = $event->get_url()->out(false);
            $message->contexturlname = $roomname;

            message_send($message);
        }
    }
}
