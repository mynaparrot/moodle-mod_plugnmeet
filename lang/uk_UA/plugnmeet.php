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
$string['plugnmeet:viewactiveroomsreport'] = 'View active rooms report';
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
$string['server_url_desc'] = 'Базова URL вашого сервера PlugNmeet (наприклад, https://pnm.example.com).';
$string['api_key'] = 'Ключ API';
$string['api_key_desc'] = 'Унікальний API-ключ, який надає ваш сервер PlugNmeet.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'Секрет API, який надає ваш сервер PlugNmeet, використовується для безпечної автентифікації.';
$string['guest_access_hdr'] = 'Налаштування доступу для гостей';
$string['allow_guest_global'] = 'Дозволити гостям доступ глобально';
$string['allow_guest_global_desc'] = 'Виконує функцію головного вимикача. Якщо вчителі відключаються, вони не бачать опції увімкнути приєднання гостей під час створення або редагування активностей.';
$string['guest_link_expiration'] = 'Термін дії гостьового посилання (години)';
$string['guest_link_expiration_desc'] = 'Визначає, скільки годин гостьове посилання залишається активним після того, як вчитель його генерує.';
$string['defaults'] = 'Технічні дефолти';
$string['defaults_desc'] = 'Технічні налаштування за замовчуванням застосовувалися до кожної нової сесії PlugNmet.';
$string['enable_dynacast'] = 'Увімкнути Dynacast';
$string['enable_dynacast_des'] = 'Оптимізує продуктивність шляхом динамічного паузування відеошарів, які учасники не переглядають. Це суттєво знижує використання процесора та пропускної здатності на серверній стороні. **Примітка:** Це буде автоматично увімкнено при використанні кодеків SVC (VP9/AV1) і є обов\'язковим для мультикодекової трансляції.';
$string['enable_simulcast'] = 'Увімкнути симультанну трансляцію';
$string['enable_simulcast_des'] = 'Забезпечує кілька рівнів якості відео для забезпечення плавного досвіду для користувачів із слабким з\'єднанням.';
$string['video_codec'] = 'Відеокодек';
$string['video_codec_des'] = 'Стандарт кодування для передачі відео. **VP8** рекомендується для WebRTC, оскільки він забезпечує найкращий баланс якості та низької затримки. **Увага:** Не всі браузери підтримують усі кодеки; переконайтеся, що ваші користувачі користуються сучасними браузерами, якщо ви використовуєте VP9 або H.265.';
$string['default_webcam_resolution'] = 'Стандартна роздільна здатність вебкамери';
$string['default_webcam_resolution_des'] = 'Початкове налаштування роздільної здатності для камер учасників.';
$string['default_screen_share_resolution'] = 'Стандартна роздільна здатність спільного екрану';
$string['default_screen_share_resolution_des'] = 'Початкове налаштування роздільної здатності для спільного використання екрану.';
$string['default_audio_preset'] = 'Стандартний аудіопресет';
$string['default_audio_preset_des'] = 'Профіль якості звуку оптимізований для сесії.';

