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
 * Library of functions and constants for module plugnmeet
 *
 * @package     mod_plugnmeet
 * @author      Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright   2026 MynaParrot
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use mod_plugnmeet\completion\custom_completion;
use mod_plugnmeet\helper\plugNmeetConnect;

defined('MOODLE_INTERNAL') || die();


/**
 * Declare support for custom completion rules.
 *
 * @param string $feature The feature to check for.
 * @return mixed The support status.
 */
function plugnmeet_supports($feature) {
    return match ($feature) {
        FEATURE_COMPLETION_HAS_RULES => true,
        FEATURE_GRADE_HAS_GRADE => true,
        FEATURE_MOD_INTRO => true,
        FEATURE_SHOW_DESCRIPTION => true,
        FEATURE_IDNUMBER => true,
        FEATURE_GROUPS => true,
        FEATURE_GROUPINGS => true,
        default => null,
    };
}

/**
 * Adds a new instance of a plugnmeet to the database
 *
 * @param stdClass $data An object from the add/update form
 * @param mod_plugnmeet_mod_form $mform The form used to add the instance
 * @return int The ID of the newly inserted plugnmeet record
 * @throws dml_exception
 */
function plugnmeet_add_instance(stdClass $data, $mform = null) {
    global $DB, $COURSE;

    $data->timecreated = time();
    $data->timemodified = time();
    $data->roomid = plugNmeetConnect::generateUuid4();

    if (!empty($data->allow_guest)) {
        $data->guest_token = plugNmeetConnect::generateUuid4();
    }

    // Handle metadata from the 'meta' form fields.
    if (isset($data->meta)) {
        $data->roommetadata = json_encode($data->meta);
        unset($data->meta);
    }

    $data->id = $DB->insert_record('plugnmeet', $data);

    plugnmeet_grade_item_update($data);

    // Update calendar event.
    plugnmeet_update_calendar_event($data);

    return $data->id;
}

/**
 * Updates an existing instance of a plugnmeet in the database
 *
 * @param stdClass $data An object from the add/update form
 * @param mod_plugnmeet_mod_form $mform The form used to update the instance
 * @return bool True if the record was updated, false otherwise
 * @throws dml_exception
 */
function plugnmeet_update_instance(stdClass $data, $mform = null) {
    global $DB;

    $data->timemodified = time();
    $data->id = $data->instance;

    if (!empty($data->allow_guest)) {
        if (empty($data->guest_token)) {
            $data->guest_token = plugNmeetConnect::generateUuid4();
        }
    } else {
        $data->guest_token = null;
    }

    // Handle metadata from the 'meta' form fields.
    if (isset($data->meta)) {
        $data->roommetadata = json_encode($data->meta);
        unset($data->meta);
    }

    $result = $DB->update_record('plugnmeet', $data);

    plugnmeet_grade_item_update($data);
    plugnmeet_update_grades($data);

    // Update calendar event.
    plugnmeet_update_calendar_event($data);

    return $result;
}

/**
 * Deletes an existing instance of a plugnmeet from the database
 *
 * @param int $id The ID of the plugnmeet instance to delete
 * @return bool True if the record was deleted, false otherwise
 * @throws dml_exception
 */
function plugnmeet_delete_instance($id) {
    global $DB, $CFG;

    if (!$plugnmeet = $DB->get_record('plugnmeet', ['id' => $id])) {
        return false;
    }

    // Delete calendar event.
    require_once($CFG->dirroot . '/calendar/lib.php');
    if ($plugnmeet->eventid) {
        $event = calendar_event::load($plugnmeet->eventid);
        $event->delete();
    }

    plugnmeet_grade_item_delete($plugnmeet);

    return $DB->delete_records('plugnmeet', ['id' => $plugnmeet->id]);
}

/**
 * Returns any information about the plugnmeet instance that should be cached in the course module info.
 *
 * @param stdClass $coursemodule The course module object.
 * @return cached_cm_info|null The cached information.
 */
function plugnmeet_get_coursemodule_info($coursemodule) {
    global $DB;

    if (!$plugnmeet = $DB->get_record('plugnmeet', ['id' => $coursemodule->instance], "*", MUST_EXIST)) {
        return null;
    }

    $info = new cached_cm_info();
    $info->name = $plugnmeet->name;

    $fields = custom_completion::get_defined_custom_rules();
    // Populate custom completion rules for the "To do" indicators.
    foreach ($fields as $field) {
        $info->customdata['customcompletionrules'][$field] = $plugnmeet->$field;
    }

    return $info;
}

/**
 * Extend the settings navigation with plugin specific settings
 *
 * @param settings_navigation $settingsnav The settings navigation object
 * @param navigation_node $plugnmeetnode The plugnmeet node
 */
