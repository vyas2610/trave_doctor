<!DOCTYPE html>
<!-- Travel Doctor - Immigration and Visa Consulting Website Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jthemes" />
    <meta name="description" content="Travel Doctor - Immigration and Visa Consulting Website Template" />
    <meta name="keywords" content="Responsive, Jthemes, One Page, Landing, Business, Coaching, Consulting, Creative, Immigration, Visa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SITE TITLE -->
    <title>Travel Doctor - Immigration and Visa Consulting Website Template</title>

    <!-- FAVICON AND TOUCH ICONS  -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="icon" href="apple-touch-icon.png" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">
    <link id="effect" href="{{asset('css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
    <link href="{{asset('css/tweenmax.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="{{asset('css/darkred.css')}}" rel="stylesheet">

    <!-- STYLE SWITCHER CSS -->
    <!-- <link href="css/aqua.css" rel="alternate stylesheet" title="aqua-theme">
    <link href="css/blue.css" rel="alternate stylesheet" title="blue-theme">
    <link href="css/green.css" rel="alternate stylesheet" title="green-theme">
    <link href="css/olive.css" rel="alternate stylesheet" title="olive-theme">
    <link href="css/orange.css" rel="alternate stylesheet" title="orange-theme">
    <link href="css/red.css" rel="alternate stylesheet" title="red-theme">
    <link href="css/salmon.css" rel="alternate stylesheet" title="salmon-theme">
    <link href="css/teal.css" rel="alternate stylesheet" title="teal-theme">
    <link href="css/yellow.css" rel="alternate stylesheet" title="yellow-theme"> -->

    <!-- RESPONSIVE CSS -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

</head>




