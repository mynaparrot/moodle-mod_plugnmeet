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
$string['modulename_help'] = 'O módulo de atividade PlugNmeet permite criar e gerenciar sessões de webconferência em tempo real dentro do Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Administração PlugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Adicionar uma nova atividade PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Excluir artefatos';
$string['plugnmeet:deleterecording'] = 'Excluir gravações';
$string['plugnmeet:downloadanalyticsreport'] = 'Baixar relatório de análise';
$string['plugnmeet:downloadartifacts'] = 'Baixar artefatos';
$string['plugnmeet:downloadattendance'] = 'Baixar relatório de presença';
$string['plugnmeet:downloadrecordings'] = 'Baixar gravações';
$string['plugnmeet:manage'] = 'Gerenciar configurações do PlugNmeet';
$string['plugnmeet:view'] = 'Visualizar atividade PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Visualizar relatório de salas ativas';
$string['plugnmeet:viewartifacts'] = 'Visualizar artefatos';
$string['plugnmeet:viewattendance'] = 'Visualizar relatório de presença';
$string['plugnmeet:viewattendancelist'] = 'Visualizar lista de presença';
$string['plugnmeet:viewlivesessioninfo'] = 'Visualizar informações da sessão ao vivo';
$string['plugnmeet:viewrecordings'] = 'Visualizar gravações';
$string['plugnmeetfieldset'] = 'Conjunto de campos de exemplo personalizado';
$string['plugnmeetname'] = 'Nome de exemplo personalizado';
$string['plugnmeetname_help'] = 'Ajuda de exemplo personalizada';
$string['subplugintype_pnmext'] = 'Extensão PlugNmeet';
$string['subplugintype_pnmext_plural'] = 'Extensões PlugNmeet';

// Admin Settings
$string['api_config'] = 'Configuração da API';
$string['server_url'] = 'URL do servidor PlugNmeet';
$string['server_url_desc'] = 'O URL base do seu servidor PlugNmeet (por exemplo, https://pnm.example.com).';
$string['api_key'] = 'Chave da API';
$string['api_key_desc'] = 'A chave de API exclusiva fornecida pelo seu servidor PlugNmeet.';
$string['api_secret'] = 'Segredo da API';
$string['api_secret_desc'] = 'O segredo da API fornecido pelo seu servidor PlugNmeet usado para autenticação segura.';
$string['guest_access_hdr'] = 'Configurações de acesso de convidado';
$string['allow_guest_global'] = 'Permitir acesso de convidado globalmente';
$string['allow_guest_global_desc'] = 'Atua como um interruptor mestre. Se desativado, os professores não verão a opção de habilitar a entrada de convidados ao criar ou editar atividades.';
$string['guest_link_expiration'] = 'Expiração do link de convidado (horas)';
$string['guest_link_expiration_desc'] = 'Determina quantas horas um link de acesso de convidado permanece ativo depois que um professor o gera.';
$string['defaults'] = 'Padrões técnicos';
$string['defaults_desc'] = 'Configurações técnicas padrão aplicadas a cada nova sessão PlugNmeet.';
$string['enable_dynacast'] = 'Habilitar Dynacast';
$string['enable_dynacast_des'] = 'Otimiza o desempenho pausando dinamicamente as camadas de vídeo que não estão sendo visualizadas pelos participantes. Isso reduz significativamente o uso da CPU e da largura de banda do lado do servidor. **Nota:** Isso será habilitado automaticamente se estiver usando codecs SVC (VP9/AV1) e é necessário para simulcast multi-codec.';
$string['enable_simulcast'] = 'Habilitar Simulcast';
$string['enable_simulcast_des'] = 'Oferece várias camadas de qualidade de vídeo para garantir uma experiência suave para usuários com conexões fracas.';
$string['video_codec'] = 'Codec de vídeo';
$string['video_codec_des'] = 'O padrão de codificação para transmissão de vídeo. **VP8** é recomendado para WebRTC, pois oferece o melhor equilíbrio entre qualidade e baixa latência. **Aviso:** Nem todos os navegadores suportam todos os codecs; certifique-se de que seus usuários estejam em navegadores modernos se estiver usando VP9 ou H.265.';
$string['default_webcam_resolution'] = 'Resolução padrão da webcam';
$string['default_webcam_resolution_des'] = 'A configuração de resolução inicial para as câmeras dos participantes.';
$string['default_screen_share_resolution'] = 'Resolução padrão do compartilhamento de tela';
$string['default_screen_share_resolution_des'] = 'A configuração de resolução inicial para o compartilhamento de tela.';
$string['default_audio_preset'] = 'Predefinição de áudio padrão';
$string['default_audio_preset_des'] = 'O perfil de qualidade de áudio otimizado para a sessão.';

