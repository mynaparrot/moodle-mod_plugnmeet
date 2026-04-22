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
$string['plugnmeet:viewactiveroomsreport'] = 'View active rooms report';
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
$string['server_url_desc'] = 'Die Basis-URL deines PlugNmeet-Servers (z. B. https://pnm.example.com).';
$string['api_key'] = 'API-Schlüssel';
$string['api_key_desc'] = 'Der einzigartige API-Schlüssel, der von Ihrem PlugNmeet-Server bereitgestellt wird.';
$string['api_secret'] = 'API-Geheimnis';
$string['api_secret_desc'] = 'Das API-Geheimnis, das von Ihrem PlugNmeet-Server bereitgestellt wird, wird für die sichere Authentifizierung verwendet.';
$string['guest_access_hdr'] = 'Gastzugriffseinstellungen';
$string['allow_guest_global'] = 'Gastzugriff global erlauben';
$string['allow_guest_global_desc'] = 'Fungiert als Hauptschalter. Wenn sie deaktiviert ist, sehen Lehrer nicht die Option, Gastbeitritt beim Erstellen oder Bearbeiten von Aktivitäten zu aktivieren.';
$string['guest_link_expiration'] = 'Ablauf des Gastlinks (Stunden)';
$string['guest_link_expiration_desc'] = 'Bestimmt, wie viele Stunden ein Gastzugangslink nach der Generierung durch einen Lehrer noch aktiv ist.';
$string['defaults'] = 'Technische Standardeinstellungen';
$string['defaults_desc'] = 'Standardtechnische Konfigurationen gelten für jede neue PlugNmeet-Sitzung.';
$string['enable_dynacast'] = 'Dynacast aktivieren';
$string['enable_dynacast_des'] = 'Optimiert die Leistung, indem Videoschichten, die von den Teilnehmern nicht angesehen werden, dynamisch pausiert werden. Dies reduziert den serverseitigen CPU- und Bandbreitenverbrauch erheblich. **Hinweis:** Dies wird automatisch aktiviert, wenn SVC-Codecs (VP9/AV1) verwendet werden, und ist für Multi-Codec-Simulcasts erforderlich.';
$string['enable_simulcast'] = 'Simulcast aktivieren';
$string['enable_simulcast_des'] = 'Bietet mehrere Videoqualitätsschichten, um ein reibungsloses Erlebnis für Nutzer mit schwachen Verbindungen zu gewährleisten.';
$string['video_codec'] = 'Videocodec';
$string['video_codec_des'] = 'Der Codierungsstandard für die Videoübertragung. **VP8** wird für WebRTC empfohlen, da es die beste Balance zwischen Qualität und niedriger Latenz bietet. **Warnung:** Nicht alle Browser unterstützen jeden Codec; Stellen Sie sicher, dass Ihre Nutzer moderne Browser nutzen, wenn Sie VP9 oder H.265 verwenden.';
$string['default_webcam_resolution'] = 'Standard-Webcam-Auflösung';
$string['default_webcam_resolution_des'] = 'Die anfängliche Auflösungseinstellung für Teilnehmerkameras.';
$string['default_screen_share_resolution'] = 'Standard-Bildschirmfreigabe-Auflösung';
$string['default_screen_share_resolution_des'] = 'Die anfängliche Auflösungseinstellung für das Bildschirmteilen.';
$string['default_audio_preset'] = 'Standard-Audio-Voreinstellung';
$string['default_audio_preset_des'] = 'Das Audioqualitätsprofil, das für die Sitzung optimiert ist.';

