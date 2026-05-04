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
$string['modulename_help'] = 'Le module d\'activité PlugNmeet vous permet de créer et de gérer des sessions de conférence web en temps réel depuis Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Administration de plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Ajouter une nouvelle activité PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Supprimer les artefacts';
$string['plugnmeet:deleterecording'] = 'Supprimer les enregistrements';
$string['plugnmeet:downloadanalyticsreport'] = 'Télécharger le rapport d\'analyse';
$string['plugnmeet:downloadartifacts'] = 'Télécharger les artefacts';
$string['plugnmeet:downloadattendance'] = 'Télécharger le rapport de présence';
$string['plugnmeet:downloadrecordings'] = 'Télécharger les enregistrements';
$string['plugnmeet:manage'] = 'Gérer les paramètres de PlugNmeet';
$string['plugnmeet:view'] = 'Voir l\'activité PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Voir le rapport des salles actives';
$string['plugnmeet:viewartifacts'] = 'Voir les artefacts';
$string['plugnmeet:viewattendance'] = 'Voir le rapport de présence';
$string['plugnmeet:viewattendancelist'] = 'Voir la liste de présence';
$string['plugnmeet:viewlivesessioninfo'] = 'Voir les informations de la session en direct';
$string['plugnmeet:viewrecordings'] = 'Voir les enregistrements';
$string['plugnmeetfieldset'] = 'Jeu de champs d\'exemple personnalisé';
$string['plugnmeetname'] = 'Nom d\'exemple personnalisé';
$string['plugnmeetname_help'] = 'Aide d\'exemple personnalisée';

// Admin Settings
$string['api_config'] = 'Configuration de l\'API';
$string['server_url'] = 'URL du serveur PlugNmeet';
$string['server_url_desc'] = 'L\'URL de base de votre serveur PlugNmeet (par exemple, https://pnm.example.com).';
$string['api_key'] = 'Clé API';
$string['api_key_desc'] = 'La clé API unique fournie par votre serveur PlugNmeet.';
$string['api_secret'] = 'Secret API';
$string['api_secret_desc'] = 'Le secret API fourni par votre serveur PlugNmeet utilisé pour une authentification sécurisée.';
$string['guest_access_hdr'] = 'Paramètres d\'accès invité';
$string['allow_guest_global'] = 'Autoriser l\'accès invité globalement';
$string['allow_guest_global_desc'] = 'Agit comme un interrupteur principal. Si désactivé, les enseignants ne verront pas l\'option d\'activer la participation des invités lors de la création ou de la modification d\'activités.';
$string['guest_link_expiration'] = 'Expiration du lien invité (heures)';
$string['guest_link_expiration_desc'] = 'Détermine combien d\'heures un lien d\'accès invité reste actif après qu\'un enseignant l\'ait généré.';
$string['defaults'] = 'Paramètres techniques par défaut';
$string['defaults_desc'] = 'Configurations techniques par défaut appliquées à chaque nouvelle session PlugNmeet.';
$string['enable_dynacast'] = 'Activer Dynacast';
$string['enable_dynacast_des'] = 'Optimise les performances en mettant en pause dynamiquement les couches vidéo qui ne sont pas visualisées par les participants. Cela réduit considérablement l\'utilisation du CPU et de la bande passante côté serveur. **Note :** Ceci sera automatiquement activé si vous utilisez des codecs SVC (VP9/AV1) et est requis pour le simulcast multi-codec.';
$string['enable_simulcast'] = 'Activer le Simulcast';
$string['enable_simulcast_des'] = 'Fournit plusieurs couches de qualité vidéo pour assurer une expérience fluide aux utilisateurs ayant des connexions faibles.';
$string['video_codec'] = 'Codec vidéo';
$string['video_codec_des'] = 'La norme d\'encodage pour la transmission vidéo. **VP8** est recommandé pour WebRTC car il offre le meilleur équilibre entre qualité et faible latence. **Attention :** Tous les navigateurs ne prennent pas en charge tous les codecs ; assurez-vous que vos utilisateurs utilisent des navigateurs modernes si vous utilisez VP9 ou H.265.';
$string['default_webcam_resolution'] = 'Résolution par défaut de la webcam';
$string['default_webcam_resolution_des'] = 'Le paramètre de résolution initial pour les caméras des participants.';
$string['default_screen_share_resolution'] = 'Résolution par défaut du partage d\'écran';
$string['default_screen_share_resolution_des'] = 'Le paramètre de résolution initial pour le partage d\'écran.';
$string['default_audio_preset'] = 'Préréglage audio par défaut';
$string['default_audio_preset_des'] = 'Le profil de qualité audio optimisé pour la session.';

