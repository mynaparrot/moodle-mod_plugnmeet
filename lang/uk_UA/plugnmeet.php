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
$string['modulename_help'] = 'Модуль активності PlugNmeet дозволяє створювати та керувати сеансами веб-конференцій у режимі реального часу прямо з Moodle.';
$string['modulename_link'] = 'мод/плагін/перегляд';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Адміністрація plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Додати нову активність PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Видалити артефакти';
$string['plugnmeet:deleterecording'] = 'Видалити записи';
$string['plugnmeet:downloadanalyticsreport'] = 'Завантажити аналітичний звіт';
$string['plugnmeet:downloadartifacts'] = 'Завантажити артефакти';
$string['plugnmeet:downloadattendance'] = 'Завантажити звіт про відвідуваність';
$string['plugnmeet:downloadrecordings'] = 'Завантаження записів';
$string['plugnmeet:manage'] = 'Керування налаштуваннями PlugNmeet';
$string['plugnmeet:view'] = 'Переглянути активність PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Переглянути звіт про активні кімнати';
$string['plugnmeet:viewartifacts'] = 'Переглянути артефакти';
$string['plugnmeet:viewattendance'] = 'Переглянути звіт про відвідуваність';
$string['plugnmeet:viewattendancelist'] = 'Переглянути список присутніх';
$string['plugnmeet:viewlivesessioninfo'] = 'Переглянути інформацію про сеанс у реальному часі';
$string['plugnmeet:viewrecordings'] = 'Переглянути записи';
$string['plugnmeetfieldset'] = 'Приклад користувацького набору полів';
$string['plugnmeetname'] = 'Назва власного прикладу';
$string['plugnmeetname_help'] = 'Довідка з користувацьких прикладів';

// Admin Settings
$string['api_config'] = 'Конфігурація API';
$string['server_url'] = 'URL-адреса сервера PlugNmeet';
$string['server_url_desc'] = 'Базова URL-адреса вашого сервера PlugNmeet (наприклад, https://pnm.example.com).';
$string['api_key'] = 'Ключ API';
$string['api_key_desc'] = 'Унікальний ключ API, наданий вашим сервером PlugNmeet.';
$string['api_secret'] = 'Секрет API';
$string['api_secret_desc'] = 'Секрет API, наданий вашим сервером PlugNmeet, який використовується для безпечної автентифікації.';
$string['guest_access_hdr'] = 'Налаштування гостьового доступу';
$string['allow_guest_global'] = 'Дозволити гостьовий доступ у всьому світі';
$string['allow_guest_global_desc'] = 'Виконує роль головного перемикача. Якщо вимкнено, вчителі не бачитимуть опції ввімкнення гостя під час створення або редагування завдань.';
$string['guest_link_expiration'] = 'Термін дії гостьового посилання (години)';
$string['guest_link_expiration_desc'] = 'Визначає, скільки годин посилання для гостьового доступу залишається активним після його створення вчителем.';
$string['defaults'] = 'Технічні за замовчуваннями';
$string['defaults_desc'] = 'Технічні конфігурації за замовчуванням застосовуються до кожного нового сеансу PlugNmeet.';
$string['enable_dynacast'] = 'Увімкнути Dynacast';
$string['enable_dynacast_des'] = 'Оптимізує продуктивність, динамічно призупиняючи відеошари, які не переглядають учасники. Це значно зменшує використання процесора та пропускної здатності сервера. **Примітка:** Ця функція буде автоматично ввімкнена, якщо використовуються кодеки SVC (VP9/AV1), і є обов’язковою для одночасної трансляції з кількома кодеками.';
$string['enable_simulcast'] = 'Увімкнути одночасну трансляцію';
$string['enable_simulcast_des'] = 'Забезпечує кілька рівнів якості відео, щоб забезпечити плавну роботу навіть зі слабким з\'єднанням.';
$string['video_codec'] = 'Відеокодек';
$string['video_codec_des'] = 'Стандарт кодування для передачі відео. **VP8** рекомендується для WebRTC, оскільки він забезпечує найкращий баланс якості та низької затримки. **Попередження:** Не всі браузери підтримують усі кодеки; переконайтеся, що ваші користувачі використовують сучасні браузери, якщо використовують VP9 або H.265.';
$string['default_webcam_resolution'] = 'Роздільна здатність веб-камери за замовчуванням';
$string['default_webcam_resolution_des'] = 'Початкове налаштування роздільної здатності для камер учасників.';
$string['default_screen_share_resolution'] = 'Роздільна здатність спільного доступу до екрана за замовчуванням';
$string['default_screen_share_resolution_des'] = 'Початкове налаштування роздільної здатності для спільного використання екрана.';
$string['default_audio_preset'] = 'Попередні налаштування аудіо за замовчуванням';
$string['default_audio_preset_des'] = 'Профіль якості звуку оптимізовано для сеансу.';

