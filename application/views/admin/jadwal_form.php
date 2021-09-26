<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-plus"></i> Form Tambah Jadwal Pelajaran
    </div>

    <form method="post" action="<?php echo base_url('admin/jadwal/tambah_jadwal_aksi') ?>">

        <div class="form-group">
            <label>Tahun Akademik</label>
            <input type="hidden" name="id_thn_akademik" class="form-control" value="<?php echo $id_thn_akademik; ?>">
            <input type="hidden" name="id_plj" class="form-control" value="<?php echo $id_plj; ?>">
            <input type="text" name="thn_akademik_smt" class="form-control" value="<?php echo $thn_akademik_smt . '/' . $semester; ?>" readonly />
        </div>

        <div class="form-group">
            <label>Nomor Induk Siswa</label>
            <input type="text" name="nis" class="form-control" value="<?php echo $nis; ?>" readonly />
        </div>

        <div class="form-group">
            <label>Mata Pelajaran</label>
            <?php
            $query = $this->db->query('SELECT kode_mapel,nama_mapel FROM pelajaran');

            $dropdowns = $query->result();
            foreach ($dropdowns as $dropdown) {
                $dropDownList[$dropdown->kode_mapel] = $dropdown->nama_mapel;
            }
            echo form_dropdown('kode_mapel', $dropDownList, $kode_mapel, 'class="form-control" id="kode_mapel"');
            ?>
        </div>

        <!-- <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" value="<?php echo $hari; ?>" readonly />
        </div> -->

        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo anchor('admin/jadwal/jadwal_aksi ', '<div class="btn btn-danger"> Kembali </div>') ?>
    </form>
</div>