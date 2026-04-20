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
$string['plugnmeet:viewattendancelist'] = 'View attendance list';
$string['plugnmeet:viewlivesessioninfo'] = 'Visualizza le informazioni della sessione live';
$string['plugnmeet:viewrecordings'] = 'Visualizza le registrazioni';
$string['plugnmeetfieldset'] = 'Campo di esempio personalizzato';
$string['plugnmeetname'] = 'Nome di esempio personalizzato';
$string['plugnmeetname_help'] = 'Aiuto per esempi personalizzati';

// Admin Settings
$string['api_config'] = 'Configurazione API';
$string['server_url'] = 'PlugNmeet Server URL';
$string['server_url_desc'] = 'L\'URL base del tuo server PlugNmeet (ad esempio, https://pnm.example.com)';
$string['api_key'] = 'Chiave API';
$string['api_key_desc'] = 'La chiave API fornita dal tuo server PlugNetet.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'Il segreto API fornito dal tuo server PlugNetet.';
$string['guest_access_hdr'] = 'Impostazioni di accesso ospite';
$string['allow_guest_global'] = 'Consentire l\'accesso degli ospiti a livello globale';
$string['allow_guest_global_desc'] = 'Se disabilitato, l\'iscrizione degli ospiti non può essere abilitata per nessuna sala riunioni.';
$string['guest_link_expiration'] = 'Scadenza del link ospite (orari)';
$string['guest_link_expiration_desc'] = 'Quanto tempo un link di iscrizione a un ospite rimane valido dopo la generazione.';

$string['defaults'] = 'Impostazioni tecniche';
$string['defaults_desc'] = 'Impostazioni tecniche predefinite per le nuove sessioni PlugNmeet.';
$string['enable_dynacast'] = 'Abilita Dynacast';
$string['enable_dynacast_des'] = 'Usa Dynacast per ottimizzare i flussi video pubblicando solo l\'altoparlante attivo più recentemente.';
$string['enable_simulcast'] = 'Abilita la simulcast';
$string['enable_simulcast_des'] = 'Usa il Simulcast per fornire più livelli di qualità video agli spettatori.';
$string['video_codec'] = 'Video Codec';
$string['video_codec_des'] = 'Il codec video predefinito per le sessioni.';
$string['default_webcam_resolution'] = 'Risoluzione predefinita della webcam';
$string['default_webcam_resolution_des'] = 'La risoluzione predefinita per le webcam.';
$string['default_screen_share_resolution'] = 'Risoluzione predefinita della condivisione schermo';
$string['default_screen_share_resolution_des'] = 'La risoluzione predefinita per la condivisione dello schermo.';
$string['default_audio_preset'] = 'Predefinito preset audio';
$string['default_audio_preset_des'] = 'Il preset audio predefinito per le sessioni.';

$string['branding'] = 'Branding e personalizzazione';
$string['custom_logo'] = 'Logo personalizzato';
$string['custom_logo_des'] = 'Carica un logo personalizzato da esporre nella sala riunioni. Se vuoto, verrà utilizzato il logo predefinito di PlugNmeet.';
$string['custom_css_url'] = 'URL CSS personalizzato';
$string['custom_css_url_des'] = 'Fornisci un URL a un file CSS esterno per personalizzare l\'aspetto e l\'atmosfera della sala riunioni.';
$string['primary_color'] = 'Colore primario';
$string['primary_color_des'] = 'Il colore principale per bottoni e evidenzi.';
$string['secondary_color'] = 'Colore secondario';
$string['secondary_color_des'] = 'Il colore secondario per gli elementi dell\'interfaccia utente.';
$string['background_color'] = 'Colore di sfondo';
$string['background_color_des'] = 'Colore di sfondo dell\'interfaccia';
$string['background_image'] = 'Immagine di sfondo';
$string['background_image_des'] = 'Dovrebbe avere una dimensione di 1920X1080 per ottenere il miglior risultato.';
$string['header_color'] = 'Colore intestazione';
$string['header_color_des'] = 'Colore dell\'intestazione dell\'interfaccia';
$string['footer_color'] = 'Colore piè di pagina';
$string['footer_color_des'] = 'Colore del piè di pagina dell\'interfaccia';
$string['left_color'] = 'Colore lato sinistro';
$string['left_color_des'] = 'Colore della barra laterale sinistra';
$string['side_panel_bg_color'] = 'Colore di sfondo del pannello laterale';
$string['side_panel_bg_color_des'] = 'Colore dello sfondo del pannello laterale destro';
$string['copyright_text'] = 'Testo del copyright';
$string['copyright_text_des'] = 'Il testo del copyright da mostrare nel footer della sala riunioni. L\'HTML è permesso.';
$string['client_load'] = 'Carico client da';
$string['client_load_des'] = 'Predefinita: Locale';
$string['remote'] = 'Remoto';
$string['local'] = 'Locale';