$string['branding'] = 'Branding und Individualisierung';
$string['custom_logo'] = 'Eigenes Logo';
$string['custom_logo_des'] = 'Laden Sie Ihr Logo im Besprechungsraum hoch. Wenn es leer bleibt, wird das Standard-PlugNmeet-Logo verwendet.';
$string['custom_css_url'] = 'Benutzerdefinierte CSS-URL';
$string['custom_css_url_des'] = 'Verknüpfe eine externe .css Datei, um die Schnittstellenstile zu überschreiben oder anzupassen.';
$string['primary_color'] = 'Primärfarbe';
$string['primary_color_des'] = 'Hauptakzentfarbe für Knöpfe, aktive Zustände und Highlights.';
$string['secondary_color'] = 'Sekundäre Farbe';
$string['secondary_color_des'] = 'Die Akzentfarbe, die für sekundäre UI-Elemente verwendet wird.';
$string['background_color'] = 'Hintergrundfarbe';
$string['background_color_des'] = 'Die primäre Hintergrundfarbe der Benutzeroberfläche.';
$string['background_image'] = 'Hintergrundbild';
$string['background_image_des'] = 'Hintergrund-Tapete. Für beste Ergebnisse verwenden Sie ein 1920x1080-Bild.';
$string['header_color'] = 'Farbe der Kopfzeile';
$string['header_color_des'] = 'Hintergrundfarbe für die obere Navigationsleiste.';
$string['footer_color'] = 'Farbe der Fußzeile';
$string['footer_color_des'] = 'Hintergrundfarbe für die untere Symbolleiste.';
$string['left_color'] = 'Farbe der linken Seite';
$string['left_color_des'] = 'Hintergrundfarbe für die Seitenleiste der linken Navigation.';
$string['side_panel_bg_color'] = 'Hintergrundfarbe des Seitenpanels';
$string['side_panel_bg_color_des'] = 'Hintergrundfarbe für die rechten Panels (Chat und Teilnehmerliste).';
$string['copyright_text'] = 'Urheberrechtstext';
$string['copyright_text_des'] = 'Branding-Text wird im Einstellungs-Footer angezeigt. HTML wird für Links oder benutzerdefiniertes Styling unterstützt.';
$string['client_load'] = 'Client-Lademethode';
$string['client_load_des'] = 'Wählen Sie **Remote** (Empfohlen) für ein nahtloses, gebrandetes Erlebnis, das direkt in Ihre Moodle-Seite eingebettet ist. Wählen Sie **Redirect**, um die Standard-plugNmeet-Oberfläche zu verwenden; Beachten Sie, dass Nutzer Ihre Seite verlassen und benutzerdefiniertes Branding möglicherweise nicht anwendbar ist.';
$string['remote'] = 'Remote (Eingebettet)';
$string['redirect'] = 'Weiterleitung zum Server';

$string['yes'] = 'Ja';
$string['no'] = 'Nein';
$string['recordings'] = "Aufnahmen";
$string['recording'] = "Aufnahme";
$string['artifacts'] = "Raumartefakte";
$string['attendance'] = "Anwesenheitsbericht";
$string['artifact'] = "Artefakt";
$string['room_subject'] = 'Zimmer';
$string['user_subject'] = 'Nutzer';
$string['activeroomsreport'] = 'Active Rooms Report';
$string['noactiverooms'] = 'There are no active rooms at the moment.';
$string['activerooms'] = 'Active Rooms';
$string['loading'] = 'Loading...';

// mod_form.php
$string['roomtitle'] = 'Raumtitel';
$string['roomtitle_help'] = 'Der Name, der für die Moodle-Aktivität und den Live-Meeting-Header verwendet wird. Es hilft den Schülern, die Sitzung sowohl in ihrem Kurs als auch im Raum zu identifizieren.';
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
$string['available_help'] = 'Bestimmt, wann die Teilnehmer an der Sitzung teilnehmen können. Die Nutzer dürfen den Raum vor diesem Datum und dieser Uhrzeit nicht betreten.';
$string['deadline'] = 'Verfügbar bis';
$string['deadline_help'] = 'Legt das endgültige Datum und die Uhrzeit fest, an denen die Teilnehmer die Sitzung nutzen können. Der Zugang wird gesperrt, sobald diese Frist abgelaufen ist.';
$string['err_deadline_before_available'] = 'Das "Verfügbar bis"-Datum darf nicht vor dem "Ab verfügbar"-Datum liegen.';
$string['error_analytics_required_for_completion'] = 'Enable Analytics muss überprüft werden, wenn irgendwelche Abschlusskriterien festgelegt sind.';

$string['allow_webcams'] = 'Webcams erlauben';
$string['allow_webcams_help'] = 'Erlauben Sie den Teilnehmern, ihre Webcams zu benutzen.';
$string['mute_on_start'] = 'Stummschalten beim Start';
$string['mute_on_start_help'] = 'Schalten Sie automatisch alle Teilnehmer stumm, wenn sie der Sitzung beitreten.';
$string['allow_screen_share'] = 'Bildschirmfreigabe erlauben';
$string['allow_screen_share_help'] = 'Erlauben Sie den Teilnehmern, ihren Bildschirm zu teilen.';
$string['allow_rtmp'] = 'RTMP-Streaming erlauben';
$string['allow_rtmp_help'] = 'Ermöglicht es Moderatoren, die Live-Sitzung auf externe Plattformen wie YouTube, Facebook oder Twitch zu übertragen. Perfekt für öffentliche Webinare oder Gastvorträge.';
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
$string['enable_analytics_help'] = 'Verfolgt die Beteiligungs- und Engagementdaten für die Sitzung. **Hinweis:** Dies muss aktiviert sein, wenn irgendwelche Abschlusskriterien festgelegt sind.';
$string['allow_virtual_bg'] = 'Virtuelle Hintergründe erlauben';
$string['allow_virtual_bg_help'] = 'Ermöglicht es den Teilnehmern, ihren Hintergrund zu verschwimmen oder ein virtuelles Bild zu verwenden. Hervorragend, um die Privatsphäre der Schüler zu wahren und ein professionelles Erscheinungsbild des Klassenzimmers zu gewährleisten.';
$string['auto_gen_user_id'] = 'Benutzer-ID automatisch generieren';
$string['auto_gen_user_id_help'] = 'Wenn aktiviert, erstellt das System eine neue ID, sodass derselbe Benutzer von mehreren Geräten aus beitreten kann – zum Beispiel, wenn ein Lehrer von einem Tablet aus auf das Whiteboard zeichnet, während er einen PC für Kamera und Mikrofon nutzt; allerdings ist es <b>Empfohlen</b> um dies ausgeschaltet zu halten, sodass die Moodle-Benutzer-ID verwendet wird und doppelte Joins verhindert werden.';

