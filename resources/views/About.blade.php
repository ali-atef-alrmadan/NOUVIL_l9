@extends('layouts.apps')
@section('Section')
    
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About</h2>
        <p>A company that recruits domestic workers from many countries. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.png" class="img-fluid" alt=""><br><br>
            <p>
              It allows customers to choose a maid at any time and from anywhere without
              any effort It is a Jordanian company approved by the Jordanian Ministry
              of Labor and the Federation of Owners and Recruitment and Employment offices
              in the homes of non-Jordanians,
              as well as the embassies of the countries exporting migrant workers
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Objectives and features of NOUVIL company  </h3>
            <p class="fst-italic">
              A Jordanian company accredited by the Jordanian
              Ministry of Labor and the Syndicate of Owners of
              Recruitment and Employment Offices of Non-Jordanian
              Domestic Workers, as well as the embassies of the 
              countries exporting expatriate workers.  Both, and
              we have been keen to provide this service in 
              a modern and modern way that enjoys ease,
              proficiency and transparency so that the 
              citizen can see all the details and steps
              of the process of bringing in his maid first-hand.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> It allows the citizen to see all the details and steps of the process of recruiting his maid directly.</li>
              <li><i class="bi bi-check-circle"></i> It enjoys ease, mastery and transparency.</li>
              <li><i class="bi bi-check-circle"></i> Ensure that this service is provided in a modern and modern way.</li>
              <li><i class="bi bi-check-circle"></i> Work to recruit expatriate workers to work at home in a professional manner that guarantees the rights of the citizen.</li>
              <li><i class="bi bi-check-circle"></i> Accredited in all relevant departments and official institutions</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$User}}" data-purecounter-duration="1" class="purecounter"></span>
            <p># OF USERS</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$EMPLOYEES}}" data-purecounter-duration="1" class="purecounter"></span>
            <p># OF EMPLOYEES</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$maids}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>#The maids we brought</p>
        </div>
        <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{$country}}" data-purecounter-duration="1" class="purecounter"></span>
            <p># OF COUNTRIES</p>
        </div>


        </div>

      </div>
    </section>
<!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Ali mohammad</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Ahmad</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jana Omar</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Malek Husam</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>Jamal </h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              
         
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
          <br>
          <br>
          
           
       
        </div>
        <center><a href="{{ route('Contact') }}" class="comment-btn">Comment</a></center>
      </div>
    </section><!-- End Testimonials Section -->

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