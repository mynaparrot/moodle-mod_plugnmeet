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
$string['modulename_help'] = 'O módulo de atividades PlugNmeet permite-lhe criar e gerir sessões de webconferência em tempo real a partir do próprio Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'administração plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Adicionar uma nova atividade PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Eliminar artefactos';
$string['plugnmeet:deleterecording'] = 'Apagar gravações';
$string['plugnmeet:downloadanalyticsreport'] = 'Descarregar relatório analítico';
$string['plugnmeet:downloadartifacts'] = 'Descarregar artefactos';
$string['plugnmeet:downloadattendance'] = 'Descarregar o relatório de assiduidade';
$string['plugnmeet:downloadrecordings'] = 'Descarregar gravações';
$string['plugnmeet:manage'] = 'Gerir as definições do PlugNmeet';
$string['plugnmeet:view'] = 'Ver atividade PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Ver artefactos';
$string['plugnmeet:viewattendance'] = 'Ver relatório de assiduidade';
$string['plugnmeet:viewattendancelist'] = 'Ver lista de assistências';
$string['plugnmeet:viewlivesessioninfo'] = 'Ver informações da sessão em direto';
$string['plugnmeet:viewrecordings'] = 'Ver gravações';
$string['plugnmeetfieldset'] = 'Conjunto de campos de exemplo personalizado';
$string['plugnmeetname'] = 'Nome de exemplo personalizado';
$string['plugnmeetname_help'] = 'Ajuda com exemplos personalizados';

// Admin Settings
$string['api_config'] = 'Configuração da API';
$string['server_url'] = 'URL do servidor PlugNmeet';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'Chave API';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server used for secure authentication.';
$string['guest_access_hdr'] = 'Definições de Acesso a Convidados';
$string['allow_guest_global'] = 'Permitir o Acesso de Convidados Globalmente';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = 'Expiração do Link de Convidados (horas)';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = 'Padrões Técnicos';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = 'Ativar o Dynacast';
$string['enable_dynacast_des'] = 'Optimizes performance by dynamically pausing video layers that are not being viewed by participants. This significantly reduces server-side CPU and bandwidth usage. **Note:** This will be automatically enabled if using SVC codecs (VP9/AV1) and is required for multi-codec simulcast.';
$string['enable_simulcast'] = 'Ativar Simulcast';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = 'Códec de Vídeo';
$string['video_codec_des'] = 'The encoding standard for video transmission. **VP8** is recommended for WebRTC as it provides the best balance of quality and low latency. **Warning:** Not all browsers support every codec; ensure your users are on modern browsers if using VP9 or H.265.';
$string['default_webcam_resolution'] = 'Resolução padrão da webcam';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = 'Resolução padrão de partilha de ecrã';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = 'Predefinição de áudio padrão';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = 'Branding e Personalização';
$string['custom_logo'] = 'Logótipo Personalizado';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'URL CSS personalizado';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = 'Cor primária';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = 'Cor secundária';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = 'Cor de fundo';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = 'Imagem de fundo';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = 'Cor do cabeçalho';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = 'Cor do rodapé';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = 'Cor do lado esquerdo';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = 'Cor de fundo do painel lateral';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = 'Texto de Direitos de Autor';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = 'Sim';
$string['no'] = 'Não';
$string['recordings'] = "Gravações";
$string['recording'] = "Gravação";
$string['artifacts'] = "Artefactos da Sala";
$string['attendance'] = "Relatório de Assiduidade";
$string['artifact'] = "Artefacto";
$string['room_subject'] = 'Quarto';
$string['user_subject'] = 'utilizador';

