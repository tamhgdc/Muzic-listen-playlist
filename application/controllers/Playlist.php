<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/2/18
 * Time: 03:14
 */
class Playlist extends CI_Controller
{
    const TPL_FOLDER = 'mp3/';
    const CACHE_ADAPTER = array('adapter' => 'apc', 'backup' => 'file');
    const CACHE_TTL = 86400; // Cache 24 hours
    const CACHE_PREFIX = 'PLAYLIST_DATA_MP3_GRABBER_'; // Prefix Cache
    protected $grabber;
    /**
     * Playlist constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'url',
            'string',
            'array'
        ));
        $this->load->library('grab_link');
        $this->config->load('config_grabber');
        $this->config->load('config_player');
        $this->grabber = arrayToObject(config_item('config_grabber'));
    }
    /**
     * Get Playlist
     * @param string $music_id
     * @link  /playlist/data/$music_id
     */
    public function data($music_id = '')
    {
        $this->output->set_status_header(200)->set_content_type('application/x-javascript', 'utf-8');
        $data          = array();
        $playlistId    = trim($music_id);
        $list_playlist = config_item('list_playlist');
        if (array_key_exists($playlistId, $list_playlist)) {
            $item_playlist  = $list_playlist[$playlistId];
            $randomId       = random_element($item_playlist['playlist']);
            $playlistSiteId = $item_playlist['from_source'];
            if ($playlistSiteId == 'nhaccuatui') {
                $playlistXmlUrl = $this->grabber->nhaccuatui->playlist_url . trim($randomId);
            } elseif ($playlistSiteId == 'zing_mp3') {
                $playlistXmlUrl = $this->grabber->zing_mp3->playlist_url . trim($randomId);
            } else {
                $playlistXmlUrl = null;
            }
            if ($playlistXmlUrl !== null) {
                // Settings Cache
                $this->load->driver('cache', self::CACHE_ADAPTER);
                $cache_file = self::CACHE_PREFIX . md5($playlistXmlUrl);
                if (!$resultPlaylist = $this->cache->get($cache_file)) {
                    if ($playlistSiteId == 'nhaccuatui') {
                        $resultPlaylist = $this->grab_link->nhaccuatui($playlistXmlUrl);
                    } elseif ($playlistSiteId == 'zing_mp3') {
                        $resultPlaylist = $this->grab_link->zing_mp3($playlistXmlUrl);
                    } else {
                        $resultPlaylist = null;
                    }
                    if (!empty($resultPlaylist)) {
                        // Nếu file Grab không rỗng thì mới cache
                        $this->cache->save($cache_file, $resultPlaylist, self::CACHE_TTL);
                    }
                }
                $data['playlist_data'] = $resultPlaylist;
            } else {
                $data['playlist_data'] = null;
            }
        } else {
            $data['playlist_data'] = null;
        }
        $this->load->view(self::TPL_FOLDER . 'playlist', $data);
    }
}
