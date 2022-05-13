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
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2022 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->libdir . "/externallib.php");
if (!class_exists("plugNmeetConnect")) {
    require($CFG->dirroot . '/mod/plugnmeet/helpers/plugNmeetConnect.php');
}

class mod_plugnmeet_isactive_room extends external_api
{
    public static function isactive_room_parameters()
    {
        return new external_function_parameters([
            'instanceId' => new external_value(PARAM_INT, 'plugnmeet db id', VALUE_REQUIRED),
            'room_id' => new external_value(PARAM_TEXT, 'room internal id', VALUE_REQUIRED),
        ]);
    }

    public static function isactive_room($instanceId, $room_id)
    {
        $result = [
            'isActive' => false,
            'instanceId' => $instanceId,
            'room_id' => $room_id
        ];

        $config = get_config('mod_plugnmeet');
        $connect = new PlugNmeetConnect($config);
        $res = $connect->isRoomActive($room_id);
        $result['msg'] = $res->getResponseMsg();

        if ($res->getStatus()) {
            $result['isActive'] = true;
        }

        return $result;
    }

    public static function isactive_room_returns()
    {
        return new external_single_structure([
            'isActive' => new external_value(PARAM_BOOL, 'is active or not'),
            'msg' => new external_value(PARAM_TEXT, 'status message', VALUE_REQUIRED),
            'instanceId' => new external_value(PARAM_INT, 'plugnmeet db id', VALUE_REQUIRED),
            'room_id' => new external_value(PARAM_TEXT, 'room internal id', VALUE_REQUIRED),
        ]);
    }
}
