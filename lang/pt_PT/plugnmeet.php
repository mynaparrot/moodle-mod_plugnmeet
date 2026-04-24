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
$string['modulename_help'] = 'O módulo de atividades PlugNmeet permite criar e gerir sessões de webconferência em tempo real diretamente a partir do Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Administração do plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Adicionar uma nova atividade PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Excluir artefactos';
$string['plugnmeet:deleterecording'] = 'Apagar gravações';
$string['plugnmeet:downloadanalyticsreport'] = 'Descarregar relatório analítico';
$string['plugnmeet:downloadartifacts'] = 'Baixar artefactos';
$string['plugnmeet:downloadattendance'] = 'Descarregar relatório de presença';
$string['plugnmeet:downloadrecordings'] = 'Baixar gravações';
$string['plugnmeet:manage'] = 'Gerir configurações do PlugNmeet';
$string['plugnmeet:view'] = 'Ver a atividade do PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Ver relatório de salas ativas';
$string['plugnmeet:viewartifacts'] = 'Ver artefactos';
$string['plugnmeet:viewattendance'] = 'Ver relatório de presença';
$string['plugnmeet:viewattendancelist'] = 'Ver lista de presenças';
$string['plugnmeet:viewlivesessioninfo'] = 'Veja as informações da sessão em direto';
$string['plugnmeet:viewrecordings'] = 'Ver gravações';
$string['plugnmeetfieldset'] = 'Conjunto de campos de exemplo personalizado';
$string['plugnmeetname'] = 'Nome de exemplo personalizado';
$string['plugnmeetname_help'] = 'Ajuda de exemplo personalizada';

// Admin Settings
$string['api_config'] = 'Configuração da API';
$string['server_url'] = 'URL do servidor PlugNmeet';
$string['server_url_desc'] = 'O URL base do seu servidor PlugNmeet (por exemplo, https://pnm.exemplo.com).';
$string['api_key'] = 'Chave API';
$string['api_key_desc'] = 'A chave API exclusiva fornecida pelo seu servidor PlugNmeet.';
$string['api_secret'] = 'Segredo da API';
$string['api_secret_desc'] = 'O segredo da API fornecido pelo seu servidor PlugNmeet é utilizado para uma autenticação segura.';
$string['guest_access_hdr'] = 'Configurações de acesso de convidados';
$string['allow_guest_global'] = 'Permitir o acesso de convidados globalmente';
$string['allow_guest_global_desc'] = 'Funciona como interruptor principal. Se estiver desativado, os professores não verão a opção de ativar a entrada de convidados ao criar ou editar atividades.';
$string['guest_link_expiration'] = 'Tempo de expiração do guest link (em horas)';
$string['guest_link_expiration_desc'] = 'Determina durante quantas horas um link de acesso de convidado permanece ativo após ser gerado por um professor.';
$string['defaults'] = 'Defeitos técnicos';
$string['defaults_desc'] = 'Configurações técnicas padrão aplicadas a todas as novas sessões do PlugNmeet.';
$string['enable_dynacast'] = 'Ativar Dynacast';
$string['enable_dynacast_des'] = 'Otimiza o desempenho pausando dinamicamente as camadas de vídeo que não estão a ser visualizadas pelos participantes. Isto reduz significativamente a utilização de CPU e largura de banda no servidor. **Nota:** Esta função será ativada automaticamente se estiverem a ser utilizados codecs SVC (VP9/AV1) e é necessária para a transmissão simultânea com múltiplos codecs.';
$string['enable_simulcast'] = 'Ativar transmissão simultânea';
$string['enable_simulcast_des'] = 'Oferece múltiplas camadas de qualidade de vídeo para garantir uma experiência fluida para utilizadores com ligações lentas.';
$string['video_codec'] = 'Codec de vídeo';
$string['video_codec_des'] = 'O padrão de codificação para a transmissão de vídeo. **VP8** é recomendado para WebRTC, uma vez que oferece o melhor equilíbrio entre qualidade e baixa latência. **Aviso:** Nem todos os browsers são compatíveis com todos os codecs; certifique-se de que os seus utilizadores estão a utilizar navegadores modernos se estiverem a utilizar o VP9 ou o H. 265.';
$string['default_webcam_resolution'] = 'Resolução padrão da câmara Web';
$string['default_webcam_resolution_des'] = 'A definição de resolução inicial para as câmaras dos participantes.';
$string['default_screen_share_resolution'] = 'Resolução padrão de partilha de ecrã';
$string['default_screen_share_resolution_des'] = 'A definição de resolução inicial para a partilha de ecrã.';
$string['default_audio_preset'] = 'Predefinição de áudio padrão';
$string['default_audio_preset_des'] = 'Perfil de qualidade de áudio otimizado para a sessão.';

