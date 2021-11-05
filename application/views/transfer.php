<section class="content-header">


</section>
<section class="content">
  <div id="flash" data-flash="<?= $this->session->flashdata('pesan'); ?>">
    <div id="cancel" data-flash="<?= $this->session->flashdata('peringatan'); ?>"></div>

  </div>
  <div class="col-md-8 col-md-offset-2 ">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h1>
          FORM PENDAFTARAN

        </h1>
      </div>
      <div class="container-sm border-success border-20">
        <form method="post" enctype="multipart/form-data" action=" <?php echo base_url('landing_page/tambah_pendaftar_aksi') ?>">
          <div class="box-body">
            <div class="form-group">
              <input type="hidden" name="no_registrasi" class="form-control" value="<?php echo $no_registrasi; ?>" readonly="readonly">
              <?php echo form_error('no_registrasi', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class=" form-group">
              <label class="form-label">Nama Lengkap</label>
              <input type="hidden" name="level" value="siswa">
              <input type="hidden" name="status" value="0">
              <input type="text" name="nama_siswa" class="form-control">
              <?php echo form_error('nama_siswa', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label>Username </label>
              <input type="text" name="username" class="form-control">
              <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label> Password</label>
              <input type="text" name="password" class="form-control">
              <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="form-label">No KTP</label>
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" name="no_ktp">
              <?php echo form_error('no_ktp', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control" name="tempat_lahir">
              <?php echo form_error('tempat_lahir', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="form-label">Tanggal Lahir </label>
              <input type="date" class="form-control" name="tanggal_lahir">
              <?php echo form_error('tanggal_lahir', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label>Alamat Lengkap</label>
              <textarea type="text" name="alamat_lengkap" class="form-control" rows="5"></textarea>
              <?php echo form_error('alamat_lengkap', '<div class="text-danger small">', '</div>') ?>
            </div>
            <div class="form-group">
              <label>Jenis_Kelamin</label>
              <select name="jenis_kelamin" class="form-control">
                <option value="">--- Pilih Jenis Kelamin </option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
              <?php echo form_error('jenis_kelamin', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label>Agama</label>
              <select name="agama" class="form-control">
                <option value="">--- Pilih Agama </option>
                <option>Islam</option>
                <option>Kristen Khatolik</option>
                <option>Kristen Protestan</option>
                <option>Hindu</option>
                <option>Budha</option>
              </select>
              <?php echo form_error('agama', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label> Status </label>
              <select name="status" class="form-control">
                <option value="">--- Pilih status </option>
                <option>Belum Menikah</option>
                <option>Menikah</option>
              </select>
              <?php echo form_error('status', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="alamat_email">
              <?php echo form_error('alamat_email', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label class="form-label">No HP/WA</label>
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" name="no_hp">
              <?php echo form_error('no_hp', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class=" form-group">
              <label class="form-label">Nama Ayah</label>
              <input type="text" class="form-control" name="nama_ayah">
              <?php echo form_error('nama_ayah', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class=" form-group">
              <label class="form-label">Nama Ibu</label>
              <input type="text" class="form-control" name="nama_ibu">
              <?php echo form_error('nama_ibu', '<div class="text-danger small ml-3">', '</div>') ?>
            </div><br>
            <div class=" form-group">
              <label class="form-label">Jumlah Saudara</label>
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" name="jumlah_saudara">
              <?php echo form_error('jumlah_saudara', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label> Pilihan Pekerjaan </label>
              <select name="pilihan_pekerjaan" class="form-control">
                <option value="">--- Pilih status </option>
                <option>Manufaktur</option>
                <option>Perikanan</option>
              </select>
              <?php echo form_error('pilihan_pekerjaan', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class=" form-group">
              <label class="form-label">Tinggi Badan</label>
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" name="tinggi_badan">
              <?php echo form_error('tinggi_badan', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class=" form-group">
              <label class="form-label">Berat Badan</label>
              <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" name="berat_badan">
              <?php echo form_error('berat_badan', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
            <div class="form-group">
              <label>Scan KTP</label><br>
              <input type="file" name="fc_ktp">
            </div>
            <div class="form-group">
              <label>Scan KK</label><br>
              <input type="file" name="fc_kk">
            </div>
            <div class="form-group">
              <label>Scan Ijazah</label><br>
              <input type="file" name="fc_ijazah">
            </div>
            <div class="form-group">
              <label>Pas Foto</label><br>
              <input type="file" name="pas_foto">
            </div>
            <div class="form-group">
              <label>Bukti Pembayaran</label><br>
              <input type="file" name="bukti_pembayaran">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal" data-bs-whatever="@mdo">Daftar</button>
              <button type="button" class="btn btn-danger" href="<?php echo base_url('home') ?>">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>