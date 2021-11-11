<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-book-open"></i> Daftar User
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('admin/users/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah User</button>') ?>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Username</th>
            <th>Level</th>
            <th>Blokir</th>
            <th class="text-center" colspan="3">AKSI</th>
        </tr>

        <?php
        $no = 1;

        foreach ($users as $user) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $user->username ?></td>
                <td><?php echo $user->level ?></td>
                <td><?php echo $user->blokir ?></td>
                <td width="20px"><?php echo anchor('admin/users/detail/' . $user->id, '<div class="btn btn-info"><i class="fa fa-eye"></i></div>') ?></td>
                <td width="20px"><?php echo anchor('admin/users/update/' . $user->id, '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>') ?>
                </td>
                <td width="20px"><?php echo anchor('admin/users/delete/' . $user->id, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>