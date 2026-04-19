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

/**
 * Main view
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

$id = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('plugnmeet', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);
$plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);

require_login($course, true, $cm);

$context = \context_module::instance($cm->id);
require_capability('mod/plugnmeet:view', $context);

$canmanage = has_capability('mod/plugnmeet:manage', $context);

$PAGE->set_url('/mod/plugnmeet/view.php', ['id' => $cm->id]);
$PAGE->set_title(format_string($plugnmeet->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->requires->js_call_amd('mod_plugnmeet/join_button', 'init', [['cmid' => $cm->id]]);
$PAGE->requires->js_call_amd('mod_plugnmeet/view_page', 'init', [['cmid' => $cm->id, 'can_manage' => $canmanage]]);

if ($canmanage) {
    $PAGE->requires->js_call_amd('mod_plugnmeet/end_room_button', 'init', [['cmid' => $cm->id]]);
}

echo $OUTPUT->header();

$timenow = time();
$available = true;
$availabilitymsg = '';

if ($plugnmeet->available && $timenow < $plugnmeet->available) {
    $available = false;
    $availabilitymsg .= \html_writer::div(get_string('session_available_from', 'mod_plugnmeet', userdate($plugnmeet->available)), 'availabilityinfo font-weight-bold mb-2');
    if (!$canmanage) {
        $availabilitymsg .= \html_writer::div(get_string('session_not_started_yet', 'mod_plugnmeet'), 'alert alert-warning');
    }
}

if ($plugnmeet->deadline && $timenow > $plugnmeet->deadline) {
    $available = false;
    $availabilitymsg .= \html_writer::div(get_string('session_available_until', 'mod_plugnmeet', userdate($plugnmeet->deadline)), 'availabilityinfo font-weight-bold mb-2');
    $availabilitymsg .= \html_writer::div(get_string('session_ended', 'mod_plugnmeet'), 'alert alert-danger');
}

// Start Main Content Container.
echo \html_writer::start_div('mod_plugnmeet_view_container');

// Card for availability and actions.
echo \html_writer::start_div('card');
echo \html_writer::start_div('card-body text-center');

// Availability messages.
if (!empty($availabilitymsg)) {
    echo \html_writer::div($availabilitymsg, 'availability_container mb-4');
}

// Action buttons.
$canjoin = $available;
// Managers can join even if session has not started, but not if it has ended.
if ($canmanage && ($plugnmeet->deadline == 0 || $timenow <= $plugnmeet->deadline)) {
    $canjoin = true;
}

if ($canjoin) {
    echo \html_writer::start_div('action_buttons');
    echo \html_writer::tag('button', get_string('join_session', 'plugnmeet'), ['id' => 'join_button', 'class' => 'btn btn-primary btn-lg']);

    if ($canmanage) {
        echo \html_writer::tag('button', get_string('end_session', 'plugnmeet'), [
            'id' => 'end_room_button',
            'class' => 'btn btn-danger btn-lg ml-2',
            'style' => 'display:none;',
        ]);
    }
    echo \html_writer::end_div(); // End action_buttons.
}

echo \html_writer::end_div(); // End card-body.
echo \html_writer::end_div(); // End card.

// Guest Link Section for Managers.
$config = get_config('mod_plugnmeet');
$allowglobal = !isset($config->allow_guest_global) || $config->allow_guest_global == 1;

if ($canmanage && $allowglobal && !empty($plugnmeet->allow_guest) && !empty($plugnmeet->guest_token)) {
    $durationhours = (int)($config->guest_link_expiration ?? 3);
    $expiry = time() + ($durationhours * 3600);
    $sig = sha1($plugnmeet->guest_token . $expiry);

    $guestjoinurl = new moodle_url('/mod/plugnmeet/guest_join.php', [
        'id' => $cm->id,
        'expiry' => $expiry,
        'sig' => $sig,
    ]);
    echo \html_writer::start_div('card mt-4');
    echo \html_writer::start_div('card-body');
    echo \html_writer::tag('h5', get_string('guest_join_link', 'mod_plugnmeet'), ['class' => 'card-title']);
    echo \html_writer::tag('p', get_string('guest_join_link_help', 'mod_plugnmeet', $durationhours), ['class' => 'card-text small text-muted']);
    echo \html_writer::start_div('input-group');
    echo \html_writer::empty_tag('input', [
        'type' => 'text',
        'class' => 'form-control',
        'value' => $guestjoinurl->out(false),
        'readonly' => 'readonly',
        'onclick' => 'this.select();',
    ]);
    echo \html_writer::start_div('input-group-append');
    echo \html_writer::tag('button', get_string('copy_link', 'mod_plugnmeet'), [
        'class' => 'btn btn-outline-secondary',
        'type' => 'button',
        'onclick' => "navigator.clipboard.writeText('{$guestjoinurl->out(false)}'); alert('" . format_string(get_string('link_copied', 'mod_plugnmeet')) . "');",
    ]);
    echo \html_writer::end_div(); // End input-group-append.
    echo \html_writer::end_div(); // End input-group.
    echo \html_writer::end_div(); // End card-body.
    echo \html_writer::end_div(); // End card.
}

// Placeholder for live session info (handled by JS).
echo \html_writer::div('', 'mt-4', ['id' => 'live_session_info']);

echo \html_writer::end_div(); // End mod_plugnmeet_view_container.

echo $OUTPUT->footer();
