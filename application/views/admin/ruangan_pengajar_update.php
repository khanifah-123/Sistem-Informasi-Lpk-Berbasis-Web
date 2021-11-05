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
                    <h3 class="box-title">FORM EDIT RUANGAN</h3>
                </div>

                <?php foreach ($pengajar as $ajar) : ?>
                    <form method="post" action=" <?php echo base_url('admin/pengajar/tambah_ruangan_aksi') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label>ID pengajar</label>
                                <input type="text" name="id_pengajar" class="form-control" value="<?php echo $ajar->id_pengajar ?> " readonly="readonly">

                            </div>
                            <div class="form-group">
                                <label>Nama Pengajar</label>
                                <input type="text" name="nama_pengajar" class="form-control" value="<?php echo $ajar->nama_pengajar ?>" readonly="readonly">
                            </div>

                            <div class="form-group">
                                <label>Kode Ruangan</label>
                                <select name="kd_ruangan" class="form-control" value="<?php echo $ajar->kd_ruangan ?>">
                                    <option value=""><?php echo $ajar->kd_ruangan ?></option>
                                    <?php foreach ($ruangan as $ruang) : ?>
                                        <option value="<?php echo $ruang->kd_ruangan ?>"><?= $ruang->kd_ruangan ?><?= " atau " ?><?= $ruang->nama_ruangan ?></option>
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