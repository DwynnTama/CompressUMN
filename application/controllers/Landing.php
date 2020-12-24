<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    /*
    //Model Query Database
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('info_pendaftaran');
    }
    */

    public function index()
    {
        $data['nav'] = $this->load->view('templates/compress-navbar', NULL, TRUE);
        $data['footer'] = $this->load->view('templates/compress-footer', NULL, TRUE);
        $this->load->view('home', $data);
    }
}
