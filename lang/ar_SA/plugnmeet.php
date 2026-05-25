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
 * Strings for component 'mod_plugnmeet'
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'plugNmeet';
$string['modulename_help'] = 'تسمح لك وحدة نشاط PlugNmeet بإنشاء وإدارة جلسات مؤتمرات الويب في الوقت الفعلي من داخل Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'إدارة PlugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'إضافة نشاط PlugNmeet جديد';
$string['plugnmeet:deleteartifacts'] = 'حذف القطع الأثرية';
$string['plugnmeet:deleterecording'] = 'حذف التسجيلات';
$string['plugnmeet:downloadanalyticsreport'] = 'تنزيل تقرير التحليلات';
$string['plugnmeet:downloadartifacts'] = 'تنزيل القطع الأثرية';
$string['plugnmeet:downloadattendance'] = 'تنزيل تقرير الحضور';
$string['plugnmeet:downloadrecordings'] = 'تنزيل التسجيلات';
$string['plugnmeet:manage'] = 'إدارة إعدادات PlugNmeet';
$string['plugnmeet:view'] = 'عرض نشاط PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'عرض تقرير الغرف النشطة';
$string['plugnmeet:viewartifacts'] = 'عرض القطع الأثرية';
$string['plugnmeet:viewattendance'] = 'عرض تقرير الحضور';
$string['plugnmeet:viewattendancelist'] = 'عرض قائمة الحضور';
$string['plugnmeet:viewlivesessioninfo'] = 'عرض معلومات الجلسة المباشرة';
$string['plugnmeet:viewrecordings'] = 'عرض التسجيلات';
$string['plugnmeetfieldset'] = 'مجموعة حقول مثال مخصصة';
$string['plugnmeetname'] = 'اسم مثال مخصص';
$string['plugnmeetname_help'] = 'مساعدة مثال مخصصة';
$string['subplugintype_pnmext'] = 'امتداد PlugNmeet';
$string['subplugintype_pnmext_plural'] = 'امتدادات PlugNmeet';

// Admin Settings
$string['api_config'] = 'تهيئة واجهة برمجة التطبيقات (API)';
$string['server_url'] = 'عنوان URL لخادم PlugNmeet';
$string['server_url_desc'] = 'عنوان URL الأساسي لخادم PlugNmeet الخاص بك (على سبيل المثال، https://pnm.example.com).';
$string['api_key'] = 'مفتاح API';
$string['api_key_desc'] = 'مفتاح API الفريد الذي يوفره خادم PlugNmeet الخاص بك.';
$string['api_secret'] = 'سر API';
$string['api_secret_desc'] = 'سر API الذي يوفره خادم PlugNmeet الخاص بك والمستخدم للمصادقة الآمنة.';
$string['guest_access_hdr'] = 'إعدادات وصول الضيف';
$string['allow_guest_global'] = 'السماح بوصول الضيف عالميًا';
$string['allow_guest_global_desc'] = 'يعمل كمفتاح رئيسي. إذا تم تعطيله، فلن يرى المعلمون خيار تمكين انضمام الضيف عند إنشاء الأنشطة أو تحريرها.';
$string['guest_link_expiration'] = 'انتهاء صلاحية رابط الضيف (ساعات)';
$string['guest_link_expiration_desc'] = 'يحدد عدد الساعات التي يظل فيها رابط وصول الضيف نشطًا بعد أن يقوم المعلم بإنشائه.';
$string['defaults'] = 'الإعدادات الفنية الافتراضية';
$string['defaults_desc'] = 'التكوينات الفنية الافتراضية المطبقة على كل جلسة PlugNmeet جديدة.';
$string['enable_dynacast'] = 'تمكين Dynacast';
$string['enable_dynacast_des'] = 'يحسن الأداء عن طريق إيقاف طبقات الفيديو التي لا يشاهدها المشاركون مؤقتًا. هذا يقلل بشكل كبير من استخدام وحدة المعالجة المركزية وعرض النطاق الترددي على جانب الخادم. **ملاحظة:** سيتم تمكين هذا تلقائيًا إذا كنت تستخدم برامج ترميز SVC (VP9/AV1) وهو مطلوب للبث المتعدد للبرامج النصية.';
$string['enable_simulcast'] = 'تمكين Simulcast';
$string['enable_simulcast_des'] = 'يقدم طبقات متعددة من جودة الفيديو لضمان تجربة سلسة للمستخدمين على اتصالات ضعيفة.';
$string['video_codec'] = 'برنامج ترميز الفيديو';
$string['video_codec_des'] = 'معيار الترميز لنقل الفيديو. يوصى بـ **VP8** لـ WebRTC لأنه يوفر أفضل توازن بين الجودة والكمون المنخفض. **تحذير:** لا تدعم جميع المتصفحات كل برنامج ترميز؛ تأكد من أن المستخدمين لديك يستخدمون متصفحات حديثة إذا كنت تستخدم VP9 أو H.265.';
$string['default_webcam_resolution'] = 'دقة كاميرا الويب الافتراضية';
$string['default_webcam_resolution_des'] = 'إعداد الدقة الأولي لكاميرات المشاركين.';
$string['default_screen_share_resolution'] = 'دقة مشاركة الشاشة الافتراضية';
$string['default_screen_share_resolution_des'] = 'إعداد الدقة الأولي لمشاركة الشاشة.';
$string['default_audio_preset'] = 'الإعداد المسبق للصوت الافتراضي';
$string['default_audio_preset_des'] = 'ملف تعريف جودة الصوت الأمثل للجلسة.';

