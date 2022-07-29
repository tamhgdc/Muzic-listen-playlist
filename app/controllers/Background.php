<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Background
 *
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Background extends HungNG_CI_Base_Controllers
{
    const TPL_FOLDER = 'mp3/';

    /**
     * Background constructor.
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'string', 'array', 'directory'));
    }

    /**
     * List Background
     *
     * @link     /background/index/$locationId
     *
     * @param string $locationId
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 05/15/2020 24:13
     */
    public function index(string $locationId = '')
    {
        $locationId = trim($locationId);
        if (empty($locationId)) {
            ResponseOutput::writeLn('Input Params Invalid!');
            exit();
        }
        $this->output->set_status_header()->set_content_type('application/x-javascript', 'utf-8');
        $data         = array();
        $listLocation = config_item('list_location');
        if (array_key_exists($locationId, $listLocation)) {
            $itemLocation          = $listLocation[$locationId];
            $listImages            = isset($itemLocation['self_host_folder']) ? directory_map(FCPATH . trim($itemLocation['self_host_folder'])) : $itemLocation['list_images'];
            $data['location_data'] = is_array($listImages) ? $this->_parseData($itemLocation['name'], $listImages, $itemLocation['self_host'], $itemLocation['self_host_folder']) : null;
        } else {
            $data['location_data'] = null;
        }
        $this->load->view(self::TPL_FOLDER . 'background', $data);
    }

    /**
     * Parse Data Image into JS File
     *
     * @param string $title
     * @param array  $arrayData
     * @param bool   $selfHost
     * @param string $selfHostFolder
     *
     * @return null|string
     */
    private function _parseData(string $title = 'IMG', array $arrayData = array(), bool $selfHost = false, string $selfHostFolder = '')
    {
        if (!is_array($arrayData)) {
            return null;
        }
        $result = '';
        foreach ($arrayData as $key => $item) {
            if ($selfHost === true) {
                $result .= '{image: "' . wordpress_proxy(base_url($selfHostFolder . trim($item))) . '",title: "' . trim($title) . ' ' . ($key + 1) . '",thumb: "' . wordpress_proxy(base_url($selfHostFolder . trim($item))) . '",url: ""},';
            } else {
                $result .= '{image: "' . wordpress_proxy(trim($item)) . '",title: "' . trim($title) . ' ' . ($key + 1) . '",thumb: "' . wordpress_proxy(trim($item)) . '",url: ""},';
            }
        }

        return trim($result, ',');
    }
}