$string['allow_recording'] = 'Aufnahme erlauben (Masterschalter)';
$string['allow_recording_help'] = 'Der primäre Masterschalter für alle Aufnahmefunktionen. Wenn sie deaktiviert sind, sind sowohl Cloud- als auch Lokalaufnahmeoptionen für Moderatoren verborgen.';
$string['allow_cloud_recording'] = 'Cloud-Aufzeichnung ermöglichen';
$string['allow_cloud_recording_help'] = 'Ermöglicht die Aufnahme auf dem PlugNmeet-Server. Das endgültige Video wird in der Cloud verarbeitet und gespeichert, sodass es nach Ablauf der Sitzung einfach über einen Link geteilt werden kann.';
$string['enable_auto_cloud_recording'] = 'Automatische Cloud-Aufzeichnung aktivieren';
$string['enable_auto_cloud_recording_help'] = 'Löst die Cloud-Aufzeichnung automatisch aus, sobald der erste Moderator der Sitzung beitritt. Ideal, um sicherzustellen, dass keine Vorlesung vergessen wird.';
$string['allow_local_recording'] = 'Lokale Aufnahme erlauben';
$string['allow_local_recording_help'] = 'Ermöglicht die direkte Aufnahme am Computer. **Hinweis:** Benötigt Google Chrome. Um alle Sitzungs-Audios aufzufangen, muss der Nutzer seinen "Chrome-Tab" teilen und das Kästchen "Tab auch teilen" ankreuzen. Die Datei wird nach Abschluss lokal auf dem Gerät gespeichert.';

$string['allow_chat'] = 'Chat erlauben (Global Master Switch)';
$string['allow_chat_help'] = 'Der absolute Hauptschalter für alle Chatfunktionen. Wenn deaktiviert, wird der gesamte Chatbereich für alle entfernt, einschließlich der Moderatoren. Kein öffentlicher oder privater Chat wird möglich sein.';
$string['allow_file_upload'] = 'Dateihochladen erlauben';
$string['allow_file_upload_help'] = 'Ermöglicht das Teilen von Dateien im Chat. Dafür muss der Hauptschalter "Chat erlauben" aktiviert sein.';

$string['allow_shared_notepad'] = 'Gemeinsames Notizbuch erlauben';
$string['allow_shared_notepad_help'] = 'Ermöglicht einen kollaborativen Texteditor, in dem Schüler und Lehrer gemeinsam in Echtzeit Notizen machen können. Das ist perfekt zum Brainstorming, zum Co-Schreiben oder zum Erstellen einer gemeinsamen Kurszusammenfassung.';

$string['allow_whiteboard'] = 'Whiteboard zulassen';
$string['allow_whiteboard_help'] = 'Es wird ein interaktiver Zeichenbereich für die Sitzung freigeschaltet. Nutzen Sie es, um Diagramme zu skizzieren, Mathematikaufgaben visuell zu lösen oder den Schülern das Annotieren gemeinsamer Inhalte zu ermöglichen.';

$string['allowed_external_media_player'] = 'Externe Mediaplayer erlauben';
$string['allowed_external_media_player_help'] = 'Ermöglicht es Moderatoren, Videos von Quellen wie YouTube oder Vimeo für die gesamte Klasse zu synchronisieren und abzuspielen. Ideal, um Bildungsclips zu analysieren oder gemeinsam Dokumentationen ohne Bandbreitenverzögerung zu schauen.';

