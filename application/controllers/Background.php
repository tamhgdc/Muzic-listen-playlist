<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/4/18
 * Time: 15:21
 */
class Background extends CI_Controller
{
    const TPL_FOLDER = 'mp3/';
    /**
     * Background constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'url',
            'string',
            'array'
        ));
        $this->config->load('config_player');
    }
    /**
     * List Background
     * @param string $location_id
     * @link  /background/index/$location_id
     */
    public function index($location_id = '')
    {
        $this->output->set_status_header(200)->set_content_type('application/x-javascript', 'utf-8');
        $data          = array();
        $location_id   = trim($location_id);
        $list_location = config_item('list_location');
        if (array_key_exists($location_id, $list_location))
        {
            $item_location         = $list_location[$location_id];
            $data['location_data'] = isset($item_location['images']) ? self::_parse_data($item_location['name'], $item_location['images']) : null;
        }
        else
        {
            $data['location_data'] = null;
        }
        $this->load->view(self::TPL_FOLDER . 'background', $data);
    }
    /**
     * Parse Array to Data JS
     * @param string $title
     * @param array $arr_data
     * @return null|string
     */
    private function _parse_data($title = 'IMG', $arr_data = array())
    {
        if (!is_array($arr_data))
        {
            return null;
        }
        $result = '';
        foreach ($arr_data as $key => $item)
        {
            $result .= '{image: "' . trim($item) . '",title: "' . trim($title) . ' ' . ($key + 1) . '",thumb: "' . trim($item) . '",url: ""},';
        }
        return trim($result, ',');
    }
}
