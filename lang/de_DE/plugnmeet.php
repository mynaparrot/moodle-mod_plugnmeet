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
$string['plugnmeet:viewlivesessioninfo'] = 'Live-Session-Informationen anzeigen';
$string['plugnmeet:viewrecordings'] = 'Aufnahmen ansehen';
$string['plugnmeetfieldset'] = 'Benutzerdefiniertes Beispiel-Fieldset';
$string['plugnmeetname'] = 'Benutzerdefinierter Beispielname';
$string['plugnmeetname_help'] = 'Hilfe mit benutzerdefinierten Beispielen';

// Admin Settings
$string['api_config'] = 'API-Konfiguration';
$string['server_url'] = 'PlugNmeet Server URL';
$string['server_url_desc'] = 'Die Basis-URL Ihres PlugNmeet-Servers (z. B. https://pnm.example.com)';
$string['api_key'] = 'API-Schlüssel';
$string['api_key_desc'] = 'Der API-Schlüssel, der von deinem PlugNmeet-Server bereitgestellt wird.';
$string['api_secret'] = 'API-Geheimnis';
$string['api_secret_desc'] = 'Das API-Geheimnis, das von deinem PlugNmeet-Server bereitgestellt wird.';
$string['guest_access_hdr'] = 'Gastzugriffseinstellungen';
$string['allow_guest_global'] = 'Gastzugriff global erlauben';
$string['allow_guest_global_desc'] = 'Wenn deaktiviert, kann der Gastbeitritt in keinem Besprechungsraum aktiviert werden.';
$string['guest_link_expiration'] = 'Ablauf des Gastlinks (Stunden)';
$string['guest_link_expiration_desc'] = 'Wie lange ein Gastbeitrittslink nach der Generierung gültig bleibt.';

$string['defaults'] = 'Technische Standardeinstellungen';
$string['defaults_desc'] = 'Standardtechnische Einstellungen für neue PlugNmeet-Sitzungen.';
$string['enable_dynacast'] = 'Dynacast aktivieren';
$string['enable_dynacast_des'] = 'Nutzen Sie Dynacast, um Videoströme zu optimieren, indem Sie nur den zuletzt aktiven Lautsprecher veröffentlichen.';
$string['enable_simulcast'] = 'Simulcast aktivieren';
$string['enable_simulcast_des'] = 'Verwenden Sie Simulcast, um den Betrachtern mehrere Videoqualitätsschichten bereitzustellen.';
$string['video_codec'] = 'Videocodec';
$string['video_codec_des'] = 'Der Standard-Videocodec für Sitzungen.';
$string['default_webcam_resolution'] = 'Standard-Webcam-Auflösung';
$string['default_webcam_resolution_des'] = 'Die Standardauflösung für Webcams.';
$string['default_screen_share_resolution'] = 'Standard-Bildschirmfreigabe-Auflösung';
$string['default_screen_share_resolution_des'] = 'Die Standardauflösung für das Teilen des Bildschirms.';
$string['default_audio_preset'] = 'Standard-Audio-Voreinstellung';
$string['default_audio_preset_des'] = 'Das Standard-Audio-Preset für Sitzungen.';

$string['branding'] = 'Branding und Individualisierung';
$string['custom_logo'] = 'Eigenes Logo';
$string['custom_logo_des'] = 'Laden Sie ein individuelles Logo hoch, das im Besprechungsraum angezeigt wird. Wenn leer, wird das Standard-PlugNmeet-Logo verwendet.';
$string['custom_css_url'] = 'Benutzerdefinierte CSS-URL';
$string['custom_css_url_des'] = 'Gib eine URL zu einer externen CSS-Datei an, um das Aussehen und die Atmosphäre des Besprechungsraums anzupassen.';
$string['primary_color'] = 'Primärfarbe';
$string['primary_color_des'] = 'Die Hauptfarbe für Knöpfe und Highlights.';
$string['secondary_color'] = 'Sekundäre Farbe';
$string['secondary_color_des'] = 'Die Sekundärfarbe für UI-Elemente.';
$string['background_color'] = 'Hintergrundfarbe';
$string['background_color_des'] = 'Hintergrundfarbe der Benutzeroberfläche';
$string['background_image'] = 'Hintergrundbild';
$string['background_image_des'] = 'Sollte für ein optimales Ergebnis eine Größe von 1920 x 1080 haben.';
$string['header_color'] = 'Farbe der Kopfzeile';
$string['header_color_des'] = 'Farbe der Kopfzeile der Benutzeroberfläche';
$string['footer_color'] = 'Farbe der Fußzeile';
$string['footer_color_des'] = 'Farbe der Fußzeile der Benutzeroberfläche';
$string['left_color'] = 'Farbe der linken Seite';
$string['left_color_des'] = 'Farbe der linken Seitenleiste';
$string['side_panel_bg_color'] = 'Hintergrundfarbe des Seitenpanels';
$string['side_panel_bg_color_des'] = 'Hintergrundfarbe des rechten Seitenpanels';
$string['copyright_text'] = 'Urheberrechtstext';
$string['copyright_text_des'] = 'Der urheberrechtliche Text wird im Fußbereich des Besprechungsraums angezeigt. HTML ist erlaubt.';
$string['client_load'] = 'Client-Last von';
$string['client_load_des'] = 'Standard: lokal';
$string['remote'] = 'Abgelegen';
$string['local'] = 'Lokal';

