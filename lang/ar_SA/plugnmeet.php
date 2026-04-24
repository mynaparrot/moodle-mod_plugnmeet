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
$string['modulename_help'] = 'تتيح لك وحدة أنشطة PlugNmeet إنشاء وإدارة جلسات مؤتمرات الويب في الوقت الفعلي من داخل Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'إدارة PlugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'أضف نشاط PlugNmeet جديد';
$string['plugnmeet:deleteartifacts'] = 'حذف الملفات';
$string['plugnmeet:deleterecording'] = 'حذف التسجيلات';
$string['plugnmeet:downloadanalyticsreport'] = 'تنزيل تقرير التحليلات';
$string['plugnmeet:downloadartifacts'] = 'تنزيل الملفات';
$string['plugnmeet:downloadattendance'] = 'حمّل تقرير الحضور';
$string['plugnmeet:downloadrecordings'] = 'تنزيل التسجيلات';
$string['plugnmeet:manage'] = 'إدارة إعدادات PlugNmeet';
$string['plugnmeet:view'] = 'عرض نشاط PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'عرض تقرير الغرف النشطة';
$string['plugnmeet:viewartifacts'] = 'عرض القطع الأثرية';
$string['plugnmeet:viewattendance'] = 'عرض تقرير الحضور';
$string['plugnmeet:viewattendancelist'] = 'عرض قائمة الحضور';
$string['plugnmeet:viewlivesessioninfo'] = 'عرض معلومات الجلسة المباشرة';
$string['plugnmeet:viewrecordings'] = 'شاهد التسجيلات';
$string['plugnmeetfieldset'] = 'أمثلة على مجموعات الحقول المخصصة';
$string['plugnmeetname'] = 'اسم مثال مخصص';
$string['plugnmeetname_help'] = 'تساعد الأمثلة المخصصة';

// Admin Settings
$string['api_config'] = 'تهيئة واجهة برمجة التطبيقات (API)';
$string['server_url'] = 'رابط خادم PlugNmeet';
$string['server_url_desc'] = 'عنوان URL الأساسي لخادم PlugNmeet الخاص بك (على سبيل المثال، https://pnm.example.com).';
$string['api_key'] = 'مفتاح API';
$string['api_key_desc'] = 'مفتاح API الفريد الذي يوفره خادم PlugNmeet الخاص بك.';
$string['api_secret'] = 'سر API';
$string['api_secret_desc'] = 'سر واجهة برمجة التطبيقات (API) الذي يوفره خادم PlugNmeet الخاص بك يُستخدم للمصادقة الآمنة.';
$string['guest_access_hdr'] = 'إعدادات وصول الضيوف';
$string['allow_guest_global'] = 'السماح بوصول الضيوف عالميًا';
$string['allow_guest_global_desc'] = 'يعمل كمفتاح تحكم رئيسي. في حال تعطيله، لن يرى المعلمون خيار تمكين انضمام الضيوف عند إنشاء الأنشطة أو تعديلها.';
$string['guest_link_expiration'] = 'انتهاء صلاحية رابط الضيف (بالساعات)';
$string['guest_link_expiration_desc'] = 'يحدد عدد الساعات التي يبقى فيها رابط الوصول الخاص بالضيف نشطًا بعد أن يقوم المعلم بإنشائه.';
$string['defaults'] = 'العيوب الفنية';
$string['defaults_desc'] = 'يتم تطبيق الإعدادات التقنية الافتراضية على كل جلسة جديدة من جلسات PlugNmeet.';
$string['enable_dynacast'] = 'تفعيل Dynacast';
$string['enable_dynacast_des'] = 'يُحسّن هذا النظام الأداء من خلال إيقاف طبقات الفيديو مؤقتًا بشكل ديناميكي عندما لا يشاهدها المشاركون، مما يقلل بشكل ملحوظ من استهلاك وحدة المعالجة المركزية وعرض النطاق الترددي على الخادم. **ملاحظة:** سيتم تفعيل هذه الميزة تلقائيًا عند استخدام برامج ترميز SVC (VP9/AV1)، وهي ضرورية للبث المتزامن متعدد برامج الترميز.';
$string['enable_simulcast'] = 'تفعيل البث المتزامن';
$string['enable_simulcast_des'] = 'يوفر طبقات متعددة لجودة الفيديو لضمان تجربة سلسة للمستخدمين الذين يعانون من ضعف الاتصالات.';
$string['video_codec'] = 'ترميز الفيديو';
$string['video_codec_des'] = 'معيار ترميز الفيديو. يُوصى باستخدام **VP8** مع WebRTC لأنه يوفر أفضل توازن بين الجودة وانخفاض زمن الاستجابة. **تنبيه:** لا تدعم جميع المتصفحات جميع برامج الترميز؛ تأكد من أن مستخدميك يستخدمون متصفحات حديثة إذا كنت تستخدم VP9 أو H.265.';
$string['default_webcam_resolution'] = 'دقة كاميرا الويب الافتراضية';
$string['default_webcam_resolution_des'] = 'إعداد الدقة الأولية لكاميرات المشاركين.';
$string['default_screen_share_resolution'] = 'دقة الشاشة الافتراضية لمشاركة الشاشة';
$string['default_screen_share_resolution_des'] = 'إعداد الدقة الأولية لمشاركة الشاشة.';
$string['default_audio_preset'] = 'إعدادات الصوت الافتراضية';
$string['default_audio_preset_des'] = 'تم تحسين ملف تعريف جودة الصوت للجلسة.';

