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
        <?php foreach ($harga as $hrg) : ?>
            <form role="form" method="post" enctype="multipart/form-data" action=" <?php echo site_url('admin/bayar/tambah_nominal') ?>">
                <div class="box-body">
                    <div class="col-xs-3">
                        <label>Masukkan Nominal Harga</label>
                        <input type="hidden" name="id_harga" class="form-control" value="<?php echo $hrg->id_harga ?>">
                        <input type="text" class="form-control" value="<?php echo $hrg->harga ?>" name="harga">
                        </br>
                        <button type="submit" class="btn btn-sm btn-info ">OK</button>


                    </div>
                </div>

            </form>
            <div class="box-header">

                <h4>Jumlah yang harus dibayarkan siswa saat ini yaitu <?php echo rupiah($hrg->harga) ?></h4>
                <h3> Data Pembayaran</h3>
                <?php echo anchor('admin/bayar/tambah_b', '<button class="btn btn-sm 
        btn-primary mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data Pembayaran</button>')
                ?>

            </div>
    </div>
    <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>NAMA SISWA</th>
                        <th>KETERANGAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    if (is_array($join_siswa_bayar) || is_object($join_siswa_bayar)) {
                        foreach ($join_siswa_bayar as $byr) : ?>
                            <tr>
                                <td width="20px"><?php echo $no++ ?></td>
                                <td><?php echo $byr->id_siswa ?></td>
                                <td><?php echo $byr->nama_siswa ?></td>
                                <td><?php if ($byr->total == 0) {
                                    ?><p class="text-red">Belum Bayar</p>
                                    <?php
                                    } else if ($byr->total < $hrg->harga) {
                                        $data = $hrg->harga - $byr->total;
                                        echo "Kurang ", rupiah($data);
                                    } else {
                                    ?><p class="text-green">Lunas</p><?php
                                                                    } ?></td>
                                <td class=" center" width="200px">
                                    <a href="<?php echo site_url(
                                                    'admin/bayar/detail/'
                                                        . $byr->id_siswa
                                                ); ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"> Detail</i>
                                    </a>
                                    <a href="<?php echo site_url(
                                                    'admin/bayar/tambah_bayar/'
                                                        . $byr->id_siswa
                                                ); ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"> Tambah</i>
                                    </a>
                                </td>

                            </tr>

                    <?php endforeach;
                    }
                    ?>
                </tbody>
            </table>
        <?php endforeach; ?>
        </div>
    </div>
</section>