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
 * This page lists all the instances of plugnmeet in a particular course,
 * or displays a site-wide report of active rooms for administrators.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_plugnmeet\event\course_module_instance_list_viewed;

require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/lib.php');

global $DB, $PAGE, $OUTPUT;

$id = optional_param('id', 0, PARAM_INT);
$systemcontext = context_system::instance();

// Display site-wide report for administrators if no course ID is provided.
if ($id === 0 && has_capability('mod/plugnmeet:viewactiveroomsreport', $systemcontext)) {
    $PAGE->set_url('/mod/plugnmeet/index.php');
    $PAGE->set_context($systemcontext);
    $PAGE->set_title(get_string('activeroomsreport', 'mod_plugnmeet'));
    $PAGE->set_heading(get_string('activeroomsreport', 'mod_plugnmeet'));

    $PAGE->requires->js_call_amd('mod_plugnmeet/active_rooms_report', 'init');

    echo $OUTPUT->header();

    // Render initial loading state.
    echo $OUTPUT->render_from_template('mod_plugnmeet/active_rooms_report', [
        'loading' => true,
    ]);

    echo $OUTPUT->footer();
    exit;
}

// Standard view: require a valid course ID.
if ($id === 0) {
    // If no ID and not an admin viewing the report, redirect to home or show error.
    redirect(new moodle_url('/'));
}

$course = $DB->get_record('course', ['id' => $id], '*', MUST_EXIST);
require_login($course);
$context = context_course::instance($course->id);

$event = course_module_instance_list_viewed::create([
    'context' => $context,
]);
$event->add_record_snapshot('course', $course);
$event->trigger();

$strplugnmeets = get_string('modulenameplural', 'mod_plugnmeet');

$PAGE->set_url('/mod/plugnmeet/index.php', ['id' => $id]);
$PAGE->set_context($context);
$PAGE->set_title($strplugnmeets);
$PAGE->set_heading($course->fullname);

echo $OUTPUT->header();
echo $OUTPUT->heading($strplugnmeets);

$plugnmeets = get_all_instances_in_course('plugnmeet', $course);

$templatedata = [
    'has_plugnmeets' => !empty($plugnmeets),
    'table' => [
        'headers' => [],
        'rows' => [],
    ],
    'no_plugnmeets_message' => get_string('thereareno', 'moodle', $strplugnmeets),
    'no_plugnmeets_url' => (new moodle_url('/course/view.php', ['id' => $course->id]))->out(false),
    'strplugnmeets' => get_string('modulenameplural', 'mod_plugnmeet'),
];

if ($templatedata['has_plugnmeets']) {
    if ($course->format == 'weeks') {
        $templatedata['table']['headers'] = [get_string('week'), get_string('name')];
    } else if ($course->format == 'topics') {
        $templatedata['table']['headers'] = [get_string('topic'), get_string('name')];
    } else {
        $templatedata['table']['headers'] = [get_string('name')];
    }

    foreach ($plugnmeets as $plugnmeet) {
        $row = [];
        if ($course->format == 'weeks' || $course->format == 'topics') {
            $row['section'] = $plugnmeet->section;
        }

        $linkdata = [
            'url' => (new moodle_url('/mod/plugnmeet/view.php', ['id' => $plugnmeet->coursemodule]))->out(false),
            'text' => $plugnmeet->name,
            'dimmed' => !$plugnmeet->visible,
        ];
        $row['link'] = $linkdata;
        $templatedata['table']['rows'][] = $row;
    }
}

echo $OUTPUT->render_from_template('mod_plugnmeet/course_instances_list', $templatedata);

echo $OUTPUT->footer();