$string['branding'] = 'العلامات التجارية والتخصيص';
$string['custom_logo'] = 'شعار مخصص';
$string['custom_logo_des'] = 'قم بتحميل شعارك إلى غرفة الاجتماعات. في حال تركه فارغاً، سيتم استخدام شعار PlugNmeet الافتراضي.';
$string['custom_css_url'] = 'رابط CSS مخصص';
$string['custom_css_url_des'] = 'قم بربط ملف .css خارجي لتجاوز أنماط واجهة المستخدم أو تخصيصها.';
$string['primary_color'] = 'اللون الأساسي';
$string['primary_color_des'] = 'اللون الرئيسي المستخدم للأزرار والحالات النشطة والتمييزات.';
$string['secondary_color'] = 'اللون الثانوي';
$string['secondary_color_des'] = 'اللون المميز المستخدم لعناصر واجهة المستخدم الثانوية.';
$string['background_color'] = 'لون الخلفية';
$string['background_color_des'] = 'اللون الأساسي لخلفية واجهة المستخدم.';
$string['background_image'] = 'صورة الخلفية';
$string['background_image_des'] = 'خلفية الشاشة. للحصول على أفضل النتائج، استخدم صورة بدقة 1920×1080.';
$string['header_color'] = 'لون رأس الصفحة';
$string['header_color_des'] = 'لون خلفية شريط التنقل العلوي.';
$string['footer_color'] = 'لون التذييل';
$string['footer_color_des'] = 'لون خلفية شريط الأدوات السفلي.';
$string['left_color'] = 'لون الجانب الأيسر';
$string['left_color_des'] = 'لون خلفية شريط التنقل الجانبي الأيسر.';
$string['side_panel_bg_color'] = 'لون خلفية اللوحة الجانبية';
$string['side_panel_bg_color_des'] = 'لون الخلفية للوحات الجانبية اليمنى (الدردشة وقائمة المشاركين).';
$string['copyright_text'] = 'نص محمي بحقوق الطبع والنشر';
$string['copyright_text_des'] = 'يتم عرض نص العلامة التجارية في تذييل الإعدادات. يدعم البرنامج لغة HTML للروابط أو التنسيق المخصص.';
$string['client_load'] = 'طريقة تحميل العميل';
$string['client_load_des'] = 'اختر **عن بُعد** (مُوصى به) لتجربة سلسة تحمل علامتك التجارية مُدمجة مباشرةً في صفحة مودل الخاصة بك. اختر **إعادة التوجيه** لاستخدام واجهة plugNmeet الافتراضية؛ لاحظ أن المستخدمين سيغادرون موقعك وقد لا يتم تطبيق العلامة التجارية المُخصصة.';
$string['remote'] = 'عن بعد (مدمج)';
$string['redirect'] = 'إعادة التوجيه إلى الخادم';

$string['yes'] = 'نعم';
$string['no'] = 'لا';
$string['recordings'] = "التسجيلات";
$string['recording'] = "تسجيل";
$string['artifacts'] = "مقتنيات الغرفة";
$string['attendance'] = "تقرير الحضور";
$string['artifact'] = "قطعة أثرية";
$string['room_subject'] = 'غرفة';
$string['user_subject'] = 'مستخدم';
$string['activeroomsreport'] = 'تقرير الغرف النشطة';
$string['noactiverooms'] = 'لا توجد غرف متاحة حاليًا.';
$string['activerooms'] = 'غرف نشطة';
$string['loading'] = 'تحميل...';

// mod_form.php
$string['roomtitle'] = 'عنوان الغرفة';
$string['roomtitle_help'] = 'الاسم المستخدم لنشاط مودل وعنوان الاجتماع المباشر. يساعد هذا الاسم الطلاب على تحديد الجلسة في مقررهم الدراسي وداخل القاعة.';
$string['welcome_message'] = 'رسالة ترحيبية';
$string['welcome_message_help'] = 'أي نص يُدخل هنا سيظهر كأول رسالة في الدردشة العامة عند انضمام المستخدمين إلى الغرفة. وهذا مفيد لمشاركة التعليمات أو الروابط أو المعلومات المهمة مع المشاركين عند دخولهم.';
$string['max_participants'] = 'الحد الأقصى للمشاركين';
$string['max_participants_help'] = 'حدد هذه القيمة لتقييد عدد المستخدمين الذين يمكنهم الانضمام إلى الجلسة في الوقت نفسه. اضبطها على 0 للسماح بمشاركة غير محدودة، أي أنه لا يوجد حد لعدد المستخدمين الذين يمكنهم الانضمام.';
$string['room_features'] = 'ميزات الغرفة';
$string['recording_features'] = 'ميزات التسجيل';
$string['chat_features'] = 'ميزات الدردشة';
$string['other_features'] = 'ميزات أخرى';
$string['e2ee_features'] = 'التشفير من طرف إلى طرف';
$string['insights_features'] = 'رؤى وميزات الذكاء الاصطناعي';
$string['defaultlock'] = 'إعدادات القفل الافتراضية';
$string['advanced_completion'] = 'إتمام متقدم';
$string['available'] = 'متوفر من';
$string['available_help'] = 'يُحدد هذا التاريخ والوقت موعد بدء انضمام المشاركين إلى الجلسة. ولن يتمكن المستخدمون من دخول الغرفة قبل هذا التاريخ والوقت.';
$string['deadline'] = 'متوفر حتى';
$string['deadline_help'] = 'يُحدد هذا التاريخ والوقت النهائيين اللذين يمكن للمشاركين فيهما الوصول إلى الجلسة. سيتم حظر الوصول بمجرد انقضاء هذا الموعد النهائي.';
$string['err_deadline_before_available'] = 'لا يمكن أن يكون تاريخ "متاح حتى" قبل تاريخ "متاح من".';
$string['error_analytics_required_for_completion'] = 'يجب تحديد خيار "تمكين التحليلات" إذا تم تعيين أي معايير إكمال.';