$string['client_side'] = 'Kundenseitige Optionen';
$string['client_load_mode'] = 'Client-Lastmodus';
$string['client_load_mode_desc'] = 'Entscheiden Sie, ob Sie den Webclient vom entfernten Server oder von einer lokalen Kopie laden.';
$string['remote'] = 'Fernbedienung';
$string['local'] = 'Lokal';
$string['client_download_url'] = 'Client-Download-URL';
$string['client_download_url_des'] = 'Wenn Sie den Lademodus "Lokal" verwenden, geben Sie die URL zur client.zip-Datei an.';
$string['update_client_btn'] = 'Lokalen Client aktualisieren';
$string['update_client_btn_label'] = 'Jetzt aktualisieren';

$string['yes'] = 'Ja';
$string['no'] = 'Nein';
$string['recordings'] = "Aufnahmen";
$string['artifacts'] = "Raumartefakte";
$string['attendance'] = "Anwesenheitsbericht";
$string['artifact'] = "Artefakt";

// mod_form.php
$string['roomtitle'] = 'Raumtitel';
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
$string['deadline'] = 'Verfügbar bis';
$string['err_deadline_before_available'] = 'Das "Verfügbar bis"-Datum darf nicht vor dem "Ab verfügbar"-Datum liegen.';
$string['error_analytics_required_for_completion'] = 'Enable Analytics muss überprüft werden, wenn irgendwelche Abschlusskriterien festgelegt sind.';

$string['allow_webcams'] = 'Webcams erlauben';
$string['allow_webcams_help'] = 'Erlauben Sie den Teilnehmern, ihre Webcams zu benutzen.';
$string['mute_on_start'] = 'Stummschalten beim Start';
$string['mute_on_start_help'] = 'Schalten Sie automatisch alle Teilnehmer stumm, wenn sie der Sitzung beitreten.';
$string['allow_screen_share'] = 'Bildschirmfreigabe erlauben';
$string['allow_screen_share_help'] = 'Erlauben Sie den Teilnehmern, ihren Bildschirm zu teilen.';
$string['allow_rtmp'] = 'RTMP-Streaming erlauben';
$string['allow_rtmp_help'] = 'Erlauben Sie Moderatoren, die Sitzung an einen RTMP-Endpunkt zu streamen.';
$string['admin_only_webcams'] = 'Nur Admin-Webcams';
$string['admin_only_webcams_help'] = 'Moderatoren dürfen nur ihre Webcams benutzen.';
$string['room_duration'] = 'Raumlänge (Minuten)';
$string['room_duration_help'] = 'Definiert, wie lange der Raum offen bleiben darf, bevor er sich automatisch schließt. Gib 0 ein, wenn du kein Zeitlimit setzen möchtest, damit der Raum ohne Einschränkungen aktiv bleibt.';
$string['moderator_join_first'] = 'Moderator Zuerst beitreten';
$string['moderator_join_first_help'] = 'Wenn aktiviert, startet die Sitzung nicht und niemand kann beitreten, bis ein Moderator (wie ein Lehrer) zuerst beitritt. Die Teilnehmer bleiben auf der Moodle-Aktivitätsseite und dürfen weder den Raum noch den Wartebereich betreten. Das unterscheidet sich von der Warteraum-Option, bei der Nutzer weiterhin beitreten und warten können.';
$string['enable_analytics'] = 'Enable Analytics';
$string['enable_analytics_help'] = 'Erstellen Sie Analysen für die Sitzung. Hinweis: Dies muss aktiviert werden, wenn irgendwelche Abschlusskriterien festgelegt sind.';
$string['allow_virtual_bg'] = 'Virtuelle Hintergründe erlauben';
$string['allow_virtual_bg_help'] = 'Erlauben Sie den Teilnehmern, virtuelle Hintergründe zu verwenden.';
$string['auto_gen_user_id'] = 'Benutzer-ID automatisch generieren';
$string['auto_gen_user_id_help'] = 'Wenn aktiviert, erstellt das System eine neue ID, sodass derselbe Benutzer von mehreren Geräten aus beitreten kann – zum Beispiel, wenn ein Lehrer von einem Tablet aus auf das Whiteboard zeichnet, während er einen PC für Kamera und Mikrofon nutzt; allerdings ist es <b>Empfohlen</b> um dies ausgeschaltet zu halten, sodass die Moodle-Benutzer-ID verwendet wird und doppelte Joins verhindert werden.';

