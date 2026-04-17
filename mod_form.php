<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be website,
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

require_once($CFG->dirroot . '/course/moodleform_mod.php');

/**
 * Module instance settings form.
 */
class mod_plugnmeet_mod_form extends moodleform_mod {

    /**
     * Defines forms elements
     */
    public function definition() {
        global $CFG;

        $mform = $this->_form;

        // General settings
        $mform->addElement('header', 'general', get_string('general', 'form'));
        $mform->addElement('text', 'name', get_string('roomtitle', 'mod_plugnmeet'), ['size' => '64']);
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', null, 'required', null, 'client');
        $this->standard_intro_elements();

        $mform->addElement('textarea', 'welcomemessage', get_string("welcome_message", "mod_plugnmeet"), 'wrap="virtual" rows="5" cols="50"');
        $mform->setType('welcomemessage', PARAM_CLEANHTML);

        $mform->addElement('text', 'maxparticipants', get_string("max_participants", "mod_plugnmeet"));
        $mform->setType('maxparticipants', PARAM_INT);

        // Room Features
        $mform->addElement('header', 'room_features_header', get_string('room_features', 'mod_plugnmeet'));
        $mform->setExpanded('room_features_header', false);
        $this->add_room_features();

        // Recording Features
        $mform->addElement('header', 'recording_features_header', get_string('recording_features', 'mod_plugnmeet'));
        $mform->setExpanded('recording_features_header', false);
        $this->add_recording_features();

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

        // Default Lock Settings
        $mform->addElement('header', 'default_lock_header', get_string('defaultlock', 'mod_plugnmeet'));
        $mform->setExpanded('default_lock_header', false);
        $this->add_default_lock_settings();

        // Availability.
        $mform->addElement('header', 'availabilityhdr', get_string('availability'));
        $mform->addElement('date_time_selector', 'available', get_string('available', 'mod_plugnmeet'), array('optional' => true));
        $mform->setDefault('available', 0);
        $mform->addElement('date_time_selector', 'deadline', get_string('deadline', 'mod_plugnmeet'), array('optional' => true));
        $mform->setDefault('deadline', 0);

        // Standard grading elements.
        $this->standard_grading_coursemodule_elements();

        // Add standard elements
        $this->standard_coursemodule_elements();
        $this->add_action_buttons();
    }

