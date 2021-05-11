@extends('layout')

@section('title')
    Our Products
@endsection

@section('content')
{{--    <!--============= Banner Section Starts Here =============-->--}}
{{--    <section class="banner-4 bg_img oh bottom_left" data-background="{{ asset('assets/images/banner/banner-12-bg.png') }}">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="banner-content-3 mt-5">--}}
{{--                        <h1 class="title">Pipskome EA V12</h1>--}}
{{--                        <p>Pipskome EA is a Powerful Forex Auto Trading EA Robot optimized for up to 5% Daily profits*.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                --}}{{--                <div class="col-12">--}}
{{--                --}}{{--                    <div class="banner-odometer">--}}
{{--                --}}{{--                        <div class="counter-item">--}}
{{--                --}}{{--                            <div class="counter-thumb">--}}
{{--                --}}{{--                                <img src="{{ asset('assets/images/icon/counter1.png') }}" alt="icon">--}}
{{--                --}}{{--                            </div>--}}
{{--                --}}{{--                            <div class="counter-content">--}}
{{--                --}}{{--                                <h2 class="title"><span class="counter">17501</span></h2>--}}
{{--                --}}{{--                                <span>Premium User</span>--}}
{{--                --}}{{--                            </div>--}}
{{--                --}}{{--                        </div>--}}
{{--                --}}{{--                        <div class="counter-item">--}}
{{--                --}}{{--                            <div class="counter-thumb">--}}
{{--                --}}{{--                                <img src="{{ asset('assets/images/icon/counter2.png') }}" alt="icon">--}}
{{--                --}}{{--                            </div>--}}
{{--                --}}{{--                            <div class="counter-content">--}}
{{--                --}}{{--                                <h2 class="title"><span class="counter">1987</span></h2>--}}
{{--                --}}{{--                                <span>Daily Visitors</span>--}}
{{--                --}}{{--                            </div>--}}
{{--                --}}{{--                        </div>--}}
{{--                --}}{{--                    </div>--}}
{{--                --}}{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!--============= Banner Section Ends Here =============-->--}}

    <!--============= Pricing Section Starts Here =============-->
    <section class="pricing-section padding-top oh padding-bottom pb-md-0 bg_img pos-rel"
             data-background="{{ asset('./assets/images/bg/pricing-bg.jpg') }}" id="pricing">
        <div class="container">
            <div class="section-header pb-30 cl-white">
                <h2 class="title" style="color: #22750B;">Our Products</h2>
                <p class="text-dark">
                    Pipskome EA is a Powerful Forex Auto Trading EA Robot optimized for up to 5% Daily profits
                </p>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="pricing-item">
                        <div class="pricing-thumb">
                            <img src="{{ asset('assets/images/pricing/pricing5.png') }}" alt="pricing">
                        </div>
                        <div class="pricing-content">
                            <div class="pricing-header">
                                <h2 class="title">PipskomeEA-M5 Robot</h2>
                                <h2 class="title">PipskomeEA-X2021 Robot</h2>
                            </div>
                            <ul>
                                <li>Opens / Closes trades daily</li>
                                <li>No Monthly Subscription</li>
                                <li>247 Live Support</li>
                                <li>Real-time Monitoring on your phone or PC</li>
                                <li>No Experience in trading required</li>
                                <li>Help with installation and setup</li>
                                <li>Works with any broker</li>
                                <li>Accurate Profit 10 - 30%</li>
                                <li>Low risk settings</li>
                                <li>Secures your capital</li>
                                <li>Easy withdrawal/deposit</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Pricing Section Ends Here =============-->

    <!--============= Pricing Section Starts Here =============-->
    <section class="pricing-section padding-top oh padding-bottom pb-lg-half bg_img pos-rel"
             data-background="{{ asset('./assets/images/bg/pricing-bg.jpg') }}" id="pricing">
        <div class="container">
            <div class="section-header cl-white">
                <h2 class="title" style="color: #22750B;">What is so special?</h2>
            </div>
            <div class="tab-up">
                <div class="tab-area">
                    <div class="tab-item active">
                        <div class="pricing-slider-wrapper">
                            <div class="pricing-slider owl-theme owl-carousel">
                                <div class="pricing-item-2">
                                    <h5 class="cate">Trading Strategy</h5>
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/pricing/pricing1.png') }}" alt="pricing">
                                    </div>
                                    <p>
                                        Signalspro007 EA Robot is based on Strong current Trend following Strategy. Built with a mixture of many Trending indicators to get best Results on daily basis. As statistics say 95% Traders in this market, unfortunately, lose their hard earned money and the key factor is bad money management taking small profits and huge losses Our Robot is designed to follow the strong current trend so risk is at minimum side and Profits coming out are Big Green Pips.
                                    </p>
                                </div>
                                <div class="pricing-item-2">
                                    <h5 class="cate">Fully Automatic Script</h5>
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/pricing/pricing2.png') }}" alt="pricing">
                                    </div>
                                    <p>
                                        As a manual trader, you may have experienced the anxiety and hassle while trading sessions and news times. Sticking to your computer all the time is painful and nearly impossible it affects our health too. Signalspro007 EA Robot is fully Automatic you just need to install once on your mt4 account and it does each and every operation from opening to closing trades automatically so you can enjoy your time with family and earn hassle-free profits.
                                    </p>
                                </div>
                                <div class="pricing-item-2">
                                    <h5 class="cate">Use any currency pair</h5>
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/pricing/pricing3.png') }}" alt="pricing">
                                    </div>
                                    <p>
                                        Signalspro007 EA Robot is programmed to trade all the currency pairs and commodities in the best way but we have optimized best results trading EURUSD, GBPUSD, USDJPY, GBPJPY so we strongly recommend using these pairs although you can use any currency pair as it will still be profitable. If you are planning to do optimization on any currency pair with our EA you can contact us freely any time and have the best progressive conversation with our experts.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Pricing Section Ends Here =============-->
@endsection
