<section class="content-header">
    <h1>
        Form Ruangan

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Ruangan</a></li>
        <li class="active">Tambah</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">FORM TAMBAH RUANGAN</h3>
                </div>

                <?php foreach ($siswa as $sw) : ?>
                    <form role="form" method="post" action=" <?php echo base_url('admin/siswa/tambah_ruangansiswa_aksi') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label>NIS </label>
                                <input type="text" name="id_siswa" class="form-control" value="<?php echo $sw->id_siswa ?> " readonly="readonly">

                            </div>
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" name="nama_siswa" class="form-control" value="<?php echo $sw->nama_siswa ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label>Kode Ruangan</label>
                                <select name="kd_ruangan" class="form-control">
                                    <option value="">- pilih -</option>
                                    <?php foreach ($ruangan as $ruang) : ?>
                                        <option value="<?php echo $ruang->kd_ruangan ?>"><?= $ruang->nama_ruangan ?></option>
                                    <?php endforeach; ?>
                                </select>


                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</section>