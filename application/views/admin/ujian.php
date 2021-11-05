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
    <div class="box">
        <div class="box-header">
            <?php echo $this->session->flashdata('pesan') ?>
            <h3> Data Ujian</h3>

        </div>
    </div>
    <!-- /.box-header -->
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-hover table-striped" id="example1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA UJIAN</th>
                        <th>KODE RUANGAN</th>
                        <th>TANGGAL</th>
                        <th>AKSI</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($ujian as $uji) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $uji->nama_ujian ?></td>
                            <td><?php echo $uji->nama_ruangan ?></td>
                            <td><?php echo $uji->tanggal ?></td>

                            <td class="center" width="30px">

                                <a href="<?php echo site_url('admin/ujian/delete/' . $uji->id_ujian); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data  ?');" class="btn btn-danger data-popup=" tooltip data-placement="top" title="Hapus Data">
                                    <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</section>