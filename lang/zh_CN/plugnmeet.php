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

$string['modulename'] = 'plugNmeet 插件';
$string['modulename_help'] = 'PlugNmeet 活动模块允许您在 Moodle 内部创建和管理实时网络会议会话。';
$string['modulename_link'] = 'Mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'plugNmeet 管理';
$string['pluginname'] = 'plugNmeet 插件';
$string['plugnmeet:addinstance'] = '添加一个新的 PlugNmeet 活动';
$string['plugnmeet:deleteartifacts'] = '删除伪影';
$string['plugnmeet:deleterecording'] = '删除录音';
$string['plugnmeet:downloadanalyticsreport'] = '下载分析报告';
$string['plugnmeet:downloadartifacts'] = '下载文件';
$string['plugnmeet:downloadattendance'] = '下载出勤报告';
$string['plugnmeet:downloadrecordings'] = '下载录音';
$string['plugnmeet:manage'] = '管理 PlugNmeet 设置';
$string['plugnmeet:view'] = '查看PlugNmeet 活动';
$string['plugnmeet:viewartifacts'] = '查看文物';
$string['plugnmeet:viewattendance'] = '查看观众人数报告';
$string['plugnmeet:viewlivesessioninfo'] = '查看现场录音信息';
$string['plugnmeet:viewrecordings'] = '查看录音';
$string['plugnmeetfieldset'] = '自定义示例字段集';
$string['plugnmeetname'] = '自定义示例名称';
$string['plugnmeetname_help'] = '自定义示例帮助';

// Admin Settings
$string['api_config'] = 'API 配置';
$string['server_url'] = 'PlugNmeet 服务器 URL';
$string['server_url_desc'] = '你的PlugMeet服务器的基础URL（例如，https://pnm.example.com）';
$string['api_key'] = 'API 密钥';
$string['api_key_desc'] = '你的PlugMeet服务器提供的API密钥。';
$string['api_secret'] = 'API 秘密';
$string['api_secret_desc'] = '你的PlugMeet服务器提供的API秘密。';
$string['guest_access_hdr'] = '访客访问设置';
$string['allow_guest_global'] = '允许访客全球访问';
$string['allow_guest_global_desc'] = '如果禁用，任何会议室都无法启用嘉宾加入功能。';
$string['guest_link_expiration'] = '访客链接过期时间（小时）';
$string['guest_link_expiration_desc'] = '访客加入链接在生成后有效的时间。';

$string['defaults'] = '技术默认设置';
$string['defaults_desc'] = '新 PlugNmeet 会话的默认技术设置。';
$string['enable_dynacast'] = '启用Dynacast';
$string['enable_dynacast_des'] = '使用 Dynacast 优化视频流，只发布最近活跃的演讲者。';
$string['enable_simulcast'] = '启用同步广播';
$string['enable_simulcast_des'] = '使用同步广播为观众提供多层视频质量。';
$string['video_codec'] = '视频编解码器';
$string['video_codec_des'] = '会话的默认视频编码器。';
$string['default_webcam_resolution'] = '默认摄像头分辨率';
$string['default_webcam_resolution_des'] = '摄像头的默认分辨率。';
$string['default_screen_share_resolution'] = '默认屏幕共享分辨率';
$string['default_screen_share_resolution_des'] = '屏幕共享的默认分辨率。';
$string['default_audio_preset'] = '默认音频预设';
$string['default_audio_preset_des'] = '会话的默认音频预设。';

$string['branding'] = '品牌塑造与定制化';
$string['custom_logo'] = '定制标志';
$string['custom_logo_des'] = '上传自定义标志，展示在会议室中。如果为空，则使用默认的 PlugNmeet 标志。';
$string['custom_css_url'] = '自定义 CSS URL';
$string['custom_css_url_des'] = '提供外部CSS文件的URL，以自定义会议室的外观和氛围。';
$string['primary_color'] = '原色';
$string['primary_color_des'] = '按钮和高光的主色。';
$string['secondary_color'] = '辅助颜色';
$string['secondary_color_des'] = 'UI元素的次要颜色。';
$string['background_color'] = '背景颜色';
$string['background_color_des'] = '界面背景颜色';
$string['background_image'] = '背景图片';
$string['background_image_des'] = '大小应为 1920X1080 以获得最佳效果。';
$string['header_color'] = '标题颜色';
$string['header_color_des'] = '接口标题颜色';
$string['footer_color'] = '页脚颜色';
$string['footer_color_des'] = '界面页脚颜色';
$string['left_color'] = '左侧颜色';
$string['left_color_des'] = '左侧栏颜色';
$string['side_panel_bg_color'] = '侧面板背景色';
$string['side_panel_bg_color_des'] = '右侧面板背景色';
$string['copyright_text'] = '版权文本';
$string['copyright_text_des'] = '版权文本显示在会议室的底部。允许使用HTML。';
$string['client_load'] = '客户端负载来自';
$string['client_load_des'] = '默认：本地';
$string['remote'] = '远程';
$string['local'] = '当地';

