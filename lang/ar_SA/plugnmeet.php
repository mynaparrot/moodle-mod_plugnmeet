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
$string['plugnmeet:deleterecording'] = 'حذف التسجيلات';
$string['plugnmeet:manage'] = 'إدارة إعدادات PlugNmeet';
$string['plugnmeet:view'] = 'عرض نشاط PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'عرض القطع الأثرية';
$string['plugnmeet:viewlivesessioninfo'] = 'عرض معلومات الجلسة الحية';
$string['plugnmeetfieldset'] = 'مجموعة الأمثلة المخصصة';
$string['plugnmeetname'] = 'اسم المثال المخصص';
$string['plugnmeetname_help'] = 'مساعدة في مثال مخصص';

// Admin Settings
$string['api_config'] = 'تكوين واجهة برمجة التطبيقات';
$string['server_url'] = 'رابط خادم PlugNmeet';
$string['server_url_desc'] = 'عنوان URL الأساسي لخادم PlugNmeet الخاص بك (مثلا، https://pnm.example.com)';
$string['api_key'] = 'مفتاح API';
$string['api_key_desc'] = 'مفتاح API الذي يوفره خادم PlugNmeet الخاص بك.';
$string['api_secret'] = 'سر API';
$string['api_secret_desc'] = 'سر واجهة برمجة التطبيقات الذي يوفره خادم PlugNmeet الخاص بك.';
$string['guest_access_hdr'] = 'إعدادات الوصول إلى الضيوف';
$string['allow_guest_global'] = 'السماح بالوصول للضيوف عالميا';
$string['allow_guest_global_desc'] = 'إذا كان الوضع معطلا، لا يمكن تفعيل انضمام الضيوف لأي غرفة اجتماع.';
$string['guest_link_expiration'] = 'انتهاء صلاحية رابط الضيف (ساعات)';
$string['guest_link_expiration_desc'] = 'كم من الوقت يبقى رابط انضمام الضيف صالحا بعد التوليد.';

$string['defaults'] = 'الإعدادات الافتراضية التقنية';
$string['defaults_desc'] = 'الإعدادات التقنية الافتراضية لجلسات PlugNmeet الجديدة.';
$string['enable_dynacast'] = 'تفعيل دايناكاست';
$string['enable_dynacast_des'] = 'استخدم Dynacast لتحسين بث الفيديو من خلال نشر أحدث مكبر صوت نشط فقط.';
$string['enable_simulcast'] = 'تمكين البث المتزامن';
$string['enable_simulcast_des'] = 'استخدم البث المتزامن لتوفير طبقات جودة فيديو متعددة للمشاهدين.';
$string['video_codec'] = 'ترميز الفيديو';
$string['video_codec_des'] = 'ترميز الفيديو الافتراضي للجلسات.';
$string['default_webcam_resolution'] = 'دقة كاميرا الويب الافتراضية';
$string['default_webcam_resolution_des'] = 'الدقة الافتراضية لكاميرات الويب.';
$string['default_screen_share_resolution'] = 'دقة مشاركة الشاشة الافتراضية';
$string['default_screen_share_resolution_des'] = 'الدقة الافتراضية لمشاركة الشاشة.';
$string['default_audio_preset'] = 'إعداد الصوت الافتراضي';
$string['default_audio_preset_des'] = 'إعداد الصوت الافتراضي للجلسات.';

