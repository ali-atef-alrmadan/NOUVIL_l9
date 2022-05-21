@extends('layouts.apps')
@section('Section')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <p class="text-center" style="font-size: 35px;">Sign up</p>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= signin Section ======= -->

    </div>
        <div class="tab-pane fade active show" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
            <div class="container">
                <div class="row">
                    <center>
                        <div class="col-sm-5">
                            <x-jet-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Name input -->
                                <div>
                                    <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" id="registerName" class="form-control" placeholder="Full Name">
                                </div>
                                <br>
                                <!-- Phone input -->
                                <div>
                                    <input type="number" name="Phone" :value="old('Phone')" required autofocus autocomplete="Phone" id="registerName" class="form-control" placeholder="Phone">
                                </div>
                                <br>

                                <!-- birth_date input -->
                                <div>
                                    <input  type="date" name="birth_date" :value="old('birth_date')" required autofocus autocomplete="birth_date" id="registerUsername" class="form-control" placeholder="User Name">
                                </div>
                                <br>
                                <!-- countries input -->
                                <div>
                                    <select id="country" name="country"class="w-full form-control p-2 mb-2 border border-green-200 rounded-md focus:border-green-500">
                                        @include('layouts.components.countries')
                                    </select>
                                </div>
                                <!-- Email input -->
                                <div>
                                    <input type="email" name="email" :value="old('email')" required  id="registerEmail" class="form-control" placeholder="Email">
                                    
                                </div>
                                <br>

                                <!-- Password input -->
                                <div>
                                    <input  type="password" name="password" required autocomplete="new-password" id="registerPassword" class="form-control" placeholder="Password">
                                </div>
                                <br>

                                <!-- Repeat Password input -->
                                <div>
                                    <input  type="password" name="password_confirmation" required autocomplete="new-password" id="registerRepeatPassword" class="form-control" placeholder="Repeat password">
                                </div>
                                <br>
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>
                
                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif
                            
                                <!-- Checkbox -->
                                <div>
                                    <input required type="checkbox" value="" id="registerCheck" aria-describedby="registerCheckHelpText"> I have read and agree to the terms</label>
                                </div>
                                <br>

                                <!-- Submit button -->
                                <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                
                                <x-jet-button  class="btn-signup" style="background-color:#5fcf80;">
                                    {{ __('Register') }}
                                </x-jet-button>
                            </div>
                            </form>
                        </div>
                </center>
            </div>
        </div>
        
    </div>
</form>


<!-- Pills content -->
</div>
</div>





        </div>
    </section>
    <!-- End signin Section -->
</main>

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