$string['branding'] = 'Брендинг та кастомізація';
$string['custom_logo'] = 'Власний логотип';
$string['custom_logo_des'] = 'Завантажте свій логотип до кімнати для переговорів. Якщо залишити поле порожнім, буде використано логотип PlugNmeet за замовчуванням.';
$string['custom_css_url'] = 'Користувацька URL-адреса CSS';
$string['custom_css_url_des'] = 'Додайте посилання на зовнішній файл .css, щоб перезаписати або налаштувати стилі інтерфейсу.';
$string['primary_color'] = 'Основний колір';
$string['primary_color_des'] = 'Основний акцентний колір, який використовується для кнопок, активних станів та виділень.';
$string['secondary_color'] = 'Вторинний колір';
$string['secondary_color_des'] = 'Акцентний колір, який використовується для вторинних елементів інтерфейсу користувача.';
$string['background_color'] = 'Колір фону';
$string['background_color_des'] = 'Основний колір фону інтерфейсу.';
$string['background_image'] = 'Фонове зображення';
$string['background_image_des'] = 'Фонові шпалери. Для найкращих результатів використовуйте зображення розміром 1920x1080.';
$string['header_color'] = 'Колір заголовка';
$string['header_color_des'] = 'Колір фону для верхньої панелі навігації.';
$string['footer_color'] = 'Колір нижнього колонтитула';
$string['footer_color_des'] = 'Колір фону для нижньої панелі інструментів.';
$string['left_color'] = 'Колір лівого боку';
$string['left_color_des'] = 'Колір фону для лівої бічної панелі навігації.';
$string['side_panel_bg_color'] = 'Колір фону бічної панелі';
$string['side_panel_bg_color_des'] = 'Колір фону для панелей правого боку (чат і список учасників).';
$string['copyright_text'] = 'Текст про авторське право';
$string['copyright_text_des'] = 'Фірмовий текст відображається в нижньому колонтитулі налаштувань. HTML підтримується для посилань або користувацького стилю.';
$string['client_load'] = 'Метод завантаження клієнта';
$string['client_load_des'] = 'Оберіть **Віддалено** (рекомендовано) для безперебійного, брендованого інтерфейсу, вбудованого безпосередньо на вашу сторінку Moodle. Оберіть **Перенаправлення**, щоб використовувати інтерфейс plugNmeet за замовчуванням; зверніть увагу, що користувачі залишатимуть ваш сайт, і власне брендування може не застосовуватися.';
$string['remote'] = 'Віддалений (вбудований)';
$string['redirect'] = 'Перенаправлення на сервер';

$string['yes'] = 'Так';
$string['no'] = 'Ні';
$string['recordings'] = "Записи";
$string['recording'] = "Запис";
$string['artifacts'] = "Артефакти кімнати";
$string['attendance'] = "Звіт про відвідуваність";
$string['artifact'] = "Артефакт";
$string['room_subject'] = 'кімната';
$string['user_subject'] = 'користувач';
$string['activeroomsreport'] = 'Звіт про активні кімнати';
$string['noactiverooms'] = 'Наразі немає активних кімнат.';
$string['activerooms'] = 'Активні кімнати';
$string['loading'] = 'Завантаження...';

// mod_form.php
$string['roomtitle'] = 'Назва кімнати';
$string['roomtitle_help'] = 'Назва, що використовується для активності Moodle та заголовка живої зустрічі. Вона допомагає студентам ідентифікувати сеанс у своєму курсі та всередині аудиторії.';
$string['welcome_message'] = 'Вітальне повідомлення';
$string['welcome_message_help'] = 'Будь-який текст, введений тут, відображатиметься як перше повідомлення в публічному чаті, коли користувачі приєднуватимуться до кімнати. Це корисно для обміну інструкціями, посиланнями або важливою інформацією з учасниками під час їхнього входу.';
$string['max_participants'] = 'Макс. учасників';
$string['max_participants_help'] = 'Встановіть це значення, щоб обмежити кількість користувачів, які можуть одночасно приєднатися до сеансу. Встановіть значення 0, щоб дозволити необмежену кількість учасників, тобто немає обмежень щодо кількості користувачів, які можуть приєднатися.';
$string['room_features'] = 'Особливості номера';
$string['recording_features'] = 'Функції запису';
$string['chat_features'] = 'Функції чату';
$string['other_features'] = 'Інші функції';
$string['e2ee_features'] = 'Наскрізне шифрування';
$string['insights_features'] = 'Аналітика та функції штучного інтелекту';
$string['defaultlock'] = 'Налаштування блокування за замовчуванням';
$string['advanced_completion'] = 'Розширене завершення';
$string['available'] = 'Доступно з';
$string['available_help'] = 'Визначає, коли учасники можуть почати приєднуватися до сеансу. Користувачі не зможуть увійти до кімнати раніше цієї дати й часу.';
$string['deadline'] = 'Доступно до';
$string['deadline_help'] = 'Визначає кінцеву дату та час, коли учасники зможуть отримати доступ до сеансу. Доступ буде заблоковано після закінчення цього терміну.';
$string['err_deadline_before_available'] = 'Дата «Доступно до» не може бути ранішою за дату «Доступно з».';
$string['error_analytics_required_for_completion'] = 'Якщо встановлено будь-які критерії завершення, потрібно позначити опцію «Увімкнути аналітику».';

