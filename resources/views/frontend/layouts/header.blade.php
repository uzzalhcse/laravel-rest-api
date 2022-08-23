<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Ads To Call</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="frontend/images/favicons/site.webmanifest" />
    <meta name="description" content="Zeinet HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">


        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('frontend/vendors/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontrnd/vendors/animate/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/animate/custom-animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/fontawesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/jarallax/jarallax.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/nouislider/nouislider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/nouislider/nouislider.pips.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/odometer/odometer.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/swiper/swiper.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/zeinet-icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendors/tiny-slider/tiny-slider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/reey-font/stylesheet.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/owl.theme.default.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/bxslider/jquery.bxslider.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/vegas/vegas.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/jquery-ui/jquery-ui.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main-responsive.css') }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
         <header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-three__wrapper-inner clearfix">
                        <div class="main-menu-three__left">
                            <div class="main-menu-three__logo">
                                <a href="i{{ asset('/') }}"><img src="frontend/images/resources/logo-2.png" alt="" width="229px" height="39px"></a>
                            </div>
                        </div>
                        <div class="main-menu-three__left">
                            <div class="main-menu-three__right-inner">
                                <div class="main-menu-three__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown current megamenu">
                                            <a href="{{ asset('/') }}">Home </a>

                                        </li>

                                        <li class="dropdown">
                                            <a href="{{asset('/service') }}">Services</a>
                                            <ul class="shadow-box">
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="services-carousel.html">Services carousel</a></li>
                                                <li><a href="broadband.html">Broadband</a></li>
                                                <li><a href="tv-streaming.html">TV & streaming</a></li>
                                                <li><a href="all-for-mobile.html">All for mobile</a></li>
                                                <li><a href="fast-internet.html">Fast Internet</a></li>
                                                <li><a href="satelite-tv.html">Satelite TV</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a href="{{ asset('/pricing') }}">Pricing</a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Shop</a>
                                            <ul class="shadow-box">
                                                <li><a href="products.html">Products</a></li>
                                                <li><a href="product-details.html">Product details</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="main-menu-three__right">
                                <div class="main-menu-three__main-menu-content-box">
                                    <div class="main-menu-three__search-help-line-btn-box">
                                        <div class="main-menu-three__placead-box">
                                            <a href="{{ asset('/') }}" class="thm-btn1 main-menu-three__btn">Place A ad</a>
                                        </div>
                                        <div class="main-menu-three__btn-box">
                                            <a href="https://admin.adstocall.com/html" class="thm-btn2 main-menu-three__btn">Sign Up</a>
                                        </div>
                                        <div class="main-menu-three__btn-box">
                                            <a href="{{ asset('frontend/login/login.html') }}" class="thm-btn3 main-menu-three__btn">Login</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->






