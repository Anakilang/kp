<?php

class Guru extends CI_Controller
{

    public function index()
    {
        $data['guru']      = $this->guru_model->tampil_data('guru')->result();
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/guru', $data);
        $this->load->view('templates_user/footer');
    }


    public function detail($id)
    {
        $data['detail'] = $this->guru_model->ambil_id_guru($id);
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/guru_detail', $data);
        $this->load->view('templates_user/footer');
    }


    public function tambah_guru()
    {
        $data['jurusan'] = $this->guru_model->tampil_data('jurusan')->result();
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/guru_form', $data);
        $this->load->view('templates_user/footer');
    }


    public function tambah_guru_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_guru();
        } else {
            $nign            = $this->input->post('nign');
            $nama_guru   = $this->input->post('nama_guru');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $alamat         = $this->input->post('alamat');
            $telepon        = $this->input->post('telepon');
            // $photo          = $_FILES['photo'];
            // if ($photo = '') {
            // } else {
            //     $config['upload_path'] = './bootstrap4/uploads';
            //     $config['allowed_types'] = 'jpg|png|gif|tiff';

            //     $this->load->library('upload', $config);
            //     if (!$this->upload_do_upload('photo')) {
            //         echo "Gagal Upload";
            //         die();
            //     } else {
            //         $photo = $this->upload->data('file_name');
            //     }
            // }

            $data = array(
                'nign'              => $nign,
                'nama_guru'         => $nama_guru,
                'jenis_kelamin'     => $jenis_kelamin,
                'alamat'            => $alamat,
                'telepon'           => $telepon,
                // 'photo'             => $photo,
            );

            $this->guru_model->insert_data($data, 'guru');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Guru Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('user/guru');
        }
    }


    public function update($id)
    {
        $where = array('id_guru' => $id);

        $data['guru']      = $this->guru_model->edit_data($where, 'guru')->result();
        $data['jurusan']    = $this->guru_model->tampil_data('jurusan')->result();
        $data['detail']     = $this->guru_model->ambil_id_guru($id);
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/guru_update', $data);
        $this->load->view('templates_user/footer');
    }

    public function update_guru_aksi()
    {
        $id             = $this->input->post('id_guru');
        $nign           = $this->input->post('nign');
        $nama_guru      = $this->input->post('nama_guru');
        $jenis_kelamin  = $this->input->post('jenis_kelamin');
        $alamat         = $this->input->post('alamat');
        $telepon        = $this->input->post('telepon');
        // $photo          = $_FILES['userfile']['name'];

        // if ($photo) {
        //     $config['upload_path'] = './bootstrap4/uploads';
        //     $config['allowed_types'] = 'jpg|png|gif|tiff';

        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('userfile')) {
        //         $userfile = $this->upload->data('file_name');
        //         $this->db->set('photo', $userfile);
        //     } else {
        //         echo "Gagal Upload";
        //     }
        // }

        $data = array(
            'nign'               => $nign,
            'nama_guru'         => $nama_guru,
            'jenis_kelamin'     => $jenis_kelamin,
            'alamat'            => $alamat,
            'telepon'           => $telepon,
        );

        $where = array(
            'id_guru' => $id
        );

        $this->guru_model->update_data($where, $data, 'guru');
        $this->session->set_flashdata('pesan', '<div class ="alert alert-success alert-dismissible fade show" role ="allert">
                    Data Guru berhasil di update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('user/guru');
    }


    public function delete($id)
    {
        $where = array('id_guru' => $id);
        $this->guru_model->hapus_data($where, 'guru');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Guru Berhasil Dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('user/guru');
    }



    public function _rules()
    {
        $this->form_validation->set_rules('nign', 'nign', 'required', [
            'required' => 'NIGN Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('nama_guru', 'nama guru', 'required', [
            'required' => 'Nama Guru Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'Alamat Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required', [
            'required' => 'No Telepon Wajib Diisi!'
        ]);
    }

    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();

        /*load database libray manually*/
        $this->load->database();

        /*load Model*/
        $this->load->model('guru_model');
    }
}