$string['client_side'] = '客户端选项';
$string['client_load_mode'] = '客户端加载模式';
$string['client_load_mode_desc'] = '选择是从远程服务器加载网页客户端，还是从本地副本加载。';
$string['remote'] = '远程';
$string['local'] = '地方';
$string['client_download_url'] = '客户端下载网址';
$string['client_download_url_des'] = '如果使用“本地”加载模式，请提供client.zip文件的URL。';
$string['update_client_btn'] = '更新本地客户端';
$string['update_client_btn_label'] = '现在更新';

$string['yes'] = '是的';
$string['no'] = '不';
$string['recordings'] = "录音";
$string['artifacts'] = "房间伪影";
$string['attendance'] = "出勤报告";
$string['artifact'] = "文物";

// mod_form.php
$string['roomtitle'] = '房间标题';
$string['welcome_message'] = '欢迎信息';
$string['welcome_message_help'] = '这里输入的任何文字都会作为用户加入房间时公共聊天中的首条消息出现。这对于在参与者进入时分享说明、链接或重要信息非常有用。';
$string['max_participants'] = '最大参与者';
$string['max_participants_help'] = '设置此值以限制同时加入会话的用户数量。设置为0以允许无限参与者，意味着加入人数没有限制。';
$string['room_features'] = '房间特色';
$string['recording_features'] = '录音特色';
$string['chat_features'] = '聊天功能';
$string['other_features'] = '其他功能';
$string['e2ee_features'] = '端到端加密';
$string['insights_features'] = '洞察与人工智能功能';
$string['defaultlock'] = '默认锁设置';
$string['advanced_completion'] = '高级完成';
$string['available'] = '可从';
$string['deadline'] = '可持续使用至此';
$string['err_deadline_before_available'] = '“可用至”日期不能早于“可用日期”。';
$string['error_analytics_required_for_completion'] = '如果设置了任何完成标准，必须勾选启用分析。';

$string['allow_webcams'] = '允许网络摄像头';
$string['allow_webcams_help'] = '允许参与者使用他们的摄像头。';
$string['mute_on_start'] = '启动时静音';
$string['mute_on_start_help'] = '当参与者加入会话时，自动静音所有参与者。';
$string['allow_screen_share'] = '允许屏幕共享';
$string['allow_screen_share_help'] = '允许参与者共享他们的屏幕。';
$string['allow_rtmp'] = '允许RTMP流媒体';
$string['allow_rtmp_help'] = '允许版主将会话流式传输到RTMP端点。';
$string['admin_only_webcams'] = '仅管理员网络摄像头';
$string['admin_only_webcams_help'] = '只允许版主使用他们的摄像头。';
$string['room_duration'] = '房间时长（分钟）';
$string['room_duration_help'] = '定义了房间能保持开放多久，之后会自动关闭。如果你不想设置任何时间限制，请输入0，这样房间可以无限制地保持活跃状态。';
$string['moderator_join_first'] = '版主：先加入';
$string['moderator_join_first_help'] = '启用后，会话不会开始，且在主持人（如教师）先加入之前，任何人都无法加入。参与者将留在Moodle活动页面，不得进入房间或候诊区。这与等待室选项不同，后者用户仍可加入等待。';
$string['enable_analytics'] = '启用分析';
$string['enable_analytics_help'] = '生成会话中的分析数据。注意：如果设置了任何完成条件，必须启用此功能。';
$string['allow_virtual_bg'] = '允许虚拟背景';
$string['allow_virtual_bg_help'] = '允许参与者使用虚拟背景。';
$string['auto_gen_user_id'] = '自动生成用户ID';
$string['auto_gen_user_id_help'] = '启用后，系统会创建一个新的ID，使同一用户可以从多个设备加入——例如，教师从平板电脑加入，在白板上绘画，同时使用PC进行摄像和麦克风;然而，它确实是 <b>推荐</b> 这样可以关闭该功能，从而使用Moodle用户ID，防止重复加入。';

