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

$string['modulename'] = 'stekkerNontmoeten';
$string['modulename_help'] = 'De PlugNmeet-activiteitenmodule stelt je in staat om realtime webconferentiesessies te creëren en te beheren vanuit Moodle.';
$string['modulename_link'] = 'Mod/Plugnmeet/View';
$string['modulenameplural'] = 'stekkerNmeets';
$string['pluginadministration'] = 'plugNmeet-administratie';
$string['pluginname'] = 'stekkerNontmoeten';
$string['plugnmeet:addinstance'] = 'Voeg een nieuwe PlugNmeet-activiteit toe';
$string['plugnmeet:deleteartifacts'] = 'Artefacten verwijderen';
$string['plugnmeet:deleterecording'] = 'Opnames verwijderen';
$string['plugnmeet:downloadanalyticsreport'] = 'Download analyserapport';
$string['plugnmeet:downloadartifacts'] = 'Download artefacten';
$string['plugnmeet:downloadattendance'] = 'Download het aanwezigheidsrapport';
$string['plugnmeet:downloadrecordings'] = 'Download opnames';
$string['plugnmeet:manage'] = 'Beheer PlugNmeet-instellingen';
$string['plugnmeet:view'] = 'Bekijk de activiteit van PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Bekijk artefacten';
$string['plugnmeet:viewattendance'] = 'Bekijk het aanwezigheidsrapport';
$string['plugnmeet:viewattendancelist'] = 'Bekijk bezoekerslijst';
$string['plugnmeet:viewlivesessioninfo'] = 'Bekijk live sessie-informatie';
$string['plugnmeet:viewrecordings'] = 'Bekijk opnames';
$string['plugnmeetfieldset'] = 'Aangepaste voorbeeldfieldset';
$string['plugnmeetname'] = 'Aangepaste voorbeeldnaam';
$string['plugnmeetname_help'] = 'Hulp bij aangepaste voorbeelden';

// Admin Settings
$string['api_config'] = 'API-configuratie';
$string['server_url'] = 'PlugNmeet Server URL';
$string['server_url_desc'] = 'De basis-URL van je PlugNmeet-server (bijvoorbeeld https://pnm.example.com)';
$string['api_key'] = 'API-sleutel';
$string['api_key_desc'] = 'De API-sleutel die door je PlugNmeet-server wordt geleverd.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'Het API-geheim dat door je PlugNmeet-server wordt verstrekt.';
$string['guest_access_hdr'] = 'Gasttoegangsinstellingen';
$string['allow_guest_global'] = 'Sta gasttoegang wereldwijd toe';
$string['allow_guest_global_desc'] = 'Als het is uitgeschakeld, kan gastdeelname niet worden ingeschakeld voor een enkele vergaderruimte.';
$string['guest_link_expiration'] = 'Vervaldatum van gastlinks (uren)';
$string['guest_link_expiration_desc'] = 'Hoe lang een gastverbinding geldig blijft na generatie.';

$string['defaults'] = 'Technische standaarden';
$string['defaults_desc'] = 'Standaard technische instellingen voor nieuwe PlugNmeet-sessies.';
$string['enable_dynacast'] = 'Dynacast inschakelen';
$string['enable_dynacast_des'] = 'Gebruik Dynacast om videostreams te optimaliseren door alleen de meest recent actieve speaker te publiceren.';
$string['enable_simulcast'] = 'Simulcast inschakelen';
$string['enable_simulcast_des'] = 'Gebruik Simulcast om meerdere videokwaliteitslagen aan kijkers te bieden.';
$string['video_codec'] = 'Video Codec';
$string['video_codec_des'] = 'De standaard videocodec voor sessies.';
$string['default_webcam_resolution'] = 'Standaard webcamresolutie';
$string['default_webcam_resolution_des'] = 'De standaardresolutie voor webcams.';
$string['default_screen_share_resolution'] = 'Standaard schermdeelresolutie';
$string['default_screen_share_resolution_des'] = 'De standaardresolutie voor schermdelen.';
$string['default_audio_preset'] = 'Standaard audio-preset';
$string['default_audio_preset_des'] = 'De standaard audio-preset voor sessies.';

