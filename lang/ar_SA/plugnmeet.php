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
 * Strings for component 'mod_plugnmeet', language 'en'
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'بلجونميت';
$string['modulename_help'] = 'The PlugNmeet activity module allows you to create and manage real-time web conferencing sessions from within Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'بلج نيميتس';
$string['pluginadministration'] = 'إدارة بلج نيميت';
$string['pluginname'] = 'بلجونميت';
$string['plugnmeet:addinstance'] = 'Add a new PlugNmeet activity';
$string['plugnmeet:deleterecording'] = 'Delete recordings';
$string['plugnmeet:manage'] = 'Manage PlugNmeet settings';
$string['plugnmeet:view'] = 'View PlugNmeet activity';
$string['plugnmeet:viewartifacts'] = 'View artifacts';
$string['plugnmeet:viewlivesessioninfo'] = 'View live session information';
$string['plugnmeetfieldset'] = 'Custom example fieldset';
$string['plugnmeetname'] = 'Custom example name';
$string['plugnmeetname_help'] = 'Custom example help';

// Admin Settings
$string['api_config'] = 'API Configuration';
$string['server_url'] = 'PlugNmeet Server URL';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com)';
$string['api_key'] = 'API Key';
$string['api_key_desc'] = 'The API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server.';

$string['defaults'] = 'Technical Defaults';
$string['defaults_desc'] = 'Default technical settings for new PlugNmeet sessions.';
$string['enable_dynacast'] = 'Enable Dynacast';
$string['enable_dynacast_des'] = 'Use Dynacast to optimize video streams by publishing only the most recently active speaker.';
$string['enable_simulcast'] = 'Enable Simulcast';
$string['enable_simulcast_des'] = 'Use Simulcast to provide multiple video quality layers to viewers.';
$string['video_codec'] = 'Video Codec';
$string['video_codec_des'] = 'The default video codec for sessions.';
$string['default_webcam_resolution'] = 'Default Webcam Resolution';
$string['default_webcam_resolution_des'] = 'The default resolution for webcams.';
$string['default_screen_share_resolution'] = 'Default Screen Share Resolution';
$string['default_screen_share_resolution_des'] = 'The default resolution for screen sharing.';
$string['default_audio_preset'] = 'Default Audio Preset';
$string['default_audio_preset_des'] = 'The default audio preset for sessions.';

$string['branding'] = 'Branding and Customization';
$string['custom_logo'] = 'Custom Logo';
$string['custom_logo_des'] = 'Upload a custom logo to display in the meeting room. If empty, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'عنوان URL المخصص ل CSS';
$string['custom_css_url_des'] = 'Provide a URL to an external CSS file to customize the look and feel of the meeting room.';
$string['primary_color'] = 'اللون الأساسي';
$string['primary_color_des'] = 'The primary color for buttons and highlights.';
$string['secondary_color'] = 'اللون الثانوي';
$string['secondary_color_des'] = 'The secondary color for UI elements.';
$string['background_color'] = 'لون الخلفية';
$string['background_color_des'] = 'لون خلفية الواجهة';
$string['background_image'] = 'صورة الخلفية';
$string['background_image_des'] = 'يجب أن يكون حجم 1920 × 1080 للحصول على أفضل نتيجة.';
$string['header_color'] = 'لون الرأس';
$string['header_color_des'] = 'لون رأس الواجهة';
$string['footer_color'] = 'لون التذييل';
$string['footer_color_des'] = 'لون تذييل الواجهة';
$string['left_color'] = 'لون الجانب الأيسر';
$string['left_color_des'] = 'لون شريط الجانب الأيسر';
$string['side_panel_bg_color'] = 'لون خلفية اللوحة الجانبية';
$string['side_panel_bg_color_des'] = 'لون خلفية اللوحة على الجانب الأيمن';
$string['copyright_text'] = 'Copyright Text';
$string['copyright_text_des'] = 'The copyright text to display in the footer of the meeting room. HTML is allowed.';
$string['client_load'] = 'تحميل العميل من';
$string['client_load_des'] = 'default: local';
$string['remote'] = 'بعيد';
$string['local'] = 'محلي';

