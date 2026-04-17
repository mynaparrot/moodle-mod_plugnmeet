<?php

namespace mod_plugnmeet\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The room_started event class.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class room_started extends \core\event\base {

    /**
     * Init method.
     */
    protected function init() {
        $this->data['objecttable'] = 'plugnmeet';
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
    }

    /**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '$this->userid' started the room for the plugnmeet activity with course module id '$this->contextinstanceid'.";
    }

    /**
     * Return localised event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('event_room_started', 'mod_plugnmeet');
    }

    /**
     * Get URL related to the event.
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/mod/plugnmeet/view.php', array('id' => $this->contextinstanceid));
    }
}
