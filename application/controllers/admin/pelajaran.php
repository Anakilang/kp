<?php

class Pelajaran extends CI_Controller
{
    public function index()
    {
        $data['pelajaran']  = $this->pelajaran_model->tampil_data('pelajaran')->result();
        $data['jurusan2']   = $this->jurusan2_model->tampil_data()->result();
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/pelajaran', $data);
        $this->load->view('templates_admin/footer');
    }


    public function detail($kp)
    {
        $data['detail'] = $this->pelajaran_model->ambil_kode_mapel($kp);
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/pelajaran_detail', $data);
        $this->load->view('templates_admin/footer');
    }


    public function tambah_pelajaran()
    {
        $data['jurusan'] = $this->pelajaran_model->tampil_data('jurusan')->result();
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/pelajaran_form', $data);
        $this->load->view('templates_admin/footer');
    }


    public function tambah_pelajaran_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_pelajaran();
        } else {
            $kode_mapel     = $this->input->post('kode_mapel');
            $nama_mapel     = $this->input->post('nama_mapel');
            $nama_jurusan   = $this->input->post('nama_jurusan');
            $nama_guru      = $this->input->post('nama_guru');
            $hari           = $this->input->post('hari');
            $jam            = $this->input->post('jam');
            $semester       = $this->input->post('semester');

            $data = array(
                'nama_mapel'    => $nama_mapel,
                'kode_mapel'    => $kode_mapel,
                'nama_jurusan'  => $nama_jurusan,
                'nama_guru'     => $nama_guru,
                'hari'          => $hari,
                'jam'           => $jam,
                'semester'      => $semester,
            );

            $this->pelajaran_model->insert_data($data, 'pelajaran');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mata Pelajaran Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/pelajaran');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('kode_mapel', 'kode mapel', 'required', [
            'required' => 'Kode Mata Pelajaran Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('nama_mapel', 'nama mapel', 'required', [
            'required' => 'Nama Mata Pelajaran Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('nama_jurusan', 'nama jurusan', 'required', [
            'required' => 'Nama Jurusan Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('nama_guru', 'nama guru', 'required', [
            'required' => 'Nama Guru Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('hari', 'hari', 'required', [
            'required' => 'Hari Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('jam', 'jam', 'required', [
            'required' => 'Jam Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('semester', 'semester', 'required', [
            'required' => 'Semester Wajib Diisi!'
        ]);
    }

    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();

        /*load database libray manually*/
        $this->load->database();

        /*load Model*/
        $this->load->model('pelajaran_model');
    }


    public function update($id)
    {
        $where = array('id_mapel' => $id);
        $data['pelajaran'] = $this->pelajaran_model->edit_data($where, 'pelajaran')->result();
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/pelajaran_update', $data);
        $this->load->view('templates_admin/footer');
    }


    public function update_aksi()
    {
        $id = $this->input->post('id_mapel');
        $kode_mapel     = $this->input->post('kode_mapel');
        $nama_mapel     = $this->input->post('nama_mapel');
        $nama_guru      = $this->input->post('nama_guru');
        $hari           = $this->input->post('hari');
        $jam            = $this->input->post('jam');
        $semester       = $this->input->post('semester');

        $data = array(
            'kode_mapel'    => $kode_mapel,
            'nama_mapel'    => $nama_mapel,
            'nama_guru'     => $nama_guru,
            'hari'          => $hari,
            'jam'           => $jam,
            'semester'      => $semester
        );

        $where = array(
            'id_mapel' => $id
        );

        $this->pelajaran_model->update_data($where, $data, 'pelajaran');
        $this->session->set_flashdata('pesan', '<div class ="alert alert-success alert-dismissible fade show" role ="allert">
                    Data Mapel berhasil di update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('admin/pelajaran');
    }


    public function delete($id)
    {
        $where = array('id_mapel' => $id);
        $this->pelajaran_model->hapus_data($where, 'pelajaran');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable fade show" role"allert">
                Data Jurusan Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('admin/pelajaran');
    }
}
