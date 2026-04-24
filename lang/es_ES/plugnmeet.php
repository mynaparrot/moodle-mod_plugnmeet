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
$string['modulename_help'] = 'El módulo de actividad PlugNmeet le permite crear y gestionar sesiones de videoconferencia en tiempo real desde Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Administración de plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Agregar una nueva actividad de PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Eliminar artefactos';
$string['plugnmeet:deleterecording'] = 'Eliminar grabaciones';
$string['plugnmeet:downloadanalyticsreport'] = 'Descargar informe analítico';
$string['plugnmeet:downloadartifacts'] = 'Descargar artefactos';
$string['plugnmeet:downloadattendance'] = 'Descargar informe de asistencia';
$string['plugnmeet:downloadrecordings'] = 'Descargar grabaciones';
$string['plugnmeet:manage'] = 'Gestionar la configuración de PlugNmeet';
$string['plugnmeet:view'] = 'Ver la actividad de PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Ver informe de salas activas';
$string['plugnmeet:viewartifacts'] = 'Ver artefactos';
$string['plugnmeet:viewattendance'] = 'Ver informe de asistencia';
$string['plugnmeet:viewattendancelist'] = 'Ver lista de asistentes';
$string['plugnmeet:viewlivesessioninfo'] = 'Ver información de la sesión en directo';
$string['plugnmeet:viewrecordings'] = 'Ver grabaciones';
$string['plugnmeetfieldset'] = 'Conjunto de campos de ejemplo personalizado';
$string['plugnmeetname'] = 'Nombre de ejemplo personalizado';
$string['plugnmeetname_help'] = 'Ayuda con ejemplos personalizados';

// Admin Settings
$string['api_config'] = 'Configuración de la API';
$string['server_url'] = 'URL del servidor PlugNmeet';
$string['server_url_desc'] = 'La URL base de su servidor PlugNmeet (por ejemplo, https://pnm.example.com).';
$string['api_key'] = 'Clave API';
$string['api_key_desc'] = 'La clave API única proporcionada por su servidor PlugNmeet.';
$string['api_secret'] = 'Secreto de API';
$string['api_secret_desc'] = 'La clave secreta de la API proporcionada por su servidor PlugNmeet se utiliza para la autenticación segura.';
$string['guest_access_hdr'] = 'Configuración de acceso para invitados';
$string['allow_guest_global'] = 'Permitir el acceso de invitados a nivel mundial';
$string['allow_guest_global_desc'] = 'Funciona como un interruptor principal. Si está desactivado, los profesores no verán la opción para habilitar la participación de invitados al crear o editar actividades.';
$string['guest_link_expiration'] = 'Caducidad del enlace de invitado (horas)';
$string['guest_link_expiration_desc'] = 'Determina cuántas horas permanece activo un enlace de acceso para invitados después de que un profesor lo genere.';
$string['defaults'] = 'Inconvenientes técnicos';
$string['defaults_desc'] = 'Configuraciones técnicas predeterminadas aplicadas a cada nueva sesión de PlugNmeet.';
$string['enable_dynacast'] = 'Habilitar Dynacast';
$string['enable_dynacast_des'] = 'Optimiza el rendimiento pausando dinámicamente las capas de vídeo que no están siendo visualizadas por los participantes. Esto reduce significativamente el uso de CPU y ancho de banda del servidor. **Nota:** Esta función se activará automáticamente al usar códecs SVC (VP9/AV1) y es necesaria para la transmisión simultánea con múltiples códecs.';
$string['enable_simulcast'] = 'Habilitar la transmisión simultánea';
$string['enable_simulcast_des'] = 'Ofrece múltiples capas de calidad de vídeo para garantizar una experiencia fluida a los usuarios con conexiones débiles.';
$string['video_codec'] = 'Códec de vídeo';
$string['video_codec_des'] = 'El estándar de codificación para la transmisión de vídeo. **VP8** es recomendable para WebRTC, ya que ofrece el mejor equilibrio entre calidad y baja latencia. **Advertencia:** No todos los navegadores son compatibles con todos los códecs; asegúrese de que sus usuarios utilicen navegadores modernos si utiliza VP9 o H.265.';
$string['default_webcam_resolution'] = 'Resolución predeterminada de la cámara web';
$string['default_webcam_resolution_des'] = 'Configuración de resolución inicial para las cámaras de los participantes.';
$string['default_screen_share_resolution'] = 'Resolución predeterminada para compartir pantalla';
$string['default_screen_share_resolution_des'] = 'Configuración de resolución inicial para compartir pantalla.';
$string['default_audio_preset'] = 'Ajuste preestablecido de audio predeterminado';
$string['default_audio_preset_des'] = 'Perfil de calidad de audio optimizado para la sesión.';

