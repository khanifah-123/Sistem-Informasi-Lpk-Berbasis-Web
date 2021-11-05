<div class="container-fluid">
    <div class="alert alert-grey" role="alert">
        <i class="fas fa-university"></i> Daftar Ujian
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('pengajar/ujian/tambah_ujian', '<button class="btn btn-sm 
        btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Ujian</button>')
    ?>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>NAMA UJIAN</th>
            <th>TANGGAL</th>
            <th colspan="2">AKSI</th>

        </tr>

        <?php
        $no = 1;
        foreach ($ujian as $uji) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $uji->nama_ujian ?></td>
                <td><?php echo $uji->tanggal ?></td>

                <td width="30px"><?php echo anchor(
                                        'pengajar/ujian/update/'
                                            . $uji->id_ujian,
                                        '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                                    ) ?></td>
                <td width="30px">
                    <a href="<?php echo site_url('pengajar/ujian/delete/' . $uji->id_ujian); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data  ?');" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
                        <i class="fa fa-trash"></i></a>
                </td>
            <?php endforeach; ?>
    </table>
</div>