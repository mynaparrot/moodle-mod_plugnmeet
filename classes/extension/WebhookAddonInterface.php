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

use stdClass;

defined('MOODLE_INTERNAL') || die();

/**
 * Interface for extensions that need to hook into webhook events.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
interface WebhookAddonInterface {
    /**
     * Runs any processes that must run when a webhook is received.
     *
     * @param string $body The raw webhook body.
     * @param stdClass $plugnmeet The plugnmeet instance record.
     * @param stdClass $cm The course module record.
     */
    public function handle_webhook(string $body, stdClass $plugnmeet, stdClass $cm): void;
}
