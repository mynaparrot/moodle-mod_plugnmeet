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
 * Strings for component 'mod_plugnmeet'
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
$string['pluginadministration'] = 'PlugNmeet-Administration';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Neue PlugNmeet-Aktivität hinzufügen';
$string['plugnmeet:deleteartifacts'] = 'Artefakte löschen';
$string['plugnmeet:deleterecording'] = 'Aufnahmen löschen';
$string['plugnmeet:downloadanalyticsreport'] = 'Analysebericht herunterladen';
$string['plugnmeet:downloadartifacts'] = 'Artefakte herunterladen';
$string['plugnmeet:downloadattendance'] = 'Anwesenheitsbericht herunterladen';
$string['plugnmeet:downloadrecordings'] = 'Aufnahmen herunterladen';
$string['plugnmeet:manage'] = 'PlugNmeet-Einstellungen verwalten';
$string['plugnmeet:view'] = 'PlugNmeet-Aktivität anzeigen';
$string['plugnmeet:viewactiveroomsreport'] = 'Bericht über aktive Räume anzeigen';
$string['plugnmeet:viewartifacts'] = 'Artefakte anzeigen';
$string['plugnmeet:viewattendance'] = 'Anwesenheitsbericht anzeigen';
$string['plugnmeet:viewattendancelist'] = 'Anwesenheitsliste anzeigen';
$string['plugnmeet:viewlivesessioninfo'] = 'Informationen zur Live-Sitzung anzeigen';
$string['plugnmeet:viewrecordings'] = 'Aufnahmen anzeigen';
$string['plugnmeetfieldset'] = 'Benutzerdefinierter Beispielsatz';
$string['plugnmeetname'] = 'Benutzerdefinierter Beispielname';
$string['plugnmeetname_help'] = 'Benutzerdefinierte Beispielhilfe';
$string['subplugintype_pnmext'] = 'PlugNmeet-Erweiterung';
$string['subplugintype_pnmext_plural'] = 'PlugNmeet Erweiterungen';

// Admin Settings
$string['api_config'] = 'API-Konfiguration';
$string['server_url'] = 'PlugNmeet-Server-URL';
$string['server_url_desc'] = 'Die Basis-URL Ihres PlugNmeet-Servers (z.B. https://pnm.example.com).';
$string['api_key'] = 'API-Schlüssel';
$string['api_key_desc'] = 'Der eindeutige API-Schlüssel, der von Ihrem PlugNmeet-Server bereitgestellt wird.';
$string['api_secret'] = 'API-Geheimnis';
$string['api_secret_desc'] = 'Das API-Geheimnis, das von Ihrem PlugNmeet-Server zur sicheren Authentifizierung verwendet wird.';
$string['guest_access_hdr'] = 'Gästezugriffseinstellungen';
$string['allow_guest_global'] = 'Gästezugriff global erlauben';
$string['allow_guest_global_desc'] = 'Wirkt als Hauptschalter. Wenn deaktiviert, sehen Lehrer die Option zum Aktivieren des Gästebeitritts beim Erstellen oder Bearbeiten von Aktivitäten nicht.';
$string['guest_link_expiration'] = 'Ablaufzeit des Gast-Links (Stunden)';
$string['guest_link_expiration_desc'] = 'Bestimmt, wie viele Stunden ein Gastzugriffslink aktiv bleibt, nachdem ein Lehrer ihn generiert hat.';
$string['defaults'] = 'Technische Standardeinstellungen';
$string['defaults_desc'] = 'Standardmäßige technische Konfigurationen, die auf jede neue PlugNmeet-Sitzung angewendet werden.';
$string['enable_dynacast'] = 'Dynacast aktivieren';
$string['enable_dynacast_des'] = 'Optimiert die Leistung, indem Videolayer, die von Teilnehmern nicht angesehen werden, dynamisch pausiert werden. Dies reduziert die serverseitige CPU- und Bandbreitennutzung erheblich. **Hinweis:** Dies wird automatisch aktiviert, wenn SVC-Codecs (VP9/AV1) verwendet werden, und ist für Multi-Codec-Simulcast erforderlich.';
$string['enable_simulcast'] = 'Simulcast aktivieren';
$string['enable_simulcast_des'] = 'Liefert mehrere Videoqualitätsebenen, um eine reibungslose Erfahrung für Benutzer mit schwachen Verbindungen zu gewährleisten.';
$string['video_codec'] = 'Video-Codec';
$string['video_codec_des'] = 'Der Kodierungsstandard für die Videoübertragung. **VP8** wird für WebRTC empfohlen, da es das beste Gleichgewicht zwischen Qualität und geringer Latenz bietet. **Warnung:** Nicht alle Browser unterstützen jeden Codec; stellen Sie sicher, dass Ihre Benutzer moderne Browser verwenden, wenn Sie VP9 oder H.265 verwenden.';
$string['default_webcam_resolution'] = 'Standard-Webcam-Auflösung';
$string['default_webcam_resolution_des'] = 'Die anfängliche Auflösungseinstellung für Teilnehmerkameras.';
$string['default_screen_share_resolution'] = 'Standard-Bildschirmfreigabe-Auflösung';
$string['default_screen_share_resolution_des'] = 'Die anfängliche Auflösungseinstellung für die Bildschirmfreigabe.';
$string['default_audio_preset'] = 'Standard-Audio-Voreinstellung';
$string['default_audio_preset_des'] = 'Das für die Sitzung optimierte Audioqualitätsprofil.';

