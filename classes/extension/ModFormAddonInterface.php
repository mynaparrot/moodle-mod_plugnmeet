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

namespace mod_plugnmeet\extension;

defined('MOODLE_INTERNAL') || die();

use MoodleQuickForm;

/**
 * Interface for extensions that need to add elements to the module form.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
interface ModFormAddonInterface {
    /**
     * Adds elements to the PlugNmeet module form.
     *
     * @param MoodleQuickForm $mform The Moodle form object.
     * @param int $courseid The ID of the course.
     * @param int $cmid The ID of the course module (0 for new activity).
     */
    public function add_mod_form_elements(MoodleQuickForm $mform, int $courseid, int $cmid = 0): void;

    /**
     * Returns validation rules for the elements added by the addon.
     *
     * @param array $data The form data.
     * @param array $errors An array to store validation errors.
     * @return array The updated errors array.
     */
    public function get_mod_form_validation_rules(array $data, array $errors): array;
}
