<?php

class Nilai extends CI_Controller
{
    public function index()
    {
        $data = array(
            'nis'               => set_value('nis'),
            'id_thn_akademik'   => set_value('id_thn_akademik'),
        );
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/nilai_masuk', $data);
        $this->load->view('templates_admin/footer');
    }

    public function nilai_aksi()
    {
        $this->_rulesNilai();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $nis            = $this->input->post('nis', TRUE);
            $thn_akademik   = $this->input->post('id_thn_akademik', TRUE);

            $query          = "SELECT jadwal_pelajaran.id_thn_akademik, jadwal_pelajaran.kode_mapel, pelajaran.nama_mapel, jadwal_pelajaran.skor FROM  jadwal_pelajaran INNER JOIN pelajaran ON 
                            (jadwal_pelajaran.kode_mapel = pelajaran.kode_mapel) WHERE jadwal_pelajaran.nis = $nis AND jadwal_pelajaran.id_thn_akademik = $thn_akademik";
            $sql            = $this->db->query($query)->result();

            $smt            = $this->db->select('tahun_akademik, semester')->from('tahun_akademik')->where(array('id_thn_akademik' => $thn_akademik))->get()->row();

            $query_str      = "SELECT siswa.nis, siswa.nama_lengkap, jurusan.nama_jurusan FROM siswa INNER JOIN jurusan ON (siswa.nama_jurusan = jurusan.nama_jurusan);";

            $sis            = $this->db->query($query_str)->row();

            $data           = array(
                'sis_data'      => $sql,
                'sis_nis'       => $nis,
                'sis_nama'      => $sis->nama_lengkap,
                'sis_jurusan'   => $sis->nama_jurusan,
                'thn_akademik'  => $smt->tahun_akademik,
                'semester'      => $smt->semester,
            );

            $this->load->view('templates_admin/header_dashboard');
            $this->load->view('templates_admin/sidebar2');
            $this->load->view('admin/nilai', $data);
            $this->load->view('templates_admin/footer'); 
        }
    }

    public function _rulesNilai()
    {
        $this->form_validation->set_rules('nis', 'nis', 'required');
        $this->form_validation->set_rules('id_thn_akademik', 'id_thn_akademik', 'required');
    }

    //     public function average($arr)
    // {
    //    if (!is_array($arr)) return false;

    //    return array_sum($arr)/count($arr);
    // }

    // $array = array(5, 10, 15);
    // echo average($array); // 10
}
