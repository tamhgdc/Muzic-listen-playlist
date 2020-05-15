<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Album
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 *
 * @property object config
 * @property object output
 * @property object input
 * @property object cache
 */
class Album extends CI_Controller
{
    const TPL_FOLDER = 'album/';

    /**
     * Album constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'string', 'array'));
        $this->load->library('grab_link');
        $this->config->load('config_site');
        $this->config->load('config_album');
    }

    /**
     * Album nhạc - một module nhỏ, lưu trữ những album tôi yêu
     *
     * @link     /album/album-name.html
     *
     * @param string $albumId
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 23:35
     */
    public function index($albumId = '')
    {
        $albumId   = trim($albumId);
        $albumList = config_item('album_list');
        if (!array_key_exists($albumId, $albumList)) {
            redirect();
        }
        $albumData                = $albumList[$albumId];
        $data                     = array();
        $data['sites']            = arrayToObject(config_item('site_data'));
        $data['author']           = arrayToObject(config_item('site_author'));
        $data['tracking']         = arrayToObject(config_item('tracking_code'));
        $data['album_data']       = $albumData;
        $data['page_title']       = 'Album nhạc ' . $albumData['name'];
        $data['page_description'] = 'Album nhạc ' . $albumData['name'];
        $data['page_keywords']    = 'Album nhạc ' . $albumData['name'];
        $data['canonical_url']    = site_url('album/' . $albumId);
        $data['image_src']        = 'https://i.ytimg.com/vi/' . $albumData['id'] . '/hqdefault.jpg';
        $this->load->view(self::TPL_FOLDER . 'album', $data);
    }
}