$string['client_side'] = 'Client-Side Options';
$string['client_load_mode'] = 'Client Load Mode';
$string['client_load_mode_desc'] = 'Choose whether to load the web client from the remote server or from a local copy.';
$string['remote'] = 'Remote';
$string['local'] = 'Local';
$string['client_download_url'] = 'Client Download URL';
$string['client_download_url_des'] = 'If using the "Local" load mode, provide the URL to the client.zip file.';
$string['update_client_btn'] = 'Update Local Client';
$string['update_client_btn_label'] = 'Update Now';

$string['yes'] = 'نعم';
$string['no'] = 'لا';
$string['recordings'] = "التسجيلات";
$string['artifacts'] = "Room Artifacts";
$string['attendance'] = "Attendance Report";
$string['artifact'] = "Artifact";

// mod_form.php
$string['roomtitle'] = 'Room Title';
$string['welcome_message'] = 'Welcome Message';
$string['max_participants'] = 'Max Participants';
$string['room_features'] = 'Room Features';
$string['recording_features'] = 'Recording Features';
$string['chat_features'] = 'Chat Features';
$string['other_features'] = 'Other Features';
$string['e2ee_features'] = 'End-to-End Encryption';
$string['insights_features'] = 'Insights & AI Features';
$string['defaultlock'] = 'Default Lock Settings';
$string['advanced_completion'] = 'Advanced Completion';
$string['available'] = 'متاح من';
$string['deadline'] = 'Available until';
$string['err_deadline_before_available'] = 'The "Available until" date cannot be before the "Available from" date.';

$string['allow_webcams'] = 'Allow Webcams';
$string['allow_webcams_help'] = 'Allow participants to use their webcams.';
$string['mute_on_start'] = 'Mute on Start';
$string['mute_on_start_help'] = 'Automatically mute all participants when they join the session.';
$string['allow_screen_share'] = 'Allow Screen Share';
$string['allow_screen_share_help'] = 'Allow participants to share their screen.';
$string['allow_rtmp'] = 'Allow RTMP Streaming';
$string['allow_rtmp_help'] = 'Allow moderators to stream the session to an RTMP endpoint.';
$string['admin_only_webcams'] = 'Admin Only Webcams';
$string['admin_only_webcams_help'] = 'Only allow moderators to use their webcams.';
$string['room_duration'] = 'Room Duration (minutes)';
$string['room_duration_help'] = 'The maximum duration of the room in minutes. 0 for no limit.';
$string['moderator_join_first'] = 'Moderator Join First';
$string['moderator_join_first_help'] = 'Require a moderator to join before other participants can.';
$string['enable_analytics'] = 'Enable Analytics';
$string['enable_analytics_help'] = 'Generate analytics for the session.';
$string['allow_virtual_bg'] = 'Allow Virtual Backgrounds';
$string['allow_virtual_bg_help'] = 'Allow participants to use virtual backgrounds.';
$string['auto_gen_user_id'] = 'Auto Generate User ID';
$string['auto_gen_user_id_help'] = 'Automatically generate a user ID for each participant.';

$string['allow_recording'] = 'Allow Recording';
$string['allow_recording_help'] = 'Allow the session to be recorded.';
$string['allow_cloud_recording'] = 'Allow Cloud Recording';
$string['allow_cloud_recording_help'] = 'Allow the session to be recorded to the cloud.';
$string['enable_auto_cloud_recording'] = 'Enable Auto Cloud Recording';
$string['enable_auto_cloud_recording_help'] = 'Automatically start recording when the session starts.';
$string['allow_local_recording'] = 'Allow Local Recording';
$string['allow_local_recording_help'] = 'Allow participants to record the session locally.';
$string['is_allow_view_recording'] = 'Allow Viewing Recordings';
$string['is_allow_view_recording_help'] = 'Allow participants to view the recordings.';
$string['is_allow_download_recording'] = 'Allow Downloading Recordings';
$string['is_allow_download_recording_help'] = 'Allow participants to download the recordings.';

$string['allow_chat'] = 'Allow Chat';
$string['allow_chat_help'] = 'Enable the public chat feature.';
$string['allow_file_upload'] = 'Allow File Upload';
$string['allow_file_upload_help'] = 'Allow participants to upload files in the chat.';

