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

$string['modulename'] = 'بلجونميت';
$string['modulename_help'] = 'تتيح لك وحدة نشاط PlugNmeet إنشاء وإدارة جلسات مؤتمرات الويب في الوقت الحقيقي من داخل مودل.';
$string['modulename_link'] = 'تعديل/اجتماع/عرض';
$string['modulenameplural'] = 'بلج نيميتس';
$string['pluginadministration'] = 'إدارة بلج نيميت';
$string['pluginname'] = 'بلجونميت';
$string['plugnmeet:addinstance'] = 'إضافة نشاط جديد في PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'حذف القطع الأثرية';
$string['plugnmeet:deleterecording'] = 'حذف التسجيلات';
$string['plugnmeet:downloadanalyticsreport'] = 'تحميل تقرير التحليلات';
$string['plugnmeet:downloadartifacts'] = 'تحميل القطع الأثرية';
$string['plugnmeet:downloadattendance'] = 'تحميل تقرير الحضور';
$string['plugnmeet:downloadrecordings'] = 'تحميل التسجيلات';
$string['plugnmeet:manage'] = 'إدارة إعدادات PlugNmeet';
$string['plugnmeet:view'] = 'عرض نشاط PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'عرض القطع الأثرية';
$string['plugnmeet:viewattendance'] = 'عرض تقرير الحضور';
$string['plugnmeet:viewattendancelist'] = 'عرض قائمة الحضور';
$string['plugnmeet:viewlivesessioninfo'] = 'عرض معلومات الجلسة الحية';
$string['plugnmeet:viewrecordings'] = 'عرض التسجيلات';
$string['plugnmeetfieldset'] = 'مجموعة الأمثلة المخصصة';
$string['plugnmeetname'] = 'اسم المثال المخصص';
$string['plugnmeetname_help'] = 'مساعدة في مثال مخصص';

// Admin Settings
$string['api_config'] = 'تكوين واجهة برمجة التطبيقات';
$string['server_url'] = 'رابط خادم PlugNmeet';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'مفتاح API';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'سر API';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server used for secure authentication.';
$string['guest_access_hdr'] = 'إعدادات الوصول إلى الضيوف';
$string['allow_guest_global'] = 'السماح بالوصول للضيوف عالميا';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = 'انتهاء صلاحية رابط الضيف (ساعات)';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = 'الإعدادات الافتراضية التقنية';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = 'تفعيل دايناكاست';
$string['enable_dynacast_des'] = 'Optimizes performance by dynamically pausing video layers that are not being viewed by participants. This significantly reduces server-side CPU and bandwidth usage. **Note:** This will be automatically enabled if using SVC codecs (VP9/AV1) and is required for multi-codec simulcast.';
$string['enable_simulcast'] = 'تمكين البث المتزامن';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = 'ترميز الفيديو';
$string['video_codec_des'] = 'The encoding standard for video transmission. **VP8** is recommended for WebRTC as it provides the best balance of quality and low latency. **Warning:** Not all browsers support every codec; ensure your users are on modern browsers if using VP9 or H.265.';
$string['default_webcam_resolution'] = 'دقة كاميرا الويب الافتراضية';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = 'دقة مشاركة الشاشة الافتراضية';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = 'إعداد الصوت الافتراضي';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = 'العلامة التجارية والتخصيص';
$string['custom_logo'] = 'شعار مخصص';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'عنوان URL المخصص ل CSS';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = 'اللون الأساسي';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = 'اللون الثانوي';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = 'لون الخلفية';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = 'صورة الخلفية';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = 'لون الرأس';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = 'لون التذييل';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = 'لون الجانب الأيسر';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = 'لون خلفية اللوحة الجانبية';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = 'نص حقوق النشر';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = 'نعم';
$string['no'] = 'لا';
$string['recordings'] = "التسجيلات";
$string['recording'] = "التسجيل";
$string['artifacts'] = "قطع أثرية للغرفة";
$string['attendance'] = "تقرير الحضور";
$string['artifact'] = "قطعة أثرية";
$string['room_subject'] = 'الغرفة';
$string['user_subject'] = 'المستخدم';

