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
$string['modulename_help'] = 'Le module d’activités PlugNmeet vous permet de créer et de gérer des sessions de webconférence en temps réel depuis Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Administration de plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Ajouter une nouvelle activité PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Supprimer les artefacts';
$string['plugnmeet:deleterecording'] = 'Supprimer les enregistrements';
$string['plugnmeet:downloadanalyticsreport'] = 'Télécharger le rapport analytique';
$string['plugnmeet:downloadartifacts'] = 'Télécharger des artefacts';
$string['plugnmeet:downloadattendance'] = 'Télécharger le rapport d’affluence';
$string['plugnmeet:downloadrecordings'] = 'Télécharger des enregistrements';
$string['plugnmeet:manage'] = 'Gérer les paramètres de PlugNmeet';
$string['plugnmeet:view'] = 'Voir l’activité PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Voir les artefacts';
$string['plugnmeet:viewattendance'] = 'Voir le rapport d’affluence';
$string['plugnmeet:viewattendancelist'] = 'Voir la liste des fréquentations';
$string['plugnmeet:viewlivesessioninfo'] = 'Voir les informations sur les sessions en direct';
$string['plugnmeet:viewrecordings'] = 'Voir les enregistrements';
$string['plugnmeetfieldset'] = 'Champ d’exemple personnalisé';
$string['plugnmeetname'] = 'Nom d’exemple personnalisé';
$string['plugnmeetname_help'] = 'Aide pour exemples personnalisés';

// Admin Settings
$string['api_config'] = 'API Configuration';
$string['server_url'] = 'URL serveur PlugNmeet';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'Clé API';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server used for secure authentication.';
$string['guest_access_hdr'] = 'Paramètres d’accès invité';
$string['allow_guest_global'] = 'Autoriser l’accès des invités à l’échelle mondiale';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = 'Expiration du lien invité (heures)';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = 'Paramètres techniques par défaut';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = 'Activez Dynacast';
$string['enable_dynacast_des'] = 'Optimizes performance by dynamically pausing video layers that are not being viewed by participants. This significantly reduces server-side CPU and bandwidth usage. **Note:** This will be automatically enabled if using SVC codecs (VP9/AV1) and is required for multi-codec simulcast.';
$string['enable_simulcast'] = 'Activer la diffusion simultanée';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = 'Codec vidéo';
$string['video_codec_des'] = 'The encoding standard for video transmission. **VP8** is recommended for WebRTC as it provides the best balance of quality and low latency. **Warning:** Not all browsers support every codec; ensure your users are on modern browsers if using VP9 or H.265.';
$string['default_webcam_resolution'] = 'Résolution par défaut de la webcam';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = 'Résolution par défaut du partage d’écran';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = 'Préréglage audio par défaut';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = 'Image de marque et personnalisation';
$string['custom_logo'] = 'Logo personnalisé';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'URL CSS personnalisée';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = 'Couleur primaire';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = 'Couleur secondaire';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = 'Couleur d’arrière-plan';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = 'Image d’arrière-plan';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = 'Couleur de l’en-tête';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = 'Couleur du pied de page';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = 'Couleur du côté gauche';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = 'Couleur de fond du panneau latéral';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = 'Texte du droit d’auteur';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = 'Oui';
$string['no'] = 'Non';
$string['recordings'] = "Enregistrements";
$string['recording'] = "Enregistrement";
$string['artifacts'] = "Objets de la pièce";
$string['attendance'] = "Rapport d’affluence";
$string['artifact'] = "Artefact";
$string['room_subject'] = 'Chambre';
$string['user_subject'] = 'utilisateur';

