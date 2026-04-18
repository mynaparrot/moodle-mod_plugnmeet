<?php
// This file is part of Moodle - https://moodle.org/
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
$string['plugnmeet:deleterecording'] = 'Apagar gravações';
$string['plugnmeet:manage'] = 'Gerir as definições do PlugNmeet';
$string['plugnmeet:view'] = 'Ver atividade PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Ver artefactos';
$string['plugnmeet:viewlivesessioninfo'] = 'Ver informações da sessão em direto';
$string['plugnmeetfieldset'] = 'Conjunto de campos de exemplo personalizado';
$string['plugnmeetname'] = 'Nome de exemplo personalizado';
$string['plugnmeetname_help'] = 'Ajuda com exemplos personalizados';

// Admin Settings
$string['api_config'] = 'Configuração da API';
$string['server_url'] = 'URL do servidor PlugNmeet';
$string['server_url_desc'] = 'A URL base do seu servidor PlugNmeet (por exemplo, https://pnm.example.com)';
$string['api_key'] = 'Chave API';
$string['api_key_desc'] = 'A chave API fornecida pelo seu servidor PlugNmeet.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'O segredo da API fornecido pelo seu servidor PlugNetet.';
$string['guest_access_hdr'] = 'Guest Access Settings';
$string['allow_guest_global'] = 'Allow Guest Access Globally';
$string['allow_guest_global_desc'] = 'If disabled, guest joining cannot be enabled for any meeting room.';
$string['guest_link_expiration'] = 'Guest Link Expiration (hours)';
$string['guest_link_expiration_desc'] = 'How long a guest join link remains valid after generation.';

$string['defaults'] = 'Padrões Técnicos';
$string['defaults_desc'] = 'Definições técnicas padrão para novas sessões do PlugNetet.';
$string['enable_dynacast'] = 'Ativar o Dynacast';
$string['enable_dynacast_des'] = 'Use o Dynacast para otimizar fluxos de vídeo publicando apenas o altifalante mais recentemente ativo.';
$string['enable_simulcast'] = 'Ativar Simulcast';
$string['enable_simulcast_des'] = 'Use o Simulcast para fornecer múltiplas camadas de qualidade de vídeo aos espectadores.';
$string['video_codec'] = 'Códec de Vídeo';
$string['video_codec_des'] = 'O codec de vídeo padrão para as sessões.';
$string['default_webcam_resolution'] = 'Resolução padrão da webcam';
$string['default_webcam_resolution_des'] = 'A resolução padrão para webcams.';
$string['default_screen_share_resolution'] = 'Resolução padrão de partilha de ecrã';
$string['default_screen_share_resolution_des'] = 'A resolução padrão para partilha de ecrã.';
$string['default_audio_preset'] = 'Predefinição de áudio padrão';
$string['default_audio_preset_des'] = 'O preset de áudio padrão para as sessões.';

$string['branding'] = 'Branding e Personalização';
$string['custom_logo'] = 'Logótipo Personalizado';
$string['custom_logo_des'] = 'Carregue um logótipo personalizado para exibir na sala de reuniões. Se estiver vazio, será usado o logótipo padrão da PlugNmeet.';
$string['custom_css_url'] = 'URL CSS personalizado';
$string['custom_css_url_des'] = 'Forneça um URL para um ficheiro CSS externo para personalizar o aspeto e a sensação da sala de reuniões.';
$string['primary_color'] = 'Cor primária';
$string['primary_color_des'] = 'A cor principal para botões e realces.';
$string['secondary_color'] = 'Cor secundária';
$string['secondary_color_des'] = 'A cor secundária para os elementos da interface.';
$string['background_color'] = 'Cor de fundo';
$string['background_color_des'] = 'Cor de fundo da interface';
$string['background_image'] = 'Imagem de fundo';
$string['background_image_des'] = 'Deve ter 1920X1080 de tamanho para melhor resultado.';
$string['header_color'] = 'Cor do cabeçalho';
$string['header_color_des'] = 'Cor do cabeçalho da interface';
$string['footer_color'] = 'Cor do rodapé';
$string['footer_color_des'] = 'Cor do rodapé da interface';
$string['left_color'] = 'Cor do lado esquerdo';
$string['left_color_des'] = 'Cor da barra lateral esquerda';
$string['side_panel_bg_color'] = 'Cor de fundo do painel lateral';
$string['side_panel_bg_color_des'] = 'Cor de fundo do painel lateral direito';
$string['copyright_text'] = 'Texto de Direitos de Autor';
$string['copyright_text_des'] = 'O texto de direitos de autor para ser exibido no rodapé da sala de reuniões. HTML é permitido.';
$string['client_load'] = 'Carga do cliente a partir de';
$string['client_load_des'] = 'Padrão: local';
$string['remote'] = 'Controlo remoto';
$string['local'] = 'Locais';

