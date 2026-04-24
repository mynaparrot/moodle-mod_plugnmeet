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
$string['modulename_help'] = 'Il modulo attività PlugNmeet consente di creare e gestire sessioni di videoconferenza in tempo reale direttamente da Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Amministrazione di plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Aggiungi una nuova attività PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Elimina gli artefatti';
$string['plugnmeet:deleterecording'] = 'Elimina le registrazioni';
$string['plugnmeet:downloadanalyticsreport'] = 'Scarica il report analitico';
$string['plugnmeet:downloadartifacts'] = 'Scarica gli artefatti';
$string['plugnmeet:downloadattendance'] = 'Scarica il report delle presenze';
$string['plugnmeet:downloadrecordings'] = 'Scarica le registrazioni';
$string['plugnmeet:manage'] = 'Gestisci le impostazioni di PlugNmeet';
$string['plugnmeet:view'] = 'Visualizza l\'attività di PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Visualizza il report delle stanze attive';
$string['plugnmeet:viewartifacts'] = 'Visualizza gli artefatti';
$string['plugnmeet:viewattendance'] = 'Visualizza il report delle presenze';
$string['plugnmeet:viewattendancelist'] = 'Visualizza l\'elenco dei partecipanti';
$string['plugnmeet:viewlivesessioninfo'] = 'Visualizza le informazioni sulla sessione in diretta';
$string['plugnmeet:viewrecordings'] = 'Visualizza le registrazioni';
$string['plugnmeetfieldset'] = 'Esempio di set di campi personalizzato';
$string['plugnmeetname'] = 'Nome dell\'esempio personalizzato';
$string['plugnmeetname_help'] = 'Esempio di aiuto personalizzato';

// Admin Settings
$string['api_config'] = 'Configurazione API';
$string['server_url'] = 'URL del server PlugNmeet';
$string['server_url_desc'] = 'L\'URL di base del tuo server PlugNmeet (ad esempio, https://pnm.example.com).';
$string['api_key'] = 'Chiave API';
$string['api_key_desc'] = 'La chiave API univoca fornita dal tuo server PlugNmeet.';
$string['api_secret'] = 'Segreto dell\'API';
$string['api_secret_desc'] = 'La chiave segreta API fornita dal tuo server PlugNmeet, utilizzata per l\'autenticazione sicura.';
$string['guest_access_hdr'] = 'Impostazioni di accesso ospite';
$string['allow_guest_global'] = 'Consenti l\'accesso degli ospiti a livello globale';
$string['allow_guest_global_desc'] = 'Funziona come un interruttore generale. Se disabilitato, gli insegnanti non visualizzeranno l\'opzione per abilitare la partecipazione degli ospiti durante la creazione o la modifica delle attività.';
$string['guest_link_expiration'] = 'Scadenza del link per gli ospiti (ore)';
$string['guest_link_expiration_desc'] = 'Determina per quante ore un link di accesso per gli ospiti rimane attivo dopo essere stato generato da un insegnante.';
$string['defaults'] = 'Impostazioni predefinite tecniche';
$string['defaults_desc'] = 'Configurazioni tecniche predefinite applicate a ogni nuova sessione di PlugNmeet.';
$string['enable_dynacast'] = 'Attiva Dynacast';
$string['enable_dynacast_des'] = 'Ottimizza le prestazioni mettendo in pausa dinamicamente i livelli video non visualizzati dai partecipanti. Ciò riduce significativamente l\'utilizzo della CPU e della larghezza di banda lato server. **Nota:** Questa opzione verrà abilitata automaticamente se si utilizzano codec SVC (VP9/AV1) ed è necessaria per la trasmissione simultanea multi-codec.';
$string['enable_simulcast'] = 'Abilita la trasmissione simultanea';
$string['enable_simulcast_des'] = 'Offre più livelli di qualità video per garantire un\'esperienza fluida agli utenti con connessioni deboli.';
$string['video_codec'] = 'Codec video';
$string['video_codec_des'] = 'Lo standard di codifica per la trasmissione video. **VP8** è consigliato per WebRTC in quanto offre il miglior equilibrio tra qualità e bassa latenza. **Attenzione:** Non tutti i browser supportano tutti i codec; assicurati che i tuoi utenti utilizzino browser moderni se usi VP9 o H.265.';
$string['default_webcam_resolution'] = 'Risoluzione predefinita della webcam';
$string['default_webcam_resolution_des'] = 'Impostazione iniziale della risoluzione per le telecamere dei partecipanti.';
$string['default_screen_share_resolution'] = 'Risoluzione predefinita per la condivisione dello schermo';
$string['default_screen_share_resolution_des'] = 'Impostazione iniziale della risoluzione per la condivisione dello schermo.';
$string['default_audio_preset'] = 'Preset audio predefinito';
$string['default_audio_preset_des'] = 'Profilo di qualità audio ottimizzato per la sessione.';

