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

use stdClass;

/**
 * Interface for extensions that need to hook into the module instance lifecycle.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
interface ModInstanceAddonInterface {
    /**
     * Runs any processes that must run before a plugnmeet is created.
     *
     * @param stdClass $data The plugnmeet instance data from the form.
     * @return stdClass The (possibly modified) plugnmeet instance data.
     */
    public function before_add_instance(stdClass $data): stdClass;

    /**
     * Runs any processes that must run after a plugnmeet is created.
     *
     * @param stdClass $data The plugnmeet instance data from the form.
     */
    public function after_add_instance(stdClass $data);

    /**
     * Runs any processes that must be run before a plugnmeet is updated.
     *
     * @param stdClass $data The plugnmeet instance data from the form.
     * @return stdClass The (possibly modified) plugnmeet instance data.
     */
    public function before_update_instance(stdClass $data): stdClass;

    /**
     * Runs any processes that must be run after a plugnmeet is updated.
     *
     * @param stdClass $data The plugnmeet instance data from the form.
     */
    public function after_update_instance(stdClass $data): void;

    /**
     * Runs any processes that must be run BEFORE a plugnmeet is deleted.
     *
     * @param stdClass $plugnmeet The plugnmeet instance record from the database.
     */
    public function before_delete_instance(stdClass $plugnmeet): void;

    /**
     * Runs any processes that must be run AFTER a plugnmeet is deleted.
     *
     * @param stdClass $plugnmeet The plugnmeet instance record from the database (before deletion).
     */
    public function after_delete_instance(stdClass $plugnmeet): void;

    /**
     * Get any join table name that is used to store additional data for the instance.
     * This is important for course backups and restores.
     *
     * @return string[]
     */
    public function get_join_tables(): array;
}
