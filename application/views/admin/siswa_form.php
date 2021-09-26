<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Form Input Siswa
    </div>

    <?php echo form_open_multipart('admin/siswa/tambah_siswa_aksi') ?>


    <div class="form-group">
        <label>NIS</label>
        <input type="text" name="nis" placeholder="Masukkan NIS" class="form-control " autofocus>
        <?php echo form_error('nis', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" class="form-control">
        <?php echo form_error('nama_lengkap', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Nama Jurusan</label>
        <select name="nama_jurusan" class="form-control">
            <option value="">-- Pilih Nama Jurusan --</option>
            <?php foreach ($jurusan as $jrs) : ?>
                <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?> </option>
            <?php endforeach; ?>
        </select>
        <?php echo form_error('nama_jurusan', '<div class="text-danger small ml-3">', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>
        <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" class="form-control">
        <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control">
        <?php echo form_error('tanggal_lahir', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
        <?php echo form_error('alamat', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
        <?php echo form_error('email', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" placeholder="Masukkan Telepon" class="form-control">
        <?php echo form_error('telepon', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Tahun Akademik</label>
        <input type="year" name="tahun_akademik" placeholder="Masukkan Tahun Akademik" class="form-control">
        <?php echo form_error('tahun_akademik', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <!-- <div class="form-group">
        <label>Foto</label><br>
        <input type="file" name="photo">
    </div> -->

    <button type="submit" class="btn btn-primary mb-4 mt-3">Simpan</button>

    <?php form_close(); ?>
</div>