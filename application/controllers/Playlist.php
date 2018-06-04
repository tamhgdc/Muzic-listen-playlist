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
    const CACHE_PREFIX = 'PLAYLIST_NHACCUATUI_GRABBER_'; // Prefix Cache
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
        $this->load->library(array(
            'requests',
            'grab_link'
        ));
        $this->config->load('config_grabber');
        $this->config->load('config_player');
        $this->grabber = arrayToObject(config_item('config_grabber'));
    }
    /**
     * Get Playlist
     * @param string $music_id
     * @link  /playlist/nhaccuatui/$music_id
     */
    public function nhaccuatui($music_id = '')
    {
        $this->output->set_status_header(200)->set_content_type('application/x-javascript', 'utf-8');
        $data          = array();
        $playlistId    = trim($music_id);
        $list_playlist = config_item('list_playlist');
        if (array_key_exists($playlistId, $list_playlist))
        {
            $item_playlist  = $list_playlist[$playlistId];
            $randomId       = random_element($item_playlist['playlist']);
            $nctPlaylistUrl = $this->grabber->nhaccuatui->playlist_url . trim($randomId);
            // Settings Cache
            $this->load->driver('cache', self::CACHE_ADAPTER);
            $cache_file = self::CACHE_PREFIX . md5($nctPlaylistUrl);
            if (!$resultPlaylist = $this->cache->get($cache_file))
            {
                $resultPlaylist = $this->grab_link->nhaccuatui($nctPlaylistUrl);
                if (!empty($resultPlaylist))
                {
                    // Nếu file Grab không rỗng thì mới cache
                    $this->cache->save($cache_file, $resultPlaylist, self::CACHE_TTL);
                }
            }
            $data['playlist_data'] = $resultPlaylist;
        }
        else
        {
            $data['playlist_data'] = null;
        }
        $this->load->view(self::TPL_FOLDER . 'playlist', $data);
    }
}
