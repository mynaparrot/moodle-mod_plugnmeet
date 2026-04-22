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

namespace mod_plugnmeet\controller;

use core\output\notification;
use mod_plugnmeet\helper\plugNmeetConnect;
use mod_plugnmeet\helper\AnalyticsHelper;
use Mynaparrot\PlugnmeetProto\RoomArtifactType;
use html_writer;
use moodle_url;
use cache;

defined('MOODLE_INTERNAL') || die();

/**
 * Controller class for handling room artifacts.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class artifacts_controller {
    /**
     * @var \cm_info
     */
    private $cm;

    /**
     * @var \stdClass
     */
    private $course;

    /**
     * @var \stdClass
     */
    private $plugnmeet;

    /**
     * @var \context_module
     */
    private $context;

    /**
     * Constructor.
     *
     * @param \stdClass $cm
     * @param \stdClass $course
     * @param \stdClass $plugnmeet
     */
    public function __construct($cm, $course, $plugnmeet) {
        $this->cm = $cm;
        $this->course = $course;
        $this->plugnmeet = $plugnmeet;
        $this->context = \context_module::instance($cm->id);
    }

    /**
     * Gets page data for artifacts.
     *
     * @return array
     */
    public function get_page_data() {
        $artifactid = optional_param('artifact_id', '', PARAM_TEXT);

        if (!empty($artifactid)) {
            return [
                'content' => $this->render_single_artifact($artifactid),
            ];
        }

        return [
            'content' => $this->render_artifacts_list(),
        ];
    }

    /**
     * Renders single artifact details.
     *
     * @param string $artifactid
     * @return string
     */
    private function render_single_artifact($artifactid) {
        global $OUTPUT;
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $cache = cache::make('mod_plugnmeet', 'artifact_info');

        $artifactinfores = $cache->get($artifactid);

        if ($artifactinfores === false) {
            $artifactinfores = $pnc->getArtifactInfo($artifactid);
            if ($artifactinfores->getStatus()) {
                $cache->set($artifactid, $artifactinfores);
            }
        }

        if (!$artifactinfores || !$artifactinfores->getStatus()) {
            return $OUTPUT->notification($pnc->getResponseError($artifactinfores, get_string('artifact', 'mod_plugnmeet')), 'error');
        }

        $info = $artifactinfores->getArtifactInfo();
        $metadata = $info->getMetadata();
        $isfilebased = ($metadata && $metadata->hasFileInfo());
        $page = optional_param('page', 0, PARAM_INT);

        $context = [
            'can_download' => $isfilebased && $info->getType() !== RoomArtifactType::MEETING_ANALYTICS &&
                has_capability('mod/plugnmeet:downloadartifacts', $this->context),
            'download_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'artifact_id' => $artifactid,
                'action' => 'download',
                'page' => $page,
            ]))->out(false),

            'is_analytics' => $info->getType() === RoomArtifactType::MEETING_ANALYTICS,
            'can_download_analytics' => $info->getType() === RoomArtifactType::MEETING_ANALYTICS &&
                has_capability('mod/plugnmeet:downloadanalyticsreport', $this->context),
            'download_excel_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'artifact_id' => $artifactid,
                'action' => 'download_excel',
                'page' => $page,
            ]))->out(false),
            'download_json_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'artifact_id' => $artifactid,
                'action' => 'download_json',
                'page' => $page,
            ]))->out(false),

            'can_delete' => $isfilebased &&
                has_capability('mod/plugnmeet:deleteartifacts', $this->context),
            'delete_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'action' => 'delete',
                'artifact_id' => $artifactid,
                'page' => $page,
            ]))->out(false),

            'back_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                'id' => $this->cm->id,
                'page' => $page,
            ]))->out(false),
            'details' => [],
            'room_details' => [],
            'has_users' => false,
            'user_headers' => [],
            'user_rows' => [],
        ];

        $details = [
            get_string('artifact_id', 'mod_plugnmeet') => $info->getArtifactId(),
            get_string('room_id', 'mod_plugnmeet') => $info->getRoomId(),
            get_string('type', 'mod_plugnmeet') => $this->format_type_name($info->getType()),
            get_string('created_at', 'mod_plugnmeet') => $this->format_iso_to_moodle_time($info->getCreated()),
        ];

        if ($metadata) {
            if ($metadata->hasFileInfo()) {
                $fileinfo = $metadata->getFileInfo();
                $details[get_string('file_size', 'mod_plugnmeet')] = $this->format_bytes($fileinfo->getFileSize());
                $details[get_string('mime_type', 'mod_plugnmeet')] = $fileinfo->getMimeType();
            }
            if ($metadata->hasTokenUsage()) {
                $usage = $metadata->getTokenUsage();
                $details[get_string('token_usage', 'mod_plugnmeet')] = $usage->getTotalTokens();
                $details[get_string('estimated_cost', 'mod_plugnmeet')] = number_format($usage->getTotalTokensEstimatedCost(), 4);
            }
            if ($metadata->hasDurationUsage()) {
                $usage = $metadata->getDurationUsage();
                $details[get_string('duration_usage', 'mod_plugnmeet')] = $usage->getDurationSec() . 's';
                $details[get_string('estimated_cost', 'mod_plugnmeet')] = number_format($usage->getDurationSecEstimatedCost(), 4);
            }
            if ($metadata->hasCharacterCountUsage()) {
                $usage = $metadata->getCharacterCountUsage();
                $details[get_string('character_count_usage', 'mod_plugnmeet')] = $usage->getTotalCharacters();
                $details[get_string('estimated_cost', 'mod_plugnmeet')] = number_format($usage->getTotalCharactersEstimatedCost(), 4);
            }
        }

        foreach ($details as $label => $value) {
            $context['details'][] = ['label' => $label, 'value' => $value];
        }

        if ($context['is_analytics']) {
            $this->populate_analytics_context($artifactid, $context);
        }

        return $OUTPUT->render_from_template('mod_plugnmeet/artifact_details', $context);
    }

    /**
     * Populates the context array with meeting analytics details.
     *
     * @param string $artifactid
     * @param array &$context
     */
    private function populate_analytics_context($artifactid, &$context) {
        global $OUTPUT;
        try {
            $analyticshelper = new AnalyticsHelper($artifactid);
            $formatteddata = $analyticshelper->get_formatted_event_data();
            $roomfields = $analyticshelper->get_room_fields();
            $userfields = $analyticshelper->get_user_fields();

            foreach ($roomfields as $field) {
                $value = $formatteddata['room'][$field] ?? 0;
                if (is_array($value)) {
                    continue;
                }

                if ($field === "room_duration" || $field === "speech_service_total_usage") {
                    $value = $analyticshelper->format_seconds_to_time($value);
                } else if ($field === "enabled_e2ee") {
                    $value = $value ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
                }
                $context['room_details'][] = ['label' => get_string('analytics_room_' . $field, 'mod_plugnmeet'), 'value' => $value];
            }

            if (!empty($formatteddata['users'])) {
                $context['has_users'] = true;
                $context['user_headers'] = array_map(function ($field) {
                    return get_string('analytics_user_' . str_replace("user_", "", $field), 'mod_plugnmeet');
                }, $userfields);

                foreach ($formatteddata['users'] as $userrow) {
                    $rowdata = [];
                    foreach ($userfields as $field) {
                        $value = $userrow[$field] ?? 0;
                        if (is_bool($value)) {
                            $value = $value ? get_string('yes', 'mod_plugnmeet') : get_string('no', 'mod_plugnmeet');
                        } else if (is_array($value)) {
                            if ($field === "joined" || $field === "left") {
                                $arr = array_map(function ($d) use ($analyticshelper) {
                                    return $analyticshelper->format_timestamp($d);
                                }, empty($value) ? [] : $value);
                                $value = implode("<br><br>", $arr);
                            } else if ($field === "connection_quality") {
                                $arr = array_map(function ($k, $v) {
                                    return get_string('analytics_user_connection_quality_' . $k, 'mod_plugnmeet') . ": " . $v;
                                }, array_keys(empty($value) ? [] : $value), array_values(empty($value) ? [] : $value));
                                $value = implode("<br>", $arr);
                            } else {
                                $value = get_string('see_excel_report', 'mod_plugnmeet');
                            }
                        } else if ($field === "duration" || $field === "talked_duration" || $field === "speech_service_total_usage") {
                            $value = $analyticshelper->format_seconds_to_time($value);
                        }
                        $rowdata[] = ['value' => $value];
                    }
                    $context['user_rows'][] = $rowdata;
                }
            }
        } catch (\Exception $e) {
            $context['is_analytics'] = false; // Prevent rendering analytics section on error.
            echo $OUTPUT->notification(get_string('error_loading_analytics', 'mod_plugnmeet', $e->getMessage()), 'error');
        }
    }

    /**
     * Renders artifacts list.
     *
     * @return string
     */
    private function render_artifacts_list() {
        global $OUTPUT;

        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $page = optional_param('page', 0, PARAM_INT);
        $limit = 20;
        $from = $page * $limit;

        $cache = cache::make('mod_plugnmeet', 'artifacts_list');
        $cachekey = $this->plugnmeet->roomid . '_' . $from . '_' . $limit;

        $response = $cache->get($cachekey);

        if ($response === false) {
            $response = $pnc->getArtifacts([$this->plugnmeet->roomid], null, null, $from, $limit);
            if ($response->getStatus()) {
                $cache->set($cachekey, $response);
            }
        }

        if (!$response || !$response->getStatus()) {
            return $OUTPUT->notification($pnc->getResponseError($response, get_string('artifacts', 'mod_plugnmeet')), 'error');
        }

        $result = $response->getResult();
        if (!$result || empty($result->getArtifactsList())) {
            return $OUTPUT->notification(get_string('no_artifacts', 'mod_plugnmeet'), 'info');
        }

        $artifacts = $result->getArtifactsList();
        $context = [
            'artifacts' => [],
            'paging_bar' => '',
        ];

        foreach ($artifacts as $artifact) {
            $context['artifacts'][] = [
                'artifact_id' => $artifact->getArtifactId(),
                'type' => $this->format_type_name($artifact->getType()),
                'created' => $this->format_iso_to_moodle_time($artifact->getCreated()),
                'view_url' => (new moodle_url('/mod/plugnmeet/artifacts.php', [
                    'id' => $this->cm->id,
                    'artifact_id' => $artifact->getArtifactId(),
                    'page' => $page]))->out(false),
            ];
        }

        if ($result->getTotalArtifacts() > $limit) {
            $baseurl = new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id]);
            $context['paging_bar'] = $OUTPUT->paging_bar($result->getTotalArtifacts(), $page, $limit, $baseurl);
        }

        return $OUTPUT->render_from_template('mod_plugnmeet/artifacts_list', $context);
    }

    /**
     * Deletes artifact.
     *
     * @param string $artifactid
     * @return void
     */
    public function delete_artifact($artifactid) {
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $artifactinfores = $pnc->getArtifactInfo($artifactid);

        $msg = get_string('delete_success', 'mod_plugnmeet');
        $msgtype = notification::NOTIFY_SUCCESS;

        if ($artifactinfores->getStatus()) {
            $info = $artifactinfores->getArtifactInfo();
            $metadata = $info->getMetadata();
            if ($metadata && $metadata->hasFileInfo()) {
                $res = $pnc->deleteArtifact($artifactid);
                if (!$res->getStatus()) {
                    $msg = $pnc->getResponseError($res, get_string('artifact', 'mod_plugnmeet'));
                    $msgtype = notification::NOTIFY_ERROR;
                }

                // Purge artifact info and list cache.
                cache::make('mod_plugnmeet', 'artifact_info')->delete($artifactid);
                cache::make('mod_plugnmeet', 'artifacts_list')->purge();
            }
        }

        redirect(new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id]), $msg, null, $msgtype);
    }

    /**
     * Downloads artifact.
     *
     * @param string $artifactid
     * @return void
     */
    public function download_artifact($artifactid) {
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $downloadres = $pnc->getArtifactDownloadToken($artifactid);

        if ($downloadres->getStatus()) {
            $serverurl = rtrim(get_config('mod_plugnmeet', 'plugnmeet_server_url'), '/');
            $downloadurl = $serverurl . '/download/artifact/' . $downloadres->getToken();
            redirect($downloadurl);
        } else {
            redirect(
                new moodle_url(
                    '/mod/plugnmeet/artifacts.php',
                    ['id' => $this->cm->id, 'artifact_id' => $artifactid]
                ),
                $pnc->getResponseError($downloadres, get_string('artifact', 'mod_plugnmeet')),
                null,
                notification::NOTIFY_ERROR
            );
        }
    }

    /**
     * Downloads excel report.
     *
     * @param string $artifactid
     * @return void
     */
    public function download_excel_report($artifactid) {
        try {
            $analyticshelper = new AnalyticsHelper($artifactid);
            $filename = 'plugnmeet_analytics_' . $artifactid . '.xlsx';
            $analyticshelper->generate_xlsx_file($filename);
        } catch (\Exception $e) {
            redirect(
                new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'artifact_id' => $artifactid]),
                get_string('error_generating_excel', 'mod_plugnmeet', $e->getMessage()),
                null,
                notification::NOTIFY_ERROR
            );
        }
        exit;
    }

    /**
     * Downloads JSON report.
     *
     * @param string $artifactid
     * @return void
     */
    public function download_json_report($artifactid) {
        try {
            $analyticshelper = new AnalyticsHelper($artifactid);
            $rawdata = $analyticshelper->get_raw_analytics_data();
            $filename = 'plugnmeet_analytics_raw_' . $artifactid . '.json';

            header('Content-Type: application/json');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            echo json_encode($rawdata, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            redirect(
                new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'artifact_id' => $artifactid]),
                get_string('error_generating_json', 'mod_plugnmeet', $e->getMessage()),
                null,
                notification::NOTIFY_ERROR
            );
        }
        exit;
    }

    /**
     * Formats type name.
     *
     * @param int $type
     * @return string
     */
    private function format_type_name($type) {
        $name = RoomArtifactType::name($type);
        return ucwords(strtolower(str_replace('_', ' ', $name)));
    }

    /**
     * Formats bytes to human-readable format.
     *
     * @param int $bytes
     * @param int $precision
     * @return string
     */
    private function format_bytes($bytes, $precision = 2) {
        return display_size($bytes, $precision);
    }

    /**
     * Formats ISO time to Moodle format.
     *
     * @param string $isotime
     * @return string
     */
    private function format_iso_to_moodle_time($isotime) {
        $timestamp = strtotime($isotime);
        if ($timestamp === false) {
            return $isotime;
        }
        return userdate($timestamp, get_string('strftimedatetimeshort', 'langconfig'));
    }
}
