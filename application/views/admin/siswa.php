<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Data Siswa
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('admin/siswa/tambah_siswa', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Siswa</button>') ?>


    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA LENGKAP</th>
            <th>JENIS KELAMIN</th>
            <!-- <th>JURUSAN</th> -->
            <th>EMAIL</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php

        $no = 1;
        foreach ($siswa as $sis) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $sis->nis ?></td>
                <td><?php echo $sis->nama_lengkap ?></td>
                <td><?php echo $sis->jenis_kelamin ?></td>
                <!-- <td><?php echo $sis->jurusan ?></td> -->
                <td><?php echo $sis->email ?></td>
                <td width="20px"><?php echo anchor('admin/siswa/detail/' . $sis->id, '<div class="btn btn-info"><i class="fa fa-eye"></i></div>') ?> </td>
                <td width="20px"><?php echo anchor('admin/siswa/update/' . $sis->id, '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>') ?> </td>
                <td width="20px"><?php echo anchor('admin/siswa/delete/' . $sis->id, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>') ?> </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>