$string['client_side'] = 'Opções do Lado do Cliente';
$string['client_load_mode'] = 'Modo de Carregamento do Cliente';
$string['client_load_mode_desc'] = 'Escolha se deve carregar o cliente web a partir do servidor remoto ou de uma cópia local.';
$string['remote'] = 'Remotos';
$string['local'] = 'Local';
$string['client_download_url'] = 'URL de download do cliente';
$string['client_download_url_des'] = 'Se estiver a usar o modo de carregamento "Local", forneça o URL do ficheiro client.zip.';
$string['update_client_btn'] = 'Atualização do Cliente Local';
$string['update_client_btn_label'] = 'Atualizar agora';

$string['yes'] = 'Sim';
$string['no'] = 'Não';
$string['recordings'] = "Gravações";
$string['artifacts'] = "Artefactos da Sala";
$string['attendance'] = "Relatório de Assiduidade";
$string['artifact'] = "Artefacto";

// mod_form.php
$string['roomtitle'] = 'Título da Sala';
$string['welcome_message'] = 'Mensagem de boas-vindas';
$string['max_participants'] = 'Max Participantes';
$string['room_features'] = 'Características da Sala';
$string['recording_features'] = 'Funcionalidades de Gravação';
$string['chat_features'] = 'Funcionalidades de Chat';
$string['other_features'] = 'Outras Características';
$string['e2ee_features'] = 'Encriptação de ponta a ponta';
$string['insights_features'] = 'Insights & Funcionalidades de IA';
$string['defaultlock'] = 'Definições de Fechadura Padrão';
$string['advanced_completion'] = 'Conclusão Avançada';
$string['available'] = 'Disponível em';
$string['deadline'] = 'Disponível até';
$string['err_deadline_before_available'] = 'A data de "Disponível até" não pode ser anterior à data de "Disponível a partir de".';

$string['allow_webcams'] = 'Permitir Webcams';
$string['allow_webcams_help'] = 'Permitir que os participantes usem as suas webcams.';
$string['mute_on_start'] = 'Mude no início';
$string['mute_on_start_help'] = 'Silencia automaticamente todos os participantes quando se juntam à sessão.';
$string['allow_screen_share'] = 'Permitir partilha de ecrã';
$string['allow_screen_share_help'] = 'Permitir que os participantes partilhem o seu ecrã.';
$string['allow_rtmp'] = 'Permitir Streaming RTMP';
$string['allow_rtmp_help'] = 'Permitir que os moderadores transmitam a sessão para um endpoint RTMP.';
$string['admin_only_webcams'] = 'Webcams apenas para administradores';
$string['admin_only_webcams_help'] = 'Só permitem que os moderadores usem as suas webcams.';
$string['room_duration'] = 'Duração da Sala (minutos)';
$string['room_duration_help'] = 'A duração máxima da sala em minutos. 0 sem limite.';
$string['moderator_join_first'] = 'Moderador Junte-se Primeiro';
$string['moderator_join_first_help'] = 'Exigir que um moderador se junte antes que outros participantes o façam.';
$string['enable_analytics'] = 'Ativar Análise';
$string['enable_analytics_help'] = 'Gerar análises para a sessão.';
$string['allow_virtual_bg'] = 'Permitir Fundos Virtuais';
$string['allow_virtual_bg_help'] = 'Permitir que os participantes usem fundos virtuais.';
$string['auto_gen_user_id'] = 'Gerar Automaticamente ID de Utilizador';
$string['auto_gen_user_id_help'] = 'Gerar automaticamente um ID de utilizador para cada participante.';

