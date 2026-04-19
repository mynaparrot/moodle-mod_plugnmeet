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
 * To display room artifacts
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

use mod_plugnmeet\controller\artifacts_controller;

global $DB, $PAGE, $OUTPUT;

$id = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('plugnmeet', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);
$plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);

require_login($course, true, $cm);

$context = context_module::instance($cm->id);
require_capability('mod/plugnmeet:viewartifacts', $context);

$controller = new artifacts_controller($cm, $course, $plugnmeet);

$action = optional_param('action', '', PARAM_TEXT);
$artifactid = optional_param('artifact_id', '', PARAM_TEXT);

if ($action === 'delete') {
    require_capability('mod/plugnmeet:deleteartifacts', $context);
    $controller->delete_artifact($artifactid);
} else if ($action === 'download') {
    require_capability('mod/plugnmeet:downloadartifacts', $context);
    $controller->download_artifact($artifactid);
} else if ($action === 'download_excel') {
    require_capability('mod/plugnmeet:downloadanalyticsreport', $context);
    $controller->download_excel_report($artifactid);
} else if ($action === 'download_json') {
    require_capability('mod/plugnmeet:downloadanalyticsreport', $context);
    $controller->download_json_report($artifactid);
}

$data = $controller->get_page_data();

$PAGE->set_url('/mod/plugnmeet/artifacts.php', ['id' => $cm->id]);
$PAGE->set_title(format_string($plugnmeet->name));
$PAGE->set_heading(format_string($course->fullname));

echo $OUTPUT->header();

echo $data['content'];

echo $OUTPUT->footer();
