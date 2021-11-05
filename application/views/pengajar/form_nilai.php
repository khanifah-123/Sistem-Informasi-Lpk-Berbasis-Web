<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Modul
    </div>

    <form method="post" action=" <?php echo base_url('pengajar/nilai/tambah_nilai_aksi') ?>">
        <div class="form-group">
            <label> Materi </label>
            <input type="text" name="materi" class="form-control">
            <?php echo form_error('materi', '<div class="text-danger small ml-3">', '</div>') ?>
        </div>
        <div class="form-group">
            <label> Modul </label><br>
            <input type="file" name="modul">
        </div>
        <div class="form-group">
            <label> Keterangan </label>
            <textarea type="text" name="keterangan" class="form-control" rows="3"></textarea>
            <?php echo form_error('keterangan', '<div class="text-danger small ml-3">', '</div>') ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>