@extends('frontend.layouts.main')
@section('main-container')



    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">contact with us</span>
                            <h2 class="section-title__title" style="line-height: 45px;">Ready to get in touch
                                with AdsToCall</h2>
                        </div>
                        <p class="contact-page__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <ul class="list-unstyled contact-page__contact-list">
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <p>Have any question?</p>
                                    <h4><a href="tel:8898006802">Free +88 (9800) 6802</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="content">
                                    <p>Write email</p>
                                    <h4><a href="mailto:needhelp@company.com">support@adstocall.com</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-placeholder"></span>
                                </div>
                                <div class="content">
                                    <p>Visit anytime</p>
                                    <h4>30 Broklyern Goldin Street, New York, <br>United States of America</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-page__right">
                        <div class="contact-page__content">
                            <div class="contact-page__content-inner">
                                <div class="contact-page-shape-1 float-bob-x">
                                    <img src="assets/images/shapes/contact-page-shape-1.png" alt="">
                                </div>
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">contact us</span>
                                    <h2 class="section-title__title">Write a message</h2>
                                </div>
                                <form action="assets/inc/sendemail.php"
                                      class="contact-page__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-page__form-input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__form-input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__form-input-box">
                                                <input type="text" placeholder="Phone number" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__form-input-box text-message-box">
                                            <textarea name="message" placeholder="Write a message"></textarea>
                                        </div>
                                        <div class="contact-page__btn-box">
                                            <button type="submit" class="thm-btn contact-page__btn">Send a
                                                message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Google Map Start-->
    <section class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map__one" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->














        @endsection
