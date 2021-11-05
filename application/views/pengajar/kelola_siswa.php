<div class="container-fluid">

    <div class="alert alert-grey" role="alert">
        <i class="fas fa-university"></i> siswa
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('pengajar/siswa/', '<button class="btn btn-sm 
        btn-danger mb-2"></i> Kembali</button>')
    ?>
    <?php echo anchor('pengajar/nilai/', '<button class="btn btn-sm 
        btn-primary mb-2"></i> Lihat Daftar Nilai</button>')
    ?>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA lengkap</th>
            <th>INPUT NILAI </th>

        </tr>

        <?php
        $no = 1;
        foreach ($siswa as $sw) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $sw->id_siswa ?></td>
                <td><?php echo $sw->nama_siswa ?></td>
                <td width="150px">
                    <?php echo anchor(
                        'pengajar/siswa/tambah_nilai/'
                            . $sw->id_siswa,
                        '<div class="btn btn-sm btn-info"><i class="fa fa-plus"></i></div>'
                    ) ?>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>