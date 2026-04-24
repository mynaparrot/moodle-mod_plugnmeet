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
$string['modulename_help'] = 'PlugNmeet 活动模块允许您在 Moodle 内创建和管理实时网络会议会话。';
$string['modulename_link'] = 'mod/plugnmeet/查看';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'plugNmeet 管理';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = '添加新的 PlugNmeet 活动';
$string['plugnmeet:deleteartifacts'] = '删除工件';
$string['plugnmeet:deleterecording'] = '删除录音';
$string['plugnmeet:downloadanalyticsreport'] = '下载分析报告';
$string['plugnmeet:downloadartifacts'] = '下载工件';
$string['plugnmeet:downloadattendance'] = '下载考勤报告';
$string['plugnmeet:downloadrecordings'] = '下载录音';
$string['plugnmeet:manage'] = '管理 PlugNmeet 设置';
$string['plugnmeet:view'] = '查看 PlugNmeet 活动';
$string['plugnmeet:viewactiveroomsreport'] = '查看活跃房间报告';
$string['plugnmeet:viewartifacts'] = '查看工件';
$string['plugnmeet:viewattendance'] = '查看考勤报告';
$string['plugnmeet:viewattendancelist'] = '查看出席名单';
$string['plugnmeet:viewlivesessioninfo'] = '查看实时会议信息';
$string['plugnmeet:viewrecordings'] = '查看录像';
$string['plugnmeetfieldset'] = '自定义示例字段集';
$string['plugnmeetname'] = '自定义示例名称';
$string['plugnmeetname_help'] = '自定义示例帮助';

// Admin Settings
$string['api_config'] = 'API 配置';
$string['server_url'] = 'PlugNmeet 服务器 URL';
$string['server_url_desc'] = 'PlugNmeet 服务器的基本 URL（例如，https://pnm.example.com）。';
$string['api_key'] = 'API密钥';
$string['api_key_desc'] = '由您的 PlugNmeet 服务器提供的唯一 API 密钥。';
$string['api_secret'] = 'API密钥';
$string['api_secret_desc'] = 'PlugNmeet 服务器提供的用于安全身份验证的 API 密钥。';
$string['guest_access_hdr'] = '访客访问设置';
$string['allow_guest_global'] = '允许访客全局访问';
$string['allow_guest_global_desc'] = '此功能用作总开关。如果禁用，教师在创建或编辑活动时将看不到启用访客加入的选项。';
$string['guest_link_expiration'] = '访客链接过期时间（小时）';
$string['guest_link_expiration_desc'] = '决定教师生成访客访问链接后，该链接保持有效时长为多少小时。';
$string['defaults'] = '技术性违约';
$string['defaults_desc'] = '默认技术配置应用于每个新的 PlugNmeet 会话。';
$string['enable_dynacast'] = '启用 Dynacast';
$string['enable_dynacast_des'] = '通过动态暂停参与者未观看的视频层来优化性能。这可显著降低服务器端的 CPU 和带宽使用率。**注意：**如果使用 SVC 编解码器（VP9/AV1），则此功能将自动启用；多编解码器同播也需要此功能。';
$string['enable_simulcast'] = '启用同步广播';
$string['enable_simulcast_des'] = '提供多层视频质量，确保网络连接较弱的用户也能获得流畅的体验。';
$string['video_codec'] = '视频编解码器';
$string['video_codec_des'] = '视频传输的编码标准。**VP8** 推荐用于 WebRTC，因为它在质量和低延迟之间取得了最佳平衡。**警告：**并非所有浏览器都支持所有编解码器；如果使用 VP9 或 H.265，请确保用户使用的是较新的浏览器。';
$string['default_webcam_resolution'] = '默认摄像头分辨率';
$string['default_webcam_resolution_des'] = '参与者摄像机的初始分辨率设置。';
$string['default_screen_share_resolution'] = '默认屏幕共享分辨率';
$string['default_screen_share_resolution_des'] = '屏幕共享的初始分辨率设置。';
$string['default_audio_preset'] = '默认音频预设';
$string['default_audio_preset_des'] = '针对本次会话优化的音频质量配置文件。';

