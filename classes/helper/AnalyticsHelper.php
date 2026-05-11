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

namespace mod_plugnmeet\helper;

use MoodleExcelWorkbook;
use MoodleExcelFormat;
use cache;
use Mynaparrot\Plugnmeet\AnalyticsFormatter;

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->libdir . '/filelib.php');
require_once($CFG->libdir . '/excellib.class.php');

/**
 * Helper class for handling room analytics and reports.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class AnalyticsHelper {
    /**
     * @var AnalyticsFormatter
     */
    private AnalyticsFormatter $analyticsformatter;
    /**
     * @var array
     */
    private array $roomdata = [];
    /**
     * @var array
     */
    private array $usersdata = [];

    /**
     * Constructor.
     *
     * @param string $artifactid
     */
    public function __construct(string $artifactid) {
        $cache = cache::make('mod_plugnmeet', 'analytics_data');
        $cachedata = $cache->get($artifactid);
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));

        if ($cachedata) {
            $analyticsdata = $cachedata;
        } else {
            $res = $pnc->getArtifactDownloadToken($artifactid);

            if ($res->getStatus()) {
                $analyticsdata = $this->fetch_data($artifactid, $res->getToken());
                if (!empty($analyticsdata)) {
                    $data = json_decode($analyticsdata, true);
                    if (!empty($data)) {
                        $analyticsdata = $data;
                        // Cache the decoded data.
                        $cache->set($artifactid, $data);
                    }
                }
            } else {
                RoomHelper::write_log_event($artifactid, 'AnalyticsHelper', "Error during fetching report download token: " . $res->getMsg());
                $analyticsdata = ['room' => [], 'users' => []];
            }
        }

        $this->analyticsformatter = $pnc->getAnalyticsFormatter($analyticsdata, get_user_timezone());
        $formatteddata = $this->analyticsformatter->getFormattedEventData();
        $this->roomdata = $formatteddata['room'];
        $this->usersdata = $formatteddata['users'];
    }

    /**
     * Fetches analytics data from server.
     *
     * @param string $token
     * @return bool|string|null
     * @throws \dml_exception
     */
    private function fetch_data(string $artifactid, string $token) {
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
            RoomHelper::write_log_event($artifactid, 'AnalyticsHelper', "Error during fetching report by CURL: " . $curl->get_errno());
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
        return $this->analyticsformatter->getRawAnalyticsData();
    }

    /**
     * Returns user fields.
     *
     * @return string[]
     */
    public function get_user_fields(): array {
        return $this->analyticsformatter->getUserFields();
    }

    /**
     * Returns room fields.
     *
     * @return string[]
     */
    public function get_room_fields(): array {
        return $this->analyticsformatter->getRoomFields();
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
        foreach ($this->get_room_fields() as $field) {
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
            return $this->analyticsformatter->formatSecondsToTime($data);
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
        foreach ($this->get_user_fields() as $field) {
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
                return $this->analyticsformatter->formatTimestamp($d);
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

        if (
            $field === "duration" || $field === "talked_duration" || $field === "speech_service_total_usage"
            || $field === "webcam_duration" || $field === "mic_duration"
        ) {
            return $this->analyticsformatter->formatSecondsToTime($data);
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
            $created = $this->analyticsformatter->formatTimestamp($file["time"]);

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
        return $this->analyticsformatter->formatTimestamp($timestamp, $ms);
    }

    /**
     * Formats seconds to H:i:s.
     *
     * @param mixed $seconds
     * @return string
     */
    public function format_seconds_to_time($seconds): string {
        return $this->analyticsformatter->formatSecondsToTime($seconds);
    }
}
