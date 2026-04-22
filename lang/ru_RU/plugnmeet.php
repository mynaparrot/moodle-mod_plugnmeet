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
$string['plugnmeet:deleteartifacts'] = 'Удалить артефакты';
$string['plugnmeet:deleterecording'] = 'Удалить записи';
$string['plugnmeet:downloadanalyticsreport'] = 'Скачать аналитический отчёт';
$string['plugnmeet:downloadartifacts'] = 'Скачать артефакты';
$string['plugnmeet:downloadattendance'] = 'Скачать отчёт о посещаемости';
$string['plugnmeet:downloadrecordings'] = 'Скачать записи';
$string['plugnmeet:manage'] = 'Управление настройками PlugNmeet';
$string['plugnmeet:view'] = 'Просмотр активности PlugNmeet';
$string['plugnmeet:viewartifacts'] = 'Просмотр артефактов';
$string['plugnmeet:viewattendance'] = 'Просмотр отчёта о посещаемости';
$string['plugnmeet:viewattendancelist'] = 'Просмотр списка посещаемости';
$string['plugnmeet:viewlivesessioninfo'] = 'Просмотр информации о живых сессиях';
$string['plugnmeet:viewrecordings'] = 'Просмотр записей';
$string['plugnmeetfieldset'] = 'Пользовательский набор примеров поля';
$string['plugnmeetname'] = 'Пользовательское имя';
$string['plugnmeetname_help'] = 'Помощь с пользовательским примером';

// Admin Settings
$string['api_config'] = 'Конфигурация API';
$string['server_url'] = 'URL сервера PlugNmeet';
$string['server_url_desc'] = 'The base URL of your PlugNmeet server (e.g., https://pnm.example.com).';
$string['api_key'] = 'Ключ API';
$string['api_key_desc'] = 'The unique API key provided by your PlugNmeet server.';
$string['api_secret'] = 'API Secret';
$string['api_secret_desc'] = 'The API secret provided by your PlugNmeet server used for secure authentication.';
$string['guest_access_hdr'] = 'Настройки доступа для гостей';
$string['allow_guest_global'] = 'Разрешить гостям доступ по всему миру';
$string['allow_guest_global_desc'] = 'Acts as a master switch. If disabled, teachers will not see the option to enable guest joining when creating or editing activities.';
$string['guest_link_expiration'] = 'Срок действия гостевой ссылки (часы)';
$string['guest_link_expiration_desc'] = 'Determines how many hours a guest access link remains active after a teacher generates it.';
$string['defaults'] = 'Технические дефолты';
$string['defaults_desc'] = 'Default technical configurations applied to every new PlugNmeet session.';
$string['enable_dynacast'] = 'Включить Dynacast';
$string['enable_dynacast_des'] = 'Optimizes performance by dynamically pausing video layers that are not being viewed by participants. This significantly reduces server-side CPU and bandwidth usage. **Note:** This will be automatically enabled if using SVC codecs (VP9/AV1) and is required for multi-codec simulcast.';
$string['enable_simulcast'] = 'Включить симультанную трансляцию';
$string['enable_simulcast_des'] = 'Delivers multiple video quality layers to ensure a smooth experience for users on weak connections.';
$string['video_codec'] = 'Видеокодек';
$string['video_codec_des'] = 'The encoding standard for video transmission. **VP8** is recommended for WebRTC as it provides the best balance of quality and low latency. **Warning:** Not all browsers support every codec; ensure your users are on modern browsers if using VP9 or H.265.';
$string['default_webcam_resolution'] = 'Стандартное разрешение веб-камеры';
$string['default_webcam_resolution_des'] = 'The initial resolution setting for participant cameras.';
$string['default_screen_share_resolution'] = 'Стандартное разрешение для совместного использования экрана';
$string['default_screen_share_resolution_des'] = 'The initial resolution setting for screen sharing.';
$string['default_audio_preset'] = 'Стандартный аудиопресет';
$string['default_audio_preset_des'] = 'The audio quality profile optimized for the session.';