$string['branding'] = 'Branding e personalizzazione';
$string['custom_logo'] = 'Logo personalizzato';
$string['custom_logo_des'] = 'Carica il tuo logo nella sala riunioni. Se il campo viene lasciato vuoto, verrà utilizzato il logo predefinito di PlugNmeet.';
$string['custom_css_url'] = 'URL CSS personalizzato';
$string['custom_css_url_des'] = 'Collega un file .css esterno per sovrascrivere o personalizzare gli stili dell\'interfaccia.';
$string['primary_color'] = 'Colore primario';
$string['primary_color_des'] = 'Colore principale utilizzato per i pulsanti, gli stati attivi e le evidenziazioni.';
$string['secondary_color'] = 'Colore secondario';
$string['secondary_color_des'] = 'Il colore di accento utilizzato per gli elementi secondari dell\'interfaccia utente.';
$string['background_color'] = 'Colore di sfondo';
$string['background_color_des'] = 'Il colore di sfondo principale dell\'interfaccia.';
$string['background_image'] = 'Immagine di sfondo';
$string['background_image_des'] = 'Sfondo per desktop. Per risultati ottimali, utilizzare un\'immagine di 1920x1080 pixel.';
$string['header_color'] = 'Colore dell\'intestazione';
$string['header_color_des'] = 'Colore di sfondo per la barra di navigazione superiore.';
$string['footer_color'] = 'Colore del piè di pagina';
$string['footer_color_des'] = 'Colore di sfondo per la barra degli strumenti inferiore.';
$string['left_color'] = 'Colore del lato sinistro';
$string['left_color_des'] = 'Colore di sfondo per la barra laterale di navigazione a sinistra.';
$string['side_panel_bg_color'] = 'Colore di sfondo del pannello laterale';
$string['side_panel_bg_color_des'] = 'Colore di sfondo per i pannelli laterali di destra (Chat e Elenco partecipanti).';
$string['copyright_text'] = 'Testo protetto da copyright';
$string['copyright_text_des'] = 'Il testo del marchio viene visualizzato nel piè di pagina delle impostazioni. È supportato l\'HTML per i link o la personalizzazione dello stile.';
$string['client_load'] = 'Metodo di caricamento client';
$string['client_load_des'] = 'Scegli **Remoto** (consigliato) per un\'esperienza fluida e personalizzata integrata direttamente nella tua pagina Moodle. Scegli **Reindirizzamento** per utilizzare l\'interfaccia predefinita di plugNmeet; tieni presente che gli utenti lasceranno il tuo sito e la personalizzazione del marchio potrebbe non essere applicata.';
$string['remote'] = 'Remoto (integrato)';
$string['redirect'] = 'Reindirizzamento al server';

$string['yes'] = 'SÌ';
$string['no'] = 'NO';
$string['recordings'] = "Registrazioni";
$string['recording'] = "Registrazione";
$string['artifacts'] = "Oggetti della stanza";
$string['attendance'] = "Rapporto sulle presenze";
$string['artifact'] = "Artefatto";
$string['room_subject'] = 'camera';
$string['user_subject'] = 'utente';
$string['activeroomsreport'] = 'Rapporto sulle stanze attive';
$string['noactiverooms'] = 'Al momento non ci sono stanze attive.';
$string['activerooms'] = 'Stanze attive';
$string['loading'] = 'Caricamento...';

// mod_form.php
$string['roomtitle'] = 'Titolo della stanza';
$string['roomtitle_help'] = 'Nome utilizzato per l\'attività su Moodle e per l\'intestazione della riunione in diretta. Aiuta gli studenti a identificare la sessione all\'interno del loro corso e della stanza virtuale.';
$string['welcome_message'] = 'Messaggio di benvenuto';
$string['welcome_message_help'] = 'Qualsiasi testo inserito qui apparirà come primo messaggio nella chat pubblica quando gli utenti entrano nella stanza. Questo è utile per condividere istruzioni, link o informazioni importanti con i partecipanti al loro ingresso.';
$string['max_participants'] = 'Numero massimo di partecipanti';
$string['max_participants_help'] = 'Imposta questo valore per limitare il numero di utenti che possono partecipare alla sessione contemporaneamente. Impostalo a 0 per consentire un numero illimitato di partecipanti, ovvero senza alcuna restrizione sul numero di utenti che possono accedere.';
$string['room_features'] = 'Caratteristiche della camera';
$string['recording_features'] = 'Caratteristiche di registrazione';
$string['chat_features'] = 'Funzionalità della chat';
$string['other_features'] = 'Altre caratteristiche';
$string['e2ee_features'] = 'Crittografia end-to-end';
$string['insights_features'] = 'Approfondimenti e funzionalità di intelligenza artificiale';
$string['defaultlock'] = 'Impostazioni di blocco predefinite';
$string['advanced_completion'] = 'Completamento avanzato';
$string['available'] = 'Disponibile da';
$string['available_help'] = 'Determina quando i partecipanti possono iniziare ad accedere alla sessione. Gli utenti non potranno entrare nella stanza prima di questa data e ora.';
$string['deadline'] = 'Disponibile fino a';
$string['deadline_help'] = 'Stabilisce la data e l\'ora limite entro cui i partecipanti possono accedere alla sessione. L\'accesso verrà bloccato una volta trascorso tale termine.';
$string['err_deadline_before_available'] = 'La data "Disponibile fino a" non può essere anteriore alla data "Disponibile da".';
$string['error_analytics_required_for_completion'] = 'Se sono impostati dei criteri di completamento, l\'opzione "Abilita analisi" deve essere selezionata.';

