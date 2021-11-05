<section class="content-header">
    <h1>
        Belum tau

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
            <h3>DATA SISWA</h3>

            <?php echo anchor('admin/dashboard', '<button class="btn btn-sm 
        btn-warning mb-3 pull-right"><i class="fa fa-setting fa-sm"></i>Back</button>')
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

                            <td><?php echo $sw->kd_ruangan ?>

                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



</section>