$string['branding'] = 'Imagen de marca y personalización';
$string['custom_logo'] = 'Logotipo personalizado';
$string['custom_logo_des'] = 'Sube tu logotipo a la sala de reuniones. Si lo dejas en blanco, se utilizará el logotipo predeterminado de PlugNmeet.';
$string['custom_css_url'] = 'URL CSS personalizada';
$string['custom_css_url_des'] = 'Vincula un archivo .css externo para sobrescribir o personalizar los estilos de la interfaz.';
$string['primary_color'] = 'Color primario';
$string['primary_color_des'] = 'Color de acento principal utilizado para botones, estados activos y elementos resaltados.';
$string['secondary_color'] = 'Color secundario';
$string['secondary_color_des'] = 'El color de acento utilizado para los elementos secundarios de la interfaz de usuario.';
$string['background_color'] = 'color de fondo';
$string['background_color_des'] = 'El color de fondo principal de la interfaz.';
$string['background_image'] = 'Imagen de fondo';
$string['background_image_des'] = 'Fondo de pantalla. Para obtener mejores resultados, utilice una imagen de 1920x1080.';
$string['header_color'] = 'Color del encabezado';
$string['header_color_des'] = 'Color de fondo para la barra de navegación superior.';
$string['footer_color'] = 'Color del pie de página';
$string['footer_color_des'] = 'Color de fondo para la barra de herramientas inferior.';
$string['left_color'] = 'Color del lado izquierdo';
$string['left_color_des'] = 'Color de fondo para la barra lateral de navegación izquierda.';
$string['side_panel_bg_color'] = 'Color de fondo del panel lateral';
$string['side_panel_bg_color_des'] = 'Color de fondo para los paneles del lado derecho (Chat y Lista de participantes).';
$string['copyright_text'] = 'Texto de derechos de autor';
$string['copyright_text_des'] = 'El texto de la marca se muestra en el pie de página de la configuración. Se admite HTML para enlaces o estilos personalizados.';
$string['client_load'] = 'Método de carga del cliente';
$string['client_load_des'] = 'Seleccione **Remoto** (Recomendado) para una experiencia fluida y personalizada integrada directamente en su página de Moodle. Seleccione **Redireccionar** para usar la interfaz predeterminada de plugNmeet; tenga en cuenta que los usuarios abandonarán su sitio y es posible que no se aplique la personalización de marca.';
$string['remote'] = 'Remoto (integrado)';
$string['redirect'] = 'Redirigir al servidor';

$string['yes'] = 'Sí';
$string['no'] = 'No';
$string['recordings'] = "Grabaciones";
$string['recording'] = "Grabación";
$string['artifacts'] = "Objetos de la habitación";
$string['attendance'] = "Informe de asistencia";
$string['artifact'] = "Artefacto";
$string['room_subject'] = 'habitación';
$string['user_subject'] = 'usuario';
$string['activeroomsreport'] = 'Informe de habitaciones activas';
$string['noactiverooms'] = 'En este momento no hay habitaciones disponibles.';
$string['activerooms'] = 'Salas activas';
$string['loading'] = 'Cargando...';

// mod_form.php
$string['roomtitle'] = 'Título de la habitación';
$string['roomtitle_help'] = 'El nombre que se usa para la actividad de Moodle y el encabezado de la reunión en vivo. Ayuda a los estudiantes a identificar la sesión en su curso y dentro de la sala.';
$string['welcome_message'] = 'Mensaje de bienvenida';
$string['welcome_message_help'] = 'Cualquier texto que se escriba aquí aparecerá como el primer mensaje en el chat público cuando los usuarios se unan a la sala. Esto es útil para compartir instrucciones, enlaces o información importante con los participantes al entrar.';
$string['max_participants'] = 'Número máximo de participantes';
$string['max_participants_help'] = 'Establezca este valor para limitar la cantidad de usuarios que pueden unirse a la sesión simultáneamente. Si lo establece en 0, permitirá un número ilimitado de participantes, lo que significa que no habrá restricciones en cuanto a la cantidad de usuarios que pueden unirse.';
$string['room_features'] = 'Características de la habitación';
$string['recording_features'] = 'Características de grabación';
$string['chat_features'] = 'Funciones de chat';
$string['other_features'] = 'Otras características';
$string['e2ee_features'] = 'Cifrado de extremo a extremo';
$string['insights_features'] = 'Funciones de análisis e inteligencia artificial';
$string['defaultlock'] = 'Configuración de bloqueo predeterminada';
$string['advanced_completion'] = 'Finalización avanzada';
$string['available'] = 'Disponible en';
$string['available_help'] = 'Determina cuándo los participantes pueden comenzar a unirse a la sesión. Los usuarios no podrán ingresar a la sala antes de esta fecha y hora.';
$string['deadline'] = 'Disponible hasta';
$string['deadline_help'] = 'Determina la fecha y hora límite en que los participantes pueden acceder a la sesión. El acceso se bloqueará una vez transcurrido este plazo.';
$string['err_deadline_before_available'] = 'La fecha "Disponible hasta" no puede ser anterior a la fecha "Disponible desde".';
$string['error_analytics_required_for_completion'] = 'La opción "Habilitar análisis" debe estar marcada si se han establecido criterios de finalización.';