$string['allow_webcams'] = 'Дозволити веб-камери';
$string['allow_webcams_help'] = 'Дозвольте учасникам використовувати свої веб-камери.';
$string['mute_on_start'] = 'Вимкнути звук на початку';
$string['mute_on_start_help'] = 'Автоматично вимкнути звук усіх учасників, коли вони приєднуються до сеансу.';
$string['allow_screen_share'] = 'Дозволити спільний доступ до екрана';
$string['allow_screen_share_help'] = 'Дозвольте учасникам ділитися своїм екраном.';
$string['allow_rtmp'] = 'Дозволити потокове передавання RTMP';
$string['allow_rtmp_help'] = 'Дозволяє модераторам транслювати сесію в прямому ефірі на зовнішні платформи, такі як YouTube, Facebook або Twitch. Ідеально підходить для публічних вебінарів або гостьових лекцій.';
$string['allow_raise_hand'] = 'Дозволити підняти руку';
$string['allow_raise_hand_help'] = 'Дозвольте учасникам підняти руку.';
$string['admin_only_webcams'] = 'Веб-камери лише для адміністраторів';
$string['admin_only_webcams_help'] = 'Дозволити використовувати веб-камери лише модераторам.';
$string['allow_view_other_webcams'] = 'Дозволити перегляд інших веб-камер';
$string['allow_view_other_webcams_help'] = 'Дозволити учасникам переглядати веб-камери інших учасників. Якщо вимкнено, вони бачитимуть лише веб-камери модераторів.';
$string['allow_view_other_users_list'] = 'Дозволити перегляд списку інших користувачів';
$string['allow_view_other_users_list_help'] = 'Дозвольте учасникам переглядати список інших учасників.';
$string['room_duration'] = 'Тривалість перебування в кімнаті (хвилини)';
$string['room_duration_help'] = 'Визначає, як довго кімната може залишатися відкритою, перш ніж вона автоматично закриється. Введіть 0, якщо ви не хочете встановлювати жодного обмеження часу, дозволяючи кімнаті залишатися активною без обмежень.';
$string['moderator_join_first'] = 'Модератор Приєднатися першим';
$string['moderator_join_first_help'] = 'Якщо цю опцію ввімкнено, сеанс не розпочнеться, і ніхто не зможе приєднатися, доки спочатку не приєднається модератор (наприклад, викладач). Учасники залишатимуться на сторінці активності Moodle і не зможуть заходити до кімнати чи зони очікування. Це відрізняється від опції «Кімната очікування», де користувачі все ще можуть приєднатися та чекати.';
$string['enable_analytics'] = 'Увімкнути аналітику';
$string['enable_analytics_help'] = 'Відстежує дані про участь та залученість для сеансу. **Примітка:** Цей параметр має бути ввімкнено, якщо встановлено будь-які критерії завершення.';
$string['allow_virtual_bg'] = 'Дозволити віртуальні фони';
$string['allow_virtual_bg_help'] = 'Дозволяє учасникам розмити фон або використовувати віртуальне зображення. Чудово підходить для збереження конфіденційності учнів та забезпечення професійного вигляду класу.';
$string['auto_gen_user_id'] = 'Автоматичне створення ідентифікатора користувача';
$string['auto_gen_user_id_help'] = 'Коли цю функцію ввімкнено, система створює новий ідентифікатор, щоб той самий користувач міг приєднатися з кількох пристроїв, наприклад, коли вчитель приєднується з планшета, щоб малювати на дошці, використовуючи ПК для камери та мікрофона; однак <b>рекомендується</b> вимкнути цю функцію, щоб використовувати ідентифікатор користувача Moodle та запобігти дублюванню приєднань.';

$string['allow_recording'] = 'Дозволити запис (головний перемикач)';
$string['allow_recording_help'] = 'Головний перемикач для всіх функцій запису. Якщо його вимкнено, опції хмарного та локального запису будуть приховані від модераторів.';
$string['allow_cloud_recording'] = 'Дозволити запис у хмарі';
$string['allow_cloud_recording_help'] = 'Дозволяє записувати на сервері PlugNmeet. Остаточне відео обробляється та зберігається в хмарі, що дозволяє легко ділитися ним за посиланням після завершення сеансу.';
$string['enable_auto_cloud_recording'] = 'Увімкнути автоматичний запис у хмарі';
$string['enable_auto_cloud_recording_help'] = 'Автоматично запускає хмарний запис у момент приєднання першого модератора до сесії. Ідеально підходить для того, щоб гарантувати, що жодна лекція не буде забута.';
$string['allow_local_recording'] = 'Дозволити локальний запис';
$string['allow_local_recording_help'] = 'Дозволяє записувати безпосередньо на комп’ютер. **Примітка:** Потрібен Google Chrome. Щоб записати весь звук сеансу, користувач повинен надати спільний доступ до своєї «Вкладки Chrome» та встановити прапорець «Також поділитися аудіо вкладки». Після завершення файл зберігається локально на пристрої.';

$string['allow_chat'] = 'Дозволити чат (глобальний головний комутатор)';
$string['allow_chat_help'] = 'Абсолютний головний перемикач для всіх функцій чату. Якщо його вимкнути, вся область чату буде видалена для всіх, включаючи модераторів. Публічний чи приватний чат буде неможливий.';
$string['allow_file_upload'] = 'Дозволити завантаження файлів';
$string['allow_file_upload_help'] = 'Вмикає можливість обміну файлами в чаті. Для цього потрібно, щоб головний перемикач «Дозволити чат» був активним.';