$string['branding'] = 'Брендинг і кастомізація';
$string['custom_logo'] = 'Індивідуальний логотип';
$string['custom_logo_des'] = 'Завантажте свій логотип у кімнату для нарад. Якщо залишити порожнім, буде використано стандартний логотип PlugNmeet.';
$string['custom_css_url'] = 'Користувацька URL-адреса CSS';
$string['custom_css_url_des'] = 'Зв\'яжіть зовнішній .css файл для перезапису або налаштування стилів інтерфейсу.';
$string['primary_color'] = 'Основний колір';
$string['primary_color_des'] = 'Основний акцентний колір використовується для кнопок, активних станів і підсвіток.';
$string['secondary_color'] = 'Вторинний колір';
$string['secondary_color_des'] = 'Акцентний колір, що використовується для вторинних елементів інтерфейсу.';
$string['background_color'] = 'Колір фону';
$string['background_color_des'] = 'Основний колір фону інтерфейсу.';
$string['background_image'] = 'Фонове зображення';
$string['background_image_des'] = 'Фонові шпалери. Для найкращих результатів використовуйте зображення 1920x1080.';
$string['header_color'] = 'Колір заголовка';
$string['header_color_des'] = 'Колір фону для верхньої панелі навігації.';
$string['footer_color'] = 'Колір нижнього колонтитула';
$string['footer_color_des'] = 'Колір фону для нижньої панелі інструментів.';
$string['left_color'] = 'Колір лівої сторони';
$string['left_color_des'] = 'Колір фону для лівої навігаційної панелі.';
$string['side_panel_bg_color'] = 'Колір фону бічної панелі';
$string['side_panel_bg_color_des'] = 'Колір фону для правих панелей (Чат і список учасників).';
$string['copyright_text'] = 'Текст авторського права';
$string['copyright_text_des'] = 'Текст брендування, що відображається у підколоні налаштувань. HTML підтримується для посилань або кастомного стилювання.';
$string['client_load'] = 'Метод завантаження клієнта';
$string['client_load_des'] = 'Виберіть **Remote** (Рекомендується) для безшовного, брендового досвіду, вбудованого безпосередньо на вашу сторінку Moodle. Виберіть **Redirect**, щоб використовувати стандартний інтерфейс Nmeet; Зверніть увагу, що користувачі залишатимуть ваш сайт, і індивідуальний брендинг може не застосовуватися.';
$string['remote'] = 'Пульт (вбудований)';
$string['redirect'] = 'Перенаправити на сервер';

$string['yes'] = 'Так';
$string['no'] = 'Ні';
$string['recordings'] = "Записи";
$string['recording'] = "Запис";
$string['artifacts'] = "Артефакти кімнати";
$string['attendance'] = "Звіт про відвідуваність";
$string['artifact'] = "Артефакт";
$string['room_subject'] = 'кімната';
$string['user_subject'] = 'Користувач';
$string['activeroomsreport'] = 'Active Rooms Report';
$string['noactiverooms'] = 'There are no active rooms at the moment.';
$string['activerooms'] = 'Active Rooms';
$string['loading'] = 'Loading...';

// mod_form.php
$string['roomtitle'] = 'Назва кімнати';
$string['roomtitle_help'] = 'Назва, що використовується для активності Moodle та заголовка живої зустрічі. Вона допомагає студентам визначити сесію на своєму курсі та всередині аудиторії.';
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
$string['available_help'] = 'Визначає, коли учасники можуть почати приєднуватися до сесії. Користувачі не зможуть увійти до кімнати до цієї дати та часу.';
$string['deadline'] = 'Доступно до';
$string['deadline_help'] = 'Визначає фінальну дату та час, коли учасники можуть отримати доступ до сесії. Доступ буде заблоковано після завершення цього дедлайну.';
$string['err_deadline_before_available'] = 'Дата «Доступно до» не може бути раніше за дату «Доступно з».';
$string['error_analytics_required_for_completion'] = 'Потрібно перевірити Enable Analytics, якщо встановлені критерії завершення.';

