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
$string['plugnmeet:viewactiveroomsreport'] = 'View active rooms report';
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
$string['server_url_desc'] = 'L’URL de base de votre serveur PlugNmeet (par exemple, https://pnm.example.com).';
$string['api_key'] = 'Clé API';
$string['api_key_desc'] = 'La clé API unique fournie par votre serveur PlugNmeet.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'Le secret de l’API fourni par votre serveur PlugNmeet utilisé pour l’authentification sécurisée.';
$string['guest_access_hdr'] = 'Paramètres d’accès invité';
$string['allow_guest_global'] = 'Autoriser l’accès des invités à l’échelle mondiale';
$string['allow_guest_global_desc'] = 'Agit comme un interrupteur maître. En cas de désactivation, les enseignants ne verront pas l’option d’activer la participation invitée lors de la création ou de la modification d’activités.';
$string['guest_link_expiration'] = 'Expiration du lien invité (heures)';
$string['guest_link_expiration_desc'] = 'Détermine combien d’heures un lien d’accès invité reste actif après qu’un enseignant l’a généré.';
$string['defaults'] = 'Paramètres techniques par défaut';
$string['defaults_desc'] = 'Les configurations techniques par défaut s’appliquaient à chaque nouvelle session PlugNmeet.';
$string['enable_dynacast'] = 'Activez Dynacast';
$string['enable_dynacast_des'] = 'Optimise les performances en mettant en pause dynamiquement les couches vidéo qui ne sont pas vues par les participants. Cela réduit considérablement l’utilisation du CPU et de la bande passante côté serveur. **Note :** Cela sera automatiquement activé si vous utilisez des codecs SVC (VP9/AV1) et est nécessaire pour le simulcast multi-codec.';
$string['enable_simulcast'] = 'Activer la diffusion simultanée';
$string['enable_simulcast_des'] = 'Fournit plusieurs couches de qualité vidéo pour garantir une expérience fluide aux utilisateurs avec des connexions faibles.';
$string['video_codec'] = 'Codec vidéo';
$string['video_codec_des'] = 'La norme d’encodage pour la transmission vidéo. **VP8** est recommandé pour WebRTC car il offre le meilleur équilibre entre qualité et faible latence. **Attention :** Tous les navigateurs ne prennent pas en charge tous les codecs ; assurez-vous que vos utilisateurs sont sur des navigateurs modernes si vous utilisez VP9 ou H.265.';
$string['default_webcam_resolution'] = 'Résolution par défaut de la webcam';
$string['default_webcam_resolution_des'] = 'Le réglage initial de résolution pour les caméras des participants.';
$string['default_screen_share_resolution'] = 'Résolution par défaut du partage d’écran';
$string['default_screen_share_resolution_des'] = 'Le réglage initial de résolution pour le partage d’écran.';
$string['default_audio_preset'] = 'Préréglage audio par défaut';
$string['default_audio_preset_des'] = 'Le profil qualité audio est optimisé pour la session.';

