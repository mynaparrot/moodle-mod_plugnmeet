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
$string['server_url_desc'] = 'La URL base de tu servidor PlugNmeet (por ejemplo, https://pnm.example.com).';
$string['api_key'] = 'Clave API';
$string['api_key_desc'] = 'La clave API única proporcionada por tu servidor PlugNmeet.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'El secreto de la API proporcionado por tu servidor PlugNmeet se utiliza para la autenticación segura.';
$string['guest_access_hdr'] = 'Configuración de acceso a invitados';
$string['allow_guest_global'] = 'Permitir el acceso de invitados a nivel global';
$string['allow_guest_global_desc'] = 'Actúa como un interruptor maestro. Si está deshabilitado, los profesores no verán la opción de habilitar la participación de invitados al crear o editar actividades.';
$string['guest_link_expiration'] = 'Caducidad del enlace de invitado (horas)';
$string['guest_link_expiration_desc'] = 'Determina cuántas horas permanece activo un enlace de acceso para invitados después de que un profesor lo genere.';
$string['defaults'] = 'Valores Técnicos por Defecto';
$string['defaults_desc'] = 'Las configuraciones técnicas predeterminadas se aplican a cada nueva sesión de PlugNetet.';
$string['enable_dynacast'] = 'Habilitar Dynacast';
$string['enable_dynacast_des'] = 'Optimiza el rendimiento pausando dinámicamente las capas de vídeo que no están siendo vistas por los participantes. Esto reduce significativamente el uso de CPU y ancho de banda en el lado del servidor. **Nota:** Esto se habilitará automáticamente si se usan códecs SVC (VP9/AV1) y es necesario para la simulcast multicódec.';
$string['enable_simulcast'] = 'Habilitar la emisión simultánea';
$string['enable_simulcast_des'] = 'Ofrece múltiples capas de calidad de vídeo para garantizar una experiencia fluida para los usuarios con conexiones débiles.';
$string['video_codec'] = 'Códec de vídeo';
$string['video_codec_des'] = 'El estándar de codificación para la transmisión de vídeo. **VP8** se recomienda para WebRTC, ya que ofrece el mejor equilibrio entre calidad y baja latencia. **Advertencia:** No todos los navegadores soportan todos los códecs; asegúrate de que tus usuarios estén en navegadores modernos si usas VP9 o H.265.';
$string['default_webcam_resolution'] = 'Resolución predeterminada de cámara web';
$string['default_webcam_resolution_des'] = 'La configuración inicial de resolución para las cámaras participantes.';
$string['default_screen_share_resolution'] = 'Resolución predeterminada de compartición de pantalla';
$string['default_screen_share_resolution_des'] = 'La configuración inicial de resolución para compartir pantalla.';
$string['default_audio_preset'] = 'Preajuste de audio predeterminado';
$string['default_audio_preset_des'] = 'El perfil de calidad de audio está optimizado para la sesión.';

$string['branding'] = 'Imagen y personalización';
$string['custom_logo'] = 'Logotipo personalizado';
$string['custom_logo_des'] = 'Sube tu logo a la sala de reuniones. Si se deja en blanco, se utilizará el logo predeterminado de PlugNmeet.';
$string['custom_css_url'] = 'URL CSS personalizada';
$string['custom_css_url_des'] = 'Enlaza un archivo .css externo para sobrescribir o personalizar los estilos de la interfaz.';
$string['primary_color'] = 'Color primario';
$string['primary_color_des'] = 'Color principal de acento usado para botones, estados activos y luces.';
$string['secondary_color'] = 'Color secundario';
$string['secondary_color_des'] = 'El color de acento usado para los elementos secundarios de la interfaz.';
$string['background_color'] = 'Color de fondo';
$string['background_color_des'] = 'El color de fondo principal de la interfaz.';
$string['background_image'] = 'Imagen de fondo';
$string['background_image_des'] = 'Fondo de pantalla. Para obtener los mejores resultados, utiliza una imagen de 1920x1080.';
$string['header_color'] = 'Color del encabezado';
$string['header_color_des'] = 'Color de fondo en la barra de navegación superior.';
$string['footer_color'] = 'Color del pie de página';
$string['footer_color_des'] = 'Color de fondo para la barra de herramientas inferior.';
$string['left_color'] = 'Color del lado izquierdo';
$string['left_color_des'] = 'Color de fondo para la barra lateral de navegación a la izquierda.';
$string['side_panel_bg_color'] = 'Color de fondo del panel lateral';
$string['side_panel_bg_color_des'] = 'Color de fondo para los paneles del lado derecho (Chat y lista de participantes).';
$string['copyright_text'] = 'Texto de derechos de autor';
$string['copyright_text_des'] = 'Texto de marca mostrado en el pie de página de la configuración. HTML está compatible con enlaces o estilos personalizados.';
$string['client_load'] = 'Método de carga del cliente';
$string['client_load_des'] = 'Elige **Remoto** (Recomendado) para una experiencia fluida y con marca integrada directamente en tu página de Moodle. Elige **Redirección** para usar la interfaz predeterminada de plugNmeet; Ten en cuenta que los usuarios abandonarán tu sitio y puede que la marca personalizada no se aplique.';
$string['remote'] = 'Remoto (Embebido)';
$string['redirect'] = 'Redirección al servidor';

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
$string['roomtitle_help'] = 'El nombre usado para la actividad de Moodle y el encabezado de la reunión en directo. Ayuda a los estudiantes a identificar la sesión en su curso y dentro del aula.';
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
$string['available_help'] = 'Determina cuándo los participantes pueden empezar a unirse a la sesión. Los usuarios no podrán entrar en la sala antes de esa fecha y hora.';
$string['deadline'] = 'Disponible hasta';
$string['deadline_help'] = 'Determina la fecha y hora finales en que los participantes podrán acceder a la sesión. El acceso quedará bloqueado una vez que pase este plazo.';
$string['err_deadline_before_available'] = 'La fecha de "Disponible hasta" no puede ser anterior a la de "Disponible desde".';
$string['error_analytics_required_for_completion'] = 'Debe comprobarse Habilitar Analytics si se han establecido criterios de finalización.';