$string['branding'] = '品牌推广和定制';
$string['custom_logo'] = '自定义徽标';
$string['custom_logo_des'] = '请将您的徽标上传到会议室。如果留空，则将使用 PlugNmeet 的默认徽标。';
$string['custom_css_url'] = '自定义 CSS URL';
$string['custom_css_url_des'] = '链接外部 .css 文件以覆盖或自定义界面样式。';
$string['primary_color'] = '原色';
$string['primary_color_des'] = '按钮、激活状态和高亮显示的主色调。';
$string['secondary_color'] = '辅助色';
$string['secondary_color_des'] = '用于辅助用户界面元素的强调色。';
$string['background_color'] = '背景颜色';
$string['background_color_des'] = '界面的主背景色。';
$string['background_image'] = '背景图片';
$string['background_image_des'] = '背景壁纸。为获得最佳效果，请使用 1920x1080 分辨率的图片。';
$string['header_color'] = '标题颜色';
$string['header_color_des'] = '顶部导航栏的背景颜色。';
$string['footer_color'] = '页脚颜色';
$string['footer_color_des'] = '底部工具栏的背景颜色。';
$string['left_color'] = '左侧颜色';
$string['left_color_des'] = '左侧导航栏的背景颜色。';
$string['side_panel_bg_color'] = '侧面板背景颜色';
$string['side_panel_bg_color_des'] = '右侧面板（聊天和参与者列表）的背景颜色。';
$string['copyright_text'] = '版权声明';
$string['copyright_text_des'] = '品牌标识文字显示在设置页脚。支持 HTML 代码，可用于链接或自定义样式。';
$string['client_load'] = '客户端加载方法';
$string['client_load_des'] = '选择**远程**（推荐）可获得无缝品牌体验，该体验将直接嵌入您的 Moodle 页面。选择**重定向**将使用默认的 plugNmeet 界面；请注意，用户将离开您的网站，并且自定义品牌可能无法生效。';
$string['remote'] = '远程（嵌入式）';
$string['redirect'] = '重定向到服务器';

$string['yes'] = '是的';
$string['no'] = '不';
$string['recordings'] = "录音";
$string['recording'] = "记录";
$string['artifacts'] = "房间文物";
$string['attendance'] = "出勤报告";
$string['artifact'] = "人工制品";
$string['room_subject'] = '房间';
$string['user_subject'] = '用户';
$string['activeroomsreport'] = '活跃房间报告';
$string['noactiverooms'] = '目前没有正在使用的房间。';
$string['activerooms'] = '活动室';
$string['loading'] = '加载中...';

// mod_form.php
$string['roomtitle'] = '房间标题';
$string['roomtitle_help'] = '这是Moodle活动和实时会议标题所使用的名称。它可以帮助学生在课程和会议室中识别当前会话。';
$string['welcome_message'] = '欢迎信息';
$string['welcome_message_help'] = '在此处输入的任何文本都会在用户加入聊天室时显示为公共聊天室的第一条消息。这对于在参与者进入聊天室时分享说明、链接或重要信息非常有用。';
$string['max_participants'] = '最大参与人数';
$string['max_participants_help'] = '设置此值可限制同时加入会话的用户数量。将其设置为 0 则允许无限数量的参与者，即对加入会话的用户数量没有限制。';
$string['room_features'] = '房间特色';
$string['recording_features'] = '录音功能';
$string['chat_features'] = '聊天功能';
$string['other_features'] = '其他功能';
$string['e2ee_features'] = '端到端加密';
$string['insights_features'] = '洞察与人工智能功能';
$string['defaultlock'] = '默认锁定设置';
$string['advanced_completion'] = '高级完成';
$string['available'] = '可从';
$string['available_help'] = '确定参与者何时可以开始加入会议。在此日期和时间之前，用户将无法进入会议室。';
$string['deadline'] = '有效期至';
$string['deadline_help'] = '确定参与者可以访问会议的最后日期和时间。截止日期过后，访问权限将被阻止。';
$string['err_deadline_before_available'] = '“有效期至”日期不能早于“有效期至”日期。';
$string['error_analytics_required_for_completion'] = '如果设置了任何完成条件，则必须选中“启用分析”复选框。';

