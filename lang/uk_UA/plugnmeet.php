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
$string['modulename_help'] = 'Модуль активності PlugNmeet дозволяє створювати та керувати сесіями вебконференцій у реальному часі з Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Адміністрація plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Додайте нову активність PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Видалити артефакти';
$string['plugnmeet:deleterecording'] = 'Видалити записи';
$string['plugnmeet:downloadanalyticsreport'] = 'Завантажити аналітичний звіт';
$string['plugnmeet:downloadartifacts'] = 'Завантажити артефакти';
$string['plugnmeet:downloadattendance'] = 'Завантажити звіт про відвідуваність';
$string['plugnmeet:downloadrecordings'] = 'Завантажити записи';
$string['plugnmeet:manage'] = 'Керування налаштуваннями PlugNmeet';
$string['plugnmeet:view'] = 'Переглянути активність PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Переглянути артефакти';
$string['plugnmeet:viewattendance'] = 'Переглянути звіт про відвідуваність';
$string['plugnmeet:viewattendancelist'] = 'Переглянути список відвідувачів';
$string['plugnmeet:viewlivesessioninfo'] = 'Переглянути інформацію про живі сесії';
$string['plugnmeet:viewrecordings'] = 'Переглянути записи';
$string['plugnmeetfieldset'] = 'Власний приклад набору полів';
$string['plugnmeetname'] = 'Кастомна прикладна назва';
$string['plugnmeetname_help'] = 'Допомога з кастомним прикладом';

// Admin Settings
$string['api_config'] = 'Конфігурація API';
$string['server_url'] = 'URL сервера PlugNmeet';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'Ключ API';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'The secret key used for secure API authentication.';
$string['guest_access_hdr'] = 'Налаштування доступу для гостей';
$string['allow_guest_global'] = 'Дозволити гостям доступ глобально';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = 'Термін дії гостьового посилання (години)';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = 'Технічні дефолти';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = 'Увімкнути Dynacast';
$string['enable_dynacast_des'] = 'Optimizes bandwidth by only streaming high-quality video for the most recently active speakers.';
$string['enable_simulcast'] = 'Увімкнути симультанну трансляцію';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = 'Відеокодек';
$string['video_codec_des'] = 'The encoding standard used for video transmission (e.g., VP8, H.264).';
$string['default_webcam_resolution'] = 'Стандартна роздільна здатність вебкамери';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = 'Стандартна роздільна здатність спільного екрану';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = 'Стандартний аудіопресет';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = 'Брендинг і кастомізація';
$string['custom_logo'] = 'Індивідуальний логотип';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'Користувацька URL-адреса CSS';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = 'Основний колір';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = 'Вторинний колір';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = 'Колір фону';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = 'Фонове зображення';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = 'Колір заголовка';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = 'Колір нижнього колонтитула';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = 'Колір лівої сторони';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = 'Колір фону бічної панелі';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = 'Текст авторського права';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = 'Так';
$string['no'] = 'Ні';
$string['recordings'] = "Записи";
$string['recording'] = "Запис";
$string['artifacts'] = "Артефакти кімнати";
$string['attendance'] = "Звіт про відвідуваність";
$string['artifact'] = "Артефакт";
$string['room_subject'] = 'кімната';
$string['user_subject'] = 'Користувач';

