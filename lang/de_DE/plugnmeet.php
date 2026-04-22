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
$string['modulename_help'] = 'Das PlugNmeet-Aktivitätsmodul ermöglicht es Ihnen, Echtzeit-Webkonferenzsitzungen innerhalb von Moodle zu erstellen und zu verwalten.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'plugNmeet Verwaltung';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Fügen Sie eine neue PlugNmeet-Aktivität hinzu';
$string['plugnmeet:deleteartifacts'] = 'Artefakte löschen';
$string['plugnmeet:deleterecording'] = 'Aufnahmen löschen';
$string['plugnmeet:downloadanalyticsreport'] = 'Analysebericht herunterladen';
$string['plugnmeet:downloadartifacts'] = 'Artefakte herunterladen';
$string['plugnmeet:downloadattendance'] = 'Anwesenheitsbericht herunterladen';
$string['plugnmeet:downloadrecordings'] = 'Aufnahmen herunterladen';
$string['plugnmeet:manage'] = 'PlugNmeet-Einstellungen verwalten';
$string['plugnmeet:view'] = 'PlugNmeet-Aktivitäten ansehen';
$string['plugnmeet:viewartifacts'] = 'Artefakte ansehen';
$string['plugnmeet:viewattendance'] = 'Anwesenheitsbericht ansehen';
$string['plugnmeet:viewattendancelist'] = 'Besucherliste anzeigen';
$string['plugnmeet:viewlivesessioninfo'] = 'Live-Session-Informationen anzeigen';
$string['plugnmeet:viewrecordings'] = 'Aufnahmen ansehen';
$string['plugnmeetfieldset'] = 'Benutzerdefiniertes Beispiel-Fieldset';
$string['plugnmeetname'] = 'Benutzerdefinierter Beispielname';
$string['plugnmeetname_help'] = 'Hilfe mit benutzerdefinierten Beispielen';

// Admin Settings
$string['api_config'] = 'API-Konfiguration';
$string['server_url'] = 'PlugNmeet Server URL';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'API-Schlüssel';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API-Geheimnis';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server used for secure authentication.';
$string['guest_access_hdr'] = 'Gastzugriffseinstellungen';
$string['allow_guest_global'] = 'Gastzugriff global erlauben';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = 'Ablauf des Gastlinks (Stunden)';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = 'Technische Standardeinstellungen';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = 'Dynacast aktivieren';
$string['enable_dynacast_des'] = 'Optimizes performance by dynamically pausing video layers that are not being viewed by participants. This significantly reduces server-side CPU and bandwidth usage. **Note:** This will be automatically enabled if using SVC codecs (VP9/AV1) and is required for multi-codec simulcast.';
$string['enable_simulcast'] = 'Simulcast aktivieren';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = 'Videocodec';
$string['video_codec_des'] = 'The encoding standard for video transmission. **VP8** is recommended for WebRTC as it provides the best balance of quality and low latency. **Warning:** Not all browsers support every codec; ensure your users are on modern browsers if using VP9 or H.265.';
$string['default_webcam_resolution'] = 'Standard-Webcam-Auflösung';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = 'Standard-Bildschirmfreigabe-Auflösung';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = 'Standard-Audio-Voreinstellung';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = 'Branding und Individualisierung';
$string['custom_logo'] = 'Eigenes Logo';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'Benutzerdefinierte CSS-URL';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = 'Primärfarbe';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = 'Sekundäre Farbe';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = 'Hintergrundfarbe';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = 'Hintergrundbild';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = 'Farbe der Kopfzeile';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = 'Farbe der Fußzeile';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = 'Farbe der linken Seite';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = 'Hintergrundfarbe des Seitenpanels';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = 'Urheberrechtstext';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = 'Ja';
$string['no'] = 'Nein';
$string['recordings'] = "Aufnahmen";
$string['recording'] = "Aufnahme";
$string['artifacts'] = "Raumartefakte";
$string['attendance'] = "Anwesenheitsbericht";
$string['artifact'] = "Artefakt";
$string['room_subject'] = 'Zimmer';
$string['user_subject'] = 'Nutzer';

