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
$string['modulename_help'] = 'Il modulo di attività PlugNmeet ti permette di creare e gestire sessioni di webconferenza in tempo reale da Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Amministrazione di plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Aggiungi una nuova attività PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Elimina artefatti';
$string['plugnmeet:deleterecording'] = 'Elimina le registrazioni';
$string['plugnmeet:downloadanalyticsreport'] = 'Scarica il report di analisi';
$string['plugnmeet:downloadartifacts'] = 'Scarica artefatti';
$string['plugnmeet:downloadattendance'] = 'Scarica il rapporto sulle presenze';
$string['plugnmeet:downloadrecordings'] = 'Scarica le registrazioni';
$string['plugnmeet:manage'] = 'Gestisci le impostazioni di PlugNmeet';
$string['plugnmeet:view'] = 'Visualizza l\'attività PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Visualizza i reperti';
$string['plugnmeet:viewattendance'] = 'Visualizza il rapporto di presenze';
$string['plugnmeet:viewattendancelist'] = 'Visualizza l\'elenco delle presenze';
$string['plugnmeet:viewlivesessioninfo'] = 'Visualizza le informazioni della sessione live';
$string['plugnmeet:viewrecordings'] = 'Visualizza le registrazioni';
$string['plugnmeetfieldset'] = 'Campo di esempio personalizzato';
$string['plugnmeetname'] = 'Nome di esempio personalizzato';
$string['plugnmeetname_help'] = 'Aiuto per esempi personalizzati';

// Admin Settings
$string['api_config'] = 'Configurazione API';
$string['server_url'] = 'PlugNmeet Server URL';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'Chiave API';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server used for secure authentication.';
$string['guest_access_hdr'] = 'Impostazioni di accesso ospite';
$string['allow_guest_global'] = 'Consentire l\'accesso degli ospiti a livello globale';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = 'Scadenza del link ospite (orari)';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = 'Impostazioni tecniche';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = 'Abilita Dynacast';
$string['enable_dynacast_des'] = 'Optimizes performance by dynamically pausing video layers that are not being viewed by participants. This significantly reduces server-side CPU and bandwidth usage. **Note:** This will be automatically enabled if using SVC codecs (VP9/AV1) and is required for multi-codec simulcast.';
$string['enable_simulcast'] = 'Abilita la simulcast';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = 'Video Codec';
$string['video_codec_des'] = 'The encoding standard for video transmission. **VP8** is recommended for WebRTC as it provides the best balance of quality and low latency. **Warning:** Not all browsers support every codec; ensure your users are on modern browsers if using VP9 or H.265.';
$string['default_webcam_resolution'] = 'Risoluzione predefinita della webcam';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = 'Risoluzione predefinita della condivisione schermo';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = 'Predefinito preset audio';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = 'Branding e personalizzazione';
$string['custom_logo'] = 'Logo personalizzato';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'URL CSS personalizzato';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = 'Colore primario';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = 'Colore secondario';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = 'Colore di sfondo';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = 'Immagine di sfondo';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = 'Colore intestazione';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = 'Colore piè di pagina';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = 'Colore lato sinistro';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = 'Colore di sfondo del pannello laterale';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = 'Testo del copyright';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = 'Sì';
$string['no'] = 'No';
$string['recordings'] = "Registrazioni";
$string['recording'] = "Registrazione";
$string['artifacts'] = "Reperti della stanza";
$string['attendance'] = "Rapporto di presenze";
$string['artifact'] = "Reperto";
$string['room_subject'] = 'Stanza';
$string['user_subject'] = 'Utente';