$string['allow_shared_notepad'] = 'Дозволити спільний блокнот';
$string['allow_shared_notepad_help'] = 'Забезпечує спільну роботу текстового редактора, де учні та вчителі можуть робити нотатки в режимі реального часу разом. Це ідеально підходить для мозкового штурму, спільного написання або створення спільного конспекту заняття.';

$string['whiteboard_features'] = 'Функції білої дошки';
$string['allow_whiteboard'] = 'Дозволити дошку';
$string['allow_whiteboard_help'] = 'Відкриває інтерактивний простір для малювання під час заняття. Використовуйте його для створення ескізів діаграм, візуального розв’язання математичних задач або для того, щоб студенти могли додавати нотатки до спільного контенту.';
$string['preload_file'] = 'Попереднє завантаження файлу презентації';
$string['preload_file_help'] = 'Дозволяє завантажити PDF-файл або документ Office, який автоматично завантажиться на дошку на початку сеансу. Це гарантує, що ваші презентаційні матеріали будуть готові до заняття негайно. <strong>Максимальний розмір файлу: 5 Мб</strong>';

$string['allowed_external_media_player'] = 'Дозволити зовнішній медіаплеєр';
$string['allowed_external_media_player_help'] = 'Дозволяє модераторам синхронізувати та відтворювати відео з таких джерел, як YouTube або Vimeo, для всього класу. Ідеально підходить для аналізу навчальних кліпів або спільного перегляду документальних фільмів без затримки пропускної здатності.';

$string['activate_waiting_room'] = 'Активувати зал очікування';
$string['activate_waiting_room_help'] = 'Увімкнути кімнату очікування для цього сеансу.';
$string['waiting_room_msg'] = 'Повідомлення в залі очікування';
$string['waiting_room_msg_help'] = 'Це повідомлення відображається користувачам, поки вони чекають на вхід до кімнати. Використовуйте його, щоб поділитися інструкціями, очікуваннями або корисною інформацією перед початком сеансу.';

$string['allow_breakout_rooms'] = 'Дозволити кімнати для групових розстановок';
$string['allow_breakout_rooms_help'] = 'Дозволяє модераторам розділяти учасників на менші групи для цілеспрямованих обговорень, спільних проектів або приватних групових заходів.';
$string['allowed_number_rooms'] = 'Максимальна кількість кімнат для групових розваг';
$string['allowed_number_rooms_help'] = 'Максимальна кількість підкімнат, яку модератор може створити протягом одного сеансу.';

$string['allow_display_external_link_features'] = 'Дозволити спільний доступ до зовнішніх посилань';
$string['allow_display_external_link_features_help'] = 'Дозволяє модераторам відображати зовнішній освітній контент, такий як завдання H5P, пакети SCORM або системи вікторин (наприклад, Kahoot) безпосередньо всім учасникам під час сесії.';

$string['allow_ingress_features'] = 'Дозволити вхід (зовнішнє потокове передавання)';
$string['allow_ingress_features_help'] = 'Дозволяє вчителям транслювати високоякісне відео під час заняття за допомогою зовнішнього програмного забезпечення, такого як OBS, через протоколи RTMP або WHIP. Це ідеально підходить для обміну відеоконтентом високої роздільної здатності, попередньо записаними заняттями або обходу обмежень на завантаження з браузера.';

$string['allow_polls'] = 'Дозволити опитування';
$string['allow_polls_help'] = 'Дозволяє модераторам створювати інтерактивні опитування та швидкі вікторини під час сесії. Це чудовий спосіб перевірити розуміння студентами матеріалу та підвищити залученість.';

$string['sip_dial_in_features_is_allow'] = 'Дозволити SIP-підключення';
$string['sip_dial_in_features_is_allow_help'] = 'Дозволяє учасникам приєднатися до аудіосесії за допомогою звичайного телефонного дзвінка. Це важливо для студентів з поганим інтернет-з’єднанням або тих, кому потрібно приєднатися в дорозі.';

$string['enable_end_to_end_encryption_features'] = 'Увімкнути наскрізне шифрування (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Забезпечує максимальну безпеку, шифруючи відео- та аудіопотоки, щоб навіть сервер не мав до них доступу. Примітка: Деякі функції, такі як запис на стороні сервера, можуть бути обмежені, коли активовано E2EE.';
$string['enabled_self_insert_encryption_key'] = 'Дозволити ключі, визначені учасниками';
$string['enabled_self_insert_encryption_key_help'] = 'Дозволяє учасникам вручну вводити спільний секретний ключ. Це гарантує, що постачальник послуг ніколи не матиме доступу до ключів шифрування, забезпечуючи найвищий рівень конфіденційності.';
$string['included_e2ee_chat_messages'] = 'Шифрувати повідомлення чату';
$string['included_e2ee_chat_messages_help'] = 'Розширює наскрізне шифрування на текстовий чат, гарантуючи, що повідомлення можуть читати лише учасники кімнати.';
$string['included_e2ee_whiteboard'] = 'Шифрування даних білої дошки';
$string['included_e2ee_whiteboard_help'] = 'Включає всі малюнки та анотації на дошці в шарі наскрізного шифрування для повної конфіденційності даних.';

