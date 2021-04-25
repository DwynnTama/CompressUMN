<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pameran extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('select_pameran');
        $this->load->view('templates/commpress-footer');
    }

    public function foto_tunggal()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('pameran_fototunggal');
        $this->load->view('templates/commpress-footer');
    }

    public function foto_story()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('pameran_fotostory');
        $this->load->view('templates/commpress-footer');
    }

    public function video_dokumenter(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('video_dokumenter');
        $this->load->view('templates/commpress-footer');
    }

    public function bilik_media(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('select_media');
        $this->load->view('templates/commpress-footer');
    }

    public function Masterpiece(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('masterpiece');
        $this->load->view('templates/commpress-footer');
    }

    public function UMN_JUICE(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('umn_juice');
        $this->load->view('templates/commpress-footer');
    }

    public function UMN_Radio(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('umn_radio');
        $this->load->view('templates/commpress-footer');
    }

    public function UMN_TV(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('umn_tv');
        $this->load->view('templates/commpress-footer');
    }

    public function Ultimagz(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('ultimagz');
        $this->load->view('templates/commpress-footer');
    }
}