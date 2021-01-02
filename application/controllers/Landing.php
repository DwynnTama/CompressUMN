<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    public function index()
    {
        $data['nav'] = $this->load->view('templates/commpress-navbar', NULL, TRUE);
        $data['footer'] = $this->load->view('templates/commpress-footer', NULL, TRUE);
        $this->load->view('home', $data);
    }
}