$string['insights_features_is_allow'] = 'Дозволити аналіз сеансу (головний комутатор)';
$string['insights_features_is_allow_help'] = 'Головний перемикач для всіх функцій, керованих даними. Якщо його вимкнути, усі підопції, включаючи транскрипцію, помічника зі штучним інтелектом та звіти про зустрічі, будуть повністю недоступні.';
$string['insights_transcription_features_is_allow'] = 'Дозволити миттєву транскрипцію';
$string['insights_transcription_features_is_allow_help'] = 'Вмикає перетворення мовлення на текст у реальному часі під час сеансу. Це потрібно ввімкнути, щоб працювали транскрипція, переклад або синтез мовлення (TTS).';
$string['insights_transcription_features_is_allow_translation'] = 'Дозволити переклад транскрипції';
$string['insights_transcription_features_is_allow_translation_help'] = 'Дозволяє перекладати живу стенограму різними мовами, підтримуючи іноземних студентів та багатомовне середовище.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Дозволити синтез мовлення (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Увімкнути перетворення тексту на мовлення, що дозволить читати вголос транскрипт у реальному часі для кращої доступності та для учасників із вадами зору.';
$string['insights_chat_translation_features_is_allow'] = 'Дозволити переклад чату';
$string['insights_chat_translation_features_is_allow_help'] = 'Дозволяє перекладати повідомлення чату в режимі реального часу, дозволяючи учасникам миттєво спілкуватися різними мовами.';
$string['insights_ai_features_is_allow'] = 'Дозволити помічника зі штучним інтелектом для зустрічей (головний комутатор зі штучним інтелектом)';
$string['insights_ai_features_is_allow_help'] = 'Головний перемикач для всіх можливостей на базі штучного інтелекту. Якщо його вимкнути, певні функції, такі як чат зі штучним інтелектом та підсумок зустрічі, будуть приховані, навіть якщо активна опція «Огляд сеансу».';
$string['insights_ai_text_chat_features_is_allow'] = 'Дозволити помічника чату зі штучним інтелектом';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Інтегрує помічника зі штучним інтелектом безпосередньо в чат, щоб допомогти відповідати на запитання, пояснювати складні концепції та сприяти груповому обговоренню.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Дозволити підсумок зустрічей за допомогою штучного інтелекту';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Автоматично генерує стислий виклад за допомогою штучного інтелекту після завершення сеансу, виділяючи ключові навчальні моменти, рішення та подальші завдання.';

$string['lock_microphone'] = 'Заблокувати мікрофони';
$string['lock_microphone_help'] = 'За замовчуванням вимикає звук усіх учасників під час входу. Тільки модератори можуть увімкнути звук або надати дозвіл на виступ.';
$string['lock_webcam'] = 'Блокування веб-камер';
$string['lock_webcam_help'] = 'За замовчуванням вимикає камери для всіх учасників. Корисно для економії пропускної здатності або забезпечення конфіденційності студентів.';
$string['lock_screen_sharing'] = 'Спільний доступ до екрана блокування';
$string['lock_screen_sharing_help'] = 'Обмежує спільний доступ до екрана лише для модераторів. Запобігає перериванню учасників власними екранами.';
$string['lock_whiteboard'] = 'Заблокувати білу дошку';
$string['lock_whiteboard_help'] = 'Обмежує інструменти малювання на дошці лише модераторами. Запобігає несанкціонованому додаванню анотацій учасниками.';
$string['lock_shared_notepad'] = 'Заблокувати спільний блокнот';
$string['lock_shared_notepad_help'] = 'Вимикає спільний блокнот для учасників, щоб запобігти написанню не за темою або відволіканню.';
$string['lock_chat'] = 'Заблокувати публічний чат';
$string['lock_chat_help'] = 'Повністю приховує або вимикає публічну область чату для всіх учасників.';
$string['lock_chat_send_message'] = 'Блокування надсилання повідомлень';
$string['lock_chat_send_message_help'] = 'Дозволяє учасникам читати чат, але забороняє їм надсилати будь-які повідомлення.';
$string['lock_chat_file_share'] = 'Блокування спільного доступу до файлів';
$string['lock_chat_file_share_help'] = 'Забороняє учасникам завантажувати або обмінюватися файлами в області чату.';
$string['lock_private_chat'] = 'Заблокувати приватний чат';
$string['lock_private_chat_help'] = 'Вимикає особистий обмін повідомленнями між учасниками. Примітка: Учасники все ще можуть надсилати особисті повідомлення модераторам для отримання допомоги або запитань.';

