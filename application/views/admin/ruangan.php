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
            <h3> Data Pendaftar</h3>
            <?php echo anchor('admin/ruangan/tambah_ruangan', '<button class="btn btn-sm 
        btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data Ruangan</button>')
            ?>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Kode Ruangan</th>
                        <th>Nama Ruangan</th>

                        <th>AKSI</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($ruangan->result() as $key => $ruang) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $ruang->kd_ruangan ?></td>
                            <td><?php echo $ruang->nama_ruangan ?></td>

                            <td class="center" width="100px">
                                <a href="<?php echo site_url(
                                                'admin/ruangan/update/'
                                                    . $ruang->kd_ruangan
                                            ); ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>
                                </a>
                                <a href="<?php echo site_url('admin/ruangan/delete/' . $ruang->kd_ruangan); ?>" id="btn-hapus" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
                                    <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</section>