$string['allow_shared_notepad'] = 'Allow Shared Notepad';
$string['allow_shared_notepad_help'] = 'Allow participants to use the shared notepad.';
$string['allow_whiteboard'] = 'السماح بلوح المعلومات';
$string['allow_whiteboard_help'] = 'Allow participants to use the whiteboard.';
$string['allowed_external_media_player'] = 'السماح بمشغل وسائط خارجي';
$string['allowed_external_media_player_help'] = 'Allow participants to play external media (e.g., YouTube videos).';
$string['activate_waiting_room'] = 'Activate Waiting Room';
$string['activate_waiting_room_help'] = 'Enable the waiting room for this session.';
$string['waiting_room_msg'] = 'Waiting Room Message';
$string['allow_breakout_rooms'] = 'Allow Breakout Rooms';
$string['allow_breakout_rooms_help'] = 'Allow moderators to create breakout rooms.';
$string['allowed_number_rooms'] = 'Allowed Number of Breakout Rooms';
$string['allow_display_external_link_features'] = 'Allow Display External Link';
$string['allow_display_external_link_features_help'] = 'Allow moderators to display an external link to all participants.';
$string['allow_ingress_features'] = 'Allow Ingress';
$string['allow_ingress_features_help'] = 'Allow ingress into the session.';
$string['allow_polls'] = 'Allow Polls';
$string['allow_polls_help'] = 'Allow moderators to create polls.';
$string['sip_dial_in_features_is_allow'] = 'Allow SIP Dial-in';
$string['sip_dial_in_features_is_allow_help'] = 'Allow participants to join the session via SIP dial-in.';

$string['enable_end_to_end_encryption_features'] = 'Enable End-to-End Encryption';
$string['enable_end_to_end_encryption_features_help'] = 'Enable end-to-end encryption for the session.';
$string['enabled_self_insert_encryption_key'] = 'Allow Self-insert of Encryption Key';
$string['enabled_self_insert_encryption_key_help'] = 'Allow participants to insert their own encryption key.';
$string['included_e2ee_chat_messages'] = 'Include Chat Messages in E2EE';
$string['included_e2ee_chat_messages_help'] = 'Include chat messages in the end-to-end encryption.';
$string['included_e2ee_whiteboard'] = 'Include Whiteboard in E2EE';
$string['included_e2ee_whiteboard_help'] = 'Include the whiteboard in the end-to-end encryption.';

$string['insights_features_is_allow'] = 'Allow Insights';
$string['insights_features_is_allow_help'] = 'Allow the generation of insights for this session.';
$string['insights_transcription_features_is_allow'] = 'Allow Transcription';
$string['insights_transcription_features_is_allow_help'] = 'Allow the session to be transcribed.';
$string['insights_transcription_features_is_allow_translation'] = 'Allow Transcription Translation';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allow the transcription to be translated.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Transcription Speech Synthesis';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Allow the transcription to be read aloud.';
$string['insights_chat_translation_features_is_allow'] = 'Allow Chat Translation';
$string['insights_chat_translation_features_is_allow_help'] = 'Allow chat messages to be translated.';
$string['insights_ai_features_is_allow'] = 'Allow AI Features';
$string['insights_ai_features_is_allow_help'] = 'Allow AI features to be used in this session.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Text Chat';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Allow AI to be used in the chat.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Allow AI Meeting Summarization';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Allow the meeting to be summarized by AI.';

$string['lock_microphone'] = 'Lock Microphone';
$string['lock_microphone_help'] = 'Disable all participants\' microphones by default.';
$string['lock_webcam'] = 'Lock Webcam';
$string['lock_webcam_help'] = 'Disable all participants\' webcams by default.';
$string['lock_screen_sharing'] = 'Lock Screen Sharing';
$string['lock_screen_sharing_help'] = 'Disable screen sharing for all participants by default.';
$string['lock_whiteboard'] = 'Lock Whiteboard';
$string['lock_whiteboard_help'] = 'Disable the whiteboard for all participants by default.';
$string['lock_shared_notepad'] = 'Lock Shared Notepad';
$string['lock_shared_notepad_help'] = 'Disable shared notes for all participants by default.';
$string['lock_chat'] = 'Lock Chat';
$string['lock_chat_help'] = 'Disable public chat for all participants by default.';
$string['lock_chat_send_message'] = 'Lock Chat Send Message';
$string['lock_chat_send_message_help'] = 'Disable sending messages in the public chat for all participants by default.';
$string['lock_chat_file_share'] = 'Lock Chat File Share';
$string['lock_chat_file_share_help'] = 'Disable file sharing in the public chat for all participants by default.';
$string['lock_private_chat'] = 'Lock Private Chat';
$string['lock_private_chat_help'] = 'Disable private chat for all participants by default.';

