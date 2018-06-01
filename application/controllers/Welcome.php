<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller
{
    /**
     * Welcome constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'url',
            'array'
        ));
        $this->config->load('config_site');
    }
    /**
     * Site Index
     * @link /welcome/index.html
     */
    public function index()
    {
    }
}