$string['branding'] = 'Branding und Anpassung';
$string['custom_logo'] = 'Benutzerdefiniertes Logo';
$string['custom_logo_des'] = 'Laden Sie Ihr Logo in den Besprechungsraum hoch. Wenn leer gelassen, wird das Standard-PlugNmeet-Logo verwendet.';
$string['custom_css_url'] = 'Benutzerdefinierte CSS-URL';
$string['custom_css_url_des'] = 'Verknüpfen Sie eine externe .css-Datei, um die Oberflächenstile zu überschreiben oder anzupassen.';
$string['primary_color'] = 'Primärfarbe';
$string['primary_color_des'] = 'Hauptakzentfarbe für Schaltflächen, aktive Zustände und Hervorhebungen.';
$string['secondary_color'] = 'Sekundärfarbe';
$string['secondary_color_des'] = 'Die Akzentfarbe, die für sekundäre UI-Elemente verwendet wird.';
$string['background_color'] = 'Hintergrundfarbe';
$string['background_color_des'] = 'Die primäre Hintergrundfarbe der Benutzeroberfläche.';
$string['background_image'] = 'Hintergrundbild';
$string['background_image_des'] = 'Hintergrundbild. Für beste Ergebnisse verwenden Sie ein Bild im Format 1920x1080.';
$string['header_color'] = 'Kopfzeilenfarbe';
$string['header_color_des'] = 'Hintergrundfarbe für die obere Navigationsleiste.';
$string['footer_color'] = 'Fußzeilenfarbe';
$string['footer_color_des'] = 'Hintergrundfarbe für die untere Symbolleiste.';
$string['left_color'] = 'Linke Seitenfarbe';
$string['left_color_des'] = 'Hintergrundfarbe für die linke Navigationsseitenleiste.';
$string['side_panel_bg_color'] = 'Hintergrundfarbe des Seitenpanels';
$string['side_panel_bg_color_des'] = 'Hintergrundfarbe für die rechten Seitenpanels (Chat und Teilnehmerliste).';
$string['copyright_text'] = 'Copyright-Text';
$string['copyright_text_des'] = 'Branding-Text, der in der Fußzeile der Einstellungen angezeigt wird. HTML wird für Links oder benutzerdefinierte Stile unterstützt.';
$string['client_load'] = 'Client-Lademethode';
$string['client_load_des'] = 'Wählen Sie **Remote (Eingebettet)** (Empfohlen) für ein nahtloses, gebrandetes Erlebnis, das direkt in Ihre Moodle-Seite eingebettet ist. Wählen Sie **Weiterleiten** um die Standard-PlugNmeet-Oberfläche zu verwenden; beachten Sie, dass Benutzer Ihre Website verlassen und benutzerdefiniertes Branding möglicherweise nicht angewendet wird.';
$string['remote'] = 'Remote (Eingebettet)';
$string['redirect'] = 'Weiterleiten zum Server';

$string['yes'] = 'Ja';
$string['no'] = 'Nein';
$string['recordings'] = "Aufnahmen";
$string['recording'] = "Aufnahme";
$string['artifacts'] = "Raum-Artefakte";
$string['attendance'] = "Anwesenheitsbericht";
$string['artifact'] = "Artefakt";
$string['room_subject'] = 'Raum';
$string['user_subject'] = 'Benutzer';
$string['activeroomsreport'] = 'Bericht über aktive Räume';
$string['noactiverooms'] = 'Derzeit sind keine aktiven Räume vorhanden.';
$string['activerooms'] = 'Aktive Räume';
$string['loading'] = 'Wird geladen...';

// mod_form.php
$string['roomtitle'] = 'Raumtitel';
$string['roomtitle_help'] = 'Der Name, der für die Moodle-Aktivität und die Kopfzeile des Live-Meetings verwendet wird. Er hilft den Studenten, die Sitzung in ihrem Kurs und im Raum zu identifizieren.';
$string['welcome_message'] = 'Willkommensnachricht';
$string['welcome_message_help'] = 'Jeder hier eingegebene Text wird als erste Nachricht im öffentlichen Chat angezeigt, wenn Benutzer dem Raum beitreten. Dies ist nützlich, um Anweisungen, Links oder wichtige Informationen mit den Teilnehmern zu teilen, wenn sie eintreten.';
$string['max_participants'] = 'Max. Teilnehmer';
$string['max_participants_help'] = 'Legen Sie diesen Wert fest, um zu begrenzen, wie viele Benutzer gleichzeitig an der Sitzung teilnehmen können. Setzen Sie ihn auf 0, um eine unbegrenzte Anzahl von Teilnehmern zuzulassen, was bedeutet, dass es keine Beschränkung für die Anzahl der Benutzer gibt, die beitreten können.';
$string['room_features'] = 'Raumfunktionen';
$string['recording_features'] = 'Aufnahmefunktionen';
$string['chat_features'] = 'Chat-Funktionen';
$string['other_features'] = 'Weitere Funktionen';
$string['e2ee_features'] = 'Ende-zu-Ende-Verschlüsselung';
$string['insights_features'] = 'Einblicke & KI-Funktionen';
$string['defaultlock'] = 'Standard-Sperreinstellungen';
$string['advanced_completion'] = 'Erweiterte Abschlussbedingungen';
$string['available'] = 'Verfügbar ab';
$string['available_help'] = 'Bestimmt, wann Teilnehmer der Sitzung beitreten können. Benutzer können den Raum vor diesem Datum und dieser Uhrzeit nicht betreten.';
$string['deadline'] = 'Verfügbar bis';
$string['deadline_help'] = 'Bestimmt das endgültige Datum und die Uhrzeit, zu der Teilnehmer auf die Sitzung zugreifen können. Der Zugriff wird blockiert, sobald diese Frist abgelaufen ist.';
$string['err_deadline_before_available'] = 'Das Datum "Verfügbar bis" darf nicht vor dem Datum "Verfügbar ab" liegen.';
$string['error_analytics_required_for_completion'] = 'Analyse muss aktiviert sein, wenn Abschlusskriterien festgelegt sind.';

