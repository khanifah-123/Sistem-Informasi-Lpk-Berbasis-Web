<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<div class="container-fluid">
    <div class="alert alert-grey" role="alert">
        <i class="fas fa-university"></i> Modul
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('pengajar/modul/tambah_modul', '<button class="btn btn-sm 
        btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Modul</button>')
    ?>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>Materi</th>
            <th>Modul</th>
            <th>Keterangan</th>
            <th colspan="2">AKSI</th>

        </tr>

        <?php
        $no = 1;
        foreach ($modul as $mod) : ?>
            <tr>

                <td><?php echo $no++ ?></td>
                <td><?php echo $mod['materi'] ?></td>
                <td><?php echo $mod['modul'] ?></td>
                <td><?php echo $mod['keterangan'] ?></td>
                <td width="20px"><?php echo anchor(
                                        'pengajar/modul/update/'
                                            . $mod['id_modul'],
                                        '<div class="btn btn-sm btn-info"><i class="fa fa-edit"></i></div>'
                                    ) ?></td>
                <td width="20px"> <a href="<?php echo site_url('pengajar/modul/delete/' . $mod['id_modul']); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data?');" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
                        <i class="fa fa-trash"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>