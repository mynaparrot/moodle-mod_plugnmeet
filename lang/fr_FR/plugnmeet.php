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

$string['modulename'] = 'branchNmeet';
$string['modulename_help'] = 'Le module d\'activité PlugNmeet vous permet de créer et de gérer des sessions de webconférence en temps réel directement depuis Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/vue';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'administration plugNmeet';
$string['pluginname'] = 'branchNmeet';
$string['plugnmeet:addinstance'] = 'Ajouter une nouvelle activité PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Supprimer les artefacts';
$string['plugnmeet:deleterecording'] = 'Supprimer les enregistrements';
$string['plugnmeet:downloadanalyticsreport'] = 'Télécharger le rapport d\'analyse';
$string['plugnmeet:downloadartifacts'] = 'Télécharger les artefacts';
$string['plugnmeet:downloadattendance'] = 'Télécharger le rapport de présence';
$string['plugnmeet:downloadrecordings'] = 'Télécharger les enregistrements';
$string['plugnmeet:manage'] = 'Gérer les paramètres de PlugNmeet';
$string['plugnmeet:view'] = 'Afficher l\'activité PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Afficher le rapport des chambres actives';
$string['plugnmeet:viewartifacts'] = 'Afficher les artefacts';
$string['plugnmeet:viewattendance'] = 'Consulter le rapport de présence';
$string['plugnmeet:viewattendancelist'] = 'Consulter la liste de présence';
$string['plugnmeet:viewlivesessioninfo'] = 'Afficher les informations de la session en direct';
$string['plugnmeet:viewrecordings'] = 'Visionner les enregistrements';
$string['plugnmeetfieldset'] = 'Exemple personnalisé de jeu de champs';
$string['plugnmeetname'] = 'Exemple de nom personnalisé';
$string['plugnmeetname_help'] = 'Exemple personnalisé d\'aide';

// Admin Settings
$string['api_config'] = 'Configuration de l\'API';
$string['server_url'] = 'URL du serveur PlugNmeet';
$string['server_url_desc'] = 'L\'URL de base de votre serveur PlugNmeet (par exemple, https://pnm.example.com).';
$string['api_key'] = 'Clé API';
$string['api_key_desc'] = 'La clé API unique fournie par votre serveur PlugNmeet.';
$string['api_secret'] = 'Secret de l\'API';
$string['api_secret_desc'] = 'Le secret API fourni par votre serveur PlugNmeet est utilisé pour une authentification sécurisée.';
$string['guest_access_hdr'] = 'Paramètres d\'accès invité';
$string['allow_guest_global'] = 'Autoriser l\'accès invité à l\'échelle mondiale';
$string['allow_guest_global_desc'] = 'Fonctionne comme un interrupteur principal. Si cette fonction est désactivée, les enseignants ne verront pas l\'option permettant d\'autoriser la participation des invités lors de la création ou de la modification des activités.';
$string['guest_link_expiration'] = 'Expiration du lien invité (heures)';
$string['guest_link_expiration_desc'] = 'Détermine la durée de vie d\'un lien d\'accès invité après sa génération par un enseignant.';
$string['defaults'] = 'Défaillances techniques';
$string['defaults_desc'] = 'Les configurations techniques par défaut sont appliquées à chaque nouvelle session PlugNmeet.';
$string['enable_dynacast'] = 'Activer Dynacast';
$string['enable_dynacast_des'] = 'Optimise les performances en mettant en pause dynamiquement les flux vidéo non visionnés par les participants. Cela réduit considérablement la charge du processeur et la bande passante côté serveur. **Remarque :** Cette fonction est activée automatiquement avec les codecs SVC (VP9/AV1) et est requise pour la diffusion simultanée multicodec.';
$string['enable_simulcast'] = 'Activer la diffusion simultanée';
$string['enable_simulcast_des'] = 'Offre plusieurs couches de qualité vidéo pour garantir une expérience fluide aux utilisateurs disposant d\'une connexion faible.';
$string['video_codec'] = 'Codec vidéo';
$string['video_codec_des'] = 'Norme d\'encodage pour la transmission vidéo. **VP8** est recommandé pour WebRTC car il offre le meilleur compromis entre qualité et faible latence. **Attention :** Tous les navigateurs ne prennent pas en charge tous les codecs ; assurez-vous que vos utilisateurs utilisent des navigateurs récents si vous utilisez VP9 ou H.265.';
$string['default_webcam_resolution'] = 'Résolution par défaut de la webcam';
$string['default_webcam_resolution_des'] = 'Réglage initial de la résolution des caméras des participants.';
$string['default_screen_share_resolution'] = 'Résolution de partage d\'écran par défaut';
$string['default_screen_share_resolution_des'] = 'Paramètre de résolution initial pour le partage d\'écran.';
$string['default_audio_preset'] = 'Préréglage audio par défaut';
$string['default_audio_preset_des'] = 'Profil de qualité audio optimisé pour la session.';

