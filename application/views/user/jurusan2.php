<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Jurusan
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>KODE JURUSAN</th>
            <th>NAMA JURUSAN</th>
        </tr>

        <?php $no = 1;
        foreach ($jurusan2 as $jrs) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $jrs->kode_jurusan ?></td>
                <td><?php echo $jrs->nama_jurusan ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>