// mod_form.php
$string['roomtitle'] = 'عنوان الغرفة';
$string['roomtitle_help'] = 'The name used for the Moodle activity and the live meeting header. It helps students identify the session in their course and inside the room.';
$string['welcome_message'] = 'رسالة ترحيبية';
$string['welcome_message_help'] = 'أي نص يدخل هنا سيظهر كأول رسالة في الدردشة العامة عند انضمام المستخدمين إلى الغرفة. هذا مفيد لمشاركة التعليمات أو الروابط أو المعلومات المهمة مع المشاركين عند دخولهم.';
$string['max_participants'] = 'أكبر عدد من المشاركين';
$string['max_participants_help'] = 'اضبط هذه القيمة لتحدد عدد المستخدمين الذين يمكنهم الانضمام إلى الجلسة في نفس الوقت. قم بضبطه على 0 للسماح بعدد غير محدود من المشاركين، مما يعني أنه لا يوجد قيد لعدد المستخدمين الذين يمكنهم الانضمام.';
$string['room_features'] = 'ميزات الغرفة';
$string['recording_features'] = 'ميزات التسجيل';
$string['chat_features'] = 'ميزات الدردشة';
$string['other_features'] = 'ميزات أخرى';
$string['e2ee_features'] = 'التشفير من طرف إلى طرف';
$string['insights_features'] = 'رؤى وميزات الذكاء الاصطناعي';
$string['defaultlock'] = 'إعدادات القفل الافتراضية';
$string['advanced_completion'] = 'الإكمال المتقدم';
$string['available'] = 'متاح من';
$string['available_help'] = 'Determines when participants can start joining the session. Users will not be able to enter the room before this date and time.';
$string['deadline'] = 'متاح حتى';
$string['deadline_help'] = 'Determines the final date and time that participants can access the session. Access will be blocked once this deadline passes.';
$string['err_deadline_before_available'] = 'تاريخ "متاح حتى" لا يمكن أن يكون قبل تاريخ "متاح من".';
$string['error_analytics_required_for_completion'] = 'يجب التحقق من تمكين تحليلات إذا تم تحديد أي معايير إكمال.';

$string['allow_webcams'] = 'السماح بالكاميرات';
$string['allow_webcams_help'] = 'اسمح للمشاركين باستخدام كاميرات الويب الخاصة بهم.';
$string['mute_on_start'] = 'كتم الصوت عند البدء';
$string['mute_on_start_help'] = 'قم بكتم صوت جميع المشاركين تلقائيا عند انضمامهم للجلسة.';
$string['allow_screen_share'] = 'السماح بمشاركة الشاشة';
$string['allow_screen_share_help'] = 'اسمح للمشاركين بمشاركة شاشتهم.';
$string['allow_rtmp'] = 'السماح ببث RTMP';
$string['allow_rtmp_help'] = 'Enables moderators to broadcast the live session to external platforms like YouTube, Facebook, or Twitch. Perfect for public webinars or guest lectures.';
$string['allow_raise_hand'] = 'السماح برفع اليد';
$string['allow_raise_hand_help'] = 'اسمح للمشاركين برفع أيديهم.';
$string['admin_only_webcams'] = 'كاميرات ويب مخصصة للمسؤولين فقط';
$string['admin_only_webcams_help'] = 'يسمح فقط للمشرفين باستخدام كاميرات الويب الخاصة بهم.';
$string['allow_view_other_webcams'] = 'السماح بعرض كاميرات ويب أخرى';
$string['allow_view_other_webcams_help'] = 'اسمح للمشاركين بمشاهدة كاميرات الويب الخاصة بالمشاركين الآخرين. إذا تم تعطيله، فسيشاهدون فقط كاميرات الويب الخاصة بالمشرفين.';
$string['allow_view_other_users_list'] = 'السماح بعرض قائمة المستخدمين الآخرين';
$string['allow_view_other_users_list_help'] = 'اسمح للمشاركين برؤية قائمة المشاركين الآخرين.';
$string['room_duration'] = 'مدة الغرفة (دقائق)';
$string['room_duration_help'] = 'يحدد مدة بقاء الغرفة مفتوحة قبل أن تغلق تلقائيا. أدخل 0 إذا لم ترغب في تحديد أي حد زمني، مما يسمح للغرفة بالبقاء نشطة بدون قيود.';
$string['moderator_join_first'] = 'المشرف انضم أولا';
$string['moderator_join_first_help'] = 'عند تفعيلها، لن تبدأ الجلسة ولا يمكن لأي شخص الانضمام حتى ينضم مشرف (مثل معلم) أولا. سيبقى المشاركون في صفحة نشاط مودل ولن يدخلوا الغرفة أو منطقة الانتظار. هذا يختلف عن خيار غرفة الانتظار، حيث لا يزال بإمكان المستخدمين الانضمام والانتظار.';
$string['enable_analytics'] = 'تمكين التحليلات';
$string['enable_analytics_help'] = 'Tracks participation and engagement data for the session. **Note:** This must be enabled if any Completion criteria are set.';
$string['allow_virtual_bg'] = 'السماح بالخلفيات الافتراضية';
$string['allow_virtual_bg_help'] = 'Enables participants to blur their background or use a virtual image. Great for maintaining student privacy and ensuring a professional classroom appearance.';
$string['auto_gen_user_id'] = 'إنشاء معرف المستخدم تلقائيا';
$string['auto_gen_user_id_help'] = 'عند تفعيلها، ينشئ النظام معرفا جديدا بحيث يمكن لنفس المستخدم الانضمام من عدة أجهزة—على سبيل المثال، عندما ينضم المعلم من جهاز لوحي للرسم على السبورة البيضاء أثناء استخدام جهاز كمبيوتر للكاميرا والميكروفون؛ ومع ذلك، هو كذلك <b>موصى به</b> للحفاظ على إيقاف هذا الرقم حتى يتم استخدام معرف مستخدم مودل ومنع الانضمام المكرر.';

