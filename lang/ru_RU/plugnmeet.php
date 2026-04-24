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
$string['modulename_help'] = 'Модуль PlugNmeet позволяет создавать и управлять сеансами веб-конференций в режиме реального времени непосредственно в Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'администрирование plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Добавить новое действие PlugNmeet';
$string['plugnmeet:deleteartifacts'] = 'Удалить артефакты';
$string['plugnmeet:deleterecording'] = 'Удалить записи';
$string['plugnmeet:downloadanalyticsreport'] = 'Скачать аналитический отчет';
$string['plugnmeet:downloadartifacts'] = 'Скачать артефакты';
$string['plugnmeet:downloadattendance'] = 'Скачать отчет о посещаемости';
$string['plugnmeet:downloadrecordings'] = 'Скачать записи';
$string['plugnmeet:manage'] = 'Управление настройками PlugNmeet';
$string['plugnmeet:view'] = 'Просмотреть активность PlugNmeet';
$string['plugnmeet:viewactiveroomsreport'] = 'Просмотреть отчет об активных комнатах';
$string['plugnmeet:viewartifacts'] = 'Просмотреть артефакты';
$string['plugnmeet:viewattendance'] = 'Просмотреть отчет о посещаемости';
$string['plugnmeet:viewattendancelist'] = 'Просмотреть список присутствующих';
$string['plugnmeet:viewlivesessioninfo'] = 'Просмотреть информацию о сессии в режиме реального времени';
$string['plugnmeet:viewrecordings'] = 'Просмотреть записи';
$string['plugnmeetfieldset'] = 'Пример пользовательского набора полей';
$string['plugnmeetname'] = 'Пример пользовательского имени';
$string['plugnmeetname_help'] = 'Пример пользовательской справки';

// Admin Settings
$string['api_config'] = 'Конфигурация API';
$string['server_url'] = 'URL-адрес сервера PlugNmeet';
$string['server_url_desc'] = 'Базовый URL вашего сервера PlugNmeet (например, https://pnm.example.com).';
$string['api_key'] = 'Ключ API';
$string['api_key_desc'] = 'Уникальный API-ключ, предоставленный вашим сервером PlugNmeet.';
$string['api_secret'] = 'Секретный ключ API';
$string['api_secret_desc'] = 'Секретный ключ API, предоставленный вашим сервером PlugNmeet, используется для безопасной аутентификации.';
$string['guest_access_hdr'] = 'Настройки гостевого доступа';
$string['allow_guest_global'] = 'Предоставьте гостевой доступ по всему миру.';
$string['allow_guest_global_desc'] = 'Выступает в качестве главного переключателя. Если он отключен, преподаватели не увидят возможность включения гостевого доступа при создании или редактировании заданий.';
$string['guest_link_expiration'] = 'Срок действия гостевой ссылки (в часах)';
$string['guest_link_expiration_desc'] = 'Определяет, сколько часов ссылка для гостевого доступа остаётся активной после того, как её сгенерирует преподаватель.';
$string['defaults'] = 'Технические настройки';
$string['defaults_desc'] = 'Технические настройки по умолчанию применяются к каждой новой сессии PlugNmeet.';
$string['enable_dynacast'] = 'Включить Dynacast';
$string['enable_dynacast_des'] = 'Оптимизирует производительность за счет динамической приостановки видеослоев, которые не просматриваются участниками. Это значительно снижает нагрузку на ЦП и пропускную способность сервера. **Примечание:** Эта функция будет автоматически включена при использовании кодеков SVC (VP9/AV1) и необходима для одновременной трансляции с использованием нескольких кодеков.';
$string['enable_simulcast'] = 'Включить одновременную трансляцию';
$string['enable_simulcast_des'] = 'Обеспечивает многоуровневую передачу видео с разным качеством, гарантируя плавную работу для пользователей со слабым интернет-соединением.';
$string['video_codec'] = 'Видеокодек';
$string['video_codec_des'] = 'Стандарт кодирования для передачи видео. **VP8** рекомендуется для WebRTC, поскольку он обеспечивает наилучший баланс качества и низкой задержки. **Предупреждение:** Не все браузеры поддерживают все кодеки; убедитесь, что ваши пользователи используют современные браузеры, если вы используете VP9 или H.265.';
$string['default_webcam_resolution'] = 'Разрешение веб-камеры по умолчанию';
$string['default_webcam_resolution_des'] = 'Начальное разрешение камер участников.';
$string['default_screen_share_resolution'] = 'Разрешение экрана по умолчанию';
$string['default_screen_share_resolution_des'] = 'Начальное разрешение для демонстрации экрана.';
$string['default_audio_preset'] = 'Предварительные настройки звука по умолчанию';
$string['default_audio_preset_des'] = 'Профиль качества звука, оптимизированный для данной сессии.';