$string['branding'] = 'Marque et personnalisation';
$string['custom_logo'] = 'Logo personnalisé';
$string['custom_logo_des'] = 'Téléchargez votre logo dans la salle de réunion. Si laissé vide, le logo PlugNmeet par défaut sera utilisé.';
$string['custom_css_url'] = 'URL CSS personnalisée';
$string['custom_css_url_des'] = 'Liez un fichier .css externe pour écraser ou personnaliser les styles de l\'interface.';
$string['primary_color'] = 'Couleur principale';
$string['primary_color_des'] = 'Couleur d\'accentuation principale utilisée pour les boutons, les états actifs et les surlignages.';
$string['secondary_color'] = 'Couleur secondaire';
$string['secondary_color_des'] = 'La couleur d\'accentuation utilisée pour les éléments d\'interface utilisateur secondaires.';
$string['background_color'] = 'Couleur de fond';
$string['background_color_des'] = 'La couleur de fond principale de l\'interface.';
$string['background_image'] = 'Image de fond';
$string['background_image_des'] = 'Fond d\'écran. Pour de meilleurs résultats, utilisez une image de 1920x1080.';
$string['header_color'] = 'Couleur de l\'en-tête';
$string['header_color_des'] = 'Couleur de fond pour la barre de navigation supérieure.';
$string['footer_color'] = 'Couleur du pied de page';
$string['footer_color_des'] = 'Couleur de fond pour la barre d\'outils inférieure.';
$string['left_color'] = 'Couleur du côté gauche';
$string['left_color_des'] = 'Couleur de fond pour la barre latérale de navigation gauche.';
$string['side_panel_bg_color'] = 'Couleur de fond du panneau latéral';
$string['side_panel_bg_color_des'] = 'Couleur de fond pour les panneaux de droite (Chat et liste des participants).';
$string['copyright_text'] = 'Texte de copyright';
$string['copyright_text_des'] = 'Texte de marque affiché dans le pied de page des paramètres. Le HTML est pris en charge pour les liens ou le style personnalisé.';
$string['client_load'] = 'Méthode de chargement du client';
$string['client_load_des'] = 'Choisissez **Distant (Intégré)** (Recommandé) pour une expérience fluide et personnalisée intégrée directement dans votre page Moodle. Choisissez **Redirection** pour utiliser l\'interface PlugNmeet par défaut ; notez que les utilisateurs quitteront votre site et que la personnalisation de la marque pourrait ne pas s\'appliquer.';
$string['remote'] = 'Distant (Intégré)';
$string['redirect'] = 'Redirection vers le serveur';

$string['yes'] = 'Oui';
$string['no'] = 'Non';
$string['recordings'] = "Enregistrements";
$string['recording'] = "Enregistrement";
$string['artifacts'] = "Artefacts de la salle";
$string['attendance'] = "Rapport de présence";
$string['artifact'] = "Artefact";
$string['room_subject'] = 'salle';
$string['user_subject'] = 'utilisateur';
$string['activeroomsreport'] = 'Rapport des salles actives';
$string['noactiverooms'] = 'Il n\'y a pas de salles actives pour le moment.';
$string['activerooms'] = 'Salles actives';
$string['loading'] = 'Chargement...';

// mod_form.php
$string['roomtitle'] = 'Titre de la salle';
$string['roomtitle_help'] = 'Le nom utilisé pour l\'activité Moodle et l\'en-tête de la réunion en direct. Il aide les étudiants à identifier la session dans leur cours et à l\'intérieur de la salle.';
$string['welcome_message'] = 'Message de bienvenue';
$string['welcome_message_help'] = 'Tout texte saisi ici apparaîtra comme le premier message dans le chat public lorsque les utilisateurs rejoindront la salle. Ceci est utile pour partager des instructions, des liens ou des informations importantes avec les participants à leur entrée.';
$string['max_participants'] = 'Nombre maximum de participants';
$string['max_participants_help'] = 'Définissez cette valeur pour limiter le nombre d\'utilisateurs pouvant rejoindre la session en même temps. Définissez-la sur 0 pour autoriser un nombre illimité de participants, ce qui signifie qu\'il n\'y a aucune restriction sur le nombre d\'utilisateurs pouvant rejoindre.';
$string['room_features'] = 'Fonctionnalités de la salle';
$string['recording_features'] = 'Fonctionnalités d\'enregistrement';
$string['chat_features'] = 'Fonctionnalités de chat';
$string['other_features'] = 'Autres fonctionnalités';
$string['e2ee_features'] = 'Chiffrement de bout en bout';
$string['insights_features'] = 'Fonctionnalités d\'analyse et d\'IA';
$string['defaultlock'] = 'Paramètres de verrouillage par défaut';
$string['advanced_completion'] = 'Achèvement avancé';
$string['available'] = 'Disponible à partir de';
$string['available_help'] = 'Détermine quand les participants peuvent commencer à rejoindre la session. Les utilisateurs ne pourront pas entrer dans la salle avant cette date et heure.';
$string['deadline'] = 'Disponible jusqu\'à';
$string['deadline_help'] = 'Détermine la date et l\'heure finales auxquelles les participants peuvent accéder à la session. L\'accès sera bloqué une fois cette date limite dépassée.';
$string['err_deadline_before_available'] = 'La date "Disponible jusqu\'à" ne peut pas être antérieure à la date "Disponible à partir de".';
$string['error_analytics_required_for_completion'] = 'L\'analyse doit être activée si des critères d\'achèvement sont définis.';

