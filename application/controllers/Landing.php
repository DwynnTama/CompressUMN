<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('home');
        $this->load->view('templates/commpress-footer');
    }
}
