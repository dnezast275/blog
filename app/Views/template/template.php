<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>/img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url(); ?>/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.html" class="nav-brand"><img src="<?= base_url(); ?>/img/logo.png" alt=""></a>
                    <a href="" class="brand">
                        <h4>SMAN 1 RAWAMERTA</h4>
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="col d-flex mr-1 justify-content-end">

                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav mr-3">
                                <ul>
                                    <li class="active"><a href="index.html">Beranda</a></li>
                                    <li><a href="archive.html">Tentang</a>
                                        <ul class="dropdown">
                                            <li><a href="">Profil Sekolah</a></li>
                                            <li><a href="">Visi dan Misi</a></li>
                                            <li><a href="">Struktur Pengelola</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Ekstrakurikuler</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">OSIS</a></li>
                                            <li><a href="archive.html">Rohani Islam</a></li>
                                            <li><a href="video-post.html">Pramuka</a></li>
                                            <li><a href="single-post.html">Paskibra</a></li>
                                            <li><a href="about.html">PMR</a></li>
                                            <li><a href="contact.html">Olahraga</a>
                                                <ul class="dropdown">
                                                    <li><a href="video-post.html">Futsal</a></li>
                                                    <li><a href="single-post.html">Volly</a></li>
                                                    <li><a href="">Silat</a></li>
                                                    <li><a href="">Taekwondo</a></li>
                                                    <li><a href="">Karate</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="submit-video.html">Kesenian</a>
                                                <ul class="dropdown">
                                                    <li><a href="">Paduan Suara</a></li>
                                                    <li><a href="">Tari</a></li>
                                                    <li><a href="">Degung</a></li>
                                                    <li><a href="">Teater</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="login.html">Otomotif</a></li>
                                            <li><a href="">Komputer</a></li>
                                            <li><a href="">Klub Bahasa</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="archive.html">Archive</a></li>
                                                <li><a href="video-post.html">Single Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="archive.html">Archive</a></li>
                                                <li><a href="video-post.html">Single Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="archive.html">Archive</a></li>
                                                <li><a href="video-post.html">Single Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="archive.html">Archive</a></li>
                                                <li><a href="video-post.html">Single Video Post</a></li>
                                                <li><a href="single-post.html">Single Post</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <?php if (!session()->get('email')) : ?>
                                        <li style="display:none;"><a href="<?= base_url(); ?>/admin">Admin Panel</a></li>
                                    <?php else : ?>
                                        <li><a href="<?= base_url(); ?>/admin">Admin Panel</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- <div class="top-meta-data d-flex align-items-center"> -->
                        <!-- Top Search Area -->
                        <!-- <div class="top-search-area">
                                <form action="index.html" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div> -->
                        <!-- </div> -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->



    <?= $this->renderSection('content') ?>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget" style="color:#fff;">
                        <!-- Logo -->
                        <h3 style="color:#fff;">About</h3>
                        <h5 style="color:#fff;">SMA NEGERI 1 RAWAMERTA</h5>
                        <span>Jl. Garunggung - Panyingkiran</span><br>
                        <span>Kec. Rawamerta Kab. Karawang</span><br>
                        <span>Prov. Jawa Barat, 41382</span><br>

                        <span><i class="fa fa-envelope"></i> sman1rwt@gmail.com</span><br>
                        <span><i class="fa fa-globe"></i> &nbsp;https://sman1rawamerta.sch.id</span><br>
                        <span><i class="fa fa-phone"></i> &nbsp;0812-3456-7890</span><br>
                        <hr>
                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget">
                        <h6 class="widget-title">Categories</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget">
                        <h6 class="widget-title">Channels</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Fashionista</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">TRENDING</a></li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">Game</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Foods</a></li>
                            <li><a href="#">TV Show</a></li>
                            <li><a href="#">Twitter Video</a></li>
                            <li><a href="#">Playing</a></li>
                            <li><a href="#">clips</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Template by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li style="color:#fff;">Developed by<a href="#">Muhamad Ramdani Hidayatullah</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?= base_url(); ?>/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url(); ?>/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url(); ?>/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?= base_url(); ?>/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url(); ?>/js/active.js"></script>
</body>

</html>