$string['allow_webcams'] = 'Autoriser les webcams';
$string['allow_webcams_help'] = 'Autoriser les participants à utiliser leurs webcams.';
$string['mute_on_start'] = 'Couper le son au démarrage';
$string['mute_on_start_help'] = 'Couper automatiquement le son de tous les participants lorsqu\'ils rejoignent la session.';
$string['allow_screen_share'] = 'Autoriser le partage d\'écran';
$string['allow_screen_share_help'] = 'Autoriser les participants à partager leur écran.';
$string['allow_rtmp'] = 'Autoriser le streaming RTMP';
$string['allow_rtmp_help'] = 'Permet aux modérateurs de diffuser la session en direct sur des plateformes externes comme YouTube, Facebook ou Twitch. Parfait pour les webinaires publics ou les conférences invitées.';
$string['allow_raise_hand'] = 'Autoriser la levée de main';
$string['allow_raise_hand_help'] = 'Autoriser les participants à lever la main.';
$string['admin_only_webcams'] = 'Webcams réservées aux administrateurs';
$string['admin_only_webcams_help'] = 'Autoriser uniquement les modérateurs à utiliser leurs webcams.';
$string['allow_view_other_webcams'] = 'Autoriser la visualisation des webcams des autres';
$string['allow_view_other_webcams_help'] = 'Autoriser les participants à voir les webcams des autres participants. Si désactivé, ils ne verront que les webcams des modérateurs.';
$string['allow_view_other_users_list'] = 'Autoriser la visualisation de la liste des autres utilisateurs';
$string['allow_view_other_users_list_help'] = 'Autoriser les participants à voir la liste des autres participants.';
$string['room_duration'] = 'Durée de la salle (minutes)';
$string['room_duration_help'] = 'Définit la durée pendant laquelle la salle peut rester ouverte avant de se fermer automatiquement. Entrez 0 si vous ne souhaitez pas définir de limite de temps, permettant à la salle de rester active sans restrictions.';
$string['moderator_join_first'] = 'Le modérateur doit rejoindre en premier';
$string['moderator_join_first_help'] = 'Lorsque cette option est activée, la session ne démarrera pas et personne ne pourra la rejoindre tant qu\'un modérateur (tel qu\'un enseignant) n\'aura pas rejoint en premier. Les participants resteront sur la page d\'activité Moodle et n\'entreront pas dans la salle ou une zone d\'attente. Ceci est différent de l\'option Salle d\'attente, où les utilisateurs peuvent toujours rejoindre et attendre.';
$string['enable_analytics'] = 'Activer l\'analyse';
$string['enable_analytics_help'] = 'Suit les données de participation et d\'engagement pour la session. **Note :** Ceci doit être activé si des critères d\'achèvement sont définis.';
$string['allow_virtual_bg'] = 'Autoriser les arrière-plans virtuels';
$string['allow_virtual_bg_help'] = 'Permet aux participants de flouter leur arrière-plan ou d\'utiliser une image virtuelle. Idéal pour maintenir la confidentialité des étudiants et assurer une apparence professionnelle en classe.';
$string['auto_gen_user_id'] = 'Générer automatiquement l\'ID utilisateur';
$string['auto_gen_user_id_help'] = 'Lorsque cette option est activée, le système crée un nouvel ID afin que le même utilisateur puisse se connecter à partir de plusieurs appareils – par exemple, lorsqu\'un enseignant se connecte depuis une tablette pour dessiner sur le tableau blanc tout en utilisant un PC pour la caméra et le microphone ; cependant, il est <b>recommandé</b> de désactiver cette option afin que l\'ID utilisateur Moodle soit utilisé et que les connexions en double soient évitées.';

$string['allow_recording'] = 'Autoriser l\'enregistrement (interrupteur principal)';
$string['allow_recording_help'] = 'L\'interrupteur principal pour toutes les fonctionnalités d\'enregistrement. Si désactivé, les options d\'enregistrement Cloud et Local seront masquées pour les modérateurs.';
$string['allow_cloud_recording'] = 'Autoriser l\'enregistrement dans le cloud';
$string['allow_cloud_recording_help'] = 'Permet l\'enregistrement sur le serveur PlugNmeet. La vidéo finale est traitée et stockée dans le cloud, ce qui facilite son partage via un lien une fois la session terminée.';
$string['enable_auto_cloud_recording'] = 'Activer l\'enregistrement automatique dans le cloud';
$string['enable_auto_cloud_recording_help'] = 'Déclenche automatiquement l\'enregistrement dans le cloud dès que le premier modérateur rejoint la session. Idéal pour s\'assurer qu\'aucune conférence n\'est oubliée.';
$string['allow_local_recording'] = 'Autoriser l\'enregistrement local';
$string['allow_local_recording_help'] = 'Permet l\'enregistrement directement sur l\'ordinateur. **Note :** Nécessite Google Chrome. Pour capturer tout l\'audio de la session, l\'utilisateur doit partager son "Onglet Chrome" et cocher la case "Partager également l\'audio de l\'onglet". Le fichier est enregistré localement sur l\'appareil une fois terminé.';

$string['allow_chat'] = 'Autoriser le chat (interrupteur principal global)';
$string['allow_chat_help'] = 'L\'interrupteur principal absolu pour toutes les fonctions de chat. Si désactivé, toute la zone de chat est supprimée pour tout le monde, y compris les modérateurs. Aucun chat public ou privé ne sera possible.';
$string['allow_file_upload'] = 'Autoriser le téléchargement de fichiers';
$string['allow_file_upload_help'] = 'Permet de partager des fichiers dans le chat. Cela nécessite que l\'interrupteur principal "Autoriser le chat" soit actif.';

