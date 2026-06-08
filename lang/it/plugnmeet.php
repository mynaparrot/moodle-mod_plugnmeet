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
$string['modulename_help'] = 'Il modulo attività PlugNmeet consente di creare e gestire sessioni di web conferencing in tempo reale all\'interno di Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Amministrazione PlugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Aggiungi una nuova attività PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Elimina artefatti';
$string['plugnmeet:deleterecording'] = 'Elimina registrazioni';
$string['plugnmeet:downloadanalyticsreport'] = 'Scarica rapporto analitico';
$string['plugnmeet:downloadartifacts'] = 'Scarica artefatti';
$string['plugnmeet:downloadattendance'] = 'Scarica rapporto presenze';
$string['plugnmeet:downloadrecordings'] = 'Scarica registrazioni';
$string['plugnmeet:manage'] = 'Gestisci impostazioni PlugNmeet';
$string['plugnmeet:view'] = 'Visualizza attività PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Visualizza rapporto stanze attive';
$string['plugnmeet:viewartifacts'] = 'Visualizza artefatti';
$string['plugnmeet:viewattendance'] = 'Visualizza rapporto presenze';
$string['plugnmeet:viewattendancelist'] = 'Visualizza elenco presenze';
$string['plugnmeet:viewlivesessioninfo'] = 'Visualizza informazioni sessione live';
$string['plugnmeet:viewrecordings'] = 'Visualizza registrazioni';
$string['plugnmeetfieldset'] = 'Set di campi di esempio personalizzato';
$string['plugnmeetname'] = 'Nome di esempio personalizzato';
$string['plugnmeetname_help'] = 'Aiuto di esempio personalizzato';
$string['subplugintype_pnmext'] = 'Prolungamento PlugNmeet';
$string['subplugintype_pnmext_plural'] = 'Prolungamenti PlugNmeet';

// Admin Settings
$string['api_config'] = 'Configurazione API';
$string['server_url'] = 'URL server PlugNmeet';
$string['server_url_desc'] = 'L\'URL di base del Suo server PlugNmeet (es. https://pnm.example.com).';
$string['api_key'] = 'Chiave API';
$string['api_key_desc'] = 'La chiave API univoca fornita dal Suo server PlugNmeet.';
$string['api_secret'] = 'Segreto API';
$string['api_secret_desc'] = 'Il segreto API fornito dal Suo server PlugNmeet utilizzato per l\'autenticazione sicura.';
$string['guest_access_hdr'] = 'Impostazioni accesso ospite';
$string['allow_guest_global'] = 'Consenti accesso ospite globalmente';
$string['allow_guest_global_desc'] = 'Funziona come un interruttore principale. Se disabilitato, gli insegnanti non vedranno l\'opzione per abilitare l\'accesso degli ospiti durante la creazione o la modifica delle attività.';
$string['guest_link_expiration'] = 'Scadenza link ospite (ore)';
$string['guest_link_expiration_desc'] = 'Determina quante ore un link di accesso ospite rimane attivo dopo che un insegnante lo ha generato.';
$string['defaults'] = 'Impostazioni tecniche predefinite';
$string['defaults_desc'] = 'Configurazioni tecniche predefinite applicate a ogni nuova sessione PlugNmeet.';
$string['enable_dynacast'] = 'Abilita Dynacast';
$string['enable_dynacast_des'] = 'Ottimizza le prestazioni mettendo in pausa dinamicamente i livelli video che non vengono visualizzati dai partecipanti. Ciò riduce significativamente l\'utilizzo della CPU e della larghezza di banda lato server. **Nota:** Questo verrà abilitato automaticamente se si utilizzano codec SVC (VP9/AV1) ed è richiesto per il simulcast multi-codec.';
$string['enable_simulcast'] = 'Abilita Simulcast';
$string['enable_simulcast_des'] = 'Fornisce più livelli di qualità video per garantire un\'esperienza fluida agli utenti con connessioni deboli.';
$string['video_codec'] = 'Codec video';
$string['video_codec_des'] = 'Lo standard di codifica per la trasmissione video. **VP8** è consigliato per WebRTC in quanto offre il miglior equilibrio tra qualità e bassa latenza. **Attenzione:** Non tutti i browser supportano ogni codec; si assicuri che i Suoi utenti utilizzino browser moderni se usano VP9 o H.265.';
$string['default_webcam_resolution'] = 'Risoluzione webcam predefinita';
$string['default_webcam_resolution_des'] = 'L\'impostazione di risoluzione iniziale per le telecamere dei partecipanti.';
$string['default_screen_share_resolution'] = 'Risoluzione predefinita condivisione schermo';
$string['default_screen_share_resolution_des'] = 'L\'impostazione di risoluzione iniziale per la condivisione dello schermo.';
$string['default_audio_preset'] = 'Preset audio predefinito';
$string['default_audio_preset_des'] = 'Il profilo di qualità audio ottimizzato per la sessione.';

