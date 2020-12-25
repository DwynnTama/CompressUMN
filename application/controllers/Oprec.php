<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Oprec extends CI_Controller
{

        //Parent Construct untuk model info_pendaftaran dalam controller Oprec.php
        public function __construct()
        {
                parent::__construct();
                $this->load->model('info_pendaftaran');
        }

        public function index()
        {
                $this->load->view('templates/compress-navbar');
                $this->load->view('oprec');
                $this->load->view('templates/compress-footer');
        }

        //Penambahan Function Result() dalam controller Oprec.php
        public function Result()
        {
                $hasil_search = $this->input->post('nama', true);
                $data['mhs'] = $this->info_pendaftaran->get_user($hasil_search);
                $this->load->view('templates/compress-navbar');
                $this->load->view('search', $data);
                $this->load->view('templates/compress-footer');
        }
}
