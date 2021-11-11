<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('user/dashboard') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-2">Sistem Informasi Akademik</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('user/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-book-open"></i>
                    <span>Akademik</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub-Menu Akademik:</h6>
                        <a class="collapse-item" href="<?php echo base_url('user/jurusan2') ?>">Jurusan</a>
                        <a class="collapse-item" href="<?php echo base_url('user/pelajaran') ?>">Mata Pelajaran</a>
                        <a class="collapse-item" href="<?php echo base_url('user/siswa') ?>">Data Siswa</a>
                        <a class="collapse-item" href="<?php echo base_url('user/jadwal') ?>">Jadwal Pelajaran</a>
                        <a class="collapse-item" href="<?php echo base_url('user/nilai') ?>">Data Nilai Siswa</a>
                        <a class="collapse-item" href="<?php echo base_url('user/guru') ?>">Guru</a>
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