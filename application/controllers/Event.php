<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('tampil_podcast');
        $this->load->model('model_feature');
    }

    public function index()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('select_event');
        $this->load->view('templates/commpress-footer');
    }

    /*public function foto_tunggal()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => "<p class='text-danger'>Harap masukkan nama kamu</p>"
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'trim|integer', [
            'integer' =>  "<p>NIM yang dimasukkan harus berbentuk angka!</p>"
        ]);

        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim|integer', [
            'required' => "<p>Tahun Angkatan tidak boleh kosong!</p>",
            'integer' =>  "<p>Tahun Angkatan kok huruf? :(</p>"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/commpress-navbar');
            $this->load->view('foto_tunggal');
            $this->load->view('templates/commpress-footer');
        } else {
            $jenis = "Foto_Tunggal";
            $data = [
                'Nama'        => htmlspecialchars($this->input->post('nama', true)),
                'NIM'         => $this->input->post('nim'),
                'Angkatan'    => htmlspecialchars($this->input->post('angkatan', true)),
                'Jenis_Lomba' => $jenis,
                'date'        => date("Y-m-d", time())
            ];
            $this->db->insert('list_pameran', $data);
            header('Location: ' . base_u rl() . 'Event');
        }
    }

    public function foto_story()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => "<p class='text-danger'>Harap masukkan nama kamu</p>"
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'trim|integer', [
            'integer' =>  "<p>NIM yang dimasukkan harus berbentuk angka!</p>"
        ]);

        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim|integer', [
            'required' => "<p>Tahun Angkatan tidak boleh kosong!</p>",
            'integer' =>  "<p>Tahun Angkatan kok huruf? :(</p>"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/commpress-navbar');
            $this->load->view('foto_story');
            $this->load->view('templates/commpress-footer');
        } else {
            $jenis = "Foto_Story";
            $data = [
                'Nama'        => htmlspecialchars($this->input->post('nama', true)),
                'NIM'         => $this->input->post('nim'),
                'Angkatan'    => htmlspecialchars($this->input->post('angkatan', true)),
                'Jenis_Lomba' => $jenis,
                'date'        => date("Y-m-d", time())
            ];
            $this->db->insert('list_pameran', $data);
            header('Location: ' . base_u rl() . 'Event');
        }
    }

    public function video_dokumenter()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => "<p class='text-danger'>Harap masukkan nama kamu</p>"
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'trim|integer', [
            'integer' =>  "<p>NIM yang dimasukkan harus berbentuk angka!</p>"
        ]);

        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|trim|integer', [
            'required' => "<p>Tahun Angkatan tidak boleh kosong!</p>",
            'integer' =>  "<p>Tahun Angkatan kok huruf? :(</p>"
        ]);

        $this->form_validation->set_rules('link', 'video_link', 'required|trim', [
            'required' => "<p>Kamu harus sertakan link video kamu!</p>"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/commpress-navbar');
            $this->load->view('video_dokumenter');
            $this->load->view('templates/commpress-footer');
        } else {
            $jenis = "Video_Dokumenter";
            $data = [
                'Nama'    => htmlspecialchars($this->input->post('nama', true)),
                'NIM'     => $this->input->post('nim'),
                'Angkatan' => htmlspecialchars($this->input->post('angkatan', true)),
                'Jenis_Lomba' => $jenis,
                'video_link'  => $this->input->post('link'),
                'date'    => date("Y-m-d", time())
            ];
            $this->db->insert('list_pameran', $data);
            header('Location: ' . base_u rl() . 'Event');
        }
    }*/

    
}
