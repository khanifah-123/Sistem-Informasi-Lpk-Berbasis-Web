<section class="content-header">
    <h1>
        Belum tau

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
            <h3> Data Pengajar</h3>
            <div>
                <?php echo anchor('admin/pengajar/tambah_pengajar', '<button class="btn btn-sm 
        btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data Pengajar</button>')
                ?>
                <?php echo anchor('admin/pengajar/kelola', '<button class="btn btn-sm 
        btn-warning mb-3"><i class="fa fa-setting fa-sm"></i> Kelola data Pengajar</button>')
                ?>
            </div>
        </div>
    </div>
    <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID Pengajar</th>
                        <th>NAMA LENGKAP</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($pengajar as $ajar) : ?>

                            <td width='10px'><?php echo $no++ ?></td>
                            <td><?php echo $ajar->id_pengajar ?></td>
                            <td><?php echo $ajar->nama_pengajar ?></td>
                            <td><?php echo $ajar->alamat_email ?></td>
                            <td><?php echo $ajar->alamat_pengajar ?></td>
                            <td class="center" width="150px">
                                <a href="<?php echo site_url(
                                                'admin/pengajar/detail/'
                                                    . $ajar->id_pengajar
                                            ); ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i>
                                </a>
                                <a href="<?php echo site_url(
                                                'admin/pengajar/update/'
                                                    . $ajar->id_pengajar
                                            ); ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>
                                </a>
                                <a href="<?php echo site_url('admin/pengajar/delete/' . $ajar->id_pengajar); ?>" id="btn-hapus" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
                                    <i class="fa fa-trash"></i></a>
                            </td>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>