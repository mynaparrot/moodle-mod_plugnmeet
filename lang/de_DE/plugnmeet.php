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

$string['modulename'] = 'PlugNmeet';
$string['modulename_help'] = 'Mit dem PlugNmeet-Aktivitätsmodul können Sie Webkonferenzsitzungen in Echtzeit direkt aus Moodle heraus erstellen und verwalten.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'PlugNmeets';
$string['pluginadministration'] = 'plugNMeet-Administration';
$string['pluginname'] = 'PlugNmeet';
$string['plugnmeet:addinstance'] = 'Füge eine neue PlugNmeet-Aktivität hinzu';
$string['plugnmeet:deleteartifacts'] = 'Artefakte löschen';
$string['plugnmeet:deleterecording'] = 'Aufnahmen löschen';
$string['plugnmeet:downloadanalyticsreport'] = 'Analysebericht herunterladen';
$string['plugnmeet:downloadartifacts'] = 'Artefakte herunterladen';
$string['plugnmeet:downloadattendance'] = 'Anwesenheitsbericht herunterladen';
$string['plugnmeet:downloadrecordings'] = 'Aufnahmen herunterladen';
$string['plugnmeet:manage'] = 'PlugNMeet-Einstellungen verwalten';
$string['plugnmeet:view'] = 'PlugNMeet-Aktivität anzeigen';
$string['plugnmeet:viewactiveroomsreport'] = 'Bericht über aktive Räume anzeigen';
$string['plugnmeet:viewartifacts'] = 'Artefakte ansehen';
$string['plugnmeet:viewattendance'] = 'Anwesenheitsbericht anzeigen';
$string['plugnmeet:viewattendancelist'] = 'Anwesenheitsliste anzeigen';
$string['plugnmeet:viewlivesessioninfo'] = 'Informationen zur Live-Sitzung anzeigen';
$string['plugnmeet:viewrecordings'] = 'Aufzeichnungen ansehen';
$string['plugnmeetfieldset'] = 'Benutzerdefiniertes Beispiel-Fieldset';
$string['plugnmeetname'] = 'Benutzerdefinierter Beispielname';
$string['plugnmeetname_help'] = 'Hilfe zu benutzerdefinierten Beispielen';

// Admin Settings
$string['api_config'] = 'API-Konfiguration';
$string['server_url'] = 'PlugNmeet Server-URL';
$string['server_url_desc'] = 'Die Basis-URL Ihres PlugNmeet-Servers (z. B. https://pnm.example.com).';
$string['api_key'] = 'API-Schlüssel';
$string['api_key_desc'] = 'Der eindeutige API-Schlüssel, der Ihnen von Ihrem PlugNmeet-Server bereitgestellt wird.';
$string['api_secret'] = 'API-Geheimnis';
$string['api_secret_desc'] = 'Der von Ihrem PlugNmeet-Server bereitgestellte API-Schlüssel wird zur sicheren Authentifizierung verwendet.';
$string['guest_access_hdr'] = 'Gastzugangseinstellungen';
$string['allow_guest_global'] = 'Gastzugang weltweit erlauben';
$string['allow_guest_global_desc'] = 'Fungiert als Hauptschalter. Wenn dieser deaktiviert ist, wird Lehrkräften die Option zum Aktivieren der Gastteilnahme beim Erstellen oder Bearbeiten von Aktivitäten nicht angezeigt.';
$string['guest_link_expiration'] = 'Ablauf des Gastlinks (Stunden)';
$string['guest_link_expiration_desc'] = 'Legt fest, wie viele Stunden ein Gastzugangslink aktiv bleibt, nachdem er von einem Lehrer generiert wurde.';
$string['defaults'] = 'Technische Standardeinstellungen';
$string['defaults_desc'] = 'Standardmäßige technische Konfigurationen werden auf jede neue PlugNmeet-Sitzung angewendet.';
$string['enable_dynacast'] = 'Dynacast aktivieren';
$string['enable_dynacast_des'] = 'Optimiert die Performance durch dynamisches Pausieren von Videoebenen, die von den Teilnehmern nicht angezeigt werden. Dadurch werden CPU- und Bandbreitennutzung auf dem Server deutlich reduziert. **Hinweis:** Diese Funktion wird bei Verwendung von SVC-Codecs (VP9/AV1) automatisch aktiviert und ist für die gleichzeitige Übertragung mehrerer Codecs erforderlich.';
$string['enable_simulcast'] = 'Simulcast aktivieren';
$string['enable_simulcast_des'] = 'Bietet mehrere Videoqualitätsstufen, um auch Nutzern mit schwachen Verbindungen ein reibungsloses Erlebnis zu gewährleisten.';
$string['video_codec'] = 'Video-Codec';
$string['video_codec_des'] = 'Der Kodierungsstandard für Videoübertragung. **VP8** wird für WebRTC empfohlen, da er das beste Verhältnis von Qualität und geringer Latenz bietet. **Warnung:** Nicht alle Browser unterstützen jeden Codec. Stellen Sie sicher, dass Ihre Nutzer aktuelle Browser verwenden, wenn Sie VP9 oder H.265 einsetzen.';
$string['default_webcam_resolution'] = 'Standard-Webcam-Auflösung';
$string['default_webcam_resolution_des'] = 'Die anfängliche Auflösungseinstellung für die Kameras der Teilnehmer.';
$string['default_screen_share_resolution'] = 'Standardauflösung für Bildschirmfreigabe';
$string['default_screen_share_resolution_des'] = 'Die anfängliche Auflösungseinstellung für die Bildschirmfreigabe.';
$string['default_audio_preset'] = 'Standard-Audiovoreinstellung';
$string['default_audio_preset_des'] = 'Das für die Session optimierte Audioqualitätsprofil.';