$string['allow_webcams'] = 'Consenti le webcam';
$string['allow_webcams_help'] = 'Consentire ai partecipanti di utilizzare le proprie webcam.';
$string['mute_on_start'] = 'Disattiva audio all\'avvio';
$string['mute_on_start_help'] = 'Disattiva automaticamente l\'audio di tutti i partecipanti all\'ingresso nella sessione.';
$string['allow_screen_share'] = 'Consenti la condivisione dello schermo';
$string['allow_screen_share_help'] = 'Consenti ai partecipanti di condividere il proprio schermo.';
$string['allow_rtmp'] = 'Consenti lo streaming RTMP';
$string['allow_rtmp_help'] = 'Consente ai moderatori di trasmettere la sessione in diretta su piattaforme esterne come YouTube, Facebook o Twitch. Ideale per webinar pubblici o conferenze.';
$string['allow_raise_hand'] = 'Consentire di alzare la mano';
$string['allow_raise_hand_help'] = 'Consentire ai partecipanti di alzare la mano.';
$string['admin_only_webcams'] = 'Webcam riservate agli amministratori';
$string['admin_only_webcams_help'] = 'Consenti l\'utilizzo delle webcam solo ai moderatori.';
$string['allow_view_other_webcams'] = 'Consenti la visualizzazione di altre webcam';
$string['allow_view_other_webcams_help'] = 'Consenti ai partecipanti di visualizzare le webcam degli altri partecipanti. Se disabilitata, visualizzeranno solo le webcam dei moderatori.';
$string['allow_view_other_users_list'] = 'Consenti la visualizzazione dell\'elenco degli altri utenti';
$string['allow_view_other_users_list_help'] = 'Consenti ai partecipanti di visualizzare l\'elenco degli altri partecipanti.';
$string['room_duration'] = 'Durata della stanza (minuti)';
$string['room_duration_help'] = 'Definisce per quanto tempo la stanza può rimanere aperta prima di chiudersi automaticamente. Inserisci 0 se non desideri impostare alcun limite di tempo, consentendo alla stanza di rimanere attiva senza restrizioni.';
$string['moderator_join_first'] = 'Moderatore Iscriviti per primo';
$string['moderator_join_first_help'] = 'Quando questa opzione è abilitata, la sessione non si avvierà e nessuno potrà partecipare finché un moderatore (ad esempio un insegnante) non si unirà per primo. I partecipanti rimarranno sulla pagina dell\'attività di Moodle e non accederanno alla stanza o all\'area di attesa. Questa opzione è diversa dalla Sala d\'attesa, che consente agli utenti di accedere e attendere.';
$string['enable_analytics'] = 'Analisi del funzionamento';
$string['enable_analytics_help'] = 'Tiene traccia dei dati di partecipazione e coinvolgimento per la sessione. **Nota:** Questa opzione deve essere abilitata se sono impostati dei criteri di completamento.';
$string['allow_virtual_bg'] = 'Consenti sfondi virtuali';
$string['allow_virtual_bg_help'] = 'Consente ai partecipanti di sfocare lo sfondo o utilizzare un\'immagine virtuale. Ideale per tutelare la privacy degli studenti e garantire un aspetto professionale all\'aula.';
$string['auto_gen_user_id'] = 'Generazione automatica dell\'ID utente';
$string['auto_gen_user_id_help'] = 'Quando abilitato, il sistema crea un nuovo ID affinché lo stesso utente possa unirsi da più dispositivi—ad esempio, quando un insegnante si unisce da un tablet per disegnare sulla lavagna usando un PC per la fotocamera e il microfono; tuttavia, è vero <b>Consigliato</b> per mantenere questo disattivato in modo da utilizzare l\'ID utente di Moodle e evitare i duplicati di unione.';

$string['allow_recording'] = 'Consenti la registrazione (Interruttore principale)';
$string['allow_recording_help'] = 'Interruttore principale per tutte le funzioni di registrazione. Se disabilitato, sia la registrazione su cloud che quella locale saranno nascoste ai moderatori.';
$string['allow_cloud_recording'] = 'Consenti la registrazione su cloud';
$string['allow_cloud_recording_help'] = 'Consente la registrazione sul server di PlugNmeet. Il video finale viene elaborato e archiviato nel cloud, facilitandone la condivisione tramite un link al termine della sessione.';
$string['enable_auto_cloud_recording'] = 'Abilita la registrazione automatica sul cloud';
$string['enable_auto_cloud_recording_help'] = 'La registrazione sul cloud si attiva automaticamente nel momento in cui il primo moderatore si unisce alla sessione. Ideale per garantire che nessuna lezione venga dimenticata.';
$string['allow_local_recording'] = 'Consenti la registrazione locale';
$string['allow_local_recording_help'] = 'Consente la registrazione diretta sul computer. **Nota:** Richiede Google Chrome. Per acquisire tutto l\'audio della sessione, l\'utente deve condividere la propria "Scheda di Chrome" e selezionare la casella "Condividi anche l\'audio della scheda". Il file viene salvato localmente sul dispositivo al termine della registrazione.';

$string['allow_chat'] = 'Consenti chat (Interruttore principale globale)';
$string['allow_chat_help'] = 'L\'interruttore principale per tutte le funzioni di chat. Se disattivato, l\'intera area di chat viene bloccata per tutti, moderatori inclusi. Non sarà possibile utilizzare né chat pubbliche né private.';
$string['allow_file_upload'] = 'Consenti il caricamento dei file';
$string['allow_file_upload_help'] = 'Consente la condivisione di file all\'interno della chat. Ciò richiede che l\'interruttore principale "Consenti chat" sia attivo.';