$string['branding'] = 'Branding en personalisatie';
$string['custom_logo'] = 'Aangepast logo';
$string['custom_logo_des'] = 'Upload een aangepast logo om in de vergaderruimte te tonen. Als het leeg is, wordt het standaard PlugNmeet-logo gebruikt.';
$string['custom_css_url'] = 'Aangepaste CSS-URL';
$string['custom_css_url_des'] = 'Geef een URL naar een extern CSS-bestand om het uiterlijk en de sfeer van de vergaderruimte aan te passen.';
$string['primary_color'] = 'Primaire kleur';
$string['primary_color_des'] = 'De primaire kleur voor knoppen en highlights.';
$string['secondary_color'] = 'Secundaire kleur';
$string['secondary_color_des'] = 'De secundaire kleur voor UI-elementen.';
$string['background_color'] = 'Achtergrondkleur';
$string['background_color_des'] = 'Interface achtergrondkleur';
$string['background_image'] = 'Achtergrondafbeelding';
$string['background_image_des'] = 'Moet 1920X1080 groot zijn voor het beste resultaat.';
$string['header_color'] = 'Header Kleur';
$string['header_color_des'] = 'Interface Header Kleur';
$string['footer_color'] = 'Voettekst Kleur';
$string['footer_color_des'] = 'Interface Footer Kleur';
$string['left_color'] = 'Kleur linkerkant';
$string['left_color_des'] = 'Kleur linkerzijbalk';
$string['side_panel_bg_color'] = 'Achtergrondkleur van het zijpaneel';
$string['side_panel_bg_color_des'] = 'Achtergrondkleur rechter zijpaneel';
$string['copyright_text'] = 'Auteursrechtelijke tekst';
$string['copyright_text_des'] = 'De copyrighttekst om te tonen in de voettekst van de vergaderruimte. HTML is toegestaan.';
$string['client_load'] = 'Clientbelasting van';
$string['client_load_des'] = 'Standaard: lokaal';
$string['remote'] = 'Afgelegen';
$string['local'] = 'Lokaal';

$string['client_side'] = 'Klantopties';
$string['client_load_mode'] = 'Client Load Mode';
$string['client_load_mode_desc'] = 'Kies of je de webclient vanaf de externe server laadt of vanaf een lokale kopie.';
$string['remote'] = 'Afstandsbediening';
$string['local'] = 'Lokaal';
$string['client_download_url'] = 'Client Download URL';
$string['client_download_url_des'] = 'Als je de "Local" laadmodus gebruikt, geef dan de URL naar het client.zip-bestand.';
$string['update_client_btn'] = 'Werk de lokale client bij';
$string['update_client_btn_label'] = 'Nu updaten';

$string['yes'] = 'Ja';
$string['no'] = 'Nee';
$string['recordings'] = "Opnamen";
$string['recording'] = "Opname";
$string['artifacts'] = "Kamerartefacten";
$string['attendance'] = "Aanwezigheidsrapport";
$string['artifact'] = "Artefact";
$string['room_subject'] = 'kamer';
$string['user_subject'] = 'Gebruiker';

// mod_form.php
$string['roomtitle'] = 'Kamertitel';
$string['welcome_message'] = 'Welkomstbericht';
$string['welcome_message_help'] = 'Alle hier ingevoerde tekst verschijnt als het eerste bericht in de openbare chat wanneer gebruikers de kamer binnenkomen. Dit is handig om instructies, links of belangrijke informatie te delen met deelnemers terwijl ze binnenkomen.';
$string['max_participants'] = 'Maximaal aantal deelnemers';
$string['max_participants_help'] = 'Stel deze waarde in om te beperken hoeveel gebruikers tegelijk aan de sessie kunnen deelnemen. Zet het op 0 om onbeperkt aantal deelnemers toe te staan, wat betekent dat er geen beperking is op hoeveel gebruikers er mogen deelnemen.';
$string['room_features'] = 'Kamerkenmerken';
$string['recording_features'] = 'Opnamefuncties';
$string['chat_features'] = 'Chatfuncties';
$string['other_features'] = 'Andere kenmerken';
$string['e2ee_features'] = 'End-to-end encryptie';
$string['insights_features'] = 'Inzichten & AI-functies';
$string['defaultlock'] = 'Standaard Lock-instellingen';
$string['advanced_completion'] = 'Gevorderde voltooiing';
$string['available'] = 'Beschikbaar vanaf';
$string['deadline'] = 'Beschikbaar tot en met';
$string['err_deadline_before_available'] = 'De "Beschikbaar tot" datum kan niet vóór de "Beschikbaar van" datum zijn.';
$string['error_analytics_required_for_completion'] = 'Enable Analytics moet worden gecontroleerd als er voltooiingscriteria zijn vastgesteld.';

