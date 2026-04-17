<?php

namespace mod_plugnmeet\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The recording_proceeded event class.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class recording_proceeded extends \core\event\base {

    /**
     * Init method.
     */
    protected function init() {
        $this->data['objecttable'] = 'plugnmeet';
        $this->data['crud'] = 'c';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
    }

    /**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description() {
        $recording_id = $this->other['recording_id'] ?? 'unknown';
        return "The recording with id '$recording_id' for the plugnmeet activity with course module id '$this->contextinstanceid' is now ready.";
    }

    /**
     * Return localised event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('event_recording_proceeded', 'mod_plugnmeet');
    }

    /**
     * Get URL related to the event.
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/mod/plugnmeet/recordings.php', array('id' => $this->contextinstanceid));
    }
}
