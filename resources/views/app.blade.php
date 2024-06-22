<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SOFTFORGE INNOVATIONS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/git.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>¡Bienvenido a Softforge Innovations!</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i>
                                            SOFTFORGE@gmail.com</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=+59163489070&text=hola ," . urlencode($mensaje_whatsapp)" target="_blank"><i class="fa fa-phone"></i> +591 63489070</a></li>
                                    </ul>
                                </div>
                                <div class="social_media_links">
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="" width="250">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="{{ 'home' == Request::is('home*') ? 'active' : '' }}" href="{{ url('/') }}">home</a></li>
                                            <li><a class="{{ 'services' == Request::is('services*') ? 'active' : '' }}" href="{{ url('services') }}">Services</a></li>
                                            <li><a href="{{ url('contact') }}">Contact</a></li>
                                            <li><a href="{{ url('about') }}">About</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('content')

    <!-- Information_area  -->
    <div class="Information_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                    <div class="info_text text-center">
                        <h3>Para cualquier información llámanos</h3>
                        <p>Innovación que transforma</p>
                        <a class="boxed-btn3" href="#">+591 63489070</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Information_area  end -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/git.png" alt="">
                                </a>
                            </div>
                            <p>
                                <a href="#">SOFTFORGE@gmail.com</a> <br>
                                +591 634 890 70 <br>
                                600/D, Green road, NewYork
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">Desarrollo de software a medida</a></li>
                                <li><a href="#">Desarrollo de software de código abierto</a></li>
                                <li><a href="#">Integración de sistemas</a></li>
                                <li><a href="#">Soporte y mantenimiento de software</a></li>
                                <li><a href="#">Consultoría de software</a></li>
                                <li><a href="#">Desarrollo de prototipos de software</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/services')}}">Services</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="{{ url('/') }}" target="_blank">Softforge Innovations</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!--contact js-->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        var botmanWidget = {
            title: "SOFTFORGE INNOVATIONS",
            aboutText: "SOFTFORGE INNOVATIONS",
            introMessage: "Hola!, Bienvenido a SOFTFORGE INNOVATIONS, ¿En que puedo ayudarte?",
            placeholderText: "Escribe un mensaje",
        };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</body>

</html>