$string['branding'] = 'Branding und Individualisierung';
$string['custom_logo'] = 'Benutzerdefiniertes Logo';
$string['custom_logo_des'] = 'Laden Sie Ihr Logo in den Meetingraum hoch. Wenn Sie kein Logo hochladen, wird das Standardlogo von PlugNmeet verwendet.';
$string['custom_css_url'] = 'Benutzerdefinierte CSS-URL';
$string['custom_css_url_des'] = 'Verlinken Sie eine externe .css-Datei, um die Benutzeroberflächenstile zu überschreiben oder anzupassen.';
$string['primary_color'] = 'Grundfarbe';
$string['primary_color_des'] = 'Hauptakzentfarbe für Schaltflächen, aktive Zustände und Hervorhebungen.';
$string['secondary_color'] = 'Sekundärfarbe';
$string['secondary_color_des'] = 'Die Akzentfarbe, die für sekundäre UI-Elemente verwendet wird.';
$string['background_color'] = 'Hintergrundfarbe';
$string['background_color_des'] = 'Die primäre Hintergrundfarbe der Benutzeroberfläche.';
$string['background_image'] = 'Hintergrundbild';
$string['background_image_des'] = 'Hintergrundbild. Für optimale Ergebnisse verwenden Sie ein Bild mit der Auflösung 1920x1080.';
$string['header_color'] = 'Headerfarbe';
$string['header_color_des'] = 'Hintergrundfarbe für die obere Navigationsleiste.';
$string['footer_color'] = 'Fußzeilenfarbe';
$string['footer_color_des'] = 'Hintergrundfarbe für die untere Symbolleiste.';
$string['left_color'] = 'Farbe der linken Seite';
$string['left_color_des'] = 'Hintergrundfarbe für die linke Navigationsleiste.';
$string['side_panel_bg_color'] = 'Hintergrundfarbe der Seitenwand';
$string['side_panel_bg_color_des'] = 'Hintergrundfarbe für die rechten Seitenleisten (Chat und Teilnehmerliste).';
$string['copyright_text'] = 'Urheberrechtstext';
$string['copyright_text_des'] = 'Der Markentext wird in der Fußzeile der Einstellungen angezeigt. HTML wird für Links oder benutzerdefinierte Formatierungen unterstützt.';
$string['client_load'] = 'Client-Lademethode';
$string['client_load_des'] = 'Wählen Sie **Remote** (empfohlen) für ein nahtloses, markenspezifisches Erlebnis direkt in Ihrer Moodle-Seite. Wählen Sie **Weiterleitung**, um die Standardoberfläche von PlugNMeet zu verwenden; beachten Sie, dass die Nutzer Ihre Website verlassen und Ihr individuelles Branding möglicherweise nicht angewendet wird.';
$string['remote'] = 'Remote (Eingebettet)';
$string['redirect'] = 'Weiterleitung zum Server';

$string['yes'] = 'Ja';
$string['no'] = 'NEIN';
$string['recordings'] = "Aufnahmen";
$string['recording'] = "Aufnahme";
$string['artifacts'] = "Zimmerartefakte";
$string['attendance'] = "Anwesenheitsbericht";
$string['artifact'] = "Artefakt";
$string['room_subject'] = 'Zimmer';
$string['user_subject'] = 'Benutzer';
$string['activeroomsreport'] = 'Bericht über aktive Räume';
$string['noactiverooms'] = 'Es sind momentan keine Räume aktiv.';
$string['activerooms'] = 'Aktive Räume';
$string['loading'] = 'Laden...';

// mod_form.php
$string['roomtitle'] = 'Raumtitel';
$string['roomtitle_help'] = 'Der Name, der sowohl für die Moodle-Aktivität als auch für die Live-Meeting-Überschrift verwendet wird. Er hilft Studierenden, die Sitzung in ihrem Kurs und im virtuellen Raum zu identifizieren.';
$string['welcome_message'] = 'Willkommensnachricht';
$string['welcome_message_help'] = 'Jeder hier eingegebene Text erscheint als erste Nachricht im öffentlichen Chat, sobald Nutzer dem Raum beitreten. Dies ist nützlich, um Anweisungen, Links oder wichtige Informationen mit den Teilnehmern zu teilen.';
$string['max_participants'] = 'Maximale Teilnehmerzahl';
$string['max_participants_help'] = 'Mit diesem Wert können Sie die maximale Anzahl der gleichzeitig an der Sitzung teilnehmenden Nutzer festlegen. Setzen Sie ihn auf 0, um unbegrenzt viele Teilnehmer zuzulassen.';
$string['room_features'] = 'Zimmerausstattung';
$string['recording_features'] = 'Aufnahmefunktionen';
$string['chat_features'] = 'Chat-Funktionen';
$string['other_features'] = 'Weitere Merkmale';
$string['e2ee_features'] = 'Ende-zu-Ende-Verschlüsselung';
$string['insights_features'] = 'Einblicke & KI-Funktionen';
$string['defaultlock'] = 'Standard-Sperreinstellungen';
$string['advanced_completion'] = 'Erweiterter Abschluss';
$string['available'] = 'Erhältlich ab';
$string['available_help'] = 'Legt fest, ab wann Teilnehmer der Sitzung beitreten können. Benutzer können den Raum erst ab diesem Datum und dieser Uhrzeit betreten.';
$string['deadline'] = 'Verfügbar bis';
$string['deadline_help'] = 'Legt das Datum und die Uhrzeit fest, zu der die Teilnehmer noch auf die Sitzung zugreifen können. Nach Ablauf dieser Frist wird der Zugriff gesperrt.';
$string['err_deadline_before_available'] = 'Das Datum „Verfügbar bis“ darf nicht vor dem Datum „Verfügbar ab“ liegen.';
$string['error_analytics_required_for_completion'] = 'Die Option „Analytics aktivieren“ muss ausgewählt sein, wenn Abschlusskriterien festgelegt wurden.';