$string['branding'] = 'Branding e personalizzazione';
$string['custom_logo'] = 'Logo personalizzato';
$string['custom_logo_des'] = 'Carichi il Suo logo nella sala riunioni. Se lasciato vuoto, verrà utilizzato il logo PlugNmeet predefinito.';
$string['custom_css_url'] = 'URL CSS personalizzato';
$string['custom_css_url_des'] = 'Colleghi un file .css esterno per sovrascrivere o personalizzare gli stili dell\'interfaccia.';
$string['primary_color'] = 'Colore primario';
$string['primary_color_des'] = 'Colore principale utilizzato per pulsanti, stati attivi ed evidenziazioni.';
$string['secondary_color'] = 'Colore secondario';
$string['secondary_color_des'] = 'Il colore secondario utilizzato per gli elementi dell\'interfaccia utente secondari.';
$string['background_color'] = 'Colore di sfondo';
$string['background_color_des'] = 'Il colore di sfondo primario dell\'interfaccia.';
$string['background_image'] = 'Immagine di sfondo';
$string['background_image_des'] = 'Sfondo. Per ottenere i migliori risultati, utilizzi un\'immagine 1920x1080.';
$string['header_color'] = 'Colore intestazione';
$string['header_color_des'] = 'Colore di sfondo per la barra di navigazione superiore.';
$string['footer_color'] = 'Colore piè di pagina';
$string['footer_color_des'] = 'Colore di sfondo per la barra degli strumenti inferiore.';
$string['left_color'] = 'Colore lato sinistro';
$string['left_color_des'] = 'Colore di sfondo per la barra laterale di navigazione sinistra.';
$string['side_panel_bg_color'] = 'Colore di sfondo pannello laterale';
$string['side_panel_bg_color_des'] = 'Colore di sfondo per i pannelli di destra (Chat ed elenco partecipanti).';
$string['copyright_text'] = 'Testo copyright';
$string['copyright_text_des'] = 'Testo del marchio visualizzato nel piè di pagina delle impostazioni. L\'HTML è supportato per link o stili personalizzati.';
$string['client_load'] = 'Metodo di caricamento client';
$string['client_load_des'] = 'Scelga **Remoto (Incorporato)** (Consigliato) per un\'esperienza fluida e personalizzata incorporata direttamente nella Sua pagina Moodle. Scelga **Reindirizza** per utilizzare l\'interfaccia PlugNmeet predefinita; tenga presente che gli utenti lasceranno il Suo sito e la personalizzazione del marchio potrebbe non essere applicata.';
$string['remote'] = 'Remoto (Incorporato)';
$string['redirect'] = 'Reindirizza al server';

$string['yes'] = 'Sì';
$string['no'] = 'No';
$string['recordings'] = "Registrazioni";
$string['recording'] = "Registrazione";
$string['artifacts'] = "Artefatti della stanza";
$string['attendance'] = "Rapporto presenze";
$string['artifact'] = "Artefatto";
$string['room_subject'] = 'stanza';
$string['user_subject'] = 'utente';
$string['activeroomsreport'] = 'Rapporto stanze attive';
$string['noactiverooms'] = 'Al momento non ci sono stanze attive.';
$string['activerooms'] = 'Stanze attive';
$string['loading'] = 'Caricamento...';

// mod_form.php
$string['roomtitle'] = 'Titolo stanza';
$string['roomtitle_help'] = 'Il nome utilizzato per l\'attività Moodle e l\'intestazione della riunione live. Aiuta gli studenti a identificare la sessione nel loro corso e all\'interno della stanza.';
$string['welcome_message'] = 'Messaggio di benvenuto';
$string['welcome_message_help'] = 'Qualsiasi testo inserito qui apparirà come primo messaggio nella chat pubblica quando gli utenti si uniscono alla stanza. Questo è utile per condividere istruzioni, link o informazioni importanti con i partecipanti al loro ingresso.';
$string['max_participants'] = 'Max partecipanti';
$string['max_participants_help'] = 'Imposti questo valore per limitare quanti utenti possono unirsi alla sessione contemporaneamente. Lo imposti a 0 per consentire un numero illimitato di partecipanti, il che significa che non ci sono restrizioni su quanti utenti possono unirsi.';
$string['room_features'] = 'Funzionalità della stanza';
$string['recording_broadcasting_features'] = 'Registrazione e trasmissione';
$string['chat_features'] = 'Funzionalità chat';
$string['other_features'] = 'Altre funzionalità';
$string['e2ee_features'] = 'Crittografia end-to-end';
$string['insights_features'] = 'Funzionalità di analisi e IA';
$string['defaultlock'] = 'Impostazioni di blocco predefinite';
$string['advanced_completion'] = 'Completamento avanzato';
$string['available'] = 'Disponibile da';
$string['available_help'] = 'Determina quando i partecipanti possono iniziare a unirsi alla sessione. Gli utenti non potranno entrare nella stanza prima di questa data e ora.';
$string['deadline'] = 'Disponibile fino a';
$string['deadline_help'] = 'Determina la data e l\'ora finali in cui i partecipanti possono accedere alla sessione. L\'accesso sarà bloccato una volta superata questa scadenza.';
$string['err_deadline_before_available'] = 'La data "Disponibile fino a" non può essere precedente alla data "Disponibile da".';
$string['error_analytics_required_for_completion'] = 'L\'analisi deve essere abilitata se sono impostati criteri di completamento.';

