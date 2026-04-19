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
$string['modulename_help'] = 'Модуль активности PlugNmeet позволяет создавать и управлять сессиями веб-конференций в реальном времени внутри Moodle.';
$string['modulename_link'] = 'mod/plugnmeet/view';
$string['modulenameplural'] = 'plugNmeets';
$string['pluginadministration'] = 'Администрирование plugNmeet';
$string['pluginname'] = 'plugNmeet';
$string['plugnmeet:addinstance'] = 'Добавить новую активность PlugNmeet';
$string['plugnmeet:deleterecording'] = 'Удалить записи';
$string['plugnmeet:manage'] = 'Управление настройками PlugNmeet';
$string['plugnmeet:view'] = 'Просмотр активности PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Просмотр артефактов';
$string['plugnmeet:viewlivesessioninfo'] = 'Просмотр информации о живых сессиях';
$string['plugnmeetfieldset'] = 'Пользовательский набор примеров поля';
$string['plugnmeetname'] = 'Пользовательское имя';
$string['plugnmeetname_help'] = 'Помощь с пользовательским примером';

// Admin Settings
$string['api_config'] = 'Конфигурация API';
$string['server_url'] = 'URL сервера PlugNmeet';
$string['server_url_desc'] = 'Базовый URL вашего сервера PlugNmeet (например, https://pnm.example.com)';
$string['api_key'] = 'Ключ API';
$string['api_key_desc'] = 'Ключ API, предоставляемый вашим сервером PlugNmeet.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'Секрет API, предоставляемый вашим сервером PlugNmeet.';
$string['guest_access_hdr'] = 'Настройки доступа для гостей';
$string['allow_guest_global'] = 'Разрешить гостям доступ по всему миру';
$string['allow_guest_global_desc'] = 'Если он отключён, гостевое присоединение нельзя включить ни в одной конференц-комнате.';
$string['guest_link_expiration'] = 'Срок действия гостевой ссылки (часы)';
$string['guest_link_expiration_desc'] = 'Как долго ссылка на гостевое присоединение остаётся действительной после генерации.';

$string['defaults'] = 'Технические дефолты';
$string['defaults_desc'] = 'Технические настройки по умолчанию для новых сессий PlugNmeet.';
$string['enable_dynacast'] = 'Включить Dynacast';
$string['enable_dynacast_des'] = 'Используйте Dynacast для оптимизации видеопотоков, публикуя только самого активного спикера.';
$string['enable_simulcast'] = 'Включить симультанную трансляцию';
$string['enable_simulcast_des'] = 'Используйте Simulcast, чтобы предоставить зрителям несколько слоёв качества видео.';
$string['video_codec'] = 'Видеокодек';
$string['video_codec_des'] = 'Стандартный видеокодек для сессий.';
$string['default_webcam_resolution'] = 'Стандартное разрешение веб-камеры';
$string['default_webcam_resolution_des'] = 'Стандартное разрешение для веб-камер.';
$string['default_screen_share_resolution'] = 'Стандартное разрешение для совместного использования экрана';
$string['default_screen_share_resolution_des'] = 'Стандартное разрешение для совместного использования экрана.';
$string['default_audio_preset'] = 'Стандартный аудиопресет';
$string['default_audio_preset_des'] = 'Стандартный аудиопресет для сессий.';

$string['branding'] = 'Брендинг и кастомизация';
$string['custom_logo'] = 'Индивидуальный логотип';
$string['custom_logo_des'] = 'Загрузите пользовательский логотип для размещения в конференц-зале. Если он пустой, будет использоваться логотип PlugNmeet по умолчанию.';
$string['custom_css_url'] = 'Пользовательский URL-адрес CSS';
$string['custom_css_url_des'] = 'Укажите URL внешнего CSS-файла, чтобы настроить внешний вид и атмосферу переговорной.';
$string['primary_color'] = 'Основной цвет';
$string['primary_color_des'] = 'Основной цвет для пуговиц и светов.';
$string['secondary_color'] = 'Вторичный цвет';
$string['secondary_color_des'] = 'Вторичный цвет для элементов интерфейса.';
$string['background_color'] = 'Цвет фона';
$string['background_color_des'] = 'Цвет фона интерфейса';
$string['background_image'] = 'Фоновое изображение';
$string['background_image_des'] = 'Для достижения наилучшего результата должен быть размер 1920X1080.';
$string['header_color'] = 'Цвет заголовка';
$string['header_color_des'] = 'Цвет заголовка интерфейса';
$string['footer_color'] = 'Цвет нижнего колонтитула';
$string['footer_color_des'] = 'Цвет нижнего колонтитула интерфейса';
$string['left_color'] = 'Цвет левой стороны';
$string['left_color_des'] = 'Цвет левой боковой панели';
$string['side_panel_bg_color'] = 'Цвет фона боковой панели';
$string['side_panel_bg_color_des'] = 'Цвет фона правой стороны панели';
$string['copyright_text'] = 'Текст авторских прав';
$string['copyright_text_des'] = 'Текст авторских прав для размещения в подножии зала для совещаний. HTML разрешен.';
$string['client_load'] = 'Клиентская нагрузка от';
$string['client_load_des'] = 'по умолчанию: локальное';
$string['remote'] = 'Удалённый';
$string['local'] = 'Местный';

