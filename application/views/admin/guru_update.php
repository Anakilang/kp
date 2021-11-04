<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fa fa-edit"></i> Form Update Guru
    </div>


    <?php foreach ($guru as $gur) : ?>
        <?php echo form_open_multipart('admin/guru/update_guru_aksi') ?>

        <div class="form-group">
            <label>NIS</label>
            <input type="hidden" name="id_guru" class="form-control " value="<?php echo $gur->id_guru ?>">
            <input type="text" name="nidn" placeholder="Masukkan NIDN" class="form-control " value="<?php echo $gur->id_guru ?>">
            <?php echo form_error('nidn', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Nama Guru</label>
            <input type="text" name="nama_guru" placeholder="Masukkan Nama guru" class="form-control" value="<?php echo $gur->nama_guru ?>">
            <?php echo form_error('nama_guru', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" value="<?php echo $gur->jenis_kelamin ?>">
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" value="<?php echo $gur->alamat ?>">
            <?php echo form_error('alamat', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="telepon" placeholder="Masukkan Telepon" class="form-control" value="<?php echo $gur->telepon ?>">
            <?php echo form_error('telepon', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <!-- <div class="form-group">
            <?php foreach ($detail as $dt) : ?>
                <img src="<?php echo base_url() . 'bootstrap4/uploads/' . $gur->photo ?>">
            <?php endforeach; ?><br><br>
            <label>Foto</label><br>
            <input type="file" name="userfile" value="<?php echo $gur->photo ?>">
        </div> -->

        <button type="submit" class="btn btn-primary mb-4 mt-3">Simpan</button>

        <?php form_close(); ?>
    <?php endforeach; ?>
</div>