$string['allow_recording'] = '允许录音';
$string['allow_recording_help'] = '允许录音。';
$string['allow_cloud_recording'] = '允许云端录制';
$string['allow_cloud_recording_help'] = '允许会话被录制到云端。';
$string['enable_auto_cloud_recording'] = '启用自动云记录';
$string['enable_auto_cloud_recording_help'] = '会话开始时自动开始录制。';
$string['allow_local_recording'] = '允许本地录制';
$string['allow_local_recording_help'] = '允许参与者在本地录制会话。';
$string['is_allow_view_recording'] = '允许观看录制内容';
$string['is_allow_view_recording_help'] = '允许参与者观看录音。';
$string['is_allow_download_recording'] = '允许下载录音';
$string['is_allow_download_recording_help'] = '允许参与者下载录音。';

$string['allow_chat'] = '允许聊天';
$string['allow_chat_help'] = '启用公开聊天功能。';
$string['allow_file_upload'] = '允许上传文件';
$string['allow_file_upload_help'] = '允许参与者在聊天中上传文件。';

$string['allow_shared_notepad'] = '允许共享记事本';
$string['allow_shared_notepad_help'] = '允许参与者使用共享记事本。';
$string['allow_whiteboard'] = '允许白板';
$string['allow_whiteboard_help'] = '允许参与者使用白板。';
$string['allowed_external_media_player'] = '允许外部媒体播放器';
$string['allowed_external_media_player_help'] = '允许参与者播放外部媒体（例如YouTube视频）。';
$string['activate_waiting_room'] = '启动候诊室';
$string['activate_waiting_room_help'] = '启用本次会谈的候诊室。';
$string['waiting_room_msg'] = '候诊室信息';
$string['waiting_room_msg_help'] = '该消息会在用户等待进入房间时显示。在课程开始前，用它分享指示、期望或有用信息。';
$string['allow_breakout_rooms'] = '允许分组讨论室';
$string['allow_breakout_rooms_help'] = '允许主持人创建分组讨论室。';
$string['allowed_number_rooms'] = '允许的分组讨论室数量';
$string['allow_display_external_link_features'] = '允许显示外部链接';
$string['allow_display_external_link_features_help'] = '允许版主向所有参与者显示外部链接。';
$string['allow_ingress_features'] = '允许进入';
$string['allow_ingress_features_help'] = '允许进入会话。';
$string['allow_polls'] = '允许投票';
$string['allow_polls_help'] = '允许版主创建投票。';
$string['sip_dial_in_features_is_allow'] = '允许SIP拨号';
$string['sip_dial_in_features_is_allow_help'] = '允许参与者通过SIP拨入加入会话。';

$string['enable_end_to_end_encryption_features'] = '启用端到端加密';
$string['enable_end_to_end_encryption_features_help'] = '启用会话的端到端加密。';
$string['enabled_self_insert_encryption_key'] = '允许加密密钥自插入';
$string['enabled_self_insert_encryption_key_help'] = '允许参与者自行插入加密密钥。';
$string['included_e2ee_chat_messages'] = '在端对端EE中包含聊天消息';
$string['included_e2ee_chat_messages_help'] = '在端到端加密中包含聊天消息。';
$string['included_e2ee_whiteboard'] = '在端对端EE中加入白板';
$string['included_e2ee_whiteboard_help'] = '将白板纳入端到端加密。';

$string['insights_features_is_allow'] = '允许洞察';
$string['insights_features_is_allow_help'] = '允许本次会议产生洞见。';
$string['insights_transcription_features_is_allow'] = '允许转录';
$string['insights_transcription_features_is_allow_help'] = '允许会议内容被转录。';
$string['insights_transcription_features_is_allow_translation'] = '允许转录翻译';
$string['insights_transcription_features_is_allow_translation_help'] = '允许转录进行翻译。';
$string['insights_transcription_features_is_allow_speech_synthesis'] = '允许转录语音合成';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = '允许文字记录被朗读。';
$string['insights_chat_translation_features_is_allow'] = '允许聊天翻译';
$string['insights_chat_translation_features_is_allow_help'] = '允许聊天消息被翻译。';
$string['insights_ai_features_is_allow'] = '允许AI功能';
$string['insights_ai_features_is_allow_help'] = '允许在本会话中使用AI功能。';
$string['insights_ai_text_chat_features_is_allow'] = '允许AI文本聊天';
$string['insights_ai_text_chat_features_is_allow_help'] = '允许AI在聊天中使用。';
$string['insights_ai_meeting_summarization_features_is_allow'] = '允许AI会议摘要';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = '让AI总结会议。';