$string['allow_webcams'] = 'Webcams zulassen';
$string['allow_webcams_help'] = 'Erlauben Sie den Teilnehmern die Nutzung ihrer Webcams.';
$string['mute_on_start'] = 'Stummschaltung beim Start';
$string['mute_on_start_help'] = 'Alle Teilnehmer werden automatisch stummgeschaltet, sobald sie der Sitzung beitreten.';
$string['allow_screen_share'] = 'Bildschirmfreigabe zulassen';
$string['allow_screen_share_help'] = 'Ermöglichen Sie den Teilnehmern, ihren Bildschirm freizugeben.';
$string['allow_rtmp'] = 'RTMP-Streaming zulassen';
$string['allow_rtmp_help'] = 'Ermöglicht Moderatoren, die Live-Sitzung auf externen Plattformen wie YouTube, Facebook oder Twitch zu übertragen. Ideal für öffentliche Webinare oder Gastvorträge.';
$string['allow_raise_hand'] = 'Handheben erlauben';
$string['allow_raise_hand_help'] = 'Erlauben Sie den Teilnehmern, die Hand zu heben.';
$string['admin_only_webcams'] = 'Webcams nur für Administratoren';
$string['admin_only_webcams_help'] = 'Nur Moderatoren dürfen ihre Webcams benutzen.';
$string['allow_view_other_webcams'] = 'Andere Webcams anzeigen erlauben';
$string['allow_view_other_webcams_help'] = 'Erlauben Sie den Teilnehmern, die Webcams anderer Teilnehmer zu sehen. Wenn diese Funktion deaktiviert ist, sehen sie nur die Webcams der Moderatoren.';
$string['allow_view_other_users_list'] = 'Liste der anderen Benutzer anzeigen';
$string['allow_view_other_users_list_help'] = 'Erlauben Sie den Teilnehmern, die Liste der anderen Teilnehmer einzusehen.';
$string['room_duration'] = 'Raumdauer (Minuten)';
$string['room_duration_help'] = 'Legt fest, wie lange der Raum geöffnet bleiben kann, bevor er sich automatisch schließt. Geben Sie 0 ein, wenn Sie kein Zeitlimit festlegen möchten und der Raum ohne Einschränkungen aktiv bleiben kann.';
$string['moderator_join_first'] = 'Moderator Jetzt beitreten';
$string['moderator_join_first_help'] = 'Wenn diese Option aktiviert ist, startet die Sitzung erst, nachdem ein Moderator (z. B. eine Lehrkraft) beigetreten ist. Die Teilnehmenden bleiben auf der Moodle-Aktivitätsseite und gelangen weder in den virtuellen Raum noch in einen Wartebereich. Dies unterscheidet sich von der Option „Warteraum“, bei der die Teilnehmenden weiterhin beitreten und warten können.';
$string['enable_analytics'] = 'Analysen aktivieren';
$string['enable_analytics_help'] = 'Erfasst Teilnahme- und Engagementdaten für die Sitzung. **Hinweis:** Diese Funktion muss aktiviert sein, wenn Abschlusskriterien festgelegt wurden.';
$string['allow_virtual_bg'] = 'Virtuelle Hintergründe zulassen';
$string['allow_virtual_bg_help'] = 'Ermöglicht es den Teilnehmern, ihren Hintergrund zu verwischen oder ein virtuelles Bild zu verwenden. Ideal, um die Privatsphäre der Schüler zu wahren und ein professionelles Erscheinungsbild des Klassenzimmers zu gewährleisten.';
$string['auto_gen_user_id'] = 'Automatische Generierung einer Benutzer-ID';
$string['auto_gen_user_id_help'] = 'Wenn diese Option aktiviert ist, erstellt das System eine neue ID, damit derselbe Benutzer von mehreren Geräten aus beitreten kann – beispielsweise, wenn ein Lehrer von einem Tablet aus beitritt, um auf dem Whiteboard zu zeichnen, während er einen PC für Kamera und Mikrofon verwendet; es wird jedoch <b>empfohlen,</b> diese Option deaktiviert zu lassen, damit die Moodle-Benutzer-ID verwendet wird und doppelte Beitritte verhindert werden.';

$string['allow_recording'] = 'Aufnahme zulassen (Hauptschalter)';
$string['allow_recording_help'] = 'Der Hauptschalter für alle Aufnahmefunktionen. Wenn er deaktiviert ist, sind sowohl die Cloud- als auch die lokale Aufnahmeoption für Moderatoren ausgeblendet.';
$string['allow_cloud_recording'] = 'Cloud-Aufzeichnung zulassen';
$string['allow_cloud_recording_help'] = 'Ermöglicht die Aufzeichnung auf dem PlugNmeet-Server. Das fertige Video wird verarbeitet und in der Cloud gespeichert, sodass es nach Ende der Sitzung einfach per Link geteilt werden kann.';
$string['enable_auto_cloud_recording'] = 'Automatische Cloud-Aufzeichnung aktivieren';
$string['enable_auto_cloud_recording_help'] = 'Die Cloud-Aufzeichnung wird automatisch gestartet, sobald der erste Moderator der Sitzung beitritt. Ideal, um sicherzustellen, dass keine Vorlesung vergessen wird.';
$string['allow_local_recording'] = 'Lokale Aufzeichnung zulassen';
$string['allow_local_recording_help'] = 'Ermöglicht die direkte Aufnahme auf dem Computer. **Hinweis:** Erfordert Google Chrome. Um den gesamten Sitzungs-Audio aufzunehmen, muss der Nutzer seinen Chrome-Tab freigeben und die Option „Auch Tab-Audio freigeben“ aktivieren. Die Datei wird nach Abschluss der Aufnahme lokal auf dem Gerät gespeichert.';

$string['allow_chat'] = 'Chat zulassen (Globaler Master-Schalter)';
$string['allow_chat_help'] = 'Der zentrale Schalter für alle Chatfunktionen. Bei Deaktivierung wird der gesamte Chatbereich für alle Benutzer, einschließlich Moderatoren, deaktiviert. Öffentliche und private Chats sind dann nicht mehr möglich.';
$string['allow_file_upload'] = 'Datei-Upload zulassen';
$string['allow_file_upload_help'] = 'Ermöglicht das Teilen von Dateien im Chat. Hierfür muss der Hauptschalter „Chat zulassen“ aktiviert sein.';

