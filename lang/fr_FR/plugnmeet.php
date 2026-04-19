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
$string['plugnmeet:deleteartifacts'] = 'Delete artifacts';
$string['plugnmeet:deleterecording'] = 'Supprimer les enregistrements';
$string['plugnmeet:downloadanalyticsreport'] = 'Download analytics report';
$string['plugnmeet:downloadartifacts'] = 'Download artifacts';
$string['plugnmeet:downloadattendance'] = 'Download attendance report';
$string['plugnmeet:downloadrecordings'] = 'Download recordings';
$string['plugnmeet:manage'] = 'Gérer les paramètres de PlugNmeet';
$string['plugnmeet:view'] = 'Voir l’activité PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Voir les artefacts';
$string['plugnmeet:viewattendance'] = 'View attendance report';
$string['plugnmeet:viewlivesessioninfo'] = 'Voir les informations sur les sessions en direct';
$string['plugnmeet:viewrecordings'] = 'View recordings';
$string['plugnmeetfieldset'] = 'Champ d’exemple personnalisé';
$string['plugnmeetname'] = 'Nom d’exemple personnalisé';
$string['plugnmeetname_help'] = 'Aide pour exemples personnalisés';

// Admin Settings
$string['api_config'] = 'API Configuration';
$string['server_url'] = 'URL serveur PlugNmeet';
$string['server_url_desc'] = 'L’URL de base de votre serveur PlugNmeet (par exemple, https://pnm.example.com)';
$string['api_key'] = 'Clé API';
$string['api_key_desc'] = 'La clé API fournie par votre serveur PlugNetet.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'Le secret de l’API fourni par votre serveur PlugNmeet.';
$string['guest_access_hdr'] = 'Paramètres d’accès invité';
$string['allow_guest_global'] = 'Autoriser l’accès des invités à l’échelle mondiale';
$string['allow_guest_global_desc'] = 'Si désactivé, la participation des invités ne peut être activée pour aucune salle de réunion.';
$string['guest_link_expiration'] = 'Expiration du lien invité (heures)';
$string['guest_link_expiration_desc'] = 'La durée d’un lien de rejoindisse invité reste valide après génération.';

$string['defaults'] = 'Paramètres techniques par défaut';
$string['defaults_desc'] = 'Paramètres techniques par défaut pour les nouvelles sessions PlugNetet.';
$string['enable_dynacast'] = 'Activez Dynacast';
$string['enable_dynacast_des'] = 'Utilisez Dynacast pour optimiser les flux vidéo en publiant uniquement les haut-parleurs actifs les plus récents.';
$string['enable_simulcast'] = 'Activer la diffusion simultanée';
$string['enable_simulcast_des'] = 'Utilisez le simulcast pour fournir plusieurs couches de qualité vidéo aux spectateurs.';
$string['video_codec'] = 'Codec vidéo';
$string['video_codec_des'] = 'Le codec vidéo par défaut pour les sessions.';
$string['default_webcam_resolution'] = 'Résolution par défaut de la webcam';
$string['default_webcam_resolution_des'] = 'La résolution par défaut des webcams.';
$string['default_screen_share_resolution'] = 'Résolution par défaut du partage d’écran';
$string['default_screen_share_resolution_des'] = 'La résolution par défaut pour le partage d’écran.';
$string['default_audio_preset'] = 'Préréglage audio par défaut';
$string['default_audio_preset_des'] = 'Le préréglage audio par défaut pour les sessions.';