$string['allow_webcams'] = 'Webcams erlauben';
$string['allow_webcams_help'] = 'Teilnehmern erlauben, ihre Webcams zu verwenden.';
$string['mute_on_start'] = 'Beim Start stummschalten';
$string['mute_on_start_help'] = 'Alle Teilnehmer automatisch stummschalten, wenn sie der Sitzung beitreten.';
$string['allow_screen_share'] = 'Bildschirmfreigabe erlauben';
$string['allow_screen_share_help'] = 'Teilnehmern erlauben, ihren Bildschirm zu teilen.';
$string['allow_rtmp'] = 'RTMP-Streaming erlauben';
$string['allow_rtmp_help'] = 'Ermöglicht Moderatoren, die Live-Sitzung auf externe Plattformen wie YouTube, Facebook oder Twitch zu übertragen. Perfekt für öffentliche Webinare oder Gastvorträge.';
$string['allow_raise_hand'] = 'Hand heben erlauben';
$string['allow_raise_hand_help'] = 'Teilnehmern erlauben, die Hand zu heben.';
$string['admin_only_webcams'] = 'Nur Administratoren-Webcams';
$string['admin_only_webcams_help'] = 'Nur Moderatoren erlauben, ihre Webcams zu verwenden.';
$string['allow_view_other_webcams'] = 'Andere Webcams anzeigen erlauben';
$string['allow_view_other_webcams_help'] = 'Teilnehmern erlauben, die Webcams anderer Teilnehmer anzuzeigen. Wenn deaktiviert, sehen sie nur die Webcams der Moderatoren.';
$string['allow_view_other_users_list'] = 'Liste anderer Benutzer anzeigen erlauben';
$string['allow_view_other_users_list_help'] = 'Teilnehmern erlauben, die Liste anderer Teilnehmer anzuzeigen.';
$string['room_duration'] = 'Raumdauer (Minuten)';
$string['room_duration_help'] = 'Definiert, wie lange der Raum geöffnet bleiben kann, bevor er sich automatisch schließt. Geben Sie 0 ein, wenn Sie keine Zeitbegrenzung festlegen möchten, damit der Raum ohne Einschränkungen aktiv bleiben kann.';
$string['moderator_join_first'] = 'Moderator muss zuerst beitreten';
$string['moderator_join_first_help'] = 'Wenn aktiviert, startet die Sitzung nicht und niemand kann beitreten, bis ein Moderator (z. B. ein Lehrer) zuerst beitritt. Teilnehmer bleiben auf der Moodle-Aktivitätsseite und betreten den Raum oder einen Wartebereich nicht. Dies unterscheidet sich von der Option Wartezimmer, bei der Benutzer weiterhin beitreten und warten können.';
$string['enable_analytics'] = 'Analyse aktivieren';
$string['enable_analytics_help'] = 'Verfolgt Teilnahme- und Engagementdaten für die Sitzung. **Hinweis:** Dies muss aktiviert sein, wenn Abschlusskriterien festgelegt sind.';
$string['allow_virtual_bg'] = 'Virtuelle Hintergründe erlauben';
$string['allow_virtual_bg_help'] = 'Ermöglicht Teilnehmern, ihren Hintergrund zu verwischen oder ein virtuelles Bild zu verwenden. Ideal zur Wahrung der Privatsphäre der Studenten und zur Gewährleistung eines professionellen Erscheinungsbilds im Klassenzimmer.';
$string['auto_gen_user_id'] = 'Benutzer-ID automatisch generieren';
$string['auto_gen_user_id_help'] = 'Wenn aktiviert, erstellt das System eine neue ID, sodass derselbe Benutzer von mehreren Geräten aus beitreten kann – zum Beispiel, wenn ein Lehrer von einem Tablet aus beitritt, um auf dem Whiteboard zu zeichnen, während er einen PC für Kamera und Mikrofon verwendet; es wird jedoch <b>empfohlen</b>, dies deaktiviert zu lassen, damit die Moodle-Benutzer-ID verwendet und doppelte Beitritte verhindert werden.';

$string['allow_recording'] = 'Aufnahme erlauben (Hauptschalter)';
$string['allow_recording_help'] = 'Der primäre Hauptschalter für alle Aufnahmefunktionen. Wenn deaktiviert, werden sowohl Cloud- als auch lokale Aufnahmeoptionen für Moderatoren ausgeblendet.';
$string['allow_cloud_recording'] = 'Cloud-Aufnahme erlauben';
$string['allow_cloud_recording_help'] = 'Ermöglicht die Aufnahme auf dem PlugNmeet-Server. Das endgültige Video wird verarbeitet und in der Cloud gespeichert, wodurch es nach Beendigung der Sitzung einfach über einen Link geteilt werden kann.';
$string['enable_auto_cloud_recording'] = 'Automatische Cloud-Aufnahme aktivieren';
$string['enable_auto_cloud_recording_help'] = 'Löst die Cloud-Aufnahme automatisch aus, sobald der erste Moderator der Sitzung beitritt. Ideal, um sicherzustellen, dass keine Vorlesung vergessen wird.';
$string['allow_local_recording'] = 'Lokale Aufnahme erlauben';
$string['allow_local_recording_help'] = 'Ermöglicht die direkte Aufnahme auf dem Computer. **Hinweis:** Erfordert Google Chrome. Um den gesamten Sitzungsaudio aufzunehmen, muss der Benutzer seinen "Chrome-Tab" teilen und das Kontrollkästchen "Auch Tab-Audio teilen" aktivieren. Die Datei wird nach Abschluss lokal auf dem Gerät gespeichert.';

$string['allow_chat'] = 'Chat erlauben (Globaler Hauptschalter)';
$string['allow_chat_help'] = 'Der absolute Hauptschalter für alle Chat-Funktionen. Wenn deaktiviert, wird der gesamte Chatbereich für alle, einschließlich Moderatoren, entfernt. Kein öffentlicher oder privater Chat ist möglich.';
$string['allow_file_upload'] = 'Dateiupload erlauben';
$string['allow_file_upload_help'] = 'Ermöglicht das Teilen von Dateien im Chat. Dies erfordert, dass der Hauptschalter "Chat erlauben" aktiv ist.';

$string['allow_shared_notepad'] = 'Geteiltes Notizbuch erlauben';
$string['allow_shared_notepad_help'] = 'Aktiviert einen kollaborativen Texteditor, in dem Studenten und Lehrer gemeinsam in Echtzeit Notizen machen können. Dies ist perfekt für Brainstorming, gemeinsames Schreiben oder das Erstellen einer gemeinsamen Klassenzusammenfassung.';