$string['allow_shared_notepad'] = 'Gemeinsame Nutzung des Notizblocks zulassen';
$string['allow_shared_notepad_help'] = 'Ermöglicht einen kollaborativen Texteditor, in dem Schüler und Lehrer gemeinsam in Echtzeit Notizen erstellen können. Dies eignet sich perfekt für Brainstorming, gemeinsames Schreiben oder das Erstellen einer gemeinsamen Zusammenfassung des Unterrichts.';

$string['whiteboard_features'] = 'Funktionen der Whiteboard-Tafel';
$string['allow_whiteboard'] = 'Whiteboard zulassen';
$string['allow_whiteboard_help'] = 'Schaltet einen interaktiven Zeichenbereich für die Sitzung frei. Nutzen Sie ihn zum Skizzieren von Diagrammen, zum visuellen Lösen von mathematischen Problemen oder um Schülern die Möglichkeit zu geben, gemeinsam genutzte Inhalte zu kommentieren.';
$string['preload_file'] = 'Präsentationsdatei vorladen';
$string['preload_file_help'] = 'Hier können Sie ein PDF- oder Office-Dokument hochladen, das beim Sitzungsbeginn automatisch auf dem Whiteboard angezeigt wird. So ist Ihr Präsentationsmaterial sofort für den Unterricht bereit. <strong>Maximale Dateigröße: 5 MB</strong>';

$string['allowed_external_media_player'] = 'Externen Mediaplayer zulassen';
$string['allowed_external_media_player_help'] = 'Ermöglicht es Moderatoren, Videos von Plattformen wie YouTube oder Vimeo für die gesamte Klasse zu synchronisieren und abzuspielen. Ideal für die Analyse von Lehrvideos oder das gemeinsame Ansehen von Dokumentationen ohne Bandbreitenverzögerungen.';

$string['activate_waiting_room'] = 'Warteraum aktivieren';
$string['activate_waiting_room_help'] = 'Aktivieren Sie den Warteraum für diese Sitzung.';
$string['waiting_room_msg'] = 'Nachricht im Wartezimmer';
$string['waiting_room_msg_help'] = 'Diese Nachricht wird Nutzern angezeigt, während sie auf den Zutritt zum Raum warten. Nutzen Sie sie, um vor Beginn der Sitzung Anweisungen, Erwartungen oder hilfreiche Informationen mitzuteilen.';

$string['allow_breakout_rooms'] = 'Breakout-Räume zulassen';
$string['allow_breakout_rooms_help'] = 'Ermöglicht es Moderatoren, die Teilnehmer in kleinere Gruppen für fokussierte Diskussionen, gemeinsame Projekte oder private Gruppenaktivitäten aufzuteilen.';
$string['allowed_number_rooms'] = 'Maximale Anzahl an Breakout-Räumen';
$string['allowed_number_rooms_help'] = 'Die maximale Anzahl an Unterräumen, die ein Moderator innerhalb einer einzelnen Sitzung erstellen kann.';

$string['allow_display_external_link_features'] = 'Externe Linkfreigabe zulassen';
$string['allow_display_external_link_features_help'] = 'Ermöglicht es Moderatoren, externe Lerninhalte – wie H5P-Aktivitäten, SCORM-Pakete oder Quizsysteme (z. B. Kahoot) – während der Sitzung direkt allen Teilnehmern anzuzeigen.';

$string['allow_ingress_features'] = 'Eingehenden Zugriff zulassen (Externes Streaming)';
$string['allow_ingress_features_help'] = 'Ermöglicht Lehrkräften die Übertragung von qualitativ hochwertigen Videos in die Sitzung mithilfe externer Software wie OBS über die Protokolle RTMP oder WHIP. Dies ist ideal zum Teilen hochauflösender Videoinhalte, vorab aufgezeichneter Sitzungen oder zum Umgehen von Browser-Upload-Beschränkungen.';

$string['allow_polls'] = 'Umfragen zulassen';
$string['allow_polls_help'] = 'Ermöglicht es Moderatoren, während der Sitzung interaktive Umfragen und kurze Quizze zu erstellen. Dies ist eine hervorragende Möglichkeit, das Verständnis der Studierenden zu überprüfen und die Beteiligung zu steigern.';

$string['sip_dial_in_features_is_allow'] = 'SIP-Einwahl zulassen';
$string['sip_dial_in_features_is_allow_help'] = 'Ermöglicht es den Teilnehmern, über einen herkömmlichen Telefonanruf an der Audiositzung teilzunehmen. Dies ist besonders wichtig für Studierende mit schlechter Internetverbindung oder solche, die unterwegs teilnehmen müssen.';

$string['enable_end_to_end_encryption_features'] = 'Ende-zu-Ende-Verschlüsselung (E2EE) aktivieren';
$string['enable_end_to_end_encryption_features_help'] = 'Bietet maximale Sicherheit durch Verschlüsselung von Video- und Audiostreams, sodass selbst der Server keinen Zugriff darauf hat. Hinweis: Einige Funktionen, wie z. B. die serverseitige Aufzeichnung, können bei aktivierter Ende-zu-Ende-Verschlüsselung eingeschränkt sein.';
$string['enabled_self_insert_encryption_key'] = 'Teilnehmerdefinierte Tasten zulassen';
$string['enabled_self_insert_encryption_key_help'] = 'Teilnehmer können einen gemeinsamen geheimen Schlüssel manuell eingeben. Dadurch wird sichergestellt, dass der Dienstanbieter niemals Zugriff auf die Verschlüsselungsschlüssel hat und somit ein Höchstmaß an Datenschutz gewährleistet ist.';
$string['included_e2ee_chat_messages'] = 'Chatnachrichten verschlüsseln';
$string['included_e2ee_chat_messages_help'] = 'Erweitert die Ende-zu-Ende-Verschlüsselung auf den Text-Chat und stellt so sicher, dass Nachrichten nur von den Teilnehmern im Chatraum gelesen werden können.';
$string['included_e2ee_whiteboard'] = 'Whiteboard-Daten verschlüsseln';
$string['included_e2ee_whiteboard_help'] = 'Beinhaltet alle Whiteboard-Zeichnungen und Anmerkungen in der Ende-zu-Ende-Verschlüsselungsschicht für vollständigen Datenschutz.';