$string['allow_shared_notepad'] = 'Consenti Blocco note condiviso';
$string['allow_shared_notepad_help'] = 'Consente l\'utilizzo di un editor di testo collaborativo in cui studenti e insegnanti possono prendere appunti insieme in tempo reale. È perfetto per il brainstorming, la scrittura a quattro mani o la creazione di un riassunto condiviso della lezione.';

$string['whiteboard_features'] = 'Caratteristiche della lavagna';
$string['allow_whiteboard'] = 'Consenti lavagna';
$string['allow_whiteboard_help'] = 'Sblocca uno spazio di disegno interattivo per la sessione. Usalo per disegnare diagrammi, risolvere problemi di matematica visivamente o permettere agli studenti di annotare contenuti condivisi.';
$string['preload_file'] = 'Precarica il file della presentazione';
$string['preload_file_help'] = 'Consente di caricare un documento PDF o di Office che verrà caricato automaticamente sulla lavagna interattiva all\'inizio della sessione. In questo modo, il materiale della presentazione sarà pronto per la lezione immediatamente. <strong>Dimensione massima del file: 5 MB</strong>';

$string['allowed_external_media_player'] = 'Consenti al lettore multimediale';
$string['allowed_external_media_player_help'] = 'Consente ai moderatori di sincronizzare e riprodurre video da piattaforme come YouTube o Vimeo per l\'intera classe. Ideale per analizzare clip didattiche o guardare documentari insieme senza problemi di latenza.';

$string['activate_waiting_room'] = 'Attiva la sala d\'attesa';
$string['activate_waiting_room_help'] = 'Attiva la sala d\'attesa per questa sessione.';
$string['waiting_room_msg'] = 'Messaggio dalla sala d\'attesa';
$string['waiting_room_msg_help'] = 'Questo messaggio viene mostrato agli utenti mentre attendono di essere ammessi nella stanza. Utilizzalo per condividere istruzioni, aspettative o informazioni utili prima dell\'inizio della sessione.';

$string['allow_breakout_rooms'] = 'Consenti la creazione di stanze di lavoro';
$string['allow_breakout_rooms_help'] = 'Consente ai moderatori di suddividere i partecipanti in gruppi più piccoli per discussioni mirate, progetti collaborativi o attività di gruppo private.';
$string['allowed_number_rooms'] = 'Stanze di gruppo massime';
$string['allowed_number_rooms_help'] = 'Il numero massimo di sottostanze che un moderatore può creare all\'interno di una singola sessione.';

$string['allow_display_external_link_features'] = 'Consenti la condivisione di link esterni';
$string['allow_display_external_link_features_help'] = 'Consente ai moderatori di visualizzare contenuti didattici esterni, come attività H5P, pacchetti SCORM o sistemi di quiz (ad esempio, Kahoot), direttamente a tutti i partecipanti durante la sessione.';

$string['allow_ingress_features'] = 'Consenti l\'ingresso (streaming esterno)';
$string['allow_ingress_features_help'] = 'Consente agli insegnanti di trasmettere video di alta qualità durante la lezione utilizzando software esterni come OBS tramite i protocolli RTMP o WHIP. Questa soluzione è ideale per condividere contenuti video ad alta risoluzione, sessioni preregistrate o per aggirare le limitazioni di caricamento del browser.';

$string['allow_polls'] = 'Consentire i sondaggi';
$string['allow_polls_help'] = 'Consente ai moderatori di creare sondaggi interattivi e brevi quiz durante la sessione. Questo è un ottimo modo per verificare la comprensione degli studenti e aumentare il loro coinvolgimento.';

$string['sip_dial_in_features_is_allow'] = 'Consentire le chiamate SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Consente ai partecipanti di unirsi alla sessione audio tramite una normale chiamata telefonica. Questo è fondamentale per gli studenti con connessioni internet scadenti o per coloro che hanno bisogno di partecipare mentre sono in movimento.';

$string['enable_end_to_end_encryption_features'] = 'Abilita la crittografia end-to-end (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Garantisce la massima sicurezza crittografando i flussi video e audio, in modo che nemmeno il server possa accedervi. Nota: alcune funzionalità, come la registrazione lato server, potrebbero essere limitate quando la crittografia end-to-end (E2EE) è attiva.';
$string['enabled_self_insert_encryption_key'] = 'Consenti l\'utilizzo di tasti definiti dai partecipanti';
$string['enabled_self_insert_encryption_key_help'] = 'Consente ai partecipanti di inserire manualmente una chiave segreta condivisa. Ciò garantisce che il fornitore del servizio non abbia mai accesso alle chiavi di crittografia, offrendo il massimo livello di privacy.';
$string['included_e2ee_chat_messages'] = 'Crittografare i messaggi di chat';
$string['included_e2ee_chat_messages_help'] = 'Estende la crittografia end-to-end alle chat di testo, garantendo che i messaggi siano leggibili solo dai partecipanti presenti nella stanza.';
$string['included_e2ee_whiteboard'] = 'Crittografare i dati della lavagna';
$string['included_e2ee_whiteboard_help'] = 'Include tutti i disegni e le annotazioni sulla lavagna nel livello di crittografia end-to-end per la totale privacy dei dati.';

