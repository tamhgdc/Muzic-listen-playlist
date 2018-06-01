<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/2/18
 * Time: 02:21
 */
if (!function_exists('random_location')) {
    function random_location()
    {
        $cms =& get_instance();
        $cms->load->helper('array');
        $characters = array(
            'anh-quoc',
            'doi-nui',
            'final-fantasy',
            'ha-noi',
            'khong-gian-bien',
            'khong-gian-mua',
            'khong-gian-rung',
            'middle-earth',
            'paris',
            'party',
            'song-suoi',
            'thien-duong',
            'viet-nam',
            'vung-dat-ghibli-huyen-thoai'
        );
        return random_element($characters);
    }
}