$string['branding'] = 'Брендинг и кастомизация';
$string['custom_logo'] = 'Индивидуальный логотип';
$string['custom_logo_des'] = 'Upload your logo to the meeting room. If left blank, the default PlugNmeet logo will be used.';
$string['custom_css_url'] = 'Пользовательский URL-адрес CSS';
$string['custom_css_url_des'] = 'Link an external .css file to overwrite or customize the interface styles.';
$string['primary_color'] = 'Основной цвет';
$string['primary_color_des'] = 'Main accent color used for buttons, active states, and highlights.';
$string['secondary_color'] = 'Вторичный цвет';
$string['secondary_color_des'] = 'The accent color used for secondary UI elements.';
$string['background_color'] = 'Цвет фона';
$string['background_color_des'] = 'The primary background color of the interface.';
$string['background_image'] = 'Фоновое изображение';
$string['background_image_des'] = 'Background wallpaper. For best results, use a 1920x1080 image.';
$string['header_color'] = 'Цвет заголовка';
$string['header_color_des'] = 'Background color for the top navigation bar.';
$string['footer_color'] = 'Цвет нижнего колонтитула';
$string['footer_color_des'] = 'Background color for the bottom toolbar.';
$string['left_color'] = 'Цвет левой стороны';
$string['left_color_des'] = 'Background color for the left-side navigation sidebar.';
$string['side_panel_bg_color'] = 'Цвет фона боковой панели';
$string['side_panel_bg_color_des'] = 'Background color for the right-side panels (Chat and Participants list).';
$string['copyright_text'] = 'Текст авторских прав';
$string['copyright_text_des'] = 'Branding text displayed in the settings footer. HTML is supported for links or custom styling.';
$string['client_load'] = 'Client Loading Method';
$string['client_load_des'] = 'Choose **Remote** (Recommended) for a seamless, branded experience embedded directly in your moodle page. Choose **Redirect** to use the default plugNmeet interface; note that users will leave your site and custom branding may not apply.';
$string['remote'] = 'Remote (Embedded)';
$string['redirect'] = 'Redirect to Server';

$string['yes'] = 'Да';
$string['no'] = 'Нет';
$string['recordings'] = "Записи";
$string['recording'] = "Запись";
$string['artifacts'] = "Артефакты комнаты";
$string['attendance'] = "Отчёт о посещаемости";
$string['artifact'] = "Артефакт";
$string['room_subject'] = 'комната';
$string['user_subject'] = 'Пользователь';

// mod_form.php
$string['roomtitle'] = 'Название комнаты';
$string['roomtitle_help'] = 'The name used for the Moodle activity and the live meeting header. It helps students identify the session in their course and inside the room.';
$string['welcome_message'] = 'Приветственное сообщение';
$string['welcome_message_help'] = 'Любое введённое здесь сообщение появится как первое сообщение в публичном чате при вступлении пользователей в комнату. Это полезно для обмена инструкциями, ссылками или важной информацией с участниками при входе.';
$string['max_participants'] = 'Участники Max';
$string['max_participants_help'] = 'Установите это значение так, чтобы ограничить количество пользователей, которые могут одновременно присоединиться к сессии. Установите его на 0, чтобы позволить неограниченное количество участников, то есть нет ограничений на количество пользователей.';
$string['room_features'] = 'Особенности комнаты';
$string['recording_features'] = 'Особенности записи';
$string['chat_features'] = 'Чат-функции';
$string['other_features'] = 'Другие особенности';
$string['e2ee_features'] = 'Сквозное шифрование';
$string['insights_features'] = 'Аналитика и особенности ИИ';
$string['defaultlock'] = 'Настройки замка по умолчанию';
$string['advanced_completion'] = 'Продвинутое завершение';
$string['available'] = 'Доступно от';
$string['available_help'] = 'Determines when participants can start joining the session. Users will not be able to enter the room before this date and time.';
$string['deadline'] = 'Доступно до';
$string['deadline_help'] = 'Determines the final date and time that participants can access the session. Access will be blocked once this deadline passes.';
$string['err_deadline_before_available'] = 'Дата «Доступно до» не может быть раньше даты «Доступно с».';
$string['error_analytics_required_for_completion'] = 'Необходимо проверить Enable Analytics, если установлены какие-либо критерии завершения.';

