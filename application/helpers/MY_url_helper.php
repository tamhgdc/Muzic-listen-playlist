<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 4/22/18
 * Time: 19:02
 */
if (!function_exists('assets_url'))
{
    /**
     * Asset URL
     * @param string $uri
     * @param null $protocol
     * @return string
     */
    function assets_url($uri = '', $protocol = NULL)
    {
        return base_url('assets/' . $uri, $protocol);
    }
}
