@extends('frontend.layouts.main')
@section('main-container')

    <!--All Time Hit Start-->
    <section class="all-time-hit all-time-hit--two">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">Most Popular Ad Choice</h2>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="service-available__right">
                        <form class="service-available__form">
                            <div class="service-available__input-box">
                                <input type="text" placeholder="Search here" name="search">
                                <button type="submit" class="service-available__btn thm-btn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>





{{--            ------------------------------** For Pc **-----------------------}}

            <ul class="all-time-hit__list list-unstyled most_popular_ad_for_pc ">
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
                <li class="all-time-hit__single wow fadeInUp" data-wow-delay="500ms">
                    <div class="all-time-hit__inner">
                        <div class="all-time-hit__img1">
                            <div class="all-time-hit-shape"></div>

                            <img src="{{ asset('frontend/images/brand/11.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#hm">
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

                            <img src="{{ asset('frontend/images/brand/12.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#liberty">
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

                            <img src="{{ asset('frontend/images/brand/13.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#pringles">
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

                            <img src="{{ asset('frontend/images/brand/14.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#tmobile">
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

                            <img src="{{ asset('frontend/images/brand/15.png') }}" alt="">
                            <div class="all-time-hit__video-link">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#choice">
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


    <!-------------------------For Mobile------------------------->

    <div class="container-fluid most_popular_ad_for_mobile">
        <div class="row">
            <ul class="all-time-hit__list list-unstyled">
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/01.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/02.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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

                    </li>
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/03.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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

                    </li>
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/04.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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

                    </li>
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/05.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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

                    </li>
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/06.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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

                    </li>
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/07.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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

                    </li>
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/08.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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

                    </li>
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/09.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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

                    </li>
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/10.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
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

                    </li>
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/11.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#hm">
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
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/12.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#liberty">
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
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/13.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#pringles">
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
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/14.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#tmobile">
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
                </div>
                <div class="col-lg-3 col-6">
                    <li class="all-time-hit__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="all-time-hit__inner">
                            <div class="all-time-hit__img1">
                                <div class="all-time-hit-shape"></div>

                                <img src="{{ asset('frontend/images/brand/15.png') }}" alt="">
                                <div class="all-time-hit__video-link1">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#choice">
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
                </div>

            </ul>
        </div>































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
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>CocaCola </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
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
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/gieco.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Geico </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
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
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/citibank.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Citi </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
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
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/pizzahut.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Pizza Hut </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
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
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Expedia </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
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
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Disney </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
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
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>McDonald's </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
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
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Starbucks </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
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
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/Subway.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Subway </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
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
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/Pepsi.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Pepsi </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal 11 -->
    <div class="modal fade" id="hm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header img" style="background-image: url('frontend/images/popup/11.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/hm.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>H&M </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal 12 -->
    <div class="modal fade" id="liberty" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header img" style="background-image: url('frontend/images/popup/12.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/liberty.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Liberty Mutual </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal 13 -->
    <div class="modal fade" id="pringles" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header img" style="background-image: url('frontend/images/popup/13.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/pringles.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Pringles </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal 14 -->
    <div class="modal fade" id="tmobile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header img" style="background-image: url('frontend/images/popup/14.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/TMOBILE.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>T Mobile </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal 15 -->
    <div class="modal fade" id="choice" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header img" style="background-image: url('frontend/images/popup/15.png');" >
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="container">
                        <!-- Media Player-->
                        <div class="mediPlayer" style="text-align:center;">
                            <audio class="listen" preload="none" data-size="250" src="{{asset('frontend/sounds/Pizzhutpepsi.mp3')}}"></audio>
                        </div>
                        <!-- Media Player / -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row brand-body">
                        <div class="col-md-8 brand-text">
                            <p> Company Name </p>
                            <h1>Choice Hotel </h1>
                        </div>
                        <div class="col-md-4 brand-time">

                            <time>Time:0.01 Seconds</time>
                            <p>7,732,008 Auditions Jun 13, 2008</p>
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
                        <div class="col-md-6 company-rating">
                            <img src="{{ asset('frontend/images/icon/ratings.png') }}">
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
                            <div class="col-md-12" style="margin-left:100px; font-size: 13px; margin-bottom: 50px;">

                                <input type="checkbox" id="privacy" name="privacy" value="privacy" style="font-size: 12px;">&nbsp;&nbsp;
                                By adding this ad to my playlist this form i confirm that i have read the privacy policy.....
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>







@endsection
