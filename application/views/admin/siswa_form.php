<section class="content-header">
    <h1>
        FORM SISWA

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Tambah</li>
    </ol>
</section>
<section class="content">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-9 ">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">FORM TAMBAH SISWA</h3>
                    </div>
                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/siswa/tambah_siswa_aksi') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label> NIS </label>
                                <input type="text" name="id_siswa" class="form-control" value="<?php echo $id_siswa; ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label> Nama Siswa </label>
                                <input type="text" name="nama_siswa" class="form-control">
                                <?php echo form_error('nama_siswa', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> No KTP </label>
                                <input type="text" name="no_ktp" class="form-control">
                                <?php echo form_error('no_ktp', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Alamat </label>
                                <input type="text" name="alamat_lengkap" class="form-control">
                                <?php echo form_error('alamat_lengkap', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Tempat Lahir </label>
                                <input type="text" name="tempat_lahir" class="form-control">
                                <?php echo form_error('tempat_lahir', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Tanggal Lahir </label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                                <?php echo form_error('tanggal_lahir', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Jenis Kelamin </label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">--- Pilih Jenis Kelamin </option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                <?php echo form_error('jenis_kelamin', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Agama </label>
                                <input type="text" name="agama" class="form-control">
                                <?php echo form_error('agama', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Status </label>
                                <select name="status" class="form-control">
                                    <option value="">--- Pilih status </option>
                                    <option>Belum Menikah</option>
                                    <option>Menikah</option>
                                </select>
                                <?php echo form_error('status', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label> No HP/WA </label>
                                <input type="text" name="no_hp" class="form-control">
                                <?php echo form_error('no_hp', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Email </label>
                                <input type="text" name="alamat_email" class="form-control">
                                <?php echo form_error('alamat_email', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Nama Ayah </label>
                                <input type="text" name="nama_ayah" class="form-control">
                                <?php echo form_error('nama_ayah', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Nama Ibu </label>
                                <input type="text" name="nama_ibu" class="form-control">
                                <?php echo form_error('nama_ibu', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Jumlah Saudara </label>
                                <input type="text" name="jumlah_saudara" class="form-control">
                                <?php echo form_error('jumlah_saudara', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Pilihan Pekerjaan </label>
                                <select name="pilihan_pekerjaan" class="form-control">
                                    <option value="">--- Pilih Jenis Pekerjaan </option>
                                    <option>Manufaktur</option>
                                    <option>Pertanian</option>
                                </select>
                                <?php echo form_error('pilihan_pekerjaan', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Tinggi Badan </label>
                                <input type="text" name="tinggi_badan" class="form-control">
                                <?php echo form_error('tinggi_badan', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Berat Badan </label>
                                <input type="text" name="berat_badan" class="form-control">
                                <?php echo form_error('berat_badan', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Scan KTP</label><br>
                                <input type="file" name="fc_ktp">
                            </div>
                            <div class="form-group">
                                <label>Scan KK</label><br>
                                <input type="file" name="fc_kk">
                            </div>
                            <div class="form-group">
                                <label>Scan Ijazah</label><br>
                                <input type="file" name="fc_ijazah">
                            </div>
                            <div class="form-group">
                                <label>Pas Foto</label><br>
                                <input type="file" name="pas_foto">
                            </div>
                            <button type="reset" class="btn btn-primary ">RESET</button>
                            <button type="submit" class="btn btn-info ">SUBMIT</button>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">

                            <?php echo anchor('admin/siswa', '<div class="btn btn-danger pull-right">BATAL</div>') ?>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>