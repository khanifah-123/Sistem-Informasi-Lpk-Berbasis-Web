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
            <h3> Data Pembayaran</h3>
            <?php echo anchor('admin/bayar', '<button class="btn 
        btn-warning mb-2 pull-right"></i> Back</button>')
            ?>
        </div>
    </div>
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>TANGGAL BAYAR</th>
                        <th>NOMINAL</th>
                        <th>PENERIMA</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    if (is_array($detail) || is_object($detail)) {
                        foreach ($detail as $byr) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $byr->id_siswa ?></td>

                                <td><?php echo $byr->tanggal_byar ?></td>
                                <td><?php echo rupiah($byr->nominal) ?></td>
                                <td><?php echo $byr->penerima ?></td>

                                <td class="center" width="100px">
                                    <a href="<?php echo site_url(
                                                    'admin/bayar/print/'
                                                        . $byr->id_siswa
                                                ); ?>" class="btn btn-sm btn-info"><i class="fa fa-print"></i>
                                    </a>
                                    <a href="<?php echo site_url('admin/bayar/delete/' . $byr->id_bayar); ?>" id="btn-hapus" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
                                        <i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php endforeach;
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

</section>