<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> FORM UPDATE RUANGAN
    </div>
    <div class="container-fluid">
        <?php foreach ($ruangan as $ajar) : ?>
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('pengajar/modul/tambah_modul_aksi') ?>">
                <div class="form-group">
                    <label>Kode Ruangan </label>
                    <input type="text" name="kd_ruangan" class="form-control" value="<?php echo $ajar->kd_ruangan ?> " readonly="readonly">

                </div>
                <div class="form-group">
                    <label>Materi</label>
                    <input type="text" name="materi" class="form-control">
                    <?php echo form_error('materi', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                <div class="form-group">
                    <label>Modul</label>
                    <input type="file" name="modul" class="form-control">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                    <?php echo form_error('keterangan', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
        <?php endforeach; ?>
    </div>
</div>