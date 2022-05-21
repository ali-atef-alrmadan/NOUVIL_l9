@extends('layouts.apps')
@section('Section')
    
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact </h2>
        <p>The user can contact us to book a housemaid or inquire about their specifications and experience. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=irbid,jordan+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>NOUVIL</h3>
            <p>
              University Street <br>
              Irbid <br>
              JORDAN <br><br>
              <strong>Phone:</strong> +962 781 156 080<br>
              <strong>Email:</strong>Nouvil@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            {{-- <form action="{{route('SaveContact')}}" method="post" role="form" class="php-email-form">
            @csrf --}}
            <form method="POST" action="{{route('SaveContact')}}" enctype="multipart/form-data" role="form" class="email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required >
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="Phone" id="Phone" placeholder="Phone" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="mb-5">
                <x-jet-validation-errors class="mb-4" />
              </div>
              <div class="text-center mt-3">
                <button type="submit" class="rounded-lg bg-green-500 text-white hover:bg-green-600 w-full justify-center">Send Message</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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