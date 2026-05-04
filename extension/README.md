# PlugNmeet Extension Subplugins

This directory is intended for subplugins that extend the functionality of the PlugNmeet Moodle module.

## How to create an extension:

To create an extension for the PlugNmeet module, follow these steps:

1.  **Create a new subplugin directory:**
    *   Inside `mod/plugnmeet/extension`, create a new folder for your extension. The folder name should be short, lowercase, and descriptive (e.g., `mycustomaddon`). This name will be used as part of your plugin's component name.

2.  **Add a `version.php` file:**
    *   In your subplugin's root directory (e.g., `mod/plugnmeet/extension/mycustomaddon/version.php`), create a standard Moodle `version.php` file.
    *   **Crucially, the `$plugin->component` variable must be set to `pnmext_yoursubpluginname`** (replacing `yoursubpluginname` with your actual subplugin folder name).

    *   Example `version.php`:
        ```php
        <?php
        defined('MOODLE_INTERNAL') || die();

        $plugin->version   = 2024010100; // YYYYMMDDHH (plugin version)
        $plugin->requires  = 2023020300; // Moodle version (replace with your Moodle version)
        $plugin->component = 'pnmext_mycustomaddon'; // IMPORTANT: must match the folder name prefix
        $plugin->maturity  = MATURITY_STABLE;
        $plugin->release   = '1.0';
        $plugin->dependencies = [
            'mod_plugnmeet' => 2024010100, // Replace with your mod_plugnmeet version
        ];
        ```

3.  **Create a `classes` directory:**
    *   Inside your subplugin's directory, create a `classes` folder (e.g., `mod/plugnmeet/extension/mycustomaddon/classes`).

4.  **Implement the desired interface(s):**
    *   Your extension classes should be placed within a `plugnmeet` subdirectory inside your `classes` folder (e.g., `mod/plugnmeet/extension/mycustomaddon/classes/plugnmeet/`).
    *   The namespace for your classes **must** follow the pattern `namespace pnmext_yoursubpluginname\plugnmeet;`.

    *   **For Room Options Modification (e.g., create room parameters, join token parameters):**
        *   Create a PHP class file (e.g., `mod/plugnmeet/extension/mycustomaddon/classes/plugnmeet/RoomOptionsAddon.php`).
        *   This class must implement `\mod_plugnmeet\extension\RoomOptionsAddonInterface`.
        *   The class name should be `RoomOptionsAddon`.
        *   Example `RoomOptionsAddon.php`:
            ```php
            <?php
            namespace pnmext_mycustomaddon\plugnmeet;

            use mod_plugnmeet\extension\RoomOptionsAddonInterface; // Corrected use statement.

            class RoomOptionsAddon implements RoomOptionsAddonInterface {
                /**
                 * Modify the room options (e.g., creation parameters, join token parameters).
                 *
                 * @param string $methodName The name of the method calling this addon (e.g., 'create_room', 'get_join_token').
                 * @param array $options The room options to modify.
                 * @param object $plugnmeet The plugnmeet activity instance.
                 * @param \context $context The context of the plugnmeet activity.
                 * @return array The modified room options.
                 */
                public function modify_room_options(string $methodName, array $options, object $plugnmeet, \context $context): array {
                    if ($methodName === 'create_room') {
                        // Example: Add a custom tag to room creation extra data.
                        $options['extradata']['custom_create_tag'] = 'my_custom_create_value';
                    } elseif ($methodName === 'get_join_token') {
                        // Example: Modify the username for join token.
                        $options['username'] = $options['username'] . ' (Custom)';
                    }
                    return $options;
                }
            }
            ```

    *   **For Custom Completion Logic:**
        *   Create a PHP class file (e.g., `mod/plugnmeet/extension/mycustomaddon/classes/plugnmeet/CompletionAddon.php`).
        *   This class must implement `\mod_plugnmeet\extension\CompletionAddonInterface`.
        *   The class name should be `CompletionAddon`.
        *   Example `CompletionAddon.php`:
            ```php
            <?php
            namespace pnmext_mycustomaddon\plugnmeet;

            use mod_plugnmeet\extension\CompletionAddonInterface; // Corrected use statement.

            class CompletionAddon implements CompletionAddonInterface {
                /**
                 * Check if the PlugNmeet activity should be marked as complete.
                 *
                 * @param object $plugnmeet The plugnmeet activity instance.
                 * @param object $cm The course module object.
                 * @param int $userid The ID of the user.
                 * @param int $timemodified The time the activity was last modified.
                 * @return bool True if the activity is complete, false otherwise.
                 */
                public function is_complete(object $plugnmeet, object $cm, int $userid, int $timemodified): bool {
                    // Implement custom completion logic here.
                    // For example, mark complete if a specific condition is met.
                    // return true; // If the activity should be considered complete by this addon.
                    return false; // Otherwise, let other completion rules or addons decide.
                }
            }
            ```

5.  **Install/Upgrade the plugin:**
    *   After placing the files, the Moodle administrator needs to visit the "Notifications" page (`/admin/index.php`) to trigger the plugin upgrade process, which will discover and register the new subplugin.

This robust extension system should allow other developers to extend your PlugNmeet module effectively.