$string['whiteboard_features'] = 'Whiteboard-Funktionen';
$string['allow_whiteboard'] = 'Whiteboard erlauben';
$string['allow_whiteboard_help'] = 'Schaltet einen interaktiven Zeichenbereich für die Sitzung frei. Verwenden Sie ihn zum Skizzieren von Diagrammen, zum visuellen Lösen mathematischer Probleme oder um Studenten das Kommentieren freigegebener Inhalte zu ermöglichen.';
$string['preload_file'] = 'Präsentationsdatei vorladen';
$string['preload_file_help'] = 'Ermöglicht Ihnen das Hochladen einer PDF- oder Office-Dokumentdatei, die beim Start der Sitzung automatisch auf dem Whiteboard geladen wird. Dies stellt sicher, dass Ihr Präsentationsmaterial sofort für den Unterricht bereit ist. <strong>Maximale Dateigröße: 5 MB</strong>';

$string['allowed_external_media_player'] = 'Externen Mediaplayer erlauben';
$string['allowed_external_media_player_help'] = 'Ermöglicht Moderatoren, Videos von Quellen wie YouTube oder Vimeo für die gesamte Klasse zu synchronisieren und abzuspielen. Ideal zum Analysieren von Lehrclips oder zum gemeinsamen Ansehen von Dokumentationen ohne Bandbreitenverzögerung.';

$string['activate_waiting_room'] = 'Warteraum aktivieren';
$string['activate_waiting_room_help'] = 'Aktivieren Sie den Warteraum für diese Sitzung.';
$string['waiting_room_msg'] = 'Warteraum-Nachricht';
$string['waiting_room_msg_help'] = 'Diese Nachricht wird Benutzern angezeigt, während sie auf den Zutritt zum Raum warten. Verwenden Sie sie, um Anweisungen, Erwartungen oder hilfreiche Informationen vor Beginn der Sitzung zu teilen.';

$string['allow_breakout_rooms'] = 'Breakout-Räume erlauben';
$string['allow_breakout_rooms_help'] = 'Ermöglicht Moderatoren, Teilnehmer in kleinere Gruppen für fokussierte Diskussionen, kollaborative Projekte oder private Gruppenaktivitäten aufzuteilen.';
$string['allowed_number_rooms'] = 'Max. Breakout-Räume';
$string['allowed_number_rooms_help'] = 'Die maximale Anzahl von Unterräumen, die ein Moderator innerhalb einer einzelnen Sitzung erstellen kann.';

$string['allow_display_external_link_features'] = 'Externe Linkfreigabe erlauben';
$string['allow_display_external_link_features_help'] = 'Ermöglicht Moderatoren, externe Bildungsinhalte – wie H5P-Aktivitäten, SCORM-Pakete oder Quizsysteme (z. B. Kahoot) – während der Sitzung direkt allen Teilnehmern anzuzeigen.';

$string['allow_ingress_features'] = 'Ingress (externes Streaming) erlauben';
$string['allow_ingress_features_help'] = 'Ermöglicht Lehrern, qualitativ hochwertige Videos über externe Software wie OBS über RTMP- oder WHIP-Protokolle in die Sitzung zu übertragen. Dies ist ideal zum Teilen von hochauflösenden Videoinhalten, vorab aufgezeichneten Sitzungen oder zum Umgehen von Browser-Upload-Beschränkungen.';

$string['allow_polls'] = 'Umfragen erlauben';
$string['allow_polls_help'] = 'Ermöglicht Moderatoren, interaktive Umfragen und schnelle Quizze während der Sitzung zu erstellen. Dies ist eine großartige Möglichkeit, das Verständnis der Studenten zu überprüfen und das Engagement zu erhöhen.';

$string['sip_dial_in_features_is_allow'] = 'SIP-Einwahl erlauben';
$string['sip_dial_in_features_is_allow_help'] = 'Ermöglicht Teilnehmern, der Audiositzung über einen herkömmlichen Telefonanruf beizutreten. Dies ist unerlässlich für Studenten mit schlechten Internetverbindungen oder solche, die unterwegs beitreten müssen.';

$string['enable_end_to_end_encryption_features'] = 'Ende-zu-Ende-Verschlüsselung (E2EE) aktivieren';
$string['enable_end_to_end_encryption_features_help'] = 'Bietet starke Sicherheit durch Verschlüsselung von Video- und Audiostreams zwischen den Teilnehmern. In diesem Modus generiert und verteilt der Server sicher einen eindeutigen Verschlüsselungsschlüssel für die Sitzung.';
$string['enabled_self_insert_encryption_key'] = 'Teilnehmerdefinierte Schlüssel erlauben';
$string['enabled_self_insert_encryption_key_help'] = 'Ermöglicht Teilnehmern, manuell einen gemeinsamen geheimen Schlüssel einzugeben, was das höchste Maß an Privatsphäre bietet, da der Server niemals Zugriff auf die Verschlüsselungsschlüssel hat. Es liegt in der Verantwortung des Hosts, dasselbe Geheimnis mit allen Teilnehmern zu teilen; wenn unterschiedliche Schlüssel verwendet werden, können Benutzer nicht miteinander kommunizieren. <strong>Hinweis:</strong> Wenn diese Option aktiviert ist, werden Funktionen, die eine serverseitige Medienverarbeitung erfordern (wie Cloud-Aufnahme, Transkription und KI-Zusammenfassung), automatisch deaktiviert.';
$string['included_e2ee_chat_messages'] = 'Chat-Nachrichten verschlüsseln';
$string['included_e2ee_chat_messages_help'] = 'Erweitert die Ende-zu-Ende-Verschlüsselung auf den Text-Chat, um sicherzustellen, dass Nachrichten nur von Teilnehmern im Raum gelesen werden können.';
$string['included_e2ee_whiteboard'] = 'Whiteboard-Daten verschlüsseln';
$string['included_e2ee_whiteboard_help'] = 'Umfasst alle Whiteboard-Zeichnungen und -Anmerkungen in der Ende-zu-Ende-Verschlüsselungsebene für vollständige Datenprivatsphäre.';