$string['allow_webcams'] = '允许摄像头';
$string['allow_webcams_help'] = '允许参与者使用摄像头。';
$string['mute_on_start'] = '开始时静音';
$string['mute_on_start_help'] = '当所有参与者加入会议时，自动将其静音。';
$string['allow_screen_share'] = '允许屏幕共享';
$string['allow_screen_share_help'] = '允许参与者共享屏幕。';
$string['allow_rtmp'] = '允许RTMP流媒体';
$string['allow_rtmp_help'] = '允许主持人将直播会议内容广播到 YouTube、Facebook 或 Twitch 等外部平台。非常适合公开网络研讨会或嘉宾讲座。';
$string['allow_raise_hand'] = '允许举手';
$string['allow_raise_hand_help'] = '允许参与者举手。';
$string['admin_only_webcams'] = '仅限管理员使用的摄像头';
$string['admin_only_webcams_help'] = '仅允许版主使用摄像头。';
$string['allow_view_other_webcams'] = '允许查看其他摄像头';
$string['allow_view_other_webcams_help'] = '允许参与者查看其他参与者的摄像头。如果禁用此功能，则他们只能看到主持人的摄像头。';
$string['allow_view_other_users_list'] = '允许查看其他用户列表';
$string['allow_view_other_users_list_help'] = '允许参与者查看其他参与者的列表。';
$string['room_duration'] = '房间使用时长（分钟）';
$string['room_duration_help'] = '设置房间自动关闭前的保持开启时间。如果不想设置时间限制，请输入 0，房间将一直保持开启状态。';
$string['moderator_join_first'] = '版主优先加入';
$string['moderator_join_first_help'] = '启用此功能后，会议将不会开始，且必须先有主持人（例如教师）加入，其他人员才能加入。参与者将停留在 Moodle 活动页面，不会进入会议室或等候区。这与等候室选项不同，用户仍然可以加入并等待。';
$string['enable_analytics'] = '启用分析';
$string['enable_analytics_help'] = '跟踪会话的参与度和互动数据。**注意：**如果设置了任何完成条件，则必须启用此功能。';
$string['allow_virtual_bg'] = '允许虚拟背景';
$string['allow_virtual_bg_help'] = '允许参与者模糊背景或使用虚拟图像。非常适合保护学生隐私并确保课堂的专业形象。';
$string['auto_gen_user_id'] = '自动生成用户 ID';
$string['auto_gen_user_id_help'] = '启用后，系统会创建一个新的ID，使同一用户可以从多个设备加入——例如，教师从平板电脑加入，在白板上绘画，同时使用PC进行摄像和麦克风;然而，它确实是 <b>推荐</b> 这样可以关闭该功能，从而使用Moodle用户ID，防止重复加入。';

$string['allow_recording'] = '允许录音（主开关）';
$string['allow_recording_help'] = '所有录制功能的总开关。如果禁用，云端录制和本地录制选项都将对管理员隐藏。';
$string['allow_cloud_recording'] = '允许云录制';
$string['allow_cloud_recording_help'] = '启用在 PlugNmeet 服务器上的录制功能。最终视频经处理后存储在云端，方便在会议结束后通过链接分享。';
$string['enable_auto_cloud_recording'] = '启用自动云录制';
$string['enable_auto_cloud_recording_help'] = '当第一位主持人加入会议时，系统会自动触发云录制。非常适合确保不会遗漏任何讲座内容。';
$string['allow_local_recording'] = '允许本地录制';
$string['allow_local_recording_help'] = '允许直接录制到电脑。**注意：**需要使用谷歌浏览器。要录制所有会话音频，用户必须共享其“Chrome 标签页”并勾选“同时共享标签页音频”复选框。录制完成后，文件将保存到本地设备。';

$string['allow_chat'] = '允许聊天（全局主开关）';
$string['allow_chat_help'] = '聊天功能总开关。禁用后，所有聊天区域将被完全关闭，包括管理员在内的所有人都无法访问。所有公共和私人聊天功能都将无法使用。';
$string['allow_file_upload'] = '允许文件上传';
$string['allow_file_upload_help'] = '启用在聊天中共享文件的功能。这需要启用“允许聊天”主开关。';

$string['allow_shared_notepad'] = '允许共享记事本';
$string['allow_shared_notepad_help'] = '它提供了一个协作式文本编辑器，学生和教师可以实时一起做笔记。这非常适合头脑风暴、共同写作或创建共享的课堂总结。';

