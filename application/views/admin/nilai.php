<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i></i> Daftar Jadwal Pelajaran
    </div>

    <center class="mb-4">
        <legend class="mt-3"><strong>DATA NILAI PELAJARAN SISWA</strong></legend>

        <table>

            <tr>
                <td><strong>NIS</strong></td>
                <td>&nbsp;: <?php echo $sis_nis ?></td>
            </tr>

            <tr>
                <td><strong>Nama Lengkap</strong></td>
                <td>&nbsp;: <?php echo $sis_nama ?></td>
            </tr>

            <tr>
                <td><strong>Jurusan</strong></td>
                <td>&nbsp;: <?php echo $sis_jurusan ?></td>
            </tr>

            <tr>
                <td><strong>Tahun Akademik</strong></td>
                <td>&nbsp;: <?php echo $thn_akademik ?></td>
            </tr>

            <tr>
                <td><strong>Semester</strong></td>
                <td>&nbsp;: <?php echo $semester ?></td>
            </tr>

        </table>

    </center>

    <!-- <?php echo anchor('admin/jadwal/tambah_nilai/' . $nis . '/' . $id_thn_akademik, '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Pelajaran</button>') ?> -->
    <?php echo anchor('admin/jadwal/print', '<button class="btn btn-sm btn-info mb-3"><i class="fas fa-plus fa-sm"></i> Print</button>') ?>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>KODE MATA PELAJARAN</th>
            <th>NAMA MATA PELAJARAN</th>
            <th>SKOR</th>
            <th>NILAI</th>
            <!-- <th>HARI</th>
            <th>JAM</th> -->
            <!-- <th colspan="2">AKSI</th> -->
        </tr>

        <?php $no = 1;
        $jumlahNilai = 0;
        foreach ($sis_data as $row) : ?>

            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $row->kode_mapel; ?></td>
                <td><?php echo $row->nama_mapel; ?></td>
                <td><?php echo $row->skor; ?></td>
                <td><?php echo skorNilai($row->skor, $row->skor) ?></td>
                <?php
                $jumlahNilai += skorNilai($row->skor, $row->skor);
                ?>

                <!-- <td width="20px"><?php echo anchor('admin/jadwal/update/' . $row->kode_mapel, '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>') ?>
                </td>
                <td width="20px"><?php echo anchor('admin/jadwal/delete/' . $row->kode_mapel, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>') ?>
                </td> -->
            </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="3">Jumlah Nilai</td>
            <td><?php echo $jumlahNilai ?></td>
        </tr>

    </table>

</div>