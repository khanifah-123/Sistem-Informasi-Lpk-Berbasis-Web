<div class="container-fluid">

    <div class="alert alert-grey" role="alert">
        <i class="fas fa-university"></i> siswa
    </div>


    <?php echo anchor('pengajar/siswa/kelola', '<button class="btn btn-sm 
        btn-danger mb-3"><i class="fas fa-plus fa-sm"></i> Kelola data siswa</button>')
    ?>



    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA lengkap</th>
            <th>ALAMAT</th>
            <th>TEMPAT, TANGGAL LAHIR</th>
            <th>AKSI</th>
        </tr>

        <?php
        $no = 1;

        foreach ($siswa as $sw) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $sw->id_siswa ?></td>
                <td><?php echo $sw->nama_siswa ?></td>
                <td><?php echo $sw->alamat_lengkap ?></td>
                <td><?php echo $sw->tempat_lahir, ', ', $sw->tanggal_lahir ?></td>
                <td><?php echo anchor(
                        'pengajar/siswa/detail/'
                            . $sw->id_siswa,
                        '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'
                    ) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>