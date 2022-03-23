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

class mod_plugnmeet_update_client extends external_api
{
    public static function update_client_parameters()
    {
        return new external_function_parameters([

        ]);
    }

    public static function update_client()
    {
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

        $clientZipFile = $CFG->dataroot . "/temp/client.zip";
        $file = fopen($clientZipFile, "w+");
        if (!$file) {
            $output->msg = get_string('error_file_open', 'plugnmeet');
            return $output;
        }
        fputs($file, $data);
        fclose($file);

        $zip = new ZipArchive;
        $res = $zip->open($clientZipFile);
        if ($res === TRUE) {
            $extractPath = $CFG->dirroot . "/mod/plugnmeet/pix/";
            // for safety let's delete client first
            self::deleteDir($extractPath . "client");

            $zip->extractTo($extractPath);
            $zip->close();
            unlink($clientZipFile);

            $output->status = true;
            $output->msg = get_string('client_updated_success', 'plugnmeet');
        } else {
            $output->msg = get_string('client_updated_failed', 'plugnmeet');;
        }

        return (array)$output;
    }

    private static function deleteDir($dirPath)
    {
        if (!is_dir($dirPath)) {
            return;
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $it = new RecursiveDirectoryIterator($dirPath, RecursiveDirectoryIterator::SKIP_DOTS);
        $files = new RecursiveIteratorIterator($it,
            RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($files as $file) {
            if ($file->isDir()) {
                rmdir($file->getRealPath());
            } else {
                unlink($file->getRealPath());
            }
        }

        rmdir($dirPath);
    }

    public static function update_client_returns()
    {
        return new external_single_structure([
            'status' => new external_value(PARAM_BOOL, 'status of request'),
            'msg' => new external_value(PARAM_TEXT, 'status message', VALUE_REQUIRED),
        ]);
    }
}
