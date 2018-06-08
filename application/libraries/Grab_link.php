<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/2/18
 * Time: 02:03
 */
class Grab_link
{
    protected $CI;
    protected $grabber;
    /**
     * Grab_link constructor.
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper(array(
            'url',
            'string',
            'array'
        ));
        $this->CI->load->library('requests');
        $this->CI->config->load('config_grabber');
        $this->grabber = arrayToObject(config_item('config_grabber'));
    }
    /**
     * Grab Link Nhạc Của Tui
     * @param string $url
     * @return string
     */
    public function nhaccuatui($url = '')
    {
        $getContents = $this->sendRequest(trim($url));
        $xmlContents = @simplexml_load_string($getContents, 'SimpleXMLElement', LIBXML_NOCDATA);
        $str_output  = '';
        if (isset($xmlContents->track))
        {
            foreach ($xmlContents->track as $key => $item)
            {
                $str_output .= '{title:"' . trim($item->title) . '",mp3:"' . trim($item->location) . '"},'; // Str Output theo format của jPlayer
            }
        }
        return trim($str_output, ',');
    }
    /**
     * Grab Link Zing MP3
     * @param string $url
     * @return string
     */
    public function zing_mp3($url = '')
    {
        $getContents = $this->sendRequest(trim($url));
        $zingMp3     = json_decode(trim($getContents), true);
        $str_output  = '';
        if (isset($zingMp3['data']['items']))
        {
            foreach ($zingMp3['data']['items'] as $key => $item)
            {
                $str_output .= '{title:"' . trim($item['title']) . '",mp3:"' . trim($item['source']['128']) . '"},'; // Str Output theo format của jPlayer
            }
        }
        return trim($str_output, ',');
    }
    /**
     * Send Request
     * @param string $url
     * @param array $data
     * @param string $method
     * @return string
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
        if ('POST' == $method)
        {
            $curl->post($url, $data);
        }
        else
        {
            $curl->get($url, $data);
        }
        // Response
        $response = $curl->error ? "cURL Error: " . $curl->error_message : $curl->response;
        // Close Request
        $curl->close();
        return $response;
    }
}
