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
$string['plugnmeet:viewlivesessioninfo'] = 'Ver información de la sesión en directo';
$string['plugnmeet:viewrecordings'] = 'Ver grabaciones';
$string['plugnmeetfieldset'] = 'Conjunto de campo de ejemplo personalizado';
$string['plugnmeetname'] = 'Nombre de ejemplo personalizado';
$string['plugnmeetname_help'] = 'Ayuda con ejemplos personalizados';

// Admin Settings
$string['api_config'] = 'Configuración de API';
$string['server_url'] = 'URL del servidor PlugNmeet';
$string['server_url_desc'] = 'La URL base de tu servidor PlugNmeet (por ejemplo, https://pnm.example.com)';
$string['api_key'] = 'Clave API';
$string['api_key_desc'] = 'La clave API proporcionada por tu servidor PlugNmeet.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'El secreto de la API proporcionado por tu servidor PlugNetet.';
$string['guest_access_hdr'] = 'Configuración de acceso a invitados';
$string['allow_guest_global'] = 'Permitir el acceso de invitados a nivel global';
$string['allow_guest_global_desc'] = 'Si está desactivado, la entrada de invitados no puede activarse en ninguna sala de reuniones.';
$string['guest_link_expiration'] = 'Caducidad del enlace de invitado (horas)';
$string['guest_link_expiration_desc'] = 'Cuánto tiempo sigue siendo válido un enlace de entrada de invitado después de la generación.';

$string['defaults'] = 'Valores Técnicos por Defecto';
$string['defaults_desc'] = 'Configuración técnica predeterminada para nuevas sesiones de PlugNmeet.';
$string['enable_dynacast'] = 'Habilitar Dynacast';
$string['enable_dynacast_des'] = 'Utiliza Dynacast para optimizar los flujos de vídeo publicando solo el altavoz activo más recientemente.';
$string['enable_simulcast'] = 'Habilitar la emisión simultánea';
$string['enable_simulcast_des'] = 'Utiliza Simulcast para proporcionar múltiples capas de calidad de vídeo a los espectadores.';
$string['video_codec'] = 'Códec de vídeo';
$string['video_codec_des'] = 'El códec de vídeo por defecto para las sesiones.';
$string['default_webcam_resolution'] = 'Resolución predeterminada de cámara web';
$string['default_webcam_resolution_des'] = 'La resolución predeterminada para webcams.';
$string['default_screen_share_resolution'] = 'Resolución predeterminada de compartición de pantalla';
$string['default_screen_share_resolution_des'] = 'La resolución predeterminada para compartir pantalla.';
$string['default_audio_preset'] = 'Preajuste de audio predeterminado';
$string['default_audio_preset_des'] = 'El preajuste de audio por defecto para las sesiones.';

$string['branding'] = 'Imagen y personalización';
$string['custom_logo'] = 'Logotipo personalizado';
$string['custom_logo_des'] = 'Sube un logo personalizado para mostrarlo en la sala de reuniones. Si está vacío, se utilizará el logo predeterminado de PlugNmeet.';
$string['custom_css_url'] = 'URL CSS personalizada';
$string['custom_css_url_des'] = 'Proporciona una URL a un archivo CSS externo para personalizar el aspecto y la sensación de la sala de reuniones.';
$string['primary_color'] = 'Color primario';
$string['primary_color_des'] = 'El color principal para botones y reflejos.';
$string['secondary_color'] = 'Color secundario';
$string['secondary_color_des'] = 'El color secundario para los elementos de la interfaz.';
$string['background_color'] = 'Color de fondo';
$string['background_color_des'] = 'Color de fondo de la interfaz';
$string['background_image'] = 'Imagen de fondo';
$string['background_image_des'] = 'Debe tener un tamaño de 1920X1080 para obtener el mejor resultado.';
$string['header_color'] = 'Color del encabezado';
$string['header_color_des'] = 'Color del encabezado de la interfaz';
$string['footer_color'] = 'Color del pie de página';
$string['footer_color_des'] = 'Color del pie de página de la interfaz';
$string['left_color'] = 'Color del lado izquierdo';
$string['left_color_des'] = 'Color de la barra lateral izquierda';
$string['side_panel_bg_color'] = 'Color de fondo del panel lateral';
$string['side_panel_bg_color_des'] = 'Color de fondo del panel lateral derecho';
$string['copyright_text'] = 'Texto de derechos de autor';
$string['copyright_text_des'] = 'El texto de derechos de autor para mostrar en el pie de página de la sala de reuniones. HTML está permitido.';
$string['client_load'] = 'Carga de cliente desde';
$string['client_load_des'] = 'Por defecto: local';
$string['remote'] = 'Remoto';
$string['local'] = 'Local';

