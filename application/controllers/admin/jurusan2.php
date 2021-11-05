<?php

class Jurusan2 extends CI_Controller
{
    public function index()
    {
        $data['jurusan2']   = $this->jurusan2_model->tampil_data()->result();
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/jurusan2', $data);
        $this->load->view('templates_admin/footer');
    }

    public function input()
    {
        $data = array(
            'id_jurusan'    => set_value('id_jurusan'),
            'kode_jurusan'  => set_value('kode_jurusan'),
            'nama_jurusan'  => set_value('nama_jurusan'),
        );
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/jurusan2_form', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'kode_jurusan' => $this->input->post('kode_jurusan', TRUE),
                'nama_jurusan' => $this->input->post('nama_jurusan', TRUE),
            );

            $this->jurusan2_model->input_data($data, 'jurusan');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Jurusan Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/jurusan2');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_jurusan', 'kode_jurusan', 'required', [
            'required' => 'Kode Jurusan Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required', [
            'required' => 'Nama Jurusan Wajib Diisi!'
        ]);
    }

    public function update($id)
    {
        $where = array('id_jurusan' => $id);
        $data['jurusan'] = $this->jurusan2_model->edit_data($where, 'jurusan')->result();
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar2');
        $this->load->view('admin/jurusan2_update', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_aksi()
    {
        $id             = $this->input->post('id_jurusan');
        $kode_jurusan   = $this->input->post('kode_jurusan');
        $nama_jurusan   = $this->input->post('nama_jurusan');

        $data = array(
            'kode_jurusan' => $kode_jurusan,
            'nama_jurusan' => $nama_jurusan
        );

        $where = array(
            'id_jurusan' => $id
        );

        $this->jurusan2_model->update_data($where, $data, 'jurusan');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Jurusan Berhasil di update!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/jurusan2');
    }

    public function delete($id)
    {
        $where = array('id_jurusan' => $id);
        $this->jurusan2_model->hapus_data($where, 'jurusan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Jurusan Berhasil Dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/jurusan2');
    }
}
