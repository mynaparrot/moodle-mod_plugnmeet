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
use mod_plugnmeet\completion\custom_completion;

defined('MOODLE_INTERNAL') || die();

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
     * Default records per page.
     */
    const PER_PAGE = 20;

    /**
     * Constructor.
     *
     * @param \stdClass $cm
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
        $canviewlist = has_capability('mod/plugnmeet:viewattendancelist', $this->context);

        if ($canviewlist) {
            $content = $this->render_attendance_report();
        } else {
            $content = $this->render_self_reporting_view();
        }

        return [
            'content' => $content,
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
     * @param int $page The current page (0-indexed).
     * @param int $perpage Number of records per page (0 for all).
     * @return array
     */
    private function get_attendance_data_rows(int $page = 0, int $perpage = 0): array {
        global $DB, $USER;

        $canviewlist = has_capability('mod/plugnmeet:viewattendancelist', $this->context);

        if ($canviewlist) {
            $limitfrom = $page * $perpage;
            $users = get_enrolled_users(
                $this->context,
                'mod/plugnmeet:view',
                0,
                'u.*',
                'u.lastname, u.firstname',
                $limitfrom,
                $perpage
            );
        } else {
            $users = [$USER->id => $USER];
        }

        if (empty($users)) {
            return [];
        }

        $userids = array_keys($users);
        [$insql, $inparams] = $DB->get_in_or_equal($userids);
        $select = "plugnmeetid = ? AND userid $insql";
        $params = array_merge([$this->plugnmeet->id], $inparams);

        $stats = $DB->get_records_select(
            'plugnmeet_user_stats',
            $select,
            $params,
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
                'raise_hand' => (int)($data['raise_hand'] ?? 0),
                'chat_messages' => (int)($data['chat_messages'] ?? 0),
                'webcam_status' => (bool)($data['webcam_status'] ?? false),
                'webcam_duration' => $data['webcam_duration'] ?? 0,
                'mic_status' => (bool)($data['mic_status'] ?? false),
                'mic_duration' => $data['mic_duration'] ?? 0,
                'talked_duration' => $data['talked_duration'] ?? 0,
                'voted_poll' => (bool)($data['voted_poll'] ?? false),
                'whiteboard_annotated' => (bool)($data['whiteboard_annotated'] ?? false),
                'timemodified' => $userstats ? $userstats->timemodified : null,
                'raw_stats' => $data,
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
        global $OUTPUT;
        $html = '';

        $canviewlist = has_capability('mod/plugnmeet:viewattendancelist', $this->context);
        $page = optional_param('page', 0, PARAM_INT);
        $perpage = self::PER_PAGE;

        // Total count for paging bar.
        if ($canviewlist) {
            $totalcount = count_enrolled_users($this->context, 'mod/plugnmeet:view');
        } else {
            $totalcount = 1;
        }

        // Download button.
        if (has_capability('mod/plugnmeet:downloadattendance', $this->context)) {
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
        }

        // Paging bar at the top (only if more than 1 page).
        $baseurl = new moodle_url('/mod/plugnmeet/attendance.php', ['id' => $this->cm->id]);
        if ($totalcount > $perpage) {
            $html .= $OUTPUT->paging_bar($totalcount, $page, $perpage, $baseurl);
        }

        $table = new html_table();
        $table->head = [
            get_string('name'),
            get_string('status', 'mod_plugnmeet'),
            get_string('minutes_attended', 'mod_plugnmeet'),
            get_string('attendance_raise_hand', 'mod_plugnmeet'),
            get_string('attendance_chat_messages', 'mod_plugnmeet'),
            get_string('attendance_webcam_status', 'mod_plugnmeet'),
            get_string('attendance_webcam_duration', 'mod_plugnmeet'),
            get_string('attendance_mic_status', 'mod_plugnmeet'),
            get_string('attendance_mic_duration', 'mod_plugnmeet'),
            get_string('attendance_talked_duration', 'mod_plugnmeet'),
            get_string('attendance_voted_poll', 'mod_plugnmeet'),
            get_string('attendance_whiteboard_annotated', 'mod_plugnmeet'),
            get_string('last_updated', 'mod_plugnmeet'),
        ];

        $table->attributes['class'] = 'generaltable attendance-table mt-2 mb-2 text-center';

        $rows = $this->get_attendance_data_rows($page, $perpage);
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
                $row['raise_hand'] > 0 ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'),
                $row['chat_messages'] > 0 ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'),
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

        // Paging bar at the bottom (only if more than 1 page).
        if ($totalcount > $perpage) {
            $html .= $OUTPUT->paging_bar($totalcount, $page, $perpage, $baseurl);
        }

        return $html;
    }

    /**
     * Renders a dashboard-style view for individual users.
     *
     * @return string
     */
    private function render_self_reporting_view(): string {
        global $DB;
        $rows = $this->get_attendance_data_rows();
        if (empty($rows)) {
            return html_writer::div(get_string('no_recordings', 'mod_plugnmeet'), 'alert alert-info');
        }

        $row = $rows[0];
        $html = html_writer::start_div('container-fluid self-reporting-dashboard');

        // Header Card: Summary.
        $html .= html_writer::start_div('card mb-4');
        $html .= html_writer::start_div('card-body');
        $html .= html_writer::start_div('row align-items-center');

        // Left side: User Info.
        $html .= html_writer::start_div('col-md-6');
        $html .= html_writer::tag('h3', fullname($row['user']), ['class' => 'mb-1']);
        $html .= html_writer::tag('p', get_string('attendance_report', 'mod_plugnmeet'), ['class' => 'text-muted']);
        $html .= html_writer::end_div();

        // Right side: Status and Time.
        $html .= html_writer::start_div('col-md-6 text-md-right');
        $badgemap = [
            'completed' => 'badge-success',
            'present' => 'badge-success',
            'incomplete' => 'badge-warning',
            'absent' => 'badge-danger',
        ];
        $statusstr = html_writer::span(get_string($row['status_key'], 'mod_plugnmeet'), 'badge badge-lg ' . $badgemap[$row['status_key']]);
        $html .= html_writer::div($statusstr, 'mb-2');
        if ($row['timemodified']) {
            $html .= html_writer::div(
                html_writer::tag('strong', get_string('last_updated', 'mod_plugnmeet') . ': ') .
                userdate($row['timemodified']),
                'small text-muted'
            );
        }
        $html .= html_writer::end_div();

        $html .= html_writer::end_div(); // End row.
        $html .= html_writer::end_div(); // End card-body.
        $html .= html_writer::end_div(); // End card.

        // Participation Progress Section.
        $html .= html_writer::tag('h4', get_string('participation_progress', 'mod_plugnmeet'), ['class' => 'mb-3']);
        $html .= html_writer::start_div('row');

        $mapping = custom_completion::get_field_mapping();

        // Direct DB Query for completion rules.
        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $this->cm->instance], '*', MUST_EXIST);

        foreach ($mapping as $statskey => $rule) {
            $value = $row['raw_stats'][$statskey] ?? 0;
            $required = $plugnmeet->$rule ?? 0;

            // Determine if met.
            $ismet = false;
            $displayvalue = '';

            $durationrules = ['duration', 'webcam_duration', 'mic_duration', 'talked_duration'];
            if (in_array($statskey, $durationrules)) {
                $displayvalue = $this->format_seconds_to_time((int)$value);
                if ($required > 0) {
                    $ismet = (int)$value >= ($required * 60);
                    $displayvalue .= ' / ' . $this->format_seconds_to_time($required * 60);
                } else {
                    $ismet = (int)$value > 0;
                }
            } else {
                $ismet = (int)$value > 0;
                $displayvalue = (int)$value > 0 ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
            }

            // Map statskey to language string using the new attendance_ prefix.
            $labelkey = 'attendance_' . $statskey;

            // Visual feedback logic.
            $cardclass = 'bg-light border-secondary';
            $icon = 'fa-info-circle text-info';
            $badge = '';

            if ($this->completionenabled && $required > 0) {
                if ($ismet) {
                    $cardclass = 'alert-success border-success';
                    $icon = 'fa-check-circle text-success';
                    $badge = html_writer::span(get_string('met', 'mod_plugnmeet'), 'badge badge-success ml-auto');
                } else {
                    $cardclass = 'alert-warning border-warning';
                    $icon = 'fa-clock text-warning';
                    $badge = html_writer::span(get_string('required', 'mod_plugnmeet'), 'badge badge-warning ml-auto');
                }
            }

            $html .= html_writer::start_div('col-md-4 mb-3');
            $html .= html_writer::start_div('card h-100 ' . $cardclass);
            $html .= html_writer::start_div('card-body d-flex align-items-center');
            $html .= html_writer::tag('i', '', ['class' => 'fa fa-2x mr-3 ' . $icon]);
            $html .= html_writer::start_div();
            $html .= html_writer::div(get_string($labelkey, 'mod_plugnmeet'), 'font-weight-bold');
            $html .= html_writer::div($displayvalue, 'text-muted small');
            $html .= html_writer::end_div();
            $html .= $badge;
            $html .= html_writer::end_div(); // End card-body.
            $html .= html_writer::end_div(); // End card.
            $html .= html_writer::end_div(); // End column.
        }

        $html .= html_writer::end_div(); // End row.
        $html .= html_writer::end_div(); // End container.

        return $html;
    }

    /**
     * Downloads the attendance report in Excel format.
     */
    public function download_excel_report() {
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
            get_string('attendance_raised_hand', 'mod_plugnmeet'),
            get_string('attendance_chat_messages', 'mod_plugnmeet'),
            get_string('attendance_webcam_status', 'mod_plugnmeet'),
            get_string('attendance_webcam_duration', 'mod_plugnmeet'),
            get_string('attendance_mic_status', 'mod_plugnmeet'),
            get_string('attendance_mic_duration', 'mod_plugnmeet'),
            get_string('attendance_talked_duration', 'mod_plugnmeet'),
            get_string('attendance_voted_poll', 'mod_plugnmeet'),
            get_string('attendance_whiteboard_annotated', 'mod_plugnmeet'),
            get_string('last_updated', 'mod_plugnmeet'),
        ];

        $col = 0;
        foreach ($headers as $header) {
            $worksheet->write_string(0, $col++, $header, $headerformat);
        }

        $rows = $this->get_attendance_data_rows(); // Fetch all for Excel (or just the user's data).
        $rowidx = 1;
        foreach ($rows as $row) {
            $col = 0;
            $worksheet->write_string($rowidx, $col++, fullname($row['user']));
            $worksheet->write_string($rowidx, $col++, get_string($row['status_key'], 'mod_plugnmeet'));
            $worksheet->write_string($rowidx, $col++, $this->format_seconds_to_time($row['duration']));
            $worksheet->write_string($rowidx, $col++, $row['raise_hand'] > 0 ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
            $worksheet->write_string($rowidx, $col++, $row['chat_messages'] > 0 ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
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
    }
}
