<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oprec extends CI_Controller {
	public function index()
	{
        $this->load->view('templates/compress-navbar');
        $this->load->view('oprec');
        $this->load->view('templates/compress-footer');
	}
}
