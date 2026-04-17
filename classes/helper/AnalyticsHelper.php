<?php

namespace mod_plugnmeet\helper;

use core\notification;
use MoodleExcelWorkbook;
use MoodleExcelFormat;

defined('MOODLE_INTERNAL') || die();

/**
 * Helper class for handling room analytics and reports.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class AnalyticsHelper
{
    /**
     * @var string[]
     */
    protected array $room_fields = array(
        "room_id", "room_title", "room_creation", "room_ended", "room_duration",
        "room_total_users", "enabled_e2ee", "recording_status", "rtmp_status",
        "external_media_player_status", "etherpad_status", "external_display_link_status",
        "ingress_created", "breakout_room"
    );

    /**
     * @var string[]
     */
    protected array $user_fields = array(
        "name", "ex_user_id", "is_admin", "duration", "joined", "left", "mic_status",
        "mic_muted", "talked", "talked_duration", "webcam_status", "raise_hand",
        "voted_poll", "whiteboard_annotated", "whiteboard_files", "screen_share_status",
        "public_chat", "private_chat", "chat_files", "interface_invisible", "connection_quality"
    );

    /**
     * @var array
     */
    protected array $room_data = array();

    /**
     * @var array
     */
    protected array $users_data = array();

    /**
     * @var array
     */
    protected mixed $analytics_data = array(
        "room"  => array(),
        "users" => array()
    );

    /**
     * @var \DateTimeZone
     */
    private \DateTimeZone $timezone;

    /**
     * @var string
     */
    private string $file_id;

    /**
     * Constructor.
     *
     * @param string $artifact_id
     * @throws \DateInvalidTimeZoneException
     */
    public function __construct(string $artifact_id) {
        global $CFG;

        require_once($CFG->libdir . '/excellib.class.php');

        $this->file_id = $artifact_id;
        $this->timezone = new \DateTimeZone(get_user_timezone());

        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $res = $pnc->getArtifactDownloadToken($artifact_id);

        if ($res->getStatus()) {
            $analytics_data = $this->fetch_data($res->getToken());
            if (!empty($analytics_data)) {
                $data = json_decode($analytics_data, true);
                if (!empty($data)) {
                    $this->analytics_data = $data;
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
     */
    private function fetch_data(string $token) {
        $server_url = rtrim(get_config('mod_plugnmeet', 'plugnmeet_server_url'), '/');
        $host = $server_url . "/download/artifact/" . $token;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $host);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result   = curl_exec($ch);
        $errno    = curl_errno($ch);
        $error    = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if (0 !== $errno) {
             notification::error("Error: " . $error);
            return null;
        }
        if ((int) $http_code === 200) {
            return $result;
        }

        return null;
    }

    /**
     * Returns the formatted analytics data.
     *
     * @return array
     */
    public function get_formatted_event_data(): array {
        return array(
            "room"  => $this->room_data,
            "users" => $this->users_data
        );
    }

    /**
     * Returns the raw analytics data.
     *
     * @return array
     */
    public function get_raw_analytics_data(): array {
        return $this->analytics_data;
    }

    /**
     * Returns user fields.
     *
     * @return string[]
     */
    public function get_user_fields(): array {
        return $this->user_fields;
    }

    /**
     * Returns room fields.
     *
     * @return string[]
     */
    public function get_room_fields(): array {
        return $this->room_fields;
    }

    /**
     * Formats room data.
     *
     * @return void
     */
    private function format_room_data(): void {
        foreach ($this->analytics_data["room"] as $key => $data) {
            if ($key !== "events") {
                if ($key === "room_creation" || $key === "room_ended") {
                    $data = $this->format_timestamp($data, false);
                } elseif ($key === "room_id") {
                    $data = str_replace(get_config('mod_plugnmeet', 'plugnmeet_server_id') . "_", "", $data);
                }
                $this->room_data[$key] = $data;
            }
        }
        if (isset($this->analytics_data["room"]["events"])) {
            $this->format_room_events($this->analytics_data["room"]["events"]);
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
                    $this->room_data[$event["name"]] = $this->count_status_start_type_event($event["values"]);
                    break;
                case "ingress_created":
                case "breakout_room":
                    $this->room_data[$event["name"]] = $event["total"];
                    break;
                case "whiteboard_files":
                    $this->room_data[$event["name"]] = $event["values"];
                    break;
                case "poll_added":
                    $this->room_data["polls"] = $this->format_room_polls($event["values"]);
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
        foreach ($this->analytics_data["users"] as $user) {
            $u = array();
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
            $this->users_data[] = $u;
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
                    $user[$event["name"]] = (int)ceil((float)$event["total"] / 1000); // Store in seconds
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

            $poll = array(
                "created"  => $this->format_timestamp($val["time"]),
                "question" => $p["question"]
            );

            foreach ($p["options"] as $opt) {
                $poll["options"][$opt["id"]] = array(
                    "text"      => $opt["text"],
                    "responses" => 0
                );
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
            if (isset($this->room_data["polls"][$vote["poll_id"]])) {
                $this->room_data["polls"][$vote["poll_id"]]["options"][$vote["selected_option"]]["responses"] += 1;
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

        $total_duration = 0;
        $room_ended_timestamp = null;

        if (isset($this->analytics_data["room"]["room_ended"])) {
            $room_ended_timestamp = (float)$this->analytics_data["room"]["room_ended"] * 1000;
        }

        $joined_events = $user["joined"];
        $left_events = $user["left"] ?? [];

        sort($joined_events);
        sort($left_events);

        $left_index = 0;
        foreach ($joined_events as $join_time) {
            $leave_time = null;

            while ($left_index < count($left_events) && $left_events[$left_index] <= $join_time) {
                $left_index++;
            }

            if ($left_index < count($left_events)) {
                $leave_time = (float)$left_events[$left_index];
                $left_index++;
            } else {
                $leave_time = (float)$room_ended_timestamp;
            }

            if ($leave_time > (float)$join_time) {
                $total_duration += ($leave_time - (float)$join_time);
            }
        }

        $user["duration"] = (int)ceil($total_duration / 1000); // Store in seconds
    }

    /**
     * Generates XLSX file for analytics.
     *
     * @param string $file_name
     * @return void
     */
    public function generate_xlsx_file(string $file_name): void {
        $workbook = new MoodleExcelWorkbook($file_name);

        $header_format = new MoodleExcelFormat([
            'bold' => 1,
            'size' => 12,
            'color' => '1171A3',
        ]);

        $this->format_room_xlsx($workbook, $header_format);
        $this->format_users_xlsx($workbook, $header_format);
        $this->format_polls_xlsx($workbook, $header_format);
        $this->format_whiteboard_files_xlsx($workbook, $header_format);

        $workbook->close();
    }

    /**
     * Formats room sheet in XLSX.
     *
     * @param MoodleExcelWorkbook $workbook
     * @param MoodleExcelFormat $header_format
     * @return void
     */
    private function format_room_xlsx(MoodleExcelWorkbook $workbook, MoodleExcelFormat $header_format): void {
        $sheet = $workbook->add_worksheet(get_string('room_info', 'plugnmeet'));

        $sheet->set_column(0, 0, 30);
        $sheet->set_column(1, 1, 50);

        $row_index = 0;
        foreach ($this->room_fields as $field) {
            $data = $this->room_data[$field] ?? 0;

            $title = get_string('analytics_room_' . $field, 'plugnmeet');
            $sheet->write_string($row_index, 0, $title, $header_format);

            $formatted_data = $this->format_room_data_for_xlsx($data, $field);
            $sheet->write_string($row_index, 1, (string)$formatted_data);
            $row_index++;
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
     * @param MoodleExcelFormat $header_format
     * @return void
     */
    private function format_users_xlsx(MoodleExcelWorkbook $workbook, MoodleExcelFormat $header_format): void {
        $sheet = $workbook->add_worksheet(get_string('users_info', 'plugnmeet'));

        $column_map   = [];
        $column_index = 0;
        foreach ($this->user_fields as $field) {
            $column_map[$field] = $column_index++;
        }

        foreach ($column_map as $field => $col_index) {
            $sheet->set_column($col_index, $col_index, 25);
            $title = get_string('analytics_user_' . str_replace("user_", "", $field), 'plugnmeet');
            $sheet->write_string(0, $col_index, $title, $header_format);
        }

        foreach ($this->users_data as $row_index => $user) {
            $current_row = $row_index + 1;
            foreach ($column_map as $field => $col_index) {
                $data = $user[$field] ?? 0;
                $formatted_data = $this->format_user_data_for_xlsx($data, $field);
                $sheet->write_string($current_row, $col_index, (string)$formatted_data);
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
     * @param MoodleExcelFormat $header_format
     * @return void
     */
    private function format_polls_xlsx(MoodleExcelWorkbook $workbook, MoodleExcelFormat $header_format): void {
        if (empty($this->room_data["polls"])) {
            return;
        }
        $sheet = $workbook->add_worksheet(get_string('polls', 'plugnmeet'));

        $sheet->set_column(0, 0, 50);
        $sheet->set_column(1, 1, 50);
        $sheet->set_column(2, 2, 30);

        $sheet->write_string(0, 0, get_string('question', 'plugnmeet'), $header_format);
        $sheet->write_string(0, 1, get_string('options', 'plugnmeet'), $header_format);
        $sheet->write_string(0, 2, get_string('created_at', 'plugnmeet'), $header_format);

        $i = 1;
        foreach ($this->room_data["polls"] as $poll) {
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
     * @param MoodleExcelFormat $header_format
     * @return void
     */
    private function format_whiteboard_files_xlsx(MoodleExcelWorkbook $workbook, MoodleExcelFormat $header_format): void {
        if (empty($this->room_data["whiteboard_files"])) {
            return;
        }
        $sheet = $workbook->add_worksheet(get_string('whiteboard_files', 'plugnmeet'));

        $sheet->set_column(0, 0, 50);
        $sheet->set_column(1, 1, 30);

        $sheet->write_string(0, 0, get_string('file_name', 'plugnmeet'), $header_format);
        $sheet->write_string(0, 1, get_string('created_at', 'plugnmeet'), $header_format);

        $i = 1;
        foreach ($this->room_data["whiteboard_files"] as $file) {
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