// mod_form.php
$string['roomtitle'] = 'Назва кімнати';
$string['welcome_message'] = 'Вітальне повідомлення';
$string['welcome_message_help'] = 'Будь-який текст, введений тут, з\'явиться як перше повідомлення у публічному чаті, коли користувачі приєднаються до кімнати. Це корисно для обміну інструкціями, посиланнями або важливою інформацією з учасниками під час входу.';
$string['max_participants'] = 'Учасники Max';
$string['max_participants_help'] = 'Встановіть це значення так, щоб обмежити кількість користувачів, які можуть одночасно приєднатися до сесії. Встановіть його на 0, щоб дозволити необмежену кількість учасників, тобто не буде обмежень на кількість користувачів, які можуть приєднатися.';
$string['room_features'] = 'Особливості кімнати';
$string['recording_features'] = 'Особливості запису';
$string['chat_features'] = 'Чат-функції';
$string['other_features'] = 'Інші особливості';
$string['e2ee_features'] = 'Наскрізне шифрування';
$string['insights_features'] = 'Інсайти та функції ШІ';
$string['defaultlock'] = 'Стандартні налаштування замка';
$string['advanced_completion'] = 'Розширене завершення';
$string['available'] = 'Доступно з';
$string['deadline'] = 'Доступно до';
$string['err_deadline_before_available'] = 'Дата «Доступно до» не може бути раніше за дату «Доступно з».';
$string['error_analytics_required_for_completion'] = 'Потрібно перевірити Enable Analytics, якщо встановлені критерії завершення.';

$string['allow_webcams'] = 'Дозволити вебкамери';
$string['allow_webcams_help'] = 'Дозвольте учасникам користуватися своїми вебкамерами.';
$string['mute_on_start'] = 'Вимкнути звук при запуску';
$string['mute_on_start_help'] = 'Автоматично вимикайте звук усіх учасників, коли вони приєднуються до сесії.';
$string['allow_screen_share'] = 'Дозволити спільне використання екрану';
$string['allow_screen_share_help'] = 'Дозвольте учасникам ділитися екраном.';
$string['allow_rtmp'] = 'Дозволити RTMP-трансляцію';
$string['allow_rtmp_help'] = 'Дозвольте модераторам транслювати сесію на RTMP-кінцеву точку.';
$string['allow_raise_hand'] = 'Дозвольте підняти руку';
$string['allow_raise_hand_help'] = 'Дозвольте учасникам підняти руку.';
$string['admin_only_webcams'] = 'Вебкамери лише для адміністратора';
$string['admin_only_webcams_help'] = 'Дозволяйте модераторам користуватися лише їхніми вебкамерами.';
$string['allow_view_other_webcams'] = 'Дозволити перегляд інших вебкамер';
$string['allow_view_other_webcams_help'] = 'Дозвольте учасникам переглядати вебкамери інших учасників. Якщо вимкнено, вони бачитимуть лише вебкамери модераторів.';
$string['allow_view_other_users_list'] = 'Дозволити перегляд списку інших користувачів';
$string['allow_view_other_users_list_help'] = 'Дозвольте учасникам бачити список інших учасників.';
$string['room_duration'] = 'Тривалість кімнати (хвилини)';
$string['room_duration_help'] = 'Визначає, скільки часу кімната може залишатися відкритою, перш ніж вона автоматично закриється. Введіть 0, якщо не хочете встановлювати часове обмеження, щоб кімната залишалася активною без обмежень.';
$string['moderator_join_first'] = 'Модератор Приєднуйся першим';
$string['moderator_join_first_help'] = 'При увімкненому режимі сесія не починається, і ніхто не може приєднатися, доки модератор (наприклад, вчитель) не приєднається першим. Учасники залишаться на сторінці активності Moodle і не заходитимуть до кімнати чи зони очікування. Це відрізняється від опції Waiting Room, де користувачі все ще можуть приєднуватися і чекати.';
$string['enable_analytics'] = 'Увімкнути аналітику';
$string['enable_analytics_help'] = 'Генеруйте аналітику для сесії. Примітка: Це має бути увімкнено, якщо встановлено будь-які критерії завершення.';
$string['allow_virtual_bg'] = 'Дозволити віртуальні фони';
$string['allow_virtual_bg_help'] = 'Дозвольте учасникам використовувати віртуальні фони.';
$string['auto_gen_user_id'] = 'Автоматичне створення ідентифікатора користувача';
$string['auto_gen_user_id_help'] = 'Коли система увімкнена, вона створює новий ідентифікатор, щоб один і той самий користувач міг приєднуватися з кількох пристроїв — наприклад, коли вчитель приєднується з планшета, щоб малювати на дошці, використовуючи ПК для камери та мікрофона; Однак це <b>Рекомендовано</b> щоб не використовувати Moodle user ID і уникнути дублювання з\'єднань.';