$string['insights_features_is_allow'] = 'Sitzungseinblicke zulassen (Hauptschalter)';
$string['insights_features_is_allow_help'] = 'Der Hauptschalter für alle datengesteuerten Funktionen. Wenn er deaktiviert ist, stehen sämtliche Unteroptionen – einschließlich Transkription, KI-Assistent und Besprechungsberichte – nicht zur Verfügung.';
$string['insights_transcription_features_is_allow'] = 'Live-Transkription zulassen';
$string['insights_transcription_features_is_allow_help'] = 'Ermöglicht die Echtzeit-Spracherkennung während der Sitzung. Diese Funktion muss aktiviert sein, damit die Transkriptionsübersetzung oder die Sprachsynthese (TTS) funktioniert.';
$string['insights_transcription_features_is_allow_translation'] = 'Transkription zulassen';
$string['insights_transcription_features_is_allow_translation_help'] = 'Ermöglicht die Übersetzung des Live-Transkripts in verschiedene Sprachen und unterstützt so internationale Studierende und mehrsprachige Umgebungen.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Sprachsynthese zulassen (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Ermöglicht die Text-zu-Sprache-Funktion, sodass das Live-Transkript vorgelesen werden kann, um die Zugänglichkeit und die Bedürfnisse sehbehinderter Teilnehmer zu verbessern.';
$string['insights_chat_translation_features_is_allow'] = 'Chatübersetzung zulassen';
$string['insights_chat_translation_features_is_allow_help'] = 'Ermöglicht die Echtzeitübersetzung von Chatnachrichten, sodass die Teilnehmer sofort in verschiedenen Sprachen kommunizieren können.';
$string['insights_ai_features_is_allow'] = 'KI-Meeting-Assistent zulassen (KI-Hauptschalter)';
$string['insights_ai_features_is_allow_help'] = 'Der Hauptschalter für alle KI-gestützten Funktionen. Wenn er deaktiviert ist, werden bestimmte Funktionen wie KI-Chat und Besprechungszusammenfassung ausgeblendet, selbst wenn Session Insights aktiviert ist.';
$string['insights_ai_text_chat_features_is_allow'] = 'KI-Chatassistenten zulassen';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integriert einen KI-Assistenten direkt in den Chat, um Fragen zu beantworten, komplexe Konzepte zu erklären und Gruppendiskussionen zu erleichtern.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'KI-gestützte Besprechungszusammenfassung zulassen';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Erstellt nach Ende der Sitzung automatisch eine prägnante KI-Zusammenfassung, die die wichtigsten Lerninhalte, Entscheidungen und Folgeaufgaben hervorhebt.';

$string['lock_microphone'] = 'Mikrofone sperren';
$string['lock_microphone_help'] = 'Alle Teilnehmer werden beim Betreten des Raumes standardmäßig stummgeschaltet. Nur Moderatoren können die Stummschaltung aufheben oder die Sprecherlaubnis erteilen.';
$string['lock_webcam'] = 'Webcams sperren';
$string['lock_webcam_help'] = 'Deaktiviert standardmäßig die Kameras aller Teilnehmer. Nützlich, um Bandbreite zu sparen oder die Privatsphäre der Schüler zu gewährleisten.';
$string['lock_screen_sharing'] = 'Sperrbildschirmfreigabe';
$string['lock_screen_sharing_help'] = 'Beschränkt die Bildschirmfreigabe auf Moderatoren. Verhindert, dass Teilnehmer durch ihre eigenen Bildschirme stören.';
$string['lock_whiteboard'] = 'Sperren Sie die Whiteboard-Tafel.';
$string['lock_whiteboard_help'] = 'Die Zeichenwerkzeuge des Whiteboards sind ausschließlich Moderatoren vorbehalten. Unbefugte Anmerkungen durch Teilnehmer werden verhindert.';
$string['lock_shared_notepad'] = 'Gemeinsamen Notizblock sperren';
$string['lock_shared_notepad_help'] = 'Deaktiviert den gemeinsamen Notizblock für die Teilnehmer, um themenfremde Notizen oder Ablenkungen zu vermeiden.';
$string['lock_chat'] = 'Öffentlichen Chat sperren';
$string['lock_chat_help'] = 'Blendet den öffentlichen Chatbereich für alle Teilnehmer vollständig aus oder deaktiviert ihn.';
$string['lock_chat_send_message'] = 'Nachrichtenversand sperren';
$string['lock_chat_send_message_help'] = 'Ermöglicht es den Teilnehmern, den Chat zu lesen, verhindert aber, dass sie Nachrichten senden.';
$string['lock_chat_file_share'] = 'Dateifreigabe sperren';
$string['lock_chat_file_share_help'] = 'Verhindert, dass Teilnehmer Dateien innerhalb des Chatbereichs hochladen oder teilen.';
$string['lock_private_chat'] = 'Privaten Chat sperren';
$string['lock_private_chat_help'] = 'Deaktiviert die private 1:1-Nachrichtenfunktion zwischen Teilnehmern. Hinweis: Teilnehmer können weiterhin private Nachrichten an Moderatoren senden, um Hilfe zu erhalten oder Fragen zu stellen.';

