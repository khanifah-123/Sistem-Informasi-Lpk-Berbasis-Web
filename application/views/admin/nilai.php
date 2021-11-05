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
            <h3> Data Nilai Siswa</h3>

        </div>
    </div>
    <!-- /.box-header -->
    <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Siswa</th>
                        <th>Nama Ujian</th>
                        <th>Nilai</th>
                        <th>AKSI</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($join_3 as $jo) : ?>
                        <tr>
                            <td width='10px'><?php echo $no++ ?></td>
                            <td><?php echo $jo['nama_siswa'] ?></td>
                            <td><?php echo $jo['nama_ujian'] ?></td>
                            <td><?php echo $jo['nilai'] ?></td>
                            <td class="center" width="20px">

                                <a href="<?php echo site_url('admin/nilai/delete/' . $jo['id_nilai']); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data?');" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
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