$string['allow_recording'] = 'Aufzeichnung erlauben';
$string['allow_recording_help'] = 'Lass die Sitzung aufgenommen werden.';
$string['allow_cloud_recording'] = 'Cloud-Aufzeichnung ermöglichen';
$string['allow_cloud_recording_help'] = 'Erlauben Sie, dass die Sitzung in der Cloud aufgezeichnet wird.';
$string['enable_auto_cloud_recording'] = 'Automatische Cloud-Aufzeichnung aktivieren';
$string['enable_auto_cloud_recording_help'] = 'Fange automatisch mit der Aufnahme an, sobald die Sitzung beginnt.';
$string['allow_local_recording'] = 'Lokale Aufnahme erlauben';
$string['allow_local_recording_help'] = 'Ermöglichen Sie den Teilnehmern, die Sitzung lokal aufzunehmen.';
$string['is_allow_view_recording'] = 'Erlauben Sie das Anschauen von Aufnahmen';
$string['is_allow_view_recording_help'] = 'Ermöglichen Sie den Teilnehmern, die Aufnahmen anzusehen.';
$string['is_allow_download_recording'] = 'Erlauben Sie das Herunterladen von Aufnahmen';
$string['is_allow_download_recording_help'] = 'Erlauben Sie den Teilnehmern, die Aufnahmen herunterzuladen.';

$string['allow_chat'] = 'Chat erlauben';
$string['allow_chat_help'] = 'Aktivieren Sie die öffentliche Chat-Funktion.';
$string['allow_file_upload'] = 'Dateihochladen erlauben';
$string['allow_file_upload_help'] = 'Erlauben Sie den Teilnehmern, Dateien im Chat hochzuladen.';

$string['allow_shared_notepad'] = 'Gemeinsames Notizbuch erlauben';
$string['allow_shared_notepad_help'] = 'Erlauben Sie den Teilnehmern, den gemeinsamen Notizblock zu verwenden.';
$string['allow_whiteboard'] = 'Whiteboard zulassen';
$string['allow_whiteboard_help'] = 'Erlauben Sie den Teilnehmern, das Whiteboard zu benutzen.';
$string['allowed_external_media_player'] = 'Externen Mediaplayer zulassen';
$string['allowed_external_media_player_help'] = 'Erlauben Sie den Teilnehmern, externe Medien (z. B. YouTube-Videos) abzuspielen.';
$string['activate_waiting_room'] = 'Wartezimmer aktivieren';
$string['activate_waiting_room_help'] = 'Aktiviere den Warteraum für diese Sitzung.';
$string['waiting_room_msg'] = 'Wartezimmer-Nachricht';
$string['waiting_room_msg_help'] = 'Diese Nachricht wird den Nutzern angezeigt, während sie darauf warten, in den Raum aufgenommen zu werden. Nutzen Sie es, um Anweisungen, Erwartungen oder hilfreiche Informationen vor Beginn der Sitzung zu teilen.';
$string['allow_breakout_rooms'] = 'Breakout-Räume erlauben';
$string['allow_breakout_rooms_help'] = 'Erlauben Sie Moderatoren, Breakout-Räume zu erstellen.';
$string['allowed_number_rooms'] = 'Erlaubte Anzahl der Breakout-Räume';
$string['allow_display_external_link_features'] = 'Externe Anzeige erlauben';
$string['allow_display_external_link_features_help'] = 'Erlauben Sie den Moderatoren, allen Teilnehmern einen externen Link anzuzeigen.';
$string['allow_ingress_features'] = 'Erlauben Sie Eintritt';
$string['allow_ingress_features_help'] = 'Erlauben Sie den Eintritt in die Sitzung.';
$string['allow_polls'] = 'Erlauben Sie Umfragen';
$string['allow_polls_help'] = 'Erlauben Sie Moderatoren, Umfragen zu erstellen.';
$string['sip_dial_in_features_is_allow'] = 'SIP-Einwahl erlauben';
$string['sip_dial_in_features_is_allow_help'] = 'Ermöglichen Sie den Teilnehmern, der Sitzung über SIP-Einwahl beizutreten.';

