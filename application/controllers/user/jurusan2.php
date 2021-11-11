<?php

class Jurusan2 extends CI_Controller
{
    public function index()
    {
        $data['jurusan2']   = $this->jurusan2_model->tampil_data()->result();
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/jurusan2', $data);
        $this->load->view('templates_user/footer');
    }
}
