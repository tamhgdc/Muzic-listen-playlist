<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 4/22/18
 * Time: 19:02
 */
if (!function_exists('background_js_url')) {
    /**
     * Function background_js_url
     *
     * @param string $uri
     * @param null   $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/29/2021 38:03
     */
    function background_js_url(string $uri = '', $protocol = null): string
    {
        return trim(base_url('background/index/' . $uri, $protocol) . config_item('assets_version'));
    }
}
if (!function_exists('playlist_js_url')) {
    /**
     * Function playlist_js_url
     *
     * @param string $uri
     * @param null   $protocol
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/29/2021 47:12
     */
    function playlist_js_url(string $uri = '', $protocol = null): string
    {
        return trim(base_url('playlist/data/' . $uri, $protocol) . config_item('assets_version'));
    }
}
