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
        if (isset($xmlContents->track))
        {
            foreach ($xmlContents->track as $key => $item)
            {
                // Str Output theo format của jPlayer
                $str_output .= '{title:"' . trim($item->title) . '",mp3:"' . trim($item->location) . '"},';
            }
        }
        return trim($str_output, ',');
    }
}
