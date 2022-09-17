@extends('layouts.master')

@section('content')

  <!-- ===========PageHeader Section Start Here========== -->
  <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
    <div class="container">
      <div class="section-wrapper text-center">
        <h2 class="pageheader-title">About Us</h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!-- ===========PageHeader Section Ends Here========== -->




  <!-- ============About Section start Here========== -->
  <section class="about about--2 bg--lightbg padding-top padding-bottom">
    <div class="container">
      <div class="about__wrapper">
        <div class="row align-items-center flex-lg-row-reverse g-5">
          <div class="col-lg-6">
            <div class="about__content">
              <h6 class="color--theme-color text-uppercase">Hello! and welcome to</h6>
              <h2>We are Here to help you if you need any kinds of consulting</h2>
              <p>
                The hallmark of our business is loyalty, trust and confidence. We see a lot of potential for our and our
                clients' business growth and are very keen to work hand-in-hand with our business partners to pursue
                that ambition together.
              </p>
              <p>We take pride in assisting our partners by imparting our knowledge and valuable information to ensure
                that they grow to their potential. We are always there for them and our number one priority is customer
                satisfaction. Our client satisfaction is the key to their continued retention over time. Our customers
                are our best marketing agents.</p>
              <p>The demand for convenience amongst consumers has created a huge market for home services over the past
                few years. The changes in lifestyle over time, the rise in working couples, the increasing pressure on
                both family and work life has increased the demand of these services which are growing at rapid rate in
                Australia. Therefore, at ADDA Enterprises we have identified a need for accounting & tax services
                during
                the weekend and after hours and in some cases, in-home visits.</p>

              <div class="about__author-wrap">
                <a href="#" class="default-btn default-btn--secondary">Contact Us<i class="icofont-arrow-right"></i></a>
              </div>

            </div>
          </div>
          <div class="col-lg-6">
            <div class="about__thumb about__thumb--2">
              <img src="assets/images/about/home-2/01.png" alt="About Image">
              <div class="about__thumb-experience">
                <img src="assets/images/about/home-2/icon.png" alt="Icon">
                <p>We're Ready To <br> Assist You</p>
              </div>
              <div class="floating-img"><img src="assets/images/about/02.png" alt="About Image"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============About Section Ends Here========== -->


@endsection