$string['allow_webcams'] = 'Permitir cámaras web';
$string['allow_webcams_help'] = 'Permite que los participantes usen sus webcams.';
$string['mute_on_start'] = 'Muda al arrancar';
$string['mute_on_start_help'] = 'Silencia automáticamente a todos los participantes cuando se unan a la sesión.';
$string['allow_screen_share'] = 'Permitir compartir pantalla';
$string['allow_screen_share_help'] = 'Permite que los participantes compartan su pantalla.';
$string['allow_rtmp'] = 'Permitir la transmisión RTMP';
$string['allow_rtmp_help'] = 'Permite a los moderadores retransmitir la sesión en directo a plataformas externas como YouTube, Facebook o Twitch. Perfecto para webinars públicos o conferencias invitadas.';
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
$string['enable_analytics_help'] = 'Hace un seguimiento de los datos de participación y participación durante la sesión. **Nota:** Esto debe activarse si se activan los criterios de Completación.';
$string['allow_virtual_bg'] = 'Permitir fondos virtuales';
$string['allow_virtual_bg_help'] = 'Permite a los participantes difuminar su fondo o usar una imagen virtual. Ideal para mantener la privacidad de los estudiantes y asegurar una apariencia profesional en el aula.';
$string['auto_gen_user_id'] = 'Generación automática del ID de usuario';
$string['auto_gen_user_id_help'] = 'Cuando está habilitado, el sistema crea un nuevo ID para que el mismo usuario pueda unirse desde varios dispositivos—por ejemplo, cuando un profesor se une desde una tableta para dibujar en la pizarra mientras usa un PC para la cámara y el micrófono; sin embargo, lo es <b>Recomendado</b> para mantener esto desactivado y así usar el ID de usuario de Moodle y evitar duplicados de la incorporación.';

$string['allow_recording'] = 'Permitir grabación (Interruptor maestro)';
$string['allow_recording_help'] = 'El interruptor maestro principal para todas las funciones de grabación. Si se desactiva, tanto las opciones de grabación en la nube como las locales estarán ocultas para los moderadores.';
$string['allow_cloud_recording'] = 'Permitir la grabación en la nube';
$string['allow_cloud_recording_help'] = 'Permite la grabación en el servidor PlugNmeet. El vídeo final se procesa y almacena en la nube, lo que facilita su intercambio mediante un enlace una vez finalizada la sesión.';
$string['enable_auto_cloud_recording'] = 'Activar la grabación automática en la nube';
$string['enable_auto_cloud_recording_help'] = 'Activa automáticamente la grabación en la nube en el momento en que el primer moderador se une a la sesión. Ideal para asegurarse de que ninguna clase magistral se olvide.';
$string['allow_local_recording'] = 'Permitir grabación local';
$string['allow_local_recording_help'] = 'Permite grabar directamente en el ordenador. **Nota:** Requiere Google Chrome. Para capturar todo el audio de la sesión, el usuario debe compartir su "Chrome Tab" y marcar la casilla "También compartir audio de la tabulación". El archivo se guarda localmente en el dispositivo una vez terminado.';

