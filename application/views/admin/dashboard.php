<div classs="container-fluid">
    <div class="col mr-3">
        <div class="alert alert-success" role="alert">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </div>

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Selamat Datang</h4>
            <p>Selamat Datang <strong><?php echo $username; ?></strong> di Sistem Informasi SMKS Muthia Harapan Cicalengka, anda login sebagai <strong><?php echo $level; ?></strong></p>
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-sliders-h"></i> Control Panel
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="true">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-sliders-h"></i> Control Panel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div>
                        <div class="modal-body">
                            <div class="row">

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url('admin/siswa') ?>">
                                        <p class="nav-link small text-info">Siswa</p>
                                    </a>
                                    <i class="fas fa-3x fa-user"></i>
                                </div>

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url('admin/guru') ?>">
                                        <p class="nav-link small text-info">Guru</p>
                                    </a>
                                    <i class="fas fa-3x fa-user-graduate"></i>
                                </div>

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url('admin/jurusan2') ?>">
                                        <p class="nav-link small text-info">Jurusan</p>
                                    </a>
                                    <i class="fas fa-3x fa-book-open"></i>
                                </div>

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url('admin/input_nilai') ?>">
                                        <p class="nav-link small text-info">Input Nilai</p>
                                    </a>
                                    <i class="fas fa-3x fa-edit"></i>
                                </div>

                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url() ?>">
                                        <p class="nav-link small text-info">Kategori</p>
                                    </a>
                                    <i class="fas fa-3x fa-list-ul"></i>
                                </div>

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url() ?>">
                                        <p class="nav-link small text-info">Identitas</p>
                                    </a>
                                    <i class="fas fa-3x fa-id-card-alt"></i>
                                </div>

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url() ?>">
                                        <p class="nav-link small text-info">Fasilitas</p>
                                    </a>
                                    <i class="fas fa-3x fa-laptop"></i>
                                </div>

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url() ?>">
                                        <p class="nav-link small text-info">Gallery Sekolah</p>
                                    </a>
                                    <i class="fas fa-3x fa-images"></i>
                                </div>

                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url() ?>">
                                        <p class="nav-link small text-info">Kontak</p>
                                    </a>
                                    <i class="fas fa-3x fa-address-book"></i>
                                </div>

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url() ?>">
                                        <p class="nav-link small text-info">Info Sekolah</p>
                                    </a>
                                    <i class="fas fa-3x fa-bullhorn"></i>
                                </div>

                                <div class="col-md-3 text-info text-center">
                                    <a href="<?php echo base_url() ?>">
                                        <p class="nav-link small text-info">Tentang Sekolah</p>
                                    </a>
                                    <i class="fas fa-3x fa-info-circle"></i>
                                </div>

                            </div>
                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>