<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UKM ORBIT UIN Sjech M.Djamil Djambek Bukittinggi</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/image/logoorbit.png' ?>">
    <meta name="description" content="Selamat datang di situs resmi UKM ORBIT UIN Sjech M.Dajamil Djambek Bukittinggi">
    <meta property="og:url" content="<?php echo base_url(); ?>" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="UKM ORBIT" />
    <meta property="og:image" content="<?php echo base_url() . 'theme/image/logoorbit.png' ?>" />
    <meta property="og:description" content="Selamat datang di situs resmi UKM ORBIT UIN Sjech M.Dajamil Djambek Bukittinggi" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
    ?>
</head>

<!--====================================
            Developed By Fajri Rinaldi Chan
            Software Developer Team - UKM ORBIT
        =====================================-->

<body>
    <!--============================= HEADER =============================-->
    <!-- <div class="header-topbar">
    </div> -->
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded navbar-expand-lgt navbar-nd">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right mt-5" style="margin-top:20px !important;" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img class="img img-responsive" src="<?php echo base_url() . 'theme/image/logoorbit.png' ?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(''); ?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Profil
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo site_url('sejarah'); ?>">Sejarah</a>
                                        <a class="dropdown-item" href="<?php echo site_url('visi_misi'); ?>">Visi Misi</a>
                                        <a class="dropdown-item" href="<?php echo site_url('pengurus'); ?>">Pengurus</a>
                                        <a class="dropdown-item" href="<?php echo site_url('prestasi'); ?>">Prestasi</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog'); ?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pustaka'); ?>">Pustaka</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri'); ?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('sima'); ?>">SIMA-ORBIT</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="home" class="jumbotron jumbotron-fluid">
        <div class="container sec1 text-center">
            <img class="n-logo mb-4" src="<?php echo base_url() . 'theme/image/uin-orbit.png' ?>" alt="logo ksr" width="240">
            <h1 class="display-4 pb-3">Selamat Datang di Situs Resmi</h1>
            <h2 class="display-5">UKM Organisasi Berbasis IT ( ORBIT ) <br>UIN Sjech M.Djamil Djambek Bukittinggi</h2>
            <a href="#start" class="btn btn-outline-primary btn-jumbo"><i class="fa fa-angle-double-down faa-bounce faa-reverse animated faa-fast" aria-hidden="true" style="font-size: 20px;"></i></a>
        </div>
        <div id="start"></div>
    </div>
    <!--//END HEADER -->
    <!--============================= ABOUT =============================-->
    <section class="clearfix about about-style2">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo base_url() . 'theme/image/oror.jpg' ?>" class="img-fluid about-img" alt="#">
                </div>
                <div class="col-md-7 pt-3">
                    <h2>Tentang Kami</h2>
                    <p>Unit Kegiatan Mahasiswa Organisasi berbasis IT (UKM ORBIT) yang sebelumnya adalah organisasi komunitas belajar dari jurusan Pendidikan Teknik Informatika dan Komputer yang dibentuk dari usulan Bapak Dr.Supratman Zakir M.Pd, M.Kom, Bapak Sarwo Derta dan Bapak Febi Edwardi yang didirikan oleh angkatan 2012</p>
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam consequuntur quod quasi nisi rerum veritatis officia. ...</p> -->
                    <a href="<?php echo site_url('sejarah'); ?>" class="btn btn-default rounded mt-3">Baca Lainnya...</a>
                </div>
            </div>
        </div>
    </section>
    <!--//END ABOUT -->
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <h2>Bidang</h2>
            </div>
            <div class="row justify-content-center">
                <p>Bidang yang dapat diikuti oleh seluruh anggota UKM ORBIT</p>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2 col-3">
                    <img src="<?php echo base_url() . 'theme/image/programming.png' ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-2 col-3">
                    <img src="<?php echo base_url() . 'theme/image/multimedia.png' ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-2 col-3">
                    <img src="<?php echo base_url() . 'theme/image/networking.png' ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-2 col-3">
                    <img src="<?php echo base_url() . 'theme/image/robotics.png' ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--============================= OUR COURSES =============================-->
    <section class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Artikel Terbaru</h2>
                        <a href="<?php echo base_url() ?>/blog">
                            <h5>Lainnya <i class="fa fa-chevron-right faa-passing animated pl-2 faa-fast" aria-hidden="true"></i></h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($berita->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" alt="contoh">
                            <div class="card-body">
                                <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>" class="">
                                    <h4 class="card-title"> <?php echo limit_words($row->tulisan_judul, 5) . '...'; ?></h4>
                                </a>
                                <span class="text-muted"><i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $row->tulisan_kategori_nama; ?></span>
                                <p class="card-text pt-3"><?php echo limit_words($row->tulisan_isi, 10) . '...'; ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>" class="btn btn-outline-danger tombol pl-3 pr-3">Baca Selengkapnya <i class="fa fa-chevron-right faa-passing animated pl-2 faa-fast" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--//END OUR COURSES -->
    <section>
        <div class="detailed_chart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="chart-text">
                            <p>Ayo bergabung Bersama Kami</p>
                            <p><span>Menjadi Bagian dari <br>UKM ORBIT UIN Sjech M.Djamil Djambek Bukittinggi<span></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-4 text-lg-right text-center">
                            <a href="https://sima.orbituinbkt.com/daftar" class="btn btn-danger btn-gabung">Gabung</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================= EVENTS =============================-->
    <section class="kontak">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-lg-5 mb-1 p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo site_url('contact/kirim_pesan'); ?>" method="post">
                                        <h2 class="pb-3 pt-4">Kontak Kami</h2>
                                        <div class="text-success"><?php echo $this->session->flashdata('msg'); ?></div>
                                        <div class="row">
                                            <div class="col-lg-6 form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" name="xnama" placeholder="Nama Kamu">
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label for="nama">Email</label>
                                                <input type="email" class="form-control" name="xemail" placeholder="Email Aktif">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subjek">Subjek</label>
                                            <input type="text" class="form-control" id="subjek" name="xphone" placeholder="subjek">
                                        </div>
                                        <div class="form-group">
                                            <label for="pesan">Pesan</label>
                                            <textarea class="form-control" id="pesan" rows="3" name="xmessage" placeholder="Tulis Pesan Kamu"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary tombol w-100 mt-4 mb-4">Kirim <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <h2 class="pb-3 pt-4">Hubungi Kami</h2>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> admin@orbituinbkt.com</p>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Gedung A (Mesir) UIN Sjech M.Djamil Djambek Bukittinggi, Jl. Gurun Aua, Kubang Putiah, Kab. Agam, Sumatera Barat 26181</p>
                                    <h2 class="mt-5">Lokasi</h2>
                                    <div class="embed-responsive embed-responsive-21by9 mb-5">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d249.35969736446037!2d100.39886705783752!3d-0.32239725782565287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd53859e02bc71b%3A0xfd22828e161a20b!2sM9HX%2B4MC%2C%20Sepria.C%2C%20Kubu%20Tj.%2C%20Kec.%20Aur%20Birugo%20Tigo%20Baleh%2C%20Kota%20Bukittinggi%2C%20Sumatera%20Barat%2026181!5e0!3m2!1sid!2sid!4v1681794304403!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--//END EVENTS -->
    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container pb-5">
            <div class="row pb-3">
                <div class="col-md-5">
                    <div class="foot-logo">
                        <img src="<?php echo base_url() . 'theme/image/uin-orbit.png' ?>" width="300" class="img-fluid" alt="footer_logo">
                        <h3 class=" pt-5 text-white text-lg-left">UKM ORBIT <br>UIN Sjech M.Djamil Djambek Bukittinggi</h3>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sitemap">
                        <h3>Profile</h3>
                        <ul>
                            <li><a href="<?php echo site_url('sejarah'); ?>">Sejarah</a></li>
                            <li><a href="<?php echo site_url('visi_misi'); ?>">Visi Misi</a></li>
                            <li><a href="<?php echo site_url('pengurus'); ?>">Pengurus</a></li>
                            <li><a href="<?php echo site_url('prestasi'); ?>">Prestasi</a></li>
                            <li><a href="<?php echo site_url('home#contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sitemap">
                        <h3>Menu</h3>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
                            <li><a href="<?php echo site_url('pustaka'); ?>">Pustaka</a></li>
                            <li><a href="<?php echo site_url('galeri'); ?>">Galeri</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Sekretariat</h3>
                        <p> Gedung A (Mesir) UIN Sjech M.Djamil Djambek Bukittinggi, Jl. Gurun Aua, Kubang Putiah, Kab. Agam, Sumatera Barat 26181</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5">
        <div class="container">
            <div class="row  pt-lg-4 pt-2 pb-4 pb-lg-0 text-center text-lg-left justify-content-lg-between">
                <div class="col-lg-6 pt-1">
                    <span class="text-white">Copyright &copy; 2023, UKM ORBIT UIN BKT </span>
                </div>
                <div class="icon mb-3 d-none d-lg-block" style="font-size: 24px;">
                    <ul class="list-inline">
                        <li class="list-inline-item px-2">
                            <a href="https://www.linkedin.com/company/orbit-uin-bukittinggi/">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item px-2">
                            <a href="https://www.instagram.com/orbit_uinsmddbukittinggi/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item px-2">
                            <a href="mailto:admin@orbituinbkt.com">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>