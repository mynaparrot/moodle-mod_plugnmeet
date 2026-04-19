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
 * This page lists all the instances of plugnmeet in a particular course.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/lib.php');

global $DB, $PAGE, $OUTPUT;

$id = required_param('id', PARAM_INT); // Course ID.
$course = $DB->get_record('course', ['id' => $id], '*', MUST_EXIST);

require_login($course);

$context = context_course::instance($course->id);

$event = \mod_plugnmeet\event\course_module_instance_list_viewed::create([
    'context' => $context,
]);
$event->add_record_snapshot('course', $course);
$event->trigger();

$strplugnmeets = get_string('modulenameplural', 'mod_plugnmeet');

$PAGE->set_url('/mod/plugnmeet/index.php', ['id' => $id]);
$PAGE->set_title($strplugnmeets);
$PAGE->set_heading($course->fullname);
$PAGE->set_context($context);

echo $OUTPUT->header();
echo $OUTPUT->heading($strplugnmeets);

$plugnmeets = get_all_instances_in_course('plugnmeet', $course);
if (!$plugnmeets) {
    notice(get_string('thereareno', 'moodle', $strplugnmeets), new moodle_url('/course/view.php', ['id' => $course->id]));
    die();
}

$table = new html_table();

if ($course->format == 'weeks') {
    $table->head  = [get_string('week'), get_string('name')];
    $table->align = ['center', 'left'];
} else if ($course->format == 'topics') {
    $table->head  = [get_string('topic'), get_string('name')];
    $table->align = ['center', 'left'];
} else {
    $table->head  = [get_string('name')];
    $table->align = ['left'];
}

foreach ($plugnmeets as $plugnmeet) {
    if (!$plugnmeet->visible) {
        $link = html_writer::link(
            new moodle_url('/mod/plugnmeet/view.php', ['id' => $plugnmeet->coursemodule]),
            $plugnmeet->name,
            ['class' => 'dimmed']
        );
    } else {
        $link = html_writer::link(
            new moodle_url('/mod/plugnmeet/view.php', ['id' => $plugnmeet->coursemodule]),
            $plugnmeet->name
        );
    }

    if ($course->format == 'weeks' || $course->format == 'topics') {
        $table->data[] = [$plugnmeet->section, $link];
    } else {
        $table->data[] = [$link];
    }
}

echo html_writer::table($table);

echo $OUTPUT->footer();
