<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> FORM UPDATE INFORMASI
    </div>

    <div class="container-fluid">
        <?php foreach ($modul as $info) : ?>
            <form method="post" action="<?php echo base_url('pengajar/modul/update_aksi') ?>">
                <div class="form-group">

                    <input type="hidden" name="id_modul" class="form-control" value="<?php echo $info->id_modul ?>">

                </div>
                <div class="form-group">
                    <label>Modul</label>
                    <input type="file" name="modul" class="form-control">
                    <input type="hidden" id="old" name="old" value="<?php echo $info->modul  ?>">
                </div>
                <div class="form-group">
                    <label>Materi </label>
                    <input type="text" name="materi" class="form-control" value="<?php echo $info->materi ?>">
                </div>
                <div class="form-group">
                    <label>Keterangan </label>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $info->keterangan ?>">
                </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
    </div>
<?php endforeach; ?>

</div>