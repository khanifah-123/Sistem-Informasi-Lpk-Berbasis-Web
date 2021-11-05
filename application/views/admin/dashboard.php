<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section><!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">

        <div class="box-body">


            <h4 class="alert-heading">Selamat Datang</h4>
            <p>Selamat Datang <strong><?php echo $username; ?></strong> di Sistem Informasi LPK Uri Sarang, Anda
                Login sebagai <strong><?php echo $level; ?></strong></p>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo $this->db->query("SELECT no_registrasi FROM pendaftar")->num_rows(); ?></h3>

                    <p>Jumlah Pendaftar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo base_url('admin/pendaftar') ?>" class=" small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $this->db->query("SELECT id_pengajar from pengajar")->num_rows(); ?></h3>

                    <p>Jumlah Pengajar</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo base_url('admin/pengajar') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo $this->db->query("SELECT id_siswa from siswa where kd_ruangan='K-001'")->num_rows(); ?></h3>

                    <p>Jumlah Siswa Ruang A</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url('admin/siswa/tampil_kelasA') ?>" class=" small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo $this->db->query("SELECT id_siswa from siswa where kd_ruangan='K-002'")->num_rows(); ?></h3>

                    <p>Jumlah Siswa Ruang B</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo base_url('admin/siswa/tampil_kelasB') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
                <div class="inner">
                    <h3><?php echo $this->db->query("SELECT id_siswa from siswa where kd_ruangan='K-001'")->num_rows(); ?></h3>

                    <p>Jumlah Siswa Ruang C</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url('admin/siswa/tampil_kelasA') ?>" class=" small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3><?php echo $this->db->query("SELECT id_siswa from siswa where kd_ruangan='K-001'")->num_rows(); ?></h3>

                    <p>Jumlah Siswa Ruang D</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url('admin/siswa/tampil_kelasA') ?>" class=" small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
                <div class="inner">
                    <h3><?php echo $this->db->query("SELECT id_siswa from siswa where kd_ruangan='K-001'")->num_rows(); ?></h3>

                    <p>Jumlah Siswa Ruang E</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url('admin/siswa/tampil_kelasA') ?>" class=" small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-navy">
                <div class="inner">
                    <h3><?php echo $this->db->query("SELECT id_siswa from siswa where kd_ruangan='K-001'")->num_rows(); ?></h3>

                    <p>Jumlah Siswa Ruang F</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url('admin/siswa/tampil_kelasA') ?>" class=" small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
</section>