$string['branding'] = 'العلامة التجارية والتخصيص';
$string['custom_logo'] = 'شعار مخصص';
$string['custom_logo_des'] = 'قم بتحميل شعار مخصص ليعرضه في غرفة الاجتماعات. إذا كان فارغا، سيتم استخدام شعار PlugNmeet الافتراضي.';
$string['custom_css_url'] = 'عنوان URL المخصص ل CSS';
$string['custom_css_url_des'] = 'قدم رابط لملف CSS خارجي لتخصيص مظهر وإحساس غرفة الاجتماعات.';
$string['primary_color'] = 'اللون الأساسي';
$string['primary_color_des'] = 'اللون الأساسي للأزرار والخصلات.';
$string['secondary_color'] = 'اللون الثانوي';
$string['secondary_color_des'] = 'اللون الثانوي لعناصر واجهة المستخدم.';
$string['background_color'] = 'لون الخلفية';
$string['background_color_des'] = 'لون خلفية الواجهة';
$string['background_image'] = 'صورة الخلفية';
$string['background_image_des'] = 'يجب أن يكون حجم 1920 × 1080 للحصول على أفضل نتيجة.';
$string['header_color'] = 'لون الرأس';
$string['header_color_des'] = 'لون رأس الواجهة';
$string['footer_color'] = 'لون التذييل';
$string['footer_color_des'] = 'لون تذييل الواجهة';
$string['left_color'] = 'لون الجانب الأيسر';
$string['left_color_des'] = 'لون شريط الجانب الأيسر';
$string['side_panel_bg_color'] = 'لون خلفية اللوحة الجانبية';
$string['side_panel_bg_color_des'] = 'لون خلفية اللوحة على الجانب الأيمن';
$string['copyright_text'] = 'نص حقوق النشر';
$string['copyright_text_des'] = 'نص حقوق النشر لعرضه في تذييل غرفة الاجتماعات. HTML مسموح به.';
$string['client_load'] = 'تحميل العميل من';
$string['client_load_des'] = 'الافتراضي: محلي';
$string['remote'] = 'بعيد';
$string['local'] = 'محلي';

$string['client_side'] = 'خيارات العميل';
$string['client_load_mode'] = 'وضع تحميل العميل';
$string['client_load_mode_desc'] = 'اختر ما إذا كنت ستقوم بتحميل عميل الويب من الخادم البعيد أو من نسخة محلية.';
$string['remote'] = 'البعيد';
$string['local'] = 'محلي';
$string['client_download_url'] = 'رابط تحميل العميل';
$string['client_download_url_des'] = 'إذا كنت تستخدم وضع التحميل "المحلي"، قدم رابط الملف client.zip.';
$string['update_client_btn'] = 'تحديث العميل المحلي';
$string['update_client_btn_label'] = 'تحديث الآن';

$string['yes'] = 'نعم';
$string['no'] = 'لا';
$string['recordings'] = "التسجيلات";
$string['artifacts'] = "قطع أثرية للغرفة";
$string['attendance'] = "تقرير الحضور";
$string['artifact'] = "قطعة أثرية";

// mod_form.php
$string['roomtitle'] = 'عنوان الغرفة';
$string['welcome_message'] = 'رسالة ترحيبية';
$string['max_participants'] = 'أكبر عدد من المشاركين';
$string['room_features'] = 'ميزات الغرفة';
$string['recording_features'] = 'ميزات التسجيل';
$string['chat_features'] = 'ميزات الدردشة';
$string['other_features'] = 'ميزات أخرى';
$string['e2ee_features'] = 'التشفير من طرف إلى طرف';
$string['insights_features'] = 'رؤى وميزات الذكاء الاصطناعي';
$string['defaultlock'] = 'إعدادات القفل الافتراضية';
$string['advanced_completion'] = 'الإكمال المتقدم';
$string['available'] = 'متاح من';
$string['deadline'] = 'متاح حتى';
$string['err_deadline_before_available'] = 'تاريخ "متاح حتى" لا يمكن أن يكون قبل تاريخ "متاح من".';
$string['error_analytics_required_for_completion'] = 'يجب التحقق من تمكين تحليلات إذا تم تحديد أي معايير إكمال.';

