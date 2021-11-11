<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Masuk Halaman Input Nilai
    </div>

    <form method="post" action="<?php echo base_url('admin/nilai/input_nilai_aksi') ?>">

        <div class="form-group">
            <label>Tahun Akademik / Semester</label>
            <?php
            $query = $this->db->query('SELECT id_thn_akademik, semester, CONCAT (tahun_akademik, " /")AS thn_semester FROM tahun_akademik');

            $dropdowns = $query->result();

            foreach ($dropdowns as $dropdown) {

                $dropdownList[$dropdown->id_thn_akademik] = $dropdown->thn_semester . " " . $dropdown->semester;
            }

            echo form_dropdown('id_thn_akademik', $dropdownList, '', 'class="form-control" id="id_thn_akademik"');

            ?>
        </div>

        <div class="form-group">
            <label>Kode Mata Pelajaran</label>
            <input type="text" name="kode_mapel" class="form-control" placeholder="Masukkan Kode Mata Pelajaran">
        </div>

        <button type="submit" class="btn btn-primary">Process</button>

    </form>
</div>