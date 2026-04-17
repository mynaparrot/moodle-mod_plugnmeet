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

namespace mod_plugnmeet\helper;

use core\notification;
use MoodleExcelWorkbook;
use MoodleExcelFormat;

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->libdir . '/filelib.php');
require_once($CFG->libdir . '/excellib.class.php');

/**
 * Helper class for handling room analytics and reports.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class AnalyticsHelper {
    /**
     * @var string[]
     */
    protected array $roomfields = [
        "room_id", "room_title", "room_creation", "room_ended", "room_duration",
        "room_total_users", "enabled_e2ee", "recording_status", "rtmp_status",
        "external_media_player_status", "etherpad_status", "external_display_link_status",
        "ingress_created", "breakout_room",
    ];

    /**
     * @var string[]
     */
    protected array $userfields = [
        "name", "ex_user_id", "is_admin", "duration", "joined", "left", "mic_status",
        "mic_muted", "talked", "talked_duration", "webcam_status", "raise_hand",
        "voted_poll", "whiteboard_annotated", "whiteboard_files", "screen_share_status",
        "public_chat", "private_chat", "chat_files", "interface_invisible", "connection_quality",
    ];

    /**
     * @var array
     */
    protected array $roomdata = [];

    /**
     * @var array
     */
    protected array $usersdata = [];

    /**
     * @var array
     */
    protected mixed $analyticsdata = [
        "room"  => [],
        "users" => [],
    ];

    /**
     * @var \DateTimeZone
     */
    private \DateTimeZone $timezone;

    /**
     * @var string
     */
    private string $fileid;

    /**
     * Constructor.
     *
     * @param string $artifactid
     */
    public function __construct(string $artifactid) {
        $this->fileid = $artifactid;
        $this->timezone = new \DateTimeZone(get_user_timezone());

        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $res = $pnc->getArtifactDownloadToken($artifactid);

        if ($res->getStatus()) {
            $analyticsdata = $this->fetch_data($res->getToken());
            if (!empty($analyticsdata)) {
                $data = json_decode($analyticsdata, true);
                if (!empty($data)) {
                    $this->analyticsdata = $data;
                }
            }
        } else {
            notification::error($res->getMsg());
        }

        $this->format_room_data();
        $this->format_users_data();
    }

    /**
     * Fetches analytics data from server.
     *
     * @param string $token
     * @return bool|string|null
     * @throws \dml_exception
     */
    private function fetch_data(string $token) {
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
            notification::error("Error: " . $curl->get_errno());
            return null;
        }
        return $result;
    }

    /**
     * Returns the formatted analytics data.
     *
     * @return array
     */
    public function get_formatted_event_data(): array {
        return [
            "room"  => $this->roomdata,
            "users" => $this->usersdata,
        ];
    }

    /**
     * Returns the raw analytics data.
     *
     * @return array
     */
    public function get_raw_analytics_data(): array {
        return $this->analyticsdata;
    }

    /**
     * Returns user fields.
     *
     * @return string[]
     */
    public function get_user_fields(): array {
        return $this->userfields;
    }

    /**
     * Returns room fields.
     *
     * @return string[]
     */
    public function get_room_fields(): array {
        return $this->roomfields;
    }

    /**
     * Formats room data.
     *
     * @return void
     */
    private function format_room_data(): void {
        foreach ($this->analyticsdata["room"] as $key => $data) {
            if ($key !== "events") {
                if ($key === "room_creation" || $key === "room_ended") {
                    $data = $this->format_timestamp($data, false);
                } else if ($key === "room_id") {
                    $data = str_replace(get_config('mod_plugnmeet', 'plugnmeet_server_id') . "_", "", $data);
                }
                $this->roomdata[$key] = $data;
            }
        }
        if (isset($this->analyticsdata["room"]["events"])) {
            $this->format_room_events($this->analyticsdata["room"]["events"]);
        }
    }

    /**
     * Formats room events.
     *
     * @param array $events
     * @return void
     */
    private function format_room_events(array $events): void {
        foreach ($events as $event) {
            switch ($event["name"]) {
                case "recording_status":
                case "rtmp_status":
                case "external_media_player_status":
                case "external_display_link_status":
                case "etherpad_status":
                    $this->roomdata[$event["name"]] = $this->count_status_start_type_event($event["values"]);
                    break;
                case "ingress_created":
                case "breakout_room":
                    $this->roomdata[$event["name"]] = $event["total"];
                    break;
                case "whiteboard_files":
                    $this->roomdata[$event["name"]] = $event["values"];
                    break;
                case "poll_added":
                    $this->roomdata["polls"] = $this->format_room_polls($event["values"]);
                    break;
            }
        }
    }

    /**
     * Formats users data.
     *
     * @return void
     */
    private function format_users_data(): void {
        foreach ($this->analyticsdata["users"] as $user) {
            $u = [];
            foreach ($user as $key => $val) {
                if ($key !== "events") {
                    if ($key === "ex_user_id") {
                        $u["ex_user_id"] = $val;
                    } else {
                        $u[$key] = $val;
                    }
                }
            }
            $this->format_user_events($u, $user["events"]);
            $this->format_user_join_duration($u);
            $this->usersdata[] = $u;
        }
    }

    /**
     * Formats user events.
     *
     * @param array $user
     * @param array $events
     * @return void
     */
    private function format_user_events(array &$user, array $events): void {
        foreach ($events as $event) {
            switch ($event["name"]) {
                case "mic_status":
                    $user[$event["name"]] = $this->count_status_start_type_event($event["values"]);
                    $user["mic_muted"]    = $this->count_status_start_type_event($event["values"], "ANALYTICS_STATUS_MUTED");
                    break;
                case "webcam_status":
                case "screen_share_status":
                    $user[$event["name"]] = $this->count_status_start_type_event($event["values"]);
                    break;
                case "whiteboard_files":
                case "whiteboard_annotated":
                case "raise_hand":
                case "chat_files":
                case "private_chat":
                case "public_chat":
                case "talked":
                    $user[$event["name"]] = $event["total"];
                    break;
                case "talked_duration":
                    $user[$event["name"]] = (int)ceil((float)$event["total"] / 1000); // Store in seconds.
                    break;
                case "joined":
                case "left":
                    $user[$event["name"]] = array_map(function ($val) {
                        return (int)$val["value"];
                    }, $event["values"]);
                    sort($user[$event["name"]], SORT_NUMERIC);
                    break;
                case "interface_visibility":
                    $user["interface_invisible"] = $this->count_status_start_type_event($event["values"], "hidden");
                    break;
                case "connection_quality":
                    $user[$event["name"]]["excellent"] = $this->count_status_start_type_event($event["values"], "excellent");
                    $user[$event["name"]]["good"]      = $this->count_status_start_type_event($event["values"], "good");
                    $user[$event["name"]]["poor"]      = $this->count_status_start_type_event($event["values"], "poor");
                    break;
                case "voted_poll":
                    $user[$event["name"]] = $this->format_user_poll_voted($event["values"]);
                    break;
            }
        }
    }

    /**
     * Counts events of a certain status.
     *
     * @param array $data
     * @param string $type
     * @return int
     */
    private function count_status_start_type_event(array $data, string $type = "ANALYTICS_STATUS_STARTED"): int {
        $total = 0;
        foreach ($data as $val) {
            if (!empty($val["value"])) {
                if (stripos($type, $val["value"]) !== false) {
                    $total++;
                }
            }
        }

        return $total;
    }

    /**
     * Formats room polls.
     *
     * @param array $data
     * @return array
     */
    private function format_room_polls(array $data): array {
        $polls = [];
        foreach ($data as $val) {
            if (empty($val["value"])) {
                continue;
            }
            $p = json_decode($val["value"], true);

            $poll = [
                "created"  => $this->format_timestamp($val["time"]),
                "question" => $p["question"],
            ];

            foreach ($p["options"] as $opt) {
                $poll["options"][$opt["id"]] = [
                    "text"      => $opt["text"],
                    "responses" => 0,
                ];
            }
            $polls[$p["poll_id"]] = $poll;
        }

        return $polls;
    }

    /**
     * Formats user voted poll data.
     *
     * @param array $values
     * @return int
     */
    public function format_user_poll_voted(array $values): int {
        $total = 0;
        if (empty($values)) {
            return $total;
        }
        foreach ($values as $val) {
            $total++;
            $vote = json_decode($val["value"], true);
            if (isset($this->roomdata["polls"][$vote["poll_id"]])) {
                $this->roomdata["polls"][$vote["poll_id"]]["options"][$vote["selected_option"]]["responses"] += 1;
            }
        }

        return $total;
    }

    /**
     * Calculates user duration in the room.
     *
     * @param array $user
     * @return void
     */
    public function format_user_join_duration(array &$user): void {
        if (empty($user["joined"])) {
            $user["duration"] = 0;
            return;
        }

        $totalduration = 0;
        $roomendedtimestamp = null;

        if (isset($this->analyticsdata["room"]["room_ended"])) {
            $roomendedtimestamp = (float)$this->analyticsdata["room"]["room_ended"] * 1000;
        }

        $joinedevents = $user["joined"];
        $leftevents = $user["left"] ?? [];

        sort($joinedevents);
        sort($leftevents);

        $leftindex = 0;
        foreach ($joinedevents as $jointime) {
            $leavetime = null;

            while ($leftindex < count($leftevents) && $leftevents[$leftindex] <= $jointime) {
                $leftindex++;
            }

            if ($leftindex < count($leftevents)) {
                $leavetime = (float)$leftevents[$leftindex];
                $leftindex++;
            } else {
                $leavetime = (float)$roomendedtimestamp;
            }

            if ($leavetime > (float)$jointime) {
                $totalduration += ($leavetime - (float)$jointime);
            }
        }

        $user["duration"] = (int)ceil($totalduration / 1000); // Store in seconds.
    }

    /**
     * Generates XLSX file for analytics.
     *
     * @param string $filename
     * @return void
     */
    public function generate_xlsx_file(string $filename): void {
        $workbook = new MoodleExcelWorkbook($filename);

        $headerformat = new MoodleExcelFormat([
            'bold' => 1,
            'size' => 12,
            'color' => '1171A3',
        ]);

        $this->format_room_xlsx($workbook, $headerformat);
        $this->format_users_xlsx($workbook, $headerformat);
        $this->format_polls_xlsx($workbook, $headerformat);
        $this->format_whiteboard_files_xlsx($workbook, $headerformat);

        $workbook->close();
    }

    /**
     * Formats room sheet in XLSX.
     *
     * @param MoodleExcelWorkbook $workbook
     * @param MoodleExcelFormat $headerformat
     * @return void
     */
    private function format_room_xlsx(MoodleExcelWorkbook $workbook, MoodleExcelFormat $headerformat): void {
        $sheet = $workbook->add_worksheet(get_string('room_info', 'plugnmeet'));

        $sheet->set_column(0, 0, 30);
        $sheet->set_column(1, 1, 50);

        $rowindex = 0;
        foreach ($this->roomfields as $field) {
            $data = $this->roomdata[$field] ?? 0;

            $title = get_string('analytics_room_' . $field, 'plugnmeet');
            $sheet->write_string($rowindex, 0, $title, $headerformat);

            $formatteddata = $this->format_room_data_for_xlsx($data, $field);
            $sheet->write_string($rowindex, 1, (string)$formatteddata);
            $rowindex++;
        }
    }

    /**
     * Formats room data for XLSX.
     *
     * @param mixed $data
     * @param string $field
     * @return mixed
     */
    private function format_room_data_for_xlsx(mixed $data, string $field): mixed {
        if ($field === "room_duration" || $field === "speech_service_total_usage") {
            return $this->format_seconds_to_time($data);
        }

        if (is_bool($data) || $field === "enabled_e2ee") {
            return $data ? get_string('yes', 'plugnmeet') : get_string('no', 'plugnmeet');
        }

        return $data;
    }

    /**
     * Formats users sheet in XLSX.
     *
     * @param MoodleExcelWorkbook $workbook
     * @param MoodleExcelFormat $headerformat
     * @return void
     */
    private function format_users_xlsx(MoodleExcelWorkbook $workbook, MoodleExcelFormat $headerformat): void {
        $sheet = $workbook->add_worksheet(get_string('users_info', 'plugnmeet'));

        $columnmap   = [];
        $columnindex = 0;
        foreach ($this->userfields as $field) {
            $columnmap[$field] = $columnindex++;
        }

        foreach ($columnmap as $field => $colindex) {
            $sheet->set_column($colindex, $colindex, 25);
            $title = get_string('analytics_user_' . str_replace("user_", "", $field), 'plugnmeet');
            $sheet->write_string(0, $colindex, $title, $headerformat);
        }

        foreach ($this->usersdata as $rowindex => $user) {
            $currentrow = $rowindex + 1;
            foreach ($columnmap as $field => $colindex) {
                $data = $user[$field] ?? 0;
                $formatteddata = $this->format_user_data_for_xlsx($data, $field);
                $sheet->write_string($currentrow, $colindex, (string)$formatteddata);
            }
        }
    }

    /**
     * Formats user data for XLSX.
     *
     * @param mixed $data
     * @param string $field
     * @return mixed
     */
    private function format_user_data_for_xlsx(mixed $data, string $field): mixed {
        if ($field === "joined" || $field === "left") {
            if (empty($data)) {
                return 0;
            }
            $arr = array_map(function ($d) {
                return $this->format_timestamp($d);
            }, (array)$data);

            return implode("\n", $arr);
        }

        if ($field === "connection_quality") {
            if (empty($data)) {
                return 0;
            }
            $arr = array_map(function ($k, $v) {
                $title = get_string('analytics_user_connection_quality_' . $k, 'plugnmeet');
                return $title . ": " . $v;
            }, array_keys((array)$data), array_values((array)$data));

            return implode("\n", $arr);
        }

        if ($field === "duration" || $field === "talked_duration" || $field === "speech_service_total_usage") {
            return $this->format_seconds_to_time($data);
        }

        if (is_bool($data)) {
            return $data ? get_string('yes', 'plugnmeet') : get_string('no', 'plugnmeet');
        }

        return $data;
    }

    /**
     * Formats polls sheet in XLSX.
     *
     * @param MoodleExcelWorkbook $workbook
     * @param MoodleExcelFormat $headerformat
     * @return void
     */
    private function format_polls_xlsx(MoodleExcelWorkbook $workbook, MoodleExcelFormat $headerformat): void {
        if (empty($this->roomdata["polls"])) {
            return;
        }
        $sheet = $workbook->add_worksheet(get_string('polls', 'plugnmeet'));

        $sheet->set_column(0, 0, 50);
        $sheet->set_column(1, 1, 50);
        $sheet->set_column(2, 2, 30);

        $sheet->write_string(0, 0, get_string('question', 'plugnmeet'), $headerformat);
        $sheet->write_string(0, 1, get_string('options', 'plugnmeet'), $headerformat);
        $sheet->write_string(0, 2, get_string('created_at', 'plugnmeet'), $headerformat);

        $i = 1;
        foreach ($this->roomdata["polls"] as $poll) {
            $sheet->write_string($i, 0, $poll["question"]);
            $sheet->write_string($i, 2, $poll["created"]);

            $arr  = array_map(function ($v) {
                return $v["text"] . ": " . $v["responses"];
            }, $poll["options"]);
            $data = implode("\n", $arr);
            $sheet->write_string($i, 1, $data, new MoodleExcelFormat(['text_wrap' => true]));

            $i++;
        }
    }

    /**
     * Formats whiteboard files sheet in XLSX.
     *
     * @param MoodleExcelWorkbook $workbook
     * @param MoodleExcelFormat $headerformat
     * @return void
     */
    private function format_whiteboard_files_xlsx(MoodleExcelWorkbook $workbook, MoodleExcelFormat $headerformat): void {
        if (empty($this->roomdata["whiteboard_files"])) {
            return;
        }
        $sheet = $workbook->add_worksheet(get_string('whiteboard_files', 'plugnmeet'));

        $sheet->set_column(0, 0, 50);
        $sheet->set_column(1, 1, 30);

        $sheet->write_string(0, 0, get_string('file_name', 'plugnmeet'), $headerformat);
        $sheet->write_string(0, 1, get_string('created_at', 'plugnmeet'), $headerformat);

        $i = 1;
        foreach ($this->roomdata["whiteboard_files"] as $file) {
            $created = $this->format_timestamp($file["time"]);

            $sheet->write_string($i, 0, $file["value"], new MoodleExcelFormat(['text_wrap' => true]));
            $sheet->write_string($i, 1, $created, new MoodleExcelFormat(['text_wrap' => true]));

            $i++;
        }
    }

    /**
     * Formats timestamp.
     *
     * @param mixed $timestamp
     * @param bool $ms
     * @return string
     */
    public function format_timestamp($timestamp, bool $ms = true): string {
        $t = new \DateTime();
        $val = $ms ? (int)floor((float)$timestamp / 1000) : (int)floor((float)$timestamp);
        $t->setTimestamp($val);
        $t->setTimezone($this->timezone);

        return $t->format("d-m-Y H:i:s P");
    }

    /**
     * Formats seconds to H:i:s.
     *
     * @param mixed $seconds
     * @return string
     */
    public function format_seconds_to_time($seconds): string {
        $s = (int)round((float)$seconds);
        $h = intdiv($s, 3600);
        $m = intdiv($s % 3600, 60);
        $sec = $s % 60;

        return sprintf("%02d:%02d:%02d", (int)$h, (int)$m, (int)$sec);
    }
}
