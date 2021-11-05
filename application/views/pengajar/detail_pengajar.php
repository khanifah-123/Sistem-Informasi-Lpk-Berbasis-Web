<div class="container-fluid">
    <div class="alert alert-grey" role="alert">
        <i class="fas fa-eye"></i> Detail Pengajar
    </div>


    <table class="table table-striped table-hover table-bordered">
        <?php
        foreach ($detail as $dt) : ?>
            <img class="mb-5 border rounded-rectangle" width="200px" height="200px" style="display: block; margin: auto;" src="<?php echo base_url('assets/uploads/') . $dt->foto ?> " style="width:150px">
            <tr>
                <th>ID Pengajar</th>
                <td><?php echo $dt->id_pengajar; ?></td>
            </tr>
            <tr>
                <th>NAMA</th>
                <td><?php echo $dt->nama_pengajar; ?></td>
            </tr>
            <? foreach ($detail as $of) : ?><tr>
                    <th>MENGAJAR DI DI KELAS</th>
                    <td><?php echo $dt->nama_ruangan; ?></td>
                </tr>
            <? endforeach; ?>
            <tr>
                <th>ALAMAT</th>
                <td><?php echo $dt->alamat_pengajar; ?></td>
            </tr>
            <tr>
                <th>JENIS KELAMIN</th>
                <td><?php echo $dt->tanggal_lahir; ?></td>
            </tr>
            <tr>
                <th>NO HP</th>
                <td><?php echo $dt->no_hp; ?></td>
            </tr>
            <tr>
                <th>EMAIL</th>
                <td><?php echo $dt->alamat_email; ?></td>
            </tr>

        <?php
        endforeach;
        ?>
    </table>
    <?php echo anchor('pengajar/dashboard', '<div class="btn btn-sm btn-primary pull-right">Kembali</div>
') ?><br>
</div>