$string['allow_webcams'] = 'Разрешить веб-камеры';
$string['allow_webcams_help'] = 'Разрешите участникам использовать свои веб-камеры.';
$string['mute_on_start'] = 'Отключить звук при запуске';
$string['mute_on_start_help'] = 'Автоматически отключайте звук всех участников при присоединении к сессии.';
$string['allow_screen_share'] = 'Разрешить совместное использование экрана';
$string['allow_screen_share_help'] = 'Позвольте участникам делиться своим экраном.';
$string['allow_rtmp'] = 'Разрешить трансляцию RTMP';
$string['allow_rtmp_help'] = 'Enables moderators to broadcast the live session to external platforms like YouTube, Facebook, or Twitch. Perfect for public webinars or guest lectures.';
$string['allow_raise_hand'] = 'Разрешить поднять руку';
$string['allow_raise_hand_help'] = 'Позвольте участникам поднять руку.';
$string['admin_only_webcams'] = 'Веб-камеры только для администратора';
$string['admin_only_webcams_help'] = 'Разрешите использовать только свои веб-камеры модераторам.';
$string['allow_view_other_webcams'] = 'Разрешить просмотр других веб-камер';
$string['allow_view_other_webcams_help'] = 'Позвольте участникам просматривать веб-камеры других участников. Если отключено, они будут видеть только веб-камеры модераторов.';
$string['allow_view_other_users_list'] = 'Разрешить, просмотреть список других пользователей';
$string['allow_view_other_users_list_help'] = 'Позвольте участникам видеть список других участников.';
$string['room_duration'] = 'Продолжительность работы номера (минуты)';
$string['room_duration_help'] = 'Определяет, как долго комната может оставаться открытой, прежде чем она автоматически закроется. Введите 0, если не хотите устанавливать ограничение по времени, позволяя комнате оставаться активной без ограничений.';
$string['moderator_join_first'] = 'Модератор — присоединяйтесь первым';
$string['moderator_join_first_help'] = 'При включении сессия не начнётся, и никто не может присоединиться, пока модератор (например, учитель) не присоединится первым. Участники останутся на странице активности Moodle и не будут входить в комнату или зону ожидания. Это отличается от опции Waiting Room, где пользователи всё ещё могут присоединиться и ждать.';
$string['enable_analytics'] = 'Включить аналитику';
$string['enable_analytics_help'] = 'Tracks participation and engagement data for the session. **Note:** This must be enabled if any Completion criteria are set.';
$string['allow_virtual_bg'] = 'Разрешить виртуальные фоны';
$string['allow_virtual_bg_help'] = 'Enables participants to blur their background or use a virtual image. Great for maintaining student privacy and ensuring a professional classroom appearance.';
$string['auto_gen_user_id'] = 'Автоматическая генерация идентификатора пользователя';
$string['auto_gen_user_id_help'] = 'При включении система создаёт новый идентификатор, чтобы один и тот же пользователь мог подключаться с нескольких устройств — например, когда учитель приходит с планшета, чтобы рисовать на доске, используя ПК для камеры и микрофона; однако это <b>Рекомендую</b> чтобы не было использовано пользовательское ID Moodle, а дублирующие соединения были исключены.';

$string['allow_recording'] = 'Allow Recording (Master Switch)';
$string['allow_recording_help'] = 'The primary master switch for all recording features. If disabled, both Cloud and Local recording options will be hidden from moderators.';
$string['allow_cloud_recording'] = 'Разрешить облачную запись';
$string['allow_cloud_recording_help'] = 'Enables recording on the PlugNmeet server. The final video is processed and stored in the cloud, making it easy to share via a link once the session ends.';
$string['enable_auto_cloud_recording'] = 'Включить автозапись в облаке';
$string['enable_auto_cloud_recording_help'] = 'Automatically triggers the cloud recording the moment the first moderator joins the session. Ideal for ensuring no lecture is forgotten.';
$string['allow_local_recording'] = 'Разрешить локальную запись';
$string['allow_local_recording_help'] = 'Allows recording directly to the computer. **Note:** Requires Google Chrome. To capture all session audio, the user must share their "Chrome Tab" and check the "Also share tab audio" box. The file is saved locally to the device once finished.';

