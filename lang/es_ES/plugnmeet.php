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
$string['modulename_help'] = 'El módulo de actividad PlugNmeet le permite crear y gestionar sesiones de conferencias web en tiempo real dentro de Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Administración de PlugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Añadir una nueva actividad PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Eliminar artefactos';
$string['plugnmeet:deleterecording'] = 'Eliminar grabaciones';
$string['plugnmeet:downloadanalyticsreport'] = 'Descargar informe de análisis';
$string['plugnmeet:downloadartifacts'] = 'Descargar artefactos';
$string['plugnmeet:downloadattendance'] = 'Descargar informe de asistencia';
$string['plugnmeet:downloadrecordings'] = 'Descargar grabaciones';
$string['plugnmeet:manage'] = 'Gestionar la configuración de PlugNmeet';
$string['plugnmeet:view'] = 'Ver actividad de PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Ver informe de salas activas';
$string['plugnmeet:viewartifacts'] = 'Ver artefactos';
$string['plugnmeet:viewattendance'] = 'Ver informe de asistencia';
$string['plugnmeet:viewattendancelist'] = 'Ver lista de asistencia';
$string['plugnmeet:viewlivesessioninfo'] = 'Ver información de la sesión en vivo';
$string['plugnmeet:viewrecordings'] = 'Ver grabaciones';
$string['plugnmeetfieldset'] = 'Conjunto de campos de ejemplo personalizado';
$string['plugnmeetname'] = 'Nombre de ejemplo personalizado';
$string['plugnmeetname_help'] = 'Ayuda de ejemplo personalizada';
$string['subplugintype_pnmext'] = 'Extensión PlugNmeet';
$string['subplugintype_pnmext_plural'] = 'Extensiones PlugNmeet';

// Admin Settings
$string['api_config'] = 'Configuración de la API';
$string['server_url'] = 'URL del servidor PlugNmeet';
$string['server_url_desc'] = 'La URL base de su servidor PlugNmeet (por ejemplo, https://pnm.example.com).';
$string['api_key'] = 'Clave de API';
$string['api_key_desc'] = 'La clave de API única proporcionada por su servidor PlugNmeet.';
$string['api_secret'] = 'Secreto de API';
$string['api_secret_desc'] = 'El secreto de API proporcionado por su servidor PlugNmeet utilizado para una autenticación segura.';
$string['guest_access_hdr'] = 'Configuración de acceso de invitados';
$string['allow_guest_global'] = 'Permitir acceso de invitados globalmente';
$string['allow_guest_global_desc'] = 'Actúa como un interruptor maestro. Si está deshabilitado, los profesores no verán la opción de habilitar la unión de invitados al crear o editar actividades.';
$string['guest_link_expiration'] = 'Caducidad del enlace de invitado (horas)';
$string['guest_link_expiration_desc'] = 'Determina cuántas horas permanece activo un enlace de acceso de invitado después de que un profesor lo genere.';
$string['defaults'] = 'Valores predeterminados técnicos';
$string['defaults_desc'] = 'Configuraciones técnicas predeterminadas aplicadas a cada nueva sesión de PlugNmeet.';
$string['enable_dynacast'] = 'Habilitar Dynacast';
$string['enable_dynacast_des'] = 'Optimiza el rendimiento pausando dinámicamente las capas de video que no están siendo vistas por los participantes. Esto reduce significativamente el uso de CPU y ancho de banda del servidor. **Nota:** Esto se habilitará automáticamente si se utilizan códecs SVC (VP9/AV1) y es necesario para la transmisión simultánea de múltiples códecs.';
$string['enable_simulcast'] = 'Habilitar Simulcast';
$string['enable_simulcast_des'] = 'Ofrece múltiples capas de calidad de video para garantizar una experiencia fluida para los usuarios con conexiones débiles.';
$string['video_codec'] = 'Códec de video';
$string['video_codec_des'] = 'El estándar de codificación para la transmisión de video. **VP8** se recomienda para WebRTC, ya que proporciona el mejor equilibrio entre calidad y baja latencia. **Advertencia:** No todos los navegadores son compatibles con todos los códecs; asegúrese de que sus usuarios utilicen navegadores modernos si usa VP9 o H.265.';
$string['default_webcam_resolution'] = 'Resolución predeterminada de la cámara web';
$string['default_webcam_resolution_des'] = 'La configuración de resolución inicial para las cámaras de los participantes.';
$string['default_screen_share_resolution'] = 'Resolución predeterminada para compartir pantalla';
$string['default_screen_share_resolution_des'] = 'La configuración de resolución inicial para compartir pantalla.';
$string['default_audio_preset'] = 'Preajuste de audio predeterminado';
$string['default_audio_preset_des'] = 'El perfil de calidad de audio optimizado para la sesión.';