$string['insights_features_is_allow'] = 'Consentire l\'accesso alle informazioni sulla sessione (interruttore principale)';
$string['insights_features_is_allow_help'] = 'Interruttore principale per tutte le funzionalità basate sui dati. Se disabilitato, tutte le sotto-opzioni, tra cui Trascrizione, Assistente AI e Report delle riunioni, saranno completamente indisponibili.';
$string['insights_transcription_features_is_allow'] = 'Consenti la trascrizione in diretta';
$string['insights_transcription_features_is_allow_help'] = 'Consente la conversione da parlato a testo in tempo reale durante la sessione. Questa opzione deve essere abilitata affinché la trascrizione, la traduzione o la sintesi vocale (TTS) funzionino correttamente.';
$string['insights_transcription_features_is_allow_translation'] = 'Consenti la trascrizione Traduzione';
$string['insights_transcription_features_is_allow_translation_help'] = 'Consente la traduzione in tempo reale della trascrizione in diverse lingue, a supporto degli studenti internazionali e degli ambienti multilingue.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Consenti la sintesi vocale (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Consente la sintesi vocale, permettendo la lettura ad alta voce della trascrizione in tempo reale per una maggiore accessibilità e per i partecipanti ipovedenti.';
$string['insights_chat_translation_features_is_allow'] = 'Consenti la traduzione della chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Consente la traduzione in tempo reale dei messaggi di chat, permettendo ai partecipanti di comunicare istantaneamente in diverse lingue.';
$string['insights_ai_features_is_allow'] = 'Consenti l\'utilizzo dell\'Assistente AI per le riunioni (interruttore principale AI)';
$string['insights_ai_features_is_allow_help'] = 'L\'interruttore principale per tutte le funzionalità basate sull\'intelligenza artificiale. Se disabilitato, alcune funzionalità specifiche, come la chat basata sull\'IA e il riepilogo delle riunioni, verranno nascoste, anche se Session Insights è attivo.';
$string['insights_ai_text_chat_features_is_allow'] = 'Consenti all\'assistente di chat basato sull\'IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integra un assistente basato sull\'intelligenza artificiale direttamente nella chat per aiutare a rispondere alle domande, spiegare concetti complessi e facilitare le discussioni di gruppo.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Consenti la sintesi automatica delle riunioni tramite IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Genera automaticamente un riepilogo conciso tramite IA al termine della sessione, evidenziando i punti chiave dell\'apprendimento, le decisioni prese e le attività di follow-up.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Il sistema disattiva automaticamente l\'audio di tutti i partecipanti all\'ingresso. Solo i moderatori possono riattivare l\'audio o concedere l\'autorizzazione a parlare.';
$string['lock_webcam'] = 'Blocca le webcam';
$string['lock_webcam_help'] = 'Disabilita le telecamere per tutti i partecipanti per impostazione predefinita. Utile per risparmiare larghezza di banda o garantire la privacy degli studenti.';
$string['lock_screen_sharing'] = 'Condivisione schermata di blocco';
$string['lock_screen_sharing_help'] = 'Limita la condivisione dello schermo ai soli moderatori. Impedisce ai partecipanti di interrompere la discussione mostrando i propri schermi.';
$string['lock_whiteboard'] = 'Lavagna con serratura';
$string['lock_whiteboard_help'] = 'Limita l\'utilizzo degli strumenti di disegno sulla lavagna virtuale ai soli moderatori. Impedisce annotazioni non autorizzate da parte dei partecipanti.';
$string['lock_shared_notepad'] = 'Blocco note condiviso';
$string['lock_shared_notepad_help'] = 'Disabilita il blocco note collaborativo per i partecipanti al fine di impedire la scrittura fuori tema o distrazioni.';
$string['lock_chat'] = 'Blocca la chat pubblica';
$string['lock_chat_help'] = 'Nasconde o disabilita completamente l\'area della chat pubblica per tutti i partecipanti.';
$string['lock_chat_send_message'] = 'Blocca l\'invio dei messaggi';
$string['lock_chat_send_message_help'] = 'Consente ai partecipanti di leggere la chat, ma impedisce loro di inviare messaggi.';
$string['lock_chat_file_share'] = 'Blocca la condivisione dei file';
$string['lock_chat_file_share_help'] = 'Impedisce ai partecipanti di caricare o condividere file all\'interno della chat.';
$string['lock_private_chat'] = 'Blocca chat privata';
$string['lock_private_chat_help'] = 'Disabilita la messaggistica privata individuale tra i partecipanti. Nota: i partecipanti possono comunque inviare messaggi privati ai moderatori per chiedere aiuto o porre domande.';