$string['branding'] = 'Identidade visual e personalização';
$string['custom_logo'] = 'Logotipo personalizado';
$string['custom_logo_des'] = 'Faça o upload do seu logótipo para a sala de reuniões. Caso o campo fique em branco, será utilizado o logótipo padrão do PlugNmeet.';
$string['custom_css_url'] = 'URL CSS personalizada';
$string['custom_css_url_des'] = 'Ligue um ficheiro . css externo para sobrescrever ou personalizar os estilos da interface.';
$string['primary_color'] = 'Cor primária';
$string['primary_color_des'] = 'A cor principal de realce é utilizada para botões, estados ativos e elementos de realce.';
$string['secondary_color'] = 'Cor secundária';
$string['secondary_color_des'] = 'A cor de destaque utilizada para os elementos secundários da interface do utilizador.';
$string['background_color'] = 'Cor de fundo';
$string['background_color_des'] = 'A cor de fundo principal da interface.';
$string['background_image'] = 'Imagem de fundo';
$string['background_image_des'] = 'Papel de parede de fundo. Para melhores resultados, utilize uma imagem de 1920x1080.';
$string['header_color'] = 'Cor do cabeçalho';
$string['header_color_des'] = 'Cor de fundo para a barra de navegação superior.';
$string['footer_color'] = 'Cor do rodapé';
$string['footer_color_des'] = 'Cor de fundo para a barra de ferramentas inferior.';
$string['left_color'] = 'Cor do lado esquerdo';
$string['left_color_des'] = 'Cor de fundo para a barra lateral de navegação à esquerda.';
$string['side_panel_bg_color'] = 'cor de fundo do painel lateral';
$string['side_panel_bg_color_des'] = 'Cor de fundo para os painéis laterais direitos (Chat e Lista de participantes).';
$string['copyright_text'] = 'Texto de direitos de autor';
$string['copyright_text_des'] = 'Texto da marca apresentado no rodapé das definições. É possível utilizar HTML para links ou estilos personalizados.';
$string['client_load'] = 'Método de carregamento do cliente';
$string['client_load_des'] = 'Escolha **Remoto** (Recomendado) para uma experiência integrada e personalizada com a sua marca, diretamente na sua página Moodle. Escolha **Redirecionar** para utilizar a interface padrão do PlugNmeet; note que os utilizadores sairão do seu site e a personalização da sua marca poderá não ser aplicada.';
$string['remote'] = 'Remoto (embutido)';
$string['redirect'] = 'Redirecionar para o servidor';

$string['yes'] = 'Sim';
$string['no'] = 'Não';
$string['recordings'] = "Gravações";
$string['recording'] = "Gravação";
$string['artifacts'] = "Artefactos da Sala";
$string['attendance'] = "Relatório de Presença";
$string['artifact'] = "Artefato";
$string['room_subject'] = 'quarto';
$string['user_subject'] = 'utilizador';
$string['activeroomsreport'] = 'Relatório de Salas Ativas';
$string['noactiverooms'] = 'Não há salas ativas de momento.';
$string['activerooms'] = 'Salas Ativas';
$string['loading'] = 'Carregando...';

// mod_form.php
$string['roomtitle'] = 'Título do quarto';
$string['roomtitle_help'] = 'O nome utilizado para a atividade no Moodle e o cabeçalho da reunião ao vivo. Ajuda os alunos a identificar a sessão no seu curso e dentro da sala virtual.';
$string['welcome_message'] = 'Mensagem de boas-vindas';
$string['welcome_message_help'] = 'Qualquer texto aqui introduzido aparecerá como a primeira mensagem no chat público quando os utilizadores entrarem na sala. Isto é útil para partilhar instruções, links ou informações importantes com os participantes assim que entram.';
$string['max_participants'] = 'Número máximo de participantes';
$string['max_participants_help'] = 'Defina este valor para limitar quantos utilizadores podem participar na sessão em simultâneo. Defina-o como 0 para permitir participantes ilimitados, ou seja, não existe qualquer restrição quanto ao número de utilizadores que podem participar.';
$string['room_features'] = 'Características do quarto';
$string['recording_features'] = 'Recursos de gravação';
$string['chat_features'] = 'Recursos de chat';
$string['other_features'] = 'Outras funcionalidades';
$string['e2ee_features'] = 'Encriptação de ponta a ponta';
$string['insights_features'] = 'Recursos de insights e IA';
$string['defaultlock'] = 'Definições de bloqueio padrão';
$string['advanced_completion'] = 'Conclusão Avançada';
$string['available'] = 'Disponível em';
$string['available_help'] = 'Determina quando os participantes podem começar a entrar na sessão. Os utentes não poderão entrar na sala antes dessa data e hora.';
$string['deadline'] = 'Disponível até';
$string['deadline_help'] = 'Determina a data e hora limite em que os participantes poderão aceder à sessão. O acesso será bloqueado após este prazo.';
$string['err_deadline_before_available'] = 'A data "Disponível até" não pode ser anterior à data "Disponível a partir de".';
$string['error_analytics_required_for_completion'] = 'A opção "Ativar análises" deve estar marcada se estiver definido algum critério de conclusão.';