$string['client_side'] = 'Варианты на стороне клиента';
$string['client_load_mode'] = 'Режим загрузки клиента';
$string['client_load_mode_desc'] = 'Выбирайте, загружать ли веб-клиент с удалённого сервера или с локальной копии.';
$string['remote'] = 'Удалённое управление';
$string['local'] = 'Местные';
$string['client_download_url'] = 'URL для загрузки клиента';
$string['client_download_url_des'] = 'Если вы используете режим загрузки «Local», уведите URL client.zip файла.';
$string['update_client_btn'] = 'Обновить локальный клиент';
$string['update_client_btn_label'] = 'Обновление сейчас';

$string['yes'] = 'Да';
$string['no'] = 'Нет';
$string['recordings'] = "Записи";
$string['artifacts'] = "Артефакты комнаты";
$string['attendance'] = "Отчёт о посещаемости";
$string['artifact'] = "Артефакт";

// mod_form.php
$string['roomtitle'] = 'Название комнаты';
$string['welcome_message'] = 'Приветственное сообщение';
$string['welcome_message_help'] = 'Any text entered here will appear as the first message in the public chat when users join the room. This is useful for sharing instructions, links, or important information with participants as they enter.';
$string['max_participants'] = 'Участники Max';
$string['max_participants_help'] = 'Set this value to limit how many users can join the session at the same time. Set it to 0 to allow unlimited participants, meaning there is no restriction on how many users can join.';
$string['room_features'] = 'Особенности комнаты';
$string['recording_features'] = 'Особенности записи';
$string['chat_features'] = 'Чат-функции';
$string['other_features'] = 'Другие особенности';
$string['e2ee_features'] = 'Сквозное шифрование';
$string['insights_features'] = 'Аналитика и особенности ИИ';
$string['defaultlock'] = 'Настройки замка по умолчанию';
$string['advanced_completion'] = 'Продвинутое завершение';
$string['available'] = 'Доступно от';
$string['deadline'] = 'Доступно до';
$string['err_deadline_before_available'] = 'Дата «Доступно до» не может быть раньше даты «Доступно с».';
$string['error_analytics_required_for_completion'] = 'Необходимо проверить Enable Analytics, если установлены какие-либо критерии завершения.';

$string['allow_webcams'] = 'Разрешить веб-камеры';
$string['allow_webcams_help'] = 'Разрешите участникам использовать свои веб-камеры.';
$string['mute_on_start'] = 'Отключить звук при запуске';
$string['mute_on_start_help'] = 'Автоматически отключайте звук всех участников при присоединении к сессии.';
$string['allow_screen_share'] = 'Разрешить совместное использование экрана';
$string['allow_screen_share_help'] = 'Позвольте участникам делиться своим экраном.';
$string['allow_rtmp'] = 'Разрешить трансляцию RTMP';
$string['allow_rtmp_help'] = 'Разрешить модераторам транслировать сессию на RTMP-конечную точку.';
$string['admin_only_webcams'] = 'Веб-камеры только для администратора';
$string['admin_only_webcams_help'] = 'Разрешите использовать только свои веб-камеры модераторам.';
$string['room_duration'] = 'Продолжительность работы номера (минуты)';
$string['room_duration_help'] = 'Defines how long the room can stay open before it closes automatically. Enter 0 if you do not want to set any time limit, allowing the room to remain active without restrictions.';
$string['moderator_join_first'] = 'Модератор — присоединяйтесь первым';
$string['moderator_join_first_help'] = 'When enabled, the session will not start and no one can join until a moderator (such as a teacher) joins first. Participants will remain on the Moodle activity page and will not enter the room or a waiting area. This is different from the Waiting Room option, where users can still join and wait.';
$string['enable_analytics'] = 'Включить аналитику';
$string['enable_analytics_help'] = 'Генерируйте аналитику для сессии. Примечание: Это должно быть включено, если установлены какие-либо критерии завершения.';
$string['allow_virtual_bg'] = 'Разрешить виртуальные фоны';
$string['allow_virtual_bg_help'] = 'Позволите участникам использовать виртуальные фоны.';
$string['auto_gen_user_id'] = 'Автоматическая генерация идентификатора пользователя';
$string['auto_gen_user_id_help'] = 'When enabled, the system creates a new ID so the same user can join from multiple devices—for example, when a teacher joins from a tablet to draw on the whiteboard while using a PC for the camera and microphone; however, it is <b>recommended</b> to keep this off so the Moodle user ID is used and duplicate joins are prevented.';