$string['client_side'] = 'Opciones del lado del cliente';
$string['client_load_mode'] = 'Modo de carga del cliente';
$string['client_load_mode_desc'] = 'Elige si cargar el cliente web desde el servidor remoto o desde una copia local.';
$string['remote'] = 'Remoto';
$string['local'] = 'Local';
$string['client_download_url'] = 'URL de descarga del cliente';
$string['client_download_url_des'] = 'Si usas el modo de carga "Local", proporciona la URL del archivo client.zip.';
$string['update_client_btn'] = 'Actualizar cliente local';
$string['update_client_btn_label'] = 'Actualización ahora';

$string['yes'] = 'Sí';
$string['no'] = 'No';
$string['recordings'] = "Grabaciones";
$string['artifacts'] = "Artefactos de la sala";
$string['attendance'] = "Informe de asistencia";
$string['artifact'] = "Artefacto";

// mod_form.php
$string['roomtitle'] = 'Título de la habitación';
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
$string['deadline'] = 'Disponible hasta';
$string['err_deadline_before_available'] = 'La fecha de "Disponible hasta" no puede ser anterior a la de "Disponible desde".';
$string['error_analytics_required_for_completion'] = 'Debe comprobarse Habilitar Analytics si se han establecido criterios de finalización.';

$string['allow_webcams'] = 'Permitir cámaras web';
$string['allow_webcams_help'] = 'Permite que los participantes usen sus webcams.';
$string['mute_on_start'] = 'Muda al arrancar';
$string['mute_on_start_help'] = 'Silencia automáticamente a todos los participantes cuando se unan a la sesión.';
$string['allow_screen_share'] = 'Permitir compartir pantalla';
$string['allow_screen_share_help'] = 'Permite que los participantes compartan su pantalla.';
$string['allow_rtmp'] = 'Permitir la transmisión RTMP';
$string['allow_rtmp_help'] = 'Permite que los moderadores transmitan la sesión a un endpoint RTMP.';
$string['admin_only_webcams'] = 'Webcams solo para administradores';
$string['admin_only_webcams_help'] = 'Solo permite que los moderadores usen sus webcams.';
$string['room_duration'] = 'Duración de la habitación (minutos)';
$string['room_duration_help'] = 'Define cuánto tiempo puede permanecer abierta la habitación antes de cerrarse automáticamente. Introduce 0 si no quieres poner ningún límite de tiempo, permitiendo que la sala permanezca activa sin restricciones.';
$string['moderator_join_first'] = 'Moderador Únete primero';
$string['moderator_join_first_help'] = 'Cuando está activada, la sesión no comenzará y nadie podrá unirse hasta que un moderador (como un profesor) se una primero. Los participantes permanecerán en la página de actividades de Moodle y no entrarán en la sala ni en la sala de espera. Esto es diferente de la opción de Sala de Espera, donde los usuarios pueden seguir entrando y esperando.';
$string['enable_analytics'] = 'Habilitar la analítica';
$string['enable_analytics_help'] = 'Genera análisis para la sesión. Nota: Esto debe activarse si se han establecido criterios de Completación.';
$string['allow_virtual_bg'] = 'Permitir fondos virtuales';
$string['allow_virtual_bg_help'] = 'Permitir que los participantes utilicen fondos virtuales.';
$string['auto_gen_user_id'] = 'Generación automática del ID de usuario';
$string['auto_gen_user_id_help'] = 'Cuando está habilitado, el sistema crea un nuevo ID para que el mismo usuario pueda unirse desde varios dispositivos—por ejemplo, cuando un profesor se une desde una tableta para dibujar en la pizarra mientras usa un PC para la cámara y el micrófono; sin embargo, lo es <b>Recomendado</b> para mantener esto desactivado y así usar el ID de usuario de Moodle y evitar duplicados de la incorporación.';

