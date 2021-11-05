<section class="content-header">
    <h1>
        Form Kirim Email

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Kirim Email</li>
    </ol>
</section>
<section class="content">

    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">FORM</h3>
            </div>
            <form method="post" action="<?php echo base_url('admin/kirim_email/prosespengiriman') ?>">
                <?php foreach ($email as $em) : ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="to" class="form-control" value="<?php echo $em->alamat_email ?>">
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control" value="Informasi penting!!!">
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea type="text" name="isi" class="form-control" rows="5">Selamat Anda Berhasil Melakukan Pendaftaran dan telah menjadi siswa di Lpk Uri Sarang, silahkan login untuk informasi selanjutnya, 
Username : <?php echo $em->username ?> 
Password : <?php echo $em->password ?> </textarea>
                        </div>

                        <button type=" submit" class="btn btn-primary">Kirim</button>
                    <?php endforeach; ?>
            </form>
        </div>
    </div>

</section>