$string['branding'] = 'Marca y personalización';
$string['custom_logo'] = 'Logotipo personalizado';
$string['custom_logo_des'] = 'Suba su logotipo a la sala de reuniones. Si se deja en blanco, se utilizará el logotipo predeterminado de PlugNmeet.';
$string['custom_css_url'] = 'URL de CSS personalizado';
$string['custom_css_url_des'] = 'Enlace un archivo .css externo para sobrescribir o personalizar los estilos de la interfaz.';
$string['primary_color'] = 'Color primario';
$string['primary_color_des'] = 'Color de acento principal utilizado para botones, estados activos y resaltados.';
$string['secondary_color'] = 'Color secundario';
$string['secondary_color_des'] = 'El color de acento utilizado para elementos secundarios de la interfaz de usuario.';
$string['background_color'] = 'Color de fondo';
$string['background_color_des'] = 'El color de fondo principal de la interfaz.';
$string['background_image'] = 'Imagen de fondo';
$string['background_image_des'] = 'Fondo de pantalla. Para obtener los mejores resultados, utilice una imagen de 1920x1080.';
$string['header_color'] = 'Color del encabezado';
$string['header_color_des'] = 'Color de fondo para la barra de navegación superior.';
$string['footer_color'] = 'Color del pie de página';
$string['footer_color_des'] = 'Color de fondo para la barra de herramientas inferior.';
$string['left_color'] = 'Color del lado izquierdo';
$string['left_color_des'] = 'Color de fondo para la barra lateral de navegación izquierda.';
$string['side_panel_bg_color'] = 'Color de fondo del panel lateral';
$string['side_panel_bg_color_des'] = 'Color de fondo para los paneles del lado derecho (Chat y lista de participantes).';
$string['copyright_text'] = 'Texto de derechos de autor';
$string['copyright_text_des'] = 'Texto de marca que se muestra en el pie de página de la configuración. Se admite HTML para enlaces o estilos personalizados.';
$string['client_load'] = 'Método de carga del cliente';
$string['client_load_des'] = 'Elija **Remoto** (Recomendado) para una experiencia fluida y de marca incrustada directamente en su página de Moodle. Elija **Redireccionar** para usar la interfaz predeterminada de plugNmeet; tenga en cuenta que los usuarios abandonarán su sitio y es posible que la marca personalizada no se aplique.';
$string['remote'] = 'Remoto (incrustado)';
$string['redirect'] = 'Redireccionar al servidor';

$string['yes'] = 'Sí';
$string['no'] = 'No';
$string['recordings'] = "Grabaciones";
$string['recording'] = "Grabación";
$string['artifacts'] = "Artefactos de la sala";
$string['attendance'] = "Informe de asistencia";
$string['artifact'] = "Artefacto";
$string['room_subject'] = 'sala';
$string['user_subject'] = 'usuario';
$string['activeroomsreport'] = 'Informe de salas activas';
$string['noactiverooms'] = 'No hay salas activas en este momento.';
$string['activerooms'] = 'Salas activas';
$string['loading'] = 'Cargando...';

// mod_form.php
$string['roomtitle'] = 'Título de la sala';
$string['roomtitle_help'] = 'El nombre utilizado para la actividad de Moodle y el encabezado de la reunión en vivo. Ayuda a los estudiantes a identificar la sesión en su curso y dentro de la sala.';
$string['welcome_message'] = 'Mensaje de bienvenida';
$string['welcome_message_help'] = 'Cualquier texto introducido aquí aparecerá como el primer mensaje en el chat público cuando los usuarios se unan a la sala. Esto es útil para compartir instrucciones, enlaces o información importante con los participantes a medida que entran.';
$string['max_participants'] = 'Máximo de participantes';
$string['max_participants_help'] = 'Establezca este valor para limitar cuántos usuarios pueden unirse a la sesión al mismo tiempo. Establézcalo en 0 para permitir participantes ilimitados, lo que significa que no hay restricciones sobre cuántos usuarios pueden unirse.';
$string['room_features'] = 'Características de la sala';
$string['recording_broadcasting_features'] = 'Grabación y emisión';
$string['chat_features'] = 'Características del chat';
$string['other_features'] = 'Otras características';
$string['e2ee_features'] = 'Cifrado de extremo a extremo';
$string['insights_features'] = 'Funciones de análisis e IA';
$string['defaultlock'] = 'Configuración de bloqueo predeterminada';
$string['advanced_completion'] = 'Finalización avanzada';
$string['available'] = 'Disponible desde';
$string['available_help'] = 'Determina cuándo los participantes pueden empezar a unirse a la sesión. Los usuarios no podrán entrar en la sala antes de esta fecha y hora.';
$string['deadline'] = 'Disponible hasta';
$string['deadline_help'] = 'Determina la fecha y hora final en que los participantes pueden acceder a la sesión. El acceso se bloqueará una vez que pase esta fecha límite.';
$string['err_deadline_before_available'] = 'La fecha "Disponible hasta" no puede ser anterior a la fecha "Disponible desde".';
$string['error_analytics_required_for_completion'] = 'La opción "Habilitar análisis" debe estar marcada si se establecen criterios de finalización.';