$string['completion_minutes'] = 'Minutes Attended';
$string['completion_minutes_help'] = 'Require the user to be in the session for a certain number of minutes.';
$string['completion_minutes_desc'] = 'User must attend the session for at least {$a} minutes.';
$string['completion_raised_hand'] = 'Raised Hand';
$string['completion_raised_hand_help'] = 'Require the user to raise their hand at least 1 time.';
$string['completion_chat_messages'] = 'Chat Messages Sent';
$string['completion_chat_messages_help'] = 'Require the user to send at least 1 chat messages.';
$string['completion_webcam_enabled'] = 'Webcam Enabled';
$string['completion_webcam_enabled_help'] = 'Require the user to enable their webcam at least once.';
$string['completion_mic_enabled'] = 'Microphone Enabled';
$string['completion_mic_enabled_help'] = 'Require the user to enable their microphone at least once.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Stores session statistics for users to determine activity completion.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'The ID of the user.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'JSON-encoded session data (minutes, chat messages, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'The time when the statistics were last updated.';

// view.php
$string['join_session'] = 'Join Session';
$string['start_session'] = 'Start Session';
$string['end_session'] = 'End Session';
$string['participants'] = 'Participants';
$string['is_recording'] = 'Is Recording';
$string['is_active'] = 'Is Active';
$string['room_info'] = 'Live Session Details';
$string['participants_info'] = 'Live Participants';
$string['room_id'] = 'Room ID';
$string['creation_time'] = 'Creation Time';
$string['name'] = 'Name';
$string['user_id'] = 'User ID';
$string['is_admin'] = 'Is Admin';
$string['is_presenter'] = 'Is Presenter';
$string['joined_at'] = 'Joined At';
$string['moderator_not_joined'] = 'A moderator must start the session before you can join.';
$string['session_available_from'] = 'Available from: {$a}';
$string['session_available_until'] = 'Available until: {$a}';
$string['session_not_started_yet'] = 'This session has not started yet.';
$string['session_ended'] = 'This session has ended.';

// Events
$string['event_room_started'] = 'Room started';
$string['event_room_ended'] = 'Room ended';
$string['event_room_created'] = 'Room created';
$string['event_session_ended'] = 'Session ended';
$string['event_participant_joined'] = 'Participant joined';
$string['event_participant_left'] = 'Participant left';
$string['event_artifact_created'] = 'Artifact created';
$string['event_recording_proceeded'] = 'Recording ready';

// Notifications
$string['messageprovider:recording_artifact_notifications'] = 'Notifications for ready recordings and artifacts';
$string['recording_ready_notification_subject'] = 'Recording ready: {$a}';
$string['recording_ready_notification_fullmessage'] = 'The recording for the session "{$a->roomname}" is now ready and processed. You can view it here: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>The recording for the session <strong>"{$a->roomname}"</strong> is now ready and processed.</p><p><a href="{$a->url}">Click here to view the recording.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Recording ready for {$a}';
$string['artifact_ready_notification_subject'] = 'Artifact ready: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'A new artifact ({$a->type}) for the session "{$a->roomname}" is now available. You can view it here: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>A new artifact ({$a->type}) for the session <strong>"{$a->roomname}"</strong> is now available.</p><p><a href="{$a->url}">Click here to view the artifact details.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artifact ready for {$a}';

// recordings.php
$string['no_recordings'] = 'No recordings found.';
$string['recording_id'] = 'Recording ID';
$string['room_sid'] = 'Room SID';
$string['file_size'] = 'File Size';
$string['created_at'] = 'Created At';
$string['actions'] = 'Actions';
$string['view'] = 'منظر';
$string['play'] = 'لعب';
$string['download'] = 'تحميل';
$string['delete'] = 'حذف';
$string['delete_confirm'] = 'Are you sure you want to delete this?';
$string['recording_details'] = 'Recording Details';
$string['recording_creation_time'] = 'Recording Creation Time';
$string['room_creation_time'] = 'Session Creation Time';
$string['back_to_list'] = 'Back to List';
$string['browser_not_support_video'] = 'Your browser does not support the video tag.';
$string['room_title'] = 'Room Title';
$string['total_participants'] = 'Total Participants';
$string['session_started_at'] = 'Session Started At';
$string['session_ended_at'] = 'Session Ended At';