$string['client_side'] = 'Opzioni lato cliente';
$string['client_load_mode'] = 'Modalità di carico del client';
$string['client_load_mode_desc'] = 'Scegli se caricare il client web dal server remoto o da una copia locale.';
$string['remote'] = 'Remoto';
$string['local'] = 'Locale';
$string['client_download_url'] = 'URL di download del cliente';
$string['client_download_url_des'] = 'Se usi la modalità di caricamento "Local", fornisci l\'URL al file client.zip.';
$string['update_client_btn'] = 'Aggiorna il client locale';
$string['update_client_btn_label'] = 'Aggiornamento ora';

$string['yes'] = 'Sì';
$string['no'] = 'No';
$string['recordings'] = "Registrazioni";
$string['artifacts'] = "Reperti della stanza";
$string['attendance'] = "Rapporto di presenze";
$string['artifact'] = "Reperto";

// mod_form.php
$string['roomtitle'] = 'Titolo della stanza';
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
$string['deadline'] = 'Disponibile fino a';
$string['err_deadline_before_available'] = 'La data "Disponibile fino" non può essere precedente a quella "Disponibile da".';
$string['error_analytics_required_for_completion'] = 'Abilita Analytics deve essere controllata se sono stati impostati criteri di completamento.';

$string['allow_webcams'] = 'Permette le webcam';
$string['allow_webcams_help'] = 'Permette ai partecipanti di usare le loro webcam.';
$string['mute_on_start'] = 'Mute all\'avvio';
$string['mute_on_start_help'] = 'Mettere in silenzio automaticamente tutti i partecipanti quando entrano nella sessione.';
$string['allow_screen_share'] = 'Consentire la condivisione dello schermo';
$string['allow_screen_share_help'] = 'Permette ai partecipanti di condividere il proprio schermo.';
$string['allow_rtmp'] = 'Consenti lo streaming RTMP';
$string['allow_rtmp_help'] = 'Consentire ai moderatori di trasmettere la sessione in streaming verso un endpoint RTMP.';
$string['admin_only_webcams'] = 'Webcam solo per amministratori';
$string['admin_only_webcams_help'] = 'Permette solo ai moderatori di usare le webcam.';
$string['room_duration'] = 'Durata della stanza (minuti)';
$string['room_duration_help'] = 'Definisce quanto tempo la stanza può rimanere aperta prima di chiudersi automaticamente. Inserisci 0 se non vuoi impostare un limite di tempo, permettendo alla stanza di rimanere attiva senza restrizioni.';
$string['moderator_join_first'] = 'Moderatore: Iscriviti per primo';
$string['moderator_join_first_help'] = 'Quando attivato, la sessione non inizia e nessuno può unirsi finché un moderatore (come un insegnante) non si unisce per primo. I partecipanti rimarranno sulla pagina delle attività Moodle e non entreranno nella stanza o nell\'area d\'attesa. Questo è diverso dall\'opzione Sala d\'Attesa, dove gli utenti possono comunque unirsi e aspettare.';
$string['enable_analytics'] = 'Abilita l\'analisi';
$string['enable_analytics_help'] = 'Genera analisi per la sessione. Nota: Questo deve essere abilitato se sono stati impostati criteri di completamento.';
$string['allow_virtual_bg'] = 'Consentire sfondi virtuali';
$string['allow_virtual_bg_help'] = 'Consentire ai partecipanti di utilizzare sfondi virtuali.';
$string['auto_gen_user_id'] = 'Generazione automatica dell\'ID utente';
$string['auto_gen_user_id_help'] = 'Quando abilitato, il sistema crea un nuovo ID affinché lo stesso utente possa unirsi da più dispositivi—ad esempio, quando un insegnante si unisce da un tablet per disegnare sulla lavagna usando un PC per la fotocamera e il microfono; tuttavia, è vero <b>Consigliato</b> per mantenere questo disattivato in modo da utilizzare l\'ID utente di Moodle e evitare i duplicati di unione.';