$string['allow_webcams'] = 'السماح بالكاميرات';
$string['allow_webcams_help'] = 'اسمح للمشاركين باستخدام كاميرات الويب الخاصة بهم.';
$string['mute_on_start'] = 'كتم الصوت عند البدء';
$string['mute_on_start_help'] = 'قم بكتم صوت جميع المشاركين تلقائيا عند انضمامهم للجلسة.';
$string['allow_screen_share'] = 'السماح بمشاركة الشاشة';
$string['allow_screen_share_help'] = 'اسمح للمشاركين بمشاركة شاشتهم.';
$string['allow_rtmp'] = 'السماح ببث RTMP';
$string['allow_rtmp_help'] = 'السماح للمشرفين ببث الجلسة إلى نقطة نهاية RTMP.';
$string['admin_only_webcams'] = 'كاميرات ويب مخصصة للمسؤولين فقط';
$string['admin_only_webcams_help'] = 'يسمح فقط للمشرفين باستخدام كاميرات الويب الخاصة بهم.';
$string['room_duration'] = 'مدة الغرفة (دقائق)';
$string['room_duration_help'] = 'أقصى مدة للغرفة بدقائق. 0 بدون حد.';
$string['moderator_join_first'] = 'المشرف انضم أولا';
$string['moderator_join_first_help'] = 'اطلب انضمام مشرف قبل أن يتمكن المشاركون الآخرون.';
$string['enable_analytics'] = 'تمكين التحليلات';
$string['enable_analytics_help'] = 'قم بإنشاء تحليلات للجلسة. ملاحظة: يجب تفعيل هذا إذا تم تحديد أي معايير إكمال.';
$string['allow_virtual_bg'] = 'السماح بالخلفيات الافتراضية';
$string['allow_virtual_bg_help'] = 'السماح للمشاركين باستخدام الخلفيات الافتراضية.';
$string['auto_gen_user_id'] = 'إنشاء معرف المستخدم تلقائيا';
$string['auto_gen_user_id_help'] = 'إنشاء معرف مستخدم تلقائي لكل مشارك.';

$string['allow_recording'] = 'السماح بالتسجيل';
$string['allow_recording_help'] = 'اسمح بتسجيل الجلسة.';
$string['allow_cloud_recording'] = 'السماح بالتسجيل السحابي';
$string['allow_cloud_recording_help'] = 'السماح بتسجيل الجلسة على السحابة.';
$string['enable_auto_cloud_recording'] = 'تفعيل التسجيل التلقائي للسحابة';
$string['enable_auto_cloud_recording_help'] = 'ابدأ التسجيل تلقائيا عند بدء الجلسة.';
$string['allow_local_recording'] = 'السماح بالتسجيل المحلي';
$string['allow_local_recording_help'] = 'اسمح للمشاركين بتسجيل الجلسة محليا.';
$string['is_allow_view_recording'] = 'السماح بمشاهدة التسجيلات';
$string['is_allow_view_recording_help'] = 'اسمح للمشاركين بمشاهدة التسجيلات.';
$string['is_allow_download_recording'] = 'السماح بتحميل التسجيلات';
$string['is_allow_download_recording_help'] = 'اسمح للمشاركين بتحميل التسجيلات.';

$string['allow_chat'] = 'السماح بالدردشة';
$string['allow_chat_help'] = 'تفعيل ميزة الدردشة العامة.';
$string['allow_file_upload'] = 'السماح برفع الملفات';
$string['allow_file_upload_help'] = 'اسمح للمشاركين برفع الملفات في الدردشة.';

