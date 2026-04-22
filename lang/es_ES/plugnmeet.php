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
$string['modulename_help'] = 'El módulo de actividad PlugNmeet te permite crear y gestionar sesiones de videoconferencia en tiempo real desde Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'administración de plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Añadir una nueva actividad de PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Eliminar artefactos';
$string['plugnmeet:deleterecording'] = 'Eliminar grabaciones';
$string['plugnmeet:downloadanalyticsreport'] = 'Descargar informe analítico';
$string['plugnmeet:downloadartifacts'] = 'Descargar artefactos';
$string['plugnmeet:downloadattendance'] = 'Descargar informe de asistencia';
$string['plugnmeet:downloadrecordings'] = 'Descargar grabaciones';
$string['plugnmeet:manage'] = 'Gestionar la configuración de PlugNMeet';
$string['plugnmeet:view'] = 'Ver actividad de PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Ver artefactos';
$string['plugnmeet:viewattendance'] = 'Ver informe de asistencia';
$string['plugnmeet:viewattendancelist'] = 'Ver lista de asistencia';
$string['plugnmeet:viewlivesessioninfo'] = 'Ver información de la sesión en directo';
$string['plugnmeet:viewrecordings'] = 'Ver grabaciones';
$string['plugnmeetfieldset'] = 'Conjunto de campo de ejemplo personalizado';
$string['plugnmeetname'] = 'Nombre de ejemplo personalizado';
$string['plugnmeetname_help'] = 'Ayuda con ejemplos personalizados';

// Admin Settings
$string['api_config'] = 'Configuración de API';
$string['server_url'] = 'URL del servidor PlugNmeet';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'Clave API';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server used for secure authentication.';
$string['guest_access_hdr'] = 'Configuración de acceso a invitados';
$string['allow_guest_global'] = 'Permitir el acceso de invitados a nivel global';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = 'Caducidad del enlace de invitado (horas)';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = 'Valores Técnicos por Defecto';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = 'Habilitar Dynacast';
$string['enable_dynacast_des'] = 'Optimizes performance by dynamically pausing video layers that are not being viewed by participants. This significantly reduces server-side CPU and bandwidth usage. **Note:** This will be automatically enabled if using SVC codecs (VP9/AV1) and is required for multi-codec simulcast.';
$string['enable_simulcast'] = 'Habilitar la emisión simultánea';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = 'Códec de vídeo';
$string['video_codec_des'] = 'The encoding standard for video transmission. **VP8** is recommended for WebRTC as it provides the best balance of quality and low latency. **Warning:** Not all browsers support every codec; ensure your users are on modern browsers if using VP9 or H.265.';
$string['default_webcam_resolution'] = 'Resolución predeterminada de cámara web';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = 'Resolución predeterminada de compartición de pantalla';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = 'Preajuste de audio predeterminado';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = 'Imagen y personalización';
$string['custom_logo'] = 'Logotipo personalizado';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'URL CSS personalizada';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = 'Color primario';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = 'Color secundario';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = 'Color de fondo';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = 'Imagen de fondo';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = 'Color del encabezado';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = 'Color del pie de página';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = 'Color del lado izquierdo';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = 'Color de fondo del panel lateral';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = 'Texto de derechos de autor';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = 'Sí';
$string['no'] = 'No';
$string['recordings'] = "Grabaciones";
$string['recording'] = "Grabación";
$string['artifacts'] = "Artefactos de la sala";
$string['attendance'] = "Informe de asistencia";
$string['artifact'] = "Artefacto";
$string['room_subject'] = 'Habitación';
$string['user_subject'] = 'usuario';

