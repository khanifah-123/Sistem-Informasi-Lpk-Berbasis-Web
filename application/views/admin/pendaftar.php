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
    <div id="cancel" data-flash="<?= $this->session->flashdata('peringatan'); ?>">

    </div>
    <div class="box">
        <div class="box-header">
            <h3> Data Pendaftar</h3>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NO REGISTRASI</th>
                        <th>NAMA PENDAFTAR</th>
                        <th>ALAMAT</th>
                        <th>EMAIL</th>
                        <th>KETERANGAN</th>
                        <th>BERKAS</th>
                        <th>AKSI</th>
                        <th>AKTIVASI AKUN</th>
                        <th>KIRIM EMAIL</th>
                        <th>HAPUS</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($user as $pd) : ?>

                            <td><?php echo $no++ ?></td>
                            <td><?php echo $pd->no_registrasi ?></td>
                            <td><?php echo $pd->nama_siswa ?></td>
                            <td><?php echo $pd->alamat_lengkap ?></td>
                            <td><?php echo $pd->alamat_email ?></td>
                            <td><?php foreach ($siswa as $sw) :
                                    if ($pd->id === $sw->id) { ?>
                                    <?php echo "sudah diterima";
                                    } ?>
                                <?php endforeach; ?>
                            </td>

                            <td>
                                <a href="<?php echo site_url('admin/berkas/tampil/' . $pd->id_berkas); ?>" class="btn btn-primary btn-xs">
                                    Lihat</i></a>

                            </td>

                            <td><?php echo anchor(
                                    'admin/pendaftar/detail/'
                                        . $pd->no_registrasi,
                                    '<div class="badge badge-warning">terima</div>'
                                ) ?></td>

                            </td>
                            <td width="120px"><?php
                                                if ($pd->status == 0) {
                                                ?> <a href="<?php echo site_url('admin/pendaftar/detail_user/' . $pd->id); ?>" id="btn-aktif" class="btn btn-danger btn-xs">
                                        <i class="fa fa-check-square-o"></i> Active<a><?php
                                                                                    } else {
                                                                                        echo ('<div class="btn btn-success disabled btn-xs ">
                                                            <i class="fa fa-check-square-o"></i> Active</div>');
                                                                                    }
                                                                                        ?>

                            </td>

                            <td width="150px">
                                <a href="<?php echo site_url('admin/kirim_email/terima/' . $pd->no_registrasi); ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-paper-plane"> Terima</i></a>
                                <a href="<?php echo site_url('admin/kirim_email/tolak/' . $pd->no_registrasi); ?>" class="btn btn-danger btn-xs">
                                    <i class="fa fa-paper-plane"> Tolak</i></a>

                            </td>
                            <td>
                                <a href="<?php echo site_url('admin/pendaftar/delete/' . $pd->no_registrasi); ?>" id="btn-hapus" class="btn btn-danger btn-xs" data-popup="tooltip" data-placement="top" title="Hapus Data">
                                    <i class="fa fa-trash"></i> Hapus</a>
                            </td>

                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>

</section>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->