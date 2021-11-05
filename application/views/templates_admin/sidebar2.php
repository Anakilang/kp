<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-2">Sistem Informasi Akademik</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-book-open"></i>
                    <span>Akademik</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub-Menu Akademik:</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/jurusan2') ?>">Jurusan</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/pelajaran') ?>">Mata Pelajaran</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/siswa') ?>">Data Siswa</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/tahun_akademik') ?>">Tahun Akademik</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/jadwal') ?>">Jadwal Pelajaran</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/nilai/input_nilai') ?>">Input Nilai</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/nilai') ?>">Data Nilai Siswa</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/guru') ?>">Guru</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pengaturan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub-menu Pengaturan:</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/users') ?>">User</a>
                        <a class="collapse-item" href="utilities-border.html">Menu</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-info-circle"></i>
                    <span>Info Sekolah</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub-Menu Info:</h6>
                        <a class="collapse-item" href="login.html">Identitas</a>
                        <a class="collapse-item" href="404.html">Tentang Sekolah</a>
                        <a class="collapse-item" href="blank.html">Kontak Kami</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/auth/logout') ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Topbar -->
            <nav class="navbar mb-3 ">



            </nav>
            <!-- End of Topbar -->