$string['branding'] = 'Брендинг и персонализация';
$string['custom_logo'] = 'Пользовательский логотип';
$string['custom_logo_des'] = 'Загрузите свой логотип в конференц-зал. Если поле оставить пустым, будет использоваться логотип PlugNmeet по умолчанию.';
$string['custom_css_url'] = 'Пользовательский CSS URL';
$string['custom_css_url_des'] = 'Подключите внешний CSS-файл, чтобы переопределить или настроить стили интерфейса.';
$string['primary_color'] = 'Основной цвет';
$string['primary_color_des'] = 'Основной акцентный цвет используется для кнопок, активных состояний и выделений.';
$string['secondary_color'] = 'Вторичный цвет';
$string['secondary_color_des'] = 'Акцентный цвет, используемый для второстепенных элементов пользовательского интерфейса.';
$string['background_color'] = 'Цвет фона';
$string['background_color_des'] = 'Основной цвет фона интерфейса.';
$string['background_image'] = 'Фоновое изображение';
$string['background_image_des'] = 'Фоновое изображение. Для достижения наилучших результатов используйте изображение с разрешением 1920x1080.';
$string['header_color'] = 'Цвет заголовка';
$string['header_color_des'] = 'Цвет фона для верхней панели навигации.';
$string['footer_color'] = 'Цвет нижнего колонтитула';
$string['footer_color_des'] = 'Цвет фона для нижней панели инструментов.';
$string['left_color'] = 'Цвет левой стороны';
$string['left_color_des'] = 'Цвет фона для боковой панели навигации слева.';
$string['side_panel_bg_color'] = 'цвет фона боковой панели';
$string['side_panel_bg_color_des'] = 'Цвет фона для панелей справа (Чат и Список участников).';
$string['copyright_text'] = 'Текст, защищенный авторским правом';
$string['copyright_text_des'] = 'Фирменный текст отображается в нижнем колонтитуле настроек. HTML поддерживается для ссылок или пользовательского оформления.';
$string['client_load'] = 'Метод загрузки клиента';
$string['client_load_des'] = 'Выберите **Удаленный** (рекомендуется) для бесшовного фирменного оформления, встроенного непосредственно в вашу страницу Moodle. Выберите **Перенаправление**, чтобы использовать интерфейс PlugNmeet по умолчанию; обратите внимание, что пользователи покинут ваш сайт, и фирменное оформление может не применяться.';
$string['remote'] = 'Удаленный (встроенный)';
$string['redirect'] = 'Перенаправление на сервер';

$string['yes'] = 'Да';
$string['no'] = 'Нет';
$string['recordings'] = "Записи";
$string['recording'] = "Запись";
$string['artifacts'] = "Предметы интерьера комнаты";
$string['attendance'] = "Отчет о посещаемости";
$string['artifact'] = "Артефакт";
$string['room_subject'] = 'комната';
$string['user_subject'] = 'пользователь';
$string['activeroomsreport'] = 'Отчет об активных комнатах';
$string['noactiverooms'] = 'В данный момент свободных номеров нет.';
$string['activerooms'] = 'Активные комнаты';
$string['loading'] = 'Загрузка...';

// mod_form.php
$string['roomtitle'] = 'Название комнаты';
$string['roomtitle_help'] = 'Название, используемое для активности в Moodle и заголовка онлайн-встречи. Оно помогает студентам идентифицировать сессию в рамках своего курса и внутри аудитории.';
$string['welcome_message'] = 'Приветственное сообщение';
$string['welcome_message_help'] = 'Любой текст, введенный здесь, будет отображаться в качестве первого сообщения в общем чате при присоединении пользователей к комнате. Это полезно для обмена инструкциями, ссылками или важной информацией с участниками при их входе.';
$string['max_participants'] = 'Максимальное количество участников';
$string['max_participants_help'] = 'Установите это значение, чтобы ограничить количество пользователей, которые могут одновременно присоединиться к сессии. Установите значение 0, чтобы разрешить неограниченное количество участников, то есть ограничений по количеству пользователей нет.';
$string['room_features'] = 'Особенности номера';
$string['recording_features'] = 'Функции записи';
$string['chat_features'] = 'Функции чата';
$string['other_features'] = 'Другие функции';
$string['e2ee_features'] = 'Сквозное шифрование';
$string['insights_features'] = 'Аналитические данные и функции искусственного интеллекта';
$string['defaultlock'] = 'Настройки блокировки по умолчанию';
$string['advanced_completion'] = 'Расширенное завершение';
$string['available'] = 'Доступно с';
$string['available_help'] = 'Определяет, когда участники смогут начать присоединяться к сессии. Пользователи не смогут войти в комнату до указанной даты и времени.';
$string['deadline'] = 'Доступно до';
$string['deadline_help'] = 'Определяет последнюю дату и время, когда участники смогут получить доступ к сессии. Доступ будет заблокирован по истечении этого срока.';
$string['err_deadline_before_available'] = 'Дата «Доступно до» не может быть раньше даты «Доступно с».';
$string['error_analytics_required_for_completion'] = 'Если заданы какие-либо критерии завершения, необходимо включить аналитику.';

