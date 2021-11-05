<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img class="border rounded-circle" src="<?php echo base_url() ?>assets/img/lpk.jpg" style="width:50px">
                </div>
                <div class="sidebar-brand-text mx-3 center">SISFO-LPK URI SARANG</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('pengajar/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url('pengajar/dashboard/detail') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Identitas </span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url('pengajar/siswa') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Siswa </span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url('pengajar/modul') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Modul </span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url('pengajar/ujian') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Ujian </span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url('pengajar/nilai') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Nilai </span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Login') ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                        </li>

                        <!-- Nav Item - User Information -->
                        <?php foreach ($foto as $dt) : ?>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-profile rounded-circle" width="50%" height="50%" style="display: block; margin: auto;" src="<?php echo base_url('assets/uploads/') . $dt->foto ?> ">
                                </a>

                            </li>
                        <?php endforeach; ?>
                    </ul>

                </nav>