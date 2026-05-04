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
 * Interface for PlugNmeet room options addons.
 *
 * Implementations of this interface can modify the options used for PlugNmeet rooms,
 * including creation parameters and join token parameters.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
interface RoomOptionsAddonInterface {
    /**
     * Modify the room options (e.g., creation parameters, join token parameters).
     *
     * @param string $methodname The name of the method calling this addon (e.g., 'create_room', 'get_join_token').
     * @param array $options The room options to modify.
     * @param object $plugnmeet The plugnmeet activity instance.
     * @param \context $context The context of the plugnmeet activity.
     * @return array The modified room options.
     */
    public function modify_room_options(string $methodname, array $options, object $plugnmeet, \context $context): array;
}
