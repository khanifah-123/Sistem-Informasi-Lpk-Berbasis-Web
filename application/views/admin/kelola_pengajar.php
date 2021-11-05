<section class="content-header">
    <h1>
        Belum tau

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Kelola Pengajar</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3>DATA SISWA</h3>
            <?php echo $this->session->flashdata('pesan') ?>
            <?php echo anchor('admin/pengajar/', '<button class="btn 
        btn-warning mb-2 pull-right"></i> Back</button>')
            ?>
        </div>
    </div>
    <div class="box">
        <div class="box-body">

            <table id="example1" class="table table-striped table-hover table-bordered">

                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>NAMA lengkap</th>
                        <th>Ruangan</th>
                        <th>Aksi</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pengajar as $sw) : ?>
                        <tr>
                            <td width="20px"><?php echo $no++ ?></td>
                            <td><?php echo $sw->id_pengajar ?></td>
                            <td><?php echo $sw->nama_pengajar ?></td>

                            <td><?php
                                if ($sw->kd_ruangan == null) {
                                    echo anchor(
                                        'admin/pengajar/tambah_ruangan/'
                                            . $sw->id_pengajar,
                                        '<div class="btn btn-sm btn-info"><i class="fa fa-plus"></i></div>'
                                    );
                                } else {
                                    echo $sw->kd_ruangan;
                                }
                                ?>

                            </td>
                            <td>
                                <a href="<?php echo site_url(
                                                'admin/pengajar/update_ruang/'
                                                    . $sw->id_pengajar
                                            ); ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



</section>