$string['allow_chat'] = 'Allow Chat (Global Master Switch)';
$string['allow_chat_help'] = 'The absolute master switch for all chat functions. If disabled, the entire chat area is removed for everyone, including moderators. No public or private chat will be possible.';
$string['allow_file_upload'] = 'Разрешить загрузку файлов';
$string['allow_file_upload_help'] = 'Enables the ability to share files within the chat. This requires the "Allow Chat" master switch to be active.';

$string['allow_shared_notepad'] = 'Разрешить общий блокнот';
$string['allow_shared_notepad_help'] = 'Enables a collaborative text editor where students and teachers can take real-time notes together. This is perfect for brainstorming, co-writing, or building a shared class summary.';

$string['allow_whiteboard'] = 'Разрешить виртуальную доску';
$string['allow_whiteboard_help'] = 'Unlocks an interactive drawing space for the session. Use it for sketching diagrams, solving math problems visually, or letting students annotate shared content.';

$string['allowed_external_media_player'] = 'Allow External Media Player';
$string['allowed_external_media_player_help'] = 'Allows moderators to sync and play videos from sources like YouTube or Vimeo for the whole class. Ideal for analyzing educational clips or watching documentaries together without bandwidth lag.';

$string['activate_waiting_room'] = 'Активировать зал ожидания';
$string['activate_waiting_room_help'] = 'Включите комнату ожидания для этой сессии.';
$string['waiting_room_msg'] = 'Сообщение в зале ожидания';
$string['waiting_room_msg_help'] = 'Это сообщение отображается пользователям, пока они ждут допуска в комнату. Используйте его, чтобы поделиться инструкциями, ожиданиями или полезной информацией до начала сессии.';

$string['allow_breakout_rooms'] = 'Разрешить комнаты для секций';
$string['allow_breakout_rooms_help'] = 'Enables moderators to split participants into smaller groups for focused discussions, collaborative projects, or private group activities.';
$string['allowed_number_rooms'] = 'Max Breakout Rooms';
$string['allowed_number_rooms_help'] = 'The maximum number of sub-rooms a moderator can create within a single session.';

$string['allow_display_external_link_features'] = 'Allow External Link Sharing';
$string['allow_display_external_link_features_help'] = 'Allows moderators to display external educational content—such as H5P activities, SCORM packages, or quiz systems (e.g., Kahoot)—directly to all participants during the session.';

$string['allow_ingress_features'] = 'Allow Ingress (External Streaming)';
$string['allow_ingress_features_help'] = 'Allows teachers to broadcast high-quality video into the session using external software like OBS via RTMP or WHIP protocols. This is ideal for sharing high-resolution video content, pre-recorded sessions, or bypassing browser upload limitations.';

$string['allow_polls'] = 'Разрешённые опросы';
$string['allow_polls_help'] = 'Enables moderators to create interactive polls and quick quizzes during the session. This is a great way to check student understanding and increase engagement.';

