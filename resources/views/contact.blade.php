@extends('layouts.master')

@section('content')

    <!-- ===========PageHeader Section Start Here========== -->
    <section class="pageheader-section" style="background-image: url(assets/images/pageheader/bg.jpg);">
        <div class="container">
            <div class="section-wrapper text-center">
                <h2 class="pageheader-title">Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ===========PageHeader Section Ends Here========== -->




    <!-- ===========Info Section Ends Here========== -->
    <div class="info-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <div class="section-header__content">
                    <p>We Are here!</p>
                    <h2>Find us on google map</h2>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/01.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Our Address</h6>
                                <p>08 Blezeent Road Mushan
                                    10 Grew Road, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/02.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Phone number</h6>
                                <p>+880 1234 567 890 <br>
                                    +02 369 874</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/03.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Email Address</h6>
                                <p>email@example.com
                                    exmple@mail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="assets/images/contact/icon/04.png" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Office Hours</h6>
                                <p>Mon - Thu : 9:00am - 5:00pm
                                    Friday : <span class="color--theme-color">Closed</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========Info Section Ends Here========== -->



    <!-- ===========Contact Section Ends Here========== -->
    <div class="contact">
        <!-- "mb-40n" class is used for negetive 40px margin in bottom -->
        <div class="contact-top mb-50n">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="contact-form-wrapper text-center">
                            <div class="section-header">
                                <div class="section-header__content">
                                    <p>Have any question?</p>
                                    <h2>Don't hesitate to contact us</h2>
                                </div>
                            </div>
                            <form class="contact-form" action="contact.php" id="contact-form" method="POST">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" id="name" name="name"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Phone" id="phone" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" id="subject" name="subject" required>
                                </div>
                                <div class="form-group w-100">
                                    <textarea name="message" rows="8" id="message" placeholder="Your Message"
                                        required></textarea>
                                </div>
                                <div class="form-group w-100 text-center">
                                    <button class="default-btn" type="submit"><span>Send Message</span></button>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355669374!2d-118.69192993092697!3d34.02073049448939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1633958856057!5m2!1sen!2sbd"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========Contact Section Ends Here========== -->


@endsection