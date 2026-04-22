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
$string['plugnmeet:viewattendancelist'] = '查看观众名单';
$string['plugnmeet:viewlivesessioninfo'] = '查看现场录音信息';
$string['plugnmeet:viewrecordings'] = '查看录音';
$string['plugnmeetfieldset'] = '自定义示例字段集';
$string['plugnmeetname'] = '自定义示例名称';
$string['plugnmeetname_help'] = '自定义示例帮助';

// Admin Settings
$string['api_config'] = 'API 配置';
$string['server_url'] = 'PlugNmeet 服务器 URL';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'API 密钥';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API 秘密';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server used for secure authentication.';
$string['guest_access_hdr'] = '访客访问设置';
$string['allow_guest_global'] = '允许访客全球访问';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = '访客链接过期时间（小时）';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = '技术默认设置';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = '启用Dynacast';
$string['enable_dynacast_des'] = 'Optimizes performance by dynamically pausing video layers that are not being viewed by participants. This significantly reduces server-side CPU and bandwidth usage. **Note:** This will be automatically enabled if using SVC codecs (VP9/AV1) and is required for multi-codec simulcast.';
$string['enable_simulcast'] = '启用同步广播';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = '视频编解码器';
$string['video_codec_des'] = 'The encoding standard for video transmission. **VP8** is recommended for WebRTC as it provides the best balance of quality and low latency. **Warning:** Not all browsers support every codec; ensure your users are on modern browsers if using VP9 or H.265.';
$string['default_webcam_resolution'] = '默认摄像头分辨率';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = '默认屏幕共享分辨率';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = '默认音频预设';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = '品牌塑造与定制化';
$string['custom_logo'] = '定制标志';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = '自定义 CSS URL';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = '原色';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = '辅助颜色';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = '背景颜色';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = '背景图片';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = '标题颜色';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = '页脚颜色';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = '左侧颜色';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = '侧面板背景色';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = '版权文本';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = '是的';
$string['no'] = '不';
$string['recordings'] = "录音";
$string['recording'] = "录音";
$string['artifacts'] = "房间伪影";
$string['attendance'] = "出勤报告";
$string['artifact'] = "文物";
$string['room_subject'] = '房间';
$string['user_subject'] = '用户';

// mod_form.php
$string['roomtitle'] = '房间标题';
$string['roomtitle_help'] = 'The name used for the Moodle activity and the live meeting header. It helps students identify the session in their course and inside the room.';
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
$string['available_help'] = 'Determines when participants can start joining the session. Users will not be able to enter the room before this date and time.';
$string['deadline'] = '可持续使用至此';
$string['deadline_help'] = 'Determines the final date and time that participants can access the session. Access will be blocked once this deadline passes.';
$string['err_deadline_before_available'] = '“可用至”日期不能早于“可用日期”。';
$string['error_analytics_required_for_completion'] = '如果设置了任何完成标准，必须勾选启用分析。';

$string['allow_webcams'] = '允许网络摄像头';
$string['allow_webcams_help'] = '允许参与者使用他们的摄像头。';
$string['mute_on_start'] = '启动时静音';
$string['mute_on_start_help'] = '当参与者加入会话时，自动静音所有参与者。';
$string['allow_screen_share'] = '允许屏幕共享';
$string['allow_screen_share_help'] = '允许参与者共享他们的屏幕。';
$string['allow_rtmp'] = '允许RTMP流媒体';
$string['allow_rtmp_help'] = 'Enables moderators to broadcast the live session to external platforms like YouTube, Facebook, or Twitch. Perfect for public webinars or guest lectures.';
$string['allow_raise_hand'] = '允许举手';
$string['allow_raise_hand_help'] = '允许参与者举手。';
$string['admin_only_webcams'] = '仅管理员网络摄像头';
$string['admin_only_webcams_help'] = '只允许版主使用他们的摄像头。';
$string['allow_view_other_webcams'] = '允许查看其他摄像头';
$string['allow_view_other_webcams_help'] = '允许参与者查看其他参与者的摄像头。如果被禁用，他们只能看到版主的摄像头。';
$string['allow_view_other_users_list'] = '允许查看其他用户列表';
$string['allow_view_other_users_list_help'] = '允许参与者查看其他参与者的列表。';
$string['room_duration'] = '房间时长（分钟）';
$string['room_duration_help'] = '定义了房间能保持开放多久，之后会自动关闭。如果你不想设置任何时间限制，请输入0，这样房间可以无限制地保持活跃状态。';
$string['moderator_join_first'] = '版主：先加入';
$string['moderator_join_first_help'] = '启用后，会话不会开始，且在主持人（如教师）先加入之前，任何人都无法加入。参与者将留在Moodle活动页面，不得进入房间或候诊区。这与等待室选项不同，后者用户仍可加入等待。';
$string['enable_analytics'] = '启用分析';
$string['enable_analytics_help'] = 'Tracks participation and engagement data for the session. **Note:** This must be enabled if any Completion criteria are set.';
$string['allow_virtual_bg'] = '允许虚拟背景';
$string['allow_virtual_bg_help'] = 'Enables participants to blur their background or use a virtual image. Great for maintaining student privacy and ensuring a professional classroom appearance.';
$string['auto_gen_user_id'] = '自动生成用户ID';
$string['auto_gen_user_id_help'] = '启用后，系统会创建一个新的ID，使同一用户可以从多个设备加入——例如，教师从平板电脑加入，在白板上绘画，同时使用PC进行摄像和麦克风;然而，它确实是 <b>推荐</b> 这样可以关闭该功能，从而使用Moodle用户ID，防止重复加入。';

