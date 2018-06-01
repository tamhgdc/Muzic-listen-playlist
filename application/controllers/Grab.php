<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/2/18
 * Time: 00:49
 */
class Grab extends CI_Controller
{
    protected $grabber;
    /**
     * Grab constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'url',
            'string',
            'array'
        ));
        $this->load->library('requests');
        $this->load->library('grab_link');
        $this->config->load('config_grabber');
        $this->grabber = arrayToObject(config_item('config_grabber'));
    }
    /**
     * Index of Grab
     */
    public function index()
    {
        $id          = '39d59e8bd6900fc46d7c7c98ecdc8793';
        $url         = $this->grabber->nhaccuatui->playlist_url . $id;

        $data = $this->grab_link->nhaccuatui($url);

        echo $data;
    }
}
