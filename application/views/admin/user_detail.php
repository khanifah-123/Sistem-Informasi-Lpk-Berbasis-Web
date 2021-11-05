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

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">AKTIVASI AKUN</h3>
                </div>
                <div class="content">
                    <?php foreach ($user as $use) : ?>
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/pendaftar/update_user') ?>">
                            <div class="form-group">
                                <label>username</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $use->id ?>">
                                <input type="text" name="username" class="form-control" value="<?php echo $use->username ?>">
                            </div>
                            <div class="form-group">
                                <label>Alamat email </label>
                                <input type="text" name="alamat_email" class="form-control" value="<?php echo $use->alamat_email ?>">

                            </div>
                            <div class="form-group">
                                <label>status </label>
                                <select type="text" name="status" class="form-control" value="<?php echo $use->status ?>">
                                    <option>0</option>
                                    <option>1</option>
                                </select>
                            </div>
                            <button type=" submit" class="btn btn-primary ">Save</button>
                        </form>

                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>
</section>