$string['branding'] = 'Image de marque et personnalisation';
$string['custom_logo'] = 'Logo personnalisé';
$string['custom_logo_des'] = 'Téléchargez votre logo dans la salle de réunion. Si c’est laissé vide, le logo par défaut de PlugNmeet sera utilisé.';
$string['custom_css_url'] = 'URL CSS personnalisée';
$string['custom_css_url_des'] = 'Lier un fichier .css externe pour écraser ou personnaliser les styles d’interface.';
$string['primary_color'] = 'Couleur primaire';
$string['primary_color_des'] = 'Couleur d’accent principale utilisée pour les boutons, les états actifs et les surveilles.';
$string['secondary_color'] = 'Couleur secondaire';
$string['secondary_color_des'] = 'La couleur d’accent utilisée pour les éléments secondaires de l’interface utilisateur.';
$string['background_color'] = 'Couleur d’arrière-plan';
$string['background_color_des'] = 'La couleur d’arrière-plan principale de l’interface.';
$string['background_image'] = 'Image d’arrière-plan';
$string['background_image_des'] = 'Fond peint. Pour de meilleurs résultats, utilisez une image 1920x1080.';
$string['header_color'] = 'Couleur de l’en-tête';
$string['header_color_des'] = 'Couleur d’arrière-plan pour la barre de navigation du haut.';
$string['footer_color'] = 'Couleur du pied de page';
$string['footer_color_des'] = 'Couleur d’arrière-plan pour la barre d’outils du bas.';
$string['left_color'] = 'Couleur du côté gauche';
$string['left_color_des'] = 'Couleur d’arrière-plan pour la barre latérale de navigation à gauche.';
$string['side_panel_bg_color'] = 'Couleur de fond du panneau latéral';
$string['side_panel_bg_color_des'] = 'Couleur d’arrière-plan pour les cases de droite (Chat et liste des participants).';
$string['copyright_text'] = 'Texte du droit d’auteur';
$string['copyright_text_des'] = 'Le texte de branding s’affiche dans le pied de page des paramètres. Le HTML est pris en charge pour les liens ou le style personnalisé.';
$string['client_load'] = 'Méthode de chargement client';
$string['client_load_des'] = 'Choisissez **Remote** (recommandé) pour une expérience transparente et personnalisée intégrée directement dans votre page Moodle. Choisissez **Redirect** pour utiliser l’interface par défaut plugNmeet ; Notez que les utilisateurs quitteront votre site et que la personnalisation de la marque ne s’appliquera peut-être pas.';
$string['remote'] = 'Télécommande (embarqué)';
$string['redirect'] = 'Redirection vers le serveur';

$string['yes'] = 'Oui';
$string['no'] = 'Non';
$string['recordings'] = "Enregistrements";
$string['recording'] = "Enregistrement";
$string['artifacts'] = "Objets de la pièce";
$string['attendance'] = "Rapport d’affluence";
$string['artifact'] = "Artefact";
$string['room_subject'] = 'Chambre';
$string['user_subject'] = 'utilisateur';
$string['activeroomsreport'] = 'Active Rooms Report';
$string['noactiverooms'] = 'There are no active rooms at the moment.';
$string['activerooms'] = 'Active Rooms';
$string['loading'] = 'Loading...';

// mod_form.php
$string['roomtitle'] = 'Titre de la salle';
$string['roomtitle_help'] = 'Le nom utilisé pour l’activité Moodle et l’en-tête de la réunion en direct. Cela aide les étudiants à identifier la session dans leur cours et à l’intérieur de la salle.';
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
$string['available_help'] = 'Détermine quand les participants peuvent commencer à rejoindre la session. Les utilisateurs ne pourront pas entrer dans la salle avant cette date et cette heure.';
$string['deadline'] = 'Disponible jusqu’à ce';
$string['deadline_help'] = 'Détermine la date et l’heure finales à laquelle les participants peuvent accéder à la session. L’accès sera bloqué une fois cette date limite écoulée.';
$string['err_deadline_before_available'] = 'La date « Disponible jusqu’à » ne peut pas être antérieure à la date « Disponible depuis ».';
$string['error_analytics_required_for_completion'] = 'Activer l’analyse doit être vérifiée si des critères de complétion sont définis.';