$string['allow_recording'] = 'Allow Recording (Master Switch)';
$string['allow_recording_help'] = 'The primary master switch for all recording features. If disabled, both Cloud and Local recording options will be hidden from moderators.';
$string['allow_cloud_recording'] = '允许云端录制';
$string['allow_cloud_recording_help'] = 'Enables recording on the PlugNmeet server. The final video is processed and stored in the cloud, making it easy to share via a link once the session ends.';
$string['enable_auto_cloud_recording'] = '启用自动云记录';
$string['enable_auto_cloud_recording_help'] = 'Automatically triggers the cloud recording the moment the first moderator joins the session. Ideal for ensuring no lecture is forgotten.';
$string['allow_local_recording'] = '允许本地录制';
$string['allow_local_recording_help'] = 'Allows recording directly to the computer. **Note:** Requires Google Chrome. To capture all session audio, the user must share their "Chrome Tab" and check the "Also share tab audio" box. The file is saved locally to the device once finished.';

$string['allow_chat'] = 'Allow Chat (Global Master Switch)';
$string['allow_chat_help'] = 'The absolute master switch for all chat functions. If disabled, the entire chat area is removed for everyone, including moderators. No public or private chat will be possible.';
$string['allow_file_upload'] = '允许上传文件';
$string['allow_file_upload_help'] = 'Enables the ability to share files within the chat. This requires the "Allow Chat" master switch to be active.';

$string['allow_shared_notepad'] = '允许共享记事本';
$string['allow_shared_notepad_help'] = 'Enables a collaborative text editor where students and teachers can take real-time notes together. This is perfect for brainstorming, co-writing, or building a shared class summary.';

$string['allow_whiteboard'] = '允许白板';
$string['allow_whiteboard_help'] = 'Unlocks an interactive drawing space for the session. Use it for sketching diagrams, solving math problems visually, or letting students annotate shared content.';

$string['allowed_external_media_player'] = 'Allow External Media Player';
$string['allowed_external_media_player_help'] = 'Allows moderators to sync and play videos from sources like YouTube or Vimeo for the whole class. Ideal for analyzing educational clips or watching documentaries together without bandwidth lag.';

$string['activate_waiting_room'] = '启动候诊室';
$string['activate_waiting_room_help'] = '启用本次会谈的候诊室。';
$string['waiting_room_msg'] = '候诊室信息';
$string['waiting_room_msg_help'] = '该消息会在用户等待进入房间时显示。在课程开始前，用它分享指示、期望或有用信息。';

$string['allow_breakout_rooms'] = '允许分组讨论室';
$string['allow_breakout_rooms_help'] = 'Enables moderators to split participants into smaller groups for focused discussions, collaborative projects, or private group activities.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'The maximum number of sub-rooms a moderator can create within a single session.';

$string['allow_display_external_link_features'] = 'Allow External Link Sharing';
$string['allow_display_external_link_features_help'] = 'Allows moderators to display external educational content—such as H5P activities, SCORM packages, or quiz systems (e.g., Kahoot)—directly to all participants during the session.';

$string['allow_ingress_features'] = 'Allow Ingress (External Streaming)';
$string['allow_ingress_features_help'] = 'Allows teachers to broadcast high-quality video into the session using external software like OBS via RTMP or WHIP protocols. This is ideal for sharing high-resolution video content, pre-recorded sessions, or bypassing browser upload limitations.';

$string['allow_polls'] = '允许投票';
$string['allow_polls_help'] = 'Enables moderators to create interactive polls and quick quizzes during the session. This is a great way to check student understanding and increase engagement.';

