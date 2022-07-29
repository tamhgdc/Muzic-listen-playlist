<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Project listen-to-music-playlist
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/26/2020
 * Time: 17:28
 */
if (!function_exists('compress_html')) {
    /**
     * Function compress_html
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 09/26/2020 21:21
     */
    function compress_html()
    {
        /** @var object $CI */
        $CI      =& get_instance();
        $buffer  = $CI->output->get_output();
        $search  = array(
            '/\n/',            // replace end of line by a space
            '/\>[^\S ]+/s',        // strip whitespaces after tags, except space
            '/[^\S ]+\</s',        // strip whitespaces before tags, except space
            '/(\s)+/s'        // shorten multiple whitespace sequences
        );
        $replace = array(
            ' ',
            '>',
            '<',
            '\\1'
        );
        $buffer  = preg_replace($search, $replace, $buffer);
        $CI->output->set_output($buffer);
        $CI->output->_display();
    }
}