$string['lock_microphone'] = '锁定麦克风';
$string['lock_microphone_help'] = '默认禁用所有参与者的麦克风。';
$string['lock_webcam'] = '锁定摄像头';
$string['lock_webcam_help'] = '默认禁用所有参与者的摄像头。';
$string['lock_screen_sharing'] = '锁屏共享';
$string['lock_screen_sharing_help'] = '默认关闭所有参与者的屏幕共享。';
$string['lock_whiteboard'] = '锁白板';
$string['lock_whiteboard_help'] = '默认关闭所有参与者的白板。';
$string['lock_shared_notepad'] = 'Lock 共享记事本';
$string['lock_shared_notepad_help'] = '默认关闭所有参与者的共享笔记。';
$string['lock_chat'] = '锁聊';
$string['lock_chat_help'] = '默认关闭所有参与者的公开聊天。';
$string['lock_chat_send_message'] = '锁定聊天 发送消息';
$string['lock_chat_send_message_help'] = '默认关闭所有参与者在公共聊天中发送消息的功能。';
$string['lock_chat_file_share'] = '锁定聊天文件共享';
$string['lock_chat_file_share_help'] = '默认在公共聊天中为所有参与者关闭文件共享。';
$string['lock_private_chat'] = '锁定私人聊天';
$string['lock_private_chat_help'] = '默认关闭所有参与者的私密聊天。';

$string['completion_minutes'] = '出席会议纪要';
$string['completion_minutes_help'] = '要求用户在会话中停留一定分钟。';
$string['completion_minutes_desc'] = '用户必须至少参加该会话 {$a} 几分钟。';
$string['completion_raised_hand'] = '举手';
$string['completion_raised_hand_help'] = '要求用户至少举手一次。';
$string['completion_chat_messages'] = '聊天消息已发送';
$string['completion_chat_messages_help'] = '要求用户至少发送一条聊天消息。';
$string['completion_webcam_enabled'] = '启用摄像头';
$string['completion_webcam_enabled_help'] = '要求用户至少启用一次摄像头。';
$string['completion_webcam_duration'] = '摄像头启用时长（分钟）';
$string['completion_webcam_duration_help'] = '要求用户开启摄像头一定分钟。';
$string['completion_webcam_duration_desc'] = '用户必须至少启用摄像头 {$a} 几分钟。';
$string['completion_mic_enabled'] = '麦克风启用';
$string['completion_mic_enabled_help'] = '要求用户至少启用一次麦克风。';
$string['completion_mic_duration'] = '麦克风启用时长（分钟）';
$string['completion_mic_duration_help'] = '要求用户开启麦克风一段时间。';
$string['completion_mic_duration_desc'] = '用户必须至少启用麦克风 {$a} 几分钟。';
$string['completion_talk_duration'] = '通话时长（分钟）';
$string['completion_talk_duration_help'] = '要求用户通话一定分钟。';
$string['completion_talk_duration_desc'] = '用户至少必须说话 {$a} 几分钟。';
$string['completion_poll_voted'] = '投票结果';
$string['completion_poll_voted_help'] = '要求用户至少参加一次投票。';
$string['completion_whiteboard_annotated'] = '白板注释';
$string['completion_whiteboard_annotated_help'] = '要求用户在白板上做注释。';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = '存储会话统计数据，供用户判断活动完成度。';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = '用户的ID。';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'JSON 编码的会话数据（会议记录、聊天消息等）。';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = '统计数据最后更新的时间。';