// mod_form.php
$string['roomtitle'] = 'Raumtitel';
$string['roomtitle_help'] = 'The name used for the Moodle activity and the live meeting header. It helps students identify the session in their course and inside the room.';
$string['welcome_message'] = 'Willkommensnachricht';
$string['welcome_message_help'] = 'Jeder hier eingegebene Text erscheint als erste Nachricht im öffentlichen Chat, wenn Nutzer dem Raum beitreten. Dies ist nützlich, um Anleitungen, Links oder wichtige Informationen mit den Teilnehmern beim Betreten zu teilen.';
$string['max_participants'] = 'Max Teilnehmer';
$string['max_participants_help'] = 'Setzen Sie diesen Wert ein, um zu begrenzen, wie viele Benutzer gleichzeitig der Sitzung beitreten können. Setze es auf 0, um unbegrenzte Teilnehmer zu erlauben, was bedeutet, dass es keine Beschränkung gibt, wie viele Nutzer beitreten können.';
$string['room_features'] = 'Raummerkmale';
$string['recording_features'] = 'Aufnahmefunktionen';
$string['chat_features'] = 'Chatfunktionen';
$string['other_features'] = 'Weitere Merkmale';
$string['e2ee_features'] = 'Ende-zu-Ende-Verschlüsselung';
$string['insights_features'] = 'Insights & KI-Funktionen';
$string['defaultlock'] = 'Standard-Schlosseinstellungen';
$string['advanced_completion'] = 'Fortgeschrittener Abschluss';
$string['available'] = 'Verfügbar ab';
$string['available_help'] = 'Determines when participants can start joining the session. Users will not be able to enter the room before this date and time.';
$string['deadline'] = 'Verfügbar bis';
$string['deadline_help'] = 'Determines the final date and time that participants can access the session. Access will be blocked once this deadline passes.';
$string['err_deadline_before_available'] = 'Das "Verfügbar bis"-Datum darf nicht vor dem "Ab verfügbar"-Datum liegen.';
$string['error_analytics_required_for_completion'] = 'Enable Analytics muss überprüft werden, wenn irgendwelche Abschlusskriterien festgelegt sind.';

$string['allow_webcams'] = 'Webcams erlauben';
$string['allow_webcams_help'] = 'Erlauben Sie den Teilnehmern, ihre Webcams zu benutzen.';
$string['mute_on_start'] = 'Stummschalten beim Start';
$string['mute_on_start_help'] = 'Schalten Sie automatisch alle Teilnehmer stumm, wenn sie der Sitzung beitreten.';
$string['allow_screen_share'] = 'Bildschirmfreigabe erlauben';
$string['allow_screen_share_help'] = 'Erlauben Sie den Teilnehmern, ihren Bildschirm zu teilen.';
$string['allow_rtmp'] = 'RTMP-Streaming erlauben';
$string['allow_rtmp_help'] = 'Enables moderators to broadcast the live session to external platforms like YouTube, Facebook, or Twitch. Perfect for public webinars or guest lectures.';
$string['allow_raise_hand'] = 'Hand heben lassen';
$string['allow_raise_hand_help'] = 'Erlauben Sie den Teilnehmern, die Hand zu heben.';
$string['admin_only_webcams'] = 'Nur Admin-Webcams';
$string['admin_only_webcams_help'] = 'Moderatoren dürfen nur ihre Webcams benutzen.';
$string['allow_view_other_webcams'] = 'Andere Webcams anzeigen lassen';
$string['allow_view_other_webcams_help'] = 'Ermöglichen Sie den Teilnehmern, die Webcams anderer Teilnehmer zu sehen. Wenn sie deaktiviert sind, sehen sie nur die Webcams der Moderatoren.';
$string['allow_view_other_users_list'] = 'Liste anderer Nutzer anzeigen lassen';
$string['allow_view_other_users_list_help'] = 'Ermöglichen Sie den Teilnehmern, die Liste der anderen Teilnehmer einzusehen.';
$string['room_duration'] = 'Raumlänge (Minuten)';
$string['room_duration_help'] = 'Definiert, wie lange der Raum offen bleiben darf, bevor er sich automatisch schließt. Gib 0 ein, wenn du kein Zeitlimit setzen möchtest, damit der Raum ohne Einschränkungen aktiv bleibt.';
$string['moderator_join_first'] = 'Moderator Zuerst beitreten';
$string['moderator_join_first_help'] = 'Wenn aktiviert, startet die Sitzung nicht und niemand kann beitreten, bis ein Moderator (wie ein Lehrer) zuerst beitritt. Die Teilnehmer bleiben auf der Moodle-Aktivitätsseite und dürfen weder den Raum noch den Wartebereich betreten. Das unterscheidet sich von der Warteraum-Option, bei der Nutzer weiterhin beitreten und warten können.';
$string['enable_analytics'] = 'Enable Analytics';
$string['enable_analytics_help'] = 'Tracks participation and engagement data for the session. **Note:** This must be enabled if any Completion criteria are set.';
$string['allow_virtual_bg'] = 'Virtuelle Hintergründe erlauben';
$string['allow_virtual_bg_help'] = 'Enables participants to blur their background or use a virtual image. Great for maintaining student privacy and ensuring a professional classroom appearance.';
$string['auto_gen_user_id'] = 'Benutzer-ID automatisch generieren';
$string['auto_gen_user_id_help'] = 'Wenn aktiviert, erstellt das System eine neue ID, sodass derselbe Benutzer von mehreren Geräten aus beitreten kann – zum Beispiel, wenn ein Lehrer von einem Tablet aus auf das Whiteboard zeichnet, während er einen PC für Kamera und Mikrofon nutzt; allerdings ist es <b>Empfohlen</b> um dies ausgeschaltet zu halten, sodass die Moodle-Benutzer-ID verwendet wird und doppelte Joins verhindert werden.';