$string['branding'] = 'Image de marque et personnalisation';
$string['custom_logo'] = 'Logo personnalisé';
$string['custom_logo_des'] = 'Téléchargez un logo personnalisé à afficher dans la salle de réunion. S’il est vide, le logo PlugNmeet par défaut sera utilisé.';
$string['custom_css_url'] = 'URL CSS personnalisée';
$string['custom_css_url_des'] = 'Fournissez une URL vers un fichier CSS externe pour personnaliser l’apparence et l’ambiance de la salle de réunion.';
$string['primary_color'] = 'Couleur primaire';
$string['primary_color_des'] = 'La couleur principale pour les boutons et les surlignements.';
$string['secondary_color'] = 'Couleur secondaire';
$string['secondary_color_des'] = 'La couleur secondaire pour les éléments de l’interface utilisateur.';
$string['background_color'] = 'Couleur d’arrière-plan';
$string['background_color_des'] = 'Couleur d’arrière-plan de l’interface';
$string['background_image'] = 'Image d’arrière-plan';
$string['background_image_des'] = 'Devrait avoir une taille de 1920X1080 pour un meilleur résultat.';
$string['header_color'] = 'Couleur de l’en-tête';
$string['header_color_des'] = 'Couleur de l’en-tête de l’interface';
$string['footer_color'] = 'Couleur du pied de page';
$string['footer_color_des'] = 'Couleur du pied de page de l’interface';
$string['left_color'] = 'Couleur du côté gauche';
$string['left_color_des'] = 'Couleur de la barre latérale gauche';
$string['side_panel_bg_color'] = 'Couleur de fond du panneau latéral';
$string['side_panel_bg_color_des'] = 'Couleur de fond du panneau côté droit';
$string['copyright_text'] = 'Texte du droit d’auteur';
$string['copyright_text_des'] = 'Le texte du droit d’auteur à afficher dans le pied de page de la salle de réunion. Le HTML est autorisé.';
$string['client_load'] = 'Charge du client à partir de';
$string['client_load_des'] = 'Défaut : local';
$string['remote'] = 'Lointain';
$string['local'] = 'Local';

$string['client_side'] = 'Options côté client';
$string['client_load_mode'] = 'Mode de chargement client';
$string['client_load_mode_desc'] = 'Choisissez de charger le client web depuis le serveur distant ou depuis une copie locale.';
$string['remote'] = 'Télécommande';
$string['local'] = 'Local';
$string['client_download_url'] = 'URL de téléchargement client';
$string['client_download_url_des'] = 'Si vous utilisez le mode de chargement « Local », fournissez l’URL du fichier client.zip.';
$string['update_client_btn'] = 'Mise à jour du client local';
$string['update_client_btn_label'] = 'Mise à jour maintenant';

$string['yes'] = 'Oui';
$string['no'] = 'Non';
$string['recordings'] = "Enregistrements";
$string['artifacts'] = "Objets de la pièce";
$string['attendance'] = "Rapport d’affluence";
$string['artifact'] = "Artefact";

// mod_form.php
$string['roomtitle'] = 'Titre de la salle';
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
$string['deadline'] = 'Disponible jusqu’à ce';
$string['err_deadline_before_available'] = 'La date « Disponible jusqu’à » ne peut pas être antérieure à la date « Disponible depuis ».';
$string['error_analytics_required_for_completion'] = 'Activer l’analyse doit être vérifiée si des critères de complétion sont définis.';

$string['allow_webcams'] = 'Autoriser les webcams';
$string['allow_webcams_help'] = 'Permettre aux participants d’utiliser leur webcam.';
$string['mute_on_start'] = 'Muter au démarrage';
$string['mute_on_start_help'] = 'Mettez automatiquement en sourdine tous les participants lorsqu’ils rejoignent la session.';
$string['allow_screen_share'] = 'Autoriser le partage d’écran';
$string['allow_screen_share_help'] = 'Permettre aux participants de partager leur écran.';
$string['allow_rtmp'] = 'Autoriser le streaming RTMP';
$string['allow_rtmp_help'] = 'Permettre aux modérateurs de diffuser la session vers un point RTMP.';
$string['admin_only_webcams'] = 'Webcams réservées aux administrateurs';
$string['admin_only_webcams_help'] = 'N’autorisez que les modérateurs à utiliser leurs webcams.';
$string['room_duration'] = 'Durée de la chambre (minutes)';
$string['room_duration_help'] = 'Définit combien de temps la pièce peut rester ouverte avant de se fermer automatiquement. Entrez 0 si vous ne souhaitez pas fixer de limite de temps, permettant ainsi à la salle de rester active sans restrictions.';
$string['moderator_join_first'] = 'Modérateur : Rejoignez-vous en premier';
$string['moderator_join_first_help'] = 'Une fois activée, la session ne démarre pas et personne ne peut rejoindre tant qu’un modérateur (comme un enseignant) ne rejoint pas en premier. Les participants resteront sur la page d’activité Moodle et n’entreront pas dans la salle ni dans la salle d’attente. C’est différent de l’option Salle d’attente, où les utilisateurs peuvent toujours rejoindre et attendre.';
$string['enable_analytics'] = 'Activer l’analyse';
$string['enable_analytics_help'] = 'Générez des analyses pour la session. Note : Cela doit être activé si des critères de complétion sont définis.';
$string['allow_virtual_bg'] = 'Autoriser les arrière-plans virtuels';
$string['allow_virtual_bg_help'] = 'Permettre aux participants d’utiliser des fonds virtuels.';
$string['auto_gen_user_id'] = 'Générer automatiquement l’identifiant utilisateur';
$string['auto_gen_user_id_help'] = 'Une fois activé, le système crée un nouvel ID afin que le même utilisateur puisse rejoindre depuis plusieurs appareils — par exemple, lorsqu’un enseignant rejoint depuis une tablette pour dessiner sur le tableau blanc tout en utilisant un PC pour la caméra et le microphone ; cependant, c’est le cas <b>Recommandé</b> pour désactiver cette option afin que l’identifiant utilisateur Moodle soit utilisé et que les jointures en double soient évitées.';

