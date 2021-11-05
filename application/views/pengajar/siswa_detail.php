<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail siswa
    </div>


    <table class="table table-striped table-hover table-bordered">
        <?php foreach ($detail as $dt) : ?>
            <img class="mb-5 border rounded-rectangle" width="200px" height="200px" style="display: block; margin: auto;" src="<?php echo base_url('assets/uploads/') . $dt->pas_foto ?> " style="width:150px">
            <tr>
                <th>NIS</th>
                <td><?php echo $dt->id_siswa; ?></td>
            </tr>
            <tr>
                <th>NAMA</th>
                <td><?php echo $dt->nama_siswa; ?></td>
            </tr>
            <tr>
                <th>ALAMAT</th>
                <td><?php echo $dt->alamat_lengkap; ?></td>
            </tr>
            <tr>
                <th>TEMPAT TANGGAL LAHIR</th>
                <td><?php echo $dt->tempat_lahir, ", ", $dt->tanggal_lahir; ?></td>
            </tr>
            <tr>
                <th>JENIS KELAMIN</th>
                <td><?php echo $dt->jenis_kelamin; ?></td>
            </tr>
            <tr>
                <th>AGAMA</th>
                <td><?php echo $dt->agama; ?></td>
            </tr>
            <tr>
                <th>STATUS</th>
                <td><?php echo $dt->status; ?></td>
            </tr>
            <tr>
                <th>NO KTP</th>
                <td><?php echo $dt->no_ktp; ?></td>
            </tr>
            <tr>
                <th>NO HP</th>
                <td><?php echo $dt->no_hp; ?></td>
            </tr>
            <tr>
                <th>EMAIL</th>
                <td><?php echo $dt->alamat_email; ?></td>
            </tr>
            <tr>
                <th>NAMA AYAH</th>
                <td><?php echo $dt->nama_ayah; ?></td>
            </tr>
            <tr>
                <th>NAMA IBU</th>
                <td><?php echo $dt->nama_ibu; ?></td>
            </tr>
            <tr>
                <th>JUMLAH SAUDARA</th>
                <td><?php echo $dt->jumlah_saudara; ?></td>
            </tr>
            <tr>
                <th>PILIHAN PEKERJAAN</th>
                <td><?php echo $dt->pilihan_pekerjaan; ?></td>
            </tr>
            <tr>
                <th>TINGGI BADAN</th>
                <td><?php echo $dt->tinggi_badan; ?></td>
            </tr>
            <tr>
                <th>BERAT BADAN</th>
                <td><?php echo $dt->berat_badan; ?></td>

            </tr>
        <?php endforeach; ?>
    </table>

    <?php echo anchor('pengajar/siswa', '<div class="btn btn-sm btn-primary pull-right">Kembali</div>
') ?><br>
</div>