$string['insights_features_is_allow'] = 'Sitzungseinblicke erlauben (Hauptschalter)';
$string['insights_features_is_allow_help'] = 'Der primäre Hauptschalter für alle datengesteuerten Funktionen. Wenn deaktiviert, sind alle Unteroptionen – einschließlich Transkription, KI-Assistent und Besprechungsberichte – vollständig nicht verfügbar.';
$string['insights_transcription_features_is_allow'] = 'Live-Transkription erlauben';
$string['insights_transcription_features_is_allow_help'] = 'Ermöglicht die Echtzeit-Spracherkennung während der Sitzung. Dies muss aktiviert sein, damit die Transkriptionsübersetzung oder Sprachsynthese (TTS) funktioniert.';
$string['insights_transcription_features_is_allow_translation'] = 'Transkriptionsübersetzung erlauben';
$string['insights_transcription_features_is_allow_translation_help'] = 'Ermöglicht die Übersetzung des Live-Transkripts in verschiedene Sprachen, um internationale Studenten und mehrsprachige Umgebungen zu unterstützen.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Sprachsynthese (TTS) erlauben';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Aktiviert Text-zu-Sprache, wodurch das Live-Transkript zur besseren Zugänglichkeit und für sehbehinderte Teilnehmer vorgelesen werden kann.';
$string['insights_chat_translation_features_is_allow'] = 'Chat-Übersetzung erlauben';
$string['insights_chat_translation_features_is_allow_help'] = 'Ermöglicht die Echtzeit-Übersetzung von Chat-Nachrichten, wodurch Teilnehmer sofort in verschiedenen Sprachen kommunizieren können.';
$string['insights_ai_features_is_allow'] = 'KI-Besprechungsassistent erlauben (KI-Hauptschalter)';
$string['insights_ai_features_is_allow_help'] = 'Der Hauptschalter für alle KI-gestützten Funktionen. Wenn deaktiviert, werden spezifische Funktionen wie KI-Chat und Besprechungszusammenfassung ausgeblendet, auch wenn Sitzungseinblicke aktiv sind.';
$string['insights_ai_text_chat_features_is_allow'] = 'KI-Chat-Assistent erlauben';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integriert einen KI-Assistenten direkt in den Chat, um Fragen zu beantworten, komplexe Konzepte zu erklären und Gruppendiskussionen zu erleichtern.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'KI-Besprechungszusammenfassung erlauben';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Generiert automatisch eine prägnante KI-Zusammenfassung nach Beendigung der Sitzung, die wichtige Bildungspunkte, Entscheidungen und Folgeaufgaben hervorhebt.';

$string['lock_microphone'] = 'Mikrofone sperren';
$string['lock_microphone_help'] = 'Schaltet alle Teilnehmer beim Betreten standardmäßig stumm. Nur Moderatoren können die Stummschaltung aufheben oder die Sprecherlaubnis erteilen.';
$string['lock_webcam'] = 'Webcams sperren';
$string['lock_webcam_help'] = 'Deaktiviert Kameras für alle Teilnehmer standardmäßig. Nützlich zum Sparen von Bandbreite oder zum Schutz der Privatsphäre der Studenten.';
$string['lock_screen_sharing'] = 'Bildschirmfreigabe sperren';
$string['lock_screen_sharing_help'] = 'Beschränkt die Bildschirmfreigabe auf Moderatoren. Verhindert, dass Teilnehmer mit ihren eigenen Bildschirmen unterbrechen.';
$string['lock_whiteboard'] = 'Whiteboard sperren';
$string['lock_whiteboard_help'] = 'Beschränkt die Whiteboard-Zeichenwerkzeuge auf Moderatoren. Verhindert unbefugte Anmerkungen durch Teilnehmer.';
$string['lock_shared_notepad'] = 'Geteiltes Notizbuch sperren';
$string['lock_shared_notepad_help'] = 'Deaktiviert das kollaborative Notizbuch für Teilnehmer, um themenfremdes Schreiben oder Ablenkungen zu verhindern.';
$string['lock_chat'] = 'Öffentlichen Chat sperren';
$string['lock_chat_help'] = 'Blendet den öffentlichen Chatbereich für alle Teilnehmer vollständig aus oder deaktiviert ihn.';
$string['lock_chat_send_message'] = 'Nachrichten senden sperren';
$string['lock_chat_send_message_help'] = 'Ermöglicht Teilnehmern, den Chat zu lesen, verhindert aber, dass sie Nachrichten senden.';
$string['lock_chat_file_share'] = 'Dateifreigabe sperren';
$string['lock_chat_file_share_help'] = 'Verhindert, dass Teilnehmer Dateien im Chatbereich hochladen oder teilen.';
$string['lock_private_chat'] = 'Privaten Chat sperren';
$string['lock_private_chat_help'] = 'Deaktiviert private 1-zu-1-Nachrichten zwischen Teilnehmern. Hinweis: Teilnehmer können Moderatoren weiterhin private Nachrichten für Hilfe oder Fragen senden.';

