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
 * Settings for PlugNmeet.
 *
 * @package   mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright 2026 MynaParrot
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jibon L. Costa <jibon@mynaparrot.com>
 */

use mod_plugnmeet\controller\settings_controller;

defined('MOODLE_INTERNAL') || die;

$pnmsettings = new settings_controller($ADMIN, $module, $section, $hassiteconfig);
$pnmsettings->add_all_settings();

$settings = null;