$string['allow_webcams'] = 'Дозволити вебкамери';
$string['allow_webcams_help'] = 'Дозвольте учасникам користуватися своїми вебкамерами.';
$string['mute_on_start'] = 'Вимкнути звук при запуску';
$string['mute_on_start_help'] = 'Автоматично вимикайте звук усіх учасників, коли вони приєднуються до сесії.';
$string['allow_screen_share'] = 'Дозволити спільне використання екрану';
$string['allow_screen_share_help'] = 'Дозвольте учасникам ділитися екраном.';
$string['allow_rtmp'] = 'Дозволити RTMP-трансляцію';
$string['allow_rtmp_help'] = 'Дозволяє модераторам транслювати живу сесію на зовнішніх платформах, таких як YouTube, Facebook або Twitch. Ідеально підходить для публічних вебінарів або гостьових лекцій.';
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
$string['enable_analytics_help'] = 'Відстежує дані про участь і залученість у сесії. **Примітка:** Це має бути увімкнено, якщо встановлено будь-які критерії завершення.';
$string['allow_virtual_bg'] = 'Дозволити віртуальні фони';
$string['allow_virtual_bg_help'] = 'Дозволяє учасникам розмивати фон або використовувати віртуальне зображення. Чудово підходить для збереження приватності учнів і професійного вигляду класу.';
$string['auto_gen_user_id'] = 'Автоматичне створення ідентифікатора користувача';
$string['auto_gen_user_id_help'] = 'Коли система увімкнена, вона створює новий ідентифікатор, щоб один і той самий користувач міг приєднуватися з кількох пристроїв — наприклад, коли вчитель приєднується з планшета, щоб малювати на дошці, використовуючи ПК для камери та мікрофона; Однак це <b>Рекомендовано</b> щоб не використовувати Moodle user ID і уникнути дублювання з\'єднань.';

$string['allow_recording'] = 'Дозволити запис (Master Switch)';
$string['allow_recording_help'] = 'Основний майстер-перемикач для всіх функцій запису. Якщо вимкнено, як хмарні, так і локальні опції запису будуть приховані від модераторів.';
$string['allow_cloud_recording'] = 'Дозволити хмарний запис';
$string['allow_cloud_recording_help'] = 'Вмикає запис на сервері PlugNmet. Фінальне відео обробляється і зберігається в хмарі, що полегшує обмін за посиланням після завершення сесії.';
$string['enable_auto_cloud_recording'] = 'Увімкнути автозапис у хмарі';
$string['enable_auto_cloud_recording_help'] = 'Автоматично запускає хмарний запис у момент, коли перший модератор приєднується до сесії. Ідеально, щоб жодна лекція не була забута.';
$string['allow_local_recording'] = 'Дозволити локальний запис';
$string['allow_local_recording_help'] = 'Дозволяє записувати безпосередньо на комп\'ютер. **Примітка:** Потрібен Google Chrome. Щоб захопити весь аудіо сесії, користувач повинен поділитися своїм "Chrome Tab" і поставити галочку "Також поділитися аудіо вкладки". Файл зберігається локально на пристрої після завершення.';

$string['allow_chat'] = 'Дозволити чат (глобальний головний комутатор)';
$string['allow_chat_help'] = 'Абсолютний головний перемикач для всіх функцій чату. Якщо вимкнено, вся чат-зона видаляється для всіх, включаючи модераторів. Жодного публічного чи приватного чату неможливо.';
$string['allow_file_upload'] = 'Дозволити завантаження файлу';
$string['allow_file_upload_help'] = 'Дозволяє обмінюватися файлами в чаті. Для цього потрібен активний головний перемикач "Allow Chat".';

$string['allow_shared_notepad'] = 'Дозволити спільний блокнот';
$string['allow_shared_notepad_help'] = 'Забезпечує спільний текстовий редактор, де учні та вчителі можуть разом вести нотатки в реальному часі. Це ідеально підходить для мозкового штурму, спільного написання або створення спільного підсумку курсу.';

$string['allow_whiteboard'] = 'Дозволити Whiteboard';
$string['allow_whiteboard_help'] = 'Відкриває інтерактивний простір для малювання для сесії. Використовуйте його для ескізу діаграм, візуального розв\'язання математичних задач або дозволяйте учням анотувати спільний контент.';

$string['allowed_external_media_player'] = 'Дозволити зовнішній медіаплеєр';
$string['allowed_external_media_player_help'] = 'Дозволяє модераторам синхронізувати та показувати відео з таких джерел, як YouTube чи Vimeo, для всього класу. Ідеально підходить для аналізу навчальних кліпів або спільного перегляду документальних фільмів без затримки пропускної здатності.';

