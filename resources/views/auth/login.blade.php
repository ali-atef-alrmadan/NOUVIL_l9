@extends('layouts.apps')
@section('Section')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Log in</h2>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <!-- ======= login Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" style=" margin: auto;">
                <div class="box">
                        <x-jet-validation-errors class="mb-4" />

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                        <!-- Pills content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                        <br>
                                            <!-- Email input -->

                                        <div class="form-outline mb-4">
                                            <input type="email" id="loginName" class="form-control" placeholder="Email "name="email" :value="old('email')" required autofocus>
                                        </div>

                                            <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="loginPassword" class="form-control" placeholder="Password" name="password" required autocomplete="current-password" >
                                        </div>

                                            <!-- 2 column grid layout -->
                                        <div class="row mb-4">
                                            <div class="col-md-6 d-flex justify-content-center">
                                            <!-- Checkbox -->

                                                <div class="form-check mb-3 mb-md-0">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="loginCheck">
                                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 d-flex justify-content-center">
                                                <!-- Simple link -->
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div> 
                                            <div class="bg-green-600">
                                               
                                            </div>
                                             <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <x-jet-button  class="nav-link active" id="tab-login" data-mdb-toggle="pill" role="tab" aria-controls="pills-login" aria-selected="true" style="background-color:#5fcf80 ;">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a style="color:#5fcf80;" class="nav-link" id="tab-register" data-mdb-toggle="pill" href="{{route('register')}}" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                        </li>
                    </ul>
                        <!-- Pills navs -->
                                        </div>
                                </form>
                            </div>
                        </div>
                </div>
</div>
</div>
</section>
<!-- End Cource Details Tabs Section -->

</main><!-- End #main -->


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
