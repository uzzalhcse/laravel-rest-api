
<!--Site Footer Start-->
<footer class="site-footer">

    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__about-text-box">
                            <img class="footer-logo" src="frontend/images/resources/logo-4.png">

                            <p class="footer-widget__about-text">Earning has never </br> been so easy.</p>
                        </div>
                        <div class="site-footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links clearfix">
                        <h3 class="footer-widget__title">Links</h3>
                        <ul class="footer-widget__links-list list-unstyled clearfix">
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{ route('pricing') }}">Our Pricing</a></li>
                            <li><a href="{{ route('whyatc') }}">Why ATC ?</a></li>
                            <li><a href="#"> Partner With us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__links clearfix">
                        <h3 class="footer-widget__title">Policies</h3>
                        <ul class="footer-widget__links-list list-unstyled clearfix">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Payouts</a></li>
                            <li><a href="#">Advertiser</a></li>
                            <li><a href="#"> Global Coverage</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <h3 class="footer-widget__title1"><a style="color: white;" href="{{route('contact')}}">Say hello!</a></h3>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li>
                                <div class="text">
                                    <p><a href="support@adstocall.com ">support@adstocall.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <p><a href="tel:8898006802" style="color:white;">+88 (9800) 6802</a></p>
                                </div>
                            </li>

                            <div class="text">
                                <p style="font-size:19px; color:white; padding-top:20px;">30 Broklyern Goldin Street, New York, United States of America</p>
                            </div>

                            <li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="row">
                <div class="col-xl-8">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© All Copyright 2022 by <a href="{{ asset('/') }}">Adstocall.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="site-footer__bottom-inner">
                        <img class="footer-bottom-logo " src="frontend/images/resources/cards.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{route('home')}}" aria-label="logo image"><img src="{{ asset('frontend/images/resources/logo-2.png') }}" width="125" height="43" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:support@adstocall">support@adstocall.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">+88(9800)6802</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->

    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


<script src="{{ asset('frontend/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('frontend/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('frontend/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/vendors/timepicker/timePicker.js') }}"></script>
<script src="{{ asset('frontend/vendors/circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('frontend/vendors/circleType/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/jvectormap/jquery.vmap.js') }}"></script>
<script src="{{ asset('frontend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- Vector Map -->

<script src="{{asset('frontend/vendors/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('frontend/vendors/jvectormap/jquery-jvectormap-2.0.2.min.js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>







<!-- template js -->
<script src="{{ asset('frontend/js/zeinet.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{asset('frontend/js/player.js')}}"></script>


{{----------------------Media Player js --------------}}

<script>
    $(document).ready(function () {
        $('.mediPlayer').mediaPlayer();
    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>



</body
</html>
