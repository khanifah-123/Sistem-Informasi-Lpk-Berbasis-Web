<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Daftar Staff Pengajar
    </div>
    <div class="box-body no-padding">
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>NO</th>
                <th>NAMA SISWA</th>
                <th>TANGGAL BAYAR</th>
                <th>NOMINAL</th>
                <th>KETERANGAN</th>

            </tr>

            <?php
            $no = 1;
            foreach ($join_siswa_bayar as $byr) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $byr['nama_siswa'] ?></td>
                    <td><?php echo $byr['tanggal_byar'] ?></td>
                    <td><?php echo rupiah($byr['nominal']) ?></td>
                    <td><?php echo $byr['penerima'] ?></td>



                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </div>
</div>