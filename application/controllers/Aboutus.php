<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/compress-navbar');
        $this->load->view('aboutus');
        $this->load->view('templates/compress-footer');
    }
}
