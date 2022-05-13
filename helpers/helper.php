<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Part of mod_plugnmeet.
 *
 * @package     mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2022 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class PlugNmeetHelper {
    /**
     * @param $items
     * @param $fieldname
     * @param $data
     * @param $mform
     * @return void
     * @throws coding_exception
     */
    private static function format_html($items, $fieldname, $data, $mform) {
        foreach ($items as $key => $item) {
            $opt = array();
            $opt[1] = get_string("Yes", "mod_plugnmeet");
            $opt[0] = get_string("No", "mod_plugnmeet");

            $select = $mform->addElement('select', "{$fieldname}[{$key}]", $item['label'], $opt);
            foreach ($item["options"] as $option) {
                if (!empty($data)) {
                    if ($option == $data[$key]) {
                        $select->setSelected($option);
                    }
                } else {
                    if ($option == $item["selected"]) {
                        $select->setSelected($option);
                    }
                }
            }
        }
    }

    /**
     * @param $roommetadata
     * @param $mform
     * @return void
     * @throws coding_exception
     */
    public static function get_room_features($roommetadata, $mform) {
        $roomfeatures = array(
            "allow_webcams" => array(
                "label" => get_string("allow_webcams", "mod_plugnmeet"),
                "des" => get_string("allow_webcams_des", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "mute_on_start" => array(
                "label" => get_string("mute_on_start", "mod_plugnmeet"),
                "des" => get_string("MUTE_ON_START_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 0
            ),
            "allow_screen_share" => array(
                "label" => get_string("allow_screen_share", "mod_plugnmeet"),
                "des" => get_string("ALLOW_SCREEN_SHARING_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "allow_recording" => array(
                "label" => get_string("allow_recording", "mod_plugnmeet"),
                "des" => get_string("ALLOW_RECORDING_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "allow_rtmp" => array(
                "label" => get_string("allow_rtmp", "mod_plugnmeet"),
                "des" => get_string("ALLOW_RTMP_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "allow_view_other_webcams" => array(
                "label" => get_string("allow_view_other_webcams", "mod_plugnmeet"),
                "des" => get_string("ALLOW_VIEW_OTHER_WEBCAMS_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "allow_view_other_users_list" => array(
                "label" => get_string("allow_view_other_users_list", "mod_plugnmeet"),
                "des" => get_string("ALLOW_VIEW_OTHER_USERS_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "admin_only_webcams" => array(
                "label" => get_string("admin_only_webcams", "mod_plugnmeet"),
                "des" => get_string("ADMIN_ONLY_WEBCAMS_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 0
            ),
        );

        $data = [];
        if (isset($roommetadata->room_features)) {
            $data = (array)$roommetadata->room_features;
        }

        self::format_html($roomfeatures, "room_features", $data, $mform);
    }

    /**
     * @param $roommetadata
     * @param $mform
     * @return void
     * @throws coding_exception
     */
    public static function get_chat_features($roommetadata, $mform) {
        $chatfeatures = array(
            "allow_chat" => array(
                "label" => get_string("allow_chat", "mod_plugnmeet"),
                "des" => get_string("ALLOW_CHAT_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "allow_file_upload" => array(
                "label" => get_string("allow_file_upload", "mod_plugnmeet"),
                "des" => get_string("ALLOW_FILE_UPLOAD_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
        );

        $data = [];
        if (isset($roommetadata->chat_features)) {
            $data = (array)$roommetadata->chat_features;
        }

        self::format_html($chatfeatures, "chat_features", $data, $mform);
    }

    /**
     * @param $roommetadata
     * @param $mform
     * @return void
     * @throws coding_exception
     */
    public static function get_shared_note_pad_features($roommetadata, $mform) {
        $sharednotepadfeatures = array(
            "allowed_shared_note_pad" => array(
                "label" => get_string("allow_shared_notepad", "plugnmeet"),
                "des" => get_string("allow_shared_notepad_des", "plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            )
        );

        $data = [];
        if (isset($roommetadata->shared_note_pad_features)) {
            $data = (array)$roommetadata->shared_note_pad_features;
        }

        self::format_html($sharednotepadfeatures, "shared_note_pad_features", $data, $mform);
    }

    /**
     * @param $roommetadata
     * @param $mform
     * @return void
     * @throws coding_exception
     */
    public static function get_whiteboard_features($roommetadata, $mform) {
        $whiteboardfeatures = array(
            "allowed_whiteboard" => array(
                "label" => get_string("allow_whiteboard", "mod_plugnmeet"),
                "des" => get_string("allow_whiteboard_des", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            )
        );

        $data = [];
        if (isset($roommetadata->whiteboard_features)) {
            $data = (array)$roommetadata->whiteboard_features;
        }

        self::format_html($whiteboardfeatures, "whiteboard_features", $data, $mform);
    }

    /**
     * @param $roommetadata
     * @param $mform
     * @return void
     * @throws coding_exception
     */
    public static function get_external_media_player_features($roommetadata, $mform) {
        $externalmediaplayerfeatures = array(
            "allowed_external_media_player" => array(
                "label" => get_string("allowed_external_media_player", "mod_plugnmeet"),
                "des" => get_string("allowed_external_media_player_des", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            )
        );

        $data = [];
        if (isset($roommetadata->external_media_player_features)) {
            $data = (array)$roommetadata->external_media_player_features;
        }

        self::format_html($externalmediaplayerfeatures, "external_media_player_features", $data, $mform);
    }

    /**
     * @param $roommetadata
     * @param $mform
     * @return void
     * @throws coding_exception
     */
    public static function get_default_lock_settings($roommetadata, $mform) {
        $defaultlocksettings = array(
            "lock_microphone" => array(
                "label" => get_string("lock_microphone", "mod_plugnmeet"),
                "des" => get_string("LOCK_MICROPHONE_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 0
            ),
            "lock_webcam" => array(
                "label" => get_string("lock_webcam", "mod_plugnmeet"),
                "des" => get_string("LOCK_WEBCAM_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 0
            ),
            "lock_screen_sharing" => array(
                "label" => get_string("lock_screen_sharing", "mod_plugnmeet"),
                "des" => get_string("LOCK_SCREEN_SHARING_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "lock_whiteboard" => array(
                "label" => get_string("lock_whiteboard", "mod_plugnmeet"),
                "des" => get_string("lock_whiteboard_des", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "lock_shared_notepad" => array(
                "label" => get_string("lock_shared_notepad", "mod_plugnmeet"),
                "des" => get_string("lock_shared_notepad_des", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 1
            ),
            "lock_chat" => array(
                "label" => get_string("lock_chat", "mod_plugnmeet"),
                "des" => get_string("LOCK_CHAT_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 0
            ),
            "lock_chat_send_message" => array(
                "label" => get_string("lock_chat_send_message", "mod_plugnmeet"),
                "des" => get_string("LOCK_CHAT_SEND_MESSAGE_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 0
            ),
            "lock_chat_file_share" => array(
                "label" => get_string("lock_chat_file_share", "mod_plugnmeet"),
                "des" => get_string("LOCK_CHAT_SEND_FILE_DES", "mod_plugnmeet"),
                "options" => array(1, 0),
                "selected" => 0
            ),
        );

        $data = [];
        if (isset($roommetadata->default_lock_settings)) {
            $data = (array)$roommetadata->default_lock_settings;
        }

        self::format_html($defaultlocksettings, "default_lock_settings", $data, $mform);
    }

    /**
     * @param $id
     * @return void
     */
    public static function show_join_button($id) {
        echo "<a href='/mod/plugnmeet/conference.php?id={$id}' class='btn btn-success'>Join</a>";
    }
}