$string['allow_webcams'] = 'السماح باستخدام كاميرات الويب';
$string['allow_webcams_help'] = 'اسمح للمشاركين باستخدام كاميرات الويب الخاصة بهم.';
$string['mute_on_start'] = 'كتم الصوت عند بدء التشغيل';
$string['mute_on_start_help'] = 'قم بكتم صوت جميع المشاركين تلقائيًا عند انضمامهم إلى الجلسة.';
$string['allow_screen_share'] = 'السماح بمشاركة الشاشة';
$string['allow_screen_share_help'] = 'السماح للمشاركين بمشاركة شاشاتهم.';
$string['allow_rtmp'] = 'السماح ببث RTMP';
$string['allow_rtmp_help'] = 'يُمكّن هذا النظام المشرفين من بث الجلسة مباشرةً على منصات خارجية مثل يوتيوب وفيسبوك وتويتش. وهو مثالي للندوات الإلكترونية العامة أو المحاضرات التي يلقيها الضيوف.';
$string['allow_raise_hand'] = 'اسمح برفع اليد';
$string['allow_raise_hand_help'] = 'اسمح للمشاركين برفع أيديهم.';
$string['admin_only_webcams'] = 'كاميرات الويب الخاصة بالمسؤولين فقط';
$string['admin_only_webcams_help'] = 'لا يُسمح إلا للمشرفين باستخدام كاميرات الويب الخاصة بهم.';
$string['allow_view_other_webcams'] = 'السماح بعرض كاميرات الويب الأخرى';
$string['allow_view_other_webcams_help'] = 'اسمح للمشاركين بمشاهدة كاميرات الويب الخاصة بالمشاركين الآخرين. في حال تعطيل هذا الخيار، سيتمكنون من رؤية كاميرات الويب الخاصة بالمشرفين فقط.';
$string['allow_view_other_users_list'] = 'السماح بعرض قائمة المستخدمين الآخرين';
$string['allow_view_other_users_list_help'] = 'السماح للمشاركين برؤية قائمة المشاركين الآخرين.';
$string['room_duration'] = 'مدة الإقامة (بالدقائق)';
$string['room_duration_help'] = 'يُحدد هذا الخيار المدة التي يمكن أن تبقى فيها الغرفة مفتوحة قبل إغلاقها تلقائيًا. أدخل 0 إذا كنت لا ترغب في تحديد أي حد زمني، مما يسمح للغرفة بالبقاء نشطة دون قيود.';
$string['moderator_join_first'] = 'انضم إلى المشرف أولاً';
$string['moderator_join_first_help'] = 'عند تفعيل هذه الخاصية، لن تبدأ الجلسة ولن يتمكن أحد من الانضمام إليها إلا بعد انضمام مشرف (كالمعلم مثلاً). سيبقى المشاركون على صفحة أنشطة مودل ولن يدخلوا الغرفة أو منطقة الانتظار. يختلف هذا عن خيار غرفة الانتظار، حيث يمكن للمستخدمين الانضمام والانتظار.';
$string['enable_analytics'] = 'تفعيل التحليلات';
$string['enable_analytics_help'] = 'يتتبع هذا النظام بيانات المشاركة والتفاعل خلال الجلسة. **ملاحظة:** يجب تفعيل هذا الخيار في حال تحديد أي معايير إتمام.';
$string['allow_virtual_bg'] = 'السماح بالخلفيات الافتراضية';
$string['allow_virtual_bg_help'] = 'يُمكّن المشاركين من تمويه خلفياتهم أو استخدام صورة افتراضية. يُعدّ هذا مثاليًا للحفاظ على خصوصية الطلاب وضمان مظهر احترافي للفصل الدراسي.';
$string['auto_gen_user_id'] = 'إنشاء معرف المستخدم تلقائيًا';
$string['auto_gen_user_id_help'] = 'عند تفعيلها، ينشئ النظام معرفا جديدا بحيث يمكن لنفس المستخدم الانضمام من عدة أجهزة—على سبيل المثال، عندما ينضم المعلم من جهاز لوحي للرسم على السبورة البيضاء أثناء استخدام جهاز كمبيوتر للكاميرا والميكروفون؛ ومع ذلك، هو كذلك <b>موصى به</b> للحفاظ على إيقاف هذا الرقم حتى يتم استخدام معرف مستخدم مودل ومنع الانضمام المكرر.';

$string['allow_recording'] = 'السماح بالتسجيل (مفتاح رئيسي)';
$string['allow_recording_help'] = 'مفتاح التحكم الرئيسي لجميع ميزات التسجيل. في حال تعطيله، سيتم إخفاء خياري التسجيل السحابي والمحلي عن المشرفين.';
$string['allow_cloud_recording'] = 'السماح بالتسجيل السحابي';
$string['allow_cloud_recording_help'] = 'يُمكّن هذا الخيار من التسجيل على خادم PlugNmeet. تتم معالجة الفيديو النهائي وتخزينه في السحابة، مما يسهل مشاركته عبر رابط بمجرد انتهاء الجلسة.';
$string['enable_auto_cloud_recording'] = 'تفعيل التسجيل السحابي التلقائي';
$string['enable_auto_cloud_recording_help'] = 'يُفعّل التسجيل السحابي تلقائيًا بمجرد انضمام أول مُيسّر للجلسة. مثالي لضمان عدم نسيان أي محاضرة.';
$string['allow_local_recording'] = 'السماح بالتسجيل المحلي';
$string['allow_local_recording_help'] = 'يُتيح التسجيل مباشرةً على الكمبيوتر. **ملاحظة:** يتطلب متصفح جوجل كروم. لتسجيل جميع الأصوات خلال الجلسة، يجب على المستخدم مشاركة علامة تبويب كروم الخاصة به وتحديد خيار "مشاركة صوت علامة التبويب أيضًا". يُحفظ الملف محليًا على الجهاز بعد الانتهاء.';

$string['allow_chat'] = 'السماح بالدردشة (مفتاح التبديل الرئيسي العالمي)';
$string['allow_chat_help'] = 'مفتاح التحكم الرئيسي المطلق لجميع وظائف الدردشة. في حال تعطيله، تُحذف منطقة الدردشة بالكامل عن الجميع، بمن فيهم المشرفون. ولن يكون بالإمكان إجراء أي دردشة عامة أو خاصة.';
$string['allow_file_upload'] = 'السماح بتحميل الملفات';
$string['allow_file_upload_help'] = 'يُتيح هذا الخيار إمكانية مشاركة الملفات داخل المحادثة. ويتطلب ذلك تفعيل مفتاح "السماح بالمحادثة" الرئيسي.';