$string['allow_recording'] = 'Permitir grabación';
$string['allow_recording_help'] = 'Permite que la sesión sea grabada.';
$string['allow_cloud_recording'] = 'Permitir la grabación en la nube';
$string['allow_cloud_recording_help'] = 'Permite que la sesión se grabe en la nube.';
$string['enable_auto_cloud_recording'] = 'Activar la grabación automática en la nube';
$string['enable_auto_cloud_recording_help'] = 'Empieza a grabar automáticamente cuando empieza la sesión.';
$string['allow_local_recording'] = 'Permitir grabación local';
$string['allow_local_recording_help'] = 'Permite a los participantes grabar la sesión localmente.';
$string['is_allow_view_recording'] = 'Permitir la visualización de grabaciones';
$string['is_allow_view_recording_help'] = 'Permite a los participantes ver las grabaciones.';
$string['is_allow_download_recording'] = 'Permitir la descarga de grabaciones';
$string['is_allow_download_recording_help'] = 'Permite a los participantes descargar las grabaciones.';

$string['allow_chat'] = 'Permitir chat';
$string['allow_chat_help'] = 'Activa la función de chat público.';
$string['allow_file_upload'] = 'Permitir la subida de archivos';
$string['allow_file_upload_help'] = 'Permite que los participantes suban archivos al chat.';

$string['allow_shared_notepad'] = 'Permitir bloc de notas compartido';
$string['allow_shared_notepad_help'] = 'Permite a los participantes usar el bloc de notas compartido.';
$string['allow_whiteboard'] = 'Permitir pizarra';
$string['allow_whiteboard_help'] = 'Permite que los participantes usen la pizarra.';
$string['allowed_external_media_player'] = 'Permitir reproductor multimedia externo';
$string['allowed_external_media_player_help'] = 'Permite a los participantes reproducir medios externos (por ejemplo, vídeos de YouTube).';
$string['activate_waiting_room'] = 'Activar la sala de espera';
$string['activate_waiting_room_help'] = 'Activa la sala de espera para esta sesión.';
$string['waiting_room_msg'] = 'Mensaje de la sala de espera';
$string['waiting_room_msg_help'] = 'Este mensaje se muestra a los usuarios mientras esperan ser admitidos en la sala. Úsalo para compartir instrucciones, expectativas o información útil antes de que empiece la sesión.';
$string['allow_breakout_rooms'] = 'Permitir salas de grupo';
$string['allow_breakout_rooms_help'] = 'Permite que los moderadores creen salas de grupo.';
$string['allowed_number_rooms'] = 'Número permitido de salas de descanso';
$string['allow_display_external_link_features'] = 'Permitir visualización Enlace externo';
$string['allow_display_external_link_features_help'] = 'Permite que los moderadores muestren un enlace externo a todos los participantes.';
$string['allow_ingress_features'] = 'Permitir la entrada';
$string['allow_ingress_features_help'] = 'Permite la entrada a la sesión.';
$string['allow_polls'] = 'Permitir Votaciones';
$string['allow_polls_help'] = 'Permitir que los moderadores creen encuestas.';
$string['sip_dial_in_features_is_allow'] = 'Permitir la entrada de marcación SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permite que los participantes se unan a la sesión mediante marcación SIP.';

