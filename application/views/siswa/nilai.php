<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Ruang atau kelas LPK
    </div>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>Nama Siswa</th>
            <th>Nama Ujian</th>
            <th>Nilai</th>

        </tr>

        <?php
        $no = 1;
        foreach ($join_siswa as $jo) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $jo['nama_siswa'] ?></td>
                <td><?php echo $jo['nama_ujian'] ?></td>
                <td><?php echo $jo['nilai'] ?></td>

            </tr>
        <?php endforeach;
        ?>
    </table>
</div>