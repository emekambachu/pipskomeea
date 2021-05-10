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
                        <p>The PipskomeEA was launched in 2018. A forex signal website with a unique vision to provide exceptional superior trading setups quality education and state-of-the-art trading tools in the forex industry. As an outcome of a continuous focus on localizing our products and services to be suitable to each market.<br>
                            We are one of the best signal provider industry delivering up-to-date market news and analysis to professional & beginners. Together with our successful collaboration with talented and experienced teams from all over the world.
                        </p>
                        <div class="banner-button-group">
                            <a href="#0" class="button-4">Expert Advisor</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-nav-container bg_img bg_contain bottom_center" data-background="assets/images/banner/banner-4.png">
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
{{--                <div class="col-12">--}}
{{--                    <div class="banner-odometer">--}}
{{--                        <div class="counter-item">--}}
{{--                            <div class="counter-thumb">--}}
{{--                                <img src="{{ asset('assets/images/icon/counter1.png') }}" alt="icon">--}}
{{--                            </div>--}}
{{--                            <div class="counter-content">--}}
{{--                                <h2 class="title"><span class="counter">17501</span></h2>--}}
{{--                                <span>Premium User</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="counter-item">--}}
{{--                            <div class="counter-thumb">--}}
{{--                                <img src="{{ asset('assets/images/icon/counter2.png') }}" alt="icon">--}}
{{--                            </div>--}}
{{--                            <div class="counter-content">--}}
{{--                                <h2 class="title"><span class="counter">1987</span></h2>--}}
{{--                                <span>Daily Visitors</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->

    <!--============= Pricing Section Starts Here =============-->
    <section class="pricing-section padding-top oh padding-bottom pb-lg-half bg_img pos-rel" data-background="{{ asset('./assets/images/bg/pricing-bg.jpg') }}" id="pricing">
        <div class="container">
            <div class="section-header cl-white">
                <h2 class="title">Features</h2>
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

                                <div class="pricing-item-2">
                                    <h5 class="cate">Free Telegram</h5>
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/pricing/pricing3.png') }}" alt="pricing">
                                    </div>
                                    <p>
                                        Daily 2-3 signals<br><br>
                                        All day support<br><br>
                                        Hourly update on each trade<br><br>
                                        Daily new setups and<br><br>
                                        news analysis
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

    <!--============= Exclusive Section Starts Here =============-->
    <section class="exclusive-section padding-bottom-2 padding-top oh" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-6">
                    <div class="section-header left-style">
                        <h2 class="title">See what You Can Do with PipskomeEA</h2>
                        <p>
                            Numerous features make it possible to customize the system in accordance with all your needs.
                        </p>
                    </div>
                    <div class="row mb--20">
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('assets/images/feature/01.png') }}" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">Fast Performance</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('assets/images/feature/02.png') }}" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">Easy Customize</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('assets/images/feature/03.png') }}" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">Pure & Elegant</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('assets/images/feature/04.png') }}" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">Secure Data</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('assets/images/feature/05.png') }}" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">quick access</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="exclusive-item">
                                <div class="exclusive-thumb">
                                    <img src="{{ asset('assets/images/feature/06.png') }}" alt="feature">
                                </div>
                                <div class="exclusive-content">
                                    <h6 class="title">24/7 Support</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 d-lg-block d-none">
                    <div class="feature-1-thumb mt-0 ex-feature">
                        <img src="{{ asset('assets/images/feature/feature02.png') }}" alt="feature">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Exclusive Section Ends Here =============-->

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
    <!--============= Colaboration Section Ends Here =============-->

    <!--============= Coverage Section Starts Here =============-->
    <section class="coverage-section padding-top padding-bottom-2" id="coverage">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-header left-style coverage-header">
                        <h2 class="title">Our Stats</h2>
                        <p>
                            Pipskomeea bot users are growing by 300% every year with a steady love from users around the world. We are also close to achieving 45,000 cumulative users.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="coverage-right-area text-lg-right">
                        <div class="rating-area">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <span class="average">5.0 / 5.0</span>
                        </div>
                        <h2 class="amount">312,921+</h2>
                        <a href="#0">Total User Reviews <i class="fas fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
            <div class="coverage-wrapper bg_img" data-background="assets/images/bg/world-map.png">
                <div class="border-item-1">
                    <span class="name">North America</span>
                    <h2 class="title">70.7%</h2>
                </div>
                <div class="border-item-2">
                    <span class="name">Asia</span>
                    <h2 class="title">14.4%</h2>
                </div>
                <div class="border-item-3">
                    <span class="name">North Europe</span>
                    <h2 class="title">8.4%</h2>
                </div>
                <div class="border-item-4">
                    <span class="name">South America</span>
                    <h2 class="title">1.8%</h2>
                </div>
                <div class="border-item-5">
                    <span class="name">Africa</span>
                    <h2 class="title">1.8%</h2>
                </div>
                <div class="border-item-6">
                    <span class="name">Australia</span>
                    <h2 class="title">3%</h2>
                </div>
            </div>
        </div>
    </section>
    <!--============= Coverage Section Ends Here =============-->


    <!--============= Testimonial Section Starts Here =============-->
    <section class="testimonial-section padding-top-2">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Testimonials</h5>
                <h2 class="title">5000+ happy clients all around the world</h2>
            </div>
            <div class="testimonial-wrapper">
                <a href="#0" class="testi-next trigger">
                    <img src="{{ asset('assets/images/client/left.png') }}" alt="client">
                </a>
                <a href="#0" class="testi-prev trigger">
                    <img src="{{ asset('assets/images/client/right.png') }}" alt="client">
                </a>
                <div class="testimonial-area testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="testimonial-thumb">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/client/client1.jpg') }}" alt="client">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <p>
                                Awesome product. The guys have put huge effort into this app and focused on simplicity and ease of use.
                            </p>
                            <h5 class="title"><a href="#0">Bela Bose</a></h5>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-thumb">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/client/client1.jpg') }}" alt="client">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <p>
                                Awesome product. The guys have put huge effort into this app and focused on simplicity and ease of use.
                            </p>
                            <h5 class="title"><a href="#0">Raihan Rafuj</a></h5>
                        </div>
                    </div>
                </div>
                <div class="button-area">
                    <a href="#0" class="button-2">Leave a review <i class="flaticon-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--============= Testimonial Section Ends Here =============-->


    <!--============= Faq Section Starts Here =============-->
    <section class="faq-section padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-header">
                        <div class="cate">
                            <img src="{{ asset('assets/images/cate.png') }}" alt="cate">
                        </div>
                        <h2 class="title">Frequently Asked Questions</h2>
                        <a href="#0">More Questions <i class="flaticon-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-wrapper mb--38">
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">Is the Web App Secure?</h4>
                                <p>
                                    Web application security is the process of protecting websites and online services against different security threats that exploit vulnerabilities in an application’s code.
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">What features does the Web App have?</h4>
                                <p>
                                    Both the Mobile Apps and the Web App give you the ability to you to access your account information, view news releases, report an outage, and contact us via email or phone.
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">How do I get the Mobile App for my phone?</h4>
                                <p>
                                    Both the Mobile Apps and the Web App give you the ability to you to access your account information, view news releases, report an outage, and contact us via email or phone.
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-thumb">
                                <i class="flaticon-pdf"></i>
                            </div>
                            <div class="faq-content">
                                <h4 class="title">How does Mosto differ from usual apps? </h4>
                                <p>
                                    Both the Mobile Apps and the Web App give you the ability to you to access your account information, view news releases, report an outage, and contact us via email or phone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Faq Section Ends Here =============-->
@endsection