$string['allow_recording'] = 'Allow Recording (Master Switch)';
$string['allow_recording_help'] = 'The primary master switch for all recording features. If disabled, both Cloud and Local recording options will be hidden from moderators.';
$string['allow_cloud_recording'] = 'السماح بالتسجيل السحابي';
$string['allow_cloud_recording_help'] = 'Enables recording on the PlugNmeet server. The final video is processed and stored in the cloud, making it easy to share via a link once the session ends.';
$string['enable_auto_cloud_recording'] = 'تفعيل التسجيل التلقائي للسحابة';
$string['enable_auto_cloud_recording_help'] = 'Automatically triggers the cloud recording the moment the first moderator joins the session. Ideal for ensuring no lecture is forgotten.';
$string['allow_local_recording'] = 'السماح بالتسجيل المحلي';
$string['allow_local_recording_help'] = 'Allows recording directly to the computer. **Note:** Requires Google Chrome. To capture all session audio, the user must share their "Chrome Tab" and check the "Also share tab audio" box. The file is saved locally to the device once finished.';

$string['allow_chat'] = 'Allow Chat (Global Master Switch)';
$string['allow_chat_help'] = 'The absolute master switch for all chat functions. If disabled, the entire chat area is removed for everyone, including moderators. No public or private chat will be possible.';
$string['allow_file_upload'] = 'السماح برفع الملفات';
$string['allow_file_upload_help'] = 'Enables the ability to share files within the chat. This requires the "Allow Chat" master switch to be active.';

$string['allow_shared_notepad'] = 'السماح بدفتر الملاحظات المشترك';
$string['allow_shared_notepad_help'] = 'Enables a collaborative text editor where students and teachers can take real-time notes together. This is perfect for brainstorming, co-writing, or building a shared class summary.';

$string['allow_whiteboard'] = 'السماح بلوح المعلومات';
$string['allow_whiteboard_help'] = 'Unlocks an interactive drawing space for the session. Use it for sketching diagrams, solving math problems visually, or letting students annotate shared content.';

$string['allowed_external_media_player'] = 'Allow External Media Player';
$string['allowed_external_media_player_help'] = 'Allows moderators to sync and play videos from sources like YouTube or Vimeo for the whole class. Ideal for analyzing educational clips or watching documentaries together without bandwidth lag.';

$string['activate_waiting_room'] = 'تفعيل غرفة الانتظار';
$string['activate_waiting_room_help'] = 'قم بتفعيل غرفة الانتظار لهذه الجلسة.';
$string['waiting_room_msg'] = 'رسالة غرفة الانتظار';
$string['waiting_room_msg_help'] = 'تعرض هذه الرسالة للمستخدمين أثناء انتظارهم لدخول الغرفة. استخدمها لمشاركة التعليمات أو التوقعات أو المعلومات المفيدة قبل بدء الجلسة.';

