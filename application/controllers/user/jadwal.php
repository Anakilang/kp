<?php

class Jadwal extends CI_Controller
{

    public function index()
    {
        $data = array(
            'nis'               => set_value('nis'),
            'id_thn_akademik'   => set_value('id_thn_akademik'),
        );

        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/jadwal_masuk', $data);
        $this->load->view('templates_user/footer');
    }

    public function jadwal_aksi()
    {
        $this->_rulesJadwal();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $nis            = $this->input->POST('nis', TRUE);
            $thn_akademik   = $this->input->POST('id_thn_akademik', TRUE);
        }

        if ($this->siswa_model->get_by_id($nis) == null) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Siswa yang anda input tidak terdaftar!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('user/jadwal');
        }

        $data = array(
            'nis'               => $nis,
            'id_thn_akademik'   => $thn_akademik,
            'nama_lengkap'      => $this->siswa_model->get_by_id($nis)->nama_lengkap,
            // 'hari'              => $this->pelajaran_model->get_by_id($hari)->hari,
        );

        $dataJadwal = array(
            'jadwal_data'       => $this->baca_jadwal($nis, $thn_akademik),
            'nis'               => $nis,
            'id_thn_akademik'   => $thn_akademik,
            'tahun_akademik'    => $this->tahunakademik_model->get_by_id($thn_akademik)->tahun_akademik,
            'semester'          => $this->tahunakademik_model->get_by_id($thn_akademik)->semester,
            'nama_lengkap'      => $this->siswa_model->get_by_id($nis)->nama_lengkap,
            'jurusan'           => $this->siswa_model->get_by_id($nis)->nama_jurusan,
            // 'hari'              => $this->pelajaran_model->get_by_id($hari)->hari,
        );

        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/jadwal_list', $dataJadwal);
        $this->load->view('templates_user/footer');
    }

    public function baca_jadwal($nis, $thn_akademik)
    {
        $this->db->select('j.id_plj,j.kode_mapel,m.nama_mapel,');
        $this->db->from('jadwal_pelajaran as j');
        $this->db->where('j.nis', $nis);
        $this->db->where('j.id_thn_akademik', $thn_akademik);
        // $this->db->where('p.hari', $hari);
        $this->db->join('pelajaran as m', 'm.kode_mapel = j.kode_mapel');

        $jadwal = $this->db->get()->result();
        return $jadwal;
    }

    public function _rulesJadwal()
    {
        $this->form_validation->set_rules('nis', 'nis', 'required');
        $this->form_validation->set_rules('id_thn_akademik', 'id_thn_akademik', 'required');
    }

    public function tambah_jadwal($nis, $thn_akademik)
    {
        $data = array(
            'id_plj'            => set_value('id_plj'),
            'id_thn_akademik'   => $thn_akademik,
            'thn_akademik_smt'  => $this->tahunakademik_model->get_by_id($thn_akademik)->tahun_akademik,
            'semester'          => $this->tahunakademik_model->get_by_id($thn_akademik)->semester,
            'nis'               => $nis,
            'kode_mapel'        => set_value('kode_mapel'),
        );

        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/jadwal_form', $data);
        $this->load->view('templates_user/footer');
    }
}
