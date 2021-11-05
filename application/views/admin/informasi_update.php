<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> FORM UPDATE INFORMASI
    </div>

    <?php foreach ($nilai as $info) : ?>
        <form method="post" action="<?php echo base_url('pengajar/nilai/update_aksi') ?>">
            <div class="form-group">
                <label>Icon </label>
                <input type="hidden" name="id_nilai" class="form-control" value="<?php echo $info->id_nilai ?>">
                <input type="text" name="icon" class="form-control" value="<?php echo $info->id_siswa ?>">
            </div>
            <div class="form-group">
                <label>Judul Informasi </label>
                <input type="text" name="nilai" class="form-control" value="<?php echo $info->nilai ?>">
            </div>
            <div class="form-group">
                <label>Ujian</label>
                <select name="id_ujian" class="form-control">
                    <option value=""> - Pilih -</option>
                    <?php foreach ($ujian as $uji) : ?>
                        <option value="<?php echo $uji->id_ujian ?>"><?= $uji->nama_ujian ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary ">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>