$string['allow_recording'] = 'Дозволити запис';
$string['allow_recording_help'] = 'Дозвольте записувати сесію.';
$string['allow_cloud_recording'] = 'Дозволити хмарний запис';
$string['allow_cloud_recording_help'] = 'Дозвольте записувати сесію в хмару.';
$string['enable_auto_cloud_recording'] = 'Увімкнути автозапис у хмарі';
$string['enable_auto_cloud_recording_help'] = 'Автоматично починайте запис, коли починається сесія.';
$string['allow_local_recording'] = 'Дозволити локальний запис';
$string['allow_local_recording_help'] = 'Дозвольте учасникам записувати сесію локально.';

$string['allow_chat'] = 'Дозволити чат';
$string['allow_chat_help'] = 'Увімкніть функцію публічного чату.';
$string['allow_file_upload'] = 'Дозволити завантаження файлу';
$string['allow_file_upload_help'] = 'Дозвольте учасникам завантажувати файли в чат.';

$string['allow_shared_notepad'] = 'Дозволити спільний блокнот';
$string['allow_shared_notepad_help'] = 'Дозвольте учасникам користуватися спільним блокнотом.';
$string['allow_whiteboard'] = 'Дозволити Whiteboard';
$string['allow_whiteboard_help'] = 'Дозвольте учасникам користуватися дошкою.';
$string['allowed_external_media_player'] = 'Дозволити зовнішній медіаплеєр';
$string['allowed_external_media_player_help'] = 'Дозволити учасникам відтворювати зовнішні медіа (наприклад, відео на YouTube).';
$string['activate_waiting_room'] = 'Активувати зал очікування';
$string['activate_waiting_room_help'] = 'Увімкніть зал очікування для цієї сесії.';
$string['waiting_room_msg'] = 'Повідомлення в залі очікування';
$string['waiting_room_msg_help'] = 'Це повідомлення показується користувачам, поки вони чекають на вхід до кімнати. Використовуйте його, щоб поділитися інструкціями, очікуваннями або корисною інформацією перед початком сесії.';
$string['allow_breakout_rooms'] = 'Дозволити кімнати для відбиття';
$string['allow_breakout_rooms_help'] = 'Дозвольте модераторам створювати кімнати для розбору.';
$string['allowed_number_rooms'] = 'Дозволена кількість кімнат для виходу';
$string['allow_display_external_link_features'] = 'Дозволити відображення Зовнішнє посилання';
$string['allow_display_external_link_features_help'] = 'Дозвольте модераторам відображати зовнішнє посилання для всіх учасників.';
$string['allow_ingress_features'] = 'Дозволити вхід';
$string['allow_ingress_features_help'] = 'Дозвольте вхід у сесію.';
$string['allow_polls'] = 'Дозволити опитування';
$string['allow_polls_help'] = 'Дозвольте модераторам створювати опитування.';
$string['sip_dial_in_features_is_allow'] = 'Дозволити SIP-Dial-in';
$string['sip_dial_in_features_is_allow_help'] = 'Дозвольте учасникам приєднатися до сесії за допомогою SIP-телефону.';

$string['enable_end_to_end_encryption_features'] = 'Увімкнути наскрізне шифрування';
$string['enable_end_to_end_encryption_features_help'] = 'Увімкніть наскрізне шифрування для сесії.';
$string['enabled_self_insert_encryption_key'] = 'Дозволити самовставку ключа шифрування';
$string['enabled_self_insert_encryption_key_help'] = 'Дозвольте учасникам вставити власний ключ шифрування.';
$string['included_e2ee_chat_messages'] = 'Включати чат-повідомлення в E2EE';
$string['included_e2ee_chat_messages_help'] = 'Включайте чат-повідомлення у наскрізне шифрування.';
$string['included_e2ee_whiteboard'] = 'Включити білу дошку в E2EE';
$string['included_e2ee_whiteboard_help'] = 'Додайте дошку до наскрізного шифрування.';