$string['branding'] = 'العلامة التجارية والتخصيص';
$string['custom_logo'] = 'شعار مخصص';
$string['custom_logo_des'] = 'قم بتحميل شعارك إلى غرفة الاجتماعات. إذا ترك فارغًا، فسيتم استخدام شعار PlugNmeet الافتراضي.';
$string['custom_css_url'] = 'عنوان URL لملف CSS مخصص';
$string['custom_css_url_des'] = 'اربط ملف .css خارجيًا لتجاوز أو تخصيص أنماط الواجهة.';
$string['primary_color'] = 'اللون الأساسي';
$string['primary_color_des'] = 'لون التمييز الرئيسي المستخدم للأزرار والحالات النشطة والإبرازات.';
$string['secondary_color'] = 'اللون الثانوي';
$string['secondary_color_des'] = 'لون التمييز المستخدم لعناصر واجهة المستخدم الثانوية.';
$string['background_color'] = 'لون الخلفية';
$string['background_color_des'] = 'لون الخلفية الأساسي للواجهة.';
$string['background_image'] = 'صورة الخلفية';
$string['background_image_des'] = 'خلفية الشاشة. للحصول على أفضل النتائج، استخدم صورة بحجم 1920x1080.';
$string['header_color'] = 'لون الرأس';
$string['header_color_des'] = 'لون الخلفية لشريط التنقل العلوي.';
$string['footer_color'] = 'لون التذييل';
$string['footer_color_des'] = 'لون الخلفية لشريط الأدوات السفلي.';
$string['left_color'] = 'لون الجانب الأيسر';
$string['left_color_des'] = 'لون الخلفية للشريط الجانبي الأيسر للتنقل.';
$string['side_panel_bg_color'] = 'لون خلفية اللوحة الجانبية';
$string['side_panel_bg_color_des'] = 'لون الخلفية للوحات الجانبية اليمنى (الدردشة وقائمة المشاركين).';
$string['copyright_text'] = 'نص حقوق النشر';
$string['copyright_text_des'] = 'نص العلامة التجارية المعروض في تذييل الإعدادات. يدعم HTML للروابط أو التخصيص.';
$string['client_load'] = 'طريقة تحميل العميل';
$string['client_load_des'] = 'اختر **عن بعد (مضمن)** (موصى به) لتجربة سلسة وذات علامة تجارية مضمنة مباشرة في صفحة Moodle الخاصة بك. اختر **إعادة توجيه** لاستخدام واجهة PlugNmeet الافتراضية؛ لاحظ أن المستخدمين سيغادرون موقعك وقد لا يتم تطبيق العلامة التجارية المخصصة.';
$string['remote'] = 'عن بعد (مضمن)';
$string['redirect'] = 'إعادة توجيه إلى الخادم';

$string['yes'] = 'نعم';
$string['no'] = 'لا';
$string['recordings'] = "التسجيلات";
$string['recording'] = "تسجيل";
$string['artifacts'] = "قطع أثرية للغرفة";
$string['attendance'] = "تقرير الحضور";
$string['artifact'] = "قطعة أثرية";
$string['room_subject'] = 'غرفة';
$string['user_subject'] = 'مستخدم';
$string['activeroomsreport'] = 'تقرير الغرف النشطة';
$string['noactiverooms'] = 'لا توجد غرف نشطة في الوقت الحالي.';
$string['activerooms'] = 'الغرف النشطة';
$string['loading'] = 'جارٍ التحميل...';

// mod_form.php
$string['roomtitle'] = 'عنوان الغرفة';
$string['roomtitle_help'] = 'الاسم المستخدم لنشاط Moodle ورأس الاجتماع المباشر. يساعد الطلاب على تحديد الجلسة في دورتهم وداخل الغرفة.';
$string['welcome_message'] = 'رسالة ترحيب';
$string['welcome_message_help'] = 'أي نص يتم إدخاله هنا سيظهر كأول رسالة في الدردشة العامة عندما ينضم المستخدمون إلى الغرفة. هذا مفيد لمشاركة التعليمات أو الروابط أو المعلومات الهامة مع المشاركين عند دخولهم.';
$string['max_participants'] = 'الحد الأقصى للمشاركين';
$string['max_participants_help'] = 'عيّن هذه القيمة لتحديد عدد المستخدمين الذين يمكنهم الانضمام إلى الجلسة في نفس الوقت. عيّنها على 0 للسماح بعدد غير محدود من المشاركين، مما يعني عدم وجود قيود على عدد المستخدمين الذين يمكنهم الانضمام.';
$string['room_features'] = 'ميزات الغرفة';
$string['recording_broadcasting_features'] = 'التسجيل والبث';
$string['chat_features'] = 'ميزات الدردشة';
$string['other_features'] = 'ميزات أخرى';
$string['e2ee_features'] = 'التشفير من طرف إلى طرف';
$string['insights_features'] = 'ميزات الرؤى والذكاء الاصطناعي';
$string['defaultlock'] = 'إعدادات القفل الافتراضية';
$string['advanced_completion'] = 'الإكمال المتقدم';
$string['available'] = 'متاح من';
$string['available_help'] = 'يحدد متى يمكن للمشاركين البدء في الانضمام إلى الجلسة. لن يتمكن المستخدمون من دخول الغرفة قبل هذا التاريخ والوقت.';
$string['deadline'] = 'متاح حتى';
$string['deadline_help'] = 'يحدد التاريخ والوقت النهائيين اللذين يمكن للمشاركين الوصول فيهما إلى الجلسة. سيتم حظر الوصول بمجرد انتهاء هذا الموعد النهائي.';
$string['err_deadline_before_available'] = 'لا يمكن أن يكون تاريخ "متاح حتى" قبل تاريخ "متاح من".';
$string['error_analytics_required_for_completion'] = 'يجب تحديد "تمكين التحليلات" إذا تم تعيين أي معايير إكمال.';