$string['allow_recording'] = 'Permitir Gravação';
$string['allow_recording_help'] = 'Permitir que a sessão seja gravada.';
$string['allow_cloud_recording'] = 'Permitir Gravação na Nuvem';
$string['allow_cloud_recording_help'] = 'Permita que a sessão seja gravada na cloud.';
$string['enable_auto_cloud_recording'] = 'Ativar Gravação Automática na Nuvens';
$string['enable_auto_cloud_recording_help'] = 'Começa automaticamente a gravar quando a sessão começa.';
$string['allow_local_recording'] = 'Permitir Gravação Local';
$string['allow_local_recording_help'] = 'Permitir que os participantes gravem a sessão localmente.';
$string['is_allow_view_recording'] = 'Permitir visualização de gravações';
$string['is_allow_view_recording_help'] = 'Permitir que os participantes vejam as gravações.';
$string['is_allow_download_recording'] = 'Permitir o download de gravações';
$string['is_allow_download_recording_help'] = 'Permitir que os participantes descarreguem as gravações.';

$string['allow_chat'] = 'Permitir Chat';
$string['allow_chat_help'] = 'Ativa a funcionalidade de chat público.';
$string['allow_file_upload'] = 'Permitir Upload de Ficheiros';
$string['allow_file_upload_help'] = 'Permitir que os participantes carreguem ficheiros no chat.';

$string['allow_shared_notepad'] = 'Permitir bloco de notas partilhado';
$string['allow_shared_notepad_help'] = 'Permitir que os participantes usem o bloco de notas partilhado.';
$string['allow_whiteboard'] = 'Permitir Quadro de Comunicações';
$string['allow_whiteboard_help'] = 'Permitir que os participantes usem o quadro branco.';
$string['allowed_external_media_player'] = 'Permitir media player externo';
$string['allowed_external_media_player_help'] = 'Permitir que os participantes reproduzam conteúdos externos (por exemplo, vídeos do YouTube).';
$string['activate_waiting_room'] = 'Ativar a Sala de Espera';
$string['activate_waiting_room_help'] = 'Ativa a sala de espera para esta sessão.';
$string['waiting_room_msg'] = 'Mensagem na Sala de Espera';
$string['allow_breakout_rooms'] = 'Permitir Salas de Descanso';
$string['allow_breakout_rooms_help'] = 'Permitir que os moderadores criem salas de grupo.';
$string['allowed_number_rooms'] = 'Número permitido de salas de descanso';
$string['allow_display_external_link_features'] = 'Permitir Ecrã Ligação Externa';
$string['allow_display_external_link_features_help'] = 'Permitir que os moderadores mostrem um link externo a todos os participantes.';
$string['allow_ingress_features'] = 'Permitir Entrada';
$string['allow_ingress_features_help'] = 'Permitir a entrada na sessão.';
$string['allow_polls'] = 'Permitir Eleições';
$string['allow_polls_help'] = 'Permitir que os moderadores criem sondagens.';
$string['sip_dial_in_features_is_allow'] = 'Permitir SIP Dial-in';
$string['sip_dial_in_features_is_allow_help'] = 'Permita que os participantes participem na sessão através de discagem SIP.';

$string['enable_end_to_end_encryption_features'] = 'Ativar Encriptação de Ponta a Ponta';
$string['enable_end_to_end_encryption_features_help'] = 'Ative a encriptação de ponta a ponta para a sessão.';
$string['enabled_self_insert_encryption_key'] = 'Permitir Auto-inserção da Chave de Encriptação';
$string['enabled_self_insert_encryption_key_help'] = 'Permitir que os participantes insiram a sua própria chave de encriptação.';
$string['included_e2ee_chat_messages'] = 'Incluir mensagens de chat em E2EE';
$string['included_e2ee_chat_messages_help'] = 'Inclua mensagens de chat na encriptação de ponta a ponta.';
$string['included_e2ee_whiteboard'] = 'Incluir quadro branco em E2EE';
$string['included_e2ee_whiteboard_help'] = 'Inclua o quadro branco na encriptação de ponta a ponta.';

