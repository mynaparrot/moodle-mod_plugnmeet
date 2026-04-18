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

namespace mod_plugnmeet\task;

use core\task\scheduled_task;
use mod_plugnmeet\helper\plugNmeetConnect;
use mod_plugnmeet\helper\CompletionHelper;
use Mynaparrot\PlugnmeetProto\RoomArtifactType;

/**
 * Scheduled task to fetch room analytics and process activity completion.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class fetch_analytics_task extends scheduled_task {
    /**
     * Get a descriptive name for this task.
     *
     * @return string
     */
    public function get_name() {
        return get_string('checkcompletiontask', 'mod_plugnmeet');
    }

    /**
     * Run the task.
     */
    public function execute() {
        global $DB;

        $config = get_config('mod_plugnmeet');
        $connect = new plugNmeetConnect($config);

        // 1. Fallback: Check active sessions that might have ended without a webhook.
        // We look for active rooms older than 1 hour.
        $cuttofftime = time() - 3600;
        $activesessions = $DB->get_records_select('plugnmeet_sessions', 'status = 1 AND timemodified < ?', [$cuttofftime]);

        foreach ($activesessions as $session) {
            try {
                $res = $connect->isRoomActive($session->roomid);
                // getIsActive() returns the actual room status from PlugNmeet.
                if ($res->getStatus() && !$res->getIsActive()) {
                    // Room is not active on server, mark as ended locally.
                    $DB->set_field('plugnmeet_sessions', 'status', 0, ['id' => $session->id]);
                    $DB->set_field('plugnmeet_sessions', 'timemodified', time(), ['id' => $session->id]);
                    mtrace("Session marked as ended via fallback: {$session->sid}");
                } else {
                    // Still active or API error, update timemodified to avoid checking too frequently.
                    $DB->set_field('plugnmeet_sessions', 'timemodified', time(), ['id' => $session->id]);
                }
            } catch (\Exception $e) {
                // Individual room check failed, log and continue to next session.
                mtrace("Fallback check failed for session {$session->sid}: " . $e->getMessage());
            }
        }

        // 2. Fetch ended sessions that haven't had their analytics processed yet.
        $sessions = $DB->get_records('plugnmeet_sessions', [
            'status' => 0, // Ended.
            'analytics_processed' => 0,
        ], 'timecreated ASC', 'id, plugnmeetid, sid, roomid');

        if (empty($sessions)) {
            return;
        }

        foreach ($sessions as $session) {
            $instance = $DB->get_record('plugnmeet', ['id' => $session->plugnmeetid]);
            if (!$instance) {
                // Main instance was deleted, just mark as processed.
                $DB->set_field('plugnmeet_sessions', 'analytics_processed', 1, ['id' => $session->id]);
                continue;
            }

            try {
                // Fetch analytics artifacts for this specific SID.
                $res = $connect->getArtifacts(
                    [],
                    $session->sid,
                    RoomArtifactType::MEETING_ANALYTICS,
                    0,
                    1
                );

                if ($res->getStatus() && !empty($res->getResult())) {
                    $artifacts = $res->getResult()->getArtifactsList();
                    $artifact = $artifacts[0];
                    $artifactid = $artifact->getArtifactId();

                    if ($artifactid) {
                        mtrace("Processing analytics for session: {$session->sid} (Artifact: {$artifactid})");

                        // Update completion using the artifact.
                        $success = CompletionHelper::update_completion_for_room($instance, $artifactid);

                        if ($success) {
                            $DB->set_field('plugnmeet_sessions', 'analytics_processed', 1, ['id' => $session->id]);
                            $DB->set_field('plugnmeet_sessions', 'timemodified', time(), ['id' => $session->id]);
                            mtrace("Successfully processed analytics for session: {$session->sid}");
                        }
                    }
                }
            } catch (\Exception $e) {
                mtrace("Error fetching analytics for session {$session->sid}: " . $e->getMessage());
            }
        }
    }
}