$string['completion_minutes'] = 'Anwesenheitsminuten';
$string['completion_minutes_help'] = 'Erfordert, dass der Benutzer für eine bestimmte Anzahl von Minuten in der Sitzung anwesend ist.';
$string['completion_minutes_desc'] = 'Der Benutzer muss mindestens {$a} Minuten an der Sitzung teilnehmen.';
$string['completion_raised_hand'] = 'Hand gehoben';
$string['completion_raised_hand_help'] = 'Erfordert, dass der Benutzer mindestens einmal die Hand hebt.';
$string['completion_chat_messages'] = 'Gesendete Chat-Nachrichten';
$string['completion_chat_messages_help'] = 'Erfordert, dass der Benutzer mindestens 1 Chat-Nachricht sendet.';
$string['completion_webcam_enabled'] = 'Webcam aktiviert';
$string['completion_webcam_enabled_help'] = 'Erfordert, dass der Benutzer seine Webcam mindestens einmal aktiviert.';
$string['completion_webcam_duration'] = 'Webcam-Aktivierungsdauer (Minuten)';
$string['completion_webcam_duration_help'] = 'Erfordert, dass der Benutzer seine Webcam für eine bestimmte Anzahl von Minuten aktiviert hat.';
$string['completion_webcam_duration_desc'] = 'Der Benutzer muss seine Webcam für mindestens {$a} Minuten aktiviert haben.';
$string['completion_mic_enabled'] = 'Mikrofon aktiviert';
$string['completion_mic_enabled_help'] = 'Erfordert, dass der Benutzer sein Mikrofon mindestens einmal aktiviert.';
$string['completion_mic_duration'] = 'Mikrofon-Aktivierungsdauer (Minuten)';
$string['completion_mic_duration_help'] = 'Erfordert, dass der Benutzer sein Mikrofon für eine bestimmte Anzahl von Minuten aktiviert hat.';
$string['completion_mic_duration_desc'] = 'Der Benutzer muss sein Mikrofon für mindestens {$a} Minuten aktiviert haben.';
$string['completion_talk_duration'] = 'Sprechdauer (Minuten)';
$string['completion_talk_duration_help'] = 'Erfordert, dass der Benutzer für eine bestimmte Anzahl von Minuten spricht.';
$string['completion_talk_duration_desc'] = 'Der Benutzer muss mindestens {$a} Minuten sprechen.';
$string['completion_poll_voted'] = 'An Umfrage teilgenommen';
$string['completion_poll_voted_help'] = 'Erfordert, dass der Benutzer an mindestens einer Umfrage teilnimmt.';
$string['completion_whiteboard_annotated'] = 'Auf Whiteboard kommentiert';
$string['completion_whiteboard_annotated_help'] = 'Erfordert, dass der Benutzer auf dem Whiteboard kommentiert.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Speichert Sitzungsstatistiken für Benutzer, um den Abschluss der Aktivität zu bestimmen.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'Die ID des Benutzers.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'JSON-kodierte Sitzungsdaten (Minuten, Chat-Nachrichten usw.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'Die Zeit, zu der die Statistiken zuletzt aktualisiert wurden.';

// view.php
$string['join_session'] = 'Sitzung beitreten';
$string['start_session'] = 'Sitzung starten';
$string['end_session'] = 'Sitzung beenden';
$string['participants'] = 'Teilnehmer';
$string['is_recording'] = 'Wird aufgezeichnet';
$string['is_active'] = 'Ist aktiv';
$string['room_info'] = 'Details zur Live-Sitzung';
$string['participants_info'] = 'Live-Teilnehmer';
$string['room_id'] = 'Raum-ID';
$string['creation_time'] = 'Erstellungszeit';
$string['name'] = 'Name';
$string['user_id'] = 'Benutzer-ID';
$string['is_admin'] = 'Ist Administrator';
$string['is_presenter'] = 'Ist Präsentator';
$string['joined_at'] = 'Beigetreten am';
$string['moderator_not_joined'] = 'Ein Moderator muss die Sitzung starten, bevor Sie beitreten können.';
$string['session_available_from'] = 'Verfügbar ab: {$a}';
$string['session_available_until'] = 'Verfügbar bis: {$a}';
$string['session_not_started_yet'] = 'Diese Sitzung hat noch nicht begonnen.';
$string['session_ended'] = 'Diese Sitzung ist beendet.';
$string['client_files_missing'] = 'Client-Dateien (JS/CSS) fehlen. Bitte überprüfen Sie Ihre PlugNmeet-Serverkonfiguration.';
$string['client_connection_error'] = 'Es gab einen Fehler beim Verbinden mit dem PlugNmeet-Server: {$a}. Bitte überprüfen Sie Ihre Plugin-Einstellungen.';
$string['allow_guest'] = 'Gastbenutzer erlauben';
$string['allow_guest_help'] = 'Wenn aktiviert, wird ein sicherer, teilbarer Link generiert, damit externe Benutzer (wie Gastlehrer oder Teilnehmer ohne Moodle-Konto) der Sitzung beitreten können; ein Administrator kann diesen Link anzeigen und teilen.';
$string['guest_join_link'] = 'Gast-Beitrittslink';
$string['guest_join_link_help'] = 'Teilen Sie diesen Link mit externen Teilnehmern. Dieser Link bleibt {$a} Stunden gültig. Jede Seitenaktualisierung generiert einen neuen Link, aber zuvor geteilte Links bleiben bis zu ihrer ursprünglichen Ablaufzeit gültig.';
$string['copy_link'] = 'Link kopieren';
$string['link_copied'] = 'Link in die Zwischenablage kopiert.';
$string['guest_join_title'] = 'Als Gast an der Besprechung teilnehmen';
$string['enter_display_name'] = 'Geben Sie Ihren Anzeigenamen ein';
$string['join_as_guest'] = 'An der Besprechung teilnehmen';
$string['guest_access_denied'] = 'Der Gastzugriff ist für diese Besprechung nicht aktiviert.';
$string['invalid_guest_token'] = 'Ungültiges oder abgelaufenes Gast-Beitrittstoken.';
$string['guest_link_expired'] = 'Dieser Gast-Beitrittslink ist abgelaufen.';
$string['error_joining_session'] = 'Es gab einen Fehler beim Beitreten zur Sitzung: {$a}';
$string['already_logged_in'] = 'Sie sind bereits bei Moodle angemeldet. Sie können der Sitzung direkt von dieser Aktivitätsseite aus beitreten.';
$string['total_webcams'] = 'Gesamtanzahl Webcams';
$string['total_mics'] = 'Gesamtanzahl Mikrofone';
$string['total_screen_shares'] = 'Gesamtanzahl Bildschirmfreigaben';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Mikrofone';
$string['screenshares'] = 'Bildschirmfreigaben';

