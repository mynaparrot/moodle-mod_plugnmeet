<?php

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
class artifacts_controller
{
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
    public function __construct($cm, $course, $plugnmeet)
    {
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
    public function get_page_data()
    {
        if (!has_capability('mod/plugnmeet:viewartifacts', $this->context)) {
            return ['content' => get_string('no_permission', 'plugnmeet')];
        }

        $artifact_id = optional_param('artifact_id', '', PARAM_TEXT);
        $action = optional_param('action', '', PARAM_TEXT);

        if (!empty($artifact_id)) {
            if ($action === 'download_excel') {
                $this->download_excel_report($artifact_id);
                return ['content' => ''];
            }
            if ($action === 'download_json') {
                $this->download_json_report($artifact_id);
                return ['content' => ''];
            }
            return [
                'content' => $this->render_single_artifact($artifact_id),
            ];
        }

        return [
            'content' => $this->render_artifacts_list(),
        ];
    }

    /**
     * Renders single artifact details.
     *
     * @param string $artifact_id
     * @return string
     */
    private function render_single_artifact($artifact_id)
    {
        global $OUTPUT;

        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $artifact_info_res = $pnc->getArtifactInfo($artifact_id);

        if (!$artifact_info_res->getStatus()) {
            return $OUTPUT->notification($artifact_info_res->getMsg(), 'error');
        }

        $info = $artifact_info_res->getArtifactInfo();
        $metadata = $info->getMetadata();
        $is_file_based = ($metadata && $metadata->hasFileInfo());

        $page = optional_param('page', 0, PARAM_INT);

        $header_html = html_writer::start_div('d-flex justify-content-between align-items-center mb-3');
        $header_html .= html_writer::tag('h3', get_string('artifact_details', 'plugnmeet'), ['class' => 'm-0']);

        $buttons = html_writer::start_div('btn-group');

        if ($is_file_based && $info->getType() !== RoomArtifactType::MEETING_ANALYTICS) {
            $download_url = '';
            $download_res = $pnc->getArtifactDownloadToken($artifact_id);
            if ($download_res->getStatus()) {
                $token = $download_res->getToken();
                $server_url = rtrim(get_config('mod_plugnmeet', 'plugnmeet_server_url'), '/');
                $download_url = $server_url . '/download/artifact/' . $token;
            }
            if (!empty($download_url)) {
                $buttons .= html_writer::link($download_url, get_string('download', 'plugnmeet'), ['class' => 'btn btn-primary', 'target' => '_blank']);
            }
        }

        if ($info->getType() === RoomArtifactType::MEETING_ANALYTICS) {
            $excel_download_url = new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'artifact_id' => $artifact_id, 'action' => 'download_excel', 'page' => $page]);
            $buttons .= html_writer::link($excel_download_url, get_string('download_excel_report', 'plugnmeet'), ['class' => 'btn btn-success']);

            $json_download_url = new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'artifact_id' => $artifact_id, 'action' => 'download_json', 'page' => $page]);
            $buttons .= html_writer::link($json_download_url, get_string('download_raw_json', 'plugnmeet'), ['class' => 'btn btn-info']);
        }

        if (has_capability('mod/plugnmeet:viewartifacts', $this->context) && $is_file_based) {
            $delete_url = new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'action' => 'delete', 'artifact_id' => $artifact_id, 'page' => $page]);
            $buttons .= html_writer::link($delete_url, get_string('delete', 'plugnmeet'), [
                'class' => 'btn btn-danger',
                'onclick' => 'return confirm("' . get_string('delete_confirm', 'plugnmeet') . '");'
            ]);
        }

        $buttons .= html_writer::link(new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'page' => $page]), get_string('back_to_list', 'plugnmeet'), ['class' => 'btn btn-secondary']);
        $buttons .= html_writer::end_div();

        $header_html .= $buttons;
        $header_html .= html_writer::end_div();

        $html = $header_html;

        $details = [
            get_string('artifact_id', 'plugnmeet') => $info->getArtifactId(),
            get_string('room_id', 'plugnmeet') => $info->getRoomId(),
            get_string('type', 'plugnmeet') => $this->format_type_name($info->getType()),
            get_string('created_at', 'plugnmeet') => $this->format_iso_to_moodle_time($info->getCreated()),
        ];

        if ($metadata) {
            if ($metadata->hasFileInfo()) {
                $file_info = $metadata->getFileInfo();
                $details[get_string('file_size', 'plugnmeet')] = $this->format_bytes($file_info->getFileSize());
                $details[get_string('mime_type', 'plugnmeet')] = $file_info->getMimeType();
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
            $html .= $this->render_meeting_analytics_details($artifact_id);
        }

        return $html;
    }

    /**
     * Renders meeting analytics details.
     *
     * @param string $artifact_id
     * @return string
     */
    private function render_meeting_analytics_details($artifact_id) {
        global $OUTPUT;
        $html = '';
        try {
            $analytics_helper = new AnalyticsHelper($artifact_id);
            $formatted_data = $analytics_helper->get_formatted_event_data();
            $room_fields = $analytics_helper->get_room_fields();
            $user_fields = $analytics_helper->get_user_fields();

            $html .= html_writer::tag('h5', get_string('room_summary', 'plugnmeet'), ['class' => 'mt-4']);
            $room_table = new \html_table();
            foreach ($room_fields as $field) {
                // Default to 0 if missing
                $value = $formatted_data['room'][$field] ?? 0;

                if (is_array($value)) {
                    continue;
                }
                if ($field === "room_duration" || $field === "speech_service_total_usage") {
                    $value = $analytics_helper->format_seconds_to_time($value);
                }elseif ($field === "enabled_e2ee"){
                    $value =  $value ? get_string('yes', 'plugnmeet') : get_string('no', 'plugnmeet');
                }
                $room_table->data[] = [html_writer::tag('strong', get_string('analytics_room_' . $field, 'plugnmeet')), $value];
            }
            $html .= html_writer::table($room_table);

            if (!empty($formatted_data['users'])) {
                $html .= html_writer::tag('h5', get_string('users_summary', 'plugnmeet'), ['class' => 'mt-4']);
                $user_table = new \html_table();

                $user_table->head = array_map(function($field) {
                    return get_string('analytics_user_' . str_replace("user_", "", $field), 'plugnmeet');
                }, $user_fields);

                foreach ($formatted_data['users'] as $user_row) {
                    $row_data = [];
                    foreach ($user_fields as $field) {
                        // Default to 0 if missing
                        $value = $user_row[$field] ?? 0;

                        if (is_bool($value)) {
                            $value = $value ? get_string('yes', 'plugnmeet') : get_string('no', 'plugnmeet');
                        } elseif (is_array($value)) {
                            if ($field === "joined" || $field === "left") {
                                if (empty($value)) {
                                    $value = 0;
                                } else {
                                    $arr = array_map(function ($d) use ($analytics_helper) {
                                        return $analytics_helper->format_timestamp($d);
                                    }, $value);
                                    $value = implode("<br><br>", $arr);
                                }
                            } elseif ($field === "connection_quality") {
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
                        } elseif ($field === "duration" || $field === "talked_duration" || $field === "speech_service_total_usage") {
                            $value = $analytics_helper->format_seconds_to_time($value);
                        }
                        $row_data[] = $value;
                    }
                    $user_table->data[] = $row_data;
                }
                $html .= html_writer::table($user_table);
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
    private function render_artifacts_list()
    {
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
            $view_url = new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'artifact_id' => $artifact->getArtifactId(), 'page' => $page]);
            $actions = html_writer::link($view_url, get_string('view', 'plugnmeet'), ['class' => 'btn btn-sm btn-info']);

            $table->data[] = [
                $artifact->getArtifactId(),
                $this->format_type_name($artifact->getType()),
                $this->format_iso_to_moodle_time($artifact->getCreated()),
                $actions,
            ];
        }

        $html = html_writer::table($table);

        if ($result->getTotalArtifacts() > $limit) {
            $base_url = new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id]);
            $html .= html_writer::div($OUTPUT->paging_bar($result->getTotalArtifacts(), $page, $limit, $base_url), 'mt-2');
        }

        return $html;
    }

    /**
     * Deletes artifact.
     *
     * @param string $artifact_id
     * @return void
     */
    public function delete_artifact($artifact_id)
    {
        if (!has_capability('mod/plugnmeet:viewartifacts', $this->context)) {
            return;
        }

        $page = optional_param('page', 0, PARAM_INT);
        $pnc = new plugNmeetConnect(get_config('mod_plugnmeet'));
        $artifact_info_res = $pnc->getArtifactInfo($artifact_id);

        if ($artifact_info_res->getStatus()) {
            $info = $artifact_info_res->getArtifactInfo();
            $metadata = $info->getMetadata();
            if ($metadata && $metadata->hasFileInfo()) {
                $pnc->deleteArtifact($artifact_id);
            }
        }

        redirect(new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'page' => $page]));
    }

    /**
     * Downloads excel report.
     *
     * @param string $artifact_id
     * @return void
     */
    private function download_excel_report($artifact_id) {
        try {
            $analytics_helper = new AnalyticsHelper($artifact_id);
            $filename = 'plugnmeet_analytics_' . $artifact_id . '.xlsx';
            $analytics_helper->generate_xlsx_file($filename);
        } catch (\Exception $e) {
            redirect(new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'artifact_id' => $artifact_id]), get_string('error_generating_excel', 'plugnmeet', $e->getMessage()), null, \core\output\notification::NOTIFY_ERROR);
        }
        die();
    }

    /**
     * Downloads JSON report.
     *
     * @param string $artifact_id
     * @return void
     */
    private function download_json_report($artifact_id) {
        try {
            $analytics_helper = new AnalyticsHelper($artifact_id);
            $raw_data = $analytics_helper->get_raw_analytics_data();
            $filename = 'plugnmeet_analytics_raw_' . $artifact_id . '.json';

            header('Content-Type: application/json');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            echo json_encode($raw_data, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            redirect(new moodle_url('/mod/plugnmeet/artifacts.php', ['id' => $this->cm->id, 'artifact_id' => $artifact_id]), get_string('error_generating_json', 'plugnmeet', $e->getMessage()), null, \core\output\notification::NOTIFY_ERROR);
        }
        die();
    }

    /**
     * Formats type name.
     *
     * @param int $type
     * @return string
     */
    private function format_type_name($type)
    {
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
    private function format_bytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        $bytes = max($bytes, 0);
        $pow = floor(($bytes > 0 ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $pow = max($pow, 0);

        $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . ' ' . $units[$pow];
    }

    /**
     * Formats ISO time to Moodle format.
     *
     * @param string $iso_time
     * @return string
     */
    private function format_iso_to_moodle_time($iso_time) {
        $timestamp = strtotime($iso_time);
        if ($timestamp === false) {
            return $iso_time;
        }
        return userdate($timestamp, get_string('strftimedatetimeshort', 'langconfig'));
    }
}
