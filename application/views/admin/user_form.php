<section class="content-header">
    <h1>
        FORM USER

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">FORM TAMBAH USER</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action=" <?php echo base_url('admin/user/tambah_user_aksi') ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="username" class="form-control">
                            <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label> Password </label>
                            <input type="text" name="password" class="form-control">
                            <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label> Email </label>
                            <input type="email" name="alamat_email" class="form-control">
                            <?php echo form_error('alamat_email', '<div class="text-danger small ml-3">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Level </label>
                            <select name="level" class="form-control">
                                <?php
                                if ($level == "admin") {
                                ?>
                                    <option value="admin" selected>Admin</option>
                                    <option value="siswa">Siswa</option>
                                    <option value="pendaftar">Pengajar</option>
                                    <option value="pendaftar">Pendaftar</option>

                                <?php
                                } elseif ($level == 'siswa') {

                                ?>
                                    <option value="admin">Admin</option>
                                    <option value="siswa" selected>Siswa</option>
                                    <option value="pengajar">Pengajar</option>
                                    <option value="pendaftar">Pendaftar</option>

                                <?php
                                } elseif ($level == 'pengajar') {

                                ?>
                                    <option value="admin">Admin</option>
                                    <option value="siswa">Siswa</option>
                                    <option value="pengajar" selected>Pengajar</option>
                                    <option value="pendaftar">Pendaftar</option>
                                <?php
                                } elseif ($level == 'pendaftar') {

                                ?>
                                    <option value="admin">Admin</option>
                                    <option value="siswa">Siswa</option>
                                    <option value="pengajar">Pengajar</option>
                                    <option value="pendaftar" selected>Pendaftar</option>
                                <?php

                                } else { ?>
                                    <option value="admin">Admin</option>
                                    <option value="siswa">Siswa</option>
                                    <option value="pengajar">Pengajar</option>
                                    <option value="pendaftar">Pendaftar</option>
                                <?php } ?>
                            </select>
                            <?php echo form_error('level', 'div class="text-danger small" ml-3>') ?>
                        </div>
                        <button type="reset" class="btn btn-sm btn-primary ">Reset</button>
                        <button type="submit" class="btn btn-sm btn-primary ">Save</button>
                        <div class="box-footer">
                            <?php echo anchor('admin/user', '<div class="btn btn-sm btn-warning pull-right">Back</div>') ?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>