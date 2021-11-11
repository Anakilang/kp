<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Mata Pelajaran
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>KODE PELAJARAN</th>
            <th>NAMA PELAJARAN</th>
            <th colspan="1">Aksi</th>
        </tr>

        <?php $no = 1;
        foreach ($pelajaran as $plj) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $plj->kode_mapel ?></td>
                <td><?php echo $plj->nama_mapel ?></td>
                <td width="20px"><?php echo anchor('user/pelajaran/detail/' . $plj->id_mapel, '<div class="btn btn-info"><i class="fa fa-eye"></i></div>') ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>