$string['activate_waiting_room'] = 'Активувати зал очікування';
$string['activate_waiting_room_help'] = 'Увімкніть зал очікування для цієї сесії.';
$string['waiting_room_msg'] = 'Повідомлення в залі очікування';
$string['waiting_room_msg_help'] = 'Це повідомлення показується користувачам, поки вони чекають на вхід до кімнати. Використовуйте його, щоб поділитися інструкціями, очікуваннями або корисною інформацією перед початком сесії.';

$string['allow_breakout_rooms'] = 'Дозволити кімнати для відбиття';
$string['allow_breakout_rooms_help'] = 'Дозволяє модераторам розділяти учасників на менші групи для сфокусованих обговорень, спільних проєктів або приватних групових активностей.';
$string['allowed_number_rooms'] = 'Кімнати Макса Breakout';
$string['allowed_number_rooms_help'] = 'Максимальна кількість підкімнат, яку модератор може створити за одну сесію.';

$string['allow_display_external_link_features'] = 'Дозволити обмін зовнішніми посиланнями';
$string['allow_display_external_link_features_help'] = 'Дозволяє модераторам показувати зовнішній освітній контент — такий як активності H5P, пакети SCORM або системи вікторин (наприклад, Kahoot) — безпосередньо всім учасникам під час сесії.';

$string['allow_ingress_features'] = 'Дозволити вхід (зовнішній стрімінг)';
$string['allow_ingress_features_help'] = 'Дозволяє вчителям транслювати відео високої якості на заняття за допомогою зовнішнього програмного забезпечення, такого як OBS, через протоколи RTMP або WHIP. Це ідеально підходить для поширення відеоконтенту у високої роздільній здатності, попередньо записаних сесій або обходу обмежень на завантаження браузером.';

$string['allow_polls'] = 'Дозволити опитування';
$string['allow_polls_help'] = 'Дозволяє модераторам створювати інтерактивні опитування та швидкі вікторини під час сесії. Це чудовий спосіб перевірити розуміння студентів і підвищити залученість.';

$string['sip_dial_in_features_is_allow'] = 'Дозволити SIP-Dial-in';
$string['sip_dial_in_features_is_allow_help'] = 'Дозволяє учасникам приєднатися до аудіосесії через традиційний телефонний дзвінок. Це важливо для студентів із поганим інтернет-з\'єднанням або тих, хто хоче приєднатися в дорозі.';

$string['enable_end_to_end_encryption_features'] = 'Увімкнути наскрізне шифрування (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Забезпечує максимальну безпеку шляхом шифрування відео- та аудіопотоків так, що навіть сервер не може до них отримати доступ. Примітка: деякі функції, як-от запис на сервері, можуть бути обмежені, коли E2EE активний.';
$string['enabled_self_insert_encryption_key'] = 'Дозволити ключі, визначені учасниками';
$string['enabled_self_insert_encryption_key_help'] = 'Дозволяє учасникам вручну вводити спільний секретний ключ. Це гарантує, що провайдер ніколи не матиме доступу до ключів шифрування, забезпечуючи найвищий рівень конфіденційності.';
$string['included_e2ee_chat_messages'] = 'Шифруйте чат-повідомлення';
$string['included_e2ee_chat_messages_help'] = 'Розширює наскрізне шифрування на текстовий чат, забезпечуючи, що повідомлення можуть читати лише учасники кімнати.';
$string['included_e2ee_whiteboard'] = 'Шифруйте дані на дошці';
$string['included_e2ee_whiteboard_help'] = 'Включає всі креслення та анотації на дошці у наскрізному шарі шифрування для повної конфіденційності даних.';

