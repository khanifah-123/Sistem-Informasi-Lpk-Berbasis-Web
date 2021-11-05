<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Nilai Siswa
    </div>
    <?php echo $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>Nama Siswa</th>
            <th>Nama Ujian</th>
            <th>Nilai</th>
            <th>Aksi</th>

        </tr>

        <?php
        $no = 1;
        foreach ($nilai as $jo) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $jo['nama_siswa'] ?></td>
                <td><?php echo $jo['nama_ujian'] ?></td>
                <td><?php echo $jo['nilai'] ?></td>
                <td class="center" width="100px">
                    <a href="<?php echo site_url(
                                    'pengajar/nilai/update/'
                                        . $jo['id_nilai']
                                ); ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i>
                    </a>
                    <a href="<?php echo site_url('pengajar/nilai/delete/' . $jo['id_nilai']); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data?');" class="btn btn-danger btn-sm" data-popup="tooltip" data-placement="top" title="Hapus Data">
                        <i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>
</div>