$string['allow_recording'] = 'Разрешить запись';
$string['allow_recording_help'] = 'Позвольте записывать сессию.';
$string['allow_cloud_recording'] = 'Разрешить облачную запись';
$string['allow_cloud_recording_help'] = 'Позвольте записывать сессию в облако.';
$string['enable_auto_cloud_recording'] = 'Включить автозапись в облаке';
$string['enable_auto_cloud_recording_help'] = 'Запись начинается автоматически, когда сессия начинается.';
$string['allow_local_recording'] = 'Разрешить локальную запись';
$string['allow_local_recording_help'] = 'Позвольте участникам записывать сессию локально.';
$string['is_allow_view_recording'] = 'Разрешить просмотр записей';
$string['is_allow_view_recording_help'] = 'Позвольте участникам просматривать записи.';
$string['is_allow_download_recording'] = 'Разрешить скачивание записей';
$string['is_allow_download_recording_help'] = 'Позвольте участникам скачать записи.';

$string['allow_chat'] = 'Разрешить чат';
$string['allow_chat_help'] = 'Включите функцию публичного чата.';
$string['allow_file_upload'] = 'Разрешить загрузку файлов';
$string['allow_file_upload_help'] = 'Позвольте участникам загружать файлы в чате.';

$string['allow_shared_notepad'] = 'Разрешить общий блокнот';
$string['allow_shared_notepad_help'] = 'Позвольте участникам пользоваться общим блокнотом.';
$string['allow_whiteboard'] = 'Разрешить виртуальную доску';
$string['allow_whiteboard_help'] = 'Позвольте участникам пользоваться белой доской.';
$string['allowed_external_media_player'] = 'Разрешить внешний медиаплеер';
$string['allowed_external_media_player_help'] = 'Разрешить участникам воспроизводить внешние медиа (например, видео на YouTube).';
$string['activate_waiting_room'] = 'Активировать зал ожидания';
$string['activate_waiting_room_help'] = 'Включите комнату ожидания для этой сессии.';
$string['waiting_room_msg'] = 'Сообщение в зале ожидания';
$string['waiting_room_msg_help'] = 'This message is shown to users while they are waiting to be admitted to the room. Use it to share instructions, expectations, or helpful information before the session starts.';
$string['allow_breakout_rooms'] = 'Разрешить комнаты для секций';
$string['allow_breakout_rooms_help'] = 'Позвольте модераторам создавать комнаты для себя.';
$string['allowed_number_rooms'] = 'Разрешённое количество комнат для отдыха';
$string['allow_display_external_link_features'] = 'Внешняя ссылка Разрешить отображение';
$string['allow_display_external_link_features_help'] = 'Позвольте модераторам отображать внешнюю ссылку для всех участников.';
$string['allow_ingress_features'] = 'Разрешить вход';
$string['allow_ingress_features_help'] = 'Позвольте проникнуть в сессию.';
$string['allow_polls'] = 'Разрешённые опросы';
$string['allow_polls_help'] = 'Позвольте модераторам создавать опросы.';
$string['sip_dial_in_features_is_allow'] = 'Разрешить SIP-набор';
$string['sip_dial_in_features_is_allow_help'] = 'Позвольте участникам присоединиться к сессии через SIP-телефон.';

