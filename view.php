<?php

/**
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

$id = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('plugnmeet', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
$plugnmeet = $DB->get_record('plugnmeet', array('id' => $cm->instance), '*', MUST_EXIST);

require_login($course, true, $cm);

$context = \context_module::instance($cm->id);
$can_manage = has_capability('mod/plugnmeet:manage', $context);
$description = format_module_intro('plugnmeet', $plugnmeet, $cm->id);

$PAGE->set_url('/mod/plugnmeet/view.php', array('id' => $cm->id));
$PAGE->set_title(format_string($plugnmeet->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->requires->js_call_amd('mod_plugnmeet/join_button', 'init', [['cmid' => $cm->id]]);
$PAGE->requires->js_call_amd('mod_plugnmeet/view_page', 'init', [['cmid' => $cm->id, 'can_manage' => $can_manage]]);

if ($can_manage) {
    $PAGE->requires->js_call_amd('mod_plugnmeet/end_room_button', 'init', [['cmid' => $cm->id]]);
}

echo $OUTPUT->header();

$timenow = time();
$available = true;
$availability_msg = '';

if ($plugnmeet->available && $timenow < $plugnmeet->available) {
    $available = false;
    $availability_msg .= \html_writer::div(get_string('session_available_from', 'mod_plugnmeet', userdate($plugnmeet->available)), 'availabilityinfo font-weight-bold mb-2');
    if (!$can_manage) {
        $availability_msg .= \html_writer::div(get_string('session_not_started_yet', 'mod_plugnmeet'), 'alert alert-warning');
    }
}

if ($plugnmeet->deadline && $timenow > $plugnmeet->deadline) {
    $available = false;
    $availability_msg .= \html_writer::div(get_string('session_available_until', 'mod_plugnmeet', userdate($plugnmeet->deadline)), 'availabilityinfo font-weight-bold mb-2');
    $availability_msg .= \html_writer::div(get_string('session_ended', 'mod_plugnmeet'), 'alert alert-danger');
}

// Start Main Content Container.
echo \html_writer::start_div('mod_plugnmeet_view_container');

// Description section.
if (!empty($description)) {
    echo \html_writer::div($description, 'description mb-4');
}

// Card for availability and actions.
echo \html_writer::start_div('card');
echo \html_writer::start_div('card-body text-center');

// Availability messages.
if (!empty($availability_msg)) {
    echo \html_writer::div($availability_msg, 'availability_container mb-4');
}

// Action buttons.
$can_join = $available;
// Managers can join even if session has not started, but not if it has ended.
if ($can_manage && ($plugnmeet->deadline == 0 || $timenow <= $plugnmeet->deadline)) {
    $can_join = true;
}

if ($can_join) {
    echo \html_writer::start_div('action_buttons');
    echo \html_writer::tag('button', get_string('join_session', 'plugnmeet'), ['id' => 'join_button', 'class' => 'btn btn-primary btn-lg']);

    if ($can_manage) {
        echo \html_writer::tag('button', get_string('end_session', 'plugnmeet'), [
            'id' => 'end_room_button',
            'class' => 'btn btn-danger btn-lg ml-2',
            'style' => 'display:none;'
        ]);
    }
    echo \html_writer::end_div(); // End action_buttons.
}

echo \html_writer::end_div(); // End card-body.
echo \html_writer::end_div(); // End card.

// Placeholder for live session info (handled by JS).
echo \html_writer::div('', 'mt-4', ['id' => 'live_session_info']);

echo \html_writer::end_div(); // End mod_plugnmeet_view_container.

echo $OUTPUT->footer();
