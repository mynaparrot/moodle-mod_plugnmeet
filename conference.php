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
 * Local client loader
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// We need to allow direct access for this file as guest user may need to access
// phpcs:disable moodle.Files.MoodleInternal.MoodleInternalGlobalState,moodle.Files.RequireLogin.Missing
require(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/lib.php');

use mod_plugnmeet\helper\plugNmeetConnect;

global $CFG, $DB, $PAGE;

$id = optional_param('id', 0, PARAM_INT);
$cm = get_coursemodule_from_id('plugnmeet', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);
$moduleinstance = $DB->get_record('plugnmeet', ['id' => $cm->instance], '*', MUST_EXIST);
$context = context_module::instance($cm->id);

$PAGE->set_url('/mod/plugnmeet/conference.php', ['id' => $cm->id]);
$PAGE->set_context($context);

// If guest access is NOT enabled, require standard Moodle login.
if (empty($moduleinstance->allow_guest)) {
    require_login($course, true, $cm);
}

$config = get_config('mod_plugnmeet');
$connect = new plugNmeetConnect($config);
$files = $connect->getClientFiles();
$jsfiles = $files->getJSFiles() ?? [];
$cssfiles = $files->getCSSFiles() ?? [];
$path = $config->plugnmeet_server_url . "/assets";
if (!empty($files->getStaticAssetsPath())) {
    $path = $files->getStaticAssetsPath();
}

$jstag = "";
foreach ($jsfiles as $file) {
    if (str_starts_with($file, 'main-module.')) {
        $jstag .= '<script src="' . $path . '/js/' . $file . '" type="module"></script>' . "\n\t";
        continue;
    }
    $jstag .= '<script src="' . $path . '/js/' . $file . '" defer="defer"></script>' . "\n\t";
}

$csstag = "";
foreach ($cssfiles as $file) {
    $csstag .= '<link href="' . $path . '/css/' . $file . '" rel="stylesheet" />' . "\n\t";
}
$script = get_plugnmeet_config();

$title = format_string($moduleinstance->name);

echo '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>' . $title . '</title>
    ' . $csstag . $jstag . $script . '
</head>
<body>
<div id="plugNmeet-app"></div>
</body>
</html>';
