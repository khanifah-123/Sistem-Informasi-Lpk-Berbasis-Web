<section class="content-header">
    <h1>
        DATA IDENTITAS
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pendaftar</a></li>
        <li class="active">Detail</li>
    </ol>
</section>
<section class="content">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">FORM DETAIL PENDAFTAR</h3>
                    </div>
                    <div class="content">
                        <?php foreach ($pendaftar as $sw) : ?>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/pendaftar/tambah_pendaftar_aksi') ?>">
                                <div class="box-body">
                                    <div class="form-group">
                                        <img class="mb-4 border " width="30%" height="30%" style="display: block; margin: auto;" src="<?php echo base_url('assets/uploads/') . $sw->pas_foto ?> " style="width:150px">
                                        <input type="hidden" name="pas_foto" class="form-control" value="<?php echo $sw->pas_foto ?>">
                                        <input type="hidden" id="old" name="old" value="<?php echo $sw->pas_foto   ?>">

                                        <?php echo form_error('pas_foto', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div></br>

                                    <div class="form-group">
                                        <label> NIS </label>
                                        <input type="text" name="id_siswa" class="form-control" value="<?php echo $id_siswa; ?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label> No Registrasi</label>
                                        <input type="text" name="no_registrasi" class="form-control" value="<?php echo $sw->no_registrasi ?>" readonly="readonly">

                                    </div>
                                    <div class=" form-group">

                                        <input type="hidden" name="level" value="pendaftar">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_siswa" value="<?php echo $sw->nama_siswa ?>">
                                        <?php echo form_error('nama_siswa', '<div class="text-danger small ml-3">', '</div>') ?>
                                        <input type="hidden" name="id" value="<?php echo $sw->id; ?>">
                                        <input type="hidden" name="id_berkas" value="<?php echo $sw->id_berkas; ?>">

                                    </div>
                                    <div class=" form-group">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" value="<?php echo $sw->username ?>">
                                        <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class=" form-group">
                                        <label class="form-label">Password</label>
                                        <input type="text" class="form-control" name="password" value="<?php echo $sw->password ?>">
                                        <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label> Nama Lengkap </label>

                                        <input type="text" name="nama_siswa" class="form-control" value="<?php echo $sw->nama_siswa ?>">
                                        <?php echo form_error('nama_siswa', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class=" form-group">
                                        <label> Alamat </label>
                                        <input type="text" name="alamat_lengkap" class="form-control" value="<?php echo $sw->alamat_lengkap ?>">
                                        <?php echo form_error('alamat_lengkap', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Tempat Lahir </label>
                                        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $sw->tempat_lahir ?>">
                                        <?php echo form_error('tempat_lahir', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Tanggal Lahir </label>
                                        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $sw->tanggal_lahir ?>">
                                        <?php echo form_error('tanggal_lahir', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Jenis Kelamin </label>
                                        <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $sw->jenis_kelamin ?>">


                                        <?php echo form_error('jenis_kelamin', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Agama </label>
                                        <input type="text" name="agama" class="form-control" value="<?php echo $sw->agama ?>">
                                        <?php echo form_error('agama', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Status </label>
                                        <input type="text" name="status" class="form-control" value="<?php echo $sw->status ?>">

                                        <?php echo form_error('status', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> No KTP </label>
                                        <input type="text" name="no_ktp" class="form-control" value="<?php echo $sw->no_ktp ?>">
                                        <?php echo form_error('no_ktp', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> No HP/WA </label>
                                        <input type="text" name="no_hp" class="form-control" value="<?php echo $sw->no_hp ?>">
                                        <?php echo form_error('no_hp', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Email </label>
                                        <input type="text" name="alamat_email" class="form-control" value="<?php echo $sw->alamat_email ?>">
                                        <?php echo form_error('alamat_email', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Nama Ayah </label>
                                        <input type="text" name="nama_ayah" class="form-control" value="<?php echo $sw->nama_ayah ?>">
                                        <?php echo form_error('nama_ayah', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Nama Ibu </label>
                                        <input type="text" name="nama_ibu" class="form-control" value="<?php echo $sw->nama_ibu ?>">
                                        <?php echo form_error('nama_ibu', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Jumlah Saudara </label>
                                        <input type="text" name="jumlah_saudara" class="form-control" value="<?php echo $sw->jumlah_saudara ?>">
                                        <?php echo form_error('jumlah_saudara', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Pilihan Pekerjaan </label>
                                        <input type="text" name="pilihan_pekerjaan" class="form-control" value="<?php echo $sw->pilihan_pekerjaan ?>">
                                        <?php echo form_error('pilihan_pekerjaan', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Tinggi Badan </label>
                                        <input type="text" name="tinggi_badan" class="form-control" value="<?php echo $sw->tinggi_badan ?>">
                                        <?php echo form_error('tinggi_badan', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label> Berat Badan </label>
                                        <input type="text" name="berat_badan" class="form-control" value="<?php echo $sw->berat_badan ?>">
                                        <?php echo form_error('berat_badan', '<div class="text-danger small ml-3">', '</div>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right mb-5 mt-3">Tambahkan ke siswa</button>
                                </div>
                            </form>
                            <div class="box-footer"> </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>