$string['allow_webcams'] = 'Permitir cámaras web';
$string['allow_webcams_help'] = 'Permitir a los participantes usar sus cámaras web.';
$string['mute_on_start'] = 'Silenciar al iniciar';
$string['mute_on_start_help'] = 'Silencia automáticamente a todos los participantes cuando se unan a la sesión.';
$string['allow_screen_share'] = 'Permitir compartir pantalla';
$string['allow_screen_share_help'] = 'Permitir que los participantes compartan su pantalla.';
$string['allow_rtmp'] = 'Permitir la transmisión RTMP';
$string['allow_rtmp_help'] = 'Permite a los moderadores transmitir la sesión en directo a plataformas externas como YouTube, Facebook o Twitch. Ideal para seminarios web públicos o conferencias de invitados.';
$string['allow_raise_hand'] = 'Permitir levantar la mano';
$string['allow_raise_hand_help'] = 'Permita que los participantes levanten la mano.';
$string['admin_only_webcams'] = 'Cámaras web solo para administradores';
$string['admin_only_webcams_help'] = 'Permitir únicamente que los moderadores utilicen sus cámaras web.';
$string['allow_view_other_webcams'] = 'Permitir ver otras cámaras web';
$string['allow_view_other_webcams_help'] = 'Permitir que los participantes vean las cámaras web de los demás participantes. Si esta opción está desactivada, solo verán las cámaras web de los moderadores.';
$string['allow_view_other_users_list'] = 'Permitir ver la lista de otros usuarios';
$string['allow_view_other_users_list_help'] = 'Permitir que los participantes vean la lista de los demás participantes.';
$string['room_duration'] = 'Duración de la sala (minutos)';
$string['room_duration_help'] = 'Define cuánto tiempo puede permanecer abierta la sala antes de que se cierre automáticamente. Introduce 0 si no deseas establecer ningún límite de tiempo, permitiendo que la sala permanezca activa sin restricciones.';
$string['moderator_join_first'] = 'Moderador Únete primero';
$string['moderator_join_first_help'] = 'Cuando está habilitada, la sesión no se iniciará y nadie podrá unirse hasta que un moderador (como un profesor) lo haga primero. Los participantes permanecerán en la página de la actividad de Moodle y no entrarán a la sala ni a la zona de espera. Esto es diferente de la opción de Sala de espera, donde los usuarios pueden unirse y esperar.';
$string['enable_analytics'] = 'Habilitar análisis';
$string['enable_analytics_help'] = 'Registra los datos de participación e interacción de la sesión. **Nota:** Esta opción debe estar habilitada si se han establecido criterios de finalización.';
$string['allow_virtual_bg'] = 'Permitir fondos virtuales';
$string['allow_virtual_bg_help'] = 'Permite a los participantes difuminar su fondo o usar una imagen virtual. Ideal para preservar la privacidad de los estudiantes y garantizar una apariencia profesional en el aula.';
$string['auto_gen_user_id'] = 'Generación automática de ID de usuario';
$string['auto_gen_user_id_help'] = 'Cuando está habilitado, el sistema crea un nuevo ID para que el mismo usuario pueda unirse desde varios dispositivos—por ejemplo, cuando un profesor se une desde una tableta para dibujar en la pizarra mientras usa un PC para la cámara y el micrófono; sin embargo, lo es <b>Recomendado</b> para mantener esto desactivado y así usar el ID de usuario de Moodle y evitar duplicados de la incorporación.';

$string['allow_recording'] = 'Permitir grabación (Interruptor principal)';
$string['allow_recording_help'] = 'El interruptor principal para todas las funciones de grabación. Si se desactiva, las opciones de grabación en la nube y local quedarán ocultas para los moderadores.';
$string['allow_cloud_recording'] = 'Permitir la grabación en la nube';
$string['allow_cloud_recording_help'] = 'Permite grabar en el servidor de PlugNmeet. El vídeo final se procesa y se almacena en la nube, lo que facilita compartirlo mediante un enlace una vez finalizada la sesión.';
$string['enable_auto_cloud_recording'] = 'Habilitar la grabación automática en la nube';
$string['enable_auto_cloud_recording_help'] = 'La grabación en la nube se activa automáticamente en el momento en que el primer moderador se une a la sesión. Ideal para garantizar que ninguna clase se pase por alto.';
$string['allow_local_recording'] = 'Permitir grabación local';
$string['allow_local_recording_help'] = 'Permite grabar directamente en el ordenador. **Nota:** Requiere Google Chrome. Para capturar todo el audio de la sesión, el usuario debe compartir su pestaña de Chrome y marcar la casilla «Compartir también el audio de la pestaña». El archivo se guarda localmente en el dispositivo una vez finalizada la grabación.';

$string['allow_chat'] = 'Permitir chat (Interruptor maestro global)';
$string['allow_chat_help'] = 'El interruptor principal para todas las funciones de chat. Si se desactiva, se elimina el área de chat para todos, incluidos los moderadores. No será posible chatear ni en público ni en privado.';
$string['allow_file_upload'] = 'Permitir la carga de archivos';
$string['allow_file_upload_help'] = 'Permite compartir archivos dentro del chat. Para ello, es necesario que el interruptor principal "Permitir chat" esté activado.';