$string['enable_end_to_end_encryption_features'] = 'Включить сквозное шифрование';
$string['enable_end_to_end_encryption_features_help'] = 'Включить сквозное шифрование для сессии.';
$string['enabled_self_insert_encryption_key'] = 'Разрешить самовставку ключа шифрования';
$string['enabled_self_insert_encryption_key_help'] = 'Позвольте участникам вставлять свой собственный ключ шифрования.';
$string['included_e2ee_chat_messages'] = 'Включить сообщения в чате в E2EE';
$string['included_e2ee_chat_messages_help'] = 'Включайте чатовые сообщения в сквозное шифрование.';
$string['included_e2ee_whiteboard'] = 'Включить доску в E2EE';
$string['included_e2ee_whiteboard_help'] = 'Включите белую доску в сквозное шифрование.';

$string['insights_features_is_allow'] = 'Разрешить инсайты';
$string['insights_features_is_allow_help'] = 'Позвольте генерировать инсайты для этой сессии.';
$string['insights_transcription_features_is_allow'] = 'Разрешить транскрипцию';
$string['insights_transcription_features_is_allow_help'] = 'Позвольте транскрибировать сессию.';
$string['insights_transcription_features_is_allow_translation'] = 'Разрешить перевод транскрипции';
$string['insights_transcription_features_is_allow_translation_help'] = 'Позвольте перевести транскрипцию.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Разрешить транскрипционный синтез речи';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Позвольте расшифровке читать вслух.';
$string['insights_chat_translation_features_is_allow'] = 'Разрешить перевод в чате';
$string['insights_chat_translation_features_is_allow_help'] = 'Разрешите перевод сообщений в чате.';
$string['insights_ai_features_is_allow'] = 'Разрешить функции ИИ';
$string['insights_ai_features_is_allow_help'] = 'Разрешить использовать функции ИИ в этой сессии.';
$string['insights_ai_text_chat_features_is_allow'] = 'Разрешить текстовый чат с помощью ИИ';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Разрешите использовать ИИ в чате.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Разрешить резюме собраний с помощью ИИ';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Позвольте ИИ подвести итоги встречи.';

$string['lock_microphone'] = 'Микрофон блокировки';
$string['lock_microphone_help'] = 'По умолчанию отключите микрофоны всех участников.';
$string['lock_webcam'] = 'Веб-камера с блокировкой';
$string['lock_webcam_help'] = 'По умолчанию отключите веб-камеры всех участников.';
$string['lock_screen_sharing'] = 'Совместное использование экрана блокировки';
$string['lock_screen_sharing_help'] = 'Отключите совместное использование экрана для всех участников по умолчанию.';
$string['lock_whiteboard'] = 'Lock Whiteboard';
$string['lock_whiteboard_help'] = 'По умолчанию отключите белую доску для всех участников.';
$string['lock_shared_notepad'] = 'Общий блокнот с замком';
$string['lock_shared_notepad_help'] = 'По умолчанию отключите общие заметки для всех участников.';
$string['lock_chat'] = 'Lock Chat';
$string['lock_chat_help'] = 'По умолчанию отключите публичный чат для всех участников.';
$string['lock_chat_send_message'] = 'Заблокировать чат, отправить сообщение';
$string['lock_chat_send_message_help'] = 'По умолчанию отключите отправку сообщений в публичном чате для всех участников.';
$string['lock_chat_file_share'] = 'Заблокировать чат для совместного использования файлов';
$string['lock_chat_file_share_help'] = 'По умолчанию отключите обмен файлами в публичном чате для всех участников.';
$string['lock_private_chat'] = 'Заблокировать приватный чат';
$string['lock_private_chat_help'] = 'По умолчанию отключите приватный чат для всех участников.';

