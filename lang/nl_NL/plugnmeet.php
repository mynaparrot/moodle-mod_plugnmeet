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
$string['modulename_help'] = 'Met de PlugNmeet-activiteitsmodule kunt u realtime webconferentiesessies creëren en beheren vanuit Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'plugNmeet-administratie';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Voeg een nieuwe PlugNmeet-activiteit toe';
$string['plugnmeet:deleteartifacts'] = 'Artefacten verwijderen';
$string['plugnmeet:deleterecording'] = 'Opnames verwijderen';
$string['plugnmeet:downloadanalyticsreport'] = 'Download het analyserapport';
$string['plugnmeet:downloadartifacts'] = 'Download artefacten';
$string['plugnmeet:downloadattendance'] = 'Download het aanwezigheidsrapport';
$string['plugnmeet:downloadrecordings'] = 'Opnames downloaden';
$string['plugnmeet:manage'] = 'PlugNmeet-instellingen beheren';
$string['plugnmeet:view'] = 'Bekijk de PlugNmeet-activiteit';
$string['plugnmeet:viewactiveroomsreport'] = 'Bekijk het rapport met actieve kamers';
$string['plugnmeet:viewartifacts'] = 'Bekijk artefacten';
$string['plugnmeet:viewattendance'] = 'Bekijk het aanwezigheidsrapport';
$string['plugnmeet:viewattendancelist'] = 'Bekijk de deelnemerslijst';
$string['plugnmeet:viewlivesessioninfo'] = 'Bekijk de informatie over de live sessie.';
$string['plugnmeet:viewrecordings'] = 'Bekijk opnames';
$string['plugnmeetfieldset'] = 'Aangepaste voorbeeld-veldset';
$string['plugnmeetname'] = 'Aangepaste voorbeeldnaam';
$string['plugnmeetname_help'] = 'Hulp bij aangepaste voorbeelden';

// Admin Settings
$string['api_config'] = 'API-configuratie';
$string['server_url'] = 'PlugNmeet-server-URL';
$string['server_url_desc'] = 'De basis-URL van uw PlugNmeet-server (bijv. https://pnm.example.com).';
$string['api_key'] = 'API-sleutel';
$string['api_key_desc'] = 'De unieke API-sleutel die u van uw PlugNmeet-server ontvangt.';
$string['api_secret'] = 'API-geheim';
$string['api_secret_desc'] = 'Het API-geheim dat door uw PlugNmeet-server wordt verstrekt, wordt gebruikt voor veilige authenticatie.';
$string['guest_access_hdr'] = 'Instellingen voor gasttoegang';
$string['allow_guest_global'] = 'Toegang voor gasten wereldwijd toestaan';
$string['allow_guest_global_desc'] = 'Fungeert als een hoofdschakelaar. Indien uitgeschakeld, zien docenten de optie om gastdeelname toe te staan niet bij het aanmaken of bewerken van activiteiten.';
$string['guest_link_expiration'] = 'Vervaldatum gastlink (uren)';
$string['guest_link_expiration_desc'] = 'Bepaalt hoeveel uur een gasttoegangslink actief blijft nadat een docent deze heeft aangemaakt.';
$string['defaults'] = 'Technische standaardwaarden';
$string['defaults_desc'] = 'Standaard technische configuraties worden toegepast op elke nieuwe PlugNmeet-sessie.';
$string['enable_dynacast'] = 'Dynacast inschakelen';
$string['enable_dynacast_des'] = 'Optimaliseert de prestaties door videolagen die niet door deelnemers worden bekeken dynamisch te pauzeren. Dit vermindert het CPU- en bandbreedtegebruik aan de serverzijde aanzienlijk. **Let op:** Deze functie wordt automatisch ingeschakeld bij gebruik van SVC-codecs (VP9/AV1) en is vereist voor simulcast met meerdere codecs.';
$string['enable_simulcast'] = 'Simulcast inschakelen';
$string['enable_simulcast_des'] = 'Biedt meerdere lagen voor videokwaliteit om een vloeiende ervaring te garanderen voor gebruikers met een zwakke internetverbinding.';
$string['video_codec'] = 'Videocodec';
$string['video_codec_des'] = 'De coderingsstandaard voor videotransmissie. **VP8** wordt aanbevolen voor WebRTC omdat het de beste balans biedt tussen kwaliteit en lage latentie. **Waarschuwing:** Niet alle browsers ondersteunen elke codec; zorg ervoor dat uw gebruikers moderne browsers gebruiken als u VP9 of H.265 gebruikt.';
$string['default_webcam_resolution'] = 'Standaard webcamresolutie';
$string['default_webcam_resolution_des'] = 'De initiële resolutie-instelling voor de camera\'s van de deelnemers.';
$string['default_screen_share_resolution'] = 'Standaard schermdelingsresolutie';
$string['default_screen_share_resolution_des'] = 'De initiële resolutie-instelling voor schermdeling.';
$string['default_audio_preset'] = 'Standaard audio-voorinstelling';
$string['default_audio_preset_des'] = 'Het audiokwaliteitsprofiel is geoptimaliseerd voor de sessie.';

