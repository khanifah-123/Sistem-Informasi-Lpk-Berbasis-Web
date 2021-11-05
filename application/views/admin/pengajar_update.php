<section class="content-header">
    <h1>
        DATA IDENTITAS
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>
<section class="content">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">FORM EDIT DATA PENGAJAR</h3>
                    </div>
                    <form role="form" method="post" enctype="multipart/form-data" action=" <?php echo base_url('admin/pengajar/update_aksi') ?>">
                        <div class="box-body">
                            <?php foreach ($pengajar as $pngjr) : ?>
                                <form role="form" method="post" action="<?php echo base_url('admin/pengajar/update_aksi') ?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <img class="mb-4 border " width="35%" height="35%" style="display: block; margin: auto;" src="<?php echo base_url('assets/uploads/') . $pngjr->foto ?> " style="width:150px">
                                            <input type="hidden" id="old" name="old" value="<?php echo  $pngjr->foto ?>">

                                            <input alignment="center" type="file" name="foto" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap </label>
                                            <input type="hidden" name="id_pengajar" class="form-control" value="<?php echo $pngjr->id_pengajar ?>">

                                            <input type="text" name="nama_pengajar" class="form-control" value="<?php echo $pngjr->nama_pengajar ?>">

                                        </div>
                                        <div class="form-group">
                                            <label>RUANG </label>
                                            <input type="text" name="kd_ruangan" class="form-control" value="<?php echo $pngjr->kd_ruangan ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat </label>
                                            <input type="text" name="alamat_pengajar" class="form-control" value="<?php echo $pngjr->alamat_pengajar ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email </label>
                                            <input type="text" name="alamat_email" class="form-control" value="<?php echo $pngjr->alamat_email ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir </label>
                                            <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $pngjr->tanggal_lahir ?>">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    <?php endforeach; ?>
                                    </div>
                                </form>
                                <div class="box-footer">
                                    <?php echo anchor('admin/pengajar', '<div class="btn btn-sm btn-primary pull-right">Kembali</div>') ?>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>