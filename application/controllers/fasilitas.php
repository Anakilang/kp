<?php

class Fasilitas extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'SMKS Muthia Harapan Cicalengka';
        $this->load->view('templates_web/header', $data);
        $this->load->view('web/fasilitas');
        $this->load->view('templates_web/footer');
    }
}