$string['allow_webcams'] = 'Autoriser les webcams';
$string['allow_webcams_help'] = 'Permettre aux participants d’utiliser leur webcam.';
$string['mute_on_start'] = 'Muter au démarrage';
$string['mute_on_start_help'] = 'Mettez automatiquement en sourdine tous les participants lorsqu’ils rejoignent la session.';
$string['allow_screen_share'] = 'Autoriser le partage d’écran';
$string['allow_screen_share_help'] = 'Permettre aux participants de partager leur écran.';
$string['allow_rtmp'] = 'Autoriser le streaming RTMP';
$string['allow_rtmp_help'] = 'Permet aux modérateurs de diffuser la session en direct sur des plateformes externes comme YouTube, Facebook ou Twitch. Parfait pour des webinaires publics ou des conférences invitées.';
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
$string['enable_analytics_help'] = 'Suit les données de participation et d’engagement pour la session. **Note :** Celle-ci doit être activée si des critères de complétion sont définis.';
$string['allow_virtual_bg'] = 'Autoriser les arrière-plans virtuels';
$string['allow_virtual_bg_help'] = 'Permet aux participants de flouter leur arrière-plan ou d’utiliser une image virtuelle. Idéal pour préserver la confidentialité des élèves et garantir une apparence professionnelle en classe.';
$string['auto_gen_user_id'] = 'Générer automatiquement l’identifiant utilisateur';
$string['auto_gen_user_id_help'] = 'Une fois activé, le système crée un nouvel ID afin que le même utilisateur puisse rejoindre depuis plusieurs appareils — par exemple, lorsqu’un enseignant rejoint depuis une tablette pour dessiner sur le tableau blanc tout en utilisant un PC pour la caméra et le microphone ; cependant, c’est le cas <b>Recommandé</b> pour désactiver cette option afin que l’identifiant utilisateur Moodle soit utilisé et que les jointures en double soient évitées.';

$string['allow_recording'] = 'Autoriser l’enregistrement (commutateur maître)';
$string['allow_recording_help'] = 'Le commutateur maître principal pour toutes les fonctions d’enregistrement. Si désactivées, les options d’enregistrement cloud et locale seront toutes deux cachées aux modérateurs.';
$string['allow_cloud_recording'] = 'Autoriser l’enregistrement cloud';
$string['allow_cloud_recording_help'] = 'Permet d’enregistrer sur le serveur PlugNmeet. La vidéo finale est traitée et stockée dans le cloud, ce qui facilite le partage via un lien une fois la session terminée.';
$string['enable_auto_cloud_recording'] = 'Activer l’enregistrement automatique dans le cloud';
$string['enable_auto_cloud_recording_help'] = 'L’enregistrement cloud déclenche automatiquement dès que le premier modérateur rejoint la session. Idéal pour s’assurer qu’aucun cours n’est oublié.';
$string['allow_local_recording'] = 'Autoriser l’enregistrement local';
$string['allow_local_recording_help'] = 'Permet d’enregistrer directement sur l’ordinateur. **Note :** nécessite Google Chrome. Pour capturer tout l’audio de la session, l’utilisateur doit partager son « Chrome Tab » et cocher la case « Partager aussi l’audio de l’onglet ». Le fichier est sauvegardé localement sur l’appareil une fois terminé.';

$string['allow_chat'] = 'Autoriser le chat (Commutateur maître global)';
$string['allow_chat_help'] = 'Le véritable switch maître pour toutes les fonctions de chat. Si désactivé, toute la zone de discussion est supprimée pour tout le monde, y compris les modérateurs. Aucun chat public ou privé ne sera possible.';
$string['allow_file_upload'] = 'Autoriser le téléchargement de fichiers';
$string['allow_file_upload_help'] = 'Permet de partager des fichiers dans le chat. Cela nécessite que le commutateur maître « Autoriser le chat » soit actif.';

$string['allow_shared_notepad'] = 'Autoriser le bloc-notes partagé';
$string['allow_shared_notepad_help'] = 'Permet un éditeur de texte collaboratif où élèves et enseignants peuvent prendre des notes en temps réel ensemble. C’est parfait pour le brainstorming, la co-écriture ou la création d’un résumé de cours partagé.';

$string['allow_whiteboard'] = 'Autoriser le tableau blanc';
$string['allow_whiteboard_help'] = 'Cela débloque un espace de dessin interactif pour la session. Utilisez-le pour esquisser des diagrammes, résoudre visuellement des problèmes de mathématiques ou laisser les élèves annoter le contenu partagé.';

$string['allowed_external_media_player'] = 'Autoriser le lecteur multimédia externe';
$string['allowed_external_media_player_help'] = 'Permet aux modérateurs de synchroniser et de lire des vidéos issues de sources comme YouTube ou Vimeo pour toute la classe. Idéal pour analyser des extraits éducatifs ou regarder des documentaires ensemble sans délai de bande passante.';