$string['allow_webcams'] = 'Webcams toestaan';
$string['allow_webcams_help'] = 'Laat deelnemers hun webcams gebruiken.';
$string['mute_on_start'] = 'Demp bij Start';
$string['mute_on_start_help'] = 'Zet automatisch alle deelnemers op mute wanneer ze de sessie joinen.';
$string['allow_screen_share'] = 'Schermdeling toestaan';
$string['allow_screen_share_help'] = 'Laat deelnemers hun scherm delen.';
$string['allow_rtmp'] = 'RTMP-streaming toestaan';
$string['allow_rtmp_help'] = 'Laat moderators de sessie streamen naar een RTMP-eindpunt.';
$string['allow_raise_hand'] = 'Laat Hand opsteken';
$string['allow_raise_hand_help'] = 'Laat deelnemers hun hand opsteken.';
$string['admin_only_webcams'] = 'Alleen voor beheerders webcams';
$string['admin_only_webcams_help'] = 'Alleen moderators hun webcams gebruiken.';
$string['allow_view_other_webcams'] = 'Andere webcams bekijken';
$string['allow_view_other_webcams_help'] = 'Laat deelnemers de webcams van andere deelnemers bekijken. Als ze uitgeschakeld zijn, zien ze alleen de webcams van moderators.';
$string['allow_view_other_users_list'] = 'Lijst met andere gebruikers toestaan te bekijken';
$string['allow_view_other_users_list_help'] = 'Laat deelnemers de lijst van andere deelnemers zien.';
$string['room_duration'] = 'Kamerduur (minuten)';
$string['room_duration_help'] = 'Bepaalt hoe lang de kamer open kan blijven voordat hij automatisch sluit. Voer 0 in als je geen tijdslimiet wilt instellen, zodat de kamer actief blijft zonder beperkingen.';
$string['moderator_join_first'] = 'Moderator Eerst Lid Je Aan';
$string['moderator_join_first_help'] = 'Wanneer ingeschakeld, start de sessie niet en kan niemand deelnemen totdat een moderator (zoals een docent) zich eerst aanmeldt. Deelnemers blijven op de Moodle-activiteitenpagina en mogen de ruimte of een wachtruimte niet betreden. Dit is anders dan de Wachtkamer-optie, waarbij gebruikers nog steeds kunnen deelnemen en kunnen wachten.';
$string['enable_analytics'] = 'Enable Analytics';
$string['enable_analytics_help'] = 'Genereer analyses voor de sessie. Opmerking: Dit moet ingeschakeld zijn als er een voltooiingscriterium is ingesteld.';
$string['allow_virtual_bg'] = 'Sta virtuele achtergronden toe';
$string['allow_virtual_bg_help'] = 'Laat deelnemers virtuele achtergronden gebruiken.';
$string['auto_gen_user_id'] = 'Automatisch Genereer Gebruikers-ID';
$string['auto_gen_user_id_help'] = 'Wanneer ingeschakeld, maakt het systeem een nieuwe ID aan zodat dezelfde gebruiker vanaf meerdere apparaten kan joinen—bijvoorbeeld wanneer een docent via een tablet tekent op het whiteboard terwijl hij een pc gebruikt voor camera en microfoon; Toch is het wel <b>Aanbevolen</b> om dit uit te houden zodat de Moodle-gebruikers-ID wordt gebruikt en dubbele joins worden voorkomen.';

$string['allow_recording'] = 'Opname toestaan';
$string['allow_recording_help'] = 'Laat de sessie worden opgenomen.';
$string['allow_cloud_recording'] = 'Toestaan van cloudopname';
$string['allow_cloud_recording_help'] = 'Laat de sessie in de cloud worden opgenomen.';
$string['enable_auto_cloud_recording'] = 'Schakel automatische cloudopname in';
$string['enable_auto_cloud_recording_help'] = 'Begin automatisch met opnemen zodra de sessie begint.';
$string['allow_local_recording'] = 'Lokale opname toestaan';
$string['allow_local_recording_help'] = 'Laat deelnemers de sessie lokaal opnemen.';

$string['allow_chat'] = 'Sta chat toe';
$string['allow_chat_help'] = 'Schakel de openbare chatfunctie in.';
$string['allow_file_upload'] = 'Bestand uploaden toestaan';
$string['allow_file_upload_help'] = 'Laat deelnemers bestanden uploaden in de chat.';