$string['activate_waiting_room'] = 'Wartezimmer aktivieren';
$string['activate_waiting_room_help'] = 'Aktiviere den Warteraum für diese Sitzung.';
$string['waiting_room_msg'] = 'Wartezimmer-Nachricht';
$string['waiting_room_msg_help'] = 'Diese Nachricht wird den Nutzern angezeigt, während sie darauf warten, in den Raum aufgenommen zu werden. Nutzen Sie es, um Anweisungen, Erwartungen oder hilfreiche Informationen vor Beginn der Sitzung zu teilen.';

$string['allow_breakout_rooms'] = 'Breakout-Räume erlauben';
$string['allow_breakout_rooms_help'] = 'Ermöglicht es Moderatoren, Teilnehmer in kleinere Gruppen für fokussierte Diskussionen, gemeinsame Projekte oder private Gruppenaktivitäten aufzuteilen.';
$string['allowed_number_rooms'] = 'Max Breakout-Räume';
$string['allowed_number_rooms_help'] = 'Die maximale Anzahl von Unterräumen, die ein Moderator innerhalb einer einzigen Sitzung erstellen kann.';

$string['allow_display_external_link_features'] = 'Externe Link-Weitergabe erlauben';
$string['allow_display_external_link_features_help'] = 'Ermöglicht es Moderatoren, externe Bildungsinhalte – wie H5P-Aktivitäten, SCORM-Pakete oder Quizsysteme (z. B. Kahoot) – direkt allen Teilnehmern während der Sitzung anzuzeigen.';

$string['allow_ingress_features'] = 'Eingang erlauben (externes Streaming)';
$string['allow_ingress_features_help'] = 'Ermöglicht es Lehrern, hochwertige Videos mit externer Software wie OBS über RTMP- oder WHIP-Protokolle in die Sitzung zu übertragen. Dies ist ideal, um hochauflösende Videoinhalte zu teilen, vorab aufgezeichnete Sitzungen zu teilen oder Browser-Upload-Beschränkungen zu umgehen.';

$string['allow_polls'] = 'Erlauben Sie Umfragen';
$string['allow_polls_help'] = 'Ermöglicht es Moderatoren, während der Sitzung interaktive Umfragen und schnelle Quizze zu erstellen. Das ist eine großartige Möglichkeit, das Verständnis der Schüler zu überprüfen und das Engagement zu steigern.';

$string['sip_dial_in_features_is_allow'] = 'SIP-Einwahl erlauben';
$string['sip_dial_in_features_is_allow_help'] = 'Ermöglicht es den Teilnehmern, an der Audiosession über ein traditionelles Telefonat teilzunehmen. Das ist wichtig für Studierende mit schlechter Internetverbindung oder solche, die unterwegs teilnehmen müssen.';

$string['enable_end_to_end_encryption_features'] = 'End-to-End-Verschlüsselung (E2EE) aktivieren';
$string['enable_end_to_end_encryption_features_help'] = 'Bietet maximale Sicherheit durch Verschlüsselung von Video- und Audiostreams, sodass selbst der Server keinen Zugriff darauf hat. Hinweis: Einige Funktionen wie serverseitige Aufzeichnung können eingeschränkt sein, wenn E2EE aktiv ist.';
$string['enabled_self_insert_encryption_key'] = 'Participant-definierte Schlüssel erlauben';
$string['enabled_self_insert_encryption_key_help'] = 'Ermöglicht es den Teilnehmern, einen gemeinsamen Geheimschlüssel manuell einzugeben. Dies stellt sicher, dass der Dienstanbieter niemals Zugriff auf die Verschlüsselungsschlüssel hat und das höchste Maß an Privatsphäre bietet.';
$string['included_e2ee_chat_messages'] = 'Verschlüssele Chat-Nachrichten';
$string['included_e2ee_chat_messages_help'] = 'Erweitert die Ende-zu-Ende-Verschlüsselung auf den Textchat und stellt sicher, dass Nachrichten nur von Teilnehmern im Raum lesbar sind.';
$string['included_e2ee_whiteboard'] = 'Whiteboard-Daten verschlüsseln';
$string['included_e2ee_whiteboard_help'] = 'Enthält alle Whiteboard-Zeichnungen und Anmerkungen in der End-to-End-Verschlüsselungsschicht für vollständigen Datenschutz.';

