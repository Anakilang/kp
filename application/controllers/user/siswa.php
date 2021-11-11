<?php

class Siswa extends CI_Controller
{

    public function index()
    {
        $data['siswa']      = $this->siswa_model->tampil_data('siswa')->result();
        $data['jurusan2']   = $this->jurusan2_model->tampil_data()->result();
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/siswa', $data);
        $this->load->view('templates_user/footer');
    }


    public function detail($id)
    {
        $data['detail'] = $this->siswa_model->ambil_id_siswa($id);
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/siswa_detail', $data);
        $this->load->view('templates_user/footer');
    }


    public function tambah_siswa()
    {
        $data['jurusan'] = $this->siswa_model->tampil_data('jurusan')->result();
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/siswa_form', $data);
        $this->load->view('templates_user/footer');
    }


    public function tambah_siswa_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_siswa();
        } else {
            $nis            = $this->input->post('nis');
            $nama_lengkap   = $this->input->post('nama_lengkap');
            $nama_jurusan   = $this->input->post('nama_jurusan');
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $tempat_lahir   = $this->input->post('tempat_lahir');
            $tanggal_lahir  = $this->input->post('tanggal_lahir');
            $alamat         = $this->input->post('alamat');
            $email          = $this->input->post('email');
            $telepon        = $this->input->post('telepon');
            $tahun_akademik = $this->input->post('tahun_akademik');
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
                'nis'               => $nis,
                'nama_lengkap'      => $nama_lengkap,
                'nama_jurusan'      => $nama_jurusan,
                'jenis_kelamin'     => $jenis_kelamin,
                'tempat_lahir'      => $tempat_lahir,
                'tanggal_lahir'     => $tanggal_lahir,
                'alamat'            => $alamat,
                'email'             => $email,
                'telepon'           => $telepon,
                'tahun_akademik'    => $tahun_akademik,
                // 'photo'             => $photo,
            );

            $this->siswa_model->insert_data($data, 'siswa');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Siswa Berhasil Ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('user/siswa');
        }
    }


    public function update($id)
    {
        $where = array('id' => $id);

        $data['siswa']      = $this->siswa_model->edit_data($where, 'siswa')->result();
        $data['jurusan']    = $this->siswa_model->tampil_data('jurusan')->result();
        $data['detail']     = $this->siswa_model->ambil_id_siswa($id);
        $this->load->view('templates_user/header_dashboard');
        $this->load->view('templates_user/sidebar2');
        $this->load->view('user/siswa_update', $data);
        $this->load->view('templates_user/footer');
    }

    public function update_siswa_aksi()
    {
        $id             = $this->input->post('id');
        $nis            = $this->input->post('nis');
        $nama_lengkap   = $this->input->post('nama_lengkap');
        $nama_jurusan   = $this->input->post('nama_jurusan');
        $jenis_kelamin  = $this->input->post('jenis_kelamin');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $alamat         = $this->input->post('alamat');
        $email          = $this->input->post('email');
        $telepon        = $this->input->post('telepon');
        $tahun_akademik = $this->input->post('tahun_akademik');
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
            'nis'               => $nis,
            'nama_lengkap'      => $nama_lengkap,
            'nama_jurusan'      => $nama_jurusan,
            'jenis_kelamin'     => $jenis_kelamin,
            'tempat_lahir'      => $tempat_lahir,
            'tanggal_lahir'     => $tanggal_lahir,
            'alamat'            => $alamat,
            'email'             => $email,
            'telepon'           => $telepon,
            'tahun_akademik'    => $tahun_akademik,
        );

        $where = array(
            'id' => $id
        );

        $this->siswa_model->update_data($where, $data, 'siswa');
        $this->session->set_flashdata('pesan', '<div class ="alert alert-success alert-dismissible fade show" role ="allert">
                    Data Siswa berhasil di update!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('user/siswa');
    }


    public function delete($id)
    {
        $where = array('id' => $id);
        $this->siswa_model->hapus_data($where, 'siswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Siswa Berhasil Dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('user/siswa');
    }



    public function _rules()
    {
        $this->form_validation->set_rules('nis', 'nis', 'required', [
            'required' => 'NIS Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'required', [
            'required' => 'Nama Lengkap Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('nama_jurusan', 'nama jurusan', 'required', [
            'required' => 'Nama Jurusan Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required', [
            'required' => 'Tempat Lahir Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required', [
            'required' => 'Tanggal Lahir Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'Alamat Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'Email Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required', [
            'required' => 'No Telepon Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required', [
            'required' => 'Tahun Akademik Wajib Diisi!'
        ]);
    }

    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();

        /*load database libray manually*/
        $this->load->database();

        /*load Model*/
        $this->load->model('siswa_model');
    }
}