$string['allow_webcams'] = 'Consenti webcam';
$string['allow_webcams_help'] = 'Consenti ai partecipanti di utilizzare le proprie webcam.';
$string['mute_on_start'] = 'Muto all\'avvio';
$string['mute_on_start_help'] = 'Muta automaticamente tutti i partecipanti quando si uniscono alla sessione.';
$string['allow_screen_share'] = 'Consenti condivisione schermo';
$string['allow_screen_share_help'] = 'Consenti ai partecipanti di condividere il proprio schermo.';
$string['allow_broadcasting'] = 'Permesso trasmissione (commutatore principale)';
$string['allow_broadcasting_help'] = 'Il principale interruttore master per tutte le funzionalità di trasmissione. Se disabilitate, tutte le altre opzioni di trasmissione saranno disabilitate.';
$string['allow_rtmp'] = 'Consenti streaming RTMP';
$string['allow_rtmp_help'] = 'Consente ai moderatori di trasmettere la sessione live su piattaforme esterne come YouTube, Facebook o Twitch. Perfetto per webinar pubblici o lezioni di ospiti.';
$string['allow_raise_hand'] = 'Consenti alza mano';
$string['allow_raise_hand_help'] = 'Consenti ai partecipanti di alzare la mano.';
$string['admin_only_webcams'] = 'Webcam solo per amministratori';
$string['admin_only_webcams_help'] = 'Consenti solo ai moderatori di utilizzare le proprie webcam.';
$string['allow_view_other_webcams'] = 'Consenti visualizzazione altre webcam';
$string['allow_view_other_webcams_help'] = 'Consenti ai partecipanti di visualizzare le webcam degli altri partecipanti. Se disabilitato, vedranno solo le webcam dei moderatori.';
$string['allow_view_other_users_list'] = 'Consenti visualizzazione elenco altri utenti';
$string['allow_view_other_users_list_help'] = 'Consenti ai partecipanti di visualizzare l\'elenco degli altri partecipanti.';
$string['room_duration'] = 'Durata stanza (minuti)';
$string['room_duration_help'] = 'Definisce per quanto tempo la stanza può rimanere aperta prima di chiudersi automaticamente. Inserisca 0 se non desidera impostare alcun limite di tempo, consentendo alla stanza di rimanere attiva senza restrizioni.';
$string['moderator_join_first'] = 'Il moderatore si unisca per primo';
$string['moderator_join_first_help'] = 'Quando abilitato, la sessione non inizierà e nessuno potrà unirsi finché un moderatore (come un insegnante) non si unirà per primo. I partecipanti rimarranno sulla pagina dell\'attività Moodle e non entreranno nella stanza o in un\'area di attesa. Questo è diverso dall\'opzione Sala d\'attesa, dove gli utenti possono comunque unirsi e attendere.';
$string['enable_analytics'] = 'Abilita analisi';
$string['enable_analytics_help'] = 'Traccia i dati di partecipazione e coinvolgimento per la sessione. **Nota:** Questo deve essere abilitato se sono impostati criteri di completamento.';
$string['allow_virtual_bg'] = 'Consenti sfondi virtuali';
$string['allow_virtual_bg_help'] = 'Consente ai partecipanti di sfocare il proprio sfondo o utilizzare un\'immagine virtuale. Ottimo per mantenere la privacy degli studenti e garantire un aspetto professionale in classe.';
$string['auto_gen_user_id'] = 'Genera automaticamente ID utente';
$string['auto_gen_user_id_help'] = 'Quando abilitato, il sistema crea un nuovo ID in modo che lo stesso utente possa unirsi da più dispositivi, ad esempio, quando un insegnante si unisce da un tablet per disegnare sulla lavagna mentre usa un PC per la fotocamera e il microfono; tuttavia, è <b>consigliato</b> mantenerlo disattivato in modo che venga utilizzato l\'ID utente di Moodle e vengano impediti gli accessi duplicati.';

$string['allow_recording'] = 'Consenti registrazione (interruttore principale)';
$string['allow_recording_help'] = 'L\'interruttore principale per tutte le funzionalità di registrazione. Se disabilitato, le opzioni di registrazione Cloud e Locale saranno nascoste ai moderatori.';
$string['allow_cloud_recording'] = 'Consenti registrazione su cloud';
$string['allow_cloud_recording_help'] = 'Abilita la registrazione sul server PlugNmeet. Il video finale viene elaborato e archiviato nel cloud, rendendolo facile da condividere tramite un link una volta terminata la sessione.';
$string['enable_auto_cloud_recording'] = 'Abilita registrazione automatica su cloud';
$string['enable_auto_cloud_recording_help'] = 'Attiva automaticamente la registrazione su cloud nel momento in cui il primo moderatore si unisce alla sessione. Ideale per garantire che nessuna lezione venga dimenticata.';
$string['allow_local_recording'] = 'Consenti registrazione locale';
$string['allow_local_recording_help'] = 'Consente la registrazione direttamente sul computer. **Nota:** Richiede Google Chrome. Per acquisire tutto l\'audio della sessione, l\'utente deve condividere la propria "Scheda Chrome" e selezionare la casella "Condividi anche l\'audio della scheda". Il file viene salvato localmente sul dispositivo una volta terminato.';
$string['only_record_admin_webcams'] = 'Solo webcam per l\'amministrazione dei record';
$string['only_record_admin_webcams_help'] = 'Se attivato, solo le webcam degli amministratori saranno incluse nella registrazione.';

$string['allow_chat'] = 'Consenti chat (interruttore principale globale)';
$string['allow_chat_help'] = 'L\'interruttore principale assoluto per tutte le funzioni di chat. Se disabilitato, l\'intera area chat viene rimossa per tutti, inclusi i moderatori. Nessuna chat pubblica o privata sarà possibile.';
$string['allow_file_upload'] = 'Consenti caricamento file';
$string['allow_file_upload_help'] = 'Abilita la possibilità di condividere file all\'interno della chat. Ciò richiede che l\'interruttore principale "Consenti chat" sia attivo.';

