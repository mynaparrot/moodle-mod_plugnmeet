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
 * ${PLUGINNAME} file description here.
 *
 * @package    ${PLUGINNAME}
 * @copyright  2022 jibon <${USEREMAIL}>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->libdir . "/externallib.php");
if (!class_exists("plugNmeetConnect")) {
    require($CFG->dirroot . '/mod/plugnmeet/helpers/plugNmeetConnect.php');
}

class mod_plugnmeet_create_room extends external_api
{
    public static function create_room_parameters()
    {
        return new external_function_parameters([
            'instanceId' => new external_value(PARAM_INT, 'course module id', VALUE_REQUIRED),
            'join' => new external_value(PARAM_BOOL, 'should join after create', VALUE_REQUIRED),
            'isAdmin' => new external_value(PARAM_BOOL, 'is admin or not', VALUE_REQUIRED),
        ]);
    }

    public static function create_room($instanceId, $join, $isAdmin)
    {
        global $DB, $USER;

        $instance = $DB->get_record('plugnmeet', array('id' => $instanceId), '*', MUST_EXIST);

        $result = [
            'status' => false,
            'msg' => '',
            'roomInfo' => null,
            'join_token' => ''
        ];

        $config = get_config('mod_plugnmeet');
        $room_metadata = json_decode($instance->room_metadata, true);

        $connect = new PlugNmeetConnect($config);
        $res = $connect->createRoom($instance->room_id, $instance->name, $instance->welcome_message, $instance->max_participants, "", $room_metadata);

        $result['status'] = $res->status;
        $result['msg'] = $res->msg;
        $result['roomInfo'] = json_encode($res->roomInfo);

        if ($join) {
            $name = $USER->firstname . " " . $USER->lastname;
            $res = $connect->getJoinToken($instance->room_id, $name, $USER->id, $isAdmin);
            $result['status'] = $res->status;
            $result['msg'] = $res->msg;
            $result['access_token'] = $res->token;
        }

        return $result;
    }

    public static function create_room_returns()
    {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'status of request'),
            'msg' => new external_value(PARAM_TEXT, 'status message', VALUE_REQUIRED),
            'roomInfo' => new external_value(PARAM_RAW, 'room info'),
            'access_token' => new external_value(PARAM_RAW, 'join token'),
        ]);
    }
}