$string['allow_shared_notepad'] = 'السماح بدفتر الملاحظات المشترك';
$string['allow_shared_notepad_help'] = 'السماح للمشاركين باستخدام دفتر الملاحظات المشترك.';
$string['allow_whiteboard'] = 'السماح بلوح المعلومات';
$string['allow_whiteboard_help'] = 'اسمح للمشاركين باستخدام السبورة البيضاء.';
$string['allowed_external_media_player'] = 'السماح بمشغل وسائط خارجي';
$string['allowed_external_media_player_help'] = 'السماح للمشاركين بتشغيل وسائط خارجية (مثل فيديوهات يوتيوب).';
$string['activate_waiting_room'] = 'تفعيل غرفة الانتظار';
$string['activate_waiting_room_help'] = 'قم بتفعيل غرفة الانتظار لهذه الجلسة.';
$string['waiting_room_msg'] = 'رسالة غرفة الانتظار';
$string['allow_breakout_rooms'] = 'السماح بغرف الفرق الإضافية';
$string['allow_breakout_rooms_help'] = 'اسمح للمشرفين بإنشاء غرف منفصلة.';
$string['allowed_number_rooms'] = 'عدد غرف الخروج المسموح بها';
$string['allow_display_external_link_features'] = 'السماح بعرض رابط خارجي';
$string['allow_display_external_link_features_help'] = 'اسمح للمشرفين بعرض رابط خارجي لجميع المشاركين.';
$string['allow_ingress_features'] = 'السماح بالدخول';
$string['allow_ingress_features_help'] = 'اسمح للدخول إلى الجلسة.';
$string['allow_polls'] = 'استطلاعات الرأي';
$string['allow_polls_help'] = 'اسمح للمشرفين بإنشاء استطلاعات.';
$string['sip_dial_in_features_is_allow'] = 'السماح بالاتصال ب SIP';
$string['sip_dial_in_features_is_allow_help'] = 'اسمح للمشاركين بالانضمام إلى الجلسة عبر الاتصال الهاتفي بنظام SIP.';

$string['enable_end_to_end_encryption_features'] = 'تمكين التشفير من طرف إلى طرف';
$string['enable_end_to_end_encryption_features_help'] = 'تفعيل التشفير من طرف إلى طرف للجلسة.';
$string['enabled_self_insert_encryption_key'] = 'السماح بإدخال مفتاح التشفير ذاتيا';
$string['enabled_self_insert_encryption_key_help'] = 'السماح للمشاركين بإدخال مفتاح التشفير الخاص بهم.';
$string['included_e2ee_chat_messages'] = 'تضمين رسائل الدردشة في E2EE';
$string['included_e2ee_chat_messages_help'] = 'أدرج رسائل الدردشة في التشفير من طرف إلى طرف.';
$string['included_e2ee_whiteboard'] = 'تضمين السبورة البيضاء في E2EE';
$string['included_e2ee_whiteboard_help'] = 'أدرج السبورة البيضاء في التشفير من طرف إلى طرف.';

$string['insights_features_is_allow'] = 'السماح بالرؤى';
$string['insights_features_is_allow_help'] = 'اسمح لتوليد الأفكار لهذه الجلسة.';
$string['insights_transcription_features_is_allow'] = 'السماح بالنسخ';
$string['insights_transcription_features_is_allow_help'] = 'اسمح بنسخ الجلسة.';
$string['insights_transcription_features_is_allow_translation'] = 'السماح بترجمة النسخ';
$string['insights_transcription_features_is_allow_translation_help'] = 'اسمح بترجمة النسخ.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'السماح بتركيب الكلام بالنسخ';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'دع النص المقود يقرأ بصوت عال.';
$string['insights_chat_translation_features_is_allow'] = 'السماح بترجمة الدردشة';
$string['insights_chat_translation_features_is_allow_help'] = 'اسمح بترجمة رسائل الدردشة.';
$string['insights_ai_features_is_allow'] = 'السماح بميزات الذكاء الاصطناعي';
$string['insights_ai_features_is_allow_help'] = 'السماح باستخدام ميزات الذكاء الاصطناعي في هذه الجلسة.';
$string['insights_ai_text_chat_features_is_allow'] = 'السماح بدردشة نصية بالذكاء الاصطناعي';
$string['insights_ai_text_chat_features_is_allow_help'] = 'السماح باستخدام الذكاء الاصطناعي في الدردشة.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'السماح بتلخيص اجتماعات الذكاء الاصطناعي';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'اسمحوا للاجتماع بأن يلخص الذكاء الاصطناعي.';