$string['allow_shared_notepad'] = 'Sta gedeeld notitieblok toe';
$string['allow_shared_notepad_help'] = 'Laat deelnemers het gedeelde notitieblok gebruiken.';
$string['allow_whiteboard'] = 'Whiteboard toestaan';
$string['allow_whiteboard_help'] = 'Laat deelnemers het whiteboard gebruiken.';
$string['allowed_external_media_player'] = 'Externe mediaspeler toestaan';
$string['allowed_external_media_player_help'] = 'Laat deelnemers externe media afspelen (bijvoorbeeld YouTube-video\'s).';
$string['activate_waiting_room'] = 'Activeer wachtruimte';
$string['activate_waiting_room_help'] = 'Activeer de wachtruimte voor deze sessie.';
$string['waiting_room_msg'] = 'Wachtkamerbericht';
$string['waiting_room_msg_help'] = 'Dit bericht wordt aan gebruikers getoond terwijl ze wachten op toegang tot de kamer. Gebruik het om instructies, verwachtingen of nuttige informatie te delen voordat de sessie begint.';
$string['allow_breakout_rooms'] = 'Sta breakoutruimtes toe';
$string['allow_breakout_rooms_help'] = 'Laat moderators breakoutrooms creëren.';
$string['allowed_number_rooms'] = 'Toegestan aantal breakoutruimtes';
$string['allow_display_external_link_features'] = 'Externe link weergeven toestaan';
$string['allow_display_external_link_features_help'] = 'Laat moderators een externe link aan alle deelnemers tonen.';
$string['allow_ingress_features'] = 'Toestaan van Ingang';
$string['allow_ingress_features_help'] = 'Laat toegang tot de sessie toe.';
$string['allow_polls'] = 'Toestaan-polls';
$string['allow_polls_help'] = 'Laat moderators polls maken.';
$string['sip_dial_in_features_is_allow'] = 'SIP inbelen mogelijk';
$string['sip_dial_in_features_is_allow_help'] = 'Laat deelnemers deelnemen aan de sessie via SIP inbel.';

$string['enable_end_to_end_encryption_features'] = 'End-to-end-encryptie inschakelen';
$string['enable_end_to_end_encryption_features_help'] = 'Schakel end-to-end encryptie in voor de sessie.';
$string['enabled_self_insert_encryption_key'] = 'Sta zelf-invoeging van de encryptiesleutel toe';
$string['enabled_self_insert_encryption_key_help'] = 'Laat deelnemers hun eigen encryptiesleutel invoeren.';
$string['included_e2ee_chat_messages'] = 'Voeg chatberichten toe in E2EE';
$string['included_e2ee_chat_messages_help'] = 'Neem chatberichten op in de end-to-end encryptie.';
$string['included_e2ee_whiteboard'] = 'Neem het whiteboard op in E2EE';
$string['included_e2ee_whiteboard_help'] = 'Voeg het whiteboard toe aan de end-to-end encryptie.';

$string['insights_features_is_allow'] = 'Laat inzichten toe';
$string['insights_features_is_allow_help'] = 'Laat de inzichten genereren voor deze sessie.';
$string['insights_transcription_features_is_allow'] = 'Transcriptie toestaan';
$string['insights_transcription_features_is_allow_help'] = 'Laat de sessie worden getranscribeerd.';
$string['insights_transcription_features_is_allow_translation'] = 'Transcriptievertaling mogelijk';
$string['insights_transcription_features_is_allow_translation_help'] = 'Laat de transcriptie worden vertaald.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Transcriptie spraaksynthese toestaan';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Laat de transcriptie hardop worden voorgelezen.';
$string['insights_chat_translation_features_is_allow'] = 'Sta chatvertaling toe';
$string['insights_chat_translation_features_is_allow_help'] = 'Laat chatberichten worden vertaald.';
$string['insights_ai_features_is_allow'] = 'Sta AI-functies toe';
$string['insights_ai_features_is_allow_help'] = 'Laat AI-functies in deze sessie worden gebruikt.';
$string['insights_ai_text_chat_features_is_allow'] = 'Sta AI-tekstchat toe';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Laat AI in de chat worden gebruikt.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Sta AI-vergaderingssamenvatting toe';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Laat de vergadering worden samengevat door AI.';

