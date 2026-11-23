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

use context_system;
use html_writer;
use mod_plugnmeet\event\plugin_error;
use Mynaparrot\PlugnmeetProto\ActiveRoomWithParticipant;
use Mynaparrot\PlugnmeetProto\RoomMetadata;
use Livekit\TrackSource;
use moodle_url;
use cache; // Added for caching.
use mod_plugnmeet\helper\plugNmeetConnect; // Added for plugNmeetConnect.

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
            'creation_time_formatted' => userdate((int) $roominfo->getCreationTime()),
            'webcams' => 0,
            'mics' => 0,
            'screenshares' => 0,
            'course_url' => '',
            'course_name' => '',
            'activity_url' => '',
            'activity_name' => '',
            'participants_info' => [],
            'breakout_rooms' => [],
        ];

        // Process Participants for stats and details.
        $participants = self::process_participants($room->getParticipantsInfo());
        $data['participants_info'] = $participants['participants_info'];
        $data['webcams'] += $participants['webcams'];
        $data['mics'] += $participants['mics'];
        $data['screenshares'] += $participants['screenshares'];

        // Active breakout rooms, including AI tutor sessions.
        foreach ($room->getBreakoutRooms() as $breakoutroom) {
            $bkinfo = $breakoutroom->getRoomInfo();
            if (!$bkinfo) {
                continue;
            }

            $bkparticipants = self::process_participants($breakoutroom->getParticipantsInfo());
            $data['webcams'] += $bkparticipants['webcams'];
            $data['mics'] += $bkparticipants['mics'];
            $data['screenshares'] += $bkparticipants['screenshares'];

            $data['breakout_rooms'][] = [
                'room_id' => $bkinfo->getRoomId(),
                'room_title' => $bkinfo->getRoomTitle() ?: $bkinfo->getRoomId(),
                'joined_participants' => (int)$bkinfo->getJoinedParticipants(),
                'creation_time' => (int)$bkinfo->getCreationTime(),
                'participants_info' => $bkparticipants['participants_info'],
                'has_participants' => !empty($bkparticipants['participants_info']),
            ];
        }

        // Process Metadata for Moodle Info.
        $roommetadatajson = $roominfo->getMetadata();
        if (!empty($roommetadatajson)) {
            $metadata = new RoomMetadata();
            $metadata->mergeFromJsonString($roommetadatajson, true);
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
     * Builds participant details and track totals for a room.
     *
     * @param iterable $participants
     * @return array
     */
    private static function process_participants($participants): array {
        $result = [
            'participants_info' => [],
            'webcams' => 0,
            'mics' => 0,
            'screenshares' => 0,
        ];

        foreach ($participants as $participant) {
            $pwebcams = 0;
            $pmics = 0;
            $pscreenshares = 0;

            foreach ($participant->getTracks() as $track) {
                if ($track->getSource() === TrackSource::CAMERA) {
                    $pwebcams++;
                } else if ($track->getSource() === TrackSource::MICROPHONE) {
                    $pmics++;
                } else if ($track->getSource() === TrackSource::SCREEN_SHARE) {
                    $pscreenshares++;
                }
            }

            $result['webcams'] += $pwebcams;
            $result['mics'] += $pmics;
            $result['screenshares'] += $pscreenshares;

            $metadata = $participant->getMetadata();
            $isadmin = false;
            $ispresenter = false;

            if (!empty($metadata)) {
                $userinfo = json_decode($metadata);
                $isadmin = $userinfo->is_admin ?? false;
                $ispresenter = $userinfo->is_presenter ?? false;
            }

            $result['participants_info'][] = [
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

        return $result;
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

    /**
     * Formats a duration in seconds, e.g. "1h 05m", "12m 30s" or "45s".
     *
     * @param int $seconds
     * @return string
     */
    public static function format_duration(int $seconds): string {
        $seconds = max(0, $seconds);
        $hours = intdiv($seconds, 3600);
        $minutes = intdiv($seconds % 3600, 60);

        if ($hours > 0) {
            return sprintf('%dh %02dm', $hours, $minutes);
        }
        if ($minutes > 0) {
            return sprintf('%dm %02ds', $minutes, $seconds % 60);
        }
        return sprintf('%ds', $seconds);
    }

    /**
     * Bootstrap badge class for an AI mastery level.
     *
     * @param string $level
     * @return string
     */
    public static function mastery_badge_class(string $level): string {
        switch (strtolower(trim($level))) {
            case 'advanced':
                return 'bg-success text-white';
            case 'proficient':
                return 'bg-info text-dark';
            case 'developing':
                return 'bg-warning text-dark';
            default:
                return 'bg-secondary text-white';
        }
    }

    /**
     * Write log by event
     *
     * @param string $objectid
     * @param string $type
     * @param string $message
     * @return void
     */
    public static function write_log_event(string $objectid, string $type, string $message) {
        try {
            $event = plugin_error::create([
                'context' => context_system::instance(),
                'other' => [
                    'objectid' => $objectid,
                    'type' => $type,
                    'message' => $message,
                ],
            ]);
            $event->trigger();
        } catch (\Exception $e) {
            debugging($e->getMessage());
        }
    }

    /**
     * Fetches and caches meeting summary artifact.
     *
     * @param string $artifactid
     * @return string|null
     * @throws \dml_exception
     */
    public static function get_meeting_summary(string $artifactid): ?string {
        global $CFG;

        require_once($CFG->dirroot . '/mod/plugnmeet/classes/helper/plugNmeetConnect.php');
        require_once($CFG->libdir . '/filelib.php');

        $cache = cache::make('mod_plugnmeet', 'artifact_info');
        $summerykey = sprintf("meeting_summer_%s", $artifactid);
        $cachedata = $cache->get($summerykey);

        if ($cachedata) {
            return $cachedata;
        } else {
            $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
            $res = $pnc->getArtifactDownloadToken($artifactid);

            if ($res->getStatus()) {
                $summarycontent = self::fetch_artifact_data($artifactid, $res->getToken());
                if (!empty($summarycontent)) {
                    // Remove the header "Meeting Summary for: [UUID]\n---\n" using regex.
                    $cleancontent = preg_replace(
                        '~^Meeting Summary for:.*\R+\R+---\R+\R+~s',
                        '',
                        $summarycontent
                    );
                    $cleancontent = str_replace("h3>", "h6>", $cleancontent);

                    $cache->set($summerykey, $cleancontent);
                    return $cleancontent;
                }
            } else {
                self::write_log_event($artifactid, 'RoomHelper', "Error during fetching meeting summary download token: " . $res->getMsg());
            }
        }
        return null;
    }

    /**
     * Fetches and caches the AI agent session summary artifact as an array.
     *
     * @param string $artifactid
     * @return array|null
     */
    public static function get_ai_agent_session_summary(string $artifactid): ?array {
        $cache = cache::make('mod_plugnmeet', 'artifact_info');
        $cachekey = 'ai_summary_' . $artifactid;
        $cached = $cache->get($cachekey);

        if (is_array($cached)) {
            return $cached;
        }

        try {
            $connect = new plugNmeetConnect(get_config('mod_plugnmeet'));
            $res = $connect->getArtifactDownloadToken($artifactid);

            if (!$res->getStatus() || !$res->getToken()) {
                self::write_log_event($artifactid, 'RoomHelper', 'Error during fetching AI session summary download token: ' . $res->getMsg());
                return null;
            }

            $rawcontent = self::fetch_artifact_data($artifactid, $res->getToken());
            $data = json_decode((string)$rawcontent, true);

            if (is_array($data) && !empty($data)) {
                $cache->set($cachekey, $data);
                return $data;
            }
        } catch (\Exception $e) {
            debugging('Error fetching AI agent session summary: ' . $e->getMessage(), DEBUG_DEVELOPER);
        }

        return null;
    }

    /**
     * Fetches artifact data from server.
     *
     * @param string $artifactid
     * @param string $token
     * @return bool|string|null
     * @throws \dml_exception
     */
    private static function fetch_artifact_data(string $artifactid, string $token) {
        $ignoresecurity = false;

        $serverurl = rtrim(get_config('mod_plugnmeet', 'plugnmeet_server_url'), '/');
        if (str_contains($serverurl, 'http://')) {
            $ignoresecurity = true;
        }
        $host = $serverurl . "/download/artifact/" . $token;

        $curl = new \curl([
                'ignoresecurity' => $ignoresecurity,
            ]);
        $result = $curl->get($host);

        if ($curl->get_errno()) {
            self::write_log_event($artifactid, 'RoomHelper', "Error during fetching artifact by CURL: " . $curl->get_errno());
            return null;
        }
        return $result;
    }

    /**
     * JS that fills the AI system prompt from the selected preset template.
     *
     * @param array $presets Preset key => prompt text.
     * @return string
     */
    public static function get_ai_form_script_html(array $presets): string {
        return '<script>
            (function() {
                const preset = document.getElementById("id_meta_preset_template");
                const prompt = document.getElementById("id_meta_insights_features_ai_agent_features_system_prompt");
                if (!preset || !prompt) {
                    return;
                }
                const presets = ' . json_encode($presets) . ';
                preset.addEventListener("change", function() {
                    const text = presets[preset.value];
                    if (!text) {
                        return;
                    }
                    const current = prompt.value.trim();
                    const known = Object.keys(presets).map(function(key) {
                        return presets[key];
                    });
                    if (current !== "" && known.indexOf(current) === -1 &&
                            !window.confirm(' . json_encode(get_string('ai_preset_replace_prompt', 'mod_plugnmeet')) . ')) {
                        return;
                    }
                    prompt.value = text;
                    prompt.dispatchEvent(new Event("change", {bubbles: true}));
                });
            })();
        </script>';
    }

    /**
     * JS that toggles the feature sections and syncs the AI completion rules.
     *
     * @return string
     */
    public static function get_ai_sections_script_html(): string {
        return '<script>
            (function() {
                const sections = ["room_features_header", "whiteboard_features_header", "recording_broadcasting_features_header",
                    "chat_features_header", "other_features_header", "e2ee_features_header", "insights_features_header",
                    "default_lock_header"];
                const mode = document.getElementById("id_meta_activity_mode");
                const insights = document.getElementById("id_meta_insights_features_is_allow");
                const agent = document.getElementById("id_meta_insights_features_ai_agent_features_is_allow");
                const agentheader = document.getElementById("id_ai_agent_features_header");
                const guest = document.getElementById("id_allow_guest");
                const sessionmode = document.getElementById("id_meta_insights_features_ai_agent_features_session_mode");
                const toggle = function(el, show) {
                    if (!el) {
                        return;
                    }
                    el.hidden = !show;
                    el.style.display = show ? "" : "none";
                };
                // Agent rows are also driven by Moodle "show more" rules, so only flip the hidden
                // attribute and let its CSS decide the display value.
                const togglerow = function(el, show) {
                    if (!el) {
                        return;
                    }
                    el.hidden = !show;
                };
                // Agent rows driven by Moodle hideIf rules, never force those open or closed here.
                const agentmoodle = ["fitem_id_meta_insights_features_ai_agent_features_session_mode",
                    "fitem_id_meta_insights_features_ai_agent_features_auto_session_config_max_concurrent_sessions",
                    "fitem_id_meta_insights_features_ai_agent_features_auto_session_config_allowed_participant_ids",
                    "fitem_id_ai_allowed_participants_actions"];
                // Every agent row after the enable switch, up to the next section header.
                const agentrows = function() {
                    const rows = [];
                    const first = document.getElementById("fitem_id_meta_insights_features_ai_agent_features_is_allow");
                    if (!first) {
                        return rows;
                    }
                    let el = first.nextElementSibling;
                    while (el) {
                        if (el.id && /_header$/.test(el.id)) {
                            break;
                        }
                        if (el.classList.contains("fitem")) {
                            rows.push(el);
                        } else {
                            Array.prototype.push.apply(rows, el.querySelectorAll(".fitem"));
                        }
                        el = el.nextElementSibling;
                    }
                    return rows.filter(function(row) {
                        return agentmoodle.indexOf(row.id) === -1;
                    });
                };
                const aicompletionrules = ["completionaisessioncompleted", "completionaiminscore"];
                const sync = function() {
                    const istutor = !!mode && mode.value === "ai_tutor";
                    const showagentheader = istutor || (!!insights && insights.checked);
                    // Tutor mode ignores the agent switch, so never force it on - the user state survives mode changes.
                    const hasai = istutor || (!!insights && insights.checked && !!agent && agent.checked);
                    sections.forEach(function(id) {
                        toggle(document.getElementById("id_" + id), !istutor);
                    });
                    toggle(agentheader, showagentheader);
                    agentrows().forEach(function(row) {
                        togglerow(row, hasai);
                    });
                    // The "Show more..." link lives in the header, hide it with the rows it opens.
                    if (agentheader) {
                        Array.prototype.forEach.call(agentheader.querySelectorAll(".moreless-actions"), function(el) {
                            togglerow(el, hasai);
                        });
                    }
                    aicompletionrules.forEach(function(id) {
                        toggle(document.getElementById("fitem_id_" + id), hasai);
                        if (hasai) {
                            return;
                        }
                        // Hidden rules would still be submitted, so reset them when AI is off.
                        const rule = document.getElementById("id_" + id);
                        if (!rule) {
                            return;
                        }
                        if (rule.type === "checkbox") {
                            rule.checked = false;
                        } else {
                            rule.value = "0";
                        }
                    });
                    if (istutor) {
                        // Hidden rules would still be submitted, so reset them for AI tutor rooms.
                        ["completionraisedhand", "completionwebcam"].forEach(function(id) {
                            const el = document.getElementById("id_" + id);
                            if (el) {
                                el.checked = false;
                            }
                        });
                        const webcamduration = document.getElementById("id_completionwebcamduration");
                        if (webcamduration) {
                            webcamduration.value = "0";
                        }
                    }
                };
                [mode, insights, agent].forEach(function(el) {
                    if (el) {
                        el.addEventListener("change", sync);
                    }
                });
                if (guest) {
                    guest.addEventListener("change", function() {
                        if (!guest.checked || !sessionmode) {
                            return;
                        }
                        sessionmode.value = "2";
                        sessionmode.dispatchEvent(new Event("change", {bubbles: true}));
                    });
                }
                // Completion rules are added after this script, so sync again once the DOM is ready.
                document.addEventListener("DOMContentLoaded", sync);
                sync();
            })();
        </script>';
    }

    /**
     * HTML row with the select all, clear all and course group shortcuts for the assigned students picker.
     *
     * @param array $groupmembers Group id => ['name' => string, 'members' => string[]].
     * @return string
     */
    public static function get_ai_participants_actions_html(array $groupmembers): string {
        $selectid = 'id_meta_insights_features_ai_agent_features_auto_session_config_allowed_participant_ids';

        $html = html_writer::start_div('d-flex flex-wrap gap-2 mb-2');
        $html .= html_writer::tag('button', get_string('ai_select_all', 'mod_plugnmeet'), [
            'type' => 'button',
            'id' => 'pn_ai_select_all',
            'class' => 'btn btn-outline-secondary btn-sm',
        ]);
        $html .= html_writer::tag('button', get_string('ai_clear_all', 'mod_plugnmeet'), [
            'type' => 'button',
            'id' => 'pn_ai_clear_all',
            'class' => 'btn btn-outline-secondary btn-sm',
        ]);
        if ($groupmembers) {
            $options = [];
            foreach ($groupmembers as $groupid => $group) {
                $options[$groupid] = $group['name'];
            }
            $html .= html_writer::select(
                $options,
                'pn_ai_group',
                '',
                ['' => get_string('ai_add_group_members', 'mod_plugnmeet')],
                ['id' => 'pn_ai_group', 'class' => 'form-select form-select-sm w-auto']
            );
        }
        $html .= html_writer::end_div();

        $html .= '<script>
            (function() {
                const select = document.getElementById(' . json_encode($selectid) . ');
                if (!select) {
                    return;
                }
                const groupmembers = ' . json_encode(array_map(fn($group) => $group['members'], $groupmembers)) . ';
                const apply = function(ids) {
                    Array.prototype.forEach.call(select.options, function(option) {
                        option.selected = ids.indexOf(option.value) !== -1;
                    });
                    select.dispatchEvent(new Event("change", {bubbles: true}));

                    require(["jquery", "core/form-autocomplete"], function($, autocomplete) {
                        if (!$(select).data("enhanced")) {
                            return;
                        }
                        // The autocomplete chips are only rendered while enhancing, so rebuild them.
                        const wrapper = select.parentNode;
                        Array.prototype.slice.call(wrapper.querySelectorAll("[id^=form_autocomplete_]")).forEach(function(node) {
                            while (node && node.parentNode !== wrapper) {
                                node = node.parentNode;
                            }
                            if (node) {
                                wrapper.removeChild(node);
                            }
                        });
                        const fitem = select.closest(".fitem");
                        const label = fitem ? fitem.querySelector("label") : null;
                        if (label) {
                            label.setAttribute("for", select.id);
                        }
                        $(select).removeData("enhanced");
                        autocomplete.enhance("#' . $selectid . '", false, false, "", false, true, "");
                    });
                };
                const selected = function() {
                    return Array.prototype.filter.call(select.options, function(option) {
                        return option.selected;
                    }).map(function(option) {
                        return option.value;
                    });
                };
                document.getElementById("pn_ai_select_all").addEventListener("click", function() {
                    apply(Array.prototype.map.call(select.options, function(option) {
                        return option.value;
                    }).slice(0, 32));
                });
                document.getElementById("pn_ai_clear_all").addEventListener("click", function() {
                    apply([]);
                });
                const group = document.getElementById("pn_ai_group");
                if (group) {
                    group.addEventListener("change", function() {
                        const ids = selected();
                        (groupmembers[group.value] || []).forEach(function(id) {
                            if (ids.indexOf(id) === -1) {
                                ids.push(id);
                            }
                        });
                        apply(ids);
                    });
                }
            })();
        </script>';

        return $html;
    }
}
