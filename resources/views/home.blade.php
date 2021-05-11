@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-4 bg_img oh bottom_left" data-background="{{ asset('assets/images/banner/banner-12-bg.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-content-3">
                        <h1 class="title">PipskomeEA Consult</h1>
                        <p>The PipskomeEA was launched in 2018. A forex signal website with a unique vision to provide exceptional superior trading setups quality education and state-of-the-art trading tools in the forex industry. As an outcome of a continuous focus on localizing our products and services to be suitable to each market.<br><br>

                            We are one of the best signal provider industry delivering up-to-date market news and analysis to professional & beginners. Together with our successful collaboration with talented and experienced teams from all over the world.
                        </p>
                        <div class="banner-button-group">
                            <a href="{{ url('products') }}" class="button-4">Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-nav-container bg_img bg_contain bottom_center"
                         data-background="assets/images/banner/banner-4.png">
                        <div class="ban-nav">
                            <a href="#0" class="ban-prev active">
                                <i class="flaticon-left"></i>
                            </a>
                            <a href="#0" class="ban-next">
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                        <div class="banner-4-slider owl-theme owl-carousel">
                            <div class="slide-item bg_img" data-background="{{ asset('screenshots/sc1.jpeg') }}">
                            </div>
                            <div class="slide-item bg_img" data-background="{{ asset('screenshots/sc2.jpeg') }}">
                            </div>
                            <div class="slide-item bg_img" data-background="{{ asset('screenshots/sc3.jpeg') }}">
                            </div>
                            <div class="slide-item bg_img" data-background="{{ asset('screenshots/sc4.jpeg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->

    <!--============= Pricing Section Starts Here =============-->
    <section class="pricing-section padding-top oh padding-bottom pb-lg-half bg_img pos-rel" data-background="{{ asset('./assets/images/bg/pricing-bg.jpg') }}" id="pricing">
        <div class="container">
            <div class="section-header cl-white">
                <h2 class="title" style="color: #22750B;">Features</h2>
            </div>
            <div class="tab-up">
                <ul class="tab-menu pricing-menu">
                    <li class="active">Monthly</li>
                    <li>Yearly</li>
                </ul>
                <div class="tab-area">
                    <div class="tab-item active">
                        <div class="pricing-slider-wrapper">
                            <div class="pricing-slider owl-theme owl-carousel">
                                <div class="pricing-item-2">
                                    <h5 class="cate">Pipskome EA V6.0</h5>
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/pricing/pricing1.png') }}" alt="pricing">
                                    </div>
                                    <p>
                                        Pipskome EA EA is an Expert Advisor which enables you to do automated trading.<br><br>
                                        it's strong analysis strategy will make you 5% on a daily basis.<br><br>
                                        you can run it 24/7 via VPS
                                    </p>
                                    <a href="#0" class="get-button">Select Plan<i class="flaticon-right"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Pricing Section Ends Here =============-->

    <!--============= Colaboration Section Starts Here =============-->
    <section class="colaboration-section padding-top-2 padding-bottom-2 oh" id="screenshot">
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse">
                <div class="col-lg-6 col-xl-7 rtl">
                    <div class="collaboration-anime-area">
                        <div class="main-thumb">
                            <img src="{{ asset('assets/images/collaboration/main.png') }}" alt="colaboration">
                        </div>
                        <div class="mobile wow slideInUp" data-wow-delay="1s">
                            <div class="show-up">
                                <img src="{{ asset('assets/images/collaboration/mobile.png') }}" alt="colaboration">
                            </div>
                            <div class="mobile-slider owl-theme owl-carousel ltr">
                                <div class="mobile-item bg_img" data-background="{{ asset('screenshots/sc1.jpeg') }}"></div>
                                <div class="mobile-item bg_img" data-background="{{ asset('screenshots/sc2.jpeg') }}"></div>
                                <div class="mobile-item bg_img" data-background="{{ asset('screenshots/sc3.jpeg') }}"></div>
                                <div class="mobile-item bg_img" data-background="{{ asset('screenshots/sc4.jpeg') }}"></div>
                            </div>
                        </div>
                        <div class="girl wow slideInLeft">
                            <img src="{{ asset('assets/images/collaboration/girl.png') }}" alt="colaboration">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="section-header left-style">
                        <h2 class="title">Easy & Perfect Solution</h2>
                        <p>
                            Numerous features make it possible to customize the system in accordance with all your needs.
                        </p>
                    </div>
                    <div class="colaboration-wrapper">
                        <div class="colaboration-slider owl-carousel owl-theme">
                            <div class="colaboration-item">
                                <div class="colaboration-thumb">
                                    <div class="icon">
                                        <i class="flaticon-data-management"></i>
                                    </div>
                                </div>
                                <div class="colaboration-content">
                                    <h4 class="title">Easy to Manage Your All Data</h4>
                                    <p>
                                        The satisfaction of users is the most important and the focus is on usability and completeness
                                    </p>
                                </div>
                            </div>
                            <div class="colaboration-item">
                                <div class="colaboration-thumb">
                                    <div class="icon">
                                        <i class="flaticon-data-management"></i>
                                    </div>
                                </div>
                                <div class="colaboration-content">
                                    <h4 class="title">Easy to Manage Your All Data</h4>
                                    <p>
                                        The satisfaction of users is the most important and the focus is on usability and completeness
                                    </p>
                                </div>
                            </div>
                            <div class="colaboration-item">
                                <div class="colaboration-thumb">
                                    <div class="icon">
                                        <i class="flaticon-data-management"></i>
                                    </div>
                                </div>
                                <div class="colaboration-content">
                                    <h4 class="title">Easy to Manage Your All Data</h4>
                                    <p>
                                        The satisfaction of users is the most important and the focus is on usability and completeness
                                    </p>
                                </div>
                            </div>
                            <div class="colaboration-item">
                                <div class="colaboration-thumb">
                                    <div class="icon">
                                        <i class="flaticon-data-management"></i>
                                    </div>
                                </div>
                                <div class="colaboration-content">
                                    <h4 class="title">Easy to Manage Your All Data</h4>
                                    <p>
                                        The satisfaction of users is the most important and the focus is on usability and completeness
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cola-nav">
                            <a href="#0" class="cola-prev mr-4">
                                <img src="{{ asset('assets/images/collaboration/left.png') }}" alt="colaboration">
                            </a>
                            <a href="#0" class="cola-next">
                                <img src="{{ asset('assets/images/collaboration/right.png') }}" alt="colaboration">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Collaboration Section Ends Here =============-->

    <!--============= Faq Section Starts Here =============-->
    <section class="faq-section padding-top mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-header">
                        <div class="cate">
                            <img src="{{ asset('assets/images/cate.png') }}" alt="cate">
                        </div>
                        <h2 class="title">Frequently Asked Questions</h2>
                        <a href="{{ url('faq') }}">More Questions <i class="flaticon-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-wrapper mb--38">
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">what do I need to start Trading with PipskomeEA robot?</h4>
                                <p>
                                    You will need to buy the PipskomeEA robot
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">How much is the PipskomeEA robot?</h4>
                                <p>$300 & $400</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">How long will PipskomeEA robot work and trade for me?</h4>
                                <p>One time payment for 3years.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">How do I pay for the PipskomeEA robot and how will I receive it? </h4>
                                <p>

                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">After receiving the robot how do I use it?</h4>
                                <p>How to install robot and use it will be sent to you.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">What if I don't have any knowledge about forex can I still use your PipskomeEA Robot?</h4>
                                <p>Yes.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">what if I don't have a trading account?</h4>
                                <p>You will be guided on how to create your trading account and also how to fund it and use the PipskomeEA robot on it.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Faq Section Ends Here =============-->
@endsection
