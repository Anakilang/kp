<body class="homepage">

    <!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand"><img src="<?php echo base_url() ?>theme/images/logo.png" alt="logo"></a> -->
                <a class="navbar-brand"><img src="<?php echo base_url() ?>bootstrap4/img/logo2.png" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url('home') ?>">Home</a></li>
                    <li><a href="<?php echo base_url('jurusan') ?>">Jurusan</a></li>
                    <li><a href="<?php echo base_url('fasilitas') ?>">Fasilitas</a></li>
                    <li><a href="<?php echo base_url('pengajar') ?>">Tenaga Pengajar</a></li>
                    <li><a href="<?php echo base_url('dokumentasi') ?>">Dokumentasi</a></li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="fa fa-angle-down"></i></a>
                    </li> -->
                    <li><a href="<?php echo base_url('about') ?>">Tentang Sekolah</a></li>
                    <li><a href="<?php echo base_url('admin/auth') ?>">Login Akademik</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(bootstrap4/img/slider/gedung.jpg)">
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(bootstrap4/img/slider/rpl.jpg)">
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(bootstrap4/img/slider/rpl2.jpg)">
                </div>
                <!--/.item-->
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->