$string['insights_features_is_allow'] = 'Session Insights ermöglichen (Master Switch)';
$string['insights_features_is_allow_help'] = 'Der primäre Hauptschalter für alle datengetriebenen Funktionen. Wenn deaktiviert, sind alle Unteroptionen – einschließlich Transkription, KI-Assistent und Besprechungsberichte – komplett nicht verfügbar.';
$string['insights_transcription_features_is_allow'] = 'Live-Transkription erlauben';
$string['insights_transcription_features_is_allow_help'] = 'Ermöglicht während der Sitzung Echtzeit-Sprach-zu-Text. Dies muss aktiviert sein, damit Transkriptionsübersetzung oder Sprachsynthese (TTS) funktioniert.';
$string['insights_transcription_features_is_allow_translation'] = 'Erlauben Sie Transkriptionsübersetzung';
$string['insights_transcription_features_is_allow_translation_help'] = 'Ermöglicht es, das Live-Transkript in verschiedene Sprachen zu übersetzen, was internationale Studierende und mehrsprachige Umgebungen unterstützt.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Sprachsynthese (TTS) erlauben';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Ermöglicht Text-to-Speech, sodass das Live-Transkript laut vorgelesen werden kann, um eine bessere Barrierefreiheit und für sehbehinderte Teilnehmer zu gewährleisten.';
$string['insights_chat_translation_features_is_allow'] = 'Chat-Übersetzung erlauben';
$string['insights_chat_translation_features_is_allow_help'] = 'Ermöglicht die Echtzeitübersetzung von Chatnachrichten, sodass Teilnehmer sofort über verschiedene Sprachen hinweg kommunizieren können.';
$string['insights_ai_features_is_allow'] = 'KI-Besprechungsassistent erlauben (KI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'Der Hauptschalter für alle KI-gesteuerten Funktionen. Wenn deaktiviert, werden bestimmte Funktionen wie KI-Chat und Meeting-Zusammenfassung ausgeblendet, selbst wenn Session Insights aktiv ist.';
$string['insights_ai_text_chat_features_is_allow'] = 'KI-Chatassistent erlauben';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integriert einen KI-Assistenten direkt in den Chat, um Fragen zu beantworten, komplexe Konzepte zu erklären und Gruppendiskussionen zu ermöglichen.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'KI-Zusammenfassung von Meetings erlauben';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Generiert automatisch eine prägnante KI-Zusammenfassung nach Ende der Sitzung, die wichtige Bildungspunkte, Entscheidungen und Folgeaufgaben hervorhebt.';

$string['lock_microphone'] = 'Sperrmikrofone';
$string['lock_microphone_help'] = 'Alle Teilnehmer werden standardmäßig beim Eintritt stummgeschaltet. Nur Moderatoren können die Stummschaltung entdeaktivieren oder die Erlaubnis zum Sprechen erteilen.';
$string['lock_webcam'] = 'Lock-Webcams';
$string['lock_webcam_help'] = 'Deaktiviert standardmäßig die Kameras für alle Teilnehmer. Nützlich, um Bandbreite zu sparen oder die Privatsphäre der Studierenden zu gewährleisten.';
$string['lock_screen_sharing'] = 'Freigabe des Sperrbildschirms';
$string['lock_screen_sharing_help'] = 'Bildschirmfreigabe beschränkt sich nur auf Moderatoren. Verhindert, dass die Teilnehmer mit ihren eigenen Bildschirmen stören.';
$string['lock_whiteboard'] = 'Schloss-Whiteboard';
$string['lock_whiteboard_help'] = 'Whiteboard-Zeichenwerkzeuge sind nur auf Moderatoren beschränkt. Verhindert unautorisierte Anmerkungen durch Teilnehmer.';
$string['lock_shared_notepad'] = 'Gemeinsames Notizbuch sperren';
$string['lock_shared_notepad_help'] = 'Es wird das kollaborative Notizbuch für die Teilnehmer deaktiviert, um Off-Topic-Schreiben oder Ablenkungen zu vermeiden.';
$string['lock_chat'] = 'Öffentlichen Chat sperren';
$string['lock_chat_help'] = 'Verbirgt oder deaktiviert den öffentlichen Chatbereich für alle Teilnehmer vollständig.';
$string['lock_chat_send_message'] = 'Nachrichten sperren';
$string['lock_chat_send_message_help'] = 'Ermöglicht es den Teilnehmern, den Chat zu lesen, verhindert jedoch, dass sie Nachrichten senden.';
$string['lock_chat_file_share'] = 'Dateifreigabe sperren';
$string['lock_chat_file_share_help'] = 'Verhindert, dass Teilnehmer Dateien im Chatbereich hochladen oder teilen.';
$string['lock_private_chat'] = 'Privaten Chat sperren';
$string['lock_private_chat_help'] = 'Deaktiviert 1-zu-1 private Nachrichten zwischen Teilnehmern. Hinweis: Teilnehmer können weiterhin private Nachrichten an Moderatoren senden, um Hilfe oder Fragen zu erhalten.';

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