// mod_form.php
$string['roomtitle'] = 'Titre de la salle';
$string['roomtitle_help'] = 'The name used for the Moodle activity and the live meeting header. It helps students identify the session in their course and inside the room.';
$string['welcome_message'] = 'Message de bienvenue';
$string['welcome_message_help'] = 'Tout texte saisi ici apparaîtra comme le premier message dans le chat public lorsque les utilisateurs rejoignent la salle. C’est utile pour partager des instructions, des liens ou des informations importantes avec les participants à leur entrée.';
$string['max_participants'] = 'Max Participants';
$string['max_participants_help'] = 'Définissez cette valeur pour limiter le nombre d’utilisateurs pouvant rejoindre la session en même temps. Réglez-le à 0 pour permettre un nombre illimité de participants, ce qui signifie qu’il n’y a aucune restriction sur le nombre d’utilisateurs pouvant rejoindre.';
$string['room_features'] = 'Caractéristiques de la salle';
$string['recording_features'] = 'Fonctionnalités d’enregistrement';
$string['chat_features'] = 'Fonctionnalités de chat';
$string['other_features'] = 'Autres caractéristiques';
$string['e2ee_features'] = 'Chiffrement de bout en bout';
$string['insights_features'] = 'Insights & fonctionnalités d’IA';
$string['defaultlock'] = 'Paramètres par défaut de la serrure';
$string['advanced_completion'] = 'Complétion avancée';
$string['available'] = 'Disponible à partir du';
$string['available_help'] = 'Determines when participants can start joining the session. Users will not be able to enter the room before this date and time.';
$string['deadline'] = 'Disponible jusqu’à ce';
$string['deadline_help'] = 'Determines the final date and time that participants can access the session. Access will be blocked once this deadline passes.';
$string['err_deadline_before_available'] = 'La date « Disponible jusqu’à » ne peut pas être antérieure à la date « Disponible depuis ».';
$string['error_analytics_required_for_completion'] = 'Activer l’analyse doit être vérifiée si des critères de complétion sont définis.';

$string['allow_webcams'] = 'Autoriser les webcams';
$string['allow_webcams_help'] = 'Permettre aux participants d’utiliser leur webcam.';
$string['mute_on_start'] = 'Muter au démarrage';
$string['mute_on_start_help'] = 'Mettez automatiquement en sourdine tous les participants lorsqu’ils rejoignent la session.';
$string['allow_screen_share'] = 'Autoriser le partage d’écran';
$string['allow_screen_share_help'] = 'Permettre aux participants de partager leur écran.';
$string['allow_rtmp'] = 'Autoriser le streaming RTMP';
$string['allow_rtmp_help'] = 'Enables moderators to broadcast the live session to external platforms like YouTube, Facebook, or Twitch. Perfect for public webinars or guest lectures.';
$string['allow_raise_hand'] = 'Autoriser la main levée';
$string['allow_raise_hand_help'] = 'Permettre aux participants de lever la main.';
$string['admin_only_webcams'] = 'Webcams réservées aux administrateurs';
$string['admin_only_webcams_help'] = 'N’autorisez que les modérateurs à utiliser leurs webcams.';
$string['allow_view_other_webcams'] = 'Permettre Voir d’autres webcams';
$string['allow_view_other_webcams_help'] = 'Permettre aux participants de voir les webcams des autres participants. Si elles sont désactivées, elles ne verront que les webcams des modérateurs.';
$string['allow_view_other_users_list'] = 'Permettre Voir la liste des autres utilisateurs';
$string['allow_view_other_users_list_help'] = 'Permettre aux participants de voir la liste des autres participants.';
$string['room_duration'] = 'Durée de la chambre (minutes)';
$string['room_duration_help'] = 'Définit combien de temps la pièce peut rester ouverte avant de se fermer automatiquement. Entrez 0 si vous ne souhaitez pas fixer de limite de temps, permettant ainsi à la salle de rester active sans restrictions.';
$string['moderator_join_first'] = 'Modérateur : Rejoignez-vous en premier';
$string['moderator_join_first_help'] = 'Une fois activée, la session ne démarre pas et personne ne peut rejoindre tant qu’un modérateur (comme un enseignant) ne rejoint pas en premier. Les participants resteront sur la page d’activité Moodle et n’entreront pas dans la salle ni dans la salle d’attente. C’est différent de l’option Salle d’attente, où les utilisateurs peuvent toujours rejoindre et attendre.';
$string['enable_analytics'] = 'Activer l’analyse';
$string['enable_analytics_help'] = 'Tracks participation and engagement data for the session. **Note:** This must be enabled if any Completion criteria are set.';
$string['allow_virtual_bg'] = 'Autoriser les arrière-plans virtuels';
$string['allow_virtual_bg_help'] = 'Enables participants to blur their background or use a virtual image. Great for maintaining student privacy and ensuring a professional classroom appearance.';
$string['auto_gen_user_id'] = 'Générer automatiquement l’identifiant utilisateur';
$string['auto_gen_user_id_help'] = 'Une fois activé, le système crée un nouvel ID afin que le même utilisateur puisse rejoindre depuis plusieurs appareils — par exemple, lorsqu’un enseignant rejoint depuis une tablette pour dessiner sur le tableau blanc tout en utilisant un PC pour la caméra et le microphone ; cependant, c’est le cas <b>Recommandé</b> pour désactiver cette option afin que l’identifiant utilisateur Moodle soit utilisé et que les jointures en double soient évitées.';