$string['insights_features_is_allow'] = 'Дозвольте інсайти';
$string['insights_features_is_allow_help'] = 'Дозвольте генерувати інсайти для цієї сесії.';
$string['insights_transcription_features_is_allow'] = 'Дозволити транскрипцію';
$string['insights_transcription_features_is_allow_help'] = 'Дозвольте транскрибувати сесію.';
$string['insights_transcription_features_is_allow_translation'] = 'Дозволити транскрипційний переклад';
$string['insights_transcription_features_is_allow_translation_help'] = 'Дозвольте перекладати транскрипцію.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Дозволити транскрипційний синтез мовлення';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Дозвольте транскрипцію прочитати вголос.';
$string['insights_chat_translation_features_is_allow'] = 'Дозволити переклад у чаті';
$string['insights_chat_translation_features_is_allow_help'] = 'Дозвольте перекладати повідомлення в чаті.';
$string['insights_ai_features_is_allow'] = 'Дозволити функції ШІ';
$string['insights_ai_features_is_allow_help'] = 'Дозвольте використовувати функції штучного інтелекту під час цієї сесії.';
$string['insights_ai_text_chat_features_is_allow'] = 'Дозволити текстовий чат за допомогою ШІ';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Дозвольте використовувати ШІ в чаті.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Дозволити узагальнення зустрічей за допомогою ШІ';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Дозвольте підсумувати зустріч за допомогою ШІ.';

$string['lock_microphone'] = 'Мікрофон для блокування';
$string['lock_microphone_help'] = 'Вимкніть мікрофони всіх учасників за замовчуванням.';
$string['lock_webcam'] = 'Вебкамера з блокуванням';
$string['lock_webcam_help'] = 'Вимкніть вебкамери всіх учасників за замовчуванням.';
$string['lock_screen_sharing'] = 'Спільне використання екрану блокування';
$string['lock_screen_sharing_help'] = 'Вимкніть спільний екран для всіх учасників за замовчуванням.';
$string['lock_whiteboard'] = 'Lock Whiteboard';
$string['lock_whiteboard_help'] = 'Вимкніть дошку для всіх учасників за замовчуванням.';
$string['lock_shared_notepad'] = 'Заблокований спільний блокнот';
$string['lock_shared_notepad_help'] = 'Вимкніть спільні нотатки для всіх учасників за замовчуванням.';
$string['lock_chat'] = 'Lock Chat';
$string['lock_chat_help'] = 'Вимкніть публічний чат для всіх учасників за замовчуванням.';
$string['lock_chat_send_message'] = 'Блокувати чат Надіслати повідомлення';
$string['lock_chat_send_message_help'] = 'Вимкніть надсилання повідомлень у публічному чаті для всіх учасників за замовчуванням.';
$string['lock_chat_file_share'] = 'Заблокувати чат для спільного використання файлів';
$string['lock_chat_file_share_help'] = 'Вимкніть обмін файлами у публічному чаті для всіх учасників за замовчуванням.';
$string['lock_private_chat'] = 'Заблокуйте приватний чат';
$string['lock_private_chat_help'] = 'Вимкніть приватний чат для всіх учасників за замовчуванням.';