$string['allow_recording'] = 'Consentire la registrazione';
$string['allow_recording_help'] = 'Permette che la sessione venga registrata.';
$string['allow_cloud_recording'] = 'Consentire la registrazione nel cloud';
$string['allow_cloud_recording_help'] = 'Permette che la sessione venga registrata nel cloud.';
$string['enable_auto_cloud_recording'] = 'Abilita la registrazione automatica sul cloud';
$string['enable_auto_cloud_recording_help'] = 'Inizia automaticamente a registrare quando inizia la sessione.';
$string['allow_local_recording'] = 'Consentire la registrazione locale';
$string['allow_local_recording_help'] = 'Consentire ai partecipanti di registrare la sessione localmente.';
$string['is_allow_view_recording'] = 'Consentire la visualizzazione delle registrazioni';
$string['is_allow_view_recording_help'] = 'Permette ai partecipanti di visualizzare le registrazioni.';
$string['is_allow_download_recording'] = 'Consentire il download delle registrazioni';
$string['is_allow_download_recording_help'] = 'Consentire ai partecipanti di scaricare le registrazioni.';

$string['allow_chat'] = 'Consenti la chat';
$string['allow_chat_help'] = 'Attiva la funzione di chat pubblica.';
$string['allow_file_upload'] = 'Consenti il caricamento del file';
$string['allow_file_upload_help'] = 'Consentire ai partecipanti di caricare file nella chat.';

$string['allow_shared_notepad'] = 'Consentire la condivisione del blocco note';
$string['allow_shared_notepad_help'] = 'Permette ai partecipanti di utilizzare il blocco appunti condiviso.';
$string['allow_whiteboard'] = 'Consenti lavagna';
$string['allow_whiteboard_help'] = 'Permette ai partecipanti di usare la lavagna bianca.';
$string['allowed_external_media_player'] = 'Consenti lettore multimediale esterno';
$string['allowed_external_media_player_help'] = 'Permette ai partecipanti di riprodurre contenuti esterni (ad esempio, video su YouTube).';
$string['activate_waiting_room'] = 'Attiva la sala d\'attesa';
$string['activate_waiting_room_help'] = 'Attiva la sala d\'attesa per questa sessione.';
$string['waiting_room_msg'] = 'Messaggio nella sala d\'attesa';
$string['waiting_room_msg_help'] = 'Questo messaggio viene mostrato agli utenti mentre aspettano di essere ammessi nella stanza. Usalo per condividere istruzioni, aspettative o informazioni utili prima che inizi la sessione.';
$string['allow_breakout_rooms'] = 'Permettete le stanze di raccolta';
$string['allow_breakout_rooms_help'] = 'Permette ai moderatori di creare sale di gruppo.';
$string['allowed_number_rooms'] = 'Numero consentito di stanze per i gruppi';
$string['allow_display_external_link_features'] = 'Consenti visualizzazione Collegamento esterno';
$string['allow_display_external_link_features_help'] = 'Consentire ai moderatori di mostrare un link esterno a tutti i partecipanti.';
$string['allow_ingress_features'] = 'Consentire l\'ingresso';
$string['allow_ingress_features_help'] = 'Consentire l\'ingresso nella sessione.';
$string['allow_polls'] = 'Permesso i sondaggi';
$string['allow_polls_help'] = 'Permette ai moderatori di creare sondaggi.';
$string['sip_dial_in_features_is_allow'] = 'Consentire la dial-in SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Consentire ai partecipanti di partecipare alla sessione tramite SIP dial-in.';