// view.php
$string['join_session'] = '加入会议';
$string['start_session'] = '开始会议';
$string['end_session'] = '会议结束';
$string['participants'] = '参赛者';
$string['is_recording'] = '正在录音';
$string['is_active'] = '活跃';
$string['room_info'] = '现场直播详情';
$string['participants_info'] = '现场参与者';
$string['room_id'] = '房间编号';
$string['creation_time'] = '创作时间';
$string['name'] = '名称';
$string['user_id'] = '用户ID';
$string['is_admin'] = '是管理员';
$string['is_presenter'] = '是主持人';
$string['joined_at'] = '加入地点';
$string['moderator_not_joined'] = '必须有主持人开始会话，你才能加入。';
$string['session_available_from'] = '可从以下渠道获取： {$a}';
$string['session_available_until'] = '可使用至： {$a}';
$string['session_not_started_yet'] = '本次会议还没开始。';
$string['session_ended'] = '本次会议结束。';
$string['allow_guest'] = '允许访客用户';
$string['allow_guest_help'] = '启用后，会生成一个安全的可共享链接，使外部用户（如客座教师或无Moodle账户的参与者）可以加入会议;管理员可以查看并分享此链接。';
$string['guest_join_link'] = '嘉宾加入链接';
$string['guest_join_link_help'] = '将此链接分享给外部参与者。此链接将持续有效 {$a} 几个小时。每次页面重新加载都会生成一个新链接，但之前分享的链接将有效至其原始到期时间。';
$string['copy_link'] = '复制链接';
$string['link_copied'] = '链接已复制到剪贴板。';
$string['guest_join_title'] = '作为嘉宾加入会议';
$string['enter_display_name'] = '输入你的显示名称';
$string['join_as_guest'] = '加入会议';
$string['guest_access_denied'] = '本次会议未启用访客访问。';
$string['invalid_guest_token'] = '访客加入令牌无效或过期。';
$string['guest_link_expired'] = '这个访客加入链接已过期。';
$string['error_joining_session'] = '加入会话时出现了一个错误： {$a}';
$string['already_logged_in'] = '你已经登录了Moodle。你可以直接从这个活动页面加入本次活动。';
$string['total_webcams'] = 'Total Webcams';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Total Screen Shares';
$string['webcams'] = 'Webcams';
$string['mics'] = 'Mics';
$string['screenshares'] = 'Screen Shares';

// Events
$string['event_room_started'] = '房间开始了';
$string['event_room_ended'] = '房间结束';
$string['event_room_created'] = '新建房间';
$string['event_session_ended'] = '会议结束';
$string['event_participant_joined'] = '参与者加入';
$string['event_participant_left'] = '参与者离开';
$string['event_artifact_created'] = '神器制造';
$string['event_recording_proceeded'] = '录音准备';
$string['event_plugin_error'] = 'PlugNmeet 错误';
$string['event_track_published'] = 'Track published';
$string['event_track_unpublished'] = 'Track unpublished';

// Notifications
$string['messageprovider:recording_ready'] = '录制准备通知';
$string['messageprovider:artifact_ready'] = '已完成的工件通知';
$string['recording_ready_notification_subject'] = '录音准备就绪： {$a}';
$string['recording_ready_notification_fullmessage'] = '录音{$a->roomname}“现已准备好并处理完毕。你可以在这里观看： {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>录音 <strong>"{$a->roomname}"</strong> 现已准备好并处理完毕。</p><p><a href="{$a->url}“>点击此处查看录音。</a></p>';
$string['recording_ready_notification_smallmessage'] = '录音准备就绪 {$a}';
$string['artifact_ready_notification_subject'] = '神器准备： {$a}';
$string['artifact_ready_notification_fullmessage'] = '一个新的神器（{$a->type}）用于本次会议”{$a->roomname}“现已上线。你可以在这里观看： {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>一个新的神器（{$a->type}） <strong>"{$a->roomname}"</strong> 现已发布。</p><p><a href="{$a->url}“>点击此处查看工件详情。</a></p>';
$string['artifact_ready_notification_smallmessage'] = '神器准备就绪 {$a}';

// recordings.php
$string['no_recordings'] = '未发现录音。';
$string['recording_id'] = '录音ID';
$string['room_sid'] = '房间SID';
$string['file_size'] = '文件大小';
$string['created_at'] = '诞生于';
$string['actions'] = '行动';
$string['view'] = '视图';
$string['play'] = '玩';
$string['download'] = '下载';
$string['delete'] = '删除';
$string['delete_confirm'] = '你确定要删掉这个吗？';
$string['delete_success'] = '已成功删除。';
$string['recording_details'] = '录音详情';
$string['recording_creation_time'] = '录制创作时间';
$string['room_creation_time'] = '会话创建时间';
$string['back_to_list'] = '返回列表';
$string['browser_not_support_video'] = '你的浏览器不支持视频标签。';
$string['room_title'] = '房间标题';
$string['total_participants'] = '参赛总人数';
$string['session_started_at'] = '会议开始于';
$string['session_ended_at'] = '会议结束于';

