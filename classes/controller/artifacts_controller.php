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

use mod_plugnmeet\helper\plugNmeetConnect;
use mod_plugnmeet\helper\AnalyticsHelper;
use Mynaparrot\PlugnmeetProto\RoomArtifactType;
use html_writer;
use moodle_url;

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
     * @param \cm_info $cm
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
        if (!has_capability('mod/plugnmeet:viewartifacts', $this->context)) {
            return ['content' => get_string('no_permission', 'plugnmeet')];
        }

        $artifactid = optional_param('artifact_id', '', PARAM_TEXT);
        $action = optional_param('action', '', PARAM_TEXT);

        if (!empty($artifactid)) {
            if ($action === 'download_excel') {
                $this->download_excel_report($artifactid);
                return ['content' => ''];
            }
            if ($action === 'download_json') {
                $this->download_json_report($artifactid);
                return ['content' => ''];
            }
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
        $artifactinfores = $pnc->getArtifactInfo($artifactid);

        if (!$artifactinfores->getStatus()) {
            return $OUTPUT->notification($artifactinfores->getMsg(), 'error');
        }

        $info = $artifactinfores->getArtifactInfo();
        $metadata = $info->getMetadata();
        $isfilebased = ($metadata && $metadata->hasFileInfo());

        $page = optional_param('page', 0, PARAM_INT);

        $headerhtml = html_writer::start_div('d-flex justify-content-between align-items-center mb-3');
        $headerhtml .= html_writer::tag('h3', get_string('artifact_details', 'plugnmeet'), ['class' => 'm-0']);

        $buttons = html_writer::start_div('btn-group');

        if ($isfilebased && $info->getType() !== RoomArtifactType::MEETING_ANALYTICS) {
            $downloadurl = '';
            $downloadres = $pnc->getArtifactDownloadToken($artifactid);
            if ($downloadres->getStatus()) {
                $token = $downloadres->getToken();
                $serverurl = rtrim(get_config('mod_plugnmeet', 'plugnmeet_server_url'), '/');
                $downloadurl = $serverurl . '/download/artifact/' . $token;
            }
            if (!empty($downloadurl)) {
                $buttons .= html_writer::link(
                    $downloadurl,
                    get_string('download', 'plugnmeet'),
                    ['class' => 'btn btn-primary', 'target' => '_blank']
                );
            }
        }

        if ($info->getType() === RoomArtifactType::MEETING_ANALYTICS) {
            $exceldownloadurl = new moodle_url(
                '/mod/plugnmeet/artifacts.php',
                ['id' => $this->cm->id, 'artifact_id' => $artifactid, 'action' => 'download_excel', 'page' => $page]
            );
            $buttons .= html_writer::link(
                $exceldownloadurl,
                get_string('download_excel_report', 'plugnmeet'),
                ['class' => 'btn btn-success']
            );

            $jsondownloadurl = new moodle_url(
                '/mod/plugnmeet/artifacts.php',
                ['id' => $this->cm->id, 'artifact_id' => $artifactid, 'action' => 'download_json', 'page' => $page]
            );
            $buttons .= html_writer::link(
                $jsondownloadurl,
                get_string('download_raw_json', 'plugnmeet'),
                ['class' => 'btn btn-info']
            );
        }

        if (has_capability('mod/plugnmeet:viewartifacts', $this->context) && $isfilebased) {
            $deleteurl = new moodle_url(
                '/mod/plugnmeet/artifacts.php',
                ['id' => $this->cm->id, 'action' => 'delete', 'artifact_id' => $artifactid, 'page' => $page, 'sesskey' => sesskey()]
            );
            $buttons .= html_writer::link($deleteurl, get_string('delete', 'plugnmeet'), [
                'class' => 'btn btn-danger',
                'onclick' => 'return confirm("' . get_string('delete_confirm', 'plugnmeet') . '");',
            ]);
        }

        $buttons .= html_writer::link(new moodle_url(
            '/mod/plugnmeet/artifacts.php',
            ['id' => $this->cm->id, 'page' => $page]
        ), get_string('back_to_list', 'plugnmeet'), ['class' => 'btn btn-secondary']);
        $buttons .= html_writer::end_div();

        $headerhtml .= $buttons;
        $headerhtml .= html_writer::end_div();

        $html = $headerhtml;

        $details = [
            get_string('artifact_id', 'plugnmeet') => $info->getArtifactId(),
            get_string('room_id', 'plugnmeet') => $info->getRoomId(),
            get_string('type', 'plugnmeet') => $this->format_type_name($info->getType()),
            get_string('created_at', 'plugnmeet') => $this->format_iso_to_moodle_time($info->getCreated()),
        ];

        if ($metadata) {
            if ($metadata->hasFileInfo()) {
                $fileinfo = $metadata->getFileInfo();
                $details[get_string('file_size', 'plugnmeet')] = $this->format_bytes($fileinfo->getFileSize());
                $details[get_string('mime_type', 'plugnmeet')] = $fileinfo->getMimeType();
            }
            if ($metadata->hasTokenUsage()) {
                $usage = $metadata->getTokenUsage();
                $details[get_string('token_usage', 'plugnmeet')] = $usage->getTotalTokens();
                $details[get_string('estimated_cost', 'plugnmeet')] = number_format($usage->getTotalTokensEstimatedCost(), 4);
            }
            if ($metadata->hasDurationUsage()) {
                $usage = $metadata->getDurationUsage();
                $details[get_string('duration_usage', 'plugnmeet')] = $usage->getDurationSec() . 's';
                $details[get_string('estimated_cost', 'plugnmeet')] = number_format($usage->getDurationSecEstimatedCost(), 4);
            }
            if ($metadata->hasCharacterCountUsage()) {
                $usage = $metadata->getCharacterCountUsage();
                $details[get_string('character_count_usage', 'plugnmeet')] = $usage->getTotalCharacters();
                $details[get_string('estimated_cost', 'plugnmeet')] = number_format($usage->getTotalCharactersEstimatedCost(), 4);
            }
        }

        $table = new \html_table();
        foreach ($details as $label => $value) {
            $table->data[] = [html_writer::tag('strong', $label), $value];
        }
        $html .= html_writer::table($table);

        if ($info->getType() === RoomArtifactType::MEETING_ANALYTICS) {
            $html .= $this->render_meeting_analytics_details($artifactid);
        }

        return $html;
    }

    /**
     * Renders meeting analytics details.
     *
     * @param string $artifactid
     * @return string
     */
    private function render_meeting_analytics_details($artifactid) {
        global $OUTPUT;
        $html = '';
        try {
            $analyticshelper = new AnalyticsHelper($artifactid);
            $formatteddata = $analyticshelper->get_formatted_event_data();
            $roomfields = $analyticshelper->get_room_fields();
            $userfields = $analyticshelper->get_user_fields();

            $html .= html_writer::tag('h5', get_string('room_summary', 'plugnmeet'), ['class' => 'mt-4']);
            $roomtable = new \html_table();
            foreach ($roomfields as $field) {
                // Default to 0 if missing.
                $value = $formatteddata['room'][$field] ?? 0;

                if (is_array($value)) {
                    continue;
                }
                if ($field === "room_duration" || $field === "speech_service_total_usage") {
                    $value = $analyticshelper->format_seconds_to_time($value);
                } else if ($field === "enabled_e2ee") {
                    $value = $value ? get_string('yes', 'plugnmeet') : get_string('no', 'plugnmeet');
                }
                $roomtable->data[] = [html_writer::tag('strong', get_string('analytics_room_' . $field, 'plugnmeet')), $value];
            }
            $html .= html_writer::table($roomtable);

            if (!empty($formatteddata['users'])) {
                $html .= html_writer::tag('h5', get_string('users_summary', 'plugnmeet'), ['class' => 'mt-4']);
                $usertable = new \html_table();

                $usertable->head = array_map(function ($field) {
                    return get_string('analytics_user_' . str_replace("user_", "", $field), 'plugnmeet');
                }, $userfields);

                foreach ($formatteddata['users'] as $userrow) {
                    $rowdata = [];
                    foreach ($userfields as $field) {
                        // Default to 0 if missing.
                        $value = $userrow[$field] ?? 0;

                        if (is_bool($value)) {
                            $value = $value ? get_string('yes', 'plugnmeet') : get_string('no', 'plugnmeet');
                        } else if (is_array($value)) {
                            if ($field === "joined" || $field === "left") {
                                if (empty($value)) {
                                    $value = 0;
                                } else {
                                    $arr = array_map(function ($d) use ($analyticshelper) {
                                        return $analyticshelper->format_timestamp($d);
                                    }, $value);
                                    $value = implode("<br><br>", $arr);
                                }
                            } else if ($field === "connection_quality") {
                                if (empty($value)) {
                                    $value = 0;
                                } else {
                                    $arr = array_map(function ($k, $v) {
                                        $title = get_string('analytics_user_connection_quality_' . $k, 'plugnmeet');
                                        return $title . ": " . $v;
                                    }, array_keys($value), array_values($value));
                                    $value = implode("<br>", $arr);
                                }
                            } else {
                                $value = get_string('see_excel_report', 'plugnmeet');
                            }
                        } else if ($field === "duration" || $field === "talked_duration" || $field === "speech_service_total_usage") {
                            $value = $analyticshelper->format_seconds_to_time($value);
                        }
                        $rowdata[] = $value;
                    }
                    $usertable->data[] = $rowdata;
                }
                $html .= html_writer::table($usertable);
            }
        } catch (\Exception $e) {
            $html .= $OUTPUT->notification(get_string('error_loading_analytics', 'plugnmeet', $e->getMessage()), 'error');
        }
        return $html;
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

        $response = $pnc->getArtifacts([$this->plugnmeet->roomid], null, null, $from, $limit);

        if (!$response->getStatus()) {
            return $OUTPUT->notification($response->getMsg(), 'error');
        }

        $result = $response->getResult();
        if (!$result) {
            return $OUTPUT->notification(get_string('no_artifacts', 'plugnmeet'), 'info');
        }

        $artifacts = $result->getArtifactsList();

        if (empty($artifacts)) {
            return $OUTPUT->notification(get_string('no_artifacts', 'plugnmeet'), 'info');
        }

        $table = new \html_table();
        $table->head = [
            get_string('artifact_id', 'plugnmeet'),
            get_string('type', 'plugnmeet'),
            get_string('created_at', 'plugnmeet'),
            get_string('actions', 'plugnmeet'),
        ];

        foreach ($artifacts as $artifact) {
            $viewurl = new moodle_url(
                '/mod/plugnmeet/artifacts.php',
                ['id' => $this->cm->id, 'artifact_id' => $artifact->getArtifactId(), 'page' => $page]
            );
            $actions = html_writer::link($viewurl, get_string('view', 'plugnmeet'), ['class' => 'btn btn-sm btn-info']);

            $table->data[] = [
                $artifact->getArtifactId(),
                $this->format_type_name($artifact->getType()),
                $this->format_iso_to_moodle_time($artifact->getCreated()),
                $actions,
            ];
        }

        $html = html_writer::table($table);

        if ($result->getTotalArtifacts() > $limit) {
            $baseurl = new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id]);
            $html .= html_writer::div($OUTPUT->paging_bar($result->getTotalArtifacts(), $page, $limit, $baseurl), 'mt-2');
        }

        return $html;
    }

    /**
     * Deletes artifact.
     *
     * @param string $artifactid
     * @return void
     */
    public function delete_artifact($artifactid) {
        if (!has_capability('mod/plugnmeet:viewartifacts', $this->context)) {
            return;
        }

        $page = optional_param('page', 0, PARAM_INT);
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $artifactinfores = $pnc->getArtifactInfo($artifactid);

        if ($artifactinfores->getStatus()) {
            $info = $artifactinfores->getArtifactInfo();
            $metadata = $info->getMetadata();
            if ($metadata && $metadata->hasFileInfo()) {
                $pnc->deleteArtifact($artifactid);
            }
        }

        redirect(new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'page' => $page]));
    }

    /**
     * Downloads excel report.
     *
     * @param string $artifactid
     * @return void
     */
    private function download_excel_report($artifactid) {
        try {
            $analyticshelper = new AnalyticsHelper($artifactid);
            $filename = 'plugnmeet_analytics_' . $artifactid . '.xlsx';
            $analyticshelper->generate_xlsx_file($filename);
        } catch (\Exception $e) {
            redirect(
                new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'artifact_id' => $artifactid]),
                get_string('error_generating_excel', 'plugnmeet', $e->getMessage()),
                null,
                \core\output\notification::NOTIFY_ERROR
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
    private function download_json_report($artifactid) {
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
                get_string('error_generating_json', 'plugnmeet', $e->getMessage()),
                null,
                \core\output\notification::NOTIFY_ERROR
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