$string['insights_features_is_allow'] = 'Permitir Insights';
$string['insights_features_is_allow_help'] = 'Permita a geração de insights para esta sessão.';
$string['insights_transcription_features_is_allow'] = 'Permitir Transcrição';
$string['insights_transcription_features_is_allow_help'] = 'Permita que a sessão seja transcrita.';
$string['insights_transcription_features_is_allow_translation'] = 'Permitir tradução por transcrição';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permitir que a transcrição seja traduzida.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Permitir Síntese de Voz por Transcrição';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Permita que a transcrição seja lida em voz alta.';
$string['insights_chat_translation_features_is_allow'] = 'Permitir Tradução do Chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Permitir que as mensagens do chat sejam traduzidas.';
$string['insights_ai_features_is_allow'] = 'Permitir funcionalidades de IA';
$string['insights_ai_features_is_allow_help'] = 'Permitir a utilização de funcionalidades de IA nesta sessão.';
$string['insights_ai_text_chat_features_is_allow'] = 'Permitir Chat de Texto por IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Permitir que a IA seja usada no chat.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Permitir o Resumo de Reuniões por IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Permitir que a reunião seja resumida pela IA.';

$string['lock_microphone'] = 'Microfone de Bloqueio';
$string['lock_microphone_help'] = 'Desative todos os microfones dos participantes por defeito.';
$string['lock_webcam'] = 'Lock Webcam';
$string['lock_webcam_help'] = 'Desative todas as webcams dos participantes por defeito.';
$string['lock_screen_sharing'] = 'Partilha do Ecrã de Bloqueio';
$string['lock_screen_sharing_help'] = 'Desative a partilha de ecrã para todos os participantes por defeito.';
$string['lock_whiteboard'] = 'Bloquear quadro branco';
$string['lock_whiteboard_help'] = 'Desative o quadro branco para todos os participantes por defeito.';
$string['lock_shared_notepad'] = 'Bloquear o bloco de notas partilhado';
$string['lock_shared_notepad_help'] = 'Desative as notas partilhadas para todos os participantes por defeito.';
$string['lock_chat'] = 'Chat Bloqueado';
$string['lock_chat_help'] = 'Desative o chat público para todos os participantes por defeito.';
$string['lock_chat_send_message'] = 'Bloquear Chat Enviar Mensagem';
$string['lock_chat_send_message_help'] = 'Desative por defeito o envio de mensagens no chat público para todos os participantes.';
$string['lock_chat_file_share'] = 'Bloquear Partilha de Ficheiros de Chat';
$string['lock_chat_file_share_help'] = 'Desative a partilha de ficheiros no chat público para todos os participantes por defeito.';
$string['lock_private_chat'] = 'Bloquear o Chat Privado';
$string['lock_private_chat_help'] = 'Desative o chat privado para todos os participantes por defeito.';

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
$string['allow_guest'] = 'Allow Guest Users';
$string['allow_guest_help'] = 'Allow external users without a Moodle account to join the session via a shareable link.';
$string['guest_join_link'] = 'Guest Join Link';
$string['guest_join_link_help'] = 'Share this link with external participants. This link will remain valid for {$a} hours. Every page reload will generate a new link, but previously shared links will remain valid until their original expiration time.';
$string['copy_link'] = 'Copy Link';
$string['guest_join_title'] = 'Join Meeting as Guest';
$string['enter_display_name'] = 'Enter your display name';
$string['join_as_guest'] = 'Join Meeting';
$string['guest_access_denied'] = 'Guest access is not enabled for this meeting.';
$string['invalid_guest_token'] = 'Invalid or expired guest join token.';
$string['guest_link_expired'] = 'This guest join link has expired.';
$string['error_joining_session'] = 'There was an error joining the session: {$a}';

// Events
$string['event_room_started'] = 'A sala começou';
$string['event_room_ended'] = 'Quarto terminado';
$string['event_room_created'] = 'Sala criada';
$string['event_session_ended'] = 'Terminada da sessão';
$string['event_participant_joined'] = 'Participante juntou-se';
$string['event_participant_left'] = 'Participante à esquerda';
$string['event_artifact_created'] = 'Artefacto criado';
$string['event_recording_proceeded'] = 'Gravação pronta';

// Notifications
$string['messageprovider:recording_artifact_notifications'] = 'Notificações para gravações e artefactos prontos';
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
$string['minutes_attended'] = 'Atas Assistidas';
$string['last_updated'] = 'Última atualização';
$string['mic_duration'] = 'Duração Ativada pelo Microfone';
$string['webcam_duration'] = 'Duração Ativada da Webcam';