$string['enable_end_to_end_encryption_features'] = 'Abilita la crittografia end-to-end';
$string['enable_end_to_end_encryption_features_help'] = 'Abilita la crittografia end-to-end per la sessione.';
$string['enabled_self_insert_encryption_key'] = 'Consentire l\'autoinserimento della chiave di crittografia';
$string['enabled_self_insert_encryption_key_help'] = 'Consentire ai partecipanti di inserire la propria chiave di crittografia.';
$string['included_e2ee_chat_messages'] = 'Includi i messaggi di chat in E2EE';
$string['included_e2ee_chat_messages_help'] = 'Includere i messaggi della chat nella crittografia end-to-end.';
$string['included_e2ee_whiteboard'] = 'Includere la lavagna bianca in E2EE';
$string['included_e2ee_whiteboard_help'] = 'Includere la lavagna nella crittografia end-to-end.';

$string['insights_features_is_allow'] = 'Permettere Insight';
$string['insights_features_is_allow_help'] = 'Permettete di generare approfondimenti per questa sessione.';
$string['insights_transcription_features_is_allow'] = 'Consentire la trascrizione';
$string['insights_transcription_features_is_allow_help'] = 'Permette che la sessione venga trascrivata.';
$string['insights_transcription_features_is_allow_translation'] = 'Consentire la traduzione della trascrizione';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permette che la trascrizione venga tradotta.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Consentire la trascrizione della sintesi vocale';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Permette che la trascrizione venga letta ad alta voce.';
$string['insights_chat_translation_features_is_allow'] = 'Consentire la traduzione della chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Consentire la traduzione dei messaggi della chat.';
$string['insights_ai_features_is_allow'] = 'Consentire funzionalità di IA';
$string['insights_ai_features_is_allow_help'] = 'Consentire l\'uso delle funzionalità di IA in questa sessione.';
$string['insights_ai_text_chat_features_is_allow'] = 'Consenti la chat testuale tramite IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Permette di usare l\'IA nella chat.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Consentire la sintesi delle riunioni tramite IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Permettete che l\'incontro venga riassunto dall\'IA.';

$string['lock_microphone'] = 'Microfono di blocco';
$string['lock_microphone_help'] = 'Disabilita di default tutti i microfoni dei partecipanti.';
$string['lock_webcam'] = 'Webcam a blocco';
$string['lock_webcam_help'] = 'Disabilita di default tutte le webcam dei partecipanti.';
$string['lock_screen_sharing'] = 'Condivisione della schermata di blocco';
$string['lock_screen_sharing_help'] = 'Disabilita la condivisione dello schermo per tutti i partecipanti di default.';
$string['lock_whiteboard'] = 'Blocca la lavagna bianca';
$string['lock_whiteboard_help'] = 'Disabilita la lavagna bianca per tutti i partecipanti di default.';
$string['lock_shared_notepad'] = 'Blocca blocco Note condiviso';
$string['lock_shared_notepad_help'] = 'Disabilita le note condivise per tutti i partecipanti di default.';
$string['lock_chat'] = 'Chat bloccata';
$string['lock_chat_help'] = 'Disabilita la chat pubblica per tutti i partecipanti di default.';
$string['lock_chat_send_message'] = 'Blocca la chat Invia messaggio';
$string['lock_chat_send_message_help'] = 'Disabilita di default l\'invio di messaggi nella chat pubblica per tutti i partecipanti.';
$string['lock_chat_file_share'] = 'Blocca la chat di condivisione file';
$string['lock_chat_file_share_help'] = 'Disabilita la condivisione file nella chat pubblica per tutti i partecipanti di default.';
$string['lock_private_chat'] = 'Blocca la chat privata';
$string['lock_private_chat_help'] = 'Disabilita la chat privata per tutti i partecipanti di default.';

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
