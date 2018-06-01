<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/2/18
 * Time: 02:10
 */
class Home extends CI_Controller
{
    const TPL_FOLDER = 'mp3/';
    protected $grabber;
    /**
     * Home constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'url',
            'string',
            'array',
            'site_player'
        ));
        $this->load->library(array(
            'requests',
            'grab_link'
        ));
        $this->config->load('config_site');
        $this->config->load('config_grabber');
        $this->config->load('config_player');
        $this->grabber = arrayToObject(config_item('config_grabber'));
    }
    /**
     * Homepage
     * @link /home/index.html
     * @link /musics.html
     */
    public function index()
    {
        $data                     = array();
        $data['sites']            = arrayToObject(config_item('site_data'));
        $data['author']           = arrayToObject(config_item('site_author'));
        $data['tracking']         = arrayToObject(config_item('tracking_code'));
        $data['list_location']    = config_item('list_location');
        $data['list_location_id'] = config_item('list_location_id');
        $data['list_playlist']    = config_item('list_playlist');
        $data['page_title']       = 'Nghe nhạc thư giãn';
        $data['canonical_url']    = base_url();
        $this->load->view(self::TPL_FOLDER . 'page_index', $data);
    }
    /**
     * Playlist Music
     * @param string $location_id
     * @param string $music_id
     * @link  /den-location_id-va-nghe-nhac-music_id.html
     */
    public function playlist($location_id = '', $music_id = '')
    {
        $list_location    = config_item('list_location');
        $list_location_id = config_item('list_location_id');
        $list_playlist    = config_item('list_playlist');
        $location_id      = trim($location_id);
        $music_id         = trim($music_id);
        if (!array_key_exists($location_id, $list_location))
        {
            redirect();
        }
        if (!array_key_exists($music_id, $list_playlist))
        {
            redirect();
        }
        $uriString                = 'den-' . $location_id . '-va-nghe-nhac-' . $music_id;
        $playlistData             = $list_playlist[$music_id];
        $data                     = array();
        $data['sites']            = arrayToObject(config_item('site_data'));
        $data['author']           = arrayToObject(config_item('site_author'));
        $data['tracking']         = arrayToObject(config_item('tracking_code'));
        $data['list_location']    = $list_location;
        $data['list_location_id'] = $list_location_id;
        $data['list_playlist']    = $list_playlist;
        $data['page_title']       = 'Đến ' . $list_location[$location_id] . ' và nghe nhạc ' . $playlistData['name'];
        $data['canonical_url']    = site_url($uriString);
        $data['current_location'] = $location_id;
        $data['current_playlist'] = $music_id;
        $this->load->view(self::TPL_FOLDER . 'page_index', $data);
    }
}
