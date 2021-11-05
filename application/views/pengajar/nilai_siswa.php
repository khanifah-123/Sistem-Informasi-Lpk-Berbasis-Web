<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Daftar Nilai Siswa
    </div>
    <div class="container-fluid">
        <?php foreach ($nilai as $ni) : ?>
            <form method="post" action="<?php echo base_url('pengajar/siswa/tambah_nilai_aksi') ?>">
                <div class="form-group">
                    <label> Nama Siswa</label>
                    <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $ni->id_siswa ?>">
                    <input type="text" name="nama_siswa" placeholder="Masukkan Judul Website" class="form-control" value="<?php echo $ni->nama_siswa ?>">
                </div>
                <div class="form-group">
                    <label>Id Ujian </label>
                    <select name="id_ujian" class="form-control">
                        <option value=""> - Pilih -</option>
                        <?php foreach ($ujian as $uji) : ?>
                            <option value="<?php echo $uji->id_ujian ?>"><?= $uji->nama_ujian ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="text" name="nilai" class="form-control">
                    <?php echo form_error('nilai', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                <button type="submit" class="btn btn-primary ">Simpan</button>
            </form>
    </div>
<?php endforeach; ?>
</div>