$string['allow_webcams'] = 'Разрешить использование веб-камер';
$string['allow_webcams_help'] = 'Разрешите участникам использовать свои веб-камеры.';
$string['mute_on_start'] = 'Отключение звука при запуске';
$string['mute_on_start_help'] = 'Автоматически отключать звук у всех участников при их подключении к сессии.';
$string['allow_screen_share'] = 'Разрешить демонстрацию экрана';
$string['allow_screen_share_help'] = 'Разрешите участникам демонстрировать свой экран.';
$string['allow_rtmp'] = 'Разрешить потоковую передачу RTMP';
$string['allow_rtmp_help'] = 'Позволяет модераторам транслировать прямую трансляцию на внешние платформы, такие как YouTube, Facebook или Twitch. Идеально подходит для публичных вебинаров или гостевых лекций.';
$string['allow_raise_hand'] = 'Разрешите поднять руку';
$string['allow_raise_hand_help'] = 'Разрешите участникам поднять руку.';
$string['admin_only_webcams'] = 'Веб-камеры только для администраторов';
$string['admin_only_webcams_help'] = 'Разрешайте использовать веб-камеры только модераторам.';
$string['allow_view_other_webcams'] = 'Разрешить просмотр других веб-камер';
$string['allow_view_other_webcams_help'] = 'Разрешите участникам просматривать веб-камеры других участников. Если эта функция отключена, они будут видеть только веб-камеры модераторов.';
$string['allow_view_other_users_list'] = 'Разрешить просмотр списка других пользователей';
$string['allow_view_other_users_list_help'] = 'Разрешите участникам просматривать список других участников.';
$string['room_duration'] = 'Продолжительность пребывания в номере (минуты)';
$string['room_duration_help'] = 'Определяет, как долго комната может оставаться открытой, прежде чем она автоматически закроется. Введите 0, если вы не хотите устанавливать ограничение по времени, позволяя комнате оставаться активной без ограничений.';
$string['moderator_join_first'] = 'Модератор Присоединиться первым';
$string['moderator_join_first_help'] = 'При включении этой опции сессия не начнётся, и никто не сможет присоединиться, пока не присоединится модератор (например, преподаватель). Участники останутся на странице активности Moodle и не смогут войти в комнату или зону ожидания. Это отличается от опции «Зал ожидания», где пользователи могут присоединиться и ждать.';
$string['enable_analytics'] = 'Включить аналитику';
$string['enable_analytics_help'] = 'Отслеживает данные об участии и вовлеченности в ходе сессии. **Примечание:** Эту функцию необходимо включить, если заданы какие-либо критерии завершения.';
$string['allow_virtual_bg'] = 'Разрешить использование виртуальных фонов';
$string['allow_virtual_bg_help'] = 'Позволяет участникам размыть фон или использовать виртуальное изображение. Отлично подходит для обеспечения конфиденциальности учащихся и создания профессионального вида в классе.';
$string['auto_gen_user_id'] = 'Автоматическая генерация идентификатора пользователя';
$string['auto_gen_user_id_help'] = 'При включении этой функции система создает новый идентификатор, чтобы один и тот же пользователь мог подключаться с нескольких устройств — например, когда преподаватель подключается с планшета, чтобы рисовать на доске, используя при этом ПК для камеры и микрофона; однако <b>рекомендуется</b> отключить эту функцию, чтобы использовался идентификатор пользователя Moodle и предотвращались повторные подключения.';

$string['allow_recording'] = 'Разрешить запись (главный переключатель)';
$string['allow_recording_help'] = 'Главный переключатель для всех функций записи. Если он отключен, параметры облачной и локальной записи будут скрыты от модераторов.';
$string['allow_cloud_recording'] = 'Разрешить облачную запись';
$string['allow_cloud_recording_help'] = 'Позволяет вести запись на сервере PlugNmeet. Итоговое видео обрабатывается и сохраняется в облаке, что позволяет легко поделиться им по ссылке после завершения сессии.';
$string['enable_auto_cloud_recording'] = 'Включить автоматическую запись в облако';
$string['enable_auto_cloud_recording_help'] = 'Автоматически запускает запись в облако в момент подключения первого модератора к сессии. Идеально подходит для того, чтобы ни одна лекция не была пропущена.';
$string['allow_local_recording'] = 'Разрешить локальную запись';
$string['allow_local_recording_help'] = 'Позволяет записывать звук непосредственно на компьютер. **Примечание:** Требуется Google Chrome. Чтобы записать весь звук сессии, пользователь должен предоставить доступ к своей вкладке Chrome и установить флажок «Также делиться звуком с вкладки». После завершения файл сохраняется локально на устройстве.';

$string['allow_chat'] = 'Разрешить чат (глобальный главный переключатель)';
$string['allow_chat_help'] = 'Главный переключатель для всех функций чата. Если он отключен, вся область чата становится недоступна для всех, включая модераторов. Публичный или приватный чат будет невозможен.';
$string['allow_file_upload'] = 'Разрешить загрузку файлов';
$string['allow_file_upload_help'] = 'Позволяет обмениваться файлами в чате. Для этого необходимо активировать главный переключатель "Разрешить чат".';

$string['allow_shared_notepad'] = 'Разрешить общий доступ к блокноту';
$string['allow_shared_notepad_help'] = 'Предоставляет возможность совместного редактирования текста, где студенты и преподаватели могут делать заметки в режиме реального времени. Это идеально подходит для мозгового штурма, совместного написания или создания общего резюме урока.';

