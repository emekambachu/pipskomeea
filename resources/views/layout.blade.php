<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') - Pipskomeea Consult</title>

    <!-- <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="./assets/css/owl.min.css">
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="./assets/css/main.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/minified.css') }}">

    <link rel="shortcut icon" href="{{ asset('pipskomeea_logo_400.png') }}" type="image/x-icon">
</head>

<body>
<!--============= ScrollToTop Section Starts Here =============-->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
<div class="overlay"></div>
<!--============= ScrollToTop Section Ends Here =============-->


<!--============= Header Section Starts Here =============-->
<header class="header-section header-cl-black">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('pipskomeea_logo_400.png') }}" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('products') }}">Products</a>
                </li>
                <li>
                    <a href="#0">About</a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ url('terms') }}">Terms of Use</a>
                        </li>
                        <li>
                            <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="{{ url('faq') }}">FAQ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('contact') }}">Contact us</a>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
{{--            <div class="header-right">--}}
{{--                <select class="select-bar">--}}
{{--                    <option value="en">En</option>--}}
{{--                    <option value="Bn">Bn</option>--}}
{{--                    <option value="pk">Pk</option>--}}
{{--                    <option value="Fr">Fr</option>--}}
{{--                </select>--}}
{{--                <a href="#0" class="header-button d-none d-sm-inline-block">Get Mosto</a>--}}
{{--            </div>--}}
        </div>
    </div>
</header>
<!--============= Header Section Ends Here =============-->

@yield('content')

<!--============= Footer Section Starts Here =============-->
<footer class="footer-section bg_img" data-background="{{ asset('assets/images/footer/footer-bg.jpg') }}">
    <div class="container">
        <div class="footer-top padding-top padding-bottom">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('pipskomeea_logo_400.png') }}" width="150" alt="logo">
                </a>
            </div>
            <ul class="social-icons">
                <li>
                    <a href="https://www.facebook.com/Pipskome-Ea-Consult-100429375557506"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/pipskomeea/"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <ul class="footer-link">
                <li>
                    <a href="mail:Pipskomeconsultant@gmail.com">Pipskomeconsultant@gmail.com</a>
                </li>
                <li>
                    <a href="tel:08065123227">08065123227</a>
                </li>
                <li>
                    <a href="{{ url('terms') }}">Terms of Service</a>
                </li>
                <li>
                    <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
                </li>
                <li>
                    <a href="{{ url('faq') }}">FAQ</a>
                </li>
            </ul>
        </div>
        <div class="copyright">
            <p>
                Copyright © {{ date('Y') }} All Rights Reserved
            </p>
        </div>
    </div>
</footer>
<!--============= Footer Section Ends Here =============-->

<!--=================== RTL Feature Section Starts Here ===================-->
{{--<div class="swap-area active">--}}
{{--    <div class="chorka">--}}
{{--        <img src="{{ asset('assets/images/gear.png') }}" alt="img">--}}
{{--    </div>--}}
{{--    <div class="swap-item">--}}
{{--        <a href="http://pixner.net/mosto/demo/ltr/dark/index-4.html">Dark</a>--}}
{{--    </div>--}}
{{--    <div class="swap-item">--}}
{{--        <a href="http://pixner.net/mosto/demo/rtl/light/index-4.html">RTL</a>--}}
{{--    </div>--}}
{{--</div>--}}
<!--=================== RTL Feature Section Ends Here ===================-->
<!-- <script src="./assets/js/jquery-3.3.1.min.js"></script>
<script src="./assets/js/modernizr-3.6.0.min.js"></script>
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/magnific-popup.min.js"></script>
<script src="./assets/js/jquery-ui.min.js"></script>
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/waypoints.js"></script>
<script src="./assets/js/nice-select.js"></script>
<script src="./assets/js/owl.min.js"></script>
<script src="./assets/js/counterup.min.js"></script>
<script src="./assets/js/paroller.js"></script> -->
<script src="{{ asset('assets/js/minified.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