// mod_form.php
$string['roomtitle'] = 'Título da Sala';
$string['roomtitle_help'] = 'The name used for the Moodle activity and the live meeting header. It helps students identify the session in their course and inside the room.';
$string['welcome_message'] = 'Mensagem de boas-vindas';
$string['welcome_message_help'] = 'Qualquer texto introduzido aqui aparecerá como a primeira mensagem no chat público quando os utilizadores entrarem na sala. Isto é útil para partilhar instruções, links ou informações importantes com os participantes à medida que entram.';
$string['max_participants'] = 'Max Participantes';
$string['max_participants_help'] = 'Defina este valor para limitar quantos utilizadores podem juntar-se à sessão ao mesmo tempo. Defina para 0 para permitir participantes ilimitados, o que significa que não há restrição sobre quantos utilizadores podem aderir.';
$string['room_features'] = 'Características da Sala';
$string['recording_features'] = 'Funcionalidades de Gravação';
$string['chat_features'] = 'Funcionalidades de Chat';
$string['other_features'] = 'Outras Características';
$string['e2ee_features'] = 'Encriptação de ponta a ponta';
$string['insights_features'] = 'Insights & Funcionalidades de IA';
$string['defaultlock'] = 'Definições de Fechadura Padrão';
$string['advanced_completion'] = 'Conclusão Avançada';
$string['available'] = 'Disponível em';
$string['available_help'] = 'Determines when participants can start joining the session. Users will not be able to enter the room before this date and time.';
$string['deadline'] = 'Disponível até';
$string['deadline_help'] = 'Determines the final date and time that participants can access the session. Access will be blocked once this deadline passes.';
$string['err_deadline_before_available'] = 'A data de "Disponível até" não pode ser anterior à data de "Disponível a partir de".';
$string['error_analytics_required_for_completion'] = 'O Enable Analytics deve ser verificado se existem critérios de conclusão definidos.';

$string['allow_webcams'] = 'Permitir Webcams';
$string['allow_webcams_help'] = 'Permitir que os participantes usem as suas webcams.';
$string['mute_on_start'] = 'Mude no início';
$string['mute_on_start_help'] = 'Silencia automaticamente todos os participantes quando se juntam à sessão.';
$string['allow_screen_share'] = 'Permitir partilha de ecrã';
$string['allow_screen_share_help'] = 'Permitir que os participantes partilhem o seu ecrã.';
$string['allow_rtmp'] = 'Permitir Streaming RTMP';
$string['allow_rtmp_help'] = 'Enables moderators to broadcast the live session to external platforms like YouTube, Facebook, or Twitch. Perfect for public webinars or guest lectures.';
$string['allow_raise_hand'] = 'Permitir Levantar a Mão';
$string['allow_raise_hand_help'] = 'Permitir que os participantes levantem a mão.';
$string['admin_only_webcams'] = 'Webcams apenas para administradores';
$string['admin_only_webcams_help'] = 'Só permitem que os moderadores usem as suas webcams.';
$string['allow_view_other_webcams'] = 'Permitir Ver Outras Webcams';
$string['allow_view_other_webcams_help'] = 'Permitir que os participantes vejam as webcams de outros participantes. Se desativados, só verão as webcams dos moderadores.';
$string['allow_view_other_users_list'] = 'Permitir Ver Lista de Outros Utilizadores';
$string['allow_view_other_users_list_help'] = 'Permitir que os participantes vejam a lista dos outros participantes.';
$string['room_duration'] = 'Duração da Sala (minutos)';
$string['room_duration_help'] = 'Define quanto tempo a sala pode permanecer aberta antes de fechar automaticamente. Introduza 0 se não quiser definir nenhum limite de tempo, permitindo que a sala permaneça ativa sem restrições.';
$string['moderator_join_first'] = 'Moderador Junte-se Primeiro';
$string['moderator_join_first_help'] = 'Quando ativada, a sessão não começa e ninguém pode entrar até que um moderador (como um professor) entre primeiro. Os participantes permanecerão na página de atividades do Moodle e não entrarão na sala nem numa sala de espera. Isto é diferente da opção Sala de Espera, onde os utilizadores ainda podem entrar e esperar.';
$string['enable_analytics'] = 'Ativar Análise';
$string['enable_analytics_help'] = 'Tracks participation and engagement data for the session. **Note:** This must be enabled if any Completion criteria are set.';
$string['allow_virtual_bg'] = 'Permitir Fundos Virtuais';
$string['allow_virtual_bg_help'] = 'Enables participants to blur their background or use a virtual image. Great for maintaining student privacy and ensuring a professional classroom appearance.';
$string['auto_gen_user_id'] = 'Gerar Automaticamente ID de Utilizador';
$string['auto_gen_user_id_help'] = 'Quando ativado, o sistema cria um novo ID para que o mesmo utilizador possa juntar-se a partir de vários dispositivos — por exemplo, quando um professor entra a partir de um tablet para desenhar no quadro branco enquanto usa um PC para a câmara e o microfone; no entanto, é <b>recomendado</b> para manter isto desligado, de modo a usar o ID de utilizador do Moodle e evitar juntas duplicadas.';

