<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Grab_link
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 *
 * @property object CI
 */
class Grab_link
{
    protected $CI;
    protected $grabber;

    /**
     * Grab_link constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper(array('url', 'string', 'array'));
        $this->CI->config->load('config_grabber');
        $this->grabber = arrayToObject(config_item('config_grabber'));
    }

    /**
     * Function nhaccuatui
     *
     * @param string $url
     *
     * @return string|null
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 16:41
     */
    public function nhaccuatui($url = '')
    {
        try {
            $getContents = file_get_contents(trim($url));
            $xmlContents = @simplexml_load_string($getContents, 'SimpleXMLElement', LIBXML_NOCDATA);
            $str_output  = '';
            if (isset($xmlContents->track)) {
                /**
                 * @var        $key
                 * @var object $item
                 */
                foreach ($xmlContents->track as $key => $item) {
                    $str_output .= '{title:"' . trim(addslashes($item->title)) . ' - ' . trim(addslashes($item->creator)) . '",mp3:"' . trim($item->location) . '"},'; // Str Output theo format của jPlayer
                }
            }

            return trim($str_output, ',');
        }
        catch (ErrorException $errorException) {
            $message = 'Code: ' . $errorException->getCode() . ' - File: ' . $errorException->getFile() . ' - Line: ' . $errorException->getLine() . ' - Message: ' . $errorException->getMessage();
            log_message('error', $message);

            return NULL;
        }
    }

    /**
     * Function zing_mp3
     *
     * @param string $url
     *
     * @return string
     * @throws \ErrorException
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 14:07
     */
    public function zing_mp3($url = '')
    {
        $getContents = $this->sendRequest(trim($url));
        $zingMp3     = json_decode(trim($getContents), TRUE);
        $str_output  = '';
        if (isset($zingMp3['data']['items'])) {
            foreach ($zingMp3['data']['items'] as $key => $item) {
                $str_output .= '{title:"' . trim(addslashes($item['title'])) . ' - ' . trim(addslashes($item['artists_names'])) . '",mp3:"' . trim($item['source']['128']) . '"},'; // Str Output theo format của jPlayer
            }
        }

        return trim($str_output, ',');
    }

    /**
     * Function sendRequest
     *
     * @param string $url
     * @param array  $data
     * @param string $method
     *
     * @return string
     * @throws \ErrorException
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 14:00
     */
    protected function sendRequest($url = '', $data = array(), $method = 'GET')
    {
        $curl = new Curl\Curl();
        $curl->setOpt(CURLOPT_RETURNTRANSFER, TRUE);
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, FALSE);
        $curl->setOpt(CURLOPT_ENCODING, "utf-8");
        $curl->setOpt(CURLOPT_MAXREDIRS, 10);
        $curl->setOpt(CURLOPT_TIMEOUT, 300);
        // Request
        if ('POST' == $method) {
            $curl->post($url, $data);
        } else {
            $curl->get($url, $data);
        }
        // Response
        $response = $curl->error ? "cURL Error: " . $curl->error_message : $curl->response;
        // Close Request
        $curl->close();

        return $response;
    }
}