$string['sip_dial_in_features_is_allow'] = '允许SIP拨号';
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
$string['insights_transcription_features_is_allow_translation'] = '允许转录翻译';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allows the live transcript to be translated into different languages, supporting international students and multi-lingual environments.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Speech Synthesis (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Enables Text-to-Speech, allowing the live transcript to be read aloud for better accessibility and for visually impaired participants.';
$string['insights_chat_translation_features_is_allow'] = '允许聊天翻译';
$string['insights_chat_translation_features_is_allow_help'] = 'Enables real-time translation of chat messages, allowing participants to communicate instantly across different languages.';
$string['insights_ai_features_is_allow'] = 'Allow AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'The master switch for all AI-powered capabilities. If disabled, specific features like AI Chat and Meeting Summarization will be hidden, even if Session Insights is active.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integrates an AI assistant directly into the chat to help answer questions, explain complex concepts, and facilitate group discussion.';
$string['insights_ai_meeting_summarization_features_is_allow'] = '允许AI会议摘要';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Automatically generates a concise AI summary after the session ends, highlighting key educational points, decisions, and follow-up tasks.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Mutes all participants by default upon entry. Only moderators can unmute or grant permission to speak.';
$string['lock_webcam'] = 'Lock Webcams';
$string['lock_webcam_help'] = 'Disables cameras for all participants by default. Useful for saving bandwidth or ensuring student privacy.';
$string['lock_screen_sharing'] = '锁屏共享';
$string['lock_screen_sharing_help'] = 'Restricts screen sharing to moderators only. Prevents participants from interrupting with their own screens.';
$string['lock_whiteboard'] = '锁白板';
$string['lock_whiteboard_help'] = 'Restricts whiteboard drawing tools to moderators only. Prevents unauthorized annotations by participants.';
$string['lock_shared_notepad'] = 'Lock 共享记事本';
$string['lock_shared_notepad_help'] = 'Disables the collaborative notepad for participants to prevent off-topic writing or distractions.';
$string['lock_chat'] = 'Lock Public Chat';
$string['lock_chat_help'] = 'Completely hides or disables the public chat area for all participants.';
$string['lock_chat_send_message'] = 'Lock Sending Messages';
$string['lock_chat_send_message_help'] = 'Allows participants to read the chat, but prevents them from sending any messages.';
$string['lock_chat_file_share'] = 'Lock File Sharing';
$string['lock_chat_file_share_help'] = 'Prevents participants from uploading or sharing files within the chat area.';
$string['lock_private_chat'] = '锁定私人聊天';
$string['lock_private_chat_help'] = 'Disables 1-on-1 private messaging between participants. Note: Participants can still send private messages to moderators for help or questions.';

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
$string['total_webcams'] = '网络摄像头总数';
$string['total_mics'] = '全麦克风';
$string['total_screen_shares'] = '总屏幕份额';
$string['webcams'] = '网络摄像头';
$string['mics'] = '麦克风';
$string['screenshares'] = '屏幕共享';

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
$string['event_track_published'] = '赛道已发布';
$string['event_track_unpublished'] = '未发布曲目';

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
$string['participation_progress'] = '参与进展';
$string['attendance_duration'] = '出席会议纪要';
$string['attendance_webcam_status'] = '启用摄像头';
$string['attendance_mic_status'] = '麦克风启用';
$string['attendance_talked_duration'] = '通话时长';
$string['attendance_voted_poll'] = '投票结果';
$string['attendance_chat_messages'] = '聊天消息已发送';
$string['attendance_raise_hand'] = '举手';
$string['attendance_webcam_duration'] = '摄像头支持的时长';
$string['attendance_mic_duration'] = '麦克风启用时长';
$string['attendance_whiteboard_annotated'] = '白板注释';
$string['met'] = '大都会';
$string['required'] = '必修';

// Status codes
$string['status_unknown_status'] = '服务器返回了一个未知状态。';
$string['status_success'] = '行动顺利完成。';
$string['status_permission_denied'] = '许可被拒。';
$string['status_not_found'] = '不 {$a} 找到了。';
$string['status_conflict'] = '由于冲突（例如房间可能已经存在），该动作无法完成。';
$string['status_invalid_token_or_signature'] = '请求令牌或签名无效。';
$string['status_invalid_api_key'] = '提供的API密钥无效。请检查你的插件设置。';
$string['status_internal_server_error'] = 'PlugNmeet 服务器遇到了内部错误。';
$string['status_invalid_parameters'] = '所提供的信息无效。';
$string['status_missing_required_parameter'] = '部分必需信息缺失。';
$string['status_room_not_found'] = '但未找到指定的房间。';
$string['status_user_not_found'] = '用户账户未找到。请确保您的API凭证正确且订阅有效。';
$string['status_user_blocked'] = '用户账户被封锁了。请联系客服。';
$string['status_user_not_active'] = '用户账户未激活。这很可能是因为订阅过期或无效。';