$string['branding'] = 'Marca e personalização';
$string['custom_logo'] = 'Logotipo personalizado';
$string['custom_logo_des'] = 'Carregue seu logotipo para a sala de reunião. Se deixado em branco, o logotipo padrão do PlugNmeet será usado.';
$string['custom_css_url'] = 'URL CSS personalizado';
$string['custom_css_url_des'] = 'Vincule um arquivo .css externo para sobrescrever ou personalizar os estilos da interface.';
$string['primary_color'] = 'Cor primária';
$string['primary_color_des'] = 'Cor de destaque principal usada para botões, estados ativos e destaques.';
$string['secondary_color'] = 'Cor secundária';
$string['secondary_color_des'] = 'A cor de destaque usada para elementos secundários da interface do usuário.';
$string['background_color'] = 'Cor de fundo';
$string['background_color_des'] = 'A cor de fundo principal da interface.';
$string['background_image'] = 'Imagem de fundo';
$string['background_image_des'] = 'Papel de parede de fundo. Para melhores resultados, use uma imagem de 1920x1080.';
$string['header_color'] = 'Cor do cabeçalho';
$string['header_color_des'] = 'Cor de fundo para a barra de navegação superior.';
$string['footer_color'] = 'Cor do rodapé';
$string['footer_color_des'] = 'Cor de fundo para a barra de ferramentas inferior.';
$string['left_color'] = 'Cor do lado esquerdo';
$string['left_color_des'] = 'Cor de fundo para a barra lateral de navegação esquerda.';
$string['side_panel_bg_color'] = 'Cor de fundo do painel lateral';
$string['side_panel_bg_color_des'] = 'Cor de fundo para os painéis do lado direito (Chat e lista de participantes).';
$string['copyright_text'] = 'Texto de direitos autorais';
$string['copyright_text_des'] = 'Texto da marca exibido no rodapé das configurações. HTML é suportado para links ou estilos personalizados.';
$string['client_load'] = 'Método de carregamento do cliente';
$string['client_load_des'] = 'Escolha **Remoto (Incorporado)** (Recomendado) para uma experiência perfeita e personalizada incorporada diretamente na sua página Moodle. Escolha **Redirecionar** para usar a interface padrão do PlugNmeet; observe que os usuários sairão do seu site e a personalização da marca pode não ser aplicada.';
$string['remote'] = 'Remoto (Incorporado)';
$string['redirect'] = 'Redirecionar para o servidor';

$string['yes'] = 'Sim';
$string['no'] = 'Não';
$string['recordings'] = "Gravações";
$string['recording'] = "Gravação";
$string['artifacts'] = "Artefatos da sala";
$string['attendance'] = "Relatório de presença";
$string['artifact'] = "Artefato";
$string['room_subject'] = 'sala';
$string['user_subject'] = 'usuário';
$string['activeroomsreport'] = 'Relatório de salas ativas';
$string['noactiverooms'] = 'Não há salas ativas no momento.';
$string['activerooms'] = 'Salas ativas';
$string['loading'] = 'Carregando...';

// mod_form.php
$string['roomtitle'] = 'Título da sala';
$string['roomtitle_help'] = 'O nome usado para a atividade do Moodle e o cabeçalho da reunião ao vivo. Ajuda os alunos a identificar a sessão em seu curso e dentro da sala.';
$string['welcome_message'] = 'Mensagem de boas-vindas';
$string['welcome_message_help'] = 'Qualquer texto inserido aqui aparecerá como a primeira mensagem no chat público quando os usuários entrarem na sala. Isso é útil para compartilhar instruções, links ou informações importantes com os participantes ao entrarem.';
$string['max_participants'] = 'Máximo de participantes';
$string['max_participants_help'] = 'Defina este valor para limitar quantos usuários podem participar da sessão ao mesmo tempo. Defina-o como 0 para permitir participantes ilimitados, o que significa que não há restrição sobre quantos usuários podem participar.';
$string['room_features'] = 'Recursos da sala';
$string['recording_features'] = 'Recursos de gravação';
$string['chat_features'] = 'Recursos de chat';
$string['other_features'] = 'Outros recursos';
$string['e2ee_features'] = 'Criptografia de ponta a ponta';
$string['insights_features'] = 'Insights e recursos de IA';
$string['defaultlock'] = 'Configurações de bloqueio padrão';
$string['advanced_completion'] = 'Conclusão avançada';
$string['available'] = 'Disponível a partir de';
$string['available_help'] = 'Determina quando os participantes podem começar a entrar na sessão. Os usuários não poderão entrar na sala antes desta data e hora.';
$string['deadline'] = 'Disponível até';
$string['deadline_help'] = 'Determina a data e hora finais em que os participantes podem acessar a sessão. O acesso será bloqueado assim que este prazo expirar.';
$string['err_deadline_before_available'] = 'A data "Disponível até" não pode ser anterior à data "Disponível a partir de".';
$string['error_analytics_required_for_completion'] = 'A análise deve ser marcada se algum critério de conclusão for definido.';