$string['completion_minutes'] = 'Verbale di presenza';
$string['completion_minutes_help'] = 'Richiedere all\'utente di rimanere nella sessione per un determinato numero di minuti.';
$string['completion_minutes_desc'] = 'L\'utente deve partecipare alla sessione per almeno {$a} minuti.';
$string['completion_raised_hand'] = 'mano alzata';
$string['completion_raised_hand_help'] = 'Richiedere all\'utente di alzare la mano almeno una volta.';
$string['completion_chat_messages'] = 'Messaggi di chat inviati';
$string['completion_chat_messages_help'] = 'Richiedi all\'utente di inviare almeno un messaggio di chat.';
$string['completion_webcam_enabled'] = 'Webcam abilitata';
$string['completion_webcam_enabled_help'] = 'Richiedi all\'utente di attivare la webcam almeno una volta.';
$string['completion_webcam_duration'] = 'Durata di utilizzo della webcam (minuti)';
$string['completion_webcam_duration_help'] = 'Richiedere all\'utente di tenere la webcam attiva per un determinato numero di minuti.';
$string['completion_webcam_duration_desc'] = 'L\'utente deve tenere la webcam attiva per almeno {$a} minuti.';
$string['completion_mic_enabled'] = 'Microfono abilitato';
$string['completion_mic_enabled_help'] = 'Richiedi all\'utente di attivare il microfono almeno una volta.';
$string['completion_mic_duration'] = 'Durata di utilizzo del microfono (minuti)';
$string['completion_mic_duration_help'] = 'Richiedere all\'utente di tenere il microfono attivo per un certo numero di minuti.';
$string['completion_mic_duration_desc'] = 'L\'utente deve tenere il microfono attivo per almeno {$a} minuti.';
$string['completion_talk_duration'] = 'Durata della presentazione (minuti)';
$string['completion_talk_duration_help'] = 'Richiedere all\'utente di parlare per un certo numero di minuti.';
$string['completion_talk_duration_desc'] = 'L\'utente deve parlare per almeno {$a} minuti.';
$string['completion_poll_voted'] = 'Votato nel sondaggio';
$string['completion_poll_voted_help'] = 'Richiedere all\'utente di votare in almeno un sondaggio.';
$string['completion_whiteboard_annotated'] = 'Annotato sulla lavagna bianca';
$string['completion_whiteboard_annotated_help'] = 'Richiedere all\'utente di annotare sulla lavagna.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Memorizza le statistiche di sessione per consentire agli utenti di determinare il completamento delle attività.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'L\'ID dell\'utente.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Dati di sessione codificati in JSON (minuti, messaggi di chat, ecc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'L\'ora in cui le statistiche sono state aggiornate l\'ultima volta.';

// view.php
$string['join_session'] = 'Partecipa alla sessione';
$string['start_session'] = 'Avvia sessione';
$string['end_session'] = 'Fine della sessione';
$string['participants'] = 'Partecipanti';
$string['is_recording'] = 'Registrazione in corso';
$string['is_active'] = 'È attivo';
$string['room_info'] = 'Dettagli della sessione live';
$string['participants_info'] = 'Partecipanti dal vivo';
$string['room_id'] = 'ID della stanza';
$string['creation_time'] = 'Tempo di creazione';
$string['name'] = 'Nome';
$string['user_id'] = 'ID utente';
$string['is_admin'] = 'È l\'amministratore';
$string['is_presenter'] = 'È il presentatore';
$string['joined_at'] = 'Iscritto a';
$string['moderator_not_joined'] = 'Prima che tu possa partecipare, la sessione deve essere avviata da un moderatore.';
$string['session_available_from'] = 'Disponibile da: {$a}';
$string['session_available_until'] = 'Disponibile fino al: {$a}';
$string['session_not_started_yet'] = 'La sessione non è ancora iniziata.';
$string['session_ended'] = 'La sessione è terminata.';
$string['allow_guest'] = 'Consenti agli utenti ospiti';
$string['allow_guest_help'] = 'Quando abilitata, viene generato un link sicuro e condivisibile che consente agli utenti esterni (come docenti ospiti o partecipanti senza un account Moodle) di accedere alla sessione; un amministratore può visualizzare e condividere questo link.';
$string['guest_join_link'] = 'Link per partecipare come ospite';
$string['guest_join_link_help'] = 'Condividi questo link con partecipanti esterni. Questo link rimarrà valido per {$a} ore. Ogni ricaricamento della pagina genererà un nuovo link, ma i link condivisi in precedenza rimarranno validi fino alla loro scadenza originale.';
$string['copy_link'] = 'Copia collegamento';
$string['link_copied'] = 'Link copiato negli appunti.';
$string['guest_join_title'] = 'Partecipa alla riunione come ospite';
$string['enter_display_name'] = 'Inserisci il tuo nome visualizzato';
$string['join_as_guest'] = 'Partecipa alla riunione';
$string['guest_access_denied'] = 'L\'accesso per gli ospiti non è consentito per questa riunione.';
$string['invalid_guest_token'] = 'Token di accesso ospite non valido o scaduto.';
$string['guest_link_expired'] = 'Il link per l\'accesso come ospite è scaduto.';
$string['error_joining_session'] = 'Si è verificato un errore durante l\'accesso alla sessione: {$a}';
$string['already_logged_in'] = 'Hai già effettuato l\'accesso a Moodle. Puoi partecipare alla sessione direttamente da questa pagina dell\'attività.';
$string['total_webcams'] = 'Webcam totali';
$string['total_mics'] = 'Microfoni totali';
$string['total_screen_shares'] = 'Quota totale di schermo';
$string['webcams'] = 'Webcam';
$string['mics'] = 'Microfoni';
$string['screenshares'] = 'Condivisione dello schermo';