$string['whiteboard_features'] = 'Особенности интерактивной доски';
$string['allow_whiteboard'] = 'Разрешить использование белой доски';
$string['allow_whiteboard_help'] = 'Открывает интерактивное пространство для рисования на время занятия. Используйте его для создания эскизов диаграмм, визуального решения математических задач или для того, чтобы студенты могли делать пометки на опубликованном контенте.';
$string['preload_file'] = 'Предварительная загрузка файла презентации';
$string['preload_file_help'] = 'Позволяет загрузить PDF-файл или документ Office, который будет автоматически загружен на доску при начале занятия. Это гарантирует, что ваши презентационные материалы будут готовы к занятию немедленно. <strong>Максимальный размер файла: 5 Мб</strong>';

$string['allowed_external_media_player'] = 'Разрешить использование внешнего медиаплеера';
$string['allowed_external_media_player_help'] = 'Позволяет модераторам синхронизировать и воспроизводить видео из таких источников, как YouTube или Vimeo, для всего класса. Идеально подходит для анализа образовательных роликов или совместного просмотра документальных фильмов без задержек, связанных с пропускной способностью сети.';

$string['activate_waiting_room'] = 'Активировать зал ожидания';
$string['activate_waiting_room_help'] = 'Включите зал ожидания для этой сессии.';
$string['waiting_room_msg'] = 'Сообщение из зала ожидания';
$string['waiting_room_msg_help'] = 'Это сообщение отображается пользователям, пока они ожидают допуска в комнату. Используйте его, чтобы поделиться инструкциями, ожиданиями или полезной информацией перед началом сеанса.';

$string['allow_breakout_rooms'] = 'Разрешить создание переговорных комнат';
$string['allow_breakout_rooms_help'] = 'Позволяет модераторам разделять участников на небольшие группы для целенаправленных дискуссий, совместных проектов или закрытых групповых мероприятий.';
$string['allowed_number_rooms'] = 'Максимальное количество переговорных комнат';
$string['allowed_number_rooms_help'] = 'Максимальное количество подкомнат, которые модератор может создать в рамках одной сессии.';

$string['allow_display_external_link_features'] = 'Разрешить совместное использование внешних ссылок';
$string['allow_display_external_link_features_help'] = 'Позволяет модераторам отображать внешний образовательный контент — например, задания H5P, пакеты SCORM или системы викторин (например, Kahoot) — непосредственно всем участникам во время сессии.';

$string['allow_ingress_features'] = 'Разрешить входящий трафик (внешнюю потоковую передачу)';
$string['allow_ingress_features_help'] = 'Позволяет преподавателям транслировать высококачественное видео в учебный процесс с помощью внешнего программного обеспечения, такого как OBS, по протоколам RTMP или WHIP. Это идеально подходит для обмена видеоконтентом высокого разрешения, предварительно записанными занятиями или для обхода ограничений браузера на загрузку.';

$string['allow_polls'] = 'Разрешить опросы';
$string['allow_polls_help'] = 'Позволяет модераторам создавать интерактивные опросы и короткие викторины во время занятия. Это отличный способ проверить понимание материала студентами и повысить вовлеченность.';

$string['sip_dial_in_features_is_allow'] = 'Разрешить SIP-подключение';
$string['sip_dial_in_features_is_allow_help'] = 'Позволяет участникам подключаться к аудиосессии по обычному телефонному звонку. Это особенно важно для студентов с плохим интернет-соединением или для тех, кому необходимо подключаться к сессии в дороге.';

$string['enable_end_to_end_encryption_features'] = 'Включить сквозное шифрование (E2EE)';
$string['enable_end_to_end_encryption_features_help'] = 'Обеспечивает максимальную безопасность за счет шифрования видео- и аудиопотоков, так что даже сервер не может получить к ним доступ. Примечание: Некоторые функции, такие как запись на стороне сервера, могут быть ограничены при активации сквозного шифрования (E2EE).';
$string['enabled_self_insert_encryption_key'] = 'Разрешить использование ключей, определяемых участниками.';
$string['enabled_self_insert_encryption_key_help'] = 'Позволяет участникам вручную ввести общий секретный ключ. Это гарантирует, что поставщик услуг никогда не получит доступа к ключам шифрования, обеспечивая высочайший уровень конфиденциальности.';
$string['included_e2ee_chat_messages'] = 'Шифрование сообщений чата';
$string['included_e2ee_chat_messages_help'] = 'Расширяет возможности сквозного шифрования на текстовый чат, гарантируя, что сообщения будут доступны для чтения только участникам комнаты.';
$string['included_e2ee_whiteboard'] = 'Шифрование данных с интерактивной доски';
$string['included_e2ee_whiteboard_help'] = 'Включает все рисунки и аннотации, сделанные на доске, в слой сквозного шифрования для обеспечения полной конфиденциальности данных.';