$string['lock_microphone'] = 'Vergrendelmicrofoon';
$string['lock_microphone_help'] = 'Schakel standaard alle microfoons van de deelnemers uit.';
$string['lock_webcam'] = 'Vergrendel webcam';
$string['lock_webcam_help'] = 'Schakel standaard alle webcams van de deelnemers uit.';
$string['lock_screen_sharing'] = 'Vergrendelscherm delen';
$string['lock_screen_sharing_help'] = 'Schakel automatisch schermdelen uit voor alle deelnemers.';
$string['lock_whiteboard'] = 'Lockwhiteboard';
$string['lock_whiteboard_help'] = 'Schakel het whiteboard standaard uit voor alle deelnemers.';
$string['lock_shared_notepad'] = 'Vergrendel gedeeld notitieblok';
$string['lock_shared_notepad_help'] = 'Schakel standaard gedeelde notities uit voor alle deelnemers.';
$string['lock_chat'] = 'Lock Chat';
$string['lock_chat_help'] = 'Schakel standaard de openbare chat uit voor alle deelnemers.';
$string['lock_chat_send_message'] = 'Chat vergrendelen Stuur Bericht';
$string['lock_chat_send_message_help'] = 'Schakel het verzenden van berichten in de publieke chat standaard uit voor alle deelnemers.';
$string['lock_chat_file_share'] = 'Sluit chatbestanddeling';
$string['lock_chat_file_share_help'] = 'Schakel standaard het delen van bestanden uit in de openbare chat voor alle deelnemers.';
$string['lock_private_chat'] = 'Sluit Privéchat';
$string['lock_private_chat_help'] = 'Schakel standaard de privéchat uit voor alle deelnemers.';

$string['completion_minutes'] = 'Notulen bijgewoond';
$string['completion_minutes_help'] = 'Vereis dat de gebruiker een bepaald aantal minuten in de sessie zit.';
$string['completion_minutes_desc'] = 'De gebruiker moet de sessie minstens bijwonen {$a} minuten.';
$string['completion_raised_hand'] = 'Opgeheven Hand';
$string['completion_raised_hand_help'] = 'Vereis dat de gebruiker minstens één keer zijn hand opsteekt.';
$string['completion_chat_messages'] = 'Chatberichten verzonden';
$string['completion_chat_messages_help'] = 'Vereis dat de gebruiker minstens één chatbericht verstuurt.';
$string['completion_webcam_enabled'] = 'Webcam ingeschakeld';
$string['completion_webcam_enabled_help'] = 'Vereis dat de gebruiker minstens één keer zijn webcam inschakelt.';
$string['completion_webcam_duration'] = 'Webcam-ingeschakelde duur (minuten)';
$string['completion_webcam_duration_help'] = 'Vereis dat de gebruiker zijn webcam een bepaald aantal minuten aanstaat.';
$string['completion_webcam_duration_desc'] = 'De gebruiker moet minstens zijn webcam ingeschakeld hebben {$a} minuten.';
$string['completion_mic_enabled'] = 'Microfoon ingeschakeld';
$string['completion_mic_enabled_help'] = 'Vereis dat de gebruiker minstens één keer zijn microfoon inschakelt.';
$string['completion_mic_duration'] = 'Duur van microfoon (minuten)';
$string['completion_mic_duration_help'] = 'Vereis dat de gebruiker zijn microfoon een bepaald aantal minuten aanstaat.';
$string['completion_mic_duration_desc'] = 'De gebruiker moet zijn microfoon minstens ingeschakeld hebben {$a} minuten.';
$string['completion_talk_duration'] = 'Gespreksduur (minuten)';
$string['completion_talk_duration_help'] = 'Vereis dat de gebruiker een bepaald aantal minuten praat.';
$string['completion_talk_duration_desc'] = 'De gebruiker moet minstens een praatje hebben {$a} minuten.';
$string['completion_poll_voted'] = 'Stemde in peiling';
$string['completion_poll_voted_help'] = 'Vereis dat de gebruiker in ten minste één poll stemt.';
$string['completion_whiteboard_annotated'] = 'Geanonoteerd op whiteboard';
$string['completion_whiteboard_annotated_help'] = 'Vereis dat de gebruiker op het whiteboard aantekeningen maakt.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Slaat sessiestatistieken op zodat gebruikers de voltooiing van activiteiten kunnen bepalen.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'De ID van de gebruiker.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'JSON-gecodeerde sessiegegevens (notulen, chatberichten, enz.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'De tijd waarin de statistieken voor het laatst werden bijgewerkt.';