$string['allow_recording'] = 'Allow Recording (Master Switch)';
$string['allow_recording_help'] = 'The primary master switch for all recording features. If disabled, both Cloud and Local recording options will be hidden from moderators.';
$string['allow_cloud_recording'] = 'Cloud-Aufzeichnung ermöglichen';
$string['allow_cloud_recording_help'] = 'Enables recording on the PlugNmeet server. The final video is processed and stored in the cloud, making it easy to share via a link once the session ends.';
$string['enable_auto_cloud_recording'] = 'Automatische Cloud-Aufzeichnung aktivieren';
$string['enable_auto_cloud_recording_help'] = 'Automatically triggers the cloud recording the moment the first moderator joins the session. Ideal for ensuring no lecture is forgotten.';
$string['allow_local_recording'] = 'Lokale Aufnahme erlauben';
$string['allow_local_recording_help'] = 'Allows recording directly to the computer. **Note:** Requires Google Chrome. To capture all session audio, the user must share their "Chrome Tab" and check the "Also share tab audio" box. The file is saved locally to the device once finished.';

$string['allow_chat'] = 'Allow Chat (Global Master Switch)';
$string['allow_chat_help'] = 'The absolute master switch for all chat functions. If disabled, the entire chat area is removed for everyone, including moderators. No public or private chat will be possible.';
$string['allow_file_upload'] = 'Dateihochladen erlauben';
$string['allow_file_upload_help'] = 'Enables the ability to share files within the chat. This requires the "Allow Chat" master switch to be active.';

$string['allow_shared_notepad'] = 'Gemeinsames Notizbuch erlauben';
$string['allow_shared_notepad_help'] = 'Enables a collaborative text editor where students and teachers can take real-time notes together. This is perfect for brainstorming, co-writing, or building a shared class summary.';

$string['allow_whiteboard'] = 'Whiteboard zulassen';
$string['allow_whiteboard_help'] = 'Unlocks an interactive drawing space for the session. Use it for sketching diagrams, solving math problems visually, or letting students annotate shared content.';

$string['allowed_external_media_player'] = 'Allow External Media Player';
$string['allowed_external_media_player_help'] = 'Allows moderators to sync and play videos from sources like YouTube or Vimeo for the whole class. Ideal for analyzing educational clips or watching documentaries together without bandwidth lag.';

$string['activate_waiting_room'] = 'Wartezimmer aktivieren';
$string['activate_waiting_room_help'] = 'Aktiviere den Warteraum für diese Sitzung.';
$string['waiting_room_msg'] = 'Wartezimmer-Nachricht';
$string['waiting_room_msg_help'] = 'Diese Nachricht wird den Nutzern angezeigt, während sie darauf warten, in den Raum aufgenommen zu werden. Nutzen Sie es, um Anweisungen, Erwartungen oder hilfreiche Informationen vor Beginn der Sitzung zu teilen.';