// mod_form.php
$string['roomtitle'] = 'Titolo della stanza';
$string['roomtitle_help'] = 'The name used for the Moodle activity and the live meeting header. It helps students identify the session in their course and inside the room.';
$string['welcome_message'] = 'Messaggio di benvenuto';
$string['welcome_message_help'] = 'Qualsiasi testo inserito qui apparirà come il primo messaggio nella chat pubblica quando gli utenti entreranno nella stanza. Questo è utile per condividere istruzioni, link o informazioni importanti con i partecipanti all\'ingresso.';
$string['max_participants'] = 'Partecipanti Max';
$string['max_participants_help'] = 'Imposta questo valore per limitare quanti utenti possono unirsi alla sessione contemporaneamente. Impostalo a 0 per permettere un numero illimitato di partecipanti, il che significa che non ci sono restrizioni su quanti utenti possono unirsi.';
$string['room_features'] = 'Caratteristiche della stanza';
$string['recording_features'] = 'Caratteristiche di registrazione';
$string['chat_features'] = 'Funzionalità di chat';
$string['other_features'] = 'Altre caratteristiche';
$string['e2ee_features'] = 'Crittografia end-to-end';
$string['insights_features'] = 'Intuizioni e funzionalità di IA';
$string['defaultlock'] = 'Impostazioni predefinite della serratura';
$string['advanced_completion'] = 'Completamento Avanzato';
$string['available'] = 'Disponibile dal';
$string['available_help'] = 'Determines when participants can start joining the session. Users will not be able to enter the room before this date and time.';
$string['deadline'] = 'Disponibile fino a';
$string['deadline_help'] = 'Determines the final date and time that participants can access the session. Access will be blocked once this deadline passes.';
$string['err_deadline_before_available'] = 'La data "Disponibile fino" non può essere precedente a quella "Disponibile da".';
$string['error_analytics_required_for_completion'] = 'Abilita Analytics deve essere controllata se sono stati impostati criteri di completamento.';

$string['allow_webcams'] = 'Permette le webcam';
$string['allow_webcams_help'] = 'Permette ai partecipanti di usare le loro webcam.';
$string['mute_on_start'] = 'Mute all\'avvio';
$string['mute_on_start_help'] = 'Mettere in silenzio automaticamente tutti i partecipanti quando entrano nella sessione.';
$string['allow_screen_share'] = 'Consentire la condivisione dello schermo';
$string['allow_screen_share_help'] = 'Permette ai partecipanti di condividere il proprio schermo.';
$string['allow_rtmp'] = 'Consenti lo streaming RTMP';
$string['allow_rtmp_help'] = 'Enables moderators to broadcast the live session to external platforms like YouTube, Facebook, or Twitch. Perfect for public webinars or guest lectures.';
$string['allow_raise_hand'] = 'Permette di alzare la mano';
$string['allow_raise_hand_help'] = 'Permette ai partecipanti di alzare la mano.';
$string['admin_only_webcams'] = 'Webcam solo per amministratori';
$string['admin_only_webcams_help'] = 'Permette solo ai moderatori di usare le webcam.';
$string['allow_view_other_webcams'] = 'Visualizza altre webcam';
$string['allow_view_other_webcams_help'] = 'Consentire ai partecipanti di visualizzare le webcam degli altri. Se disabilitati, vedranno solo le webcam dei moderatori.';
$string['allow_view_other_users_list'] = 'Consentire Visualizza l\'elenco degli altri utenti';
$string['allow_view_other_users_list_help'] = 'Permette ai partecipanti di vedere la lista degli altri partecipanti.';
$string['room_duration'] = 'Durata della stanza (minuti)';
$string['room_duration_help'] = 'Definisce quanto tempo la stanza può rimanere aperta prima di chiudersi automaticamente. Inserisci 0 se non vuoi impostare un limite di tempo, permettendo alla stanza di rimanere attiva senza restrizioni.';
$string['moderator_join_first'] = 'Moderatore: Iscriviti per primo';
$string['moderator_join_first_help'] = 'Quando attivato, la sessione non inizia e nessuno può unirsi finché un moderatore (come un insegnante) non si unisce per primo. I partecipanti rimarranno sulla pagina delle attività Moodle e non entreranno nella stanza o nell\'area d\'attesa. Questo è diverso dall\'opzione Sala d\'Attesa, dove gli utenti possono comunque unirsi e aspettare.';
$string['enable_analytics'] = 'Abilita l\'analisi';
$string['enable_analytics_help'] = 'Tracks participation and engagement data for the session. **Note:** This must be enabled if any Completion criteria are set.';
$string['allow_virtual_bg'] = 'Consentire sfondi virtuali';
$string['allow_virtual_bg_help'] = 'Enables participants to blur their background or use a virtual image. Great for maintaining student privacy and ensuring a professional classroom appearance.';
$string['auto_gen_user_id'] = 'Generazione automatica dell\'ID utente';
$string['auto_gen_user_id_help'] = 'Quando abilitato, il sistema crea un nuovo ID affinché lo stesso utente possa unirsi da più dispositivi—ad esempio, quando un insegnante si unisce da un tablet per disegnare sulla lavagna usando un PC per la fotocamera e il microfono; tuttavia, è vero <b>Consigliato</b> per mantenere questo disattivato in modo da utilizzare l\'ID utente di Moodle e evitare i duplicati di unione.';

