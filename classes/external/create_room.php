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
 * External API for creating a room.
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
use context_module;
use dml_exception;
use core_external\external_single_structure;
use mod_plugnmeet\helper\plugNmeetConnect;
use mod_plugnmeet\helper\RoomHelper;
use mod_plugnmeet\helper\ExtensionManager;
use moodle_exception;
use moodle_url;
use Exception;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir . '/externallib.php');

/**
 * Class for creating a room external API.
 */
class create_room extends external_api {
    /**
     * Parameters for the execute method.
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'instanceid' => new external_value(PARAM_INT, 'Course module ID', VALUE_REQUIRED),
        ]);
    }

    /**
     * Create a new room.
     * @param int $instanceid The course module ID.
     * @param bool $allowguestbypass Validate the caller as an allowed guest instead of a logged in user.
     * @return array
     * @throws dml_exception
     * @throws moodle_exception
     */
    public static function execute(int $instanceid, bool $allowguestbypass = false) {
        global $DB, $CFG;

        $cm = get_coursemodule_from_instance('plugnmeet', $instanceid, 0, false, MUST_EXIST);
        $context = context_module::instance($cm->id);
        $instance = $DB->get_record('plugnmeet', ['id' => $instanceid], '*', MUST_EXIST);
        $roommetadata = json_decode($instance->roommetadata, true) ?: [];
        $config = get_config('mod_plugnmeet');

        if ($allowguestbypass) {
            // Guests may only start AI tutor rooms on activities with guest access enabled.
            if (
                empty($instance->allow_guest)
                || (isset($config->allow_guest_global) && $config->allow_guest_global == 0)
                || (($roommetadata['activity_mode'] ?? 'conference') !== 'ai_tutor')
            ) {
                throw new moodle_exception('guest_access_denied', 'mod_plugnmeet');
            }
        } else {
            self::validate_context($context);

            // Enforce capability (services.php declarations are metadata only).
            require_capability('mod/plugnmeet:view', $context);
        }

        // Check availability.
        $timenow = time();
        $canmanage = has_capability('mod/plugnmeet:manage', $context);

        if ($instance->available && $timenow < $instance->available && !$canmanage) {
            return [
                'status' => false,
                'msg' => get_string('session_not_started_yet', 'mod_plugnmeet'),
            ];
        }

        if ($instance->deadline && $timenow > $instance->deadline) {
            return [
                'status' => false,
                'msg' => get_string('session_ended', 'mod_plugnmeet'),
            ];
        }

        if (!empty($config->copyright_display)) {
            $roommetadata["copyright_conf"] = [
                "display" => (bool)$config->copyright_display,
                "text" => $config->copyright_text,
            ];
        }

        // Handle preloaded file for whiteboard.
        // Only add if whiteboard is allowed and a file is actually present in storage.
        if (isset($roommetadata['whiteboard_features']['is_allow']) && $roommetadata['whiteboard_features']['is_allow']) {
            $fs = get_file_storage();
            // We always use the instance ID as the itemid for files in the 'preload_file' area.
            $files = $fs->get_area_files($context->id, 'mod_plugnmeet', 'preload_file', $instance->id, 'itemid, filepath, filename', false);
            if ($files) {
                $file = reset($files);
                $url = moodle_url::make_pluginfile_url(
                    $file->get_contextid(),
                    $file->get_component(),
                    $file->get_filearea(),
                    $file->get_itemid(),
                    $file->get_filepath(),
                    $file->get_filename(),
                );
                $roommetadata['whiteboard_features']['preload_file'] = $url->out(false);
            }
        }

        // Pre-assign breakout rooms from course groups.
        $roommetadata = self::build_preassigned_rooms($roommetadata, $cm->course, $context);

        // Strip Moodle-only settings and normalize the AI agent features.
        $roommetadata = self::prepare_ai_agent_features($roommetadata, $config, (bool)$instance->allow_guest);

        $connect = new plugNmeetConnect($config);
        $logouturl = (new \moodle_url('/mod/plugnmeet/view.php', ['id' => $cm->id, 'returned' => 'true']))->out(false);
        $webhookurl = (new \moodle_url('/mod/plugnmeet/webhook.php', ['id' => $instanceid]))->out(false);
        $extradata = [
            "platform" => "moodle - " . $CFG->release,
            "php-version" => phpversion(),
            "plugin-version" => $config->version,
            "activity" => json_encode(["id" => $cm->id, "course" => $cm->course]),
        ];

        // Prepare initial room creation parameters.
        $roomoptions = [
            'roomid' => $instance->roomid,
            'roomname' => $instance->name,
            'roommetadata' => $roommetadata,
            'welcomemessage' => $instance->welcomemessage,
            'logouturl' => $logouturl,
            'webhookurl' => $webhookurl,
            'maxparticipants' => $instance->maxparticipants,
            'empty_timeout' => 0,
            'extradata' => $extradata,
        ];

        // Allow extensions to modify room creation parameters.
        try {
            foreach (ExtensionManager::get_room_options_addons() as $addon) {
                $roomoptions = $addon->modify_room_options('create_room', $roomoptions, $instance, $context);
            }
        } catch (Exception $e) {
            debugging('Error in PlugNmeet subplugin modify_room_options (create_room): ' . $e->getMessage(), DEBUG_DEVELOPER);
            RoomHelper::write_log_event($instance->id, 'create_room_modify_room_options', $e->getMessage());
        }

        try {
            $res = $connect->createRoom(
                $roomoptions['roomid'],
                $roomoptions['roomname'],
                $roomoptions['roommetadata'],
                $roomoptions['welcomemessage'],
                $roomoptions['logouturl'],
                $roomoptions['webhookurl'],
                $roomoptions['maxparticipants'],
                $roomoptions['empty_timeout'],
                $roomoptions['extradata']
            );

            if ($res->getStatus() && !empty($res->getRoomInfo())) {
                $sid = $res->getRoomInfo()->getSid();
                if ($sid) {
                    // Track this session in our local database.
                    $record = $DB->get_record('plugnmeet_sessions', ['sid' => $sid]);
                    if (!$record) {
                        $newsession = new \stdClass();
                        $newsession->plugnmeetid = $instance->id;
                        $newsession->sid = $sid;
                        $newsession->roomid = $instance->roomid;
                        $newsession->status = 1; // Active.
                        $newsession->analytics_processed = 0;
                        $newsession->timecreated = time();
                        $newsession->timemodified = time();
                        $DB->insert_record('plugnmeet_sessions', $newsession);
                    }
                }
            } else {
                RoomHelper::write_log_event($instance->id, 'create_room', $res->getMsg());
            }
        } catch (\Exception $e) {
            return [
                'status' => false,
                'msg' => html_entity_decode(strip_tags($e->getMessage())),
            ];
        }

        return ['status' => $res->getStatus(), 'msg' => $connect->getResponseError($res, get_string('room_subject', 'mod_plugnmeet'))];
    }