$string['completion_minutes'] = 'Протокол просмотра';
$string['completion_minutes_help'] = 'Требуйте, чтобы пользователь находился в сессии определённое количество минут.';
$string['completion_minutes_desc'] = 'Пользователь должен присутствовать на сессии как минимум {$a} минуты.';
$string['completion_raised_hand'] = 'Поднятая рука';
$string['completion_raised_hand_help'] = 'Требуйте от пользователя поднять руку хотя бы один раз.';
$string['completion_chat_messages'] = 'Отправленные сообщения в чате';
$string['completion_chat_messages_help'] = 'Требуйте, чтобы пользователь отправил хотя бы одно сообщение в чате.';
$string['completion_webcam_enabled'] = 'Включена веб-камера';
$string['completion_webcam_enabled_help'] = 'Попросите пользователя хотя бы один раз включить свою веб-камеру.';
$string['completion_webcam_duration'] = 'Длительность работы с веб-камерой (минуты)';
$string['completion_webcam_duration_help'] = 'Потребовать, чтобы пользователь был включён на веб-камеру в течение определённого количества минут.';
$string['completion_webcam_duration_desc'] = 'Пользователь должен иметь включённую веб-камеру как минимум {$a} минуты.';
$string['completion_mic_enabled'] = 'Микрофон включен';
$string['completion_mic_enabled_help'] = 'Попросите пользователя включить микрофон хотя бы один раз.';
$string['completion_mic_duration'] = 'Длительность включения микрофона (минуты)';
$string['completion_mic_duration_help'] = 'Требуйте, чтобы у пользователя был включён микрофон в течение определённого количества минут.';
$string['completion_mic_duration_desc'] = 'Пользователь должен иметь включённый микрофон как минимум {$a} минуты.';
$string['completion_talk_duration'] = 'Длительность беседы (минуты)';
$string['completion_talk_duration_help'] = 'Потребовать, чтобы пользователь говорил определённое количество минут.';
$string['completion_talk_duration_desc'] = 'Пользователь должен говорить хотя бы {$a} минуты.';
$string['completion_poll_voted'] = 'Голосование в опросе';
$string['completion_poll_voted_help'] = 'Потребовать, чтобы пользователь проголосовал хотя бы в одном опросе.';
$string['completion_whiteboard_annotated'] = 'Аннотировано на доске';
$string['completion_whiteboard_annotated_help'] = 'Потребовать, чтобы пользователь сделал аннотации на белой доске.';

// Privacy
$string['privacy:metadata:plugnmeet_user_stats'] = 'Сохраняет статистику сессий для пользователей, чтобы определить завершение активности.';
$string['privacy:metadata:plugnmeet_user_stats:userid'] = 'Идентификатор пользователя.';
$string['privacy:metadata:plugnmeet_user_stats:statsdata'] = 'Данные сессии, закодированные в JSON (протоколы, сообщения в чате и т.д.).';
$string['privacy:metadata:plugnmeet_user_stats:timemodified'] = 'Время, когда статистика обновлялась в последний раз.';

// view.php
$string['join_session'] = 'Присоединиться к сессии';
$string['start_session'] = 'Начало сессии';
$string['end_session'] = 'Завершение сессии';
$string['participants'] = 'Участники';
$string['is_recording'] = 'Запись';
$string['is_active'] = 'Активен';
$string['room_info'] = 'Подробности живой сессии';
$string['participants_info'] = 'Живые участники';
$string['room_id'] = 'Идентификатор комнаты';
$string['creation_time'] = 'Время создания';
$string['name'] = 'Название';
$string['user_id'] = 'Идентификатор пользователя';
$string['is_admin'] = 'Это админ';
$string['is_presenter'] = 'Является ведущим';
$string['joined_at'] = 'Присоединились в';
$string['moderator_not_joined'] = 'Модератор должен начать сессию, прежде чем вы сможете присоединиться.';
$string['session_available_from'] = 'Доступно из: {$a}';
$string['session_available_until'] = 'Доступно до: {$a}';
$string['session_not_started_yet'] = 'Эта сессия ещё не началась.';
$string['session_ended'] = 'Эта сессия окончена.';
$string['allow_guest'] = 'Разрешить гостевым пользователям';
$string['allow_guest_help'] = 'When enabled, a secure shareable link is generated so external users (such as guest teachers or participants without a Moodle account) can join the session; an admin can view and share this link.';
$string['guest_join_link'] = 'Ссылка на гостевое присоединение';
$string['guest_join_link_help'] = 'Поделитесь этой ссылкой с внешними участниками. Эта ссылка останется актуальной для {$a} часы. Каждая перезагрузка страницы генерирует новую ссылку, но ранее общие ссылки останутся действительными до истечения исходного срока действия.';
$string['copy_link'] = 'Скопировать ссылку';
$string['link_copied'] = 'Link copied to clipboard.';
$string['guest_join_title'] = 'Присоединяйтесь к встрече в качестве гостя';
$string['enter_display_name'] = 'Введите своё отображаемое имя';
$string['join_as_guest'] = 'Присоединяйтесь к собранию';
$string['guest_access_denied'] = 'Гостевой доступ для этой встречи не включён.';
$string['invalid_guest_token'] = 'Недействительный или истекший гостевой токен.';
$string['guest_link_expired'] = 'Эта ссылка на присоединение к гостям истёкла.';
$string['error_joining_session'] = 'В сессии произошла ошибка: {$a}';
$string['already_logged_in'] = 'Вы уже вошли в Moodle. Вы можете присоединиться к сессии напрямую с этой страницы активности.';

