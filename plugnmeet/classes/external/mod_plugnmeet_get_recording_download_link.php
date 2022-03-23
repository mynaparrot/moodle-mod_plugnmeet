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

class mod_plugnmeet_get_recording_download_link extends external_api
{
    public static function get_download_link_parameters()
    {
        return new external_function_parameters([
            'recordId' => new external_value(PARAM_RAW, 'record id', VALUE_REQUIRED),
        ]);
    }

    public static function get_download_link($recordId)
    {
        $config = get_config('mod_plugnmeet');
        $result = array();

        $connect = new PlugNmeetConnect($config);
        $res = $connect->getRecordingDownloadLink($recordId);

        $result['status'] = $res->status;
        $result['msg'] = $res->msg;
        $result['url'] = "";

        if ($res->status) {
            $result['url'] = $config->plugnmeet_server_url . "/download/recording/" . $res->token;
        }

        return $result;
    }

    public static function get_download_link_returns()
    {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'status of request'),
            'msg' => new external_value(PARAM_TEXT, 'status message', VALUE_REQUIRED),
            'url' => new external_value(PARAM_RAW, 'download url'),
        ]);
    }
}
