<?php

namespace mod_plugnmeet;

defined('MOODLE_INTERNAL') || die();

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
        self::send_notification($event, 'recording_ready_notification');
    }

    /**
     * Triggered when an artifact is created.
     *
     * @param \mod_plugnmeet\event\artifact_created $event
     */
    public static function artifact_ready(\mod_plugnmeet\event\artifact_created $event) {
        $artifact_type = $event->other['type'] ?? get_string('artifact', 'mod_plugnmeet'); // Default to 'artifact' if type is missing.
        self::send_notification($event, 'artifact_ready_notification', ['type' => $artifact_type]);
    }

    /**
     * Internal helper to send notifications to managers.
     *
     * @param \core\event\base $event
     * @param string $messagetype
     * @param array $extra_params Additional parameters to pass to the language string.
     */
    private static function send_notification(\core\event\base $event, string $messagetype, array $extra_params = []) {
        global $DB;

        $cm = get_coursemodule_from_id('plugnmeet', $event->contextinstanceid, 0, false, MUST_EXIST);
        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);
        $context = \context_module::instance($cm->id);

        // Get all users with the capability to manage plugnmeet in this context.
        $managers = get_users_by_capability($context, 'mod/plugnmeet:manage', 'u.id, u.firstname, u.lastname, u.email');

        if (empty($managers)) {
            return;
        }

        $lang_params = [
            'roomname' => format_string($plugnmeet->name),
            'url' => $event->get_url()->out(false)
        ];
        $lang_params = array_merge($lang_params, $extra_params);

        foreach ($managers as $manager) {
            $message = new \core\message\message();
            $message->component = 'mod_plugnmeet';
            $message->name = 'recording_artifact_notifications';
            $message->userfrom = \core_user::get_noreply_user();
            $message->userto = $manager;
            $message->subject = get_string($messagetype . '_subject', 'mod_plugnmeet', format_string($plugnmeet->name));
            $message->fullmessage = get_string($messagetype . '_fullmessage', 'mod_plugnmeet', $lang_params);
            $message->fullmessageformat = FORMAT_PLAIN;
            $message->fullmessagehtml = get_string($messagetype . '_fullmessagehtml', 'mod_plugnmeet', $lang_params);
            $message->smallmessage = get_string($messagetype . '_smallmessage', 'mod_plugnmeet', format_string($plugnmeet->name));
            $message->contexturl = $event->get_url()->out(false);
            $message->contexturlname = format_string($plugnmeet->name);

            message_send($message);
        }
    }
}
