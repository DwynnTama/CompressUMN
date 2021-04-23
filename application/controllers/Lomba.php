<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lomba extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('umn_juice');
        $this->load->view('templates/commpress-footer');
    }

    public function registration_feature()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => "<p class='text-danger'>Harap masukkan nama kamu</p>"
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'trim|integer', [

        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[list_lomba_writing.Email]', [
            'required' => "<p>Email tidak boleh kosong!</p>",
            'is_unique' => "<p>Email yang dimasukkan sudah terdaftar!</p>"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/commpress-navbar');
            $this->load->view('podcast');
            $this->load->view('templates/commpress-footer');
        } else {
            $data = [
                'nama'              => htmlspecialchars($this->input->post('nama', true)),
                'asal_universitas'  => htmlspecialchars($this->input->post('kampus', true)),
                'NIM'               => $this->input->post('nim'),
                'no_telp'           => $this->input->post('no_telp'),
                'id_line'           => $this->input->post('id_line'),
                'email'             => $this->input->post('email'),
                'date'              => date("Y-m-d", time())
            ];

            $this->db->insert('list_lomba_writing', $data);
            header('Location: ' . base_url() . 'Lomba');
        }
    }

    public function registration_podcast()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => "<p class='text-danger'>Harap masukkan nama kamu</p>"
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'trim|integer', [
            
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[list_lomba_podcast.Email]', [
            'required' => "<p>Email tidak boleh kosong!</p>",
            'is_unique' => "<p>Email yang dimasukkan sudah terdaftar!</p>"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/commpress-navbar');
            $this->load->view('podcast');
            $this->load->view('templates/commpress-footer');
        } else {
            $data = [
                'nama_anggota_1'    => htmlspecialchars($this->input->post('nama', true)),
                'NIM_anggota_1'     => $this->input->post('nim'),
                'univ_anggota_1'     => htmlspecialchars($this->input->post('kampus', true)),
                'Podcast'           => $this->input->post('podcast'),
                'no_telp'           => $this->input->post('no_telp'),
                'id_line'           => $this->input->post('id_line'),
                'email'             => $this->input->post('email'),
                'date'              => date("Y-m-d", time())
            ];

            $this->db->insert('list_lomba_podcast', $data);
            header('Location: ' . base_url() . 'Lomba');
        }
    }

    public function registration_podcast2()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => "<p class='text-danger'>Harap masukkan nama kamu</p>"
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'trim|integer', [
            
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[list_lomba_podcast.Email]', [
            'required' => "<p>Email tidak boleh kosong!</p>",
            'is_unique' => "<p>Email yang dimasukkan sudah terdaftar!</p>"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/commpress-navbar');
            $this->load->view('podcast_2');
            $this->load->view('templates/commpress-footer');
        } else {
            $data = [
                'nama_anggota_1'    => htmlspecialchars($this->input->post('nama', true)),
                'nama_anggota_2'    => htmlspecialchars($this->input->post('nama2', true)),
                'NIM_anggota_1'     => $this->input->post('nim'),
                'NIM_anggota_2'     => $this->input->post('nim2'),
                'univ_anggota_1'     => htmlspecialchars($this->input->post('kampus', true)),
                'univ_anggota_2'     => htmlspecialchars($this->input->post('kampus2', true)),
                'Podcast'           => $this->input->post('podcast'),
                'no_telp'           => $this->input->post('no_telp'),
                'id_line'           => $this->input->post('id_line'),
                'email'             => $this->input->post('email'),
                'date'              => date("Y-m-d", time())
            ];

            $this->db->insert('list_lomba_podcast', $data);
            header('Location: ' . base_url() . 'Lomba');
        }
    }

    public function registration_podcast3()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => "<p class='text-danger'>Harap masukkan nama kamu</p>"
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'trim|integer', [
            
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[list_lomba_podcast.Email]', [
            'required' => "<p>Email tidak boleh kosong!</p>",
            'is_unique' => "<p>Email yang dimasukkan sudah terdaftar!</p>"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/commpress-navbar');
            $this->load->view('podcast_3');
            $this->load->view('templates/commpress-footer');
        } else {
            $data = [
                'nama_anggota_1'    => htmlspecialchars($this->input->post('nama', true)),
                'nama_anggota_2'    => htmlspecialchars($this->input->post('nama2', true)),
                'nama_anggota_3'    => htmlspecialchars($this->input->post('nama3', true)),
                'NIM_anggota_1'     => $this->input->post('nim'),
                'NIM_anggota_2'     => $this->input->post('nim2'),
                'NIM_anggota_3'     => $this->input->post('nim3'),
                'univ_anggota_1'     => htmlspecialchars($this->input->post('kampus', true)),
                'univ_anggota_2'     => htmlspecialchars($this->input->post('kampus2', true)),
                'univ_anggota_3'     => htmlspecialchars($this->input->post('kampus3', true)),
                'Podcast'           => $this->input->post('podcast'),
                'no_telp'           => $this->input->post('no_telp'),
                'id_line'           => $this->input->post('id_line'),
                'email'             => $this->input->post('email'),
                'date'              => date("Y-m-d", time())
            ];

            $this->db->insert('list_lomba_podcast', $data);
            header('Location: ' . base_url() . 'Lomba');
        }
    }

    public function podcast()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('podcast');
        $this->load->view('templates/commpress-footer');
    }

    public function podcast_2()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('podcast_2');
        $this->load->view('templates/commpress-footer');
    }

    public function podcast_3()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('podcast_3');
        $this->load->view('templates/commpress-footer');
    }

    public function feature()
    {
        $this->load->view('templates/commpress-navbar');
        $this->load->view('feature');
        $this->load->view('templates/commpress-footer');
    }
}
