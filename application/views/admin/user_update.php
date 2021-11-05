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
        <div class="col-md-4 col-md-offset-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">FORM EDIT DATA USER</h3>
                </div>
                <?php foreach ($user as $usr) : ?>
                    <form role="form" method="post" action="<?php echo base_url('admin/user/update_aksi') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $usr->id ?>">
                            </div>
                            <div class="form-group">
                                <label>username </label>
                                <input type="username" name="username" class="form-control" value="<?php echo $usr->username ?>">
                            </div>
                            <div class="form-group">
                                <label>Password </label>
                                <input type="password" name="password" class="form-control" value="<?php echo $usr->password ?>">
                            </div>
                            <div class="form-group">
                                <label>Email </label>
                                <input type="email" name="alamat_email" class="form-control" value="<?php echo $usr->alamat_email ?>">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <input type="text" name="level" class="form-control" value="<?php echo $usr->level ?>">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option><?php echo $usr->status ?></option>
                                    <option>0</option>
                                    <option>1</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary ">Save</button>
                        </div>
                    </form>
                <?php endforeach; ?>
                <div class="box-footer">
                    <?php echo anchor('admin/user', '<div class="btn btn-warning pull-right">Back</div>') ?>
                </div>
            </div>
        </div>
    </div>

</section>