$string['allow_breakout_rooms'] = 'Breakout-Räume erlauben';
$string['allow_breakout_rooms_help'] = 'Enables moderators to split participants into smaller groups for focused discussions, collaborative projects, or private group activities.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'The maximum number of sub-rooms a moderator can create within a single session.';

$string['allow_display_external_link_features'] = 'Allow External Link Sharing';
$string['allow_display_external_link_features_help'] = 'Allows moderators to display external educational content—such as H5P activities, SCORM packages, or quiz systems (e.g., Kahoot)—directly to all participants during the session.';

$string['allow_ingress_features'] = 'Allow Ingress (External Streaming)';
$string['allow_ingress_features_help'] = 'Allows teachers to broadcast high-quality video into the session using external software like OBS via RTMP or WHIP protocols. This is ideal for sharing high-resolution video content, pre-recorded sessions, or bypassing browser upload limitations.';

$string['allow_polls'] = 'Erlauben Sie Umfragen';
$string['allow_polls_help'] = 'Enables moderators to create interactive polls and quick quizzes during the session. This is a great way to check student understanding and increase engagement.';

$string['sip_dial_in_features_is_allow'] = 'SIP-Einwahl erlauben';
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
$string['insights_transcription_features_is_allow_translation'] = 'Erlauben Sie Transkriptionsübersetzung';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allows the live transcript to be translated into different languages, supporting international students and multi-lingual environments.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Speech Synthesis (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Enables Text-to-Speech, allowing the live transcript to be read aloud for better accessibility and for visually impaired participants.';
$string['insights_chat_translation_features_is_allow'] = 'Chat-Übersetzung erlauben';
$string['insights_chat_translation_features_is_allow_help'] = 'Enables real-time translation of chat messages, allowing participants to communicate instantly across different languages.';
$string['insights_ai_features_is_allow'] = 'Allow AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'The master switch for all AI-powered capabilities. If disabled, specific features like AI Chat and Meeting Summarization will be hidden, even if Session Insights is active.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integrates an AI assistant directly into the chat to help answer questions, explain complex concepts, and facilitate group discussion.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'KI-Zusammenfassung von Meetings erlauben';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Automatically generates a concise AI summary after the session ends, highlighting key educational points, decisions, and follow-up tasks.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Mutes all participants by default upon entry. Only moderators can unmute or grant permission to speak.';
$string['lock_webcam'] = 'Lock Webcams';
$string['lock_webcam_help'] = 'Disables cameras for all participants by default. Useful for saving bandwidth or ensuring student privacy.';
$string['lock_screen_sharing'] = 'Freigabe des Sperrbildschirms';
$string['lock_screen_sharing_help'] = 'Restricts screen sharing to moderators only. Prevents participants from interrupting with their own screens.';
$string['lock_whiteboard'] = 'Schloss-Whiteboard';
$string['lock_whiteboard_help'] = 'Restricts whiteboard drawing tools to moderators only. Prevents unauthorized annotations by participants.';
$string['lock_shared_notepad'] = 'Gemeinsames Notizbuch sperren';
$string['lock_shared_notepad_help'] = 'Disables the collaborative notepad for participants to prevent off-topic writing or distractions.';
$string['lock_chat'] = 'Lock Public Chat';
$string['lock_chat_help'] = 'Completely hides or disables the public chat area for all participants.';
$string['lock_chat_send_message'] = 'Lock Sending Messages';
$string['lock_chat_send_message_help'] = 'Allows participants to read the chat, but prevents them from sending any messages.';
$string['lock_chat_file_share'] = 'Lock File Sharing';
$string['lock_chat_file_share_help'] = 'Prevents participants from uploading or sharing files within the chat area.';
$string['lock_private_chat'] = 'Privaten Chat sperren';
$string['lock_private_chat_help'] = 'Disables 1-on-1 private messaging between participants. Note: Participants can still send private messages to moderators for help or questions.';

$string['completion_minutes'] = 'Protokoll';
$string['completion_minutes_help'] = 'Der Nutzer muss eine bestimmte Anzahl von Minuten in der Sitzung sein.';
$string['completion_minutes_desc'] = 'Der Nutzer muss mindestens mindestens an der Sitzung teilnehmen {$a} Minuten.';
$string['completion_raised_hand'] = 'Erhobene Hand';
$string['completion_raised_hand_help'] = 'Der Nutzer muss mindestens einmal die Hand heben.';
$string['completion_chat_messages'] = 'Gesendete Chatnachrichten';
$string['completion_chat_messages_help'] = 'Der Nutzer muss mindestens eine Chatnachricht senden.';
$string['completion_webcam_enabled'] = 'Webcam-aktiviert';
$string['completion_webcam_enabled_help'] = 'Der Nutzer muss seine Webcam mindestens einmal aktivieren.';
$string['completion_webcam_duration'] = 'Webcam-aktivierte Dauer (Minuten)';
$string['completion_webcam_duration_help'] = 'Der Nutzer muss seine Webcam für eine bestimmte Anzahl von Minuten aktiviert haben.';
$string['completion_webcam_duration_desc'] = 'Der Nutzer muss mindestens seine Webcam aktiviert haben {$a} Minuten.';
$string['completion_mic_enabled'] = 'Mikrofon-aktiviert';
$string['completion_mic_enabled_help'] = 'Der Nutzer muss sein Mikrofon mindestens einmal aktivieren.';
$string['completion_mic_duration'] = 'Mikrofonaktivierte Dauer (Minuten)';
$string['completion_mic_duration_help'] = 'Der Nutzer muss sein Mikrofon für eine bestimmte Anzahl von Minuten aktiviert haben.';
$string['completion_mic_duration_desc'] = 'Der Nutzer muss mindestens sein Mikrofon aktiviert haben {$a} Minuten.';
$string['completion_talk_duration'] = 'Gesprächsdauer (Minuten)';
$string['completion_talk_duration_help'] = 'Verlangen Sie, dass der Nutzer eine bestimmte Anzahl von Minuten spricht.';
$string['completion_talk_duration_desc'] = 'Der Nutzer muss mindestens sprechen {$a} Minuten.';
$string['completion_poll_voted'] = 'In der Umfrage abgestimmt';
$string['completion_poll_voted_help'] = 'Verlangen Sie, dass der Nutzer in mindestens einer Umfrage abstimmt.';
$string['completion_whiteboard_annotated'] = 'Annotiert auf Whiteboard';
$string['completion_whiteboard_annotated_help'] = 'Der Benutzer muss auf dem Whiteboard annotieren.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Speichert Sitzungsstatistiken, damit Nutzer den Abschluss der Aktivitäten bestimmen können.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'Die ID des Benutzers.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'JSON-kodierte Sitzungsdaten (Protokolle, Chatnachrichten usw.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'Die Zeit, als die Statistiken zuletzt aktualisiert wurden.';

// view.php
$string['join_session'] = 'Sitzung beitreten';
$string['start_session'] = 'Start der Sitzung';
$string['end_session'] = 'Ende der Sitzung';
$string['participants'] = 'Teilnehmer';
$string['is_recording'] = 'Nimmt auf';
$string['is_active'] = 'Ist aktiv';
$string['room_info'] = 'Live-Session-Details';
$string['participants_info'] = 'Live-Teilnehmer';
$string['room_id'] = 'Zimmer-ID';
$string['creation_time'] = 'Schöpfungszeit';
$string['name'] = 'Name';
$string['user_id'] = 'Benutzer-ID';
$string['is_admin'] = 'Ist Verwaltung';
$string['is_presenter'] = 'Ist Moderator';
$string['joined_at'] = 'Beigetreten bei';
$string['moderator_not_joined'] = 'Ein Moderator muss die Sitzung starten, bevor du beitreten kannst.';
$string['session_available_from'] = 'Verfügbar bei: {$a}';
$string['session_available_until'] = 'Verfügbar bis: {$a}';
$string['session_not_started_yet'] = 'Diese Sitzung hat noch nicht begonnen.';
$string['session_ended'] = 'Diese Sitzung ist beendet.';
$string['allow_guest'] = 'Gastnutzer erlauben';
$string['allow_guest_help'] = 'Wenn aktiviert, wird ein sicherer, teilbarer Link erzeugt, sodass externe Nutzer (wie Gastlehrer oder Teilnehmer ohne Moodle-Konto) der Sitzung beitreten können; Ein Administrator kann diesen Link ansehen und teilen.';
$string['guest_join_link'] = 'Link zum Gastbeitritt';
$string['guest_join_link_help'] = 'Teilen Sie diesen Link mit externen Teilnehmern. Dieser Link bleibt gültig für {$a} Stunden. Jede Neuladung der Seite generiert einen neuen Link, aber zuvor geteilte Links bleiben bis zu ihrem ursprünglichen Ablaufdatum gültig.';
$string['copy_link'] = 'Link kopieren';
$string['link_copied'] = 'Link auf das Klemmbrett kopiert.';
$string['guest_join_title'] = 'Tritt als Gast dem Meeting bei';
$string['enter_display_name'] = 'Gib deinen Anzeigenamen ein';
$string['join_as_guest'] = 'Treffen Sie bei.';
$string['guest_access_denied'] = 'Gastzugriff ist für dieses Treffen nicht aktiviert.';
$string['invalid_guest_token'] = 'Ungültiges oder abgelaufenes Gast-Join-Token.';
$string['guest_link_expired'] = 'Dieser Link zum Gastbeitritt ist abgelaufen.';
$string['error_joining_session'] = 'Es gab einen Fehler beim Einstieg in die Sitzung: {$a}';
$string['already_logged_in'] = 'Du bist bereits bei Moodle eingeloggt. Sie können der Sitzung direkt über diese Aktivitätsseite beitreten.';
$string['total_webcams'] = 'Gesamtzahl der Webcams';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Gesamtzahl der Bildschirmfreigaben';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Mikrofone';
$string['screenshares'] = 'Bildschirmfreigabe';

// Events
$string['event_room_started'] = 'Der Raum begann';
$string['event_room_ended'] = 'Der Raum war beendet';
$string['event_room_created'] = 'Raum erstellt';
$string['event_session_ended'] = 'Sitzung beendet';
$string['event_participant_joined'] = 'Teilnehmer beigetreten';
$string['event_participant_left'] = 'Teilnehmer verließ';
$string['event_artifact_created'] = 'Artefakt erstellt';
$string['event_recording_proceeded'] = 'Aufnahmebereit';
$string['event_plugin_error'] = 'PlugNmeet-Fehler';
$string['event_track_published'] = 'Veröffentlichter Titel';
$string['event_track_unpublished'] = 'Track unveröffentlicht';

// Notifications
$string['messageprovider:recording_ready'] = 'Benachrichtigungen für fertige Aufnahmen';
$string['messageprovider:artifact_ready'] = 'Benachrichtigungen für fertige Artefakte';
$string['recording_ready_notification_subject'] = 'Aufnahmebereit: {$a}';
$string['recording_ready_notification_fullmessage'] = 'Die Aufnahme für die Session "{$a->roomname}" ist jetzt bereit und bearbeitet. Sie können es hier ansehen: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>Die Aufnahme für die Session <strong>"{$a->roomname}"</strong> ist jetzt bereit und bearbeitet.</p><p><a href="{$a->URL}">Klicken Sie hier, um die Aufnahme anzusehen.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Aufnahme bereit für {$a}';
$string['artifact_ready_notification_subject'] = 'Artefaktbereit: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Ein neues Artefakt ({$a->type}) für die Sitzung "{$a->roomname}" ist jetzt verfügbar. Sie können es hier ansehen: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Ein neues Artefakt ({$a->type}) für die Sitzung <strong>"{$a->roomname}"</strong> ist jetzt verfügbar.</p><p><a href="{$a->url}">Klicken Sie hier, um die Details zu den Artefakten zu sehen.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefakt bereit für {$a}';

// recordings.php
$string['no_recordings'] = 'Keine Aufnahmen gefunden.';
$string['recording_id'] = 'Aufnahme-ID';
$string['room_sid'] = 'Raum-SID';
$string['file_size'] = 'Dateigröße';
$string['created_at'] = 'Erstellt bei';
$string['actions'] = 'Aktionen';
$string['view'] = 'Ansehen';
$string['play'] = 'Spielen';
$string['download'] = 'Herunterladen';
$string['delete'] = 'Löschen';
$string['delete_confirm'] = 'Bist du sicher, dass du das löschen willst?';
$string['delete_success'] = 'Erfolgreich gelöscht.';
$string['recording_details'] = 'Aufnahmedetails';
$string['recording_creation_time'] = 'Zeit zur Erstellung der Aufnahmen';
$string['room_creation_time'] = 'Zeit zur Sitzungserstellung';
$string['back_to_list'] = 'Zurück zur Liste';
$string['browser_not_support_video'] = 'Dein Browser unterstützt den Video-Tag nicht.';
$string['room_title'] = 'Raumtitel';
$string['total_participants'] = 'Gesamtzahl der Teilnehmer';
$string['session_started_at'] = 'Sitzung begann bei';
$string['session_ended_at'] = 'Sitzung endete bei';

// artifacts.php
$string['no_artifacts'] = 'Keine Artefakte gefunden.';
$string['artifact_id'] = 'Artefakt-ID';
$string['type'] = 'Typ';
$string['artifact_details'] = 'Artefaktdetails';
$string['no_permission'] = 'Sie haben keine Erlaubnis, diese Seite anzusehen.';
$string['token_usage'] = 'Token-Nutzung';
$string['duration_usage'] = 'Nutzung der Dauer';
$string['character_count_usage'] = 'Verwendung der Zeichenanzahl';
$string['estimated_cost'] = 'Geschätzte Kosten';
$string['file_path'] = 'Dateipfad';
$string['mime_type'] = 'Mime-Typ';
$string['created_at'] = 'Erstellt bei';

// Analytics strings
$string['download_excel_report'] = 'Excel-Bericht herunterladen';
$string['download_raw_json'] = 'Rohdaten herunterladen';
$string['room_summary'] = 'Raumzusammenfassung';
$string['users_summary'] = 'Benutzerübersicht';
$string['see_excel_report'] = 'Siehe Excel-Bericht für Details';
$string['error_loading_analytics'] = 'Fehlergeladene Analysedaten: {$a}';
$string['error_generating_excel'] = 'Fehlergenerierender Excel-Bericht: {$a}';

$string['analytics_room_room_id'] = 'Zimmer-ID';
$string['analytics_room_room_title'] = 'Raumtitel';
$string['analytics_room_room_creation'] = 'Zeit zur Raumerstellung';
$string['analytics_room_room_ended'] = 'Zeit für das Ende des Raumes';
$string['analytics_room_room_duration'] = 'Raumlänge';
$string['analytics_room_room_total_users'] = 'Gesamtzahl der Teilnehmer';
$string['analytics_room_enabled_e2ee'] = 'E2EE aktiviert';
$string['analytics_room_recording_status'] = 'Aufnahmestatus-Zählung';
$string['analytics_room_rtmp_status'] = 'RTMP-Statuszählung';
$string['analytics_room_speech_service_total_usage'] = 'Totale Nutzung des Sprachdienstes';
$string['analytics_room_external_media_player_status'] = 'Statusanzahl externer Mediaplayer';
$string['analytics_room_etherpad_status'] = 'Etherpad-Statuszählung';
$string['analytics_room_external_display_link_status'] = 'Statusanzahl externer Anzeigelinks';
$string['analytics_room_ingress_created'] = 'Eintritt erstellter Graf';
$string['analytics_room_breakout_room'] = 'Anzahl der Breakout-Räume';

$string['analytics_user_name'] = 'Name';
$string['analytics_user_id'] = 'Benutzer-ID';
$string['analytics_user_ex_id'] = 'Benutzer-ID';
$string['analytics_user_is_admin'] = 'Ist Verwaltung';
$string['analytics_user_duration'] = 'Dauer';
$string['analytics_user_joined'] = 'Beigetreten bei';
$string['analytics_user_left'] = 'Links bei';
$string['analytics_user_mic_status'] = 'Statusänderungen des Mikrofons';
$string['analytics_user_mic_muted'] = 'Mikrofon stummer Count';
$string['analytics_user_mic_duration'] = 'Mikrofonaktivierte Dauer';
$string['analytics_user_talked'] = 'Gesprochener Graf';
$string['analytics_user_talked_duration'] = 'Gesprochene Dauer';
$string['analytics_user_webcam_status'] = 'Webcam-Statusänderungen';
$string['analytics_user_webcam_duration'] = 'Webcam-aktivierte Dauer';
$string['analytics_user_raise_hand'] = 'Raise Hand Count';
$string['analytics_user_voted_poll'] = 'Stimmenauszählung';
$string['analytics_user_whiteboard_annotated'] = 'Whiteboard Annotierte Zählung';
$string['analytics_user_whiteboard_files'] = 'Anzahl der Whiteboard-Dateien';
$string['analytics_user_screen_share_status'] = 'Statusänderungen beim Bildschirmfreigabe';
$string['analytics_user_speech_services_usage'] = 'Nutzung von Sprachdiensten';
$string['analytics_user_public_chat'] = 'Öffentliche Chat-Nachrichten';
$string['analytics_user_private_chat'] = 'Private Chat-Nachrichten';
$string['analytics_user_chat_files'] = 'Geteilte Chatdateien';
$string['analytics_user_interface_invisible'] = 'Interface Invisible Count';
$string['analytics_user_connection_quality'] = 'Verbindungsqualität';
$string['analytics_user_connection_quality_excellent'] = 'Ausgezeichnet';
$string['analytics_user_connection_quality_good'] = 'Gut';
$string['analytics_user_connection_quality_poor'] = 'Armes';

$string['users_info'] = 'Benutzerinformationen';
$string['polls'] = 'Umfragen';
$string['question'] = 'Frage';
$string['options'] = 'Optionen';
$string['file_name'] = 'Dateiname';
$string['checkcompletiontask'] = 'Überprüfen Sie die Fertigstellung von plugNmeet';

// attendance.php
$string['attendance_report'] = 'Anwesenheitsbericht';
$string['status'] = 'Status';
$string['present'] = 'Gegenwart';
$string['absent'] = 'Abwesend';
$string['incomplete'] = 'Unvollständig';
$string['completed'] = 'Abgeschlossen';
$string['minutes_attended'] = 'Protokoll';
$string['last_updated'] = 'Zuletzt aktualisiert';
$string['mic_duration'] = 'Mikrofonaktivierte Dauer';
$string['webcam_duration'] = 'Webcam-aktivierte Dauer';
$string['participation_progress'] = 'Fortschritt der Teilnahme';
$string['attendance_duration'] = 'Protokoll';
$string['attendance_webcam_status'] = 'Webcam-aktiviert';
$string['attendance_mic_status'] = 'Mikrofon-aktiviert';
$string['attendance_talked_duration'] = 'Gesprächsdauer';
$string['attendance_voted_poll'] = 'In der Umfrage abgestimmt';
$string['attendance_chat_messages'] = 'Gesendete Chatnachrichten';
$string['attendance_raise_hand'] = 'Erhobene Hand';
$string['attendance_webcam_duration'] = 'Webcam-aktivierte Dauer';
$string['attendance_mic_duration'] = 'Mikrofonaktivierte Dauer';
$string['attendance_whiteboard_annotated'] = 'Annotiert auf Whiteboard';
$string['met'] = 'Met';
$string['required'] = 'Erforderlich';

// Status codes
$string['status_unknown_status'] = 'Ein unbekannter Status wurde vom Server zurückgegeben.';
$string['status_success'] = 'Operation erfolgreich abgeschlossen.';
$string['status_permission_denied'] = 'Erlaubnis verweigert.';
$string['status_not_found'] = 'Nein {$a} gefunden.';
$string['status_conflict'] = 'Diese Aktion konnte aufgrund eines Konflikts nicht ausgeführt werden (z. B. könnte der Raum bereits existieren).';
$string['status_invalid_token_or_signature'] = 'Das Anfragetoken oder die Signatur ist ungültig.';
$string['status_invalid_api_key'] = 'Der bereitgestellte API-Schlüssel ist ungültig. Bitte überprüfe deine Plugin-Einstellungen.';
$string['status_internal_server_error'] = 'Der PlugNmeet-Server trat auf einen internen Fehler.';
$string['status_invalid_parameters'] = 'Die bereitgestellten Informationen sind ungültig.';
$string['status_missing_required_parameter'] = 'Einige erforderliche Informationen fehlen.';
$string['status_room_not_found'] = 'Das angegebene Zimmer wurde nicht gefunden.';
$string['status_user_not_found'] = 'Benutzerkonto nicht gefunden. Bitte stellen Sie sicher, dass Ihre API-Zugangsdaten korrekt sind und Ihr Abonnement aktiv ist.';
$string['status_user_blocked'] = 'Das Benutzerkonto ist gesperrt. Bitte kontaktieren Sie den Support.';
$string['status_user_not_active'] = 'Das Benutzerkonto ist nicht aktiv. Das liegt wahrscheinlich an einem inaktiven oder abgelaufenen Abonnement.';