$string['allow_shared_notepad'] = 'Permitir Bloc de notas compartido';
$string['allow_shared_notepad_help'] = 'Permite un editor de texto colaborativo donde estudiantes y profesores pueden tomar notas juntos en tiempo real. Es ideal para generar ideas, escribir en conjunto o elaborar un resumen de clase compartido.';

$string['whiteboard_features'] = 'Características de la pizarra blanca';
$string['allow_whiteboard'] = 'Permitir pizarra blanca';
$string['allow_whiteboard_help'] = 'Desbloquea un espacio de dibujo interactivo para la sesión. Úsalo para esbozar diagramas, resolver problemas matemáticos visualmente o permitir que los estudiantes anoten contenido compartido.';
$string['preload_file'] = 'Precargar archivo de presentación';
$string['preload_file_help'] = 'Te permite subir un PDF o un documento de Office que se cargará automáticamente en la pizarra cuando comience la sesión. Esto garantiza que tu material de presentación esté listo para la clase de inmediato. <strong>Tamaño máximo del archivo: 5 MB</strong>';

$string['allowed_external_media_player'] = 'Permitir reproductor multimedia externo';
$string['allowed_external_media_player_help'] = 'Permite a los moderadores sincronizar y reproducir vídeos de fuentes como YouTube o Vimeo para toda la clase. Ideal para analizar vídeos educativos o ver documentales juntos sin problemas de conexión.';

$string['activate_waiting_room'] = 'Activar la sala de espera';
$string['activate_waiting_room_help'] = 'Habilitar la sala de espera para esta sesión.';
$string['waiting_room_msg'] = 'Mensaje de la sala de espera';
$string['waiting_room_msg_help'] = 'Este mensaje se muestra a los usuarios mientras esperan para entrar en la sala. Úselo para compartir instrucciones, expectativas o información útil antes de que comience la sesión.';

$string['allow_breakout_rooms'] = 'Permitir salas de grupos';
$string['allow_breakout_rooms_help'] = 'Permite a los moderadores dividir a los participantes en grupos más pequeños para debates específicos, proyectos colaborativos o actividades grupales privadas.';
$string['allowed_number_rooms'] = 'Salas de grupos Max';
$string['allowed_number_rooms_help'] = 'El número máximo de subsalas que un moderador puede crear dentro de una sola sesión.';

$string['allow_display_external_link_features'] = 'Permitir compartir enlaces externos';
$string['allow_display_external_link_features_help'] = 'Permite a los moderadores mostrar contenido educativo externo, como actividades H5P, paquetes SCORM o sistemas de cuestionarios (por ejemplo, Kahoot), directamente a todos los participantes durante la sesión.';

$string['allow_ingress_features'] = 'Permitir el acceso (transmisión externa)';
$string['allow_ingress_features_help'] = 'Permite a los profesores transmitir vídeo de alta calidad a la sesión mediante software externo como OBS, utilizando los protocolos RTMP o WHIP. Esto resulta ideal para compartir contenido de vídeo de alta resolución, sesiones pregrabadas o para sortear las limitaciones de carga del navegador.';

$string['allow_polls'] = 'Permitir encuestas';
$string['allow_polls_help'] = 'Permite a los moderadores crear encuestas interactivas y cuestionarios rápidos durante la sesión. Es una excelente manera de comprobar la comprensión de los alumnos y aumentar su participación.';

$string['sip_dial_in_features_is_allow'] = 'Permitir la conexión por marcación SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permite a los participantes unirse a la sesión de audio mediante una llamada telefónica tradicional. Esto es fundamental para estudiantes con mala conexión a internet o para quienes necesitan conectarse mientras están fuera de casa.';

$string['enable_end_to_end_encryption_features'] = 'Habilitar el cifrado de extremo a extremo (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Proporciona la máxima seguridad mediante el cifrado de las transmisiones de vídeo y audio, de modo que ni siquiera el servidor puede acceder a ellas. Nota: Algunas funciones, como la grabación en el servidor, pueden verse limitadas cuando el cifrado de extremo a extremo está activado.';
$string['enabled_self_insert_encryption_key'] = 'Permitir claves definidas por el participante';
$string['enabled_self_insert_encryption_key_help'] = 'Permite a los participantes introducir manualmente una clave secreta compartida. Esto garantiza que el proveedor del servicio nunca tenga acceso a las claves de cifrado, ofreciendo así el máximo nivel de privacidad.';
$string['included_e2ee_chat_messages'] = 'Encriptar mensajes de chat';
$string['included_e2ee_chat_messages_help'] = 'Extiende el cifrado de extremo a extremo al chat de texto, garantizando que los mensajes solo puedan ser leídos por los participantes presentes en la sala.';
$string['included_e2ee_whiteboard'] = 'Encriptar datos de la pizarra';
$string['included_e2ee_whiteboard_help'] = 'Incluye todos los dibujos y anotaciones de la pizarra blanca en la capa de cifrado de extremo a extremo para una total privacidad de los datos.';

