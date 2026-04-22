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
$string['server_url_desc'] = 'عنوان URL الأساسي لخادم PlugNmeet الخاص بك (مثلا، https://pnm.example.com).';
$string['api_key'] = 'مفتاح API';
$string['api_key_desc'] = 'مفتاح واجهة برمجة التطبيقات الفريد الذي يوفره خادم PlugNmeet الخاص بك.';
$string['api_secret'] = 'سر API';
$string['api_secret_desc'] = 'سر واجهة برمجة التطبيقات الذي يوفره خادم PlugNmeet الخاص بك يستخدم للمصادقة الآمنة.';
$string['guest_access_hdr'] = 'إعدادات الوصول إلى الضيوف';
$string['allow_guest_global'] = 'السماح بالوصول للضيوف عالميا';
$string['allow_guest_global_desc'] = 'يعمل كمفتاح رئيسي. إذا كان الوضع معطلا، فلن يرى المعلمون خيار تمكين انضمام الضيوف عند إنشاء أو تحرير الأنشطة.';
$string['guest_link_expiration'] = 'انتهاء صلاحية رابط الضيف (ساعات)';
$string['guest_link_expiration_desc'] = 'يحدد عدد ساعات بقاء رابط وصول الضيف نشطا بعد أن يقوم المعلم بإنشائه.';
$string['defaults'] = 'الإعدادات الافتراضية التقنية';
$string['defaults_desc'] = 'يتم تطبيق الإعدادات التقنية الافتراضية على كل جلسة جديدة في PlugNmet.';
$string['enable_dynacast'] = 'تفعيل دايناكاست';
$string['enable_dynacast_des'] = 'يحسن الأداء عن طريق إيقاف طبقات الفيديو بشكل ديناميكي التي لا يشاهدها المشاركون. هذا يقلل بشكل كبير من استهلاك وحدة المعالجة المركزية على جانب الخادم وعرض النطاق الترددي. **ملاحظة:** سيتم تفعيل ذلك تلقائيا عند استخدام ترميزات SVC (VP9/AV1) وهو مطلوب للبث المتزامن متعدد الكوديك.';
$string['enable_simulcast'] = 'تمكين البث المتزامن';
$string['enable_simulcast_des'] = 'يقدم عدة طبقات جودة فيديو لضمان تجربة سلسة للمستخدمين على اتصالات ضعيفة.';
$string['video_codec'] = 'ترميز الفيديو';
$string['video_codec_des'] = 'معيار الترميز لنقل الفيديو. **VP8** موصى به ل WebRTC لأنه يوفر أفضل توازن بين الجودة وانخفاض التأخير. **تحذير:** ليست كل المتصفحات تدعم كل ترميز؛ تأكد من أن مستخدميك يستخدمون المتصفحات الحديثة إذا كانوا يستخدمون VP9 أو H.265.';
$string['default_webcam_resolution'] = 'دقة كاميرا الويب الافتراضية';
$string['default_webcam_resolution_des'] = 'إعداد الدقة الأولي لكاميرات المشاركين.';
$string['default_screen_share_resolution'] = 'دقة مشاركة الشاشة الافتراضية';
$string['default_screen_share_resolution_des'] = 'إعداد الدقة الأولي لمشاركة الشاشة.';
$string['default_audio_preset'] = 'إعداد الصوت الافتراضي';
$string['default_audio_preset_des'] = 'ملف جودة الصوت تم تحسينه للجلسة.';