$string['allow_shared_notepad'] = 'Autoriser le bloc-notes partagé';
$string['allow_shared_notepad_help'] = 'Active un éditeur de texte collaboratif où les étudiants et les enseignants peuvent prendre des notes en temps réel ensemble. C\'est parfait pour le brainstorming, la co-rédaction ou la création d\'un résumé de classe partagé.';

$string['whiteboard_features'] = 'Fonctionnalités du tableau blanc';
$string['allow_whiteboard'] = 'Autoriser le tableau blanc';
$string['allow_whiteboard_help'] = 'Déverrouille un espace de dessin interactif pour la session. Utilisez-le pour esquisser des diagrammes, résoudre des problèmes mathématiques visuellement ou laisser les étudiants annoter le contenu partagé.';
$string['preload_file'] = 'Précharger le fichier de présentation';
$string['preload_file_help'] = 'Vous permet de télécharger un document PDF ou Office qui sera automatiquement chargé sur le tableau blanc au début de la session. Cela garantit que votre matériel de présentation est prêt pour la classe immédiatement. <strong>Taille maximale du fichier : 5 Mo</strong>';

$string['allowed_external_media_player'] = 'Autoriser le lecteur multimédia externe';
$string['allowed_external_media_player_help'] = 'Permet aux modérateurs de synchroniser et de lire des vidéos provenant de sources comme YouTube ou Vimeo pour toute la classe. Idéal pour analyser des clips éducatifs ou regarder des documentaires ensemble sans décalage de bande passante.';

$string['activate_waiting_room'] = 'Activer la salle d\'attente';
$string['activate_waiting_room_help'] = 'Activer la salle d\'attente pour cette session.';
$string['waiting_room_msg'] = 'Message de la salle d\'attente';
$string['waiting_room_msg_help'] = 'Ce message est affiché aux utilisateurs pendant qu\'ils attendent d\'être admis dans la salle. Utilisez-le pour partager des instructions, des attentes ou des informations utiles avant le début de la session.';

$string['allow_breakout_rooms'] = 'Autoriser les salles de sous-commission';
$string['allow_breakout_rooms_help'] = 'Permet aux modérateurs de diviser les participants en petits groupes pour des discussions ciblées, des projets collaboratifs ou des activités de groupe privées.';
$string['allowed_number_rooms'] = 'Nombre max de salles de sous-commission';
$string['allowed_number_rooms_help'] = 'Le nombre maximum de sous-salles qu\'un modérateur peut créer au sein d\'une seule session.';

$string['allow_display_external_link_features'] = 'Autoriser le partage de liens externes';
$string['allow_display_external_link_features_help'] = 'Permet aux modérateurs d\'afficher du contenu éducatif externe — tel que des activités H5P, des paquets SCORM ou des systèmes de quiz (par exemple, Kahoot) — directement à tous les participants pendant la session.';

$string['allow_ingress_features'] = 'Autoriser l\'ingestion (streaming externe)';
$string['allow_ingress_features_help'] = 'Permet aux enseignants de diffuser des vidéos de haute qualité dans la session à l\'aide de logiciels externes comme OBS via les protocoles RTMP ou WHIP. C\'est idéal pour partager du contenu vidéo haute résolution, des sessions préenregistrées ou contourner les limitations de téléchargement du navigateur.';

$string['allow_polls'] = 'Autoriser les sondages';
$string['allow_polls_help'] = 'Permet aux modérateurs de créer des sondages interactifs et des quiz rapides pendant la session. C\'est un excellent moyen de vérifier la compréhension des étudiants et d\'accroître l\'engagement.';

$string['sip_dial_in_features_is_allow'] = 'Autoriser la numérotation SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permet aux participants de rejoindre la session audio via un appel téléphonique traditionnel. C\'est essentiel pour les étudiants ayant de mauvaises connexions Internet ou ceux qui doivent se joindre en déplacement.';

$string['enable_end_to_end_encryption_features'] = 'Activer le chiffrement de bout en bout (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Offre une sécurité renforcée en chiffrant les flux vidéo et audio entre les participants. Dans ce mode, le serveur génère et distribue de manière sécurisée une clé de chiffrement unique pour la session.';
$string['enabled_self_insert_encryption_key'] = 'Autoriser les clés définies par les participants';
$string['enabled_self_insert_encryption_key_help'] = 'Permet aux participants de saisir manuellement une clé secrète partagée, offrant le plus haut niveau de confidentialité car le serveur n\'a jamais accès aux clés de chiffrement. Il est de la responsabilité de l\'hôte de partager le même secret avec tous les participants ; si des clés différentes sont utilisées, les utilisateurs ne pourront pas communiquer entre eux. <strong>Note :</strong> Lorsque cette option est activée, les fonctionnalités qui nécessitent un traitement multimédia côté serveur (comme l\'enregistrement dans le cloud, la transcription et la synthèse IA) seront automatiquement désactivées.';
$string['included_e2ee_chat_messages'] = 'Chiffrer les messages de chat';
$string['included_e2ee_chat_messages_help'] = 'Étend le chiffrement de bout en bout au chat textuel, garantissant que les messages ne sont lisibles que par les participants de la salle.';
$string['included_e2ee_whiteboard'] = 'Chiffrer les données du tableau blanc';
$string['included_e2ee_whiteboard_help'] = 'Inclut tous les dessins et annotations du tableau blanc dans la couche de chiffrement de bout en bout pour une confidentialité totale des données.';

