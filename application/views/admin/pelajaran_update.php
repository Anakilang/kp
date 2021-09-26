<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fa fa-edit"></i> Form Edit Mata Pelajaran
    </div>
    <?php foreach ($pelajaran as $plj) : ?>

        <form method="post" action="<?php echo base_url('admin/pelajaran/update_aksi') ?>">

            <div class="form-group">
                <label>Kode Mapel</label>
                <input type="hidden" name="id_mapel" value="<?php echo $plj->id_mapel ?>">
                <input type="text" name="kode_mapel" class="form-control" value="<?php echo $plj->kode_mapel ?>">
            </div>

            <div class="form-group">
                <label>Nama Mapel</label>
                <input type="text" name="nama_mapel" class="form-control" value="<?php echo $plj->nama_mapel ?>">
            </div>

            <div class="form-group">
                <label>Kode Mapel</label>
                <input type="text" name="kode_mapel" class="form-control" value="<?php echo $plj->kode_mapel ?>">
            </div>

            <div class="form-group">
                <label>Nama Guru</label>
                <input type="text" name="nama_guru" class="form-control" value="<?php echo $plj->nama_guru ?>">
            </div>

            <div class="form-group">
                <label>Hari</label>
                <input type="text" name="hari" class="form-control" value="<?php echo $plj->hari ?>">
            </div>

            <div class="form-group">
                <label>Jam</label>
                <input type="text" name="jam" class="form-control" value="<?php echo $plj->jam ?>">
            </div>

            <div class="form-group">
                <label>Semester</label>
                <input type="text" name="semester" class="form-control" value="<?php echo $plj->semester ?>">
            </div>

            <button type="submit" class="btn btn-primary">Simpan
            </button>
        </form>

    <?php endforeach; ?>

</div>