$string['branding'] = 'العلامة التجارية والتخصيص';
$string['custom_logo'] = 'شعار مخصص';
$string['custom_logo_des'] = 'ارفع شعارك إلى غرفة الاجتماعات. إذا تركت فارغا، سيتم استخدام شعار PlugNmeet الافتراضي.';
$string['custom_css_url'] = 'عنوان URL المخصص ل CSS';
$string['custom_css_url_des'] = 'ربط ملف .css خارجي لاستبدال أو تخصيص أنماط الواجهة.';
$string['primary_color'] = 'اللون الأساسي';
$string['primary_color_des'] = 'اللون الرئيسي المستخدم للأزرار والحالات النشطة والتمييزات.';
$string['secondary_color'] = 'اللون الثانوي';
$string['secondary_color_des'] = 'لون التأكيد المستخدم لعناصر واجهة المستخدم الثانوية.';
$string['background_color'] = 'لون الخلفية';
$string['background_color_des'] = 'لون الخلفية الأساسي للواجهة.';
$string['background_image'] = 'صورة الخلفية';
$string['background_image_des'] = 'خلفية خلفية. للحصول على أفضل النتائج، استخدم صورة بدقة 1920x1080.';
$string['header_color'] = 'لون الرأس';
$string['header_color_des'] = 'لون الخلفية لشريط التنقل العلوي.';
$string['footer_color'] = 'لون التذييل';
$string['footer_color_des'] = 'لون الخلفية لشريط الأدوات السفلي.';
$string['left_color'] = 'لون الجانب الأيسر';
$string['left_color_des'] = 'لون الخلفية لشريط التنقل الجانبي على الجانب الأيسر.';
$string['side_panel_bg_color'] = 'لون خلفية اللوحة الجانبية';
$string['side_panel_bg_color_des'] = 'لون الخلفية للوحات الجانب الأيمن (قائمة الدردشة والمشاركين).';
$string['copyright_text'] = 'نص حقوق النشر';
$string['copyright_text_des'] = 'نص العلامة التجارية يعرض في تذييل الإعدادات. يدعم HTML للروابط أو التنسيق المخصص.';
$string['client_load'] = 'طريقة تحميل العميل';
$string['client_load_des'] = 'اختر **Remote** (موصى به) لتجربة سلسة وذات علامة تجارية مدمجة مباشرة في صفحة المزاج الخاصة بك. اختر **إعادة التوجيه** لاستخدام واجهة plugNmeet الافتراضية؛ لاحظ أن المستخدمين سيغادرون موقعك وقد لا تنطبق العلامات التجارية المخصصة.';
$string['remote'] = 'التحكم عن بعد (مدمج)';
$string['redirect'] = 'إعادة التوجيه إلى الخادم';

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
$string['roomtitle_help'] = 'الاسم المستخدم لنشاط مودل ورأس الاجتماع الحي. يساعد الطلاب على تحديد الجلسة في دورتهم وداخل الغرفة.';
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
$string['available_help'] = 'يحدد متى يمكن للمشاركين البدء في الانضمام إلى الجلسة. لن يتمكن المستخدمون من دخول الغرفة قبل هذا التاريخ والوقت.';
$string['deadline'] = 'متاح حتى';
$string['deadline_help'] = 'يحدد التاريخ والوقت النهائي الذي يمكن للمشاركين فيه الوصول إلى الجلسة. سيتم حظر الوصول بمجرد انتهاء هذا الموعد النهائي.';
$string['err_deadline_before_available'] = 'تاريخ "متاح حتى" لا يمكن أن يكون قبل تاريخ "متاح من".';
$string['error_analytics_required_for_completion'] = 'يجب التحقق من تمكين تحليلات إذا تم تحديد أي معايير إكمال.';

$string['allow_webcams'] = 'السماح بالكاميرات';
$string['allow_webcams_help'] = 'اسمح للمشاركين باستخدام كاميرات الويب الخاصة بهم.';
$string['mute_on_start'] = 'كتم الصوت عند البدء';
$string['mute_on_start_help'] = 'قم بكتم صوت جميع المشاركين تلقائيا عند انضمامهم للجلسة.';
$string['allow_screen_share'] = 'السماح بمشاركة الشاشة';
$string['allow_screen_share_help'] = 'اسمح للمشاركين بمشاركة شاشتهم.';
$string['allow_rtmp'] = 'السماح ببث RTMP';
$string['allow_rtmp_help'] = 'تمكن المشرفين من بث الجلسة المباشرة على منصات خارجية مثل يوتيوب، فيسبوك، أو تويتش. مثالي للندوات العامة أو المحاضرات الضيف.';
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
$string['enable_analytics_help'] = 'يتتبع بيانات المشاركة والتفاعل للجلسة. **ملاحظة:** يجب تفعيل هذا إذا تم تحديد أي معايير إكمال.';
$string['allow_virtual_bg'] = 'السماح بالخلفيات الافتراضية';
$string['allow_virtual_bg_help'] = 'تمكن المشاركين من تشويش خلفيتهم أو استخدام صورة افتراضية. ممتاز للحفاظ على خصوصية الطلاب وضمان مظهر احترافي في الفصل الدراسي.';
$string['auto_gen_user_id'] = 'إنشاء معرف المستخدم تلقائيا';
$string['auto_gen_user_id_help'] = 'عند تفعيلها، ينشئ النظام معرفا جديدا بحيث يمكن لنفس المستخدم الانضمام من عدة أجهزة—على سبيل المثال، عندما ينضم المعلم من جهاز لوحي للرسم على السبورة البيضاء أثناء استخدام جهاز كمبيوتر للكاميرا والميكروفون؛ ومع ذلك، هو كذلك <b>موصى به</b> للحفاظ على إيقاف هذا الرقم حتى يتم استخدام معرف مستخدم مودل ومنع الانضمام المكرر.';