$string['completion_minutes'] = 'Anwesenheitsminuten';
$string['completion_minutes_help'] = 'Verlangen Sie, dass der Benutzer eine bestimmte Anzahl von Minuten in der Sitzung verbleibt.';
$string['completion_minutes_desc'] = 'Der Benutzer muss mindestens {$a} Minuten an der Sitzung teilnehmen.';
$string['completion_raised_hand'] = 'erhobene Hand';
$string['completion_raised_hand_help'] = 'Verlangen Sie vom Benutzer, dass er mindestens einmal die Hand hebt.';
$string['completion_chat_messages'] = 'Gesendete Chatnachrichten';
$string['completion_chat_messages_help'] = 'Verlangen Sie vom Benutzer, dass er mindestens eine Chatnachricht sendet.';
$string['completion_webcam_enabled'] = 'Webcam aktiviert';
$string['completion_webcam_enabled_help'] = 'Verlangen Sie vom Benutzer, dass er seine Webcam mindestens einmal aktiviert.';
$string['completion_webcam_duration'] = 'Dauer mit aktivierter Webcam (Minuten)';
$string['completion_webcam_duration_help'] = 'Verlangen Sie vom Benutzer, dass seine Webcam für eine bestimmte Anzahl von Minuten aktiviert ist.';
$string['completion_webcam_duration_desc'] = 'Der Benutzer muss seine Webcam mindestens {$a} Minuten lang aktiviert haben.';
$string['completion_mic_enabled'] = 'Mikrofon aktiviert';
$string['completion_mic_enabled_help'] = 'Verlangen Sie vom Benutzer, dass er sein Mikrofon mindestens einmal aktiviert.';
$string['completion_mic_duration'] = 'Dauer mit aktiviertem Mikrofon (Minuten)';
$string['completion_mic_duration_help'] = 'Verlangen Sie vom Benutzer, dass sein Mikrofon für eine bestimmte Anzahl von Minuten aktiviert ist.';
$string['completion_mic_duration_desc'] = 'Der Benutzer muss sein Mikrofon mindestens {$a} Minuten lang eingeschaltet haben.';
$string['completion_talk_duration'] = 'Vortragsdauer (Minuten)';
$string['completion_talk_duration_help'] = 'Verlangen Sie vom Benutzer, dass er eine bestimmte Anzahl von Minuten spricht.';
$string['completion_talk_duration_desc'] = 'Der Nutzer muss mindestens {$a} Minuten sprechen.';
$string['completion_poll_voted'] = 'Bei der Umfrage abgestimmt';
$string['completion_poll_voted_help'] = 'Verlangen Sie vom Nutzer, dass er an mindestens einer Umfrage teilnimmt.';
$string['completion_whiteboard_annotated'] = 'Anmerkungen auf der Tafel';
$string['completion_whiteboard_annotated_help'] = 'Verlangen Sie vom Benutzer, dass er Anmerkungen auf dem Whiteboard macht.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Speichert Sitzungsstatistiken, damit Benutzer den Abschluss von Aktivitäten ermitteln können.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'Die Benutzer-ID.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'JSON-kodierte Sitzungsdaten (Minuten, Chatnachrichten usw.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'Der Zeitpunkt, an dem die Statistiken zuletzt aktualisiert wurden.';

// view.php
$string['join_session'] = 'Sitzung beitreten';
$string['start_session'] = 'Sitzung starten';
$string['end_session'] = 'Sitzung beenden';
$string['participants'] = 'Teilnehmer';
$string['is_recording'] = 'Aufnahme läuft';
$string['is_active'] = 'Ist aktiv';
$string['room_info'] = 'Details zur Live-Session';
$string['participants_info'] = 'Live-Teilnehmer';
$string['room_id'] = 'Zimmer-ID';
$string['creation_time'] = 'Entstehungszeit';
$string['name'] = 'Name';
$string['user_id'] = 'Benutzer-ID';
$string['is_admin'] = 'Ist Administrator';
$string['is_presenter'] = 'Ist Moderator';
$string['joined_at'] = 'Beigetreten bei';
$string['moderator_not_joined'] = 'Ein Moderator muss die Sitzung starten, bevor Sie beitreten können.';
$string['session_available_from'] = 'Verfügbar ab: {$a}';
$string['session_available_until'] = 'Verfügbar bis: {$a}';
$string['session_not_started_yet'] = 'Diese Sitzung hat noch nicht begonnen.';
$string['session_ended'] = 'Diese Sitzung ist beendet.';
$string['allow_guest'] = 'Gastbenutzer zulassen';
$string['allow_guest_help'] = 'Wenn diese Funktion aktiviert ist, wird ein sicherer, teilbarer Link generiert, damit externe Benutzer (z. B. Gastlehrer oder Teilnehmer ohne Moodle-Konto) der Sitzung beitreten können; ein Administrator kann diesen Link einsehen und weitergeben.';
$string['guest_join_link'] = 'Gast-Beitrittslink';
$string['guest_join_link_help'] = 'Teilen Sie diesen Link mit externen Teilnehmern. Dieser Link ist {$a} Stunden gültig. Bei jedem Seitenaufruf wird ein neuer Link generiert, bereits geteilte Links bleiben jedoch bis zu ihrer ursprünglichen Gültigkeitsdauer gültig.';
$string['copy_link'] = 'Link kopieren';
$string['link_copied'] = 'Link in die Zwischenablage kopiert.';
$string['guest_join_title'] = 'Als Gast an der Besprechung teilnehmen';
$string['enter_display_name'] = 'Geben Sie Ihren Anzeigenamen ein';
$string['join_as_guest'] = 'Meeting beitreten';
$string['guest_access_denied'] = 'Für diese Besprechung ist der Gastzugang nicht aktiviert.';
$string['invalid_guest_token'] = 'Ungültiges oder abgelaufenes Gast-Token.';
$string['guest_link_expired'] = 'Dieser Gast-Link ist abgelaufen.';
$string['error_joining_session'] = 'Beim Beitritt zur Sitzung ist ein Fehler aufgetreten: {$a}';
$string['already_logged_in'] = 'Sie sind bereits in Moodle angemeldet. Sie können direkt von dieser Aktivitätsseite aus an der Sitzung teilnehmen.';
$string['total_webcams'] = 'Gesamtzahl der Webcams';
$string['total_mics'] = 'Gesamtanzahl Mikrofone';
$string['total_screen_shares'] = 'Gesamtzahl der Bildschirmfreigaben';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Mikrofone';
$string['screenshares'] = 'Bildschirmfreigaben';