$string['sip_dial_in_features_is_allow'] = 'Разрешить SIP-набор';
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
$string['insights_transcription_features_is_allow_translation'] = 'Разрешить перевод транскрипции';
$string['insights_transcription_features_is_allow_translation_help'] = 'Allows the live transcript to be translated into different languages, supporting international students and multi-lingual environments.';
$string['insights_transcription_features_is_allow_speech_synthesis'] = 'Allow Speech Synthesis (TTS)';
$string['insights_transcription_features_is_allow_speech_synthesis_help'] = 'Enables Text-to-Speech, allowing the live transcript to be read aloud for better accessibility and for visually impaired participants.';
$string['insights_chat_translation_features_is_allow'] = 'Разрешить перевод в чате';
$string['insights_chat_translation_features_is_allow_help'] = 'Enables real-time translation of chat messages, allowing participants to communicate instantly across different languages.';
$string['insights_ai_features_is_allow'] = 'Allow AI Meeting Assistant (AI Master Switch)';
$string['insights_ai_features_is_allow_help'] = 'The master switch for all AI-powered capabilities. If disabled, specific features like AI Chat and Meeting Summarization will be hidden, even if Session Insights is active.';
$string['insights_ai_text_chat_features_is_allow'] = 'Allow AI Chat Assistant';
$string['insights_ai_text_chat_features_is_allow_help'] = 'Integrates an AI assistant directly into the chat to help answer questions, explain complex concepts, and facilitate group discussion.';
$string['insights_ai_meeting_summarization_features_is_allow'] = 'Разрешить резюме собраний с помощью ИИ';
$string['insights_ai_meeting_summarization_features_is_allow_help'] = 'Automatically generates a concise AI summary after the session ends, highlighting key educational points, decisions, and follow-up tasks.';

$string['lock_microphone'] = 'Lock Microphones';
$string['lock_microphone_help'] = 'Mutes all participants by default upon entry. Only moderators can unmute or grant permission to speak.';
$string['lock_webcam'] = 'Lock Webcams';
$string['lock_webcam_help'] = 'Disables cameras for all participants by default. Useful for saving bandwidth or ensuring student privacy.';
$string['lock_screen_sharing'] = 'Совместное использование экрана блокировки';
$string['lock_screen_sharing_help'] = 'Restricts screen sharing to moderators only. Prevents participants from interrupting with their own screens.';
$string['lock_whiteboard'] = 'Lock Whiteboard';
$string['lock_whiteboard_help'] = 'Restricts whiteboard drawing tools to moderators only. Prevents unauthorized annotations by participants.';
$string['lock_shared_notepad'] = 'Общий блокнот с замком';
$string['lock_shared_notepad_help'] = 'Disables the collaborative notepad for participants to prevent off-topic writing or distractions.';
$string['lock_chat'] = 'Lock Public Chat';
$string['lock_chat_help'] = 'Completely hides or disables the public chat area for all participants.';
$string['lock_chat_send_message'] = 'Lock Sending Messages';
$string['lock_chat_send_message_help'] = 'Allows participants to read the chat, but prevents them from sending any messages.';
$string['lock_chat_file_share'] = 'Lock File Sharing';
$string['lock_chat_file_share_help'] = 'Prevents participants from uploading or sharing files within the chat area.';
$string['lock_private_chat'] = 'Заблокировать приватный чат';
$string['lock_private_chat_help'] = 'Disables 1-on-1 private messaging between participants. Note: Participants can still send private messages to moderators for help or questions.';

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
$string['allow_guest_help'] = 'При включении создаётся защищённая ссылка для обмена, чтобы внешние пользователи (например, приглашённые преподаватели или участники без учетной записи Moodle) могли присоединиться к сессии; Администратор может просмотреть и поделиться этой ссылкой.';
$string['guest_join_link'] = 'Ссылка на гостевое присоединение';
$string['guest_join_link_help'] = 'Поделитесь этой ссылкой с внешними участниками. Эта ссылка останется актуальной для {$a} часы. Каждая перезагрузка страницы генерирует новую ссылку, но ранее общие ссылки останутся действительными до истечения исходного срока действия.';
$string['copy_link'] = 'Скопировать ссылку';
$string['link_copied'] = 'Ссылка скопирована в буфер обмена.';
$string['guest_join_title'] = 'Присоединяйтесь к встрече в качестве гостя';
$string['enter_display_name'] = 'Введите своё отображаемое имя';
$string['join_as_guest'] = 'Присоединяйтесь к собранию';
$string['guest_access_denied'] = 'Гостевой доступ для этой встречи не включён.';
$string['invalid_guest_token'] = 'Недействительный или истекший гостевой токен.';
$string['guest_link_expired'] = 'Эта ссылка на присоединение к гостям истёкла.';
$string['error_joining_session'] = 'В сессии произошла ошибка: {$a}';
$string['already_logged_in'] = 'Вы уже вошли в Moodle. Вы можете присоединиться к сессии напрямую с этой страницы активности.';
$string['total_webcams'] = 'Общее количество веб-камер';
$string['total_mics'] = 'Total Mics';
$string['total_screen_shares'] = 'Общее количество просмотров экранов';
$string['webcams'] = 'Веб-камеры';
$string['mics'] = 'Микрофоны';
$string['screenshares'] = 'Прокат экрана';

