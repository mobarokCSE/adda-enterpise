@extends('layouts.master')

@section('content')

  <!-- ===========PageHeader Section Start Here========== -->
  <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
    <div class="container">
      <div class="section-wrapper text-center">
        <h2 class="pageheader-title"> Amazing Services</h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!-- ===========PageHeader Section Ends Here========== -->




  <!-- ============Service 2 Section start Here========== -->
  <section class="service padding-top padding-bottom">
    <div class="container">
      <!-- <div class="section-header">
        <div class="section-header__content">
          <p class="color--theme-color text-uppercase">Our best services </p>
          <h2>We offer outsourced services</h2>
        </div>
      </div> -->
      <div class="service__wrapper">
        <div class="row g-4">
          <div class="col-12 col-sm-12" id="return">
            <div class="detail__box">
              <div class="detail__box-inner">
                <img src="assets/images/icon/icon3.png" alt="">
                <h4>Tax Return</h4>
                <p>Tax returns for all business entities and individuals. We aim to make sure we are claiming the
                  right
                  deductions for you to get the most back from your tax return</p>
                <ul class="detail-list">
                  <li><span><i class="icofont-checked"></i></span> Individuals</li>
                  <li><span><i class="icofont-checked"></i></span> Businesses</li>
                  <li><span><i class="icofont-checked"></i></span> Sole Traders</li>
                  <li><span><i class="icofont-checked"></i></span> Partnerships</li>
                  <li><span><i class="icofont-checked"></i></span> Companies</li>
                  <li><span><i class="icofont-checked"></i></span> Trusts</li>
                </ul>
                <p>All occupations &amp; businesses catered for, including:</p>
                <ul class="subdetail-list">
                  <li><i class="far fa-circle"></i> Rental properties</li>
                  <li><i class="far fa-circle"></i> Capital Gains</li>
                  <li><i class="far fa-circle"></i> Primary production</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12" id="book">
            <div class="detail__box">
              <div class="detail__box-inner">
                <img src="assets/images/icon/icon2.png" alt="">
                <h4>Book Keeping</h4>
                <p>Be on track and in control of your business with professional book keeping. Know where your business
                  is
                  going with up to date book keeping.</p>
                <p><span><i class="icofont-checked"></i></span> Knowledgeable in software</p>
                <ul class="subdetail-list">
                  <li><i class="far fa-circle"></i> MYOB</li>
                  <li><i class="far fa-circle"></i> Quickbooks</li>
                  <li><i class="far fa-circle"></i> Xero</li>
                </ul>
                <ul class="detail-list">
                  <li><span><i class="icofont-checked"></i></span> Set up to suit your business</li>
                  <li><span><i class="icofont-checked"></i></span> Full entry of all transactions</li>
                  <li><span><i class="icofont-checked"></i></span> Wages &amp; Superannuation</li>
                  <li><span><i class="icofont-checked"></i></span> Monthly or quarterly – you decide</li>
                  <li><span><i class="icofont-checked"></i></span> Financials/ Reports produced when required</li>
                  <li><span><i class="icofont-checked"></i></span> ATO electronic lodgement of all forms</li>
                  <li><span><i class="icofont-checked"></i></span> Reasonable rates</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12" id="taxation">
            <div class="detail__box">
              <div class="detail__box-inner">
                <img src="assets/images/icon/icon1.png">
                <h4>Taxation and Accountancy</h4>
                <p>Experience all your taxation &amp; accountancy requirements need.</p>
                <p>We are here to help you with all your business needs, from</p>
                <ul class="detail-list">
                  <li><span><i class="icofont-checked"></i></span> Tax returns</li>
                  <li><span><i class="icofont-checked"></i></span> Bookeeping</li>
                  <li><span><i class="icofont-checked"></i></span> Business set up</li>
                  <li><span><i class="icofont-checked"></i></span> BAS , PAYG , IAS &amp; TPAR returns</li>
                  <li><span><i class="icofont-checked"></i></span> Capital Gains</li>
                  <li><span><i class="icofont-checked"></i></span> Rental properties</li>
                </ul>
                <br>
                <p>Business Specialities Including:</p>
                <ul class="subdetail-list">
                  <li><i class="far fa-circle"></i> Construction</li>
                  <li><i class="far fa-circle"></i> Hospitality</li>
                  <li><i class="far fa-circle"></i> Beauty</li>
                  <li><i class="far fa-circle"></i> Transport</li>
                  <li><i class="far fa-circle"></i> Subcontractors</li>
                  <li><i class="far fa-circle"></i> Primary Production</li>
                  <li><i class="far fa-circle"></i> Professional industry</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12" id="bas-ias">
            <div class="detail__box">
              <div class="detail__box-inner">
                <img src="assets/images/icon/icon4.png" alt="">
                <h4>BAS, PAYG &amp; IAS Returns</h4>
                <ul class="detail-list">
                  <li><span><i class="icofont-checked"></i></span> Be up to date every month or quarter with the ATO
                  </li>
                  <li><span><i class="icofont-checked"></i></span> With the electronic lodgement of all your ATO returns
                  </li>
                  <li><span><i class="icofont-checked"></i></span> Late lodgement and payment is available by lodging
                    thru a tax agent
                  </li>
                  <li><span><i class="icofont-checked"></i></span> We can do all your bookkeeping, check your figures or
                    just submit
                  </li>
                  <li><span><i class="icofont-checked"></i></span> Regular lodgements with ATO clearing house is also
                    available</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12" id="business">
            <div class="detail__box">
              <div class="detail__box-inner">
                <img src="assets/images/icon/icon5.png" alt="">
                <h4>Setting up or Starting a Business</h4>
                <p>Need help to get your new business up and running?</p>
                <p>All types of business:</p>
                <ul class="subdetail-list">
                  <li><i class="far fa-circle"></i> Sole trader</li>
                  <li><i class="far fa-circle"></i> Partnerships</li>
                  <li><i class="far fa-circle"></i> Companies</li>
                  <li><i class="far fa-circle"></i> Trusts</li>
                </ul>
                <p>We can help with registrations</p>
                <p>With ATO:</p>
                <ul class="subdetail-list">
                  <li><i class="far fa-circle"></i> TFN</li>
                  <li><i class="far fa-circle"></i> ABN</li>
                  <li><i class="far fa-circle"></i> GST</li>
                  <li><i class="far fa-circle"></i> PAYG etc</li>
                </ul>
                <p>With ASIC:</p>
                <ul class="subdetail-list">
                  <li><i class="far fa-circle"></i> Company &amp; Trust formations</li>
                  <li><i class="far fa-circle"></i> Business names</li>
                </ul>
                <p>Or if you just want to discuss your choices, and discuss all the requirements of setting up or
                  maintaining your business.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12" id="trusts">
            <div class="detail__box">
              <div class="detail__box-inner">
                <img src="assets/images/icon/icon6.png" alt="">
                <h4>Business Support</h4>
                <ul class="detail-list">
                  <li>No busines is too small</li>
                  <li>We welcome all small businesses, whether it be a sole trader with no employees, or a company with
                    many.</li>
                  <li>We want to help you make your business a success!!!</li>
                  <li>We are only a phone call or email away</li>
                  <li>We can help you keep on track with all our services:</li>
                </ul>
                <ul class="detail-list">
                  <li><span><i class="icofont-checked"></i></span> Tax returns</li>
                  <li><span><i class="icofont-checked"></i></span> Book keeping</li>
                  <li><span><i class="icofont-checked"></i></span> Help you keep up to date with ATO due dates of your
                    requirements</li>
                  <li><span><i class="icofont-checked"></i></span> Access to finance companies for lending – comparative
                    rates</li>
                  <li><span><i class="icofont-checked"></i></span> Or just there to listen and bounce ideas off</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12" id="consult">
            <div class="detail__box">
              <div class="detail__box-inner">
                <img src="assets/images/icon/icon9.png" alt="">
                <h4>On or Off-site Consultations</h4>
                <ul class="detail-list">
                  <li><span><i class="icofont-checked"></i></span> We can come to you</li>
                  <li><span><i class="icofont-checked"></i></span> Can”t find time to make it to our office – Not a
                    problem</li>
                  <li><span><i class="icofont-checked"></i></span> We can come to your business during business hours
                    and discuss your
                    business &amp; tax needs</li>
                  <li><span><i class="icofont-checked"></i></span> We love to get out of the office and get a hands on
                    feel of your
                    business – This helps us get a real understanding of hour your business works and what we can do to
                    help you</li>
                  <li><span><i class="icofont-checked"></i></span> After hours &amp; week end consultations are also
                    available</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12" id="other">
            <div class="detail__box">
              <div class="detail__box-inner">
                <img src="assets/images/icon/icon3.png" alt="">
                <h4>Other Service Provided</h4>
                <p>Business set up and experience in many occupations and business services.</p>
                <div class="row mt-5">
                  <div class="col-md-6">
                    <h5>Business Setup</h5>
                    <ul class="detail-list1">
                      <li><span><i class="icofont-checked"></i></span> ABN Applications</li>
                      <li><span><i class="icofont-checked"></i></span> Tax file number applications</li>
                      <li><span><i class="icofont-checked"></i></span> Formation and registering of Companies</li>
                      <li><span><i class="icofont-checked"></i></span> Sole Traders Subcontractors</li>
                      <li><span><i class="icofont-checked"></i></span> Trusts</li>
                      <li><span><i class="icofont-checked"></i></span> Companies</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h5>Experience in</h5>
                    <ul class="detail-list1">
                      <li><span><i class="icofont-checked"></i></span> Rental Properties</li>
                      <li><span><i class="icofont-checked"></i></span> Capital Gains</li>
                      <li><span><i class="icofont-checked"></i></span> Primary Production</li>
                      <li><span><i class="icofont-checked"></i></span> Subcontractors</li>
                      <li><span><i class="icofont-checked"></i></span> Various Trades</li>
                      <li><span><i class="icofont-checked"></i></span> Construction</li>
                      <li><span><i class="icofont-checked"></i></span> Hospitality</li>
                      <li><span><i class="icofont-checked"></i></span> And many more…</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <a href="{{url('services')}}" class="default-btn default-btn--secondary">View all services<i
              class="icofont-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- ============Service 2 Section Ends Here========== -->



  <!-- ============ Faq Section start Here========== -->
  <section class="faq faq--bg padding-top padding-bottom">
    <div class="container">
      <div class="faq_wrapper">
        <div class="row g-5">
          <div class="col-lg-6 pe-lg-5">
            <div class="faq__content">
              <p class="subtitle color--theme-color text-uppercase">faq</p>
              <h2>Have Any Question?</h2>

              <div class="accordion accordion-flush" id="faqAccordion">
                <div class="accordion-item">
                  <h6 class="accordion-header" id="faqOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <span class="accordion-icon"><i class="icofont-question"></i></span> <span
                        class="accordion-headerText">What does FAQ mean in
                        business?</span>
                    </button>
                  </h6>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="faqOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      <p> Praesent id massa suscipit venenatis velit in, ultrices sapien Phasellus molestie exvels
                        dictum
                        efficitur felis erat
                        pharetra metus ut aliquet nulla nulla ac nibh.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h6 class="accordion-header" id="faqTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <span class="accordion-icon"><i class="icofont-question"></i></span> <span
                        class="accordion-headerText">What questions do customers
                        ask?</span>
                    </button>
                  </h6>
                  <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="faqTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      <p> Praesent id massa suscipit venenatis velit in, ultrices sapien Phasellus molestie exvels
                        dictum
                        efficitur felis erat
                        pharetra metus ut aliquet nulla nulla ac nibh.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h6 class="accordion-header" id="faqThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <span class="accordion-icon"><i class="icofont-question"></i></span> <span
                        class="accordion-headerText">How is your business going?</span>
                    </button>
                  </h6>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      <p> Praesent id massa suscipit venenatis velit in, ultrices sapien Phasellus molestie exvels
                        dictum
                        efficitur felis erat
                        pharetra metus ut aliquet nulla nulla ac nibh.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h6 class="accordion-header" id="faqFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <span class="accordion-icon"><i class="icofont-question"></i></span> <span
                        class="accordion-headerText">4 basic business questions?</span>
                    </button>
                  </h6>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      <p> Praesent id massa suscipit venenatis velit in, ultrices sapien Phasellus molestie exvels
                        dictum
                        efficitur felis erat
                        pharetra metus ut aliquet nulla nulla ac nibh.</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="faq__thumb">
              <img src="assets/images/faq/01.png" alt="FAQ Image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============ Faq Section Ends Here========== -->


@endsection