function plugnmeet_extend_settings_navigation(settings_navigation $settingsnav, navigation_node $plugnmeetnode) {
    global $PAGE;

    $cm = $PAGE->cm;

    if (has_capability('mod/plugnmeet:manage', context_module::instance($cm->id))) {
        $attendanceurl = new moodle_url('/mod/plugnmeet/attendance.php', ['id' => $cm->id]);
        $plugnmeetnode->add(get_string('attendance', 'plugnmeet'), $attendanceurl, navigation_node::TYPE_SETTING, null, 'attendance');
    }

    $recordingsurl = new moodle_url('/mod/plugnmeet/recordings.php', ['id' => $cm->id]);
    $plugnmeetnode->add(get_string('recordings', 'plugnmeet'), $recordingsurl, navigation_node::TYPE_SETTING, null, 'recordings');

    $artifactsurl = new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $cm->id]);
    $plugnmeetnode->add(get_string('artifacts', 'plugnmeet'), $artifactsurl, navigation_node::TYPE_SETTING, null, 'artifacts');
}

/**
 * Update the grade item for the given plugnmeet instance.
 *
 * @param stdClass $plugnmeet
 * @param array|null $grades
 * @return int 0 if ok, error code otherwise
 */
function plugnmeet_grade_item_update(stdClass $plugnmeet, $grades = null) {
    global $CFG;
    require_once($CFG->libdir . '/gradelib.php');

    $params = ['itemname' => $plugnmeet->name];

    if (isset($plugnmeet->grade)) {
        if ($plugnmeet->grade > 0) {
            $params['gradetype'] = GRADE_TYPE_VALUE;
            $params['grademax']  = $plugnmeet->grade;
            $params['grademin']  = 0;
        } else if ($plugnmeet->grade < 0) {
            $params['gradetype'] = GRADE_TYPE_SCALE;
            $params['scaleid']   = -$plugnmeet->grade;
        }
    } else {
        $params['gradetype'] = GRADE_TYPE_NONE;
    }

    if ($grades === 'reset') {
        $params['reset'] = true;
        $grades = null;
    }

    return grade_update('mod/plugnmeet', $plugnmeet->course, 'mod', 'plugnmeet', $plugnmeet->id, 0, $grades, $params);
}

/**
 * Update grades for the given plugnmeet instance.
 *
 * @param stdClass $plugnmeet
 * @param int $userid
 */
function plugnmeet_update_grades(stdClass $plugnmeet, $userid = 0) {
    // This is typically used for mass updates or when settings change.
    // For our hybrid completion, the CompletionHelper handles pushing grades.
}

/**
 * Delete grade item for the given plugnmeet instance.
 *
 * @param stdClass $plugnmeet
 * @return int 0 if ok, error code otherwise
 */
function plugnmeet_grade_item_delete(stdClass $plugnmeet) {
    global $CFG;
    require_once($CFG->libdir . '/gradelib.php');

    return grade_update('mod/plugnmeet', $plugnmeet->course, 'mod', 'plugnmeet', $plugnmeet->id, 0, null, ['deleted' => 1]);
}

/**
 * Update the calendar event for the plugnmeet instance.
 *
 * @param stdClass $plugnmeet The plugnmeet record.
 */
function plugnmeet_update_calendar_event($plugnmeet) {
    global $DB, $CFG;

    require_once($CFG->dirroot . '/calendar/lib.php');

    // Ensure we have the full record if called from update/add instance.
    if (!isset($plugnmeet->eventid) || !isset($plugnmeet->coursemodule)) {
        $record = $DB->get_record('plugnmeet', ['id' => $plugnmeet->id]);
        $cm = get_coursemodule_from_instance('plugnmeet', $plugnmeet->id);
        if ($record) {
            foreach ($record as $key => $value) {
                if (!isset($plugnmeet->$key)) {
                    $plugnmeet->$key = $value;
                }
            }
        }
        if ($cm) {
            $plugnmeet->coursemodule = $cm->id;
        }
    }

    $event = new stdClass();
    $event->name        = $plugnmeet->name;
    $event->description = format_module_intro('plugnmeet', $plugnmeet, $plugnmeet->coursemodule);
    $event->format      = FORMAT_HTML;
    $event->courseid    = $plugnmeet->course;
    $event->groupid     = 0;
    $event->userid      = 0;
    $event->modulename  = 'plugnmeet';
    $event->instance    = $plugnmeet->id;
    $event->eventtype   = 'available';
    $event->timestart   = $plugnmeet->available;
    $event->timeduration = 0;

    if ($plugnmeet->deadline > 0 && $plugnmeet->deadline > $plugnmeet->available) {
        $event->timeduration = $plugnmeet->deadline - $plugnmeet->available;
    }

    if (!empty($plugnmeet->eventid)) {
        $event->id = $plugnmeet->eventid;
        try {
            $calendarevent = calendar_event::load($event->id);
            if ($event->timestart > 0) {
                $calendarevent->update($event);
            } else {
                // If time was removed, delete the event.
                $calendarevent->delete();
                $DB->set_field('plugnmeet', 'eventid', 0, ['id' => $plugnmeet->id]);
            }
        } catch (Exception $e) {
            // Event might have been deleted manually.
            if ($event->timestart > 0) {
                $calendarevent = calendar_event::create($event);
                $DB->set_field('plugnmeet', 'eventid', $calendarevent->id, ['id' => $plugnmeet->id]);
            }
        }
    } else if ($event->timestart > 0) {
        $calendarevent = calendar_event::create($event);
        $DB->set_field('plugnmeet', 'eventid', $calendarevent->id, ['id' => $plugnmeet->id]);
    }
}

