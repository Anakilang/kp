<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fa fa-eye"></i> Detail Siswa
    </div>

    <table class="table table hover table-bordered table-striped">

        <?php foreach ($detail as $dt) : ?>

            <img class="mb-4" src="<?php echo base_url('bootstrap4/uploads/') . $dt->photo ?>" style="width: 25%">

            <tr>
                <td>NIS</td>
                <td><?php echo $dt->nis; ?></td>
            </tr>

            <tr>
                <td>Nama Lengkap</td>
                <td><?php echo $dt->nama_lengkap; ?></td>
            </tr>

            <tr>
                <td>Nama Jurusan</td>
                <td><?php echo $dt->nama_jurusan; ?></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $dt->jenis_kelamin; ?></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><?php echo $dt->email; ?></td>
            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo $dt->tempat_lahir; ?></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td><?php echo $dt->tanggal_lahir; ?></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><?php echo $dt->alamat; ?></td>
            </tr>

            <tr>
                <td>No Telepon</td>
                <td><?php echo $dt->telepon; ?></td>
            </tr>

            <tr>
                <td>Tahun Akademik</td>
                <td><?php echo $dt->tahun_akademik; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

    <?php echo anchor('admin/siswa', '<div class="btn btn-sm btn-primary">Kembali</div>') ?> <br><br><br><br>

</div>