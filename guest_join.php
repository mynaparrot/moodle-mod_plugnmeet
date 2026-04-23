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
 * Public entry point for guest users to join a PlugNmeet session.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// We need to allow direct access for this file
// phpcs:disable moodle.Files.MoodleInternal.MoodleInternalGlobalState,moodle.Files.RequireLogin.Missing
require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/lib.php');

global $DB, $PAGE, $OUTPUT;

$id = required_param('id', PARAM_INT);
$expiry = required_param('expiry', PARAM_INT);
$sig = required_param('sig', PARAM_ALPHANUM);

// If user is already logged in, redirect them to the regular view page with a message.
if (isloggedin() && !isguestuser()) {
    \core\notification::info(get_string('already_logged_in', 'mod_plugnmeet'));
    redirect(new moodle_url('/mod/plugnmeet/view.php', ['id' => $id]));
}

$config = get_config('mod_plugnmeet');

// 1. Global Security Check: Is guest access allowed site-wide?
if (isset($config->allow_guest_global) && $config->allow_guest_global == 0) {
    throw new moodle_exception('guest_access_denied', 'mod_plugnmeet');
}

$cm = get_coursemodule_from_id('plugnmeet', $id, 0, false, MUST_EXIST);
$plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);

// 2. Activity-level Security Check: Is guest access enabled for this room?
if (empty($plugnmeet->allow_guest)) {
    throw new moodle_exception('guest_access_denied', 'mod_plugnmeet');
}

// 3. Validate Signature.
$expectedsig = sha1($cm->id . $plugnmeet->guest_token . $expiry);
if ($sig !== $expectedsig) {
    throw new moodle_exception('invalid_guest_token', 'mod_plugnmeet');
}

// 4. Check Expiration.
if (time() > $expiry) {
    throw new moodle_exception('guest_link_expired', 'mod_plugnmeet');
}

// Setup Page.
$PAGE->set_url('/mod/plugnmeet/guest_join.php', ['id' => $id, 'expiry' => $expiry, 'sig' => $sig]);
$PAGE->set_context(context_system::instance()); // Public context.
$PAGE->set_title(get_string('guest_join_title', 'mod_plugnmeet'));
$PAGE->set_heading(format_string($plugnmeet->name));
$PAGE->set_pagelayout('base');

// Initialize JS.
$PAGE->requires->js_call_amd('mod_plugnmeet/join_button', 'init', [
    ['cmid' => $cm->id, 'is_guest' => true],
]);

// Render UI.
echo $OUTPUT->header();

$templatecontext = [];
if (!empty($plugnmeet->welcomemessage)) {
    $templatecontext['welcomemessage'] = format_string($plugnmeet->welcomemessage);
}

echo $OUTPUT->render_from_template('mod_plugnmeet/guest_join', $templatecontext);

echo $OUTPUT->footer();
