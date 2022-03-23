<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     mod_plugnmeet
 * @category    admin
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2022 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    // phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedIf
    $settings->add(new admin_setting_heading('mod_plugnmeet/plugnmeetconfig', get_string('plugnmeetconfig', 'plugnmeet'), ''));
    $settings->add(new admin_setting_configtext('mod_plugnmeet/plugnmeet_server_url', get_string('plugnmeet_server_url', 'plugnmeet'),
        get_string('plugnmeet_server_url_des', 'plugnmeet'), "https://demo.plugnmeet.com", PARAM_TEXT));
    $settings->add(new admin_setting_configtext('mod_plugnmeet/plugnmeet_api_key', get_string('plugnmeet_api_key', 'plugnmeet'),
        get_string('plugnmeet_api_key_des', 'plugnmeet'), "plugnmeet", PARAM_TEXT));
    $settings->add(new admin_setting_configtext('mod_plugnmeet/plugnmeet_secret', get_string('plugnmeet_secret', 'plugnmeet'),
        get_string('plugnmeet_secret_des', 'plugnmeet'), "zumyyYWqv7KR2kUqvYdq4z4sXg7XTBD2ljT6", PARAM_TEXT));
    $settings->add(new admin_setting_configtext('mod_plugnmeet/livekit_server_url', get_string('livekit_server_url', 'plugnmeet'),
        get_string('livekit_server_url_des', 'plugnmeet'), "https://lk.plugnmeet.com", PARAM_TEXT));

    $settings->add(new admin_setting_configstoredfile(
        'mod_plugnmeet/custom_logo', get_string('custom_logo', 'plugnmeet'), get_string('custom_logo_des', 'plugnmeet'), 'custom_logo', 0, array('maxfiles' => 1, 'accepted_types' => array('.png', '.jpg'))));

    $settings->add(new admin_setting_heading('mod_plugnmeet/plugnmeetoptions', get_string('plugnmeetoptions', 'plugnmeet'), ''));

    $enable_dynacast = array();
    $enable_dynacast[1] = 'true';
    $enable_dynacast[0] = 'false';
    $settings->add(new admin_setting_configselect('mod_plugnmeet/enable_dynacast',
        get_string('enable_dynacast', 'mod_plugnmeet'),
        get_string('enable_dynacast_des', 'mod_plugnmeet'), true, $enable_dynacast));

    $enable_simulcast = array();
    $enable_simulcast[1] = 'true';
    $enable_simulcast[0] = 'false';
    $settings->add(new admin_setting_configselect('mod_plugnmeet/enable_simulcast',
        get_string('enable_simulcast', 'mod_plugnmeet'),
        get_string('enable_simulcast_des', 'mod_plugnmeet'), true, $enable_simulcast));

    $stop_mic_track_on_mute = array();
    $stop_mic_track_on_mute[1] = 'true';
    $stop_mic_track_on_mute[0] = 'false';
    $settings->add(new admin_setting_configselect('mod_plugnmeet/stop_mic_track_on_mute',
        get_string('stop_mic_track_on_mute', 'mod_plugnmeet'),
        get_string('stop_mic_track_on_mute_des', 'mod_plugnmeet'), true, $stop_mic_track_on_mute));

    $settings->add(new admin_setting_configtext('mod_plugnmeet/number_of_webcams_per_page_pc', get_string('number_of_webcams_per_page_pc', 'plugnmeet'),
        get_string('number_of_webcams_per_page_pc_des', 'plugnmeet'), 25, PARAM_INT));
    $settings->add(new admin_setting_configtext('mod_plugnmeet/number_of_webcams_per_page_mobile', get_string('number_of_webcams_per_page_mobile', 'plugnmeet'),
        get_string('number_of_webcams_per_page_mobile_des', 'plugnmeet'), 6, PARAM_INT));

    $settings->add(new admin_setting_heading('mod_plugnmeet/plugnmeetextra', get_string('extraoption', 'plugnmeet'), ''));

    $settings->add(new admin_setting_configtext('mod_plugnmeet/client_download_url', get_string('client_download_url', 'plugnmeet'),
        get_string('client_download_url_des', 'plugnmeet'), "https://github.com/mynaparrot/plugNmeet-client/releases/latest/download/client.zip", PARAM_TEXT));

    $setting = new admin_setting_description('mod_plugnmeet/update_client', "", get_string('update_client_code', 'plugnmeet'));
    $setting->nosave = true;
    $settings->add($setting);
}
?>
    <script type="text/javascript">
        window.addEventListener('load', function () {
            document.getElementById('updateClient').addEventListener('click', (e) => {
                e.preventDefault();
                e.target.setAttribute('disabled', 'disabled');

                require(['core/ajax'], function (ajax) {
                    ajax.call([
                        {
                            methodname: 'mod_plugnmeet_update_client',
                            args: {},
                            done: (res) => {
                                e.target.removeAttribute('disabled');
                                alert(res.msg);
                            },
                            fail: (ex) => {
                                e.target.removeAttribute('disabled');
                                alert(ex.error);
                            },
                        },
                    ]);
                });
            });
        });
    </script>
<?php
