<?php

/**
 * Part of mod_plugnmeet.
 *
 * @package     mod_plugnmeet
 * @copyright   2022 mynaparrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class PlugNmeetHelper
{
    private static function formatHtml($items, $fieldName, $data, $mform)
    {
        foreach ($items as $key => $item) {
            $opt = array();
            $opt[true] = "true";
            $opt[false] = "false";

            $select = $mform->addElement('select', "{$fieldName}[{$key}]", $item['label'], $opt);
            foreach ($item["options"] as $option) {
                if (!empty($data)) {
                    if ($option == $data[$key]) {
                        $select->setSelected($option === "true" ? 1 : 0);
                    }
                } else {
                    if ($option == $item["selected"]) {
                        $select->setSelected($option === "true" ? 1 : 0);
                    }
                }
            }
        }
    }

    public static function getRoomFeatures($room_metadata, $mform)
    {
        $roomFeatures = array(
            "allow_webcams" => array(
                "label" => get_string("allow_webcams", "mod_plugnmeet"),
                "des" => get_string("allow_webcams_des", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "true"
            ),
            "mute_on_start" => array(
                "label" => get_string("mute_on_start", "mod_plugnmeet"),
                "des" => get_string("MUTE_ON_START_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "false"
            ),
            "allow_screen_share" => array(
                "label" => get_string("allow_screen_share", "mod_plugnmeet"),
                "des" => get_string("ALLOW_SCREEN_SHARING_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "true"
            ),
            "allow_recording" => array(
                "label" => get_string("allow_recording", "mod_plugnmeet"),
                "des" => get_string("ALLOW_RECORDING_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "true"
            ),
            "allow_rtmp" => array(
                "label" => get_string("allow_rtmp", "mod_plugnmeet"),
                "des" => get_string("ALLOW_RTMP_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "true"
            ),
            "allow_view_other_webcams" => array(
                "label" => get_string("allow_view_other_webcams", "mod_plugnmeet"),
                "des" => get_string("ALLOW_VIEW_OTHER_WEBCAMS_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "true"
            ),
            "allow_view_other_users_list" => array(
                "label" => get_string("allow_view_other_users_list", "mod_plugnmeet"),
                "des" => get_string("ALLOW_VIEW_OTHER_USERS_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "true"
            ),
            "admin_only_webcams" => array(
                "label" => get_string("admin_only_webcams", "mod_plugnmeet"),
                "des" => get_string("ADMIN_ONLY_WEBCAMS_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "false"
            ),
        );

        $data = [];
        if (isset($room_metadata->room_features)) {
            $data = (array)$room_metadata->room_metadata->room_features;
        }

        self::formatHtml($roomFeatures, "room_features", $data, $mform);
    }

    public static function getChatFeatures($room_metadata, $mform)
    {
        $chatFeatures = array(
            "allow_chat" => array(
                "label" => get_string("allow_chat", "mod_plugnmeet"),
                "des" => get_string("ALLOW_CHAT_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "true"
            ),
            "allow_file_upload" => array(
                "label" => get_string("allow_file_upload", "mod_plugnmeet"),
                "des" => get_string("ALLOW_FILE_UPLOAD_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "true"
            ),
        );

        $data = [];
        if (isset($room_metadata->chat_features)) {
            $data = (array)$room_metadata->chat_features;
        }

        self::formatHtml($chatFeatures, "chat_features", $data, $mform);
    }

    public static function getDefaultLockSettings($room_metadata, $mform)
    {
        $defaultLockSettings = array(
            "lock_microphone" => array(
                "label" => get_string("lock_microphone", "mod_plugnmeet"),
                "des" => get_string("LOCK_MICROPHONE_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "false"
            ),
            "lock_webcam" => array(
                "label" => get_string("lock_webcam", "mod_plugnmeet"),
                "des" => get_string("LOCK_WEBCAM_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "false"
            ),
            "lock_screen_sharing" => array(
                "label" => get_string("lock_screen_sharing", "mod_plugnmeet"),
                "des" => get_string("LOCK_SCREEN_SHARING_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "true"
            ),
            "lock_chat" => array(
                "label" => get_string("lock_chat", "mod_plugnmeet"),
                "des" => get_string("LOCK_CHAT_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "false"
            ),
            "lock_chat_send_message" => array(
                "label" => get_string("lock_chat_send_message", "mod_plugnmeet"),
                "des" => get_string("LOCK_CHAT_SEND_MESSAGE_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "false"
            ),
            "lock_chat_file_share" => array(
                "label" => get_string("lock_chat_file_share", "mod_plugnmeet"),
                "des" => get_string("LOCK_CHAT_SEND_FILE_DES", "mod_plugnmeet"),
                "options" => array("true", "false"),
                "selected" => "false"
            ),
        );

        $data = [];
        if (isset($room_metadata->default_lock_settings)) {
            $data = (array)$room_metadata->default_lock_settings;
        }

        self::formatHtml($defaultLockSettings, "default_lock_settings", $data, $mform);
    }

    public static function showJoinButton($id)
    {
        echo "<a href='/mod/plugnmeet/conference.php?id={$id}' class='btn btn-success'>Join</a>";
    }
}