$string['enable_end_to_end_encryption_features'] = 'Aktivieren Sie Ende-zu-Ende-Verschlüsselung';
$string['enable_end_to_end_encryption_features_help'] = 'Aktivieren Sie die End-to-End-Verschlüsselung für die Sitzung.';
$string['enabled_self_insert_encryption_key'] = 'Erlauben Sie das Selbsteinfügen des Verschlüsselungsschlüssels';
$string['enabled_self_insert_encryption_key_help'] = 'Erlauben Sie den Teilnehmern, ihren eigenen Verschlüsselungsschlüssel einzufügen.';
$string['included_e2ee_chat_messages'] = 'Chatnachrichten in E2EE einfügen';
$string['included_e2ee_chat_messages_help'] = 'Fügen Sie Chat-Nachrichten in die End-to-End-Verschlüsselung ein.';
$string['included_e2ee_whiteboard'] = 'Whiteboard in E2EE einbauen';
$string['included_e2ee_whiteboard_help'] = 'Fügen Sie das Whiteboard in die End-to-End-Verschlüsselung ein.';

$string['insights_features_is_allow'] = 'Erlauben Sie Einblicke';
$string['insights_features_is_allow_help'] = 'Erlauben Sie der Generierung von Einsichten für diese Sitzung.';
$string['insights_transcription_features_is_allow'] = 'Erlauben Sie Transkription';
$string['insights_transcription_features_is_allow_help'] = 'Lass die Sitzung transkribiert werden.';
$string['insights_transcription_features_is_allow_translation'] = 'Erlauben Sie Transkriptionsübersetzung';
$string['insights_transcription_features_is_allow_translation_help'] = 'Lassen Sie die Transkription übersetzen.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Erlauben Sie die Transkriptions-Sprachsynthese';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Lassen Sie die Transkription laut vorlesen.';
$string['insights_chat_translation_features_is_allow'] = 'Chat-Übersetzung erlauben';
$string['insights_chat_translation_features_is_allow_help'] = 'Erlauben Sie Chatnachrichten zu übersetzen.';
$string['insights_ai_features_is_allow'] = 'KI-Funktionen erlauben';
$string['insights_ai_features_is_allow_help'] = 'Erlaubt es, KI-Funktionen in dieser Sitzung zu nutzen.';
$string['insights_ai_text_chat_features_is_allow'] = 'KI-Textchat erlauben';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Erlaube KI im Chat.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'KI-Zusammenfassung von Meetings erlauben';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Lass das Meeting durch KI zusammengefasst werden.';

$string['lock_microphone'] = 'Lock-Mikrofon';
$string['lock_microphone_help'] = 'Deaktiviere standardmäßig alle Mikrofone der Teilnehmer.';
$string['lock_webcam'] = 'Lock-Webcam';
$string['lock_webcam_help'] = 'Deaktiviere standardmäßig alle Webcams der Teilnehmer.';
$string['lock_screen_sharing'] = 'Freigabe des Sperrbildschirms';
$string['lock_screen_sharing_help'] = 'Deaktivieren Sie standardmäßig das Bildschirmteilen für alle Teilnehmer.';
$string['lock_whiteboard'] = 'Schloss-Whiteboard';
$string['lock_whiteboard_help'] = 'Deaktiviere das Whiteboard standardmäßig für alle Teilnehmer.';
$string['lock_shared_notepad'] = 'Gemeinsames Notizbuch sperren';
$string['lock_shared_notepad_help'] = 'Deaktiviere standardmäßig geteilte Notizen für alle Teilnehmer.';
$string['lock_chat'] = 'Lock Chat';
$string['lock_chat_help'] = 'Deaktiviere den öffentlichen Chat standardmäßig für alle Teilnehmer.';
$string['lock_chat_send_message'] = 'Chat sperren Nachricht senden';
$string['lock_chat_send_message_help'] = 'Deaktiviere standardmäßig das Senden von Nachrichten im öffentlichen Chat für alle Teilnehmer.';
$string['lock_chat_file_share'] = 'Chat-Dateifreigabe sperren';
$string['lock_chat_file_share_help'] = 'Deaktiviere standardmäßig die Dateifreigabe im öffentlichen Chat für alle Teilnehmer.';
$string['lock_private_chat'] = 'Privaten Chat sperren';
$string['lock_private_chat_help'] = 'Deaktiviere standardmäßig den privaten Chat für alle Teilnehmer.';

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
$string['total_webcams'] = 'Total Webcams';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Total Screen Shares';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Mics';
$string['screenshares'] = 'Screen Shares';

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
$string['event_track_published'] = 'Track published';
$string['event_track_unpublished'] = 'Track unpublished';

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