// Events
$string['event_room_started'] = 'La stanza è iniziata';
$string['event_room_ended'] = 'La stanza è finita';
$string['event_room_created'] = 'Stanza creata';
$string['event_session_ended'] = 'Sessione terminata';
$string['event_participant_joined'] = 'Il partecipante si è unito';
$string['event_participant_left'] = 'Il partecipante se n\'è andato';
$string['event_artifact_created'] = 'Artefatto creato';
$string['event_recording_proceeded'] = 'Registrazione pronta';
$string['event_plugin_error'] = 'Errore PlugNmeet';
$string['event_track_published'] = 'Traccia pubblicata';
$string['event_track_unpublished'] = 'Traccia inedita';
$string['event_recording_started'] = 'Registrazione iniziata';
$string['event_recording_ended'] = 'Registrazione terminata';
$string['event_rtmp_started'] = 'Avviato lo streaming RTMP';
$string['event_rtmp_ended'] = 'Il flusso RTMP è terminato.';

// Notifications
$string['messageprovider:recording_ready'] = 'Notifiche per registrazioni pronte';
$string['messageprovider:artifact_ready'] = 'Notifiche per artefatti pronti';
$string['recording_ready_notification_subject'] = 'Registrazione pronta: {$a}';
$string['recording_ready_notification_fullmessage'] = 'La registrazione della sessione "{$a->roomname}" è ora pronta ed elaborata. Puoi visualizzarla qui: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>La registrazione della sessione <strong>"{$a->roomname}"</strong> è ora pronta ed elaborata.</p><p><a href="{$a->url}">Clicca qui per visualizzare la registrazione.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Registrazione pronta per {$a}';
$string['artifact_ready_notification_subject'] = 'Artefatto pronto: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'È ora disponibile un nuovo artefatto ({$a->type}) per la sessione "{$a->roomname}". Puoi visualizzarlo qui: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Un nuovo artefatto ({$a->type}) per la sessione <strong>"{$a->roomname}"</strong> è ora disponibile.</p><p><a href="{$a->url}">Fai clic qui per visualizzare i dettagli dell\'artefatto.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefatto pronto per {$a}';

// recordings.php
$string['no_recordings'] = 'Nessuna registrazione trovata.';
$string['recording_id'] = 'ID di registrazione';
$string['room_sid'] = 'ID della stanza';
$string['file_size'] = 'Dimensione del file';
$string['created_at'] = 'Creato il';
$string['actions'] = 'Azioni';
$string['view'] = 'Visualizzazione';
$string['play'] = 'Giocare';
$string['download'] = 'Scaricamento';
$string['delete'] = 'Eliminare';
$string['delete_confirm'] = 'Sei sicuro di voler eliminare questo elemento?';
$string['delete_success'] = 'Eliminazione completata con successo.';
$string['recording_details'] = 'Dettagli della registrazione';
$string['recording_creation_time'] = 'Ora di creazione della registrazione';
$string['room_creation_time'] = 'Tempo di creazione della sessione';
$string['back_to_list'] = 'Torna all\'elenco';
$string['browser_not_support_video'] = 'Il tuo browser non supporta il tag video.';
$string['room_title'] = 'Titolo della stanza';
$string['total_participants'] = 'Numero totale di partecipanti';
$string['session_started_at'] = 'Sessione iniziata alle';
$string['session_ended_at'] = 'Sessione terminata alle';

// artifacts.php
$string['no_artifacts'] = 'Nessun artefatto trovato.';
$string['artifact_id'] = 'ID artefatto';
$string['type'] = 'Tipo';
$string['artifact_details'] = 'Dettagli del manufatto';
$string['no_permission'] = 'Non hai l\'autorizzazione per visualizzare questa pagina.';
$string['token_usage'] = 'Utilizzo del token';
$string['duration_usage'] = 'Durata di utilizzo';
$string['character_count_usage'] = 'Conteggio dei caratteri Utilizzo';
$string['estimated_cost'] = 'Costo stimato';
$string['file_path'] = 'Percorso del file';
$string['mime_type'] = 'Tipo mimetico';
$string['created_at'] = 'Creato il';

// Analytics strings
$string['download_excel_report'] = 'Scarica il report in Excel';
$string['download_raw_json'] = 'Scarica i dati grezzi';
$string['room_summary'] = 'Riepilogo della stanza';
$string['users_summary'] = 'Riepilogo utenti';
$string['see_excel_report'] = 'Per maggiori dettagli, consultare il report Excel.';
$string['error_loading_analytics'] = 'Errore durante il caricamento dei dati analitici: {$a}';
$string['error_generating_excel'] = 'Errore durante la generazione del report Excel: {$a}';

$string['analytics_room_room_id'] = 'ID della stanza';
$string['analytics_room_room_title'] = 'Titolo della stanza';
$string['analytics_room_room_creation'] = 'Tempo di creazione della stanza';
$string['analytics_room_room_ended'] = 'Ora di fine della stanza';
$string['analytics_room_room_duration'] = 'Durata della stanza';
$string['analytics_room_room_total_users'] = 'Numero totale di partecipanti';
$string['analytics_room_enabled_e2ee'] = 'E2EE abilitato';
$string['analytics_room_recording_status'] = 'Conteggio dello stato di registrazione';
$string['analytics_room_rtmp_status'] = 'Conteggio stato RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Utilizzo totale del servizio di logopedia';
$string['analytics_room_external_media_player_status'] = 'Conteggio dello stato del lettore multimediale esterno';
$string['analytics_room_etherpad_status'] = 'Conteggio stato Etherpad';
$string['analytics_room_external_display_link_status'] = 'Conteggio stato collegamento display esterno';
$string['analytics_room_ingress_created'] = 'Conteggio degli ingressi creati';
$string['analytics_room_breakout_room'] = 'Conteggio delle stanze di approfondimento';