$string['allow_webcams'] = 'Permitir webcams';
$string['allow_webcams_help'] = 'Permitir que os participantes utilizem as suas webcams.';
$string['mute_on_start'] = 'Silenciar ao iniciar';
$string['mute_on_start_help'] = 'Silenciar automaticamente todos os participantes quando entram na sessão.';
$string['allow_screen_share'] = 'Permitir partilha de ecrã';
$string['allow_screen_share_help'] = 'Permita que os participantes partilhem os seus ecrãs.';
$string['allow_rtmp'] = 'Permitir streaming RTMP';
$string['allow_rtmp_help'] = 'Permite aos moderadores transmitir a sessão ao vivo para plataformas externas como o YouTube, Facebook ou Twitch. Ideal para webinars públicos ou palestras com convidados.';
$string['allow_raise_hand'] = 'Permitir que levantem a mão';
$string['allow_raise_hand_help'] = 'Permita que os participantes levantem a mão.';
$string['admin_only_webcams'] = 'Webcams exclusivas para administradores';
$string['admin_only_webcams_help'] = 'Permitir que apenas os moderadores utilizem as suas webcams.';
$string['allow_view_other_webcams'] = 'Permitir a visualização de outras webcams';
$string['allow_view_other_webcams_help'] = 'Permitir que os participantes vejam as webcams uns dos outros. Se desativado, apenas verão as webcams dos moderadores.';
$string['allow_view_other_users_list'] = 'Permitir visualizar a lista de outros utilizadores';
$string['allow_view_other_users_list_help'] = 'Permitir que os participantes vejam a lista dos outros participantes.';
$string['room_duration'] = 'Duração da sala (minutos)';
$string['room_duration_help'] = 'Define durante quanto tempo a sala pode permanecer aberta antes de fechar automaticamente. Introduza 0 se não pretender definir qualquer limite de tempo, permitindo que a sala permaneça ativa sem restrições.';
$string['moderator_join_first'] = 'Moderador - Registe-se primeiro';
$string['moderator_join_first_help'] = 'Quando ativada, a sessão não será iniciada e ninguém poderá entrar até que um moderador (como um professor) entre primeiro. Os participantes permanecerão na página da atividade no Moodle e não entrarão na sala ou na área de espera. Isto é diferente da opção Sala de Espera, onde os utilizadores ainda podem entrar e aguardar.';
$string['enable_analytics'] = 'Ativar análises';
$string['enable_analytics_help'] = 'Regista os dados de participação e engagement da sessão. **Nota:** Esta opção deve ser ativada caso esteja definido algum critério de conclusão.';
$string['allow_virtual_bg'] = 'Permitir fundos virtuais';
$string['allow_virtual_bg_help'] = 'Permite aos participantes desfocar o fundo ou utilizar uma imagem virtual. Ótimo para manter a privacidade dos alunos e garantir um aspeto profissional na sala de aula.';
$string['auto_gen_user_id'] = 'Gerar ID de utilizador automaticamente';
$string['auto_gen_user_id_help'] = 'Quando ativado, o sistema cria um novo ID para que o mesmo utilizador possa juntar-se a partir de vários dispositivos — por exemplo, quando um professor entra a partir de um tablet para desenhar no quadro branco enquanto usa um PC para a câmara e o microfone; no entanto, é <b>recomendado</b> para manter isto desligado, de modo a usar o ID de utilizador do Moodle e evitar juntas duplicadas.';

$string['allow_recording'] = 'Permitir gravação (interruptor principal)';
$string['allow_recording_help'] = 'O interruptor principal para todas as funcionalidades de gravação. Se estiver desativado, as opções de gravação na nuvem e local ficarão ocultas dos moderadores.';
$string['allow_cloud_recording'] = 'Permitir a gravação na nuvem';
$string['allow_cloud_recording_help'] = 'Permite a escrita no servidor PlugNmeet. O vídeo final é processado e armazenado na nuvem, facilitando a partilha através de um link após o término da sessão.';
$string['enable_auto_cloud_recording'] = 'Ativar a gravação automática na nuvem';
$string['enable_auto_cloud_recording_help'] = 'A gravação na nuvem é iniciada automaticamente assim que o primeiro moderador entra na sessão. Ideal para garantir que nenhuma aula é esquecida.';
$string['allow_local_recording'] = 'Permitir gravação local';
$string['allow_local_recording_help'] = 'Permite gravar diretamente no computador. **Nota:** Requer o Google Chrome. Para captar todo o áudio da sessão, o utilizador deve partilhar a sua "Guia do Chrome" e marcar a caixa "Partilhar também o áudio da guia". O ficheiro é guardado localmente no dispositivo após a conclusão.';

$string['allow_chat'] = 'Permitir chat (Interruptor mestre global)';
$string['allow_chat_help'] = 'O interruptor principal absoluto para todas as funções de chat. Se estiver desativado, toda a área de chat será removida para todos, incluindo moderadores. Não será possível conversar em público ou em privado.';
$string['allow_file_upload'] = 'Permitir o envio de ficheiros';
$string['allow_file_upload_help'] = 'Permite a partilha de ficheiros no chat. Para tal, é necessário que a opção "Permitir Chat" esteja ativa.';