$string['activate_waiting_room'] = 'Activez la salle d’attente';
$string['activate_waiting_room_help'] = 'Activez la salle d’attente pour cette séance.';
$string['waiting_room_msg'] = 'Message de la salle d’attente';
$string['waiting_room_msg_help'] = 'Ce message est montré aux utilisateurs pendant qu’ils attendent d’être admis dans la salle. Utilisez-le pour partager des instructions, des attentes ou des informations utiles avant le début de la séance.';

$string['allow_breakout_rooms'] = 'Autoriser les salles de détente';
$string['allow_breakout_rooms_help'] = 'Permet aux modérateurs de diviser les participants en petits groupes pour des discussions ciblées, des projets collaboratifs ou des activités privées de groupe.';
$string['allowed_number_rooms'] = 'Salles de réflexion Max';
$string['allowed_number_rooms_help'] = 'Le nombre maximal de sous-salles qu’un modérateur peut créer en une seule session.';

$string['allow_display_external_link_features'] = 'Autoriser le partage de liens externes';
$string['allow_display_external_link_features_help'] = 'Permet aux modérateurs d’afficher directement à tous les participants pendant la session du contenu éducatif externe — tels que des activités H5P, des packages SCORM ou des systèmes de quiz (par exemple, Kahoot).';

$string['allow_ingress_features'] = 'Autoriser l’entrée (flux externe)';
$string['allow_ingress_features_help'] = 'Permet aux enseignants de diffuser des vidéos de haute qualité pendant la séance en utilisant des logiciels externes comme OBS via des protocoles RTMP ou WHIP. C’est idéal pour partager du contenu vidéo haute résolution, des sessions préenregistrées ou contourner les limitations de téléchargement par navigateur.';

$string['allow_polls'] = 'Autoriser les sondages';
$string['allow_polls_help'] = 'Permet aux modérateurs de créer des sondages interactifs et des quiz rapides pendant la session. C’est un excellent moyen de vérifier la compréhension des élèves et d’augmenter l’engagement.';

$string['sip_dial_in_features_is_allow'] = 'Autoriser l’entrée par numérotation SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permet aux participants de rejoindre la session audio par un appel téléphonique traditionnel. C’est essentiel pour les étudiants ayant une mauvaise connexion internet ou ceux qui doivent s’inscrire en déplacement.';

$string['enable_end_to_end_encryption_features'] = 'Activer le chiffrement de bout en bout (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Assure une sécurité maximale en chiffreant les flux vidéo et audio de sorte que même le serveur ne peut pas y accéder. Note : Certaines fonctionnalités comme l’enregistrement côté serveur peuvent être limitées lorsque l’E2EE est actif.';
$string['enabled_self_insert_encryption_key'] = 'Permettre des clés définies par les participants';
$string['enabled_self_insert_encryption_key_help'] = 'Permet aux participants d’entrer manuellement une clé secrète partagée. Cela garantit que le fournisseur de services n’a jamais accès aux clés de chiffrement, offrant ainsi le plus haut niveau de confidentialité.';
$string['included_e2ee_chat_messages'] = 'Chiffrer les messages de chat';
$string['included_e2ee_chat_messages_help'] = 'Étend le chiffrement de bout en bout au chat texte, garantissant que les messages ne soient lisibles que par les participants présents dans la pièce.';
$string['included_e2ee_whiteboard'] = 'Chiffrer les données du tableau blanc';
$string['included_e2ee_whiteboard_help'] = 'Inclut tous les dessins et annotations du tableau blanc dans la couche de chiffrement de bout en bout pour assurer une confidentialité totale des données.';

