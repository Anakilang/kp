<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Form Input Pelajaran
    </div>

    <form method="post" action="<?php echo base_url('admin/pelajaran/tambah_pelajaran_aksi') ?>">

        <div class="form-group">
            <label>Kode Mata Pelajaran</label>
            <input type="text" name="kode_mapel" class="form-control" autofocus>
            <?php echo form_error('kode_mapel', '<div class="text-danger small ml-3">') ?>
        </div>

        <div class="form-group">
            <label>Nama Mata Pelajaran</label>
            <input type="text" name="nama_mapel" class="form-control">
            <?php echo form_error('nama_mapel', '<div class="text-danger small ml-3">') ?>
        </div>

        <div class="form-group">
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" class="form-control">
            <?php echo form_error('nama_guru', '<div class="text-danger small ml-3">') ?>
        </div>

        <div class="form-group">
            <label>Nama Jurusan</label>
            <select name="nama_jurusan" class="form-control">
                <option value="">--Pilih Nama Jurusan</option>
                <?php foreach ($jurusan as $jrs) : ?>
                    <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
                <?php endforeach; ?>
            </select>
            <?php echo form_error('nama_jurusan', '<div class="text-danger small ml-3">') ?>
        </div>

        <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control">
            <?php echo form_error('hari', '<div class="text-danger small ml-3">') ?>
        </div>

        <div class="form-group">
            <label>Jam</label>
            <input type="text" name="jam" class="form-control">
            <?php echo form_error('jam', '<div class="text-danger small ml-3">') ?>
        </div>

        <div class="form-group">
            <label>Semester</label>
            <select name="semester" class="form-control">
                <option>Ganjil</option>
                <option>Genap</option>
            </select>
            <?php echo form_error('semester', '<div class="text-danger small ml-3">') ?>
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>

    </form>

</div>