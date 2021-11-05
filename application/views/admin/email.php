<html>
<section class="content-header">
    <h1>
        Form Kirim email

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>
<section class="content">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">FORM</h3>
                    </div>
                    <table>
                        <?php echo form_open_multipart('admin/kirim_email/prosespengiriman'); ?>
                        <tbody>
                            <tr>
                                <td>Ke</td>
                                <td><input type="email" name="to"></td>
                            </tr>
                            <tr>
                                <td>Dari</td>
                                <td><input type="email" name="from"></td>
                            </tr>
                            <tr>
                                <td>Subject / judul</td>
                                <td><input type="text" name="subject"></td>
                            </tr>
                            <tr>
                                <td>Isi Pesan</td>
                                <td><textarea name="isi"></textarea></td>
                            </tr>

                            <td></td>
                            <td><input type="submit" value="Kirim"></td>
                            </tr>
                        </tbody>
                        <?php echo form_close(); ?>
                    </table>
                    </body>

</html>