$string['allow_shared_notepad'] = 'Consenti blocco note condiviso';
$string['allow_shared_notepad_help'] = 'Abilita un editor di testo collaborativo dove studenti e insegnanti possono prendere appunti in tempo reale insieme. Questo è perfetto per il brainstorming, la co-scrittura o la creazione di un riassunto di classe condiviso.';

$string['whiteboard_features'] = 'Funzionalità lavagna';
$string['allow_whiteboard'] = 'Consenti lavagna';
$string['allow_whiteboard_help'] = 'Sblocca uno spazio di disegno interattivo per la sessione. Usalo per disegnare diagrammi, risolvere problemi di matematica visivamente o consentire agli studenti di annotare contenuti condivisi.';
$string['preload_file'] = 'Precarica file di presentazione';
$string['preload_file_help'] = 'Le consente di caricare un documento PDF o Office che verrà automaticamente caricato sulla lavagna all\'inizio della sessione. Ciò garantisce che il Suo materiale di presentazione sia immediatamente pronto per la lezione. <strong>Dimensione massima del file: 5Mb</strong>';

$string['allowed_external_media_player'] = 'Consenti lettore multimediale esterno';
$string['allowed_external_media_player_help'] = 'Consente ai moderatori di sincronizzare e riprodurre video da fonti come YouTube o Vimeo per l\'intera classe. Ideale per analizzare clip educativi o guardare documentari insieme senza ritardi di larghezza di banda.';

$string['activate_waiting_room'] = 'Attiva sala d\'attesa';
$string['activate_waiting_room_help'] = 'Abilita la sala d\'attesa per questa sessione.';
$string['waiting_room_msg'] = 'Messaggio sala d\'attesa';
$string['waiting_room_msg_help'] = 'Questo messaggio viene mostrato agli utenti mentre attendono di essere ammessi nella stanza. Lo utilizzi per condividere istruzioni, aspettative o informazioni utili prima dell\'inizio della sessione.';

$string['allow_breakout_rooms'] = 'Consenti stanze per sottogruppi';
$string['allow_breakout_rooms_help'] = 'Consente ai moderatori di dividere i partecipanti in gruppi più piccoli per discussioni mirate, progetti collaborativi o attività di gruppo private.';
$string['allowed_number_rooms'] = 'Max stanze per sottogruppi';
$string['allowed_number_rooms_help'] = 'Il numero massimo di sottostanze che un moderatore può creare all\'interno di una singola sessione.';

$string['allow_display_external_link_features'] = 'Consenti condivisione link esterni';
$string['allow_display_external_link_features_help'] = 'Consente ai moderatori di visualizzare contenuti educativi esterni, come attività H5P, pacchetti SCORM o sistemi di quiz (ad esempio, Kahoot), direttamente a tutti i partecipanti durante la sessione.';

$string['allow_ingress_features'] = 'Consenti ingresso (streaming esterno)';
$string['allow_ingress_features_help'] = 'Consente agli insegnanti di trasmettere video di alta qualità nella sessione utilizzando software esterni come OBS tramite protocolli RTMP o WHIP. Questo è ideale per condividere contenuti video ad alta risoluzione, sessioni preregistrate o per aggirare le limitazioni di caricamento del browser.';

$string['allow_polls'] = 'Consenti sondaggi';
$string['allow_polls_help'] = 'Consente ai moderatori di creare sondaggi interattivi e quiz rapidi durante la sessione. Questo è un ottimo modo per verificare la comprensione degli studenti e aumentare il coinvolgimento.';

$string['sip_dial_in_features_is_allow'] = 'Consenti accesso telefonico SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Consente ai partecipanti di unirsi alla sessione audio tramite una telefonata tradizionale. Questo è essenziale per gli studenti con connessioni internet scadenti o per coloro che devono unirsi mentre sono in movimento.';

$string['enable_end_to_end_encryption_features'] = 'Abilita crittografia end-to-end (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Fornisce una forte sicurezza crittografando i flussi video e audio tra i partecipanti. In questa modalità, il server genera e distribuisce in modo sicuro una chiave di crittografia univoca per la sessione.';
$string['enabled_self_insert_encryption_key'] = 'Consenti chiavi definite dal partecipante';
$string['enabled_self_insert_encryption_key_help'] = 'Consente ai partecipanti di inserire manualmente una chiave segreta condivisa, offrendo il massimo livello di privacy poiché il server non ha mai accesso alle chiavi di crittografia. È responsabilità dell\'host condividere lo stesso segreto con tutti i partecipanti; se vengono utilizzate chiavi diverse, gli utenti non saranno in grado di comunicare tra loro. <strong>Nota:</strong> Quando questa opzione è abilitata, le funzionalità che richiedono l\'elaborazione multimediale lato server (come la registrazione su cloud, la trascrizione e la sintesi AI) verranno automaticamente disabilitate.';
$string['included_e2ee_chat_messages'] = 'Crittografa messaggi chat';
$string['included_e2ee_chat_messages_help'] = 'Estende la crittografia end-to-end alla chat testuale, garantendo che i messaggi siano leggibili solo dai partecipanti nella stanza.';
$string['included_e2ee_whiteboard'] = 'Crittografa dati lavagna';
$string['included_e2ee_whiteboard_help'] = 'Include tutti i disegni e le annotazioni della lavagna nel livello di crittografia end-to-end per una privacy totale dei dati.';

