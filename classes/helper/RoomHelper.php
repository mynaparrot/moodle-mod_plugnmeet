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
 * Room helper class.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_plugnmeet\helper;

use Mynaparrot\PlugnmeetProto\ActiveRoomWithParticipant;
use Mynaparrot\PlugnmeetProto\RoomMetadata;
use Livekit\TrackSource;
use moodle_url;

defined('MOODLE_INTERNAL') || die();

/**
 * Class for processing room data.
 */
class RoomHelper {
    /**
     * Processes a Room object and returns structured data.
     *
     * @param ActiveRoomWithParticipant $room
     * @return array
     */
    public static function process_room_data(ActiveRoomWithParticipant $room): array {
        global $DB;

        $roominfo = $room->getRoomInfo();
        if (!$roominfo) {
            return [];
        }

        $data = [
            'room_id' => $roominfo->getRoomId(),
            'room_title' => $roominfo->getRoomTitle(),
            'is_recording' => $roominfo->getIsRecording(),
            'joined_participants' => $roominfo->getJoinedParticipants(),
            'creation_time' => $roominfo->getCreationTime(),
            'creation_time_formatted' => userdate($roominfo->getCreationTime()),
            'webcams' => 0,
            'mics' => 0,
            'screenshares' => 0,
            'course_url' => '',
            'course_name' => '',
            'activity_url' => '',
            'activity_name' => '',
            'participants_info' => [],
        ];

        // Process Participants for stats and details.
        $participants = $room->getParticipantsInfo();
        if ($participants) {
            foreach ($participants as $participant) {
                $pwebcams = 0;
                $pmics = 0;
                $pscreenshares = 0;

                $tracks = $participant->getTracks();
                foreach ($tracks as $track) {
                    if ($track->getSource() === TrackSource::CAMERA) {
                        $pwebcams++;
                    } else if ($track->getSource() === TrackSource::MICROPHONE) {
                        $pmics++;
                    } else if ($track->getSource() === TrackSource::SCREEN_SHARE) {
                        $pscreenshares++;
                    }
                }

                $data['webcams'] += $pwebcams;
                $data['mics'] += $pmics;
                $data['screenshares'] += $pscreenshares;

                $metadata = $participant->getMetadata();
                $isadmin = false;
                $ispresenter = false;

                if (!empty($metadata)) {
                    $userinfo = json_decode($metadata);
                    $isadmin = $userinfo->is_admin ?? false;
                    $ispresenter = $userinfo->is_presenter ?? false;
                }

                $data['participants_info'][] = [
                    'name' => $participant->getName(),
                    'user_id' => $participant->getIdentity(),
                    'is_admin' => $isadmin,
                    'is_presenter' => $ispresenter,
                    'joined_at' => $participant->getJoinedAt(),
                    'webcams' => $pwebcams,
                    'mics' => $pmics,
                    'screenshares' => $pscreenshares,
                ];
            }
        }

        // Process Metadata for Moodle Info.
        $roommetadatajson = $roominfo->getMetadata();
        if (!empty($roommetadatajson)) {
            $metadata = new RoomMetadata();
            $metadata->mergeFromJsonString($roommetadatajson);
            $activity = json_decode($metadata->getExtraData()->offsetGet('activity'), true);

            if ($activity && isset($activity['id']) && isset($activity['course'])) {
                $data['course_url'] = (new moodle_url('/course/view.php', ['id' => $activity['course']]))->out(false);
                $data['activity_url'] = (new moodle_url('/mod/plugnmeet/view.php', ['id' => $activity['id']]))->out(false);

                $courserecord = $DB->get_record('course', ['id' => $activity['course']], 'fullname');
                if ($courserecord) {
                    $data['course_name'] = $courserecord->fullname;
                }

                $cmrecord = get_coursemodule_from_id('plugnmeet', $activity['id']);
                if ($cmrecord) {
                    $data['activity_name'] = $cmrecord->name;
                }
            }
        }

        return $data;
    }

    /**
     * Formats MB to readable size.
     *
     * @param float $mb
     * @param int $precision
     * @return string
     */
    public static function format_mb($mb, $precision = 2) {
        if ($mb < 1024) {
            return round($mb, $precision) . ' MB';
        }
        $gb = $mb / 1024;
        return round($gb, $precision) . ' GB';
    }

    /**
     * Formats bytes to human-readable format.
     *
     * @param int $bytes
     * @param int $precision
     * @return string
     */
    public static function format_bytes($bytes, $precision = 2) {
        return display_size($bytes, $precision);
    }

    /**
     * Formats ISO time to Moodle format.
     *
     * @param string $isotime
     * @return string
     */
    public static function format_iso_to_moodle_time($isotime) {
        $timestamp = strtotime($isotime);
        if ($timestamp === false) {
            return $isotime;
        }
        return userdate($timestamp, get_string('strftimedatetimeshort', 'langconfig'));
    }
}