// Events
$string['event_room_started'] = 'Raum gestartet';
$string['event_room_ended'] = 'Raum endete';
$string['event_room_created'] = 'Raum geschaffen';
$string['event_session_ended'] = 'Sitzung beendet';
$string['event_participant_joined'] = 'Teilnehmer beigetreten';
$string['event_participant_left'] = 'Teilnehmer verließ';
$string['event_artifact_created'] = 'Artefakt erstellt';
$string['event_recording_proceeded'] = 'Aufnahmebereit';
$string['event_plugin_error'] = 'PlugNmeet-Fehler';
$string['event_track_published'] = 'Track veröffentlicht';
$string['event_track_unpublished'] = 'Track unveröffentlicht';
$string['event_recording_started'] = 'Aufnahme gestartet';
$string['event_recording_ended'] = 'Aufnahme beendet';
$string['event_rtmp_started'] = 'RTMP-Stream gestartet';
$string['event_rtmp_ended'] = 'RTMP-Stream beendet';

// Notifications
$string['messageprovider:recording_ready'] = 'Benachrichtigungen für fertige Aufnahmen';
$string['messageprovider:artifact_ready'] = 'Benachrichtigungen für fertige Artefakte';
$string['recording_ready_notification_subject'] = 'Aufnahme bereit: {$a}';
$string['recording_ready_notification_fullmessage'] = 'Die Aufzeichnung der Sitzung "{$a->roomname}" ist nun fertig und verarbeitet. Sie können sie hier ansehen: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>Die Aufnahme für die Session <strong>"{$a->roomname}"</strong> ist jetzt bereit und bearbeitet.</p><p><a href="{$a->URL}">Klicken Sie hier, um die Aufnahme anzusehen.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Aufnahme bereit für {$a}';
$string['artifact_ready_notification_subject'] = 'Artefakt bereit: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Ein neues Artefakt ({$a->type}) für die Sitzung "{$a->roomname}" ist jetzt verfügbar. Sie können es hier ansehen: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Ein neues Artefakt ({$a->type}) für die Sitzung <strong>"{$a->roomname}"</strong> ist jetzt verfügbar.</p><p><a href="{$a->url}">Klicken Sie hier, um die Artefaktdetails anzuzeigen.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefakt bereit für {$a}';

// recordings.php
$string['no_recordings'] = 'Keine Aufnahmen gefunden.';
$string['recording_id'] = 'Aufnahme-ID';
$string['room_sid'] = 'Raum SID';
$string['file_size'] = 'Dateigröße';
$string['created_at'] = 'Erstellt am';
$string['actions'] = 'Aktionen';
$string['view'] = 'Sicht';
$string['play'] = 'Spielen';
$string['download'] = 'Herunterladen';
$string['delete'] = 'Löschen';
$string['delete_confirm'] = 'Möchten Sie dies wirklich löschen?';
$string['delete_success'] = 'Erfolgreich gelöscht.';
$string['recording_details'] = 'Aufnahmedetails';
$string['recording_creation_time'] = 'Aufnahmeerstellungszeit';
$string['room_creation_time'] = 'Sitzungserstellungszeit';
$string['back_to_list'] = 'Zurück zur Liste';
$string['browser_not_support_video'] = 'Ihr Browser unterstützt das Video-Tag nicht.';
$string['room_title'] = 'Raumtitel';
$string['total_participants'] = 'Gesamtzahl der Teilnehmer';
$string['session_started_at'] = 'Sitzung begonnen um';
$string['session_ended_at'] = 'Die Sitzung endete um';

// artifacts.php
$string['no_artifacts'] = 'Es wurden keine Artefakte gefunden.';
$string['artifact_id'] = 'Artefakt-ID';
$string['type'] = 'Typ';
$string['artifact_details'] = 'Artefaktdetails';
$string['no_permission'] = 'Sie haben keine Berechtigung, diese Seite anzuzeigen.';
$string['token_usage'] = 'Token-Nutzung';
$string['duration_usage'] = 'Nutzungsdauer';
$string['character_count_usage'] = 'Zeichenanzahl';
$string['estimated_cost'] = 'Geschätzte Kosten';
$string['file_path'] = 'Dateipfad';
$string['mime_type'] = 'Pantomime-Typ';
$string['created_at'] = 'Erstellt am';

// Analytics strings
$string['download_excel_report'] = 'Excel-Bericht herunterladen';
$string['download_raw_json'] = 'Rohdaten herunterladen';
$string['room_summary'] = 'Raumübersicht';
$string['users_summary'] = 'Benutzerübersicht';
$string['see_excel_report'] = 'Einzelheiten finden Sie im Excel-Bericht.';
$string['error_loading_analytics'] = 'Fehler beim Laden der Analysedaten: {$a}';
$string['error_generating_excel'] = 'Fehler beim Generieren des Excel-Berichts: {$a}';

$string['analytics_room_room_id'] = 'Zimmer-ID';
$string['analytics_room_room_title'] = 'Raumtitel';
$string['analytics_room_room_creation'] = 'Raumerstellungszeit';
$string['analytics_room_room_ended'] = 'Raum beendete Zeit';
$string['analytics_room_room_duration'] = 'Zimmerdauer';
$string['analytics_room_room_total_users'] = 'Gesamtzahl der Teilnehmer';
$string['analytics_room_enabled_e2ee'] = 'E2EE-fähig';
$string['analytics_room_recording_status'] = 'Aufzeichnungsstatusanzahl';
$string['analytics_room_rtmp_status'] = 'RTMP-Statusanzahl';
$string['analytics_room_speech_service_total_usage'] = 'Gesamtnutzung des Sprachdienstes';
$string['analytics_room_external_media_player_status'] = 'Statusanzahl externer Mediaplayer';
$string['analytics_room_etherpad_status'] = 'Etherpad-Statusanzahl';
$string['analytics_room_external_display_link_status'] = 'Status der externen Anzeigeverbindung';
$string['analytics_room_ingress_created'] = 'Anzahl der erstellten Ingress-Einträge';
$string['analytics_room_breakout_room'] = 'Anzahl der Breakout-Räume';

