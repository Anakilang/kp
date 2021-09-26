<?php

class Jadwal extends CI_Controller
{

    public function index()
    {
        $data = array(
            'nis'               => set_value('nis'),
            'id_thn_akademik'   => set_value('id_thn_akademik'),
        );

        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/jadwal_masuk', $data);
        $this->load->view('templates_admin/footer');
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
            redirect('admin/jadwal');
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

        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/jadwal_list', $dataJadwal);
        $this->load->view('templates_admin/footer');
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

        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/jadwal_form', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_jadwal_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_jadwal($this->input->post('nis', 'TRUE'), $this->input->post('id_thn_akademik', TRUE));
        } else {
            $nis                = $this->input->post('nis', TRUE);
            $id_thn_akademik    = $this->input->post('id_thn_akademik', TRUE);
            $kode_mapel         = $this->input->post('kode_mapel', TRUE);

            $data  = array(
                'id_thn_akademik'   => $id_thn_akademik,
                'nis'               => $nis,
                'kode_mapel'        => $kode_mapel,
            );

            $this->jadwal_model->insert($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Jadwal Pelajaran Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/jadwal/index');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_thn_akademik', 'id_thn_akademik', 'required');
        $this->form_validation->set_rules('nis', 'nis', 'required');
        $this->form_validation->set_rules('kode_mapel', 'kode_mapel', 'required');
    }

    public function update($id)
    {
        $row    = $this->jadwal_model->get_by_id($id);
        $th     = $row->id_thn_akademik;

        if ($row) {
            $data = array(
                'id_plj'            =>   set_value('id_plj', $row->id_plj),
                'id_thn_akademik'   =>   set_value('id_thn_akademik', $row->id_thn_akademik),
                'nis'               =>   set_value('nis', $row->nis),
                'kode_mapel'        =>   set_value('kode_mapel', $row->kode_mapel),
                'thn_akademik_smt'  =>   $this->tahunakademik_model->get_by_id($th)->tahun_akademik,
                'semester'          =>   $this->tahunakademik_model->get_by_id($th)->semester,
            );

            $this->load->view('templates_admin/header_dashboard');
            $this->load->view('templates_admin/sidebar2');
            $this->load->view('admin/jadwal_update', $data);
            $this->load->view('templates_admin/footer');
        } else {
            echo "Data Tidak Ada";
        }
    }

    public function update_aksi()
    {
        $id_plj             = $this->input->post('id_plj', TRUE);
        $nis                = $this->input->post('nis', TRUE);
        $id_thn_akademik    = $this->input->post('id_thn_akademik', TRUE);
        $kode_mapel             = $this->input->post('kode_mapel', TRUE);

        $data = array(
            'id_plj'            => $id_plj,
            'id_thn_akademik'   => $id_thn_akademik,
            'nis'               => $nis,
            'kode_mapel'        => $this->input->post('kode_mapel', TRUE)
        );

        $this->jadwal_model->update($id_plj, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Jadwal Pelajaran Berhasil Diubah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/jadwal/index');
    }

    public function delete($id)
    {
        $where = array('id_plj' => $id);
        $this->jadwal_model->hapus_data($where, 'jadwal_pelajaran');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Mata Pelajaran Berhasil Dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/jadwal/index');
    }
}