$string['allow_shared_notepad'] = 'السماح باستخدام المفكرة المشتركة';
$string['allow_shared_notepad_help'] = 'يُتيح محرر نصوص تعاوني يمكّن الطلاب والمعلمين من تدوين الملاحظات معًا في الوقت الفعلي. وهذا مثالي لتبادل الأفكار، والكتابة المشتركة، أو إنشاء ملخص صفي مشترك.';

$string['whiteboard_features'] = 'ميزات السبورة البيضاء';
$string['allow_whiteboard'] = 'السماح باستخدام السبورة البيضاء';
$string['allow_whiteboard_help'] = 'يُتيح ذلك مساحة رسم تفاعلية للجلسة. استخدمها لرسم المخططات، أو حل مسائل الرياضيات بصريًا، أو السماح للطلاب بإضافة تعليقات توضيحية على المحتوى المشترك.';
$string['preload_file'] = 'تحميل ملف العرض التقديمي مسبقًا';
$string['preload_file_help'] = 'يتيح لك هذا تحميل ملف PDF أو مستند Office ليتم تحميله تلقائيًا على السبورة البيضاء عند بدء الجلسة. هذا يضمن جاهزية مواد العرض التقديمي للفصل الدراسي فورًا. <strong>الحد الأقصى لحجم الملف: 5 ميجابايت</strong>';

$string['allowed_external_media_player'] = 'السماح لمشغل الوسائط الخارجي';
$string['allowed_external_media_player_help'] = 'يُمكّن هذا البرنامج المشرفين من مزامنة وتشغيل مقاطع الفيديو من مصادر مثل يوتيوب أو فيميو لجميع طلاب الصف. وهو مثالي لتحليل المقاطع التعليمية أو مشاهدة الأفلام الوثائقية معًا دون أي تأخير في الاتصال بالإنترنت.';

$string['activate_waiting_room'] = 'تفعيل غرفة الانتظار';
$string['activate_waiting_room_help'] = 'قم بتفعيل غرفة الانتظار لهذه الجلسة.';
$string['waiting_room_msg'] = 'رسالة غرفة الانتظار';
$string['waiting_room_msg_help'] = 'تُعرض هذه الرسالة للمستخدمين أثناء انتظارهم للدخول إلى الغرفة. استخدمها لمشاركة التعليمات والتوقعات والمعلومات المفيدة قبل بدء الجلسة.';

$string['allow_breakout_rooms'] = 'السماح بغرف الاجتماعات الفرعية';
$string['allow_breakout_rooms_help'] = 'يُمكّن هذا النظام المشرفين من تقسيم المشاركين إلى مجموعات أصغر لإجراء مناقشات مركزة، أو مشاريع تعاونية، أو أنشطة جماعية خاصة.';
$string['allowed_number_rooms'] = 'غرف ماكس الفرعية';
$string['allowed_number_rooms_help'] = 'الحد الأقصى لعدد الغرف الفرعية التي يمكن للمشرف إنشاؤها خلال جلسة واحدة.';

$string['allow_display_external_link_features'] = 'السماح بمشاركة الروابط الخارجية';
$string['allow_display_external_link_features_help'] = 'يسمح للمشرفين بعرض محتوى تعليمي خارجي - مثل أنشطة H5P أو حزم SCORM أو أنظمة الاختبارات (مثل Kahoot) - مباشرة لجميع المشاركين أثناء الجلسة.';

$string['allow_ingress_features'] = 'السماح بالدخول (البث الخارجي)';
$string['allow_ingress_features_help'] = 'يُمكّن هذا النظام المعلمين من بثّ فيديوهات عالية الجودة إلى الحصة باستخدام برامج خارجية مثل OBS عبر بروتوكولات RTMP أو WHIP. يُعدّ هذا مثاليًا لمشاركة محتوى فيديو عالي الدقة، أو الحصص المسجلة مسبقًا، أو لتجاوز قيود تحميل المتصفح.';

$string['allow_polls'] = 'السماح بالاستطلاعات';
$string['allow_polls_help'] = 'يُمكّن هذا النظام المشرفين من إنشاء استطلاعات رأي تفاعلية واختبارات قصيرة أثناء الجلسة. وهذه طريقة رائعة للتحقق من فهم الطلاب وزيادة تفاعلهم.';

$string['sip_dial_in_features_is_allow'] = 'السماح بالاتصال عبر بروتوكول SIP';
$string['sip_dial_in_features_is_allow_help'] = 'يُتيح هذا للمشاركين الانضمام إلى الجلسة الصوتية عبر مكالمة هاتفية تقليدية. وهذا أمر ضروري للطلاب الذين يعانون من ضعف الاتصال بالإنترنت أو الذين يحتاجون إلى الانضمام أثناء تنقلهم.';

$string['enable_end_to_end_encryption_features'] = 'تفعيل التشفير من طرف إلى طرف (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'يوفر أقصى درجات الأمان من خلال تشفير تدفقات الفيديو والصوت بحيث لا يمكن حتى للخادم الوصول إليها. ملاحظة: قد تكون بعض الميزات، مثل التسجيل من جانب الخادم، محدودة عند تفعيل التشفير التام بين الأطراف (E2EE).';
$string['enabled_self_insert_encryption_key'] = 'السماح بالمفاتيح التي يحددها المشاركون';
$string['enabled_self_insert_encryption_key_help'] = 'يُتيح هذا النظام للمشاركين إدخال مفتاح سري مشترك يدويًا. وهذا يضمن عدم وصول مزود الخدمة إلى مفاتيح التشفير مطلقًا، مما يوفر أعلى مستوى من الخصوصية.';
$string['included_e2ee_chat_messages'] = 'تشفير رسائل الدردشة';
$string['included_e2ee_chat_messages_help'] = 'يوسع التشفير من طرف إلى طرف ليشمل المحادثات النصية، مما يضمن أن الرسائل لا يمكن قراءتها إلا من قبل المشاركين الموجودين في الغرفة.';
$string['included_e2ee_whiteboard'] = 'تشفير بيانات السبورة البيضاء';
$string['included_e2ee_whiteboard_help'] = 'يشمل جميع الرسومات والتعليقات التوضيحية على السبورة البيضاء في طبقة التشفير من طرف إلى طرف لضمان خصوصية البيانات الكاملة.';

