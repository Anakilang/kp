<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Detail Pelajaran
    </div>

    <table class="table table-hover table-striped table-bordered">

        <?php foreach ($detail as $dt) : ?>

            <tr>
                <td>Kode Mapel</td>
                <td><?php echo $dt->kode_mapel; ?></td>
            </tr>

            <tr>
                <td>Nama Mata Pelajaran</td>
                <td><?php echo $dt->nama_mapel; ?></td>
            </tr>

            <tr>
                <td>Nama Jurusan</td>
                <td><?php echo $dt->nama_jurusan; ?></td>
            </tr>

            <tr>
                <td>Nama Guru Pengajar</td>
                <td><?php echo $dt->nama_guru; ?></td>
            </tr>

            <tr>
                <td>Hari</td>
                <td><?php echo $dt->hari; ?></td>
            </tr>

            <tr>
                <td>Jam</td>
                <td><?php echo $dt->jam; ?></td>
            </tr>

            <tr>
                <td>Semester</td>
                <td><?php echo $dt->semester; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

    <?php echo anchor('admin/pelajaran', '<div class="btn btn-sm btn-primary">Kembali</div>') ?> <br>
    <br>
    <br>
    <br>

</div>