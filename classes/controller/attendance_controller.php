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
     * Renders the attendance report table.
     *
     * @return string
     */
    private function render_attendance_report() {
        global $DB;

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

        $users = get_enrolled_users($this->context, 'mod/plugnmeet:view');
        $stats = $DB->get_records(
            'plugnmeet_user_stats',
            ['plugnmeetid' => $this->plugnmeet->id],
            '',
            'userid, is_present, statsdata, timemodified'
        );

        $table = new html_table();
        $table->head = [get_string('name'), get_string('status', 'mod_plugnmeet')];

        if ($this->completionenabled) {
            $table->head[] = get_string('minutes_attended', 'mod_plugnmeet');
            $table->head[] = get_string('completion_raised_hand', 'mod_plugnmeet');
            $table->head[] = get_string('completion_chat_messages', 'mod_plugnmeet');
            $table->head[] = get_string('completion_webcam_enabled', 'mod_plugnmeet');
            $table->head[] = get_string('completion_webcam_duration', 'mod_plugnmeet');
            $table->head[] = get_string('completion_mic_enabled', 'mod_plugnmeet');
            $table->head[] = get_string('completion_mic_duration', 'mod_plugnmeet');
            $table->head[] = get_string('completion_talk_duration', 'mod_plugnmeet');
            $table->head[] = get_string('completion_poll_voted', 'mod_plugnmeet');
            $table->head[] = get_string('completion_whiteboard_annotated', 'mod_plugnmeet');
        }

        $table->head[] = get_string('last_updated', 'mod_plugnmeet');
        $table->attributes['class'] = 'generaltable attendance-table';

        foreach ($users as $user) {
            $userstats = $stats[$user->id] ?? null;
            $ispresent = $userstats ? $userstats->is_present : 0;

            $statusstr = $ispresent
                ? html_writer::span(get_string('present', 'mod_plugnmeet'), 'badge badge-success')
                : html_writer::span(get_string('absent', 'mod_plugnmeet'), 'badge badge-danger');

            $row = [fullname($user), $statusstr];

            if ($this->completionenabled) {
                $data = $userstats ? json_decode($userstats->statsdata, true) : [];
                $row[] = $data['minutes'] ?? 0;
                $row[] = $data['raisedhand'] ?? 0;
                $row[] = $data['chatmessages'] ?? 0;
                $row[] = ($data['webcam'] ?? 0) ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
                $row[] = $data['webcamduration'] ?? 0;
                $row[] = ($data['mic'] ?? 0) ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
                $row[] = $data['micduration'] ?? 0;
                $row[] = $data['talkduration'] ?? 0;
                $row[] = ($data['pollvoted'] ?? 0) ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
                $row[] = ($data['whiteboardannotated'] ?? 0) ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
            }

            $row[] = $userstats ? userdate($userstats->timemodified) : '-';
            $table->data[] = $row;
        }

        $html .= html_writer::table($table);
        return $html;
    }

    /**
     * Downloads the attendance report in Excel format.
     */
    private function download_excel_report() {
        global $DB, $CFG;
        require_once($CFG->libdir . '/excellib.class.php');

        $filename = 'attendance_' . clean_filename($this->plugnmeet->name) . '_' . date('YmdHis') . '.xlsx';
        $workbook = new MoodleExcelWorkbook($filename);
        $worksheet = $workbook->add_worksheet(get_string('attendance', 'mod_plugnmeet'));

        $headerformat = new MoodleExcelFormat(['bold' => 1]);

        $headers = [get_string('name'), get_string('status', 'mod_plugnmeet')];
        if ($this->completionenabled) {
            $headers[] = get_string('minutes_attended', 'mod_plugnmeet');
            $headers[] = get_string('completion_raised_hand', 'mod_plugnmeet');
            $headers[] = get_string('completion_chat_messages', 'mod_plugnmeet');
            $headers[] = get_string('completion_webcam_enabled', 'mod_plugnmeet');
            $headers[] = get_string('completion_webcam_duration', 'mod_plugnmeet');
            $headers[] = get_string('completion_mic_enabled', 'mod_plugnmeet');
            $headers[] = get_string('completion_mic_duration', 'mod_plugnmeet');
            $headers[] = get_string('completion_talk_duration', 'mod_plugnmeet');
            $headers[] = get_string('completion_poll_voted', 'mod_plugnmeet');
            $headers[] = get_string('completion_whiteboard_annotated', 'mod_plugnmeet');
        }
        $headers[] = get_string('last_updated', 'mod_plugnmeet');

        $col = 0;
        foreach ($headers as $header) {
            $worksheet->write_string(0, $col++, $header, $headerformat);
        }

        $users = get_enrolled_users($this->context, 'mod/plugnmeet:view', 0, 'u.*', 'u.lastname, u.firstname');
        $stats = $DB->get_records(
            'plugnmeet_user_stats',
            ['plugnmeetid' => $this->plugnmeet->id],
            '',
            'userid, is_present, statsdata, timemodified'
        );

        $rowidx = 1;
        foreach ($users as $user) {
            $userstats = $stats[$user->id] ?? null;
            $ispresent = $userstats ? $userstats->is_present : 0;
            $statusstr = $ispresent ? get_string('present', 'mod_plugnmeet') : get_string('absent', 'mod_plugnmeet');

            $col = 0;
            $worksheet->write_string($rowidx, $col++, fullname($user));
            $worksheet->write_string($rowidx, $col++, $statusstr);

            if ($this->completionenabled) {
                $data = $userstats ? json_decode($userstats->statsdata, true) : [];
                $worksheet->write_number($rowidx, $col++, $data['minutes'] ?? 0);
                $worksheet->write_number($rowidx, $col++, $data['raisedhand'] ?? 0);
                $worksheet->write_number($rowidx, $col++, $data['chatmessages'] ?? 0);
                $worksheet->write_string($rowidx, $col++, ($data['webcam'] ?? 0) ?
                    get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
                $worksheet->write_number($rowidx, $col++, $data['webcamduration'] ?? 0);
                $worksheet->write_string($rowidx, $col++, ($data['mic'] ?? 0) ?
                    get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
                $worksheet->write_number($rowidx, $col++, $data['micduration'] ?? 0);
                $worksheet->write_number($rowidx, $col++, $data['talkduration'] ?? 0);
                $worksheet->write_string($rowidx, $col++, ($data['pollvoted'] ?? 0) ?
                    get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
                $worksheet->write_string($rowidx, $col++, ($data['whiteboardannotated'] ?? 0) ?
                    get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
            }

            $worksheet->write_string($rowidx, $col++, $userstats ? userdate($userstats->timemodified) : '-');
            $rowidx++;
        }

        $workbook->close();
        exit;
    }
}