// artifacts.php
$string['no_artifacts'] = '没有发现任何遗物。';
$string['artifact_id'] = '文物ID';
$string['type'] = '类型';
$string['artifact_details'] = '文物详情';
$string['no_permission'] = '您无权查看本页面。';
$string['token_usage'] = '令牌使用';
$string['duration_usage'] = '持续时间使用';
$string['character_count_usage'] = '字符数使用';
$string['estimated_cost'] = '预计成本';
$string['file_path'] = '文件路径';
$string['mime_type'] = '哑剧类型';
$string['created_at'] = '诞生于';

// Analytics strings
$string['download_excel_report'] = '下载Excel报告';
$string['download_raw_json'] = '下载原始数据';
$string['room_summary'] = '房间简介';
$string['users_summary'] = '用户简介';
$string['see_excel_report'] = '详情请参见Excel报告';
$string['error_loading_analytics'] = '错误加载分析数据： {$a}';
$string['error_generating_excel'] = '生成错误的Excel报告： {$a}';

$string['analytics_room_room_id'] = '房间编号';
$string['analytics_room_room_title'] = '房间标题';
$string['analytics_room_room_creation'] = '房间创建时间';
$string['analytics_room_room_ended'] = '房间结束时间';
$string['analytics_room_room_duration'] = '房间时长';
$string['analytics_room_room_total_users'] = '参赛总人数';
$string['analytics_room_enabled_e2ee'] = '支持端对端加密';
$string['analytics_room_recording_status'] = '记录状态计数';
$string['analytics_room_rtmp_status'] = 'RTMP状态计数';
$string['analytics_room_speech_service_total_usage'] = '语音服务总使用量';
$string['analytics_room_external_media_player_status'] = '外部媒体播放器状态计数';
$string['analytics_room_etherpad_status'] = '以太垫状态计数';
$string['analytics_room_external_display_link_status'] = '外部显示链路状态计数';
$string['analytics_room_ingress_created'] = '被创立的入侵伯爵';
$string['analytics_room_breakout_room'] = '分组讨论室数量';

$string['analytics_user_name'] = '名称';
$string['analytics_user_id'] = '用户ID';
$string['analytics_user_ex_id'] = '用户ID';
$string['analytics_user_is_admin'] = '是管理员';
$string['analytics_user_duration'] = '持续时间';
$string['analytics_user_joined'] = '加入地点';
$string['analytics_user_left'] = '留在';
$string['analytics_user_mic_status'] = '麦克风状态变更';
$string['analytics_user_mic_muted'] = '麦克风静音计数';
$string['analytics_user_mic_duration'] = '麦克风启用时长';
$string['analytics_user_talked'] = '谈伯爵';
$string['analytics_user_talked_duration'] = '通话时长';
$string['analytics_user_webcam_status'] = '摄像头状态变更';
$string['analytics_user_webcam_duration'] = '摄像头支持的时长';
$string['analytics_user_raise_hand'] = '举手计数';
$string['analytics_user_voted_poll'] = '投票计票数';
$string['analytics_user_whiteboard_annotated'] = '白板注释计数';
$string['analytics_user_whiteboard_files'] = '白板文件数量';
$string['analytics_user_screen_share_status'] = '屏幕共享状态变更';
$string['analytics_user_speech_services_usage'] = '语音服务的使用';
$string['analytics_user_public_chat'] = '公共聊天消息';
$string['analytics_user_private_chat'] = '私人聊天消息';
$string['analytics_user_chat_files'] = '聊天文件共享';
$string['analytics_user_interface_invisible'] = '接口隐形计数';
$string['analytics_user_connection_quality'] = '连接质量';
$string['analytics_user_connection_quality_excellent'] = '太好了';
$string['analytics_user_connection_quality_good'] = '很好';
$string['analytics_user_connection_quality_poor'] = '可怜';

$string['users_info'] = '用户信息';
$string['polls'] = '民调';
$string['question'] = '问题';
$string['options'] = '选项';
$string['file_name'] = '文件名';
$string['checkcompletiontask'] = 'Check plugNmeet 完成';

// attendance.php
$string['attendance_report'] = '出勤报告';
$string['status'] = '现状';
$string['present'] = '现状';
$string['absent'] = '缺席';
$string['incomplete'] = '未完成';
$string['completed'] = '完工';
$string['minutes_attended'] = '出席会议纪要';
$string['last_updated'] = '最后更新';
$string['mic_duration'] = '麦克风启用时长';
$string['webcam_duration'] = '摄像头支持的时长';
