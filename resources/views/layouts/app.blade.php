<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="site.webmanifest">

    <title>{{ $meta_title }}</title>

    @isset($meta_info)
        {{ $meta_info }}
    @endisset


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets') }}/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

    @isset($header_components)
        {{ $header_components }}
    @endisset

    @isset($css)
        <!-- Custom style -->
        {{ $css }}
    @endisset
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('/assets') }}/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!--$ Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('/assets') }}/img/logo/logo.png"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
                            <div class="main-menu black-menu menu-bg-white d-none d-lg-block">
                                <div class="hamburger hamburger--collapse">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                                <nav class="hamburger-menu">
                                    <ul id="navigation">
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <!-- Dropdown -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{ route('services') }}" id="navbardrop"
                                                data-toggle="dropdown">
                                                Services
                                            </a>
                                            <div class="dropdown-menu">
                                                @foreach ($services as $service)
                                                    <a class="dropdown-item" href="{{ route('services') }}">{{ $service->title }}</a>
                                                @endforeach
                                            </div>
                                        </li>
                                        <li><a href="{{ route('projects') }}">Project</a></li>
                                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                                        <li><a href="{{ route('contact') }}">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->

    <main>
        {{ $slot }}
    </main>


    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding section-bg"
            data-background="{{ asset('/assets') }}/img/gallery/footer_bg.png">
            <div class="container">
                <!-- Footer Top -->
                <div class="footer-top">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="{{ route('index') }}"><img
                                                src="{{ asset('/assets') }}/img/logo/logo2_footer.png"
                                                alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Consectetur adipisicinhg cvelicsed do eiusmod tempor inciducvccnt ut
                                                labosvrer adipisic.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#"> Offers & Discounts</a></li>
                                        <li><a href="#"> Get Coupon</a></li>
                                        <li><a href="{{ route('contact') }}"> Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>New Products</h4>
                                    <ul>
                                        <li><a href="#">Woman Cloth</a></li>
                                        <li><a href="#">Fashion Accessories</a></li>
                                        <li><a href="#"> Man Accessories</a></li>
                                        <li><a href="#"> Rubber made Toys</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href="#">Frequently Asked Questions</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Report a Payment Issue</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 col-md-7">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy; 2024 All rights reserved
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-5">
                            <div class="footer-copy-right f-right">
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('/') }}assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('/') }}assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('/') }}assets/js/popper.min.js"></script>
    <script src="{{ asset('/') }}assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('/') }}assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('/') }}assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('/') }}assets/js/wow.min.js"></script>
    <script src="{{ asset('/') }}assets/js/animated.headline.js"></script>
    <script src="{{ asset('/') }}assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="{{ asset('/') }}assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('/') }}assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('/') }}assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('/') }}assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('/') }}assets/js/waypoints.min.js"></script>
    <script src="{{ asset('/') }}assets/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('/') }}assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="{{ asset('/') }}assets/js/contact.js"></script>
    <script src="{{ asset('/') }}assets/js/jquery.form.js"></script>
    <script src="{{ asset('/') }}assets/js/jquery.validate.min.js"></script>
    <script src="{{ asset('/') }}assets/js/mail-script.js"></script>
    <script src="{{ asset('/') }}assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('/') }}assets/js/plugins.js"></script>
    <script src="{{ asset('/') }}assets/js/main.js"></script>

    @isset($footer_components)
        <!-- Optional JS -->
        {{ $footer_components }}
    @endisset

    @isset($js)
        <!-- Custom style -->
        {{ $js }}
    @endisset
</body>

</html>
