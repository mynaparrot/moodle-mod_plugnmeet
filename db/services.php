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
 * PlugNmeet web services definition.
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = array(
    'mod_plugnmeet_create_room' => array(
        'classname'   => 'mod_plugnmeet\external\create_room',
        'methodname'  => 'execute',
        'classpath'   => 'mod/plugnmeet/classes/external/create_room.php',
        'description' => 'Creates a new room.',
        'type'        => 'write',
        'ajax'        => true,
        'capability'  => 'mod/plugnmeet:view',
    ),
    'mod_plugnmeet_end_room' => array(
        'classname'   => 'mod_plugnmeet\external\end_room',
        'methodname'  => 'execute',
        'classpath'   => 'mod/plugnmeet/classes/external/end_room.php',
        'description' => 'Ends a room.',
        'type'        => 'write',
        'ajax'        => true,
        'capability'  => 'mod/plugnmeet:manage',
    ),
    'mod_plugnmeet_get_join_token' => array(
        'classname'   => 'mod_plugnmeet\external\get_join_token',
        'methodname'  => 'execute',
        'classpath'   => 'mod/plugnmeet/classes/external/get_join_token.php',
        'description' => 'Gets a join token for the current user.',
        'type'        => 'read',
        'ajax'        => true,
        'capability'  => 'mod/plugnmeet:view',
    ),
    'mod_plugnmeet_is_room_active' => array(
        'classname'   => 'mod_plugnmeet\external\is_room_active',
        'methodname'  => 'execute',
        'classpath'   => 'mod/plugnmeet/classes/external/is_room_active.php',
        'description' => 'Checks if a room is active.',
        'type'        => 'read',
        'ajax'        => true,
        'capability'  => 'mod/plugnmeet:view',
    ),
    'mod_plugnmeet_get_active_room_info' => array(
        'classname'   => 'mod_plugnmeet\external\get_active_room_info',
        'methodname'  => 'execute',
        'classpath'   => 'mod/plugnmeet/classes/external/get_active_room_info.php',
        'description' => 'Gets active room info.',
        'type'        => 'read',
        'ajax'        => true,
        'capability'  => 'mod/plugnmeet:viewlivesessioninfo',
    ),
);
