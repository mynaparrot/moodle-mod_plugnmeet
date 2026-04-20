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

namespace mod_plugnmeet\helper;

use Exception;
use Mynaparrot\Plugnmeet\HttpClientInterface;
use curl;

/**
 * To implement HttpClientInterface using moodle curl.
 *
 * @package    mod_plugnmeet
 * @copyright  2026 MynaParrot
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class MoodleHttpClient implements HttpClientInterface
{
    /**
     * @var curl
     */
    protected curl $curl;

    /**
     * Constructor.
     *
     * @param string $serverurl
     */
    public function __construct(string $serverurl) {
        $ignoresecurity = false;
        if (str_contains($serverurl, 'http://')) {
            $ignoresecurity = true;
        }

        $this->curl = new curl([
            'ignoresecurity' => $ignoresecurity,
        ]);
    }

    /**
     * Sends a POST request to the specified URL with the given data.
     *
     * @param string $fullurl The URL to send the request to.
     * @param string $body The raw request body.
     * @param array $headers Optional headers to send with the request.
     * @return string The response body as a string.
     * @throws Exception If the request fails.
     */
    public function post(string $fullurl, string $body, array $headers = []): string {
        foreach ($headers as $key => $val) {
            $this->curl->setHeader("$key: $val");
        }
        $response = $this->curl->post($fullurl, $body);

        if ($this->curl->get_errno()) {
            throw new Exception('cURL Error: ' . $this->curl->error);
        }

        return $response;
    }
}