$string['allow_webcams'] = 'السماح بكاميرات الويب';
$string['allow_webcams_help'] = 'السماح للمشاركين باستخدام كاميرات الويب الخاصة بهم.';
$string['mute_on_start'] = 'كتم الصوت عند البدء';
$string['mute_on_start_help'] = 'كتم صوت جميع المشاركين تلقائيًا عند انضمامهم إلى الجلسة.';
$string['allow_screen_share'] = 'السماح بمشاركة الشاشة';
$string['allow_screen_share_help'] = 'السماح للمشاركين بمشاركة شاشاتهم.';
$string['allow_broadcasting'] = 'السماح بالبث (المفتاح الرئيسي)';
$string['allow_broadcasting_help'] = 'المفتاح الرئيسي لجميع ميزات البث. إذا تم تعطيلها، سيتم تعطيل جميع خيارات البث الأخرى.';
$string['allow_rtmp'] = 'السماح بالبث عبر RTMP';
$string['allow_rtmp_help'] = 'يمكّن المشرفين من بث الجلسة المباشرة إلى منصات خارجية مثل YouTube أو Facebook أو Twitch. مثالي للندوات العامة أو المحاضرات الضيف.';
$string['allow_raise_hand'] = 'السماح برفع اليد';
$string['allow_raise_hand_help'] = 'السماح للمشاركين برفع أيديهم.';
$string['admin_only_webcams'] = 'كاميرات الويب للمشرف فقط';
$string['admin_only_webcams_help'] = 'السماح للمشرفين فقط باستخدام كاميرات الويب الخاصة بهم.';
$string['allow_view_other_webcams'] = 'السماح بعرض كاميرات الويب الأخرى';
$string['allow_view_other_webcams_help'] = 'السماح للمشاركين بعرض كاميرات الويب الخاصة بالمشاركين الآخرين. إذا تم تعطيله، فسيرون فقط كاميرات الويب الخاصة بالمشرفين.';
$string['allow_view_other_users_list'] = 'السماح بعرض قائمة المستخدمين الآخرين';
$string['allow_view_other_users_list_help'] = 'السماح للمشاركين برؤية قائمة المشاركين الآخرين.';
$string['room_duration'] = 'مدة الغرفة (بالدقائق)';
$string['room_duration_help'] = 'يحدد المدة التي يمكن أن تظل فيها الغرفة مفتوحة قبل أن تغلق تلقائيًا. أدخل 0 إذا كنت لا ترغب في تعيين أي حد زمني، مما يسمح للغرفة بالبقاء نشطة دون قيود.';
$string['moderator_join_first'] = 'انضمام المشرف أولاً';
$string['moderator_join_first_help'] = 'عند التمكين، لن تبدأ الجلسة ولن يتمكن أحد من الانضمام حتى ينضم مشرف (مثل المعلم) أولاً. سيبقى المشاركون في صفحة نشاط Moodle ولن يدخلوا الغرفة أو منطقة الانتظار. هذا يختلف عن خيار غرفة الانتظار، حيث لا يزال بإمكان المستخدمين الانضمام والانتظار.';
$string['enable_analytics'] = 'تمكين التحليلات';
$string['enable_analytics_help'] = 'يتتبع بيانات المشاركة والتفاعل للجلسة. **ملاحظة:** يجب تمكين هذا إذا تم تعيين أي معايير إكمال.';
$string['allow_virtual_bg'] = 'السماح بالخلفيات الافتراضية';
$string['allow_virtual_bg_help'] = 'يمكّن المشاركين من طمس خلفيتهم أو استخدام صورة افتراضية. رائع للحفاظ على خصوصية الطلاب وضمان مظهر احترافي للفصل الدراسي.';
$string['auto_gen_user_id'] = 'إنشاء معرف المستخدم تلقائيًا';
$string['auto_gen_user_id_help'] = 'عند التمكين، ينشئ النظام معرفًا جديدًا بحيث يمكن للمستخدم نفسه الانضمام من أجهزة متعددة - على سبيل المثال، عندما ينضم معلم من جهاز لوحي للرسم على السبورة البيضاء أثناء استخدام جهاز كمبيوتر للكاميرا والميكروفون؛ ومع ذلك، يوصى <b>بإبقاء هذا الخيار معطلاً</b> بحيث يتم استخدام معرف مستخدم Moodle ويتم منع الانضمامات المكررة.';

$string['allow_recording'] = 'السماح بالتسجيل (المفتاح الرئيسي)';
$string['allow_recording_help'] = 'المفتاح الرئيسي لجميع ميزات التسجيل. إذا تم تعطيله، فسيتم إخفاء خيارات التسجيل السحابي والمحلي عن المشرفين.';
$string['allow_cloud_recording'] = 'السماح بالتسجيل السحابي';
$string['allow_cloud_recording_help'] = 'يمكّن التسجيل على خادم PlugNmeet. تتم معالجة الفيديو النهائي وتخزينه في السحابة، مما يسهل مشاركته عبر رابط بمجرد انتهاء الجلسة.';
$string['enable_auto_cloud_recording'] = 'تمكين التسجيل السحابي التلقائي';
$string['enable_auto_cloud_recording_help'] = 'يشغل التسجيل السحابي تلقائيًا في اللحظة التي ينضم فيها أول مشرف إلى الجلسة. مثالي لضمان عدم نسيان أي محاضرة.';
$string['allow_local_recording'] = 'السماح بالتسجيل المحلي';
$string['allow_local_recording_help'] = 'يسمح بالتسجيل مباشرة على الكمبيوتر. **ملاحظة:** يتطلب Google Chrome. لالتقاط جميع صوت الجلسة، يجب على المستخدم مشاركة "علامة تبويب Chrome" الخاصة به وتحديد مربع "مشاركة صوت علامة التبويب أيضًا". يتم حفظ الملف محليًا على الجهاز بمجرد الانتهاء.';
$string['only_record_admin_webcams'] = 'فقط كاميرات المسؤول تسجل';
$string['only_record_admin_webcams_help'] = 'إذا تم تفعيلها، فسيتم تضمين كاميرات الويب الخاصة بالمسؤولين فقط في التسجيل.';

$string['allow_chat'] = 'السماح بالدردشة (المفتاح الرئيسي العام)';
$string['allow_chat_help'] = 'المفتاح الرئيسي المطلق لجميع وظائف الدردشة. إذا تم تعطيله، فسيتم إزالة منطقة الدردشة بأكملها للجميع، بما في ذلك المشرفين. لن تكون الدردشة العامة أو الخاصة ممكنة.';
$string['allow_file_upload'] = 'السماح بتحميل الملفات';
$string['allow_file_upload_help'] = 'يمكّن القدرة على مشاركة الملفات داخل الدردشة. يتطلب هذا أن يكون المفتاح الرئيسي "السماح بالدردشة" نشطًا.';

