<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Informasi LPK
    </div>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>Materi</th>
            <th>Modul</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($modul as $mod) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mod['materi'] ?></td>
                <td><?php echo $mod['modul'] ?></td>
                <td><?php echo $mod['keterangan'] ?></td>
                <td><a href="<?php echo base_url(); ?>siswa/modul/download/<?php echo $mod['id_modul']; ?>">Download</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>