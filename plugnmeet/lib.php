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
 * Library of interface functions and constants.
 *
 * @package     mod_plugnmeet
 * @copyright   2022 mynaparrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Return if the plugin supports $feature.
 *
 * @param string $feature Constant representing the feature.
 * @return true | null True if the feature is supported, null otherwise.
 */
function plugnmeet_supports($feature)
{
    switch ($feature) {
        case FEATURE_GRADE_HAS_GRADE:
            return true;
        case FEATURE_SHOW_DESCRIPTION:
            return true;
        case FEATURE_MOD_INTRO:
            return true;
        case FEATURE_BACKUP_MOODLE2:
            return true;
        default:
            return null;
    }
}

/**
 * Saves a new instance of the mod_plugnmeet into the database.
 *
 * Given an object containing all the necessary data, (defined by the form
 * in mod_form.php) this function will create a new instance and return the id
 * number of the instance.
 *
 * @param object $moduleinstance An object from the form.
 * @param mod_plugnmeet_mod_form $mform The form.
 * @return int The id of the newly inserted record.
 */
function plugnmeet_add_instance($moduleinstance, $mform = null)
{
    global $DB, $CFG;

    $moduleinstance->timecreated = time();

    $room_metadata = [];
    if (isset($moduleinstance->room_features)) {
        $room_metadata['room_features'] = $moduleinstance->room_features;
    }
    if (isset($moduleinstance->chat_features)) {
        $room_metadata['chat_features'] = $moduleinstance->chat_features;
    }
    if (isset($moduleinstance->default_lock_settings)) {
        $room_metadata['default_lock_settings'] = $moduleinstance->default_lock_settings;
    }
    if (!empty($room_metadata)) {
        $moduleinstance->room_metadata = json_encode($room_metadata);
    }
    if (!class_exists("plugNmeetConnect")) {
        require($CFG->dirroot . '/mod/plugnmeet/helpers/plugNmeetConnect.php');
    }

    $config = get_config('mod_plugnmeet');
    $connect = new PlugNmeetConnect($config);
    $moduleinstance->room_id = $connect->getUUID();

    $id = $DB->insert_record('plugnmeet', $moduleinstance);

    return $id;
}

/**
 * Updates an instance of the mod_plugnmeet in the database.
 *
 * Given an object containing all the necessary data (defined in mod_form.php),
 * this function will update an existing instance with new data.
 *
 * @param object $moduleinstance An object from the form in mod_form.php.
 * @param mod_plugnmeet_mod_form $mform The form.
 * @return bool True if successful, false otherwise.
 */
function plugnmeet_update_instance($moduleinstance, $mform = null)
{
    global $DB;

    $moduleinstance->timemodified = time();
    $moduleinstance->id = $moduleinstance->instance;

    $room_metadata = [];
    if (isset($moduleinstance->room_features)) {
        $room_metadata['room_features'] = $moduleinstance->room_features;
    }
    if (isset($moduleinstance->chat_features)) {
        $room_metadata['chat_features'] = $moduleinstance->chat_features;
    }
    if (isset($moduleinstance->default_lock_settings)) {
        $room_metadata['default_lock_settings'] = $moduleinstance->default_lock_settings;
    }
    if (!empty($room_metadata)) {
        $moduleinstance->room_metadata = json_encode($room_metadata);
    }

    return $DB->update_record('plugnmeet', $moduleinstance);
}

/**
 * Removes an instance of the mod_plugnmeet from the database.
 *
 * @param int $id Id of the module instance.
 * @return bool True if successful, false on failure.
 */
function plugnmeet_delete_instance($id)
{
    global $DB;

    $exists = $DB->get_record('plugnmeet', array('id' => $id));
    if (!$exists) {
        return false;
    }

    $DB->delete_records('plugnmeet', array('id' => $id));

    return true;
}

/**
 * Is a given scale used by the instance of mod_plugnmeet?
 *
 * This function returns if a scale is being used by one mod_plugnmeet
 * if it has support for grading and scales.
 *
 * @param int $moduleinstanceid ID of an instance of this module.
 * @param int $scaleid ID of the scale.
 * @return bool True if the scale is used by the given mod_plugnmeet instance.
 */
function plugnmeet_scale_used($moduleinstanceid, $scaleid)
{
    global $DB;

    if ($scaleid && $DB->record_exists('plugnmeet', array('id' => $moduleinstanceid, 'grade' => -$scaleid))) {
        return true;
    } else {
        return false;
    }
}

/**
 * Checks if scale is being used by any instance of mod_plugnmeet.
 *
 * This is used to find out if scale used anywhere.
 *
 * @param int $scaleid ID of the scale.
 * @return bool True if the scale is used by any mod_plugnmeet instance.
 */
function plugnmeet_scale_used_anywhere($scaleid)
{
    global $DB;

    if ($scaleid and $DB->record_exists('plugnmeet', array('grade' => -$scaleid))) {
        return true;
    } else {
        return false;
    }
}

/**
 * Creates or updates grade item for the given mod_plugnmeet instance.
 *
 * Needed by {@see grade_update_mod_grades()}.
 *
 * @param stdClass $moduleinstance Instance object with extra cmidnumber and modname property.
 * @param bool $reset Reset grades in the gradebook.
 * @return void.
 */