$string['whiteboard_features'] = '白板功能';
$string['allow_whiteboard'] = '允许白板';
$string['allow_whiteboard_help'] = '为本次课程解锁交互式绘图空间。可用于绘制图表、以可视化方式解决数学问题，或让学生对共享内容进行注释。';
$string['preload_file'] = '预加载演示文件';
$string['preload_file_help'] = '允许您上传 PDF 或 Office 文档，该文档将在课程开始时自动加载到白板上。这确保您的演示材料能够立即准备就绪。 <strong>最大文件大小：5MB</strong>';

$string['allowed_external_media_player'] = '允许外部媒体播放器';
$string['allowed_external_media_player_help'] = '允许主持人同步播放来自 YouTube 或 Vimeo 等来源的视频，供全班同学观看。非常适合分析教学视频或一起观看纪录片，而不会出现带宽延迟。';

$string['activate_waiting_room'] = '启用候诊室';
$string['activate_waiting_room_help'] = '启用本次会议的等候室。';
$string['waiting_room_msg'] = '候诊室留言';
$string['waiting_room_msg_help'] = '此消息会在用户等待进入房间时显示。您可以使用它在会议开始前分享说明、注意事项或实用信息。';

$string['allow_breakout_rooms'] = '允许分组讨论室';
$string['allow_breakout_rooms_help'] = '允许主持人将参与者分成小组，以便进行有针对性的讨论、协作项目或私人小组活动。';
$string['allowed_number_rooms'] = '最大分组讨论室';
$string['allowed_number_rooms_help'] = '主持人可以在单个会话中创建的最大子房间数。';

$string['allow_display_external_link_features'] = '允许外部链接共享';
$string['allow_display_external_link_features_help'] = '允许主持人在会议期间直接向所有参与者展示外部教育内容，例如 H5P 活动、SCORM 包或测验系统（例如 Kahoot）。';

$string['allow_ingress_features'] = '允许入口（外部流）';
$string['allow_ingress_features_help'] = '教师可以使用 OBS 等外部软件，通过 RTMP 或 WHIP 协议将高质量视频广播到课堂中。这非常适合分享高分辨率视频内容、预录制课程或绕过浏览器上传限制。';

$string['allow_polls'] = '允许投票';
$string['allow_polls_help'] = '允许主持人在课程期间创建互动投票和快速测验。这是检验学生理解程度和提高参与度的绝佳方式。';

$string['sip_dial_in_features_is_allow'] = '允许 SIP 拨入';
$string['sip_dial_in_features_is_allow_help'] = '允许参与者通过传统电话接入音频会议。这对于网络连接不佳的学生或需要在旅途中接入会议的人来说至关重要。';

$string['enable_end_to_end_encryption_features'] = '启用端到端加密 (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = '通过加密视频和音频流，提供最高级别的安全性，即使是服务器也无法访问这些流。注意：启用端到端加密 (E2EE) 后，某些功能（例如服务器端录制）可能会受到限制。';
$string['enabled_self_insert_encryption_key'] = '允许参与者自定义密钥';
$string['enabled_self_insert_encryption_key_help'] = '允许参与者手动输入共享密钥。这确保服务提供商永远无法访问加密密钥，从而提供最高级别的隐私保护。';
$string['included_e2ee_chat_messages'] = '加密聊天信息';
$string['included_e2ee_chat_messages_help'] = '将端到端加密扩展到文本聊天，确保只有聊天室内的参与者才能阅读消息。';
$string['included_e2ee_whiteboard'] = '加密白板数据';
$string['included_e2ee_whiteboard_help'] = '包含所有白板绘图和注释，采用端到端加密层，实现完全的数据隐私保护。';