$string['insights_features_is_allow'] = 'Consenti approfondimenti sessione (interruttore principale)';
$string['insights_features_is_allow_help'] = 'L\'interruttore principale per tutte le funzionalità basate sui dati. Se disabilitato, tutte le sotto-opzioni, inclusa la trascrizione, l\'assistente AI e i rapporti di riunione, saranno completamente non disponibili.';
$string['insights_transcription_features_is_allow'] = 'Consenti trascrizione live';
$string['insights_transcription_features_is_allow_help'] = 'Abilita la conversione da parlato a testo in tempo reale durante la sessione. Questo deve essere abilitato affinché la traduzione della trascrizione o la sintesi vocale (TTS) funzionino.';
$string['insights_transcription_features_is_allow_translation'] = 'Consenti traduzione trascrizione';
$string['insights_transcription_features_is_allow_translation_help'] = 'Consente di tradurre la trascrizione live in diverse lingue, supportando studenti internazionali e ambienti multilingue.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Consenti sintesi vocale (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Abilita la sintesi vocale, consentendo di leggere ad alta voce la trascrizione live per una migliore accessibilità e per i partecipanti ipovedenti.';
$string['insights_chat_translation_features_is_allow'] = 'Consenti traduzione chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Abilita la traduzione in tempo reale dei messaggi di chat, consentendo ai partecipanti di comunicare istantaneamente in diverse lingue.';
$string['insights_ai_features_is_allow'] = 'Consenti assistente riunioni AI (interruttore principale AI)';
$string['insights_ai_features_is_allow_help'] = 'L\'interruttore principale per tutte le capacità basate sull\'IA. Se disabilitato, funzionalità specifiche come la chat AI e il riepilogo delle riunioni saranno nascoste, anche se gli approfondimenti della sessione sono attivi.';
$string['insights_ai_text_chat_features_is_allow'] = 'Consenti assistente chat AI';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integra un assistente AI direttamente nella chat per aiutare a rispondere a domande, spiegare concetti complessi e facilitare la discussione di gruppo.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Consenti riepilogo riunioni AI';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Genera automaticamente un riepilogo AI conciso dopo la fine della sessione, evidenziando i punti educativi chiave, le decisioni e le attività di follow-up.';

$string['lock_microphone'] = 'Blocca microfoni';
$string['lock_microphone_help'] = 'Muta tutti i partecipanti per impostazione predefinita all\'ingresso. Solo i moderatori possono riattivare l\'audio o concedere il permesso di parlare.';
$string['lock_webcam'] = 'Blocca webcam';
$string['lock_webcam_help'] = 'Disabilita le telecamere per tutti i partecipanti per impostazione predefinita. Utile per risparmiare larghezza di banda o garantire la privacy degli studenti.';
$string['lock_screen_sharing'] = 'Blocca condivisione schermo';
$string['lock_screen_sharing_help'] = 'Limita la condivisione dello schermo ai soli moderatori. Impedisce ai partecipanti di interrompere con i propri schermi.';
$string['lock_whiteboard'] = 'Blocca lavagna';
$string['lock_whiteboard_help'] = 'Limita gli strumenti di disegno della lavagna ai soli moderatori. Impedisce annotazioni non autorizzate da parte dei partecipanti.';
$string['lock_shared_notepad'] = 'Blocca blocco note condiviso';
$string['lock_shared_notepad_help'] = 'Disabilita il blocco note collaborativo per i partecipanti per prevenire scritture fuori tema o distrazioni.';
$string['lock_chat'] = 'Blocca chat pubblica';
$string['lock_chat_help'] = 'Nasconde o disabilita completamente l\'area chat pubblica per tutti i partecipanti.';
$string['lock_chat_send_message'] = 'Blocca invio messaggi';
$string['lock_chat_send_message_help'] = 'Consente ai partecipanti di leggere la chat, ma impedisce loro di inviare messaggi.';
$string['lock_chat_file_share'] = 'Blocca condivisione file';
$string['lock_chat_file_share_help'] = 'Impedisce ai partecipanti di caricare o condividere file all\'interno dell\'area chat.';
$string['lock_private_chat'] = 'Blocca chat privata';
$string['lock_private_chat_help'] = 'Disabilita la messaggistica privata 1-a-1 tra i partecipanti. Nota: i partecipanti possono comunque inviare messaggi privati ai moderatori per aiuto o domande.';

$string['completion_minutes'] = 'Minuti di presenza';
$string['completion_minutes_help'] = 'Richiede che l\'utente sia presente alla sessione per un certo numero di minuti.';
$string['completion_minutes_desc'] = 'L\'utente deve partecipare alla sessione per almeno {$a} minuti.';
$string['completion_raised_hand'] = 'Mano alzata';
$string['completion_raised_hand_help'] = 'Richiede che l\'utente alzi la mano almeno 1 volta.';
$string['completion_chat_messages'] = 'Messaggi chat inviati';
$string['completion_chat_messages_help'] = 'Richiede che l\'utente invii almeno 1 messaggio di chat.';
$string['completion_webcam_enabled'] = 'Webcam abilitata';
$string['completion_webcam_enabled_help'] = 'Richiede che l\'utente abiliti la propria webcam almeno una volta.';
$string['completion_webcam_duration'] = 'Durata webcam abilitata (minuti)';
$string['completion_webcam_duration_help'] = 'Richiede che l\'utente abbia la propria webcam abilitata per un certo numero di minuti.';
$string['completion_webcam_duration_desc'] = 'L\'utente deve avere la propria webcam abilitata per almeno {$a} minuti.';
$string['completion_mic_enabled'] = 'Microfono abilitato';
$string['completion_mic_enabled_help'] = 'Richiede che l\'utente abiliti il proprio microfono almeno una volta.';
$string['completion_mic_duration'] = 'Durata microfono abilitato (minuti)';
$string['completion_mic_duration_help'] = 'Richiede che l\'utente abbia il proprio microfono abilitato per un certo numero di minuti.';
$string['completion_mic_duration_desc'] = 'L\'utente deve avere il proprio microfono abilitato per almeno {$a} minuti.';
$string['completion_talk_duration'] = 'Durata conversazione (minuti)';
$string['completion_talk_duration_help'] = 'Richiede che l\'utente parli per un certo numero di minuti.';
$string['completion_talk_duration_desc'] = 'L\'utente deve parlare per almeno {$a} minuti.';
$string['completion_poll_voted'] = 'Votato nel sondaggio';
$string['completion_poll_voted_help'] = 'Richiede che l\'utente voti in almeno un sondaggio.';
$string['completion_whiteboard_annotated'] = 'Annotato sulla lavagna';
$string['completion_whiteboard_annotated_help'] = 'Richiede che l\'utente annoti sulla lavagna.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Memorizza le statistiche di sessione per gli utenti per determinare il completamento dell\'attività.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'L\'ID dell\'utente.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Dati di sessione codificati in JSON (minuti, messaggi di chat, ecc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'L\'ora dell\'ultimo aggiornamento delle statistiche.';