$string['allow_recording'] = 'السماح بالتسجيل (مفتاح رئيسي)';
$string['allow_recording_help'] = 'المفتاح الرئيسي لجميع ميزات التسجيل. إذا تم تعطيله، سيتم إخفاء خيارات التسجيل السحابي والمحلي عن المشرفين.';
$string['allow_cloud_recording'] = 'السماح بالتسجيل السحابي';
$string['allow_cloud_recording_help'] = 'تمكين التسجيل على خادم PlugNmet. يتم معالجة الفيديو النهائي وتخزينه في السحابة، مما يسهل مشاركته عبر رابط بعد انتهاء الجلسة.';
$string['enable_auto_cloud_recording'] = 'تفعيل التسجيل التلقائي للسحابة';
$string['enable_auto_cloud_recording_help'] = 'يتم تفعيل التسجيل السحابي تلقائيا بمجرد انضمام أول مشرف إلى الجلسة. مثالي لضمان عدم نسيان أي محاضرة.';
$string['allow_local_recording'] = 'السماح بالتسجيل المحلي';
$string['allow_local_recording_help'] = 'يسمح بالتسجيل مباشرة إلى الكمبيوتر. **ملاحظة:** يتطلب Google Chrome. لالتقاط جميع صوت الجلسة، يجب على المستخدم مشاركة "تبويب كروم" وتحديد مربع "مشاركة صوت التبويب أيضا". يتم حفظ الملف محليا على الجهاز بعد الانتهاء.';

$string['allow_chat'] = 'السماح بالدردشة (التبديل الرئيسي العالمي)';
$string['allow_chat_help'] = 'المفتاح الرئيسي المطلق لجميع وظائف الدردشة. إذا تم تعطيله، يتم إزالة منطقة الدردشة بالكامل للجميع، بما في ذلك المشرفين. لن يكون هناك دردشة عامة أو خاصة.';
$string['allow_file_upload'] = 'السماح برفع الملفات';
$string['allow_file_upload_help'] = 'يتيح إمكانية مشاركة الملفات داخل الدردشة. هذا يتطلب أن يكون مفتاح "السماح بالدردشة" الرئيسي نشطا.';

$string['allow_shared_notepad'] = 'السماح بدفتر الملاحظات المشترك';
$string['allow_shared_notepad_help'] = 'يتيح محرر نصوص تعاوني حيث يمكن للطلاب والمعلمين تدوين الملاحظات في الوقت الفعلي معا. هذا مثالي للعصف الذهني، أو الكتابة المشتركة، أو بناء ملخص صف مشترك.';

$string['allow_whiteboard'] = 'السماح بلوح المعلومات';
$string['allow_whiteboard_help'] = 'يفتح مساحة رسم تفاعلية للجلسة. استخدمه لرسم المخططات، أو حل مسائل الرياضيات بصريا، أو السماح للطلاب بتدوين محتوى مشترك.';

$string['allowed_external_media_player'] = 'السماح بمشغل وسائط خارجي';
$string['allowed_external_media_player_help'] = 'يسمح للمشرفين بمزامنة وتشغيل الفيديوهات من مصادر مثل يوتيوب أو فيميو طوال الحصة. مثالي لتحليل المقاطع التعليمية أو مشاهدة الأفلام الوثائقية معا دون تأخير في عرض النطاق الترددي.';

$string['activate_waiting_room'] = 'تفعيل غرفة الانتظار';
$string['activate_waiting_room_help'] = 'قم بتفعيل غرفة الانتظار لهذه الجلسة.';
$string['waiting_room_msg'] = 'رسالة غرفة الانتظار';
$string['waiting_room_msg_help'] = 'تعرض هذه الرسالة للمستخدمين أثناء انتظارهم لدخول الغرفة. استخدمها لمشاركة التعليمات أو التوقعات أو المعلومات المفيدة قبل بدء الجلسة.';

