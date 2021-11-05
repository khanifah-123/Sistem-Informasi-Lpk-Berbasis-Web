<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<section class="content-header">
    <h1>
        Datatable

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Modul</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header">
            <?php echo $this->session->flashdata('pesan') ?>
            <h3>
                Data Modul
            </h3>

        </div>
    </div>

    <div class="box">

        <div class="box-body">
            <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Materi</th>
                        <th>Modul</th>
                        <th>Keterangan</th>
                        <th>AKSI</th>

                    </tr>
                </thead>

                <tbody> <?php
                        $no = 1;
                        foreach ($modul as $mod) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $mod->materi ?></td>
                            <td><?php echo $mod->modul ?></td>
                            <td><?php echo $mod->keterangan ?></td>
                            <td class="center" width="20px">
                                <a href="<?php echo site_url('admin/modul/delete/' . $mod->id_modul); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data?');" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
                                    <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
>