$string['branding'] = 'Merkidentiteit en personalisatie';
$string['custom_logo'] = 'Aangepast logo';
$string['custom_logo_des'] = 'Upload je logo naar de vergaderruimte. Als je dit veld leeg laat, wordt het standaard PlugNmeet-logo gebruikt.';
$string['custom_css_url'] = 'Aangepaste CSS-URL';
$string['custom_css_url_des'] = 'Koppel een extern .css-bestand om de interfacestijlen te overschrijven of aan te passen.';
$string['primary_color'] = 'Primaire kleur';
$string['primary_color_des'] = 'De belangrijkste accentkleur die wordt gebruikt voor knoppen, actieve statussen en markeringen.';
$string['secondary_color'] = 'Secundaire kleur';
$string['secondary_color_des'] = 'De accentkleur die wordt gebruikt voor secundaire UI-elementen.';
$string['background_color'] = 'Achtergrondkleur';
$string['background_color_des'] = 'De primaire achtergrondkleur van de interface.';
$string['background_image'] = 'Achtergrondafbeelding';
$string['background_image_des'] = 'Achtergrondafbeelding. Voor het beste resultaat kunt u een afbeelding van 1920x1080 pixels gebruiken.';
$string['header_color'] = 'Koptekstkleur';
$string['header_color_des'] = 'Achtergrondkleur voor de bovenste navigatiebalk.';
$string['footer_color'] = 'Voettekstkleur';
$string['footer_color_des'] = 'Achtergrondkleur voor de onderste werkbalk.';
$string['left_color'] = 'Linkerzijde kleur';
$string['left_color_des'] = 'Achtergrondkleur voor de navigatiebalk aan de linkerkant.';
$string['side_panel_bg_color'] = 'Achtergrondkleur van het zijpaneel';
$string['side_panel_bg_color_des'] = 'Achtergrondkleur voor de panelen aan de rechterkant (Chat en Deelnemerslijst).';
$string['copyright_text'] = 'Auteursrechttekst';
$string['copyright_text_des'] = 'De merknaamtekst wordt weergegeven in de voettekst van de instellingen. HTML wordt ondersteund voor links of aangepaste opmaak.';
$string['client_load'] = 'Clientlaadmethode';
$string['client_load_des'] = 'Kies **Extern** (aanbevolen) voor een naadloze, gepersonaliseerde ervaring die direct in uw Moodle-pagina is geïntegreerd. Kies **Doorverwijzen** om de standaard plugNmeet-interface te gebruiken; houd er rekening mee dat gebruikers uw site verlaten en dat uw aangepaste branding mogelijk niet wordt toegepast.';
$string['remote'] = 'Op afstand (ingebed)';
$string['redirect'] = 'Doorverwijzen naar server';

$string['yes'] = 'Ja';
$string['no'] = 'Nee';
$string['recordings'] = "Opnames";
$string['recording'] = "Opname";
$string['artifacts'] = "Kamerartefacten";
$string['attendance'] = "Aanwezigheidsrapport";
$string['artifact'] = "Artefact";
$string['room_subject'] = 'kamer';
$string['user_subject'] = 'gebruiker';
$string['activeroomsreport'] = 'Rapport over actieve kamers';
$string['noactiverooms'] = 'Er zijn momenteel geen actieve kamers.';
$string['activerooms'] = 'Actieve kamers';
$string['loading'] = 'Laden...';

// mod_form.php
$string['roomtitle'] = 'Kamertitel';
$string['roomtitle_help'] = 'De naam die wordt gebruikt voor de Moodle-activiteit en de koptekst van de live vergadering. Hiermee kunnen studenten de sessie in hun cursus en in de ruimte herkennen.';
$string['welcome_message'] = 'Welkomstbericht';
$string['welcome_message_help'] = 'Alle tekst die hier wordt ingevoerd, verschijnt als het eerste bericht in de openbare chat wanneer gebruikers de ruimte betreden. Dit is handig om instructies, links of belangrijke informatie te delen met deelnemers zodra ze binnenkomen.';
$string['max_participants'] = 'Maximaal aantal deelnemers';
$string['max_participants_help'] = 'Stel deze waarde in om het aantal gebruikers te beperken dat tegelijkertijd aan de sessie kan deelnemen. Stel de waarde in op 0 om een onbeperkt aantal deelnemers toe te staan, wat betekent dat er geen beperking is op het aantal gebruikers dat kan deelnemen.';
$string['room_features'] = 'Kamerkenmerken';
$string['recording_features'] = 'Opnamefuncties';
$string['chat_features'] = 'Chatfuncties';
$string['other_features'] = 'Overige kenmerken';
$string['e2ee_features'] = 'End-to-end-versleuteling';
$string['insights_features'] = 'Inzichten en AI-functies';
$string['defaultlock'] = 'Standaard vergrendelingsinstellingen';
$string['advanced_completion'] = 'Gevorderde afronding';
$string['available'] = 'Verkrijgbaar bij';
$string['available_help'] = 'Bepaalt wanneer deelnemers aan de sessie kunnen deelnemen. Gebruikers kunnen de ruimte niet betreden vóór deze datum en tijd.';
$string['deadline'] = 'Beschikbaar tot';
$string['deadline_help'] = 'Bepaalt de uiterste datum en tijd waarop deelnemers toegang hebben tot de sessie. De toegang wordt geblokkeerd zodra deze deadline is verstreken.';
$string['err_deadline_before_available'] = 'De datum "Beschikbaar tot" mag niet vóór de datum "Beschikbaar vanaf" liggen.';
$string['error_analytics_required_for_completion'] = '\'Analyses inschakelen\' moet aangevinkt zijn als er voltooiingscriteria zijn ingesteld.';

