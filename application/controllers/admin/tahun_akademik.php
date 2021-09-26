<?php

class Tahun_akademik extends CI_Controller
{
    public function index()
    {
        $data['tahun_akademik'] = $this->tahunakademik_model->tampil_data('tahun_akademik')->result();
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/tahun_akademik', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_tahun_akademik()
    {
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/tahun_akademik_form');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_tahun_akademik_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_tahun_akademik();
        } else {
            $tahun_akademik         = $this->input->post('tahun_akademik');
            $semester               = $this->input->post('semester');
            $status                 = $this->input->post('status');

            $data = array(
                'tahun_akademik'    => $tahun_akademik,
                'semester'          => $semester,
                'status'            => $status,
            );

            $this->tahunakademik_model->input_data($data, 'tahun_akademik');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Tahun Akademik Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/tahun_akademik');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tahun_akademik', 'tahun akademik', 'required', [
            'required' => 'Tahun Akademik Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('semester', 'semester', 'required', [
            'required' => 'Semester Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('status', 'status', 'required', [
            'required' => 'Status Wajib Diisi!'
        ]);
    }

    public function update($id)
    {
        $where                  = array('id_thn_akademik' => $id);
        $data['tahun_akademik'] = $this->tahunakademik_model->edit_data($where, 'tahun_akademik')->result();

        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/tahun_akademik_update', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_aksi()
    {
        $id                     = $this->input->post('id_thn_akademik');
        $tahun_akademik         = $this->input->post('tahun_akademik');
        $semester               = $this->input->post('semester');
        $status                 = $this->input->post('status');

        $data   =   array(
            'tahun_akademik'    => $tahun_akademik,
            'semester'          => $semester,
            'status'            => $status,
        );

        $where = array(
            'id' => $id
        );

        $this->tahunakademik_model->update_data($where, $data, 'tahun_akademik');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Tahun Akademik Berhasil di update!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/tahun_akademik');
    }

    public function delete($id)
    {
        $where = array('id_thn_akademik' => $id);
        $this->jurusan2_model->hapus_data($where, 'tahun_akademik');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Tahun Akademik Berhasil Dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/tahun_akademik');
    }
}