$string['allow_shared_notepad'] = 'Permitir a partilha do Bloco de Notas';
$string['allow_shared_notepad_help'] = 'Permite um editor de texto colaborativo onde alunos e professores podem fazer anotações em tempo real em conjunto. Isto é perfeito para brainstorming, escrita colaborativa ou para criar um resumo partilhado da aula.';

$string['whiteboard_features'] = 'Funcionalidades do quadro branco';
$string['allow_whiteboard'] = 'Permitir quadro branco';
$string['allow_whiteboard_help'] = 'Liberta um espaço de desenho interativo para a sessão. Utilize-o para esboçar diagramas, resolver problemas matemáticos visualmente ou permitir que os alunos tomem notas em conteúdos partilhados.';
$string['preload_file'] = 'Ficheiro de apresentação pré-carregado';
$string['preload_file_help'] = 'Permite carregar um documento PDF ou do Office que será carregado automaticamente para o quadro branco quando a sessão começar. Isto garante que o seu material de apresentação está pronto para a aula imediatamente. <strong>Tamanho máximo do ficheiro: 5 MB</strong>';

$string['allowed_external_media_player'] = 'Permitir leitor de multimédia externo';
$string['allowed_external_media_player_help'] = 'Permite aos moderadores sincronizar e reproduzir vídeos de fontes como o YouTube ou o Vimeo para toda a turma. Ideal para analisar vídeos educativos ou ver documentários em conjunto sem atrasos na ligação.';

$string['activate_waiting_room'] = 'Ativar Sala de Espera';
$string['activate_waiting_room_help'] = 'Ative a sala de espera para esta sessão.';
$string['waiting_room_msg'] = 'Mensagem da sala de espera';
$string['waiting_room_msg_help'] = 'Esta mensagem é apresentada aos utilizadores enquanto aguardam para entrar na sala. Utilize-a para partilhar instruções, expectativas ou informações úteis antes do início da sessão.';

$string['allow_breakout_rooms'] = 'Permitir salas de discussão';
$string['allow_breakout_rooms_help'] = 'Permite aos moderadores dividir os participantes em grupos mais pequenos para discussões focadas, projetos colaborativos ou atividades de grupo privadas.';
$string['allowed_number_rooms'] = 'Salas de discussão Max';
$string['allowed_number_rooms_help'] = 'O número máximo de sub-salas que um moderador pode criar numa única sessão.';

$string['allow_display_external_link_features'] = 'Permitir a partilha de links externos';
$string['allow_display_external_link_features_help'] = 'Permite aos moderadores exibir conteúdo educativo externo — como atividades H5P, pacotes SCORM ou sistemas de questionários (por exemplo, Kahoot) — diretamente a todos os participantes durante a sessão.';

$string['allow_ingress_features'] = 'Permitir entrada (streaming externo)';
$string['allow_ingress_features_help'] = 'Permite aos professores transmitir vídeos de alta qualidade para a sessão utilizando software externo como o OBS, através dos protocolos RTMP ou WHIP. Isto é ideal para partilhar conteúdo de vídeo de alta resolução, sessões pré-gravadas ou contornar as limitações de upload do browser.';

$string['allow_polls'] = 'Permitir pesquisas';
$string['allow_polls_help'] = 'Permite aos moderadores criar sondagens interativas e questionários rápidos durante a sessão. Esta é uma ótima forma de verificar a compreensão dos alunos e aumentar o engagement.';

$string['sip_dial_in_features_is_allow'] = 'Permitir a marcação SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permite que os participantes entrem na sessão de áudio através de uma chamada telefónica tradicional. Isto é essencial para os alunos com más ligações à internet ou que precisam de participar enquanto estão em movimento.';

$string['enable_end_to_end_encryption_features'] = 'Ativar encriptação ponta a ponta (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Oferece a máxima segurança ao encriptar fluxos de vídeo e áudio, de tal forma que nem o servidor pode aceder aos mesmos. Nota: algumas funcionalidades, como a escrita no servidor, podem ser limitadas quando a encriptação ponta a ponta (E2EE) está ativa.';
$string['enabled_self_insert_encryption_key'] = 'Permitir chaves definidas pelo participante';
$string['enabled_self_insert_encryption_key_help'] = 'Permite que os participantes introduzam manualmente uma chave secreta partilhada. Isto garante que o fornecedor de serviços nunca tem acesso às chaves de encriptação, oferecendo o mais alto nível de privacidade.';
$string['included_e2ee_chat_messages'] = 'Encriptar mensagens de chat';
$string['included_e2ee_chat_messages_help'] = 'Estende a encriptação de ponta a ponta ao chat de texto, garantindo que as mensagens só podem ser lidas pelos participantes da sala.';
$string['included_e2ee_whiteboard'] = 'Encriptar dados de quadro branco';
$string['included_e2ee_whiteboard_help'] = 'Inclui todos os desenhos e anotações do quadro branco na camada de encriptação de ponta a ponta para total privacidade dos dados.';

