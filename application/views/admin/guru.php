<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Data Guru
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('admin/guru/tambah_guru', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Guru</button>') ?>


    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO</th>
            <th>NIGN</th>
            <th>NAMA GURU</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php

        $no = 1;
        foreach ($guru as $gur) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $gur->nign ?></td>
                <td><?php echo $gur->nama_guru ?></td>
                <td><?php echo $gur->jenis_kelamin ?></td>
                <td><?php echo $gur->alamat ?></td>
                <td width="20px"><?php echo anchor('admin/guru/detail/' . $gur->id_guru, '<div class="btn btn-info"><i class="fa fa-eye"></i></div>') ?> </td>
                <td width="20px"><?php echo anchor('admin/guru/update/' . $gur->id_guru, '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>') ?> </td>
                <td width="20px"><?php echo anchor('admin/guru/delete/' . $gur->id_guru, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>') ?> </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>