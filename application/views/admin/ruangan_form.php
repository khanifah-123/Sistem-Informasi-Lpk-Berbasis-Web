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
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">FORM TAMBAH RUANGAN</h3>
                    </div>

                    <form role="form" method="post" enctype="multipart/form-data" action=" <?php echo base_url('admin/ruangan/tambah_ruangan_aksi') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label> Kode Ruangan </label>
                                <input type="text" name="kd_ruangan" class="form-control" value="<?php echo $kd_ruangan; ?>" readonly="readonly">
                                <?php echo form_error('kd_ruangan', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label> Nama Ruangan </label><br>
                                <input type="text" name="nama_ruangan" class="form-control">
                                <?php echo form_error('nama_ruangan', '<div class="text-danger small ml-3">', '</div>') ?>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>