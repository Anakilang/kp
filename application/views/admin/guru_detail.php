<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fa fa-eye"></i> Detail Guru
    </div>

    <table class="table table hover table-bordered table-striped">

        <?php foreach ($detail as $dt) : ?>

            <img class="mb-4" src="<?php echo base_url('bootstrap4/uploads/') . $dt->photo ?>" style="width: 25%">

            <tr>
                <td>nign</td>
                <td><?php echo $dt->nign; ?></td>
            </tr>

            <tr>
                <td>Nama Guru</td>
                <td><?php echo $dt->nama_guru; ?></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $dt->jenis_kelamin; ?></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><?php echo $dt->alamat; ?></td>
            </tr>

            <tr>
                <td>No Telepon</td>
                <td><?php echo $dt->telepon; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

    <?php echo anchor('admin/guru', '<div class="btn btn-sm btn-primary">Kembali</div>') ?> <br><br><br><br>

</div>