$string['insights_features_is_allow'] = 'Разрешить анализ сессий (главный переключатель)';
$string['insights_features_is_allow_help'] = 'Главный переключатель для всех функций, работающих с данными. Если он отключен, все дополнительные параметры, включая транскрипцию, ИИ-помощника и отчеты о совещаниях, будут полностью недоступны.';
$string['insights_transcription_features_is_allow'] = 'Разрешить транскрипцию в реальном времени';
$string['insights_transcription_features_is_allow_help'] = 'Включает преобразование речи в текст в режиме реального времени во время сеанса. Эта функция должна быть включена для корректной работы транскрипции, перевода или синтеза речи (TTS).';
$string['insights_transcription_features_is_allow_translation'] = 'Разрешить транскрипцию и перевод';
$string['insights_transcription_features_is_allow_translation_help'] = 'Позволяет переводить стенограмму в режиме реального времени на разные языки, что удобно для иностранных студентов и в многоязычной среде.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Разрешить синтез речи (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Включает функцию преобразования текста в речь, позволяющую зачитывать вслух текст в режиме реального времени для повышения доступности и удобства для участников с нарушениями зрения.';
$string['insights_chat_translation_features_is_allow'] = 'Разрешить перевод чата';
$string['insights_chat_translation_features_is_allow_help'] = 'Обеспечивает перевод сообщений в чате в режиме реального времени, позволяя участникам мгновенно общаться на разных языках.';
$string['insights_ai_features_is_allow'] = 'Разрешить работу ИИ-помощника на совещаниях (ИИ-главного переключателя)';
$string['insights_ai_features_is_allow_help'] = 'Главный переключатель для всех функций, работающих на основе ИИ. Если он отключен, некоторые функции, такие как чат с ИИ и краткое изложение результатов совещаний, будут скрыты, даже если функция «Аналитика сессий» активна.';
$string['insights_ai_text_chat_features_is_allow'] = 'Разрешить чат-помощнику с искусственным интеллектом';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Интегрирует в чат непосредственно ИИ-помощника, который помогает отвечать на вопросы, объяснять сложные концепты и способствует групповому обсуждению.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Разрешить ИИ создавать краткие обзоры совещаний';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'После завершения сессии автоматически генерируется краткое резюме, созданное с помощью ИИ, в котором выделяются ключевые моменты обучения, принятые решения и дальнейшие задачи.';

$string['lock_microphone'] = 'Блокировка микрофонов';
$string['lock_microphone_help'] = 'При входе в систему все участники автоматически отключаются. Включить звук или разрешить говорить могут только модераторы.';
$string['lock_webcam'] = 'Блокировка веб-камер';
$string['lock_webcam_help'] = 'По умолчанию отключает камеры для всех участников. Полезно для экономии трафика или обеспечения конфиденциальности учащихся.';
$string['lock_screen_sharing'] = 'Совместное использование экрана блокировки';
$string['lock_screen_sharing_help'] = 'Ограничивает доступ к демонстрации экрана только для модераторов. Предотвращает прерывание участниками обсуждения использованием собственных экранов.';
$string['lock_whiteboard'] = 'Заблокировать доску';
$string['lock_whiteboard_help'] = 'Ограничение доступа к инструментам рисования на доске только для модераторов. Предотвращает несанкционированные аннотации со стороны участников.';
$string['lock_shared_notepad'] = 'Заблокировать общий блокнот';
$string['lock_shared_notepad_help'] = 'Отключает общий блокнот для участников, чтобы предотвратить написание сообщений не по теме или отвлечение внимания.';
$string['lock_chat'] = 'Заблокировать публичный чат';
$string['lock_chat_help'] = 'Полностью скрывает или отключает публичный чат для всех участников.';
$string['lock_chat_send_message'] = 'Блокировка отправки сообщений';
$string['lock_chat_send_message_help'] = 'Позволяет участникам читать чат, но не позволяет отправлять сообщения.';
$string['lock_chat_file_share'] = 'Блокировка общего доступа к файлам';
$string['lock_chat_file_share_help'] = 'Запрещает участникам загружать или обмениваться файлами в чате.';
$string['lock_private_chat'] = 'Заблокировать приватный чат';
$string['lock_private_chat_help'] = 'Отключает личные сообщения между участниками. Примечание: Участники по-прежнему могут отправлять личные сообщения модераторам для получения помощи или ответов на вопросы.';