$string['completion_minutes'] = 'Протоколи присутності';
$string['completion_minutes_help'] = 'Вимагайте, щоб користувач перебував у сесії певну кількість хвилин.';
$string['completion_minutes_desc'] = 'Користувач повинен бути присутнім на сесії щонайменше {$a} хвилин.';
$string['completion_raised_hand'] = 'Піднята рука';
$string['completion_raised_hand_help'] = 'Вимагайте від користувача підняти руку щонайменше один раз.';
$string['completion_chat_messages'] = 'Повідомлення в чаті';
$string['completion_chat_messages_help'] = 'Вимагайте від користувача надіслати щонайменше одне повідомлення в чаті.';
$string['completion_webcam_enabled'] = 'Вебкамера увімкнена';
$string['completion_webcam_enabled_help'] = 'Вимагайте від користувача хоча б один раз увімкнути вебкамеру.';
$string['completion_webcam_duration'] = 'Тривалість з увімкненою вебкамерою (хвилини)';
$string['completion_webcam_duration_help'] = 'Вимагайте, щоб користувач мав увімкнену вебкамеру на певну кількість хвилин.';
$string['completion_webcam_duration_desc'] = 'Користувач повинен мати увімкнену вебкамеру щонайменше {$a} хвилин.';
$string['completion_mic_enabled'] = 'Увімкнено мікрофон';
$string['completion_mic_enabled_help'] = 'Вимагайте від користувача хоча б один раз увімкнути мікрофон.';
$string['completion_mic_duration'] = 'Тривалість увімкнення мікрофона (хвилини)';
$string['completion_mic_duration_help'] = 'Вимагайте, щоб користувач мав увімкненим мікрофон протягом певної кількості хвилин.';
$string['completion_mic_duration_desc'] = 'Користувач повинен мати увімкнений мікрофон щонайменше {$a} хвилин.';
$string['completion_talk_duration'] = 'Тривалість розмови (хвилини)';
$string['completion_talk_duration_help'] = 'Вимагати, щоб користувач говорив певну кількість хвилин.';
$string['completion_talk_duration_desc'] = 'Користувач повинен говорити принаймні {$a} хвилин.';
$string['completion_poll_voted'] = 'Голосування в опитуванні';
$string['completion_poll_voted_help'] = 'Вимагайте, щоб користувач проголосував принаймні в одному опитуванні.';
$string['completion_whiteboard_annotated'] = 'Анотація на дошці';
$string['completion_whiteboard_annotated_help'] = 'Вимагайте від користувача анотувати на дошці.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Зберігає статистику сесій для користувачів для визначення завершення активності.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'Ідентифікатор користувача.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Дані сесії, закодовані JSON-файлами (протоколи, повідомлення чату тощо).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'Час, коли статистика востаннє оновлювалася.';

// view.php
$string['join_session'] = 'Приєднатися до сесії';
$string['start_session'] = 'Початок сесії';
$string['end_session'] = 'Завершення сесії';
$string['participants'] = 'Учасники';
$string['is_recording'] = 'Записується';
$string['is_active'] = 'Активна';
$string['room_info'] = 'Деталі живої сесії';
$string['participants_info'] = 'Живі учасники';
$string['room_id'] = 'Ідентифікатор кімнати';
$string['creation_time'] = 'Час створення';
$string['name'] = 'Ім\'я';
$string['user_id'] = 'Ідентифікатор користувача';
$string['is_admin'] = 'Адміністрація';
$string['is_presenter'] = 'Є ведучим';
$string['joined_at'] = 'Приєднався в';
$string['moderator_not_joined'] = 'Модератор повинен розпочати сесію перед тим, як ви зможете приєднатися.';
$string['session_available_from'] = 'Доступно з: {$a}';
$string['session_available_until'] = 'Доступно до: {$a}';
$string['session_not_started_yet'] = 'Ця сесія ще не почалася.';
$string['session_ended'] = 'Ця сесія завершена.';
$string['allow_guest'] = 'Дозволити гостьовим користувачам';
$string['allow_guest_help'] = 'При активації створюється безпечне спільне посилання, щоб зовнішні користувачі (наприклад, запрошені вчителі або учасники без облікового запису Moodle) могли приєднатися до сесії; Адміністратор може переглянути та поділитися цим посиланням.';
$string['guest_join_link'] = 'Посилання на приєднання гостей';
$string['guest_join_link_help'] = 'Поділіться цим посиланням із зовнішніми учасниками. Це посилання залишатиметься дійсним для {$a} годинами. Кожне перезавантаження сторінки генерує нове посилання, але раніше поширені посилання залишаються дійсними до початкового терміну дії.';
$string['copy_link'] = 'Скопіювати посилання';
$string['link_copied'] = 'Посилання скопійовано в буфер обміну.';
$string['guest_join_title'] = 'Приєднуйтесь до зустрічі як гість';
$string['enter_display_name'] = 'Введіть своє ім\'я для відтворення';
$string['join_as_guest'] = 'Приєднуйся до зустрічі';
$string['guest_access_denied'] = 'Доступ для гостей для цієї зустрічі не увімкнений.';
$string['invalid_guest_token'] = 'Недійсний або прострочений токен приєднання гість.';
$string['guest_link_expired'] = 'Це посилання на приєднання до гостей закінчилося.';
$string['error_joining_session'] = 'У сесії була помилка: {$a}';
$string['already_logged_in'] = 'Ви вже увійшли в Moodle. Ви можете приєднатися до сесії безпосередньо з цієї сторінки активності.';
$string['total_webcams'] = 'Загальна кількість вебкамер';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Загальна кількість спільних екранів';
$string['webcams'] = 'Вебкамери';
$string['mics'] = 'Мікрофони';
$string['screenshares'] = 'Спільні екрани';

