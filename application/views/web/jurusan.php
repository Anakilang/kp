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
                <li><a href="<?php echo base_url('home') ?>">Home</a></li>
                <li class="active"><a href="<?php echo base_url('jurusan') ?>">Jurusan</a></li>
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
<!--/nav-->
</header>
<!--/header-->

<section id="about-us">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>About Corlate</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <!-- about us slider -->
        <div id="about-slider">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="bootstrap4/img/slider_one.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="bootstrap4/img/slider_one.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="item">
                        <img src="bootstrap4/img/slider_one.jpg" class="img-responsive" alt="">
                    </div>
                </div>

                <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>

                <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <!--/#carousel-slider-->
        </div>
        <!--/#about-slider-->


        <!-- Our Skill -->
        <div class="skill-wrap clearfix">

            <div class="center wow fadeInDown">
                <h2>Our Skill</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">

                <div class="col-sm-3">
                    <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="joomla-skill">
                            <p><em>85%</em></p>
                            <p>Joomla</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="html-skill">
                            <p><em>95%</em></p>
                            <p>HTML</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <div class="css-skill">
                            <p><em>80%</em></p>
                            <p>CSS</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                        <div class="wp-skill">
                            <p><em>90%</em></p>
                            <p>Wordpress</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--/.our-skill-->


        <!-- our-team -->
        <div class="team">
            <div class="center wow fadeInDown">
                <h2>Team of Corlate</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row clearfix">
                <div class="col-md-4 col-sm-6">
                    <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img class="media-object" src="bootstrap4/img/man1.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                                <h4>Jhon Doe</h4>
                                <h5>Founder and CEO</h5>
                                <ul class="tag clearfix">
                                    <li class="btn"><a href="#">Web</a></li>
                                    <li class="btn"><a href="#">Ui</a></li>
                                    <li class="btn"><a href="#">Ux</a></li>
                                    <li class="btn"><a href="#">Photoshop</a></li>
                                </ul>

                                <ul class="social_icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.media -->
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
                <!--/.col-lg-4 -->


                <div class="col-md-4 col-sm-6 col-md-offset-2">
                    <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img class="media-object" src="bootstrap4/img/man2.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                                <h4>Jhon Doe</h4>
                                <h5>Founder and CEO</h5>
                                <ul class="tag clearfix">
                                    <li class="btn"><a href="#">Web</a></li>
                                    <li class="btn"><a href="#">Ui</a></li>
                                    <li class="btn"><a href="#">Ux</a></li>
                                    <li class="btn"><a href="#">Photoshop</a></li>
                                </ul>
                                <ul class="social_icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.media -->
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
                <!--/.col-lg-4 -->
            </div>
            <!--/.row -->
            <div class="row team-bar">
                <div class="first-one-arrow hidden-xs">
                    <hr>
                </div>
                <div class="first-arrow hidden-xs">
                    <hr> <i class="fa fa-angle-up"></i>
                </div>
                <div class="second-arrow hidden-xs">
                    <hr> <i class="fa fa-angle-down"></i>
                </div>
                <div class="third-arrow hidden-xs">
                    <hr> <i class="fa fa-angle-up"></i>
                </div>
                <div class="fourth-arrow hidden-xs">
                    <hr> <i class="fa fa-angle-down"></i>
                </div>
            </div>
            <!--skill_border-->

            <div class="row clearfix">
                <div class="col-md-4 col-sm-6 col-md-offset-2">
                    <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img class="media-object" src="bootstrap4/img/man3.jpg" alt=""></a>
                            </div>

                            <div class="media-body">
                                <h4>Jhon Doe</h4>
                                <h5>Founder and CEO</h5>
                                <ul class="tag clearfix">
                                    <li class="btn"><a href="#">Web</a></li>
                                    <li class="btn"><a href="#">Ui</a></li>
                                    <li class="btn"><a href="#">Ux</a></li>
                                    <li class="btn"><a href="#">Photoshop</a></li>
                                </ul>
                                <ul class="social_icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.media -->
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-md-offset-2">
                    <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img class="media-object" src="bootstrap4/img/man4.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                                <h4>Jhon Doe</h4>
                                <h5>Founder and CEO</h5>
                                <ul class="tag clearfix">
                                    <li class="btn"><a href="#">Web</a></li>
                                    <li class="btn"><a href="#">Ui</a></li>
                                    <li class="btn"><a href="#">Ux</a></li>
                                    <li class="btn"><a href="#">Photoshop</a></li>
                                </ul>
                                <ul class="social_icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.media -->
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--section-->
    </div>
    <!--/.container-->
</section>
<!--/about-us-->