$string['enable_end_to_end_encryption_features'] = 'Habilitar el cifrado de extremo a extremo';
$string['enable_end_to_end_encryption_features_help'] = 'Activa el cifrado de extremo a extremo para la sesión.';
$string['enabled_self_insert_encryption_key'] = 'Permitir la autoinserción de la clave de cifrado';
$string['enabled_self_insert_encryption_key_help'] = 'Permitir que los participantes inserten su propia clave de cifrado.';
$string['included_e2ee_chat_messages'] = 'Incluye mensajes de chat en E2EE';
$string['included_e2ee_chat_messages_help'] = 'Incluye mensajes de chat en el cifrado de extremo a extremo.';
$string['included_e2ee_whiteboard'] = 'Incluir pizarra en E2EE';
$string['included_e2ee_whiteboard_help'] = 'Incluye la pizarra en el cifrado de extremo a extremo.';

$string['insights_features_is_allow'] = 'Permitir Insights';
$string['insights_features_is_allow_help'] = 'Permite la generación de ideas para esta sesión.';
$string['insights_transcription_features_is_allow'] = 'Permitir la transcripción';
$string['insights_transcription_features_is_allow_help'] = 'Permite que la sesión sea transcrita.';
$string['insights_transcription_features_is_allow_translation'] = 'Permitir la traducción de transcripción';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permite que la transcripción sea traducida.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Permitir la síntesis de voz por transcripción';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Permite que la transcripción se lea en voz alta.';
$string['insights_chat_translation_features_is_allow'] = 'Permitir la traducción del chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Permite que los mensajes del chat se traduzcan.';
$string['insights_ai_features_is_allow'] = 'Permitir funciones de IA';
$string['insights_ai_features_is_allow_help'] = 'Permitir que se utilicen funciones de IA en esta sesión.';
$string['insights_ai_text_chat_features_is_allow'] = 'Permitir chat de texto con IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Permite que se use IA en el chat.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Permitir la Resumen de Reuniones de IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Permite que la reunión se resuma con IA.';

$string['lock_microphone'] = 'Bloquear micrófono';
$string['lock_microphone_help'] = 'Desactiva los micrófonos de todos los participantes por defecto.';
$string['lock_webcam'] = 'Cámara web de bloqueo';
$string['lock_webcam_help'] = 'Desactiva por defecto todas las webcams de los participantes.';
$string['lock_screen_sharing'] = 'Compartición de pantalla de bloqueo';
$string['lock_screen_sharing_help'] = 'Desactiva el compartir pantalla para todos los participantes por defecto.';
$string['lock_whiteboard'] = 'Bloquear pizarra blanca';
$string['lock_whiteboard_help'] = 'Desactiva la pizarra blanca para todos los participantes por defecto.';
$string['lock_shared_notepad'] = 'Bloquear el bloc de notas compartido';
$string['lock_shared_notepad_help'] = 'Desactiva las notas compartidas para todos los participantes por defecto.';
$string['lock_chat'] = 'Chat bloqueado';
$string['lock_chat_help'] = 'Desactiva el chat público para todos los participantes por defecto.';
$string['lock_chat_send_message'] = 'Bloquear chat Enviar mensaje';
$string['lock_chat_send_message_help'] = 'Desactiva por defecto el envío de mensajes en el chat público para todos los participantes.';
$string['lock_chat_file_share'] = 'Bloquear el chat Compartir archivos';
$string['lock_chat_file_share_help'] = 'Desactiva el intercambio de archivos en el chat público para todos los participantes por defecto.';
$string['lock_private_chat'] = 'Bloquear chat privado';
$string['lock_private_chat_help'] = 'Desactiva el chat privado para todos los participantes por defecto.';

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