$string['completion_minutes'] = 'Протокол присутності';
$string['completion_minutes_help'] = 'Вимагати від користувача перебування в сеансі протягом певної кількості хвилин.';
$string['completion_minutes_desc'] = 'Користувач повинен бути присутнім на сеансі щонайменше {$a} хвилин.';
$string['completion_raised_hand'] = 'Піднята рука';
$string['completion_raised_hand_help'] = 'Вимагайте від користувача підняття руки хоча б один раз.';
$string['completion_chat_messages'] = 'Надіслані повідомлення чату';
$string['completion_chat_messages_help'] = 'Вимагати від користувача надіслати принаймні 1 повідомлення в чаті.';
$string['completion_webcam_enabled'] = 'Веб-камера ввімкнена';
$string['completion_webcam_enabled_help'] = 'Вимагати від користувача ввімкнення веб-камери принаймні один раз.';
$string['completion_webcam_duration'] = 'Тривалість увімкнення веб-камери (хвилини)';
$string['completion_webcam_duration_help'] = 'Вимагати від користувача, щоб його веб-камера була ввімкнена протягом певної кількості хвилин.';
$string['completion_webcam_duration_desc'] = 'Користувач повинен мати увімкнену веб-камеру принаймні протягом {$a} хвилин.';
$string['completion_mic_enabled'] = 'Мікрофон увімкнено';
$string['completion_mic_enabled_help'] = 'Вимагати від користувача ввімкнення мікрофона принаймні один раз.';
$string['completion_mic_duration'] = 'Тривалість увімкнення мікрофона (хвилини)';
$string['completion_mic_duration_help'] = 'Вимагати від користувача ввімкнення мікрофона протягом певної кількості хвилин.';
$string['completion_mic_duration_desc'] = 'Користувач повинен мати увімкнений мікрофон принаймні протягом {$a} хвилин.';
$string['completion_talk_duration'] = 'Тривалість розмови (хвилини)';
$string['completion_talk_duration_help'] = 'Вимагати від користувача розмови протягом певної кількості хвилин.';
$string['completion_talk_duration_desc'] = 'Користувач повинен розмовляти щонайменше {$a} хвилин.';
$string['completion_poll_voted'] = 'Проголосував в опитуванні';
$string['completion_poll_voted_help'] = 'Вимагати від користувача голосування хоча б в одному опитуванні.';
$string['completion_whiteboard_annotated'] = 'Зроблено позначки на дошці';
$string['completion_whiteboard_annotated_help'] = 'Вимагати від користувача робити нотатки на дошці.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Зберігає статистику сеансів для користувачів, щоб визначити завершення дій.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'Ідентифікатор користувача.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Дані сеансу у форматі JSON (хвилини, повідомлення чату тощо).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'Час останнього оновлення статистики.';

// view.php
$string['join_session'] = 'Приєднатися до сеансу';
$string['start_session'] = 'Розпочати сеанс';
$string['end_session'] = 'Закінчити сеанс';
$string['participants'] = 'Учасники';
$string['is_recording'] = 'Записується';
$string['is_active'] = 'Активний';
$string['room_info'] = 'Деталі живого сеансу';
$string['participants_info'] = 'Учасники в прямому ефірі';
$string['room_id'] = 'Ідентифікатор кімнати';
$string['creation_time'] = 'Час створення';
$string['name'] = 'Ім\'я';
$string['user_id'] = 'Ідентифікатор користувача';
$string['is_admin'] = 'Адміністратор';
$string['is_presenter'] = 'Доповідач';
$string['joined_at'] = 'Приєднався о';
$string['moderator_not_joined'] = 'Перш ніж ви зможете приєднатися, сеанс має розпочати модератор.';
$string['session_available_from'] = 'Доступно з: {$a}';
$string['session_available_until'] = 'Доступно до: {$a}';
$string['session_not_started_yet'] = 'Ця сесія ще не розпочалася.';
$string['session_ended'] = 'Цей сеанс завершився.';
$string['allow_guest'] = 'Дозволити гостьових користувачів';
$string['allow_guest_help'] = 'Коли цю функцію ввімкнено, створюється безпечне посилання для спільного використання, щоб зовнішні користувачі (наприклад, запрошені викладачі або учасники без облікового запису Moodle) могли приєднатися до сеансу; адміністратор може переглянути та поділитися цим посиланням.';
$string['guest_join_link'] = 'Посилання для гостя';
$string['guest_join_link_help'] = 'Поділіться цим посиланням із зовнішніми учасниками. Це посилання залишатиметься дійсним протягом {$a} годин. Кожне перезавантаження сторінки генеруватиме нове посилання, але раніше надані посилання залишатимуться дійсними до закінчення терміну їхньої початкової дії.';
$string['copy_link'] = 'Копіювати посилання';
$string['link_copied'] = 'Посилання скопійовано в буфер обміну.';
$string['guest_join_title'] = 'Приєднатися до зустрічі як гість';
$string['enter_display_name'] = 'Введіть своє ім\'я для відображення';
$string['join_as_guest'] = 'Приєднатися до зустрічі';
$string['guest_access_denied'] = 'Гостьовий доступ для цієї зустрічі не ввімкнено.';
$string['invalid_guest_token'] = 'Недійсний або термін дії токена приєднання гостя минув.';
$string['guest_link_expired'] = 'Термін дії цього посилання для гостьової реєстрації закінчився.';
$string['error_joining_session'] = 'Сталася помилка під час приєднання до сеансу: {$a}';
$string['already_logged_in'] = 'Ви вже увійшли в Moodle. Ви можете приєднатися до сеансу безпосередньо з цієї сторінки активності.';
$string['total_webcams'] = 'Всього веб-камер';
$string['total_mics'] = 'Всього мікрофонів';
$string['total_screen_shares'] = 'Загальна кількість спільних переглядів екрана';
$string['webcams'] = 'Веб-камери';
$string['mics'] = 'Мікрофони';
$string['screenshares'] = 'Спільні перегляди екрана';