// mod_form.php
$string['roomtitle'] = 'Título de la habitación';
$string['roomtitle_help'] = 'The name used for the Moodle activity and the live meeting header. It helps students identify the session in their course and inside the room.';
$string['welcome_message'] = 'Mensaje de bienvenida';
$string['welcome_message_help'] = 'Cualquier texto introducido aquí aparecerá como el primer mensaje en el chat público cuando los usuarios se unan a la sala. Esto es útil para compartir instrucciones, enlaces o información importante con los participantes al entrar.';
$string['max_participants'] = 'Participantes Máximos';
$string['max_participants_help'] = 'Establece este valor para limitar cuántos usuarios pueden unirse a la sesión al mismo tiempo. Ponlo en 0 para permitir participantes ilimitados, lo que significa que no hay restricción sobre cuántos usuarios pueden unirse.';
$string['room_features'] = 'Características de la sala';
$string['recording_features'] = 'Características de grabación';
$string['chat_features'] = 'Funciones de chat';
$string['other_features'] = 'Otras características';
$string['e2ee_features'] = 'Cifrado de extremo a extremo';
$string['insights_features'] = 'Insights y características de IA';
$string['defaultlock'] = 'Configuración predeterminada de la cerradura';
$string['advanced_completion'] = 'Finalización Avanzada';
$string['available'] = 'Disponible en';
$string['available_help'] = 'Determines when participants can start joining the session. Users will not be able to enter the room before this date and time.';
$string['deadline'] = 'Disponible hasta';
$string['deadline_help'] = 'Determines the final date and time that participants can access the session. Access will be blocked once this deadline passes.';
$string['err_deadline_before_available'] = 'La fecha de "Disponible hasta" no puede ser anterior a la de "Disponible desde".';
$string['error_analytics_required_for_completion'] = 'Debe comprobarse Habilitar Analytics si se han establecido criterios de finalización.';

$string['allow_webcams'] = 'Permitir cámaras web';
$string['allow_webcams_help'] = 'Permite que los participantes usen sus webcams.';
$string['mute_on_start'] = 'Muda al arrancar';
$string['mute_on_start_help'] = 'Silencia automáticamente a todos los participantes cuando se unan a la sesión.';
$string['allow_screen_share'] = 'Permitir compartir pantalla';
$string['allow_screen_share_help'] = 'Permite que los participantes compartan su pantalla.';
$string['allow_rtmp'] = 'Permitir la transmisión RTMP';
$string['allow_rtmp_help'] = 'Enables moderators to broadcast the live session to external platforms like YouTube, Facebook, or Twitch. Perfect for public webinars or guest lectures.';
$string['allow_raise_hand'] = 'Permitir que levante la mano';
$string['allow_raise_hand_help'] = 'Permite que los participantes levanten la mano.';
$string['admin_only_webcams'] = 'Webcams solo para administradores';
$string['admin_only_webcams_help'] = 'Solo permite que los moderadores usen sus webcams.';
$string['allow_view_other_webcams'] = 'Permitir Ver otras cámaras web';
$string['allow_view_other_webcams_help'] = 'Permitir que los participantes vean las cámaras web de otros participantes. Si se desactivan, solo verán las webcams de los moderadores.';
$string['allow_view_other_users_list'] = 'Permitir Ver la lista de otros usuarios';
$string['allow_view_other_users_list_help'] = 'Permite que los participantes vean la lista de otros participantes.';
$string['room_duration'] = 'Duración de la habitación (minutos)';
$string['room_duration_help'] = 'Define cuánto tiempo puede permanecer abierta la habitación antes de cerrarse automáticamente. Introduce 0 si no quieres poner ningún límite de tiempo, permitiendo que la sala permanezca activa sin restricciones.';
$string['moderator_join_first'] = 'Moderador Únete primero';
$string['moderator_join_first_help'] = 'Cuando está activada, la sesión no comenzará y nadie podrá unirse hasta que un moderador (como un profesor) se una primero. Los participantes permanecerán en la página de actividades de Moodle y no entrarán en la sala ni en la sala de espera. Esto es diferente de la opción de Sala de Espera, donde los usuarios pueden seguir entrando y esperando.';
$string['enable_analytics'] = 'Habilitar la analítica';
$string['enable_analytics_help'] = 'Tracks participation and engagement data for the session. **Note:** This must be enabled if any Completion criteria are set.';
$string['allow_virtual_bg'] = 'Permitir fondos virtuales';
$string['allow_virtual_bg_help'] = 'Enables participants to blur their background or use a virtual image. Great for maintaining student privacy and ensuring a professional classroom appearance.';
$string['auto_gen_user_id'] = 'Generación automática del ID de usuario';
$string['auto_gen_user_id_help'] = 'Cuando está habilitado, el sistema crea un nuevo ID para que el mismo usuario pueda unirse desde varios dispositivos—por ejemplo, cuando un profesor se une desde una tableta para dibujar en la pizarra mientras usa un PC para la cámara y el micrófono; sin embargo, lo es <b>Recomendado</b> para mantener esto desactivado y así usar el ID de usuario de Moodle y evitar duplicados de la incorporación.';

