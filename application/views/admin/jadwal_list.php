<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i></i> Daftar Jadwal Pelajaran
    </div>

    <center class="mb-4">
        <legend class="mt-3"><strong>JADWAL PELAJARAN SISWA</strong></legend>

        <table>

            <tr>
                <td><strong>NIS</strong></td>
                <td>&nbsp;: <?php echo $nis ?></td>
            </tr>
            <tr>
                <td><strong>Nama Lengkap</strong></td>
                <td>&nbsp;: <?php echo $nama_lengkap ?></td>
            </tr>

            <tr>
                <td><strong>Jurusan</strong></td>
                <td>&nbsp;: <?php echo $jurusan ?></td>
            </tr>

            <tr>
                <td><strong>Tahun Akademik (Semester)</strong></td>
                <td>&nbsp;: <?php echo $tahun_akademik ?></td>
            </tr>

            <tr>
                <td><strong>Semester</strong></td>
                <td>&nbsp;: <?php echo $semester ?></td>
            </tr>


        </table>

    </center>

    <?php echo anchor('admin/jadwal/tambah_jadwal/' . $nis . '/' . $id_thn_akademik, '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Pelajaran</button>') ?>
    <?php echo anchor('admin/jadwal/print', '<button class="btn btn-sm btn-info mb-3"><i class="fas fa-plus fa-sm"></i> Print</button>') ?>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>KODE MATA PELAJARAN</th>
            <th>NAMA MATA PELAJARAN</th>
            <!-- <th>HARI</th>
            <th>JAM</th> -->
            <th colspan="2">AKSI</th>
        </tr>

        <?php $no = 1;
        foreach ($jadwal_data as $jdwl) : ?>

            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $jdwl->kode_mapel; ?></td>
                <td><?php echo $jdwl->nama_mapel; ?></td>

                <td width="20px"><?php echo anchor('admin/jadwal/update/' . $jdwl->id_plj, '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>') ?>
                </td>
                <td width="20px"><?php echo anchor('admin/jadwal/delete/' . $jdwl->id_plj, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>') ?>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>
    <!-- <?php echo anchor('admin/jadwal/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?> <br><br><br><br> -->
</div>