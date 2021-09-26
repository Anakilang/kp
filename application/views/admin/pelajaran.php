<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Mata Pelajaran
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('admin/pelajaran/tambah_pelajaran', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Pelajaran</button>') ?>


    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>KODE PELAJARAN</th>
            <th>NAMA PELAJARAN</th>
            <th>NAMA JURUSAN</th>
            <th>HARI</th>
            <th>JAM</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php $no = 1;
        foreach ($pelajaran as $plj) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $plj->kode_mapel ?></td>
                <td><?php echo $plj->nama_mapel ?></td>
                <td><?php echo $plj->nama_jurusan ?></td>
                <td><?php echo $plj->hari ?></td>
                <td><?php echo $plj->jam ?></td>
                <td width="20px"><?php echo anchor('admin/pelajaran/detail/' . $plj->id_mapel, '<div class="btn btn-info"><i class="fa fa-eye"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('admin/pelajaran/update/' . $plj->id_mapel, '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('admin/pelajaran/delete/' . $plj->id_mapel, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>