// Events
$string['event_room_started'] = 'Кімната почалася';
$string['event_room_ended'] = 'Кімната закінчилася';
$string['event_room_created'] = 'Кімната створена';
$string['event_session_ended'] = 'Сесія завершена';
$string['event_participant_joined'] = 'Учасники приєдналися';
$string['event_participant_left'] = 'Учасник залишився';
$string['event_artifact_created'] = 'Створений артефакт';
$string['event_recording_proceeded'] = 'Запис готовий';
$string['event_plugin_error'] = 'Помилка PlugNmeet';
$string['event_track_published'] = 'Опубліковано трек';
$string['event_track_unpublished'] = 'Трек не опублікований';

// Notifications
$string['messageprovider:recording_ready'] = 'Сповіщення про готові записи';
$string['messageprovider:artifact_ready'] = 'Сповіщення про готові артефакти';
$string['recording_ready_notification_subject'] = 'Запис готовий: {$a}';
$string['recording_ready_notification_fullmessage'] = 'Запис для сесії "{$a->roomname}" тепер готовий і оброблений. Ви можете переглянути його тут: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>Запис для сесії <strong>"{$a->roomname}"</strong> тепер готовий і оброблений.</p><p><a href="{$a->url}">Натисніть тут, щоб переглянути запис.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Запис готовий до {$a}';
$string['artifact_ready_notification_subject'] = 'Артефакт готовий: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Новий артефакт ({$a->type}) для сесії "{$a->roomname}тепер доступна. Ви можете переглянути його тут: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Новий артефакт ({$a->type}) для сесії <strong>"{$a->roomname}"</strong> тепер доступна.</p><p><a href="{$a->url}">Натисніть тут, щоб переглянути деталі артефакту.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Артефакт готовий до {$a}';

// recordings.php
$string['no_recordings'] = 'Записів не знайдено.';
$string['recording_id'] = 'Ідентифікатор запису';
$string['room_sid'] = 'Кімната SID';
$string['file_size'] = 'Розмір файлу';
$string['created_at'] = 'Створено в';
$string['actions'] = 'Дії';
$string['view'] = 'Вид';
$string['play'] = 'Грати';
$string['download'] = 'Завантажити';
$string['delete'] = 'Видалити';
$string['delete_confirm'] = 'Ти впевнений, що хочеш це видалити?';
$string['delete_success'] = 'Успішно видалено.';
$string['recording_details'] = 'Деталі запису';
$string['recording_creation_time'] = 'Час створення запису';
$string['room_creation_time'] = 'Час створення сесії';
$string['back_to_list'] = 'Повернутися до списку';
$string['browser_not_support_video'] = 'Ваш браузер не підтримує тег відео.';
$string['room_title'] = 'Назва кімнати';
$string['total_participants'] = 'Загальна кількість учасників';
$string['session_started_at'] = 'Сесія розпочалася на';
$string['session_ended_at'] = 'Сесія завершена на';

