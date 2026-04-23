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
 * Webhook handler for PlugNmeet events.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// We need to allow direct access for this file
// phpcs:disable moodle.Files.MoodleInternal.MoodleInternalGlobalState,moodle.Files.RequireLogin.Missing
require_once(__DIR__ . '/../../config.php');

use Livekit\TrackSource;
use Livekit\TrackType;
use mod_plugnmeet\event\artifact_created;
use mod_plugnmeet\event\participant_joined;
use mod_plugnmeet\event\participant_left;
use mod_plugnmeet\event\plugin_error;
use mod_plugnmeet\event\recording_ended;
use mod_plugnmeet\event\recording_proceeded;
use mod_plugnmeet\event\recording_started;
use mod_plugnmeet\event\room_created;
use mod_plugnmeet\event\room_ended;
use mod_plugnmeet\event\room_started;
use mod_plugnmeet\event\rtmp_ended;
use mod_plugnmeet\event\rtmp_started;
use mod_plugnmeet\event\session_ended;
use mod_plugnmeet\event\track_published;
use mod_plugnmeet\event\track_unpublished;
use mod_plugnmeet\helper\CompletionHelper;
use mod_plugnmeet\helper\plugNmeetConnect;
use Mynaparrot\PlugnmeetProto\CommonNotifyEvent;
use Mynaparrot\PlugnmeetProto\RoomArtifactType;

if (!isset($_SERVER["HTTP_AUTHORIZATION"]) && !isset($_SERVER["HTTP_HASH_TOKEN"])) {
    http_response_code(401);
    return;
}

$hash = $_SERVER["HTTP_AUTHORIZATION"] ?? $_SERVER["HTTP_HASH_TOKEN"];
if (empty($hash)) {
    http_response_code(401);
    return;
}

$config = get_config('mod_plugnmeet');

try {
    $connect = new plugNmeetConnect($config);
    $deco = $connect->getPlugnmeet()->decodeJWTData($hash);

    if (!isset($deco->sha256)) {
        http_response_code(401);
        return;
    }
} catch (Exception $e) {
    $event = plugin_error::create([
        'context' => context_system::instance(),
        'other' => [
            'type' => 'webhook',
            'message' => 'JWT Decode Error: ' . $e->getMessage(),
        ],
    ]);
    $event->trigger();

    debugging("PlugNmeet Webhook JWT Error: " . $e->getMessage());
    http_response_code(500);
    return;
}

$entitybody = file_get_contents('php://input');
$our = hash('sha256', $entitybody, true);
$senthash = base64_decode($deco->sha256);

if ($our !== $senthash) {
    http_response_code(401);
    return;
}