// Events
$string['event_room_started'] = 'Raum gestartet';
$string['event_room_ended'] = 'Raum beendet';
$string['event_room_created'] = 'Raum erstellt';
$string['event_session_ended'] = 'Sitzung beendet';
$string['event_participant_joined'] = 'Teilnehmer beigetreten';
$string['event_participant_left'] = 'Teilnehmer verlassen';
$string['event_artifact_created'] = 'Artefakt erstellt';
$string['event_recording_proceeded'] = 'Aufnahme bereit';
$string['event_plugin_error'] = 'PlugNmeet-Fehler';
$string['event_track_published'] = 'Track veröffentlicht';
$string['event_track_unpublished'] = 'Track nicht veröffentlicht';
$string['event_recording_started'] = 'Aufnahme gestartet';
$string['event_recording_ended'] = 'Aufnahme beendet';
$string['event_rtmp_started'] = 'RTMP-Stream gestartet';
$string['event_rtmp_ended'] = 'RTMP-Stream beendet';

// Notifications
$string['messageprovider:recording_ready'] = 'Benachrichtigungen für fertige Aufnahmen';
$string['messageprovider:artifact_ready'] = 'Benachrichtigungen für fertige Artefakte';
$string['recording_ready_notification_subject'] = 'Aufnahme bereit: {$a}';
$string['recording_ready_notification_fullmessage'] = 'Die Aufnahme für die Sitzung "{$a->roomname}" ist jetzt bereit und verarbeitet. Sie können sie hier ansehen: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>Die Aufnahme für die Sitzung <strong>"{$a->roomname}"</strong> ist jetzt bereit und verarbeitet.</p><p><a href="{$a->url}">Klicken Sie hier, um die Aufnahme anzusehen.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Aufnahme bereit für {$a}';
$string['artifact_ready_notification_subject'] = 'Artefakt bereit: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Ein neues Artefakt ({$a->type}) für die Sitzung "{$a->roomname}" ist jetzt verfügbar. Sie können es hier ansehen: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Ein neues Artefakt ({$a->type}) für die Sitzung <strong>"{$a->roomname}"</strong> ist jetzt verfügbar.</p><p><a href="{$a->url}">Klicken Sie hier, um die Artefakt-Details anzuzeigen.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefakt bereit für {$a}';

// recordings.php
$string['no_recordings'] = 'Keine Aufnahmen gefunden.';
$string['recording_id'] = 'Aufnahme-ID';
$string['room_sid'] = 'Raum-SID';
$string['file_size'] = 'Dateigröße';
$string['created_at'] = 'Erstellt am';
$string['actions'] = 'Aktionen';
$string['view'] = 'Anzeigen';
$string['play'] = 'Abspielen';
$string['download'] = 'Herunterladen';
$string['delete'] = 'Löschen';
$string['delete_confirm'] = 'Sind Sie sicher, dass Sie dies löschen möchten?';
$string['delete_success'] = 'Erfolgreich gelöscht.';
$string['recording_details'] = 'Aufnahmedetails';
$string['recording_creation_time'] = 'Aufnahme-Erstellungszeit';
$string['room_creation_time'] = 'Sitzungs-Erstellungszeit';
$string['back_to_list'] = 'Zurück zur Liste';
$string['browser_not_support_video'] = 'Ihr Browser unterstützt das Video-Tag nicht.';
$string['room_title'] = 'Raumtitel';
$string['total_participants'] = 'Gesamtteilnehmer';
$string['session_started_at'] = 'Sitzung gestartet am';
$string['session_ended_at'] = 'Sitzung beendet am';

// artifacts.php
$string['no_artifacts'] = 'Keine Artefakte gefunden.';
$string['artifact_id'] = 'Artefakt-ID';
$string['type'] = 'Typ';
$string['artifact_details'] = 'Artefaktdetails';
$string['no_permission'] = 'Sie haben keine Berechtigung, diese Seite anzuzeigen.';
$string['token_usage'] = 'Token-Nutzung';
$string['duration_usage'] = 'Dauernutzung';
$string['character_count_usage'] = 'Zeichenanzahl-Nutzung';
$string['estimated_cost'] = 'Geschätzte Kosten';
$string['file_path'] = 'Dateipfad';
$string['mime_type'] = 'MIME-Typ';
$string['created_at'] = 'Erstellt am';
$string['meeting_summary'] = 'Besprechungszusammenfassung';
$string['error_loading_meeting_summary'] = 'Fehler beim Laden der Besprechungszusammenfassung: {$a}';

// Analytics strings
$string['download_excel_report'] = 'Excel-Bericht herunterladen';
$string['download_raw_json'] = 'Rohdaten herunterladen';
$string['room_summary'] = 'Raumzusammenfassung';
$string['users_summary'] = 'Benutzerzusammenfassung';
$string['see_excel_report'] = 'Siehe Excel-Bericht für Details';
$string['error_loading_analytics'] = 'Fehler beim Laden der Analysedaten: {$a}';
$string['error_generating_excel'] = 'Fehler beim Generieren des Excel-Berichts: {$a}';

$string['analytics_room_room_id'] = 'Raum-ID';
$string['analytics_room_room_title'] = 'Raumtitel';
$string['analytics_room_room_creation'] = 'Raum-Erstellungszeit';
$string['analytics_room_room_ended'] = 'Raum-Endzeit';
$string['analytics_room_room_duration'] = 'Raumdauer';
$string['analytics_room_room_total_users'] = 'Gesamtteilnehmer';
$string['analytics_room_enabled_e2ee'] = 'E2EE aktiviert';
$string['analytics_room_recording_status'] = 'Aufnahmestatus-Zähler';
$string['analytics_room_rtmp_status'] = 'RTMP-Status-Zähler';
$string['analytics_room_speech_service_total_usage'] = 'Gesamtnutzung des Sprachdienstdienstes';
$string['analytics_room_external_media_player_status'] = 'Statuszähler externer Mediaplayer';
$string['analytics_room_etherpad_status'] = 'Etherpad-Statuszähler';
$string['analytics_room_external_display_link_status'] = 'Statuszähler externer Anzeigelinks';
$string['analytics_room_ingress_created'] = 'Ingress erstellt Zähler';
$string['analytics_room_breakout_room'] = 'Breakout-Raum-Zähler';