$string['insights_features_is_allow'] = 'Permitir información de sesión (Interruptor principal)';
$string['insights_features_is_allow_help'] = 'El interruptor principal para todas las funciones basadas en datos. Si se desactiva, todas las subopciones, incluidas Transcripción, Asistente de IA e Informes de reuniones, quedarán completamente inaccesibles.';
$string['insights_transcription_features_is_allow'] = 'Permitir transcripción en vivo';
$string['insights_transcription_features_is_allow_help'] = 'Permite la conversión de voz a texto en tiempo real durante la sesión. Esta función debe estar habilitada para que funcionen la transcripción, la traducción o la síntesis de voz (TTS).';
$string['insights_transcription_features_is_allow_translation'] = 'Permitir la transcripción y traducción';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permite traducir la transcripción en tiempo real a diferentes idiomas, lo que facilita la labor de los estudiantes internacionales y los entornos multilingües.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Permitir la síntesis de voz (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Permite la conversión de texto a voz, lo que posibilita que la transcripción en tiempo real se lea en voz alta para una mayor accesibilidad y para los participantes con discapacidad visual.';
$string['insights_chat_translation_features_is_allow'] = 'Permitir la traducción del chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Permite la traducción en tiempo real de los mensajes de chat, lo que posibilita que los participantes se comuniquen instantáneamente en diferentes idiomas.';
$string['insights_ai_features_is_allow'] = 'Permitir el asistente de reuniones con IA (interruptor maestro de IA)';
$string['insights_ai_features_is_allow_help'] = 'El interruptor principal para todas las funciones basadas en IA. Si se desactiva, ciertas funciones como el chat con IA y el resumen de reuniones se ocultarán, incluso si la función de información de sesión está activa.';
$string['insights_ai_text_chat_features_is_allow'] = 'Permitir el asistente de chat de IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integra un asistente de IA directamente en el chat para ayudar a responder preguntas, explicar conceptos complejos y facilitar la discusión en grupo.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Permitir la generación de resúmenes de reuniones mediante IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Genera automáticamente un resumen conciso mediante IA al finalizar la sesión, destacando los puntos clave de aprendizaje, las decisiones tomadas y las tareas de seguimiento.';

$string['lock_microphone'] = 'Micrófonos de bloqueo';
$string['lock_microphone_help'] = 'Al entrar, todos los participantes se silencian automáticamente. Solo los moderadores pueden reactivar el micrófono o conceder permiso para hablar.';
$string['lock_webcam'] = 'Bloquear cámaras web';
$string['lock_webcam_help'] = 'Desactiva las cámaras para todos los participantes de forma predeterminada. Útil para ahorrar ancho de banda o garantizar la privacidad de los estudiantes.';
$string['lock_screen_sharing'] = 'Compartir la pantalla de bloqueo';
$string['lock_screen_sharing_help'] = 'Restringe la función de compartir pantalla únicamente a los moderadores. Impide que los participantes interrumpan con sus propias pantallas.';
$string['lock_whiteboard'] = 'Pizarra blanca con candado';
$string['lock_whiteboard_help'] = 'Restringe el uso de las herramientas de dibujo de la pizarra solo a los moderadores. Impide que los participantes realicen anotaciones no autorizadas.';
$string['lock_shared_notepad'] = 'Bloquear el Bloc de notas compartido';
$string['lock_shared_notepad_help'] = 'Deshabilita el bloc de notas colaborativo para los participantes con el fin de evitar que escriban sobre temas ajenos a la conversación o que se produzcan distracciones.';
$string['lock_chat'] = 'Bloquear chat público';
$string['lock_chat_help'] = 'Oculta o desactiva por completo el área de chat público para todos los participantes.';
$string['lock_chat_send_message'] = 'Bloquear el envío de mensajes';
$string['lock_chat_send_message_help'] = 'Permite a los participantes leer el chat, pero les impide enviar mensajes.';
$string['lock_chat_file_share'] = 'Bloquear el uso compartido de archivos';
$string['lock_chat_file_share_help'] = 'Impide que los participantes suban o compartan archivos dentro del área de chat.';
$string['lock_private_chat'] = 'Bloquear chat privado';
$string['lock_private_chat_help'] = 'Deshabilita la mensajería privada individual entre participantes. Nota: Los participantes aún pueden enviar mensajes privados a los moderadores para solicitar ayuda o hacer preguntas.';

$string['completion_minutes'] = 'Minutos de asistencia';
$string['completion_minutes_help'] = 'Requerir que el usuario permanezca en la sesión durante un número determinado de minutos.';
$string['completion_minutes_desc'] = 'El usuario debe asistir a la sesión durante al menos {$a} minutos.';
$string['completion_raised_hand'] = 'Mano levantada';
$string['completion_raised_hand_help'] = 'Requerir que el usuario levante la mano al menos 1 vez.';
$string['completion_chat_messages'] = 'Mensajes de chat enviados';
$string['completion_chat_messages_help'] = 'Requerir que el usuario envíe al menos 1 mensaje de chat.';
$string['completion_webcam_enabled'] = 'Cámara web habilitada';
$string['completion_webcam_enabled_help'] = 'Requerir que el usuario active su cámara web al menos una vez.';
$string['completion_webcam_duration'] = 'Duración con la cámara web activada (minutos)';
$string['completion_webcam_duration_help'] = 'Requerir que el usuario mantenga su cámara web activada durante un número determinado de minutos.';
$string['completion_webcam_duration_desc'] = 'El usuario debe tener su cámara web activada durante al menos {$a} minutos.';
$string['completion_mic_enabled'] = 'Micrófono habilitado';
$string['completion_mic_enabled_help'] = 'Requerir que el usuario active su micrófono al menos una vez.';
$string['completion_mic_duration'] = 'Duración con el micrófono activado (minutos)';
$string['completion_mic_duration_help'] = 'Requerir que el usuario mantenga su micrófono activado durante un número determinado de minutos.';
$string['completion_mic_duration_desc'] = 'El usuario debe tener su micrófono activado durante al menos {$a} minutos.';
$string['completion_talk_duration'] = 'Duración de la charla (minutos)';
$string['completion_talk_duration_help'] = 'Exigir al usuario que hable durante un número determinado de minutos.';
$string['completion_talk_duration_desc'] = 'El usuario debe hablar durante al menos {$a} minutos.';
$string['completion_poll_voted'] = 'Votó en la encuesta';
$string['completion_poll_voted_help'] = 'Exigir al usuario que vote en al menos una encuesta.';
$string['completion_whiteboard_annotated'] = 'Anotado en la pizarra blanca';
$string['completion_whiteboard_annotated_help'] = 'Requerir que el usuario haga anotaciones en la pizarra blanca.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Almacena estadísticas de sesión para que los usuarios puedan determinar si la actividad ha finalizado.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'El ID del usuario.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Datos de sesión codificados en JSON (minutos, mensajes de chat, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'La hora en que se actualizaron las estadísticas por última vez.';

// view.php
$string['join_session'] = 'Unirse a la sesión';
$string['start_session'] = 'Iniciar sesión';
$string['end_session'] = 'Fin de la sesión';
$string['participants'] = 'Participantes';
$string['is_recording'] = '¿Está grabando?';
$string['is_active'] = 'Está activo';
$string['room_info'] = 'Detalles de la sesión en vivo';
$string['participants_info'] = 'Participantes en vivo';
$string['room_id'] = 'ID de la habitación';
$string['creation_time'] = 'Tiempo de creación';
$string['name'] = 'Nombre';
$string['user_id'] = 'ID de usuario';
$string['is_admin'] = '¿Es administrador?';
$string['is_presenter'] = '¿Es presentador?';
$string['joined_at'] = 'Se unió en';
$string['moderator_not_joined'] = 'Un moderador debe iniciar la sesión antes de que puedas unirte.';
$string['session_available_from'] = 'Disponible en: {$a}';
$string['session_available_until'] = 'Disponible hasta: {$a}';
$string['session_not_started_yet'] = 'Esta sesión aún no ha comenzado.';
$string['session_ended'] = 'Esta sesión ha finalizado.';
$string['allow_guest'] = 'Permitir usuarios invitados';
$string['allow_guest_help'] = 'Cuando está habilitada, se genera un enlace seguro que se puede compartir para que los usuarios externos (como profesores invitados o participantes sin una cuenta de Moodle) puedan unirse a la sesión; un administrador puede ver y compartir este enlace.';
$string['guest_join_link'] = 'Enlace para unirse como invitado';
$string['guest_join_link_help'] = 'Comparte este enlace con participantes externos. Este enlace permanecerá válido durante {$a} horas. Cada vez que se recargue la página se generará un nuevo enlace, pero los enlaces compartidos previamente seguirán siendo válidos hasta su fecha de caducidad original.';
$string['copy_link'] = 'Copiar enlace';
$string['link_copied'] = 'Enlace copiado al portapapeles.';
$string['guest_join_title'] = 'Unirse a la reunión como invitado';
$string['enter_display_name'] = 'Introduce tu nombre de usuario';
$string['join_as_guest'] = 'Unirse a la reunión';
$string['guest_access_denied'] = 'El acceso de invitados no está habilitado para esta reunión.';
$string['invalid_guest_token'] = 'Token de acceso de invitado no válido o caducado.';
$string['guest_link_expired'] = 'Este enlace para unirse como invitado ha caducado.';
$string['error_joining_session'] = 'Se produjo un error al unirse a la sesión: {$a}';
$string['already_logged_in'] = 'Ya has iniciado sesión en Moodle. Puedes unirte a la sesión directamente desde esta página de actividad.';
$string['total_webcams'] = 'Cámaras web totales';
$string['total_mics'] = 'Micrófonos totales';
$string['total_screen_shares'] = 'Pantallas compartidas totales';
$string['webcams'] = 'Cámaras web';
$string['mics'] = 'Micrófonos';
$string['screenshares'] = 'Compartir pantalla';

// Events
$string['event_room_started'] = 'La habitación comenzó';
$string['event_room_ended'] = 'La habitación terminó';
$string['event_room_created'] = 'Habitación creada';
$string['event_session_ended'] = 'Finalizó la sesión';
$string['event_participant_joined'] = 'El participante se unió';
$string['event_participant_left'] = 'El participante se fue';
$string['event_artifact_created'] = 'Artefacto creado';
$string['event_recording_proceeded'] = 'Grabación lista';
$string['event_plugin_error'] = 'Error de PlugNmeet';
$string['event_track_published'] = 'Pista publicada';
$string['event_track_unpublished'] = 'Pista no publicada';
$string['event_recording_started'] = 'La grabación ha comenzado.';
$string['event_recording_ended'] = 'La grabación ha finalizado.';
$string['event_rtmp_started'] = 'Transmisión RTMP iniciada';
$string['event_rtmp_ended'] = 'Finalizó la transmisión RTMP';

// Notifications
$string['messageprovider:recording_ready'] = 'Notificaciones de grabaciones listas';
$string['messageprovider:artifact_ready'] = 'Notificaciones de artefactos listos';
$string['recording_ready_notification_subject'] = 'Grabación lista: {$a}';
$string['recording_ready_notification_fullmessage'] = 'La grabación de la sesión "{$a->roomname}" ya está lista y procesada. Puedes verla aquí: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>La grabación de la sesión <strong>"{$a->roomname}"</strong> ya está lista y procesada.</p><p><a href="{$a->url}">Haga clic aquí para ver la grabación.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Grabación lista para {$a}';
$string['artifact_ready_notification_subject'] = 'Artefacto listo: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Ya está disponible un nuevo artefacto ({$a->type}) para la sesión "{$a->roomname}". Puedes verlo aquí: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Un nuevo artefacto ({$a->type}) para la sesión <strong>"{$a->roomname}"</strong> ya está disponible.</p><p><a href="{$a->url}">Haga clic aquí para ver los detalles del artefacto.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefacto listo para {$a}';

// recordings.php
$string['no_recordings'] = 'No se encontraron grabaciones.';
$string['recording_id'] = 'ID de grabación';
$string['room_sid'] = 'Sala SID';
$string['file_size'] = 'Tamaño del archivo';
$string['created_at'] = 'Creado en';
$string['actions'] = 'Comportamiento';
$string['view'] = 'Vista';
$string['play'] = 'Jugar';
$string['download'] = 'Descargar';
$string['delete'] = 'Borrar';
$string['delete_confirm'] = '¿Estás seguro de que quieres eliminar esto?';
$string['delete_success'] = 'Eliminado correctamente.';
$string['recording_details'] = 'Detalles de la grabación';
$string['recording_creation_time'] = 'Hora de creación de la grabación';
$string['room_creation_time'] = 'Hora de creación de la sesión';
$string['back_to_list'] = 'Volver a la lista';
$string['browser_not_support_video'] = 'Tu navegador no admite la etiqueta de vídeo.';
$string['room_title'] = 'Título de la habitación';
$string['total_participants'] = 'Total de participantes';
$string['session_started_at'] = 'La sesión comenzó a las';
$string['session_ended_at'] = 'La sesión finalizó a las';

// artifacts.php
$string['no_artifacts'] = 'No se encontraron artefactos.';
$string['artifact_id'] = 'ID del artefacto';
$string['type'] = 'Tipo';
$string['artifact_details'] = 'Detalles del artefacto';
$string['no_permission'] = 'No tienes permiso para ver esta página.';
$string['token_usage'] = 'Uso del token';
$string['duration_usage'] = 'Duración de uso';
$string['character_count_usage'] = 'Uso del recuento de caracteres';
$string['estimated_cost'] = 'Costo estimado';
$string['file_path'] = 'Ruta del archivo';
$string['mime_type'] = 'Tipo MIME';
$string['created_at'] = 'Creado en';

// Analytics strings
$string['download_excel_report'] = 'Descargar informe de Excel';
$string['download_raw_json'] = 'Descargar datos sin procesar';
$string['room_summary'] = 'Resumen de la habitación';
$string['users_summary'] = 'Resumen para usuarios';
$string['see_excel_report'] = 'Consulte el informe de Excel para obtener más detalles.';
$string['error_loading_analytics'] = 'Error al cargar los datos analíticos: {$a}';
$string['error_generating_excel'] = 'Error al generar el informe de Excel: {$a}';

$string['analytics_room_room_id'] = 'ID de la habitación';
$string['analytics_room_room_title'] = 'Título de la habitación';
$string['analytics_room_room_creation'] = 'Tiempo de creación de la habitación';
$string['analytics_room_room_ended'] = 'Hora de finalización de la habitación';
$string['analytics_room_room_duration'] = 'Duración de la habitación';
$string['analytics_room_room_total_users'] = 'Total de participantes';
$string['analytics_room_enabled_e2ee'] = 'E2EE habilitado';
$string['analytics_room_recording_status'] = 'Recuento de estado de registro';
$string['analytics_room_rtmp_status'] = 'Recuento de estado RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Uso total del servicio de voz';
$string['analytics_room_external_media_player_status'] = 'Recuento de estado del reproductor multimedia externo';
$string['analytics_room_etherpad_status'] = 'Recuento de estado de Etherpad';
$string['analytics_room_external_display_link_status'] = 'Recuento de estado de enlace de visualización externa';
$string['analytics_room_ingress_created'] = 'Recuento de entradas creadas';
$string['analytics_room_breakout_room'] = 'Recuento de salas de grupos';

$string['analytics_user_name'] = 'Nombre';
$string['analytics_user_id'] = 'ID de usuario';
$string['analytics_user_ex_id'] = 'ID de usuario';
$string['analytics_user_is_admin'] = '¿Es administrador?';
$string['analytics_user_duration'] = 'Duración';
$string['analytics_user_joined'] = 'Se unió en';
$string['analytics_user_left'] = 'A la izquierda';
$string['analytics_user_mic_status'] = 'Cambios en el estado del micrófono';
$string['analytics_user_mic_muted'] = 'Número de veces que el micrófono ha estado silenciado';
$string['analytics_user_mic_duration'] = 'Duración con micrófono activado';
$string['analytics_user_talked'] = 'Contador hablado';
$string['analytics_user_talked_duration'] = 'Duración de la conversación';
$string['analytics_user_webcam_status'] = 'Cambios en el estado de la cámara web';
$string['analytics_user_webcam_duration'] = 'Duración con la cámara web activada';
$string['analytics_user_raise_hand'] = 'Conteo de manos levantadas';
$string['analytics_user_voted_poll'] = 'Recuento de votos';
$string['analytics_user_whiteboard_annotated'] = 'Recuento anotado en la pizarra blanca';
$string['analytics_user_whiteboard_files'] = 'Recuento de archivos de pizarra blanca';
$string['analytics_user_screen_share_status'] = 'Cambios en el estado de la pantalla compartida';
$string['analytics_user_speech_services_usage'] = 'Uso de servicios de voz';
$string['analytics_user_public_chat'] = 'Mensajes de chat público';
$string['analytics_user_private_chat'] = 'Mensajes de chat privados';
$string['analytics_user_chat_files'] = 'Archivos de chat compartidos';
$string['analytics_user_interface_invisible'] = 'Recuento invisible de interfaz';
$string['analytics_user_connection_quality'] = 'Calidad de la conexión';
$string['analytics_user_connection_quality_excellent'] = 'Excelente';
$string['analytics_user_connection_quality_good'] = 'Bien';
$string['analytics_user_connection_quality_poor'] = 'Pobre';

$string['users_info'] = 'Información del usuario';
$string['polls'] = 'Centro';
$string['question'] = 'Pregunta';
$string['options'] = 'Opciones';
$string['file_name'] = 'Nombre del archivo';
$string['checkcompletiontask'] = 'Comprueba la finalización de plugNmeet';

// attendance.php
$string['attendance_report'] = 'Informe de asistencia';
$string['status'] = 'Estado';
$string['present'] = 'Presente';
$string['absent'] = 'Ausente';
$string['incomplete'] = 'Incompleto';
$string['completed'] = 'Terminado';
$string['minutes_attended'] = 'Minutos de asistencia';
$string['last_updated'] = 'Última actualización';
$string['mic_duration'] = 'Duración con micrófono activado';
$string['webcam_duration'] = 'Duración con la cámara web activada';
$string['participation_progress'] = 'Progreso de la participación';
$string['attendance_duration'] = 'Minutos de asistencia';
$string['attendance_webcam_status'] = 'Cámara web habilitada';
$string['attendance_mic_status'] = 'Micrófono habilitado';
$string['attendance_talked_duration'] = 'Duración de la charla';
$string['attendance_voted_poll'] = 'Votó en la encuesta';
$string['attendance_chat_messages'] = 'Mensajes de chat enviados';
$string['attendance_raise_hand'] = 'Mano levantada';
$string['attendance_webcam_duration'] = 'Duración con la cámara web activada';
$string['attendance_mic_duration'] = 'Duración con micrófono activado';
$string['attendance_whiteboard_annotated'] = 'Anotado en la pizarra blanca';
$string['met'] = 'Conocí';
$string['required'] = 'Requerido';

// Status codes
$string['status_unknown_status'] = 'El servidor devolvió un estado desconocido.';
$string['status_success'] = 'Operación finalizada con éxito.';
$string['status_permission_denied'] = 'Permiso denegado.';
$string['status_not_found'] = 'No se encontró {$a}.';
$string['status_conflict'] = 'Esta acción no se pudo completar debido a un conflicto (por ejemplo, la habitación ya puede existir).';
$string['status_invalid_token_or_signature'] = 'El token o la firma de la solicitud no son válidos.';
$string['status_invalid_api_key'] = 'La clave API proporcionada no es válida. Por favor, revise la configuración de su plugin.';
$string['status_internal_server_error'] = 'El servidor PlugNmeet ha encontrado un error interno.';
$string['status_invalid_parameters'] = 'La información proporcionada no es válida.';
$string['status_missing_required_parameter'] = 'Falta información necesaria.';
$string['status_room_not_found'] = 'No se encontró la habitación indicada.';
$string['status_user_not_found'] = 'No se encontró la cuenta de usuario. Asegúrese de que sus credenciales de API sean correctas y de que su suscripción esté activa.';
$string['status_user_blocked'] = 'La cuenta de usuario está bloqueada. Póngase en contacto con el servicio de asistencia.';
$string['status_user_not_active'] = 'La cuenta de usuario no está activa. Esto probablemente se deba a una suscripción inactiva o caducada.';
