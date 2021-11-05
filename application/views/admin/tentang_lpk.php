<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Tentang LPK
    </div>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>SEJARAH</th>
            <th>VISI</th>
            <th>MISI</th>
            <th>AKSI</th>

        </tr>

        <?php
        $no = 1;
        foreach ($tentang_lpk as $ttg) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ttg->sejarah ?></td>
                <td><?php echo $ttg->visi ?></td>
                <td><?php echo $ttg->misi ?></td>
                <td width="20px"><?php echo anchor(
                                        'admin/tentang_lpk/update/'
                                            . $ttg->id,
                                        '<div class="btn btn-sm btn-info"><i class="fa fa-edit"></i></div>'
                                    ) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>