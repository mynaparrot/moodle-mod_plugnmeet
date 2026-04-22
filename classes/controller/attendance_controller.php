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

        $page = optional_param('page', 0, PARAM_INT);
        $perpage = self::PER_PAGE;
        $totalcount = count_enrolled_users($this->context, 'mod/plugnmeet:view');
        $baseurl = new moodle_url('/mod/plugnmeet/attendance.php', ['id' => $this->cm->id]);

        $context = [
            'can_download' => has_capability('mod/plugnmeet:downloadattendance', $this->context),
            'download_url' => (new moodle_url('/mod/plugnmeet/attendance.php', [
                'id' => $this->cm->id,
                'action' => 'download_excel',
            ]))->out(false),
            'paging_bar' => $totalcount > $perpage ? $OUTPUT->paging_bar($totalcount, $page, $perpage, $baseurl) : '',
            'rows' => [],
        ];

        $badgemap = [
            'completed' => 'badge-success',
            'present' => 'badge-success',
            'incomplete' => 'badge-warning',
            'absent' => 'badge-danger',
        ];

        $rows = $this->get_attendance_data_rows($page, $perpage);
        foreach ($rows as $row) {
            $context['rows'][] = [
                'fullname' => fullname($row['user']),
                'status_string' => get_string($row['status_key'], 'mod_plugnmeet'),
                'badge_class' => $badgemap[$row['status_key']],
                'duration' => $this->format_seconds_to_time($row['duration']),
                'raise_hand' => $row['raise_hand'] > 0,
                'chat_messages' => $row['chat_messages'] > 0,
                'webcam_status' => $row['webcam_status'],
                'webcam_duration' => $this->format_seconds_to_time($row['webcam_duration']),
                'mic_status' => $row['mic_status'],
                'mic_duration' => $this->format_seconds_to_time($row['mic_duration']),
                'talked_duration' => $this->format_seconds_to_time($row['talked_duration']),
                'voted_poll' => $row['voted_poll'],
                'whiteboard_annotated' => $row['whiteboard_annotated'],
                'timemodified' => $row['timemodified'],
            ];
        }

        return $OUTPUT->render_from_template('mod_plugnmeet/attendance_report', $context);
    }

    /**
     * Renders a dashboard-style view for individual users.
     *
     * @return string
     */
    private function render_self_reporting_view(): string {
        global $DB, $OUTPUT;

        $rows = $this->get_attendance_data_rows();
        $row = $rows[0];

        $badgemap = [
            'completed' => 'badge-success',
            'present' => 'badge-success',
            'incomplete' => 'badge-warning',
            'absent' => 'badge-danger',
        ];

        $context = [
            'fullname' => fullname($row['user']),
            'status_string' => get_string($row['status_key'], 'mod_plugnmeet'),
            'badge_class' => $badgemap[$row['status_key']],
            'timemodified' => $row['timemodified'],
            'progress_items' => [],
        ];

        $mapping = custom_completion::get_field_mapping();
        $plugnmeet = $DB->get_record('plugnmeet', ['id' => $this->cm->instance], '*', MUST_EXIST);

        foreach ($mapping as $statskey => $rule) {
            $value = $row['raw_stats'][$statskey] ?? 0;
            $required = $plugnmeet->$rule ?? 0;

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
                $displayvalue = $ismet ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
            }

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

            $context['progress_items'][] = [
                'label' => get_string('attendance_' . $statskey, 'mod_plugnmeet'),
                'display_value' => $displayvalue,
                'card_class' => $cardclass,
                'icon' => $icon,
                'badge' => $badge,
            ];
        }

        return $OUTPUT->render_from_template('mod_plugnmeet/self_attendance_report', $context);
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