$string['insights_features_is_allow'] = '允许会话洞察（主开关）';
$string['insights_features_is_allow_help'] = '这是所有数据驱动功能的主要控制开关。如果禁用，所有子选项（包括转录、AI 助手和会议报告）将完全不可用。';
$string['insights_transcription_features_is_allow'] = '允许实时转录';
$string['insights_transcription_features_is_allow_help'] = '启用会话期间的实时语音转文本功能。必须启用此功能，转录翻译或语音合成 (TTS) 功能才能正常工作。';
$string['insights_transcription_features_is_allow_translation'] = '允许转录翻译';
$string['insights_transcription_features_is_allow_translation_help'] = '允许将实时文字稿翻译成不同的语言，为国际学生和多语言环境提供支持。';
$string['insights_transcription_features_is_allow_speech_synthesis'] = '允许语音合成（TTS）';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = '启用文本转语音功能，可将实时文字稿朗读出来，以提高可访问性，并方便视障人士参与。';
$string['insights_chat_translation_features_is_allow'] = '允许聊天翻译';
$string['insights_chat_translation_features_is_allow_help'] = '支持实时翻译聊天信息，让参与者能够即时进行跨语言交流。';
$string['insights_ai_features_is_allow'] = '启用 AI 会议助手（AI 主开关）';
$string['insights_ai_features_is_allow_help'] = '所有人工智能功能的总开关。如果禁用此功能，即使“会话洞察”功能已启用，某些特定功能（例如“人工智能聊天”和“会议摘要”）也将被隐藏。';
$string['insights_ai_text_chat_features_is_allow'] = '允许 AI 聊天助手';
$string['insights_ai_text_chat_features_is_allow_help'] = '将人工智能助手直接集成到聊天中，以帮助回答问题、解释复杂概念并促进小组讨论。';
$string['insights_ai_meeting_summarization_features_is_allow'] = '允许AI会议总结';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = '课程结束后自动生成简洁的 AI 总结，突出重点教学内容、决策和后续任务。';

$string['lock_microphone'] = '锁定麦克风';
$string['lock_microphone_help'] = '默认情况下，所有参与者进入时都会被静音。只有主持人才能解除静音或授予发言权限。';
$string['lock_webcam'] = '锁定摄像头';
$string['lock_webcam_help'] = '默认情况下禁用所有参与者的摄像头。有助于节省带宽或保障学生隐私。';
$string['lock_screen_sharing'] = '锁屏共享';
$string['lock_screen_sharing_help'] = '仅限主持人共享屏幕。防止参与者通过自己的屏幕进行干扰。';
$string['lock_whiteboard'] = '锁定白板';
$string['lock_whiteboard_help'] = '仅限主持人使用白板绘图工具，防止参与者未经授权进行标注。';
$string['lock_shared_notepad'] = '锁定共享记事本';
$string['lock_shared_notepad_help'] = '禁用参与者的协作记事本，以防止离题写作或分散注意力。';
$string['lock_chat'] = '锁定公共聊天';
$string['lock_chat_help'] = '完全隐藏或禁用所有参与者的公共聊天区域。';
$string['lock_chat_send_message'] = '锁定发送消息';
$string['lock_chat_send_message_help'] = '允许参与者阅读聊天记录，但阻止他们发送任何消息。';
$string['lock_chat_file_share'] = '锁定文件共享';
$string['lock_chat_file_share_help'] = '阻止参与者在聊天区域内上传或共享文件。';
$string['lock_private_chat'] = '锁定私人聊天';
$string['lock_private_chat_help'] = '禁用参与者之间的1对1私信功能。注意：参与者仍然可以向管理员发送私信寻求帮助或提出问题。';

$string['completion_minutes'] = '出席会议记录';
$string['completion_minutes_help'] = '要求用户在会话中保持一定分钟数。';
$string['completion_minutes_desc'] = '用户必须参加会话至少 {$a} 分钟。';
$string['completion_raised_hand'] = '举手';
$string['completion_raised_hand_help'] = '要求用户至少举手一次。';
$string['completion_chat_messages'] = '已发送的聊天消息';
$string['completion_chat_messages_help'] = '要求用户至少发送 1 条聊天消息。';
$string['completion_webcam_enabled'] = '已启用摄像头';
$string['completion_webcam_enabled_help'] = '要求用户至少启用一次摄像头。';
$string['completion_webcam_duration'] = '启用摄像头持续时间（分钟）';
$string['completion_webcam_duration_help'] = '要求用户启用摄像头一定时间。';
$string['completion_webcam_duration_desc'] = '用户必须启用网络摄像头至少 {$a} 分钟。';
$string['completion_mic_enabled'] = '麦克风已启用';
$string['completion_mic_enabled_help'] = '要求用户至少启用一次麦克风。';
$string['completion_mic_duration'] = '麦克风启用持续时间（分钟）';
$string['completion_mic_duration_help'] = '要求用户启用麦克风一定时间。';
$string['completion_mic_duration_desc'] = '用户必须启用麦克风至少 {$a} 分钟。';
$string['completion_talk_duration'] = '演讲时长（分钟）';
$string['completion_talk_duration_help'] = '要求用户发言一定分钟数。';
$string['completion_talk_duration_desc'] = '用户必须至少通话 {$a} 分钟。';
$string['completion_poll_voted'] = '已投票';
$string['completion_poll_voted_help'] = '要求用户至少参与一次投票。';
$string['completion_whiteboard_annotated'] = '白板上的注释';
$string['completion_whiteboard_annotated_help'] = '要求用户在白板上做笔记。';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = '存储用户会话统计信息，以确定活动完成情况。';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = '用户ID。';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'JSON 编码的会话数据（分钟数、聊天消息等）。';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = '统计数据上次更新的时间。';

