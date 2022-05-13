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
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2022 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once($CFG->libdir . "/externallib.php");
if (!class_exists("plugNmeetConnect")) {
    require($CFG->dirroot . '/mod/plugnmeet/helpers/plugNmeetConnect.php');
}

/**
 *
 */
class mod_plugnmeet_update_client extends external_api {
    /**
     * @return external_function_parameters
     */
    public static function update_client_parameters() {
        return new external_function_parameters([

        ]);
    }

    /**
     * @return array|stdClass
     * @throws coding_exception
     * @throws dml_exception
     */
    public static function update_client() {
        global $CFG;
        $output = new stdClass();
        $output->status = false;
        $config = get_config('mod_plugnmeet');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $config->client_download_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $data = curl_exec($ch);
        $error = curl_error($ch);
        $errno = curl_errno($ch);
        curl_close($ch);

        if (0 !== $errno) {
            $output->msg = $errno . ": " . $error;
            return $output;
        }

        $clientzipfile = $CFG->dataroot . "/temp/client.zip";
        $file = fopen($clientzipfile, "w+");
        if (!$file) {
            $output->msg = get_string('error_file_open', 'plugnmeet');
            return $output;
        }
        fputs($file, $data);
        fclose($file);

        $zip = new ZipArchive;
        $res = $zip->open($clientzipfile);
        if ($res === true) {
            $extractpath = $CFG->dirroot . "/mod/plugnmeet/pix/";
            // For safety let's delete client first.
            self::delete_dir($extractpath . "client");

            $zip->extractTo($extractpath);
            $zip->close();
            unlink($clientzipfile);

            $output->status = true;
            $output->msg = get_string('client_updated_success', 'plugnmeet');
        } else {
            $output->msg = get_string('client_updated_failed', 'plugnmeet');;
        }

        return (array)$output;
    }

    /**
     * @param $dirpath
     * @return void
     */
    private static function delete_dir($dirpath) {
        if (!is_dir($dirpath)) {
            return;
        }
        if (substr($dirpath, strlen($dirpath) - 1, 1) != '/') {
            $dirpath .= '/';
        }
        $it = new RecursiveDirectoryIterator($dirpath, RecursiveDirectoryIterator::SKIP_DOTS);
        $files = new RecursiveIteratorIterator($it,
            RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($files as $file) {
            if ($file->isDir()) {
                rmdir($file->getRealPath());
            } else {
                unlink($file->getRealPath());
            }
        }

        rmdir($dirpath);
    }

    /**
     * @return external_single_structure
     */
    public static function update_client_returns() {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'status of request'),
            'msg' => new external_value(PARAM_TEXT, 'status message', VALUE_REQUIRED),
        ]);
    }
}