$string['branding'] = 'Image de marque et personnalisation';
$string['custom_logo'] = 'Logo personnalisé';
$string['custom_logo_des'] = 'Veuillez télécharger votre logo dans la salle de réunion. Si ce champ est laissé vide, le logo par défaut de PlugNmeet sera utilisé.';
$string['custom_css_url'] = 'URL CSS personnalisée';
$string['custom_css_url_des'] = 'Liez un fichier .css externe pour remplacer ou personnaliser les styles d\'interface.';
$string['primary_color'] = 'Couleur primaire';
$string['primary_color_des'] = 'Couleur d\'accentuation principale utilisée pour les boutons, les états actifs et les surlignages.';
$string['secondary_color'] = 'Couleur secondaire';
$string['secondary_color_des'] = 'La couleur d\'accentuation utilisée pour les éléments d\'interface utilisateur secondaires.';
$string['background_color'] = 'Couleur de fond';
$string['background_color_des'] = 'La couleur de fond principale de l\'interface.';
$string['background_image'] = 'Image de fond';
$string['background_image_des'] = 'Fond d\'écran. Pour un résultat optimal, utilisez une image de 1920x1080 pixels.';
$string['header_color'] = 'Couleur de l\'en-tête';
$string['header_color_des'] = 'Couleur de fond de la barre de navigation supérieure.';
$string['footer_color'] = 'Couleur du pied de page';
$string['footer_color_des'] = 'Couleur de fond de la barre d\'outils inférieure.';
$string['left_color'] = 'Couleur du côté gauche';
$string['left_color_des'] = 'Couleur de fond de la barre de navigation latérale gauche.';
$string['side_panel_bg_color'] = 'couleur de fond du panneau latéral';
$string['side_panel_bg_color_des'] = 'Couleur de fond des panneaux latéraux de droite (Chat et liste des participants).';
$string['copyright_text'] = 'Texte relatif aux droits d\'auteur';
$string['copyright_text_des'] = 'Texte de marque affiché dans le pied de page des paramètres. Le HTML est pris en charge pour les liens et la mise en forme personnalisée.';
$string['client_load'] = 'Méthode de chargement du client';
$string['client_load_des'] = 'Choisissez **À distance** (recommandé) pour une expérience utilisateur fluide et personnalisée directement intégrée à votre page Moodle. Choisissez **Redirection** pour utiliser l\'interface par défaut de plugNmeet ; veuillez noter que les utilisateurs quitteront votre site et que votre personnalisation pourrait ne pas s\'appliquer.';
$string['remote'] = 'Télécommande (intégrée)';
$string['redirect'] = 'Redirection vers le serveur';

$string['yes'] = 'Oui';
$string['no'] = 'Non';
$string['recordings'] = "Enregistrements";
$string['recording'] = "Enregistrement";
$string['artifacts'] = "Objets de la pièce";
$string['attendance'] = "Rapport de présence";
$string['artifact'] = "Artefact";
$string['room_subject'] = 'chambre';
$string['user_subject'] = 'utilisateur';
$string['activeroomsreport'] = 'Rapport des chambres actives';
$string['noactiverooms'] = 'Il n\'y a aucune salle active pour le moment.';
$string['activerooms'] = 'Salles actives';
$string['loading'] = 'Chargement...';

// mod_form.php
$string['roomtitle'] = 'Titre de la chambre';
$string['roomtitle_help'] = 'Le nom utilisé pour l\'activité Moodle et l\'en-tête de la réunion en direct. Il permet aux étudiants d\'identifier la session dans leur cours et dans la salle virtuelle.';
$string['welcome_message'] = 'Message de bienvenue';
$string['welcome_message_help'] = 'Tout texte saisi ici apparaîtra comme premier message dans la discussion publique lorsque les utilisateurs rejoindront la salle. Cela permet de partager des instructions, des liens ou des informations importantes avec les participants dès leur arrivée.';
$string['max_participants'] = 'Nombre maximal de participants';
$string['max_participants_help'] = 'Définissez cette valeur pour limiter le nombre d\'utilisateurs pouvant rejoindre la session simultanément. Définissez-la sur 0 pour autoriser un nombre illimité de participants.';
$string['room_features'] = 'Caractéristiques de la chambre';
$string['recording_features'] = 'Fonctionnalités d\'enregistrement';
$string['chat_features'] = 'Fonctionnalités de chat';
$string['other_features'] = 'Autres fonctionnalités';
$string['e2ee_features'] = 'Chiffrement de bout en bout';
$string['insights_features'] = 'Fonctionnalités d\'IA et d\'analyse';
$string['defaultlock'] = 'Paramètres de verrouillage par défaut';
$string['advanced_completion'] = 'Achèvement avancé';
$string['available'] = 'Disponible chez';
$string['available_help'] = 'Détermine à quelle date et heure les participants peuvent rejoindre la session. Les utilisateurs ne pourront pas accéder à la salle avant cette date et heure.';
$string['deadline'] = 'Disponible jusqu\'au';
$string['deadline_help'] = 'Détermine la date et l\'heure limites d\'accès à la session pour les participants. L\'accès sera bloqué une fois cette date et heure passées.';
$string['err_deadline_before_available'] = 'La date « Disponible jusqu’au » ne peut pas être antérieure à la date « Disponible à partir de ».';
$string['error_analytics_required_for_completion'] = 'L\'option « Activer Analytics » doit être cochée si des critères de remplissage sont définis.';

