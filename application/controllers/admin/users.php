<?php

class Users extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->user_model->tampil_data('user')->result();
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar3');
        $this->load->view('admin/users_daftar', $data);
        $this->load->view('templates_admin/footer');
    }

    public function input()
    {
        $data = array(
            'username'  => set_value('username'),
            'password'  => set_value('password'),
            'level'     => set_value('username'),
            'blokir'    => set_value('username'),
        );

        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar3');
        $this->load->view('admin/users_form', $data);
        $this->load->view('templates_admin/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'username'      => $this->input->post('username', TRUE),
                'password'      => md5($this->input->post('password', TRUE)),
                'level'         => $this->input->post('level', TRUE),
                'blokir'        => $this->input->post('blokir', TRUE),
                'id_session'    => md5($this->input->post('id_session', TRUE)),
            );
        }

        $this->user_model->input_data($data, 'user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data User Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/users');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi!']);
        $this->form_validation->set_rules('level', 'Level', 'required', ['required' => 'Level wajib diisi!']);
        $this->form_validation->set_rules('blokir', 'Blokir', 'required', ['required' => 'Blokir wajib diisi!']);
    }

    public function update($id)
    {
        $where = array('id' => $id);

        $data['user'] = $this->user_model->edit_data($where, 'user')->result();
        $this->load->view('templates_admin/header_dashboard');
        $this->load->view('templates_admin/sidebar3');
        $this->load->view('admin/users_update', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_aksi()
    {
        $id             = $this->input->post('id');
        $username       = $this->input->post('username');
        $password       = md5($this->input->post('password'));
        $level          = $this->input->post('level');
        $blokir         = $this->input->post('blokir');
        $id_session     = md5($this->input->post('id_session'));

        $data = array(
            'username'      => $username,
            'password'      => $password,
            'level'         => $level,
            'blokir'        => $blokir,
        );

        $where = array(
            'id' => $id,
        );

        $this->user_model->update_data($where, $data, 'user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data User Berhasil di update!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/users');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->user_model->hapus_data($where, 'user');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data User Berhasil Dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('admin/users');
    }
}