$string['allow_webcams'] = 'Permitir webcams';
$string['allow_webcams_help'] = 'Permitir que os participantes usem suas webcams.';
$string['mute_on_start'] = 'Silenciar ao iniciar';
$string['mute_on_start_help'] = 'Silenciar automaticamente todos os participantes quando eles entrarem na sessão.';
$string['allow_screen_share'] = 'Permitir compartilhamento de tela';
$string['allow_screen_share_help'] = 'Permitir que os participantes compartilhem sua tela.';
$string['allow_rtmp'] = 'Permitir streaming RTMP';
$string['allow_rtmp_help'] = 'Permite que os moderadores transmitam a sessão ao vivo para plataformas externas como YouTube, Facebook ou Twitch. Perfeito para webinars públicos ou palestras de convidados.';
$string['allow_raise_hand'] = 'Permitir levantar a mão';
$string['allow_raise_hand_help'] = 'Permitir que os participantes levantem a mão.';
$string['admin_only_webcams'] = 'Webcams apenas para administradores';
$string['admin_only_webcams_help'] = 'Permitir que apenas os moderadores usem suas webcams.';
$string['allow_view_other_webcams'] = 'Permitir visualizar outras webcams';
$string['allow_view_other_webcams_help'] = 'Permitir que os participantes visualizem as webcams de outros participantes. Se desativado, eles verão apenas as webcams dos moderadores.';
$string['allow_view_other_users_list'] = 'Permitir visualizar lista de outros usuários';
$string['allow_view_other_users_list_help'] = 'Permitir que os participantes vejam a lista de outros participantes.';
$string['room_duration'] = 'Duração da sala (minutos)';
$string['room_duration_help'] = 'Define por quanto tempo a sala pode permanecer aberta antes de fechar automaticamente. Digite 0 se não quiser definir nenhum limite de tempo, permitindo que a sala permaneça ativa sem restrições.';
$string['moderator_join_first'] = 'Moderador entra primeiro';
$string['moderator_join_first_help'] = 'Quando habilitado, a sessão não será iniciada e ninguém poderá entrar até que um moderador (como um professor) entre primeiro. Os participantes permanecerão na página de atividade do Moodle e não entrarão na sala ou em uma área de espera. Isso é diferente da opção Sala de Espera, onde os usuários ainda podem entrar e esperar.';
$string['enable_analytics'] = 'Habilitar análise';
$string['enable_analytics_help'] = 'Rastreia dados de participação e engajamento para a sessão. **Nota:** Isso deve ser habilitado se algum critério de conclusão for definido.';
$string['allow_virtual_bg'] = 'Permitir fundos virtuais';
$string['allow_virtual_bg_help'] = 'Permite que os participantes desfocem seu fundo ou usem uma imagem virtual. Ótimo para manter a privacidade dos alunos e garantir uma aparência profissional em sala de aula.';
$string['auto_gen_user_id'] = 'Gerar ID de usuário automaticamente';
$string['auto_gen_user_id_help'] = 'Quando habilitado, o sistema cria um novo ID para que o mesmo usuário possa entrar de vários dispositivos — por exemplo, quando um professor entra de um tablet para desenhar no quadro branco enquanto usa um PC para a câmera e o microfone; no entanto, é <b>recomendado</b> manter isso desativado para que o ID de usuário do Moodle seja usado e as entradas duplicadas sejam evitadas.';

$string['allow_recording'] = 'Permitir gravação (interruptor mestre)';
$string['allow_recording_help'] = 'O interruptor mestre principal para todos os recursos de gravação. Se desativado, as opções de gravação em nuvem e local serão ocultadas dos moderadores.';
$string['allow_cloud_recording'] = 'Permitir gravação em nuvem';
$string['allow_cloud_recording_help'] = 'Habilita a gravação no servidor PlugNmeet. O vídeo final é processado e armazenado na nuvem, facilitando o compartilhamento via link após o término da sessão.';
$string['enable_auto_cloud_recording'] = 'Habilitar gravação automática em nuvem';
$string['enable_auto_cloud_recording_help'] = 'Aciona automaticamente a gravação em nuvem no momento em que o primeiro moderador entra na sessão. Ideal para garantir que nenhuma palestra seja esquecida.';
$string['allow_local_recording'] = 'Permitir gravação local';
$string['allow_local_recording_help'] = 'Permite a gravação diretamente no computador. **Nota:** Requer Google Chrome. Para capturar todo o áudio da sessão, o usuário deve compartilhar sua "Guia do Chrome" e marcar a caixa "Também compartilhar áudio da guia". O arquivo é salvo localmente no dispositivo após o término.';

$string['allow_chat'] = 'Permitir chat (interruptor mestre global)';
$string['allow_chat_help'] = 'O interruptor mestre absoluto para todas as funções de chat. Se desativado, toda a área de chat é removida para todos, incluindo moderadores. Nenhum chat público ou privado será possível.';
$string['allow_file_upload'] = 'Permitir upload de arquivos';
$string['allow_file_upload_help'] = 'Habilita a capacidade de compartilhar arquivos dentro do chat. Isso requer que o interruptor mestre "Permitir chat" esteja ativo.';

$string['allow_shared_notepad'] = 'Permitir bloco de notas compartilhado';
$string['allow_shared_notepad_help'] = 'Habilita um editor de texto colaborativo onde alunos e professores podem fazer anotações em tempo real juntos. Isso é perfeito para brainstorming, coautoria ou construção de um resumo de aula compartilhado.';

