<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NOUVEL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/n.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
    <style>
        .bg-green-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(34 197 94 / var(--tw-bg-opacity));
        }
        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }
        .hover\:bg-green-600:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(22 163 74 / var(--tw-bg-opacity));
        }
        .w-full {
            width: 100%;
        }
        .justify-center {
            justify-content: center;
        }
        
        .rounded-lg {
            border-radius: 0.5rem/* 8px */;
        }

    </style>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top p-0">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ route('Home') }}">NOUVIL</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="{{ route('Home') }}">Home</a></li>
                    <li><a href="{{ route('About') }}">About</a></li>
                    <li><a href="{{ route('Contact') }}"">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            {{-- <a href="{{ route('login') }}" class="login-btns">login</a> --}}
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="login-btns">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="login-btns">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="login-btns">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        </div>
    </header>
    <!-- End Header -->
    @yield('Section')
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>NOUVIL</h3>
                        <p>
                            University Street <br> Irbid <br> JORDAN <br><br>
                            <strong>Phone:</strong> +962 781 156 080<br>
                            <strong>Email:</strong>NOUVIL@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('Home') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('About') }}">About</a></li>
                            <li><i class="bx bx-chevron-right"></i>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}">Log in</a>
                                        @endauth
                                    </div>
                                @endif
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('Contact') }}"">Contact</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy;<strong><span>NOUVIL</span></strong>
                </div>

            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100079305343630" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/nouvelcomp?utm_medium=copy_link" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    @yield('script')
    </body>

</html>