$string['completion_minutes'] = 'Протокол заседания';
$string['completion_minutes_help'] = 'Необходимо, чтобы пользователь находился в сессии определенное количество минут.';
$string['completion_minutes_desc'] = 'Пользователь должен присутствовать на сессии не менее {$a} минут.';
$string['completion_raised_hand'] = 'Поднятая рука';
$string['completion_raised_hand_help'] = 'Попросите пользователя поднять руку хотя бы один раз.';
$string['completion_chat_messages'] = 'Сообщения в чате отправлены';
$string['completion_chat_messages_help'] = 'Попросите пользователя отправить хотя бы одно сообщение в чате.';
$string['completion_webcam_enabled'] = 'Веб-камера включена';
$string['completion_webcam_enabled_help'] = 'Попросите пользователя включить веб-камеру хотя бы один раз.';
$string['completion_webcam_duration'] = 'Продолжительность работы веб-камеры (в минутах)';
$string['completion_webcam_duration_help'] = 'Попросите пользователя оставить веб-камеру включенной на определенное количество минут.';
$string['completion_webcam_duration_desc'] = 'Пользователь должен держать веб-камеру включенной не менее {$a} минут.';
$string['completion_mic_enabled'] = 'Микрофон включен';
$string['completion_mic_enabled_help'] = 'Требуйте от пользователя хотя бы один раз включить микрофон.';
$string['completion_mic_duration'] = 'Продолжительность работы микрофона (минуты)';
$string['completion_mic_duration_help'] = 'Попросите пользователя оставить микрофон включенным на определенное количество минут.';
$string['completion_mic_duration_desc'] = 'Пользователь должен держать микрофон включенным не менее {$a} минут.';
$string['completion_talk_duration'] = 'Продолжительность разговора (в минутах)';
$string['completion_talk_duration_help'] = 'Попросите пользователя говорить определенное количество минут.';
$string['completion_talk_duration_desc'] = 'Пользователь должен говорить не менее {$a} минут.';
$string['completion_poll_voted'] = 'Проголосовал в опросе';
$string['completion_poll_voted_help'] = 'Необходимо обязать пользователя проголосовать хотя бы в одном опросе.';
$string['completion_whiteboard_annotated'] = 'Пометки на белой доске';
$string['completion_whiteboard_annotated_help'] = 'Попросите пользователя делать пометки на доске.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Сохраняет статистику сеансов для определения завершения действий пользователями.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'Идентификатор пользователя.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Данные сессии в формате JSON (минуты, сообщения чата и т. д.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'Время последнего обновления статистических данных.';

// view.php
$string['join_session'] = 'Присоединиться к сессии';
$string['start_session'] = 'Начать сессию';
$string['end_session'] = 'Завершение сессии';
$string['participants'] = 'Участники';
$string['is_recording'] = 'Ведется запись';
$string['is_active'] = 'Активен';
$string['room_info'] = 'Подробности прямой трансляции';
$string['participants_info'] = 'Участники в режиме реального времени';
$string['room_id'] = 'Идентификатор комнаты';
$string['creation_time'] = 'Время сотворения';
$string['name'] = 'Имя';
$string['user_id'] = 'ID пользователя';
$string['is_admin'] = 'Является ли администратором?';
$string['is_presenter'] = 'Ведущий';
$string['joined_at'] = 'Присоединился в';
$string['moderator_not_joined'] = 'Перед тем как вы сможете присоединиться к сессии, её должен запустить модератор.';
$string['session_available_from'] = 'Доступно по адресу: {$a}';
$string['session_available_until'] = 'Доступно до: {$a}';
$string['session_not_started_yet'] = 'Эта сессия ещё не началась.';
$string['session_ended'] = 'Данная сессия завершилась.';
$string['allow_guest'] = 'Разрешить гостевым пользователям';
$string['allow_guest_help'] = 'При включении этой функции генерируется защищенная ссылка для общего доступа, позволяющая внешним пользователям (например, приглашенным преподавателям или участникам без учетной записи Moodle) присоединиться к сессии; администратор может просмотреть и поделиться этой ссылкой.';
$string['guest_join_link'] = 'Ссылка для присоединения гостя';
$string['guest_join_link_help'] = 'Поделитесь этой ссылкой с внешними участниками. Эта ссылка будет действительна в течение {$a} часов. При каждой перезагрузке страницы будет генерироваться новая ссылка, но ранее предоставленные ссылки останутся действительными до истечения срока их первоначального действия.';
$string['copy_link'] = 'Скопировать ссылку';
$string['link_copied'] = 'Ссылка скопирована в буфер обмена.';
$string['guest_join_title'] = 'Присоединиться к встрече в качестве гостя';
$string['enter_display_name'] = 'Введите ваше отображаемое имя';
$string['join_as_guest'] = 'Присоединиться к встрече';
$string['guest_access_denied'] = 'Доступ для гостей к этой встрече отключен.';
$string['invalid_guest_token'] = 'Недействительный или просроченный гостевой токен для присоединения.';
$string['guest_link_expired'] = 'Срок действия этой гостевой ссылки истек.';
$string['error_joining_session'] = 'Произошла ошибка при подключении к сессии: {$a}';
$string['already_logged_in'] = 'Вы уже вошли в Moodle. Вы можете присоединиться к сессии непосредственно со страницы этого мероприятия.';
$string['total_webcams'] = 'Всего веб-камер';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Общее количество показов экрана';
$string['webcams'] = 'Веб-камеры';
$string['mics'] = 'Микрофоны';
$string['screenshares'] = 'Демонстрация экрана';

// Events
$string['event_room_started'] = 'Комната начала';
$string['event_room_ended'] = 'Комната закончилась';
$string['event_room_created'] = 'Комната создана';
$string['event_session_ended'] = 'Заседание завершилось';
$string['event_participant_joined'] = 'Участник присоединился';
$string['event_participant_left'] = 'Участник слева';
$string['event_artifact_created'] = 'Артефакт создан';
$string['event_recording_proceeded'] = 'Запись готова';
$string['event_plugin_error'] = 'Ошибка PlugNmeet';
$string['event_track_published'] = 'Опубликован трек';
$string['event_track_unpublished'] = 'Неопубликованный трек';
$string['event_recording_started'] = 'Началась запись';
$string['event_recording_ended'] = 'Запись завершена';
$string['event_rtmp_started'] = 'Начался RTMP-поток';
$string['event_rtmp_ended'] = 'RTMP-поток завершился.';

// Notifications
$string['messageprovider:recording_ready'] = 'Уведомления о готовности записей';
$string['messageprovider:artifact_ready'] = 'Уведомления о готовности артефактов';
$string['recording_ready_notification_subject'] = 'Запись готова: {$a}';
$string['recording_ready_notification_fullmessage'] = 'Запись сессии "{$a->roomname}" готова и обработана. Вы можете посмотреть её здесь: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>Запись сессии <strong>"{$a->roomname}"</strong> готова и обработана.</p><p><a href="{$a->url}">Нажмите здесь, чтобы посмотреть запись.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Запись готова к {$a}';
$string['artifact_ready_notification_subject'] = 'Артефакт готов: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Для сессии "{$a->roomname}" теперь доступен новый артефакт ({$a->type}). Вы можете посмотреть его здесь: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Новый артефакт ({$a->type}) для сессии <strong>"{$a->roomname}"</strong> теперь доступен.</p><p><a href="{$a->url}">Нажмите здесь, чтобы просмотреть подробную информацию об артефакте.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Артефакт готов для {$a}';

// recordings.php
$string['no_recordings'] = 'Записи не найдены.';
$string['recording_id'] = 'Идентификатор записи';
$string['room_sid'] = 'Комната SID';
$string['file_size'] = 'Размер файла';
$string['created_at'] = 'Создано в';
$string['actions'] = 'Действия';
$string['view'] = 'Вид';
$string['play'] = 'Играть';
$string['download'] = 'Скачать';
$string['delete'] = 'Удалить';
$string['delete_confirm'] = 'Вы уверены, что хотите это удалить?';
$string['delete_success'] = 'Успешно удалено.';
$string['recording_details'] = 'Подробности записи';
$string['recording_creation_time'] = 'Время создания записи';
$string['room_creation_time'] = 'Время создания сессии';
$string['back_to_list'] = 'Вернуться к списку';
$string['browser_not_support_video'] = 'Ваш браузер не поддерживает тег video.';
$string['room_title'] = 'Название комнаты';
$string['total_participants'] = 'Общее количество участников';
$string['session_started_at'] = 'Начало сессии:';
$string['session_ended_at'] = 'Заседание завершилось в';

// artifacts.php
$string['no_artifacts'] = 'Артефакты не обнаружены.';
$string['artifact_id'] = 'Идентификатор артефакта';
$string['type'] = 'Тип';
$string['artifact_details'] = 'Подробная информация об артефакте';
$string['no_permission'] = 'У вас нет разрешения на просмотр этой страницы.';
$string['token_usage'] = 'Использование токенов';
$string['duration_usage'] = 'Продолжительность использования';
$string['character_count_usage'] = 'Использование количества символов';
$string['estimated_cost'] = 'Ориентировочная стоимость';
$string['file_path'] = 'Путь к файлу';
$string['mime_type'] = 'Тип MIME';
$string['created_at'] = 'Создано в';

// Analytics strings
$string['download_excel_report'] = 'Скачать отчет в формате Excel';
$string['download_raw_json'] = 'Скачать исходные данные';
$string['room_summary'] = 'Краткое описание номера';
$string['users_summary'] = 'Сводка по пользователям';
$string['see_excel_report'] = 'Подробности см. в отчете Excel.';
$string['error_loading_analytics'] = 'Ошибка загрузки аналитических данных: {$a}';
$string['error_generating_excel'] = 'Ошибка при создании отчета Excel: {$a}';

$string['analytics_room_room_id'] = 'Идентификатор комнаты';
$string['analytics_room_room_title'] = 'Название комнаты';
$string['analytics_room_room_creation'] = 'Время создания комнаты';
$string['analytics_room_room_ended'] = 'Время окончания работы комнаты';
$string['analytics_room_room_duration'] = 'Продолжительность пребывания в номере';
$string['analytics_room_room_total_users'] = 'Общее количество участников';
$string['analytics_room_enabled_e2ee'] = 'Поддержка сквозного шифрования (E2EE)';
$string['analytics_room_recording_status'] = 'Статус записи Количество';
$string['analytics_room_rtmp_status'] = 'Количество статусов RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Общее использование речевых сервисов';
$string['analytics_room_external_media_player_status'] = 'Количество статусов внешних медиаплееров';
$string['analytics_room_etherpad_status'] = 'Количество статусов Etherpad';
$string['analytics_room_external_display_link_status'] = 'Количество статусов внешних ссылок на дисплей';
$string['analytics_room_ingress_created'] = 'Количество созданных объектов Ingress';
$string['analytics_room_breakout_room'] = 'Количество переговорных комнат';

$string['analytics_user_name'] = 'Имя';
$string['analytics_user_id'] = 'ID пользователя';
$string['analytics_user_ex_id'] = 'ID пользователя';
$string['analytics_user_is_admin'] = 'Является ли администратором?';
$string['analytics_user_duration'] = 'Продолжительность';
$string['analytics_user_joined'] = 'Присоединился в';
$string['analytics_user_left'] = 'Слева';
$string['analytics_user_mic_status'] = 'Изменения состояния микрофона';
$string['analytics_user_mic_muted'] = 'Количество отключенных микрофонов';
$string['analytics_user_mic_duration'] = 'Продолжительность с включенным микрофоном';
$string['analytics_user_talked'] = 'Количество обсуждений';
$string['analytics_user_talked_duration'] = 'Продолжительность разговора';
$string['analytics_user_webcam_status'] = 'Изменения состояния веб-камеры';
$string['analytics_user_webcam_duration'] = 'Продолжительность с включенной веб-камерой';
$string['analytics_user_raise_hand'] = 'Поднимите руку, чтобы посчитать';
$string['analytics_user_voted_poll'] = 'Подсчет голосов';
$string['analytics_user_whiteboard_annotated'] = 'Подсчет пометок на белой доске';
$string['analytics_user_whiteboard_files'] = 'Количество файлов на доске';
$string['analytics_user_screen_share_status'] = 'Изменения статуса демонстрации экрана';
$string['analytics_user_speech_services_usage'] = 'Использование речевых сервисов';
$string['analytics_user_public_chat'] = 'Сообщения в публичном чате';
$string['analytics_user_private_chat'] = 'Личные сообщения в чате';
$string['analytics_user_chat_files'] = 'Файлы чата, которыми поделились';
$string['analytics_user_interface_invisible'] = 'Невидимый счетчик интерфейса';
$string['analytics_user_connection_quality'] = 'Качество соединения';
$string['analytics_user_connection_quality_excellent'] = 'Отличный';
$string['analytics_user_connection_quality_good'] = 'Хороший';
$string['analytics_user_connection_quality_poor'] = 'Бедный';

$string['users_info'] = 'Информация о пользователях';
$string['polls'] = 'Опросы';
$string['question'] = 'Вопрос';
$string['options'] = 'Параметры';
$string['file_name'] = 'Имя файла';
$string['checkcompletiontask'] = 'Проверьте завершение работы plugNmeet';

// attendance.php
$string['attendance_report'] = 'Отчет о посещаемости';
$string['status'] = 'Статус';
$string['present'] = 'Подарок';
$string['absent'] = 'Отсутствующий';
$string['incomplete'] = 'Незавершено';
$string['completed'] = 'Завершенный';
$string['minutes_attended'] = 'Протокол заседания';
$string['last_updated'] = 'Последнее обновление';
$string['mic_duration'] = 'Продолжительность с включенным микрофоном';
$string['webcam_duration'] = 'Продолжительность с включенной веб-камерой';
$string['participation_progress'] = 'Ход участия';
$string['attendance_duration'] = 'Протокол заседания';
$string['attendance_webcam_status'] = 'Веб-камера включена';
$string['attendance_mic_status'] = 'Микрофон включен';
$string['attendance_talked_duration'] = 'Продолжительность разговора';
$string['attendance_voted_poll'] = 'Проголосовал в опросе';
$string['attendance_chat_messages'] = 'Сообщения в чате отправлены';
$string['attendance_raise_hand'] = 'Поднятая рука';
$string['attendance_webcam_duration'] = 'Продолжительность с включенной веб-камерой';
$string['attendance_mic_duration'] = 'Продолжительность с включенным микрофоном';
$string['attendance_whiteboard_annotated'] = 'Пометки на белой доске';
$string['met'] = 'Мет';
$string['required'] = 'Необходимый';

// Status codes
$string['status_unknown_status'] = 'Сервер вернул неизвестный статус.';
$string['status_success'] = 'Операция успешно завершена.';
$string['status_permission_denied'] = 'Доступ запрещен.';
$string['status_not_found'] = '{$a} не найдено.';
$string['status_conflict'] = 'Данное действие не удалось завершить из-за конфликта интересов (например, помещение могло быть уже занято).';
$string['status_invalid_token_or_signature'] = 'Токен запроса или подпись недействительны.';
$string['status_invalid_api_key'] = 'Предоставленный API-ключ недействителен. Пожалуйста, проверьте настройки вашего плагина.';
$string['status_internal_server_error'] = 'Сервер PlugNmeet столкнулся с внутренней ошибкой.';
$string['status_invalid_parameters'] = 'Предоставленная информация недействительна.';
$string['status_missing_required_parameter'] = 'Некоторая необходимая информация отсутствует.';
$string['status_room_not_found'] = 'Указанная комната не найдена.';
$string['status_user_not_found'] = 'Учетная запись пользователя не найдена. Пожалуйста, убедитесь, что ваши учетные данные API верны и ваша подписка активна.';
$string['status_user_blocked'] = 'Учетная запись пользователя заблокирована. Пожалуйста, свяжитесь со службой поддержки.';
$string['status_user_not_active'] = 'Учетная запись пользователя неактивна. Вероятнее всего, это связано с неактивной или истекшей подпиской.';
