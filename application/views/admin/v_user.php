<section class="content-header">
    <h1>
        Data Pengguna

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Pengguna</li>
    </ol>
</section>
<section class="content">
    <div id="flash" data-flash="<?= $this->session->flashdata('pesan'); ?>">

    </div>
    <div class="box">
        <div class="box-header">
            <h3> Data Users</h3>
            <?php echo anchor('admin/user/tambah_user', '<button class="btn btn-sm 
        btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data User</button>') ?>

        </div>
    </div>
    <!-- /.box-header -->
    <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>LEVEL</th>
                        <th>AKSI</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $usr) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $usr->username ?></td>
                            <td><?php echo $usr->alamat_email ?></td>
                            <td><?php echo $usr->level ?></td>
                            <td class="center" width="100px">
                                <a href="<?php echo site_url(
                                                'admin/user/update/'
                                                    . $usr->id
                                            ); ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>
                                </a>
                                <a href="<?php echo site_url('admin/user/delete/' . $usr->id); ?>" id="btn-hapus" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
                                    <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</section>