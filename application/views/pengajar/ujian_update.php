<div class="continer-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> FORM UPDATE IDENTITAS
    </div>
    <div class="container-fluid">
        <?php foreach ($ujian as $uji) : ?>
            <form method="post" action="<?php echo base_url('pengajar/ujian/update_aksi') ?>">
                <div class="form-group">
                    <label> Nama Ujian</label>
                    <input type="hidden" name="id_ujian" class="form-control" value="<?php echo $uji->id_ujian ?>">
                    <input type="text" name="nama_ujian" placeholder="Masukkan Judul Website" class="form-control" value="<?php echo $uji->nama_ujian ?>">
                </div>
                <div class="form-group">
                    <label>Kode Ruangan </label>
                    <input type="text" name="kd_ruangan" class="form-control" value="<?php echo $uji->kd_ruangan ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="tanggal" name="tanggal" class="form-control" value="<?php echo $uji->tanggal ?>">
                </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
    </div>
<?php endforeach; ?>
</div>