$string['allow_recording'] = 'Allow Recording (Master Switch)';
$string['allow_recording_help'] = 'The primary master switch for all recording features. If disabled, both Cloud and Local recording options will be hidden from moderators.';
$string['allow_cloud_recording'] = 'Permitir la grabación en la nube';
$string['allow_cloud_recording_help'] = 'Enables recording on the PlugNmeet server. The final video is processed and stored in the cloud, making it easy to share via a link once the session ends.';
$string['enable_auto_cloud_recording'] = 'Activar la grabación automática en la nube';
$string['enable_auto_cloud_recording_help'] = 'Automatically triggers the cloud recording the moment the first moderator joins the session. Ideal for ensuring no lecture is forgotten.';
$string['allow_local_recording'] = 'Permitir grabación local';
$string['allow_local_recording_help'] = 'Allows recording directly to the computer. **Note:** Requires Google Chrome. To capture all session audio, the user must share their "Chrome Tab" and check the "Also share tab audio" box. The file is saved locally to the device once finished.';

$string['allow_chat'] = 'Allow Chat (Global Master Switch)';
$string['allow_chat_help'] = 'The absolute master switch for all chat functions. If disabled, the entire chat area is removed for everyone, including moderators. No public or private chat will be possible.';
$string['allow_file_upload'] = 'Permitir la subida de archivos';
$string['allow_file_upload_help'] = 'Enables the ability to share files within the chat. This requires the "Allow Chat" master switch to be active.';

$string['allow_shared_notepad'] = 'Permitir bloc de notas compartido';
$string['allow_shared_notepad_help'] = 'Enables a collaborative text editor where students and teachers can take real-time notes together. This is perfect for brainstorming, co-writing, or building a shared class summary.';

$string['allow_whiteboard'] = 'Permitir pizarra';
$string['allow_whiteboard_help'] = 'Unlocks an interactive drawing space for the session. Use it for sketching diagrams, solving math problems visually, or letting students annotate shared content.';

$string['allowed_external_media_player'] = 'Allow External Media Player';
$string['allowed_external_media_player_help'] = 'Allows moderators to sync and play videos from sources like YouTube or Vimeo for the whole class. Ideal for analyzing educational clips or watching documentaries together without bandwidth lag.';

$string['activate_waiting_room'] = 'Activar la sala de espera';
$string['activate_waiting_room_help'] = 'Activa la sala de espera para esta sesión.';
$string['waiting_room_msg'] = 'Mensaje de la sala de espera';
$string['waiting_room_msg_help'] = 'Este mensaje se muestra a los usuarios mientras esperan ser admitidos en la sala. Úsalo para compartir instrucciones, expectativas o información útil antes de que empiece la sesión.';

$string['allow_breakout_rooms'] = 'Permitir salas de grupo';
$string['allow_breakout_rooms_help'] = 'Enables moderators to split participants into smaller groups for focused discussions, collaborative projects, or private group activities.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'The maximum number of sub-rooms a moderator can create within a single session.';