// view.php
$string['join_session'] = '加入会话';
$string['start_session'] = '开始会话';
$string['end_session'] = '会议结束';
$string['participants'] = '参与者';
$string['is_recording'] = '正在录制';
$string['is_active'] = '处于活动状态';
$string['room_info'] = '直播课程详情';
$string['participants_info'] = '在线参与者';
$string['room_id'] = '房间号';
$string['creation_time'] = '创世时间';
$string['name'] = '姓名';
$string['user_id'] = '用户身份';
$string['is_admin'] = '管理员';
$string['is_presenter'] = '主持人';
$string['joined_at'] = '加入于';
$string['moderator_not_joined'] = '必须先由主持人发起会议，您才能加入。';
$string['session_available_from'] = '可从以下网址获取： {$a}';
$string['session_available_until'] = '有效期至： {$a}';
$string['session_not_started_yet'] = '本次会议尚未开始。';
$string['session_ended'] = '本次会议已结束。';
$string['allow_guest'] = '允许访客用户';
$string['allow_guest_help'] = '启用后，系统会生成一个安全的共享链接，以便外部用户（例如客座教师或没有 Moodle 帐户的参与者）可以加入会话；管理员可以查看和共享此链接。';
$string['guest_join_link'] = '访客加入链接';
$string['guest_join_link_help'] = '请将此链接分享给外部参与者。此链接有效期为 {$a} 小时。每次页面刷新都会生成新链接，但之前分享的链接在其原始失效时间之前仍然有效。';
$string['copy_link'] = '复制链接';
$string['link_copied'] = '链接已复制到剪贴板。';
$string['guest_join_title'] = '以访客身份加入会议';
$string['enter_display_name'] = '输入您的显示名称';
$string['join_as_guest'] = '加入会议';
$string['guest_access_denied'] = '本次会议未启用访客访问权限。';
$string['invalid_guest_token'] = '无效或已过期的访客加入令牌。';
$string['guest_link_expired'] = '此访客加入链接已过期。';
$string['error_joining_session'] = '加入会话时出错： {$a}';
$string['already_logged_in'] = '您已登录Moodle。您可以直接从此活动页面加入会议。';
$string['total_webcams'] = '网络摄像头总数';
$string['total_mics'] = '总麦克风';
$string['total_screen_shares'] = '屏幕共享总数';
$string['webcams'] = '网络摄像头';
$string['mics'] = '麦克风';
$string['screenshares'] = '屏幕共享';

// Events
$string['event_room_started'] = '房间已开始';
$string['event_room_ended'] = '房间结束';
$string['event_room_created'] = '创建房间';
$string['event_session_ended'] = '会议结束';
$string['event_participant_joined'] = '参与者加入';
$string['event_participant_left'] = '参与者已离开';
$string['event_artifact_created'] = '创建了制品';
$string['event_recording_proceeded'] = '录音准备就绪';
$string['event_plugin_error'] = 'PlugNmeet 错误';
$string['event_track_published'] = '已发布';
$string['event_track_unpublished'] = '未发布的曲目';
$string['event_recording_started'] = '录制开始';
$string['event_recording_ended'] = '录音结束';
$string['event_rtmp_started'] = 'RTMP 流已启动';
$string['event_rtmp_ended'] = 'RTMP 流已结束';