$string['allow_webcams'] = 'Permitir cámaras web';
$string['allow_webcams_help'] = 'Permitir a los participantes usar sus cámaras web.';
$string['mute_on_start'] = 'Silenciar al inicio';
$string['mute_on_start_help'] = 'Silenciar automáticamente a todos los participantes cuando se unan a la sesión.';
$string['allow_screen_share'] = 'Permitir compartir pantalla';
$string['allow_screen_share_help'] = 'Permitir a los participantes compartir su pantalla.';
$string['allow_broadcasting'] = 'Permitir la radiodifusión (Conmutador maestro)';
$string['allow_broadcasting_help'] = 'El interruptor principal maestro para todas las funciones de emisión. Si se desactiva, todas las demás opciones de emisión quedarán deshabilitadas.';
$string['allow_rtmp'] = 'Permitir transmisión RTMP';
$string['allow_rtmp_help'] = 'Permite a los moderadores transmitir la sesión en vivo a plataformas externas como YouTube, Facebook o Twitch. Perfecto para seminarios web públicos o conferencias de invitados.';
$string['allow_raise_hand'] = 'Permitir levantar la mano';
$string['allow_raise_hand_help'] = 'Permitir a los participantes levantar la mano.';
$string['admin_only_webcams'] = 'Solo cámaras web de administradores';
$string['admin_only_webcams_help'] = 'Solo permitir a los moderadores usar sus cámaras web.';
$string['allow_view_other_webcams'] = 'Permitir ver otras cámaras web';
$string['allow_view_other_webcams_help'] = 'Permitir a los participantes ver las cámaras web de otros participantes. Si está deshabilitado, solo verán las cámaras web de los moderadores.';
$string['allow_view_other_users_list'] = 'Permitir ver la lista de otros usuarios';
$string['allow_view_other_users_list_help'] = 'Permitir a los participantes ver la lista de otros participantes.';
$string['room_duration'] = 'Duración de la sala (minutos)';
$string['room_duration_help'] = 'Define cuánto tiempo puede permanecer abierta la sala antes de que se cierre automáticamente. Ingrese 0 si no desea establecer ningún límite de tiempo, permitiendo que la sala permanezca activa sin restricciones.';
$string['moderator_join_first'] = 'El moderador se une primero';
$string['moderator_join_first_help'] = 'Cuando está habilitado, la sesión no comenzará y nadie podrá unirse hasta que un moderador (como un profesor) se una primero. Los participantes permanecerán en la página de actividad de Moodle y no entrarán en la sala o en un área de espera. Esto es diferente de la opción Sala de espera, donde los usuarios aún pueden unirse y esperar.';
$string['enable_analytics'] = 'Habilitar análisis';
$string['enable_analytics_help'] = 'Rastrea los datos de participación y compromiso para la sesión. **Nota:** Esto debe estar habilitado si se establecen criterios de finalización.';
$string['allow_virtual_bg'] = 'Permitir fondos virtuales';
$string['allow_virtual_bg_help'] = 'Permite a los participantes difuminar su fondo o usar una imagen virtual. Ideal para mantener la privacidad de los estudiantes y garantizar una apariencia profesional en el aula.';
$string['auto_gen_user_id'] = 'Generar ID de usuario automáticamente';
$string['auto_gen_user_id_help'] = 'Cuando está habilitado, el sistema crea una nueva ID para que el mismo usuario pueda unirse desde múltiples dispositivos, por ejemplo, cuando un profesor se une desde una tableta para dibujar en la pizarra mientras usa una PC para la cámara y el micrófono; sin embargo, se <b>recomienda</b> mantener esto deshabilitado para que se use la ID de usuario de Moodle y se eviten uniones duplicadas.';

$string['allow_recording'] = 'Permitir grabación (interruptor maestro)';
$string['allow_recording_help'] = 'El interruptor maestro principal para todas las funciones de grabación. Si está deshabilitado, las opciones de grabación en la nube y local estarán ocultas para los moderadores.';
$string['allow_cloud_recording'] = 'Permitir grabación en la nube';
$string['allow_cloud_recording_help'] = 'Habilita la grabación en el servidor PlugNmeet. El video final se procesa y almacena en la nube, lo que facilita compartirlo a través de un enlace una vez que finaliza la sesión.';
$string['enable_auto_cloud_recording'] = 'Habilitar grabación automática en la nube';
$string['enable_auto_cloud_recording_help'] = 'Activa automáticamente la grabación en la nube en el momento en que el primer moderador se une a la sesión. Ideal para asegurar que ninguna conferencia se olvide.';
$string['allow_local_recording'] = 'Permitir grabación local';
$string['allow_local_recording_help'] = 'Permite grabar directamente en el ordenador. **Nota:** Requiere Google Chrome. Para capturar todo el audio de la sesión, el usuario debe compartir su "Pestaña de Chrome" y marcar la casilla "También compartir audio de la pestaña". El archivo se guarda localmente en el dispositivo una vez finalizado.';
$string['only_record_admin_webcams'] = 'Solo webcams de administrador de registros';
$string['only_record_admin_webcams_help'] = 'Si está activada, solo se incluirán las cámaras web de los administradores en la grabación.';

$string['allow_chat'] = 'Permitir chat (interruptor maestro global)';
$string['allow_chat_help'] = 'El interruptor maestro absoluto para todas las funciones de chat. Si está deshabilitado, toda el área de chat se eliminará para todos, incluidos los moderadores. No será posible el chat público o privado.';
$string['allow_file_upload'] = 'Permitir carga de archivos';
$string['allow_file_upload_help'] = 'Habilita la capacidad de compartir archivos dentro del chat. Esto requiere que el interruptor maestro "Permitir chat" esté activo.';

