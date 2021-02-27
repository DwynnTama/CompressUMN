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
        $this->load->view('select_lomba');
        $this->load->view('templates/commpress-footer');
    }

    public function registration_feature()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => "<p class='text-danger'>Username juga tidak boleh kosong!</p>"
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'required|trim|integer|is_unique[list_lomba.NIM]', [
            'required' => "<p>NIM tidak boleh kosong</p>",
            'is_unique' => "<p>NIM yang dimasukkan sudah terdaftar!</p>"
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[list_lomba.Email]', [
            'required' => "<p>Email tidak boleh kosong!</p>",
            'is_unique' => "<p>Email yang dimasukkan sudah terdaftar!</p>"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/commpress-navbar');
            $this->load->view('feature');
            $this->load->view('templates/commpress-footer');
        } else {
            $data = [
                'nama'  => htmlspecialchars($this->input->post('nama', true)),
                'nim'   => $this->input->post('nim'),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'date' => date("Y-m-d",time())
            ];

            $this->db->insert('list_lomba', $data);
            header('Location: '.base_url()."Lomba");
        }
    }

    public function registration_podcast()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => "<h10 style='margin:0;'>Username juga tidak boleh kosong!</h10>"
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'required|trim|integer|is_unique[list_lomba.NIM]', [
            'required' => "<h10 style='margin:0;'>NIM tidak boleh kosong</h10>",
            'is_unique' => "<h10 style='margin:0;'>NIM yang dimasukkan sudah terdaftar!</h10>"
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[list_lomba.Email]', [
            'required' => "<h10 style='margin:0;'>Email tidak boleh kosong!</h10>",
            'is_unique' => "<h10 style='margin:0;'>Email yang dimasukkan sudah terdaftar!</h10>"
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/commpress-navbar');
            $this->load->view('podcast');
            $this->load->view('templates/commpress-footer');
        } else {
            $data = [
                'nama'  => htmlspecialchars($this->input->post('nama', true)),
                'nim'   => $this->input->post('nim'),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'date' => date("Y-m-d",time())
            ];

            $this->db->insert('list_lomba', $data);
            header('Location: '.base_url().'Lomba');
        }
    }

    public function podcast(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('podcast');
        $this->load->view('templates/commpress-footer');
    }

    public function feature(){
        $this->load->view('templates/commpress-navbar');
        $this->load->view('feature');
        $this->load->view('templates/commpress-footer');
    }
}