$string['insights_features_is_allow'] = 'Permitir informação da sessão (Interruptor principal)';
$string['insights_features_is_allow_help'] = 'O interruptor principal para todos os recursos baseados em dados. Se estiver desativado, todas as subopções — incluindo a Transcrição, o Assistente de IA e os Relatórios de Reunião — ficarão completamente indisponíveis.';
$string['insights_transcription_features_is_allow'] = 'Permitir a transcrição ao vivo';
$string['insights_transcription_features_is_allow_help'] = 'Activa a conversão de voz em texto em tempo real durante a sessão. Esta opção deve estar ativada para que a transcrição fonética ou a síntese de voz (TTS) funcionem.';
$string['insights_transcription_features_is_allow_translation'] = 'Permitir transcrição Tradução';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permite que a transcrição ao vivo seja traduzida para diferentes línguas, apoiando estudantes internacionais e ambientes multilingues.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Permitir síntese de voz (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Ativa a função de conversão de texto em voz, permitindo que a transcrição em direto seja lida em voz alta para uma melhor acessibilidade e para participantes com deficiência visual.';
$string['insights_chat_translation_features_is_allow'] = 'Permitir tradução do chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Permite a tradução em tempo real de mensagens de chat, possibilitando que os participantes comuniquem instantaneamente em diferentes idiomas.';
$string['insights_ai_features_is_allow'] = 'Ativar Assistente de Reunião com IA (Interruptor Mestre de IA)';
$string['insights_ai_features_is_allow_help'] = 'O interruptor principal para todas as funcionalidades com inteligência artificial. Se estiver desativado, funcionalidades específicas como o Chat com IA e o Resumo de Reuniões ficarão ocultas, mesmo que o Insights da Sessão esteja ativo.';
$string['insights_ai_text_chat_features_is_allow'] = 'Permitir assistente de chat com IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integra um assistente de IA diretamente no chat para ajudar a responder a perguntas, explicar conceitos complexos e facilitar discussões em grupo.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Permitir resumo de reuniões por IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Gera automaticamente um resumo conciso por IA após o término da sessão, destacando os principais pontos de aprendizagem, decisões e tarefas de acompanhamento.';

$string['lock_microphone'] = 'Bloquear microfones';
$string['lock_microphone_help'] = 'Ao entrar, todos os participantes são silenciados por defeito. Apenas os moderadores podem ativar o som ou conceder permissão para falar.';
$string['lock_webcam'] = 'Bloquear câmaras da webcam';
$string['lock_webcam_help'] = 'Desativa as câmaras para todos os participantes por predefinição. Útil para poupar largura de banda ou garantir a privacidade dos alunos.';
$string['lock_screen_sharing'] = 'Partilha da tela de bloqueio';
$string['lock_screen_sharing_help'] = 'Restringe a partilha de ecrã apenas aos moderadores. Impede que os participantes interrompam com os seus próprios ecrãs.';
$string['lock_whiteboard'] = 'Quadro branco com fecho';
$string['lock_whiteboard_help'] = 'Restringe as ferramentas de desenho do quadro branco apenas aos moderadores. Impede anotações não autorizadas pelos participantes.';
$string['lock_shared_notepad'] = 'Bloquear Bloco de Notas Partilhado';
$string['lock_shared_notepad_help'] = 'Desativa o bloco de notas colaborativo para os participantes, de forma a evitar anotações fora do tópico ou distrações.';
$string['lock_chat'] = 'Bloquear chat público';
$string['lock_chat_help'] = 'Oculta ou desativa completamente a área de chat pública para todos os participantes.';
$string['lock_chat_send_message'] = 'Bloquear envio de mensagens';
$string['lock_chat_send_message_help'] = 'Permite que os participantes leiam o chat, mas impede-os de enviar mensagens.';
$string['lock_chat_file_share'] = 'Bloquear partilha de ficheiros';
$string['lock_chat_file_share_help'] = 'Impede que os participantes carreguem ou partilhem ficheiros na área de chat.';
$string['lock_private_chat'] = 'Bloquear chat privado';
$string['lock_private_chat_help'] = 'Desativa o envio de mensagens privadas individuais entre os participantes. Nota: os participantes podem ainda enviar mensagens privadas aos moderadores para obter ajuda ou esclarecer dúvidas.';

$string['completion_minutes'] = 'Minutos de Presença';
$string['completion_minutes_help'] = 'Exigir que o utilizador permaneça na sessão durante um determinado número de minutos.';
$string['completion_minutes_desc'] = 'O utilizador deve participar na sessão durante pelo menos {$a} minutos.';
$string['completion_raised_hand'] = 'Mão levantada';
$string['completion_raised_hand_help'] = 'Exija que o utilizador levante a mão pelo menos uma vez.';
$string['completion_chat_messages'] = 'Mensagens de chat enviadas';
$string['completion_chat_messages_help'] = 'Exija que o utilizador envie pelo menos 1 mensagem no chat.';
$string['completion_webcam_enabled'] = 'Webcam ativada';
$string['completion_webcam_enabled_help'] = 'Exija que o utilizador ative a sua webcam pelo menos uma vez.';
$string['completion_webcam_duration'] = 'Duração com a webcam ativada (em minutos)';
$string['completion_webcam_duration_help'] = 'Exija que o utilizador mantenha a webcam ativada durante um determinado número de minutos.';
$string['completion_webcam_duration_desc'] = 'O utilizador deve ter a sua webcam ativada durante pelo menos {$a} minutos.';
$string['completion_mic_enabled'] = 'Microfone ativado';
$string['completion_mic_enabled_help'] = 'Exija que o utilizador ative o microfone pelo menos uma vez.';
$string['completion_mic_duration'] = 'Duração com o microfone ativado (minutos)';
$string['completion_mic_duration_help'] = 'Exija que o utilizador mantenha o microfone ativado durante um determinado número de minutos.';
$string['completion_mic_duration_desc'] = 'O utilizador deve ter o microfone ativado durante pelo menos {$a} minutos.';
$string['completion_talk_duration'] = 'Duração da conversa (minutos)';
$string['completion_talk_duration_help'] = 'Exija que o utilizador fale durante um determinado número de minutos.';
$string['completion_talk_duration_desc'] = 'O utilizador deve falar durante pelo menos {$a} minutos.';
$string['completion_poll_voted'] = 'Voto na sondagem';
$string['completion_poll_voted_help'] = 'Exija que o utilizador vote em pelo menos uma sondagem.';
$string['completion_whiteboard_annotated'] = 'Anotado no quadro branco';
$string['completion_whiteboard_annotated_help'] = 'Exija que o utilizador faça anotações no quadro branco.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Armazena estatísticas de sessão para que os utilizadores possam determinar a conclusão da atividade.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'O ID do utilizador.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Dados da sessão codificados em JSON (minutos, mensagens de chat, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'A hora a que as estatísticas foram atualizadas pela última vez.';

// view.php
$string['join_session'] = 'Participar na sessão';
$string['start_session'] = 'Iniciar sessão';
$string['end_session'] = 'Encerrar sessão';
$string['participants'] = 'Participantes';
$string['is_recording'] = 'Está a gravar';
$string['is_active'] = 'Está ativo';
$string['room_info'] = 'Detalhes da sessão ao vivo';
$string['participants_info'] = 'Participantes ao vivo';
$string['room_id'] = 'ID do quarto';
$string['creation_time'] = 'Tempo de Criação';
$string['name'] = 'Nome';
$string['user_id'] = 'ID do utilizador';
$string['is_admin'] = 'É administrador';
$string['is_presenter'] = 'É o apresentador';
$string['joined_at'] = 'Ingressou em';
$string['moderator_not_joined'] = 'Um moderador precisa de iniciar a sessão antes de poder participar.';
$string['session_available_from'] = 'Disponível em: {$a}';
$string['session_available_until'] = 'Disponível até: {$a}';
$string['session_not_started_yet'] = 'Esta sessão ainda não começou.';
$string['session_ended'] = 'Esta sessão terminou.';
$string['allow_guest'] = 'Permitir utilizadores convidados';
$string['allow_guest_help'] = 'Quando ativada, esta opção gera um link seguro e partilhável para que os utilizadores externos (como professores convidados ou participantes sem conta no Moodle) possam entrar na sessão; um administrador pode visualizar e partilhar esse link.';
$string['guest_join_link'] = 'Link para inscrição de convidados';
$string['guest_join_link_help'] = 'Partilhe este link com participantes externos. Esta ligação permanecerá válida durante {$a} horas. Cada atualização da página irá gerar um novo link, mas os links partilhados anteriormente permanecerão válidos até à hora de expiração original.';
$string['copy_link'] = 'Copiar link';
$string['link_copied'] = 'Link copiado para a área de transferência.';
$string['guest_join_title'] = 'Participar na reunião como convidado';
$string['enter_display_name'] = 'Introduza o seu nome de exibição';
$string['join_as_guest'] = 'Participar na reunião';
$string['guest_access_denied'] = 'O acesso de convidados não está ativado para esta reunião.';
$string['invalid_guest_token'] = 'Token de acesso de convidado inválido ou expirado.';
$string['guest_link_expired'] = 'Este link de acesso para convidados expirou.';
$string['error_joining_session'] = 'Ocorreu um erro ao entrar na sessão: {$a}';
$string['already_logged_in'] = 'Já está ligado(a) ao Moodle. Pode participar na sessão diretamente a partir desta página da atividade.';
$string['total_webcams'] = 'Total de webcams';
$string['total_mics'] = 'Total de microfones';
$string['total_screen_shares'] = 'Partilha total da tela';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Microfones';
$string['screenshares'] = 'Partilha de tela';

// Events
$string['event_room_started'] = 'Quarto começou';
$string['event_room_ended'] = 'A sala terminou';
$string['event_room_created'] = 'Quarto criado';
$string['event_session_ended'] = 'Sessão encerrada';
$string['event_participant_joined'] = 'Participante juntou-se';
$string['event_participant_left'] = 'Participante saiu';
$string['event_artifact_created'] = 'Artefacto criado';
$string['event_recording_proceeded'] = 'Pronto para gravar';
$string['event_plugin_error'] = 'Erro no PlugNmeet';
$string['event_track_published'] = 'Faixa publicada';
$string['event_track_unpublished'] = 'Faixa não publicada';
$string['event_recording_started'] = 'A gravação começou.';
$string['event_recording_ended'] = 'Gravação encerrada';
$string['event_rtmp_started'] = 'Transmissão RTMP iniciada';
$string['event_rtmp_ended'] = 'O fluxo RTMP foi terminado.';

// Notifications
$string['messageprovider:recording_ready'] = 'Notificações para gravações prontas';
$string['messageprovider:artifact_ready'] = 'Notificações para artefactos prontos';
$string['recording_ready_notification_subject'] = 'Gravação pronta: {$a}';
$string['recording_ready_notification_fullmessage'] = 'A gravação da sessão "{$a->roomname}" já está pronta e processada. Pode visualizá-la aqui: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>A gravação da sessão <strong>"{$a->roomname}"</strong> já está pronta e processada.</p><p><a href="{$a->url}">Clique aqui para visualizar a gravação.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Gravação pronta para {$a}';
$string['artifact_ready_notification_subject'] = 'Artefacto pronto: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Um novo artefacto ({$a->type}) para a sessão "{$a->roomname}" está agora disponível. Pode visualizá-lo aqui: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Um novo artefacto ({$a->type}) para a sessão <strong>"{$a->roomname}"</strong> está agora disponível.</p><p><a href="{$a->url}">Clique aqui para visualizar os detalhes do artefacto.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefacto pronto para {$a}';

// recordings.php
$string['no_recordings'] = 'Nenhuma gravação encontrada.';
$string['recording_id'] = 'ID da gravação';
$string['room_sid'] = 'Sala SID';
$string['file_size'] = 'Tamanho do ficheiro';
$string['created_at'] = 'Criado em';
$string['actions'] = 'Ações';
$string['view'] = 'Ver';
$string['play'] = 'Brincadeira';
$string['download'] = 'Transferir';
$string['delete'] = 'Eliminar';
$string['delete_confirm'] = 'Tem a certeza de que deseja eliminar isso?';
$string['delete_success'] = 'Eliminado com sucesso.';
$string['recording_details'] = 'Detalhes da gravação';
$string['recording_creation_time'] = 'Tempo de criação da gravação';
$string['room_creation_time'] = 'Tempo de criação da sessão';
$string['back_to_list'] = 'Voltar à lista';
$string['browser_not_support_video'] = 'O seu navegador não suporta a etiqueta de vídeo.';
$string['room_title'] = 'Título do quarto';
$string['total_participants'] = 'Total de participantes';
$string['session_started_at'] = 'Sessão iniciada às';
$string['session_ended_at'] = 'Sessão encerrada às';

// artifacts.php
$string['no_artifacts'] = 'Nenhum artefacto encontrado.';
$string['artifact_id'] = 'ID do artefacto';
$string['type'] = 'Tipo';
$string['artifact_details'] = 'Detalhes do artefacto';
$string['no_permission'] = 'Não tem permissão para visualizar esta página.';
$string['token_usage'] = 'Utilização de tokens';
$string['duration_usage'] = 'Duração de utilização';
$string['character_count_usage'] = 'Contagem de caracteres';
$string['estimated_cost'] = 'Custo estimado';
$string['file_path'] = 'Caminho do ficheiro';
$string['mime_type'] = 'Tipo MIME';
$string['created_at'] = 'Criado em';

// Analytics strings
$string['download_excel_report'] = 'Descarregar relatório em Excel';
$string['download_raw_json'] = 'Baixar dados brutos';
$string['room_summary'] = 'Resumo do quarto';
$string['users_summary'] = 'Resumo dos utilizadores';
$string['see_excel_report'] = 'Consulte o relatório Excel para obter detalhes.';
$string['error_loading_analytics'] = 'Erro ao carregar dados analíticos: {$a}';
$string['error_generating_excel'] = 'Erro ao gerar relatório Excel: {$a}';

$string['analytics_room_room_id'] = 'ID do quarto';
$string['analytics_room_room_title'] = 'Título do quarto';
$string['analytics_room_room_creation'] = 'Tempo de criação do quarto';
$string['analytics_room_room_ended'] = 'Horário de encerramento da sala';
$string['analytics_room_room_duration'] = 'Duração da Sala';
$string['analytics_room_room_total_users'] = 'Total de participantes';
$string['analytics_room_enabled_e2ee'] = 'E2EE ativado';
$string['analytics_room_recording_status'] = 'Contagem de estado de gravação';
$string['analytics_room_rtmp_status'] = 'Contagem de estado RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Utilização total do serviço de voz';
$string['analytics_room_external_media_player_status'] = 'Contagem de estado do leitor de multimédia externo';
$string['analytics_room_etherpad_status'] = 'Contagem de estado do Etherpad';
$string['analytics_room_external_display_link_status'] = 'Contagem de estado do link de exibição externa';
$string['analytics_room_ingress_created'] = 'Contagem de entradas criadas';
$string['analytics_room_breakout_room'] = 'Contagem de salas de discussão';

$string['analytics_user_name'] = 'Nome';
$string['analytics_user_id'] = 'ID do utilizador';
$string['analytics_user_ex_id'] = 'ID do utilizador';
$string['analytics_user_is_admin'] = 'É administrador';
$string['analytics_user_duration'] = 'Duração';
$string['analytics_user_joined'] = 'Ingressou em';
$string['analytics_user_left'] = 'Saiu em';
$string['analytics_user_mic_status'] = 'Alterações no estado do microfone';
$string['analytics_user_mic_muted'] = 'Contagem de microfones silenciados';
$string['analytics_user_mic_duration'] = 'Duração com o microfone ativado';
$string['analytics_user_talked'] = 'Contagem de Conversas';
$string['analytics_user_talked_duration'] = 'Duração da conversa';
$string['analytics_user_webcam_status'] = 'Alterações no estado da webcam';
$string['analytics_user_webcam_duration'] = 'Duração com a webcam ativada';
$string['analytics_user_raise_hand'] = 'Contagem de mãos levantadas';
$string['analytics_user_voted_poll'] = 'Contagem de votos';
$string['analytics_user_whiteboard_annotated'] = 'Contagem anotada no quadro branco';
$string['analytics_user_whiteboard_files'] = 'Contagem de ficheiros de quadro branco';
$string['analytics_user_screen_share_status'] = 'Alterações no estado da partilha de tela';
$string['analytics_user_speech_services_usage'] = 'Utilização de serviços de voz';
$string['analytics_user_public_chat'] = 'Mensagens de chat público';
$string['analytics_user_private_chat'] = 'Mensagens de chat privado';
$string['analytics_user_chat_files'] = 'Arquivos de chat partilhados';
$string['analytics_user_interface_invisible'] = 'Contagem invisível da interface';
$string['analytics_user_connection_quality'] = 'Qualidade da ligação';
$string['analytics_user_connection_quality_excellent'] = 'Excelente';
$string['analytics_user_connection_quality_good'] = 'Bom';
$string['analytics_user_connection_quality_poor'] = 'Pobre';

$string['users_info'] = 'Informações do utilizador';
$string['polls'] = 'Pesquisas';
$string['question'] = 'Pergunta';
$string['options'] = 'Opções';
$string['file_name'] = 'Nome do ficheiro';
$string['checkcompletiontask'] = 'Verifique a conclusão do plugNmeet';

// attendance.php
$string['attendance_report'] = 'Relatório de Presença';
$string['status'] = 'Estatuto';
$string['present'] = 'Presente';
$string['absent'] = 'Ausente';
$string['incomplete'] = 'Incompleto';
$string['completed'] = 'Concluído';
$string['minutes_attended'] = 'Minutos de Presença';
$string['last_updated'] = 'Última atualização';
$string['mic_duration'] = 'Duração com o microfone ativado';
$string['webcam_duration'] = 'Duração com a webcam ativada';
$string['participation_progress'] = 'Progresso da participação';
$string['attendance_duration'] = 'Minutos de Presença';
$string['attendance_webcam_status'] = 'Webcam ativada';
$string['attendance_mic_status'] = 'Microfone ativado';
$string['attendance_talked_duration'] = 'Duração da conversa';
$string['attendance_voted_poll'] = 'Voto na sondagem';
$string['attendance_chat_messages'] = 'Mensagens de chat enviadas';
$string['attendance_raise_hand'] = 'Mão levantada';
$string['attendance_webcam_duration'] = 'Duração com a webcam ativada';
$string['attendance_mic_duration'] = 'Duração com o microfone ativado';
$string['attendance_whiteboard_annotated'] = 'Anotado no quadro branco';
$string['met'] = 'Conheci';
$string['required'] = 'Obrigatório';

// Status codes
$string['status_unknown_status'] = 'O servidor retornou um estado desconhecido.';
$string['status_success'] = 'Operação concluída com sucesso.';
$string['status_permission_denied'] = 'Permissão negada.';
$string['status_not_found'] = 'Nenhum {$a} encontrado.';
$string['status_conflict'] = 'Esta ação não pôde ser concluída devido a um conflito (por exemplo, a sala pode já existir).';
$string['status_invalid_token_or_signature'] = 'O token ou a assinatura do pedido é inválido.';
$string['status_invalid_api_key'] = 'A chave API fornecida é inválida. Verifique as definições do seu plugin.';
$string['status_internal_server_error'] = 'O servidor PlugNmeet encontrou um erro interno.';
$string['status_invalid_parameters'] = 'As informações fornecidas são inválidas.';
$string['status_missing_required_parameter'] = 'Faltam algumas informações necessárias.';
$string['status_room_not_found'] = 'O quarto especificado não foi encontrado.';
$string['status_user_not_found'] = 'Conta de utilizador não encontrada. Verifique se as suas credenciais de API estão corretas e se a sua subscrição está ativa.';
$string['status_user_blocked'] = 'A conta de utilizador foi bloqueada. Entre em contacto com o suporte.';
$string['status_user_not_active'] = 'A conta de utilizador está inativa. Isto ocorre provavelmente devido a uma assinatura inativa ou expirada.';