try {
    global $DB;
    $webhook = new CommonNotifyEvent();
    $webhook->mergeFromJsonString($entitybody, true);

    $id = required_param('id', PARAM_INT);
    $plugnmeet = $DB->get_record('plugnmeet', ['id' => $id], '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id, 0, false, MUST_EXIST);
    $context = context_module::instance($cm->id);

    $eventtype = $webhook->getEvent();
    $sid = $webhook->getRoom()?->getSid();

    switch ($eventtype) {
        case 'room_created':
            // Trigger Moodle Event.
            $event = room_created::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
            ]);
            $event->trigger();
            break;

        case 'room_started':
            // Trigger Moodle Event.
            $event = room_started::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
            ]);
            $event->trigger();
            break;

        case 'session_ended':
            if ($sid) {
                $DB->set_field('plugnmeet_sessions', 'status', 0, ['sid' => $sid]);
                $DB->set_field('plugnmeet_sessions', 'timemodified', time(), ['sid' => $sid]);
            }

            // Trigger Moodle Session Ended Event.
            $event = session_ended::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
            ]);
            $event->trigger();
            break;

        case 'room_ended':
            // Trigger Moodle Room Ended Event.
            $event = room_ended::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
            ]);
            $event->trigger();
            break;

        case 'participant_joined':
            $userid = $webhook->getParticipant()->getIdentity();
            if (is_numeric($userid)) {
                CompletionHelper::record_participant_join((int)$userid, $plugnmeet);

                // Trigger Moodle Event.
                $event = participant_joined::create([
                    'context' => $context,
                    'objectid' => $plugnmeet->id,
                    'userid' => (int)$userid,
                ]);
                $event->trigger();
            }
            break;

        case 'participant_left':
            $userid = $webhook->getParticipant()->getIdentity();
            if (is_numeric($userid)) {
                // Trigger Moodle Event.
                $event = participant_left::create([
                    'context' => $context,
                    'objectid' => $plugnmeet->id,
                    'userid' => (int)$userid,
                ]);
                $event->trigger();
            }
            break;

        case 'track_published':
            $userid = $webhook->getParticipant()->getIdentity();
            if ($webhook->getTrack() && is_numeric($userid)) {
                // Trigger Moodle Event.
                $event = track_published::create([
                    'context' => $context,
                    'objectid' => $plugnmeet->id,
                    'userid' => (int)$userid,
                    'other' => [
                        'track_type' => TrackType::name($webhook->getTrack()->getType()),
                        'track_source' => TrackSource::name($webhook->getTrack()->getSource()),
                    ],
                ]);
                $event->trigger();
            }
            break;

        case 'track_unpublished':
            $userid = $webhook->getParticipant()->getIdentity();
            if ($webhook->getTrack() && is_numeric($userid)) {
                // Trigger Moodle Event.
                $event = track_unpublished::create([
                    'context' => $context,
                    'objectid' => $plugnmeet->id,
                    'userid' => (int)$userid,
                    'other' => [
                        'track_type' => TrackType::name($webhook->getTrack()->getType()),
                        'track_source' => TrackSource::name($webhook->getTrack()->getSource()),
                    ],
                ]);
                $event->trigger();
            }
            break;

        case 'artifact_created':
            $artifact = $webhook->getRoomArtifact();
            if ($artifact->getType() === RoomArtifactType::MEETING_ANALYTICS) {
                $success = CompletionHelper::update_completion_for_room($plugnmeet, $artifact->getArtifactId());
                if ($success && $sid) {
                    $DB->set_field('plugnmeet_sessions', 'analytics_processed', 1, ['sid' => $sid]);
                }
            }

            // Purge artifacts list cache only.
            cache::make('mod_plugnmeet', 'artifacts_list')->purge();

            // Trigger Moodle Event.
            $event = artifact_created::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
                'other' => [
                    'artifact_id' => $artifact->getArtifactId(),
                    'type' => RoomArtifactType::name($artifact->getType()),
                ],
            ]);
            $event->trigger();
            break;

        case 'recording_proceeded':
            $recording = $webhook->getRecordingInfo();

            // Purge recordings list cache only.
            cache::make('mod_plugnmeet', 'recordings_list')->purge();

            // Trigger Moodle Event.
            $event = recording_proceeded::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
                'other' => [
                    'recording_id' => $recording->getRecordId(),
                ],
            ]);
            $event->trigger();
            break;

        case 'start_recording':
            // Trigger Moodle Event.
            $event = recording_started::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
            ]);
            $event->trigger();
            break;

        case 'end_recording':
            // Trigger Moodle Event.
            $event = recording_ended::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
            ]);
            $event->trigger();
            break;

        case 'start_rtmp':
            // Trigger Moodle Event.
            $event = rtmp_started::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
            ]);
            $event->trigger();
            break;

        case 'end_rtmp':
            // Trigger Moodle Event.
            $event = rtmp_ended::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
            ]);
            $event->trigger();
            break;
    }
} catch (Exception $e) {
    $event = plugin_error::create([
        'context' => $context ?? context_system::instance(),
        'objectid' => $plugnmeet->id ?? null,
        'other' => [
            'type' => 'webhook',
            'message' => $e->getMessage(),
        ],
    ]);
    $event->trigger();

    debugging("PlugNmeet Webhook Exception: " . $e->getMessage());
    http_response_code(500);
    return;
}

http_response_code(200);
exit;