$string['allow_recording'] = 'Autoriser l’enregistrement';
$string['allow_recording_help'] = 'Autorisez l’enregistrement de la session.';
$string['allow_cloud_recording'] = 'Autoriser l’enregistrement cloud';
$string['allow_cloud_recording_help'] = 'Autorisez l’enregistrement de la session dans le cloud.';
$string['enable_auto_cloud_recording'] = 'Activer l’enregistrement automatique dans le cloud';
$string['enable_auto_cloud_recording_help'] = 'Commence automatiquement à enregistrer dès que la session commence.';
$string['allow_local_recording'] = 'Autoriser l’enregistrement local';
$string['allow_local_recording_help'] = 'Permettre aux participants d’enregistrer la session localement.';
$string['is_allow_view_recording'] = 'Autoriser la visualisation des enregistrements';
$string['is_allow_view_recording_help'] = 'Permettre aux participants de visionner les enregistrements.';
$string['is_allow_download_recording'] = 'Autoriser le téléchargement des enregistrements';
$string['is_allow_download_recording_help'] = 'Permettre aux participants de télécharger les enregistrements.';

$string['allow_chat'] = 'Autoriser le chat';
$string['allow_chat_help'] = 'Activez la fonction de chat public.';
$string['allow_file_upload'] = 'Autoriser le téléchargement de fichiers';
$string['allow_file_upload_help'] = 'Autorisez les participants à télécharger des fichiers dans le chat.';

$string['allow_shared_notepad'] = 'Autoriser le bloc-notes partagé';
$string['allow_shared_notepad_help'] = 'Permettre aux participants d’utiliser le bloc-notes partagé.';
$string['allow_whiteboard'] = 'Autoriser le tableau blanc';
$string['allow_whiteboard_help'] = 'Permettre aux participants d’utiliser le tableau blanc.';
$string['allowed_external_media_player'] = 'Autoriser le lecteur multimédia externe';
$string['allowed_external_media_player_help'] = 'Permettre aux participants de lire des médias externes (par exemple, des vidéos YouTube).';
$string['activate_waiting_room'] = 'Activez la salle d’attente';
$string['activate_waiting_room_help'] = 'Activez la salle d’attente pour cette séance.';
$string['waiting_room_msg'] = 'Message de la salle d’attente';
$string['waiting_room_msg_help'] = 'Ce message est montré aux utilisateurs pendant qu’ils attendent d’être admis dans la salle. Utilisez-le pour partager des instructions, des attentes ou des informations utiles avant le début de la séance.';
$string['allow_breakout_rooms'] = 'Autoriser les salles de détente';
$string['allow_breakout_rooms_help'] = 'Permettre aux modérateurs de créer des salles de groupe.';
$string['allowed_number_rooms'] = 'Nombre autorisé de salles de détente';
$string['allow_display_external_link_features'] = 'Permettre l’affichage Lien externe';
$string['allow_display_external_link_features_help'] = 'Permettre aux modérateurs d’afficher un lien externe à tous les participants.';
$string['allow_ingress_features'] = 'Autoriser l’entrée';
$string['allow_ingress_features_help'] = 'Autoriser l’entrée dans la session.';
$string['allow_polls'] = 'Autoriser les sondages';
$string['allow_polls_help'] = 'Permettre aux modérateurs de créer des sondages.';
$string['sip_dial_in_features_is_allow'] = 'Autoriser l’entrée par numérotation SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permettre aux participants de rejoindre la session via un dial-in SIP.';