$string['insights_features_is_allow'] = 'Autoriser les analyses de session (interrupteur principal)';
$string['insights_features_is_allow_help'] = 'L\'interrupteur principal pour toutes les fonctionnalités basées sur les données. Si désactivé, toutes les sous-options — y compris la transcription, l\'assistant IA et les rapports de réunion — seront complètement indisponibles.';
$string['insights_transcription_features_is_allow'] = 'Autoriser la transcription en direct';
$string['insights_transcription_features_is_allow_help'] = 'Active la conversion parole-texte en temps réel pendant la session. Ceci doit être activé pour que la traduction de la transcription ou la synthèse vocale (TTS) fonctionne.';
$string['insights_transcription_features_is_allow_translation'] = 'Autoriser la traduction de la transcription';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permet de traduire la transcription en direct dans différentes langues, prenant en charge les étudiants internationaux et les environnements multilingues.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Autoriser la synthèse vocale (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Active la synthèse vocale, permettant de lire la transcription en direct pour une meilleure accessibilité et pour les participants malvoyants.';
$string['insights_chat_translation_features_is_allow'] = 'Autoriser la traduction du chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Active la traduction en temps réel des messages de chat, permettant aux participants de communiquer instantanément dans différentes langues.';
$string['insights_ai_features_is_allow'] = 'Autoriser l\'assistant de réunion IA (interrupteur principal IA)';
$string['insights_ai_features_is_allow_help'] = 'L\'interrupteur principal pour toutes les capacités alimentées par l\'IA. Si désactivé, des fonctionnalités spécifiques comme le chat IA et la synthèse de réunion seront masquées, même si les analyses de session sont actives.';
$string['insights_ai_text_chat_features_is_allow'] = 'Autoriser l\'assistant de chat IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Intègre un assistant IA directement dans le chat pour aider à répondre aux questions, expliquer des concepts complexes et faciliter la discussion de groupe.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Autoriser la synthèse de réunion IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Génère automatiquement un résumé IA concis après la fin de la session, mettant en évidence les points éducatifs clés, les décisions et les tâches de suivi.';

$string['lock_microphone'] = 'Verrouiller les microphones';
$string['lock_microphone_help'] = 'Coupe le son de tous les participants par défaut à l\'entrée. Seuls les modérateurs peuvent réactiver le son ou accorder la permission de parler.';
$string['lock_webcam'] = 'Verrouiller les webcams';
$string['lock_webcam_help'] = 'Désactive les caméras pour tous les participants par défaut. Utile pour économiser de la bande passante ou assurer la confidentialité des étudiants.';
$string['lock_screen_sharing'] = 'Verrouiller le partage d\'écran';
$string['lock_screen_sharing_help'] = 'Restreint le partage d\'écran aux modérateurs uniquement. Empêche les participants d\'interrompre avec leurs propres écrans.';
$string['lock_whiteboard'] = 'Verrouiller le tableau blanc';
$string['lock_whiteboard_help'] = 'Restreint les outils de dessin du tableau blanc aux modérateurs uniquement. Empêche les annotations non autorisées par les participants.';
$string['lock_shared_notepad'] = 'Verrouiller le bloc-notes partagé';
$string['lock_shared_notepad_help'] = 'Désactive le bloc-notes collaboratif pour les participants afin d\'éviter les écrits hors sujet ou les distractions.';
$string['lock_chat'] = 'Verrouiller le chat public';
$string['lock_chat_help'] = 'Masque ou désactive complètement la zone de chat public pour tous les participants.';
$string['lock_chat_send_message'] = 'Verrouiller l\'envoi de messages';
$string['lock_chat_send_message_help'] = 'Permet aux participants de lire le chat, mais les empêche d\'envoyer des messages.';
$string['lock_chat_file_share'] = 'Verrouiller le partage de fichiers';
$string['lock_chat_file_share_help'] = 'Empêche les participants de télécharger ou de partager des fichiers dans la zone de chat.';
$string['lock_private_chat'] = 'Verrouiller le chat privé';
$string['lock_private_chat_help'] = 'Désactive la messagerie privée 1-à-1 entre les participants. Note : Les participants peuvent toujours envoyer des messages privés aux modérateurs pour obtenir de l\'aide ou poser des questions.';

$string['completion_minutes'] = 'Minutes de présence';
$string['completion_minutes_help'] = 'Exiger que l\'utilisateur soit présent à la session pendant un certain nombre de minutes.';
$string['completion_minutes_desc'] = 'L\'utilisateur doit assister à la session pendant au moins {$a} minutes.';
$string['completion_raised_hand'] = 'Main levée';
$string['completion_raised_hand_help'] = 'Exiger que l\'utilisateur lève la main au moins 1 fois.';
$string['completion_chat_messages'] = 'Messages de chat envoyés';
$string['completion_chat_messages_help'] = 'Exiger que l\'utilisateur envoie au moins 1 message de chat.';
$string['completion_webcam_enabled'] = 'Webcam activée';
$string['completion_webcam_enabled_help'] = 'Exiger que l\'utilisateur active sa webcam au moins une fois.';
$string['completion_webcam_duration'] = 'Durée d\'activation de la webcam (minutes)';
$string['completion_webcam_duration_help'] = 'Exiger que l\'utilisateur ait sa webcam activée pendant un certain nombre de minutes.';
$string['completion_webcam_duration_desc'] = 'L\'utilisateur doit avoir sa webcam activée pendant au moins {$a} minutes.';
$string['completion_mic_enabled'] = 'Microphone activé';
$string['completion_mic_enabled_help'] = 'Exiger que l\'utilisateur active son microphone au moins une fois.';
$string['completion_mic_duration'] = 'Durée d\'activation du microphone (minutes)';
$string['completion_mic_duration_help'] = 'Exiger que l\'utilisateur ait son microphone activé pendant un certain nombre de minutes.';
$string['completion_mic_duration_desc'] = 'L\'utilisateur doit avoir son microphone activé pendant au moins {$a} minutes.';
$string['completion_talk_duration'] = 'Durée de parole (minutes)';
$string['completion_talk_duration_help'] = 'Exiger que l\'utilisateur parle pendant un certain nombre de minutes.';
$string['completion_talk_duration_desc'] = 'L\'utilisateur doit parler pendant au moins {$a} minutes.';
$string['completion_poll_voted'] = 'A voté au sondage';
$string['completion_poll_voted_help'] = 'Exiger que l\'utilisateur vote à au moins un sondage.';
$string['completion_whiteboard_annotated'] = 'Annoté sur le tableau blanc';
$string['completion_whiteboard_annotated_help'] = 'Exiger que l\'utilisateur annote sur le tableau blanc.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Stocke les statistiques de session pour les utilisateurs afin de déterminer l\'achèvement de l\'activité.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'L\'ID de l\'utilisateur.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Données de session encodées en JSON (minutes, messages de chat, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'L\'heure de la dernière mise à jour des statistiques.';

// view.php
$string['join_session'] = 'Rejoindre la session';
$string['start_session'] = 'Démarrer la session';
$string['end_session'] = 'Terminer la session';
$string['participants'] = 'Participants';
$string['is_recording'] = 'Enregistrement en cours';
$string['is_active'] = 'Est actif';
$string['room_info'] = 'Détails de la session en direct';
$string['participants_info'] = 'Participants en direct';
$string['room_id'] = 'ID de la salle';
$string['creation_time'] = 'Heure de création';
$string['name'] = 'Nom';
$string['user_id'] = 'ID utilisateur';
$string['is_admin'] = 'Est administrateur';
$string['is_presenter'] = 'Est présentateur';
$string['joined_at'] = 'Rejoint à';
$string['moderator_not_joined'] = 'Un modérateur doit démarrer la session avant que vous ne puissiez la rejoindre.';
$string['session_available_from'] = 'Disponible à partir de : {$a}';
$string['session_available_until'] = 'Disponible jusqu\'à : {$a}';
$string['session_not_started_yet'] = 'Cette session n\'a pas encore commencé.';
$string['session_ended'] = 'Cette session est terminée.';
$string['client_files_missing'] = 'Les fichiers clients (JS/CSS) sont manquants. Veuillez vérifier la configuration de votre serveur PlugNmeet.';
$string['client_connection_error'] = 'Une erreur est survenue lors de la connexion au serveur PlugNmeet : {$a}. Veuillez vérifier les paramètres de votre plugin.';
$string['allow_guest'] = 'Autoriser les utilisateurs invités';
$string['allow_guest_help'] = 'Lorsque cette option est activée, un lien partageable sécurisé est généré afin que les utilisateurs externes (tels que les enseignants invités ou les participants sans compte Moodle) puissent rejoindre la session ; un administrateur peut visualiser et partager ce lien.';
$string['guest_join_link'] = 'Lien de participation invité';
$string['guest_join_link_help'] = 'Partagez ce lien avec les participants externes. Ce lien restera valide pendant {$a} heures. Chaque rechargement de page générera un nouveau lien, mais les liens précédemment partagés resteront valides jusqu\'à leur expiration initiale.';
$string['copy_link'] = 'Copier le lien';
$string['link_copied'] = 'Lien copié dans le presse-papiers.';
$string['guest_join_title'] = 'Rejoindre la réunion en tant qu\'invité';
$string['enter_display_name'] = 'Entrez votre nom d\'affichage';
$string['join_as_guest'] = 'Rejoindre la réunion';
$string['guest_access_denied'] = 'L\'accès invité n\'est pas activé pour cette réunion.';
$string['invalid_guest_token'] = 'Jeton d\'invité invalide ou expiré.';
$string['guest_link_expired'] = 'Ce lien de participation invité a expiré.';
$string['error_joining_session'] = 'Une erreur est survenue lors de la participation à la session : {$a}';
$string['already_logged_in'] = 'Vous êtes déjà connecté à Moodle. Vous pouvez rejoindre la session directement depuis cette page d\'activité.';
$string['total_webcams'] = 'Total des webcams';
$string['total_mics'] = 'Total des micros';
$string['total_screen_shares'] = 'Total des partages d\'écran';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Micros';
$string['screenshares'] = 'Partages d\'écran';

// Events
$string['event_room_started'] = 'Salle démarrée';
$string['event_room_ended'] = 'Salle terminée';
$string['event_room_created'] = 'Salle créée';
$string['event_session_ended'] = 'Session terminée';
$string['event_participant_joined'] = 'Participant a rejoint';
$string['event_participant_left'] = 'Participant a quitté';
$string['event_artifact_created'] = 'Artefact créé';
$string['event_recording_proceeded'] = 'Enregistrement prêt';
$string['event_plugin_error'] = 'Erreur PlugNmeet';
$string['event_track_published'] = 'Piste publiée';
$string['event_track_unpublished'] = 'Piste non publiée';
$string['event_recording_started'] = 'Enregistrement démarré';
$string['event_recording_ended'] = 'Enregistrement terminé';
$string['event_rtmp_started'] = 'Flux RTMP démarré';
$string['event_rtmp_ended'] = 'Flux RTMP terminé';

// Notifications
$string['messageprovider:recording_ready'] = 'Notifications pour les enregistrements prêts';
$string['messageprovider:artifact_ready'] = 'Notifications pour les artefacts prêts';
$string['recording_ready_notification_subject'] = 'Enregistrement prêt : {$a}';
$string['recording_ready_notification_fullmessage'] = 'L\'enregistrement de la session "{$a->roomname}" est maintenant prêt et traité. Vous pouvez le consulter ici : {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>L\'enregistrement de la session <strong>"{$a->roomname}"</strong> est maintenant prêt et traité.</p><p><a href="{$a->url}">Cliquez ici pour voir l\'enregistrement.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Enregistrement prêt pour {$a}';
$string['artifact_ready_notification_subject'] = 'Artefact prêt : {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Un nouvel artefact ({$a->type}) pour la session "{$a->roomname}" est maintenant disponible. Vous pouvez le consulter ici : {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Un nouvel artefact ({$a->type}) pour la session <strong>"{$a->roomname}"</strong> est maintenant disponible.</p><p><a href="{$a->url}">Cliquez ici pour voir les détails de l\'artefact.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefact prêt pour {$a}';

// recordings.php
$string['no_recordings'] = 'Aucun enregistrement trouvé.';
$string['recording_id'] = 'ID d\'enregistrement';
$string['room_sid'] = 'SID de la salle';
$string['file_size'] = 'Taille du fichier';
$string['created_at'] = 'Créé le';
$string['actions'] = 'Actions';
$string['view'] = 'Voir';
$string['play'] = 'Jouer';
$string['download'] = 'Télécharger';
$string['delete'] = 'Supprimer';
$string['delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer ceci ?';
$string['delete_success'] = 'Supprimé avec succès.';
$string['recording_details'] = 'Détails de l\'enregistrement';
$string['recording_creation_time'] = 'Heure de création de l\'enregistrement';
$string['room_creation_time'] = 'Heure de création de la session';
$string['back_to_list'] = 'Retour à la liste';
$string['browser_not_support_video'] = 'Votre navigateur ne prend pas en charge la balise vidéo.';
$string['room_title'] = 'Titre de la salle';
$string['total_participants'] = 'Nombre total de participants';
$string['session_started_at'] = 'Session commencée le';
$string['session_ended_at'] = 'Session terminée le';

// artifacts.php
$string['no_artifacts'] = 'Aucun artefact trouvé.';
$string['artifact_id'] = 'ID de l\'artefact';
$string['type'] = 'Type';
$string['artifact_details'] = 'Détails de l\'artefact';
$string['no_permission'] = 'Vous n\'avez pas la permission de voir cette page.';
$string['token_usage'] = 'Utilisation du jeton';
$string['duration_usage'] = 'Utilisation de la durée';
$string['character_count_usage'] = 'Utilisation du nombre de caractères';
$string['estimated_cost'] = 'Coût estimé';
$string['file_path'] = 'Chemin du fichier';
$string['mime_type'] = 'Type MIME';
$string['created_at'] = 'Créé à';
$string['meeting_summary'] = 'Résumé de la réunion';
$string['error_loading_meeting_summary'] = 'Erreur lors du chargement du résumé de la réunion : {$a}';

// Analytics strings
$string['download_excel_report'] = 'Télécharger le rapport Excel';
$string['download_raw_json'] = 'Télécharger les données brutes';
$string['room_summary'] = 'Résumé de la salle';
$string['users_summary'] = 'Résumé des utilisateurs';
$string['see_excel_report'] = 'Voir le rapport Excel pour plus de détails';
$string['error_loading_analytics'] = 'Erreur lors du chargement des données analytiques : {$a}';
$string['error_generating_excel'] = 'Erreur lors de la génération du rapport Excel : {$a}';

$string['analytics_room_room_id'] = 'ID de la salle';
$string['analytics_room_room_title'] = 'Titre de la salle';
$string['analytics_room_room_creation'] = 'Heure de création de la salle';
$string['analytics_room_room_ended'] = 'Heure de fin de la salle';
$string['analytics_room_room_duration'] = 'Durée de la salle';
$string['analytics_room_room_total_users'] = 'Nombre total de participants';
$string['analytics_room_enabled_e2ee'] = 'E2EE activé';
$string['analytics_room_recording_status'] = 'Statut d\'enregistrement';
$string['analytics_room_rtmp_status'] = 'Statut RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Utilisation totale du service vocal';
$string['analytics_room_external_media_player_status'] = 'Statut du lecteur multimédia externe';
$string['analytics_room_etherpad_status'] = 'Statut Etherpad';
$string['analytics_room_external_display_link_status'] = 'Statut du lien d\'affichage externe';
$string['analytics_room_ingress_created'] = 'Ingestion créée';
$string['analytics_room_breakout_room'] = 'Nombre de salles de sous-commission';

$string['analytics_user_name'] = 'Nom';
$string['analytics_user_id'] = 'ID utilisateur';
$string['analytics_user_ex_id'] = 'ID utilisateur';
$string['analytics_user_is_admin'] = 'Est administrateur';
$string['analytics_user_duration'] = 'Durée';
$string['analytics_user_joined'] = 'Rejoint à';
$string['analytics_user_left'] = 'Quitté à';
$string['analytics_user_mic_status'] = 'Changements de statut du micro';
$string['analytics_user_mic_muted'] = 'Nombre de micros coupés';
$string['analytics_user_mic_duration'] = 'Durée d\'activation du micro';
$string['analytics_user_talked'] = 'Nombre de fois parlé';
$string['analytics_user_talked_duration'] = 'Durée de parole';
$string['analytics_user_webcam_status'] = 'Changements de statut de la webcam';
$string['analytics_user_webcam_duration'] = 'Durée d\'activation de la webcam';
$string['analytics_user_raise_hand'] = 'Nombre de mains levées';
$string['analytics_user_voted_poll'] = 'Nombre de votes au sondage';
$string['analytics_user_whiteboard_annotated'] = 'Nombre d\'annotations sur le tableau blanc';
$string['analytics_user_whiteboard_files'] = 'Nombre de fichiers du tableau blanc';
$string['analytics_user_screen_share_status'] = 'Changements de statut du partage d\'écran';
$string['analytics_user_speech_services_usage'] = 'Utilisation des services vocaux';
$string['analytics_user_public_chat'] = 'Messages de chat public';
$string['analytics_user_private_chat'] = 'Messages de chat privé';
$string['analytics_user_chat_files'] = 'Fichiers de chat partagés';
$string['analytics_user_interface_invisible'] = 'Nombre d\'interfaces invisibles';
$string['analytics_user_connection_quality'] = 'Qualité de la connexion';
$string['analytics_user_connection_quality_excellent'] = 'Excellente';
$string['analytics_user_connection_quality_good'] = 'Bonne';
$string['analytics_user_connection_quality_poor'] = 'Médiocre';

$string['users_info'] = 'Informations sur les utilisateurs';
$string['polls'] = 'Sondages';
$string['question'] = 'Question';
$string['options'] = 'Options';
$string['file_name'] = 'Nom du fichier';
$string['checkcompletiontask'] = 'Vérifier l\'achèvement de plugNmeet';

// attendance.php
$string['attendance_report'] = 'Rapport de présence';
$string['status'] = 'Statut';
$string['present'] = 'Présent';
$string['absent'] = 'Absent';
$string['incomplete'] = 'Incomplet';
$string['completed'] = 'Terminé';
$string['minutes_attended'] = 'Minutes de présence';
$string['last_updated'] = 'Dernière mise à jour';
$string['mic_duration'] = 'Durée d\'activation du microphone';
$string['webcam_duration'] = 'Durée d\'activation de la webcam';
$string['participation_progress'] = 'Progrès de la participation';
$string['attendance_duration'] = 'Minutes de présence';
$string['attendance_webcam_status'] = 'Webcam activée';
$string['attendance_mic_status'] = 'Microphone activé';
$string['attendance_talked_duration'] = 'Durée de parole';
$string['attendance_voted_poll'] = 'A voté au sondage';
$string['attendance_chat_messages'] = 'Messages de chat envoyés';
$string['attendance_raise_hand'] = 'Main levée';
$string['attendance_webcam_duration'] = 'Durée d\'activation de la webcam';
$string['attendance_mic_duration'] = 'Durée d\'activation du microphone';
$string['attendance_whiteboard_annotated'] = 'Annoté sur le tableau blanc';
$string['met'] = 'Atteint';
$string['required'] = 'Requis';

// Status codes
$string['status_unknown_status'] = 'Un statut inconnu a été renvoyé par le serveur.';
$string['status_success'] = 'Opération terminée avec succès.';
$string['status_permission_denied'] = 'Permission refusée.';
$string['status_not_found'] = 'Aucun {$a} trouvé.';
$string['status_conflict'] = 'Cette action n\'a pas pu être effectuée en raison d\'un conflit (par exemple, la salle peut déjà exister).';
$string['status_invalid_token_or_signature'] = 'Le jeton de requête ou la signature est invalide.';
$string['status_invalid_api_key'] = 'La clé API fournie est invalide. Veuillez vérifier les paramètres de votre plugin.';
$string['status_internal_server_error'] = 'Le serveur PlugNmeet a rencontré une erreur interne.';
$string['status_invalid_parameters'] = 'Les informations fournies sont invalides.';
$string['status_missing_required_parameter'] = 'Certaines informations requises sont manquantes.';
$string['status_room_not_found'] = 'La salle spécifiée n\'a pas été trouvée.';
$string['status_user_not_found'] = 'Compte utilisateur introuvable. Veuillez vous assurer que vos identifiants API sont corrects et que votre abonnement est actif.';
$string['status_user_blocked'] = 'Le compte utilisateur est bloqué. Veuillez contacter le support.';
$string['status_user_not_active'] = 'Le compte utilisateur n\'est pas actif. Cela est probablement dû à un abonnement inactif ou expiré.';
