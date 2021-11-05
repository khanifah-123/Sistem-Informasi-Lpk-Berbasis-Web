<section class="content-header">
    <h1>
        Belum tau

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Kelola Siswa</li>
    </ol>
</section>
<section class="content">
    <div id="flash" data-flash="<?= $this->session->flashdata('pesan'); ?>">

    </div>
    <div class="box">
        <div class="box-header">
            <h3>DATA SISWA</h3>
            <?php echo anchor('admin/siswa/', '<button class="btn 
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

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($siswa as $sw) : ?>
                        <tr>
                            <td width="20px"><?php echo $no++ ?></td>
                            <td><?php echo $sw->id_siswa ?></td>
                            <td><?php echo $sw->nama_siswa ?></td>

                            <td><?php
                                if ($sw->kd_ruangan == null) {
                                    echo anchor(
                                        'admin/siswa/tambah_ruangan/'
                                            . $sw->id_siswa,
                                        '<div class="btn btn-sm btn-info"><i class="fa fa-plus"></i></div>'
                                    );
                                } else {
                                    echo $sw->kd_ruangan;
                                }
                                ?>

                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



</section>