// Events
$string['event_room_started'] = 'Комната началась';
$string['event_room_ended'] = 'Комната закончилась';
$string['event_room_created'] = 'Комната создана';
$string['event_session_ended'] = 'Сессия завершена';
$string['event_participant_joined'] = 'Участники присоединились';
$string['event_participant_left'] = 'Участник ушёл';
$string['event_artifact_created'] = 'Созданный артефакт';
$string['event_recording_proceeded'] = 'Запись готова';
$string['event_plugin_error'] = 'Ошибка PlugNmeet';
$string['event_track_published'] = 'Опубликованный трек';
$string['event_track_unpublished'] = 'Трек, не опубликованный';

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
$string['delete_success'] = 'Успешно удалено.';
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
$string['incomplete'] = 'Незавершённые';
$string['completed'] = 'Завершено';
$string['minutes_attended'] = 'Протокол просмотра';
$string['last_updated'] = 'Последнее обновление';
$string['mic_duration'] = 'Длительность работы с микрофоном';
$string['webcam_duration'] = 'Длительность с включённой веб-камерой';
$string['participation_progress'] = 'Прогресс в участии';
$string['attendance_duration'] = 'Протокол просмотра';
$string['attendance_webcam_status'] = 'Включена веб-камера';
$string['attendance_mic_status'] = 'Микрофон включен';
$string['attendance_talked_duration'] = 'Продолжительность выступления';
$string['attendance_voted_poll'] = 'Голосование в опросе';
$string['attendance_chat_messages'] = 'Отправленные сообщения в чате';
$string['attendance_raise_hand'] = 'Поднятая рука';
$string['attendance_webcam_duration'] = 'Длительность с включённой веб-камерой';
$string['attendance_mic_duration'] = 'Длительность работы с микрофоном';
$string['attendance_whiteboard_annotated'] = 'Аннотировано на доске';
$string['met'] = 'Мет';
$string['required'] = 'Обязательно';

// Status codes
$string['status_unknown_status'] = 'С сервера был вернут неизвестный статус.';
$string['status_success'] = 'Операция успешно завершена.';
$string['status_permission_denied'] = 'Разрешение отказано.';
$string['status_not_found'] = 'Нет {$a} нашёл.';
$string['status_conflict'] = 'Это действие не могло быть выполнено из-за конфликта (например, комната может уже существовать).';
$string['status_invalid_token_or_signature'] = 'Токен или подпись запроса недействительны.';
$string['status_invalid_api_key'] = 'Предоставленный API-ключ недействителен. Пожалуйста, проверьте настройки плагинов.';
$string['status_internal_server_error'] = 'Сервер PlugNmeet столкнулся с внутренней ошибкой.';
$string['status_invalid_parameters'] = 'Предоставленная информация недействительна.';
$string['status_missing_required_parameter'] = 'Часть необходимой информации отсутствует.';
$string['status_room_not_found'] = 'Указанная комната не была найдена.';
$string['status_user_not_found'] = 'Аккаунт пользователя не найден. Пожалуйста, убедитесь, что ваши API данные правильны и подписка активна.';
$string['status_user_blocked'] = 'Аккаунт пользователя заблокирован. Пожалуйста, свяжитесь с поддержкой.';
$string['status_user_not_active'] = 'Учетная запись пользователя неактивна. Вероятно, это связано с неактивной или просроченной подпиской.';