// view.php
$string['join_session'] = 'Sluit aan bij de sessie';
$string['start_session'] = 'Start sessie';
$string['end_session'] = 'Einde van de sessie';
$string['participants'] = 'Deelnemers';
$string['is_recording'] = 'Is Opname';
$string['is_active'] = 'Is actief';
$string['room_info'] = 'Live sessiedetails';
$string['participants_info'] = 'Live deelnemers';
$string['room_id'] = 'Kamer-ID';
$string['creation_time'] = 'Scheppingstijd';
$string['name'] = 'Naam';
$string['user_id'] = 'Gebruikers-ID';
$string['is_admin'] = 'Is administratie';
$string['is_presenter'] = 'Is presentator';
$string['joined_at'] = 'Lid van At';
$string['moderator_not_joined'] = 'Een moderator moet de sessie starten voordat je kunt deelnemen.';
$string['session_available_from'] = 'Beschikbaar via: {$a}';
$string['session_available_until'] = 'Beschikbaar tot: {$a}';
$string['session_not_started_yet'] = 'Deze sessie is nog niet begonnen.';
$string['session_ended'] = 'Deze sessie is afgelopen.';
$string['allow_guest'] = 'Sta gastgebruikers toe';
$string['allow_guest_help'] = 'Wanneer ingeschakeld, wordt er een beveiligde deelbare link gegenereerd zodat externe gebruikers (zoals gastdocenten of deelnemers zonder Moodle-account) aan de sessie kunnen deelnemen; Een beheerder kan deze link bekijken en delen.';
$string['guest_join_link'] = 'Link voor gast';
$string['guest_join_link_help'] = 'Deel deze link met externe deelnemers. Deze link blijft geldig voor {$a} uren. Elke herlaadpagina genereert een nieuwe link, maar eerder gedeelde links blijven geldig tot hun oorspronkelijke vervaldatum.';
$string['copy_link'] = 'Kopieer link';
$string['link_copied'] = 'Link gekopieerd naar klembord.';
$string['guest_join_title'] = 'Sluit je aan bij de vergadering als gast';
$string['enter_display_name'] = 'Voer je weergavenaam in';
$string['join_as_guest'] = 'Sluit je aan bij de vergadering';
$string['guest_access_denied'] = 'Gasttoegang is niet ingeschakeld voor deze vergadering.';
$string['invalid_guest_token'] = 'Ongeldige of verlopen gast-aansluitingstoken.';
$string['guest_link_expired'] = 'Deze link voor gastdeelname is verlopen.';
$string['error_joining_session'] = 'Er was een foutmelding tijdens de sessie: {$a}';
$string['already_logged_in'] = 'Je bent al ingelogd bij Moodle. Je kunt direct deelnemen aan de sessie vanaf deze activiteitenpagina.';
$string['total_webcams'] = 'Totaal aantal webcams';
$string['total_mics'] = 'Totaal aantal microfoons';
$string['total_screen_shares'] = 'Totaal aantal schermdelen';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Microfoons';
$string['screenshares'] = 'Schermdelen';

// Events
$string['event_room_started'] = 'De kamer is begonnen';
$string['event_room_ended'] = 'Kamer voorbij';
$string['event_room_created'] = 'Kamer gemaakt';
$string['event_session_ended'] = 'Sessie beëindigd';
$string['event_participant_joined'] = 'Deelnemer toegetreden';
$string['event_participant_left'] = 'Deelnemer vertrok';
$string['event_artifact_created'] = 'Artefact gemaakt';
$string['event_recording_proceeded'] = 'Opnameklaar';
$string['event_plugin_error'] = 'PlugNmeet-fout';
$string['event_track_published'] = 'Track gepubliceerd';
$string['event_track_unpublished'] = 'Track ongepubliceerd';

// Notifications
$string['messageprovider:recording_ready'] = 'Meldingen voor gereedstaande opnames';
$string['messageprovider:artifact_ready'] = 'Meldingen voor gereedstaande artefacten';
$string['recording_ready_notification_subject'] = 'Opname klaar: {$a}';
$string['recording_ready_notification_fullmessage'] = 'De opname voor de sessie "{$a->roomname}" is nu klaar en verwerkt. Je kunt het hier bekijken: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>De opname voor de sessie <strong>"{$a->roomname}"</strong> is nu klaar en verwerkt.</p><p><a href="{$a->url}">Klik hier om de opname te bekijken.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Opname klaar voor {$a}';
$string['artifact_ready_notification_subject'] = 'Artefact-klaar: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Een nieuw artefact ({$a->type}) voor de sessie "{$a->roomname}" nu beschikbaar. Je kunt het hier bekijken: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Een nieuw artefact ({$a->type}) voor de sessie <strong>"{$a->roomname}"</strong> nu beschikbaar.</p><p><a href="{$a->URL}">Klik hier om de details van het artefact te bekijken.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefact klaar voor {$a}';

