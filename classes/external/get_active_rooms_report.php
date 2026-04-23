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
 * External API for getting active rooms report.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_plugnmeet\external;

use external_api;
use external_function_parameters;
use external_value;
use context_system;
use core_external\external_single_structure;
use core_external\external_multiple_structure;
use mod_plugnmeet\helper\plugNmeetConnect;
use mod_plugnmeet\helper\RoomHelper;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Class for getting active rooms report.
 */
class get_active_rooms_report extends external_api {
    /**
     * Parameters for the execute method.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'page' => new external_value(PARAM_INT, 'Page number', VALUE_DEFAULT, 0),
            'perpage' => new external_value(PARAM_INT, 'Rooms per page', VALUE_DEFAULT, 25),
        ]);
    }

    /**
     * Get active rooms report.
     * @param int $page The page number.
     * @param int $perpage The number of rooms per page.
     * @return array
     */
    public static function execute(int $page, int $perpage) {
        $systemcontext = context_system::instance();
        self::validate_context($systemcontext);
        require_capability('mod/plugnmeet:viewactiveroomsreport', $systemcontext);

        $config = get_config('mod_plugnmeet');
        $pnc = new plugNmeetConnect($config);
        $res = $pnc->getActiveRoomsInfo();

        $response = [
            'status' => $res->getStatus(),
            'msg' => $pnc->getResponseError($res, get_string('activerooms', 'mod_plugnmeet')),
            'rooms' => [],
            'summary' => [
                'total_rooms' => 0,
                'total_participants' => 0,
                'total_webcams' => 0,
                'total_mics' => 0,
                'total_screenshares' => 0,
            ],
        ];

        if (!$res->getStatus()) {
            return $response;
        }

        $rooms = $res->getRooms();
        $response['summary']['total_rooms'] = count($rooms);

        $allprocessedrooms = [];

        foreach ($rooms as $room) {
            $data = RoomHelper::process_room_data($room);
            if (empty($data)) {
                continue;
            }

            $response['summary']['total_participants'] += $data['joined_participants'];
            $response['summary']['total_webcams'] += $data['webcams'];
            $response['summary']['total_mics'] += $data['mics'];
            $response['summary']['total_screenshares'] += $data['screenshares'];

            $allprocessedrooms[] = [
                'room_title' => $data['room_title'],
                'room_id' => $data['room_id'],
                'course_url' => $data['course_url'],
                'course_name' => $data['course_name'],
                'activity_url' => $data['activity_url'],
                'activity_name' => $data['activity_name'],
                'participants' => $data['joined_participants'],
                'webcams' => $data['webcams'],
                'mics' => $data['mics'],
                'screenshares' => $data['screenshares'],
                'creation_time' => $data['creation_time'],
            ];
        }

        // Apply pagination.
        $offset = $page * $perpage;
        $response['rooms'] = array_slice($allprocessedrooms, $offset, $perpage);

        return $response;
    }

    /**
     * Returns description of the execute method.
     * @return external_single_structure
     */
    public static function execute_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'Status'),
            'msg' => new external_value(PARAM_TEXT, 'Message', VALUE_OPTIONAL),
            'summary' => new external_single_structure([
                'total_rooms' => new external_value(PARAM_INT, 'Total rooms'),
                'total_participants' => new external_value(PARAM_INT, 'Total participants'),
                'total_webcams' => new external_value(PARAM_INT, 'Total webcams'),
                'total_mics' => new external_value(PARAM_INT, 'Total mics'),
                'total_screenshares' => new external_value(PARAM_INT, 'Total screenshares'),
            ]),
            'rooms' => new external_multiple_structure(
                new external_single_structure([
                    'room_title' => new external_value(PARAM_TEXT, 'Room title'),
                    'room_id' => new external_value(PARAM_TEXT, 'Room ID'),
                    'course_url' => new external_value(PARAM_URL, 'Course URL', VALUE_OPTIONAL),
                    'course_name' => new external_value(PARAM_TEXT, 'Course name', VALUE_OPTIONAL),
                    'activity_url' => new external_value(PARAM_URL, 'Activity URL', VALUE_OPTIONAL),
                    'activity_name' => new external_value(PARAM_TEXT, 'Activity name', VALUE_OPTIONAL),
                    'participants' => new external_value(PARAM_INT, 'Participants'),
                    'webcams' => new external_value(PARAM_INT, 'Webcams'),
                    'mics' => new external_value(PARAM_INT, 'Mics'),
                    'screenshares' => new external_value(PARAM_INT, 'Screenshares'),
                    'creation_time' => new external_value(PARAM_INT, 'Room creation timestamp'),
                ])
            ),
        ]);
    }
}
