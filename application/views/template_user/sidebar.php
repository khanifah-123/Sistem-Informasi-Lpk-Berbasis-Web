<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <?php foreach ($foto as $dt) : ?>
                        <img class="rounded-circle" width="50px" height="50px" style="display: block; margin: auto;" src="<?php echo base_url('assets/uploads/') . $dt->pas_foto ?> " style="width:50px">
                    <?php endforeach; ?>
                </div>
                <div class="sidebar-brand-text mx-3 center">SISFO-LPK URI SARANG</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('siswa/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url('siswa/detail/tampil/'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Identitas</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>siswa/bayar_user/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Pembayaran </span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>siswa/modul/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Modul </span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>siswa/ujian/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Ujian </span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="<?php echo base_url(); ?>siswa/nilai/">
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

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <!-- Nav Item - User Information -->
                        <?php foreach ($foto as $dt) : ?>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-profile rounded-circle" width="50px" height="50px" style="display: block; margin: auto;" src="<?php echo base_url('assets/uploads/') . $dt->pas_foto ?> " style="width:50px">
                                </a>

                            <?php endforeach; ?>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                            </li>

                    </ul>

                </nav>