$string['allow_webcams'] = 'Autoriser les webcams';
$string['allow_webcams_help'] = 'Autoriser les participants à utiliser leur webcam.';
$string['mute_on_start'] = 'Couper le son au démarrage';
$string['mute_on_start_help'] = 'Couper automatiquement le micro de tous les participants lorsqu\'ils rejoignent la session.';
$string['allow_screen_share'] = 'Autoriser le partage d\'écran';
$string['allow_screen_share_help'] = 'Autoriser les participants à partager leur écran.';
$string['allow_rtmp'] = 'Autoriser le streaming RTMP';
$string['allow_rtmp_help'] = 'Permet aux modérateurs de diffuser la session en direct sur des plateformes externes comme YouTube, Facebook ou Twitch. Idéal pour les webinaires publics ou les conférences d\'invités.';
$string['allow_raise_hand'] = 'Autoriser Lever la main';
$string['allow_raise_hand_help'] = 'Autoriser les participants à lever la main.';
$string['admin_only_webcams'] = 'Webcams réservées aux administrateurs';
$string['admin_only_webcams_help'] = 'Seuls les modérateurs sont autorisés à utiliser leur webcam.';
$string['allow_view_other_webcams'] = 'Autoriser l\'affichage des autres webcams';
$string['allow_view_other_webcams_help'] = 'Autoriser les participants à voir les webcams des autres participants. Si cette option est désactivée, ils ne verront que les webcams des modérateurs.';
$string['allow_view_other_users_list'] = 'Autoriser la consultation de la liste des autres utilisateurs';
$string['allow_view_other_users_list_help'] = 'Autoriser les participants à consulter la liste des autres participants.';
$string['room_duration'] = 'Durée de la salle (minutes)';
$string['room_duration_help'] = 'Définit la durée pendant laquelle la salle peut rester ouverte avant de se fermer automatiquement. Saisissez 0 si vous ne souhaitez pas définir de limite de temps, la salle restant alors active sans restriction.';
$string['moderator_join_first'] = 'Modérateur Rejoignez-nous en premier';
$string['moderator_join_first_help'] = 'Lorsque cette option est activée, la session ne démarre pas et personne ne peut la rejoindre tant qu\'un modérateur (par exemple, un enseignant) ne l\'a pas fait. Les participants restent sur la page de l\'activité Moodle et n\'accèdent ni à la salle virtuelle ni à la zone d\'attente. Ceci diffère de l\'option « Salle d\'attente », qui permet aux utilisateurs de rejoindre la session et d\'attendre.';
$string['enable_analytics'] = 'Activer l\'analyse';
$string['enable_analytics_help'] = 'Permet de suivre les données de participation et d\'engagement pour la session. **Remarque :** Cette option doit être activée si des critères d\'achèvement sont définis.';
$string['allow_virtual_bg'] = 'Autoriser les arrière-plans virtuels';
$string['allow_virtual_bg_help'] = 'Permet aux participants de flouter leur arrière-plan ou d\'utiliser une image virtuelle. Idéal pour préserver la confidentialité des élèves et garantir une apparence professionnelle en classe.';
$string['auto_gen_user_id'] = 'Générer automatiquement un identifiant utilisateur';
$string['auto_gen_user_id_help'] = 'Lorsqu\'elle est activée, cette option permet au système de créer un nouvel identifiant afin que le même utilisateur puisse se connecter depuis plusieurs appareils, par exemple lorsqu\'un enseignant se connecte depuis une tablette pour dessiner sur le tableau blanc tout en utilisant un PC pour la caméra et le microphone ; cependant, il est <b>recommandé</b> de la désactiver afin que l\'identifiant utilisateur Moodle soit utilisé et que les connexions en double soient évitées.';

$string['allow_recording'] = 'Autoriser l\'enregistrement (commutateur principal)';
$string['allow_recording_help'] = 'Le commutateur principal pour toutes les fonctions d\'enregistrement. S\'il est désactivé, les options d\'enregistrement dans le cloud et en local seront masquées aux modérateurs.';
$string['allow_cloud_recording'] = 'Autoriser l\'enregistrement dans le cloud';
$string['allow_cloud_recording_help'] = 'Permet l\'enregistrement sur le serveur PlugNmeet. La vidéo finale est traitée et stockée dans le cloud, ce qui facilite son partage via un lien une fois la session terminée.';
$string['enable_auto_cloud_recording'] = 'Activer l\'enregistrement automatique dans le cloud';
$string['enable_auto_cloud_recording_help'] = 'L\'enregistrement dans le cloud se déclenche automatiquement dès que le premier modérateur rejoint la session. Idéal pour ne manquer aucun cours.';
$string['allow_local_recording'] = 'Autoriser l\'enregistrement local';
$string['allow_local_recording_help'] = 'Permet d\'enregistrer directement sur l\'ordinateur. **Remarque :** Nécessite Google Chrome. Pour capturer l\'intégralité de l\'audio de la session, l\'utilisateur doit partager son onglet Chrome et cocher la case « Partager également l\'audio de l\'onglet ». Le fichier est enregistré localement sur l\'appareil une fois l\'enregistrement terminé.';

$string['allow_chat'] = 'Autoriser le chat (Commutateur principal global)';
$string['allow_chat_help'] = 'Ce bouton principal contrôle toutes les fonctions de chat. S\'il est désactivé, l\'espace de chat est entièrement désactivé pour tous, y compris les modérateurs. Aucune conversation, publique ou privée, ne sera possible.';
$string['allow_file_upload'] = 'Autoriser le téléchargement de fichiers';
$string['allow_file_upload_help'] = 'Permet le partage de fichiers dans la conversation. Cela nécessite que l\'option principale « Autoriser la conversation » soit activée.';