// artifacts.php
$string['no_artifacts'] = 'Артефактів не знайдено.';
$string['artifact_id'] = 'Ідентифікатор артефакту';
$string['type'] = 'Тип';
$string['artifact_details'] = 'Деталі артефактів';
$string['no_permission'] = 'Ви не маєте дозволу переглядати цю сторінку.';
$string['token_usage'] = 'Використання токенів';
$string['duration_usage'] = 'Тривалість використання';
$string['character_count_usage'] = 'Використання кількості символів';
$string['estimated_cost'] = 'Орієнтовна вартість';
$string['file_path'] = 'Шлях до файлу';
$string['mime_type'] = 'Тип міміки';
$string['created_at'] = 'Створено в';

// Analytics strings
$string['download_excel_report'] = 'Завантажити звіт Excel';
$string['download_raw_json'] = 'Завантажити сирі дані';
$string['room_summary'] = 'Короткий зміст кімнати';
$string['users_summary'] = 'Короткий огляд користувачів';
$string['see_excel_report'] = 'Дивіться звіт Excel для деталей';
$string['error_loading_analytics'] = 'Помилка завантаження аналітичних даних: {$a}';
$string['error_generating_excel'] = 'Звіт Excel про генерацію помилок: {$a}';

$string['analytics_room_room_id'] = 'Ідентифікатор кімнати';
$string['analytics_room_room_title'] = 'Назва кімнати';
$string['analytics_room_room_creation'] = 'Час створення кімнати';
$string['analytics_room_room_ended'] = 'Час закінчення кімнати';
$string['analytics_room_room_duration'] = 'Тривалість роботи кімнати';
$string['analytics_room_room_total_users'] = 'Загальна кількість учасників';
$string['analytics_room_enabled_e2ee'] = 'Увімкнено E2EE';
$string['analytics_room_recording_status'] = 'Кількість статусів запису';
$string['analytics_room_rtmp_status'] = 'Підрахунок статусу RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Загальне використання мовних сервісів';
$string['analytics_room_external_media_player_status'] = 'Кількість статусів зовнішнього медіаплеєра';
$string['analytics_room_etherpad_status'] = 'Підрахунок статусу Etherpad';
$string['analytics_room_external_display_link_status'] = 'Кількість статусів зовнішніх посилань дисплея';
$string['analytics_room_ingress_created'] = 'Енґресс створений графом';
$string['analytics_room_breakout_room'] = 'Підрахунок кімнат у прориві';

$string['analytics_user_name'] = 'Ім\'я';
$string['analytics_user_id'] = 'Ідентифікатор користувача';
$string['analytics_user_ex_id'] = 'Ідентифікатор користувача';
$string['analytics_user_is_admin'] = 'Адміністрація';
$string['analytics_user_duration'] = 'Тривалість';
$string['analytics_user_joined'] = 'Приєднався в';
$string['analytics_user_left'] = 'Left At';
$string['analytics_user_mic_status'] = 'Зміни статусу мікрофона';
$string['analytics_user_mic_muted'] = 'Мікрофон Muted Count';
$string['analytics_user_mic_duration'] = 'Тривалість з мікрофоном';
$string['analytics_user_talked'] = 'Розмовний граф';
$string['analytics_user_talked_duration'] = 'Тривалість розмови';
$string['analytics_user_webcam_status'] = 'Зміни статусу вебкамери';
$string['analytics_user_webcam_duration'] = 'Тривалість увімкнення вебкамери';
$string['analytics_user_raise_hand'] = 'Підніміть руку, підрахунок';
$string['analytics_user_voted_poll'] = 'Підрахунок голосів';
$string['analytics_user_whiteboard_annotated'] = 'Рахунок з анотаціями на дошці';
$string['analytics_user_whiteboard_files'] = 'Кількість файлів на дошці';
$string['analytics_user_screen_share_status'] = 'Зміни статусу спільного екрану';
$string['analytics_user_speech_services_usage'] = 'Використання мовних сервісів';
$string['analytics_user_public_chat'] = 'Публічні чат-повідомлення';
$string['analytics_user_private_chat'] = 'Приватні чат-повідомлення';
$string['analytics_user_chat_files'] = 'Спільні чат-файли';
$string['analytics_user_interface_invisible'] = 'Інтерфейсний невидимий підрахунок';
$string['analytics_user_connection_quality'] = 'Якість з\'єднання';
$string['analytics_user_connection_quality_excellent'] = 'Чудово';
$string['analytics_user_connection_quality_good'] = 'Добре';
$string['analytics_user_connection_quality_poor'] = 'Бідний';