$string['allow_recording'] = 'Allow Recording (Master Switch)';
$string['allow_recording_help'] = 'The primary master switch for all recording features. If disabled, both Cloud and Local recording options will be hidden from moderators.';
$string['allow_cloud_recording'] = 'Autoriser l’enregistrement cloud';
$string['allow_cloud_recording_help'] = 'Enables recording on the PlugNmeet server. The final video is processed and stored in the cloud, making it easy to share via a link once the session ends.';
$string['enable_auto_cloud_recording'] = 'Activer l’enregistrement automatique dans le cloud';
$string['enable_auto_cloud_recording_help'] = 'Automatically triggers the cloud recording the moment the first moderator joins the session. Ideal for ensuring no lecture is forgotten.';
$string['allow_local_recording'] = 'Autoriser l’enregistrement local';
$string['allow_local_recording_help'] = 'Allows recording directly to the computer. **Note:** Requires Google Chrome. To capture all session audio, the user must share their "Chrome Tab" and check the "Also share tab audio" box. The file is saved locally to the device once finished.';

$string['allow_chat'] = 'Allow Chat (Global Master Switch)';
$string['allow_chat_help'] = 'The absolute master switch for all chat functions. If disabled, the entire chat area is removed for everyone, including moderators. No public or private chat will be possible.';
$string['allow_file_upload'] = 'Autoriser le téléchargement de fichiers';
$string['allow_file_upload_help'] = 'Enables the ability to share files within the chat. This requires the "Allow Chat" master switch to be active.';

$string['allow_shared_notepad'] = 'Autoriser le bloc-notes partagé';
$string['allow_shared_notepad_help'] = 'Enables a collaborative text editor where students and teachers can take real-time notes together. This is perfect for brainstorming, co-writing, or building a shared class summary.';

$string['allow_whiteboard'] = 'Autoriser le tableau blanc';
$string['allow_whiteboard_help'] = 'Unlocks an interactive drawing space for the session. Use it for sketching diagrams, solving math problems visually, or letting students annotate shared content.';

$string['allowed_external_media_player'] = 'Allow External Media Player';
$string['allowed_external_media_player_help'] = 'Allows moderators to sync and play videos from sources like YouTube or Vimeo for the whole class. Ideal for analyzing educational clips or watching documentaries together without bandwidth lag.';

$string['activate_waiting_room'] = 'Activez la salle d’attente';
$string['activate_waiting_room_help'] = 'Activez la salle d’attente pour cette séance.';
$string['waiting_room_msg'] = 'Message de la salle d’attente';
$string['waiting_room_msg_help'] = 'Ce message est montré aux utilisateurs pendant qu’ils attendent d’être admis dans la salle. Utilisez-le pour partager des instructions, des attentes ou des informations utiles avant le début de la séance.';