$string['allow_shared_notepad'] = 'Autoriser le bloc-notes partagé';
$string['allow_shared_notepad_help'] = 'Permet de créer un éditeur de texte collaboratif où élèves et enseignants peuvent prendre des notes ensemble en temps réel. Idéal pour le brainstorming, la rédaction à plusieurs ou l\'élaboration d\'un résumé de cours partagé.';

$string['whiteboard_features'] = 'Fonctionnalités du tableau blanc';
$string['allow_whiteboard'] = 'Autoriser le tableau blanc';
$string['allow_whiteboard_help'] = 'Débloque un espace de dessin interactif pour la séance. Utilisez-le pour réaliser des schémas, résoudre visuellement des problèmes mathématiques ou permettre aux élèves d\'annoter du contenu partagé.';
$string['preload_file'] = 'Précharger le fichier de présentation';
$string['preload_file_help'] = 'Permet de télécharger un document PDF ou Office qui sera automatiquement chargé sur le tableau blanc au début de la session. Ainsi, votre support de présentation est prêt immédiatement pour le cours. <strong>Taille maximale du fichier : 5 Mo</strong>';

$string['allowed_external_media_player'] = 'Autoriser le lecteur multimédia externe';
$string['allowed_external_media_player_help'] = 'Permet aux modérateurs de synchroniser et de diffuser des vidéos provenant de plateformes comme YouTube ou Vimeo à toute la classe. Idéal pour analyser des extraits pédagogiques ou visionner des documentaires ensemble sans latence.';

$string['activate_waiting_room'] = 'Activer la salle d\'attente';
$string['activate_waiting_room_help'] = 'Activez la salle d\'attente pour cette session.';
$string['waiting_room_msg'] = 'Message de la salle d\'attente';
$string['waiting_room_msg_help'] = 'Ce message s\'affiche aux utilisateurs pendant qu\'ils attendent d\'être admis dans la salle. Utilisez-le pour partager des instructions, des attentes ou des informations utiles avant le début de la session.';

$string['allow_breakout_rooms'] = 'Autoriser les salles de réunion';
$string['allow_breakout_rooms_help'] = 'Permet aux modérateurs de répartir les participants en petits groupes pour des discussions ciblées, des projets collaboratifs ou des activités de groupe privées.';
$string['allowed_number_rooms'] = 'Salles de réunion Max';
$string['allowed_number_rooms_help'] = 'Le nombre maximal de sous-salles qu\'un modérateur peut créer au cours d\'une même session.';

$string['allow_display_external_link_features'] = 'Autoriser le partage de liens externes';
$string['allow_display_external_link_features_help'] = 'Permet aux modérateurs d\'afficher du contenu éducatif externe, tel que des activités H5P, des packages SCORM ou des systèmes de quiz (par exemple, Kahoot), directement à tous les participants pendant la session.';

$string['allow_ingress_features'] = 'Autoriser l\'entrée (flux externe)';
$string['allow_ingress_features_help'] = 'Permet aux enseignants de diffuser des vidéos de haute qualité pendant les sessions grâce à un logiciel externe comme OBS, via les protocoles RTMP ou WHIP. Idéal pour partager des contenus vidéo haute résolution, des sessions préenregistrées ou pour contourner les limitations de chargement des navigateurs.';

$string['allow_polls'] = 'Autoriser les sondages';
$string['allow_polls_help'] = 'Permet aux modérateurs de créer des sondages interactifs et des quiz rapides pendant la session. C\'est un excellent moyen de vérifier la compréhension des étudiants et d\'accroître leur participation.';

$string['sip_dial_in_features_is_allow'] = 'Autoriser l\'accès téléphonique SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permet aux participants de rejoindre la session audio par un appel téléphonique classique. C\'est essentiel pour les étudiants ayant une connexion internet faible ou ceux qui doivent participer en déplacement.';

$string['enable_end_to_end_encryption_features'] = 'Activer le chiffrement de bout en bout (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Offre une sécurité maximale en chiffrant les flux vidéo et audio, les rendant inaccessibles même au serveur. Remarque : certaines fonctionnalités, comme l’enregistrement côté serveur, peuvent être limitées lorsque le chiffrement de bout en bout est activé.';
$string['enabled_self_insert_encryption_key'] = 'Autoriser les clés définies par les participants';
$string['enabled_self_insert_encryption_key_help'] = 'Permet aux participants de saisir manuellement une clé secrète partagée. Ceci garantit que le fournisseur de services n\'a jamais accès aux clés de chiffrement, offrant ainsi le plus haut niveau de confidentialité.';
$string['included_e2ee_chat_messages'] = 'Chiffrer les messages de chat';
$string['included_e2ee_chat_messages_help'] = 'Étend le chiffrement de bout en bout aux conversations textuelles, garantissant que les messages ne sont lisibles que par les participants présents dans la salle.';
$string['included_e2ee_whiteboard'] = 'Chiffrer les données du tableau blanc';
$string['included_e2ee_whiteboard_help'] = 'Inclut tous les dessins et annotations sur tableau blanc dans la couche de chiffrement de bout en bout pour une confidentialité totale des données.';

