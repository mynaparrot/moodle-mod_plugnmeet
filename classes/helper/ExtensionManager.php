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
 * Manages the discovery and loading of PlugNmeet extensions.
 *
 * @package    mod_plugnmeet
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2024 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_plugnmeet\helper;

defined('MOODLE_INTERNAL') || die();

use mod_plugnmeet\extension\CompletionAddonInterface;
use mod_plugnmeet\extension\ModFormAddonInterface;
use mod_plugnmeet\extension\ModInstanceAddonInterface;
use mod_plugnmeet\extension\RoomOptionsAddonInterface;
use mod_plugnmeet\extension\WebhookAddonInterface;
use core_plugin_manager;

/**
 * Manages the discovery and loading of PlugNmeet extensions.
 */
class ExtensionManager {
    /**
     * Plugin name for extension type.
     */
    const PNM_EXTENSION_PLUGIN_NAME = 'pnmext';

    /**
     * @var array Stores instances of discovered RoomOptionsAddonInterface implementations.
     */
    protected static $roomoptionsaddons = null;

    /**
     * @var array Stores instances of discovered CompletionAddonInterface implementations.
     */
    protected static $completionaddons = null;

    /**
     * @var array Stores instances of discovered ModInstanceAddonInterface implementations.
     */
    protected static $modinstanceaddons = null;

    /**
     * @var array Stores instances of discovered ModFormAddonInterface implementations.
     */
    protected static $modformaddons = null;

    /**
     * @var array Stores instances of discovered WebhookAddonInterface implementations.
     */
    protected static $webhookaddons = null;

    /**
     * Get all registered RoomOptionsAddonInterface implementations.
     *
     * @return RoomOptionsAddonInterface[]
     */
    public static function get_room_options_addons(): array {
        if (static::$roomoptionsaddons === null) {
            static::$roomoptionsaddons = static::discover_extensions(RoomOptionsAddonInterface::class);
        }
        return static::$roomoptionsaddons;
    }

    /**
     * Get all registered CompletionAddonInterface implementations.
     *
     * @return CompletionAddonInterface[]
     */
    public static function get_completion_addons(): array {
        if (static::$completionaddons === null) {
            static::$completionaddons = static::discover_extensions(CompletionAddonInterface::class);
        }
        return static::$completionaddons;
    }

    /**
     * Get all registered ModInstanceAddonInterface implementations.
     *
     * @return ModInstanceAddonInterface[]
     */
    public static function get_mod_instance_addons(): array {
        if (static::$modinstanceaddons === null) {
            static::$modinstanceaddons = static::discover_extensions(ModInstanceAddonInterface::class);
        }
        return static::$modinstanceaddons;
    }

    /**
     * Get all registered ModFormAddonInterface implementations.
     *
     * @return ModFormAddonInterface[]
     */
    public static function get_mod_form_addons(): array {
        if (static::$modformaddons === null) {
            static::$modformaddons = static::discover_extensions(ModFormAddonInterface::class);
        }
        return static::$modformaddons;
    }

    /**
     * Get all registered WebhookAddonInterface implementations.
     *
     * @return WebhookAddonInterface[]
     */
    public static function get_webhook_addons(): array {
        if (static::$webhookaddons === null) {
            static::$webhookaddons = static::discover_extensions(WebhookAddonInterface::class);
        }
        return static::$webhookaddons;
    }

    /**
     * Discovers and instantiates extensions that implement a given interface.
     *
     * @param string $interface The fully qualified name of the interface to discover.
     * @return array An array of instantiated extension objects.
     */
    protected static function discover_extensions(string $interface): array {
        $extensions = [];

        // Get the short name of the interface (e.g., 'RoomOptionsAddonInterface').
        $interfaceshortname = (new \ReflectionClass($interface))->getShortName();
        // Assume the implementing class name is the interface name without 'Interface' suffix.
        // E.g., 'RoomOptionsAddonInterface' -> 'RoomOptionsAddon'.
        $implementingclassname = str_replace('Interface', '', $interfaceshortname);

        $allsubs = core_plugin_manager::instance()->get_plugins_of_type(self::PNM_EXTENSION_PLUGIN_NAME);

        // Get sorted list of plugins based on admin settings, if any.
        $names = [];
        foreach ($allsubs as $sub) {
            $names[$sub->name] = $sub->root;
        }
        $sortedlist = self::get_sorted_plugins_list($names);
        $sortedlist = array_flip($sortedlist); // Flip to get name => sortorder.

        foreach ($allsubs as $sub) {
            if (!$sub->is_enabled()) {
                continue;
            }

            // Construct the full class name based on Moodle's subplugin naming convention.
            // For a subplugin 'myaddon' in mod/plugnmeet/extension, and an interface
            // 'RoomOptionsAddonInterface', we expect a class like:
            // \pnmext_myaddon\plugnmeet\RoomOptionsAddon
            $fullclassname = '\\' . self::PNM_EXTENSION_PLUGIN_NAME . '_' . $sub->name . '\\plugnmeet\\' . $implementingclassname;

            // Check if the class exists and implements the target interface.
            if (class_exists($fullclassname) && in_array($interface, class_implements($fullclassname))) {
                try {
                    // Ensure the order of extensions is consistent.
                    $sortorder = $sortedlist[$sub->name] ?? 0;
                    while (array_key_exists($sortorder, $extensions)) {
                        $sortorder++; // Avoid collisions if multiple plugins have same sortorder or none.
                    }
                    $extensions[$sortorder] = new $fullclassname();
                } catch (\Exception $e) {
                    \debugging('Failed to instantiate PlugNmeet extension ' . $fullclassname . ': ' . $e->getMessage(), DEBUG_DEVELOPER);
                }
            }
        }
        ksort($extensions); // Sort by key (sortorder).
        return array_values($extensions); // Reset keys to be sequential.
    }

    /**
     * Return plugin list sorted according to order from admin extension manager.
     *
     * @param array $names Array of plugin names (name => path).
     * @return array The sorted list of plugin names.
     */
    protected static function get_sorted_plugins_list(array $names): array {
        $result = [];
        foreach ($names as $name => $path) {
            // The config name for sortorder would be like 'pnmext_myaddon_sortorder'.
            $idx = get_config(self::PNM_EXTENSION_PLUGIN_NAME . '_' . $name, 'sortorder');
            if (!$idx) {
                $idx = 0;
            }
            // Ensure unique keys for sorting.
            while (array_key_exists($idx, $result)) {
                $idx += 1;
            }
            $result[$idx] = $name;
        }
        ksort($result);
        return $result;
    }
}
