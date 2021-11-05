<section class="content-header">
    <h1>
        DATA IDENTITAS
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Siswa</a></li>
        <li class="active">Detail</li>
    </ol>
</section>
<section class="content">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-10 ">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">FORM DETAIL SISWA</h3>
                    </div>
                    <div class="content">
                        <table class="table table-striped table-hover ">
                            <div class="box-body">
                                <?php foreach ($detail as $dt) : ?>
                                    <img class="mb-5 border rounded-rectangle" width="30%" height="30%" style="display: block; margin: auto;" src="<?php echo base_url('assets/uploads/') . $dt->pas_foto ?> " style="width:150px">
                                    <tr></br>
                                        <th width="300px">NIS</th>
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
                            </div>
                        </table>

                        <div class="box-footer">
                            <?php echo anchor('admin/siswa', '<div class="btn  btn-primary pull-right">Back</div>') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>