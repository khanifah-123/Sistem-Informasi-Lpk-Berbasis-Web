<section class="content-header">
    <h1>
        DATA IDENTITAS
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pengajar</a></li>
        <li class="active">Detail</li>
    </ol>
</section>
<section class="content">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">FORM DETAIL PENGAJAR</h3>
                    </div>
                    <div class="content">
                        <table class="table table-striped table-hover ">

                            <?php foreach ($detail as $dt) : ?>
                                <img class="mb-5 border rounded-rectangle" width="30%" height="40%" style="display: block; margin: auto;" src="<?php echo base_url('assets/uploads/') . $dt->foto ?> " style="width:150px">
                                </br>
                                <tr>
                                    <th>ID Pengajar</th>
                                    <td><?php echo $dt->id_pengajar; ?></td>
                                </tr>

                                <tr>
                                    <th>NAMA</th>
                                    <td><?php echo $dt->nama_pengajar; ?></td>
                                </tr>

                                <th>MENGAJAR DI RUANG</th>
                                <td><?php echo $dt->nama_ruangan; ?></td>
                                </tr>

                                <tr>
                                    <th>ALAMAT</th>
                                    <td><?php echo $dt->alamat_pengajar; ?></td>
                                </tr>
                                <tr>
                                    <th>TANGGAL LAHIR</th>
                                    <td><?php echo $dt->tanggal_lahir; ?></td>
                                </tr>
                                <tr>
                                    <th>NO HP</th>
                                    <td><?php echo $dt->no_hp; ?></td>
                                </tr>
                                <tr>
                                    <th>EMAIL</th>
                                    <td><?php echo $dt->alamat_email; ?></td>
                                </tr>

                            <?php endforeach; ?>

                        </table>
                    </div>
                    <div class="box-footer">
                        <?php echo anchor('admin/pengajar', '<div class="btn btn-sm btn-primary pull-right">Kembali</div>') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>