$string['users_info'] = 'Інформація про користувача';
$string['polls'] = 'Опитування';
$string['question'] = 'Питання';
$string['options'] = 'Опції';
$string['file_name'] = 'Назва файлу';
$string['checkcompletiontask'] = 'Перевірте завершення plugNmeet';

// attendance.php
$string['attendance_report'] = 'Звіт про відвідуваність';
$string['status'] = 'Статус';
$string['present'] = 'Сьогодення';
$string['absent'] = 'Відсутній';
$string['incomplete'] = 'Незавершено';
$string['completed'] = 'Завершено';
$string['minutes_attended'] = 'Протоколи присутності';
$string['last_updated'] = 'Останнє оновлення';
$string['mic_duration'] = 'Тривалість увімкнення мікрофона';
$string['webcam_duration'] = 'Тривалість увімкнення вебкамери';
$string['participation_progress'] = 'Прогрес участі';
$string['attendance_duration'] = 'Протоколи присутності';
$string['attendance_webcam_status'] = 'Вебкамера увімкнена';
$string['attendance_mic_status'] = 'Увімкнено мікрофон';
$string['attendance_talked_duration'] = 'Тривалість доповіді';
$string['attendance_voted_poll'] = 'Голосування в опитуванні';
$string['attendance_chat_messages'] = 'Повідомлення в чаті';
$string['attendance_raise_hand'] = 'Піднята рука';
$string['attendance_webcam_duration'] = 'Тривалість увімкнення вебкамери';
$string['attendance_mic_duration'] = 'Тривалість увімкнення мікрофона';
$string['attendance_whiteboard_annotated'] = 'Анотація на дошці';
$string['met'] = 'Мет';
$string['required'] = 'Обов\'язкове';

// Status codes
$string['status_unknown_status'] = 'З сервера було повернуто невідомий статус.';
$string['status_success'] = 'Операція успішно завершена.';
$string['status_permission_denied'] = 'Дозвіл відхилено.';
$string['status_not_found'] = 'Ні {$a} знайшли.';
$string['status_conflict'] = 'Ця дія не могла бути виконана через конфлікт (наприклад, кімната могла вже існувати).';
$string['status_invalid_token_or_signature'] = 'Токен або підпис запиту є недійсними.';
$string['status_invalid_api_key'] = 'Наданий API-ключ є недійсним. Будь ласка, перевірте налаштування плагіна.';
$string['status_internal_server_error'] = 'Сервер PlugNmeet зіткнувся з внутрішньою помилкою.';
$string['status_invalid_parameters'] = 'Надана інформація є недійсною.';
$string['status_missing_required_parameter'] = 'Деяка необхідна інформація відсутня.';
$string['status_room_not_found'] = 'Вказану кімнату не знайшли.';
$string['status_user_not_found'] = 'Обліковий запис користувача не знайдено. Будь ласка, переконайтеся, що ваші облікові дані API правильні та підписка активна.';
$string['status_user_blocked'] = 'Обліковий запис користувача заблоковано. Будь ласка, зверніться до служби підтримки.';
$string['status_user_not_active'] = 'Обліковий запис користувача не активний. Ймовірно, це пов\'язано з неактивною або простроченою підпискою.';
