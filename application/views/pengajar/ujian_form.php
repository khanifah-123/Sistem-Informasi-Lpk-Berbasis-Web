<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> FORM UPDATE RUANGAN
    </div>
    <div class="container-fluid">
        <?php foreach ($pengajar as $pngjr) : ?>
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('pengajar/ujian/tambah_ujian_aksi') ?>">
                <div class="form-group">
                    <label>Kode Ruangan </label>
                    <input type="text" name="kd_ruangan" class="form-control" value="<?php echo $pngjr->kd_ruangan ?> " readonly="readonly">
                </div>
                <div class="form-group">
                    <label>Nama Ujian </label>
                    <input type="text" name="nama_ujian" class="form-control">
                    <?php echo form_error('nama_ujian', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                    <?php echo form_error('tanggal', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
        <?php endforeach; ?>
    </div>
</div>