$string['allow_webcams'] = 'Webcams toestaan';
$string['allow_webcams_help'] = 'Sta deelnemers toe hun webcams te gebruiken.';
$string['mute_on_start'] = 'Dempen bij start';
$string['mute_on_start_help'] = 'Demp alle deelnemers automatisch wanneer ze de sessie binnenkomen.';
$string['allow_screen_share'] = 'Scherm delen toestaan';
$string['allow_screen_share_help'] = 'Sta deelnemers toe hun scherm te delen.';
$string['allow_rtmp'] = 'RTMP-streaming toestaan';
$string['allow_rtmp_help'] = 'Hiermee kunnen moderators de live sessie uitzenden naar externe platforms zoals YouTube, Facebook of Twitch. Perfect voor openbare webinars of gastcolleges.';
$string['allow_raise_hand'] = 'Sta toe hand op te steken';
$string['allow_raise_hand_help'] = 'Geef de deelnemers de gelegenheid om hun hand op te steken.';
$string['admin_only_webcams'] = 'Webcams alleen voor beheerders';
$string['admin_only_webcams_help'] = 'Sta alleen moderators toe hun webcams te gebruiken.';
$string['allow_view_other_webcams'] = 'Sta het bekijken van andere webcams toe';
$string['allow_view_other_webcams_help'] = 'Sta deelnemers toe om de webcams van andere deelnemers te bekijken. Indien uitgeschakeld, zien ze alleen de webcams van de moderators.';
$string['allow_view_other_users_list'] = 'Toestaan dat de lijst met andere gebruikers wordt weergegeven';
$string['allow_view_other_users_list_help'] = 'Geef deelnemers de mogelijkheid om de lijst met andere deelnemers te bekijken.';
$string['room_duration'] = 'Verblijfsduur in de kamer (minuten)';
$string['room_duration_help'] = 'Hiermee definieert u hoe lang de kamer open mag blijven voordat deze automatisch sluit. Voer 0 in als u geen tijdslimiet wilt instellen, waardoor de kamer onbeperkt actief kan blijven.';
$string['moderator_join_first'] = 'Moderator, word eerst lid';
$string['moderator_join_first_help'] = 'Wanneer deze optie is ingeschakeld, start de sessie niet en kan niemand deelnemen totdat een moderator (zoals een docent) eerst deelneemt. Deelnemers blijven op de Moodle-activiteitenpagina en komen niet in de ruimte of een wachtruimte terecht. Dit is anders dan de wachtkameroptie, waarbij gebruikers wel kunnen deelnemen en wachten.';
$string['enable_analytics'] = 'Schakel analyses in';
$string['enable_analytics_help'] = 'Registreert deelname- en betrokkenheidsgegevens voor de sessie. **Let op:** Deze functie moet ingeschakeld zijn als er voltooiingscriteria zijn ingesteld.';
$string['allow_virtual_bg'] = 'Virtuele achtergronden toestaan';
$string['allow_virtual_bg_help'] = 'Hiermee kunnen deelnemers hun achtergrond vervagen of een virtueel beeld gebruiken. Ideaal om de privacy van studenten te waarborgen en een professionele uitstraling in de klas te garanderen.';
$string['auto_gen_user_id'] = 'Gebruikers-ID automatisch genereren';
$string['auto_gen_user_id_help'] = 'Wanneer deze functie is ingeschakeld, maakt het systeem een nieuwe ID aan, zodat dezelfde gebruiker vanaf meerdere apparaten kan deelnemen. Bijvoorbeeld wanneer een docent deelneemt vanaf een tablet om op het whiteboard te tekenen, terwijl hij/zij een pc gebruikt voor de camera en microfoon. Het is echter <b>aanbevolen</b> om deze functie uit te schakelen, zodat de Moodle-gebruikers-ID wordt gebruikt en dubbele deelnames worden voorkomen.';

$string['allow_recording'] = 'Opname toestaan (hoofdschakelaar)';
$string['allow_recording_help'] = 'De primaire hoofdschakelaar voor alle opnamefuncties. Indien uitgeschakeld, worden zowel de cloud- als de lokale opnameopties verborgen voor moderators.';
$string['allow_cloud_recording'] = 'Cloudopname toestaan';
$string['allow_cloud_recording_help'] = 'Hiermee kunt u opnemen op de PlugNmeet-server. De uiteindelijke video wordt verwerkt en opgeslagen in de cloud, zodat u deze na afloop van de sessie eenvoudig via een link kunt delen.';
$string['enable_auto_cloud_recording'] = 'Schakel automatische cloudopname in.';
$string['enable_auto_cloud_recording_help'] = 'De cloudopname wordt automatisch gestart zodra de eerste moderator deelneemt aan de sessie. Ideaal om ervoor te zorgen dat geen enkele lezing wordt vergeten.';
$string['allow_local_recording'] = 'Lokale opname toestaan';
$string['allow_local_recording_help'] = 'Hiermee kunt u rechtstreeks op de computer opnemen. **Let op:** Google Chrome is vereist. Om alle audio van de sessie vast te leggen, moet de gebruiker zijn/haar "Chrome-tabblad" delen en het vakje "Audio van tabblad delen" aanvinken. Het bestand wordt na afloop lokaal op het apparaat opgeslagen.';

$string['allow_chat'] = 'Chat toestaan (algemene hoofdschakelaar)';
$string['allow_chat_help'] = 'De absolute hoofdschakelaar voor alle chatfuncties. Indien uitgeschakeld, wordt het volledige chatgebied voor iedereen, inclusief moderators, verwijderd. Openbare of privéchats zijn dan niet meer mogelijk.';
$string['allow_file_upload'] = 'Bestanden uploaden toestaan';
$string['allow_file_upload_help'] = 'Hiermee kun je bestanden delen binnen de chat. Hiervoor moet de hoofdschakelaar "Chat toestaan" ingeschakeld zijn.';

