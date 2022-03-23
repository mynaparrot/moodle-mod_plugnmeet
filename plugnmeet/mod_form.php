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
 * The main mod_plugnmeet configuration form.
 *
 * @package     mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2022 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/course/moodleform_mod.php');

if (!class_exists("PlugNmeetHelper")) {
    require($CFG->dirroot . '/mod/plugnmeet/helpers/helper.php');

}

/**
 * Module instance settings form.
 *
 * @package     mod_plugnmeet
 * @copyright   2022 mynaparrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_plugnmeet_mod_form extends moodleform_mod
{

    /**
     * Defines forms elements
     */
    public function definition()
    {
        global $CFG;

        $mform = $this->_form;

        // Adding the "general" fieldset, where all the common settings are shown.
        $mform->addElement('header', 'general', get_string('general', 'form'));

        // Adding the standard "name" field.
        $mform->addElement('text', 'name', get_string('roomtitle', 'mod_plugnmeet'), array('size' => '64'));

        if (!empty($CFG->formatstringstriptags)) {
            $mform->setType('name', PARAM_TEXT);
        } else {
            $mform->setType('name', PARAM_CLEANHTML);
        }

        $mform->addRule('name', null, 'required', null, 'client');
        $mform->addRule('name', get_string('maximumchars', '', 255), 'maxlength', 255, 'client');
        $mform->addHelpButton('name', 'plugnmeetname', 'mod_plugnmeet');

        // Adding the standard "intro" and "introformat" fields.
        if ($CFG->branch >= 29) {
            $this->standard_intro_elements();
        } else {
            $this->add_intro_editor();
        }

        $mform->addElement('textarea', 'welcome_message', get_string("welcome_message", "mod_plugnmeet"), 'wrap="virtual" rows="5" cols="50"');
        $mform->addElement('text', 'max_participants', get_string("max_participants", "mod_plugnmeet"));

        $room_metadata = $this->get_current()->room_metadata;

        if ($room_metadata) {
            $room_metadata = json_decode($room_metadata);
        } else {
            $room_metadata = array();
        }

        $mform->addElement('header', 'roomfeatures', get_string('roomfeatures', 'mod_plugnmeet'));
        PlugNmeetHelper::getRoomFeatures($room_metadata, $mform);

        $mform->addElement('header', 'chatfeatures', get_string('chatfeatures', 'mod_plugnmeet'));
        PlugNmeetHelper::getChatFeatures($room_metadata, $mform);

        $mform->addElement('header', 'shared_note_pad_features', get_string('shared_note_pad_features', 'mod_plugnmeet'));
        PlugNmeetHelper::getSharedNotePadFeatures($room_metadata, $mform);

        $mform->addElement('header', 'whiteboard_features', get_string('whiteboard_features', 'mod_plugnmeet'));
        PlugNmeetHelper::getWhiteboardFeatures($room_metadata, $mform);

        $mform->addElement('header', 'defaultlock', get_string('defaultlock', 'mod_plugnmeet'));
        PlugNmeetHelper::getDefaultLockSettings($room_metadata, $mform);

        // Add standard grading elements.
        $this->standard_grading_coursemodule_elements();

        // Add standard elements.
        $this->standard_coursemodule_elements();

        // Add standard buttons.
        $this->add_action_buttons();
    }
}