// artifacts.php
$string['no_artifacts'] = 'No artifacts found.';
$string['artifact_id'] = 'Artifact ID';
$string['type'] = 'Type';
$string['artifact_details'] = 'Artifact Details';
$string['no_permission'] = 'You do not have permission to view this page.';
$string['token_usage'] = 'Token Usage';
$string['duration_usage'] = 'Duration Usage';
$string['character_count_usage'] = 'Character Count Usage';
$string['estimated_cost'] = 'Estimated Cost';
$string['file_path'] = 'File Path';
$string['mime_type'] = 'Mime Type';
$string['created_at'] = 'Created At';

// Analytics strings
$string['download_excel_report'] = 'Download Excel Report';
$string['download_raw_json'] = 'Download Raw Data';
$string['room_summary'] = 'Room Summary';
$string['users_summary'] = 'Users Summary';
$string['see_excel_report'] = 'See Excel Report for Details';
$string['error_loading_analytics'] = 'Error loading analytics data: {$a}';
$string['error_generating_excel'] = 'Error generating Excel report: {$a}';

$string['analytics_room_room_id'] = 'Room ID';
$string['analytics_room_room_title'] = 'Room Title';
$string['analytics_room_room_creation'] = 'Room Creation Time';
$string['analytics_room_room_ended'] = 'Room Ended Time';
$string['analytics_room_room_duration'] = 'Room Duration';
$string['analytics_room_room_total_users'] = 'Total Participants';
$string['analytics_room_enabled_e2ee'] = 'E2EE Enabled';
$string['analytics_room_recording_status'] = 'Recording Status Count';
$string['analytics_room_rtmp_status'] = 'RTMP Status Count';
$string['analytics_room_speech_service_total_usage'] = 'Speech Service Total Usage';
$string['analytics_room_external_media_player_status'] = 'External Media Player Status Count';
$string['analytics_room_etherpad_status'] = 'Etherpad Status Count';
$string['analytics_room_external_display_link_status'] = 'External Display Link Status Count';
$string['analytics_room_ingress_created'] = 'Ingress Created Count';
$string['analytics_room_breakout_room'] = 'Breakout Room Count';

$string['analytics_user_name'] = 'Name';
$string['analytics_user_id'] = 'User ID';
$string['analytics_user_ex_id'] = 'User ID';
$string['analytics_user_is_admin'] = 'Is Admin';
$string['analytics_user_duration'] = 'Duration';
$string['analytics_user_joined'] = 'Joined At';
$string['analytics_user_left'] = 'Left At';
$string['analytics_user_mic_status'] = 'Mic Status Changes';
$string['analytics_user_mic_muted'] = 'Mic Muted Count';
$string['analytics_user_talked'] = 'Talked Count';
$string['analytics_user_talked_duration'] = 'Talked Duration';
$string['analytics_user_webcam_status'] = 'Webcam Status Changes';
$string['analytics_user_raise_hand'] = 'Raise Hand Count';
$string['analytics_user_voted_poll'] = 'Voted Poll Count';
$string['analytics_user_whiteboard_annotated'] = 'Whiteboard Annotated Count';
$string['analytics_user_whiteboard_files'] = 'Whiteboard Files Count';
$string['analytics_user_screen_share_status'] = 'Screen Share Status Changes';
$string['analytics_user_speech_services_usage'] = 'Speech Services Usage';
$string['analytics_user_public_chat'] = 'Public Chat Messages';
$string['analytics_user_private_chat'] = 'Private Chat Messages';
$string['analytics_user_chat_files'] = 'Chat Files Shared';
$string['analytics_user_interface_invisible'] = 'Interface Invisible Count';
$string['analytics_user_connection_quality'] = 'Connection Quality';
$string['analytics_user_connection_quality_excellent'] = 'Excellent';
$string['analytics_user_connection_quality_good'] = 'Good';
$string['analytics_user_connection_quality_poor'] = 'Poor';

$string['users_info'] = 'Users Info';
$string['polls'] = 'Polls';
$string['question'] = 'Question';
$string['options'] = 'Options';
$string['file_name'] = 'File Name';
$string['checkcompletiontask'] = 'Check plugNmeet completion';

// attendance.php
$string['attendance_report'] = 'Attendance Report';
$string['status'] = 'Status';
$string['present'] = 'Present';
$string['absent'] = 'Absent';
$string['minutes_attended'] = 'Minutes Attended';
$string['last_updated'] = 'Last Updated';