$string['allow_shared_notepad'] = 'Gedeeld notitieblok toestaan';
$string['allow_shared_notepad_help'] = 'Hiermee kunt u samenwerken in een tekstverwerker waar leerlingen en docenten in realtime aantekeningen kunnen maken. Dit is ideaal voor brainstormsessies, het gezamenlijk schrijven van teksten of het maken van een gezamenlijke samenvatting van een les.';

$string['whiteboard_features'] = 'Kenmerken van het whiteboard';
$string['allow_whiteboard'] = 'Whiteboard toestaan';
$string['allow_whiteboard_help'] = 'Hiermee wordt een interactieve tekenomgeving voor de sessie ontgrendeld. Gebruik deze om diagrammen te schetsen, wiskundige problemen visueel op te lossen of leerlingen aantekeningen te laten maken bij gedeelde inhoud.';
$string['preload_file'] = 'Presentatiebestand vooraf laden';
$string['preload_file_help'] = 'Hiermee kunt u een PDF- of Office-document uploaden dat automatisch op het whiteboard wordt geladen wanneer de sessie begint. Zo is uw presentatiemateriaal direct klaar voor gebruik in de les. <strong>Maximale bestandsgrootte: 5 MB</strong>';

$string['allowed_external_media_player'] = 'Externe mediaspeler toestaan';
$string['allowed_external_media_player_help'] = 'Hiermee kunnen moderators video\'s van bronnen zoals YouTube of Vimeo synchroniseren en afspelen voor de hele klas. Ideaal voor het analyseren van educatieve clips of het samen bekijken van documentaires zonder bandbreedteverlies.';

$string['activate_waiting_room'] = 'Wachtkamer activeren';
$string['activate_waiting_room_help'] = 'Schakel de wachtkamer voor deze sessie in.';
$string['waiting_room_msg'] = 'Wachtkamerbericht';
$string['waiting_room_msg_help'] = 'Dit bericht wordt aan gebruikers getoond terwijl ze wachten om de ruimte in te mogen. Gebruik het om instructies, verwachtingen of nuttige informatie te delen voordat de sessie begint.';

$string['allow_breakout_rooms'] = 'Schakel breakout-rooms in';
$string['allow_breakout_rooms_help'] = 'Hiermee kunnen moderators deelnemers in kleinere groepen verdelen voor gerichte discussies, gezamenlijke projecten of besloten groepsactiviteiten.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'Het maximale aantal subruimtes dat een moderator binnen één sessie kan aanmaken.';

$string['allow_display_external_link_features'] = 'Externe linkdeling toestaan';
$string['allow_display_external_link_features_help'] = 'Hiermee kunnen moderators externe educatieve content – zoals H5P-activiteiten, SCORM-pakketten of quizsystemen (bijv. Kahoot) – rechtstreeks aan alle deelnemers tonen tijdens de sessie.';

$string['allow_ingress_features'] = 'Toegang toestaan (externe streaming)';
$string['allow_ingress_features_help'] = 'Hiermee kunnen docenten video van hoge kwaliteit in de sessie streamen met behulp van externe software zoals OBS via RTMP- of WHIP-protocollen. Dit is ideaal voor het delen van video-inhoud in hoge resolutie, vooraf opgenomen sessies of het omzeilen van uploadbeperkingen van browsers.';

$string['allow_polls'] = 'Peilingen toestaan';
$string['allow_polls_help'] = 'Hiermee kunnen moderators tijdens de sessie interactieve polls en korte quizzen maken. Dit is een uitstekende manier om te controleren of studenten de stof begrijpen en de betrokkenheid te vergroten.';

$string['sip_dial_in_features_is_allow'] = 'SIP-inbellen toestaan';
$string['sip_dial_in_features_is_allow_help'] = 'Hiermee kunnen deelnemers via een traditioneel telefoongesprek aan de audiosessie deelnemen. Dit is essentieel voor studenten met een slechte internetverbinding of voor studenten die onderweg willen deelnemen.';

$string['enable_end_to_end_encryption_features'] = 'Schakel end-to-end-versleuteling (E2EE) in.';
$string['enable_end_to_end_encryption_features_help'] = 'Biedt maximale beveiliging door video- en audiostreamen te versleutelen, zodat zelfs de server er geen toegang toe heeft. Let op: sommige functies, zoals server-side recording, kunnen beperkt zijn wanneer end-to-end-encryptie (E2EE) actief is.';
$string['enabled_self_insert_encryption_key'] = 'Sta door de deelnemer gedefinieerde sleutels toe.';
$string['enabled_self_insert_encryption_key_help'] = 'Hiermee kunnen deelnemers handmatig een gedeelde geheime sleutel invoeren. Dit zorgt ervoor dat de serviceprovider nooit toegang heeft tot de encryptiesleutels, wat het hoogste niveau van privacy biedt.';
$string['included_e2ee_chat_messages'] = 'Versleutel chatberichten';
$string['included_e2ee_chat_messages_help'] = 'Breidt end-to-end-versleuteling uit naar tekstchats, waardoor berichten alleen leesbaar zijn voor deelnemers in de chatruimte.';
$string['included_e2ee_whiteboard'] = 'Whiteboardgegevens versleutelen';
$string['included_e2ee_whiteboard_help'] = 'Alle whiteboardtekeningen en -aantekeningen zijn opgenomen in de end-to-end-versleutelingslaag voor volledige gegevensbescherming.';

