<?php
/**
 * Part of mod_plugnmeet.
 *
 * @package     mod_plugnmeet
 * @copyright   2022 mynaparrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/lib.php');

global $CFG, $DB;

$config = get_config('mod_plugnmeet');

$clientPath = $CFG->dirroot . "/mod/plugnmeet/pix/client/dist/assets";
$jsFiles = preg_grep('~\.(js)$~', scandir($clientPath . "/js", SCANDIR_SORT_DESCENDING));
$cssFiles = preg_grep('~\.(css)$~', scandir($clientPath . "/css", SCANDIR_SORT_DESCENDING));

$path = $CFG->wwwroot . "/mod/plugnmeet/pix/client/dist/assets";
$jsTag = "";
foreach ($jsFiles as $file) {
    $jsTag .= '<script src="' . $path . '/js/' . $file . '" defer="defer"></script>' . "\n\t";
}

$cssTag = "";
foreach ($cssFiles as $file) {
    $cssTag .= '<link href="' . $path . '/css/' . $file . '" rel="stylesheet" />' . "\n\t";
}
$customLogo = "";
if ($config->custom_logo) {
    $filename = str_replace("/", "", $config->custom_logo);
    $table_files = "files";
    $results = $DB->get_record($table_files, array(
        'filename' => $filename,
        'component' => 'mod_plugnmeet',
        'filearea' => 'custom_logo'
    ));

    if ($results) {
        $url = moodle_url::make_pluginfile_url($results->contextid, $results->component, $results->filearea, $results->itemid, $results->filepath, $filename, false, true);
        $customLogo = 'window.CUSTOM_LOGO = "' . $url->out(false) . '";';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title><?php echo $_GET['room_title']; ?></title>
    <?php echo $cssTag . $jsTag; ?>

    <script type="text/javascript">
        window.PLUG_N_MEET_SERVER_URL = "<?php echo $config->plugnmeet_server_url; ?>";
        window.LIVEKIT_SERVER_URL = "<?php echo $config->livekit_server_url; ?>";
        window.STATIC_ASSETS_PATH = "<?php echo $path; ?>";
        <?php echo $customLogo; ?>

        Window.ENABLE_DYNACAST = <?php echo filter_var($config->enable_dynacast, FILTER_VALIDATE_BOOLEAN); ?>;
        window.ENABLE_SIMULCAST = <?php echo filter_var($config->enable_simulcast, FILTER_VALIDATE_BOOLEAN); ?>;
        window.STOP_MIC_TRACK_ON_MUTE = <?php echo filter_var($config->stop_mic_track_on_mute, FILTER_VALIDATE_BOOLEAN); ?>;
        window.NUMBER_OF_WEBCAMS_PER_PAGE_PC = <?php echo (int)$config->number_of_webcams_per_page_pc; ?>;
        window.NUMBER_OF_WEBCAMS_PER_PAGE_MOBILE = <?php echo (int)$config->number_of_webcams_per_page_mobile; ?>;
    </script>
</head>
<body>
<div id="plugNmeet-app"></div>
</body>
</html>