$string['analytics_user_name'] = 'Name';
$string['analytics_user_id'] = 'Benutzer-ID';
$string['analytics_user_ex_id'] = 'Benutzer-ID';
$string['analytics_user_is_admin'] = 'Ist Administrator';
$string['analytics_user_duration'] = 'Dauer';
$string['analytics_user_joined'] = 'Beigetreten bei';
$string['analytics_user_left'] = 'Links bei';
$string['analytics_user_mic_status'] = 'Änderungen des Mikrofonstatus';
$string['analytics_user_mic_muted'] = 'Mikrofon stummgeschaltet';
$string['analytics_user_mic_duration'] = 'Dauer mit aktiviertem Mikrofon';
$string['analytics_user_talked'] = 'Zählen';
$string['analytics_user_talked_duration'] = 'Gesprächsdauer';
$string['analytics_user_webcam_status'] = 'Änderungen des Webcam-Status';
$string['analytics_user_webcam_duration'] = 'Dauer der Webcam-Aktivierung';
$string['analytics_user_raise_hand'] = 'Hand heben Zählen';
$string['analytics_user_voted_poll'] = 'Abstimmungsergebnisse';
$string['analytics_user_whiteboard_annotated'] = 'Zählung auf der Tafel';
$string['analytics_user_whiteboard_files'] = 'Anzahl der Whiteboard-Dateien';
$string['analytics_user_screen_share_status'] = 'Änderungen des Bildschirmfreigabestatus';
$string['analytics_user_speech_services_usage'] = 'Nutzung von Sprachdiensten';
$string['analytics_user_public_chat'] = 'Öffentliche Chatnachrichten';
$string['analytics_user_private_chat'] = 'Private Chatnachrichten';
$string['analytics_user_chat_files'] = 'Gemeinsame Chatdateien';
$string['analytics_user_interface_invisible'] = 'Unsichtbare Benutzeroberfläche';
$string['analytics_user_connection_quality'] = 'Verbindungsqualität';
$string['analytics_user_connection_quality_excellent'] = 'Exzellent';
$string['analytics_user_connection_quality_good'] = 'Gut';
$string['analytics_user_connection_quality_poor'] = 'Arm';

$string['users_info'] = 'Benutzerinformationen';
$string['polls'] = 'Umfragen';
$string['question'] = 'Frage';
$string['options'] = 'Optionen';
$string['file_name'] = 'Dateiname';
$string['checkcompletiontask'] = 'Überprüfen Sie den Abschluss von plugNmeet.';

// attendance.php
$string['attendance_report'] = 'Anwesenheitsbericht';
$string['status'] = 'Status';
$string['present'] = 'Gegenwärtig';
$string['absent'] = 'Abwesend';
$string['incomplete'] = 'Unvollständig';
$string['completed'] = 'Vollendet';
$string['minutes_attended'] = 'Anwesenheitsminuten';
$string['last_updated'] = 'Letzte Aktualisierung';
$string['mic_duration'] = 'Dauer mit aktiviertem Mikrofon';
$string['webcam_duration'] = 'Dauer der Webcam-Aktivierung';
$string['participation_progress'] = 'Fortschritt der Teilnahme';
$string['attendance_duration'] = 'Anwesenheitsminuten';
$string['attendance_webcam_status'] = 'Webcam aktiviert';
$string['attendance_mic_status'] = 'Mikrofon aktiviert';
$string['attendance_talked_duration'] = 'Vortragsdauer';
$string['attendance_voted_poll'] = 'Bei der Umfrage abgestimmt';
$string['attendance_chat_messages'] = 'Gesendete Chatnachrichten';
$string['attendance_raise_hand'] = 'erhobene Hand';
$string['attendance_webcam_duration'] = 'Dauer der Webcam-Aktivierung';
$string['attendance_mic_duration'] = 'Dauer mit aktiviertem Mikrofon';
$string['attendance_whiteboard_annotated'] = 'Anmerkungen auf der Tafel';
$string['met'] = 'Met';
$string['required'] = 'Erforderlich';

// Status codes
$string['status_unknown_status'] = 'Vom Server wurde ein unbekannter Status zurückgegeben.';
$string['status_success'] = 'Operation erfolgreich abgeschlossen.';
$string['status_permission_denied'] = 'Zugriff verweigert.';
$string['status_not_found'] = 'Kein {$a} gefunden.';
$string['status_conflict'] = 'Diese Aktion konnte aufgrund eines Konflikts nicht abgeschlossen werden (z. B. existiert der Raum bereits).';
$string['status_invalid_token_or_signature'] = 'Das Anforderungstoken oder die Signatur ist ungültig.';
$string['status_invalid_api_key'] = 'Der angegebene API-Schlüssel ist ungültig. Bitte überprüfen Sie Ihre Plugin-Einstellungen.';
$string['status_internal_server_error'] = 'Auf dem PlugNmeet-Server ist ein interner Fehler aufgetreten.';
$string['status_invalid_parameters'] = 'Die angegebenen Informationen sind ungültig.';
$string['status_missing_required_parameter'] = 'Einige notwendige Informationen fehlen.';
$string['status_room_not_found'] = 'Der angegebene Raum wurde nicht gefunden.';
$string['status_user_not_found'] = 'Benutzerkonto nicht gefunden. Bitte stellen Sie sicher, dass Ihre API-Zugangsdaten korrekt sind und Ihr Abonnement aktiv ist.';
$string['status_user_blocked'] = 'Das Benutzerkonto ist gesperrt. Bitte kontaktieren Sie den Support.';
$string['status_user_not_active'] = 'Das Benutzerkonto ist nicht aktiv. Dies liegt wahrscheinlich an einem inaktiven oder abgelaufenen Abonnement.';
