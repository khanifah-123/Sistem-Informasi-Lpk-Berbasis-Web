<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a class="logo">
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
                <img class="img-circle" alt="User Image" src="<?php echo base_url() ?>assets/img/lpk.jpg" style="width:35px"></img>
            </a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo base_url('admin/dashboard') ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/pendaftar') ?>">
                            <i class="fa fa-calendar"></i> <span>Pendaftar</span>
                        </a>

                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/siswa') ?>">
                            <i class="fa fa-th"></i> <span>Siswa</span>
                        </a>

                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('admin/pengajar') ?>">
                            <span>Pengajar</span>
                        </a>

                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('admin/bayar') ?>">
                            <span>Pembayaran</span>
                        </a>

                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('admin/ruangan') ?>">
                            <span>Ruangan</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <span>Pembelajaran</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=" <?php echo base_url('admin/user') ?>"><i class="fa fa-circle-o"></i> Users</a></li>
                            <li><a href="<?php echo base_url('admin/modul') ?>"><i class="fa fa-circle-o"></i> Modul</a></li>
                            <li><a href="<?php echo base_url('admin/nilai') ?>"><i class="fa fa-circle-o"></i> Nilai</a></li>
                            <li><a href=" <?php echo base_url('admin/ujian') ?>"><i class=" fa fa-circle-o"></i> Ujian</a></li>


                        </ul>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('Login') ?>">
                            <i class="fa fa-arrow-left"></i>
                            <span>Logout</span></a>
                    </li>

            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->