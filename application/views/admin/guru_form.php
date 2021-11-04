<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Form Input Guru
    </div>

    <?php echo form_open_multipart('admin/guru/tambah_guru_aksi') ?>


    <div class="form-group">
        <label>NIGN</label>
        <input type="text" name="nign" placeholder="Masukkan nign" class="form-control " autofocus>
        <?php echo form_error('nign', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Nama Guru</label>
        <input type="text" name="nama_guru" placeholder="Masukkan Nama Guru" class="form-control">
        <?php echo form_error('nama_guru', '<div class="text-danger small" ml-3> ', '</div>') ?>
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
        <label>Alamat</label>
        <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
        <?php echo form_error('alamat', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" placeholder="Masukkan Telepon" class="form-control">
        <?php echo form_error('telepon', '<div class="text-danger small" ml-3> ', '</div>') ?>
    </div>

    <!-- <div class="form-group">
        <label>Foto</label><br>
        <input type="file" name="photo">
    </div> -->

    <button type="submit" class="btn btn-primary mb-4 mt-3">Simpan</button>

    <?php form_close(); ?>
</div>