$string['enable_end_to_end_encryption_features'] = 'Activer le chiffrement de bout en bout';
$string['enable_end_to_end_encryption_features_help'] = 'Activez le chiffrement de bout en bout pour la session.';
$string['enabled_self_insert_encryption_key'] = 'Autoriser l’auto-insertion de la clé de chiffrement';
$string['enabled_self_insert_encryption_key_help'] = 'Permettre aux participants d’insérer leur propre clé de chiffrement.';
$string['included_e2ee_chat_messages'] = 'Inclure les messages de chat dans E2EE';
$string['included_e2ee_chat_messages_help'] = 'Incluez les messages de chat dans le chiffrement de bout en bout.';
$string['included_e2ee_whiteboard'] = 'Inclure le tableau blanc dans E2EE';
$string['included_e2ee_whiteboard_help'] = 'Incluez le tableau blanc dans le chiffrement de bout en bout.';

$string['insights_features_is_allow'] = 'Permettre des insights';
$string['insights_features_is_allow_help'] = 'Laissez générer des idées pour cette session.';
$string['insights_transcription_features_is_allow'] = 'Autoriser la transcription';
$string['insights_transcription_features_is_allow_help'] = 'Autorisez la transcription de la séance.';
$string['insights_transcription_features_is_allow_translation'] = 'Autoriser la traduction par transcription';
$string['insights_transcription_features_is_allow_translation_help'] = 'Autorisez la transcription à être traduite.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Autoriser la synthèse vocale par transcription';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Laissez la transcription être lue à voix haute.';
$string['insights_chat_translation_features_is_allow'] = 'Autoriser la traduction du chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Autorisez la traduction des messages de chat.';
$string['insights_ai_features_is_allow'] = 'Autoriser les fonctionnalités de l’IA';
$string['insights_ai_features_is_allow_help'] = 'Autorisez l’utilisation des fonctionnalités d’IA lors de cette session.';
$string['insights_ai_text_chat_features_is_allow'] = 'Autoriser le chat texte par IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Autorisez l’utilisation de l’IA dans le chat.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Autoriser la synthèse des réunions par IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Permettre que la réunion soit résumée par l’IA.';

$string['lock_microphone'] = 'Verrouillez le micro';
$string['lock_microphone_help'] = 'Désactivez par défaut tous les microphones des participants.';
$string['lock_webcam'] = 'Verrouillez la webcam';
$string['lock_webcam_help'] = 'Désactivez par défaut les webcams de tous les participants.';
$string['lock_screen_sharing'] = 'Partage de l’écran de verrouillage';
$string['lock_screen_sharing_help'] = 'Désactivez par défaut le partage d’écran pour tous les participants.';
$string['lock_whiteboard'] = 'Verrouiller le tableau blanc';
$string['lock_whiteboard_help'] = 'Désactivez le tableau blanc pour tous les participants par défaut.';
$string['lock_shared_notepad'] = 'Verrouiller le bloc-notes partagé';
$string['lock_shared_notepad_help'] = 'Désactivez les notes partagées pour tous les participants par défaut.';
$string['lock_chat'] = 'Chat verrouillé';
$string['lock_chat_help'] = 'Désactivez par défaut le chat public pour tous les participants.';
$string['lock_chat_send_message'] = 'Verrouiller le chat Envoyer un message';
$string['lock_chat_send_message_help'] = 'Désactivez par défaut l’envoi de messages dans le chat public pour tous les participants.';
$string['lock_chat_file_share'] = 'Verrouiller le partage de fichiers par chat';
$string['lock_chat_file_share_help'] = 'Désactivez par défaut le partage de fichiers dans le chat public pour tous les participants.';
$string['lock_private_chat'] = 'Verrouillez le chat privé';
$string['lock_private_chat_help'] = 'Désactivez par défaut le chat privé pour tous les participants.';

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
$string['delete_success'] = 'Successfully deleted.';
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