$string['insights_features_is_allow'] = 'Sessie-inzichten toestaan (hoofdschakelaar)';
$string['insights_features_is_allow_help'] = 'De primaire hoofdschakelaar voor alle datagestuurde functies. Indien uitgeschakeld, zijn alle subopties, waaronder transcriptie, AI-assistent en vergaderingsrapporten, volledig ontoegankelijk.';
$string['insights_transcription_features_is_allow'] = 'Live transcriptie toestaan';
$string['insights_transcription_features_is_allow_help'] = 'Maakt realtime spraak-naar-tekstconversie tijdens de sessie mogelijk. Deze functie moet ingeschakeld zijn om transcriptievertaling of spraaksynthese (TTS) te laten werken.';
$string['insights_transcription_features_is_allow_translation'] = 'Transcriptie en vertaling toestaan';
$string['insights_transcription_features_is_allow_translation_help'] = 'Hiermee kan het live transcript in verschillende talen worden vertaald, wat ondersteuning biedt aan internationale studenten en meertalige omgevingen.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Schakel spraaksynthese (TTS) in.';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Maakt tekst-naar-spraak mogelijk, waardoor het live transcript hardop kan worden voorgelezen voor betere toegankelijkheid en voor deelnemers met een visuele beperking.';
$string['insights_chat_translation_features_is_allow'] = 'Chatvertaling toestaan';
$string['insights_chat_translation_features_is_allow_help'] = 'Maakt realtime vertaling van chatberichten mogelijk, waardoor deelnemers direct in verschillende talen met elkaar kunnen communiceren.';
$string['insights_ai_features_is_allow'] = 'Schakel de AI-vergaderassistent (AI-hoofdschakelaar) in.';
$string['insights_ai_features_is_allow_help'] = 'De hoofdschakelaar voor alle AI-gestuurde mogelijkheden. Indien uitgeschakeld, worden specifieke functies zoals AI-chat en vergaderingssamenvatting verborgen, zelfs als sessie-inzichten actief zijn.';
$string['insights_ai_text_chat_features_is_allow'] = 'Schakel AI-chatassistent in';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integreert een AI-assistent rechtstreeks in de chat om vragen te beantwoorden, complexe concepten uit te leggen en groepsdiscussies te faciliteren.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'AI-vergaderingsamenvatting toestaan';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Genereert automatisch een beknopte AI-samenvatting na afloop van de sessie, waarin de belangrijkste leerpunten, beslissingen en vervolgtaken worden benadrukt.';

$string['lock_microphone'] = 'Vergrendelbare microfoons';
$string['lock_microphone_help'] = 'Alle deelnemers worden standaard gedempt bij binnenkomst. Alleen moderators kunnen deelnemers dempen of spreekbevoegdheid verlenen.';
$string['lock_webcam'] = 'Vergrendel webcams';
$string['lock_webcam_help'] = 'Schakelt standaard de camera\'s voor alle deelnemers uit. Handig om bandbreedte te besparen of de privacy van studenten te waarborgen.';
$string['lock_screen_sharing'] = 'Scherm delen op vergrendelscherm';
$string['lock_screen_sharing_help'] = 'Beperkt het delen van het scherm tot alleen moderators. Voorkomt dat deelnemers onderbreken met hun eigen scherm.';
$string['lock_whiteboard'] = 'Vergrendel het whiteboard';
$string['lock_whiteboard_help'] = 'Beperkt het gebruik van tekenhulpmiddelen op het whiteboard tot alleen moderators. Voorkomt ongeautoriseerde aantekeningen door deelnemers.';
$string['lock_shared_notepad'] = 'Vergrendel gedeeld notitieblok';
$string['lock_shared_notepad_help'] = 'Schakelt het gezamenlijke notitieblok uit voor deelnemers om te voorkomen dat er over iets anders wordt geschreven of dat er afleiding ontstaat.';
$string['lock_chat'] = 'Openbare chat vergrendelen';
$string['lock_chat_help'] = 'Hiermee wordt het openbare chatgedeelte volledig verborgen of uitgeschakeld voor alle deelnemers.';
$string['lock_chat_send_message'] = 'Het verzenden van berichten vergrendelen';
$string['lock_chat_send_message_help'] = 'Hiermee kunnen deelnemers de chat lezen, maar kunnen ze geen berichten versturen.';
$string['lock_chat_file_share'] = 'Bestandsdeling vergrendelen';
$string['lock_chat_file_share_help'] = 'Voorkomt dat deelnemers bestanden uploaden of delen binnen het chatvenster.';
$string['lock_private_chat'] = 'Privéchat vergrendelen';
$string['lock_private_chat_help'] = 'Schakelt privéberichten tussen deelnemers uit. Let op: deelnemers kunnen nog steeds privéberichten naar moderators sturen voor hulp of vragen.';