$string['allow_shared_notepad'] = 'Permitir bloc de notas compartido';
$string['allow_shared_notepad_help'] = 'Habilita un editor de texto colaborativo donde estudiantes y profesores pueden tomar notas en tiempo real juntos. Esto es perfecto para lluvias de ideas, coescritura o la creación de un resumen de clase compartido.';

$string['whiteboard_features'] = 'Características de la pizarra';
$string['allow_whiteboard'] = 'Permitir pizarra';
$string['allow_whiteboard_help'] = 'Desbloquea un espacio de dibujo interactivo para la sesión. Úselo para dibujar diagramas, resolver problemas matemáticos visualmente o permitir que los estudiantes anoten contenido compartido.';
$string['preload_file'] = 'Precargar archivo de presentación';
$string['preload_file_help'] = 'Le permite subir un documento PDF o de Office que se cargará automáticamente en la pizarra cuando comience la sesión. Esto asegura que su material de presentación esté listo para la clase de inmediato. <strong>Tamaño máximo de archivo: 5Mb</strong>';

$string['allowed_external_media_player'] = 'Permitir reproductor multimedia externo';
$string['allowed_external_media_player_help'] = 'Permite a los moderadores sincronizar y reproducir videos de fuentes como YouTube o Vimeo para toda la clase. Ideal para analizar clips educativos o ver documentales juntos sin retrasos en el ancho de banda.';

$string['activate_waiting_room'] = 'Activar sala de espera';
$string['activate_waiting_room_help'] = 'Habilitar la sala de espera para esta sesión.';
$string['waiting_room_msg'] = 'Mensaje de la sala de espera';
$string['waiting_room_msg_help'] = 'Este mensaje se muestra a los usuarios mientras esperan ser admitidos en la sala. Úselo para compartir instrucciones, expectativas o información útil antes de que comience la sesión.';

$string['allow_breakout_rooms'] = 'Permitir salas de grupos pequeños';
$string['allow_breakout_rooms_help'] = 'Permite a los moderadores dividir a los participantes en grupos más pequeños para discusiones enfocadas, proyectos colaborativos o actividades grupales privadas.';
$string['allowed_number_rooms'] = 'Máximo de salas de grupos pequeños';
$string['allowed_number_rooms_help'] = 'El número máximo de sub-salas que un moderador puede crear dentro de una sola sesión.';

$string['allow_display_external_link_features'] = 'Permitir compartir enlaces externos';
$string['allow_display_external_link_features_help'] = 'Permite a los moderadores mostrar contenido educativo externo, como actividades H5P, paquetes SCORM o sistemas de cuestionarios (por ejemplo, Kahoot), directamente a todos los participantes durante la sesión.';

$string['allow_ingress_features'] = 'Permitir entrada (transmisión externa)';
$string['allow_ingress_features_help'] = 'Permite a los profesores transmitir video de alta calidad a la sesión utilizando software externo como OBS a través de protocolos RTMP o WHIP. Esto es ideal para compartir contenido de video de alta resolución, sesiones pregrabadas o para evitar las limitaciones de carga del navegador.';

$string['allow_polls'] = 'Permitir encuestas';
$string['allow_polls_help'] = 'Permite a los moderadores crear encuestas interactivas y cuestionarios rápidos durante la sesión. Esta es una excelente manera de verificar la comprensión de los estudiantes y aumentar la participación.';

$string['sip_dial_in_features_is_allow'] = 'Permitir marcación SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permite a los participantes unirse a la sesión de audio a través de una llamada telefónica tradicional. Esto es esencial para los estudiantes con conexiones a Internet deficientes o aquellos que necesitan unirse mientras están en movimiento.';

$string['enable_end_to_end_encryption_features'] = 'Habilitar cifrado de extremo a extremo (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Proporciona una seguridad sólida al cifrar las transmisiones de video y audio entre los participantes. En este modo, el servidor genera y distribuye de forma segura una clave de cifrado única para la sesión.';
$string['enabled_self_insert_encryption_key'] = 'Permitir claves definidas por el participante';
$string['enabled_self_insert_encryption_key_help'] = 'Permite a los participantes introducir manualmente una clave secreta compartida, ofreciendo el más alto nivel de privacidad ya que el servidor nunca tiene acceso a las claves de cifrado. Es responsabilidad del anfitrión compartir el mismo secreto con todos los participantes; si se utilizan claves diferentes, los usuarios no podrán comunicarse entre sí. <strong>Nota:</strong> Cuando esta opción está habilitada, las funciones que requieren procesamiento de medios del lado del servidor (como grabación en la nube, transcripción y resumen de IA) se deshabilitarán automáticamente.';
$string['included_e2ee_chat_messages'] = 'Cifrar mensajes de chat';
$string['included_e2ee_chat_messages_help'] = 'Extiende el cifrado de extremo a extremo al chat de texto, asegurando que los mensajes solo sean legibles por los participantes en la sala.';
$string['included_e2ee_whiteboard'] = 'Cifrar datos de la pizarra';
$string['included_e2ee_whiteboard_help'] = 'Incluye todos los dibujos y anotaciones de la pizarra en la capa de cifrado de extremo a extremo para una privacidad total de los datos.';

