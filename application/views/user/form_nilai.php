<?php

$nilai = get_instance();
$nilai->load->model('pelajaran_model');
$nilai->load->model('tahunakademik_model');
?>

<div class="container-fluid">

    <?php

    if ($list_nilai == null) {
        $thn        = $nilai->tahunakademik_model->get_by_id($id_thn_akademik);
        $semester   = $thn->semester;


    ?>

        <div class="alert alert-danger">
            <strong>Maaf</strong>, Kode Mata Kuliah yang anda masukkan <strong> TIDAK TERDAFTAR! </strong> di tahun ajaran <?php echo $thn->tahun_akademik . " (" . $thn->semester . ")"; ?>
        </div>

        <?php echo anchor('admin/nilai/input_nilai', '<div class ="btn btn-sm btn-primary">Kembali</div>') ?>
</div>


<?php
    } else {

?>

    <center>

        <legend><strong>MASUKKAN NILAI AKHIR</strong></legend>

        <table>

            <tr>
                <td>Kode Mata Pelajaran</td>
                <td>: <?php echo $kode_mapel; ?></td>
            </tr>

            <tr>
                <td>Nama Mata Pelajaran</td>
                <td>: <?php echo $nilai->pelajaran_model->get_by_id($kode_mapel)->nama_mapel; ?></td>
            </tr>

            <?php

            $thn        = $nilai->tahunakademik_model->get_by_id($id_thn_akademik);
            $semester   = $thn->semester;

            ?>

            <tr>
                <td>
                    Tahun Akademik
                <td>: <?php echo $thn->tahun_akademik ?></td>
                </td>
            </tr>

            <tr>
                <td>
                    Semester
                <td>: <?php echo $thn->semester ?></td>
                </td>
            </tr>

        </table>
    </center>

    <form method="post" action="<?php echo base_url('admin/nilai/simpan_nilai'); ?>">

        <table class="table table-striped table-hover table-bordered" mt-4>
            <tr>
                <td>NO</td>
                <td>NIS</td>
                <td>Nama Siswa</td>
                <td>Skor</td>
            </tr>

            <?php
            $no = 1;
            foreach ($list_nilai as $row) : ?>
                <tr>
                    <td width="50px"><?php echo $no++ ?></td>
                    <td><?php echo $row->nis; ?></td>
                    <td><?php echo $row->nama_lengkap; ?></td>
                    <td width="80px"><input type="text" name="nilai[]" class="form-control" value="<?php echo $row->skor; ?>"></td>
                </tr>

            <?php endforeach; ?>
        </table>

        <button type="submit" class="btn btn-primary">Simpan</button>

    </form>

<?php } ?>


</div>