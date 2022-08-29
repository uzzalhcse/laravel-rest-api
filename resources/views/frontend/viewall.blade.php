@extends('frontend.layouts.main')
@section('main-container')

    <!--All Time Hit Start-->
    <section class="all-time-hit all-time-hit--two">
        <div class="container">
            <div class="section-title text-left">
                <span class="section-title__tagline">All Brands</span>
                <h2 class="section-title__title">Most Popular Ad Choice</h2>
            </div>
            <ul class="all-time-hit__list list-unstyled">
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>

                            <img src="{{ asset('frontend/images/brand/01.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#cocacola">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>

                </li>
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="200ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>
                            <img src="{{ asset('frontend/images/brand/02.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#geico">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="300ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>
                            <img src="{{ asset('frontend/images/brand/03.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#citi">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="400ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>
                            <img src="{{ asset('frontend/images/brand/04.png') }}" alt="">

                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#pizzahut">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="500ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>

                            <img src="{{ asset('frontend/images/brand/05.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#expedia">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="500ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>

                            <img src="{{ asset('frontend/images/brand/06.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#disney">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="500ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>

                            <img src="{{ asset('frontend/images/brand/07.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#mcdonalds">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="500ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>

                            <img src="{{ asset('frontend/images/brand/08.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#starbucks">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="500ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>

                            <img src="{{ asset('frontend/images/brand/09.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#subway">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="500ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>

                            <img src="{{ asset('frontend/images/brand/10.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#pepsi">
                                    <div class="all-time-hit__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="all-time-hit__content">

                                <p class="all-time-hit__text">2020 <i class="fa fa-star"></i> <span>6.5</span></p>
                            </div>
                        </div>
                    </div>
                </li>



            </ul>
        </div>
    </section>
    <!--All Time Hit End-->





    <!-- Modal Start Here -->
    <!-- Modal 01 -->
    <div class="modal fade" id="cocacola" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style="background-image: url('frontend/images/popup/1.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="frontend/sounds/blanco.mp3"></audio>
                        </div>

                        <!-- Media Player / -->

                        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

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
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">CocaCola </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 30px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy and agree More--
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 02 -->
    <div class="modal fade" id="geico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style=" background-image: url('frontend/images/popup/2.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src= url('frontend/sounds/cococola.mp3');></audio>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">Geico </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 30px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy and agree</br> to the>
                                processing of my personal data by  for this stated purposes.In case of consent, -MORE
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 03 -->
    <div class="modal fade" id="citi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style=" background-image: url('frontend/images/popup/3.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src= url('frontend/sounds/cococola.mp3');></audio>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">Citi </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 60px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data
                                by Personio for this stated purposes. In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy More-
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 04 -->
    <div class="modal fade" id="pizzahut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style=" background-image: url('frontend/images/popup/4.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src= url('frontend/sounds/cococola.mp3');></audio>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">Pizza Hut </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 60px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data
                                by Personio for this stated purposes. In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy and agree - More
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 05 -->
    <div class="modal fade" id="expedia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style=" background-image: url('frontend/images/popup/5.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src= url('frontend/sounds/cococola.mp3');></audio>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">Expedia </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 60px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data
                                by Personio for this stated purposes. In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy and agree - More
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 06 -->
    <div class="modal fade" id="disney" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style=" background-image: url('frontend/images/popup/6.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src= url('frontend/sounds/cococola.mp3');></audio>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">Disney </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 60px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data
                                by Personio for this stated purposes. In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy and agree - More
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 07 -->
    <div class="modal fade" id="mcdonalds" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style=" background-image: url('frontend/images/popup/7.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src= url('frontend/sounds/cococola.mp3');></audio>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">MCDonald's </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 60px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data
                                by Personio for this stated purposes. In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy and agree - More
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 08 -->
    <div class="modal fade" id="starbucks" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style=" background-image: url('frontend/images/popup/8.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src= url('frontend/sounds/cococola.mp3');></audio>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">Starbucks </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 60px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data
                                by Personio for this stated purposes. In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy and agree- More
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 09 -->
    <div class="modal fade" id="pepsi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style=" background-image: url('frontend/images/popup/9.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src= url('frontend/sounds/cococola.mp3');></audio>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">Pepsi </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 60px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data
                                by Personio for this stated purposes. In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy and agree - More
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 10 -->
    <div class="modal fade" id="subway" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header img" style=" background-image: url('frontend/images/popup/10.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src= url('frontend/sounds/cococola.mp3');></audio>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">
                    <div class="row" style="  margin-top: -30px; background-color: white; border-radius: 24px; padding-left: 10px;">
                        <div class="col-md-8" style="margin-top: 20px;">
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 18px;line-height: 10px; color: #212121;"> Company Name </p>
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 34px;line-height: 80px;color: #212121;">Subway </h1>
                        </div>
                        <div class="col-md-4" style="margin-top: 25px;">

                            <time style="border:2px solid gray; padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom:10px; border-radius:10px; ">Time:0.01 Seconds</time>
                            <p style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 12px;line-height: 54px; color: #000000">7,732,008 Auditions Jun 13, 2008</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">

                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row" style="padding-left: 10px; padding-top:30px; padding-bottom:10px;">
                        <div class="col-md-6">
                            <h1 style="font-family: 'Poppins';font-style: normal;font-weight: 600;font-size: 20px;line-height: 60px;color: #000000;">Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11" style="margin-left: 20px; margin-right: 20px; padding-top:30px; padding-bottom: 50px; border:1px solid #80808030;">
                            <p style="font-family: 'Poppins';font-style: normal;font-size: 14px;line-height: 30px;color: #000000;">

                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data
                                by Personio for this stated purposes. In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}" style="width:100%; height:auto; margin-left:10px; margin-bottom: 50px; ">
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12 text-center">
                                <button type="button" style="padding-left:150px; padding-right:150px; padding-top:13px; padding-bottom:13px;
                    background:#5415A4; border-radius: 10px; color:white; font-size: 18px;font-weight: 600; border:none;
                    margin-bottom: 40px; ">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy and agree- More
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
