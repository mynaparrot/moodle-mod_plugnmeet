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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * The main mod_plugnmeet configuration form.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/course/moodleform_mod.php');

use mod_plugnmeet\helper\ExtensionManager;
use mod_plugnmeet\helper\RoomHelper;

/**
 * Module instance settings form.
 */
class mod_plugnmeet_mod_form extends moodleform_mod {
    /**
     * Defines forms elements
     */
    public function definition() {
        $mform = $this->_form;
        $config = get_config('mod_plugnmeet');

        // General settings
        $mform->addElement('header', 'general', get_string('general', 'form'));
        $mform->addElement('text', 'name', get_string('roomtitle', 'mod_plugnmeet'), ['size' => '64']);
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', null, 'required', null, 'client');
        $mform->addHelpButton('name', 'roomtitle', 'mod_plugnmeet');
        $this->standard_intro_elements();

        // Activity mode, only selectable when the AI agent is enabled site wide.
        $enableaiagent = (bool)($config->enable_ai_agent ?? 1);
        if ($enableaiagent) {
            $mform->addElement('select', 'meta[activity_mode]', get_string('activity_mode', 'mod_plugnmeet'), [
                'conference' => get_string('activity_mode_conference', 'mod_plugnmeet'),
                'ai_tutor' => get_string('activity_mode_ai_tutor', 'mod_plugnmeet'),
            ]);
            $mform->setDefault('meta[activity_mode]', 'conference');
            $mform->addHelpButton('meta[activity_mode]', 'activity_mode', 'mod_plugnmeet');
        } else {
            // Keep the stored mode so editing does not overwrite it while AI is disabled site wide.
            $currentmetadata = json_decode($this->current->roommetadata ?? '', true) ?: [];
            $mform->addElement('hidden', 'meta[activity_mode]', $currentmetadata['activity_mode'] ?? 'conference');
            $mform->setType('meta[activity_mode]', PARAM_ALPHANUMEXT);
        }
        $mform->hideIf('meta[room_features][moderator_join_first]', 'meta[activity_mode]', 'eq', 'ai_tutor');
        $mform->hideIf('meta[room_features][auto_gen_user_id]', 'meta[activity_mode]', 'eq', 'ai_tutor');

        $mform->addElement('textarea', 'welcomemessage', get_string("welcome_message", "mod_plugnmeet"), 'wrap="virtual" rows="5" cols="50"');
        $mform->setType('welcomemessage', PARAM_CLEANHTML);
        $mform->addHelpButton('welcomemessage', 'welcome_message', 'mod_plugnmeet');

        $mform->addElement('text', 'maxparticipants', get_string("max_participants", "mod_plugnmeet"));
        $mform->setType('maxparticipants', PARAM_INT);
        $mform->addHelpButton('maxparticipants', 'max_participants', 'mod_plugnmeet');
        // The AI tutor activity keeps a minimal form.
        $mform->hideIf('maxparticipants', 'meta[activity_mode]', 'eq', 'ai_tutor');

        $mform->addElement('text', 'meta[room_features][room_duration]', get_string('room_duration', 'mod_plugnmeet'));
        $mform->setType('meta[room_features][room_duration]', PARAM_INT);
        $mform->setDefault('meta[room_features][room_duration]', 0);
        $mform->addHelpButton('meta[room_features][room_duration]', 'room_duration', 'mod_plugnmeet');
        $mform->hideIf('meta[room_features][room_duration]', 'meta[activity_mode]', 'eq', 'ai_tutor');

        // Check if guest access is allowed globally.
        if (!isset($config->allow_guest_global) || $config->allow_guest_global == 1) {
            $mform->addElement('advcheckbox', 'allow_guest', get_string('allow_guest', 'mod_plugnmeet'));
            $mform->setDefault('allow_guest', 0);
            $mform->addHelpButton('allow_guest', 'allow_guest', 'mod_plugnmeet');

            $mform->addElement('hidden', 'guest_token');
            $mform->setType('guest_token', PARAM_RAW);
        } else {
            $mform->addElement('hidden', 'allow_guest', 0);
            $mform->setType('allow_guest', PARAM_INT);
        }

        // Room Features
        $mform->addElement('header', 'room_features_header', get_string('room_features', 'mod_plugnmeet'));
        $mform->setExpanded('room_features_header', false);
        $this->add_room_features();

        // Whiteboard Features
        $mform->addElement('header', 'whiteboard_features_header', get_string('whiteboard_features', 'mod_plugnmeet'));
        $mform->setExpanded('whiteboard_features_header', false);
        $this->add_whiteboard_features();

        // Recording & Broadcasting Features
        $mform->addElement('header', 'recording_broadcasting_features_header', get_string('recording_broadcasting_features', 'mod_plugnmeet'));
        $mform->setExpanded('recording_broadcasting_features_header', false);
        $this->add_recording_and_broadcasting_features();

        // Chat Features
        $mform->addElement('header', 'chat_features_header', get_string('chat_features', 'mod_plugnmeet'));
        $mform->setExpanded('chat_features_header', false);
        $this->add_chat_features();

        // Other Features
        $mform->addElement('header', 'other_features_header', get_string('other_features', 'mod_plugnmeet'));
        $mform->setExpanded('other_features_header', false);
        $this->add_other_features();

        // E2EE Features
        $mform->addElement('header', 'e2ee_features_header', get_string('e2ee_features', 'mod_plugnmeet'));
        $mform->setExpanded('e2ee_features_header', false);
        $this->add_e2ee_features();

        // Insights & AI Features
        $mform->addElement('header', 'insights_features_header', get_string('insights_features', 'mod_plugnmeet'));
        $mform->setExpanded('insights_features_header', false);
        $this->add_insights_features();


        // AI Tutor & Agent Features
        if ($enableaiagent) {
            $mform->addElement('header', 'ai_agent_features_header', get_string('ai_agent_features_header', 'mod_plugnmeet'));
            $mform->setExpanded('ai_agent_features_header', true);
            $this->add_ai_agent_features($mform, $config);
        }

        // Default Lock Settings
        $mform->addElement('header', 'default_lock_header', get_string('defaultlock', 'mod_plugnmeet'));
        $mform->setExpanded('default_lock_header', false);
        $this->add_default_lock_settings();

        // Call extension form hooks.
        $cmid = 0;
        if (!empty($this->current->cmid)) {
            $cmid = $this->current->cmid;
        }
        try {
            foreach (ExtensionManager::get_mod_form_addons() as $addon) {
                $addon->add_mod_form_elements($mform, $this->_course->id, $cmid);
            }
        } catch (Exception $e) {
            debugging('Error in PlugNmeet subplugin add_mod_form_elements: ' . $e->getMessage(), DEBUG_DEVELOPER);
            RoomHelper::write_log_event($cmid, 'mod_form_add_elements', $e->getMessage());
        }

        // Availability.
        $mform->addElement('header', 'availabilityhdr', get_string('availability'));
        $mform->addElement('date_time_selector', 'available', get_string('available', 'mod_plugnmeet'), ['optional' => true]);
        $mform->setDefault('available', 0);
        $mform->addHelpButton('available', 'available', 'mod_plugnmeet');
        $mform->addElement('date_time_selector', 'deadline', get_string('deadline', 'mod_plugnmeet'), ['optional' => true]);
        $mform->setDefault('deadline', 0);
        $mform->addHelpButton('deadline', 'deadline', 'mod_plugnmeet');

        // Standard grading elements.
        $this->standard_grading_coursemodule_elements();

        // Add standard elements
        $this->standard_coursemodule_elements();
        $this->add_action_buttons();
    }