$string['whiteboard_features'] = 'Recursos do quadro branco';
$string['allow_whiteboard'] = 'Permitir quadro branco';
$string['allow_whiteboard_help'] = 'Desbloqueia um espaço de desenho interativo para a sessão. Use-o para esboçar diagramas, resolver problemas de matemática visualmente ou permitir que os alunos anotem conteúdo compartilhado.';
$string['preload_file'] = 'Pré-carregar arquivo de apresentação';
$string['preload_file_help'] = 'Permite que você carregue um documento PDF ou Office que será automaticamente carregado no quadro branco quando a sessão começar. Isso garante que seu material de apresentação esteja pronto para a aula imediatamente. <strong>Tamanho máximo do arquivo: 5Mb</strong>';

$string['allowed_external_media_player'] = 'Permitir reprodutor de mídia externo';
$string['allowed_external_media_player_help'] = 'Permite que os moderadores sincronizem e reproduzam vídeos de fontes como YouTube ou Vimeo para toda a turma. Ideal para analisar clipes educacionais ou assistir a documentários juntos sem atrasos de largura de banda.';

$string['activate_waiting_room'] = 'Ativar sala de espera';
$string['activate_waiting_room_help'] = 'Habilitar a sala de espera para esta sessão.';
$string['waiting_room_msg'] = 'Mensagem da sala de espera';
$string['waiting_room_msg_help'] = 'Esta mensagem é exibida aos usuários enquanto eles esperam para serem admitidos na sala. Use-a para compartilhar instruções, expectativas ou informações úteis antes do início da sessão.';

$string['allow_breakout_rooms'] = 'Permitir salas de breakout';
$string['allow_breakout_rooms_help'] = 'Permite que os moderadores dividam os participantes em grupos menores para discussões focadas, projetos colaborativos ou atividades de grupo privadas.';
$string['allowed_number_rooms'] = 'Máximo de salas de breakout';
$string['allowed_number_rooms_help'] = 'O número máximo de sub-salas que um moderador pode criar dentro de uma única sessão.';

$string['allow_display_external_link_features'] = 'Permitir compartilhamento de link externo';
$string['allow_display_external_link_features_help'] = 'Permite que os moderadores exibam conteúdo educacional externo — como atividades H5P, pacotes SCORM ou sistemas de quiz (por exemplo, Kahoot) — diretamente para todos os participantes durante a sessão.';

$string['allow_ingress_features'] = 'Permitir ingresso (streaming externo)';
$string['allow_ingress_features_help'] = 'Permite que os professores transmitam vídeo de alta qualidade para a sessão usando software externo como OBS via protocolos RTMP ou WHIP. Isso é ideal para compartilhar conteúdo de vídeo de alta resolução, sessões pré-gravadas ou ignorar as limitações de upload do navegador.';

$string['allow_polls'] = 'Permitir enquetes';
$string['allow_polls_help'] = 'Permite que os moderadores criem enquetes interativas e questionários rápidos durante a sessão. Esta é uma ótima maneira de verificar a compreensão dos alunos e aumentar o engajamento.';

$string['sip_dial_in_features_is_allow'] = 'Permitir discagem SIP';
$string['sip_dial_in_features_is_allow_help'] = 'Permite que os participantes entrem na sessão de áudio por meio de uma chamada telefônica tradicional. Isso é essencial para alunos com conexões de internet ruins ou para aqueles que precisam entrar em trânsito.';

$string['enable_end_to_end_encryption_features'] = 'Habilitar criptografia de ponta a ponta (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Fornece forte segurança criptografando fluxos de vídeo e áudio entre os participantes. Neste modo, o servidor gera e distribui com segurança uma chave de criptografia exclusiva para a sessão.';
$string['enabled_self_insert_encryption_key'] = 'Permitir chaves definidas pelo participante';
$string['enabled_self_insert_encryption_key_help'] = 'Permite que os participantes insiram manualmente uma chave secreta compartilhada, oferecendo o mais alto nível de privacidade, pois o servidor nunca tem acesso às chaves de criptografia. É responsabilidade do anfitrião compartilhar o mesmo segredo com todos os participantes; se chaves diferentes forem usadas, os usuários não conseguirão se comunicar. <strong>Nota:</strong> Quando esta opção é habilitada, recursos que exigem processamento de mídia no lado do servidor (como gravação em nuvem, transcrição e resumo de IA) serão automaticamente desativados.';
$string['included_e2ee_chat_messages'] = 'Criptografar mensagens de chat';
$string['included_e2ee_chat_messages_help'] = 'Estende a criptografia de ponta a ponta ao chat de texto, garantindo que as mensagens sejam legíveis apenas pelos participantes na sala.';
$string['included_e2ee_whiteboard'] = 'Criptografar dados do quadro branco';
$string['included_e2ee_whiteboard_help'] = 'Inclui todos os desenhos e anotações do quadro branco na camada de criptografia de ponta a ponta para total privacidade dos dados.';

