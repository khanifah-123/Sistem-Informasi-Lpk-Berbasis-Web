<section class="content-header">
    <h1>
        Data Berkas Pendaftar

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pendaftar</a></li>
        <li class="active">Berkas</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3> Berkas</h3>
            <?php echo $this->session->flashdata('pesan') ?>
            <?php echo anchor('admin/pendaftar', '<button class="btn btn-sm 
        btn-warning pull-right"><i class="fa fa- fa-sm"></i> Back</button>')
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
                        <th>File KTP</th>
                        <th>File KK</th>
                        <th>File IJAZAH</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($berkas as $bks) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $bks->fc_ktp ?></br>
                                <a href="<?php echo base_url(); ?>admin/berkas/download_ktp/<?php echo $bks->id_berkas; ?>">Download</a>
                            </td>
                            <td><?php echo $bks->fc_kk ?></br>
                                <a href="<?php echo base_url(); ?>admin/berkas/download_ktp/<?php echo $bks->id_berkas; ?>">Download</a>
                            </td>
                            <td><?php echo $bks->fc_ijazah ?></br>
                                <a href="<?php echo base_url(); ?>admin/berkas/download_ijazah/<?php echo $bks->id_berkas; ?>">Download</a>
                            </td>
                            <td><?php echo $bks->bukti_pembayaran ?></br>
                                <a href="<?php echo base_url(); ?>admin/berkas/download_bp/<?php echo $bks->id_berkas; ?>">Download</a>
                            </td>

                        </tr>
                    <?php endforeach;
                    ?>
                </tbody>
            </table>

        </div>
    </div>

</section>