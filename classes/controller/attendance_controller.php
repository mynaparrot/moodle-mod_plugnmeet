<?php

namespace mod_plugnmeet\controller;

use html_writer;
use html_table;
use moodle_url;
use MoodleExcelWorkbook;
use MoodleExcelFormat;

defined('MOODLE_INTERNAL') || die();

/**
 * Controller class for handling attendance reports.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class attendance_controller
{
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
    private $completion_enabled;

    /**
     * Constructor.
     *
     * @param \cm_info $cm
     * @param \stdClass $course
     * @param \stdClass $plugnmeet
     */
    public function __construct($cm, $course, $plugnmeet)
    {
        $this->cm = $cm;
        $this->course = $course;
        $this->plugnmeet = $plugnmeet;
        $this->context = \context_module::instance($cm->id);

        $completion = new \completion_info($this->course);
        $this->completion_enabled = $completion->is_enabled($this->cm);
    }

    /**
     * Gets page data for attendance.
     *
     * @return array
     */
    public function get_page_data()
    {
        if (!has_capability('mod/plugnmeet:manage', $this->context)) {
            return ['content' => get_string('no_permission', 'plugnmeet')];
        }

        $action = optional_param('action', '', PARAM_TEXT);
        if ($action === 'download_excel') {
            $this->download_excel_report();
            exit;
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
    private function render_attendance_report()
    {
        global $DB, $OUTPUT;

        $html = '';

        // Download button.
        $download_url = new moodle_url('/mod/plugnmeet/attendance.php', ['id' => $this->cm->id, 'action' => 'download_excel']);
        $html .= html_writer::start_div('d-flex justify-content-end mb-3');
        $html .= html_writer::link($download_url, get_string('download_excel_report', 'mod_plugnmeet'), ['class' => 'btn btn-success']);
        $html .= html_writer::end_div();

        $users = get_enrolled_users($this->context, 'mod/plugnmeet:view');
        $stats = $DB->get_records('plugnmeet_user_stats', ['plugnmeetid' => $this->plugnmeet->id], '', 'userid, is_present, statsdata, timemodified');

        $table = new html_table();
        $table->head = [get_string('name'), get_string('status', 'mod_plugnmeet')];

        if ($this->completion_enabled) {
            $table->head[] = get_string('minutes_attended', 'mod_plugnmeet');
            $table->head[] = get_string('completion_raised_hand', 'mod_plugnmeet');
            $table->head[] = get_string('completion_chat_messages', 'mod_plugnmeet');
            $table->head[] = get_string('completion_webcam_enabled', 'mod_plugnmeet');
            $table->head[] = get_string('completion_mic_enabled', 'mod_plugnmeet');
        }

        $table->head[] = get_string('last_updated', 'mod_plugnmeet');
        $table->attributes['class'] = 'generaltable attendance-table';

        foreach ($users as $user) {
            $user_stats = $stats[$user->id] ?? null;
            $is_present = $user_stats ? $user_stats->is_present : 0;

            $status_str = $is_present
                ? html_writer::span(get_string('present', 'mod_plugnmeet'), 'badge badge-success')
                : html_writer::span(get_string('absent', 'mod_plugnmeet'), 'badge badge-danger');

            $row = [fullname($user), $status_str];

            if ($this->completion_enabled) {
                $data = $user_stats ? json_decode($user_stats->statsdata, true) : [];
                $row[] = $data['minutes'] ?? 0;
                $row[] = $data['raisedhand'] ?? 0;
                $row[] = $data['chatmessages'] ?? 0;
                $row[] = ($data['webcam'] ?? 0) ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
                $row[] = ($data['mic'] ?? 0) ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
            }

            $row[] = $user_stats ? userdate($user_stats->timemodified) : '-';
            $table->data[] = $row;
        }

        $html .= html_writer::table($table);
        return $html;
    }

    /**
     * Downloads the attendance report in Excel format.
     */
    private function download_excel_report()
    {
        global $DB, $CFG;
        require_once($CFG->libdir . '/excellib.class.php');

        $filename = 'attendance_' . clean_filename($this->plugnmeet->name) . '_' . date('YmdHis') . '.xlsx';
        $workbook = new MoodleExcelWorkbook($filename);
        $worksheet = $workbook->add_worksheet(get_string('attendance', 'mod_plugnmeet'));

        $header_format = new MoodleExcelFormat(['bold' => 1]);

        $headers = [get_string('name'), get_string('status', 'mod_plugnmeet')];
        if ($this->completion_enabled) {
            $headers[] = get_string('minutes_attended', 'mod_plugnmeet');
            $headers[] = get_string('completion_raised_hand', 'mod_plugnmeet');
            $headers[] = get_string('completion_chat_messages', 'mod_plugnmeet');
            $headers[] = get_string('completion_webcam_enabled', 'mod_plugnmeet');
            $headers[] = get_string('completion_mic_enabled', 'mod_plugnmeet');
        }
        $headers[] = get_string('last_updated', 'mod_plugnmeet');

        $col = 0;
        foreach ($headers as $header) {
            $worksheet->write_string(0, $col++, $header, $header_format);
        }

        $users = get_enrolled_users($this->context, 'mod/plugnmeet:view', 0, 'u.*', 'u.lastname, u.firstname');
        $stats = $DB->get_records('plugnmeet_user_stats', ['plugnmeetid' => $this->plugnmeet->id], '', 'userid, is_present, statsdata, timemodified');

        $row_idx = 1;
        foreach ($users as $user) {
            $user_stats = $stats[$user->id] ?? null;
            $is_present = $user_stats ? $user_stats->is_present : 0;
            $status_str = $is_present ? get_string('present', 'mod_plugnmeet') : get_string('absent', 'mod_plugnmeet');

            $col = 0;
            $worksheet->write_string($row_idx, $col++, fullname($user));
            $worksheet->write_string($row_idx, $col++, $status_str);

            if ($this->completion_enabled) {
                $data = $user_stats ? json_decode($user_stats->statsdata, true) : [];
                $worksheet->write_number($row_idx, $col++, $data['minutes'] ?? 0);
                $worksheet->write_number($row_idx, $col++, $data['raisedhand'] ?? 0);
                $worksheet->write_number($row_idx, $col++, $data['chatmessages'] ?? 0);
                $worksheet->write_string($row_idx, $col++, ($data['webcam'] ?? 0) ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
                $worksheet->write_string($row_idx, $col++, ($data['mic'] ?? 0) ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet'));
            }

            $worksheet->write_string($row_idx, $col++, $user_stats ? userdate($user_stats->timemodified) : '-');
            $row_idx++;
        }

        $workbook->close();
    }
}