$string['insights_features_is_allow'] = 'Permitir insights da sessão (interruptor mestre)';
$string['insights_features_is_allow_help'] = 'O interruptor mestre principal para todos os recursos baseados em dados. Se desativado, todas as sub-opções — incluindo Transcrição, Assistente de IA e Relatórios de Reunião — estarão completamente indisponíveis.';
$string['insights_transcription_features_is_allow'] = 'Permitir transcrição ao vivo';
$string['insights_transcription_features_is_allow_help'] = 'Habilita a conversão de fala em texto em tempo real durante a sessão. Isso deve ser habilitado para que a tradução da transcrição ou a síntese de fala (TTS) funcione.';
$string['insights_transcription_features_is_allow_translation'] = 'Permitir tradução de transcrição';
$string['insights_transcription_features_is_allow_translation_help'] = 'Permite que a transcrição ao vivo seja traduzida para diferentes idiomas, suportando alunos internacionais e ambientes multilíngues.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Permitir síntese de fala (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Habilita a conversão de texto em fala, permitindo que a transcrição ao vivo seja lida em voz alta para melhor acessibilidade e para participantes com deficiência visual.';
$string['insights_chat_translation_features_is_allow'] = 'Permitir tradução de chat';
$string['insights_chat_translation_features_is_allow_help'] = 'Habilita a tradução em tempo real de mensagens de chat, permitindo que os participantes se comuniquem instantaneamente em diferentes idiomas.';
$string['insights_ai_features_is_allow'] = 'Permitir assistente de reunião de IA (interruptor mestre de IA)';
$string['insights_ai_features_is_allow_help'] = 'O interruptor mestre para todas as capacidades alimentadas por IA. Se desativado, recursos específicos como Chat de IA e Resumo de Reunião serão ocultados, mesmo que os insights da sessão estejam ativos.';
$string['insights_ai_text_chat_features_is_allow'] = 'Permitir assistente de chat de IA';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integra um assistente de IA diretamente no chat para ajudar a responder perguntas, explicar conceitos complexos e facilitar a discussão em grupo.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Permitir resumo de reunião de IA';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Gera automaticamente um resumo conciso de IA após o término da sessão, destacando os principais pontos educacionais, decisões e tarefas de acompanhamento.';

$string['lock_microphone'] = 'Bloquear microfones';
$string['lock_microphone_help'] = 'Silencia todos os participantes por padrão ao entrar. Apenas os moderadores podem reativar o som ou conceder permissão para falar.';
$string['lock_webcam'] = 'Bloquear webcams';
$string['lock_webcam_help'] = 'Desativa as câmeras para todos os participantes por padrão. Útil para economizar largura de banda ou garantir a privacidade dos alunos.';
$string['lock_screen_sharing'] = 'Bloquear compartilhamento de tela';
$string['lock_screen_sharing_help'] = 'Restringe o compartilhamento de tela apenas aos moderadores. Impede que os participantes interrompam com suas próprias telas.';
$string['lock_whiteboard'] = 'Bloquear quadro branco';
$string['lock_whiteboard_help'] = 'Restringe as ferramentas de desenho do quadro branco apenas aos moderadores. Impede anotações não autorizadas pelos participantes.';
$string['lock_shared_notepad'] = 'Bloquear bloco de notas compartilhado';
$string['lock_shared_notepad_help'] = 'Desativa o bloco de notas colaborativo para os participantes para evitar escrita fora do tópico ou distrações.';
$string['lock_chat'] = 'Bloquear chat público';
$string['lock_chat_help'] = 'Oculta ou desativa completamente a área de chat público para todos os participantes.';
$string['lock_chat_send_message'] = 'Bloquear envio de mensagens';
$string['lock_chat_send_message_help'] = 'Permite que os participantes leiam o chat, mas os impede de enviar mensagens.';
$string['lock_chat_file_share'] = 'Bloquear compartilhamento de arquivos';
$string['lock_chat_file_share_help'] = 'Impede que os participantes carreguem ou compartilhem arquivos na área de chat.';
$string['lock_private_chat'] = 'Bloquear chat privado';
$string['lock_private_chat_help'] = 'Desativa a mensagem privada 1-para-1 entre os participantes. Nota: Os participantes ainda podem enviar mensagens privadas aos moderadores para obter ajuda ou fazer perguntas.';