// view.php
$string['join_session'] = 'Unisciti alla sessione';
$string['start_session'] = 'Avvia sessione';
$string['end_session'] = 'Termina sessione';
$string['participants'] = 'Partecipanti';
$string['is_recording'] = 'In registrazione';
$string['is_active'] = 'È attivo';
$string['room_info'] = 'Dettagli sessione live';
$string['participants_info'] = 'Partecipanti live';
$string['room_id'] = 'ID stanza';
$string['creation_time'] = 'Ora di creazione';
$string['name'] = 'Nome';
$string['user_id'] = 'ID utente';
$string['is_admin'] = 'È amministratore';
$string['is_presenter'] = 'È presentatore';
$string['joined_at'] = 'Unito il';
$string['moderator_not_joined'] = 'Un moderatore deve avviare la sessione prima che Lei possa unirsi.';
$string['session_available_from'] = 'Disponibile da: {$a}';
$string['session_available_until'] = 'Disponibile fino a: {$a}';
$string['session_not_started_yet'] = 'Questa sessione non è ancora iniziata.';
$string['session_ended'] = 'Questa sessione è terminata.';
$string['client_files_missing'] = 'File client (JS/CSS) mancanti. Verifichi la configurazione del Suo server PlugNmeet.';
$string['client_connection_error'] = 'Si è verificato un errore durante la connessione al server PlugNmeet: {$a}. Verifichi le impostazioni del Suo plugin.';
$string['allow_guest'] = 'Consenti utenti ospiti';
$string['allow_guest_help'] = 'Quando abilitato, viene generato un link condivisibile sicuro in modo che utenti esterni (come insegnanti ospiti o partecipanti senza un account Moodle) possano unirsi alla sessione; un amministratore può visualizzare e condividere questo link.';
$string['guest_join_link'] = 'Link di accesso ospite';
$string['guest_join_link_help'] = 'Condivida questo link con i partecipanti esterni. Questo link rimarrà valido per {$a} ore. Ogni ricaricamento della pagina genererà un nuovo link, ma i link precedentemente condivisi rimarranno validi fino alla loro scadenza originale.';
$string['copy_link'] = 'Copia link';
$string['link_copied'] = 'Link copiato negli appunti.';
$string['guest_join_title'] = 'Partecipa alla riunione come ospite';
$string['enter_display_name'] = 'Inserisca il Suo nome visualizzato';
$string['join_as_guest'] = 'Partecipa alla riunione';
$string['guest_access_denied'] = 'L\'accesso ospite non è abilitato per questa riunione.';
$string['invalid_guest_token'] = 'Token di accesso ospite non valido o scaduto.';
$string['guest_link_expired'] = 'Questo link di accesso ospite è scaduto.';
$string['error_joining_session'] = 'Si è verificato un errore durante l\'accesso alla sessione: {$a}';
$string['already_logged_in'] = 'È già loggato in Moodle. Può unirsi alla sessione direttamente da questa pagina attività.';
$string['total_webcams'] = 'Totale webcam';
$string['total_mics'] = 'Totale microfoni';
$string['total_screen_shares'] = 'Totale condivisioni schermo';
$string['webcams'] = 'Webcam';
$string['mics'] = 'Microfoni';
$string['screenshares'] = 'Condivisioni schermo';

// Events
$string['event_room_started'] = 'Stanza avviata';
$string['event_room_ended'] = 'Stanza terminata';
$string['event_room_created'] = 'Stanza creata';
$string['event_session_ended'] = 'Sessione terminata';
$string['event_participant_joined'] = 'Partecipante unito';
$string['event_participant_left'] = 'Partecipante uscito';
$string['event_artifact_created'] = 'Artefatto creato';
$string['event_recording_proceeded'] = 'Registrazione pronta';
$string['event_plugin_error'] = 'Errore PlugNmeet';
$string['event_track_published'] = 'Traccia pubblicata';
$string['event_track_unpublished'] = 'Traccia non pubblicata';
$string['event_recording_started'] = 'Registrazione avviata';
$string['event_recording_ended'] = 'Registrazione terminata';
$string['event_rtmp_started'] = 'Streaming RTMP avviato';
$string['event_rtmp_ended'] = 'Streaming RTMP terminato';