function plugnmeet_grade_item_update($moduleinstance, $reset = false)
{
    global $CFG;
    require_once($CFG->libdir . '/gradelib.php');

    $item = array();
    $item['itemname'] = clean_param($moduleinstance->name, PARAM_NOTAGS);
    $item['gradetype'] = GRADE_TYPE_VALUE;

    if ($moduleinstance->grade > 0) {
        $item['gradetype'] = GRADE_TYPE_VALUE;
        $item['grademax'] = $moduleinstance->grade;
        $item['grademin'] = 0;
    } else if ($moduleinstance->grade < 0) {
        $item['gradetype'] = GRADE_TYPE_SCALE;
        $item['scaleid'] = -$moduleinstance->grade;
    } else {
        $item['gradetype'] = GRADE_TYPE_NONE;
    }
    if ($reset) {
        $item['reset'] = true;
    }

    grade_update('/mod/plugnmeet', $moduleinstance->course, 'mod', 'mod_plugnmeet', $moduleinstance->id, 0, null, $item);
}

/**
 * Delete grade item for given mod_plugnmeet instance.
 *
 * @param stdClass $moduleinstance Instance object.
 * @return grade_item.
 */
function plugnmeet_grade_item_delete($moduleinstance)
{
    global $CFG;
    require_once($CFG->libdir . '/gradelib.php');

    return grade_update('/mod/plugnmeet', $moduleinstance->course, 'mod', 'plugnmeet',
        $moduleinstance->id, 0, null, array('deleted' => 1));
}

/**
 * Update mod_plugnmeet grades in the gradebook.
 *
 * Needed by {@see grade_update_mod_grades()}.
 *
 * @param stdClass $moduleinstance Instance object with extra cmidnumber and modname property.
 * @param int $userid Update grade of specific user only, 0 means all participants.
 */
function plugnmeet_update_grades($moduleinstance, $userid = 0)
{
    global $CFG, $DB;
    require_once($CFG->libdir . '/gradelib.php');

    // Populate array of grade objects indexed by userid.
    $grades = array();
    grade_update('/mod/plugnmeet', $moduleinstance->course, 'mod', 'mod_plugnmeet', $moduleinstance->id, 0, $grades);
}

/**
 * Returns the lists of all browsable file areas within the given module context.
 *
 * The file area 'intro' for the activity introduction field is added automatically
 * by {@see file_browser::get_file_info_context_module()}.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param stdClass $context
 * @return string[].
 * @package     mod_plugnmeet
 * @category    files
 *
 */
function plugnmeet_get_file_areas($course, $cm, $context)
{
    return array();
}

/**
 * File browsing support for mod_plugnmeet file areas.
 *
 * @param file_browser $browser
 * @param array $areas
 * @param stdClass $course
 * @param stdClass $cm
 * @param stdClass $context
 * @param string $filearea
 * @param int $itemid
 * @param string $filepath
 * @param string $filename
 * @return file_info Instance or null if not found.
 * @package     mod_plugnmeet
 * @category    files
 *
 */
function plugnmeet_get_file_info($browser, $areas, $course, $cm, $context, $filearea, $itemid, $filepath, $filename)
{
    return null;
}

/**
 * Serves the files from the mod_plugnmeet file areas.
 *
 * @param stdClass $course The course object.
 * @param stdClass $cm The course module object.
 * @param stdClass $context The mod_plugnmeet's context.
 * @param string $filearea The name of the file area.
 * @param array $args Extra arguments (itemid, path).
 * @param bool $forcedownload Whether or not force download.
 * @param array $options Additional options affecting the file serving.
 * @category    files
 *
 * @package     mod_plugnmeet
 */
function plugnmeet_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, $options = array())
{
    $itemid = array_shift($args); // The first item in the $args array.
    $filename = array_pop($args); // The last item in the $args array.
    if (!$args) {
        $filepath = '/'; // $args is empty => the path is '/'
    } else {
        $filepath = '/' . implode('/', $args) . '/'; // $args contains elements of the filepath
    }
    // Retrieve the file from the Files API.
    $fs = get_file_storage();
    $file = $fs->get_file($context->id, 'mod_plugnmeet', $filearea, $itemid, $filepath, $filename);
    if (!$file) {
        return false; // The file does not exist.
    }

    send_stored_file($file, 86400, 0, $forcedownload, $options);
}

/**
 * Extends the global navigation tree by adding mod_plugnmeet nodes if there is a relevant content.
 *
 * This can be called by an AJAX request so do not rely on $PAGE as it might not be set up properly.
 *
 * @param navigation_node $plugnmeetnode An object representing the navigation tree node.
 * @param stdClass $course
 * @param stdClass $module
 * @param cm_info $cm
 */
function plugnmeet_extend_navigation($plugnmeetnode, $course, $module, $cm)
{
}

/**
 * Extends the settings navigation with the mod_plugnmeet settings.
 *
 * This function is called when the context for the page is a mod_plugnmeet module.
 * This is not called by AJAX so it is safe to rely on the $PAGE.
 *
 * @param settings_navigation $settingsnav {@see settings_navigation}
 * @param navigation_node $plugnmeetnode {@see navigation_node}
 */
function plugnmeet_extend_settings_navigation($settingsnav, $plugnmeetnode = null)
{
}
