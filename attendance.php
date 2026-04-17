<?php

/**
 * Attendance report for PlugNmeet.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_plugnmeet\controller\attendance_controller;

require_once(__DIR__ . '/../../config.php');

$id = required_param('id', PARAM_INT); // Course Module ID.

$cm = get_coursemodule_from_id('plugnmeet', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);
$plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);

require_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/plugnmeet:manage', $context);

$controller = new attendance_controller($cm, $course, $plugnmeet);
$data = $controller->get_page_data();

$PAGE->set_url('/mod/plugnmeet/attendance.php', ['id' => $id]);
$PAGE->set_title($plugnmeet->name . ' - ' . get_string('attendance_report', 'mod_plugnmeet'));
$PAGE->set_heading($course->fullname);
$PAGE->set_context($context);

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('attendance_report', 'mod_plugnmeet'));

echo $data['content'];

echo $OUTPUT->footer();