<body>




    <!-- PRELOADER SPINNER
		============================================= -->
    <div id="loader-wrapper">
        <div id="loader">
            <div class="cssload-box-loading"></div>
        </div>
    </div>




    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page">




        <!-- HEADER
			============================================= -->
        <header id="header-2" class="header white-menu">
            <div class="header-wrapper">


                <!-- MOBILE HEADER -->
                <div class="wsmobileheader clearfix">
                    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                    <span class="smllogo"><img src="images/logo-black.png" style="object-fit:contain;" width="200" height="50" alt="mobile-logo" /></span>
                    <a href="tel:917014299611" class="callusbtn"><i class="fas fa-phone"></i></a>
                </div>


                <!-- HEADER STRIP -->
                <div class="headtoppart bg-white clearfix">
                    <div class="headerwp clearfix">

                        <!-- Infotmation -->
                        <div class="headertopleft">
                            <div class="header-info clearfix">
                                <span class="txt-400"><i class="far fa-clock"></i>Mon to Sat : <span>08:00 AM - 5:30
                                        PM</span></span>
                            </div>
                        </div>

                        <!-- Contacts -->
                        <div class="headertopright header-contacts">
                            <span class=" b-right txt-400"><i class="fas fa-map-marker-alt"></i>114 Jodhpur Tower Main Road Paota Jodhpur , Rajasthan (342006)</span>
                            <a href="mailto:yourdomain@mail.com" class="txt-400"><i class="far fa-envelope-open"></i>info@travelsdoctor.com</a>
                        </div>

                    </div>
                </div> <!-- END HEADER STRIP -->


                <!-- NAVIGATION MENU -->
                <div class="wsmainfull menu clearfix">
                    <div class="wsmainwp clearfix">


                        <!-- LOGO IMAGE -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 90 pixels) -->
                        <div class="desktoplogo"><a href="" class="logo-black"><img src="images/logo-black.png" width="180" height="45" alt="header-logo" style="object-fit:contain;"></a></div>
                        <div class="desktoplogo"><a href="" class="logo-white"><img src="images/logo-white.png" width="180" height="45" alt="header-logo" style="object-fit:contain;"></a></div>


                        <!-- MAIN MENU -->
                        <nav class="wsmenu clearfix blue-header">
                            <ul class="wsmenu-list">
                                <li aria-haspopup="true">
                                    <a href="{{ route('home')}}">Home</a>

                                </li>
                                <li aria-haspopup="true">
                                    <a href="{{route('about.index')}}">About Us</a>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="{{route('faq.index')}}">FAQ</a>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="{{route('visa.index')}}">Visa</a>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="{{route('contact.index')}}">Contact Us</a>
                                </li>


                                <!-- <li aria-haspopup="true"><a href="#">Pages <span class="wsarrow"></span></a>
                                    <div class="wsmegamenu clearfix">
                                        <div class="container">
                                            <div class="row">

                                                <ul class="col-lg-4 col-md-12 col-xs-12 link-list">
                                                    <li class="title">Standard Pages:</li>
                                                    <li><a href="./?page=about">About Us Page</a></li>
                                                    <li><a href="courses-list.html">Courses List Page</a></li>
                                                    <li><a href="course-details.html">Course Details Page</a></li>
                                                    <li><a href="partners.html">Partners & Colleges</a></li>
                                                    <li><a href="./?page=faqs">FAQs Page</a></li>
                                                </ul>

                                                <ul class="col-lg-4 col-md-12 col-xs-12 link-list">
                                                    <li class="title">Special Pages:</li>
                                                    <li><a href="country-details.html">Countries List Page</a></li>
                                                    <li><a href="country-details.html">Country Details Page</a></li>
                                                    <li><a href="visa-list-1.html">Visa List Page #1</a></li>
                                                    <li><a href="visa-list-2.html">Visa List Page #2</a></li>
                                                    <li><a href="visa-details.html">Visa Details Page</a></li>
                                                </ul>

                                                <ul class="col-lg-4 col-md-12 col-xs-12 link-list">
                                                    <li class="title">Auxiliary Pages:</li>
                                                    <li><a href="blog-listing.html">Blog Listing Page</a></li>
                                                    <li><a href="single-post.html">Single Blog Post</a></li>
                                                    <li><a href="contacts-1.html">Contact Style #1</a></li>
                                                    <li><a href="contacts-2.html">Contact Style #2</a></li>
                                                    <li><a href="contacts-3.html">Contact Style #3</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </li> -->


                                <!-- LAST NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true">
                                    <a href="tel:917014299611" class="header-btn btn-primary tra-black-hover last-link">
                                        <i class="fas fa-mobile-alt last-link"></i> +91 7014299611
                                    </a>
                                </li>


                            </ul>
                        </nav> <!-- END MAIN MENU -->

                    </div>
                </div> <!-- END NAVIGATION MENU -->


            </div> <!-- End header-wrapper -->
        </header> <!-- END HEADER -->

        @yield('main_section')




        <!-- FOOTER-3
			============================================= -->
        <footer id="footer-3" class="bg-blue-map wide-40 footer division">
            <div class="container white-color">


                <!-- FOOTER CONTENT -->
                <div class="row">


                    <!-- FOOTER CONTACTS -->
                    <div class="col-lg-3 col-xl-3">
                        <div class="footer-box mb-40">

                            <!-- Title -->
                            <h5 class="h5-md">Contact Details</h5>

                            <!-- Address -->
                            <!-- <p class="p-sm">121 King Street, Melbourne,</p>
                    <p class="p-sm">Victoria 3000 Australia</p> -->
                            <p class="p-sm">I-Floor Jodhpur Tower Main Road </p>
                            <p class="p-sm">Paota, Jodhpur, Rajasthan (342006)</p>

                            <!-- Phone -->
                            <p class="p-sm mt-20">Phone: +12 9 8765 4321</p>

                            <!-- Email -->
                            <p class="p-sm foo-email">Email: <a href="mailto:info@travelsdoctor.com">info@travelsdoctor.com</a></p>

                            <!-- Working Hours -->
                            <p class="p-sm mt-20">Mon-Fri: 9:00AM - 6:30PM</p>
                            <p class="p-sm">Saturday: 8:30AM - 3:30PM</p>
                            <p class="p-sm">Sunday: Closed</p>

                        </div>
                    </div>


                    <!-- FOOTER LINKS -->
                    <div class="col-lg-3 col-xl-3">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h5 class="h5-md">Useful Links</h5>

                            <!-- Footer Links -->
                            <ul class="foo-links clearfix">
                                <li><a href="#">About Travel Doctor</a></li>
                                <li><a href="#">Visa Information</a></li>
                                <li><a href="#">Immigration FAQ</a></li>
                                <li><a href="#">Immigration Assistance</a></li>
                                <li><a href="#">Travel Doctor Testimonials</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                            </ul>

                        </div>
                    </div>


                    <!-- FOOTER LINKS -->
                    <div class="col-lg-3 col-xl-3">
                        <div class="footer-links mb-40">

                            <!-- Title -->
                            <h5 class="h5-md">Visas</h5>

                            <!-- Footer Links -->
                            <ul class="foo-links clearfix">
                                <li><a href="#">Visitor Visas</a></li>
                                <li><a href="#">Permanent Residence Visas</a></li>
                                <li><a href="#">Business Visas</a></li>
                                <li><a href="#">Working Holiday Visas</a></li>
                                <li><a href="#">Studying & Training Visas</a></li>
                                <li><a href="#">Skilled Work Visas</a></li>
                                <li><a href="#">Family & Partner Visas</a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- FOOTER NEWSLETTER FORM -->
                    <div class="col-lg-3 col-xl-3">
                        <div class="footer-form mb-20">

                            <!-- Title -->
                            <h5 class="h5-md">Stay Always In Touch</h5>

                            <!-- Newsletter Form Input -->
                            <form class="newsletter-form">

                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Your email address" required id="s-email">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary tra-black-hover">Subscribe</button>
                                    </span>
                                </div>

                                <!-- Newsletter Form Notification -->
                                <label for="s-email" class="form-notification"></label>

                            </form>

                        </div>
                    </div>


                </div> <!-- END FOOTER CONTENT -->


                <!-- BOTTOM FOOTER -->
                <div class="bottom-footer">
                    <div class="row d-flex align-items-center">


                        <!-- FOOTER LOGO -->
                        <div class="col-md-4 col-lg-3">
                            <!-- Footer Logo -->
                            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 420 x 100 pixels) -->
                            <img src="images/logo-white.png" width="210" height="50" alt="footer-logo" style="object-fit:contain;">
                        </div>


                        <!-- FOOTER SOCIALS LINKS -->
                        <div class="col-md-8 col-lg-9 text-right">
                            <p class="footer-copyright">&copy; Copyright <span>Travel Doctor <?php echo date('Y') ?></span>. All Rights Reserved
                            </p>
                            <p class="p-sm"><a href="#">Privacy Policy</a></p>
                            <p class="p-sm"><a href="#">Terms & Conditions</a></p>
                            <p class="p-sm"><a href="#">Cookies</a></p>
                        </div>


                    </div>
                </div> <!-- END BOTTOM FOOTER -->


            </div> <!-- End container -->
        </footer> <!-- END FOOTER-3 -->




    </div> <!-- END PAGE CONTENT -->




    <!-- EXTERNAL SCRIPTS
		============================================= -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <script src="{{asset('js/jquery.easing.js')}}"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/materialize.js')}}"></script>
    <script src="{{asset('js/jquery.scrollto.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/hero-request-form.js')}}"></script>
    <script src="{{asset('js/hero-register-form.js')}}"></script>
    <script src="{{asset('js/request-form.js')}}"></script>
    <script src="{{asset('js/contact-form.js')}}"></script>
    <script src="{{asset('js/comment-form.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>

    <!-- Custom Script -->
    <script src="js/custom.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!-- [if lt IE 9]>
    <script src="js/html5shiv.js" type="text/javascript"></script>
    <script src="js/respond.min.js" type="text/javascript"></script>
<![endif] -->


</body>



</html>