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

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">FORM EDIT RUANGAN</h3>
                </div>
                <?php foreach ($ruangan as $ruang) : ?>
                    <form method="post" action="<?php echo base_url('admin/ruangan/update_aksi') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Kode Ruangan </label>
                                <input type="text" name="kd_ruangan" class="form-control" value="<?php echo $ruang->kd_ruangan ?> " readonly="readonly">

                            </div>
                            <div class="form-group">
                                <label>Nama Ruangan </label>
                                <input type="text" name="nama_ruangan" class="form-control" value="<?php echo $ruang->nama_ruangan ?>">
                            </div>

                            <button type="submit" class="btn btn-primary ">Save</button>
                        </div>
                    </form>
                <?php endforeach; ?>
                <div class="box-footer">
                    <?php echo anchor('admin/ruangan', '<div class="btn  btn-warning pull-right">Back</div>') ?>
                </div>
            </div>
        </div>
    </div>
</section>