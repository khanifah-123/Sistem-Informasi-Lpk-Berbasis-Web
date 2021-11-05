<section class="content-header">
    <h1>
        FORM BAYAR

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Form</a></li>
        <li class="active">Tambah Bayar</li>
    </ol>
</section>
<section class="content">
    <div id="cancel" data-flash="<?= $this->session->flashdata('peringatan'); ?>"></div>
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">FORM TAMBAH BAYAR</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" enctype="multipart/form-data" action=" <?php echo base_url('admin/bayar/tambah_bayar_aksi/') ?>">
                    <div class="box-body">

                        <div class="form-group">
                            <input type="hidden" name="id_bayar" class="form-control">
                            <?php echo form_error('id_bayar', '<div class="text-danger small ml-3">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label> NIS </label>
                            <input type="text" name="id_siswa" class="form-control">
                            <?php echo form_error('id_siswa', '<div class="text-danger small ml-3">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label> Tanggal Bayar </label>
                            <input type="date" name="tanggal_byar" class="form-control">
                            <?php echo form_error('tanggal_byar', '<div class="text-danger small ml-3">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Jumlah </label>
                            <input type="text" name="nominal" class="form-control">
                            <?php echo form_error('nominal', '<div class="text-danger small ml-3">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label> Keterangan </label>
                            <select name="penerima" class="form-control">
                                <option value="">--- Pilih Penerima ---</option>
                                <option>Sinta</option>
                                <option>Sari</option>
                            </select>
                            <?php echo form_error('penerima', '<div class="text-danger small ml-3">', '</div>') ?>
                        </div>

                        <button type="reset" class="btn btn-sm btn-primary ">Reset</button>
                        <button type="submit" class="btn btn-sm btn-info ">Submit</button>
                    </div>
                    <div class="box-footer">

                        <?php echo anchor('admin/bayar', '<div class="btn btn-sm btn-danger pull-right">Back</div>') ?>

                    </div>
                </form>
            </div>
        </div>
    </div>

</section>