    /**
     * Add room features.
     */
    private function add_room_features() {
        $mform = $this->_form;

        $mform->addElement('advcheckbox', 'meta[room_features][moderator_join_first]', get_string('moderator_join_first', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][moderator_join_first]', 0);
        $mform->addHelpButton('meta[room_features][moderator_join_first]', 'moderator_join_first', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][allow_webcams]', get_string('allow_webcams', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_webcams]', 1);
        $mform->addHelpButton('meta[room_features][allow_webcams]', 'allow_webcams', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][admin_only_webcams]', get_string('admin_only_webcams', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][admin_only_webcams]', 0);
        $mform->addHelpButton('meta[room_features][admin_only_webcams]', 'admin_only_webcams', 'mod_plugnmeet');
        $mform->disabledIf('meta[room_features][admin_only_webcams]', 'meta[room_features][allow_webcams]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[room_features][mute_on_start]', get_string('mute_on_start', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][mute_on_start]', 0);
        $mform->addHelpButton('meta[room_features][mute_on_start]', 'mute_on_start', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][allow_screen_share]', get_string('allow_screen_share', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_screen_share]', 1);
        $mform->addHelpButton('meta[room_features][allow_screen_share]', 'allow_screen_share', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][allow_raise_hand]', get_string('allow_raise_hand', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_raise_hand]', 1);
        $mform->addHelpButton('meta[room_features][allow_raise_hand]', 'allow_raise_hand', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][allow_reactions]', get_string('allow_reactions', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_reactions]', 1);
        $mform->addHelpButton('meta[room_features][allow_reactions]', 'allow_reactions', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][allow_view_other_webcams]', get_string('allow_view_other_webcams', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_view_other_webcams]', 1);
        $mform->addHelpButton('meta[room_features][allow_view_other_webcams]', 'allow_view_other_webcams', 'mod_plugnmeet');
        $mform->disabledIf('meta[room_features][allow_view_other_webcams]', 'meta[room_features][allow_webcams]', 'eq', 0);
        $mform->disabledIf('meta[room_features][allow_view_other_webcams]', 'meta[room_features][admin_only_webcams]', 'eq', 1);

        $mform->addElement('advcheckbox', 'meta[room_features][allow_view_other_users_list]', get_string('allow_view_other_users_list', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_view_other_users_list]', 1);
        $mform->addHelpButton('meta[room_features][allow_view_other_users_list]', 'allow_view_other_users_list', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][enable_analytics]', get_string('enable_analytics', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][enable_analytics]', 1);
        $mform->addHelpButton('meta[room_features][enable_analytics]', 'enable_analytics', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][allow_virtual_bg]', get_string('allow_virtual_bg', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_virtual_bg]', 1);
        $mform->addHelpButton('meta[room_features][allow_virtual_bg]', 'allow_virtual_bg', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][auto_gen_user_id]', get_string('auto_gen_user_id', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][auto_gen_user_id]', 0);
        $mform->addHelpButton('meta[room_features][auto_gen_user_id]', 'auto_gen_user_id', 'mod_plugnmeet');
    }

    /**
     * Add whiteboard features.
     * The preload_file field was added only to allow file uploads.
     * In Moodle, the preload_file draft file ID will be used as the table ID, so nothing needs to be stored in the database.
     * Please check the data_preprocessing method below in the file.
     */
    private function add_whiteboard_features() {
        $mform = $this->_form;

        $mform->addElement(
            'advcheckbox',
            'meta[whiteboard_features][is_allow]',
            get_string('allow_whiteboard', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[whiteboard_features][is_allow]', 1);
        $mform->addHelpButton('meta[whiteboard_features][is_allow]', 'allow_whiteboard', 'mod_plugnmeet');

        $mform->addElement(
            'filemanager',
            'preload_file',
            get_string('preload_file', 'mod_plugnmeet'),
            null,
            [
                'maxbytes' => 5242880,
                'areamaxbytes' => 5242880,
                'maxfiles' => 1,
                'accepted_types' => ['document'],
            ]
        );
        $mform->addHelpButton('preload_file', 'preload_file', 'mod_plugnmeet');
        $mform->disabledIf('preload_file', 'meta[whiteboard_features][is_allow]', 'eq', 0);
    }

    /**
     * Add recording and broadcasting features.
     * @return void
     * @throws coding_exception
     */
    private function add_recording_and_broadcasting_features() {
        $mform = $this->_form;
        $mform->addElement(
            'advcheckbox',
            'meta[recording_features][is_allow]',
            get_string('allow_recording', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[recording_features][is_allow]', 1);
        $mform->addHelpButton('meta[recording_features][is_allow]', 'allow_recording', 'mod_plugnmeet');

        $mform->addElement(
            'advcheckbox',
            'meta[recording_features][is_allow_cloud]',
            get_string('allow_cloud_recording', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[recording_features][is_allow_cloud]', 1);
        $mform->addHelpButton('meta[recording_features][is_allow_cloud]', 'allow_cloud_recording', 'mod_plugnmeet');
        $mform->disabledIf('meta[recording_features][is_allow_cloud]', 'meta[recording_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[recording_features][enable_auto_cloud_recording]', get_string('enable_auto_cloud_recording', 'mod_plugnmeet'));
        $mform->setDefault('meta[recording_features][enable_auto_cloud_recording]', 0);
        $mform->addHelpButton('meta[recording_features][enable_auto_cloud_recording]', 'enable_auto_cloud_recording', 'mod_plugnmeet');
        $mform->disabledIf('meta[recording_features][enable_auto_cloud_recording]', 'meta[recording_features][is_allow_cloud]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[recording_features][only_record_admin_webcams]', get_string('only_record_admin_webcams', 'mod_plugnmeet'));
        $mform->setDefault('meta[recording_features][only_record_admin_webcams]', 0);
        $mform->addHelpButton('meta[recording_features][only_record_admin_webcams]', 'only_record_admin_webcams', 'mod_plugnmeet');
        $mform->disabledIf('meta[recording_features][only_record_admin_webcams]', 'meta[recording_features][is_allow_cloud]', 'eq', 0);

        $mform->addElement(
            'advcheckbox',
            'meta[recording_features][is_allow_local]',
            get_string('allow_local_recording', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[recording_features][is_allow_local]', 1);
        $mform->addHelpButton('meta[recording_features][is_allow_local]', 'allow_local_recording', 'mod_plugnmeet');
        $mform->disabledIf('meta[recording_features][is_allow_local]', 'meta[recording_features][is_allow]', 'eq', 0);

        $mform->addElement('html', '<hr>');

        $mform->addElement('advcheckbox', 'meta[external_broadcasting_features][is_allow]', get_string('allow_broadcasting', 'mod_plugnmeet'));
        $mform->setDefault('meta[external_broadcasting_features][is_allow]', 1);
        $mform->addHelpButton('meta[external_broadcasting_features][is_allow]', 'allow_broadcasting', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[external_broadcasting_features][is_allow_rtmp]', get_string('allow_rtmp', 'mod_plugnmeet'));
        $mform->setDefault('meta[external_broadcasting_features][is_allow_rtmp]', 1);
        $mform->addHelpButton('meta[external_broadcasting_features][is_allow_rtmp]', 'allow_rtmp', 'mod_plugnmeet');
        $mform->disabledIf('meta[external_broadcasting_features][is_allow_rtmp]', 'meta[external_broadcasting_features][is_allow]', 'eq', 0);
    }

    /**
     * Add chat features.
     */
    private function add_chat_features() {
        $mform = $this->_form;
        $mform->addElement('advcheckbox', 'meta[chat_features][is_allow]', get_string('allow_chat', 'mod_plugnmeet'));
        $mform->setDefault('meta[chat_features][is_allow]', 1);
        $mform->addHelpButton('meta[chat_features][is_allow]', 'allow_chat', 'mod_plugnmeet');

        $mform->addElement(
            'advcheckbox',
            'meta[chat_features][is_allow_file_upload]',
            get_string('allow_file_upload', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[chat_features][is_allow_file_upload]', 1);
        $mform->addHelpButton('meta[chat_features][is_allow_file_upload]', 'allow_file_upload', 'mod_plugnmeet');
        $mform->disabledIf('meta[chat_features][is_allow_file_upload]', 'meta[chat_features][is_allow]', 'eq', 0);
    }

    /**
     * Add other features.
     */
    private function add_other_features() {
        $mform = $this->_form;

        $mform->addElement(
            'advcheckbox',
            'meta[waiting_room_features][is_active]',
            get_string('activate_waiting_room', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[waiting_room_features][is_active]', 0);
        $mform->addHelpButton('meta[waiting_room_features][is_active]', 'activate_waiting_room', 'mod_plugnmeet');

        $mform->addElement(
            'textarea',
            'meta[waiting_room_features][waiting_room_msg]',
            get_string('waiting_room_msg', 'mod_plugnmeet'),
            'wrap="virtual" rows="5" cols="50"'
        );
        $mform->addHelpButton('meta[waiting_room_features][waiting_room_msg]', 'waiting_room_msg', 'mod_plugnmeet');
        $mform->disabledIf(
            'meta[waiting_room_features][waiting_room_msg]',
            'meta[waiting_room_features][is_active]',
            'eq',
            0
        );
        $mform->addElement('html', '<hr>');

        $mform->addElement(
            'advcheckbox',
            'meta[breakout_room_features][is_allow]',
            get_string('allow_breakout_rooms', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[breakout_room_features][is_allow]', 1);
        $mform->addHelpButton('meta[breakout_room_features][is_allow]', 'allow_breakout_rooms', 'mod_plugnmeet');

        $mform->addElement(
            'text',
            'meta[breakout_room_features][allowed_number_rooms]',
            get_string('allowed_number_rooms', 'mod_plugnmeet')
        );
        $mform->setType('meta[breakout_room_features][allowed_number_rooms]', PARAM_INT);
        $mform->setDefault('meta[breakout_room_features][allowed_number_rooms]', 6);
        $mform->addHelpButton('meta[breakout_room_features][allowed_number_rooms]', 'allowed_number_rooms', 'mod_plugnmeet');
        $mform->disabledIf(
            'meta[breakout_room_features][allowed_number_rooms]',
            'meta[breakout_room_features][is_allow]',
            'eq',
            0
        );
        $mform->addElement(
            'advcheckbox',
            'meta[breakout_room_features][preassign_from_groups]',
            get_string('preassign_breakout_rooms', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[breakout_room_features][preassign_from_groups]', 0);
        $mform->addHelpButton('meta[breakout_room_features][preassign_from_groups]', 'preassign_breakout_rooms', 'mod_plugnmeet');
        $mform->disabledIf(
            'meta[breakout_room_features][preassign_from_groups]',
            'meta[breakout_room_features][is_allow]',
            'eq',
            0
        );
        $mform->addElement('html', '<hr>');

        $mform->addElement(
            'advcheckbox',
            'meta[shared_note_pad_features][is_allow]',
            get_string('allow_shared_notepad', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[shared_note_pad_features][is_allow]', 1);
        $mform->addHelpButton('meta[shared_note_pad_features][is_allow]', 'allow_shared_notepad', 'mod_plugnmeet');

        $mform->addElement(
            'advcheckbox',
            'meta[external_media_player_features][is_allow]',
            get_string('allowed_external_media_player', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[external_media_player_features][is_allow]', 1);
        $mform->addHelpButton('meta[external_media_player_features][is_allow]', 'allowed_external_media_player', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[display_external_link_features][is_allow]', get_string('allow_display_external_link_features', 'mod_plugnmeet'));
        $mform->setDefault('meta[display_external_link_features][is_allow]', 1);
        $mform->addHelpButton(
            'meta[display_external_link_features][is_allow]',
            'allow_display_external_link_features',
            'mod_plugnmeet'
        );

        $mform->addElement(
            'advcheckbox',
            'meta[ingress_features][is_allow]',
            get_string('allow_ingress_features', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[ingress_features][is_allow]', 1);
        $mform->addHelpButton('meta[ingress_features][is_allow]', 'allow_ingress_features', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[polls_features][is_allow]', get_string('allow_polls', 'mod_plugnmeet'));
        $mform->setDefault('meta[polls_features][is_allow]', 1);
        $mform->addHelpButton('meta[polls_features][is_allow]', 'allow_polls', 'mod_plugnmeet');

        $mform->addElement(
            'advcheckbox',
            'meta[sip_dial_in_features][is_allow]',
            get_string('sip_dial_in_features_is_allow', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[sip_dial_in_features][is_allow]', 0);
        $mform->addHelpButton('meta[sip_dial_in_features][is_allow]', 'sip_dial_in_features_is_allow', 'mod_plugnmeet');
    }

    /**
     * Add E2EE features.
     */
    private function add_e2ee_features() {
        $mform = $this->_form;
        $mform->addElement('advcheckbox', 'meta[end_to_end_encryption_features][is_enabled]', get_string('enable_end_to_end_encryption_features', 'mod_plugnmeet'));
        $mform->setDefault('meta[end_to_end_encryption_features][is_enabled]', 0);
        $mform->addHelpButton(
            'meta[end_to_end_encryption_features][is_enabled]',
            'enable_end_to_end_encryption_features',
            'mod_plugnmeet'
        );

        $mform->addElement(
            'advcheckbox',
            'meta[end_to_end_encryption_features][enabled_self_insert_encryption_key]',
            get_string('enabled_self_insert_encryption_key', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[end_to_end_encryption_features][enabled_self_insert_encryption_key]', 0);
        $mform->addHelpButton('meta[end_to_end_encryption_features][enabled_self_insert_encryption_key]', 'enabled_self_insert_encryption_key', 'mod_plugnmeet');
        $mform->disabledIf('meta[end_to_end_encryption_features][enabled_self_insert_encryption_key]', 'meta[end_to_end_encryption_features][is_enabled]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[end_to_end_encryption_features][included_chat_messages]', get_string('included_e2ee_chat_messages', 'mod_plugnmeet'));
        $mform->setDefault('meta[end_to_end_encryption_features][included_chat_messages]', 0);
        $mform->addHelpButton(
            'meta[end_to_end_encryption_features][included_chat_messages]',
            'included_e2ee_chat_messages',
            'mod_plugnmeet'
        );
        $mform->disabledIf('meta[end_to_end_encryption_features][included_chat_messages]', 'meta[end_to_end_encryption_features][is_enabled]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[end_to_end_encryption_features][included_whiteboard]', get_string('included_e2ee_whiteboard', 'mod_plugnmeet'));
        $mform->setDefault('meta[end_to_end_encryption_features][included_whiteboard]', 0);
        $mform->addHelpButton(
            'meta[end_to_end_encryption_features][included_whiteboard]',
            'included_e2ee_whiteboard',
            'mod_plugnmeet'
        );
        $mform->disabledIf(
            'meta[end_to_end_encryption_features][included_whiteboard]',
            'meta[end_to_end_encryption_features][is_enabled]',
            'eq',
            0
        );
    }

    /**
     * Add insights features.
     */
    private function add_insights_features() {
        $mform = $this->_form;
        $mform->addElement(
            'advcheckbox',
            'meta[insights_features][is_allow]',
            get_string('insights_features_is_allow', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[insights_features][is_allow]', 0);
        $mform->addHelpButton('meta[insights_features][is_allow]', 'insights_features_is_allow', 'mod_plugnmeet');

        $mform->addElement('html', '<hr>');

        $mform->addElement('advcheckbox', 'meta[insights_features][transcription_features][is_allow]', get_string('insights_transcription_features_is_allow', 'mod_plugnmeet'));
        $mform->setDefault('meta[insights_features][transcription_features][is_allow]', 0);
        $mform->addHelpButton(
            'meta[insights_features][transcription_features][is_allow]',
            'insights_transcription_features_is_allow',
            'mod_plugnmeet'
        );
        $mform->disabledIf(
            'meta[insights_features][transcription_features][is_allow]',
            'meta[insights_features][is_allow]',
            'eq',
            0
        );

        $mform->addElement(
            'advcheckbox',
            'meta[insights_features][transcription_features][is_allow_translation]',
            get_string('insights_transcription_features_is_allow_translation', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[insights_features][transcription_features][is_allow_translation]', 0);
        $mform->addHelpButton('meta[insights_features][transcription_features][is_allow_translation]', 'insights_transcription_features_is_allow_translation', 'mod_plugnmeet');
        $mform->disabledIf('meta[insights_features][transcription_features][is_allow_translation]', 'meta[insights_features][transcription_features][is_allow]', 'eq', 0);

        $mform->addElement(
            'advcheckbox',
            'meta[insights_features][transcription_features][is_allow_speech_synthesis]',
            get_string('insights_transcription_features_is_allow_speech_synthesis', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[insights_features][transcription_features][is_allow_speech_synthesis]', 0);
        $mform->addHelpButton(
            'meta[insights_features][transcription_features][is_allow_speech_synthesis]',
            'insights_transcription_features_is_allow_speech_synthesis',
            'mod_plugnmeet'
        );
        $mform->disabledIf('meta[insights_features][transcription_features][is_allow_speech_synthesis]', 'meta[insights_features][transcription_features][is_allow]', 'eq', 0);

        $mform->addElement(
            'advcheckbox',
            'meta[insights_features][chat_translation_features][is_allow]',
            get_string('insights_chat_translation_features_is_allow', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[insights_features][chat_translation_features][is_allow]', 0);
        $mform->addHelpButton('meta[insights_features][chat_translation_features][is_allow]', 'insights_chat_translation_features_is_allow', 'mod_plugnmeet');
        $mform->disabledIf(
            'meta[insights_features][chat_translation_features][is_allow]',
            'meta[insights_features][is_allow]',
            'eq',
            0
        );

        $mform->addElement('html', '<hr>');

        $mform->addElement(
            'advcheckbox',
            'meta[insights_features][ai_features][is_allow]',
            get_string('insights_ai_features_is_allow', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[insights_features][ai_features][is_allow]', 0);
        $mform->addHelpButton(
            'meta[insights_features][ai_features][is_allow]',
            'insights_ai_features_is_allow',
            'mod_plugnmeet'
        );
        $mform->disabledIf(
            'meta[insights_features][ai_features][is_allow]',
            'meta[insights_features][is_allow]',
            'eq',
            0
        );

        $mform->addElement(
            'advcheckbox',
            'meta[insights_features][ai_features][ai_text_chat_features][is_allow]',
            get_string('insights_ai_text_chat_features_is_allow', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[insights_features][ai_features][ai_text_chat_features][is_allow]', 0);
        $mform->addHelpButton('meta[insights_features][ai_features][ai_text_chat_features][is_allow]', 'insights_ai_text_chat_features_is_allow', 'mod_plugnmeet');
        $mform->disabledIf('meta[insights_features][ai_features][ai_text_chat_features][is_allow]', 'meta[insights_features][ai_features][is_allow]', 'eq', 0);

        $mform->addElement(
            'advcheckbox',
            'meta[insights_features][ai_features][meeting_summarization_features][is_allow]',
            get_string('insights_ai_meeting_summarization_features_is_allow', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[insights_features][ai_features][meeting_summarization_features][is_allow]', 0);
        $mform->addHelpButton(
            'meta[insights_features][ai_features][meeting_summarization_features][is_allow]',
            'insights_ai_meeting_summarization_features_is_allow',
            'mod_plugnmeet'
        );
        $mform->disabledIf('meta[insights_features][ai_features][meeting_summarization_features][is_allow]', 'meta[insights_features][ai_features][is_allow]', 'eq', 0);

        $mform->addElement(
            'textarea',
            'meta[insights_features][ai_features][meeting_summarization_features][summarization_prompt]',
            get_string('insights_ai_meeting_summarization_prompt', 'mod_plugnmeet'),
            ['rows' => 3, 'cols' => 60]
        );
        $mform->setType('meta[insights_features][ai_features][meeting_summarization_features][summarization_prompt]', PARAM_TEXT);
        $mform->setDefault('meta[insights_features][ai_features][meeting_summarization_features][summarization_prompt]', '');
        $mform->addHelpButton(
            'meta[insights_features][ai_features][meeting_summarization_features][summarization_prompt]',
            'insights_ai_meeting_summarization_prompt',
            'mod_plugnmeet'
        );
        $mform->disabledIf('meta[insights_features][ai_features][meeting_summarization_features][summarization_prompt]', 'meta[insights_features][ai_features][meeting_summarization_features][is_allow]', 'eq', 0);
        $mform->disabledIf('meta[insights_features][ai_features][meeting_summarization_features][summarization_prompt]', 'meta[insights_features][ai_features][is_allow]', 'eq', 0);
        $mform->disabledIf('meta[insights_features][ai_features][meeting_summarization_features][summarization_prompt]', 'meta[insights_features][is_allow]', 'eq', 0);
    }

    /**
     * Add AI tutor and agent settings.
     *
     * @param MoodleQuickForm $mform
     * @param stdClass $config
     */
    private function add_ai_agent_features($mform, $config) {
        global $COURSE;

        $mode = 'meta[activity_mode]';
        $prefix = 'meta[insights_features][ai_agent_features]';
        $agentenabled = "{$prefix}[is_allow]";
        $sessionmode = "{$prefix}[session_mode]";
        $autoconfig = "{$prefix}[auto_session_config]";
        $maxconcurrent = "{$autoconfig}[max_concurrent_sessions]";
        $participants = "{$autoconfig}[allowed_participant_ids]";

        // Runs the AI agent inside a normal conference room. AI tutor rooms always run it.
        $mform->addElement('advcheckbox', $agentenabled, get_string('insights_ai_agent_features_is_allow', 'mod_plugnmeet'));
        $mform->setDefault($agentenabled, 0);
        $mform->addHelpButton($agentenabled, 'insights_ai_agent_features_is_allow', 'mod_plugnmeet');
        $mform->hideIf($agentenabled, $mode, 'eq', 'ai_tutor');

        $mform->addElement('select', $sessionmode, get_string('ai_session_mode', 'mod_plugnmeet'), [
            2 => get_string('ai_session_mode_open_per_user', 'mod_plugnmeet'),
            1 => get_string('ai_session_mode_controlled_users', 'mod_plugnmeet'),
        ]);
        $mform->setDefault($sessionmode, 2);
        $mform->addHelpButton($sessionmode, 'ai_session_mode', 'mod_plugnmeet');
        // A conference room always runs the agent in normal room mode.
        $mform->hideIf($sessionmode, $mode, 'eq', 'conference');
        $mform->disabledIf($sessionmode, 'allow_guest', 'checked');

        $mform->addElement('text', $maxconcurrent, get_string('ai_max_concurrent_sessions', 'mod_plugnmeet'));
        $mform->setType($maxconcurrent, PARAM_INT);
        $mform->setDefault($maxconcurrent, min(5, max(1, (int)($config->ai_max_concurrent_sessions_limit ?? 16))));
        $mform->addHelpButton($maxconcurrent, 'ai_max_concurrent_sessions', 'mod_plugnmeet');
        $mform->hideIf($maxconcurrent, $sessionmode, 'eq', 1);
        $mform->hideIf($maxconcurrent, $mode, 'eq', 'conference');

        $coursecontext = context_course::instance($COURSE->id);
        $enrolledusers = get_enrolled_users(
            $coursecontext,
            'mod/plugnmeet:view',
            0,
            'u.id, u.firstname, u.lastname, u.email, u.firstnamephonetic, u.lastnamephonetic, u.middlename, u.alternatename'
        );
        $useroptions = [];
        foreach ($enrolledusers as $user) {
            $useroptions[(string)$user->id] = fullname($user) . (!empty($user->email) ? ' (' . $user->email . ')' : '');
        }

        $mform->addElement('autocomplete', $participants, get_string('ai_allowed_participants', 'mod_plugnmeet'), $useroptions, ['multiple' => true]);
        $mform->addHelpButton($participants, 'ai_allowed_participants', 'mod_plugnmeet');
        $mform->hideIf($participants, $sessionmode, 'eq', 2);
        $mform->hideIf($participants, $mode, 'eq', 'conference');
        // Guests are never controlled users.
        $mform->hideIf($participants, 'allow_guest', 'checked');

        $groupmembers = [];
        foreach (groups_get_all_groups($COURSE->id) as $group) {
            $memberids = array_column(groups_get_members($group->id, 'u.id'), 'id');
            $memberids = array_values(array_intersect(array_map('strval', $memberids), array_keys($useroptions)));
            if ($memberids) {
                $groupmembers[$group->id] = ['name' => format_string($group->name), 'members' => $memberids];
            }
        }
        $mform->addElement('static', 'ai_allowed_participants_actions', '', RoomHelper::get_ai_participants_actions_html($groupmembers));
        $mform->hideIf('ai_allowed_participants_actions', $sessionmode, 'eq', 2);
        $mform->hideIf('ai_allowed_participants_actions', $mode, 'eq', 'conference');
        $mform->hideIf('ai_allowed_participants_actions', 'allow_guest', 'checked');

        $presets = [
            'stem_whiteboard' => 'You are an encouraging STEM tutor working on a shared whiteboard. Ask one question at a time, work through the steps on the whiteboard and let the student explain each step before moving on.',
            'language_coach' => 'You are a patient language coach. Speak mostly in the target language, correct mistakes by repeating the sentence correctly and end every turn with a question that keeps the student talking.',
            'exam_prep' => 'You are an exam preparation coach. Run short question and answer drills on the lesson topic, explain every wrong answer and keep a running score the student can see.',
        ];
        if (!empty($config->ai_avatar_enabled_global)) {
            $avatarenabled = "{$prefix}[avatar][is_enabled]";
            $mform->addElement('advcheckbox', $avatarenabled, get_string('ai_avatar_enabled', 'mod_plugnmeet'));
            $mform->setDefault($avatarenabled, 0);
            $mform->addHelpButton($avatarenabled, 'ai_avatar_enabled', 'mod_plugnmeet');
        }

        $mform->addElement('select', 'meta[preset_template]', get_string('ai_preset_template', 'mod_plugnmeet'), [
            'custom' => get_string('ai_preset_custom', 'mod_plugnmeet'),
            'stem_whiteboard' => get_string('ai_preset_stem_whiteboard', 'mod_plugnmeet'),
            'language_coach' => get_string('ai_preset_language_coach', 'mod_plugnmeet'),
            'exam_prep' => get_string('ai_preset_exam_prep', 'mod_plugnmeet'),
        ]);
        $mform->setDefault('meta[preset_template]', 'custom');
        $mform->addHelpButton('meta[preset_template]', 'ai_preset_template', 'mod_plugnmeet');

        $mform->addElement('text', "{$prefix}[agent_display_name]", get_string('ai_agent_display_name', 'mod_plugnmeet'));
        $mform->setType("{$prefix}[agent_display_name]", PARAM_TEXT);
        $mform->setDefault("{$prefix}[agent_display_name]", 'AI Tutor');
        $mform->addHelpButton("{$prefix}[agent_display_name]", 'ai_agent_display_name', 'mod_plugnmeet');

        $mform->addElement('text', "{$prefix}[topic]", get_string('ai_topic', 'mod_plugnmeet'), ['maxlength' => 200, 'size' => 60]);
        $mform->setType("{$prefix}[topic]", PARAM_TEXT);
        $mform->addHelpButton("{$prefix}[topic]", 'ai_topic', 'mod_plugnmeet');

        $mform->addElement('textarea', "{$prefix}[system_prompt]", get_string('ai_system_prompt', 'mod_plugnmeet'), ['rows' => 5, 'cols' => 60]);
        $mform->setType("{$prefix}[system_prompt]", PARAM_TEXT);
        $mform->addHelpButton("{$prefix}[system_prompt]", 'ai_system_prompt', 'mod_plugnmeet');

        $mform->addElement('html', RoomHelper::get_ai_form_script_html($presets));

        $mform->addElement('advcheckbox', 'meta[enable_continuity]', get_string('ai_enable_continuity', 'mod_plugnmeet'));
        $mform->setDefault('meta[enable_continuity]', 1);
        $mform->addHelpButton('meta[enable_continuity]', 'ai_enable_continuity', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[ai_grade_from_summary]', get_string('ai_grade_from_summary', 'mod_plugnmeet'));
        $mform->setDefault('meta[ai_grade_from_summary]', 1);
        $mform->addHelpButton('meta[ai_grade_from_summary]', 'ai_grade_from_summary', 'mod_plugnmeet');

        $mcpservers = [];
        for ($i = 1; $i <= 2; $i++) {
            if (!empty($config->{"ai_mcp_{$i}_enabled"})) {
                $name = trim($config->{"ai_mcp_{$i}_name"} ?? '');
                $mcpservers[] = $name !== '' ? $name : 'MCP ' . $i;
            }
        }
        if ($mcpservers) {
            $mform->addElement('advcheckbox', 'meta[enable_mcp_servers]', get_string('ai_enable_mcp_servers', 'mod_plugnmeet', implode(', ', $mcpservers)));
            $mform->setDefault('meta[enable_mcp_servers]', 1);
            $mform->addHelpButton('meta[enable_mcp_servers]', 'ai_enable_mcp_servers', 'mod_plugnmeet');
        }

        // One duration cap shared by the session, the AI audio and the talking avatar.
        $maxminutes = "{$prefix}[max_session_minutes]";
        $mform->addElement('text', $maxminutes, get_string('ai_max_session_minutes', 'mod_plugnmeet'));
        $mform->setType($maxminutes, PARAM_INT);
        $mform->setDefault($maxminutes, $this->get_default_session_minutes($config));
        $mform->addHelpButton($maxminutes, 'ai_max_session_minutes', 'mod_plugnmeet');

        // Advanced settings.
        $mform->addElement('textarea', "{$prefix}[allowed_subtopics]", get_string('ai_allowed_subtopics', 'mod_plugnmeet'), ['rows' => 3, 'cols' => 60]);
        $mform->setType("{$prefix}[allowed_subtopics]", PARAM_TEXT);
        $mform->setAdvanced("{$prefix}[allowed_subtopics]");

        $mform->addElement('textarea', "{$prefix}[forbidden_topics]", get_string('ai_forbidden_topics', 'mod_plugnmeet'), ['rows' => 3, 'cols' => 60]);
        $mform->setType("{$prefix}[forbidden_topics]", PARAM_TEXT);
        $mform->setAdvanced("{$prefix}[forbidden_topics]");

        $mform->addElement('advcheckbox', "{$prefix}[strict_topic_enforcement]", get_string('ai_strict_topic_enforcement', 'mod_plugnmeet'));
        $mform->setDefault("{$prefix}[strict_topic_enforcement]", 1);
        $mform->setAdvanced("{$prefix}[strict_topic_enforcement]");

        $mform->addElement('text', "{$prefix}[topic_anchor_interval_turns]", get_string('ai_topic_anchor_interval_turns', 'mod_plugnmeet'));
        $mform->setType("{$prefix}[topic_anchor_interval_turns]", PARAM_INT);
        $mform->setDefault("{$prefix}[topic_anchor_interval_turns]", 6);
        $mform->setAdvanced("{$prefix}[topic_anchor_interval_turns]");

        foreach (['spoken_lang', 'target_lang', 'instruction_lang', 'voice'] as $field) {
            $mform->addElement('text', "{$prefix}[{$field}]", get_string("ai_{$field}", 'mod_plugnmeet'));
            $mform->setType("{$prefix}[{$field}]", PARAM_TEXT);
            $mform->setDefault("{$prefix}[{$field}]", '');
            $mform->setAdvanced("{$prefix}[{$field}]");
        }

        $mform->addElement('text', "{$prefix}[speaking_rate]", get_string('ai_speaking_rate', 'mod_plugnmeet'));
        $mform->setType("{$prefix}[speaking_rate]", PARAM_FLOAT);
        $mform->setDefault("{$prefix}[speaking_rate]", '1.0');
        $mform->setAdvanced("{$prefix}[speaking_rate]");

        foreach (['allow_whiteboard_write', 'allow_vision_capture', 'allow_polls', 'allow_notepad_write', 'allow_chat_message'] as $field) {
            $mform->addElement('advcheckbox', "{$prefix}[{$field}]", get_string("ai_{$field}", 'mod_plugnmeet'));
            $mform->setDefault("{$prefix}[{$field}]", 1);
            $mform->setAdvanced("{$prefix}[{$field}]");
        }

        if (!empty($config->ai_allow_web_fetch_global ?? 1)) {
            $mform->addElement('advcheckbox', "{$prefix}[allow_web_fetch]", get_string('ai_allow_web_fetch', 'mod_plugnmeet'));
            $mform->setDefault("{$prefix}[allow_web_fetch]", 0);
            $mform->setAdvanced("{$prefix}[allow_web_fetch]");

            $mform->addElement('textarea', "{$prefix}[allowed_knowledge_urls]", get_string('ai_allowed_knowledge_urls', 'mod_plugnmeet'), ['rows' => 3, 'cols' => 60]);
            $mform->setType("{$prefix}[allowed_knowledge_urls]", PARAM_RAW);
            $mform->setAdvanced("{$prefix}[allowed_knowledge_urls]");
            $mform->disabledIf("{$prefix}[allowed_knowledge_urls]", "{$prefix}[allow_web_fetch]", 'eq', 0);
        }

        // Advanced settings: the activity the student has to complete.
        $mform->addElement(
            'static',
            'ai_activity_rules_heading',
            get_string('ai_activity_rules_heading', 'mod_plugnmeet'),
            html_writer::div(get_string('ai_activity_rules_heading_desc', 'mod_plugnmeet'), 'text-muted')
        );
        $mform->setAdvanced('ai_activity_rules_heading');

        $rules = "{$prefix}[activity_rules]";
        $quota = [
            'min_whiteboard_drawings' => 'allow_whiteboard_write',
            'min_quizzes' => 'allow_polls',
            'min_notepad_entries' => 'allow_notepad_write',
        ];
        foreach ($quota as $rulefield => $toolfield) {
            $elementname = "{$rules}[{$rulefield}]";
            $mform->addElement('text', $elementname, get_string("ai_{$rulefield}", 'mod_plugnmeet'));
            $mform->setType($elementname, PARAM_INT);
            $mform->setDefault($elementname, 0);
            $mform->setAdvanced($elementname);
            $mform->addHelpButton($elementname, "ai_{$rulefield}", 'mod_plugnmeet');
            $mform->disabledIf($elementname, "{$prefix}[{$toolfield}]", 'eq', 0);
        }

        $mform->addElement('text', "{$rules}[min_participant_exercises]", get_string('ai_min_participant_exercises', 'mod_plugnmeet'));
        $mform->setType("{$rules}[min_participant_exercises]", PARAM_INT);
        $mform->setDefault("{$rules}[min_participant_exercises]", 0);
        $mform->setAdvanced("{$rules}[min_participant_exercises]");
        $mform->addHelpButton("{$rules}[min_participant_exercises]", 'ai_min_participant_exercises', 'mod_plugnmeet');

        $mform->addElement('textarea', "{$rules}[required_milestones]", get_string('ai_required_milestones', 'mod_plugnmeet'), ['rows' => 3, 'cols' => 60]);
        $mform->setType("{$rules}[required_milestones]", PARAM_TEXT);
        $mform->setAdvanced("{$rules}[required_milestones]");
        $mform->addHelpButton("{$rules}[required_milestones]", 'ai_required_milestones', 'mod_plugnmeet');

        $mform->addElement('html', RoomHelper::get_ai_sections_script_html());
    }

    /**
     * Default AI session duration in minutes, clamped to the site wide limit.
     *
     * @param \stdClass $config
     * @return int
     */
    private function get_default_session_minutes($config): int {
        $limit = min(120, max(1, (int)($config->ai_max_session_minutes_limit ?? 60)));
        return max(1, min($limit, (int)($config->ai_default_max_session_minutes ?? 30)));
    }

    /**
     * Add default lock settings.
     */
    private function add_default_lock_settings() {
        $mform = $this->_form;
        $mform->addElement(
            'advcheckbox',
            'meta[default_lock_settings][lock_microphone]',
            get_string('lock_microphone', 'mod_plugnmeet')
        );
        $mform->setDefault('meta[default_lock_settings][lock_microphone]', 0);
        $mform->addHelpButton('meta[default_lock_settings][lock_microphone]', 'lock_microphone', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_webcam]', get_string('lock_webcam', 'mod_plugnmeet'));
        $mform->setDefault('meta[default_lock_settings][lock_webcam]', 0);
        $mform->addHelpButton('meta[default_lock_settings][lock_webcam]', 'lock_webcam', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_screen_sharing]', get_string('lock_screen_sharing', 'mod_plugnmeet'));
        $mform->setDefault('meta[default_lock_settings][lock_screen_sharing]', 1);
        $mform->addHelpButton('meta[default_lock_settings][lock_screen_sharing]', 'lock_screen_sharing', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_whiteboard]', get_string('lock_whiteboard', 'mod_plugnmeet'));
        $mform->setDefault('meta[default_lock_settings][lock_whiteboard]', 1);
        $mform->addHelpButton('meta[default_lock_settings][lock_whiteboard]', 'lock_whiteboard', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_shared_notepad]', get_string('lock_shared_notepad', 'mod_plugnmeet'));
        $mform->setDefault('meta[default_lock_settings][lock_shared_notepad]', 1);
        $mform->addHelpButton('meta[default_lock_settings][lock_shared_notepad]', 'lock_shared_notepad', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_chat]', get_string('lock_chat', 'mod_plugnmeet'));
        $mform->setDefault('meta[default_lock_settings][lock_chat]', 0);
        $mform->addHelpButton('meta[default_lock_settings][lock_chat]', 'lock_chat', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_chat_send_message]', get_string('lock_chat_send_message', 'mod_plugnmeet'));
        $mform->setDefault('meta[default_lock_settings][lock_chat_send_message]', 0);
        $mform->addHelpButton('meta[default_lock_settings][lock_chat_send_message]', 'lock_chat_send_message', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_chat_file_share]', get_string('lock_chat_file_share', 'mod_plugnmeet'));
        $mform->setDefault('meta[default_lock_settings][lock_chat_file_share]', 0);
        $mform->addHelpButton('meta[default_lock_settings][lock_chat_file_share]', 'lock_chat_file_share', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_private_chat]', get_string('lock_private_chat', 'mod_plugnmeet'));
        $mform->setDefault('meta[default_lock_settings][lock_private_chat]', 0);
        $mform->addHelpButton('meta[default_lock_settings][lock_private_chat]', 'lock_private_chat', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_reactions]', get_string('lock_reactions', 'mod_plugnmeet'));
        $mform->setDefault('meta[default_lock_settings][lock_reactions]', 0);
        $mform->addHelpButton('meta[default_lock_settings][lock_reactions]', 'lock_reactions', 'mod_plugnmeet');
    }

    /**
     * Add custom completion rules.
     *
     * @return array
     */
    public function add_completion_rules() {
        $mform = $this->_form;

        $mform->addElement('text', 'completionminutes', get_string('completion_minutes', 'mod_plugnmeet'));
        $mform->setType('completionminutes', PARAM_INT);
        $mform->addHelpButton('completionminutes', 'completion_minutes', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'completionraisedhand', get_string('completion_raised_hand', 'mod_plugnmeet'));
        $mform->addHelpButton('completionraisedhand', 'completion_raised_hand', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'completionchatmessages', get_string('completion_chat_messages', 'mod_plugnmeet'));
        $mform->addHelpButton('completionchatmessages', 'completion_chat_messages', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'completionwebcam', get_string('completion_webcam_enabled', 'mod_plugnmeet'));
        $mform->addHelpButton('completionwebcam', 'completion_webcam_enabled', 'mod_plugnmeet');

        $mform->addElement('text', 'completionwebcamduration', get_string('completion_webcam_duration', 'mod_plugnmeet'));
        $mform->setType('completionwebcamduration', PARAM_INT);
        $mform->addHelpButton('completionwebcamduration', 'completion_webcam_duration', 'mod_plugnmeet');
        $mform->disabledIf('completionwebcamduration', 'completionwebcam', 'eq', 0);

        $mform->addElement('advcheckbox', 'completionmic', get_string('completion_mic_enabled', 'mod_plugnmeet'));
        $mform->addHelpButton('completionmic', 'completion_mic_enabled', 'mod_plugnmeet');

        $mform->addElement('text', 'completionmicduration', get_string('completion_mic_duration', 'mod_plugnmeet'));
        $mform->setType('completionmicduration', PARAM_INT);
        $mform->addHelpButton('completionmicduration', 'completion_mic_duration', 'mod_plugnmeet');
        $mform->disabledIf('completionmicduration', 'completionmic', 'eq', 0);

        $mform->addElement('text', 'completiontalkduration', get_string('completion_talk_duration', 'mod_plugnmeet'));
        $mform->setType('completiontalkduration', PARAM_INT);
        $mform->addHelpButton('completiontalkduration', 'completion_talk_duration', 'mod_plugnmeet');
        $mform->disabledIf('completiontalkduration', 'completionmic', 'eq', 0);

        $mform->addElement('advcheckbox', 'completionpollvoted', get_string('completion_poll_voted', 'mod_plugnmeet'));
        $mform->addHelpButton('completionpollvoted', 'completion_poll_voted', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'completionwhiteboardannotated', get_string('completion_whiteboard_annotated', 'mod_plugnmeet'));
        $mform->addHelpButton('completionwhiteboardannotated', 'completion_whiteboard_annotated', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'completionaisessioncompleted', get_string('completion_ai_session_completed', 'mod_plugnmeet'));
        $mform->addHelpButton('completionaisessioncompleted', 'completion_ai_session_completed', 'mod_plugnmeet');

        $mform->addElement('text', 'completionaiminscore', get_string('completion_ai_min_score', 'mod_plugnmeet'));
        $mform->setType('completionaiminscore', PARAM_INT);
        $mform->setDefault('completionaiminscore', 0);
        $mform->addHelpButton('completionaiminscore', 'completion_ai_min_score', 'mod_plugnmeet');
        $mform->disabledIf('completionaiminscore', 'completionaisessioncompleted', 'eq', 0);

        // The server disables these conference-only rules in AI tutor rooms.
        $mform->hideIf('completionraisedhand', 'meta[activity_mode]', 'eq', 'ai_tutor');
        $mform->hideIf('completionwebcam', 'meta[activity_mode]', 'eq', 'ai_tutor');
        $mform->hideIf('completionwebcamduration', 'meta[activity_mode]', 'eq', 'ai_tutor');

        return ['completionminutes', 'completionraisedhand', 'completionchatmessages',
            'completionwebcam', 'completionwebcamduration', 'completionmic', 'completionmicduration',
            'completiontalkduration', 'completionpollvoted', 'completionwhiteboardannotated',
            'completionaisessioncompleted', 'completionaiminscore'];
    }

    /**
     * Check if completion rules are enabled.
     *
     * @param array $data
     * @return bool
     */
    public function completion_rule_enabled($data) {
        return (!empty($data['completionminutes']) || !empty($data['completionraisedhand']) ||
            !empty($data['completionchatmessages']) || !empty($data['completionwebcam']) ||
            !empty($data['completionwebcamduration']) || !empty($data['completionmic']) ||
            !empty($data['completionmicduration']) || !empty($data['completiontalkduration']) ||
            !empty($data['completionpollvoted']) || !empty($data['completionwhiteboardannotated']) ||
            !empty($data['completionaisessioncompleted']) || !empty($data['completionaiminscore']));
    }

    /**
     * Moodle validation
     */
    public function validation($data, $files) {
        $errors = parent::validation($data, $files);

        if ($data['available'] && $data['deadline'] && $data['deadline'] < $data['available']) {
            $errors['deadline'] = get_string('err_deadline_before_available', 'mod_plugnmeet');
        }

        $config = get_config('mod_plugnmeet');
        $activitymode = $data['meta']['activity_mode'] ?? 'conference';
        $insights = $data['meta']['insights_features'] ?? [];
        $ai = $insights['ai_agent_features'] ?? [];
        $isaitutor = ($activitymode === 'ai_tutor');
        $isconferenceai = ($activitymode === 'conference' && !empty($insights['is_allow']) && !empty($ai['is_allow']));
        $isai = $isaitutor || $isconferenceai;
        $aipath = 'meta[insights_features][ai_agent_features]';
        $autopath = "{$aipath}[auto_session_config]";

        // Validate Analytics dependency for completion.
        if ($this->completion_rule_enabled($data)) {
            if (empty($data['meta']['room_features']['enable_analytics']) && $activitymode === 'conference' && !$isconferenceai) {
                $errors['meta[room_features][enable_analytics]'] = get_string('error_analytics_required_for_completion', 'mod_plugnmeet');
            }
            $minscore = $data['completionaiminscore'] ?? '';
            if ($minscore !== '' && (!is_numeric($minscore) || $minscore < 0 || $minscore > 100)) {
                $errors['completionaiminscore'] = get_string('error_completion_ai_min_score', 'mod_plugnmeet');
            }
        }

        if ($isai) {
            $topic = trim($ai['topic'] ?? '');
            if ($topic === '') {
                $errors["{$aipath}[topic]"] = get_string('error_ai_topic_required', 'mod_plugnmeet');
            } else if (core_text::strlen($topic) > 200) {
                $errors["{$aipath}[topic]"] = get_string('error_ai_topic_too_long', 'mod_plugnmeet');
            }

            if (trim($ai['system_prompt'] ?? '') === '') {
                $errors["{$aipath}[system_prompt]"] = get_string('error_ai_system_prompt_required', 'mod_plugnmeet');
            }

            $speakingrate = trim($ai['speaking_rate'] ?? '');
            if ($speakingrate !== '' && ((float)$speakingrate < 0.5 || (float)$speakingrate > 2.0)) {
                $errors["{$aipath}[speaking_rate]"] = get_string('error_ai_speaking_rate', 'mod_plugnmeet');
            }

            $anchor = (int)($ai['topic_anchor_interval_turns'] ?? 6);
            if ($anchor < 3 || $anchor > 12) {
                $errors["{$aipath}[topic_anchor_interval_turns]"] = get_string('error_ai_topic_anchor_interval', 'mod_plugnmeet');
            }

            $maxminuteslimit = min(120, max(1, (int)($config->ai_max_session_minutes_limit ?? 60)));
            $maxminutes = (int)($ai['max_session_minutes'] ?? 0);
            if ($maxminutes < 1 || $maxminutes > $maxminuteslimit) {
                $errors["{$aipath}[max_session_minutes]"] = get_string('error_ai_max_session_minutes', 'mod_plugnmeet', $maxminuteslimit);
            }

            $rules = (array)($ai['activity_rules'] ?? []);
            foreach (['min_whiteboard_drawings', 'min_quizzes', 'min_notepad_entries', 'min_participant_exercises'] as $rulefield) {
                $quotavalue = (int)($rules[$rulefield] ?? 0);
                if ($quotavalue < 0 || $quotavalue > 20) {
                    $errors["{$aipath}[activity_rules][{$rulefield}]"] = get_string('error_ai_activity_quota_range', 'mod_plugnmeet');
                }
            }

            $milestones = preg_split('/[\r\n,]+/', (string)($rules['required_milestones'] ?? ''));
            $milestones = array_filter(array_map('trim', $milestones), static fn($item) => $item !== '');
            $milestoneerror = count($milestones) > 16;
            foreach ($milestones as $milestone) {
                $milestoneerror = $milestoneerror || core_text::strlen($milestone) > 240;
            }
            if ($milestoneerror) {
                $errors["{$aipath}[activity_rules][required_milestones]"] = get_string('error_ai_required_milestones', 'mod_plugnmeet');
            }

            if ($isaitutor) {
                // Guest access always uses one AI session per participant.
                $sessionmode = !empty($data['allow_guest']) ? 2 : (int)($ai['session_mode'] ?? 2);
                if ($sessionmode === 2) {
                    $maxconcurrentlimit = max(1, (int)($config->ai_max_concurrent_sessions_limit ?? 16));
                    $maxconcurrent = (int)($ai['auto_session_config']['max_concurrent_sessions'] ?? 0);
                    if ($maxconcurrent < 1 || $maxconcurrent > $maxconcurrentlimit) {
                        $errors["{$autopath}[max_concurrent_sessions]"] = get_string('error_ai_max_concurrent_sessions', 'mod_plugnmeet', $maxconcurrentlimit);
                    }
                } else {
                    $allowedids = $ai['auto_session_config']['allowed_participant_ids'] ?? [];
                    if (empty($allowedids)) {
                        $errors["{$autopath}[allowed_participant_ids]"] = get_string('error_ai_participants_required', 'mod_plugnmeet');
                    } else if (count($allowedids) > 32) {
                        $errors["{$autopath}[allowed_participant_ids]"] = get_string('error_ai_participants_limit', 'mod_plugnmeet');
                    }
                }
            }
        }

        // Call extension form validation hooks.
        try {
            foreach (ExtensionManager::get_mod_form_addons() as $addon) {
                $errors = $addon->get_mod_form_validation_rules($data, $errors);
            }
        } catch (Exception $e) {
            debugging('Error in PlugNmeet subplugin get_mod_form_validation_rules: ' . $e->getMessage(), DEBUG_DEVELOPER);
            // Use a generic object ID or the instance ID if available.
            $objectid = $data['instance'] ?? 0;
            RoomHelper::write_log_event($objectid, 'mod_form_validation', $e->getMessage());
        }

        return $errors;
    }

    /**
     * Recursive function to flatten metadata for form defaults.
     */
    private function flatten_metadata($metadata, $prefix = 'meta') {
        $flat = [];
        $textlists = ['allowed_subtopics', 'forbidden_topics', 'allowed_knowledge_urls', 'required_milestones'];
        foreach ($metadata as $key => $value) {
            $newkey = $prefix . '[' . $key . ']';
            if (is_array($value) && $value && array_is_list($value) && !array_filter($value, 'is_array')) {
                // Id lists stay arrays for multi-selects, text lists become one item per line.
                $flat[$newkey] = in_array($key, $textlists, true) ? implode("\n", $value) : array_map('strval', $value);
            } else if (is_array($value)) {
                $flat = array_merge($flat, $this->flatten_metadata($value, $newkey));
            } else {
                $flat[$newkey] = $value;
            }
        }
        return $flat;
    }

    /**
     * Moodle data processing hook
     */
    public function data_preprocessing(&$defaultvalues) {
        parent::data_preprocessing($defaultvalues);

        if (isset($this->current->id) && $this->current->id) {
            // Handle metadata
            $metadata = json_decode($this->current->roommetadata, true);
            if ($metadata) {
                $flatmetadata = $this->flatten_metadata($metadata);
                foreach ($flatmetadata as $key => $value) {
                    $defaultvalues[$key] = $value;
                }

                // The removed hybrid mode ran the AI agent inside a conference room.
                if (($defaultvalues['meta[activity_mode]'] ?? '') === 'hybrid') {
                    $defaultvalues['meta[activity_mode]'] = 'conference';
                    $defaultvalues['meta[insights_features][ai_agent_features][is_allow]'] = 1;
                }

                // Older activities capped the AI session in seconds and the audio/avatar separately.
                $aiprefix = 'meta[insights_features][ai_agent_features]';
                if (!isset($defaultvalues["{$aiprefix}[max_session_minutes]"])) {
                    $legacyseconds = (int)($defaultvalues["{$aiprefix}[max_session_seconds]"] ?? 0);
                    if ($legacyseconds > 0) {
                        $defaultvalues["{$aiprefix}[max_session_minutes]"] = max(1, (int)round($legacyseconds / 60));
                    }
                }
                $legacykeys = [
                    "{$aiprefix}[max_session_seconds]",
                    "{$aiprefix}[max_audio_minutes]",
                    "{$aiprefix}[avatar][max_avatar_minutes]",
                ];
                foreach ($legacykeys as $legacykey) {
                    unset($defaultvalues[$legacykey]);
                }
            }
        }

        // Prepare draft area for filepicker.
        $draftitemid = file_get_submitted_draft_itemid('preload_file');
        file_prepare_draft_area($draftitemid, $this->context->id, 'mod_plugnmeet', 'preload_file', $this->current->id, ['subdirs' => 0, 'maxfiles' => 1]);
        $defaultvalues['preload_file'] = $draftitemid;
    }
}
