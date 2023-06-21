@extends('web.layouts.app')

@section('main_section')

<!-- INNER PAGE WRAPPER
			============================================= -->
<div class="inner-page-wrapper">




    <!-- BREADCRUMB
            ============================================= -->
    <div id="breadcrumb" class="bg-darkblue division">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb white-color">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">&#91; Home &#93;</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BREADCRUMB -->




    <!-- GOOGLE MAP
            ============================================= -->
    <!-- <div id="gmap" class="gmap"></div> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5535.469954374306!2d73.04097452494547!3d26.297598830025652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418da83bfdddfd%3A0x10bf32a54ceba8fa!2sPaota%2C%20Jodhpur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1686982056764!5m2!1sen!2sin" style="width: 100%; height: 450px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




    <!-- CONTACTS-4
            ============================================= -->
    <section id="contacts-4" class="bg-lightgrey bg-tra-city wide-100 contacts-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-12 section-title center">

                    <!-- Title -->
                    <h2 class="h2-xs">Have Questions? Get in Touch</h2>

                    <!-- Text -->
                    <p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
                        felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
                    </p>

                </div>
            </div> <!-- END SECTION TITLE -->


            <div class="row">


                <div class="col-lg-5">
                    <div class="contact-boxes">


                        <!-- LOCATION -->
                        <div class="contact-box icon-xs clearfix mb-25">

                            <!-- Icon -->
                            <div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>

                            <!-- Text -->
                            <div class="contact-box-txt">
                                <h5 class="h5-sm deepblue-color">I-Floor Jodhpur Tower Main Road </h5>
                                <h5 class="h5-xs deepblue-color">Paota, Jodhpur, Rajasthan (342006)</h5>
                                <p class="grey-color">Our Location</p>
                            </div>

                        </div>


                        <!-- PHONES -->
                        <div class="contact-box icon-xs clearfix mb-25">

                            <!-- Icon -->
                            <div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>

                            <!-- Text -->
                            <div class="contact-box-txt">
                                <h5 class="h5-sm deepblue-color">P: +91 7014299611</h5>
                                <!-- <h5 class="h5-xs deepblue-color">F: +12 3 0987 6543</h5> -->
                                <p class="grey-color">Let's Talk</p>
                            </div>

                        </div>


                        <!-- EMAIL -->
                        <div class="contact-box icon-xs clearfix">

                            <!-- Icon -->
                            <div class="contact-box-icon"><span class="flaticon-235-mail"></span></div>

                            <!-- Text -->
                            <div class="contact-box-txt">
                                <h5 class="h5-xs deepblue-color"><a href="mailto:yourdomain@mail.com">info@travelsdoctor.com</a></h5>
                                <p class="grey-color">Drop a e-mail to us</p>
                            </div>

                        </div>


                    </div>
                </div>


                <!-- CONTACT FORM -->
                <div class="col-lg-7">
                    <div class="form-holder">
                        <form name="contactForm" class="row contact-form">

                            <!-- Contact Form Input -->
                            <div id="input-name" class="col-lg-12">
                                <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
                            </div>

                            <!-- Contact Form Input -->
                            <div id="input-email" class="col-lg-12">
                                <input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required>
                            </div>

                            <!-- Contact Form Select -->
                            <div id="input-subject" class="col-lg-12 input-subject">
                                <select id="inlineFormCustomSelect2" name="subject" class="custom-select subject" required>
                                    <option value="">Your Question About..</option>
                                    <option>Student Visa</option>
                                    <option>Travel visa</option>
                                    <option>Working Visa</option>
                                    <option>Business Visa</option>
                                    <option>Visitor Visa</option>
                                    <option>Other...</option>
                                </select>
                            </div>

                            <!-- Contact Form Mesaage -->
                            <div id="input-message" class="col-lg-12 input-message">
                                <textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
                            </div>

                            <!-- Contact Form Button -->
                            <div class="col-lg-12 mt-15 form-btn">
                                <button type="submit" class="btn btn-primary tra-black-hover submit">Send Your Message</button>
                            </div>

                            <!-- Contact Form Message -->
                            <div class="col-lg-12 contact-form-msg text-center">
                                <div class="sending-msg"><span class="loading"></span></div>
                            </div>

                        </form>
                    </div>
                </div> <!-- END CONTACT FORM -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END CONTACTS-4 -->




    <!-- CALL TO ACTION-4
            ============================================= -->
    <section id="cta-4" class="bg-fixed cta-section division">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-md-8 col-lg-7 offset-md-4 offset-lg-5">
                    <div class="cta-txt">

                        <!-- Title  -->
                        <h3 class="h3-xl">Consultations for prospective immigrants</h3>

                        <!-- Text -->
                        <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero
                            tempus, and blandit ligula varius
                        </p>

                        <!-- Button  -->
                        <a href="mailto:youremail@mail.com" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                            <span>Get Consultation <i class="fas fa-arrow-right"></i></span>
                        </a>

                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END CALL TO ACTION-4 -->
    @endsection