$string['completion_minutes'] = 'Notulen van de bijeenkomst';
$string['completion_minutes_help'] = 'Vereis dat de gebruiker gedurende een bepaald aantal minuten in de sessie aanwezig is.';
$string['completion_minutes_desc'] = 'De gebruiker moet minimaal {$a} minuten aan de sessie deelnemen.';
$string['completion_raised_hand'] = 'Opgestoken hand';
$string['completion_raised_hand_help'] = 'De gebruiker moet minstens één keer zijn of haar hand opsteken.';
$string['completion_chat_messages'] = 'Verzonden chatberichten';
$string['completion_chat_messages_help'] = 'Vereis dat de gebruiker minimaal 1 chatbericht verstuurt.';
$string['completion_webcam_enabled'] = 'Webcam ingeschakeld';
$string['completion_webcam_enabled_help'] = 'Vereis dat de gebruiker zijn webcam minstens één keer inschakelt.';
$string['completion_webcam_duration'] = 'Webcam ingeschakeld (duur: minuten)';
$string['completion_webcam_duration_help'] = 'Vereis dat de gebruiker zijn webcam gedurende een bepaald aantal minuten ingeschakeld laat.';
$string['completion_webcam_duration_desc'] = 'De gebruiker moet zijn webcam minimaal {$a} minuten ingeschakeld hebben.';
$string['completion_mic_enabled'] = 'Microfoon ingeschakeld';
$string['completion_mic_enabled_help'] = 'Vereis dat de gebruiker zijn microfoon minstens één keer inschakelt.';
$string['completion_mic_duration'] = 'Microfoon ingeschakeld Duur (minuten)';
$string['completion_mic_duration_help'] = 'Vereis dat de gebruiker zijn microfoon gedurende een bepaald aantal minuten ingeschakeld laat.';
$string['completion_mic_duration_desc'] = 'De gebruiker moet zijn microfoon minimaal {$a} minuten ingeschakeld hebben.';
$string['completion_talk_duration'] = 'Duur van het gesprek (minuten)';
$string['completion_talk_duration_help'] = 'De gebruiker moet gedurende een bepaald aantal minuten spreken.';
$string['completion_talk_duration_desc'] = 'De gebruiker moet minimaal {$a} minuten praten.';
$string['completion_poll_voted'] = 'Gestemd in de peiling';
$string['completion_poll_voted_help'] = 'Vereis dat de gebruiker in ten minste één enquête stemt.';
$string['completion_whiteboard_annotated'] = 'Aantekeningen op het whiteboard';
$string['completion_whiteboard_annotated_help'] = 'Vraag de gebruiker om aantekeningen te maken op het whiteboard.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Slaat sessiestatistieken op zodat gebruikers kunnen vaststellen of een activiteit is voltooid.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'De gebruikers-ID.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'JSON-gecodeerde sessiegegevens (minuten, chatberichten, enz.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'Het tijdstip waarop de statistieken voor het laatst zijn bijgewerkt.';

// view.php
$string['join_session'] = 'Deelnemen aan de sessie';
$string['start_session'] = 'Start sessie';
$string['end_session'] = 'Sessie beëindigen';
$string['participants'] = 'Deelnemers';
$string['is_recording'] = 'Wordt er opgenomen?';
$string['is_active'] = 'Is actief';
$string['room_info'] = 'Details van de live sessie';
$string['participants_info'] = 'Live deelnemers';
$string['room_id'] = 'Kamer-ID';
$string['creation_time'] = 'Scheppingstijd';
$string['name'] = 'Naam';
$string['user_id'] = 'Gebruikers-ID';
$string['is_admin'] = 'Is beheerder';
$string['is_presenter'] = 'Is de presentator';
$string['joined_at'] = 'Aangesloten bij';
$string['moderator_not_joined'] = 'De sessie moet door een moderator worden gestart voordat je kunt deelnemen.';
$string['session_available_from'] = 'Beschikbaar via: {$a}';
$string['session_available_until'] = 'Beschikbaar tot: {$a}';
$string['session_not_started_yet'] = 'Deze sessie is nog niet begonnen.';
$string['session_ended'] = 'Deze sessie is afgelopen.';
$string['allow_guest'] = 'Gastgebruikers toestaan';
$string['allow_guest_help'] = 'Wanneer deze functie is ingeschakeld, wordt een beveiligde, deelbare link gegenereerd waarmee externe gebruikers (zoals gastdocenten of deelnemers zonder Moodle-account) aan de sessie kunnen deelnemen; een beheerder kan deze link bekijken en delen.';
$string['guest_join_link'] = 'Gast aanmelden';
$string['guest_join_link_help'] = 'Deel deze link met externe deelnemers. Deze link blijft {$a} uur geldig. Bij elke paginaverversing wordt een nieuwe link gegenereerd, maar eerder gedeelde links blijven geldig tot hun oorspronkelijke vervaltijd.';
$string['copy_link'] = 'Link kopiëren';
$string['link_copied'] = 'Link gekopieerd naar het klembord.';
$string['guest_join_title'] = 'Deelnemen aan de vergadering als gast';
$string['enter_display_name'] = 'Voer uw weergavenaam in';
$string['join_as_guest'] = 'Deelnemen aan de vergadering';
$string['guest_access_denied'] = 'Gasttoegang is niet ingeschakeld voor deze vergadering.';
$string['invalid_guest_token'] = 'Ongeldig of verlopen gasttoegangstoken.';
$string['guest_link_expired'] = 'Deze link voor gastdeelname is verlopen.';
$string['error_joining_session'] = 'Er is een fout opgetreden bij het deelnemen aan de sessie: {$a}';
$string['already_logged_in'] = 'Je bent al ingelogd op Moodle. Je kunt direct vanaf deze activiteitenpagina deelnemen aan de sessie.';
$string['total_webcams'] = 'Totaal aantal webcams';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Totaal schermaandeel';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Microfoons';
$string['screenshares'] = 'Scherm delen';