// Events
$string['event_room_started'] = 'Комната началась';
$string['event_room_ended'] = 'Комната закончилась';
$string['event_room_created'] = 'Комната создана';
$string['event_session_ended'] = 'Сессия завершена';
$string['event_participant_joined'] = 'Участники присоединились';
$string['event_participant_left'] = 'Участник ушёл';
$string['event_artifact_created'] = 'Созданный артефакт';
$string['event_recording_proceeded'] = 'Запись готова';
$string['event_plugin_error'] = 'PlugNmeet error';

// Notifications
$string['messageprovider:recording_ready'] = 'Уведомления о готовых записях';
$string['messageprovider:artifact_ready'] = 'Уведомления о готовых артефактах';
$string['recording_ready_notification_subject'] = 'Запись готова: {$a}';
$string['recording_ready_notification_fullmessage'] = 'Запись для сессии "{$a->roomname}" теперь готов и обработан. Вы можете посмотреть его здесь: {$a->url}';
$string['recording_ready_notification_fullmessagehtml'] = '<p>Запись для сессии <strong>"{$a->roomname}"</strong> теперь готов и обработан.</p><p><a href="{$a->url}">Нажмите здесь, чтобы посмотреть запись.</a></p>';
$string['recording_ready_notification_smallmessage'] = 'Запись готова к {$a}';
$string['artifact_ready_notification_subject'] = 'Артефакт готов: {$a}';
$string['artifact_ready_notification_fullmessage'] = 'Новый артефакт ({$a->type}) для сессии "{$a->roomname}теперь доступна. Вы можете посмотреть его здесь: {$a->url}';
$string['artifact_ready_notification_fullmessagehtml'] = '<p>Новый артефакт ({$a->type}) для сессии <strong>"{$a->roomname}"</strong> теперь доступна.</p><p><a href="{$a->url}">Нажмите здесь, чтобы посмотреть детали артефакта.</a></p>';
$string['artifact_ready_notification_smallmessage'] = 'Артефакт готов к {$a}';

// recordings.php
$string['no_recordings'] = 'Записей не найдено.';
$string['recording_id'] = 'Идентификатор записи';
$string['room_sid'] = 'Комната SID';
$string['file_size'] = 'Размер файла';
$string['created_at'] = 'Создано в';
$string['actions'] = 'Действия';
$string['view'] = 'Вид';
$string['play'] = 'Играть';
$string['download'] = 'Загружать';
$string['delete'] = 'Удалить';
$string['delete_confirm'] = 'Ты уверен, что хочешь это удалить?';
$string['recording_details'] = 'Детали записи';
$string['recording_creation_time'] = 'Время создания записи';
$string['room_creation_time'] = 'Время создания сессии';
$string['back_to_list'] = 'Вернуться к списку';
$string['browser_not_support_video'] = 'Ваш браузер не поддерживает тег видео.';
$string['room_title'] = 'Название комнаты';
$string['total_participants'] = 'Общее количество участников';
$string['session_started_at'] = 'Сессия началась в';
$string['session_ended_at'] = 'Сессия завершена на';

// artifacts.php
$string['no_artifacts'] = 'Артефактов не нашли.';
$string['artifact_id'] = 'Идентификатор артефакта';
$string['type'] = 'Тип';
$string['artifact_details'] = 'Детали артефактов';
$string['no_permission'] = 'Вы не имеете разрешения на просмотр этой страницы.';
$string['token_usage'] = 'Использование токенов';
$string['duration_usage'] = 'Длительное использование';
$string['character_count_usage'] = 'Использование числа символов';
$string['estimated_cost'] = 'Ориентировочная стоимость';
$string['file_path'] = 'Путь к файлу';
$string['mime_type'] = 'Тип мима';
$string['created_at'] = 'Создано в';