$string['allow_recording'] = 'Allow Recording (Master Switch)';
$string['allow_recording_help'] = 'The primary master switch for all recording features. If disabled, both Cloud and Local recording options will be hidden from moderators.';
$string['allow_cloud_recording'] = 'Consentire la registrazione nel cloud';
$string['allow_cloud_recording_help'] = 'Enables recording on the PlugNmeet server. The final video is processed and stored in the cloud, making it easy to share via a link once the session ends.';
$string['enable_auto_cloud_recording'] = 'Abilita la registrazione automatica sul cloud';
$string['enable_auto_cloud_recording_help'] = 'Automatically triggers the cloud recording the moment the first moderator joins the session. Ideal for ensuring no lecture is forgotten.';
$string['allow_local_recording'] = 'Consentire la registrazione locale';
$string['allow_local_recording_help'] = 'Allows recording directly to the computer. **Note:** Requires Google Chrome. To capture all session audio, the user must share their "Chrome Tab" and check the "Also share tab audio" box. The file is saved locally to the device once finished.';

$string['allow_chat'] = 'Allow Chat (Global Master Switch)';
$string['allow_chat_help'] = 'The absolute master switch for all chat functions. If disabled, the entire chat area is removed for everyone, including moderators. No public or private chat will be possible.';
$string['allow_file_upload'] = 'Consenti il caricamento del file';
$string['allow_file_upload_help'] = 'Enables the ability to share files within the chat. This requires the "Allow Chat" master switch to be active.';

$string['allow_shared_notepad'] = 'Consentire la condivisione del blocco note';
$string['allow_shared_notepad_help'] = 'Enables a collaborative text editor where students and teachers can take real-time notes together. This is perfect for brainstorming, co-writing, or building a shared class summary.';

$string['allow_whiteboard'] = 'Consenti lavagna';
$string['allow_whiteboard_help'] = 'Unlocks an interactive drawing space for the session. Use it for sketching diagrams, solving math problems visually, or letting students annotate shared content.';

$string['allowed_external_media_player'] = 'Allow External Media Player';
$string['allowed_external_media_player_help'] = 'Allows moderators to sync and play videos from sources like YouTube or Vimeo for the whole class. Ideal for analyzing educational clips or watching documentaries together without bandwidth lag.';

$string['activate_waiting_room'] = 'Attiva la sala d\'attesa';
$string['activate_waiting_room_help'] = 'Attiva la sala d\'attesa per questa sessione.';
$string['waiting_room_msg'] = 'Messaggio nella sala d\'attesa';
$string['waiting_room_msg_help'] = 'Questo messaggio viene mostrato agli utenti mentre aspettano di essere ammessi nella stanza. Usalo per condividere istruzioni, aspettative o informazioni utili prima che inizi la sessione.';

$string['allow_breakout_rooms'] = 'Permettete le stanze di raccolta';
$string['allow_breakout_rooms_help'] = 'Enables moderators to split participants into smaller groups for focused discussions, collaborative projects, or private group activities.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'The maximum number of sub-rooms a moderator can create within a single session.';