    private function add_room_features() {
        $mform = $this->_form;

        $mform->addElement('text', 'meta[room_features][room_duration]', get_string('room_duration', 'mod_plugnmeet'));
        $mform->setType('meta[room_features][room_duration]', PARAM_INT);
        $mform->setDefault('meta[room_features][room_duration]', 0);
        $mform->addHelpButton('meta[room_features][room_duration]', 'room_duration', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][allow_webcams]', get_string('allow_webcams', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_webcams]', 1);
        $mform->addHelpButton('meta[room_features][allow_webcams]', 'allow_webcams', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][mute_on_start]', get_string('mute_on_start', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][mute_on_start]', 0);
        $mform->addHelpButton('meta[room_features][mute_on_start]', 'mute_on_start', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][allow_screen_share]', get_string('allow_screen_share', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_screen_share]', 1);
        $mform->addHelpButton('meta[room_features][allow_screen_share]', 'allow_screen_share', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][allow_rtmp]', get_string('allow_rtmp', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][allow_rtmp]', 1);
        $mform->addHelpButton('meta[room_features][allow_rtmp]', 'allow_rtmp', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][admin_only_webcams]', get_string('admin_only_webcams', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][admin_only_webcams]', 0);
        $mform->addHelpButton('meta[room_features][admin_only_webcams]', 'admin_only_webcams', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[room_features][moderator_join_first]', get_string('moderator_join_first', 'mod_plugnmeet'));
        $mform->setDefault('meta[room_features][moderator_join_first]', 0);
        $mform->addHelpButton('meta[room_features][moderator_join_first]', 'moderator_join_first', 'mod_plugnmeet');

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

    private function add_recording_features() {
        $mform = $this->_form;
        $mform->addElement('advcheckbox', 'meta[recording_features][is_allow]', get_string('allow_recording', 'mod_plugnmeet'));
        $mform->setDefault('meta[recording_features][is_allow]', 1);
        $mform->addHelpButton('meta[recording_features][is_allow]', 'allow_recording', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[recording_features][is_allow_cloud]', get_string('allow_cloud_recording', 'mod_plugnmeet'));
        $mform->setDefault('meta[recording_features][is_allow_cloud]', 1);
        $mform->addHelpButton('meta[recording_features][is_allow_cloud]', 'allow_cloud_recording', 'mod_plugnmeet');
        $mform->disabledIf('meta[recording_features][is_allow_cloud]', 'meta[recording_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[recording_features][enable_auto_cloud_recording]', get_string('enable_auto_cloud_recording', 'mod_plugnmeet'));
        $mform->setDefault('meta[recording_features][enable_auto_cloud_recording]', 0);
        $mform->addHelpButton('meta[recording_features][enable_auto_cloud_recording]', 'enable_auto_cloud_recording', 'mod_plugnmeet');
        $mform->disabledIf('meta[recording_features][enable_auto_cloud_recording]', 'meta[recording_features][is_allow_cloud]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[recording_features][is_allow_local]', get_string('allow_local_recording', 'mod_plugnmeet'));
        $mform->setDefault('meta[recording_features][is_allow_local]', 1);
        $mform->addHelpButton('meta[recording_features][is_allow_local]', 'allow_local_recording', 'mod_plugnmeet');
        $mform->disabledIf('meta[recording_features][is_allow_local]', 'meta[recording_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[recording_features][is_allow_view_recording]', get_string('is_allow_view_recording', 'mod_plugnmeet'));
        $mform->setDefault('meta[recording_features][is_allow_view_recording]', 1);
        $mform->addHelpButton('meta[recording_features][is_allow_view_recording]', 'is_allow_view_recording', 'mod_plugnmeet');
        $mform->disabledIf('meta[recording_features][is_allow_view_recording]', 'meta[recording_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[recording_features][is_allow_download_recording]', get_string('is_allow_download_recording', 'mod_plugnmeet'));
        $mform->setDefault('meta[recording_features][is_allow_download_recording]', 1);
        $mform->addHelpButton('meta[recording_features][is_allow_download_recording]', 'is_allow_download_recording', 'mod_plugnmeet');
        $mform->disabledIf('meta[recording_features][is_allow_download_recording]', 'meta[recording_features][is_allow]', 'eq', 0);
    }

    private function add_chat_features() {
        $mform = $this->_form;
        $mform->addElement('advcheckbox', 'meta[chat_features][is_allow]', get_string('allow_chat', 'mod_plugnmeet'));
        $mform->setDefault('meta[chat_features][is_allow]', 1);
        $mform->addHelpButton('meta[chat_features][is_allow]', 'allow_chat', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[chat_features][is_allow_file_upload]', get_string('allow_file_upload', 'mod_plugnmeet'));
        $mform->setDefault('meta[chat_features][is_allow_file_upload]', 1);
        $mform->addHelpButton('meta[chat_features][is_allow_file_upload]', 'allow_file_upload', 'mod_plugnmeet');
        $mform->disabledIf('meta[chat_features][is_allow_file_upload]', 'meta[chat_features][is_allow]', 'eq', 0);
    }

    private function add_other_features() {
        $mform = $this->_form;
        $mform->addElement('advcheckbox', 'meta[shared_note_pad_features][is_allow]', get_string('allow_shared_notepad', 'mod_plugnmeet'));
        $mform->setDefault('meta[shared_note_pad_features][is_allow]', 1);
        $mform->addHelpButton('meta[shared_note_pad_features][is_allow]', 'allow_shared_notepad', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[whiteboard_features][is_allow]', get_string('allow_whiteboard', 'mod_plugnmeet'));
        $mform->setDefault('meta[whiteboard_features][is_allow]', 1);
        $mform->addHelpButton('meta[whiteboard_features][is_allow]', 'allow_whiteboard', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[external_media_player_features][is_allow]', get_string('allowed_external_media_player', 'mod_plugnmeet'));
        $mform->setDefault('meta[external_media_player_features][is_allow]', 1);
        $mform->addHelpButton('meta[external_media_player_features][is_allow]', 'allowed_external_media_player', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[waiting_room_features][is_active]', get_string('activate_waiting_room', 'mod_plugnmeet'));
        $mform->setDefault('meta[waiting_room_features][is_active]', 0);
        $mform->addHelpButton('meta[waiting_room_features][is_active]', 'activate_waiting_room', 'mod_plugnmeet');

        $mform->addElement('textarea', 'meta[waiting_room_features][waiting_room_msg]', get_string('waiting_room_msg', 'mod_plugnmeet'), 'wrap="virtual" rows="5" cols="50"');
        $mform->disabledIf('meta[waiting_room_features][waiting_room_msg]', 'meta[waiting_room_features][is_active]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[breakout_room_features][is_allow]', get_string('allow_breakout_rooms', 'mod_plugnmeet'));
        $mform->setDefault('meta[breakout_room_features][is_allow]', 1);
        $mform->addHelpButton('meta[breakout_room_features][is_allow]', 'allow_breakout_rooms', 'mod_plugnmeet');

        $mform->addElement('text', 'meta[breakout_room_features][allowed_number_rooms]', get_string('allowed_number_rooms', 'mod_plugnmeet'));
        $mform->setType('meta[breakout_room_features][allowed_number_rooms]', PARAM_INT);
        $mform->setDefault('meta[breakout_room_features][allowed_number_rooms]', 6);
        $mform->disabledIf('meta[breakout_room_features][allowed_number_rooms]', 'meta[breakout_room_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[display_external_link_features][is_allow]', get_string('allow_display_external_link_features', 'mod_plugnmeet'));
        $mform->setDefault('meta[display_external_link_features][is_allow]', 1);
        $mform->addHelpButton('meta[display_external_link_features][is_allow]', 'allow_display_external_link_features', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[ingress_features][is_allow]', get_string('allow_ingress_features', 'mod_plugnmeet'));
        $mform->setDefault('meta[ingress_features][is_allow]', 1);
        $mform->addHelpButton('meta[ingress_features][is_allow]', 'allow_ingress_features', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[polls_features][is_allow]', get_string('allow_polls', 'mod_plugnmeet'));
        $mform->setDefault('meta[polls_features][is_allow]', 1);
        $mform->addHelpButton('meta[polls_features][is_allow]', 'allow_polls', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[sip_dial_in_features][is_allow]', get_string('sip_dial_in_features_is_allow', 'mod_plugnmeet'));
        $mform->setDefault('meta[sip_dial_in_features][is_allow]', 0);
        $mform->addHelpButton('meta[sip_dial_in_features][is_allow]', 'sip_dial_in_features_is_allow', 'mod_plugnmeet');
    }

    private function add_e2ee_features() {
        $mform = $this->_form;
        $mform->addElement('advcheckbox', 'meta[end_to_end_encryption_features][is_enabled]', get_string('enable_end_to_end_encryption_features', 'mod_plugnmeet'));
        $mform->setDefault('meta[end_to_end_encryption_features][is_enabled]', 0);
        $mform->addHelpButton('meta[end_to_end_encryption_features][is_enabled]', 'enable_end_to_end_encryption_features', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[end_to_end_encryption_features][enabled_self_insert_encryption_key]', get_string('enabled_self_insert_encryption_key', 'mod_plugnmeet'));
        $mform->setDefault('meta[end_to_end_encryption_features][enabled_self_insert_encryption_key]', 0);
        $mform->addHelpButton('meta[end_to_end_encryption_features][enabled_self_insert_encryption_key]', 'enabled_self_insert_encryption_key', 'mod_plugnmeet');
        $mform->disabledIf('meta[end_to_end_encryption_features][enabled_self_insert_encryption_key]', 'meta[end_to_end_encryption_features][is_enabled]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[end_to_end_encryption_features][included_chat_messages]', get_string('included_e2ee_chat_messages', 'mod_plugnmeet'));
        $mform->setDefault('meta[end_to_end_encryption_features][included_chat_messages]', 0);
        $mform->addHelpButton('meta[end_to_end_encryption_features][included_chat_messages]', 'included_e2ee_chat_messages', 'mod_plugnmeet');
        $mform->disabledIf('meta[end_to_end_encryption_features][included_chat_messages]', 'meta[end_to_end_encryption_features][is_enabled]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[end_to_end_encryption_features][included_whiteboard]', get_string('included_e2ee_whiteboard', 'mod_plugnmeet'));
        $mform->setDefault('meta[end_to_end_encryption_features][included_whiteboard]', 0);
        $mform->addHelpButton('meta[end_to_end_encryption_features][included_whiteboard]', 'included_e2ee_whiteboard', 'mod_plugnmeet');
        $mform->disabledIf('meta[end_to_end_encryption_features][included_whiteboard]', 'meta[end_to_end_encryption_features][is_enabled]', 'eq', 0);
    }

    private function add_insights_features() {
        $mform = $this->_form;
        $mform->addElement('advcheckbox', 'meta[insights_features][is_allow]', get_string('insights_features_is_allow', 'mod_plugnmeet'));
        $mform->setDefault('meta[insights_features][is_allow]', 0);
        $mform->addHelpButton('meta[insights_features][is_allow]', 'insights_features_is_allow', 'mod_plugnmeet');

        $mform->addElement('advcheckbox', 'meta[insights_features][transcription_features][is_allow]', get_string('insights_transcription_features_is_allow', 'mod_plugnmeet'));
        $mform->setDefault('meta[insights_features][transcription_features][is_allow]', 0);
        $mform->addHelpButton('meta[insights_features][transcription_features][is_allow]', 'insights_transcription_features_is_allow', 'mod_plugnmeet');
        $mform->disabledIf('meta[insights_features][transcription_features][is_allow]', 'meta[insights_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[insights_features][transcription_features][is_allow_translation]', get_string('insights_transcription_features_is_allow_translation', 'mod_plugnmeet'));
        $mform->setDefault('meta[insights_features][transcription_features][is_allow_translation]', 0);
        $mform->addHelpButton('meta[insights_features][transcription_features][is_allow_translation]', 'insights_transcription_features_is_allow_translation', 'mod_plugnmeet');
        $mform->disabledIf('meta[insights_features][transcription_features][is_allow_translation]', 'meta[insights_features][transcription_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[insights_features][transcription_features][is_allow_speech_synthesis]', get_string('insights_transcription_features_is_allow_speech_synthesis', 'mod_plugnmeet'));
        $mform->setDefault('meta[insights_features][transcription_features][is_allow_speech_synthesis]', 0);
        $mform->addHelpButton('meta[insights_features][transcription_features][is_allow_speech_synthesis]', 'insights_transcription_features_is_allow_speech_synthesis', 'mod_plugnmeet');
        $mform->disabledIf('meta[insights_features][transcription_features][is_allow_speech_synthesis]', 'meta[insights_features][transcription_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[insights_features][chat_translation_features][is_allow]', get_string('insights_chat_translation_features_is_allow', 'mod_plugnmeet'));
        $mform->setDefault('meta[insights_features][chat_translation_features][is_allow]', 0);
        $mform->addHelpButton('meta[insights_features][chat_translation_features][is_allow]', 'insights_chat_translation_features_is_allow', 'mod_plugnmeet');
        $mform->disabledIf('meta[insights_features][chat_translation_features][is_allow]', 'meta[insights_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[insights_features][ai_features][is_allow]', get_string('insights_ai_features_is_allow', 'mod_plugnmeet'));
        $mform->setDefault('meta[insights_features][ai_features][is_allow]', 0);
        $mform->addHelpButton('meta[insights_features][ai_features][is_allow]', 'insights_ai_features_is_allow', 'mod_plugnmeet');
        $mform->disabledIf('meta[insights_features][ai_features][is_allow]', 'meta[insights_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[insights_features][ai_features][ai_text_chat_features][is_allow]', get_string('insights_ai_text_chat_features_is_allow', 'mod_plugnmeet'));
        $mform->setDefault('meta[insights_features][ai_features][ai_text_chat_features][is_allow]', 0);
        $mform->addHelpButton('meta[insights_features][ai_features][ai_text_chat_features][is_allow]', 'insights_ai_text_chat_features_is_allow', 'mod_plugnmeet');
        $mform->disabledIf('meta[insights_features][ai_features][ai_text_chat_features][is_allow]', 'meta[insights_features][ai_features][is_allow]', 'eq', 0);

        $mform->addElement('advcheckbox', 'meta[insights_features][ai_features][meeting_summarization_features][is_allow]', get_string('insights_ai_meeting_summarization_features_is_allow', 'mod_plugnmeet'));
        $mform->setDefault('meta[insights_features][ai_features][meeting_summarization_features][is_allow]', 0);
        $mform->addHelpButton('meta[insights_features][ai_features][meeting_summarization_features][is_allow]', 'insights_ai_meeting_summarization_features_is_allow', 'mod_plugnmeet');
        $mform->disabledIf('meta[insights_features][ai_features][meeting_summarization_features][is_allow]', 'meta[insights_features][ai_features][is_allow]', 'eq', 0);
    }

    private function add_default_lock_settings() {
        $mform = $this->_form;
        $mform->addElement('advcheckbox', 'meta[default_lock_settings][lock_microphone]', get_string('lock_microphone', 'mod_plugnmeet'));
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

        $mform->addElement('advcheckbox', 'completionmic', get_string('completion_mic_enabled', 'mod_plugnmeet'));
        $mform->addHelpButton('completionmic', 'completion_mic_enabled', 'mod_plugnmeet');

        return array('completionminutes', 'completionraisedhand', 'completionchatmessages', 'completionwebcam', 'completionmic');
    }

    /**
     * Check if completion rules are enabled.
     *
     * @param array $data
     * @return bool
     */
    public function completion_rule_enabled($data) {
        return (!empty($data['completionminutes']) || !empty($data['completionraisedhand']) || !empty($data['completionchatmessages']) || !empty($data['completionwebcam']) || !empty($data['completionmic']));
    }

    public function validation($data, $files) {
        $errors = parent::validation($data, $files);
        if ($data['available'] && $data['deadline'] && $data['deadline'] < $data['available']) {
            $errors['deadline'] = get_string('err_deadline_before_available', 'mod_plugnmeet');
        }
        return $errors;
    }

    public function data_preprocessing(&$default_values) {
        parent::data_preprocessing($default_values);
        if (isset($this->current->id) && $this->current->id) {
            // Handle metadata
            $metadata = json_decode($this->current->roommetadata, true);
            if ($metadata) {
                foreach ($metadata as $key => $value) {
                    if (is_array($value)) {
                        foreach ($value as $subkey => $subvalue) {
                            if (is_array($subvalue)) {
                                foreach ($subvalue as $subsubkey => $subsubvalue) {
                                    $default_values['meta[' . $key . '][' . $subkey . '][' . $subsubkey . ']'] = $subsubvalue;
                                }
                            } else {
                                $default_values['meta[' . $key . '][' . $subkey . ']'] = $subvalue;
                            }
                        }
                    } else {
                        $default_values['meta[' . $key . ']'] = $value;
                    }
                }
            }
        }
    }
}
