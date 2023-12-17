<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        job vacancy
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="{{ asset('landing') }}/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/aos.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/style.css" />


</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <a href="/home" class="logo m-0 float-start">Job vacancy YPC</a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class="nav-item{{ Request::is('home') ? 'active' : '' }}"><a
                                class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a></li>
                        <li class="has-children">
                            <a>Information</a>
                            <ul class="dropdown">
                                <li><a class="" href="/testimoni">Testimoni</a></li>
                                <li class="has-children">
                                    <a href="/all">Lowongan Kerja</a>
                                    <ul class="dropdown">
                                        <li><a href="/pengajuan">Ajukan Loker</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item{{ Request::is('about') ? 'active' : '' }}"><a class=" class="nav-link {{ Request::is('about') ? 'active' : '' }}"" href="/about">About</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li>
                            @if (!empty(Auth::user()->id))
                                <a href="/logout">
                                    <span class="wrap-icon">
                                        <span class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                                    </span>
                                </a>
                            @else
                                <a href="/login">
                                    <span class="wrap-icon">
                                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                                    </span>
                                </a>
                            @endif
                        </li>
                    </ul>

                    <a href="#"
                        class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li>
                                <a href="mailto:info@mydomain.com">info@mydomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Sources</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Creative</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Links</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>

                        <ul class="list-unstyled social">
                            <li>
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-pinterest"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-dribbble"></span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <!--
            **==========
            NOTE:
            Please don't remove this copyright link unless you buy the license here https://untree.co/license/
            **==========
          -->

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        . All Rights Reserved. &mdash; Designed with love by
                        <a href="https://untree.co">Pyscho</a>
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                    <div>
                        Distributed by
                        <a href="https://themewagon.com/" target="_blank">alex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="{{ asset('landing') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing') }}/js/tiny-slider.js"></script>
    <script src="{{ asset('landing') }}/js/aos.js"></script>
    <script src="{{ asset('landing') }}/js/navbar.js"></script>
    <script src="{{ asset('landing') }}/js/counter.js"></script>
    <script src="{{ asset('landing') }}/js/custom.js"></script>

</body>

</html>
