<section class="content-header">
    <h1>
        Form Pengajar

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
                        <h3 class="box-title">FORM</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data" action=" <?php echo base_url('admin/pengajar/tambah_pengajar_aksi') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label> ID Pengajar </label>
                                <input type="text" name="id_pengajar" class="form-control" value="<?php echo $id_pengajar; ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label> Nama Lengkap </label>
                                <input type="hidden" name="level" value="pengajar">
                                <input type="hidden" name="status" value="1">
                                <input type="text" name="nama_pengajar" class="form-control">
                                <?php echo form_error('nama_pengajar', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Username </label>
                                <input type="text" name="username" class="form-control">
                                <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Password</label>
                                <input type="text" name="password" class="form-control">
                                <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label> No Telepon/WA </label>
                                <input type="text" name="no_hp" class="form-control">
                                <?php echo form_error('no_hp', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                                <?php echo form_error('tanggal_lahir', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Email </label>
                                <input type="text" name="alamat_email" class="form-control">
                                <?php echo form_error('alamat_email', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Alamat </label>
                                <input type="text" name="alamat_pengajar" class="form-control">
                                <?php echo form_error('alamat_pengajar', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Foto</label><br>
                                <input type="file" name="foto">
                            </div>
                            <button type="reset" class="btn btn-sm btn-primary ">RESET</button>
                            <button type="submit" class="btn btn-sm btn-info ">SUBMIT</button>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">

                            <?php echo anchor('admin/pengajar', '<div class="btn btn-sm btn-danger pull-right">BATAL</div>') ?>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>