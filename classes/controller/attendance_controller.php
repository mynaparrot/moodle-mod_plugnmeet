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

namespace mod_plugnmeet\controller;

use html_writer;
use html_table;
use moodle_url;
use MoodleExcelWorkbook;
use MoodleExcelFormat;
use mod_plugnmeet\helper\CompletionHelper;

/**
 * Controller class for handling attendance reports.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class attendance_controller {
    /**
     * @var \cm_info
     */
    private $cm;

    /**
     * @var \stdClass
     */
    private $course;

    /**
     * @var \stdClass
     */
    private $plugnmeet;

    /**
     * @var \context_module
     */
    private $context;

    /**
     * @var bool
     */
    private $completionenabled;

    /**
     * Constructor.
     *
     * @param \cm_info $cm
     * @param \stdClass $course
     * @param \stdClass $plugnmeet
     */
    public function __construct($cm, $course, $plugnmeet) {
        $this->cm = $cm;
        $this->course = $course;
        $this->plugnmeet = $plugnmeet;
        $this->context = \context_module::instance($cm->id);

        $completion = new \completion_info($this->course);
        $this->completionenabled = $completion->is_enabled($this->cm);
    }

    /**
     * Gets page data for attendance.
     *
     * @return array
     */
    public function get_page_data() {
        if (!has_capability('mod/plugnmeet:manage', $this->context)) {
            return ['content' => get_string('no_permission', 'plugnmeet')];
        }

        $action = optional_param('action', '', PARAM_TEXT);
        if ($action === 'download_excel') {
            $this->download_excel_report();
            return ['content' => ''];
        }

        return [
            'content' => $this->render_attendance_report(),
        ];
    }

    /**
     * Formats seconds to H:i:s.
     *
     * @param int $seconds
     * @return string
     */
    private function format_seconds_to_time(int $seconds): string {
        $h = intdiv($seconds, 3600);
        $m = intdiv($seconds % 3600, 60);
        $s = $seconds % 60;
        return sprintf("%02d:%02d:%02d", $h, $m, $s);
    }

    /**
     * Centralized helper to build attendance data rows for both table and Excel.
     *
     * @return array
     */
    private function get_attendance_data_rows(): array {
        global $DB;

        $users = get_enrolled_users($this->context, 'mod/plugnmeet:view', 0, 'u.*', 'u.lastname, u.firstname');
        $stats = $DB->get_records(
            'plugnmeet_user_stats',
            ['plugnmeetid' => $this->plugnmeet->id],
            '',
            'userid, is_present, statsdata, timemodified'
        );

        $rows = [];
        foreach ($users as $user) {
            $userstats = $stats[$user->id] ?? null;
            $data = $userstats ? json_decode($userstats->statsdata, true) : [];

            // Determine Status.
            $statuskey = 'absent';
            $hasjoined = $userstats && (($data['duration'] ?? 0) > 0 || $userstats->is_present);

            if ($this->completionenabled) {
                // When completion is enabled, we strictly check against the defined criteria.
                $results = CompletionHelper::evaluate_criteria($data, $this->plugnmeet);
                if ($results['all_met']) {
                    $statuskey = 'completed';
                } else if ($hasjoined) {
                    // User has joined but hasn't finished criteria yet.
                    $statuskey = 'incomplete';
                }
            } else {
                // When completion is disabled, presence is defined by having duration OR the manual join flag.
                if ($hasjoined) {
                    $statuskey = 'present';
                }
            }

            $rows[] = [
                'user' => $user,
                'status_key' => $statuskey,
                'duration' => $data['duration'] ?? 0,
                'raise_hand' => $data['raise_hand'] ?? 0,
                'chat_messages' => $data['chat_messages'] ?? 0,
                'webcam_status' => (bool)($data['webcam_status'] ?? false),
                'webcam_duration' => $data['webcam_duration'] ?? 0,
                'mic_status' => (bool)($data['mic_status'] ?? false),
                'mic_duration' => $data['mic_duration'] ?? 0,
                'talked_duration' => $data['talked_duration'] ?? 0,
                'voted_poll' => (bool)($data['voted_poll'] ?? false),
                'whiteboard_annotated' => (bool)($data['whiteboard_annotated'] ?? false),
                'timemodified' => $userstats ? $userstats->timemodified : null,
            ];
        }

        return $rows;
    }

    /**
     * Renders the attendance report table.
     *
     * @return string
     */
    private function render_attendance_report() {
        $html = '';

        // Download button.
        $downloadurl = new moodle_url(
            '/mod/plugnmeet/attendance.php',
            ['id' => $this->cm->id, 'action' => 'download_excel']
        );
        $html .= html_writer::start_div('d-flex justify-content-end mb-3');
        $html .= html_writer::link(
            $downloadurl,
            get_string('download_excel_report', 'mod_plugnmeet'),
            ['class' => 'btn btn-success']
        );
        $html .= html_writer::end_div();

        $table = new html_table();
        $table->head = [
            get_string('name'),
            get_string('status', 'mod_plugnmeet'),
            get_string('minutes_attended', 'mod_plugnmeet'),
            get_string('completion_raised_hand', 'mod_plugnmeet'),
            get_string('completion_chat_messages', 'mod_plugnmeet'),
            get_string('completion_webcam_enabled', 'mod_plugnmeet'),
            get_string('completion_webcam_duration', 'mod_plugnmeet'),
            get_string('completion_mic_enabled', 'mod_plugnmeet'),
            get_string('completion_mic_duration', 'mod_plugnmeet'),
            get_string('completion_talk_duration', 'mod_plugnmeet'),
            get_string('completion_poll_voted', 'mod_plugnmeet'),
            get_string('completion_whiteboard_annotated', 'mod_plugnmeet'),
            get_string('last_updated', 'mod_plugnmeet'),
        ];

        $table->attributes['class'] = 'generaltable attendance-table';

        $rows = $this->get_attendance_data_rows();
        foreach ($rows as $row) {
            $badgemap = [
                'completed' => 'badge-success',
                'present' => 'badge-success',
                'incomplete' => 'badge-warning',
                'absent' => 'badge-danger',
            ];
            $statusstr = html_writer::span(get_string($row['status_key'], 'mod_plugnmeet'), 'badge ' . $badgemap[$row['status_key']]);

            $table->data[] = [
                fullname($row['user']),
                $statusstr,
                $this->format_seconds_to_time($row['duration']),
                $row['raise_hand'],
                $row['chat_messages'],
                $row['webcam_status'] ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'),
                $this->format_seconds_to_time($row['webcam_duration']),
                $row['mic_status'] ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'),
                $this->format_seconds_to_time($row['mic_duration']),
                $this->format_seconds_to_time($row['talked_duration']),
                $row['voted_poll'] ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'),
                $row['whiteboard_annotated'] ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'),
                $row['timemodified'] ? userdate($row['timemodified']) : '-',
            ];
        }

        $html .= html_writer::table($table);
        return $html;
    }

    /**
     * Downloads the attendance report in Excel format.
     */
    private function download_excel_report() {
        global $CFG;
        require_once($CFG->libdir . '/excellib.class.php');

        $filename = 'attendance_' . clean_filename($this->plugnmeet->name) . '_' . date('YmdHis') . '.xlsx';
        $workbook = new MoodleExcelWorkbook($filename);
        $worksheet = $workbook->add_worksheet(get_string('attendance', 'mod_plugnmeet'));

        $headerformat = new MoodleExcelFormat(['bold' => 1]);

        $headers = [
            get_string('name'),
            get_string('status', 'mod_plugnmeet'),
            get_string('minutes_attended', 'mod_plugnmeet'),
            get_string('completion_raised_hand', 'mod_plugnmeet'),
            get_string('completion_chat_messages', 'mod_plugnmeet'),
            get_string('completion_webcam_enabled', 'mod_plugnmeet'),
            get_string('completion_webcam_duration', 'mod_plugnmeet'),
            get_string('completion_mic_enabled', 'mod_plugnmeet'),
            get_string('completion_mic_duration', 'mod_plugnmeet'),
            get_string('completion_talk_duration', 'mod_plugnmeet'),
            get_string('completion_poll_voted', 'mod_plugnmeet'),
            get_string('completion_whiteboard_annotated', 'mod_plugnmeet'),
            get_string('last_updated', 'mod_plugnmeet'),
        ];

        $col = 0;
        foreach ($headers as $header) {
            $worksheet->write_string(0, $col++, $header, $headerformat);
        }

        $rows = $this->get_attendance_data_rows();
        $rowidx = 1;
        foreach ($rows as $row) {
            $col = 0;
            $worksheet->write_string($rowidx, $col++, fullname($row['user']));
            $worksheet->write_string($rowidx, $col++, get_string($row['status_key'], 'mod_plugnmeet'));
            $worksheet->write_string($rowidx, $col++, $this->format_seconds_to_time($row['duration']));
            $worksheet->write_number($rowidx, $col++, $row['raise_hand']);
            $worksheet->write_number($rowidx, $col++, $row['chat_messages']);
            $worksheet->write_string($rowidx, $col++, $row['webcam_status'] ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
            $worksheet->write_string($rowidx, $col++, $this->format_seconds_to_time($row['webcam_duration']));
            $worksheet->write_string($rowidx, $col++, $row['mic_status'] ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
            $worksheet->write_string($rowidx, $col++, $this->format_seconds_to_time($row['mic_duration']));
            $worksheet->write_string($rowidx, $col++, $this->format_seconds_to_time($row['talked_duration']));
            $worksheet->write_string($rowidx, $col++, $row['voted_poll'] ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
            $worksheet->write_string($rowidx, $col++, $row['whiteboard_annotated'] ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
            $worksheet->write_string($rowidx, $col++, $row['timemodified'] ? userdate($row['timemodified']) : '-');

            $rowidx++;
        }

        $workbook->close();
        exit;
    }
}
