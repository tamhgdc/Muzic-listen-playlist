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
        $getContents = $this->CI->requests->sendRequest(trim($url));
        $xmlContents = @simplexml_load_string($getContents, 'SimpleXMLElement', LIBXML_NOCDATA);
        $str_output  = '';
        if (isset($xmlContents->track)) {
            foreach ($xmlContents->track as $key => $item) {
                // Str Output theo format của jPlayer
                $str_output .= '{title:"' . trim($item->title) . '",mp3:"' . trim($item->location) . '"},';
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
        $getContents = $this->CI->requests->sendRequest(trim($url));
        $xmlContents = @simplexml_load_string($getContents, 'SimpleXMLElement', LIBXML_NOCDATA);
        $str_output  = '';
        if (isset($xmlContents->data->items)) {
            foreach ($xmlContents->data->items as $key => $item) {
                // Str Output theo format của jPlayer
                $encode_source = json_encode($item->source);
                $source        = json_decode($encode_source, true);
                $mp3_url       = isset($source['320']) ? trim($source['320']) : trim($source['128']);
                $str_output .= '{title:"' . trim($item->title) . '",mp3:"' . $mp3_url . '"},';
            }
        }
        return trim($str_output, ',');
    }
}
