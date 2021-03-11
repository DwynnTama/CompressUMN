<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function List()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('event_list');
        $this->load->view('templates/commpress-footer');
    }

    public function index(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('select_pameran');
        $this->load->view('templates/commpress-footer');
    }

    public function foto_tunggal(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('foto_tunggal');
        $this->load->view('templates/commpress-footer');
    }

    public function foto_story(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('foto_story');
        $this->load->view('templates/commpress-footer');
    }

    public function video_dokumenter(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('video_dokumenter');
        $this->load->view('templates/commpress-footer');
    }
}