$string['allow_display_external_link_features'] = 'Allow External Link Sharing';
$string['allow_display_external_link_features_help'] = 'Allows moderators to display external educational content—such as H5P activities, SCORM packages, or quiz systems (e.g., Kahoot)—directly to all participants during the session.';

$string['allow_ingress_features'] = 'Allow Ingress (External Streaming)';
$string['allow_ingress_features_help'] = 'Allows teachers to broadcast high-quality video into the session using external software like OBS via RTMP or WHIP protocols. This is ideal for sharing high-resolution video content, pre-recorded sessions, or bypassing browser upload limitations.';

$string['allow_polls'] = 'Permesso i sondaggi';
$string['allow_polls_help'] = 'Enables moderators to create interactive polls and quick quizzes during the session. This is a great way to check student understanding and increase engagement.';

$string['sip_dial_in_features_is_allow'] = 'Consentire la dial-in SIP';
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
$string['insights_transcription_features_is_allow_translation'] = 'Consentire la traduzione della trascrizione';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allows the live transcript to be translated into different languages, supporting international students and multi-lingual environments.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Speech Synthesis (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Enables Text-to-Speech, allowing the live transcript to be read aloud for better accessibility and for visually impaired participants.';
$string['insights_chat_translation_features_is_allow'] = 'Consentire la traduzione della chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Enables real-time translation of chat messages, allowing participants to communicate instantly across different languages.';
$string['insights_ai_features_is_allow'] = 'Allow AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'The master switch for all AI-powered capabilities. If disabled, specific features like AI Chat and Meeting Summarization will be hidden, even if Session Insights is active.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integrates an AI assistant directly into the chat to help answer questions, explain complex concepts, and facilitate group discussion.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Consentire la sintesi delle riunioni tramite IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Automatically generates a concise AI summary after the session ends, highlighting key educational points, decisions, and follow-up tasks.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Mutes all participants by default upon entry. Only moderators can unmute or grant permission to speak.';
$string['lock_webcam'] = 'Lock Webcams';
$string['lock_webcam_help'] = 'Disables cameras for all participants by default. Useful for saving bandwidth or ensuring student privacy.';
$string['lock_screen_sharing'] = 'Condivisione della schermata di blocco';
$string['lock_screen_sharing_help'] = 'Restricts screen sharing to moderators only. Prevents participants from interrupting with their own screens.';
$string['lock_whiteboard'] = 'Blocca la lavagna bianca';
$string['lock_whiteboard_help'] = 'Restricts whiteboard drawing tools to moderators only. Prevents unauthorized annotations by participants.';
$string['lock_shared_notepad'] = 'Blocca blocco Note condiviso';
$string['lock_shared_notepad_help'] = 'Disables the collaborative notepad for participants to prevent off-topic writing or distractions.';
$string['lock_chat'] = 'Lock Public Chat';
$string['lock_chat_help'] = 'Completely hides or disables the public chat area for all participants.';
$string['lock_chat_send_message'] = 'Lock Sending Messages';
$string['lock_chat_send_message_help'] = 'Allows participants to read the chat, but prevents them from sending any messages.';
$string['lock_chat_file_share'] = 'Lock File Sharing';
$string['lock_chat_file_share_help'] = 'Prevents participants from uploading or sharing files within the chat area.';
$string['lock_private_chat'] = 'Blocca la chat privata';
$string['lock_private_chat_help'] = 'Disables 1-on-1 private messaging between participants. Note: Participants can still send private messages to moderators for help or questions.';

$string['completion_minutes'] = 'Minuti assistiti';
$string['completion_minutes_help'] = 'Richiedi all\'utente di essere presente nella sessione per un certo numero di minuti.';
$string['completion_minutes_desc'] = 'L\'utente deve partecipare alla sessione almeno {$a} Minuti.';
$string['completion_raised_hand'] = 'Mano alzata';
$string['completion_raised_hand_help'] = 'Richiedi all\'utilizzatore di alzare la mano almeno una volta.';
$string['completion_chat_messages'] = 'Messaggi in chat inviati';
$string['completion_chat_messages_help'] = 'Richiedi all\'utente di inviare almeno 1 messaggio in chat.';
$string['completion_webcam_enabled'] = 'Webcam abilitata';
$string['completion_webcam_enabled_help'] = 'Richiedi all\'utente di attivare la webcam almeno una volta.';
$string['completion_webcam_duration'] = 'Durata abilitata della webcam (minuti)';
$string['completion_webcam_duration_help'] = 'Richiedi all\'utente di avere la webcam attivata per un certo numero di minuti.';
$string['completion_webcam_duration_desc'] = 'L\'utente deve avere la webcam attivata almeno per un periodo {$a} Minuti.';
$string['completion_mic_enabled'] = 'Microfono abilitato';
$string['completion_mic_enabled_help'] = 'Richiedi all\'utente di attivare il microfono almeno una volta.';
$string['completion_mic_duration'] = 'Durata attivata dal microfono (minuti)';
$string['completion_mic_duration_help'] = 'Richiedi all\'utente di avere il microfono attivato per un certo numero di minuti.';
$string['completion_mic_duration_desc'] = 'L\'utente deve avere il microfono abilitato almeno per {$a} Minuti.';
$string['completion_talk_duration'] = 'Durata della conversazione (minuti)';
$string['completion_talk_duration_help'] = 'Richiedi all\'utente di parlare per un certo numero di minuti.';
$string['completion_talk_duration_desc'] = 'L\'utente deve parlare almeno per {$a} Minuti.';
$string['completion_poll_voted'] = 'Votati nel sondaggio';
$string['completion_poll_voted_help'] = 'Richiedere all\'utente di votare almeno in un sondaggio.';
$string['completion_whiteboard_annotated'] = 'Annotato su lavagna bianca';
$string['completion_whiteboard_annotated_help'] = 'Richiedi all\'utente di annotare sulla lavagna.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Memorizza le statistiche delle sessioni per permettere agli utenti di determinare il completamento delle attività.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'L\'ID dell\'utente.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Dati di sessione codificati in JSON (verbali, messaggi di chat, ecc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'L\'ultima volta che le statistiche sono state aggiornate.';

// view.php
$string['join_session'] = 'Partecipa alla sessione';
$string['start_session'] = 'Inizio della sessione';
$string['end_session'] = 'Fine della sessione';
$string['participants'] = 'Partecipanti';
$string['is_recording'] = 'Is Recording';
$string['is_active'] = 'È attivo';
$string['room_info'] = 'Dettagli della sessione live';
$string['participants_info'] = 'Partecipanti dal vivo';
$string['room_id'] = 'ID della stanza';
$string['creation_time'] = 'Tempo di creazione';
$string['name'] = 'Nome';
$string['user_id'] = 'ID utente';
$string['is_admin'] = 'È Amministratore';
$string['is_presenter'] = 'È il presentatore';
$string['joined_at'] = 'Entrato in At';
$string['moderator_not_joined'] = 'Un moderatore deve iniziare la sessione prima che tu possa unirti.';
$string['session_available_from'] = 'Disponibile da: {$a}';
$string['session_available_until'] = 'Disponibile fino a: {$a}';
$string['session_not_started_yet'] = 'Questa sessione non è ancora iniziata.';
$string['session_ended'] = 'Questa sessione è finita.';
$string['allow_guest'] = 'Consentire utenti ospiti';
$string['allow_guest_help'] = 'Quando attivato, viene generato un link condividibile e sicuro affinché utenti esterni (come insegnanti ospiti o partecipanti senza account Moodle) possano unirsi alla sessione; Un amministratore può visualizzare e condividere questo link.';
$string['guest_join_link'] = 'Link di iscrizione agli ospiti';
$string['guest_join_link_help'] = 'Condividi questo link con partecipanti esterni. Questo link rimarrà valido per {$a} ore. Ogni ricarica della pagina genererà un nuovo link, ma i link precedentemente condivisi rimarranno validi fino al loro tempo di scadenza originale.';
$string['copy_link'] = 'Copia link';
$string['link_copied'] = 'Link copiato sulla cartellina.';
$string['guest_join_title'] = 'Unisciti alla riunione come ospite';
$string['enter_display_name'] = 'Inserisci il tuo nome di visualizzazione';
$string['join_as_guest'] = 'Partecipa alla riunione';
$string['guest_access_denied'] = 'L\'accesso agli ospiti non è abilitato per questa riunione.';
$string['invalid_guest_token'] = 'Token di ingresso ospite invalido o scaduto.';
$string['guest_link_expired'] = 'Questo link per l\'iscrizione agli ospiti è scaduto.';
$string['error_joining_session'] = 'C\'è stato un errore che si è aggiunto alla sessione: {$a}';
$string['already_logged_in'] = 'Sei già loggato su Moodle. Puoi partecipare direttamente alla sessione da questa pagina attività.';
$string['total_webcams'] = 'Webcam totali';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Condivisioni totali dello schermo';
$string['webcams'] = 'Webcam';
$string['mics'] = 'Microfoni';
$string['screenshares'] = 'Condivisione dello schermo';

// Events
$string['event_room_started'] = 'Stanza iniziata';
$string['event_room_ended'] = 'Stanza finita';
$string['event_room_created'] = 'Sala creata';
$string['event_session_ended'] = 'Fine della sessione';
$string['event_participant_joined'] = 'Partecipante si è unito';
$string['event_participant_left'] = 'Partecipante a sinistra';
$string['event_artifact_created'] = 'Reperto creato';
$string['event_recording_proceeded'] = 'Registrazione pronta';
$string['event_plugin_error'] = 'Errore PlugNmeet';
$string['event_track_published'] = 'Traccia pubblicata';
$string['event_track_unpublished'] = 'Traccia inedita';

// Notifications
$string['messageprovider:recording_ready'] = 'Notifiche per registrazioni pronte';
$string['messageprovider:artifact_ready'] = 'Notifiche per artefatti pronti';
$string['recording_ready_notification_subject'] = 'Registrazione pronta: {$a}';
$string['recording_ready_notification_fullmessage'] = 'La registrazione per la sessione "{$a->roomname}" è ora pronta ed elaborata. Puoi vederlo qui: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>La registrazione della sessione <strong>"{$a->roomname}"</strong> ora è pronto e processato.</p><p><a href="{$a->url}">Clicca qui per visualizzare la registrazione.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Registrazione pronta per {$a}';
$string['artifact_ready_notification_subject'] = 'Artefatto pronto: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Un nuovo artefatto ({$a->type}) per la sessione "{$a->roomname}" è ora disponibile. Puoi vederlo qui: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Un nuovo artefatto ({$a->type}) per la sessione <strong>"{$a->roomname}"</strong> ora è disponibile.</p><p><a href="{$a->URL}">Clicca qui per vedere i dettagli degli artefatti.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefatto pronto per {$a}';

// recordings.php
$string['no_recordings'] = 'Nessuna registrazione trovata.';
$string['recording_id'] = 'ID registrazione';
$string['room_sid'] = 'Stanza SID';
$string['file_size'] = 'Dimensione del file';
$string['created_at'] = 'Creato a';
$string['actions'] = 'Azioni';
$string['view'] = 'Vista';
$string['play'] = 'Giocare';
$string['download'] = 'Scaricare';
$string['delete'] = 'Cancellare';
$string['delete_confirm'] = 'Sei sicuro di voler cancellare questo?';
$string['delete_success'] = 'Cancellato con successo.';
$string['recording_details'] = 'Dettagli della registrazione';
$string['recording_creation_time'] = 'Tempo di creazione della registrazione';
$string['room_creation_time'] = 'Tempo di creazione della sessione';
$string['back_to_list'] = 'Torna alla lista';
$string['browser_not_support_video'] = 'Il tuo browser non supporta il tag video.';
$string['room_title'] = 'Titolo della stanza';
$string['total_participants'] = 'Partecipanti totali';
$string['session_started_at'] = 'La sessione è iniziata a';
$string['session_ended_at'] = 'Sessione terminata a';

// artifacts.php
$string['no_artifacts'] = 'Nessun reperto trovato.';
$string['artifact_id'] = 'ID Artefatto';
$string['type'] = 'Tipo';
$string['artifact_details'] = 'Dettagli degli artefatti';
$string['no_permission'] = 'Non hai il permesso di visualizzare questa pagina.';
$string['token_usage'] = 'Utilizzo del token';
$string['duration_usage'] = 'Durata di utilizzo';
$string['character_count_usage'] = 'Uso del conteggio dei caratteri';
$string['estimated_cost'] = 'Costo stimato';
$string['file_path'] = 'Percorso file';
$string['mime_type'] = 'Tipo di mimo';
$string['created_at'] = 'Creato a';

// Analytics strings
$string['download_excel_report'] = 'Scarica il Report Excel';
$string['download_raw_json'] = 'Scarica i dati grezzi';
$string['room_summary'] = 'Riassunto della stanza';
$string['users_summary'] = 'Riepilogo degli utenti';
$string['see_excel_report'] = 'Vedi il report Excel per i dettagli';
$string['error_loading_analytics'] = 'Dati analitici di caricamento degli errori: {$a}';
$string['error_generating_excel'] = 'Report Excel che genera errori: {$a}';

$string['analytics_room_room_id'] = 'ID della stanza';
$string['analytics_room_room_title'] = 'Titolo della stanza';
$string['analytics_room_room_creation'] = 'Tempo di creazione della stanza';
$string['analytics_room_room_ended'] = 'Stanza Tempo Finito';
$string['analytics_room_room_duration'] = 'Durata della stanza';
$string['analytics_room_room_total_users'] = 'Partecipanti totali';
$string['analytics_room_enabled_e2ee'] = 'E2EE abilitato';
$string['analytics_room_recording_status'] = 'Conteggio dello stato della registrazione';
$string['analytics_room_rtmp_status'] = 'Conteggio dello stato RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Utilizzo totale del servizio vocale';
$string['analytics_room_external_media_player_status'] = 'Conteggio dello stato dei lettori multimediali esterni';
$string['analytics_room_etherpad_status'] = 'Conteggio dello stato dell\'Etherpad';
$string['analytics_room_external_display_link_status'] = 'Conteggio dello stato del link di visualizzazione esterno';
$string['analytics_room_ingress_created'] = 'Ingress Created Count';
$string['analytics_room_breakout_room'] = 'Numero delle stanze di raccolta';

$string['analytics_user_name'] = 'Nome';
$string['analytics_user_id'] = 'ID utente';
$string['analytics_user_ex_id'] = 'ID utente';
$string['analytics_user_is_admin'] = 'È Amministratore';
$string['analytics_user_duration'] = 'Durata';
$string['analytics_user_joined'] = 'Entrato in At';
$string['analytics_user_left'] = 'Sinistra a';
$string['analytics_user_mic_status'] = 'Cambiamenti nello stato del microfono';
$string['analytics_user_mic_muted'] = 'Conteggio Smorzato del Microfono';
$string['analytics_user_mic_duration'] = 'Durata abilitata dal microfono';
$string['analytics_user_talked'] = 'Conteggio parlato';
$string['analytics_user_talked_duration'] = 'Durata del Parlato';
$string['analytics_user_webcam_status'] = 'Cambiamenti nello stato della webcam';
$string['analytics_user_webcam_duration'] = 'Durata abilitata della webcam';
$string['analytics_user_raise_hand'] = 'Conteggio delle mani alzate';
$string['analytics_user_voted_poll'] = 'Conteggio dei voti';
$string['analytics_user_whiteboard_annotated'] = 'Whiteboard Conte annotato';
$string['analytics_user_whiteboard_files'] = 'Conteggio dei file della lavagna';
$string['analytics_user_screen_share_status'] = 'Cambiamenti nello stato della condivisione dello schermo';
$string['analytics_user_speech_services_usage'] = 'Utilizzo dei servizi vocali';
$string['analytics_user_public_chat'] = 'Messaggi in chat pubbliche';
$string['analytics_user_private_chat'] = 'Messaggi privati in chat';
$string['analytics_user_chat_files'] = 'File di chat condivisi';
$string['analytics_user_interface_invisible'] = 'Conteggio invisibile dell\'interfaccia';
$string['analytics_user_connection_quality'] = 'Qualità della connessione';
$string['analytics_user_connection_quality_excellent'] = 'Eccellente';
$string['analytics_user_connection_quality_good'] = 'Bene';
$string['analytics_user_connection_quality_poor'] = 'Poveri';

$string['users_info'] = 'Informazioni sugli utenti';
$string['polls'] = 'Sondaggi';
$string['question'] = 'Domanda';
$string['options'] = 'Opzioni';
$string['file_name'] = 'Nome file';
$string['checkcompletiontask'] = 'Controlla il completamento del plugNmeet';

// attendance.php
$string['attendance_report'] = 'Rapporto di presenze';
$string['status'] = 'Stato';
$string['present'] = 'Presente';
$string['absent'] = 'Assente';
$string['incomplete'] = 'Incompleto';
$string['completed'] = 'Completato';
$string['minutes_attended'] = 'Minuti assistiti';
$string['last_updated'] = 'Ultimo aggiornamento';
$string['mic_duration'] = 'Durata abilitata dal microfono';
$string['webcam_duration'] = 'Durata abilitata della webcam';
$string['participation_progress'] = 'Progressi nella partecipazione';
$string['attendance_duration'] = 'Minuti assistiti';
$string['attendance_webcam_status'] = 'Webcam abilitata';
$string['attendance_mic_status'] = 'Microfono abilitato';
$string['attendance_talked_duration'] = 'Durata della conferenza';
$string['attendance_voted_poll'] = 'Votati nel sondaggio';
$string['attendance_chat_messages'] = 'Messaggi in chat inviati';
$string['attendance_raise_hand'] = 'Mano alzata';
$string['attendance_webcam_duration'] = 'Durata abilitata della webcam';
$string['attendance_mic_duration'] = 'Durata abilitata dal microfono';
$string['attendance_whiteboard_annotated'] = 'Annotato su lavagna bianca';
$string['met'] = 'Met';
$string['required'] = 'Richiesto';

// Status codes
$string['status_unknown_status'] = 'Lo stato sconosciuto è stato restituito dal server.';
$string['status_success'] = 'L\'operazione fu completata con successo.';
$string['status_permission_denied'] = 'Permesso negato.';
$string['status_not_found'] = 'No {$a} Trovato.';
$string['status_conflict'] = 'Questa azione non poteva essere completata a causa di un conflitto (ad esempio, la stanza potrebbe già esistere).';
$string['status_invalid_token_or_signature'] = 'Il token o la firma della richiesta è invalido.';
$string['status_invalid_api_key'] = 'La chiave API fornita è invalida. Controlla le impostazioni del plugin.';
$string['status_internal_server_error'] = 'Il server PlugNmeet ha riscontrato un errore interno.';
$string['status_invalid_parameters'] = 'Le informazioni fornite sono invalide.';
$string['status_missing_required_parameter'] = 'Alcune informazioni richieste mancano.';
$string['status_room_not_found'] = 'La stanza specificata non fu trovata.';
$string['status_user_not_found'] = 'Account utente non trovato. Assicurati che le tue credenziali API siano corrette e che l\'abbonamento sia attivo.';
$string['status_user_blocked'] = 'L\'account utente è bloccato. Per favore, contatta il supporto.';
$string['status_user_not_active'] = 'L\'account utente non è attivo. Probabilmente ciò è dovuto a un abbonamento inattivo o scaduto.';
