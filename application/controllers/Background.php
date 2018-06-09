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
            'array',
            'directory'
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
            $list_images           = isset($item_location['self_host_folder']) ? directory_map(FCPATH . trim($item_location['self_host_folder'])) : $item_location['list_images'];
            $data['location_data'] = is_array($list_images) ? self::_parse_data($item_location['name'], $list_images, $item_location['self_host'], $item_location['self_host_folder']) : null;
        }
        else
        {
            $data['location_data'] = null;
        }
        $this->load->view(self::TPL_FOLDER . 'background', $data);
    }
    /**
     * Parse Data Image into JS File
     * @param string $title
     * @param array $arr_data
     * @param bool $self_host
     * @param string $self_host_folder
     * @return null|string
     */
    private function _parse_data($title = 'IMG', $arr_data = array(), $self_host = false, $self_host_folder = '')
    {
        if (!is_array($arr_data))
        {
            return null;
        }
        $result = '';
        foreach ($arr_data as $key => $item)
        {
            if ($self_host === true)
            {
                $result .= '{image: "' . base_url($self_host_folder . trim($item)) . '",title: "' . trim($title) . ' ' . ($key + 1) . '",thumb: "' . base_url($self_host_folder . trim($item)) . '",url: ""},';
            }
            else
            {
                $result .= '{image: "' . trim($item) . '",title: "' . trim($title) . ' ' . ($key + 1) . '",thumb: "' . trim($item) . '",url: ""},';
            }
        }
        return trim($result, ',');
    }
}