$string['allow_breakout_rooms'] = 'السماح بغرف الفرق الإضافية';
$string['allow_breakout_rooms_help'] = 'يمكن المشرفين من تقسيم المشاركين إلى مجموعات أصغر لمناقشات مركزة أو مشاريع تعاونية أو أنشطة جماعية خاصة.';
$string['allowed_number_rooms'] = 'غرف ماكس بريكاوت';
$string['allowed_number_rooms_help'] = 'الحد الأقصى لعدد الغرف الفرعية التي يمكن للمشرف إنشاؤها خلال جلسة واحدة.';

$string['allow_display_external_link_features'] = 'السماح بمشاركة الروابط الخارجية';
$string['allow_display_external_link_features_help'] = 'يسمح للمشرفين بعرض محتوى تعليمي خارجي—مثل أنشطة H5P، حزم SCORM، أو أنظمة الاختبارات (مثل Kahoot)—مباشرة لجميع المشاركين خلال الجلسة.';

$string['allow_ingress_features'] = 'السماح بالدخول (البث الخارجي)';
$string['allow_ingress_features_help'] = 'يسمح للمعلمين ببث فيديو عالي الجودة داخل الجلسة باستخدام برامج خارجية مثل OBS عبر بروتوكولات RTMP أو WHIP. هذا مثالي لمشاركة محتوى الفيديو عالي الدقة، أو الجلسات المسجلة مسبقا، أو تجاوز قيود رفع المتصفح.';

$string['allow_polls'] = 'استطلاعات الرأي';
$string['allow_polls_help'] = 'تمكن المشرفين من إنشاء استطلاعات تفاعلية واختبارات سريعة خلال الجلسة. هذه طريقة رائعة للتحقق من فهم الطلاب وزيادة التفاعل.';

$string['sip_dial_in_features_is_allow'] = 'السماح بالاتصال ب SIP';
$string['sip_dial_in_features_is_allow_help'] = 'يسمح للمشاركين بالانضمام إلى الجلسة الصوتية عبر مكالمة هاتفية تقليدية. هذا أمر ضروري للطلاب الذين لديهم اتصال إنترنت ضعيف أو لأولئك الذين يحتاجون للانضمام أثناء التنقل.';

$string['enable_end_to_end_encryption_features'] = 'تمكين التشفير من طرف إلى طرف (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'يوفر أقصى درجات الأمان عن طريق تشفير تدفقات الفيديو والصوت بحيث لا يستطيع الخادم الوصول إليها. ملاحظة: بعض الميزات مثل التسجيل على جانب الخادم قد تكون محدودة عندما يكون E2EE نشطا.';
$string['enabled_self_insert_encryption_key'] = 'السماح بالمفاتيح المعرفة من قبل المشاركين';
$string['enabled_self_insert_encryption_key_help'] = 'يسمح للمشاركين بإدخال مفتاح سري مشترك يدويا. هذا يضمن ألا يتمكن مزود الخدمة من الوصول إلى مفاتيح التشفير، مما يوفر أعلى مستوى من الخصوصية.';
$string['included_e2ee_chat_messages'] = 'تشفير رسائل الدردشة';
$string['included_e2ee_chat_messages_help'] = 'يمتد التشفير من طرف إلى طرف إلى الدردشة النصية، مما يضمن أن الرسائل لا يمكن قراءتها إلا من قبل المشاركين في الغرفة.';
$string['included_e2ee_whiteboard'] = 'تشفير بيانات السبورة البيضاء';
$string['included_e2ee_whiteboard_help'] = 'يتضمن جميع رسومات السبورة البيضاء والتعليقات التوضيحية في طبقة التشفير من طرف إلى طرف لضمان الخصوصية الكاملة للبيانات.';