    /**
     * Returns description of the execute method.
     * @return external_single_structure
     */
    public static function execute_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'Status of the request'),
            'msg' => new external_value(PARAM_TEXT, 'Status message'),
        ]);
    }

    /**
     * When the teacher opted in via activity settings, translate course groups
     * into pre-assigned breakout rooms inside the room metadata.
     *
     * @param array $roommetadata The decoded room metadata array.
     * @param int $courseid The course ID (used to resolve course groups).
     * @param \context_module $context The module context (used to filter joinable users).
     * @return array The modified room metadata.
     */
    private static function build_preassigned_rooms(array $roommetadata, int $courseid, \context_module $context): array {
        $preassignflag = !empty($roommetadata['breakout_room_features']['preassign_from_groups']);
        // Internal flag: always strip it before sending to the server.
        unset($roommetadata['breakout_room_features']['preassign_from_groups']);

        if (!$preassignflag) {
            return $roommetadata;
        }

        $allowedrooms = (int)($roommetadata['breakout_room_features']['allowed_number_rooms'] ?? 0);

        // Users who can actually join this activity (single query).
        $joinable = [];
        foreach (get_enrolled_users($context, 'mod/plugnmeet:view') as $joinableuser) {
            $joinable[(int)$joinableuser->id] = true;
        }

        $preassignedrooms = [];
        $assignedusers = [];
        $groupcount = 0;
        foreach (groups_get_all_groups($courseid) as $group) {
            // Room title must not be empty (proto requires min_len 1).
            if (trim((string)$group->name) === '') {
                continue;
            }
            $groupcount++;
            $userids = [];
            foreach (groups_get_members($group->id, 'u.id') as $groupmember) {
                $memberid = (int)$groupmember->id;
                // Skip users who cannot join and users already assigned to an earlier group.
                if (isset($joinable[$memberid]) && !isset($assignedusers[$memberid])) {
                    $assignedusers[$memberid] = true;
                    $userids[] = (string)$memberid;
                }
            }
            $preassignedrooms[] = [
                'title' => $group->name,
                'user_ids' => $userids,
            ];
        }

        // One room per group: raise the room limit to the number of groups if needed.
        if ($groupcount > $allowedrooms) {
            $roommetadata['breakout_room_features']['allowed_number_rooms'] = $groupcount;
        }
        $roommetadata['breakout_room_features']['preassigned_rooms'] = $preassignedrooms;

        return $roommetadata;
    }

    /**
     * Prepare the AI agent metadata: drop Moodle-only keys, apply the global switch
     * and normalize every value the PlugNmeet server expects.
     *
     * @param array $roommetadata The decoded room metadata.
     * @param \stdClass $config The plugin configuration.
     * @param bool $allowguest Whether guests may join without a Moodle account.
     * @return array The modified room metadata.
     * @throws moodle_exception When a controlled AI session has no participant.
     */
    private static function prepare_ai_agent_features(array $roommetadata, \stdClass $config, bool $allowguest = false): array {
        $activitymode = $roommetadata['activity_mode'] ?? 'conference';
        $enablemcp = !empty($roommetadata['enable_mcp_servers']);
        $enableaiagent = (bool)($config->enable_ai_agent ?? 1);
        $isaitutor = ($activitymode === 'ai_tutor');
        $isconferenceai = !$isaitutor && !empty($roommetadata['insights_features']['is_allow'])
            && !empty($roommetadata['insights_features']['ai_agent_features']['is_allow']);

        // Moodle-only keys, never sent to the server.
        unset(
            $roommetadata['activity_mode'],
            $roommetadata['preset_template'],
            $roommetadata['enable_continuity'],
            $roommetadata['ai_grade_from_summary'],
            $roommetadata['enable_mcp_servers'],
        );

        if (!$enableaiagent || (!$isaitutor && !$isconferenceai)) {
            if (isset($roommetadata['insights_features']['ai_agent_features'])) {
                $roommetadata['insights_features']['ai_agent_features'] = ['is_allow' => false];
            }

            // MCP servers may still serve the plain AI text chat of a conference room.
            $textchatenabled = $enableaiagent && $enablemcp
                && !empty($roommetadata['insights_features']['is_allow'])
                && !empty($roommetadata['insights_features']['ai_features']['is_allow'])
                && !empty($roommetadata['insights_features']['ai_features']['ai_text_chat_features']['is_allow']);
            if ($textchatenabled) {
                foreach (self::get_mcp_servers($config) as $name => $server) {
                    if (in_array($server['scope'], ['text_chat', 'shared'], true)) {
                        $roommetadata['insights_features']['ai_features']['ai_text_chat_features']['mcp_servers'][$name]
                            = $server['config'];
                    }
                }
            }

            return $roommetadata;
        }

        // AI driven rooms always run with insights and breakout rooms enabled.
        $roommetadata['room_features'] = (array)($roommetadata['room_features'] ?? []);
        $roommetadata['room_features']['auto_gen_user_id'] = false;
        $roommetadata['room_features']['end_to_end_encryption_features']['enabled_self_insert_encryption_key'] = false;
        $roommetadata['room_features']['breakout_room_features']['is_allow'] = true;
        $roommetadata['insights_features'] = (array)($roommetadata['insights_features'] ?? []);
        $roommetadata['insights_features']['is_allow'] = true;

        $ai = (array)($roommetadata['insights_features']['ai_agent_features'] ?? []);
        $ai['is_allow'] = true;
        // Runtime state of the server, never accepted from the client.
        unset($ai['is_enabled'], $ai['active_session_id']);

        if ($isaitutor) {
            // Guests always get their own AI session.
            if ($allowguest) {
                $ai['session_mode'] = 2;
            }
            $roommetadata['room_features']['moderator_join_first'] = false;
            // The tutor needs the workspace tools to teach.
            $roommetadata['room_features']['whiteboard_features']['is_allow'] = true;
            $roommetadata['room_features']['shared_note_pad_features']['is_allow'] = true;
            $roommetadata['room_features']['polls_features']['is_allow'] = true;
            $roommetadata['room_features']['chat_features']['is_allow'] = true;
            // Completion rules such as minutes, mic or poll votes rely on analytics events.
            $roommetadata['room_features']['enable_analytics'] = true;

            // 1 = CONTROLLED_USERS, 2 = OPEN_PER_USER.
            $sessionmode = (int)($ai['session_mode'] ?? 2);
            $ai['session_mode'] = in_array($sessionmode, [1, 2], true) ? $sessionmode : 2;

            if ($ai['session_mode'] === 1) {
                $allowedids = self::normalize_list($ai['auto_session_config']['allowed_participant_ids'] ?? '', 32);
                if (empty($allowedids)) {
                    throw new moodle_exception('error_ai_participants_required', 'mod_plugnmeet');
                }
                $ai['auto_session_config'] = ['allowed_participant_ids' => $allowedids, 'auto_start_agent' => true];
            } else {
                $limit = max(1, min(16, (int)($config->ai_max_concurrent_sessions_limit ?? 16)));
                $concurrent = max(1, min($limit, (int)($ai['auto_session_config']['max_concurrent_sessions'] ?? 5)));
                $ai['auto_session_config'] = ['max_concurrent_sessions' => $concurrent, 'auto_start_agent' => true];
            }
        } else {
            $ai['session_mode'] = 0; // AI_AGENT_SESSION_MODE_NORMAL_ROOM.
            unset($ai['auto_session_config']);
        }

        $ai['agent_display_name'] = trim((string)($ai['agent_display_name'] ?? '')) ?: 'AI Tutor';
        $ai['topic'] = \core_text::substr(trim((string)($ai['topic'] ?? '')), 0, 200);
        $ai['system_prompt'] = trim((string)($ai['system_prompt'] ?? ''));
        $ai['allowed_subtopics'] = self::normalize_list($ai['allowed_subtopics'] ?? '', 64, 160);
        $ai['forbidden_topics'] = self::normalize_list($ai['forbidden_topics'] ?? '', 32, 160);

        // Proto3 drops false booleans, so always send them explicitly.
        $ai['strict_topic_enforcement'] = (bool)($ai['strict_topic_enforcement'] ?? true);
        $ai['allow_whiteboard_write'] = (bool)($ai['allow_whiteboard_write'] ?? true);
        $ai['allow_vision_capture'] = (bool)($ai['allow_vision_capture'] ?? true);
        $ai['allow_polls'] = (bool)($ai['allow_polls'] ?? true);
        $ai['allow_notepad_write'] = (bool)($ai['allow_notepad_write'] ?? true);
        $ai['allow_chat_message'] = (bool)($ai['allow_chat_message'] ?? true);

        if (!empty($config->ai_allow_web_fetch_global ?? 1) && !empty($ai['allow_web_fetch'])) {
            $ai['allow_web_fetch'] = true;
            $ai['allowed_knowledge_urls'] = self::normalize_urls($ai['allowed_knowledge_urls'] ?? '');
        } else {
            $ai['allow_web_fetch'] = false;
            unset($ai['allowed_knowledge_urls']);
        }

        $ai['topic_anchor_interval_turns'] = max(3, min(12, (int)($ai['topic_anchor_interval_turns'] ?? 6)));
        $rate = (float)($ai['speaking_rate'] ?? 1.0);
        $ai['speaking_rate'] = max(0.5, min(2.0, $rate ?: 1.0));

        $secondslimit = max(60, min(7200, (int)($config->ai_max_session_seconds_limit ?? 3600)));
        $defaultseconds = max(60, min($secondslimit, (int)($config->ai_default_max_session_seconds ?? 1800)));
        $ai['max_session_seconds'] = max(60, min($secondslimit, (int)($ai['max_session_seconds'] ?? $defaultseconds)));

        $audiolimit = max(0, min(240, (int)($config->ai_max_audio_minutes_limit ?? 120)));
        $defaultaudio = max(0, min($audiolimit, (int)($config->ai_default_max_audio_minutes ?? 30)));
        $ai['max_audio_minutes'] = max(0, min($audiolimit, (int)($ai['max_audio_minutes'] ?? $defaultaudio)));

        // Bring your own key provider from the site settings.
        if (!empty($config->ai_custom_provider_enabled) && trim((string)($config->ai_custom_api_key ?? '')) !== '') {
            $provider = [
                'provider' => in_array($config->ai_custom_provider ?? '', ['google', 'openai'], true)
                    ? $config->ai_custom_provider : 'google',
                'api_key' => trim((string)$config->ai_custom_api_key),
            ];
            $optionals = [
                'endpoint' => 'ai_custom_endpoint',
                'auth_header' => 'ai_custom_auth_header',
                'realtime_model' => 'ai_custom_realtime_model',
                'delegation_model' => 'ai_custom_delegation_model',
                'summarize_model' => 'ai_custom_summarize_model',
            ];
            foreach ($optionals as $key => $setting) {
                $value = trim((string)($config->$setting ?? ''));
                if ($value !== '') {
                    $provider[$key] = $value;
                }
            }
            $ai['custom_provider'] = $provider;
        } else {
            unset($ai['custom_provider']);
        }

        if ($enablemcp) {
            $textchatenabled = !empty($roommetadata['insights_features']['ai_features']['is_allow'])
                && !empty($roommetadata['insights_features']['ai_features']['ai_text_chat_features']['is_allow']);
            foreach (self::get_mcp_servers($config) as $name => $server) {
                if (in_array($server['scope'], ['ai_agent', 'shared'], true)) {
                    $ai['mcp_servers'][$name] = $server['config'];
                }
                if ($textchatenabled && in_array($server['scope'], ['text_chat', 'shared'], true)) {
                    $roommetadata['insights_features']['ai_features']['ai_text_chat_features']['mcp_servers'][$name]
                        = $server['config'];
                }
            }
        }

        $roommetadata['insights_features']['ai_agent_features'] = $ai;

        return $roommetadata;
    }

    /**
     * Build the external MCP server configs from the site settings, keyed by server name.
     *
     * @param \stdClass $config The plugin configuration.
     * @return array Name => ['scope' => string, 'config' => array].
     */
    private static function get_mcp_servers(\stdClass $config): array {
        $servers = [];
        for ($i = 1; $i <= 2; $i++) {
            if (empty($config->{"ai_mcp_{$i}_enabled"})) {
                continue;
            }
            $name = trim((string)($config->{"ai_mcp_{$i}_name"} ?? ''));
            $url = trim((string)($config->{"ai_mcp_{$i}_url"} ?? ''));
            if ($name === '' || \core_text::strlen($name) > 64 || !str_starts_with($url, 'https://')) {
                continue;
            }

            $headers = [];
            $lines = preg_split('/[\r\n]+/', (string)($config->{"ai_mcp_{$i}_headers"} ?? ''));
            foreach ($lines as $line) {
                $parts = explode(':', trim($line), 2);
                if (count($parts) === 2 && trim($parts[0]) !== '' && count($headers) < 16) {
                    $headers[trim($parts[0])] = trim($parts[1]);
                }
            }

            $scope = (string)($config->{"ai_mcp_{$i}_scope"} ?? '');
            $servers[$name] = [
                'scope' => in_array($scope, ['ai_agent', 'text_chat', 'shared'], true) ? $scope : 'ai_agent',
                'config' => [
                    'url' => $url,
                    'headers' => $headers,
                    'allowed_tools' => self::normalize_list($config->{"ai_mcp_{$i}_allowed_tools"} ?? '', 8),
                ],
            ];
        }

        return $servers;
    }

    /**
     * Normalize a comma/newline separated list (or array) into unique trimmed strings.
     *
     * @param mixed $value Raw value.
     * @param int $maxitems Maximum number of items to keep.
     * @param int $maxlen Truncate items to this length, 0 to keep them as is.
     * @return array
     */
    private static function normalize_list($value, int $maxitems, int $maxlen = 0): array {
        $items = is_string($value) ? preg_split('/[\r\n,]+/', $value) : (array)$value;
        $list = [];
        foreach ($items as $item) {
            $item = trim((string)$item);
            if ($item === '') {
                continue;
            }
            $list[] = $maxlen > 0 ? \core_text::substr($item, 0, $maxlen) : $item;
        }

        return array_slice(array_values(array_unique($list)), 0, $maxitems);
    }

    /**
     * Normalize the knowledge base URLs, keeping only valid https URLs.
     *
     * @param mixed $value Raw value.
     * @return array
     */
    private static function normalize_urls($value): array {
        $items = is_array($value) ? $value : preg_split('/[\r\n]+/', (string)$value);
        $urls = [];
        foreach ($items as $item) {
            $item = trim((string)$item);
            if (str_starts_with($item, 'https://') && \core_text::strlen($item) <= 1024 && !in_array($item, $urls, true)) {
                $urls[] = $item;
            }
        }

        return array_slice($urls, 0, 32);
    }
}
