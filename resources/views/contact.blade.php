@extends('layout')

@section('title')
    Contact us
@endsection

@section('content')
    <!--============= Header Section Ends Here =============-->
    <section class="page-header bg_img" data-background="{{ asset('assets/images/page-header.png') }}"
             style="background-image: url(&quot;{{ asset('assets/images/page-header.png') }}&quot;);">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{ asset('assets/css/img/page-header.png') }}" alt="css">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Contact Us</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        Contact us
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->

    <!--============= Contact Section Starts Here =============-->
    <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header mw-100 cl-white">
                <h2 class="title" style="color: #2fb40a;">Contact us</h2>
                <p class="text-white">Send us a message</p>
            </div>
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-lg-7">
                    <div class="contact-wrapper">
                        <h4 class="title text-center mb-30">Get in Touch</h4>

                        @if(session('success'))
                            <div class="text-center text-white p-3" style="width: 70%; margin: 4px auto; background-color: #3e976c;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="contact-form" id="contact_form_submit" action="{{ url('contact/submit') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Your Full Name</label>
                                <input type="text" placeholder="Enter Your Full Name" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" placeholder="Enter Your Phone Number" name="mobile" id="mobile" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email </label>
                                <input type="text" placeholder="Enter Your Email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Your Subject</label>
                                <input type="text" placeholder="Enter Your Subject" id="subject" name="subject" required>
                            </div>
                            <div class="form-group mb-0">
                                <label for="message">Your Message </label>
                                <textarea name="email_message" id="message" placeholder="Enter Your Message" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message">
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-content">
                        <div class="man d-lg-block d-none">
                            <img src="{{ asset('assets/images/contact/man.png') }}" alt="bg">
                        </div>
                        <div class="section-header left-style">
                            <h3 class="title" style="color: #2fb40a;">Have questions?</h3>
                            <p class="text-white">Have questions about payments or price
                                plans? We have answers!</p>
                            <a href="{{ url('faq') }}">Read F.A.Q <i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="contact-area">
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{ asset('assets/images/contact/contact1.png') }}" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h5 class="subtitle">Email Us</h5>
                                    <a href="Mailto:Pipskomeconsultant@gmail.com">Pipskomeconsultant@gmail.com</a>
                                    <a href="Mailto:info@pipskomeea.com">info@pipskomeea.com</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{ asset('assets/images/contact/contact2.png') }}" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h5 class="subtitle">Call Us</h5>
                                    <a href="Tel:08065123227">08065123227</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{ asset('assets/images/contact/contact3.png') }}" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h5 class="subtitle">Visit Us</h5>
                                    <p>Workcity 3rd floor, Polyester building 2nd roundabout, Lekki Phase 1 Lagos State Nigeria.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Contact Section Ends Here =============-->
@endsection
