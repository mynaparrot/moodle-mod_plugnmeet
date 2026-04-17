<?php

/**
 * Webhook handler for PlugNmeet events.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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

require_once(__DIR__ . '/../../config.php');

$config = get_config('mod_plugnmeet');

try {
    $connect = new plugNmeetConnect($config);
    $deco = $connect->getPlugnmeet()->decodeJWTData($hash);

    if (!isset($deco->sha256)) {
        http_response_code(401);
        return;
    }
} catch (Exception $e) {
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
    $webhook->mergeFromJsonString($entitybody);

    $event_type = $webhook->getEvent();
    $id = required_param('id', PARAM_INT);

    $plugnmeet = $DB->get_record('plugnmeet', ['id' => $id], '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id, 0, false, MUST_EXIST);
    $context = context_module::instance($cm->id);

    switch ($event_type) {
        case 'participant_joined':
            $userid = $webhook->getParticipant()->getIdentity();
            if (is_numeric($userid)) {
                CompletionHelper::record_participant_join((int)$userid, $plugnmeet);

                // Trigger Moodle Event.
                $event = \mod_plugnmeet\event\participant_joined::create([
                    'context' => $context,
                    'objectid' => $plugnmeet->id,
                    'userid' => (int)$userid
                ]);
                $event->trigger();
            }
            break;

        case 'participant_left':
            $userid = $webhook->getParticipant()->getIdentity();
            if (is_numeric($userid)) {
                // Trigger Moodle Event.
                $event = \mod_plugnmeet\event\participant_left::create([
                    'context' => $context,
                    'objectid' => $plugnmeet->id,
                    'userid' => (int)$userid
                ]);
                $event->trigger();
            }
            break;

        case 'artifact_created':
            $artifact = $webhook->getRoomArtifact();
            if ($artifact->getType() === RoomArtifactType::MEETING_ANALYTICS) {
                CompletionHelper::update_completion_for_room($plugnmeet, $artifact->getArtifactId());
            }

            // Trigger Moodle Event.
            $event = \mod_plugnmeet\event\artifact_created::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
                'other' => [
                    'artifact_id' => $artifact->getArtifactId(),
                    'type' => RoomArtifactType::name($artifact->getType())
                ]
            ]);
            $event->trigger();
            break;

        case 'recording_proceeded':
            $recording = $webhook->getRecording();

            // Trigger Moodle Event.
            $event = \mod_plugnmeet\event\recording_proceeded::create([
                'context' => $context,
                'objectid' => $plugnmeet->id,
                'other' => [
                    'recording_id' => $recording->getRecordId()
                ]
            ]);
            $event->trigger();
            break;

        case 'room_created':
            // Trigger Moodle Event.
            $event = \mod_plugnmeet\event\room_created::create([
                'context' => $context,
                'objectid' => $plugnmeet->id
            ]);
            $event->trigger();
            break;

        case 'room_started':
            // Trigger Moodle Event.
            $event = \mod_plugnmeet\event\room_started::create([
                'context' => $context,
                'objectid' => $plugnmeet->id
            ]);
            $event->trigger();
            break;

        case 'session_ended':
            // Trigger Moodle Session Ended Event.
            $event = \mod_plugnmeet\event\session_ended::create([
                'context' => $context,
                'objectid' => $plugnmeet->id
            ]);
            $event->trigger();
            break;

        case 'room_ended':
            // Trigger Moodle Room Ended Event.
            $event = \mod_plugnmeet\event\room_ended::create([
                'context' => $context,
                'objectid' => $plugnmeet->id
            ]);
            $event->trigger();
            break;
    }

} catch (Exception $e){
    http_response_code(500);
    return;
}

http_response_code(200);
exit;