// Analytics strings
$string['download_excel_report'] = 'Скачать отчёт Excel';
$string['download_raw_json'] = 'Скачать исходные данные';
$string['room_summary'] = 'Краткое описание комнаты';
$string['users_summary'] = 'Краткое описание пользователей';
$string['see_excel_report'] = 'См. отчет Excel для подробностей';
$string['error_loading_analytics'] = 'Ошибка при загрузке аналитических данных: {$a}';
$string['error_generating_excel'] = 'Отчёт Excel, генерирующий ошибку: {$a}';

$string['analytics_room_room_id'] = 'Идентификатор комнаты';
$string['analytics_room_room_title'] = 'Название комнаты';
$string['analytics_room_room_creation'] = 'Время создания комнаты';
$string['analytics_room_room_ended'] = 'Время окончания комнаты';
$string['analytics_room_room_duration'] = 'Продолжительность работы номера';
$string['analytics_room_room_total_users'] = 'Общее количество участников';
$string['analytics_room_enabled_e2ee'] = 'Включено E2EE';
$string['analytics_room_recording_status'] = 'Количество статусов записи';
$string['analytics_room_rtmp_status'] = 'Подсчёт статуса RTMP';
$string['analytics_room_speech_service_total_usage'] = 'Общее использование речевых сервисов';
$string['analytics_room_external_media_player_status'] = 'Счёт статуса внешних медиаплееров';
$string['analytics_room_etherpad_status'] = 'Количество состояний Etherpad';
$string['analytics_room_external_display_link_status'] = 'Подсчёт статуса внешних ссылок';
$string['analytics_room_ingress_created'] = 'Ингресс создан графом';
$string['analytics_room_breakout_room'] = 'Подсчёт в комнатах для прорыва';

$string['analytics_user_name'] = 'Название';
$string['analytics_user_id'] = 'Идентификатор пользователя';
$string['analytics_user_ex_id'] = 'Идентификатор пользователя';
$string['analytics_user_is_admin'] = 'Это админ';
$string['analytics_user_duration'] = 'Продолжительность';
$string['analytics_user_joined'] = 'Присоединились в';
$string['analytics_user_left'] = 'Left At';
$string['analytics_user_mic_status'] = 'Изменения статуса микрофона';
$string['analytics_user_mic_muted'] = 'Отсчёт микрофона';
$string['analytics_user_mic_duration'] = 'Длительность с микрофоном';
$string['analytics_user_talked'] = 'Говорящий граф';
$string['analytics_user_talked_duration'] = 'Длительность разговоров';
$string['analytics_user_webcam_status'] = 'Изменения статуса веб-камеры';
$string['analytics_user_webcam_duration'] = 'Длительность с включённой веб-камерой';
$string['analytics_user_raise_hand'] = 'Поднимать подсчёт рук';
$string['analytics_user_voted_poll'] = 'Подсчёт голосов';
$string['analytics_user_whiteboard_annotated'] = 'Белая доска с аннотированным счетом';
$string['analytics_user_whiteboard_files'] = 'Количество файлов на доске';
$string['analytics_user_screen_share_status'] = 'Изменения статуса совместного использования экрана';
$string['analytics_user_speech_services_usage'] = 'Использование речевых сервисов';
$string['analytics_user_public_chat'] = 'Сообщения в публичном чате';
$string['analytics_user_private_chat'] = 'Личные чаты';
$string['analytics_user_chat_files'] = 'Общие чат-файлы';
$string['analytics_user_interface_invisible'] = 'Счётчик невидимых интерфейсов';
$string['analytics_user_connection_quality'] = 'Качество соединения';
$string['analytics_user_connection_quality_excellent'] = 'Отлично';
$string['analytics_user_connection_quality_good'] = 'Хорошо';
$string['analytics_user_connection_quality_poor'] = 'Бедный';

$string['users_info'] = 'Информация о пользователях';
$string['polls'] = 'Опросы';
$string['question'] = 'Вопрос';
$string['options'] = 'Варианты';
$string['file_name'] = 'Имя файла';
$string['checkcompletiontask'] = 'Проверьте завершение плагиNmeet';

// attendance.php
$string['attendance_report'] = 'Отчёт о посещаемости';
$string['status'] = 'Статус';
$string['present'] = 'Настоящее время';
$string['absent'] = 'Отсутствует';
$string['incomplete'] = 'Incomplete';
$string['completed'] = 'Completed';
$string['minutes_attended'] = 'Протокол просмотра';
$string['last_updated'] = 'Последнее обновление';
$string['mic_duration'] = 'Длительность работы с микрофоном';
$string['webcam_duration'] = 'Длительность с включённой веб-камерой';
