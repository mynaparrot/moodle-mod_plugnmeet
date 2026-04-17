<?php
/**
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use mod_plugnmeet\controller\recordings_controller;

$id = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('plugnmeet', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
$plugnmeet = $DB->get_record('plugnmeet', array('id' => $cm->instance), '*', MUST_EXIST);

require_login($course, true, $cm);

$controller = new recordings_controller($cm, $course, $plugnmeet);

$action = optional_param('action', '', PARAM_ALPHA);
if ($action === 'delete') {
    $recording_id = required_param('recording_id', PARAM_TEXT);
    $controller->delete_recording($recording_id);
}

$data = $controller->get_page_data();

$PAGE->set_url('/mod/plugnmeet/recordings.php', array('id' => $cm->id));
$PAGE->set_title(format_string($plugnmeet->name));
$PAGE->set_heading(format_string($course->fullname));

echo $OUTPUT->header();

echo $data['content'];

echo $OUTPUT->footer();