$string['insights_features_is_allow'] = 'السماح برؤية الجلسة (التبديل الرئيسي)';
$string['insights_features_is_allow_help'] = 'المفتاح الرئيسي الأساسي لجميع الميزات المعتمدة على البيانات. إذا تم تعطيلها، ستبقى جميع الخيارات الفرعية — بما في ذلك النسخ النصي، مساعد الذكاء الاصطناعي وتقارير الاجتماعات — غير متاحة تماما.';
$string['insights_transcription_features_is_allow'] = 'السماح بالنسخ المباشر';
$string['insights_transcription_features_is_allow_help'] = 'يتيح تحويل الكلام إلى نص في الوقت الحقيقي أثناء الجلسة. يجب تفعيل هذا لكي يعمل ترجمة النسخ أو توليف الكلام (TTS).';
$string['insights_transcription_features_is_allow_translation'] = 'السماح بترجمة النسخ';
$string['insights_transcription_features_is_allow_translation_help'] = 'يسمح بترجمة النص الحي إلى لغات مختلفة، مما يدعم الطلاب الدوليين والبيئات متعددة اللغات.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'السماح بتوليف الكلام (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'يتيح تحويل النص إلى كلام، مما يسمح بقراءة النص الحي بصوت عال لتحسين سهولة الوصول وللمشاركين ضعاف البصر.';
$string['insights_chat_translation_features_is_allow'] = 'السماح بترجمة الدردشة';
$string['insights_chat_translation_features_is_allow_help'] = 'يتيح ترجمة رسائل الدردشة في الوقت الحقيقي، مما يسمح للمشاركين بالتواصل فورا عبر لغات مختلفة.';
$string['insights_ai_features_is_allow'] = 'السماح بمساعدة اجتماع الذكاء الاصطناعي (مفتاح رئيسي للذكاء الاصطناعي)';
$string['insights_ai_features_is_allow_help'] = 'المفتاح الرئيسي لجميع القدرات المدعومة بالذكاء الاصطناعي. إذا تم تعطيلها، ستظل ميزات محددة مثل دردشة الذكاء الاصطناعي وتلخيص الاجتماعات مخفية، حتى لو كانت Session Insights نشطة.';
$string['insights_ai_text_chat_features_is_allow'] = 'السماح بمساعدة الدردشة بالذكاء الاصطناعي';
$string['insights_ai_text_chat_features_is_allow_help'] = 'يدمج مساعد ذكاء اصطناعي مباشرة في الدردشة للمساعدة في الإجابة على الأسئلة، وشرح المفاهيم المعقدة، وتسهيل النقاش الجماعي.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'السماح بتلخيص اجتماعات الذكاء الاصطناعي';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'ينشئ تلقائيا ملخصا موجزا للذكاء الاصطناعي بعد انتهاء الجلسة، يبرز النقاط التعليمية الرئيسية، والقرارات، والمهام المتابعة.';

$string['lock_microphone'] = 'ميكروفونات القفل';
$string['lock_microphone_help'] = 'يقوم بكتم جميع المشاركين افتراضيا عند الدخول. فقط المشرفون يمكنهم إلغاء الكتم أو منح إذن التحدث.';
$string['lock_webcam'] = 'كاميرات الويب القفل';
$string['lock_webcam_help'] = 'تعطيل الكاميرات لجميع المشاركين بشكل افتراضي. مفيد لتوفير عرض النطاق الترددي أو ضمان خصوصية الطلاب.';
$string['lock_screen_sharing'] = 'مشاركة شاشة القفل';
$string['lock_screen_sharing_help'] = 'يقيد مشاركة الشاشة على المشرفين فقط. يمنع المشاركين من المقاطعة بشاشاتهم.';
$string['lock_whiteboard'] = 'لوك بورد أبيض';
$string['lock_whiteboard_help'] = 'يقيد أدوات رسم السبورة البيضاء على المشرفين فقط. يمنع التعليقات غير المصرح بها من المشاركين.';
$string['lock_shared_notepad'] = 'دفتر الملاحظات المشترك بالقفل';
$string['lock_shared_notepad_help'] = 'يعطل دفتر الملاحظات التعاوني للمشاركين لمنع الكتابة خارج الموضوع أو التشتيت.';
$string['lock_chat'] = 'قفل الدردشة العامة';
$string['lock_chat_help'] = 'يخفي أو يعطل منطقة الدردشة العامة تماما لجميع المشاركين.';
$string['lock_chat_send_message'] = 'قفل إرسال الرسائل';
$string['lock_chat_send_message_help'] = 'يسمح للمشاركين بقراءة الدردشة، لكنه يمنعهم من إرسال أي رسائل.';
$string['lock_chat_file_share'] = 'مشاركة ملفات القفل';
$string['lock_chat_file_share_help'] = 'يمنع المشاركين من رفع أو مشاركة الملفات داخل منطقة الدردشة.';
$string['lock_private_chat'] = 'قفل الدردشة الخاصة';
$string['lock_private_chat_help'] = 'يعطل الرسائل الخاصة الفردية بين المشاركين. ملاحظة: لا يزال بإمكان المشاركين إرسال رسائل خاصة إلى المشرفين للحصول على المساعدة أو الأسئلة.';

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