/**
 * Obtains the automatic completion state for this plugnmeet activity.
 *
 * @param stdClass $course The course object.
 * @param stdClass $cm The course module object.
 * @param int $userid The user ID.
 * @param bool $type The type of completion (usually COMPLETION_AND).
 * @return int The completion state (COMPLETION_COMPLETE, COMPLETION_INCOMPLETE, etc.)
 */
function plugnmeet_get_completion_state($course, $cm, $userid, $type) {
    global $DB;

    // Fetch the plugnmeet instance.
    if (!$plugnmeet = $DB->get_record('plugnmeet', ['id' => $cm->instance])) {
        return COMPLETION_INCOMPLETE;
    }

    // Since our custom completion is processed asynchronously (via analytics/webhooks),
    // we should check the current completion state in Moodle's completion table.
    $completion = new completion_info($course);
    $data = $completion->get_data($cm, false, $userid);

    return $data->completionstate;
}

/**
 * Build client config
 */
function get_plugnmeet_config() {
    global $DB;

    $config = get_config('mod_plugnmeet');
    $assetspath = $config->plugnmeet_server_url . "/assets";

    $plugnmeetconfig = [
        'serverUrl' => $config->plugnmeet_server_url,
        'staticAssetsPath' => $assetspath,
        'enableDynacast' => (bool)$config->enable_dynacast,
        'enableSimulcast' => (bool)$config->enable_simulcast,
        'videoCodec' => $config->video_codec,
        'defaultWebcamResolution' => $config->default_webcam_resolution,
        'defaultScreenShareResolution' => $config->default_screen_share_resolution,
        'defaultAudioPreset' => $config->default_audio_preset,
        'stopMicTrackOnMute' => (bool)$config->stop_mic_track_on_mute,
    ];

    if ($config->custom_logo) {
        $filename = str_replace("/", "", $config->custom_logo);
        $tablefiles = "files";
        $results = $DB->get_record($tablefiles, [
            'filename' => $filename,
            'component' => 'mod_plugnmeet',
            'filearea' => 'custom_logo',
        ]);

        if ($results) {
            $url = moodle_url::make_pluginfile_url(
                $results->contextid,
                $results->component,
                $results->filearea,
                $results->itemid,
                $results->filepath,
                $filename,
                false,
                true
            );
            $plugnmeetconfig['customLogo'] = [
                'main_logo_light' => $url->out(false),
                'main_logo_dark' => $url->out(false),
            ];
        }
    }

    $designcustomization = [];
    if (!empty($config->primary_color)) {
        $designcustomization['primary_color'] = $config->primary_color;
    }
    if (!empty($config->secondary_color)) {
        $designcustomization['secondary_color'] = $config->secondary_color;
    }
    if (!empty($config->background_color)) {
        $designcustomization['background_color'] = $config->background_color;
    }
    if (!empty($config->background_image)) {
        $filename = str_replace("/", "", $config->background_image);
        $tablefiles = "files";
        $results = $DB->get_record(
            $tablefiles,
            [
                'filename' => $filename,
                'component' => 'mod_plugnmeet',
                'filearea' => 'background_image',
            ]
        );

        if ($results) {
            $url = moodle_url::make_pluginfile_url(
                $results->contextid,
                $results->component,
                $results->filearea,
                $results->itemid,
                $results->filepath,
                $filename,
                false,
                true
            );
            $designcustomization['background_image'] = $url->out(false);
        }
    }
    if (!empty($config->header_color)) {
        $designcustomization['header_bg_color'] = $config->header_color;
    }
    if (!empty($config->footer_color)) {
        $designcustomization['footer_bg_color'] = $config->footer_color;
    }
    if (!empty($config->side_panel_bg_color)) {
        $designcustomization['side_panel_bg_color'] = $config->side_panel_bg_color;
    }
    if (!empty($config->custom_css_url)) {
        $designcustomization['custom_css_url'] = $config->custom_css_url;
    }

    if (!empty($designcustomization)) {
        $plugnmeetconfig['designCustomization'] = $designcustomization;
    }

    $jsonconfig = json_encode($plugnmeetconfig, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    $js = "window.plugNmeetConfig = JSON.parse(`" . addslashes($jsonconfig) . "`);";
    return "<script type=\"text/javascript\">\n" . $js . "\n</script>\n";
}