$string['allow_chat'] = 'Permitir chat (Cambio maestro global)';
$string['allow_chat_help'] = 'El interruptor maestro absoluto para todas las funciones de chat. Si se desactiva, se elimina toda la zona de chat para todos, incluidos los moderadores. No será posible charlar público ni privado.';
$string['allow_file_upload'] = 'Permitir la subida de archivos';
$string['allow_file_upload_help'] = 'Permite compartir archivos dentro del chat. Esto requiere que el interruptor maestro "Permitir chat" esté activo.';

$string['allow_shared_notepad'] = 'Permitir bloc de notas compartido';
$string['allow_shared_notepad_help'] = 'Permite un editor de texto colaborativo donde estudiantes y profesores pueden tomar notas en tiempo real juntos. Esto es perfecto para hacer lluvia de ideas, co-escribir o crear un resumen compartido de clase.';

$string['allow_whiteboard'] = 'Permitir pizarra';
$string['allow_whiteboard_help'] = 'Desbloquea un espacio de dibujo interactivo para la sesión. Úsalo para dibujar diagramas, resolver problemas matemáticos visualmente o dejar que los estudiantes anoten contenido compartido.';

$string['allowed_external_media_player'] = 'Permitir reproductor multimedia externo';
$string['allowed_external_media_player_help'] = 'Permite a los moderadores sincronizar y reproducir vídeos de fuentes como YouTube o Vimeo para toda la clase. Ideal para analizar clips educativos o ver documentales juntos sin retardo en el ancho de banda.';

$string['activate_waiting_room'] = 'Activar la sala de espera';
$string['activate_waiting_room_help'] = 'Activa la sala de espera para esta sesión.';
$string['waiting_room_msg'] = 'Mensaje de la sala de espera';
$string['waiting_room_msg_help'] = 'Este mensaje se muestra a los usuarios mientras esperan ser admitidos en la sala. Úsalo para compartir instrucciones, expectativas o información útil antes de que empiece la sesión.';

$string['allow_breakout_rooms'] = 'Permitir salas de grupo';
$string['allow_breakout_rooms_help'] = 'Permite a los moderadores dividir a los participantes en grupos más pequeños para discusiones específicas, proyectos colaborativos o actividades grupales privadas.';
$string['allowed_number_rooms'] = 'Salas de Descanso Max';
$string['allowed_number_rooms_help'] = 'El número máximo de subsalas que un moderador puede crear en una sola sesión.';

$string['allow_display_external_link_features'] = 'Permitir el intercambio de enlaces externos';
$string['allow_display_external_link_features_help'] = 'Permite a los moderadores mostrar contenido educativo externo—como actividades H5P, paquetes SCORM o sistemas de cuestionarios (por ejemplo, Kahoot)—directamente a todos los participantes durante la sesión.';

$string['allow_ingress_features'] = 'Permitir entrada (streaming externo)';
$string['allow_ingress_features_help'] = 'Permite a los profesores emitir vídeo de alta calidad en la sesión utilizando software externo como OBS mediante protocolos RTMP o WHIP. Esto es ideal para compartir contenido de vídeo de alta resolución, sesiones pregrabadas o para saltarse las limitaciones de subida del navegador.';

$string['allow_polls'] = 'Permitir Votaciones';
$string['allow_polls_help'] = 'Permite a los moderadores crear encuestas interactivas y cuestionarios rápidos durante la sesión. Esta es una excelente manera de comprobar la comprensión del alumnado y aumentar la implicación.';

$string['sip_dial_in_features_is_allow'] = 'Permitir la entrada de marcación SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permite a los participantes unirse a la sesión de audio mediante una llamada telefónica tradicional. Esto es esencial para estudiantes con malas conexiones a internet o para quienes necesitan unirse mientras están en movimiento.';

$string['enable_end_to_end_encryption_features'] = 'Habilitar el cifrado de extremo a extremo (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Proporciona máxima seguridad cifrando los flujos de vídeo y audio para que ni siquiera el servidor pueda acceder a ellos. Nota: Algunas funciones como la grabación en el servidor pueden estar limitadas cuando E2EE está activo.';
$string['enabled_self_insert_encryption_key'] = 'Permitir claves definidas por participantes';
$string['enabled_self_insert_encryption_key_help'] = 'Permite a los participantes introducir manualmente una clave secreta compartida. Esto garantiza que el proveedor de servicios nunca tenga acceso a las claves de cifrado, ofreciendo el máximo nivel de privacidad.';
$string['included_e2ee_chat_messages'] = 'Encriptar mensajes de chat';
$string['included_e2ee_chat_messages_help'] = 'Extiende el cifrado de extremo a extremo al chat de texto, asegurando que los mensajes solo sean legibles por los participantes en la sala.';
$string['included_e2ee_whiteboard'] = 'Cifrar datos de pizarra blanca';
$string['included_e2ee_whiteboard_help'] = 'Incluye todos los dibujos y anotaciones en pizarra blanca en la capa de cifrado de extremo a extremo para una privacidad total de los datos.';