$string['allow_recording'] = 'Allow Recording (Master Switch)';
$string['allow_recording_help'] = 'The primary master switch for all recording features. If disabled, both Cloud and Local recording options will be hidden from moderators.';
$string['allow_cloud_recording'] = 'Permitir Gravação na Nuvem';
$string['allow_cloud_recording_help'] = 'Enables recording on the PlugNmeet server. The final video is processed and stored in the cloud, making it easy to share via a link once the session ends.';
$string['enable_auto_cloud_recording'] = 'Ativar Gravação Automática na Nuvens';
$string['enable_auto_cloud_recording_help'] = 'Automatically triggers the cloud recording the moment the first moderator joins the session. Ideal for ensuring no lecture is forgotten.';
$string['allow_local_recording'] = 'Permitir Gravação Local';
$string['allow_local_recording_help'] = 'Allows recording directly to the computer. **Note:** Requires Google Chrome. To capture all session audio, the user must share their "Chrome Tab" and check the "Also share tab audio" box. The file is saved locally to the device once finished.';

$string['allow_chat'] = 'Allow Chat (Global Master Switch)';
$string['allow_chat_help'] = 'The absolute master switch for all chat functions. If disabled, the entire chat area is removed for everyone, including moderators. No public or private chat will be possible.';
$string['allow_file_upload'] = 'Permitir Upload de Ficheiros';
$string['allow_file_upload_help'] = 'Enables the ability to share files within the chat. This requires the "Allow Chat" master switch to be active.';

$string['allow_shared_notepad'] = 'Permitir bloco de notas partilhado';
$string['allow_shared_notepad_help'] = 'Enables a collaborative text editor where students and teachers can take real-time notes together. This is perfect for brainstorming, co-writing, or building a shared class summary.';

$string['allow_whiteboard'] = 'Permitir Quadro de Comunicações';
$string['allow_whiteboard_help'] = 'Unlocks an interactive drawing space for the session. Use it for sketching diagrams, solving math problems visually, or letting students annotate shared content.';

$string['allowed_external_media_player'] = 'Allow External Media Player';
$string['allowed_external_media_player_help'] = 'Allows moderators to sync and play videos from sources like YouTube or Vimeo for the whole class. Ideal for analyzing educational clips or watching documentaries together without bandwidth lag.';

$string['activate_waiting_room'] = 'Ativar a Sala de Espera';
$string['activate_waiting_room_help'] = 'Ativa a sala de espera para esta sessão.';
$string['waiting_room_msg'] = 'Mensagem na Sala de Espera';
$string['waiting_room_msg_help'] = 'Esta mensagem é mostrada aos utilizadores enquanto aguardam para serem admitidos na sala. Use-o para partilhar instruções, expectativas ou informações úteis antes do início da sessão.';

$string['allow_breakout_rooms'] = 'Permitir Salas de Descanso';
$string['allow_breakout_rooms_help'] = 'Enables moderators to split participants into smaller groups for focused discussions, collaborative projects, or private group activities.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'The maximum number of sub-rooms a moderator can create within a single session.';