$string['allow_shared_notepad'] = 'السماح بالمفكرة المشتركة';
$string['allow_shared_notepad_help'] = 'يمكّن محرر نصوص تعاونيًا حيث يمكن للطلاب والمعلمين تدوين الملاحظات في الوقت الفعلي معًا. هذا مثالي للعصف الذهني أو الكتابة المشتركة أو بناء ملخص صف مشترك.';

$string['whiteboard_features'] = 'ميزات السبورة البيضاء';
$string['allow_whiteboard'] = 'السماح بالسبورة البيضاء';
$string['allow_whiteboard_help'] = 'يفتح مساحة رسم تفاعلية للجلسة. استخدمها لرسم المخططات، وحل المسائل الرياضية بصريًا، أو السماح للطلاب بالتعليق على المحتوى المشترك.';
$string['preload_file'] = 'تحميل ملف العرض التقديمي مسبقًا';
$string['preload_file_help'] = 'يسمح لك بتحميل ملف PDF أو مستند Office سيتم تحميله تلقائيًا على السبورة البيضاء عند بدء الجلسة. هذا يضمن أن مادة العرض التقديمي جاهزة للفصل على الفور. <strong>الحد الأقصى لحجم الملف: 5 ميجابايت</strong>';

$string['allowed_external_media_player'] = 'السماح بمشغل الوسائط الخارجية';
$string['allowed_external_media_player_help'] = 'يسمح للمشرفين بمزامنة وتشغيل مقاطع الفيديو من مصادر مثل YouTube أو Vimeo للفصل بأكمله. مثالي لتحليل المقاطع التعليمية أو مشاهدة الأفلام الوثائقية معًا دون تأخير في عرض النطاق الترددي.';

$string['activate_waiting_room'] = 'تفعيل غرفة الانتظار';
$string['activate_waiting_room_help'] = 'تمكين غرفة الانتظار لهذه الجلسة.';
$string['waiting_room_msg'] = 'رسالة غرفة الانتظار';
$string['waiting_room_msg_help'] = 'تظهر هذه الرسالة للمستخدمين أثناء انتظارهم للسماح لهم بالدخول إلى الغرفة. استخدمها لمشاركة التعليمات أو التوقعات أو المعلومات المفيدة قبل بدء الجلسة.';

$string['allow_breakout_rooms'] = 'السماح بغرف المجموعات الفرعية';
$string['allow_breakout_rooms_help'] = 'يمكّن المشرفين من تقسيم المشاركين إلى مجموعات أصغر للمناقشات المركزة أو المشاريع التعاونية أو الأنشطة الجماعية الخاصة.';
$string['allowed_number_rooms'] = 'الحد الأقصى لغرف المجموعات الفرعية';
$string['allowed_number_rooms_help'] = 'الحد الأقصى لعدد الغرف الفرعية التي يمكن للمشرف إنشاؤها ضمن جلسة واحدة.';

$string['allow_display_external_link_features'] = 'السماح بمشاركة الروابط الخارجية';
$string['allow_display_external_link_features_help'] = 'يسمح للمشرفين بعرض المحتوى التعليمي الخارجي - مثل أنشطة H5P أو حزم SCORM أو أنظمة الاختبارات (مثل Kahoot) - مباشرة لجميع المشاركين أثناء الجلسة.';

$string['allow_ingress_features'] = 'السماح بالدخول (البث الخارجي)';
$string['allow_ingress_features_help'] = 'يسمح للمعلمين ببث فيديو عالي الجودة إلى الجلسة باستخدام برامج خارجية مثل OBS عبر بروتوكولات RTMP أو WHIP. هذا مثالي لمشاركة محتوى فيديو عالي الدقة، أو الجلسات المسجلة مسبقًا، أو تجاوز قيود تحميل المتصفح.';

$string['allow_polls'] = 'السماح بالاستطلاعات';
$string['allow_polls_help'] = 'يمكّن المشرفين من إنشاء استطلاعات تفاعلية واختبارات سريعة أثناء الجلسة. هذه طريقة رائعة للتحقق من فهم الطلاب وزيادة المشاركة.';

$string['sip_dial_in_features_is_allow'] = 'السماح بالاتصال الهاتفي عبر SIP';
$string['sip_dial_in_features_is_allow_help'] = 'يسمح للمشاركين بالانضمام إلى الجلسة الصوتية عبر مكالمة هاتفية تقليدية. هذا ضروري للطلاب الذين يعانون من ضعف الاتصال بالإنترنت أو أولئك الذين يحتاجون إلى الانضمام أثناء التنقل.';

$string['enable_end_to_end_encryption_features'] = 'تمكين التشفير من طرف إلى طرف (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'يوفر أمانًا قويًا عن طريق تشفير تدفقات الفيديو والصوت بين المشاركين. في هذا الوضع، يقوم الخادم بإنشاء وتوزيع مفتاح تشفير فريد للجلسة بشكل آمن.';
$string['enabled_self_insert_encryption_key'] = 'السماح بمفاتيح يحددها المشاركون';
$string['enabled_self_insert_encryption_key_help'] = 'يسمح للمشاركين بإدخال مفتاح سري مشترك يدويًا، مما يوفر أعلى مستوى من الخصوصية حيث لا يمكن للخادم الوصول إلى مفاتيح التشفير أبدًا. تقع مسؤولية المضيف على عاتقه مشاركة نفس السر مع جميع المشاركين؛ إذا تم استخدام مفاتيح مختلفة، فلن يتمكن المستخدمون من التواصل مع بعضهم البعض. <strong>ملاحظة:</strong> عند تمكين هذا الخيار، سيتم تعطيل الميزات التي تتطلب معالجة الوسائط من جانب الخادم (مثل التسجيل السحابي، والنسخ، وتلخيص الذكاء الاصطناعي) تلقائيًا.';
$string['included_e2ee_chat_messages'] = 'تشفير رسائل الدردشة';
$string['included_e2ee_chat_messages_help'] = 'يمدد التشفير من طرف إلى طرف ليشمل الدردشة النصية، مما يضمن أن الرسائل لا يمكن قراءتها إلا من قبل المشاركين في الغرفة.';
$string['included_e2ee_whiteboard'] = 'تشفير بيانات السبورة البيضاء';
$string['included_e2ee_whiteboard_help'] = 'يتضمن جميع رسومات السبورة البيضاء والتعليقات التوضيحية في طبقة التشفير من طرف إلى طرف لخصوصية البيانات الكاملة.';

