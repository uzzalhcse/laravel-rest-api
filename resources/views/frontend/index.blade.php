@extends('frontend.layouts.main')
@section('main-container')

    <!--Main Slider Start-->
    <section class="main-slider-two clearfix">

        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 0, "loop": no,
            "effect": "zoom",
            "autoplay": {
            "delay": 5000
            }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer-two"
                         style="background-image: url(frontend/images/backgrounds/main-slider.png);"></div>

                    <div class="container-fluid">
                        <div class="row slide-over">

                            <div class="col-8">

                                <div class="main-slider-two__video-box">
                                    <div class="main-slider-two__video-link">
                                        <a href="{{url('/frontend/video/atc.mp4') }}" class="video-popup">
                                            <div class="main-slider-two__video-icon">
                                                <span class="fa fa-play fa-mobile"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                        <div class="main-slider-two__video-text-box">
                                            <p class="main-slider-two__video-text">Watch the Video</p>
                                            <div class="main-slider-two__video-arrow float-bob-y">
                                                <img src="assets/images/icon/save-money-video-arrow.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-8">
                                <div class="two__content slider-content">
                                    <div class="main-slider-two__title-box">

                                        <h2 class="main-slider-two__title">Get Paid</h2>

                                        <p class="main-slider-two__text-2">Everytime your Phone Rings</p>

                                        <div class="btn--box">
                                            <a href="#" class="thm-btn slider-btn"> Sign Up To Earn</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--Main Slider End-->


    <!--MostPopular Ad start -->
    <section class="most_popular">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-9">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">Most Popular Ad Choice</h2>
                    </div>
                </div>

                <div class="col-md-2 col-3">
                    <h2 class="section-title__title1"><a href={{route('viewall')}}>View All</a></h2>
                </div>
            </div>

            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 5, "slidesPerView": 9, "autoplay": { "delay": 3000 }, "breakpoints": {
                                    "0": {
                                        "spaceBetween": 4,
                                        "slidesPerView": 3
                                    },
                                    "375": {
                                        "spaceBetween": 4,
                                        "slidesPerView": 3
                                    },
                                    "575": {
                                        "spaceBetween": 4,
                                        "slidesPerView": 3
                                    },
                                    "767": {
                                        "spaceBetween": 4,
                                        "slidesPerView": 5
                                    },
                                    "991": {
                                        "spaceBetween": 4,
                                        "slidesPerView": 5
                                    },
                                    "1191": {
                                        "spaceBetween": 4,
                                        "slidesPerView": 6
                                    },

                                    "1391": {
                                        "spaceBetween": 4,
                                        "slidesPerView": 8
                                    }

                                }}'>


                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/01.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/02.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/03.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/04.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/05.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/06.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/07.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/08.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/09.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="all-time-hit__img">
                            <div class="all-time-hit-shape"></div>
                            <img class="most_popular_img"src="{{ asset('frontend/images/brand/10.png') }}" alt="">
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
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--MostPopular Ad End-->



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
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/cococola.mp3')}}"></audio>
                        </div>
                    <!-- Media Player / -->
                </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>CocaCola </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                            <div class="col-md-12 text-center">
                                <button type="button">Add to Playlist</button>
                            </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

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
                <div class="modal-header img" style="background-image: url('frontend/images/popup/2.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/Gieco.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>Geico </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button type="button">Add to Playlist</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

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
                <div class="modal-header img" style="background-image: url('frontend/images/popup/3.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/Citibank.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>Citibank </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button type="button">Add to Playlist</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

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
                <div class="modal-header img" style="background-image: url('frontend/images/popup/4.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/Pizzahut.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>Pizzahut </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button type="button">Add to Playlist</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

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
                <div class="modal-header img" style="background-image: url('frontend/images/popup/5.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/expedia.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>Expedia </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button type="button">Add to Playlist</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

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
                <div class="modal-header img" style="background-image: url('frontend/images/popup/6.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/disney.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>Disney </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button type="button">Add to Playlist</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

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
                <div class="modal-header img" style="background-image: url('frontend/images/popup/7.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/Mcdonalds.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>McDonald's </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button type="button">Add to Playlist</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

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
                <div class="modal-header img" style="background-image: url('frontend/images/popup/8.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/Starbucks.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>Starbucks </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button type="button">Add to Playlist</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 09 -->
    <div class="modal fade" id="subway" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header img" style="background-image: url('frontend/images/popup/10.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/subway.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>Subway </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button type="button">Add to Playlist</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 10 -->
    <div class="modal fade" id="pepsi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header img" style="background-image: url('frontend/images/popup/9.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/pepsi.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-6 brand-text">
                            <h1>Pepsi </h1>
                            <div class="ratings">
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand-time">
                            <time><i class="far fa-clock"></i>&nbsp; Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="border: 1px solid #80808030 ;">
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row company-bio">
                        <div class="col-md-6 ">
                            <h1>Company Bio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 company-txt">
                            <p>
                                By submitting this form i confirm that i have read the privacy policy and agree to the processing of my personal data by Personio for this stated purposes.
                                In case of consent, I can revoke my consent to this processing at any time
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button type="button">Add to Playlist</button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">By adding this ad to my playlist this form i confirm that i have read the privacy policy</label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!--Free Access Start-->
        <section class="free-access">
              <div class="free-access-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(frontend/images/resources/featured.png);">
            </div>
          <div class="free-access-shape-1 float-bob-x">
                <img src="{{ url('frontend/images/shapes/free-access-shape.png') }}" alt="">
            </div>
            <div class="free-access-shape-2">
                <img src="{{ url('frontend/images/shapes/free-access-shape-2.png') }}" alt="">
            </div>
            <div class="free-access-shape-3">
                <img src="{{ url('frontend/images/shapes/free-access-shape-3.png') }}" alt="">
            </div>
         <div class="container">
                <div class="free-access__inner">
                    <h2 class="free-access__title">Get Paid Every 30 Days With Unlimited Ads To Choose From </h2>
                    <div class="free-access__btn-box">
                        <a href="{{ url('/pricing') }}" class="free-access__btn">Get started now</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Free Access End-->


    <!--Free Access Start for Mobile-->
    <section class="free-access1">
        <div class="free-access-bg"
             style="background-image: url(frontend/images/resources/featured.png);">
        </div>
        <div class="free-access-shape-1 float-bob-x">
            <img src="{{ url('frontend/images/shapes/free-access-shape.png') }}" alt="">
        </div>
        <div class="free-access-shape-2">
            <img src="{{ url('frontend/images/shapes/free-access-shape-2.png') }}" alt="">
        </div>
        <div class="free-access-shape-3">
            <img src="{{ url('frontend/images/shapes/free-access-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="free-access__inner">
                <h2 class="free-access1__title">Get Paid Every 30 Days With <br>Unlimited Ads To Choose From </h2>
                <div class="free-access__btn-box">
                    <a href="{{ url('/pricing') }}" class="free-access__btn">Get started now</a>
                </div>

            </div>
        </div>
    </section>
    <!--Free Access for mobile End-->


<!--Counter One Start-->
        <section class="counter-one">
            <div class="container">
                <div class="counter-one__inner">

                    <ul class="list-unstyled counter-one__list">

                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="150">00</h3>
                            </div>
                            <p class="counter-one__text">Countries Globally</p>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="2">00</h3> &nbsp; <b style="font-size:30px; padding-top:30px;">Billion</b>
                            </div>
                            <p class="counter-one__text">Countries Globally</p>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="300">00</h3>
                            </div>
                            <p class="counter-one__text"> Network Providers</p>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="100">00</h3> &nbsp; <b style="font-size:30px; padding-top:30px;">K</b>
                            </div>
                            <p class="counter-one__text">Countries Globally</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Counter One Start for mobile-->
        <section class="counter-mobile">
        <div class="container">
            <div class="counter-mobile__inner">
                <ul class="list-unstyled counter-one__list">
                    <li class="counter-mobile__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="150">00</h3>
                        </div>
                        <p class="counter-mobile__text">Countries Globally</p>
                    </li>
                    <li class="counter-mobile__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="2">00</h3>&nbsp;<b style="font-size:20px; padding-top:30px; color: #0a0302;">Bln</b>
                        </div>
                        <p class="counter-mobile__text"> Users Daily</p>
                    </li>
                    <li class="counter-mobile__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="300">00</h3>
                        </div>
                        <p class="counter-mobile__text"> Network Providers</p>
                    </li>
                    <li class="counter-mobile__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="100">00 &nbsp;</h3>
                        </div>
                        <p class="counter-mobile__text"> Paid Out Daily</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
        <!--Counter One End for Mobile-->

   <!--Watch Devices Start-->
        <section class="watch-devices">
            <div class="container">
                <div class="watch-devices__content">
                    <div class="section-title text-center">

                        <h2 class="section-title__title">Works on Any Device with <br>A sim  Card</h2>
                    </div>
                    <p class="watch-devices__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </br>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="watch-devices__img-box">
                        <img src="{{ url('frontend/images/resources/devices.png') }}" alt="">
                        <div class="watch-devices__price-box">
                            <div class="watch-devices__price-box-shape"
                                style="background-image: url(frontend/images/shapes/watch-devices-price-shape.png);">
                            </div>
                            <h4>Start</h4>
                            <p>Earning Now</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Watch Devices End-->


    <!--Getting Started for PC-->
         <section class="getting_started">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Getting started is simple.</h2>
                </div>

                <div class="container-fluid">
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-lg-4 col-6">
                        <div class="stage-box__img-box">
                            <img src="{{ url('frontend/images/shapes/1.png') }}" alt="">
                        </div>
                        <div class="stage-background__img-box">
                            <img src="{{ url('frontend/images/resources/stage1.png') }}" alt="">
                        </div>
                            <p class="watch-devices__text"></br>Create an account submit and verify your phone number,s agree to terms and condition</p>
                        </div>

                    <!--Feature One Single End-->

                    <!--Feature One Single Start-->
                    <div class="col-lg-4 col-6">
                        <div class="stage-box__img-box">
                            <img src="{{ url('frontend/images/shapes/2.png') }}" alt="">
                        </div>
                        <div class="stage-background__img-box">
                            <img src="{{ url('frontend/images/resources/stage2.png') }}" alt="">
                        </div>
                            <p class="watch-devices__text"></br> Select the preffered ads or song  you would like to play when anyone calls your telephone number.</p>
                        </div>
                    <!--Feature One Single End-->

                    <!--Feature One Single Start-->
                    <div class="col-lg-4 col-6">
                        <div class="stage-box__img-box">
                            <img src="{{ url('frontend/images/shapes/3.png') }}" alt="">
                        </div>
                        <div class="stage-background__img-box">
                            <img src="{{ url('frontend/images/resources/stage3.png') }}" alt="">
                        </div>
                            <p class="watch-devices__text"></br>Instantly start earning from every call you recieve, transfer to your bank acount or paypal.</p>
                        </div>
                    </div>
                    <!--Feature One Single End-->

                </div>
            </div>
            </div>
        </section>
        <!--Getting Started end-->

    <!--Getting Started for mobile-->
    <section class="getting_startedmobile">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">How Adstocall Work ?</h2>
            </div>

            <div class="container-fluid">
                <!--Feature One Single Start-->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <div class="mobile-background__img-box">
                            <img src="{{ url('frontend/images/resources/stage1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="mobile-devices__img-box">
                            <img src="{{ url('frontend/images/shapes/1.png') }}" alt="">
                        </div>
                        <p class="mobile-devices__text"></br>Create an account submit and verify your phone number,s agree to terms and condition</p>
                        <div>
                  </div>
                    </div>
                </div>
                <!--Feature One Single End-->

                <!--Feature One Single Start-->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <div class="mobile-devices__img-box">
                            <img src="{{ url('frontend/images/shapes/2.png') }}" alt="">
                        </div>
                        <p class="mobile-devices__text"></br>Create an account submit and verify your phone number,s agree to terms and condition</p>
                        <div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="mobile-background__img-box">
                            <img src="{{ url('frontend/images/resources/stage2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <!--Feature One Single End-->


                <!--Feature One Single Start-->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <div class="mobile-background__img-box">
                            <img src="{{ url('frontend/images/resources/stage3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="mobile-devices__img-box">
                            <img src="{{ url('frontend/images/shapes/3.png') }}" alt="">
                        </div>
                        <p class="mobile-devices__text"></br>Create an account submit and verify your phone number,s agree to terms and condition</p>
                        <div>
                        </div>
                    </div>
                </div>
                <!--Feature One Single End-->
        </div>
        </div>
    </section>
    <!--Getting Started End-->
    
        <!--Customer Start-->
       <section class="customer">
            <div class="container">
                <div class="section-title text-left">
                    <h2 class="section-title__title">Our Customers</h2>
                </div>
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 30, "slidesPerView": 6, "autoplay": { "delay": 3000 }, "breakpoints": {
                                    "0": {
                                        "spaceBetween": 10,
                                        "slidesPerView": 4
                                    },
                                    "375": {
                                        "spaceBetween": 10,
                                        "slidesPerView": 4
                                    },
                                    "575": {
                                        "spaceBetween": 10,
                                        "slidesPerView": 4
                                    },

                                    "575": {
                                        "spaceBetween": 10,
                                        "slidesPerView": 5
                                    },

                                    "767": {
                                        "spaceBetween": 10,
                                        "slidesPerView": 5
                                    },
                                    "767": {
                                        "spaceBetween": 10,
                                        "slidesPerView": 5
                                    },
                                    "991": {
                                        "spaceBetween": 10,
                                        "slidesPerView": 6
                                    },
                                    "1440": {
                                       "spaceBetween": 10,
                                       "slidesPerView": 6
                                    },
                                    "1800": {
                                       "spaceBetween": 10,
                                       "slidesPerView": 7
                                    },

                                     "2560": {
                                       "spaceBetween": 10,
                                       "slidesPerView": 9
                                    }

                                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="brand-slider" src="frontend/images/brand/brand01.png" alt="" >
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="brand-slider" src="frontend/images/brand/brand02.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="brand-slider" src="frontend/images/brand/brand03.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="brand-slider" src="frontend/images/brand/brand04.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="brand-slider" src="frontend/images/brand/brand05.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="brand-slider" src="frontend/images/brand/brand06.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="brand-slider" src="frontend/images/brand/brand01.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="brand-slider" src="frontend/images/brand/brand02.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="brand-slider" src="frontend/images/brand/brand03.png" alt="">
                        </div><!-- /.swiper-slide -->

                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--customer End-->



        <!--Become An Advertiser Start-->
        <section class="newsletter">
            <div class="container">
                <div class="newsletter__inner">
                    <div class="newsletter__left">

                        <div class="newsletter__content desktop mobile">
                            <h3>Become an Advertiser</h3>
                        </div>
                    </div>

                    <div class="newsletter__right">
                        <div class="newsletter__content">
                            <h4>Sign Up to Earn </h4>
                        </div>
                        <div class="newsletter__content">
                            <h5><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp; Share </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Become An Advertiser  End-->



        <!--FAQ One Start-->
        <section class="faq-one">
            <div class="faq-one__wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="faq-one__left">
                                <div class="section-title text-left">

                                    <h2 class="section-title__title">Have any questions </br>about AdsToCall?</h2>
                                </div>
                                <div class="faq-one__left-content">
                                    <div class="faq-one__left-img">
                                        <img src="{{ url('frontend/images/resources/logo-3.png') }}" alt="">
                                    </div>
                                    <div class="faq-one__left-text-box">
                                        <p class="faq-one__left-text">Suspendisse finibus urna mauris, vitae consequat
                                            quam vel. Vestibulum leo ligula, vitae commodo nisl lorem ipsum is simply
                                            free text.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="faq-one__right">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>How do I get my ad on Adstocall??</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages of available, but the majority
                                                    have suffered alteration in some form.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>How much can i earn per call?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages of available, but the majority
                                                    have suffered alteration in some form.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4>Will i get  calls from any telemarketer?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages of available, but the majority
                                                    have suffered alteration in some form.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ One End-->



        <!--Digital Billboard Start-->
      <section class="digital_billboard">
            <div class="container">
                <div class="section-title text-left">
                    <h2 class="section-title__title">Digital Billboard</h2>
                </div>
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 300, "slidesPerView": 5, "autoplay": { "delay": 3000 }, "breakpoints": {
                                    "0": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 3
                                    },
                                    "375": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 3
                                    },
                                    "575": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 3
                                    },

                                    "767": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 4
                                    },
                                    "991": {
                                        "spaceBetween": 50,
                                        "slidesPerView": 5
                                    },

                                    "1680": {
                                        "spaceBetween": 50,
                                        "slidesPerView": 5
                                    },


                                    "1800": {
                                        "spaceBetween": 50,
                                        "slidesPerView": 5
                                    }

                                }}'>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="billboard_img" src="frontend/images/resources/01.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="billboard_img" src="frontend/images/resources/02.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="billboard_img" src="frontend/images/resources/03.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="billboard_img" src="frontend/images/resources/04.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="billboard_img"src="frontend/images/resources/05.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="billboard_img" src="frontend/images/resources/01.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="billboard_img" src="frontend/images/resources/03.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="billboard_img" src="frontend/images/resources/04.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img class="billboard_img" src="frontend/images/resources/01.png" alt="">
                        </div><!-- /.swiper-slide -->

                    </div>
                </div>
            </div>
        </section>
        <!--Digital billboard End-->



        <!--News One Start-->
         <section class="newsblog">
            <div class="container">
                <div class="section-title text-left">

                    <h2 class="section-title__title">Our Latest News & Articles</h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <img src="{{ url('frontend/images/blog/news01.png') }}" alt="">
                                <a href="news-details.html"><span class="icon-plus-symbol"></span></a>
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content">
                                    <ul class="news-one__meta list-unstyled">
                                        <li>
                                            <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                        </li>
                                        <li>
                                            <a href="news-details.html"><i class="fas fa-comments"></i>02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">The best usage of the fiber
                                            internet from
                                            broadband</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <a href="news-details.html" class="news-one__read-more">Read More</a>
                                </div>
                                <div class="news-one__date">
                                    <p>18 may</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <img src="{{ url('frontend/images/blog/news02.png') }}" alt="">
                                <a href="news-details.html"><span class="icon-plus-symbol"></span></a>
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content">
                                    <ul class="news-one__meta list-unstyled">
                                        <li>
                                            <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                        </li>
                                        <li>
                                            <a href="news-details.html"><i class="fas fa-comments"></i>02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">Lorem ipsum dolor sit amet,
                                            consectetur </a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <a href="news-details.html" class="news-one__read-more">Read More</a>
                                </div>
                                <div class="news-one__date">
                                    <p>18 may</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <img src="{{ url('frontend/images/blog/news03.png') }}" alt="">
                                <a href="news-details.html"><span class="icon-plus-symbol"></span></a>
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content">
                                    <ul class="news-one__meta list-unstyled">
                                        <li>
                                            <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                        </li>
                                        <li>
                                            <a href="news-details.html"><i class="fas fa-comments"></i>02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">Suspendisse posuere, leo ac
                                            laoreet dapibus, urna</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <a href="news-details.html" class="news-one__read-more">Read More</a>
                                </div>
                                <div class="news-one__date">
                                    <p>18 may</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->

                    <!--News One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <img src="{{ url('frontend/images/blog/news04.png') }}" alt="">
                                <a href="news-details.html"><span class="icon-plus-symbol"></span></a>
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content">
                                    <ul class="news-one__meta list-unstyled">
                                        <li>
                                            <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                        </li>
                                        <li>
                                            <a href="news-details.html"><i class="fas fa-comments"></i>02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">Suspendisse posuere, leo ac
                                            laoreet dapibus, urna</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <a href="news-details.html" class="news-one__read-more">Read More</a>
                                </div>
                                <div class="news-one__date">
                                    <p>18 may</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->


    <!--News Carousel Start-->
    <section class="news-carousel-page">
        <div class="container">
            <div class="section-title text-left">
                <h2 class="section-title__title">Our Latest News & Articles </h2>
            </div>
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 300, "slidesPerView": 5, "autoplay": { "delay": 2000 }, "breakpoints": {
                                    "0": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "375": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "575": {
                                        "spaceBetween": 30,
                                        "slidesPerView":1
                                    },

                                    "767": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 2
                                    },
                                    "991": {
                                        "spaceBetween": 50,
                                        "slidesPerView": 5
                                    },

                                    "1680": {
                                        "spaceBetween": 50,
                                        "slidesPerView": 5
                                    },


                                    "1800": {
                                        "spaceBetween": 50,
                                        "slidesPerView": 5
                                    }

                                }}'>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                            <div class="news-one__single">
                                <div class="news-one__img-box">
                                    <img src="{{ url('frontend/images/blog/news01.png') }}" alt="">
                                    <a href="news-details.html"><span class="icon-plus-symbol"></span></a>
                                </div>
                                <div class="news-one__content-box">
                                    <div class="news-one__content">
                                        <ul class="news-one__meta list-unstyled">
                                            <li>
                                                <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                            </li>
                                            <li>
                                                <a href="news-details.html"><i class="fas fa-comments"></i>02 Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="news-details.html">The best usage of the fiber
                                                internet from
                                                broadband</a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <a href="news-details.html" class="news-one__read-more">Read More</a>
                                    </div>
                                    <div class="news-one__date">
                                        <p>18 may</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                            <div class="news-one__single">
                                <div class="news-one__img-box">
                                    <img src="{{ url('frontend/images/blog/news02.png') }}" alt="">
                                    <a href="news-details.html"><span class="icon-plus-symbol"></span></a>
                                </div>
                                <div class="news-one__content-box">
                                    <div class="news-one__content">
                                        <ul class="news-one__meta list-unstyled">
                                            <li>
                                                <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                            </li>
                                            <li>
                                                <a href="news-details.html"><i class="fas fa-comments"></i>02 Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="news-details.html">Lorem ipsum dolor sit amet,
                                                consectetur </a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <a href="news-details.html" class="news-one__read-more">Read More</a>
                                    </div>
                                    <div class="news-one__date">
                                        <p>18 may</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                            <div class="news-one__single">
                                <div class="news-one__img-box">
                                    <img src="{{ url('frontend/images/blog/news03.png') }}" alt="">
                                    <a href="news-details.html"><span class="icon-plus-symbol"></span></a>
                                </div>
                                <div class="news-one__content-box">
                                    <div class="news-one__content">
                                        <ul class="news-one__meta list-unstyled">
                                            <li>
                                                <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                            </li>
                                            <li>
                                                <a href="news-details.html"><i class="fas fa-comments"></i>02 Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="news-details.html">Suspendisse posuere, leo ac
                                                laoreet dapibus, urna</a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <a href="news-details.html" class="news-one__read-more">Read More</a>
                                    </div>
                                    <div class="news-one__date">
                                        <p>18 may</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                            <div class="news-one__single">
                                <div class="news-one__img-box">
                                    <img src="{{ url('frontend/images/blog/news04.png') }}" alt="">
                                    <a href="news-details.html"><span class="icon-plus-symbol"></span></a>
                                </div>
                                <div class="news-one__content-box">
                                    <div class="news-one__content">
                                        <ul class="news-one__meta list-unstyled">
                                            <li>
                                                <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                            </li>
                                            <li>
                                                <a href="news-details.html"><i class="fas fa-comments"></i>02 Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="news-details.html">Suspendisse posuere, leo ac
                                                laoreet dapibus, urna</a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <a href="news-details.html" class="news-one__read-more">Read More</a>
                                    </div>
                                    <div class="news-one__date">
                                        <p>18 may</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--News One Single End-->
                    </div><!-- /.swiper-slide -->

                </div>
            </div>
        </div>
    </section>
    <!--Digital billboard End-->



    <!--NewsLetter Start-->
        <section class="newsletter">
            <div class="container">
                <div class="newsletter__inner">
                    <div class="newsletter__left">

                        <div class="newsletter__content">
                            <h1>Join Our Newsletter</h1>
                        </div>
                    </div>
                    <div class="newsletter__right1">
                        <form class="newsletter__form">
                            <div class="newsletter__input-box">
                                <input type="email" placeholder="Email address" name="email">
                                <button type="submit" class="newsletter__btn thm-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Newsletter End-->

@endsection