// Notifications
$string['messageprovider:recording_ready'] = 'Notifiche per registrazioni pronte';
$string['messageprovider:artifact_ready'] = 'Notifiche per artefatti pronti';
$string['recording_ready_notification_subject'] = 'Registrazione pronta: {$a}';
$string['recording_ready_notification_fullmessage'] = 'La registrazione per la sessione "{$a->roomname}" è ora pronta ed elaborata. Può visualizzarla qui: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>La registrazione per la sessione <strong>"{$a->roomname}"</strong> è ora pronta ed elaborata.</p><p><a href="{$a->url}">Clicchi qui per visualizzare la registrazione.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Registrazione pronta per {$a}';
$string['artifact_ready_notification_subject'] = 'Artefatto pronto: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Un nuovo artefatto ({$a->type}) per la sessione "{$a->roomname}" è ora disponibile. Può visualizzarlo qui: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Un nuovo artefatto ({$a->type}) per la sessione <strong>"{$a->roomname}"</strong> è ora disponibile.</p><p><a href="{$a->url}">Clicchi qui per visualizzare i dettagli dell\'artefatto.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefatto pronto per {$a}';

// recordings.php
$string['no_recordings'] = 'Nessuna registrazione trovata.';
$string['recording_id'] = 'ID registrazione';
$string['room_sid'] = 'SID stanza';
$string['file_size'] = 'Dimensione file';
$string['created_at'] = 'Creato il';
$string['actions'] = 'Azioni';
$string['view'] = 'Visualizza';
$string['play'] = 'Riproduci';
$string['download'] = 'Scarica';
$string['delete'] = 'Elimina';
$string['delete_confirm'] = 'È sicuro di voler eliminare questo elemento?';
$string['delete_success'] = 'Eliminato con successo.';
$string['recording_details'] = 'Dettagli registrazione';
$string['recording_creation_time'] = 'Ora di creazione registrazione';
$string['room_creation_time'] = 'Ora di creazione sessione';
$string['back_to_list'] = 'Torna all\'elenco';
$string['browser_not_support_video'] = 'Il Suo browser non supporta il tag video.';
$string['room_title'] = 'Titolo stanza';
$string['total_participants'] = 'Totale partecipanti';
$string['session_started_at'] = 'Sessione iniziata il';
$string['session_ended_at'] = 'Sessione terminata il';

// artifacts.php
$string['no_artifacts'] = 'Nessun artefatto trovato.';
$string['artifact_id'] = 'ID artefatto';
$string['type'] = 'Tipo';
$string['artifact_details'] = 'Dettagli artefatto';
$string['no_permission'] = 'Non ha il permesso di visualizzare questa pagina.';
$string['token_usage'] = 'Utilizzo token';
$string['duration_usage'] = 'Utilizzo durata';
$string['character_count_usage'] = 'Utilizzo conteggio caratteri';
$string['estimated_cost'] = 'Costo stimato';
$string['file_path'] = 'Percorso file';
$string['mime_type'] = 'Tipo MIME';
$string['created_at'] = 'Creato il';
$string['meeting_summary'] = 'Riepilogo riunione';
$string['error_loading_meeting_summary'] = 'Errore durante il caricamento del riepilogo della riunione: {$a}';

// Analytics strings
$string['download_excel_report'] = 'Scarica rapporto Excel';
$string['download_raw_json'] = 'Scarica dati grezzi';
$string['room_summary'] = 'Riepilogo stanza';
$string['users_summary'] = 'Riepilogo utenti';
$string['see_excel_report'] = 'Veda il rapporto Excel per i dettagli';
$string['error_loading_analytics'] = 'Errore durante il caricamento dei dati analitici: {$a}';
$string['error_generating_excel'] = 'Errore durante la generazione del rapporto Excel: {$a}';

$string['analytics_room_room_id'] = 'ID stanza';
$string['analytics_room_room_title'] = 'Titolo stanza';
$string['analytics_room_room_creation'] = 'Ora di creazione stanza';
$string['analytics_room_room_ended'] = 'Ora di fine stanza';
$string['analytics_room_room_duration'] = 'Durata stanza';
$string['analytics_room_room_total_users'] = 'Totale partecipanti';
$string['analytics_room_enabled_e2ee'] = 'E2EE abilitato';
$string['analytics_room_recording_status'] = 'Conteggio stato registrazione';
$string['analytics_room_rtmp_status'] = 'Conteggio stato RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Utilizzo totale servizio vocale';
$string['analytics_room_external_media_player_status'] = 'Conteggio stato lettore multimediale esterno';
$string['analytics_room_etherpad_status'] = 'Conteggio stato Etherpad';
$string['analytics_room_external_display_link_status'] = 'Conteggio stato link display esterno';
$string['analytics_room_ingress_created'] = 'Conteggio ingressi creati';
$string['analytics_room_breakout_room'] = 'Conteggio stanze per sottogruppi';