$string['insights_features_is_allow'] = 'السماح برؤى الجلسة (المفتاح الرئيسي)';
$string['insights_features_is_allow_help'] = 'المفتاح الرئيسي لجميع الميزات التي تعتمد على البيانات. إذا تم تعطيله، فستكون جميع الخيارات الفرعية - بما في ذلك النسخ، ومساعد الذكاء الاصطناعي، وتقارير الاجتماعات - غير متاحة تمامًا.';
$string['insights_transcription_features_is_allow'] = 'السماح بالنسخ المباشر';
$string['insights_transcription_features_is_allow_help'] = 'يمكّن تحويل الكلام إلى نص في الوقت الفعلي أثناء الجلسة. يجب تمكين هذا لكي تعمل ترجمة النسخ أو تركيب الكلام (TTS).';
$string['insights_transcription_features_is_allow_translation'] = 'السماح بترجمة النسخ';
$string['insights_transcription_features_is_allow_translation_help'] = 'يسمح بترجمة النسخ المباشر إلى لغات مختلفة، مما يدعم الطلاب الدوليين والبيئات متعددة اللغات.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'السماح بتركيب الكلام (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'يمكّن تحويل النص إلى كلام، مما يسمح بقراءة النسخ المباشر بصوت عالٍ لتحسين إمكانية الوصول وللمشاركين ضعاف البصر.';
$string['insights_chat_translation_features_is_allow'] = 'السماح بترجمة الدردشة';
$string['insights_chat_translation_features_is_allow_help'] = 'يمكّن الترجمة الفورية لرسائل الدردشة، مما يسمح للمشاركين بالتواصل الفوري عبر لغات مختلفة.';
$string['insights_ai_features_is_allow'] = 'السماح بمساعد الاجتماعات بالذكاء الاصطناعي (المفتاح الرئيسي للذكاء الاصطناعي)';
$string['insights_ai_features_is_allow_help'] = 'المفتاح الرئيسي لجميع القدرات المدعومة بالذكاء الاصطناعي. إذا تم تعطيله، فسيتم إخفاء ميزات محددة مثل الدردشة بالذكاء الاصطناعي وتلخيص الاجتماعات، حتى لو كانت رؤى الجلسة نشطة.';
$string['insights_ai_text_chat_features_is_allow'] = 'السماح بمساعد الدردشة بالذكاء الاصطناعي';
$string['insights_ai_text_chat_features_is_allow_help'] = 'يدمج مساعدًا بالذكاء الاصطناعي مباشرة في الدردشة للمساعدة في الإجابة على الأسئلة، وشرح المفاهيم المعقدة، وتسهيل مناقشة المجموعة.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'السماح بتلخيص الاجتماعات بالذكاء الاصطناعي';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'ينشئ تلقائيًا ملخصًا موجزًا بالذكاء الاصطناعي بعد انتهاء الجلسة، مع إبراز النقاط التعليمية الرئيسية والقرارات ومهام المتابعة.';

$string['lock_microphone'] = 'قفل الميكروفونات';
$string['lock_microphone_help'] = 'يكتم صوت جميع المشاركين افتراضيًا عند الدخول. يمكن للمشرفين فقط إلغاء كتم الصوت أو منح الإذن بالتحدث.';
$string['lock_webcam'] = 'قفل كاميرات الويب';
$string['lock_webcam_help'] = 'يعطل الكاميرات لجميع المشاركين افتراضيًا. مفيد لتوفير عرض النطاق الترددي أو ضمان خصوصية الطلاب.';
$string['lock_screen_sharing'] = 'قفل مشاركة الشاشة';
$string['lock_screen_sharing_help'] = 'يقيد مشاركة الشاشة على المشرفين فقط. يمنع المشاركين من المقاطعة بشاشاتهم الخاصة.';
$string['lock_whiteboard'] = 'قفل السبورة البيضاء';
$string['lock_whiteboard_help'] = 'يقيد أدوات الرسم على السبورة البيضاء على المشرفين فقط. يمنع التعليقات التوضيحية غير المصرح بها من قبل المشاركين.';
$string['lock_shared_notepad'] = 'قفل المفكرة المشتركة';
$string['lock_shared_notepad_help'] = 'يعطل المفكرة التعاونية للمشاركين لمنع الكتابة خارج الموضوع أو التشتت.';
$string['lock_chat'] = 'قفل الدردشة العامة';
$string['lock_chat_help'] = 'يخفي أو يعطل منطقة الدردشة العامة تمامًا لجميع المشاركين.';
$string['lock_chat_send_message'] = 'قفل إرسال الرسائل';
$string['lock_chat_send_message_help'] = 'يسمح للمشاركين بقراءة الدردشة، ولكنه يمنعهم من إرسال أي رسائل.';
$string['lock_chat_file_share'] = 'قفل مشاركة الملفات';
$string['lock_chat_file_share_help'] = 'يمنع المشاركين من تحميل أو مشاركة الملفات داخل منطقة الدردشة.';
$string['lock_private_chat'] = 'قفل الدردشة الخاصة';
$string['lock_private_chat_help'] = 'يعطل المراسلة الخاصة الفردية بين المشاركين. ملاحظة: لا يزال بإمكان المشاركين إرسال رسائل خاصة إلى المشرفين للحصول على المساعدة أو طرح الأسئلة.';

$string['completion_minutes'] = 'الدقائق التي تم حضورها';
$string['completion_minutes_help'] = 'يتطلب من المستخدم أن يكون في الجلسة لعدد معين من الدقائق.';
$string['completion_minutes_desc'] = 'يجب على المستخدم حضور الجلسة لمدة {$a} دقيقة على الأقل.';
$string['completion_raised_hand'] = 'رفع اليد';
$string['completion_raised_hand_help'] = 'يتطلب من المستخدم رفع يده مرة واحدة على الأقل.';
$string['completion_chat_messages'] = 'رسائل الدردشة المرسلة';
$string['completion_chat_messages_help'] = 'يتطلب من المستخدم إرسال رسالة دردشة واحدة على الأقل.';
$string['completion_webcam_enabled'] = 'كاميرا الويب ممكّنة';
$string['completion_webcam_enabled_help'] = 'يتطلب من المستخدم تمكين كاميرا الويب الخاصة به مرة واحدة على الأقل.';
$string['completion_webcam_duration'] = 'مدة تمكين كاميرا الويب (بالدقائق)';
$string['completion_webcam_duration_help'] = 'يتطلب من المستخدم تمكين كاميرا الويب الخاصة به لعدد معين من الدقائق.';
$string['completion_webcam_duration_desc'] = 'يجب على المستخدم تمكين كاميرا الويب الخاصة به لمدة {$a} دقيقة على الأقل.';
$string['completion_mic_enabled'] = 'الميكروفون ممكّن';
$string['completion_mic_enabled_help'] = 'يتطلب من المستخدم تمكين الميكروفون الخاص به مرة واحدة على الأقل.';
$string['completion_mic_duration'] = 'مدة تمكين الميكروفون (بالدقائق)';
$string['completion_mic_duration_help'] = 'يتطلب من المستخدم تمكين الميكروفون الخاص به لعدد معين من الدقائق.';
$string['completion_mic_duration_desc'] = 'يجب على المستخدم تمكين الميكروفون الخاص به لمدة {$a} دقيقة على الأقل.';
$string['completion_talk_duration'] = 'مدة التحدث (بالدقائق)';
$string['completion_talk_duration_help'] = 'يتطلب من المستخدم التحدث لعدد معين من الدقائق.';
$string['completion_talk_duration_desc'] = 'يجب على المستخدم التحدث لمدة {$a} دقيقة على الأقل.';
$string['completion_poll_voted'] = 'صوت في استطلاع';
$string['completion_poll_voted_help'] = 'يتطلب من المستخدم التصويت في استطلاع واحد على الأقل.';
$string['completion_whiteboard_annotated'] = 'تم التعليق على السبورة البيضاء';
$string['completion_whiteboard_annotated_help'] = 'يتطلب من المستخدم التعليق على السبورة البيضاء.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'يخزن إحصائيات الجلسة للمستخدمين لتحديد إكمال النشاط.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'معرف المستخدم.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'بيانات الجلسة المشفرة بصيغة JSON (دقائق، رسائل دردشة، إلخ).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'وقت آخر تحديث للإحصائيات.';

// view.php
$string['join_session'] = 'الانضمام إلى الجلسة';
$string['start_session'] = 'بدء الجلسة';
$string['end_session'] = 'إنهاء الجلسة';
$string['participants'] = 'المشاركون';
$string['is_recording'] = 'جارٍ التسجيل';
$string['is_active'] = 'نشط';
$string['room_info'] = 'تفاصيل الجلسة المباشرة';
$string['participants_info'] = 'المشاركون المباشرون';
$string['room_id'] = 'معرف الغرفة';
$string['creation_time'] = 'وقت الإنشاء';
$string['name'] = 'الاسم';
$string['user_id'] = 'معرف المستخدم';
$string['is_admin'] = 'هل هو مشرف';
$string['is_presenter'] = 'هل هو مقدم عرض';
$string['joined_at'] = 'انضم في';
$string['moderator_not_joined'] = 'يجب على المشرف بدء الجلسة قبل أن تتمكن من الانضمام.';
$string['session_available_from'] = 'متاح من: {$a}';
$string['session_available_until'] = 'متاح حتى: {$a}';
$string['session_not_started_yet'] = 'لم تبدأ هذه الجلسة بعد.';
$string['session_ended'] = 'انتهت هذه الجلسة.';
$string['client_files_missing'] = 'ملفات العميل (JS/CSS) مفقودة. يرجى التحقق من تكوين خادم PlugNmeet الخاص بك.';
$string['client_connection_error'] = 'حدث خطأ أثناء الاتصال بخادم PlugNmeet: {$a}. يرجى التحقق من إعدادات المكون الإضافي الخاص بك.';
$string['allow_guest'] = 'السماح للمستخدمين الضيوف';
$string['allow_guest_help'] = 'عند التمكين، يتم إنشاء رابط آمن قابل للمشاركة بحيث يمكن للمستخدمين الخارجيين (مثل المعلمين الضيوف أو المشاركين الذين ليس لديهم حساب Moodle) الانضمام إلى الجلسة؛ يمكن للمشرف عرض هذا الرابط ومشاركته.';
$string['guest_join_link'] = 'رابط انضمام الضيف';
$string['guest_join_link_help'] = 'شارك هذا الرابط مع المشاركين الخارجيين. سيظل هذا الرابط صالحًا لمدة {$a} ساعة. ستؤدي كل عملية إعادة تحميل للصفحة إلى إنشاء رابط جديد، ولكن الروابط التي تمت مشاركتها مسبقًا ستظل صالحة حتى وقت انتهاء صلاحيتها الأصلي.';
$string['copy_link'] = 'نسخ الرابط';
$string['link_copied'] = 'تم نسخ الرابط إلى الحافظة.';
$string['guest_join_title'] = 'الانضمام إلى الاجتماع كضيف';
$string['enter_display_name'] = 'أدخل اسم العرض الخاص بك';
$string['join_as_guest'] = 'الانضمام إلى الاجتماع';
$string['guest_access_denied'] = 'وصول الضيف غير ممكّن لهذا الاجتماع.';
$string['invalid_guest_token'] = 'رمز انضمام الضيف غير صالح أو منتهي الصلاحية.';
$string['guest_link_expired'] = 'انتهت صلاحية رابط انضمام الضيف هذا.';
$string['error_joining_session'] = 'حدث خطأ أثناء الانضمام إلى الجلسة: {$a}';
$string['already_logged_in'] = 'لقد قمت بتسجيل الدخول بالفعل إلى Moodle. يمكنك الانضمام إلى الجلسة مباشرة من صفحة النشاط هذه.';
$string['total_webcams'] = 'إجمالي كاميرات الويب';
$string['total_mics'] = 'إجمالي الميكروفونات';
$string['total_screen_shares'] = 'إجمالي مشاركات الشاشة';
$string['webcams'] = 'كاميرات الويب';
$string['mics'] = 'الميكروفونات';
$string['screenshares'] = 'مشاركات الشاشة';

// Events
$string['event_room_started'] = 'بدأت الغرفة';
$string['event_room_ended'] = 'انتهت الغرفة';
$string['event_room_created'] = 'تم إنشاء الغرفة';
$string['event_session_ended'] = 'انتهت الجلسة';
$string['event_participant_joined'] = 'انضم المشارك';
$string['event_participant_left'] = 'غادر المشارك';
$string['event_artifact_created'] = 'تم إنشاء قطعة أثرية';
$string['event_recording_proceeded'] = 'التسجيل جاهز';
$string['event_plugin_error'] = 'خطأ PlugNmeet';
$string['event_track_published'] = 'تم نشر المسار';
$string['event_track_unpublished'] = 'تم إلغاء نشر المسار';
$string['event_recording_started'] = 'بدأ التسجيل';
$string['event_recording_ended'] = 'انتهى التسجيل';
$string['event_rtmp_started'] = 'بدأ بث RTMP';
$string['event_rtmp_ended'] = 'انتهى بث RTMP';

// Notifications
$string['messageprovider:recording_ready'] = 'إشعارات التسجيلات الجاهزة';
$string['messageprovider:artifact_ready'] = 'إشعارات القطع الأثرية الجاهزة';
$string['recording_ready_notification_subject'] = 'التسجيل جاهز: {$a}';
$string['recording_ready_notification_fullmessage'] = 'التسجيل الخاص بالجلسة "{$a->roomname}" جاهز الآن ومعالج. يمكنك مشاهدته هنا: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>التسجيل الخاص بالجلسة <strong>"{$a->roomname}"</strong> جاهز الآن ومعالج.</p><p><a href="{$a->url}">انقر هنا لمشاهدة التسجيل.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'التسجيل جاهز لـ {$a}';
$string['artifact_ready_notification_subject'] = 'القطعة الأثرية جاهزة: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'قطعة أثرية جديدة ({$a->type}) للجلسة "{$a->roomname}" متاحة الآن. يمكنك مشاهدتها هنا: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>قطعة أثرية جديدة ({$a->type}) للجلسة <strong>"{$a->roomname}"</strong> متاحة الآن.</p><p><a href="{$a->url}">انقر هنا لعرض تفاصيل القطعة الأثرية.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'القطعة الأثرية جاهزة لـ {$a}';

// recordings.php
$string['no_recordings'] = 'لم يتم العثور على تسجيلات.';
$string['recording_id'] = 'معرف التسجيل';
$string['room_sid'] = 'معرف الغرفة (SID)';
$string['file_size'] = 'حجم الملف';
$string['created_at'] = 'تاريخ الإنشاء';
$string['actions'] = 'الإجراءات';
$string['view'] = 'عرض';
$string['play'] = 'تشغيل';
$string['download'] = 'تنزيل';
$string['delete'] = 'حذف';
$string['delete_confirm'] = 'هل أنت متأكد أنك تريد حذف هذا؟';
$string['delete_success'] = 'تم الحذف بنجاح.';
$string['recording_details'] = 'تفاصيل التسجيل';
$string['recording_creation_time'] = 'وقت إنشاء التسجيل';
$string['room_creation_time'] = 'وقت إنشاء الجلسة';
$string['back_to_list'] = 'العودة إلى القائمة';
$string['browser_not_support_video'] = 'متصفحك لا يدعم علامة الفيديو.';
$string['room_title'] = 'عنوان الغرفة';
$string['total_participants'] = 'إجمالي المشاركين';
$string['session_started_at'] = 'بدأت الجلسة في';
$string['session_ended_at'] = 'انتهت الجلسة في';

// artifacts.php
$string['no_artifacts'] = 'لم يتم العثور على قطع أثرية.';
$string['artifact_id'] = 'معرف القطعة الأثرية';
$string['type'] = 'النوع';
$string['artifact_details'] = 'تفاصيل القطعة الأثرية';
$string['no_permission'] = 'ليس لديك إذن لعرض هذه الصفحة.';
$string['token_usage'] = 'استخدام الرمز المميز';
$string['duration_usage'] = 'استخدام المدة';
$string['character_count_usage'] = 'استخدام عدد الأحرف';
$string['estimated_cost'] = 'التكلفة المقدرة';
$string['file_path'] = 'مسار الملف';
$string['mime_type'] = 'نوع MIME';
$string['created_at'] = 'تم الإنشاء في';
$string['meeting_summary'] = 'ملخص الاجتماع';
$string['error_loading_meeting_summary'] = 'خطأ في تحميل ملخص الاجتماع: {$a}';

// Analytics strings
$string['download_excel_report'] = 'تنزيل تقرير Excel';
$string['download_raw_json'] = 'تنزيل البيانات الخام';
$string['room_summary'] = 'ملخص الغرفة';
$string['users_summary'] = 'ملخص المستخدمين';
$string['see_excel_report'] = 'راجع تقرير Excel للحصول على التفاصيل';
$string['error_loading_analytics'] = 'خطأ في تحميل بيانات التحليلات: {$a}';
$string['error_generating_excel'] = 'خطأ في إنشاء تقرير Excel: {$a}';

$string['analytics_room_room_id'] = 'معرف الغرفة';
$string['analytics_room_room_title'] = 'عنوان الغرفة';
$string['analytics_room_room_creation'] = 'وقت إنشاء الغرفة';
$string['analytics_room_room_ended'] = 'وقت انتهاء الغرفة';
$string['analytics_room_room_duration'] = 'مدة الغرفة';
$string['analytics_room_room_total_users'] = 'إجمالي المشاركين';
$string['analytics_room_enabled_e2ee'] = 'تم تمكين E2EE';
$string['analytics_room_recording_status'] = 'عدد حالات التسجيل';
$string['analytics_room_rtmp_status'] = 'عدد حالات RTMP';
$string['analytics_room_speech_service_total_usage'] = 'إجمالي استخدام خدمة الكلام';
$string['analytics_room_external_media_player_status'] = 'عدد حالات مشغل الوسائط الخارجية';
$string['analytics_room_etherpad_status'] = 'عدد حالات Etherpad';
$string['analytics_room_external_display_link_status'] = 'عدد حالات رابط العرض الخارجي';
$string['analytics_room_ingress_created'] = 'عدد مرات إنشاء الدخول';
$string['analytics_room_breakout_room'] = 'عدد غرف المجموعات الفرعية';

$string['analytics_user_name'] = 'الاسم';
$string['analytics_user_id'] = 'معرف المستخدم';
$string['analytics_user_ex_id'] = 'معرف المستخدم';
$string['analytics_user_is_admin'] = 'هل هو مشرف';
$string['analytics_user_duration'] = 'المدة';
$string['analytics_user_joined'] = 'انضم في';
$string['analytics_user_left'] = 'غادر في';
$string['analytics_user_mic_status'] = 'تغييرات حالة الميكروفون';
$string['analytics_user_mic_muted'] = 'عدد مرات كتم صوت الميكروفون';
$string['analytics_user_mic_duration'] = 'مدة تمكين الميكروفون';
$string['analytics_user_talked'] = 'عدد مرات التحدث';
$string['analytics_user_talked_duration'] = 'مدة التحدث';
$string['analytics_user_webcam_status'] = 'تغييرات حالة كاميرا الويب';
$string['analytics_user_webcam_duration'] = 'مدة تمكين كاميرا الويب';
$string['analytics_user_raise_hand'] = 'عدد مرات رفع اليد';
$string['analytics_user_voted_poll'] = 'عدد مرات التصويت في الاستطلاع';
$string['analytics_user_whiteboard_annotated'] = 'عدد مرات التعليق على السبورة البيضاء';
$string['analytics_user_whiteboard_files'] = 'عدد ملفات السبورة البيضاء';
$string['analytics_user_screen_share_status'] = 'تغييرات حالة مشاركة الشاشة';
$string['analytics_user_speech_services_usage'] = 'استخدام خدمات الكلام';
$string['analytics_user_public_chat'] = 'رسائل الدردشة العامة';
$string['analytics_user_private_chat'] = 'رسائل الدردشة الخاصة';
$string['analytics_user_chat_files'] = 'ملفات الدردشة المشتركة';
$string['analytics_user_interface_invisible'] = 'عدد مرات إخفاء الواجهة';
$string['analytics_user_connection_quality'] = 'جودة الاتصال';
$string['analytics_user_connection_quality_excellent'] = 'ممتاز';
$string['analytics_user_connection_quality_good'] = 'جيد';
$string['analytics_user_connection_quality_poor'] = 'ضعيف';

$string['users_info'] = 'معلومات المستخدمين';
$string['polls'] = 'الاستطلاعات';
$string['question'] = 'السؤال';
$string['options'] = 'الخيارات';
$string['file_name'] = 'اسم الملف';
$string['checkcompletiontask'] = 'التحقق من إكمال plugNmeet';

// attendance.php
$string['attendance_report'] = 'تقرير الحضور';
$string['status'] = 'الحالة';
$string['present'] = 'حاضر';
$string['absent'] = 'غائب';
$string['incomplete'] = 'غير مكتمل';
$string['completed'] = 'مكتمل';
$string['minutes_attended'] = 'الدقائق التي تم حضورها';
$string['last_updated'] = 'آخر تحديث';
$string['mic_duration'] = 'مدة تمكين الميكروفون';
$string['webcam_duration'] = 'مدة تمكين كاميرا الويب';
$string['participation_progress'] = 'تقدم المشاركة';
$string['attendance_duration'] = 'الدقائق التي تم حضورها';
$string['attendance_webcam_status'] = 'كاميرا الويب ممكّنة';
$string['attendance_mic_status'] = 'الميكروفون ممكّن';
$string['attendance_talked_duration'] = 'مدة التحدث';
$string['attendance_voted_poll'] = 'صوت في استطلاع';
$string['attendance_chat_messages'] = 'رسائل الدردشة المرسلة';
$string['attendance_raise_hand'] = 'رفع اليد';
$string['attendance_webcam_duration'] = 'مدة تمكين كاميرا الويب';
$string['attendance_mic_duration'] = 'مدة تمكين الميكروفون';
$string['attendance_whiteboard_annotated'] = 'تم التعليق على السبورة البيضاء';
$string['met'] = 'تم تحقيقها';
$string['required'] = 'مطلوب';

// Status codes
$string['status_unknown_status'] = 'تم إرجاع حالة غير معروفة من الخادم.';
$string['status_success'] = 'تمت العملية بنجاح.';
$string['status_permission_denied'] = 'تم رفض الإذن.';
$string['status_not_found'] = 'لم يتم العثور على {$a}.';
$string['status_conflict'] = 'تعذر إكمال هذا الإجراء بسبب تعارض (على سبيل المثال، قد تكون الغرفة موجودة بالفعل).';
$string['status_invalid_token_or_signature'] = 'رمز الطلب أو التوقيع غير صالح.';
$string['status_invalid_api_key'] = 'مفتاح API المقدم غير صالح. يرجى التحقق من إعدادات المكون الإضافي الخاص بك.';
$string['status_internal_server_error'] = 'واجه خادم PlugNmeet خطأ داخليًا.';
$string['status_invalid_parameters'] = 'المعلومات المقدمة غير صالحة.';
$string['status_missing_required_parameter'] = 'بعض المعلومات المطلوبة مفقودة.';
$string['status_room_not_found'] = 'لم يتم العثور على الغرفة المحددة.';
$string['status_user_not_found'] = 'لم يتم العثور على حساب المستخدم. يرجى التأكد من صحة بيانات اعتماد API الخاصة بك وأن اشتراكك نشط.';
$string['status_user_blocked'] = 'حساب المستخدم محظور. يرجى الاتصال بالدعم.';
$string['status_user_not_active'] = 'حساب المستخدم غير نشط. من المحتمل أن يكون هذا بسبب اشتراك غير نشط أو منتهي الصلاحية.';
