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

/**
 * Strings for component 'mod_plugnmeet', language 'en'
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'plugNmeet';
$string['modulename_help'] = 'The PlugNmeet activity module allows you to create and manage real-time web conferencing sessions from within Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'plugNmeet administration';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Add a new PlugNmeet activity';
$string['plugnmeet:deleteartifacts'] = 'Delete artifacts';
$string['plugnmeet:deleterecording'] = 'Delete recordings';
$string['plugnmeet:downloadanalyticsreport'] = 'Download analytics report';
$string['plugnmeet:downloadartifacts'] = 'Download artifacts';
$string['plugnmeet:downloadattendance'] = 'Download attendance report';
$string['plugnmeet:downloadrecordings'] = 'Download recordings';
$string['plugnmeet:manage'] = 'Manage PlugNmeet settings';
$string['plugnmeet:view'] = 'View PlugNmeet activity';
$string['plugnmeet:viewactiveroomsreport'] = 'View active rooms report';
$string['plugnmeet:viewartifacts'] = 'View artifacts';
$string['plugnmeet:viewattendance'] = 'View attendance report';
$string['plugnmeet:viewattendancelist'] = 'View attendance list';
$string['plugnmeet:viewlivesessioninfo'] = 'View live session information';
$string['plugnmeet:viewrecordings'] = 'View recordings';
$string['plugnmeetfieldset'] = 'Custom example fieldset';
$string['plugnmeetname'] = 'Custom example name';
$string['plugnmeetname_help'] = 'Custom example help';

// Admin Settings
$string['api_config'] = 'API Configuration';
$string['server_url'] = 'PlugNmeet Server URL';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'API Key';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server used for secure authentication.';
$string['guest_access_hdr'] = 'Guest Access Settings';
$string['allow_guest_global'] = 'Allow Guest Access Globally';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = 'Guest Link Expiration (hours)';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = 'Technical Defaults';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = 'Enable Dynacast';
$string['enable_dynacast_des'] = 'Optimizes performance by dynamically pausing video layers that are not being viewed by participants. This significantly reduces server-side CPU and bandwidth usage. **Note:** This will be automatically enabled if using SVC codecs (VP9/AV1) and is required for multi-codec simulcast.';
$string['enable_simulcast'] = 'Enable Simulcast';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = 'Video Codec';
$string['video_codec_des'] = 'The encoding standard for video transmission. **VP8** is recommended for WebRTC as it provides the best balance of quality and low latency. **Warning:** Not all browsers support every codec; ensure your users are on modern browsers if using VP9 or H.265.';
$string['default_webcam_resolution'] = 'Default Webcam Resolution';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = 'Default Screen Share Resolution';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = 'Default Audio Preset';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = 'Branding and Customization';
$string['custom_logo'] = 'Custom Logo';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'Custom CSS URL';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = 'Primary Color';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = 'Secondary Color';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = 'Background color';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = 'Background image';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = 'Header Color';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = 'Footer Color';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = 'Left Side Color';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = 'Side Panel background color';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = 'Copyright Text';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = 'Yes';
$string['no'] = 'No';
$string['recordings'] = "Recordings";
$string['recording'] = "Recording";
$string['artifacts'] = "Room Artifacts";
$string['attendance'] = "Attendance Report";
$string['artifact'] = "Artifact";
$string['room_subject'] = 'room';
$string['user_subject'] = 'user';
$string['activeroomsreport'] = 'Active Rooms Report';
$string['noactiverooms'] = 'There are no active rooms at the moment.';
$string['activerooms'] = 'Active Rooms';
$string['loading'] = 'Loading...';

// mod_form.php
$string['roomtitle'] = 'Room Title';
$string['roomtitle_help'] = 'The name used for the Moodle activity and the live meeting header. It helps students identify the session in their course and inside the room.';
$string['welcome_message'] = 'Welcome Message';
$string['welcome_message_help'] = 'Any text entered here will appear as the first message in the public chat when users join the room. This is useful for sharing instructions, links, or important information with participants as they enter.';
$string['max_participants'] = 'Max Participants';
$string['max_participants_help'] = 'Set this value to limit how many users can join the session at the same time. Set it to 0 to allow unlimited participants, meaning there is no restriction on how many users can join.';
$string['room_features'] = 'Room Features';
$string['recording_features'] = 'Recording Features';
$string['chat_features'] = 'Chat Features';
$string['other_features'] = 'Other Features';
$string['e2ee_features'] = 'End-to-End Encryption';
$string['insights_features'] = 'Insights & AI Features';
$string['defaultlock'] = 'Default Lock Settings';
$string['advanced_completion'] = 'Advanced Completion';
$string['available'] = 'Available from';
$string['available_help'] = 'Determines when participants can start joining the session. Users will not be able to enter the room before this date and time.';
$string['deadline'] = 'Available until';
$string['deadline_help'] = 'Determines the final date and time that participants can access the session. Access will be blocked once this deadline passes.';
$string['err_deadline_before_available'] = 'The "Available until" date cannot be before the "Available from" date.';
$string['error_analytics_required_for_completion'] = 'Enable Analytics must be checked if any completion criteria are set.';

$string['allow_webcams'] = 'Allow Webcams';
$string['allow_webcams_help'] = 'Allow participants to use their webcams.';
$string['mute_on_start'] = 'Mute on Start';
$string['mute_on_start_help'] = 'Automatically mute all participants when they join the session.';
$string['allow_screen_share'] = 'Allow Screen Share';
$string['allow_screen_share_help'] = 'Allow participants to share their screen.';
$string['allow_rtmp'] = 'Allow RTMP Streaming';
$string['allow_rtmp_help'] = 'Enables moderators to broadcast the live session to external platforms like YouTube, Facebook, or Twitch. Perfect for public webinars or guest lectures.';
$string['allow_raise_hand'] = 'Allow Raise Hand';
$string['allow_raise_hand_help'] = 'Allow participants to raise their hand.';
$string['admin_only_webcams'] = 'Admin Only Webcams';
$string['admin_only_webcams_help'] = 'Only allow moderators to use their webcams.';
$string['allow_view_other_webcams'] = 'Allow View Other Webcams';
$string['allow_view_other_webcams_help'] = 'Allow participants to view other participants\' webcams. If disabled, they will only see moderators\' webcams.';
$string['allow_view_other_users_list'] = 'Allow View Other Users List';
$string['allow_view_other_users_list_help'] = 'Allow participants to see the list of other participants.';
$string['room_duration'] = 'Room Duration (minutes)';
$string['room_duration_help'] = 'Defines how long the room can stay open before it closes automatically. Enter 0 if you do not want to set any time limit, allowing the room to remain active without restrictions.';
$string['moderator_join_first'] = 'Moderator Join First';
$string['moderator_join_first_help'] = 'When enabled, the session will not start and no one can join until a moderator (such as a teacher) joins first. Participants will remain on the Moodle activity page and will not enter the room or a waiting area. This is different from the Waiting Room option, where users can still join and wait.';
$string['enable_analytics'] = 'Enable Analytics';
$string['enable_analytics_help'] = 'Tracks participation and engagement data for the session. **Note:** This must be enabled if any Completion criteria are set.';
$string['allow_virtual_bg'] = 'Allow Virtual Backgrounds';
$string['allow_virtual_bg_help'] = 'Enables participants to blur their background or use a virtual image. Great for maintaining student privacy and ensuring a professional classroom appearance.';
$string['auto_gen_user_id'] = 'Auto Generate User ID';
$string['auto_gen_user_id_help'] = 'When enabled, the system creates a new ID so the same user can join from multiple devices—for example, when a teacher joins from a tablet to draw on the whiteboard while using a PC for the camera and microphone; however, it is <b>recommended</b> to keep this off so the Moodle user ID is used and duplicate joins are prevented.';

$string['allow_recording'] = 'Allow Recording (Master Switch)';
$string['allow_recording_help'] = 'The primary master switch for all recording features. If disabled, both Cloud and Local recording options will be hidden from moderators.';
$string['allow_cloud_recording'] = 'Allow Cloud Recording';
$string['allow_cloud_recording_help'] = 'Enables recording on the PlugNmeet server. The final video is processed and stored in the cloud, making it easy to share via a link once the session ends.';
$string['enable_auto_cloud_recording'] = 'Enable Auto Cloud Recording';
$string['enable_auto_cloud_recording_help'] = 'Automatically triggers the cloud recording the moment the first moderator joins the session. Ideal for ensuring no lecture is forgotten.';
$string['allow_local_recording'] = 'Allow Local Recording';
$string['allow_local_recording_help'] = 'Allows recording directly to the computer. **Note:** Requires Google Chrome. To capture all session audio, the user must share their "Chrome Tab" and check the "Also share tab audio" box. The file is saved locally to the device once finished.';

$string['allow_chat'] = 'Allow Chat (Global Master Switch)';
$string['allow_chat_help'] = 'The absolute master switch for all chat functions. If disabled, the entire chat area is removed for everyone, including moderators. No public or private chat will be possible.';
$string['allow_file_upload'] = 'Allow File Upload';
$string['allow_file_upload_help'] = 'Enables the ability to share files within the chat. This requires the "Allow Chat" master switch to be active.';

$string['allow_shared_notepad'] = 'Allow Shared Notepad';
$string['allow_shared_notepad_help'] = 'Enables a collaborative text editor where students and teachers can take real-time notes together. This is perfect for brainstorming, co-writing, or building a shared class summary.';

$string['allow_whiteboard'] = 'Allow Whiteboard';
$string['allow_whiteboard_help'] = 'Unlocks an interactive drawing space for the session. Use it for sketching diagrams, solving math problems visually, or letting students annotate shared content.';

$string['allowed_external_media_player'] = 'Allow External Media Player';
$string['allowed_external_media_player_help'] = 'Allows moderators to sync and play videos from sources like YouTube or Vimeo for the whole class. Ideal for analyzing educational clips or watching documentaries together without bandwidth lag.';

$string['activate_waiting_room'] = 'Activate Waiting Room';
$string['activate_waiting_room_help'] = 'Enable the waiting room for this session.';
$string['waiting_room_msg'] = 'Waiting Room Message';
$string['waiting_room_msg_help'] = 'This message is shown to users while they are waiting to be admitted to the room. Use it to share instructions, expectations, or helpful information before the session starts.';

$string['allow_breakout_rooms'] = 'Allow Breakout Rooms';
$string['allow_breakout_rooms_help'] = 'Enables moderators to split participants into smaller groups for focused discussions, collaborative projects, or private group activities.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'The maximum number of sub-rooms a moderator can create within a single session.';

$string['allow_display_external_link_features'] = 'Allow External Link Sharing';
$string['allow_display_external_link_features_help'] = 'Allows moderators to display external educational content—such as H5P activities, SCORM packages, or quiz systems (e.g., Kahoot)—directly to all participants during the session.';

$string['allow_ingress_features'] = 'Allow Ingress (External Streaming)';
$string['allow_ingress_features_help'] = 'Allows teachers to broadcast high-quality video into the session using external software like OBS via RTMP or WHIP protocols. This is ideal for sharing high-resolution video content, pre-recorded sessions, or bypassing browser upload limitations.';

$string['allow_polls'] = 'Allow Polls';
$string['allow_polls_help'] = 'Enables moderators to create interactive polls and quick quizzes during the session. This is a great way to check student understanding and increase engagement.';

$string['sip_dial_in_features_is_allow'] = 'Allow SIP Dial-in';
$string['sip_dial_in_features_is_allow_help'] = 'Allows participants to join the audio session via a traditional phone call. This is essential for students with poor internet connections or those who need to join while on the go.';

$string['enable_end_to_end_encryption_features'] = 'Enable End-to-End Encryption (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Provides maximum security by encrypting video and audio streams so that even the server cannot access them. Note: Some features like server-side recording may be limited when E2EE is active.';
$string['enabled_self_insert_encryption_key'] = 'Allow Participant-Defined Keys';
$string['enabled_self_insert_encryption_key_help'] = 'Allows participants to manually enter a shared secret key. This ensures the service provider never has access to the encryption keys, offering the highest level of privacy.';
$string['included_e2ee_chat_messages'] = 'Encrypt Chat Messages';
$string['included_e2ee_chat_messages_help'] = 'Extends end-to-end encryption to text chat, ensuring messages are only readable by participants in the room.';
$string['included_e2ee_whiteboard'] = 'Encrypt Whiteboard Data';
$string['included_e2ee_whiteboard_help'] = 'Includes all whiteboard drawings and annotations in the end-to-end encryption layer for total data privacy.';

$string['insights_features_is_allow'] = 'Allow Session Insights (Master Switch)';
$string['insights_features_is_allow_help'] = 'The primary master switch for all data-driven features. If disabled, all sub-options—including Transcription, AI Assistant, and Meeting Reports—will be completely unavailable.';
$string['insights_transcription_features_is_allow'] = 'Allow Live Transcription';
$string['insights_transcription_features_is_allow_help'] = 'Enables real-time speech-to-text during the session. This must be enabled for transcription translation or speech synthesis (TTS) to work.';
$string['insights_transcription_features_is_allow_translation'] = 'Allow Transcription Translation';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allows the live transcript to be translated into different languages, supporting international students and multi-lingual environments.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Speech Synthesis (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Enables Text-to-Speech, allowing the live transcript to be read aloud for better accessibility and for visually impaired participants.';
$string['insights_chat_translation_features_is_allow'] = 'Allow Chat Translation';
$string['insights_chat_translation_features_is_allow_help'] = 'Enables real-time translation of chat messages, allowing participants to communicate instantly across different languages.';
$string['insights_ai_features_is_allow'] = 'Allow AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'The master switch for all AI-powered capabilities. If disabled, specific features like AI Chat and Meeting Summarization will be hidden, even if Session Insights is active.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integrates an AI assistant directly into the chat to help answer questions, explain complex concepts, and facilitate group discussion.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Allow AI Meeting Summarization';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Automatically generates a concise AI summary after the session ends, highlighting key educational points, decisions, and follow-up tasks.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Mutes all participants by default upon entry. Only moderators can unmute or grant permission to speak.';
$string['lock_webcam'] = 'Lock Webcams';
$string['lock_webcam_help'] = 'Disables cameras for all participants by default. Useful for saving bandwidth or ensuring student privacy.';
$string['lock_screen_sharing'] = 'Lock Screen Sharing';
$string['lock_screen_sharing_help'] = 'Restricts screen sharing to moderators only. Prevents participants from interrupting with their own screens.';
$string['lock_whiteboard'] = 'Lock Whiteboard';
$string['lock_whiteboard_help'] = 'Restricts whiteboard drawing tools to moderators only. Prevents unauthorized annotations by participants.';
$string['lock_shared_notepad'] = 'Lock Shared Notepad';
$string['lock_shared_notepad_help'] = 'Disables the collaborative notepad for participants to prevent off-topic writing or distractions.';
$string['lock_chat'] = 'Lock Public Chat';
$string['lock_chat_help'] = 'Completely hides or disables the public chat area for all participants.';
$string['lock_chat_send_message'] = 'Lock Sending Messages';
$string['lock_chat_send_message_help'] = 'Allows participants to read the chat, but prevents them from sending any messages.';
$string['lock_chat_file_share'] = 'Lock File Sharing';
$string['lock_chat_file_share_help'] = 'Prevents participants from uploading or sharing files within the chat area.';
$string['lock_private_chat'] = 'Lock Private Chat';
$string['lock_private_chat_help'] = 'Disables 1-on-1 private messaging between participants. Note: Participants can still send private messages to moderators for help or questions.';

$string['completion_minutes'] = 'Minutes Attended';
$string['completion_minutes_help'] = 'Require the user to be in the session for a certain number of minutes.';
$string['completion_minutes_desc'] = 'User must attend the session for at least {$a} minutes.';
$string['completion_raised_hand'] = 'Raised Hand';
$string['completion_raised_hand_help'] = 'Require the user to raise their hand at least 1 time.';
$string['completion_chat_messages'] = 'Chat Messages Sent';
$string['completion_chat_messages_help'] = 'Require the user to send at least 1 chat messages.';
$string['completion_webcam_enabled'] = 'Webcam Enabled';
$string['completion_webcam_enabled_help'] = 'Require the user to enable their webcam at least once.';
$string['completion_webcam_duration'] = 'Webcam Enabled Duration (minutes)';
$string['completion_webcam_duration_help'] = 'Require the user to have their webcam enabled for a certain number of minutes.';
$string['completion_webcam_duration_desc'] = 'User must have their webcam enabled for at least {$a} minutes.';
$string['completion_mic_enabled'] = 'Microphone Enabled';
$string['completion_mic_enabled_help'] = 'Require the user to enable their microphone at least once.';
$string['completion_mic_duration'] = 'Microphone Enabled Duration (minutes)';
$string['completion_mic_duration_help'] = 'Require the user to have their microphone enabled for a certain number of minutes.';
$string['completion_mic_duration_desc'] = 'User must have their microphone enabled for at least {$a} minutes.';
$string['completion_talk_duration'] = 'Talk Duration (minutes)';
$string['completion_talk_duration_help'] = 'Require the user to talk for a certain number of minutes.';
$string['completion_talk_duration_desc'] = 'User must talk for at least {$a} minutes.';
$string['completion_poll_voted'] = 'Voted in Poll';
$string['completion_poll_voted_help'] = 'Require the user to vote in at least one poll.';
$string['completion_whiteboard_annotated'] = 'Annotated on Whiteboard';
$string['completion_whiteboard_annotated_help'] = 'Require the user to annotate on the whiteboard.';

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
$string['allow_guest'] = 'Allow Guest Users';
$string['allow_guest_help'] = 'When enabled, a secure shareable link is generated so external users (such as guest teachers or participants without a Moodle account) can join the session; an admin can view and share this link.';
$string['guest_join_link'] = 'Guest Join Link';
$string['guest_join_link_help'] = 'Share this link with external participants. This link will remain valid for {$a} hours. Every page reload will generate a new link, but previously shared links will remain valid until their original expiration time.';
$string['copy_link'] = 'Copy Link';
$string['link_copied'] = 'Link copied to clipboard.';
$string['guest_join_title'] = 'Join Meeting as Guest';
$string['enter_display_name'] = 'Enter your display name';
$string['join_as_guest'] = 'Join Meeting';
$string['guest_access_denied'] = 'Guest access is not enabled for this meeting.';
$string['invalid_guest_token'] = 'Invalid or expired guest join token.';
$string['guest_link_expired'] = 'This guest join link has expired.';
$string['error_joining_session'] = 'There was an error joining the session: {$a}';
$string['already_logged_in'] = 'You are already logged into Moodle. You can join the session directly from this activity page.';
$string['total_webcams'] = 'Total Webcams';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Total Screen Shares';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Mics';
$string['screenshares'] = 'Screen Shares';

// Events
$string['event_room_started'] = 'Room started';
$string['event_room_ended'] = 'Room ended';
$string['event_room_created'] = 'Room created';
$string['event_session_ended'] = 'Session ended';
$string['event_participant_joined'] = 'Participant joined';
$string['event_participant_left'] = 'Participant left';
$string['event_artifact_created'] = 'Artifact created';
$string['event_recording_proceeded'] = 'Recording ready';
$string['event_plugin_error'] = 'PlugNmeet error';
$string['event_track_published'] = 'Track published';
$string['event_track_unpublished'] = 'Track unpublished';
$string['event_recording_started'] = 'Recording started';
$string['event_recording_ended'] = 'Recording ended';
$string['event_rtmp_started'] = 'RTMP stream started';
$string['event_rtmp_ended'] = 'RTMP stream ended';

// Notifications
$string['messageprovider:recording_ready'] = 'Notifications for ready recordings';
$string['messageprovider:artifact_ready'] = 'Notifications for ready artifacts';
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
$string['view'] = 'View';
$string['play'] = 'Play';
$string['download'] = 'Download';
$string['delete'] = 'Delete';
$string['delete_confirm'] = 'Are you sure you want to delete this?';
$string['delete_success'] = 'Successfully deleted.';
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
$string['analytics_user_mic_duration'] = 'Mic Enabled Duration';
$string['analytics_user_talked'] = 'Talked Count';
$string['analytics_user_talked_duration'] = 'Talked Duration';
$string['analytics_user_webcam_status'] = 'Webcam Status Changes';
$string['analytics_user_webcam_duration'] = 'Webcam Enabled Duration';
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
$string['incomplete'] = 'Incomplete';
$string['completed'] = 'Completed';
$string['minutes_attended'] = 'Minutes Attended';
$string['last_updated'] = 'Last Updated';
$string['mic_duration'] = 'Microphone Enabled Duration';
$string['webcam_duration'] = 'Webcam Enabled Duration';
$string['participation_progress'] = 'Participation Progress';
$string['attendance_duration'] = 'Minutes Attended';
$string['attendance_webcam_status'] = 'Webcam Enabled';
$string['attendance_mic_status'] = 'Microphone Enabled';
$string['attendance_talked_duration'] = 'Talk Duration';
$string['attendance_voted_poll'] = 'Voted in Poll';
$string['attendance_chat_messages'] = 'Chat Messages Sent';
$string['attendance_raise_hand'] = 'Raised Hand';
$string['attendance_webcam_duration'] = 'Webcam Enabled Duration';
$string['attendance_mic_duration'] = 'Microphone Enabled Duration';
$string['attendance_whiteboard_annotated'] = 'Annotated on Whiteboard';
$string['met'] = 'Met';
$string['required'] = 'Required';

// Status codes
$string['status_unknown_status'] = 'An unknown status was returned from the server.';
$string['status_success'] = 'Operation completed successfully.';
$string['status_permission_denied'] = 'Permission denied.';
$string['status_not_found'] = 'No {$a} found.';
$string['status_conflict'] = 'This action could not be completed because of a conflict (e.g., the room may already exist).';
$string['status_invalid_token_or_signature'] = 'The request token or signature is invalid.';
$string['status_invalid_api_key'] = 'The API key provided is invalid. Please check your plugin settings.';
$string['status_internal_server_error'] = 'The PlugNmeet server encountered an internal error.';
$string['status_invalid_parameters'] = 'The information provided is invalid.';
$string['status_missing_required_parameter'] = 'Some required information is missing.';
$string['status_room_not_found'] = 'The specified room was not found.';
$string['status_user_not_found'] = 'User account not found. Please ensure your API credentials are correct and your subscription is active.';
$string['status_user_blocked'] = 'User account is blocked. Please contact support.';
$string['status_user_not_active'] = 'User account is not active. This is likely due to an inactive or expired subscription.';