$string['analytics_user_name'] = 'Nome';
$string['analytics_user_id'] = 'ID utente';
$string['analytics_user_ex_id'] = 'ID utente';
$string['analytics_user_is_admin'] = 'È amministratore';
$string['analytics_user_duration'] = 'Durata';
$string['analytics_user_joined'] = 'Unito il';
$string['analytics_user_left'] = 'Uscito il';
$string['analytics_user_mic_status'] = 'Cambiamenti stato microfono';
$string['analytics_user_mic_muted'] = 'Conteggio microfoni muti';
$string['analytics_user_mic_duration'] = 'Durata microfono abilitato';
$string['analytics_user_talked'] = 'Conteggio parlato';
$string['analytics_user_talked_duration'] = 'Durata conversazione';
$string['analytics_user_webcam_status'] = 'Cambiamenti stato webcam';
$string['analytics_user_webcam_duration'] = 'Durata webcam abilitata';
$string['analytics_user_raise_hand'] = 'Conteggio mani alzate';
$string['analytics_user_voted_poll'] = 'Conteggio voti sondaggio';
$string['analytics_user_whiteboard_annotated'] = 'Conteggio annotazioni lavagna';
$string['analytics_user_whiteboard_files'] = 'Conteggio file lavagna';
$string['analytics_user_screen_share_status'] = 'Cambiamenti stato condivisione schermo';
$string['analytics_user_speech_services_usage'] = 'Utilizzo servizi vocali';
$string['analytics_user_public_chat'] = 'Messaggi chat pubblica';
$string['analytics_user_private_chat'] = 'Messaggi chat privata';
$string['analytics_user_chat_files'] = 'File chat condivisi';
$string['analytics_user_interface_invisible'] = 'Conteggio interfacce invisibili';
$string['analytics_user_connection_quality'] = 'Qualità connessione';
$string['analytics_user_connection_quality_excellent'] = 'Eccellente';
$string['analytics_user_connection_quality_good'] = 'Buona';
$string['analytics_user_connection_quality_poor'] = 'Scarsa';

$string['users_info'] = 'Informazioni utenti';
$string['polls'] = 'Sondaggi';
$string['question'] = 'Domanda';
$string['options'] = 'Opzioni';
$string['file_name'] = 'Nome file';
$string['checkcompletiontask'] = 'Verifica completamento plugNmeet';

// attendance.php
$string['attendance_report'] = 'Rapporto presenze';
$string['status'] = 'Stato';
$string['present'] = 'Presente';
$string['absent'] = 'Assente';
$string['incomplete'] = 'Incompleto';
$string['completed'] = 'Completato';
$string['minutes_attended'] = 'Minuti di presenza';
$string['last_updated'] = 'Ultimo aggiornamento';
$string['mic_duration'] = 'Durata microfono abilitato';
$string['webcam_duration'] = 'Durata webcam abilitata';
$string['participation_progress'] = 'Progresso partecipazione';
$string['attendance_duration'] = 'Minuti di presenza';
$string['attendance_webcam_status'] = 'Webcam abilitata';
$string['attendance_mic_status'] = 'Microfono abilitato';
$string['attendance_talked_duration'] = 'Durata conversazione';
$string['attendance_voted_poll'] = 'Votato nel sondaggio';
$string['attendance_chat_messages'] = 'Messaggi chat inviati';
$string['attendance_raise_hand'] = 'Mano alzata';
$string['attendance_webcam_duration'] = 'Durata webcam abilitata';
$string['attendance_mic_duration'] = 'Durata microfono abilitato';
$string['attendance_whiteboard_annotated'] = 'Annotato sulla lavagna';
$string['met'] = 'Raggiunto';
$string['required'] = 'Richiesto';

// Status codes
$string['status_unknown_status'] = 'È stato restituito uno stato sconosciuto dal server.';
$string['status_success'] = 'Operazione completata con successo.';
$string['status_permission_denied'] = 'Permesso negato.';
$string['status_not_found'] = 'Nessun {$a} trovato.';
$string['status_conflict'] = 'Questa azione non poteva essere completata a causa di un conflitto (ad esempio, stessa richiesta ripetuta).';
$string['status_invalid_token_or_signature'] = 'Il token di richiesta o la firma non sono validi.';
$string['status_invalid_api_key'] = 'La chiave API fornita non è valida. Verifichi le impostazioni del Suo plugin.';
$string['status_internal_server_error'] = 'Il server PlugNmeet ha riscontrato un errore interno.';
$string['status_invalid_parameters'] = 'Le informazioni fornite non sono valide.';
$string['status_missing_required_parameter'] = 'Alcune informazioni richieste sono mancanti.';
$string['status_room_not_found'] = 'La stanza specificata non è stata trovata.';
$string['status_user_not_found'] = 'Account utente non trovato. Si assicuri che le Sue credenziali API siano corrette e che il Suo abbonamento sia attivo.';
$string['status_user_blocked'] = 'Account utente bloccato. Contatti il supporto.';
$string['status_user_not_active'] = 'Account utente non attivo. Ciò è probabilmente dovuto a un abbonamento inattivo o scaduto.';

$string['merge_recordings'] = 'Registrazioni di fusione';
$string['merged_file_name'] = 'Nome file unito';
$string['merge'] = 'Fusione';
$string['close'] = 'Chiudi';
$string['merge_confirmation'] = 'Sei sicuro di voler unire le registrazioni selezionate?';
$string['modal_merge_recordings_header'] = 'Le seguenti registrazioni saranno unite in questo ordine:';
$string['modal_merge_recordings_prompt'] = 'Devi selezionare almeno due registrazioni da unire.';
$string['merge_request_success'] = 'La richiesta di fusione delle registrazioni è stata aggiunta con successo. Verrai avvisato quando sarà completato.';
$string['upload_to_whiteboard'] = 'Carica sulla lavagna';
$string['upload_to_whiteboard_success'] = 'Caricato con successo il file selezionato sulla lavagna';
$string['uploading_file'] = 'Caricamento file...';
$string['file_not_found'] = 'File richiesto non trovato';
$string['error_file_copy'] = 'Errore durante la copia del file';
