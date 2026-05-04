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

namespace mod_plugnmeet\extension;

defined('MOODLE_INTERNAL') || die();

/**
 * Interface for PlugNmeet completion addons.
 *
 * Implementations of this interface can provide custom completion logic for PlugNmeet activities.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
interface CompletionAddonInterface {
    /**
     * Check if the PlugNmeet activity should be marked as complete.
     *
     * @param object $plugnmeet The plugnmeet activity instance.
     * @param object $cm The course module object.
     * @param int $userid The ID of the user.
     * @param int $timemodified The time the activity was last modified.
     * @return bool True if the activity is complete, false otherwise.
     */
    public function is_complete(object $plugnmeet, object $cm, int $userid, int $timemodified): bool;

    /**
     * Runs after the completion criteria for a user have been evaluated.
     *
     * This hook allows you to modify the completion result before it is saved.
     *
     * @param array $result The initial completion evaluation result.
     * @param array $aggregatedstats The user's aggregated statistics.
     * @param object $plugnmeet The plugnmeet activity instance.
     * @param int $userid The ID of the user.
     * @return array The (possibly modified) completion evaluation result.
     */
    public function after_evaluate_completion(array $result, array $aggregatedstats, object $plugnmeet, int $userid): array;
}
