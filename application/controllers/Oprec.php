<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Oprec extends CI_Controller
{

        //Parent Construct untuk model info_pendaftaran dalam controller Oprec.php
        public function __construct()
        {
                parent::__construct();
                $this->load->model('info_pendaftaran');
                $this->load->library('form_validation');
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
                $this->form_validation->set_rules('nama', 'Nama', 'required', [
                        'required' => "NIM yang dicari tidak boleh kosong !"
                ]);

                if ($this->form_validation->run() == false) {
                        $this->load->view('templates/compress-navbar');
                        $this->load->view('oprec');
                        $this->load->view('templates/compress-footer');
                } else {
                        $hasil_search = $this->input->post('nama', true);

                        //Error Handling
                        if (($data['mhs'] = $this->info_pendaftaran->get_user($hasil_search)) == false) {
                                $data['alert'] = "NIM yang dicari tidak ditemukan !";
                                $this->load->view('templates/compress-navbar');
                                $this->load->view('oprec', $data);
                                $this->load->view('templates/compress-footer');
                        } else {
                                $this->load->view('templates/compress-navbar');
                                $this->load->view('oprec', $data);
                                $this->load->view('templates/compress-footer');
                        }
                }
        }
}