$string['insights_features_is_allow'] = 'Permitir análisis de sesión (interruptor maestro)';
$string['insights_features_is_allow_help'] = 'El interruptor maestro principal para todas las funciones basadas en datos. Si está deshabilitado, todas las subopciones, incluida la transcripción, el asistente de IA y los informes de reuniones, no estarán disponibles.';
$string['insights_transcription_features_is_allow'] = 'Permitir transcripción en vivo';
$string['insights_transcription_features_is_allow_help'] = 'Habilita la conversión de voz a texto en tiempo real durante la sesión. Esto debe estar habilitado para que funcione la traducción de transcripciones o la síntesis de voz (TTS).';
$string['insights_transcription_features_is_allow_translation'] = 'Permitir traducción de transcripciones';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permite que la transcripción en vivo se traduzca a diferentes idiomas, apoyando a estudiantes internacionales y entornos multilingües.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Permitir síntesis de voz (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Habilita la conversión de texto a voz, permitiendo que la transcripción en vivo se lea en voz alta para una mejor accesibilidad y para participantes con discapacidad visual.';
$string['insights_chat_translation_features_is_allow'] = 'Permitir traducción de chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Habilita la traducción en tiempo real de mensajes de chat, permitiendo a los participantes comunicarse instantáneamente en diferentes idiomas.';
$string['insights_ai_features_is_allow'] = 'Permitir asistente de reunión de IA (interruptor maestro de IA)';
$string['insights_ai_features_is_allow_help'] = 'El interruptor maestro para todas las capacidades impulsadas por IA. Si está deshabilitado, las funciones específicas como el chat de IA y el resumen de reuniones se ocultarán, incluso si el análisis de sesión está activo.';
$string['insights_ai_text_chat_features_is_allow'] = 'Permitir asistente de chat de IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integra un asistente de IA directamente en el chat para ayudar a responder preguntas, explicar conceptos complejos y facilitar la discusión en grupo.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Permitir resumen de reunión de IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Genera automáticamente un resumen conciso de IA después de que finaliza la sesión, destacando los puntos educativos clave, las decisiones y las tareas de seguimiento.';

$string['lock_microphone'] = 'Bloquear micrófonos';
$string['lock_microphone_help'] = 'Silencia a todos los participantes por defecto al entrar. Solo los moderadores pueden reactivar el sonido o conceder permiso para hablar.';
$string['lock_webcam'] = 'Bloquear cámaras web';
$string['lock_webcam_help'] = 'Deshabilita las cámaras para todos los participantes por defecto. Útil para ahorrar ancho de banda o garantizar la privacidad de los estudiantes.';
$string['lock_screen_sharing'] = 'Bloquear compartir pantalla';
$string['lock_screen_sharing_help'] = 'Restringe la función de compartir pantalla solo a los moderadores. Evita que los participantes interrumpan con sus propias pantallas.';
$string['lock_whiteboard'] = 'Bloquear pizarra';
$string['lock_whiteboard_help'] = 'Restringe las herramientas de dibujo de la pizarra solo a los moderadores. Evita anotaciones no autorizadas por parte de los participantes.';
$string['lock_shared_notepad'] = 'Bloquear bloc de notas compartido';
$string['lock_shared_notepad_help'] = 'Deshabilita el bloc de notas colaborativo para que los participantes no puedan escribir fuera de tema o distraerse.';
$string['lock_chat'] = 'Bloquear chat público';
$string['lock_chat_help'] = 'Oculta o deshabilita completamente el área de chat público para todos los participantes.';
$string['lock_chat_send_message'] = 'Bloquear envío de mensajes';
$string['lock_chat_send_message_help'] = 'Permite a los participantes leer el chat, pero les impide enviar mensajes.';
$string['lock_chat_file_share'] = 'Bloquear compartir archivos';
$string['lock_chat_file_share_help'] = 'Impide que los participantes suban o compartan archivos dentro del área de chat.';
$string['lock_private_chat'] = 'Bloquear chat privado';
$string['lock_private_chat_help'] = 'Deshabilita la mensajería privada uno a uno entre los participantes. Nota: Los participantes aún pueden enviar mensajes privados a los moderadores para obtener ayuda o hacer preguntas.';

$string['completion_minutes'] = 'Minutos asistidos';
$string['completion_minutes_help'] = 'Requiere que el usuario esté en la sesión durante un cierto número de minutos.';
$string['completion_minutes_desc'] = 'El usuario debe asistir a la sesión durante al menos {$a} minutos.';
$string['completion_raised_hand'] = 'Mano levantada';
$string['completion_raised_hand_help'] = 'Requiere que el usuario levante la mano al menos 1 vez.';
$string['completion_chat_messages'] = 'Mensajes de chat enviados';
$string['completion_chat_messages_help'] = 'Requiere que el usuario envíe al menos 1 mensaje de chat.';
$string['completion_webcam_enabled'] = 'Cámara web habilitada';
$string['completion_webcam_enabled_help'] = 'Requiere que el usuario habilite su cámara web al menos una vez.';
$string['completion_webcam_duration'] = 'Duración de la cámara web habilitada (minutos)';
$string['completion_webcam_duration_help'] = 'Requiere que el usuario tenga su cámara web habilitada durante un cierto número de minutos.';
$string['completion_webcam_duration_desc'] = 'El usuario debe tener su cámara web habilitada durante al menos {$a} minutos.';
$string['completion_mic_enabled'] = 'Micrófono habilitado';
$string['completion_mic_enabled_help'] = 'Requiere que el usuario habilite su micrófono al menos una vez.';
$string['completion_mic_duration'] = 'Duración del micrófono habilitado (minutos)';
$string['completion_mic_duration_help'] = 'Requiere que el usuario tenga su micrófono habilitado durante un cierto número de minutos.';
$string['completion_mic_duration_desc'] = 'El usuario debe tener su micrófono habilitado durante al menos {$a} minutos.';
$string['completion_talk_duration'] = 'Duración de la conversación (minutos)';
$string['completion_talk_duration_help'] = 'Requiere que el usuario hable durante un cierto número de minutos.';
$string['completion_talk_duration_desc'] = 'El usuario debe hablar durante al menos {$a} minutos.';
$string['completion_poll_voted'] = 'Votó en la encuesta';
$string['completion_poll_voted_help'] = 'Requiere que el usuario vote en al menos una encuesta.';
$string['completion_whiteboard_annotated'] = 'Anotado en la pizarra';
$string['completion_whiteboard_annotated_help'] = 'Requiere que el usuario anote en la pizarra.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Almacena estadísticas de sesión para que los usuarios determinen la finalización de la actividad.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'La ID del usuario.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Datos de sesión codificados en JSON (minutos, mensajes de chat, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'La hora en que se actualizaron por última vez las estadísticas.';

// view.php
$string['join_session'] = 'Unirse a la sesión';
$string['start_session'] = 'Iniciar sesión';
$string['end_session'] = 'Finalizar sesión';
$string['participants'] = 'Participantes';
$string['is_recording'] = 'Está grabando';
$string['is_active'] = 'Está activo';
$string['room_info'] = 'Detalles de la sesión en vivo';
$string['participants_info'] = 'Participantes en vivo';
$string['room_id'] = 'ID de la sala';
$string['creation_time'] = 'Hora de creación';
$string['name'] = 'Nombre';
$string['user_id'] = 'ID de usuario';
$string['is_admin'] = 'Es administrador';
$string['is_presenter'] = 'Es presentador';
$string['joined_at'] = 'Se unió a las';
$string['moderator_not_joined'] = 'Un moderador debe iniciar la sesión antes de que usted pueda unirse.';
$string['session_available_from'] = 'Disponible desde: {$a}';
$string['session_available_until'] = 'Disponible hasta: {$a}';
$string['session_not_started_yet'] = 'Esta sesión aún no ha comenzado.';
$string['session_ended'] = 'Esta sesión ha finalizado.';
$string['client_files_missing'] = 'Faltan archivos de cliente (JS/CSS). Por favor, revise la configuración de su servidor PlugNmeet.';
$string['client_connection_error'] = 'Hubo un error al conectar con el servidor PlugNmeet: {$a}. Por favor, revise la configuración de su plugin.';
$string['allow_guest'] = 'Permitir usuarios invitados';
$string['allow_guest_help'] = 'Cuando está habilitado, se genera un enlace seguro para compartir para que usuarios externos (como profesores invitados o participantes sin una cuenta de Moodle) puedan unirse a la sesión; un administrador puede ver y compartir este enlace.';
$string['guest_join_link'] = 'Enlace de unión de invitado';
$string['guest_join_link_help'] = 'Comparta este enlace con participantes externos. Este enlace seguirá siendo válido durante {$a} horas. Cada recarga de página generará un nuevo enlace, pero los enlaces compartidos anteriormente seguirán siendo válidos hasta su hora de caducidad original.';
$string['copy_link'] = 'Copiar enlace';
$string['link_copied'] = 'Enlace copiado al portapapeles.';
$string['guest_join_title'] = 'Unirse a la reunión como invitado';
$string['enter_display_name'] = 'Introduzca su nombre de visualización';
$string['join_as_guest'] = 'Unirse a la reunión';
$string['guest_access_denied'] = 'El acceso de invitado no está habilitado para esta reunión.';
$string['invalid_guest_token'] = 'Token de unión de invitado inválido o caducado.';
$string['guest_link_expired'] = 'Este enlace de unión de invitado ha caducado.';
$string['error_joining_session'] = 'Hubo un error al unirse a la sesión: {$a}';
$string['already_logged_in'] = 'Ya ha iniciado sesión en Moodle. Puede unirse a la sesión directamente desde esta página de actividad.';
$string['total_webcams'] = 'Total de cámaras web';
$string['total_mics'] = 'Total de micrófonos';
$string['total_screen_shares'] = 'Total de pantallas compartidas';
$string['webcams'] = 'Cámaras web';
$string['mics'] = 'Micrófonos';
$string['screenshares'] = 'Pantallas compartidas';

// Events
$string['event_room_started'] = 'Sala iniciada';
$string['event_room_ended'] = 'Sala finalizada';
$string['event_room_created'] = 'Sala creada';
$string['event_session_ended'] = 'Sesión finalizada';
$string['event_participant_joined'] = 'Participante unido';
$string['event_participant_left'] = 'Participante salió';
$string['event_artifact_created'] = 'Artefacto creado';
$string['event_recording_proceeded'] = 'Grabación lista';
$string['event_plugin_error'] = 'Error de PlugNmeet';
$string['event_track_published'] = 'Pista publicada';
$string['event_track_unpublished'] = 'Pista no publicada';
$string['event_recording_started'] = 'Grabación iniciada';
$string['event_recording_ended'] = 'Grabación finalizada';
$string['event_rtmp_started'] = 'Transmisión RTMP iniciada';
$string['event_rtmp_ended'] = 'Transmisión RTMP finalizada';

// Notifications
$string['messageprovider:recording_ready'] = 'Notificaciones para grabaciones listas';
$string['messageprovider:artifact_ready'] = 'Notificaciones para artefactos listos';
$string['recording_ready_notification_subject'] = 'Grabación lista: {$a}';
$string['recording_ready_notification_fullmessage'] = 'La grabación de la sesión "{$a->roomname}" ya está lista y procesada. Puede verla aquí: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>La grabación de la sesión <strong>"{$a->roomname}"</strong> ya está lista y procesada.</p><p><a href="{$a->url}">Haga clic aquí para ver la grabación.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Grabación lista para {$a}';
$string['artifact_ready_notification_subject'] = 'Artefacto listo: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Un nuevo artefacto ({$a->type}) para la sesión "{$a->roomname}" ya está disponible. Puede verlo aquí: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Un nuevo artefacto ({$a->type}) para la sesión <strong>"{$a->roomname}"</strong> ya está disponible.</p><p><a href="{$a->url}">Haga clic aquí para ver los detalles del artefacto.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefacto listo para {$a}';

// recordings.php
$string['no_recordings'] = 'No se encontraron grabaciones.';
$string['recording_id'] = 'ID de grabación';
$string['room_sid'] = 'SID de la sala';
$string['file_size'] = 'Tamaño del archivo';
$string['created_at'] = 'Creado en';
$string['actions'] = 'Acciones';
$string['view'] = 'Ver';
$string['play'] = 'Reproducir';
$string['download'] = 'Descargar';
$string['delete'] = 'Eliminar';
$string['delete_confirm'] = '¿Está seguro de que desea eliminar esto?';
$string['delete_success'] = 'Eliminado correctamente.';
$string['recording_details'] = 'Detalles de la grabación';
$string['recording_creation_time'] = 'Hora de creación de la grabación';
$string['room_creation_time'] = 'Hora de creación de la sesión';
$string['back_to_list'] = 'Volver a la lista';
$string['browser_not_support_video'] = 'Su navegador no es compatible con la etiqueta de video.';
$string['room_title'] = 'Título de la sala';
$string['total_participants'] = 'Total de participantes';
$string['session_started_at'] = 'Sesión iniciada el';
$string['session_ended_at'] = 'Sesión finalizada el';

// artifacts.php
$string['no_artifacts'] = 'No se encontraron artefactos.';
$string['artifact_id'] = 'ID de artefacto';
$string['type'] = 'Tipo';
$string['artifact_details'] = 'Detalles del artefacto';
$string['no_permission'] = 'Usted no tiene permiso para ver esta página.';
$string['token_usage'] = 'Uso de tokens';
$string['duration_usage'] = 'Uso de duración';
$string['character_count_usage'] = 'Uso de recuento de caracteres';
$string['estimated_cost'] = 'Costo estimado';
$string['file_path'] = 'Ruta del archivo';
$string['mime_type'] = 'Tipo MIME';
$string['created_at'] = 'Creado en';
$string['meeting_summary'] = 'Resumen de la reunión';
$string['error_loading_meeting_summary'] = 'Error al cargar el resumen de la reunión: {$a}';

// Analytics strings
$string['download_excel_report'] = 'Descargar informe de Excel';
$string['download_raw_json'] = 'Descargar datos sin procesar';
$string['room_summary'] = 'Resumen de la sala';
$string['users_summary'] = 'Resumen de usuarios';
$string['see_excel_report'] = 'Ver informe de Excel para detalles';
$string['error_loading_analytics'] = 'Error al cargar los datos de análisis: {$a}';
$string['error_generating_excel'] = 'Error al generar el informe de Excel: {$a}';

$string['analytics_room_room_id'] = 'ID de la sala';
$string['analytics_room_room_title'] = 'Título de la sala';
$string['analytics_room_room_creation'] = 'Hora de creación de la sala';
$string['analytics_room_room_ended'] = 'Hora de finalización de la sala';
$string['analytics_room_room_duration'] = 'Duración de la sala';
$string['analytics_room_room_total_users'] = 'Total de participantes';
$string['analytics_room_enabled_e2ee'] = 'E2EE habilitado';
$string['analytics_room_recording_status'] = 'Recuento de estado de grabación';
$string['analytics_room_rtmp_status'] = 'Recuento de estado de RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Uso total del servicio de voz';
$string['analytics_room_external_media_player_status'] = 'Recuento de estado del reproductor multimedia externo';
$string['analytics_room_etherpad_status'] = 'Recuento de estado de Etherpad';
$string['analytics_room_external_display_link_status'] = 'Recuento de estado del enlace de visualización externa';
$string['analytics_room_ingress_created'] = 'Recuento de entradas creadas';
$string['analytics_room_breakout_room'] = 'Recuento de salas de grupos pequeños';

$string['analytics_user_name'] = 'Nombre';
$string['analytics_user_id'] = 'ID de usuario';
$string['analytics_user_ex_id'] = 'ID de usuario';
$string['analytics_user_is_admin'] = 'Es administrador';
$string['analytics_user_duration'] = 'Duración';
$string['analytics_user_joined'] = 'Se unió a las';
$string['analytics_user_left'] = 'Salió a las';
$string['analytics_user_mic_status'] = 'Cambios de estado del micrófono';
$string['analytics_user_mic_muted'] = 'Recuento de micrófonos silenciados';
$string['analytics_user_mic_duration'] = 'Duración del micrófono habilitado';
$string['analytics_user_talked'] = 'Recuento de conversaciones';
$string['analytics_user_talked_duration'] = 'Duración de la conversación';
$string['analytics_user_webcam_status'] = 'Cambios de estado de la cámara web';
$string['analytics_user_webcam_duration'] = 'Duración de la cámara web habilitada';
$string['analytics_user_raise_hand'] = 'Recuento de manos levantadas';
$string['analytics_user_voted_poll'] = 'Recuento de encuestas votadas';
$string['analytics_user_whiteboard_annotated'] = 'Recuento de anotaciones en la pizarra';
$string['analytics_user_whiteboard_files'] = 'Recuento de archivos de pizarra';
$string['analytics_user_screen_share_status'] = 'Cambios de estado de compartir pantalla';
$string['analytics_user_speech_services_usage'] = 'Uso de servicios de voz';
$string['analytics_user_public_chat'] = 'Mensajes de chat públicos';
$string['analytics_user_private_chat'] = 'Mensajes de chat privados';
$string['analytics_user_chat_files'] = 'Archivos de chat compartidos';
$string['analytics_user_interface_invisible'] = 'Recuento de interfaz invisible';
$string['analytics_user_connection_quality'] = 'Calidad de conexión';
$string['analytics_user_connection_quality_excellent'] = 'Excelente';
$string['analytics_user_connection_quality_good'] = 'Buena';
$string['analytics_user_connection_quality_poor'] = 'Pobre';

$string['users_info'] = 'Información de usuarios';
$string['polls'] = 'Encuestas';
$string['question'] = 'Pregunta';
$string['options'] = 'Opciones';
$string['file_name'] = 'Nombre del archivo';
$string['checkcompletiontask'] = 'Comprobar finalización de plugNmeet';

// attendance.php
$string['attendance_report'] = 'Informe de asistencia';
$string['status'] = 'Estado';
$string['present'] = 'Presente';
$string['absent'] = 'Ausente';
$string['incomplete'] = 'Incompleto';
$string['completed'] = 'Completado';
$string['minutes_attended'] = 'Minutos asistidos';
$string['last_updated'] = 'Última actualización';
$string['mic_duration'] = 'Duración del micrófono habilitado';
$string['webcam_duration'] = 'Duración de la cámara web habilitada';
$string['participation_progress'] = 'Progreso de participación';
$string['attendance_duration'] = 'Minutos asistidos';
$string['attendance_webcam_status'] = 'Cámara web habilitada';
$string['attendance_mic_status'] = 'Micrófono habilitado';
$string['attendance_talked_duration'] = 'Duración de la conversación';
$string['attendance_voted_poll'] = 'Votó en la encuesta';
$string['attendance_chat_messages'] = 'Mensajes de chat enviados';
$string['attendance_raise_hand'] = 'Mano levantada';
$string['attendance_webcam_duration'] = 'Duración de la cámara web habilitada';
$string['attendance_mic_duration'] = 'Duración del micrófono habilitado';
$string['attendance_whiteboard_annotated'] = 'Anotado en la pizarra';
$string['met'] = 'Cumplido';
$string['required'] = 'Requerido';

// Status codes
$string['status_unknown_status'] = 'Se devolvió un estado desconocido del servidor.';
$string['status_success'] = 'Operación completada con éxito.';
$string['status_permission_denied'] = 'Permiso denegado.';
$string['status_not_found'] = 'No se encontró {$a}.';
$string['status_conflict'] = 'Esta acción no pudo completarse debido a un conflicto (por ejemplo, la sala ya puede existir).';
$string['status_invalid_token_or_signature'] = 'El token o la firma de la solicitud no son válidos.';
$string['status_invalid_api_key'] = 'La clave de API proporcionada no es válida. Por favor, revise la configuración de su plugin.';
$string['status_internal_server_error'] = 'El servidor PlugNmeet encontró un error interno.';
$string['status_invalid_parameters'] = 'La información proporcionada no es válida.';
$string['status_missing_required_parameter'] = 'Falta información requerida.';
$string['status_room_not_found'] = 'La sala especificada no fue encontrada.';
$string['status_user_not_found'] = 'Cuenta de usuario no encontrada. Asegúrese de que sus credenciales de API sean correctas y su suscripción esté activa.';
$string['status_user_blocked'] = 'La cuenta de usuario está bloqueada. Por favor, póngase en contacto con el soporte.';
$string['status_user_not_active'] = 'La cuenta de usuario no está activa. Esto probablemente se deba a una suscripción inactiva o caducada.';