$string['analytics_user_name'] = 'Name';
$string['analytics_user_id'] = 'Benutzer-ID';
$string['analytics_user_ex_id'] = 'Benutzer-ID';
$string['analytics_user_is_admin'] = 'Ist Administrator';
$string['analytics_user_duration'] = 'Dauer';
$string['analytics_user_joined'] = 'Beigetreten am';
$string['analytics_user_left'] = 'Verlassen am';
$string['analytics_user_mic_status'] = 'Mikrofonstatus-Änderungen';
$string['analytics_user_mic_muted'] = 'Mikrofon stummgeschaltet Zähler';
$string['analytics_user_mic_duration'] = 'Mikrofon-Aktivierungsdauer';
$string['analytics_user_talked'] = 'Gesprochen Zähler';
$string['analytics_user_talked_duration'] = 'Sprechdauer';
$string['analytics_user_webcam_status'] = 'Webcamstatus-Änderungen';
$string['analytics_user_webcam_duration'] = 'Webcam-Aktivierungsdauer';
$string['analytics_user_raise_hand'] = 'Hand gehoben Zähler';
$string['analytics_user_voted_poll'] = 'An Umfrage teilgenommen Zähler';
$string['analytics_user_whiteboard_annotated'] = 'Whiteboard kommentiert Zähler';
$string['analytics_user_whiteboard_files'] = 'Whiteboard-Dateien Zähler';
$string['analytics_user_screen_share_status'] = 'Bildschirmfreigabestatus-Änderungen';
$string['analytics_user_speech_services_usage'] = 'Nutzung der Sprachdienste';
$string['analytics_user_public_chat'] = 'Öffentliche Chat-Nachrichten';
$string['analytics_user_private_chat'] = 'Private Chat-Nachrichten';
$string['analytics_user_chat_files'] = 'Geteilte Chat-Dateien';
$string['analytics_user_interface_invisible'] = 'Schnittstelle unsichtbar Zähler';
$string['analytics_user_connection_quality'] = 'Verbindungsqualität';
$string['analytics_user_connection_quality_excellent'] = 'Ausgezeichnet';
$string['analytics_user_connection_quality_good'] = 'Gut';
$string['analytics_user_connection_quality_poor'] = 'Schlecht';

$string['users_info'] = 'Benutzerinformationen';
$string['polls'] = 'Umfragen';
$string['question'] = 'Frage';
$string['options'] = 'Optionen';
$string['file_name'] = 'Dateiname';
$string['checkcompletiontask'] = 'PlugNmeet-Abschluss überprüfen';

// attendance.php
$string['attendance_report'] = 'Anwesenheitsbericht';
$string['status'] = 'Status';
$string['present'] = 'Anwesend';
$string['absent'] = 'Abwesend';
$string['incomplete'] = 'Unvollständig';
$string['completed'] = 'Abgeschlossen';
$string['minutes_attended'] = 'Anwesenheitsminuten';
$string['last_updated'] = 'Zuletzt aktualisiert';
$string['mic_duration'] = 'Mikrofon-Aktivierungsdauer';
$string['webcam_duration'] = 'Webcam-Aktivierungsdauer';
$string['participation_progress'] = 'Teilnahme-Fortschritt';
$string['attendance_duration'] = 'Anwesenheitsminuten';
$string['attendance_webcam_status'] = 'Webcam aktiviert';
$string['attendance_mic_status'] = 'Mikrofon aktiviert';
$string['attendance_talked_duration'] = 'Sprechdauer';
$string['attendance_voted_poll'] = 'An Umfrage teilgenommen';
$string['attendance_chat_messages'] = 'Gesendete Chat-Nachrichten';
$string['attendance_raise_hand'] = 'Hand gehoben';
$string['attendance_webcam_duration'] = 'Webcam-Aktivierungsdauer';
$string['attendance_mic_duration'] = 'Mikrofon-Aktivierungsdauer';
$string['attendance_whiteboard_annotated'] = 'Auf Whiteboard kommentiert';
$string['met'] = 'Erfüllt';
$string['required'] = 'Erforderlich';

// Status codes
$string['status_unknown_status'] = 'Ein unbekannter Status wurde vom Server zurückgegeben.';
$string['status_success'] = 'Operation erfolgreich abgeschlossen.';
$string['status_permission_denied'] = 'Berechtigung verweigert.';
$string['status_not_found'] = 'Kein {$a} gefunden.';
$string['status_conflict'] = 'Diese Aktion konnte aufgrund eines Konflikts nicht abgeschlossen werden (z.B. der Raum existiert möglicherweise bereits).';
$string['status_invalid_token_or_signature'] = 'Das Anforderungstoken oder die Signatur ist ungültig.';
$string['status_invalid_api_key'] = 'Der angegebene API-Schlüssel ist ungültig. Bitte überprüfen Sie Ihre Plugin-Einstellungen.';
$string['status_internal_server_error'] = 'Der PlugNmeet-Server hat einen internen Fehler festgestellt.';
$string['status_invalid_parameters'] = 'Die angegebenen Informationen sind ungültig.';
$string['status_missing_required_parameter'] = 'Einige erforderliche Informationen fehlen.';
$string['status_room_not_found'] = 'Der angegebene Raum wurde nicht gefunden.';
$string['status_user_not_found'] = 'Benutzerkonto nicht gefunden. Bitte stellen Sie sicher, dass Ihre API-Anmeldeinformationen korrekt sind und Ihr Abonnement aktiv ist.';
$string['status_user_blocked'] = 'Benutzerkonto ist gesperrt. Bitte kontaktieren Sie den Support.';
$string['status_user_not_active'] = 'Benutzerkonto ist nicht aktiv. Dies liegt wahrscheinlich an einem inaktiven oder abgelaufenen Abonnement.';