$string['insights_features_is_allow'] = 'Дозволити сесійні інсайти (Master Switch)';
$string['insights_features_is_allow_help'] = 'Основний головний комутатор для всіх функцій, що керуються даними. Якщо вони вимкнені, всі підопції — включаючи Транскрипцію, AI Assistant та Звіти про зустрічі — будуть повністю недоступними.';
$string['insights_transcription_features_is_allow'] = 'Дозволити живу транскрипцію';
$string['insights_transcription_features_is_allow_help'] = 'Вмикає перетворення мови в текст у реальному часі під час сесії. Це необхідно увімкнути для роботи транскрипційного перекладу або синтезу мовлення (TTS).';
$string['insights_transcription_features_is_allow_translation'] = 'Дозволити транскрипційний переклад';
$string['insights_transcription_features_is_allow_translation_help'] = 'Дозволяє перекладати живу виписку різними мовами, підтримуючи іноземних студентів і багатомовне середовище.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Дозволити синтез мовлення (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Дозволяє перетворювати текст на мову, що дозволяє читати живу стенограму вголос для кращої доступності та для учасників з порушеннями зору.';
$string['insights_chat_translation_features_is_allow'] = 'Дозволити переклад у чаті';
$string['insights_chat_translation_features_is_allow_help'] = 'Дозволяє переводити повідомлення в чаті в реальному часі, дозволяючи учасникам миттєво спілкуватися різними мовами.';
$string['insights_ai_features_is_allow'] = 'Дозволити AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'Головний перемикач для всіх можливостей на основі штучного інтелекту. Якщо вони вимкнені, певні функції, такі як AI Chat і Summary Meeting Summarization, будуть приховані, навіть якщо Session Insights активний.';
$string['insights_ai_text_chat_features_is_allow'] = 'Дозволити AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Інтегрує AI-асистента безпосередньо в чат, щоб допомагати відповідати на запитання, пояснювати складні поняття та сприяти груповому обговоренню.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Дозволити узагальнення зустрічей за допомогою ШІ';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Автоматично генерує короткий AI-огляд після завершення сесії, висвітлюючи ключові освітні моменти, рішення та подальші завдання.';

$string['lock_microphone'] = 'Мікрофони з блокуванням';
$string['lock_microphone_help'] = 'За замовчуванням вимикає всіх учасників при вході. Тільки модератори можуть вимикати звук або надавати дозвіл на висловлення.';
$string['lock_webcam'] = 'Вебкамери з блокуванням';
$string['lock_webcam_help'] = 'За замовчуванням вимикає камери для всіх учасників. Корисно для економії пропускної здатності або забезпечення приватності студентів.';
$string['lock_screen_sharing'] = 'Спільне використання екрану блокування';
$string['lock_screen_sharing_help'] = 'Обмежує спільне використання екрану лише модераторами. Запобігає перериванню учасникам власними екранами.';
$string['lock_whiteboard'] = 'Lock Whiteboard';
$string['lock_whiteboard_help'] = 'Обмежує інструменти для малювання дошки лише модераторами. Запобігає несанкціонованим анотаціям учасниками.';
$string['lock_shared_notepad'] = 'Заблокований спільний блокнот';
$string['lock_shared_notepad_help'] = 'Вимикає спільний блокнот для учасників, щоб уникнути написання не по темі або відволікань.';
$string['lock_chat'] = 'Заблокуйте публічний чат';
$string['lock_chat_help'] = 'Повністю приховує або вимикає публічний чат для всіх учасників.';
$string['lock_chat_send_message'] = 'Надсилання повідомлень із замком';
$string['lock_chat_send_message_help'] = 'Дозволяє учасникам читати чат, але забороняє надсилати повідомлення.';
$string['lock_chat_file_share'] = 'Спільний доступ до файлів через блокування';
$string['lock_chat_file_share_help'] = 'Забороняє учасникам завантажувати або ділитися файлами в чаті.';
$string['lock_private_chat'] = 'Заблокуйте приватний чат';
$string['lock_private_chat_help'] = 'Вимикає особисті повідомлення один на один між учасниками. Примітка: учасники все ще можуть надсилати приватні повідомлення модераторам з проханням про допомогу або запитання.';

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
$string['event_recording_started'] = 'Recording started';
$string['event_recording_ended'] = 'Recording ended';
$string['event_rtmp_started'] = 'RTMP stream started';
$string['event_rtmp_ended'] = 'RTMP stream ended';

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
