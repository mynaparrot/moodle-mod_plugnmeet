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

global $DB, $PAGE, $OUTPUT;

$id = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('plugnmeet', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);
$plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);

require_login($course, true, $cm);

$context = \context_module::instance($cm->id);
require_capability('mod/plugnmeet:view', $context);

$canmanage = has_capability('mod/plugnmeet:manage', $context);
$canviewlivesessioninfo = has_capability('mod/plugnmeet:viewlivesessioninfo', $context);

$PAGE->set_url('/mod/plugnmeet/view.php', ['id' => $cm->id]);
$PAGE->set_title(format_string($plugnmeet->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->requires->js_call_amd('mod_plugnmeet/join_button', 'init', [['cmid' => $cm->id]]);
// we'll load this for everyone, further restriction was set in JS code
$PAGE->requires->js_call_amd('mod_plugnmeet/view_page', 'init', [['cmid' => $cm->id, 'can_view' => $canviewlivesessioninfo]]);

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

$contextdata = [
    'availability_message' => $availabilitymsg,
    'can_join' => $available,
    'can_manage' => $canmanage,
    'guest_link' => false,
    'can_view_live_info' => $canviewlivesessioninfo,
];

// Managers can join even if session has not started, but not if it has ended.
if ($canmanage && ($plugnmeet->deadline == 0 || $timenow <= $plugnmeet->deadline)) {
    $contextdata['can_join'] = true;
}

// Guest Link Section for Managers.
$config = get_config('mod_plugnmeet');
$allowglobal = !isset($config->allow_guest_global) || $config->allow_guest_global == 1;

if ($canmanage && $allowglobal && !empty($plugnmeet->allow_guest) && !empty($plugnmeet->guest_token)) {
    $durationhours = (int)($config->guest_link_expiration ?? 3);
    $expiry = time() + ($durationhours * 3600);
    $sig = sha1($cm->id . $plugnmeet->guest_token . $expiry);

    $guestjoinurl = new moodle_url('/mod/plugnmeet/guest_join.php', [
        'id' => $cm->id,
        'expiry' => $expiry,
        'sig' => $sig,
    ]);

    $contextdata['guest_link'] = true;
    $contextdata['guest_link_url'] = $guestjoinurl->out(false);
    $contextdata['guest_link_help'] = get_string('guest_join_link_help', 'mod_plugnmeet', $durationhours);
}

echo $OUTPUT->render_from_template('mod_plugnmeet/view', $contextdata);

echo $OUTPUT->footer();
