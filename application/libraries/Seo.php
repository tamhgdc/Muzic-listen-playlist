<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 5/2/18
 * Time: 15:54
 */
use Cocur\Slugify\Slugify;
use Hashids\Hashids;
class Seo
{
    protected $CI;
    /**
     * Seo constructor.
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper('url');
    }
    /**
     * SEO Slugify
     * @param string $str
     * @return string
     */
    public function slugify($str = '')
    {
        $slugify = new Slugify();
        return $slugify->slugify($str);
    }
}
