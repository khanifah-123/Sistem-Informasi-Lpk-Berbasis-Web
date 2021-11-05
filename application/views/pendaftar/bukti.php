<body id="page-top">
    <div class="container-sm border-success border-12 center">
        <center>
            <h3>Selanjutnya Lakukkan Pembayaran</h3>
            <p>Setelah melakukkan pengisian form pendaftaran langkah selanjutnya adalah lakukkan pembayaran melalui bank
                atau bisa datang langsung ke LPK Uri Sarang dan membawa bukti pendaftaran, Lakukan pembayaran ke rekening <u>0733782832 atas nama
                    Khanifah</u> kemudian upload ke halaman ini</p>
        </center>
    </div>
    <?php foreach ($berkas as $bks) : ?>
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('pendaftar/tambah_bukti_aksi') ?>">
            <div class="form-group">
                <input type="hidden" name="id_berkas" class="form-control" value="<?php echo $bks->id_berkas ?>" readonly="readonly">
                <?php echo form_error('id_berkas', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class=" form-group">
                <label class="form-label">bukti_pembayaran</label>
                <input type="file" class="form-control" name="bukti_pembayaran">
                <?php echo form_error('bukti_pembayaran', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Daftar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        <?php endforeach; ?>
        </form>

</body>