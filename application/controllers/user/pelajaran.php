<?php

class Pelajaran extends CI_Controller
{
    public function index()
    {
        $data['pelajaran']  = $this->pelajaran_model->tampil_data('pelajaran')->result();
        $data['jurusan2']   = $this->jurusan2_model->tampil_data()->result();
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/pelajaran', $data);
        $this->load->view('templates_user/footer');
    }


    public function detail($kp)
    {
        $data['detail'] = $this->pelajaran_model->ambil_kode_mapel($kp);
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/pelajaran_detail', $data);
        $this->load->view('templates_user/footer');
    }
}