// recordings.php
$string['no_recordings'] = 'Geen opnames gevonden.';
$string['recording_id'] = 'Opname-ID';
$string['room_sid'] = 'Kamer SID';
$string['file_size'] = 'Bestandsgrootte';
$string['created_at'] = 'Gemaakt bij';
$string['actions'] = 'Acties';
$string['view'] = 'Bekijken';
$string['play'] = 'Spelen';
$string['download'] = 'Downloaden';
$string['delete'] = 'Verwijderen';
$string['delete_confirm'] = 'Weet je zeker dat je dit wilt verwijderen?';
$string['delete_success'] = 'Succesvol verwijderd.';
$string['recording_details'] = 'Opnamegegevens';
$string['recording_creation_time'] = 'Tijd voor het maken van opnames';
$string['room_creation_time'] = 'Sessie-aanmaaktijd';
$string['back_to_list'] = 'Terug naar de lijst';
$string['browser_not_support_video'] = 'Je browser ondersteunt de videotag niet.';
$string['room_title'] = 'Kamertitel';
$string['total_participants'] = 'Totaal aantal deelnemers';
$string['session_started_at'] = 'Sessie Begonnen Op';
$string['session_ended_at'] = 'Sessie Eindigd Op';

// artifacts.php
$string['no_artifacts'] = 'Geen artefacten gevonden.';
$string['artifact_id'] = 'Artefact-ID';
$string['type'] = 'Type';
$string['artifact_details'] = 'Artefactdetails';
$string['no_permission'] = 'U heeft geen toestemming om deze pagina te bekijken.';
$string['token_usage'] = 'Gebruik van tokens';
$string['duration_usage'] = 'Duur Gebruik';
$string['character_count_usage'] = 'Gebruik van het aantal tekens';
$string['estimated_cost'] = 'Geschatte kosten';
$string['file_path'] = 'Bestandspad';
$string['mime_type'] = 'Mime Type';
$string['created_at'] = 'Gemaakt bij';

// Analytics strings
$string['download_excel_report'] = 'Download Excel-rapport';
$string['download_raw_json'] = 'Download ruwe data';
$string['room_summary'] = 'Kameroverzicht';
$string['users_summary'] = 'Gebruikersoverzicht';
$string['see_excel_report'] = 'Zie Excel-rapport voor details';
$string['error_loading_analytics'] = 'Foutlaad-analysegegevens: {$a}';
$string['error_generating_excel'] = 'Excel-rapport voor foutopwekkend: {$a}';

$string['analytics_room_room_id'] = 'Kamer-ID';
$string['analytics_room_room_title'] = 'Kamertitel';
$string['analytics_room_room_creation'] = 'Tijd voor het maken van kamers';
$string['analytics_room_room_ended'] = 'Tijd voor het einde van de kamer';
$string['analytics_room_room_duration'] = 'Duur van de kamer';
$string['analytics_room_room_total_users'] = 'Totaal aantal deelnemers';
$string['analytics_room_enabled_e2ee'] = 'E2EE ingeschakeld';
$string['analytics_room_recording_status'] = 'Opnamestatus-telling';
$string['analytics_room_rtmp_status'] = 'RTMP Statustelling';
$string['analytics_room_speech_service_total_usage'] = 'Taaldienst Totaal Gebruik';
$string['analytics_room_external_media_player_status'] = 'Aantal externe mediaspelerstatusen';
$string['analytics_room_etherpad_status'] = 'Etherpad Status-telling';
$string['analytics_room_external_display_link_status'] = 'Externe schermlinkstatus Count';
$string['analytics_room_ingress_created'] = 'Ingang Aangemaakt Graaf';
$string['analytics_room_breakout_room'] = 'Aantal breakoutkamers';