$string['insights_features_is_allow'] = 'Permitir Insights de Sesión (Master Switch)';
$string['insights_features_is_allow_help'] = 'El interruptor maestro principal para todas las funciones basadas en datos. Si se desactiva, todas las subopciones —incluyendo Transcripción, Asistente de IA e Informes de Reuniones— estarán completamente indisponibles.';
$string['insights_transcription_features_is_allow'] = 'Permitir transcripción en directo';
$string['insights_transcription_features_is_allow_help'] = 'Permite la conversión de voz a texto en tiempo real durante la sesión. Esto debe estar habilitado para que la traducción por transcripción o la síntesis de voz (TTS) funcionen.';
$string['insights_transcription_features_is_allow_translation'] = 'Permitir la traducción de transcripción';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permite traducir la transcripción en vivo a diferentes idiomas, apoyando a estudiantes internacionales y entornos multilingües.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Permitir la síntesis de voz (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Permite la conversión de texto a voz, permitiendo que la transcripción en directo sea leída en voz alta para una mejor accesibilidad y para los participantes con discapacidad visual.';
$string['insights_chat_translation_features_is_allow'] = 'Permitir la traducción del chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Permite la traducción en tiempo real de los mensajes de chat, permitiendo que los participantes se comuniquen instantáneamente entre diferentes idiomas.';
$string['insights_ai_features_is_allow'] = 'Permitir asistente de reuniones con IA (Interruptor maestro de IA)';
$string['insights_ai_features_is_allow_help'] = 'El interruptor maestro para todas las capacidades impulsadas por IA. Si se desactiva, funciones específicas como el chat con IA y el resumen de reuniones quedarán ocultas, incluso si Session Insights está activo.';
$string['insights_ai_text_chat_features_is_allow'] = 'Permitir el asistente de chat con IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integra un asistente de IA directamente en el chat para ayudar a responder preguntas, explicar conceptos complejos y facilitar la discusión en grupo.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Permitir la Resumen de Reuniones de IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Genera automáticamente un resumen conciso de IA al finalizar la sesión, destacando puntos educativos clave, decisiones y tareas de seguimiento.';

$string['lock_microphone'] = 'Bloquear micrófonos';
$string['lock_microphone_help'] = 'Silencia a todos los participantes por defecto al entrar. Solo los moderadores pueden desactivar el silencio o conceder permiso para hablar.';
$string['lock_webcam'] = 'Cámaras web de bloqueo';
$string['lock_webcam_help'] = 'Desactiva las cámaras para todos los participantes por defecto. Útil para ahorrar ancho de banda o garantizar la privacidad de los estudiantes.';
$string['lock_screen_sharing'] = 'Compartición de pantalla de bloqueo';
$string['lock_screen_sharing_help'] = 'Restringe el compartir pantalla solo a los moderadores. Evita que los participantes interrumpan con sus propias pantallas.';
$string['lock_whiteboard'] = 'Bloquear pizarra blanca';
$string['lock_whiteboard_help'] = 'Restringe las herramientas de dibujo en pizarra blanca solo a los moderadores. Previene anotaciones no autorizadas por parte de los participantes.';
$string['lock_shared_notepad'] = 'Bloquear el bloc de notas compartido';
$string['lock_shared_notepad_help'] = 'Desactiva el bloc de notas colaborativo para los participantes y así evitar escrituras fuera de tema o distracciones.';
$string['lock_chat'] = 'Bloquear chat público';
$string['lock_chat_help'] = 'Oculta o desactiva completamente el área de chat pública de todos los participantes.';
$string['lock_chat_send_message'] = 'Mensajes de envío de candados';
$string['lock_chat_send_message_help'] = 'Permite a los participantes leer el chat, pero les impide enviar mensajes.';
$string['lock_chat_file_share'] = 'Bloqueo de Intercambio de Archivos';
$string['lock_chat_file_share_help'] = 'Impide que los participantes suban o compartan archivos dentro del área de chat.';
$string['lock_private_chat'] = 'Bloquear chat privado';
$string['lock_private_chat_help'] = 'Desactiva la mensajería privada 1 a 1 entre los participantes. Nota: Los participantes pueden seguir enviando mensajes privados a los moderadores para pedir ayuda o preguntas.';

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