$string['lock_microphone'] = 'قفل ميكروفون';
$string['lock_microphone_help'] = 'قم بتعطيل جميع ميكروفونات المشاركين بشكل افتراضي.';
$string['lock_webcam'] = 'كاميرا ويب قفل';
$string['lock_webcam_help'] = 'قم بتعطيل جميع كاميرات الويب الخاصة بالمشاركين بشكل افتراضي.';
$string['lock_screen_sharing'] = 'مشاركة شاشة القفل';
$string['lock_screen_sharing_help'] = 'قم بتعطيل مشاركة الشاشة لجميع المشاركين بشكل افتراضي.';
$string['lock_whiteboard'] = 'لوك بورد أبيض';
$string['lock_whiteboard_help'] = 'قم بتعطيل السبورة البيضاء لجميع المشاركين بشكل افتراضي.';
$string['lock_shared_notepad'] = 'دفتر الملاحظات المشترك بالقفل';
$string['lock_shared_notepad_help'] = 'قم بتعطيل الملاحظات المشتركة لجميع المشاركين بشكل افتراضي.';
$string['lock_chat'] = 'دردشة القفل';
$string['lock_chat_help'] = 'قم بتعطيل الدردشة العامة لجميع المشاركين بشكل افتراضي.';
$string['lock_chat_send_message'] = 'قفل الدردشة إرسال رسالة';
$string['lock_chat_send_message_help'] = 'تعطيل إرسال الرسائل في الدردشة العامة لجميع المشاركين بشكل افتراضي.';
$string['lock_chat_file_share'] = 'قفل مشاركة ملفات الدردشة';
$string['lock_chat_file_share_help'] = 'قم بتعطيل مشاركة الملفات في الدردشة العامة لجميع المشاركين بشكل افتراضي.';
$string['lock_private_chat'] = 'قفل الدردشة الخاصة';
$string['lock_private_chat_help'] = 'قم بتعطيل الدردشة الخاصة لجميع المشاركين بشكل افتراضي.';

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
$string['allow_guest_help'] = 'اسمح للمستخدمين الخارجيين الذين ليس لديهم حساب في مودل بالانضمام إلى الجلسة عبر رابط قابل للمشاركة.';
$string['guest_join_link'] = 'رابط انضمام الضيف';
$string['guest_join_link_help'] = 'شارك هذا الرابط مع المشاركين الخارجيين. سيظل هذا الرابط صالحا ل {$a} ساعات. كل إعادة تحميل صفحة تولد رابطا جديدا، لكن الروابط التي تم مشاركتها سابقا ستظل صالحة حتى انتهاء صلاحيتها الأصلية.';
$string['copy_link'] = 'رابط النسخ.';
$string['guest_join_title'] = 'انضم إلى الاجتماع كضيف';
$string['enter_display_name'] = 'أدخل اسم العرض الخاص بك';
$string['join_as_guest'] = 'اجتماع الانضمام';
$string['guest_access_denied'] = 'غير مفعل وصول الضيوف لهذا الاجتماع.';
$string['invalid_guest_token'] = 'رمز انضمام ضيف غير صالح أو منتهية الصلاحية.';
$string['guest_link_expired'] = 'رابط انضمام الضيوف هذا انتهى صلاحيته.';
$string['error_joining_session'] = 'حدث خطأ في الانضمام إلى الجلسة: {$a}';
$string['already_logged_in'] = 'أنت بالفعل مسجل الدخول إلى مودل. يمكنك الانضمام إلى الجلسة مباشرة من صفحة النشاط هذه.';

// Events
$string['event_room_started'] = 'بدأت الغرفة';
$string['event_room_ended'] = 'انتهت الغرفة';
$string['event_room_created'] = 'تم إنشاء الغرفة';
$string['event_session_ended'] = 'انتهت الجلسة';
$string['event_participant_joined'] = 'شارك شارك';
$string['event_participant_left'] = 'اليسار من المشاركين';
$string['event_artifact_created'] = 'قطعة أثرية تم إنشاؤها';
$string['event_recording_proceeded'] = 'التسجيل جاهز';

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
$string['incomplete'] = 'Incomplete';
$string['completed'] = 'Completed';
$string['minutes_attended'] = 'الدقائق التي حضرها';
$string['last_updated'] = 'آخر تحديث';
$string['mic_duration'] = 'مدة الميكروفون';
$string['webcam_duration'] = 'مدة الكاميرا المفعلة';