// Notifications
$string['messageprovider:recording_ready'] = '录制完成通知';
$string['messageprovider:artifact_ready'] = '就绪工件通知';
$string['recording_ready_notification_subject'] = '录音准备就绪： {$a}';
$string['recording_ready_notification_fullmessage'] = '会话“{$a->roomname}”的录制已准备就绪并处理完毕。您可以在这里查看： {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>本次会话的录制 <strong>"{$a->roomname}"</strong> 已准备就绪并处理完毕。</p><p><a href="{$a->url}">点击此处查看录制内容。</a></p>';
$string['recording_ready_notification_smallmessage'] = '录音准备就绪 {$a}';
$string['artifact_ready_notification_subject'] = '神器已准备就绪： {$a}';
$string['artifact_ready_notification_fullmessage'] = '会话“{$a->roomname}”的新工件（{$a->type}）现已可用。您可以在此处查看： {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>会话 <strong>"{$a->roomname}"</strong> 的新工件 ({$a->type}) 现已可用。</p><p><a href="{$a->url}">点击此处查看工件详情。</a></p>';
$string['artifact_ready_notification_smallmessage'] = '神器已准备好用于 {$a}';

// recordings.php
$string['no_recordings'] = '未找到录音。';
$string['recording_id'] = '录音ID';
$string['room_sid'] = '房间号';
$string['file_size'] = '文件大小';
$string['created_at'] = '创建于';
$string['actions'] = '行动';
$string['view'] = '看法';
$string['play'] = '玩';
$string['download'] = '下载';
$string['delete'] = '删除';
$string['delete_confirm'] = '您确定要删除此内容吗？';
$string['delete_success'] = '删除成功。';
$string['recording_details'] = '录制详情';
$string['recording_creation_time'] = '录制创建时间';
$string['room_creation_time'] = '会话创建时间';
$string['back_to_list'] = '返回列表';
$string['browser_not_support_video'] = '您的浏览器不支持视频标签。';
$string['room_title'] = '房间标题';
$string['total_participants'] = '参与总人数';
$string['session_started_at'] = '会议开始于';
$string['session_ended_at'] = '会话结束于';

// artifacts.php
$string['no_artifacts'] = '未发现任何文物。';
$string['artifact_id'] = '工件 ID';
$string['type'] = '类型';
$string['artifact_details'] = '文物详情';
$string['no_permission'] = '您没有权限查看此页面。';
$string['token_usage'] = '代币使用情况';
$string['duration_usage'] = '持续时间';
$string['character_count_usage'] = '字符计数使用情况';
$string['estimated_cost'] = '预计成本';
$string['file_path'] = '文件路径';
$string['mime_type'] = '哑剧类型';
$string['created_at'] = '创建于';

// Analytics strings
$string['download_excel_report'] = '下载 Excel 报表';
$string['download_raw_json'] = '下载原始数据';
$string['room_summary'] = '房间概况';
$string['users_summary'] = '用户摘要';
$string['see_excel_report'] = '详情请参阅 Excel 报告。';
$string['error_loading_analytics'] = '加载分析数据时出错： {$a}';
$string['error_generating_excel'] = '生成 Excel 报表时出错： {$a}';

$string['analytics_room_room_id'] = '房间号';
$string['analytics_room_room_title'] = '房间标题';
$string['analytics_room_room_creation'] = '房间创建时间';
$string['analytics_room_room_ended'] = '房间结束时间';
$string['analytics_room_room_duration'] = '房间时长';
$string['analytics_room_room_total_users'] = '参与总人数';
$string['analytics_room_enabled_e2ee'] = 'E2EE 已启用';
$string['analytics_room_recording_status'] = '记录状态计数';
$string['analytics_room_rtmp_status'] = 'RTMP 状态计数';
$string['analytics_room_speech_service_total_usage'] = '语音服务总使用量';
$string['analytics_room_external_media_player_status'] = '外部媒体播放器状态计数';
$string['analytics_room_etherpad_status'] = 'Etherpad 状态计数';
$string['analytics_room_external_display_link_status'] = '外部显示链接状态计数';
$string['analytics_room_ingress_created'] = 'Ingress 创建计数';
$string['analytics_room_breakout_room'] = '分组讨论室数量';