// Events
$string['event_room_started'] = 'Кімната розпочата';
$string['event_room_ended'] = 'Кімната закінчилася';
$string['event_room_created'] = 'Кімнату створено';
$string['event_session_ended'] = 'Сеанс завершено';
$string['event_participant_joined'] = 'Учасник приєднався';
$string['event_participant_left'] = 'Учасник пішов';
$string['event_artifact_created'] = 'Артефакт створено';
$string['event_recording_proceeded'] = 'Запис готовий';
$string['event_plugin_error'] = 'Помилка PlugNmeet';
$string['event_track_published'] = 'Трек опубліковано';
$string['event_track_unpublished'] = 'Відстеження не опубліковане';
$string['event_recording_started'] = 'Запис розпочато';
$string['event_recording_ended'] = 'Запис завершено';
$string['event_rtmp_started'] = 'RTMP-потік розпочато';
$string['event_rtmp_ended'] = 'RTMP-потік завершено';

// Notifications
$string['messageprovider:recording_ready'] = 'Сповіщення про готові записи';
$string['messageprovider:artifact_ready'] = 'Сповіщення про готові артефакти';
$string['recording_ready_notification_subject'] = 'Запис готовий: {$a}';
$string['recording_ready_notification_fullmessage'] = 'Запис сеансу «{$a->roomname}» готовий та оброблений. Ви можете переглянути його тут: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>Запис сесії <strong>"{$a->roomname}"</strong> тепер готовий та оброблений.</p><p><a href="{$a->url}">Натисніть тут, щоб переглянути запис.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Запис готовий для {$a}';
$string['artifact_ready_notification_subject'] = 'Артефакт готовий: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Новий артефакт ({$a->type}) для сеансу "{$a->roomname}" тепер доступний. Ви можете переглянути його тут: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Новий артефакт ({$a->type}) для сеансу <strong>"{$a->roomname}"</strong> тепер доступний.</p><p><a href="{$a->url}">Натисніть тут, щоб переглянути деталі артефакту.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Артефакт готовий для {$a}';

// recordings.php
$string['no_recordings'] = 'Записів не знайдено.';
$string['recording_id'] = 'Ідентифікатор запису';
$string['room_sid'] = 'Ідентифікатор кімнати';
$string['file_size'] = 'Розмір файлу';
$string['created_at'] = 'Створено в';
$string['actions'] = 'Дії';
$string['view'] = 'Переглянути';
$string['play'] = 'Грати';
$string['download'] = 'Завантажити';
$string['delete'] = 'Видалити';
$string['delete_confirm'] = 'Ви впевнені, що хочете це видалити?';
$string['delete_success'] = 'Успішно видалено.';
$string['recording_details'] = 'Деталі запису';
$string['recording_creation_time'] = 'Час створення запису';
$string['room_creation_time'] = 'Час створення сеансу';
$string['back_to_list'] = 'Назад до списку';
$string['browser_not_support_video'] = 'Ваш браузер не підтримує тег відео.';
$string['room_title'] = 'Назва кімнати';
$string['total_participants'] = 'Загальна кількість учасників';
$string['session_started_at'] = 'Сеанс розпочався о';
$string['session_ended_at'] = 'Сеанс завершився о';

// artifacts.php
$string['no_artifacts'] = 'Артефактів не знайдено.';
$string['artifact_id'] = 'Ідентифікатор артефакту';
$string['type'] = 'Тип';
$string['artifact_details'] = 'Деталі артефакту';
$string['no_permission'] = 'У вас немає дозволу на перегляд цієї сторінки.';
$string['token_usage'] = 'Використання токенів';
$string['duration_usage'] = 'Тривалість використання';
$string['character_count_usage'] = 'Використання кількості символів';
$string['estimated_cost'] = 'Орієнтовна вартість';
$string['file_path'] = 'Шлях до файлу';
$string['mime_type'] = 'Тип MIME';
$string['created_at'] = 'Створено в';

// Analytics strings
$string['download_excel_report'] = 'Завантажити звіт Excel';
$string['download_raw_json'] = 'Завантажити необроблені дані';
$string['room_summary'] = 'Огляд кімнати';
$string['users_summary'] = 'Короткий опис користувачів';
$string['see_excel_report'] = 'Див. звіт Excel для отримання детальної інформації';
$string['error_loading_analytics'] = 'Помилка завантаження аналітичних даних: {$a}';
$string['error_generating_excel'] = 'Помилка створення звіту Excel: {$a}';

$string['analytics_room_room_id'] = 'Ідентифікатор кімнати';
$string['analytics_room_room_title'] = 'Назва кімнати';
$string['analytics_room_room_creation'] = 'Час створення кімнати';
$string['analytics_room_room_ended'] = 'Час закінчення кімнати';
$string['analytics_room_room_duration'] = 'Тривалість кімнати';
$string['analytics_room_room_total_users'] = 'Загальна кількість учасників';
$string['analytics_room_enabled_e2ee'] = 'E2EE увімкнено';
$string['analytics_room_recording_status'] = 'Кількість станів запису';
$string['analytics_room_rtmp_status'] = 'Кількість статусів RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Загальне використання служби мовлення';
$string['analytics_room_external_media_player_status'] = 'Кількість станів зовнішнього медіаплеєра';
$string['analytics_room_etherpad_status'] = 'Кількість статусів Etherpad';
$string['analytics_room_external_display_link_status'] = 'Кількість статусів посилань на зовнішній дисплей';
$string['analytics_room_ingress_created'] = 'Кількість створених вхідних даних';
$string['analytics_room_breakout_room'] = 'Кількість кімнат для групових розваг';