$string['allow_display_external_link_features'] = 'Allow External Link Sharing';
$string['allow_display_external_link_features_help'] = 'Allows moderators to display external educational content—such as H5P activities, SCORM packages, or quiz systems (e.g., Kahoot)—directly to all participants during the session.';

$string['allow_ingress_features'] = 'Allow Ingress (External Streaming)';
$string['allow_ingress_features_help'] = 'Allows teachers to broadcast high-quality video into the session using external software like OBS via RTMP or WHIP protocols. This is ideal for sharing high-resolution video content, pre-recorded sessions, or bypassing browser upload limitations.';

$string['allow_polls'] = 'Permitir Eleições';
$string['allow_polls_help'] = 'Enables moderators to create interactive polls and quick quizzes during the session. This is a great way to check student understanding and increase engagement.';

$string['sip_dial_in_features_is_allow'] = 'Permitir SIP Dial-in';
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
$string['insights_transcription_features_is_allow_translation'] = 'Permitir tradução por transcrição';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allows the live transcript to be translated into different languages, supporting international students and multi-lingual environments.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Speech Synthesis (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Enables Text-to-Speech, allowing the live transcript to be read aloud for better accessibility and for visually impaired participants.';
$string['insights_chat_translation_features_is_allow'] = 'Permitir Tradução do Chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Enables real-time translation of chat messages, allowing participants to communicate instantly across different languages.';
$string['insights_ai_features_is_allow'] = 'Allow AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'The master switch for all AI-powered capabilities. If disabled, specific features like AI Chat and Meeting Summarization will be hidden, even if Session Insights is active.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integrates an AI assistant directly into the chat to help answer questions, explain complex concepts, and facilitate group discussion.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Permitir o Resumo de Reuniões por IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Automatically generates a concise AI summary after the session ends, highlighting key educational points, decisions, and follow-up tasks.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Mutes all participants by default upon entry. Only moderators can unmute or grant permission to speak.';
$string['lock_webcam'] = 'Lock Webcams';
$string['lock_webcam_help'] = 'Disables cameras for all participants by default. Useful for saving bandwidth or ensuring student privacy.';
$string['lock_screen_sharing'] = 'Partilha do Ecrã de Bloqueio';
$string['lock_screen_sharing_help'] = 'Restricts screen sharing to moderators only. Prevents participants from interrupting with their own screens.';
$string['lock_whiteboard'] = 'Bloquear quadro branco';
$string['lock_whiteboard_help'] = 'Restricts whiteboard drawing tools to moderators only. Prevents unauthorized annotations by participants.';
$string['lock_shared_notepad'] = 'Bloquear o bloco de notas partilhado';
$string['lock_shared_notepad_help'] = 'Disables the collaborative notepad for participants to prevent off-topic writing or distractions.';
$string['lock_chat'] = 'Lock Public Chat';
$string['lock_chat_help'] = 'Completely hides or disables the public chat area for all participants.';
$string['lock_chat_send_message'] = 'Lock Sending Messages';
$string['lock_chat_send_message_help'] = 'Allows participants to read the chat, but prevents them from sending any messages.';
$string['lock_chat_file_share'] = 'Lock File Sharing';
$string['lock_chat_file_share_help'] = 'Prevents participants from uploading or sharing files within the chat area.';
$string['lock_private_chat'] = 'Bloquear o Chat Privado';
$string['lock_private_chat_help'] = 'Disables 1-on-1 private messaging between participants. Note: Participants can still send private messages to moderators for help or questions.';

$string['completion_minutes'] = 'Atas Assistidas';
$string['completion_minutes_help'] = 'Exigir que o utilizador esteja na sessão durante um determinado número de minutos.';
$string['completion_minutes_desc'] = 'O utilizador deve assistir à sessão pelo menos {$a} minutos.';
$string['completion_raised_hand'] = 'Mão Levantada';
$string['completion_raised_hand_help'] = 'Exija que o utilizador levante a mão pelo menos uma vez.';
$string['completion_chat_messages'] = 'Mensagens de Chat Enviadas';
$string['completion_chat_messages_help'] = 'Exigir que o utilizador envie pelo menos 1 mensagem de chat.';
$string['completion_webcam_enabled'] = 'Webcam Ativada';
$string['completion_webcam_enabled_help'] = 'Exigir que o utilizador ative a sua webcam pelo menos uma vez.';
$string['completion_webcam_duration'] = 'Duração Ativada por Webcam (minutos)';
$string['completion_webcam_duration_help'] = 'Exigir que o utilizador tenha a webcam ativada durante um certo número de minutos.';
$string['completion_webcam_duration_desc'] = 'O utilizador deve ter a webcam ativada pelo menos {$a} minutos.';
$string['completion_mic_enabled'] = 'Microfone Ativado';
$string['completion_mic_enabled_help'] = 'Exigir que o utilizador ative o microfone pelo menos uma vez.';
$string['completion_mic_duration'] = 'Duração do Microfone Ativado (minutos)';
$string['completion_mic_duration_help'] = 'Exigir que o utilizador tenha o microfone ativado durante um determinado número de minutos.';
$string['completion_mic_duration_desc'] = 'O utilizador deve ter o microfone ativado pelo menos {$a} minutos.';
$string['completion_talk_duration'] = 'Duração da Conversa (minutos)';
$string['completion_talk_duration_help'] = 'Exija que o utilizador fale durante um determinado número de minutos.';
$string['completion_talk_duration_desc'] = 'O utilizador deve falar pelo menos durante {$a} minutos.';
$string['completion_poll_voted'] = 'Votado na Votação';
$string['completion_poll_voted_help'] = 'Exigir que o utilizador vote em pelo menos uma votação.';
$string['completion_whiteboard_annotated'] = 'Anotado no quadro branco';
$string['completion_whiteboard_annotated_help'] = 'Exigir que o utilizador anote no quadro branco.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Armazena estatísticas de sessão para que os utilizadores possam determinar a conclusão da atividade.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'O ID do utilizador.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Dados de sessão codificados em JSON (atas, mensagens de chat, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'A data em que as estatísticas foram atualizadas pela última vez.';

// view.php
$string['join_session'] = 'Junta-te à Sessão';
$string['start_session'] = 'Início da Sessão';
$string['end_session'] = 'Fim da Sessão';
$string['participants'] = 'Participantes';
$string['is_recording'] = 'Está a gravar';
$string['is_active'] = 'Está Ativo';
$string['room_info'] = 'Detalhes da Sessão ao Vivo';
$string['participants_info'] = 'Participantes ao Vivo';
$string['room_id'] = 'ID do quarto';
$string['creation_time'] = 'Tempo de Criação';
$string['name'] = 'Nome';
$string['user_id'] = 'ID de utilizador';
$string['is_admin'] = 'É Admin';
$string['is_presenter'] = 'É Apresentador';
$string['joined_at'] = 'Juntaram-se a';
$string['moderator_not_joined'] = 'Um moderador deve iniciar a sessão antes de poder aderir.';
$string['session_available_from'] = 'Disponível em: {$a}';
$string['session_available_until'] = 'Disponível até: {$a}';
$string['session_not_started_yet'] = 'Esta sessão ainda não começou.';
$string['session_ended'] = 'Esta sessão terminou.';
$string['allow_guest'] = 'Permitir Utilizadores Convidados';
$string['allow_guest_help'] = 'Quando ativado, é gerado um link partilhado seguro para que utilizadores externos (como professores convidados ou participantes sem conta Moodle) possam juntar-se à sessão; Um administrador pode ver e partilhar este link.';
$string['guest_join_link'] = 'Link de Participação Convidada';
$string['guest_join_link_help'] = 'Partilhe este link com participantes externos. Este link continuará válido para {$a} horas. Cada recarregamento da página gera um novo link, mas os links anteriormente partilhados permanecerão válidos até à sua expiração original.';
$string['copy_link'] = 'Copiar o link';
$string['link_copied'] = 'Link copiou para a prancheta.';
$string['guest_join_title'] = 'Junte-se à Reunião como Convidado';
$string['enter_display_name'] = 'Introduza o seu nome de exibição';
$string['join_as_guest'] = 'Junta-te à Reunião';
$string['guest_access_denied'] = 'O acesso de convidados não está ativado para esta reunião.';
$string['invalid_guest_token'] = 'Token de entrada de convidado inválido ou expirado.';
$string['guest_link_expired'] = 'Este link de entrada de convidados expirou.';
$string['error_joining_session'] = 'Houve um erro na entrada da sessão: {$a}';
$string['already_logged_in'] = 'Já está ligado ao Moodle. Pode juntar-se diretamente à sessão a partir desta página de atividades.';
$string['total_webcams'] = 'Webcams totais';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Total de Partilhas de Ecrã';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Microfones';
$string['screenshares'] = 'Partilhas de Ecrã';

// Events
$string['event_room_started'] = 'A sala começou';
$string['event_room_ended'] = 'Quarto terminado';
$string['event_room_created'] = 'Sala criada';
$string['event_session_ended'] = 'Terminada da sessão';
$string['event_participant_joined'] = 'Participante juntou-se';
$string['event_participant_left'] = 'Participante à esquerda';
$string['event_artifact_created'] = 'Artefacto criado';
$string['event_recording_proceeded'] = 'Gravação pronta';
$string['event_plugin_error'] = 'Erro PlugNmeet';
$string['event_track_published'] = 'Faixa publicada';
$string['event_track_unpublished'] = 'Faixa não publicada';

// Notifications
$string['messageprovider:recording_ready'] = 'Notificações para gravações prontas';
$string['messageprovider:artifact_ready'] = 'Notificações para artefactos prontos';
$string['recording_ready_notification_subject'] = 'Gravação pronta: {$a}';
$string['recording_ready_notification_fullmessage'] = 'A gravação para a sessão "{$a->roomname}" está agora pronto e processado. Pode vê-lo aqui: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>A gravação da sessão <strong>"{$a->roomname}"</strong> está agora pronto e processado.</p><p><a href="{$a->url}">Clique aqui para ver a gravação.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Gravação pronta para {$a}';
$string['artifact_ready_notification_subject'] = 'Artefacto pronto: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Um novo artefacto ({$a->type}) para a sessão "{$a->roomname}" está agora disponível. Pode vê-lo aqui: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Um novo artefacto ({$a->type}) para a sessão <strong>"{$a->roomname}"</strong> está agora disponível.</p><p><a href="{$a->url}">Clique aqui para ver os detalhes do artefacto.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefacto pronto para {$a}';

// recordings.php
$string['no_recordings'] = 'Nenhuma gravação encontrada.';
$string['recording_id'] = 'ID da gravação';
$string['room_sid'] = 'Sala SID';
$string['file_size'] = 'Tamanho do ficheiro';
$string['created_at'] = 'Criado em';
$string['actions'] = 'Ações';
$string['view'] = 'Visão';
$string['play'] = 'Reproduzir';
$string['download'] = 'Baixar';
$string['delete'] = 'Suprimir';
$string['delete_confirm'] = 'Tens a certeza que queres apagar isto?';
$string['delete_success'] = 'Eliminado com sucesso.';
$string['recording_details'] = 'Detalhes da Gravação';
$string['recording_creation_time'] = 'Tempo de Criação da Gravação';
$string['room_creation_time'] = 'Tempo de Criação da Sessão';
$string['back_to_list'] = 'Voltar à Lista';
$string['browser_not_support_video'] = 'O seu navegador não suporta a etiqueta de vídeo.';
$string['room_title'] = 'Título da Sala';
$string['total_participants'] = 'Total de Participantes';
$string['session_started_at'] = 'Sessão iniciada em';
$string['session_ended_at'] = 'Sessão terminada em';

// artifacts.php
$string['no_artifacts'] = 'Nenhum artefacto encontrado.';
$string['artifact_id'] = 'ID do Artefacto';
$string['type'] = 'Tipo';
$string['artifact_details'] = 'Detalhes dos Artefactos';
$string['no_permission'] = 'Não tem permissão para ver esta página.';
$string['token_usage'] = 'Utilização do Token';
$string['duration_usage'] = 'Duração de Utilização';
$string['character_count_usage'] = 'Utilização do Número de Caracteres';
$string['estimated_cost'] = 'Custo Estimado';
$string['file_path'] = 'Caminho do Ficheiro';
$string['mime_type'] = 'Tipo de Mimo';
$string['created_at'] = 'Criado em';

// Analytics strings
$string['download_excel_report'] = 'Descarregar Relatório Excel';
$string['download_raw_json'] = 'Descarregar Dados Brutos';
$string['room_summary'] = 'Resumo da Sala';
$string['users_summary'] = 'Resumo dos utilizadores';
$string['see_excel_report'] = 'Consulte o relatório Excel para mais detalhes';
$string['error_loading_analytics'] = 'Dados analíticos de carregamento de erros: {$a}';
$string['error_generating_excel'] = 'Relatório Excel gerador de erro: {$a}';

$string['analytics_room_room_id'] = 'ID do quarto';
$string['analytics_room_room_title'] = 'Título da Sala';
$string['analytics_room_room_creation'] = 'Tempo de Criação da Sala';
$string['analytics_room_room_ended'] = 'Quarto Terminou o Tempo';
$string['analytics_room_room_duration'] = 'Duração do Quarto';
$string['analytics_room_room_total_users'] = 'Total de Participantes';
$string['analytics_room_enabled_e2ee'] = 'E2EE Ativado';
$string['analytics_room_recording_status'] = 'Contagem do Estado da Gravação';
$string['analytics_room_rtmp_status'] = 'Contagem de Estado RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Utilização Total do Serviço de Voz';
$string['analytics_room_external_media_player_status'] = 'Contagem de Estado dos Leitores de Media Externos';
$string['analytics_room_etherpad_status'] = 'Contagem de Estado do Etherpad';
$string['analytics_room_external_display_link_status'] = 'Contagem de Estado do Link de Ecrã Externo';
$string['analytics_room_ingress_created'] = 'Ingress Contagem Criada';
$string['analytics_room_breakout_room'] = 'Número de Salas de Escape';

$string['analytics_user_name'] = 'Nome';
$string['analytics_user_id'] = 'ID de utilizador';
$string['analytics_user_ex_id'] = 'ID de utilizador';
$string['analytics_user_is_admin'] = 'É Admin';
$string['analytics_user_duration'] = 'Duração';
$string['analytics_user_joined'] = 'Juntaram-se a';
$string['analytics_user_left'] = 'Esquerda em';
$string['analytics_user_mic_status'] = 'Alterações no Estado do Microfone';
$string['analytics_user_mic_muted'] = 'Contagem Silenciada do Microfone';
$string['analytics_user_mic_duration'] = 'Duração do Microfone Ativado';
$string['analytics_user_talked'] = 'Contagem Falada';
$string['analytics_user_talked_duration'] = 'Duração da Conversa';
$string['analytics_user_webcam_status'] = 'Alterações ao Estado da Webcam';
$string['analytics_user_webcam_duration'] = 'Duração Ativada da Webcam';
$string['analytics_user_raise_hand'] = 'Contagem de Mãos Levantadas';
$string['analytics_user_voted_poll'] = 'Contagem de Votos';
$string['analytics_user_whiteboard_annotated'] = 'Contagem Anotada no Quadro Branco';
$string['analytics_user_whiteboard_files'] = 'Contagem de Ficheiros de Quadro Branco';
$string['analytics_user_screen_share_status'] = 'Alterações ao Estado da Partilha de Ecrã';
$string['analytics_user_speech_services_usage'] = 'Utilização dos Serviços de Fala';
$string['analytics_user_public_chat'] = 'Mensagens de Chat Público';
$string['analytics_user_private_chat'] = 'Mensagens de Chat Privadas';
$string['analytics_user_chat_files'] = 'Ficheiros de Chat Partilhados';
$string['analytics_user_interface_invisible'] = 'Contagem Invisível de Interface';
$string['analytics_user_connection_quality'] = 'Qualidade da Ligação';
$string['analytics_user_connection_quality_excellent'] = 'Excelente';
$string['analytics_user_connection_quality_good'] = 'Bom';
$string['analytics_user_connection_quality_poor'] = 'Pobre';

$string['users_info'] = 'Informação dos Utilizadores';
$string['polls'] = 'Sondagens';
$string['question'] = 'Pergunta';
$string['options'] = 'Opções';
$string['file_name'] = 'Nome do ficheiro';
$string['checkcompletiontask'] = 'Verifique a conclusão do plugNmeet';

// attendance.php
$string['attendance_report'] = 'Relatório de Assiduidade';
$string['status'] = 'Estado';
$string['present'] = 'Presente';
$string['absent'] = 'Ausente';
$string['incomplete'] = 'Incompleto';
$string['completed'] = 'Concluído';
$string['minutes_attended'] = 'Atas Assistidas';
$string['last_updated'] = 'Última atualização';
$string['mic_duration'] = 'Duração Ativada pelo Microfone';
$string['webcam_duration'] = 'Duração Ativada da Webcam';
$string['participation_progress'] = 'Progresso da Participação';
$string['attendance_duration'] = 'Atas Assistidas';
$string['attendance_webcam_status'] = 'Webcam Ativada';
$string['attendance_mic_status'] = 'Microfone Ativado';
$string['attendance_talked_duration'] = 'Duração da Palestra';
$string['attendance_voted_poll'] = 'Votado na Votação';
$string['attendance_chat_messages'] = 'Mensagens de Chat Enviadas';
$string['attendance_raise_hand'] = 'Mão Levantada';
$string['attendance_webcam_duration'] = 'Duração Ativada da Webcam';
$string['attendance_mic_duration'] = 'Duração Ativada pelo Microfone';
$string['attendance_whiteboard_annotated'] = 'Anotado no quadro branco';
$string['met'] = 'Met';
$string['required'] = 'Obrigatório';

// Status codes
$string['status_unknown_status'] = 'Um estado desconhecido foi reportado pelo servidor.';
$string['status_success'] = 'Operação concluída com sucesso.';
$string['status_permission_denied'] = 'Permissão negada.';
$string['status_not_found'] = 'Não {$a} encontrado.';
$string['status_conflict'] = 'Esta ação não podia ser concluída devido a um conflito (por exemplo, a sala pode já existir).';
$string['status_invalid_token_or_signature'] = 'O token ou assinatura do pedido é inválido.';
$string['status_invalid_api_key'] = 'A chave API fornecida é inválida. Por favor, verifica as definições do plugin.';
$string['status_internal_server_error'] = 'O servidor PlugNmeet encontrou um erro interno.';
$string['status_invalid_parameters'] = 'A informação fornecida é inválida.';
$string['status_missing_required_parameter'] = 'Falta alguma informação necessária.';
$string['status_room_not_found'] = 'A sala especificada não foi encontrada.';
$string['status_user_not_found'] = 'Conta de utilizador não encontrada. Por favor, certifique-se de que as suas credenciais da API estão corretas e que a sua subscrição está ativa.';
$string['status_user_blocked'] = 'Conta de utilizador está bloqueada. Por favor, contacte o suporte.';
$string['status_user_not_active'] = 'A conta de utilizador não está ativa. Isto deve-se provavelmente a uma subscrição inativa ou expirada.';