$string['insights_features_is_allow'] = 'السماح بتحليلات الجلسة (المفتاح الرئيسي)';
$string['insights_features_is_allow_help'] = 'المفتاح الرئيسي لجميع الميزات التي تعتمد على البيانات. في حال تعطيله، ستكون جميع الخيارات الفرعية - بما في ذلك النسخ الصوتي، والمساعد الذكي، وتقارير الاجتماعات - غير متاحة تمامًا.';
$string['insights_transcription_features_is_allow'] = 'السماح بالنسخ المباشر';
$string['insights_transcription_features_is_allow_help'] = 'يُمكّن هذا الخيار تحويل الكلام إلى نص في الوقت الفعلي أثناء الجلسة. يجب تفعيل هذا الخيار لكي تعمل ترجمة النصوص أو توليف الكلام (TTS).';
$string['insights_transcription_features_is_allow_translation'] = 'السماح بترجمة النصوص';
$string['insights_transcription_features_is_allow_translation_help'] = 'يسمح بترجمة النص المباشر إلى لغات مختلفة، مما يدعم الطلاب الدوليين والبيئات متعددة اللغات.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'السماح بتوليف الكلام (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'يُمكّن من تحويل النص إلى كلام، مما يسمح بقراءة النص المكتوب مباشرةً بصوت عالٍ لتحسين إمكانية الوصول إليه وللمشاركين ذوي الإعاقة البصرية.';
$string['insights_chat_translation_features_is_allow'] = 'السماح بترجمة الدردشة';
$string['insights_chat_translation_features_is_allow_help'] = 'يتيح الترجمة الفورية لرسائل الدردشة، مما يسمح للمشاركين بالتواصل على الفور عبر لغات مختلفة.';
$string['insights_ai_features_is_allow'] = 'السماح لمساعد الاجتماعات المدعوم بالذكاء الاصطناعي (مفتاح التحكم الرئيسي بالذكاء الاصطناعي)';
$string['insights_ai_features_is_allow_help'] = 'مفتاح التحكم الرئيسي لجميع إمكانيات الذكاء الاصطناعي. في حال تعطيله، سيتم إخفاء ميزات محددة مثل الدردشة المدعومة بالذكاء الاصطناعي وتلخيص الاجتماعات، حتى في حال تفعيل ميزة "تحليلات الجلسة".';
$string['insights_ai_text_chat_features_is_allow'] = 'السماح لمساعد الدردشة المدعوم بالذكاء الاصطناعي';
$string['insights_ai_text_chat_features_is_allow_help'] = 'يدمج مساعدًا يعمل بالذكاء الاصطناعي مباشرة في المحادثة للمساعدة في الإجابة على الأسئلة، وشرح المفاهيم المعقدة، وتسهيل المناقشة الجماعية.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'السماح بتلخيص الاجتماعات بواسطة الذكاء الاصطناعي';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'يقوم النظام تلقائيًا بإنشاء ملخص موجز للذكاء الاصطناعي بعد انتهاء الجلسة، مع تسليط الضوء على النقاط التعليمية الرئيسية والقرارات ومهام المتابعة.';

$string['lock_microphone'] = 'قفل الميكروفونات';
$string['lock_microphone_help'] = 'يتم كتم صوت جميع المشاركين تلقائيًا عند الدخول. ولا يمكن للمشرفين فقط إلغاء كتم الصوت أو منح الإذن بالتحدث.';
$string['lock_webcam'] = 'قفل كاميرات الويب';
$string['lock_webcam_help'] = 'يعطل الكاميرات لجميع المشاركين افتراضياً. مفيد لتوفير عرض النطاق الترددي أو ضمان خصوصية الطلاب.';
$string['lock_screen_sharing'] = 'مشاركة شاشة القفل';
$string['lock_screen_sharing_help'] = 'يقتصر مشاركة الشاشة على المشرفين فقط. ويمنع المشاركين من المقاطعة باستخدام شاشاتهم الخاصة.';
$string['lock_whiteboard'] = 'لوحة بيضاء مقفلة';
$string['lock_whiteboard_help'] = 'يقتصر استخدام أدوات الرسم على السبورة البيضاء على المشرفين فقط. ويمنع التعليقات غير المصرح بها من قبل المشاركين.';
$string['lock_shared_notepad'] = 'قفل المفكرة المشتركة';
$string['lock_shared_notepad_help'] = 'يعطل هذا الخيار خاصية دفتر الملاحظات التعاوني للمشاركين لمنع الكتابة خارج الموضوع أو تشتيت الانتباه.';
$string['lock_chat'] = 'قفل الدردشة العامة';
$string['lock_chat_help'] = 'يخفي أو يعطل منطقة الدردشة العامة تمامًا لجميع المشاركين.';
$string['lock_chat_send_message'] = 'قفل إرسال الرسائل';
$string['lock_chat_send_message_help'] = 'يسمح للمشاركين بقراءة المحادثة، لكنه يمنعهم من إرسال أي رسائل.';
$string['lock_chat_file_share'] = 'قفل مشاركة الملفات';
$string['lock_chat_file_share_help'] = 'يمنع المشاركين من تحميل أو مشاركة الملفات داخل منطقة الدردشة.';
$string['lock_private_chat'] = 'قفل الدردشة الخاصة';
$string['lock_private_chat_help'] = 'يُعطّل هذا الخيار خاصية المراسلة الخاصة بين المشاركين. ملاحظة: لا يزال بإمكان المشاركين إرسال رسائل خاصة إلى المشرفين لطلب المساعدة أو طرح الأسئلة.';

$string['completion_minutes'] = 'محضر الاجتماع';
$string['completion_minutes_help'] = 'يتطلب من المستخدم البقاء في الجلسة لعدد معين من الدقائق.';
$string['completion_minutes_desc'] = 'يجب على المستخدم حضور الجلسة لمدة لا تقل عن {$a} دقيقة.';
$string['completion_raised_hand'] = 'اليد المرفوعة';
$string['completion_raised_hand_help'] = 'يُطلب من المستخدم رفع يده مرة واحدة على الأقل.';
$string['completion_chat_messages'] = 'تم إرسال رسائل الدردشة';
$string['completion_chat_messages_help'] = 'يشترط على المستخدم إرسال رسالة دردشة واحدة على الأقل.';
$string['completion_webcam_enabled'] = 'تم تفعيل كاميرا الويب';
$string['completion_webcam_enabled_help'] = 'يُطلب من المستخدم تفعيل كاميرا الويب الخاصة به مرة واحدة على الأقل.';
$string['completion_webcam_duration'] = 'مدة تشغيل كاميرا الويب (بالدقائق)';
$string['completion_webcam_duration_help'] = 'يتطلب من المستخدم تشغيل كاميرا الويب الخاصة به لعدد معين من الدقائق.';
$string['completion_webcam_duration_desc'] = 'يجب على المستخدم تشغيل كاميرا الويب الخاصة به لمدة لا تقل عن {$a} دقيقة.';
$string['completion_mic_enabled'] = 'تم تفعيل الميكروفون';
$string['completion_mic_enabled_help'] = 'يُطلب من المستخدم تفعيل الميكروفون مرة واحدة على الأقل.';
$string['completion_mic_duration'] = 'مدة تشغيل الميكروفون (بالدقائق)';
$string['completion_mic_duration_help'] = 'يتطلب من المستخدم تفعيل الميكروفون لعدد معين من الدقائق.';
$string['completion_mic_duration_desc'] = 'يجب على المستخدم تفعيل الميكروفون لمدة لا تقل عن {$a} دقيقة.';
$string['completion_talk_duration'] = 'مدة المحادثة (بالدقائق)';
$string['completion_talk_duration_help'] = 'يتطلب من المستخدم التحدث لعدد معين من الدقائق.';
$string['completion_talk_duration_desc'] = 'يجب على المستخدم التحدث لمدة لا تقل عن {$a} دقيقة.';
$string['completion_poll_voted'] = 'تم التصويت في الاستطلاع';
$string['completion_poll_voted_help'] = 'اشترط على المستخدم التصويت في استطلاع رأي واحد على الأقل.';
$string['completion_whiteboard_annotated'] = 'تمت إضافة التعليقات على السبورة البيضاء';
$string['completion_whiteboard_annotated_help'] = 'اطلب من المستخدم إضافة تعليقات توضيحية على السبورة البيضاء.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'يخزن إحصائيات الجلسة للمستخدمين لتحديد اكتمال النشاط.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'معرف المستخدم.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'بيانات الجلسة المشفرة بصيغة JSON (الدقائق، رسائل الدردشة، إلخ).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'وقت آخر تحديث للإحصائيات.';

// view.php
$string['join_session'] = 'جلسة الانضمام';
$string['start_session'] = 'بدء الجلسة';
$string['end_session'] = 'إنهاء الجلسة';
$string['participants'] = 'مشاركون';
$string['is_recording'] = 'هل التسجيل';
$string['is_active'] = 'نشط';
$string['room_info'] = 'تفاصيل الجلسة المباشرة';
$string['participants_info'] = 'المشاركون المباشرون';
$string['room_id'] = 'رقم الغرفة';
$string['creation_time'] = 'وقت الخلق';
$string['name'] = 'اسم';
$string['user_id'] = 'معرف المستخدم';
$string['is_admin'] = 'هو المدير';
$string['is_presenter'] = 'مقدم البرنامج';
$string['joined_at'] = 'تاريخ الانضمام';
$string['moderator_not_joined'] = 'يجب أن يبدأ المشرف الجلسة قبل أن تتمكن من الانضمام.';
$string['session_available_from'] = 'متوفر من: {$a}';
$string['session_available_until'] = 'متاح حتى: {$a}';
$string['session_not_started_yet'] = 'لم تبدأ هذه الجلسة بعد.';
$string['session_ended'] = 'انتهت هذه الجلسة.';
$string['allow_guest'] = 'السماح للمستخدمين الضيوف';
$string['allow_guest_help'] = 'عند التمكين، يتم إنشاء رابط آمن قابل للمشاركة بحيث يمكن للمستخدمين الخارجيين (مثل المعلمين الضيوف أو المشاركين الذين ليس لديهم حساب Moodle) الانضمام إلى الجلسة؛ ويمكن للمسؤول عرض هذا الرابط ومشاركته.';
$string['guest_join_link'] = 'رابط الانضمام كضيف';
$string['guest_join_link_help'] = 'شارك هذا الرابط مع المشاركين الخارجيين. سيبقى هذا الرابط صالحًا لمدة {$a} ساعة. سيؤدي كل إعادة تحميل للصفحة إلى إنشاء رابط جديد، لكن الروابط التي تمت مشاركتها مسبقًا ستظل صالحة حتى تاريخ انتهاء صلاحيتها الأصلي.';
$string['copy_link'] = 'نسخ الوصلة';
$string['link_copied'] = 'تم نسخ الرابط إلى الحافظة.';
$string['guest_join_title'] = 'انضم إلى الاجتماع كضيف';
$string['enter_display_name'] = 'أدخل اسم العرض الخاص بك';
$string['join_as_guest'] = 'انضم إلى الاجتماع';
$string['guest_access_denied'] = 'لا يُسمح بدخول الضيوف لهذا الاجتماع.';
$string['invalid_guest_token'] = 'رمز انضمام الضيف غير صالح أو منتهي الصلاحية.';
$string['guest_link_expired'] = 'انتهت صلاحية رابط الانضمام كضيف.';
$string['error_joining_session'] = 'حدث خطأ أثناء الانضمام إلى الجلسة: {$a}';
$string['already_logged_in'] = 'أنت مسجل بالفعل في مودل. يمكنك الانضمام إلى الجلسة مباشرة من صفحة النشاط هذه.';
$string['total_webcams'] = 'إجمالي كاميرات الويب';
$string['total_mics'] = 'توتال ميكس';
$string['total_screen_shares'] = 'إجمالي مشاركات الشاشة';
$string['webcams'] = 'كاميرات الويب';
$string['mics'] = 'الميكروفونات';
$string['screenshares'] = 'مشاركة الشاشة';

// Events
$string['event_room_started'] = 'بدأت الغرفة';
$string['event_room_ended'] = 'انتهت الغرفة';
$string['event_room_created'] = 'تم إنشاء الغرفة';
$string['event_session_ended'] = 'انتهاء الجلسة';
$string['event_participant_joined'] = 'انضم المشارك';
$string['event_participant_left'] = 'غادر المشارك';
$string['event_artifact_created'] = 'تم إنشاء قطعة أثرية';
$string['event_recording_proceeded'] = 'جاهز للتسجيل';
$string['event_plugin_error'] = 'خطأ في PlugNmeet';
$string['event_track_published'] = 'تم نشر المسار';
$string['event_track_unpublished'] = 'مسار غير منشور';
$string['event_recording_started'] = 'بدأ التسجيل';
$string['event_recording_ended'] = 'انتهى التسجيل';
$string['event_rtmp_started'] = 'بدأ بث RTMP';
$string['event_rtmp_ended'] = 'انتهى بث RTMP';

// Notifications
$string['messageprovider:recording_ready'] = 'إشعارات بالتسجيلات الجاهزة';
$string['messageprovider:artifact_ready'] = 'إشعارات بالقطع الأثرية الجاهزة';
$string['recording_ready_notification_subject'] = 'جاهز للتسجيل: {$a}';
$string['recording_ready_notification_fullmessage'] = 'تم الآن تجهيز ومعالجة تسجيل الجلسة "{$a->roomname}". يمكنك مشاهدته هنا: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>تم الآن تجهيز ومعالجة تسجيل الجلسة <strong>"{$a->roomname}"</strong> .</p><p><a href="{$a->url}">انقر هنا لمشاهدة التسجيل.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'التسجيل جاهز لـ {$a}';
$string['artifact_ready_notification_subject'] = 'القطعة الأثرية جاهزة: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'تتوفر الآن قطعة أثرية جديدة ({$a->type}) للجلسة "{$a->roomname}". يمكنك الاطلاع عليها هنا: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>عنصر جديد ({$a->type}) للجلسة <strong>"{$a->roomname}"</strong> متاح الآن.</p><p><a href="{$a->url}">انقر هنا لعرض تفاصيل العنصر.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'القطعة الأثرية جاهزة لـ {$a}';

// recordings.php
$string['no_recordings'] = 'لم يتم العثور على أي تسجيلات.';
$string['recording_id'] = 'معرف التسجيل';
$string['room_sid'] = 'غرفة SID';
$string['file_size'] = 'حجم الملف';
$string['created_at'] = 'تم الإنشاء في';
$string['actions'] = 'الإجراءات';
$string['view'] = 'منظر';
$string['play'] = 'يلعب';
$string['download'] = 'تحميل';
$string['delete'] = 'يمسح';
$string['delete_confirm'] = 'هل أنت متأكد من رغبتك في حذف هذا؟';
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
$string['no_artifacts'] = 'لم يتم العثور على أي قطع أثرية.';
$string['artifact_id'] = 'معرف القطعة الأثرية';
$string['type'] = 'يكتب';
$string['artifact_details'] = 'تفاصيل القطعة الأثرية';
$string['no_permission'] = 'ليس لديك إذن لعرض هذه الصفحة.';
$string['token_usage'] = 'استخدام الرمز المميز';
$string['duration_usage'] = 'مدة الاستخدام';
$string['character_count_usage'] = 'استخدام عدد الأحرف';
$string['estimated_cost'] = 'التكلفة التقديرية';
$string['file_path'] = 'مسار الملف';
$string['mime_type'] = 'نوع MIME';
$string['created_at'] = 'تم الإنشاء في';

// Analytics strings
$string['download_excel_report'] = 'تنزيل تقرير Excel';
$string['download_raw_json'] = 'تنزيل البيانات الأولية';
$string['room_summary'] = 'ملخص الغرفة';
$string['users_summary'] = 'ملخص المستخدمين';
$string['see_excel_report'] = 'راجع تقرير Excel للاطلاع على التفاصيل';
$string['error_loading_analytics'] = 'خطأ في تحميل بيانات التحليلات: {$a}';
$string['error_generating_excel'] = 'خطأ في إنشاء تقرير Excel: {$a}';

$string['analytics_room_room_id'] = 'رقم الغرفة';
$string['analytics_room_room_title'] = 'عنوان الغرفة';
$string['analytics_room_room_creation'] = 'وقت إنشاء الغرفة';
$string['analytics_room_room_ended'] = 'وقت انتهاء الغرفة';
$string['analytics_room_room_duration'] = 'مدة الإقامة في الغرفة';
$string['analytics_room_room_total_users'] = 'إجمالي المشاركين';
$string['analytics_room_enabled_e2ee'] = 'تمكين التشفير من طرف إلى طرف';
$string['analytics_room_recording_status'] = 'عدد حالات التسجيل';
$string['analytics_room_rtmp_status'] = 'عدد حالات RTMP';
$string['analytics_room_speech_service_total_usage'] = 'إجمالي استخدام خدمة الكلام';
$string['analytics_room_external_media_player_status'] = 'عدد حالات مشغل الوسائط الخارجية';
$string['analytics_room_etherpad_status'] = 'عدد حالات إيثرباد';
$string['analytics_room_external_display_link_status'] = 'عدد حالات وصلة العرض الخارجية';
$string['analytics_room_ingress_created'] = 'عدد عمليات الدخول التي تم إنشاؤها';
$string['analytics_room_breakout_room'] = 'عدد غرف الاجتماعات الفرعية';

$string['analytics_user_name'] = 'اسم';
$string['analytics_user_id'] = 'معرف المستخدم';
$string['analytics_user_ex_id'] = 'معرف المستخدم';
$string['analytics_user_is_admin'] = 'هو المدير';
$string['analytics_user_duration'] = 'مدة';
$string['analytics_user_joined'] = 'تاريخ الانضمام';
$string['analytics_user_left'] = 'انعطف يسارًا عند';
$string['analytics_user_mic_status'] = 'تغييرات حالة الميكروفون';
$string['analytics_user_mic_muted'] = 'عدد مرات كتم صوت الميكروفون';
$string['analytics_user_mic_duration'] = 'مدة تشغيل الميكروفون';
$string['analytics_user_talked'] = 'عدد المحادثات';
$string['analytics_user_talked_duration'] = 'مدة الحديث';
$string['analytics_user_webcam_status'] = 'تغييرات حالة كاميرا الويب';
$string['analytics_user_webcam_duration'] = 'مدة تشغيل كاميرا الويب';
$string['analytics_user_raise_hand'] = 'ارفع يدك للعد';
$string['analytics_user_voted_poll'] = 'عدد الأصوات في مراكز الاقتراع';
$string['analytics_user_whiteboard_annotated'] = 'عدد مُعلّق عليه على السبورة البيضاء';
$string['analytics_user_whiteboard_files'] = 'عدد ملفات السبورة البيضاء';
$string['analytics_user_screen_share_status'] = 'تغييرات حالة مشاركة الشاشة';
$string['analytics_user_speech_services_usage'] = 'استخدام خدمات الكلام';
$string['analytics_user_public_chat'] = 'رسائل الدردشة العامة';
$string['analytics_user_private_chat'] = 'رسائل الدردشة الخاصة';
$string['analytics_user_chat_files'] = 'تمت مشاركة ملفات الدردشة';
$string['analytics_user_interface_invisible'] = 'واجهة العد غير المرئي';
$string['analytics_user_connection_quality'] = 'جودة الاتصال';
$string['analytics_user_connection_quality_excellent'] = 'ممتاز';
$string['analytics_user_connection_quality_good'] = 'جيد';
$string['analytics_user_connection_quality_poor'] = 'فقير';

$string['users_info'] = 'معلومات المستخدم';
$string['polls'] = 'استطلاعات الرأي';
$string['question'] = 'سؤال';
$string['options'] = 'خيارات';
$string['file_name'] = 'اسم الملف';
$string['checkcompletiontask'] = 'تحقق من اكتمال plugNmeet';

// attendance.php
$string['attendance_report'] = 'تقرير الحضور';
$string['status'] = 'حالة';
$string['present'] = 'حاضر';
$string['absent'] = 'غائب';
$string['incomplete'] = 'غير مكتمل';
$string['completed'] = 'مكتمل';
$string['minutes_attended'] = 'محضر الاجتماع';
$string['last_updated'] = 'آخر تحديث';
$string['mic_duration'] = 'مدة تشغيل الميكروفون';
$string['webcam_duration'] = 'مدة تشغيل كاميرا الويب';
$string['participation_progress'] = 'التقدم المحرز في المشاركة';
$string['attendance_duration'] = 'محضر الاجتماع';
$string['attendance_webcam_status'] = 'تم تفعيل كاميرا الويب';
$string['attendance_mic_status'] = 'تم تفعيل الميكروفون';
$string['attendance_talked_duration'] = 'مدة الحديث';
$string['attendance_voted_poll'] = 'تم التصويت في الاستطلاع';
$string['attendance_chat_messages'] = 'تم إرسال رسائل الدردشة';
$string['attendance_raise_hand'] = 'اليد المرفوعة';
$string['attendance_webcam_duration'] = 'مدة تشغيل كاميرا الويب';
$string['attendance_mic_duration'] = 'مدة تشغيل الميكروفون';
$string['attendance_whiteboard_annotated'] = 'تمت إضافة التعليقات على السبورة البيضاء';
$string['met'] = 'مترو';
$string['required'] = 'مطلوب';

// Status codes
$string['status_unknown_status'] = 'تم إرجاع حالة غير معروفة من الخادم.';
$string['status_success'] = 'تمت العملية بنجاح.';
$string['status_permission_denied'] = 'تم رفض الإذن.';
$string['status_not_found'] = 'لم يتم العثور على {$a}.';
$string['status_conflict'] = 'لم يكن من الممكن إكمال هذا الإجراء بسبب وجود تعارض (على سبيل المثال، قد تكون الغرفة موجودة بالفعل).';
$string['status_invalid_token_or_signature'] = 'رمز الطلب أو التوقيع غير صالح.';
$string['status_invalid_api_key'] = 'مفتاح API المقدم غير صالح. يرجى التحقق من إعدادات الإضافة.';
$string['status_internal_server_error'] = 'واجه خادم PlugNmeet خطأً داخلياً.';
$string['status_invalid_parameters'] = 'المعلومات المقدمة غير صحيحة.';
$string['status_missing_required_parameter'] = 'بعض المعلومات المطلوبة مفقودة.';
$string['status_room_not_found'] = 'لم يتم العثور على الغرفة المحددة.';
$string['status_user_not_found'] = 'لم يتم العثور على حساب المستخدم. يرجى التأكد من صحة بيانات اعتماد واجهة برمجة التطبيقات (API) الخاصة بك وأن اشتراكك فعال.';
$string['status_user_blocked'] = 'تم حظر حساب المستخدم. يرجى الاتصال بالدعم.';
$string['status_user_not_active'] = 'حساب المستخدم غير نشط. من المرجح أن يكون هذا بسبب اشتراك غير نشط أو منتهي الصلاحية.';