$string['allow_display_external_link_features'] = 'Allow External Link Sharing';
$string['allow_display_external_link_features_help'] = 'Allows moderators to display external educational content—such as H5P activities, SCORM packages, or quiz systems (e.g., Kahoot)—directly to all participants during the session.';

$string['allow_ingress_features'] = 'Allow Ingress (External Streaming)';
$string['allow_ingress_features_help'] = 'Allows teachers to broadcast high-quality video into the session using external software like OBS via RTMP or WHIP protocols. This is ideal for sharing high-resolution video content, pre-recorded sessions, or bypassing browser upload limitations.';

$string['allow_polls'] = 'Permitir Votaciones';
$string['allow_polls_help'] = 'Enables moderators to create interactive polls and quick quizzes during the session. This is a great way to check student understanding and increase engagement.';

$string['sip_dial_in_features_is_allow'] = 'Permitir la entrada de marcación SIP';
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
$string['insights_transcription_features_is_allow_translation'] = 'Permitir la traducción de transcripción';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allows the live transcript to be translated into different languages, supporting international students and multi-lingual environments.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Speech Synthesis (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Enables Text-to-Speech, allowing the live transcript to be read aloud for better accessibility and for visually impaired participants.';
$string['insights_chat_translation_features_is_allow'] = 'Permitir la traducción del chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Enables real-time translation of chat messages, allowing participants to communicate instantly across different languages.';
$string['insights_ai_features_is_allow'] = 'Allow AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'The master switch for all AI-powered capabilities. If disabled, specific features like AI Chat and Meeting Summarization will be hidden, even if Session Insights is active.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integrates an AI assistant directly into the chat to help answer questions, explain complex concepts, and facilitate group discussion.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Permitir la Resumen de Reuniones de IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Automatically generates a concise AI summary after the session ends, highlighting key educational points, decisions, and follow-up tasks.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Mutes all participants by default upon entry. Only moderators can unmute or grant permission to speak.';
$string['lock_webcam'] = 'Lock Webcams';
$string['lock_webcam_help'] = 'Disables cameras for all participants by default. Useful for saving bandwidth or ensuring student privacy.';
$string['lock_screen_sharing'] = 'Compartición de pantalla de bloqueo';
$string['lock_screen_sharing_help'] = 'Restricts screen sharing to moderators only. Prevents participants from interrupting with their own screens.';
$string['lock_whiteboard'] = 'Bloquear pizarra blanca';
$string['lock_whiteboard_help'] = 'Restricts whiteboard drawing tools to moderators only. Prevents unauthorized annotations by participants.';
$string['lock_shared_notepad'] = 'Bloquear el bloc de notas compartido';
$string['lock_shared_notepad_help'] = 'Disables the collaborative notepad for participants to prevent off-topic writing or distractions.';
$string['lock_chat'] = 'Lock Public Chat';
$string['lock_chat_help'] = 'Completely hides or disables the public chat area for all participants.';
$string['lock_chat_send_message'] = 'Lock Sending Messages';
$string['lock_chat_send_message_help'] = 'Allows participants to read the chat, but prevents them from sending any messages.';
$string['lock_chat_file_share'] = 'Lock File Sharing';
$string['lock_chat_file_share_help'] = 'Prevents participants from uploading or sharing files within the chat area.';
$string['lock_private_chat'] = 'Bloquear chat privado';
$string['lock_private_chat_help'] = 'Disables 1-on-1 private messaging between participants. Note: Participants can still send private messages to moderators for help or questions.';

$string['completion_minutes'] = 'Actas atendidas';
$string['completion_minutes_help'] = 'Exige que el usuario esté en la sesión durante un número determinado de minutos.';
$string['completion_minutes_desc'] = 'El usuario debe asistir a la sesión al menos {$a} minutos.';
$string['completion_raised_hand'] = 'Mano levantada';
$string['completion_raised_hand_help'] = 'Exige que el usuario levante la mano al menos una vez.';
$string['completion_chat_messages'] = 'Mensajes de chat enviados';
$string['completion_chat_messages_help'] = 'Exige que el usuario envíe al menos 1 mensaje de chat.';
$string['completion_webcam_enabled'] = 'Cámara web habilitada';
$string['completion_webcam_enabled_help'] = 'Exige que el usuario active su cámara web al menos una vez.';
$string['completion_webcam_duration'] = 'Duración habilitada por cámara web (minutos)';
$string['completion_webcam_duration_help'] = 'Exige que el usuario tenga la webcam activada durante un número determinado de minutos.';
$string['completion_webcam_duration_desc'] = 'El usuario debe tener la webcam activada al menos {$a} minutos.';
$string['completion_mic_enabled'] = 'Micrófono activado';
$string['completion_mic_enabled_help'] = 'Exige que el usuario active su micrófono al menos una vez.';
$string['completion_mic_duration'] = 'Duración activada por micrófono (minutos)';
$string['completion_mic_duration_help'] = 'Exige que el usuario tenga el micrófono activado durante un número determinado de minutos.';
$string['completion_mic_duration_desc'] = 'El usuario debe tener el micrófono activado al menos {$a} minutos.';
$string['completion_talk_duration'] = 'Duración de la charla (minutos)';
$string['completion_talk_duration_help'] = 'Exige que el usuario hable durante un determinado número de minutos.';
$string['completion_talk_duration_desc'] = 'El usuario debe hablar al menos durante {$a} minutos.';
$string['completion_poll_voted'] = 'Votado en la encuesta';
$string['completion_poll_voted_help'] = 'Exigir al usuario que vote al menos en una encuesta.';
$string['completion_whiteboard_annotated'] = 'Anotado en la pizarra blanca';
$string['completion_whiteboard_annotated_help'] = 'Exige que el usuario anote en la pizarra blanca.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Almacena estadísticas de sesión para que los usuarios puedan determinar la finalización de la actividad.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'El ID del usuario.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Datos de sesión codificados en JSON (minutos, mensajes de chat, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'La última vez que se actualizaron las estadísticas.';

// view.php
$string['join_session'] = 'Unirse a la sesión';
$string['start_session'] = 'Inicio de la sesión';
$string['end_session'] = 'Fin de la sesión';
$string['participants'] = 'Participantes';
$string['is_recording'] = 'Es Recording';
$string['is_active'] = 'Está activo';
$string['room_info'] = 'Detalles de las sesiones en directo';
$string['participants_info'] = 'Participantes en directo';
$string['room_id'] = 'ID de la habitación';
$string['creation_time'] = 'Tiempo de creación';
$string['name'] = 'Nombre';
$string['user_id'] = 'ID de usuario';
$string['is_admin'] = 'Es Admin';
$string['is_presenter'] = 'Es presentador';
$string['joined_at'] = 'Incorporado en';
$string['moderator_not_joined'] = 'Un moderador debe iniciar la sesión antes de que puedas unirte.';
$string['session_available_from'] = 'Disponible en: {$a}';
$string['session_available_until'] = 'Disponible hasta: {$a}';
$string['session_not_started_yet'] = 'Esta sesión aún no ha empezado.';
$string['session_ended'] = 'Esta sesión ha terminado.';
$string['allow_guest'] = 'Permitir usuarios invitados';
$string['allow_guest_help'] = 'Cuando está activado, se genera un enlace seguro y compartible para que usuarios externos (como profesores invitados o participantes sin cuenta de Moodle) puedan unirse a la sesión; Un administrador puede ver y compartir este enlace.';
$string['guest_join_link'] = 'Enlace de Invitado';
$string['guest_join_link_help'] = 'Comparte este enlace con participantes externos. Este enlace seguirá siendo válido para {$a} horas. Cada recarga de página generará un nuevo enlace, pero los enlaces previamente compartidos seguirán siendo válidos hasta su fecha de caducidad original.';
$string['copy_link'] = 'Copiar enlace';
$string['link_copied'] = 'Copia de Link a la carpeta.';
$string['guest_join_title'] = 'Únete a la reunión como invitado';
$string['enter_display_name'] = 'Introduce tu nombre de visualización';
$string['join_as_guest'] = 'Unirse a la reunión';
$string['guest_access_denied'] = 'El acceso de invitados no está habilitado para esta reunión.';
$string['invalid_guest_token'] = 'Token de entrada de invitado inválido o caducado.';
$string['guest_link_expired'] = 'Este enlace de invitado para unirse ha caducado.';
$string['error_joining_session'] = 'Apareció un error al unirse a la sesión: {$a}';
$string['already_logged_in'] = 'Ya has iniciado sesión en Moodle. Puedes unirte directamente a la sesión desde esta página de actividades.';
$string['total_webcams'] = 'Total Webcams';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Total de composiciones de pantalla';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Micrófonos';
$string['screenshares'] = 'Pantallas compartidas';

// Events
$string['event_room_started'] = 'Inicio de la habitación';
$string['event_room_ended'] = 'Termina la sala';
$string['event_room_created'] = 'Sala creada';
$string['event_session_ended'] = 'Finalización de la sesión';
$string['event_participant_joined'] = 'Participante incorporado';
$string['event_participant_left'] = 'Participante a la izquierda';
$string['event_artifact_created'] = 'Artefacto creado';
$string['event_recording_proceeded'] = 'Grabación lista';
$string['event_plugin_error'] = 'Error PlugNmeet';
$string['event_track_published'] = 'Tema publicado';
$string['event_track_unpublished'] = 'Pista inédita';

// Notifications
$string['messageprovider:recording_ready'] = 'Notificaciones para grabaciones listas';
$string['messageprovider:artifact_ready'] = 'Notificaciones de artefactos listos';
$string['recording_ready_notification_subject'] = 'Listo para grabar: {$a}';
$string['recording_ready_notification_fullmessage'] = 'La grabación para la sesión "{$a->roomname}" ya está listo y procesado. Puedes verlo aquí: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>La grabación de la sesión <strong>"{$a->roomname}"</strong> ahora está listo y procesado.</p><p><a href="{$a->url}">Haz clic aquí para ver la grabación.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Grabación lista para {$a}';
$string['artifact_ready_notification_subject'] = 'Artefacto listo: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Un nuevo artefacto ({$a->type}) para la sesión "{$a->roomname}" ya está disponible. Puedes verlo aquí: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Un nuevo artefacto ({$a->type}) para la sesión <strong>"{$a->roomname}"</strong> ahora está disponible.</p><p><a href="{$a->url}">Haz clic aquí para ver los detalles del artefacto.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefacto listo para {$a}';

// recordings.php
$string['no_recordings'] = 'No se han encontrado grabaciones.';
$string['recording_id'] = 'ID de grabación';
$string['room_sid'] = 'Sala SID';
$string['file_size'] = 'Tamaño del archivo';
$string['created_at'] = 'Creado en';
$string['actions'] = 'Acciones';
$string['view'] = 'Vista';
$string['play'] = 'Jugar';
$string['download'] = 'Descargar';
$string['delete'] = 'Borrar';
$string['delete_confirm'] = '¿Estás seguro de que quieres borrar esto?';
$string['delete_success'] = 'Eliminado con éxito.';
$string['recording_details'] = 'Detalles de la grabación';
$string['recording_creation_time'] = 'Tiempo de creación de la grabación';
$string['room_creation_time'] = 'Tiempo de creación de sesiones';
$string['back_to_list'] = 'Volver a la lista';
$string['browser_not_support_video'] = 'Tu navegador no soporta la etiqueta de vídeo.';
$string['room_title'] = 'Título de la habitación';
$string['total_participants'] = 'Total de participantes';
$string['session_started_at'] = 'La sesión comenzó en';
$string['session_ended_at'] = 'La sesión terminó en';

// artifacts.php
$string['no_artifacts'] = 'No se han encontrado artefactos.';
$string['artifact_id'] = 'ID de artefacto';
$string['type'] = 'Tipo';
$string['artifact_details'] = 'Detalles del artefacto';
$string['no_permission'] = 'No tienes permiso para ver esta página.';
$string['token_usage'] = 'Uso del token';
$string['duration_usage'] = 'Duración de uso';
$string['character_count_usage'] = 'Uso del recuento de caracteres';
$string['estimated_cost'] = 'Coste estimado';
$string['file_path'] = 'Ruta de archivo';
$string['mime_type'] = 'Tipo de mimo';
$string['created_at'] = 'Creado en';

// Analytics strings
$string['download_excel_report'] = 'Descargar informe de Excel';
$string['download_raw_json'] = 'Descargar datos en bruto';
$string['room_summary'] = 'Resumen de la sala';
$string['users_summary'] = 'Resumen de usuarios';
$string['see_excel_report'] = 'Consulte el informe de Excel para más detalles';
$string['error_loading_analytics'] = 'Datos analíticos de carga de errores: {$a}';
$string['error_generating_excel'] = 'Informe de Excel que genera errores: {$a}';

$string['analytics_room_room_id'] = 'ID de la habitación';
$string['analytics_room_room_title'] = 'Título de la habitación';
$string['analytics_room_room_creation'] = 'Tiempo de creación de la sala';
$string['analytics_room_room_ended'] = 'Tiempo Terminado en la Habitación';
$string['analytics_room_room_duration'] = 'Duración de la sala';
$string['analytics_room_room_total_users'] = 'Total de participantes';
$string['analytics_room_enabled_e2ee'] = 'E2EE habilitado';
$string['analytics_room_recording_status'] = 'Recuento de estado de grabación';
$string['analytics_room_rtmp_status'] = 'Recuento de estado RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Uso total del servicio de voz';
$string['analytics_room_external_media_player_status'] = 'Recuento de estado de los reproductores de medios externos';
$string['analytics_room_etherpad_status'] = 'Recuento de estado de Etherpad';
$string['analytics_room_external_display_link_status'] = 'Recuento de estado del enlace de pantalla externo';
$string['analytics_room_ingress_created'] = 'Recuento creado por Ingress';
$string['analytics_room_breakout_room'] = 'Recuento de salas de escape';

$string['analytics_user_name'] = 'Nombre';
$string['analytics_user_id'] = 'ID de usuario';
$string['analytics_user_ex_id'] = 'ID de usuario';
$string['analytics_user_is_admin'] = 'Es Admin';
$string['analytics_user_duration'] = 'Duración';
$string['analytics_user_joined'] = 'Incorporado en';
$string['analytics_user_left'] = 'Izquierda en';
$string['analytics_user_mic_status'] = 'Cambios en el estado del micrófono';
$string['analytics_user_mic_muted'] = 'Recuento silenciado de micrófono';
$string['analytics_user_mic_duration'] = 'Duración habilitada por micrófono';
$string['analytics_user_talked'] = 'Cuenta hablada';
$string['analytics_user_talked_duration'] = 'Duración de la charla';
$string['analytics_user_webcam_status'] = 'Cambios en el estado de la cámara web';
$string['analytics_user_webcam_duration'] = 'Duración habilitada por la cámara web';
$string['analytics_user_raise_hand'] = 'Recuento de manos levantadas';
$string['analytics_user_voted_poll'] = 'Recuento de votos';
$string['analytics_user_whiteboard_annotated'] = 'Cuenta anotado en pizarra blanca';
$string['analytics_user_whiteboard_files'] = 'Recuento de archivos de pizarra blanca';
$string['analytics_user_screen_share_status'] = 'Cambios en el estado de la compartición de pantalla';
$string['analytics_user_speech_services_usage'] = 'Uso de los servicios de voz';
$string['analytics_user_public_chat'] = 'Mensajes de chat público';
$string['analytics_user_private_chat'] = 'Mensajes privados de chat';
$string['analytics_user_chat_files'] = 'Archivos de chat compartidos';
$string['analytics_user_interface_invisible'] = 'Conteo Invisible de Interfaz';
$string['analytics_user_connection_quality'] = 'Calidad de la conexión';
$string['analytics_user_connection_quality_excellent'] = 'Excelente';
$string['analytics_user_connection_quality_good'] = 'Bien';
$string['analytics_user_connection_quality_poor'] = 'Pobre';

$string['users_info'] = 'Información de los usuarios';
$string['polls'] = 'Encuestas';
$string['question'] = 'Pregunta';
$string['options'] = 'Opciones';
$string['file_name'] = 'Nombre del archivo';
$string['checkcompletiontask'] = 'Comprobar la finalización de plugNmeet';

// attendance.php
$string['attendance_report'] = 'Informe de asistencia';
$string['status'] = 'Estado';
$string['present'] = 'Actualidad';
$string['absent'] = 'Ausente';
$string['incomplete'] = 'Incompleto';
$string['completed'] = 'Completado';
$string['minutes_attended'] = 'Actas atendidas';
$string['last_updated'] = 'Última actualización';
$string['mic_duration'] = 'Duración habilitada por micrófono';
$string['webcam_duration'] = 'Duración habilitada por la cámara web';
$string['participation_progress'] = 'Progreso de la participación';
$string['attendance_duration'] = 'Actas atendidas';
$string['attendance_webcam_status'] = 'Cámara web habilitada';
$string['attendance_mic_status'] = 'Micrófono activado';
$string['attendance_talked_duration'] = 'Duración de la charla';
$string['attendance_voted_poll'] = 'Votado en la encuesta';
$string['attendance_chat_messages'] = 'Mensajes de chat enviados';
$string['attendance_raise_hand'] = 'Mano levantada';
$string['attendance_webcam_duration'] = 'Duración habilitada por la cámara web';
$string['attendance_mic_duration'] = 'Duración habilitada por micrófono';
$string['attendance_whiteboard_annotated'] = 'Anotado en la pizarra blanca';
$string['met'] = 'Met';
$string['required'] = 'Obligatorio';

// Status codes
$string['status_unknown_status'] = 'El servidor devolvió un estado desconocido.';
$string['status_success'] = 'Operación completada con éxito.';
$string['status_permission_denied'] = 'Permiso denegado.';
$string['status_not_found'] = 'No {$a} encontrado.';
$string['status_conflict'] = 'Esta acción no podía completarse debido a un conflicto (por ejemplo, la sala puede ya existir).';
$string['status_invalid_token_or_signature'] = 'El token de solicitud o la firma es inválido.';
$string['status_invalid_api_key'] = 'La clave API proporcionada no es válida. Por favor, revisa la configuración de tu plugin.';
$string['status_internal_server_error'] = 'El servidor PlugNmeet encontró un error interno.';
$string['status_invalid_parameters'] = 'La información proporcionada es inválida.';
$string['status_missing_required_parameter'] = 'Falta información necesaria.';
$string['status_room_not_found'] = 'No se encontró la habitación especificada.';
$string['status_user_not_found'] = 'Cuenta de usuario no encontrada. Por favor, asegúrate de que tus credenciales de API sean correctas y que tu suscripción esté activa.';
$string['status_user_blocked'] = 'La cuenta de usuario está bloqueada. Por favor, contacta con soporte.';
$string['status_user_not_active'] = 'La cuenta de usuario no está activa. Esto probablemente se deba a una suscripción inactiva o caducada.';
