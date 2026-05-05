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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace mod_plugnmeet\controller;

use admin_category;
use admin_settingpage;
use core\plugininfo\mod;
use core_plugin_manager;
use mod_plugnmeet\helper\ExtensionManager;

defined('MOODLE_INTERNAL') || die;

/**
 * Controller class for handling module settings including subplugins
 *
 * @package     mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class settings_controller {
    /**
     * @var admin_category
     */
    protected $admin;
    /**
     * @var mod
     */
    protected $module;
    /**
     * @var string
     */
    protected $section;
    /**
     * @var bool
     */
    protected $hassiteconfig;
    /**
     * @var string
     */
    protected $parantename = 'modsettingplugnmeet';

    /**
     * Constructor for the settings.
     *
     * @param admin_category $admin
     * @param mod $module
     * @param string $section for the plugin setting (main setting page)
     * @param bool $hassiteconfig whether the current user has moodle/site:config capability
     */
    public function __construct(admin_category $admin, mod $module, string $section, bool $hassiteconfig) {
        $this->admin = $admin;
        $this->module = $module;
        $this->section = $section;
        $this->hassiteconfig = $hassiteconfig;

        $this->admin->add('modsettings', new \admin_category(
            $this->parantename,
            get_string('modulename', 'mod_plugnmeet'),
            $this->module->is_enabled() === false
        ));
    }

    /**
     * Load all the settings
     *
     * @return void
     * @throws \coding_exception
     */
    public function add_all_settings() {
        if ($this->hassiteconfig) {
            $mainsettings = new \admin_settingpage('mod_plugnmeet_settings', get_string('generalsettings', 'admin'));

            // Populate the main settings page, but only if we are building the full admin tree.
            if ($this->admin->fulltree) {
                $this->load_general_settings($mainsettings);
            }
            $this->admin->add($this->parantename, $mainsettings);

            $extensions = core_plugin_manager::instance()->get_plugins_of_type(ExtensionManager::PNM_EXTENSION_PLUGIN_NAME);
            if (!empty($extensions)) {
                // add custom category for subplugins with name: pnmextplugins
                $this->admin->add($this->parantename, new admin_category(
                    ExtensionManager::PNM_EXTENSION_PLUGIN_NAME . 'plugins',
                    get_string('subplugintype_pnmext', 'mod_plugnmeet'),
                    $this->module->is_enabled() === false
                ));
                // handle with subplugins' settings options
                foreach ($extensions as $plugin) {
                    $plugin->load_settings($this->admin, $this->parantename, $this->hassiteconfig);
                }
            }
        }
    }

    /**
     * All general plugin related settings
     *
     * @param admin_settingpage $mainsettings
     * @return void
     * @throws \coding_exception
     */
    private function load_general_settings(admin_settingpage $mainsettings) {
        // API Configuration
        $mainsettings->add(new \admin_setting_heading('mod_plugnmeet/api_config', get_string('api_config', 'mod_plugnmeet'), ''));

        $mainsettings->add(new \admin_setting_configtext(
            'mod_plugnmeet/plugnmeet_server_url',
            get_string('server_url', 'mod_plugnmeet'),
            get_string('server_url_desc', 'mod_plugnmeet'),
            'https://demo.plugnmeet.com',
            PARAM_URL
        ));

        $mainsettings->add(new \admin_setting_configtext(
            'mod_plugnmeet/plugnmeet_api_key',
            get_string('api_key', 'mod_plugnmeet'),
            get_string('api_key_desc', 'mod_plugnmeet'),
            'plugnmeet',
            PARAM_TEXT
        ));

        $mainsettings->add(new \admin_setting_configpasswordunmask(
            'mod_plugnmeet/plugnmeet_secret',
            get_string('api_secret', 'mod_plugnmeet'),
            get_string('api_secret_desc', 'mod_plugnmeet'),
            'zumyyYWqv7KR2kUqvYdq4z4sXg7XTBD2ljT6',
            PARAM_TEXT
        ));

        // Technical Defaults
        $mainsettings->add(new \admin_setting_heading(
            'mod_plugnmeet/defaults',
            get_string('defaults', 'mod_plugnmeet'),
            get_string('defaults_desc', 'mod_plugnmeet')
        ));

        $mainsettings->add(new \admin_setting_configselect(
            'mod_plugnmeet/enable_dynacast',
            get_string('enable_dynacast', 'mod_plugnmeet'),
            get_string('enable_dynacast_des', 'mod_plugnmeet'),
            1,
            [1 => get_string('yes'), 0 => get_string('no')]
        ));

        $mainsettings->add(new \admin_setting_configselect(
            'mod_plugnmeet/enable_simulcast',
            get_string('enable_simulcast', 'mod_plugnmeet'),
            get_string('enable_simulcast_des', 'mod_plugnmeet'),
            1,
            [1 => get_string('yes'), 0 => get_string('no')]
        ));

        $mainsettings->add(new \admin_setting_configselect(
            'mod_plugnmeet/video_codec',
            get_string('video_codec', 'mod_plugnmeet'),
            get_string('video_codec_des', 'mod_plugnmeet'),
            'vp8',
            ["vp8" => "vp8", "h264" => "h264", "av1" => "av1", "vp9" => "vp9"]
        ));

        $mainsettings->add(new \admin_setting_configselect(
            'mod_plugnmeet/default_webcam_resolution',
            get_string('default_webcam_resolution', 'mod_plugnmeet'),
            get_string('default_webcam_resolution_des', 'mod_plugnmeet'),
            'h720',
            ["h90" => "h90", "h180" => "h180", "h216" => "h216",
                "h360" => "h360", "h540" => "h540", "h720" => "h720",
                "h1080" => "h1080", "h1440" => "h1440",
                "h2160" => "h2160"]
        ));

        $mainsettings->add(new \admin_setting_configselect(
            'mod_plugnmeet/default_screen_share_resolution',
            get_string('default_screen_share_resolution', 'mod_plugnmeet'),
            get_string('default_screen_share_resolution_des', 'mod_plugnmeet'),
            'h1080fps15',
            ["h360fps3" => "h360fps3", "h720fps5" => "h720fps5",
                "h720fps15" => "h720fps15", "h1080fps15" => "h1080fps15",
                "h1080fps30" => "h1080fps30"]
        ));

        $mainsettings->add(new \admin_setting_configselect(
            'mod_plugnmeet/default_audio_preset',
            get_string('default_audio_preset', 'mod_plugnmeet'),
            get_string('default_audio_preset_des', 'mod_plugnmeet'),
            'music',
            ["telephone" => "telephone", "speech" => "speech", "music" => "music",
                "musicStereo" => "musicStereo", "musicHighQuality" => "musicHighQuality",
                "musicHighQualityStereo" => "musicHighQualityStereo"]
        ));

        // Branding and Customization
        $mainsettings->add(new \admin_setting_heading('mod_plugnmeet/branding', get_string('branding', 'mod_plugnmeet'), ''));

        $mainsettings->add(new \admin_setting_configstoredfile(
            'mod_plugnmeet/custom_logo',
            get_string('custom_logo', 'mod_plugnmeet'),
            get_string('custom_logo_des', 'mod_plugnmeet'),
            'custom_logo',
            0,
            ['maxfiles' => 1, 'accepted_types' => ['.png', '.jpg', '.svg']]
        ));

        $mainsettings->add(new \admin_setting_configtext(
            'mod_plugnmeet/custom_css_url',
            get_string('custom_css_url', 'plugnmeet'),
            get_string('custom_css_url_des', 'plugnmeet'),
            "",
            PARAM_URL
        ));

        $mainsettings->add(new \admin_setting_configcolourpicker(
            'mod_plugnmeet/primary_color',
            get_string('primary_color', 'plugnmeet'),
            get_string('primary_color_des', 'plugnmeet'),
            ''
        ));

        $mainsettings->add(new \admin_setting_configcolourpicker(
            'mod_plugnmeet/secondary_color',
            get_string('secondary_color', 'plugnmeet'),
            get_string('secondary_color_des', 'plugnmeet'),
            ''
        ));

        $mainsettings->add(new \admin_setting_configcolourpicker(
            'mod_plugnmeet/background_color',
            get_string('background_color', 'plugnmeet'),
            get_string('background_color_des', 'plugnmeet'),
            ''
        ));

        $mainsettings->add(new \admin_setting_configstoredfile(
            'mod_plugnmeet/background_image',
            get_string('background_image', 'plugnmeet'),
            get_string('background_image_des', 'plugnmeet'),
            'background_image',
            0,
            ['maxfiles' => 1, 'accepted_types' => ['.png', '.jpg']]
        ));

        $mainsettings->add(new \admin_setting_configcolourpicker(
            'mod_plugnmeet/header_color',
            get_string('header_color', 'plugnmeet'),
            get_string('header_color_des', 'plugnmeet'),
            ''
        ));

        $mainsettings->add(new \admin_setting_configcolourpicker(
            'mod_plugnmeet/footer_color',
            get_string('footer_color', 'plugnmeet'),
            get_string('footer_color_des', 'plugnmeet'),
            ''
        ));

        $mainsettings->add(new \admin_setting_configcolourpicker(
            'mod_plugnmeet/side_panel_bg_color',
            get_string('side_panel_bg_color', 'plugnmeet'),
            get_string('side_panel_bg_color_des', 'plugnmeet'),
            ''
        ));

        $mainsettings->add(new \admin_setting_configtext(
            'mod_plugnmeet/copyright_text',
            get_string('copyright_text', 'plugnmeet'),
            get_string('copyright_text_des', 'plugnmeet'),
            "Powered by <a href=\"https://www.plugnmeet.org\" target=\"_blank\">plugNmeet</a>",
            PARAM_RAW
        ));

        $loadclient = [
            1 => get_string('remote', 'mod_plugnmeet'),
            2 => get_string('redirect', 'mod_plugnmeet'),
        ];
        $mainsettings->add(new \admin_setting_configselect(
            'mod_plugnmeet/client_load',
            get_string('client_load', 'mod_plugnmeet'),
            get_string('client_load_des', 'mod_plugnmeet'),
            1,
            $loadclient
        ));

        // Guest Access Settings
        $mainsettings->add(new \admin_setting_heading('mod_plugnmeet/guest_access_hdr', get_string('guest_access_hdr', 'mod_plugnmeet'), ''));

        $mainsettings->add(new \admin_setting_configselect(
            'mod_plugnmeet/allow_guest_global',
            get_string('allow_guest_global', 'mod_plugnmeet'),
            get_string('allow_guest_global_desc', 'mod_plugnmeet'),
            0,
            [1 => get_string('yes'), 0 => get_string('no')]
        ));

        $mainsettings->add(new \admin_setting_configtext(
            'mod_plugnmeet/guest_link_expiration',
            get_string('guest_link_expiration', 'mod_plugnmeet'),
            get_string('guest_link_expiration_desc', 'mod_plugnmeet'),
            3,
            PARAM_INT
        ));
    }
}
