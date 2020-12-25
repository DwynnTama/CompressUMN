<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oprec extends CI_Controller {

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
        $this->load->view('templates/compress-navbar');
        $this->load->view('oprec');
        $this->load->view('templates/compress-footer');
        }
        
        /*
        public function search_result()
        {
                $hasil_search = $this->input->post('search');

                //belum di test
                $user   = $this->db->get_where('user', ['Nama' => $hasil_search || 'NIM' => $hasil_search])->row_array();
        }
        */
}
