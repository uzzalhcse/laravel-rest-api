@extends('frontend.layouts.main')
@section('main-container')


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url('frontend/images/backgrounds/callgirl.jpg')">
        </div>
        <div class="main-slider-border"></div>
        <div class="main-slider-border main-slider-border-two"></div>
        <div class="main-slider-border main-slider-border-three"></div>
        <div class="main-slider-border main-slider-border-four"></div>
        <div class="main-slider-border main-slider-border-five"></div>
        <div class="main-slider-border main-slider-border-six"></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="">Home</a></li>
                    <li><span>//</span></li>
                    <li>About</li>
                </ul>
                <h2>About us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->


    <!--About Four Start-->
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__img-box">
                            <div class="about-four__img-one">
                                <img src="frontend/images/resources/aboutus.webp" alt="">
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">about company</span>
                            <h2 class="section-title__title">Get to know about Ads To Call</h2>
                        </div>
                        <p class="about-four__text-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                            to make a type specimen book.
                            </p>
                        <ul class="about-four__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                                <div class="text">
                                    <p>Best Digital Service & solutions</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                                <div class="text">
                                    <p>Top quality services with reasonable price</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                                <div class="text">
                                    <p>Instantly start earning from every call </p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-four__btn-box">
                            <a href="" class="thm-btn about-four__btn">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-bg"
             style="background-image: url('frontend/images/backgrounds/testimonial.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">our feedbacks</span>
                            <h2 class="section-title__title">What they’re talking about Ads To Call</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                             data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2
                                    }
                                }
                            }'>
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                            amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua.</p>
                                        <div class="testimonial-one__shape-1"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__shape-2"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-2.png);">
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Kevin Martin</h4>
                                            <p class="testimonial-one__client-sub-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                            amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua.</p>
                                        <div class="testimonial-one__shape-1"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__shape-2"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-2.png);">
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Sarah Albert</h4>
                                            <p class="testimonial-one__client-sub-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                            amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua.</p>
                                        <div class="testimonial-one__shape-1"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__shape-2"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-2.png);">
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Christine Eve</h4>
                                            <p class="testimonial-one__client-sub-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                            amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua.</p>
                                        <div class="testimonial-one__shape-1"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__shape-2"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-2.png);">
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-4.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">David Cooper</h4>
                                            <p class="testimonial-one__client-sub-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                            amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua.</p>
                                        <div class="testimonial-one__shape-1"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__shape-2"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-2.png);">
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-5.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Alessha Brown</h4>
                                            <p class="testimonial-one__client-sub-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit
                                            amet, consect notted adipisicing elit sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua.</p>
                                        <div class="testimonial-one__shape-1"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                        </div>
                                        <div class="testimonial-one__shape-2"
                                             style="background-image: url(assets/images/shapes/testimonial-one-shape-2.png);">
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-6.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Mike Hardson</h4>
                                            <p class="testimonial-one__client-sub-title">Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->


@endsection
