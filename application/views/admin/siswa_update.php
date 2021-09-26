<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fa fa-edit"></i> Form Update Siswa
    </div>


    <?php foreach ($siswa as $sis) : ?>
        <?php echo form_open_multipart('admin/siswa/update_siswa_aksi') ?>

        <div class="form-group">
            <label>NIS</label>
            <input type="hidden" name="id" class="form-control " value="<?php echo $sis->id ?>">
            <input type="text" name="nis" placeholder="Masukkan NIS" class="form-control " value="<?php echo $sis->id ?>">
            <?php echo form_error('nis', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" class="form-control" value="<?php echo $sis->nama_lengkap ?>">
            <?php echo form_error('nama_lengkap', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Nama Jurusan</label>
            <select name="nama_jurusan" class="form-control" value="<?php echo $sis->nama_jurusan ?>">
                <?php foreach ($jurusan as $jrs) : ?>
                    <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?> </option>
                <?php endforeach; ?>
            </select>
            <?php echo form_error('nama_jurusan', '<div class="text-danger small ml-3">', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" value="<?php echo $sis->jenis_kelamin ?>">
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" class="form-control" value="<?php echo $sis->tempat_lahir ?>">
            <?php echo form_error('tempat_lahir', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $sis->tanggal_lahir ?>">
            <?php echo form_error('tanggal_lahir', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" value="<?php echo $sis->alamat ?>">
            <?php echo form_error('alamat', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Masukkan Email" class="form-control" value="<?php echo $sis->email ?>">
            <?php echo form_error('email', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="telepon" placeholder="Masukkan Telepon" class="form-control" value="<?php echo $sis->telepon ?>">
            <?php echo form_error('telepon', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Tahun Akademik</label>
            <input type="year" name="tahun_akademik" placeholder="Masukkan Tahun Akademik" class="form-control" value="<?php echo $sis->tahun_akademik ?>">
            <?php echo form_error('tahun_akademik', '<div class="text-danger small" ml-3> ', '</div>') ?>
        </div>

        <!-- <div class="form-group">
            <?php foreach ($detail as $dt) : ?>
                <img src="<?php echo base_url() . 'bootstrap4/uploads/' . $sis->photo ?>">
            <?php endforeach; ?><br><br>
            <label>Foto</label><br>
            <input type="file" name="userfile" value="<?php echo $sis->photo ?>">
        </div> -->

        <button type="submit" class="btn btn-primary mb-4 mt-3">Simpan</button>

        <?php form_close(); ?>
    <?php endforeach; ?>
</div>