$string['insights_features_is_allow'] = 'Permettre les insights de session (Master Switch)';
$string['insights_features_is_allow_help'] = 'Le commutateur maître principal pour toutes les fonctionnalités pilotées par les données. Si elles sont désactivées, toutes les sous-options — y compris la transcription, l’assistant IA et les rapports de réunion — seront totalement indisponibles.';
$string['insights_transcription_features_is_allow'] = 'Autoriser la transcription en direct';
$string['insights_transcription_features_is_allow_help'] = 'Permet la reconnaissance vocale en texte en temps réel pendant la session. Cela doit être activé pour que la traduction par transcription ou la synthèse vocale (TTS) fonctionne.';
$string['insights_transcription_features_is_allow_translation'] = 'Autoriser la traduction par transcription';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permet de traduire le relevé de notes en direct dans différentes langues, soutenant ainsi les étudiants internationaux et les environnements multilingues.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Autoriser la synthèse vocale (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Permet la synthèse vocale, permettant la lecture en direct de la transcription à voix haute pour une meilleure accessibilité et pour les participants malvoyants.';
$string['insights_chat_translation_features_is_allow'] = 'Autoriser la traduction du chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Permet la traduction en temps réel des messages de chat, permettant aux participants de communiquer instantanément dans différentes langues.';
$string['insights_ai_features_is_allow'] = 'Autoriser l’Assistant de réunion IA (Commutateur maître IA)';
$string['insights_ai_features_is_allow_help'] = 'Le commutateur maître pour toutes les capacités alimentées par l’IA. Si désactivées, certaines fonctionnalités comme le chat IA et le résumé des réunions seront masquées, même si Session Insights est actif.';
$string['insights_ai_text_chat_features_is_allow'] = 'Autoriser l’Assistant de Chat IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Intègre un assistant IA directement dans le chat pour aider à répondre aux questions, expliquer des concepts complexes et faciliter la discussion de groupe.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Autoriser la synthèse des réunions par IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Génère automatiquement un résumé IA concis à la fin de la séance, mettant en évidence les points éducatifs clés, les décisions et les tâches de suivi.';

$string['lock_microphone'] = 'Verrouillez les micros';
$string['lock_microphone_help'] = 'Met tous les participants en sourdine par défaut à l’entrée. Seuls les modérateurs peuvent désactiver le son ou accorder la permission de parler.';
$string['lock_webcam'] = 'Webcams à verrouillage';
$string['lock_webcam_help'] = 'Désactive les caméras pour tous les participants par défaut. Utile pour économiser de la bande passante ou garantir la confidentialité des élèves.';
$string['lock_screen_sharing'] = 'Partage de l’écran de verrouillage';
$string['lock_screen_sharing_help'] = 'Limite le partage d’écran aux modérateurs uniquement. Empêche les participants d’interrompre avec leurs propres écrans.';
$string['lock_whiteboard'] = 'Verrouiller le tableau blanc';
$string['lock_whiteboard_help'] = 'Limite les outils de dessin au tableau blanc uniquement aux modérateurs. Empêche les annotations non autorisées par les participants.';
$string['lock_shared_notepad'] = 'Verrouiller le bloc-notes partagé';
$string['lock_shared_notepad_help'] = 'Désactive le bloc-notes collaboratif pour les participants afin d’éviter toute écriture hors sujet ou toute distraction.';
$string['lock_chat'] = 'Verrouiller le chat public';
$string['lock_chat_help'] = 'Cela masque complètement ou désactive la zone de discussion publique pour tous les participants.';
$string['lock_chat_send_message'] = 'Messages d’envoi de verrou';
$string['lock_chat_send_message_help'] = 'Permet aux participants de lire le chat, mais les empêche d’envoyer des messages.';
$string['lock_chat_file_share'] = 'Verrouillage du partage de fichiers';
$string['lock_chat_file_share_help'] = 'Empêche les participants de télécharger ou de partager des fichiers dans la zone de discussion.';
$string['lock_private_chat'] = 'Verrouillez le chat privé';
$string['lock_private_chat_help'] = 'Désactive la messagerie privée individuelle entre les participants. Note : Les participants peuvent toujours envoyer des messages privés aux modérateurs pour obtenir de l’aide ou des questions.';

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
$string['event_recording_started'] = 'Recording started';
$string['event_recording_ended'] = 'Recording ended';
$string['event_rtmp_started'] = 'RTMP stream started';
$string['event_rtmp_ended'] = 'RTMP stream ended';

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
