<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 4/22/18
 * Time: 19:21
 */
if (!function_exists('dd'))
{
    function dd($str = '')
    {
        echo "<pre>";
        var_dump($str);
        echo "</pre>";
    }
}