$string['analytics_user_name'] = 'Naam';
$string['analytics_user_id'] = 'Gebruikers-ID';
$string['analytics_user_ex_id'] = 'Gebruikers-ID';
$string['analytics_user_is_admin'] = 'Is administratie';
$string['analytics_user_duration'] = 'Duur';
$string['analytics_user_joined'] = 'Lid van At';
$string['analytics_user_left'] = 'Links bij';
$string['analytics_user_mic_status'] = 'Wijzigingen in microfoonstatus';
$string['analytics_user_mic_muted'] = 'Microfoon Gedempte Telling';
$string['analytics_user_mic_duration'] = 'Microfoon-actieve duur';
$string['analytics_user_talked'] = 'Praatte Graaf';
$string['analytics_user_talked_duration'] = 'Gesproken Duur';
$string['analytics_user_webcam_status'] = 'Veranderingen in webcamstatus';
$string['analytics_user_webcam_duration'] = 'Webcam-actieve duur';
$string['analytics_user_raise_hand'] = 'Raise Hand Count';
$string['analytics_user_voted_poll'] = 'Stemopname';
$string['analytics_user_whiteboard_annotated'] = 'Whiteboard Geannoteerde Telling';
$string['analytics_user_whiteboard_files'] = 'Aantal whiteboardbestanden:';
$string['analytics_user_screen_share_status'] = 'Wijzigingen in de status van schermdelen';
$string['analytics_user_speech_services_usage'] = 'Gebruik van spraakdiensten';
$string['analytics_user_public_chat'] = 'Openbare chatberichten';
$string['analytics_user_private_chat'] = 'Privéchatberichten';
$string['analytics_user_chat_files'] = 'Gedeelde chatbestanden';
$string['analytics_user_interface_invisible'] = 'Interface Onzichtbare Telling';
$string['analytics_user_connection_quality'] = 'Verbindingskwaliteit';
$string['analytics_user_connection_quality_excellent'] = 'Uitstekend';
$string['analytics_user_connection_quality_good'] = 'Goed';
$string['analytics_user_connection_quality_poor'] = 'Arme';

$string['users_info'] = 'Gebruikersinformatie';
$string['polls'] = 'Peilingen';
$string['question'] = 'Vraag';
$string['options'] = 'Opties';
$string['file_name'] = 'Bestandsnaam';
$string['checkcompletiontask'] = 'Controleer plugNmeet-voltooiing';

// attendance.php
$string['attendance_report'] = 'Aanwezigheidsrapport';
$string['status'] = 'Status';
$string['present'] = 'Heden';
$string['absent'] = 'Afwezig';
$string['incomplete'] = 'Onvolledig';
$string['completed'] = 'Voltooid';
$string['minutes_attended'] = 'Notulen bijgewoond';
$string['last_updated'] = 'Laatst bijgewerkt';
$string['mic_duration'] = 'Duur van microfoon';
$string['webcam_duration'] = 'Webcam-actieve duur';
$string['participation_progress'] = 'Participatievoortgang';
$string['attendance_duration'] = 'Notulen bijgewoond';
$string['attendance_webcam_status'] = 'Webcam ingeschakeld';
$string['attendance_mic_status'] = 'Microfoon ingeschakeld';
$string['attendance_talked_duration'] = 'Duur van het gesprek';
$string['attendance_voted_poll'] = 'Stemde in peiling';
$string['attendance_chat_messages'] = 'Chatberichten verzonden';
$string['attendance_raise_hand'] = 'Opgeheven Hand';
$string['attendance_webcam_duration'] = 'Webcam-actieve duur';
$string['attendance_mic_duration'] = 'Duur van microfoon';
$string['attendance_whiteboard_annotated'] = 'Geanonoteerd op whiteboard';
$string['met'] = 'Met';
$string['required'] = 'Verplicht';

// Status codes
$string['status_unknown_status'] = 'Er werd een onbekende status teruggegeven van de server.';
$string['status_success'] = 'Operatie succesvol voltooid.';
$string['status_permission_denied'] = 'Toestemming geweigerd.';
$string['status_not_found'] = 'Nee {$a} gevonden.';
$string['status_conflict'] = 'Deze actie kon niet worden uitgevoerd vanwege een conflict (bijvoorbeeld de kamer kan al bestaan).';
$string['status_invalid_token_or_signature'] = 'Het verzoektoken of de handtekening is ongeldig.';
$string['status_invalid_api_key'] = 'De verstrekte API-sleutel is ongeldig. Controleer alsjeblieft je plugin-instellingen.';
$string['status_internal_server_error'] = 'De PlugNmeet-server kreeg een interne fout.';
$string['status_invalid_parameters'] = 'De verstrekte informatie is ongeldig.';
$string['status_missing_required_parameter'] = 'Er ontbreekt een deel van de benodigde informatie.';
$string['status_room_not_found'] = 'De opgegeven kamer werd niet gevonden.';
$string['status_user_not_found'] = 'Gebruikersaccount niet gevonden. Zorg ervoor dat uw API-gegevens correct zijn en uw abonnement actief is.';
$string['status_user_blocked'] = 'Gebruikersaccount is geblokkeerd. Neem contact op met de support.';
$string['status_user_not_active'] = 'Het gebruikersaccount is niet actief. Dit komt waarschijnlijk door een inactief of verlopen abonnement.';
