<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> DAFTAR UJIAN
    </div>


    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>NAMA UJIAN</th>
            <th>TANGGAL</th>


        </tr>

        <?php
        $no = 1;
        foreach ($ujian as $uji) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $uji['nama_ujian'] ?></td>
                <td><?php echo $uji['tanggal'] ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>