$string['completion_minutes'] = 'Minutos assistidos';
$string['completion_minutes_help'] = 'Exigir que o usuário esteja na sessão por um certo número de minutos.';
$string['completion_minutes_desc'] = 'O usuário deve assistir à sessão por pelo menos {$a} minutos.';
$string['completion_raised_hand'] = 'Mão levantada';
$string['completion_raised_hand_help'] = 'Exigir que o usuário levante a mão pelo menos 1 vez.';
$string['completion_chat_messages'] = 'Mensagens de chat enviadas';
$string['completion_chat_messages_help'] = 'Exigir que o usuário envie pelo menos 1 mensagem de chat.';
$string['completion_webcam_enabled'] = 'Webcam habilitada';
$string['completion_webcam_enabled_help'] = 'Exigir que o usuário habilite sua webcam pelo menos uma vez.';
$string['completion_webcam_duration'] = 'Duração da webcam habilitada (minutos)';
$string['completion_webcam_duration_help'] = 'Exigir que o usuário tenha sua webcam habilitada por um certo número de minutos.';
$string['completion_webcam_duration_desc'] = 'O usuário deve ter sua webcam habilitada por pelo menos {$a} minutos.';
$string['completion_mic_enabled'] = 'Microfone habilitado';
$string['completion_mic_enabled_help'] = 'Exigir que o usuário habilite seu microfone pelo menos uma vez.';
$string['completion_mic_duration'] = 'Duração do microfone habilitado (minutos)';
$string['completion_mic_duration_help'] = 'Exigir que o usuário tenha seu microfone habilitado por um certo número de minutos.';
$string['completion_mic_duration_desc'] = 'O usuário deve ter seu microfone habilitado por pelo menos {$a} minutos.';
$string['completion_talk_duration'] = 'Duração da fala (minutos)';
$string['completion_talk_duration_help'] = 'Exigir que o usuário fale por um certo número de minutos.';
$string['completion_talk_duration_desc'] = 'O usuário deve falar por pelo menos {$a} minutos.';
$string['completion_poll_voted'] = 'Votou na enquete';
$string['completion_poll_voted_help'] = 'Exigir que o usuário vote em pelo menos uma enquete.';
$string['completion_whiteboard_annotated'] = 'Anotado no quadro branco';
$string['completion_whiteboard_annotated_help'] = 'Exigir que o usuário anote no quadro branco.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Armazena estatísticas da sessão para que os usuários determinem a conclusão da atividade.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'O ID do usuário.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Dados da sessão codificados em JSON (minutos, mensagens de chat, etc.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'A hora em que as estatísticas foram atualizadas pela última vez.';

// view.php
$string['join_session'] = 'Entrar na sessão';
$string['start_session'] = 'Iniciar sessão';
$string['end_session'] = 'Encerrar sessão';
$string['participants'] = 'Participantes';
$string['is_recording'] = 'Está gravando';
$string['is_active'] = 'Está ativo';
$string['room_info'] = 'Detalhes da sessão ao vivo';
$string['participants_info'] = 'Participantes ao vivo';
$string['room_id'] = 'ID da sala';
$string['creation_time'] = 'Hora de criação';
$string['name'] = 'Nome';
$string['user_id'] = 'ID do usuário';
$string['is_admin'] = 'É administrador';
$string['is_presenter'] = 'É apresentador';
$string['joined_at'] = 'Entrou em';
$string['moderator_not_joined'] = 'Um moderador deve iniciar a sessão antes que você possa entrar.';
$string['session_available_from'] = 'Disponível a partir de: {$a}';
$string['session_available_until'] = 'Disponível até: {$a}';
$string['session_not_started_yet'] = 'Esta sessão ainda não começou.';
$string['session_ended'] = 'Esta sessão terminou.';
$string['client_files_missing'] = 'Arquivos do cliente (JS/CSS) estão faltando. Por favor, verifique a configuração do seu servidor PlugNmeet.';
$string['client_connection_error'] = 'Ocorreu um erro ao conectar-se ao servidor PlugNmeet: {$a}. Por favor, verifique as configurações do seu plugin.';
$string['allow_guest'] = 'Permitir usuários convidados';
$string['allow_guest_help'] = 'Quando habilitado, um link seguro e compartilhável é gerado para que usuários externos (como professores convidados ou participantes sem uma conta Moodle) possam entrar na sessão; um administrador pode visualizar e compartilhar este link.';
$string['guest_join_link'] = 'Link de entrada de convidado';
$string['guest_join_link_help'] = 'Compartilhe este link com participantes externos. Este link permanecerá válido por {$a} horas. Cada recarregamento da página gerará um novo link, mas os links previamente compartilhados permanecerão válidos até o seu tempo de expiração original.';
$string['copy_link'] = 'Copiar link';
$string['link_copied'] = 'Link copiado para a área de transferência.';
$string['guest_join_title'] = 'Entrar na reunião como convidado';
$string['enter_display_name'] = 'Digite seu nome de exibição';
$string['join_as_guest'] = 'Entrar na reunião';
$string['guest_access_denied'] = 'O acesso de convidado não está habilitado para esta reunião.';
$string['invalid_guest_token'] = 'Token de entrada de convidado inválido ou expirado.';
$string['guest_link_expired'] = 'Este link de entrada de convidado expirou.';
$string['error_joining_session'] = 'Ocorreu um erro ao entrar na sessão: {$a}';
$string['already_logged_in'] = 'Você já está logado no Moodle. Você pode entrar na sessão diretamente desta página de atividade.';
$string['total_webcams'] = 'Total de webcams';
$string['total_mics'] = 'Total de microfones';
$string['total_screen_shares'] = 'Total de compartilhamentos de tela';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Microfones';
$string['screenshares'] = 'Compartilhamentos de tela';

// Events
$string['event_room_started'] = 'Sala iniciada';
$string['event_room_ended'] = 'Sala encerrada';
$string['event_room_created'] = 'Sala criada';
$string['event_session_ended'] = 'Sessão encerrada';
$string['event_participant_joined'] = 'Participante entrou';
$string['event_participant_left'] = 'Participante saiu';
$string['event_artifact_created'] = 'Artefato criado';
$string['event_recording_proceeded'] = 'Gravação pronta';
$string['event_plugin_error'] = 'Erro do PlugNmeet';
$string['event_track_published'] = 'Faixa publicada';
$string['event_track_unpublished'] = 'Faixa não publicada';
$string['event_recording_started'] = 'Gravação iniciada';
$string['event_recording_ended'] = 'Gravação encerrada';
$string['event_rtmp_started'] = 'Transmissão RTMP iniciada';
$string['event_rtmp_ended'] = 'Transmissão RTMP encerrada';

// Notifications
$string['messageprovider:recording_ready'] = 'Notificações para gravações prontas';
$string['messageprovider:artifact_ready'] = 'Notificações para artefatos prontos';
$string['recording_ready_notification_subject'] = 'Gravação pronta: {$a}';
$string['recording_ready_notification_fullmessage'] = 'A gravação da sessão "{$a->roomname}" está agora pronta e processada. Você pode visualizá-la aqui: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>A gravação da sessão <strong>"{$a->roomname}"</strong> está agora pronta e processada.</p><p><a href="{$a->url}">Clique aqui para visualizar a gravação.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Gravação pronta para {$a}';
$string['artifact_ready_notification_subject'] = 'Artefato pronto: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Um novo artefato ({$a->type}) para a sessão "{$a->roomname}" está agora disponível. Você pode visualizá-lo aqui: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Um novo artefato ({$a->type}) para a sessão <strong>"{$a->roomname}"</strong> está agora disponível.</p><p><a href="{$a->url}">Clique aqui para visualizar os detalhes do artefato.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Artefato pronto para {$a}';

// recordings.php
$string['no_recordings'] = 'Nenhuma gravação encontrada.';
$string['recording_id'] = 'ID da gravação';
$string['room_sid'] = 'SID da sala';
$string['file_size'] = 'Tamanho do arquivo';
$string['created_at'] = 'Criado em';
$string['actions'] = 'Ações';
$string['view'] = 'Visualizar';
$string['play'] = 'Reproduzir';
$string['download'] = 'Baixar';
$string['delete'] = 'Excluir';
$string['delete_confirm'] = 'Tem certeza de que deseja excluir isso?';
$string['delete_success'] = 'Excluído com sucesso.';
$string['recording_details'] = 'Detalhes da gravação';
$string['recording_creation_time'] = 'Hora de criação da gravação';
$string['room_creation_time'] = 'Hora de criação da sessão';
$string['back_to_list'] = 'Voltar para a lista';
$string['browser_not_support_video'] = 'Seu navegador não suporta a tag de vídeo.';
$string['room_title'] = 'Título da sala';
$string['total_participants'] = 'Total de participantes';
$string['session_started_at'] = 'Sessão iniciada em';
$string['session_ended_at'] = 'Sessão encerrada em';

// artifacts.php
$string['no_artifacts'] = 'Nenhum artefato encontrado.';
$string['artifact_id'] = 'ID do artefato';
$string['type'] = 'Tipo';
$string['artifact_details'] = 'Detalhes do artefato';
$string['no_permission'] = 'Você não tem permissão para visualizar esta página.';
$string['token_usage'] = 'Uso do token';
$string['duration_usage'] = 'Uso da duração';
$string['character_count_usage'] = 'Uso da contagem de caracteres';
$string['estimated_cost'] = 'Custo estimado';
$string['file_path'] = 'Caminho do arquivo';
$string['mime_type'] = 'Tipo MIME';
$string['created_at'] = 'Criado em';
$string['meeting_summary'] = 'Resumo da reunião';
$string['error_loading_meeting_summary'] = 'Erro ao carregar o resumo da reunião: {$a}';

// Analytics strings
$string['download_excel_report'] = 'Baixar relatório Excel';
$string['download_raw_json'] = 'Baixar dados brutos';
$string['room_summary'] = 'Resumo da sala';
$string['users_summary'] = 'Resumo dos usuários';
$string['see_excel_report'] = 'Ver relatório Excel para detalhes';
$string['error_loading_analytics'] = 'Erro ao carregar dados de análise: {$a}';
$string['error_generating_excel'] = 'Erro ao gerar relatório Excel: {$a}';

$string['analytics_room_room_id'] = 'ID da sala';
$string['analytics_room_room_title'] = 'Título da sala';
$string['analytics_room_room_creation'] = 'Hora de criação da sala';
$string['analytics_room_room_ended'] = 'Hora de término da sala';
$string['analytics_room_room_duration'] = 'Duração da sala';
$string['analytics_room_room_total_users'] = 'Total de participantes';
$string['analytics_room_enabled_e2ee'] = 'E2EE habilitado';
$string['analytics_room_recording_status'] = 'Contagem de status de gravação';
$string['analytics_room_rtmp_status'] = 'Contagem de status RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Uso total do serviço de fala';
$string['analytics_room_external_media_player_status'] = 'Contagem de status do reprodutor de mídia externo';
$string['analytics_room_etherpad_status'] = 'Contagem de status do Etherpad';
$string['analytics_room_external_display_link_status'] = 'Contagem de status do link de exibição externa';
$string['analytics_room_ingress_created'] = 'Contagem de ingresso criado';
$string['analytics_room_breakout_room'] = 'Contagem de salas de breakout';

$string['analytics_user_name'] = 'Nome';
$string['analytics_user_id'] = 'ID do usuário';
$string['analytics_user_ex_id'] = 'ID do usuário';
$string['analytics_user_is_admin'] = 'É administrador';
$string['analytics_user_duration'] = 'Duração';
$string['analytics_user_joined'] = 'Entrou em';
$string['analytics_user_left'] = 'Saiu em';
$string['analytics_user_mic_status'] = 'Alterações de status do microfone';
$string['analytics_user_mic_muted'] = 'Contagem de microfones silenciados';
$string['analytics_user_mic_duration'] = 'Duração do microfone habilitado';
$string['analytics_user_talked'] = 'Contagem de falas';
$string['analytics_user_talked_duration'] = 'Duração da fala';
$string['analytics_user_webcam_status'] = 'Alterações de status da webcam';
$string['analytics_user_webcam_duration'] = 'Duração da webcam habilitada';
$string['analytics_user_raise_hand'] = 'Contagem de mãos levantadas';
$string['analytics_user_voted_poll'] = 'Contagem de votos em enquetes';
$string['analytics_user_whiteboard_annotated'] = 'Contagem de anotações no quadro branco';
$string['analytics_user_whiteboard_files'] = 'Contagem de arquivos do quadro branco';
$string['analytics_user_screen_share_status'] = 'Alterações de status do compartilhamento de tela';
$string['analytics_user_speech_services_usage'] = 'Uso de serviços de fala';
$string['analytics_user_public_chat'] = 'Mensagens de chat público';
$string['analytics_user_private_chat'] = 'Mensagens de chat privado';
$string['analytics_user_chat_files'] = 'Arquivos de chat compartilhados';
$string['analytics_user_interface_invisible'] = 'Contagem de interface invisível';
$string['analytics_user_connection_quality'] = 'Qualidade da conexão';
$string['analytics_user_connection_quality_excellent'] = 'Excelente';
$string['analytics_user_connection_quality_good'] = 'Boa';
$string['analytics_user_connection_quality_poor'] = 'Ruim';

$string['users_info'] = 'Informações dos usuários';
$string['polls'] = 'Enquetes';
$string['question'] = 'Pergunta';
$string['options'] = 'Opções';
$string['file_name'] = 'Nome do arquivo';
$string['checkcompletiontask'] = 'Verificar conclusão do plugNmeet';

// attendance.php
$string['attendance_report'] = 'Relatório de presença';
$string['status'] = 'Status';
$string['present'] = 'Presente';
$string['absent'] = 'Ausente';
$string['incomplete'] = 'Incompleto';
$string['completed'] = 'Concluído';
$string['minutes_attended'] = 'Minutos assistidos';
$string['last_updated'] = 'Última atualização';
$string['mic_duration'] = 'Duração do microfone habilitado';
$string['webcam_duration'] = 'Duração da webcam habilitada';
$string['participation_progress'] = 'Progresso da participação';
$string['attendance_duration'] = 'Minutos assistidos';
$string['attendance_webcam_status'] = 'Webcam habilitada';
$string['attendance_mic_status'] = 'Microfone habilitado';
$string['attendance_talked_duration'] = 'Duração da fala';
$string['attendance_voted_poll'] = 'Votou na enquete';
$string['attendance_chat_messages'] = 'Mensagens de chat enviadas';
$string['attendance_raise_hand'] = 'Mão levantada';
$string['attendance_webcam_duration'] = 'Duração da webcam habilitada';
$string['attendance_mic_duration'] = 'Duração do microfone habilitado';
$string['attendance_whiteboard_annotated'] = 'Anotado no quadro branco';
$string['met'] = 'Atendido';
$string['required'] = 'Obrigatório';

// Status codes
$string['status_unknown_status'] = 'Um status desconhecido foi retornado do servidor.';
$string['status_success'] = 'Operação concluída com sucesso.';
$string['status_permission_denied'] = 'Permissão negada.';
$string['status_not_found'] = 'Nenhum {$a} encontrado.';
$string['status_conflict'] = 'Esta ação não pôde ser concluída devido a um conflito (por exemplo, a sala já pode existir).';
$string['status_invalid_token_or_signature'] = 'O token de solicitação ou a assinatura é inválida.';
$string['status_invalid_api_key'] = 'A chave de API fornecida é inválida. Por favor, verifique as configurações do seu plugin.';
$string['status_internal_server_error'] = 'O servidor PlugNmeet encontrou um erro interno.';
$string['status_invalid_parameters'] = 'As informações fornecidas são inválidas.';
$string['status_missing_required_parameter'] = 'Algumas informações necessárias estão faltando.';
$string['status_room_not_found'] = 'A sala especificada não foi encontrada.';
$string['status_user_not_found'] = 'Conta de usuário não encontrada. Por favor, certifique-se de que suas credenciais de API estão corretas e sua assinatura está ativa.';
$string['status_user_blocked'] = 'A conta de usuário está bloqueada. Por favor, entre em contato com o suporte.';
$string['status_user_not_active'] = 'A conta de usuário não está ativa. Isso provavelmente se deve a uma assinatura inativa ou expirada.';
