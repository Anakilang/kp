<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Form Masuk Data Nilai Siswa
    </div>
    <?php echo $this->session->flashdata('pesan') ?>

    <form method="post" action="<?php echo base_url('admin/nilai/nilai_aksi') ?>">

        <div class="form-group">
            <label>Nomor Induk Siswa</label>
            <input type="text" name="nis" placeholder="Masukkan NIS" class="form-control">
            <?php echo form_error('nis', '<div class="text-danger small ml-2">', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Tahun Akademik / Semester</label>
            <?php
            $query = $this->db->query('SELECT id_thn_akademik, semester, CONCAT (tahun_akademik," /" )   AS thn_semester FROM tahun_akademik');

            $dropdowns = $query->result();

            foreach ($dropdowns as $dropdown) {

                $dropdownList[$dropdown->id_thn_akademik] = $dropdown->thn_semester . " " . $dropdown->semester;
            }

            echo form_dropdown('id_thn_akademik', $dropdownList, '', 'class="form-control" id="id_thn_akademik"');

            ?>
        </div>

        <button type="submit" class="btn btn-primary">Proses</button>
    </form>

</div>