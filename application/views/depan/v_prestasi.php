<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prestasi | UKM ORBIT UIN Sjech M.Djamil Djambek Bukittinggi</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/image/logoorbit.png' ?>">
    <meta name="description" content="Selamat datang di situs resmi UKM ORBIT UIN Sjech M.Djamil Djambek Bukittinggi">
    <meta property="og:url" content="<?php echo base_url(); ?>" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="Prestasi | UKM ORBIT UIN Sjech M.Djamil Djambek Bukittinggi" />
    <meta property="og:image" content="<?php echo base_url() . 'theme/image/logoorbit.png' ?>" />
    <meta property="og:description" content="Selamat datang di situs resmi UKM ORBIT UIN Sjech M.Djamil Djambek Bukittinggi" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'theme/css/dataTables.bootstrap4.min.css' ?>" rel="stylesheet">

</head>

<!--====================================
            Developed By Fajar Rivaldi Chan
            Angkatan 21
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
    <section>
    </section>
    <!--//END HEADER -->
    <section class="contact" style="margin-bottom:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title text-left">
                        <h2>Prestasi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ketarangan</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data->result() as $row) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->pengumuman_judul; ?></td>
                                        <td><?php echo date("d M Y", strtotime($row->pengumuman_deskripsi)); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->

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
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe / Contact-->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/contact.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/dataTables.bootstrap4.min.js' ?>"></script>
</body>

</html>