// Events
$string['event_room_started'] = 'De kamer begon';
$string['event_room_ended'] = 'De kamer eindigde';
$string['event_room_created'] = 'Kamer gecreëerd';
$string['event_session_ended'] = 'De sessie is afgelopen.';
$string['event_participant_joined'] = 'Deelnemer sloot zich aan';
$string['event_participant_left'] = 'Deelnemer vertrok';
$string['event_artifact_created'] = 'Artefact gecreëerd';
$string['event_recording_proceeded'] = 'Opname klaar';
$string['event_plugin_error'] = 'PlugNmeet-fout';
$string['event_track_published'] = 'Nummer gepubliceerd';
$string['event_track_unpublished'] = 'Niet-gepubliceerd nummer';
$string['event_recording_started'] = 'Opname gestart';
$string['event_recording_ended'] = 'Opname beëindigd';
$string['event_rtmp_started'] = 'RTMP-stream gestart';
$string['event_rtmp_ended'] = 'RTMP-stream beëindigd';

// Notifications
$string['messageprovider:recording_ready'] = 'Meldingen voor gereedstaande opnames';
$string['messageprovider:artifact_ready'] = 'Meldingen voor gereedstaande artefacten';
$string['recording_ready_notification_subject'] = 'Opname gereed: {$a}';
$string['recording_ready_notification_fullmessage'] = 'De opname voor de sessie "{$a->roomname}" is nu klaar en verwerkt. Je kunt hem hier bekijken: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>De opname voor de sessie <strong>"{$a->roomname}"</strong> is nu klaar en verwerkt.</p><p><a href="{$a->url}">Klik hier om de opname te bekijken.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Opname gereed voor {$a}';
$string['artifact_ready_notification_subject'] = 'Artefact gereed: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Een nieuw artefact ({$a->type}) voor de sessie "{$a->roomname}" is nu beschikbaar. Je kunt het hier bekijken: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Een nieuw artefact ({$a->type}) voor de sessie <strong>"{$a->roomname}"</strong> is nu beschikbaar.</p><p><a href="{$a->url}">Klik hier om de details van het artefact te bekijken.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefact klaar voor {$a}';

// recordings.php
$string['no_recordings'] = 'Geen opnames gevonden.';
$string['recording_id'] = 'Opname-ID';
$string['room_sid'] = 'Kamer SID';
$string['file_size'] = 'Bestandsgrootte';
$string['created_at'] = 'Gemaakt op';
$string['actions'] = 'Acties';
$string['view'] = 'Weergave';
$string['play'] = 'Toneelstuk';
$string['download'] = 'Download';
$string['delete'] = 'Verwijderen';
$string['delete_confirm'] = 'Weet je zeker dat je dit wilt verwijderen?';
$string['delete_success'] = 'Succesvol verwijderd.';
$string['recording_details'] = 'Opnamegegevens';
$string['recording_creation_time'] = 'Opname aanmaaktijd';
$string['room_creation_time'] = 'Sessie aanmaaktijd';
$string['back_to_list'] = 'Terug naar de lijst';
$string['browser_not_support_video'] = 'Uw browser ondersteunt de videotag niet.';
$string['room_title'] = 'Kamertitel';
$string['total_participants'] = 'Totaal aantal deelnemers';
$string['session_started_at'] = 'De sessie begon om';
$string['session_ended_at'] = 'De sessie eindigde om';

// artifacts.php
$string['no_artifacts'] = 'Geen artefacten gevonden.';
$string['artifact_id'] = 'Artefact-ID';
$string['type'] = 'Type';
$string['artifact_details'] = 'Details van het artefact';
$string['no_permission'] = 'Je hebt geen toestemming om deze pagina te bekijken.';
$string['token_usage'] = 'Tokengebruik';
$string['duration_usage'] = 'Gebruiksduur';
$string['character_count_usage'] = 'Gebruik van het aantal tekens';
$string['estimated_cost'] = 'Geschatte kosten';
$string['file_path'] = 'Bestandspad';
$string['mime_type'] = 'MIME-type';
$string['created_at'] = 'Gemaakt op';

// Analytics strings
$string['download_excel_report'] = 'Excel-rapport downloaden';
$string['download_raw_json'] = 'Ruwe data downloaden';
$string['room_summary'] = 'Kameroverzicht';
$string['users_summary'] = 'Gebruikersoverzicht';
$string['see_excel_report'] = 'Zie het Excel-rapport voor meer details.';
$string['error_loading_analytics'] = 'Fout bij het laden van analysedata: {$a}';
$string['error_generating_excel'] = 'Fout bij het genereren van het Excel-rapport: {$a}';

$string['analytics_room_room_id'] = 'Kamer-ID';
$string['analytics_room_room_title'] = 'Kamertitel';
$string['analytics_room_room_creation'] = 'Tijd voor het inrichten van de kamer';
$string['analytics_room_room_ended'] = 'Kamer beëindigde tijd';
$string['analytics_room_room_duration'] = 'Kamerduur';
$string['analytics_room_room_total_users'] = 'Totaal aantal deelnemers';
$string['analytics_room_enabled_e2ee'] = 'E2EE ingeschakeld';
$string['analytics_room_recording_status'] = 'Registratiestatus Aantal';
$string['analytics_room_rtmp_status'] = 'RTMP-statustelling';
$string['analytics_room_speech_service_total_usage'] = 'Totaal gebruik van de spraakservice';
$string['analytics_room_external_media_player_status'] = 'Status van externe mediaspeler';
$string['analytics_room_etherpad_status'] = 'Etherpad-statusteller';
$string['analytics_room_external_display_link_status'] = 'Status van externe beeldschermlink';
$string['analytics_room_ingress_created'] = 'Aantal aangemaakte ingress-bestanden';
$string['analytics_room_breakout_room'] = 'Aantal breakoutrooms';