$string['analytics_user_name'] = 'Ім\'я';
$string['analytics_user_id'] = 'Ідентифікатор користувача';
$string['analytics_user_ex_id'] = 'Ідентифікатор користувача';
$string['analytics_user_is_admin'] = 'Адміністратор';
$string['analytics_user_duration'] = 'Тривалість';
$string['analytics_user_joined'] = 'Приєднався о';
$string['analytics_user_left'] = 'Ліворуч на';
$string['analytics_user_mic_status'] = 'Зміни стану мікрофона';
$string['analytics_user_mic_muted'] = 'Кількість вимкнених мікрофонів';
$string['analytics_user_mic_duration'] = 'Тривалість увімкнення мікрофона';
$string['analytics_user_talked'] = 'Розмовна кількість';
$string['analytics_user_talked_duration'] = 'Тривалість розмови';
$string['analytics_user_webcam_status'] = 'Зміни стану веб-камери';
$string['analytics_user_webcam_duration'] = 'Тривалість увімкнення веб-камери';
$string['analytics_user_raise_hand'] = 'Підняти кількість рук';
$string['analytics_user_voted_poll'] = 'Кількість голосів в опитуванні';
$string['analytics_user_whiteboard_annotated'] = 'Підрахунок анотацій на білій дошці';
$string['analytics_user_whiteboard_files'] = 'Кількість файлів на білій дошці';
$string['analytics_user_screen_share_status'] = 'Зміни стану спільного доступу до екрана';
$string['analytics_user_speech_services_usage'] = 'Використання послуг мовлення';
$string['analytics_user_public_chat'] = 'Повідомлення публічного чату';
$string['analytics_user_private_chat'] = 'Повідомлення приватного чату';
$string['analytics_user_chat_files'] = 'Спільні файли чату';
$string['analytics_user_interface_invisible'] = 'Невидимий лічильник інтерфейсу';
$string['analytics_user_connection_quality'] = 'Якість з\'єднання';
$string['analytics_user_connection_quality_excellent'] = 'Відмінно';
$string['analytics_user_connection_quality_good'] = 'Добре';
$string['analytics_user_connection_quality_poor'] = 'Бідний';

$string['users_info'] = 'Інформація про користувачів';
$string['polls'] = 'Опитування';
$string['question'] = 'Питання';
$string['options'] = 'Опції';
$string['file_name'] = 'Ім\'я файлу';
$string['checkcompletiontask'] = 'Перевірте завершення plugNmeet';

// attendance.php
$string['attendance_report'] = 'Звіт про відвідуваність';
$string['status'] = 'Статус';
$string['present'] = 'Подарунок';
$string['absent'] = 'Відсутній';
$string['incomplete'] = 'Незавершене';
$string['completed'] = 'Завершено';
$string['minutes_attended'] = 'Протокол присутності';
$string['last_updated'] = 'Останнє оновлення';
$string['mic_duration'] = 'Тривалість увімкнення мікрофона';
$string['webcam_duration'] = 'Тривалість увімкнення веб-камери';
$string['participation_progress'] = 'Прогрес участі';
$string['attendance_duration'] = 'Протокол присутності';
$string['attendance_webcam_status'] = 'Веб-камера ввімкнена';
$string['attendance_mic_status'] = 'Мікрофон увімкнено';
$string['attendance_talked_duration'] = 'Тривалість розмови';
$string['attendance_voted_poll'] = 'Проголосував в опитуванні';
$string['attendance_chat_messages'] = 'Надіслані повідомлення чату';
$string['attendance_raise_hand'] = 'Піднята рука';
$string['attendance_webcam_duration'] = 'Тривалість увімкнення веб-камери';
$string['attendance_mic_duration'] = 'Тривалість увімкнення мікрофона';
$string['attendance_whiteboard_annotated'] = 'Зроблено позначки на білій дошці';
$string['met'] = 'Мет';
$string['required'] = 'Обов\'язково';

// Status codes
$string['status_unknown_status'] = 'Сервер повернув невідомий статус.';
$string['status_success'] = 'Операцію успішно завершено.';
$string['status_permission_denied'] = 'Дозвіл відхилено.';
$string['status_not_found'] = 'Не знайдено {$a}.';
$string['status_conflict'] = 'Цю дію не вдалося завершити через конфлікт (наприклад, кімната вже може існувати).';
$string['status_invalid_token_or_signature'] = 'Токен запиту або підпис недійсний.';
$string['status_invalid_api_key'] = 'Наданий ключ API недійсний. Перевірте налаштування плагіна.';
$string['status_internal_server_error'] = 'На сервері PlugNmeet сталася внутрішня помилка.';
$string['status_invalid_parameters'] = 'Надана інформація недійсна.';
$string['status_missing_required_parameter'] = 'Деяка необхідна інформація відсутня.';
$string['status_room_not_found'] = 'Вказану кімнату не знайдено.';
$string['status_user_not_found'] = 'Обліковий запис користувача не знайдено. Переконайтеся, що ваші облікові дані API правильні, а ваша підписка активна.';
$string['status_user_blocked'] = 'Обліковий запис користувача заблоковано. Зверніться до служби підтримки.';
$string['status_user_not_active'] = 'Обліковий запис користувача неактивний. Ймовірно, це пов’язано з неактивною або закінченою підпискою.';