$string['analytics_user_name'] = 'Nome';
$string['analytics_user_id'] = 'ID utente';
$string['analytics_user_ex_id'] = 'ID utente';
$string['analytics_user_is_admin'] = 'È l\'amministratore';
$string['analytics_user_duration'] = 'Durata';
$string['analytics_user_joined'] = 'Iscritto a';
$string['analytics_user_left'] = 'Si è lasciato a';
$string['analytics_user_mic_status'] = 'Modifiche dello stato del microfono';
$string['analytics_user_mic_muted'] = 'Conteggio microfono disattivato';
$string['analytics_user_mic_duration'] = 'Durata con microfono abilitato';
$string['analytics_user_talked'] = 'Conteggio parlato';
$string['analytics_user_talked_duration'] = 'Durata della conversazione';
$string['analytics_user_webcam_status'] = 'Modifiche di stato della webcam';
$string['analytics_user_webcam_duration'] = 'Durata con webcam abilitata';
$string['analytics_user_raise_hand'] = 'Alza il conteggio delle mani';
$string['analytics_user_voted_poll'] = 'Conteggio dei voti';
$string['analytics_user_whiteboard_annotated'] = 'Conteggio annotato sulla lavagna bianca';
$string['analytics_user_whiteboard_files'] = 'Conteggio dei file sulla lavagna';
$string['analytics_user_screen_share_status'] = 'Modifiche allo stato della condivisione dello schermo';
$string['analytics_user_speech_services_usage'] = 'Utilizzo dei servizi di logopedia';
$string['analytics_user_public_chat'] = 'Messaggi della chat pubblica';
$string['analytics_user_private_chat'] = 'Messaggi di chat privati';
$string['analytics_user_chat_files'] = 'File di chat condivisi';
$string['analytics_user_interface_invisible'] = 'Conteggio invisibile dell\'interfaccia';
$string['analytics_user_connection_quality'] = 'Qualità della connessione';
$string['analytics_user_connection_quality_excellent'] = 'Eccellente';
$string['analytics_user_connection_quality_good'] = 'Bene';
$string['analytics_user_connection_quality_poor'] = 'Povero';

$string['users_info'] = 'Informazioni sull\'utente';
$string['polls'] = 'Sondaggi';
$string['question'] = 'Domanda';
$string['options'] = 'Opzioni';
$string['file_name'] = 'Nome del file';
$string['checkcompletiontask'] = 'Verifica il completamento di plugNmeet';

// attendance.php
$string['attendance_report'] = 'Rapporto sulle presenze';
$string['status'] = 'Stato';
$string['present'] = 'Presente';
$string['absent'] = 'Assente';
$string['incomplete'] = 'Incompleto';
$string['completed'] = 'Completato';
$string['minutes_attended'] = 'Verbale di presenza';
$string['last_updated'] = 'Ultimo aggiornamento';
$string['mic_duration'] = 'Durata con microfono abilitato';
$string['webcam_duration'] = 'Durata di utilizzo della webcam';
$string['participation_progress'] = 'Progressi nella partecipazione';
$string['attendance_duration'] = 'Verbale di presenza';
$string['attendance_webcam_status'] = 'Webcam abilitata';
$string['attendance_mic_status'] = 'Microfono abilitato';
$string['attendance_talked_duration'] = 'Durata della conversazione';
$string['attendance_voted_poll'] = 'Votato nel sondaggio';
$string['attendance_chat_messages'] = 'Messaggi di chat inviati';
$string['attendance_raise_hand'] = 'mano alzata';
$string['attendance_webcam_duration'] = 'Durata di utilizzo della webcam';
$string['attendance_mic_duration'] = 'Durata con microfono abilitato';
$string['attendance_whiteboard_annotated'] = 'Annotato sulla lavagna bianca';
$string['met'] = 'Met';
$string['required'] = 'Necessario';

// Status codes
$string['status_unknown_status'] = 'Il server ha restituito uno stato sconosciuto.';
$string['status_success'] = 'Operazione completata con successo.';
$string['status_permission_denied'] = 'Autorizzazione negata.';
$string['status_not_found'] = 'Nessun {$a} trovato.';
$string['status_conflict'] = 'Questa operazione non può essere completata a causa di un conflitto (ad esempio, la stanza potrebbe già esistere).';
$string['status_invalid_token_or_signature'] = 'Il token o la firma della richiesta non sono validi.';
$string['status_invalid_api_key'] = 'La chiave API fornita non è valida. Verifica le impostazioni del plugin.';
$string['status_internal_server_error'] = 'Il server di PlugNmeet ha riscontrato un errore interno.';
$string['status_invalid_parameters'] = 'Le informazioni fornite non sono corrette.';
$string['status_missing_required_parameter'] = 'Mancano alcune informazioni obbligatorie.';
$string['status_room_not_found'] = 'La stanza indicata non è stata trovata.';
$string['status_user_not_found'] = 'Account utente non trovato. Assicurati che le tue credenziali API siano corrette e che l\'abbonamento sia attivo.';
$string['status_user_blocked'] = 'L\'account utente è bloccato. Si prega di contattare l\'assistenza.';
$string['status_user_not_active'] = 'L\'account utente non è attivo. Ciò è probabilmente dovuto a un abbonamento inattivo o scaduto.';