$string['allow_breakout_rooms'] = 'السماح بغرف الفرق الإضافية';
$string['allow_breakout_rooms_help'] = 'Enables moderators to split participants into smaller groups for focused discussions, collaborative projects, or private group activities.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'The maximum number of sub-rooms a moderator can create within a single session.';

$string['allow_display_external_link_features'] = 'Allow External Link Sharing';
$string['allow_display_external_link_features_help'] = 'Allows moderators to display external educational content—such as H5P activities, SCORM packages, or quiz systems (e.g., Kahoot)—directly to all participants during the session.';

$string['allow_ingress_features'] = 'Allow Ingress (External Streaming)';
$string['allow_ingress_features_help'] = 'Allows teachers to broadcast high-quality video into the session using external software like OBS via RTMP or WHIP protocols. This is ideal for sharing high-resolution video content, pre-recorded sessions, or bypassing browser upload limitations.';

$string['allow_polls'] = 'استطلاعات الرأي';
$string['allow_polls_help'] = 'Enables moderators to create interactive polls and quick quizzes during the session. This is a great way to check student understanding and increase engagement.';

$string['sip_dial_in_features_is_allow'] = 'السماح بالاتصال ب SIP';
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
$string['insights_transcription_features_is_allow_translation'] = 'السماح بترجمة النسخ';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allows the live transcript to be translated into different languages, supporting international students and multi-lingual environments.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Speech Synthesis (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Enables Text-to-Speech, allowing the live transcript to be read aloud for better accessibility and for visually impaired participants.';
$string['insights_chat_translation_features_is_allow'] = 'السماح بترجمة الدردشة';
$string['insights_chat_translation_features_is_allow_help'] = 'Enables real-time translation of chat messages, allowing participants to communicate instantly across different languages.';
$string['insights_ai_features_is_allow'] = 'Allow AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'The master switch for all AI-powered capabilities. If disabled, specific features like AI Chat and Meeting Summarization will be hidden, even if Session Insights is active.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integrates an AI assistant directly into the chat to help answer questions, explain complex concepts, and facilitate group discussion.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'السماح بتلخيص اجتماعات الذكاء الاصطناعي';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Automatically generates a concise AI summary after the session ends, highlighting key educational points, decisions, and follow-up tasks.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Mutes all participants by default upon entry. Only moderators can unmute or grant permission to speak.';
$string['lock_webcam'] = 'Lock Webcams';
$string['lock_webcam_help'] = 'Disables cameras for all participants by default. Useful for saving bandwidth or ensuring student privacy.';
$string['lock_screen_sharing'] = 'مشاركة شاشة القفل';
$string['lock_screen_sharing_help'] = 'Restricts screen sharing to moderators only. Prevents participants from interrupting with their own screens.';
$string['lock_whiteboard'] = 'لوك بورد أبيض';
$string['lock_whiteboard_help'] = 'Restricts whiteboard drawing tools to moderators only. Prevents unauthorized annotations by participants.';
$string['lock_shared_notepad'] = 'دفتر الملاحظات المشترك بالقفل';
$string['lock_shared_notepad_help'] = 'Disables the collaborative notepad for participants to prevent off-topic writing or distractions.';
$string['lock_chat'] = 'Lock Public Chat';
$string['lock_chat_help'] = 'Completely hides or disables the public chat area for all participants.';
$string['lock_chat_send_message'] = 'Lock Sending Messages';
$string['lock_chat_send_message_help'] = 'Allows participants to read the chat, but prevents them from sending any messages.';
$string['lock_chat_file_share'] = 'Lock File Sharing';
$string['lock_chat_file_share_help'] = 'Prevents participants from uploading or sharing files within the chat area.';
$string['lock_private_chat'] = 'قفل الدردشة الخاصة';
$string['lock_private_chat_help'] = 'Disables 1-on-1 private messaging between participants. Note: Participants can still send private messages to moderators for help or questions.';

$string['completion_minutes'] = 'الدقائق التي حضرها';
$string['completion_minutes_help'] = 'اطلب من المستخدم أن يكون في الجلسة لعدد معين من الدقائق.';
$string['completion_minutes_desc'] = 'يجب على المستخدم حضور الجلسة على الأقل {$a} دقائق.';
$string['completion_raised_hand'] = 'اليد المرفوعة';
$string['completion_raised_hand_help'] = 'اطلب من المستخدم رفع يده مرة واحدة على الأقل.';
$string['completion_chat_messages'] = 'رسائل الدردشة المرسلة';
$string['completion_chat_messages_help'] = 'اطلب من المستخدم إرسال رسالة دردشة واحدة على الأقل.';
$string['completion_webcam_enabled'] = 'كاميرا ويب مفعلة';
$string['completion_webcam_enabled_help'] = 'اطلب من المستخدم تفعيل كاميرا الويب مرة واحدة على الأقل.';
$string['completion_webcam_duration'] = 'مدة الكاميرا المفعلة (دقائق)';
$string['completion_webcam_duration_help'] = 'اطلب من المستخدم تفعيل كاميرا الويب لعدد معين من الدقائق.';
$string['completion_webcam_duration_desc'] = 'يجب أن يكون المستخدم مفعلا لكاميرا الويب الخاصة به على الأقل {$a} دقائق.';
$string['completion_mic_enabled'] = 'مفعل الميكروفون';
$string['completion_mic_enabled_help'] = 'اطلب من المستخدم تفعيل الميكروفون مرة واحدة على الأقل.';
$string['completion_mic_duration'] = 'مدة الميكروفون (دقائق)';
$string['completion_mic_duration_help'] = 'يطلب من المستخدم تفعيل الميكروفون لعدد معين من الدقائق.';
$string['completion_mic_duration_desc'] = 'يجب أن يكون الميكروفون مفعلا على الأقل {$a} دقائق.';
$string['completion_talk_duration'] = 'مدة المحاضرة (دقائق)';
$string['completion_talk_duration_help'] = 'اطلب من المستخدم التحدث لعدد معين من الدقائق.';
$string['completion_talk_duration_desc'] = 'يجب على المستخدم أن يتحدث على الأقل {$a} دقائق.';
$string['completion_poll_voted'] = 'التصويت في الاستطلاع';
$string['completion_poll_voted_help'] = 'اطلب من المستخدم التصويت في استطلاع واحد على الأقل.';
$string['completion_whiteboard_annotated'] = 'ملاحظة على السبورة البيضاء';
$string['completion_whiteboard_annotated_help'] = 'اطلب من المستخدم أن يضع تعليقات توضيحية على السبورة البيضاء.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'يخزن إحصائيات الجلسات للمستخدمين لتحديد إكمال النشاط.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'معرف المستخدم.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'بيانات الجلسة المشفرة ب JSON (الدقائق، رسائل الدردشة، إلخ).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'الوقت الذي تم فيه تحديث الإحصائيات آخر مرة.';

// view.php
$string['join_session'] = 'جلسة الانضمام';
$string['start_session'] = 'جلسة البدء';
$string['end_session'] = 'نهاية الجلسة';
$string['participants'] = 'المشاركون';
$string['is_recording'] = 'هل هو التسجيل';
$string['is_active'] = 'نشط';
$string['room_info'] = 'تفاصيل الجلسة الحية';
$string['participants_info'] = 'المشاركون المباشرون';
$string['room_id'] = 'معرف الغرفة';
$string['creation_time'] = 'زمن الخلق';
$string['name'] = 'الاسم';
$string['user_id'] = 'معرف المستخدم';
$string['is_admin'] = 'هل هو إداري';
$string['is_presenter'] = 'هو المقدم';
$string['joined_at'] = 'انضم إلى';
$string['moderator_not_joined'] = 'يجب على المشرف بدء الجلسة قبل أن تتمكن من الانضمام.';
$string['session_available_from'] = 'متوفر من: {$a}';
$string['session_available_until'] = 'متاح حتى: {$a}';
$string['session_not_started_yet'] = 'هذه الجلسة لم تبدأ بعد.';
$string['session_ended'] = 'انتهت هذه الجلسة.';
$string['allow_guest'] = 'السماح للمستخدمين الضيوف';
$string['allow_guest_help'] = 'عند تفعيلها، يتم إنشاء رابط آمن قابل للمشاركة حتى يتمكن المستخدمون الخارجيون (مثل المعلمين الضيوف أو المشاركين الذين لا يملكون حساب Moodle) من الانضمام إلى الجلسة؛ يمكن للمسؤول عرض ومشاركة هذا الرابط.';
$string['guest_join_link'] = 'رابط انضمام الضيف';
$string['guest_join_link_help'] = 'شارك هذا الرابط مع المشاركين الخارجيين. سيظل هذا الرابط صالحا ل {$a} ساعات. كل إعادة تحميل صفحة تولد رابطا جديدا، لكن الروابط التي تم مشاركتها سابقا ستظل صالحة حتى انتهاء صلاحيتها الأصلية.';
$string['copy_link'] = 'رابط النسخ.';
$string['link_copied'] = 'تم نسخ الرابط إلى لوحة الحافظ.';
$string['guest_join_title'] = 'انضم إلى الاجتماع كضيف';
$string['enter_display_name'] = 'أدخل اسم العرض الخاص بك';
$string['join_as_guest'] = 'اجتماع الانضمام';
$string['guest_access_denied'] = 'غير مفعل وصول الضيوف لهذا الاجتماع.';
$string['invalid_guest_token'] = 'رمز انضمام ضيف غير صالح أو منتهية الصلاحية.';
$string['guest_link_expired'] = 'رابط انضمام الضيوف هذا انتهى صلاحيته.';
$string['error_joining_session'] = 'حدث خطأ في الانضمام إلى الجلسة: {$a}';
$string['already_logged_in'] = 'أنت بالفعل مسجل الدخول إلى مودل. يمكنك الانضمام إلى الجلسة مباشرة من صفحة النشاط هذه.';
$string['total_webcams'] = 'كاميرات الويب الكاملة';
$string['total_mics'] = 'الميكروفونات الشاملة';
$string['total_screen_shares'] = 'إجمالي حصص الشاشة';
$string['webcams'] = 'كاميرات الويب';
$string['mics'] = 'الميكروفونات';
$string['screenshares'] = 'مشاركات الشاشة';

// Events
$string['event_room_started'] = 'بدأت الغرفة';
$string['event_room_ended'] = 'انتهت الغرفة';
$string['event_room_created'] = 'تم إنشاء الغرفة';
$string['event_session_ended'] = 'انتهت الجلسة';
$string['event_participant_joined'] = 'شارك شارك';
$string['event_participant_left'] = 'اليسار من المشاركين';
$string['event_artifact_created'] = 'قطعة أثرية تم إنشاؤها';
$string['event_recording_proceeded'] = 'التسجيل جاهز';
$string['event_plugin_error'] = 'خطأ PlugNmeet';
$string['event_track_published'] = 'الأغنية المنشورة';
$string['event_track_unpublished'] = 'الأغنية غير منشورة';

// Notifications
$string['messageprovider:recording_ready'] = 'إشعارات للتسجيلات الجاهزة';
$string['messageprovider:artifact_ready'] = 'إشعارات للتشويهات الجاهزة';
$string['recording_ready_notification_subject'] = 'جاهز التسجيل: {$a}';
$string['recording_ready_notification_fullmessage'] = 'التسجيل الخاص بالجلسة "{$a->roomname}" الآن جاهزة ومعالجة. يمكنك مشاهدته هنا: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>التسجيل الخاص بالجلسة <strong>"{$a->roomname}"</strong> الآن جاهز ومعالج.</p><p><a href="{$a->url}">اضغط هنا لعرض التسجيل.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'التسجيل جاهز ل {$a}';
$string['artifact_ready_notification_subject'] = 'جاهز للقطع الأثرية: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'قطعة أثرية جديدة ({$a->type}) للجلسة "{$a->roomname}" متاح الآن. يمكنك مشاهدته هنا: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>قطعة أثرية جديدة ({$a->type}) للجلسة <strong>"{$a->roomname}"</strong> متاح الآن.</p><p><a href="{$a->url}">انقر هنا لعرض تفاصيل القطعة الأثرية.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'القطعة الأثرية جاهزة ل {$a}';

// recordings.php
$string['no_recordings'] = 'لم يتم العثور على أي تسجيلات.';
$string['recording_id'] = 'معرف التسجيل';
$string['room_sid'] = 'غرفة SID';
$string['file_size'] = 'حجم الملف';
$string['created_at'] = 'تم إنشاؤه في';
$string['actions'] = 'الإجراءات';
$string['view'] = 'منظر';
$string['play'] = 'لعب';
$string['download'] = 'تحميل';
$string['delete'] = 'حذف';
$string['delete_confirm'] = 'هل أنت متأكد أنك تريد حذف هذا؟';
$string['delete_success'] = 'تم الحذف بنجاح.';
$string['recording_details'] = 'تفاصيل التسجيل';
$string['recording_creation_time'] = 'تسجيل وقت الإنشاء';
$string['room_creation_time'] = 'وقت إنشاء الجلسة';
$string['back_to_list'] = 'العودة إلى القائمة';
$string['browser_not_support_video'] = 'متصفحك لا يدعم وسم الفيديو.';
$string['room_title'] = 'عنوان الغرفة';
$string['total_participants'] = 'إجمالي المشاركين';
$string['session_started_at'] = 'بدأت الجلسة في';
$string['session_ended_at'] = 'انتهت الجلسة عند';

// artifacts.php
$string['no_artifacts'] = 'لم يتم العثور على أي قطع أثرية.';
$string['artifact_id'] = 'معرف القطع الأثرية';
$string['type'] = 'النوع';
$string['artifact_details'] = 'تفاصيل القطع الأثرية';
$string['no_permission'] = 'ليس لديك إذن بعرض هذه الصفحة.';
$string['token_usage'] = 'استخدام الرموز';
$string['duration_usage'] = 'الاستخدام لمدة';
$string['character_count_usage'] = 'استخدام عدد الحروف';
$string['estimated_cost'] = 'التكلفة المقدرة';
$string['file_path'] = 'مسار الملف';
$string['mime_type'] = 'نوع الميم';
$string['created_at'] = 'تم إنشاؤه في';

// Analytics strings
$string['download_excel_report'] = 'تحميل تقرير إكسل';
$string['download_raw_json'] = 'تحميل البيانات الخام';
$string['room_summary'] = 'ملخص الغرفة';
$string['users_summary'] = 'ملخص المستخدمين';
$string['see_excel_report'] = 'راجع تقرير إكسل لمزيد من التفاصيل';
$string['error_loading_analytics'] = 'خطأ في تحميل بيانات التحليلات: {$a}';
$string['error_generating_excel'] = 'خطأ في إنشاء تقرير إكسل: {$a}';

$string['analytics_room_room_id'] = 'معرف الغرفة';
$string['analytics_room_room_title'] = 'عنوان الغرفة';
$string['analytics_room_room_creation'] = 'وقت إنشاء الغرفة';
$string['analytics_room_room_ended'] = 'وقت انتهاء الغرفة';
$string['analytics_room_room_duration'] = 'مدة الغرفة';
$string['analytics_room_room_total_users'] = 'إجمالي المشاركين';
$string['analytics_room_enabled_e2ee'] = 'مفعل ب E2EE';
$string['analytics_room_recording_status'] = 'عدد حالة التسجيل';
$string['analytics_room_rtmp_status'] = 'عدد حالة RTMP';
$string['analytics_room_speech_service_total_usage'] = 'إجمالي استخدام خدمة الخطابة';
$string['analytics_room_external_media_player_status'] = 'عدد حالة مشغل الوسائط الخارجية';
$string['analytics_room_etherpad_status'] = 'عدد حالة الإيثرباد';
$string['analytics_room_external_display_link_status'] = 'عدد حالة رابط العرض الخارجي';
$string['analytics_room_ingress_created'] = 'إنغريس خلق كونت';
$string['analytics_room_breakout_room'] = 'عدد غرف الهروب';

$string['analytics_user_name'] = 'الاسم';
$string['analytics_user_id'] = 'معرف المستخدم';
$string['analytics_user_ex_id'] = 'معرف المستخدم';
$string['analytics_user_is_admin'] = 'هل هو إداري';
$string['analytics_user_duration'] = 'المدة';
$string['analytics_user_joined'] = 'انضم إلى';
$string['analytics_user_left'] = 'يسار عند';
$string['analytics_user_mic_status'] = 'تغييرات حالة الميكروفون';
$string['analytics_user_mic_muted'] = 'عدد الميكروفون المكتوم';
$string['analytics_user_mic_duration'] = 'مدة الميكروفون';
$string['analytics_user_talked'] = 'الكونت المتكلم';
$string['analytics_user_talked_duration'] = 'مدة الحديث';
$string['analytics_user_webcam_status'] = 'تغييرات حالة كاميرا الويب';
$string['analytics_user_webcam_duration'] = 'مدة الكاميرا المفعلة';
$string['analytics_user_raise_hand'] = 'رفع العد باليد';
$string['analytics_user_voted_poll'] = 'عدد التصويتات';
$string['analytics_user_whiteboard_annotated'] = 'العد المشروح بالسبورة البيضاء';
$string['analytics_user_whiteboard_files'] = 'عدد ملفات السبورة البيضاء';
$string['analytics_user_screen_share_status'] = 'تغييرات حالة مشاركة الشاشة';
$string['analytics_user_speech_services_usage'] = 'استخدام خدمات الكلام';
$string['analytics_user_public_chat'] = 'رسائل الدردشة العامة';
$string['analytics_user_private_chat'] = 'رسائل الدردشة الخاصة';
$string['analytics_user_chat_files'] = 'ملفات الدردشة المشتركة';
$string['analytics_user_interface_invisible'] = 'عدد الواجهة غير المرئي';
$string['analytics_user_connection_quality'] = 'جودة الاتصال';
$string['analytics_user_connection_quality_excellent'] = 'ممتاز';
$string['analytics_user_connection_quality_good'] = 'جيد';
$string['analytics_user_connection_quality_poor'] = 'فقير';

$string['users_info'] = 'معلومات المستخدمين';
$string['polls'] = 'استطلاعات الرأي';
$string['question'] = 'سؤال';
$string['options'] = 'الخيارات';
$string['file_name'] = 'اسم الملف';
$string['checkcompletiontask'] = 'تحقق من إكمال plugNmeet';

// attendance.php
$string['attendance_report'] = 'تقرير الحضور';
$string['status'] = 'الحالة';
$string['present'] = 'الحاضر';
$string['absent'] = 'غائب';
$string['incomplete'] = 'غير مكتمل';
$string['completed'] = 'اكتمل';
$string['minutes_attended'] = 'الدقائق التي حضرها';
$string['last_updated'] = 'آخر تحديث';
$string['mic_duration'] = 'مدة الميكروفون';
$string['webcam_duration'] = 'مدة الكاميرا المفعلة';
$string['participation_progress'] = 'تقدم المشاركة';
$string['attendance_duration'] = 'الدقائق التي حضرها';
$string['attendance_webcam_status'] = 'كاميرا ويب مفعلة';
$string['attendance_mic_status'] = 'مفعل الميكروفون';
$string['attendance_talked_duration'] = 'مدة الحديث';
$string['attendance_voted_poll'] = 'التصويت في الاستطلاع';
$string['attendance_chat_messages'] = 'رسائل الدردشة المرسلة';
$string['attendance_raise_hand'] = 'اليد المرفوعة';
$string['attendance_webcam_duration'] = 'مدة الكاميرا المفعلة';
$string['attendance_mic_duration'] = 'مدة الميكروفون';
$string['attendance_whiteboard_annotated'] = 'ملاحظة على السبورة البيضاء';
$string['met'] = 'مت';
$string['required'] = 'مطلوب';

// Status codes
$string['status_unknown_status'] = 'تم عرض حالة غير معروفة من الخادم.';
$string['status_success'] = 'اكتملت العملية بنجاح.';
$string['status_permission_denied'] = 'تم رفض الإذن.';
$string['status_not_found'] = 'لا {$a} وجدت.';
$string['status_conflict'] = 'لم يكن بالإمكان إتمام هذا الإجراء بسبب وجود تعارض (مثلا، قد تكون الغرفة موجودة بالفعل).';
$string['status_invalid_token_or_signature'] = 'رمز الطلب أو توقيعه غير صالح.';
$string['status_invalid_api_key'] = 'مفتاح واجهة برمجة التطبيقات المقدم غير صالح. يرجى التحقق من إعدادات الإضافات الخاصة بك.';
$string['status_internal_server_error'] = 'واجه خادم PlugNmeet خطأ داخليا.';
$string['status_invalid_parameters'] = 'المعلومات المقدمة غير صحيحة.';
$string['status_missing_required_parameter'] = 'بعض المعلومات المطلوبة مفقودة.';
$string['status_room_not_found'] = 'لم يتم العثور على الغرفة المحددة.';
$string['status_user_not_found'] = 'لم يتم العثور على حساب المستخدم. يرجى التأكد من صحة بيانات اعتماد API الخاصة بك وأن اشتراكك نشط.';
$string['status_user_blocked'] = 'حساب المستخدم محجوب. يرجى التواصل مع الدعم.';
$string['status_user_not_active'] = 'حساب المستخدم غير نشط. من المحتمل أن يكون ذلك بسبب اشتراك غير نشط أو منتهى.';