$string['analytics_user_name'] = 'Naam';
$string['analytics_user_id'] = 'Gebruikers-ID';
$string['analytics_user_ex_id'] = 'Gebruikers-ID';
$string['analytics_user_is_admin'] = 'Is beheerder';
$string['analytics_user_duration'] = 'Duur';
$string['analytics_user_joined'] = 'Aangesloten bij';
$string['analytics_user_left'] = 'Links bij';
$string['analytics_user_mic_status'] = 'Wijzigingen in de microfoonstatus';
$string['analytics_user_mic_muted'] = 'Aantal gedempte microfoons';
$string['analytics_user_mic_duration'] = 'Microfoon ingeschakeld';
$string['analytics_user_talked'] = 'Besproken telling';
$string['analytics_user_talked_duration'] = 'Gespreksduur';
$string['analytics_user_webcam_status'] = 'Wijzigingen in de webcamstatus';
$string['analytics_user_webcam_duration'] = 'Webcam ingeschakeld';
$string['analytics_user_raise_hand'] = 'Steek je hand op en tel mee';
$string['analytics_user_voted_poll'] = 'Stemmentelling';
$string['analytics_user_whiteboard_annotated'] = 'Aantal geannoteerde tellingen op het whiteboard';
$string['analytics_user_whiteboard_files'] = 'Aantal whiteboardbestanden';
$string['analytics_user_screen_share_status'] = 'Statuswijzigingen bij schermdeling';
$string['analytics_user_speech_services_usage'] = 'Gebruik van spraakdiensten';
$string['analytics_user_public_chat'] = 'Openbare chatberichten';
$string['analytics_user_private_chat'] = 'Privéchatberichten';
$string['analytics_user_chat_files'] = 'Chatbestanden gedeeld';
$string['analytics_user_interface_invisible'] = 'Interface Onzichtbare Aantal';
$string['analytics_user_connection_quality'] = 'Verbindingskwaliteit';
$string['analytics_user_connection_quality_excellent'] = 'Uitstekend';
$string['analytics_user_connection_quality_good'] = 'Goed';
$string['analytics_user_connection_quality_poor'] = 'Arm';

$string['users_info'] = 'Gebruikersinformatie';
$string['polls'] = 'Peilingen';
$string['question'] = 'Vraag';
$string['options'] = 'Opties';
$string['file_name'] = 'Bestandsnaam';
$string['checkcompletiontask'] = 'Controleer de voltooiing van plugNmeet';

// attendance.php
$string['attendance_report'] = 'Aanwezigheidsrapport';
$string['status'] = 'Status';
$string['present'] = 'Cadeau';
$string['absent'] = 'Afwezig';
$string['incomplete'] = 'Onvolledig';
$string['completed'] = 'Voltooid';
$string['minutes_attended'] = 'Notulen van de bijeenkomst';
$string['last_updated'] = 'Laatst bijgewerkt';
$string['mic_duration'] = 'Microfoon ingeschakeld (duur)';
$string['webcam_duration'] = 'Webcam ingeschakeld';
$string['participation_progress'] = 'Voortgang van de deelname';
$string['attendance_duration'] = 'Notulen van de bijeenkomst';
$string['attendance_webcam_status'] = 'Webcam ingeschakeld';
$string['attendance_mic_status'] = 'Microfoon ingeschakeld';
$string['attendance_talked_duration'] = 'Spreekduur';
$string['attendance_voted_poll'] = 'Gestemd in de peiling';
$string['attendance_chat_messages'] = 'Verzonden chatberichten';
$string['attendance_raise_hand'] = 'Opgestoken hand';
$string['attendance_webcam_duration'] = 'Webcam ingeschakeld';
$string['attendance_mic_duration'] = 'Microfoon ingeschakeld (duur)';
$string['attendance_whiteboard_annotated'] = 'Aantekeningen op het whiteboard';
$string['met'] = 'Met';
$string['required'] = 'Vereist';

// Status codes
$string['status_unknown_status'] = 'De server heeft een onbekende status geretourneerd.';
$string['status_success'] = 'De operatie is succesvol afgerond.';
$string['status_permission_denied'] = 'Toegang geweigerd.';
$string['status_not_found'] = 'Geen {$a} gevonden.';
$string['status_conflict'] = 'Deze actie kon niet worden voltooid vanwege een conflict (bijvoorbeeld, de ruimte bestaat mogelijk al).';
$string['status_invalid_token_or_signature'] = 'Het aanvraagtoken of de handtekening is ongeldig.';
$string['status_invalid_api_key'] = 'De opgegeven API-sleutel is ongeldig. Controleer uw plugininstellingen.';
$string['status_internal_server_error'] = 'De PlugNmeet-server heeft een interne fout ondervonden.';
$string['status_invalid_parameters'] = 'De verstrekte informatie is onjuist.';
$string['status_missing_required_parameter'] = 'Er ontbreken enkele vereiste gegevens.';
$string['status_room_not_found'] = 'De opgegeven kamer is niet gevonden.';
$string['status_user_not_found'] = 'Gebruikersaccount niet gevonden. Zorg ervoor dat uw API-gegevens correct zijn en dat uw abonnement actief is.';
$string['status_user_blocked'] = 'Het gebruikersaccount is geblokkeerd. Neem contact op met de ondersteuning.';
$string['status_user_not_active'] = 'Het gebruikersaccount is niet actief. Dit komt waarschijnlijk door een inactief of verlopen abonnement.';