$string['analytics_user_name'] = '姓名';
$string['analytics_user_id'] = '用户身份';
$string['analytics_user_ex_id'] = '用户身份';
$string['analytics_user_is_admin'] = '管理员';
$string['analytics_user_duration'] = '期间';
$string['analytics_user_joined'] = '加入于';
$string['analytics_user_left'] = '左转';
$string['analytics_user_mic_status'] = '麦克风状态变化';
$string['analytics_user_mic_muted'] = '麦克风静音次数';
$string['analytics_user_mic_duration'] = '启用麦克风持续时间';
$string['analytics_user_talked'] = '通话次数';
$string['analytics_user_talked_duration'] = '谈话时长';
$string['analytics_user_webcam_status'] = '网络摄像头状态变化';
$string['analytics_user_webcam_duration'] = '启用摄像头持续时间';
$string['analytics_user_raise_hand'] = '举手计数';
$string['analytics_user_voted_poll'] = '投票结果';
$string['analytics_user_whiteboard_annotated'] = '白板注释计数';
$string['analytics_user_whiteboard_files'] = '白板文件数量';
$string['analytics_user_screen_share_status'] = '屏幕共享状态变更';
$string['analytics_user_speech_services_usage'] = '语音服务使用情况';
$string['analytics_user_public_chat'] = '公共聊天消息';
$string['analytics_user_private_chat'] = '私聊消息';
$string['analytics_user_chat_files'] = '聊天文件共享';
$string['analytics_user_interface_invisible'] = '界面不可见计数';
$string['analytics_user_connection_quality'] = '连接质量';
$string['analytics_user_connection_quality_excellent'] = '出色的';
$string['analytics_user_connection_quality_good'] = '好的';
$string['analytics_user_connection_quality_poor'] = '贫穷的';

$string['users_info'] = '用户信息';
$string['polls'] = '民意调查';
$string['question'] = '问题';
$string['options'] = '选项';
$string['file_name'] = '文件名';
$string['checkcompletiontask'] = '检查插头是否完成';

// attendance.php
$string['attendance_report'] = '出勤报告';
$string['status'] = '地位';
$string['present'] = '展示';
$string['absent'] = '缺席的';
$string['incomplete'] = '未完成';
$string['completed'] = '完全的';
$string['minutes_attended'] = '出席会议记录';
$string['last_updated'] = '最后更新时间';
$string['mic_duration'] = '麦克风启用持续时间';
$string['webcam_duration'] = '启用摄像头持续时间';
$string['participation_progress'] = '参与进展';
$string['attendance_duration'] = '出席会议记录';
$string['attendance_webcam_status'] = '已启用摄像头';
$string['attendance_mic_status'] = '麦克风已启用';
$string['attendance_talked_duration'] = '谈话时长';
$string['attendance_voted_poll'] = '已投票';
$string['attendance_chat_messages'] = '已发送的聊天消息';
$string['attendance_raise_hand'] = '举手';
$string['attendance_webcam_duration'] = '启用摄像头持续时间';
$string['attendance_mic_duration'] = '麦克风启用持续时间';
$string['attendance_whiteboard_annotated'] = '白板上的注释';
$string['met'] = '梅特';
$string['required'] = '必需的';

// Status codes
$string['status_unknown_status'] = '服务器返回了未知状态。';
$string['status_success'] = '手术成功完成。';
$string['status_permission_denied'] = '没有权限。';
$string['status_not_found'] = '未找到 {$a}。';
$string['status_conflict'] = '由于存在冲突（例如，房间可能已存在），此操作无法完成。';
$string['status_invalid_token_or_signature'] = '请求令牌或签名无效。';
$string['status_invalid_api_key'] = '提供的 API 密钥无效。请检查您的插件设置。';
$string['status_internal_server_error'] = 'PlugNmeet服务器遇到内部错误。';
$string['status_invalid_parameters'] = '提供的信息无效。';
$string['status_missing_required_parameter'] = '缺少一些必要信息。';
$string['status_room_not_found'] = '未找到指定的房间。';
$string['status_user_not_found'] = '未找到用户帐户。请确保您的 API 凭据正确且您的订阅已激活。';
$string['status_user_blocked'] = '用户账号已被封禁。请联系客服。';
$string['status_user_not_active'] = '用户账户未激活。这可能是由于订阅已过期或处于非激活状态所致。';