$string['insights_features_is_allow'] = 'Autoriser les informations de session (commutateur principal)';
$string['insights_features_is_allow_help'] = 'Il s\'agit du commutateur principal pour toutes les fonctionnalités basées sur les données. S\'il est désactivé, toutes les sous-options, y compris la transcription, l\'assistant IA et les rapports de réunion, seront totalement indisponibles.';
$string['insights_transcription_features_is_allow'] = 'Autoriser la transcription en direct';
$string['insights_transcription_features_is_allow_help'] = 'Permet la transcription vocale en temps réel pendant la session. Cette fonction doit être activée pour que la transcription, la traduction automatique ou la synthèse vocale (TTS) fonctionnent.';
$string['insights_transcription_features_is_allow_translation'] = 'Autoriser la traduction de la transcription';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permet de traduire la transcription en direct dans différentes langues, ce qui est utile aux étudiants internationaux et aux environnements multilingues.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Autoriser la synthèse vocale (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Permet la synthèse vocale, permettant la lecture à voix haute de la transcription en direct pour une meilleure accessibilité et pour les participants malvoyants.';
$string['insights_chat_translation_features_is_allow'] = 'Autoriser la traduction du chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Permet la traduction en temps réel des messages de chat, permettant aux participants de communiquer instantanément entre différentes langues.';
$string['insights_ai_features_is_allow'] = 'Autoriser l\'assistant de réunion IA (commutateur maître IA)';
$string['insights_ai_features_is_allow_help'] = 'Ce bouton principal contrôle toutes les fonctionnalités basées sur l\'IA. S\'il est désactivé, certaines fonctionnalités comme le chat IA et le résumé de réunion seront masquées, même si Session Insights est activé.';
$string['insights_ai_text_chat_features_is_allow'] = 'Autoriser l\'assistant de chat IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Intègre un assistant IA directement dans la conversation pour aider à répondre aux questions, expliquer des concepts complexes et faciliter les discussions de groupe.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Autoriser le résumé de réunion par IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Génère automatiquement un résumé concis par IA à la fin de la session, mettant en évidence les points pédagogiques clés, les décisions et les tâches de suivi.';

$string['lock_microphone'] = 'Verrouiller les microphones';
$string['lock_microphone_help'] = 'Le micro de tous les participants est désactivé par défaut à l\'entrée. Seuls les modérateurs peuvent réactiver le micro ou autoriser la prise de parole.';
$string['lock_webcam'] = 'Verrouiller les webcams';
$string['lock_webcam_help'] = 'Désactive les caméras pour tous les participants par défaut. Utile pour économiser de la bande passante ou garantir la confidentialité des étudiants.';
$string['lock_screen_sharing'] = 'Partage de l\'écran de verrouillage';
$string['lock_screen_sharing_help'] = 'Limite le partage d\'écran aux modérateurs uniquement. Empêche les participants d\'interrompre la session avec leur propre écran.';
$string['lock_whiteboard'] = 'Verrouiller le tableau blanc';
$string['lock_whiteboard_help'] = 'L\'accès aux outils de dessin du tableau blanc est réservé aux modérateurs. Les annotations non autorisées des participants sont empêchées.';
$string['lock_shared_notepad'] = 'Verrouiller le bloc-notes partagé';
$string['lock_shared_notepad_help'] = 'Désactive le bloc-notes collaboratif pour les participants afin d\'éviter les hors-sujets et les distractions.';
$string['lock_chat'] = 'Verrouiller le chat public';
$string['lock_chat_help'] = 'Masque ou désactive complètement la zone de chat public pour tous les participants.';
$string['lock_chat_send_message'] = 'Verrouiller l\'envoi de messages';
$string['lock_chat_send_message_help'] = 'Permet aux participants de lire la conversation, mais les empêche d\'envoyer des messages.';
$string['lock_chat_file_share'] = 'Verrouiller le partage de fichiers';
$string['lock_chat_file_share_help'] = 'Empêche les participants de télécharger ou de partager des fichiers dans la zone de discussion.';
$string['lock_private_chat'] = 'Verrouiller la conversation privée';
$string['lock_private_chat_help'] = 'Désactive la messagerie privée entre les participants. Remarque : les participants peuvent toujours envoyer des messages privés aux modérateurs pour obtenir de l’aide ou poser des questions.';

$string['completion_minutes'] = 'Procès-verbal de présence';
$string['completion_minutes_help'] = 'Exiger que l\'utilisateur reste connecté pendant un certain nombre de minutes.';
$string['completion_minutes_desc'] = 'L\'utilisateur doit participer à la session pendant au moins {$a} minutes.';
$string['completion_raised_hand'] = 'Main levée';
$string['completion_raised_hand_help'] = 'Exiger que l\'utilisateur lève la main au moins une fois.';
$string['completion_chat_messages'] = 'Messages de chat envoyés';
$string['completion_chat_messages_help'] = 'Exiger que l\'utilisateur envoie au moins un message de chat.';
$string['completion_webcam_enabled'] = 'Webcam activée';
$string['completion_webcam_enabled_help'] = 'Exiger que l\'utilisateur active sa webcam au moins une fois.';
$string['completion_webcam_duration'] = 'Durée d\'activation de la webcam (minutes)';
$string['completion_webcam_duration_help'] = 'Exiger que l\'utilisateur laisse sa webcam activée pendant un certain nombre de minutes.';
$string['completion_webcam_duration_desc'] = 'L\'utilisateur doit avoir sa webcam activée pendant au moins {$a} minutes.';
$string['completion_mic_enabled'] = 'Microphone activé';
$string['completion_mic_enabled_help'] = 'Exiger que l\'utilisateur active son microphone au moins une fois.';
$string['completion_mic_duration'] = 'Durée d\'activation du microphone (minutes)';
$string['completion_mic_duration_help'] = 'Exiger que l\'utilisateur laisse son microphone activé pendant un certain nombre de minutes.';
$string['completion_mic_duration_desc'] = 'L\'utilisateur doit avoir son microphone activé pendant au moins {$a} minutes.';
$string['completion_talk_duration'] = 'Durée de l\'entretien (minutes)';
$string['completion_talk_duration_help'] = 'Exiger que l\'utilisateur parle pendant un certain nombre de minutes.';
$string['completion_talk_duration_desc'] = 'L\'utilisateur doit parler pendant au moins {$a} minutes.';
$string['completion_poll_voted'] = 'Ont voté au sondage';
$string['completion_poll_voted_help'] = 'Exiger que l\'utilisateur vote à au moins un sondage.';
$string['completion_whiteboard_annotated'] = 'Annoté sur tableau blanc';
$string['completion_whiteboard_annotated_help'] = 'Exiger que l\'utilisateur annote le tableau blanc.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Stocke les statistiques de session pour permettre aux utilisateurs de déterminer l\'achèvement de leur activité.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'L\'identifiant de l\'utilisateur.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Données de session encodées en JSON (minutes, messages de chat, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'Date et heure de la dernière mise à jour des statistiques.';

// view.php
$string['join_session'] = 'Rejoindre la session';
$string['start_session'] = 'Démarrer la session';
$string['end_session'] = 'Fin de session';
$string['participants'] = 'Participants';
$string['is_recording'] = 'L\'enregistrement est-il en cours ?';
$string['is_active'] = 'Est actif';
$string['room_info'] = 'Détails de la session en direct';
$string['participants_info'] = 'Participants en direct';
$string['room_id'] = 'ID de la chambre';
$string['creation_time'] = 'Temps de la Création';
$string['name'] = 'Nom';
$string['user_id'] = 'ID de l\'utilisateur';
$string['is_admin'] = 'Est-ce que l\'administrateur';
$string['is_presenter'] = 'Le présentateur';
$string['joined_at'] = 'Inscrit(e) à';
$string['moderator_not_joined'] = 'Un modérateur doit démarrer la session avant que vous puissiez y participer.';
$string['session_available_from'] = 'Disponible à partir de : {$a}';
$string['session_available_until'] = 'Disponible jusqu\'au : {$a}';
$string['session_not_started_yet'] = 'Cette session n\'a pas encore commencé.';
$string['session_ended'] = 'Cette session est terminée.';
$string['allow_guest'] = 'Autoriser les utilisateurs invités';
$string['allow_guest_help'] = 'Lorsqu\'elle est activée, une liaison sécurisée et partageable est générée afin que les utilisateurs externes (tels que les enseignants invités ou les participants sans compte Moodle) puissent rejoindre la session ; un administrateur peut consulter et partager ce lien.';
$string['guest_join_link'] = 'Lien d\'inscription invité';
$string['guest_join_link_help'] = 'Partagez ce lien avec les participants externes. Ce lien restera valide pendant {$a} heures. Chaque rechargement de la page générera un nouveau lien, mais les liens partagés précédemment resteront valides jusqu\'à leur date d\'expiration initiale.';
$string['copy_link'] = 'Copier le lien';
$string['link_copied'] = 'Lien copié dans le presse-papiers.';
$string['guest_join_title'] = 'Participer à la réunion en tant qu\'invité';
$string['enter_display_name'] = 'Saisissez votre nom d\'affichage';
$string['join_as_guest'] = 'Rejoindre la réunion';
$string['guest_access_denied'] = 'L\'accès invité n\'est pas activé pour cette réunion.';
$string['invalid_guest_token'] = 'Jeton d\'accès invité invalide ou expiré.';
$string['guest_link_expired'] = 'Ce lien d\'inscription invité a expiré.';
$string['error_joining_session'] = 'Une erreur s\'est produite lors de la connexion à la session : {$a}';
$string['already_logged_in'] = 'Vous êtes déjà connecté(e) à Moodle. Vous pouvez rejoindre la session directement depuis cette page d\'activité.';
$string['total_webcams'] = 'Webcams totales';
$string['total_mics'] = 'Total des micros';
$string['total_screen_shares'] = 'Partages d\'écran totaux';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Micros';
$string['screenshares'] = 'Partage d\'écran';

// Events
$string['event_room_started'] = 'La chambre a commencé';
$string['event_room_ended'] = 'La chambre s\'est terminée';
$string['event_room_created'] = 'Pièce créée';
$string['event_session_ended'] = 'La session s\'est terminée.';
$string['event_participant_joined'] = 'Le participant a rejoint';
$string['event_participant_left'] = 'Le participant est parti';
$string['event_artifact_created'] = 'Artefact créé';
$string['event_recording_proceeded'] = 'Prêt pour l\'enregistrement';
$string['event_plugin_error'] = 'Erreur PlugNmeet';
$string['event_track_published'] = 'Piste publiée';
$string['event_track_unpublished'] = 'Morceau inédit';
$string['event_recording_started'] = 'L\'enregistrement a commencé';
$string['event_recording_ended'] = 'L\'enregistrement s\'est terminé.';
$string['event_rtmp_started'] = 'Le flux RTMP a démarré.';
$string['event_rtmp_ended'] = 'Fin du flux RTMP';

// Notifications
$string['messageprovider:recording_ready'] = 'Notifications pour les enregistrements prêts';
$string['messageprovider:artifact_ready'] = 'Notifications pour les artefacts prêts';
$string['recording_ready_notification_subject'] = 'Enregistrement prêt : {$a}';
$string['recording_ready_notification_fullmessage'] = 'L\'enregistrement de la session «{$a->roomname}» est maintenant prêt et traité. Vous pouvez le visionner ici : {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>L\'enregistrement de la session <strong>"{$a->roomname}"</strong> est maintenant prêt et traité.</p><p><a href="{$a->url}">Cliquez ici pour visionner l\'enregistrement.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Enregistrement prêt pour {$a}';
$string['artifact_ready_notification_subject'] = 'Artefact prêt : {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Un nouvel artefact ({$a->type}) pour la session «{$a->roomname}» est maintenant disponible. Vous pouvez le consulter ici : {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Un nouvel artefact ({$a->type}) pour la session <strong>"{$a->roomname}"</strong> est maintenant disponible.</p><p><a href="{$a->URL}"> Cliquez ici pour voir les détails de l’artefact.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefact prêt pour {$a}';

// recordings.php
$string['no_recordings'] = 'Aucun enregistrement trouvé.';
$string['recording_id'] = 'ID d\'enregistrement';
$string['room_sid'] = 'Chambre SID';
$string['file_size'] = 'Taille du fichier';
$string['created_at'] = 'Créé à';
$string['actions'] = 'Actes';
$string['view'] = 'Voir';
$string['play'] = 'Jouer';
$string['download'] = 'Télécharger';
$string['delete'] = 'Supprimer';
$string['delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer ceci ?';
$string['delete_success'] = 'Supprimé avec succès.';
$string['recording_details'] = 'Détails de l\'enregistrement';
$string['recording_creation_time'] = 'Durée de création de l\'enregistrement';
$string['room_creation_time'] = 'Heure de création de session';
$string['back_to_list'] = 'Retour à la liste';
$string['browser_not_support_video'] = 'Votre navigateur ne prend pas en charge la balise vidéo.';
$string['room_title'] = 'Titre de la chambre';
$string['total_participants'] = 'Nombre total de participants';
$string['session_started_at'] = 'La session a commencé à';
$string['session_ended_at'] = 'La session s\'est terminée à';

// artifacts.php
$string['no_artifacts'] = 'Aucun artefact trouvé.';
$string['artifact_id'] = 'ID de l\'artefact';
$string['type'] = 'Taper';
$string['artifact_details'] = 'Détails de l\'artefact';
$string['no_permission'] = 'Vous n\'êtes pas autorisé à consulter cette page.';
$string['token_usage'] = 'Utilisation des jetons';
$string['duration_usage'] = 'Durée d\'utilisation';
$string['character_count_usage'] = 'Nombre de caractères utilisés';
$string['estimated_cost'] = 'coût estimé';
$string['file_path'] = 'Chemin du fichier';
$string['mime_type'] = 'Type MIME';
$string['created_at'] = 'Créé à';

// Analytics strings
$string['download_excel_report'] = 'Télécharger le rapport Excel';
$string['download_raw_json'] = 'Télécharger les données brutes';
$string['room_summary'] = 'Résumé de la chambre';
$string['users_summary'] = 'Résumé des utilisateurs';
$string['see_excel_report'] = 'Consultez le rapport Excel pour plus de détails.';
$string['error_loading_analytics'] = 'Erreur lors du chargement des données analytiques : {$a}';
$string['error_generating_excel'] = 'Erreur lors de la génération du rapport Excel : {$a}';

$string['analytics_room_room_id'] = 'ID de la chambre';
$string['analytics_room_room_title'] = 'Titre de la chambre';
$string['analytics_room_room_creation'] = 'Temps de création de la pièce';
$string['analytics_room_room_ended'] = 'La chambre a terminé son temps';
$string['analytics_room_room_duration'] = 'Durée de la chambre';
$string['analytics_room_room_total_users'] = 'Nombre total de participants';
$string['analytics_room_enabled_e2ee'] = 'Activé E2EE';
$string['analytics_room_recording_status'] = 'Nombre d\'états d\'enregistrement';
$string['analytics_room_rtmp_status'] = 'Nombre d\'états RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Utilisation totale du service vocal';
$string['analytics_room_external_media_player_status'] = 'Nombre d\'états du lecteur multimédia externe';
$string['analytics_room_etherpad_status'] = 'Nombre d\'états Etherpad';
$string['analytics_room_external_display_link_status'] = 'Nombre d\'états des liens d\'affichage externe';
$string['analytics_room_ingress_created'] = 'Nombre d\'entrées créées';
$string['analytics_room_breakout_room'] = 'Nombre de salles de réunion';

$string['analytics_user_name'] = 'Nom';
$string['analytics_user_id'] = 'ID de l\'utilisateur';
$string['analytics_user_ex_id'] = 'ID de l\'utilisateur';
$string['analytics_user_is_admin'] = 'Est-ce que l\'administrateur';
$string['analytics_user_duration'] = 'Durée';
$string['analytics_user_joined'] = 'Inscrit(e) à';
$string['analytics_user_left'] = 'Parti à';
$string['analytics_user_mic_status'] = 'Changements d\'état du microphone';
$string['analytics_user_mic_muted'] = 'Nombre de micros coupés';
$string['analytics_user_mic_duration'] = 'Durée d\'activation du micro';
$string['analytics_user_talked'] = 'Nombre parlé';
$string['analytics_user_talked_duration'] = 'Durée de la discussion';
$string['analytics_user_webcam_status'] = 'Changements d\'état de la webcam';
$string['analytics_user_webcam_duration'] = 'Durée d\'activation de la webcam';
$string['analytics_user_raise_hand'] = 'Compte à main levée';
$string['analytics_user_voted_poll'] = 'Dénombrement des votes';
$string['analytics_user_whiteboard_annotated'] = 'Nombre annoté sur tableau blanc';
$string['analytics_user_whiteboard_files'] = 'Nombre de fichiers pour tableau blanc';
$string['analytics_user_screen_share_status'] = 'Changements de statut du partage d\'écran';
$string['analytics_user_speech_services_usage'] = 'Utilisation des services vocaux';
$string['analytics_user_public_chat'] = 'Messages de chat public';
$string['analytics_user_private_chat'] = 'Messages de chat privé';
$string['analytics_user_chat_files'] = 'Fichiers de conversation partagés';
$string['analytics_user_interface_invisible'] = 'Compte invisible de l\'interface';
$string['analytics_user_connection_quality'] = 'Qualité de la connexion';
$string['analytics_user_connection_quality_excellent'] = 'Excellent';
$string['analytics_user_connection_quality_good'] = 'Bien';
$string['analytics_user_connection_quality_poor'] = 'Pauvre';

$string['users_info'] = 'Informations utilisateur';
$string['polls'] = 'Sondages';
$string['question'] = 'Question';
$string['options'] = 'Options';
$string['file_name'] = 'Nom de fichier';
$string['checkcompletiontask'] = 'Vérifier l\'achèvement de plugNmeet';

// attendance.php
$string['attendance_report'] = 'Rapport de présence';
$string['status'] = 'Statut';
$string['present'] = 'Présent';
$string['absent'] = 'Absent';
$string['incomplete'] = 'Incomplet';
$string['completed'] = 'Complété';
$string['minutes_attended'] = 'Procès-verbal de présence';
$string['last_updated'] = 'Dernière mise à jour';
$string['mic_duration'] = 'Durée d\'activation du microphone';
$string['webcam_duration'] = 'Durée d\'activation de la webcam';
$string['participation_progress'] = 'Progrès de la participation';
$string['attendance_duration'] = 'Procès-verbal de présence';
$string['attendance_webcam_status'] = 'Webcam activée';
$string['attendance_mic_status'] = 'Microphone activé';
$string['attendance_talked_duration'] = 'Durée de la discussion';
$string['attendance_voted_poll'] = 'Ont voté au sondage';
$string['attendance_chat_messages'] = 'Messages de chat envoyés';
$string['attendance_raise_hand'] = 'Main levée';
$string['attendance_webcam_duration'] = 'Durée d\'activation de la webcam';
$string['attendance_mic_duration'] = 'Durée d\'activation du microphone';
$string['attendance_whiteboard_annotated'] = 'Annoté sur tableau blanc';
$string['met'] = 'Met';
$string['required'] = 'Requis';

// Status codes
$string['status_unknown_status'] = 'Le serveur a renvoyé un statut inconnu.';
$string['status_success'] = 'Opération réussie.';
$string['status_permission_denied'] = 'Accès refusé.';
$string['status_not_found'] = 'Aucun {$a} trouvé.';
$string['status_conflict'] = 'Cette action n\'a pas pu être effectuée en raison d\'un conflit (par exemple, la salle existe peut-être déjà).';
$string['status_invalid_token_or_signature'] = 'Le jeton ou la signature de la requête est invalide.';
$string['status_invalid_api_key'] = 'La clé API fournie est invalide. Veuillez vérifier les paramètres de votre plugin.';
$string['status_internal_server_error'] = 'Le serveur PlugNmeet a rencontré une erreur interne.';
$string['status_invalid_parameters'] = 'Les informations fournies sont invalides.';
$string['status_missing_required_parameter'] = 'Certaines informations requises sont manquantes.';
$string['status_room_not_found'] = 'La chambre demandée est introuvable.';
$string['status_user_not_found'] = 'Compte utilisateur introuvable. Veuillez vérifier que vos identifiants API sont corrects et que votre abonnement est actif.';
$string['status_user_blocked'] = 'Votre compte utilisateur est bloqué. Veuillez contacter l\'assistance.';
$string['status_user_not_active'] = 'Le compte utilisateur est inactif. Cela est probablement dû à un abonnement inactif ou expiré.';