$string['allow_breakout_rooms'] = 'Autoriser les salles de détente';
$string['allow_breakout_rooms_help'] = 'Enables moderators to split participants into smaller groups for focused discussions, collaborative projects, or private group activities.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'The maximum number of sub-rooms a moderator can create within a single session.';

$string['allow_display_external_link_features'] = 'Allow External Link Sharing';
$string['allow_display_external_link_features_help'] = 'Allows moderators to display external educational content—such as H5P activities, SCORM packages, or quiz systems (e.g., Kahoot)—directly to all participants during the session.';

$string['allow_ingress_features'] = 'Allow Ingress (External Streaming)';
$string['allow_ingress_features_help'] = 'Allows teachers to broadcast high-quality video into the session using external software like OBS via RTMP or WHIP protocols. This is ideal for sharing high-resolution video content, pre-recorded sessions, or bypassing browser upload limitations.';

$string['allow_polls'] = 'Autoriser les sondages';
$string['allow_polls_help'] = 'Enables moderators to create interactive polls and quick quizzes during the session. This is a great way to check student understanding and increase engagement.';

$string['sip_dial_in_features_is_allow'] = 'Autoriser l’entrée par numérotation SIP';
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
$string['insights_transcription_features_is_allow_translation'] = 'Autoriser la traduction par transcription';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allows the live transcript to be translated into different languages, supporting international students and multi-lingual environments.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Speech Synthesis (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Enables Text-to-Speech, allowing the live transcript to be read aloud for better accessibility and for visually impaired participants.';
$string['insights_chat_translation_features_is_allow'] = 'Autoriser la traduction du chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Enables real-time translation of chat messages, allowing participants to communicate instantly across different languages.';
$string['insights_ai_features_is_allow'] = 'Allow AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'The master switch for all AI-powered capabilities. If disabled, specific features like AI Chat and Meeting Summarization will be hidden, even if Session Insights is active.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integrates an AI assistant directly into the chat to help answer questions, explain complex concepts, and facilitate group discussion.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Autoriser la synthèse des réunions par IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Automatically generates a concise AI summary after the session ends, highlighting key educational points, decisions, and follow-up tasks.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Mutes all participants by default upon entry. Only moderators can unmute or grant permission to speak.';
$string['lock_webcam'] = 'Lock Webcams';
$string['lock_webcam_help'] = 'Disables cameras for all participants by default. Useful for saving bandwidth or ensuring student privacy.';
$string['lock_screen_sharing'] = 'Partage de l’écran de verrouillage';
$string['lock_screen_sharing_help'] = 'Restricts screen sharing to moderators only. Prevents participants from interrupting with their own screens.';
$string['lock_whiteboard'] = 'Verrouiller le tableau blanc';
$string['lock_whiteboard_help'] = 'Restricts whiteboard drawing tools to moderators only. Prevents unauthorized annotations by participants.';
$string['lock_shared_notepad'] = 'Verrouiller le bloc-notes partagé';
$string['lock_shared_notepad_help'] = 'Disables the collaborative notepad for participants to prevent off-topic writing or distractions.';
$string['lock_chat'] = 'Lock Public Chat';
$string['lock_chat_help'] = 'Completely hides or disables the public chat area for all participants.';
$string['lock_chat_send_message'] = 'Lock Sending Messages';
$string['lock_chat_send_message_help'] = 'Allows participants to read the chat, but prevents them from sending any messages.';
$string['lock_chat_file_share'] = 'Lock File Sharing';
$string['lock_chat_file_share_help'] = 'Prevents participants from uploading or sharing files within the chat area.';
$string['lock_private_chat'] = 'Verrouillez le chat privé';
$string['lock_private_chat_help'] = 'Disables 1-on-1 private messaging between participants. Note: Participants can still send private messages to moderators for help or questions.';

$string['completion_minutes'] = 'Procès-verbal observé';
$string['completion_minutes_help'] = 'Exigez que l’utilisateur soit présent dans la session pendant un certain nombre de minutes.';
$string['completion_minutes_desc'] = 'L’utilisateur doit assister à la session au moins {$a} Minutes.';
$string['completion_raised_hand'] = 'Main levée';
$string['completion_raised_hand_help'] = 'Exigez que l’utilisateur lève la main au moins une fois.';
$string['completion_chat_messages'] = 'Messages de chat envoyés';
$string['completion_chat_messages_help'] = 'Exigez que l’utilisateur envoie au moins un message de chat.';
$string['completion_webcam_enabled'] = 'Webcam activée';
$string['completion_webcam_enabled_help'] = 'Exigez que l’utilisateur active sa webcam au moins une fois.';
$string['completion_webcam_duration'] = 'Durée activée par webcam (minutes)';
$string['completion_webcam_duration_help'] = 'Exigez que l’utilisateur ait sa webcam activée pendant un certain nombre de minutes.';
$string['completion_webcam_duration_desc'] = 'L’utilisateur doit avoir sa webcam activée au moins {$a} Minutes.';
$string['completion_mic_enabled'] = 'Micro activé';
$string['completion_mic_enabled_help'] = 'Exigez que l’utilisateur active son micro au moins une fois.';
$string['completion_mic_duration'] = 'Durée activée par le microphone (minutes)';
$string['completion_mic_duration_help'] = 'Exigez que l’utilisateur ait son micro activé pendant un certain nombre de minutes.';
$string['completion_mic_duration_desc'] = 'L’utilisateur doit avoir son micro activé au moins {$a} Minutes.';
$string['completion_talk_duration'] = 'Durée de la conférence (minutes)';
$string['completion_talk_duration_help'] = 'Exigez que l’utilisateur parle pendant un certain nombre de minutes.';
$string['completion_talk_duration_desc'] = 'L’utilisateur doit parler au moins {$a} Minutes.';
$string['completion_poll_voted'] = 'Voté dans le sondage';
$string['completion_poll_voted_help'] = 'Exigez que l’utilisateur vote dans au moins un sondage.';
$string['completion_whiteboard_annotated'] = 'Annoté sur un tableau blanc';
$string['completion_whiteboard_annotated_help'] = 'Exigez que l’utilisateur annote sur le tableau blanc.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Stocke les statistiques de session pour permettre aux utilisateurs de déterminer l’achèvement de l’activité.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'L’identifiant de l’utilisateur.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Données de session encodées en JSON (procès-verbaux, messages de chat, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'L’heure à laquelle les statistiques ont été mises à jour pour la dernière fois.';

// view.php
$string['join_session'] = 'Rejoindre la session';
$string['start_session'] = 'Début de la session';
$string['end_session'] = 'Fin de la session';
$string['participants'] = 'Participants';
$string['is_recording'] = 'Is Recording';
$string['is_active'] = 'Est actif';
$string['room_info'] = 'Détails de la session en direct';
$string['participants_info'] = 'Participants en direct';
$string['room_id'] = 'ID de la chambre';
$string['creation_time'] = 'Temps de création';
$string['name'] = 'Nom';
$string['user_id'] = 'ID utilisateur';
$string['is_admin'] = 'Est administrateur';
$string['is_presenter'] = 'Est présentateur';
$string['joined_at'] = 'Intégré à';
$string['moderator_not_joined'] = 'Un modérateur doit commencer la session avant que vous puissiez rejoindre.';
$string['session_available_from'] = 'Disponible sur : {$a}';
$string['session_available_until'] = 'Disponible jusqu’à : {$a}';
$string['session_not_started_yet'] = 'Cette séance n’a pas encore commencé.';
$string['session_ended'] = 'Cette séance est terminée.';
$string['allow_guest'] = 'Autoriser les utilisateurs invités';
$string['allow_guest_help'] = 'Une fois activé, un lien partagé sécurisé est généré afin que les utilisateurs externes (comme des enseignants invités ou des participants sans compte Moodle) puissent rejoindre la session ; Un administrateur peut consulter et partager ce lien.';
$string['guest_join_link'] = 'Lien de rejoindre les invités';
$string['guest_join_link_help'] = 'Partagez ce lien avec des participants externes. Ce lien restera valable pour {$a} des heures. Chaque rechargement de page génère un nouveau lien, mais les liens précédemment partagés resteront valides jusqu’à leur expiration initiale.';
$string['copy_link'] = 'Lien copié';
$string['link_copied'] = 'Link copia sur la planche.';
$string['guest_join_title'] = 'Rejoignez la réunion en tant qu’invité';
$string['enter_display_name'] = 'Saisissez votre nom d’affichage';
$string['join_as_guest'] = 'Rejoindre la réunion';
$string['guest_access_denied'] = 'L’accès des invités n’est pas activé pour cette réunion.';
$string['invalid_guest_token'] = 'Jeton d’entrée invité invalide ou expiré.';
$string['guest_link_expired'] = 'Ce lien de rejoindre les invités est expiré.';
$string['error_joining_session'] = 'Il y a eu une erreur qui a rejoint la session : {$a}';
$string['already_logged_in'] = 'Vous êtes déjà connecté à Moodle. Vous pouvez rejoindre la session directement depuis cette page d’activité.';
$string['total_webcams'] = 'Webcams totales';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Total des partages d’écran';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Micros';
$string['screenshares'] = 'Partage d’écran';

// Events
$string['event_room_started'] = 'La pièce a commencé';
$string['event_room_ended'] = 'Fin de la salle';
$string['event_room_created'] = 'Salle créée';
$string['event_session_ended'] = 'Fin de la session';
$string['event_participant_joined'] = 'Participant rejoint';
$string['event_participant_left'] = 'Participant à gauche';
$string['event_artifact_created'] = 'Artefact créé';
$string['event_recording_proceeded'] = 'Enregistrement prêt';
$string['event_plugin_error'] = 'Erreur PlugNmeet';
$string['event_track_published'] = 'Piste publiée';
$string['event_track_unpublished'] = 'Piste inédite';

// Notifications
$string['messageprovider:recording_ready'] = 'Notifications pour les enregistrements prêts';
$string['messageprovider:artifact_ready'] = 'Notifications pour les artefacts prêts à être';
$string['recording_ready_notification_subject'] = 'Enregistrement prêt : {$a}';
$string['recording_ready_notification_fullmessage'] = 'L’enregistrement de la session "{$a->roomname}" est maintenant prêt et traité. Vous pouvez le consulter ici : {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>L’enregistrement de la session <strong>"{$a->roomname}"</strong> est maintenant prêt et traité.</p><p><a href="{$a->url}">Cliquez ici pour voir l’enregistrement.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Enregistrement prêt pour {$a}';
$string['artifact_ready_notification_subject'] = 'Artefact prêt : {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Un nouvel artefact ({$a->type}) pour la session "{$a->roomname}" est désormais disponible. Vous pouvez le consulter ici : {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Un nouvel artefact ({$a->type}) pour la session <strong>"{$a->roomname}"</strong> est maintenant disponible.</p><p><a href="{$a->URL}"> Cliquez ici pour voir les détails de l’artefact.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefact prêt pour {$a}';

// recordings.php
$string['no_recordings'] = 'Aucun enregistrement trouvé.';
$string['recording_id'] = 'ID de l’enregistrement';
$string['room_sid'] = 'Chambre SID';
$string['file_size'] = 'Taille du fichier';
$string['created_at'] = 'Créé à';
$string['actions'] = 'Actions';
$string['view'] = 'Vue';
$string['play'] = 'Jouer';
$string['download'] = 'Télécharger';
$string['delete'] = 'Supprimer';
$string['delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer ça ?';
$string['delete_success'] = 'Supprimé avec succès.';
$string['recording_details'] = 'Détails de l’enregistrement';
$string['recording_creation_time'] = 'Temps de création de l’enregistrement';
$string['room_creation_time'] = 'Temps de création de session';
$string['back_to_list'] = 'Retour à la liste';
$string['browser_not_support_video'] = 'Votre navigateur ne prend pas en charge la balise vidéo.';
$string['room_title'] = 'Titre de la salle';
$string['total_participants'] = 'Total Participants';
$string['session_started_at'] = 'Session commencée à';
$string['session_ended_at'] = 'Session terminée à';

// artifacts.php
$string['no_artifacts'] = 'Aucun artefact trouvé.';
$string['artifact_id'] = 'ID de l’artefact';
$string['type'] = 'Type';
$string['artifact_details'] = 'Détails des artefacts';
$string['no_permission'] = 'Vous n’avez pas la permission de consulter cette page.';
$string['token_usage'] = 'Utilisation des jetons';
$string['duration_usage'] = 'Durée d’utilisation';
$string['character_count_usage'] = 'Utilisation du nombre de caractères';
$string['estimated_cost'] = 'Coût estimé';
$string['file_path'] = 'Chemin de fichier';
$string['mime_type'] = 'Mime Type';
$string['created_at'] = 'Créé à';

// Analytics strings
$string['download_excel_report'] = 'Télécharger le rapport Excel';
$string['download_raw_json'] = 'Télécharger les données brutes';
$string['room_summary'] = 'Résumé de la salle';
$string['users_summary'] = 'Résumé des utilisateurs';
$string['see_excel_report'] = 'Voir le rapport Excel pour plus de détails';
$string['error_loading_analytics'] = 'Données analytiques de chargement d’erreur : {$a}';
$string['error_generating_excel'] = 'Rapport Excel générant une erreur : {$a}';

$string['analytics_room_room_id'] = 'ID de la chambre';
$string['analytics_room_room_title'] = 'Titre de la salle';
$string['analytics_room_room_creation'] = 'Temps de création de la salle';
$string['analytics_room_room_ended'] = 'La Chambre Terminait le Temps';
$string['analytics_room_room_duration'] = 'Durée de la chambre';
$string['analytics_room_room_total_users'] = 'Total Participants';
$string['analytics_room_enabled_e2ee'] = 'E2EE activé';
$string['analytics_room_recording_status'] = 'Comptage du statut de l’enregistrement';
$string['analytics_room_rtmp_status'] = 'Nombre de statuts RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Utilisation totale du service vocal';
$string['analytics_room_external_media_player_status'] = 'Compte de statut des lecteurs médias externes';
$string['analytics_room_etherpad_status'] = 'Compte de statut de l’Etherpad';
$string['analytics_room_external_display_link_status'] = 'Compte d’état des liens d’affichage externes';
$string['analytics_room_ingress_created'] = 'Ingress Compte créé';
$string['analytics_room_breakout_room'] = 'Nombre des salles de sortie';

$string['analytics_user_name'] = 'Nom';
$string['analytics_user_id'] = 'ID utilisateur';
$string['analytics_user_ex_id'] = 'ID utilisateur';
$string['analytics_user_is_admin'] = 'Est administrateur';
$string['analytics_user_duration'] = 'Durée';
$string['analytics_user_joined'] = 'Intégré à';
$string['analytics_user_left'] = 'À gauche à';
$string['analytics_user_mic_status'] = 'Changements de statut du micro';
$string['analytics_user_mic_muted'] = 'Compte sourd du micro';
$string['analytics_user_mic_duration'] = 'Durée activée par le micro';
$string['analytics_user_talked'] = 'Compte parlé';
$string['analytics_user_talked_duration'] = 'Durée de la discussion';
$string['analytics_user_webcam_status'] = 'Changements de statut de webcam';
$string['analytics_user_webcam_duration'] = 'Durée activée par webcam';
$string['analytics_user_raise_hand'] = 'Compte de la main levée';
$string['analytics_user_voted_poll'] = 'Dépouillement des sondages votés';
$string['analytics_user_whiteboard_annotated'] = 'Tableau blanc Comptage annoté';
$string['analytics_user_whiteboard_files'] = 'Nombre des dossiers au tableau blanc';
$string['analytics_user_screen_share_status'] = 'Changements de statut du partage d’écran';
$string['analytics_user_speech_services_usage'] = 'Utilisation des services de parole';
$string['analytics_user_public_chat'] = 'Messages de chat publics';
$string['analytics_user_private_chat'] = 'Messages privés';
$string['analytics_user_chat_files'] = 'Fichiers de chat partagés';
$string['analytics_user_interface_invisible'] = 'Compte invisible d’interface';
$string['analytics_user_connection_quality'] = 'Qualité de la connexion';
$string['analytics_user_connection_quality_excellent'] = 'Excellent';
$string['analytics_user_connection_quality_good'] = 'Bien';
$string['analytics_user_connection_quality_poor'] = 'Pauvre';

$string['users_info'] = 'Informations utilisateur';
$string['polls'] = 'Sondages';
$string['question'] = 'Question';
$string['options'] = 'Options';
$string['file_name'] = 'Nom du fichier';
$string['checkcompletiontask'] = 'Vérifiez la complétion du plugNmeet';

// attendance.php
$string['attendance_report'] = 'Rapport d’affluence';
$string['status'] = 'Statut';
$string['present'] = 'Présent';
$string['absent'] = 'Absent';
$string['incomplete'] = 'Incomplet';
$string['completed'] = 'Achèvement';
$string['minutes_attended'] = 'Procès-verbal observé';
$string['last_updated'] = 'Dernière mise à jour';
$string['mic_duration'] = 'Durée activée par le microphone';
$string['webcam_duration'] = 'Durée activée par webcam';
$string['participation_progress'] = 'Progression de la participation';
$string['attendance_duration'] = 'Procès-verbal observé';
$string['attendance_webcam_status'] = 'Webcam activée';
$string['attendance_mic_status'] = 'Micro activé';
$string['attendance_talked_duration'] = 'Durée de la conférence';
$string['attendance_voted_poll'] = 'Voté dans le sondage';
$string['attendance_chat_messages'] = 'Messages de chat envoyés';
$string['attendance_raise_hand'] = 'Main levée';
$string['attendance_webcam_duration'] = 'Durée activée par webcam';
$string['attendance_mic_duration'] = 'Durée activée par le microphone';
$string['attendance_whiteboard_annotated'] = 'Annoté sur un tableau blanc';
$string['met'] = 'Met';
$string['required'] = 'Obligatoire';

// Status codes
$string['status_unknown_status'] = 'Un statut inconnu a été communiqué depuis le serveur.';
$string['status_success'] = 'L’opération a été menée à bien.';
$string['status_permission_denied'] = 'Permission refusée.';
$string['status_not_found'] = 'Non {$a} trouvé.';
$string['status_conflict'] = 'Cette action n’a pas pu être accomplie en raison d’un conflit (par exemple, la pièce peut déjà exister).';
$string['status_invalid_token_or_signature'] = 'Le jeton de demande ou la signature est invalide.';
$string['status_invalid_api_key'] = 'La clé API fournie est invalide. Veuillez vérifier les paramètres de votre plugin.';
$string['status_internal_server_error'] = 'Le serveur PlugNmeet a rencontré une erreur interne.';
$string['status_invalid_parameters'] = 'Les informations fournies sont invalides.';
$string['status_missing_required_parameter'] = 'Certaines informations nécessaires manquent.';
$string['status_room_not_found'] = 'La pièce spécifiée n’a pas été retrouvée.';
$string['status_user_not_found'] = 'Compte utilisateur non trouvé. Veuillez vous assurer que vos identifiants API sont corrects et que votre abonnement est actif.';
$string['status_user_blocked'] = 'Le compte utilisateur est bloqué. Merci de contacter le support.';
$string['status_user_not_active'] = 'Le compte utilisateur n’est pas actif. Cela est probablement dû à un abonnement inactif ou expiré.';
