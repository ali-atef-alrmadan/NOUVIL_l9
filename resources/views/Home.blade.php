@extends('layouts.apps')
@section('Section')
    

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h2>NOUVIL TO RECRUIT DOMESTIC WORKERS,<br> THE BEST CHOICE, WITH TRAINED WORKERS,<br> ESPECIALLY TO WORK IN JORDAN</h2>

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="login-btn">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="login-btn">Log in</a>
                    @endauth
                </div>
            @endif
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">


        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                        <p># OF USERS</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                        <p># OF EMPLOYEES</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                        <p>#The maids we brought</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                        <p># OF COUNTRIES</p>
                    </div>


                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose NOUVIL?</h3>
                            <p>
                                always ready to help workers capable of caring for the eldelry comprehensive medicalexaminations for all workers the possibility of bringing your old worker there are many workers with and without experiance available your children are safe with our workers
                            </p>
                            <div class="text-center">
                                <a href="{{ route('About') }}" class="more-btn">Read More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/choose1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- End Why Us Section -->





    </main>
    <!-- End #main -->
@endsection

@section('script')
    

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


@endsection