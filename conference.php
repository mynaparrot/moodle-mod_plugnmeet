<?php
/**
 * Part of mod_plugnmeet.
 *
 * @package     mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2022 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_plugnmeet\helper\plugNmeetConnect;

require(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/lib.php');
global $CFG, $DB;

$id = optional_param('id', 0, PARAM_INT);
$cm = get_coursemodule_from_id('plugnmeet', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
$moduleinstance = $DB->get_record('plugnmeet', array('id' => $cm->instance), '*', MUST_EXIST);
$context = context_module::instance($cm->id);

require_login($course, true, $cm);

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
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title><?php echo format_string($moduleinstance->name); ?></title>
    <?php echo $csstag . $jstag . $script; ?>
</head>
<body>
<div id="plugNmeet-app"></div>
</body>
</html>
