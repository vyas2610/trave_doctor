@extends('web.layouts.app')

@section('main_section')

<!-- INNER PAGE WRAPPER
			============================================= -->
<div class="inner-page-wrapper">




    <!-- BREADCRUMB
    ============================================= -->
    <div id="breadcrumb" class="bg-darkblue division mt-15">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb white-color">
                            <li class="breadcrumb-item"><a href="demo-1.html">&#91; Home &#93;</a></li>
                            <li class="breadcrumb-item"><a href="blog-listing.html">All Posts</a></li>
                            <li class="breadcrumb-item active" aria-current="page">The United King...</li>
                        </ol>
                    </nav>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BREADCRUMB -->




    <!-- SINGLE POST
    ============================================= -->
    <section id="single-post" class="wide-80 blog-page-section division">
        <div class="container">
            <div class="row">


                <!-- POST CONTENT -->
                <div class="col-lg-8">
                    <div class="single-blog-post pe-15">

                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-30">
                            <img class="img-fluid" src="images/blog/post-7-img.jpg" alt="blog-post-image" />
                        </div>

                        <!-- Post Data -->
                        <p class="post-meta">August 10, 2019 in <span>PR & Immigration</span></p>

                        <!-- Title -->
                        <h4 class="h4-lg deepblue-color mb-30">The United Kingdom Immigration & Permanent
                            Residency Consultants</h4>

                        <!-- POST TEXT -->
                        <div class="sblog-post-txt">

                            <!-- Text -->
                            <p>Aliqum mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna
                                vitae
                                auctor congue magna nihil impedit ligula risus. Mauris donec ociis et magnis
                                sapien etiam
                                sapien sem sagittis congue tempor gravida donec enim ipsum porta justo integer
                                at odio velna
                            </p>

                            <!-- Text -->
                            <p>Sagittis congue augue egestas volutpat egestas magna suscipit egestas magna ipsum
                                vitae
                                purus efficitur ipsum primis in cubilia laoreet augue egestas luctus donec diam.
                            </p>

                            <!-- Text -->
                            <p>Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque vel
                                laoreet
                                turpis urna augue, viverra a augue eget, dictum tempor diam. Sed pulvinar
                                consectetur
                                vel imperdiet dui varius viverra. Pellentesque ac massa lorem. Fusce eu cursus
                                non nulla
                                vitae massa placerat purus bibendum quis, aliquet elementum massa
                            </p>

                            <!-- Small Title -->
                            <h5 class="h5-md">Semper lacus cursus porta, feugiat primis</h5>

                            <!-- Text -->
                            <p>Curabitur ac dapibus libero. Quisque eu tristique neque. Phasellus blandit
                                tristique justo
                                ut aliquam. Aliquam vitae molestie nunc. Quisque sapien justo, aliquet non
                                molestie venenatis
                                nec purus. Aliquam eget lacinia elit. Vestibulum tincidunt tincidunt massa,
                                justo porttitor.
                                Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque el
                                laoreet turpis
                                urna augue, viverra a augue eget, dictum tempor diam pulvinar consectetur
                            </p>

                            <!-- List -->
                            <ul class="txt-list">

                                <li>Tempor magna ipsum vitae purus primis pretium</li>
                                <li>An magnis nulla dolor sapien augue erat iaculis</li>
                                <li>Pretium ligula rutrum luctus blandit porta justo</li>
                                <li>Feugiat a primis ultrice ligula risus auctor rhoncus purus ipsum primis</li>
                                <li>Sapien undo pretium purus ligula tempus ipsum</li>
                                <li>Quaerat sodales sapien undo euismod purus and blandit (Luctus Blandit Porta)
                                </li>

                            </ul>

                            <!-- INNER IMAGES -->
                            <div class="post-inner-img">
                                <img class="img-fluid" src="images/image-10.jpg" alt="blog-post-image" />
                            </div> <!-- END INNER IMAGES -->

                            <!-- Post Text -->
                            <p>Sagittis congue augue egestas volutpat egestas magna suscipit egestas magna ipsum
                                vitae
                                purus efficitur ipsum primis in cubilia laoreet augue egestas luctus donec diam.
                                Curabitur
                                ac dapibus libero. Quisque eu tristique neque. Phasellus blandit tristique justo
                                ut aliquam.
                                Aliquam vitae <a href="#" class="primary-color">molestie nunc sapien justo</a>,
                                aliquet non
                                molestie sed, venenatis nec purus. Aliquam eget lacinia elit. Vestibulum
                                tincidunt tincidunt
                                massa, et porttitor justo.
                            </p>

                            <!-- Small Title -->
                            <h5 class="h5-md">Vitae massa placerat vulputate</h5>

                            <!-- Text -->
                            <p>Nullam non scelerisque lectus. In at mauris vel nisl convallis porta at vitae
                                dui. Nam
                                lacus ligula, vulputate molestie bibendum quis, aliquet elementum massa.
                                Vestibulum ut
                                sagittis odio aliquet elementum massa. Vestibulum ut sagittis lorem fusce
                                aliquet cursus
                            </p>

                            <!-- Post Text -->
                            <p>In at mauris vel nisl convallis porta at vitae dui. Nam lacus ligula, vulputate
                                molestie
                                bibendum quis, aliquet elementum massa. Vestibulum ut sagittis odio. Ac massa
                                lorem. Fusce eu
                                cursus est. Fusce non nulla vitae massa placerat vulputate vel a purus. Aliqum
                                mullam blandit
                                tempor sapien pulvinar consectetur nibh, vel imperdiet dui varius viverra.
                            </p>

                            <!-- BLOG POST SHARE LINKS -->
                            <div class="row post-share-links d-flex align-items-center">

                                <!-- POST TAGS -->
                                <div class="col-md-9 col-xl-6 post-tags-list">
                                    <span><a href="#">Consultations</a></span>
                                    <span><a href="#">Immigration</a></span>
                                    <span><a href="#">Visa</a></span>
                                </div>

                                <!-- POST SHARE ICONS -->
                                <div class="col-md-3 col-xl-6 post-share-list text-right">
                                    <ul class="share-social-icons text-center clearfix">
                                        <li><a href="#" class="share-ico ico-facebook"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#" class="share-ico ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="share-ico ico-like"><i class="far fa-bookmark"></i></a></li>
                                    </ul>
                                </div>

                            </div> <!-- END BLOG POST SHARE -->


                        </div> <!-- END POST TEXT -->


                        <!-- ABOUT POST AUTHOR -->
                        <div class="author-senoff">

                            <!-- Avatar -->
                            <img src="images/review-author-6.jpg" alt="author-avatar">

                            <!-- Text -->
                            <div class="author-senoff-txt">

                                <!-- Title -->
                                <h5 class="h5-md">Published by Jeremy Taylor</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur elit eiusmod tempor sapien incidide
                                    ut labore
                                    dolore. incididunt ut labore et dolore. Neque turpis vitae eros praesent
                                    varius. Egestas
                                    congue augue egestas volutpat egestas magna suscipit egestas magna
                                </p>

                            </div>

                        </div> <!-- END ABOUT POST AUTHOR -->


                        <!-- OTHER POSTS
                        ============================================= -->
                        <div class="other-posts">
                            <div id="op-row" class="row d-flex align-items-center">

                                <!-- Previous Post -->
                                <div class="col-md-5">
                                    <div class="prev-post mb-30 pe-45">
                                        <h5 class="h5-xs"><i class="fas fa-arrow-left"></i> Previous Post</h5>
                                        <a href="single-post.html">Canada Federal Skilled Worker Program</a>
                                    </div>
                                </div>

                                <!-- All Posts -->
                                <div class="col-md-2 text-center">
                                    <div class="all-posts mb-30">
                                        <a href="blog-listing.html"><i class="fas fa-th-large"></i></a>
                                    </div>
                                </div>

                                <!-- Next Post -->
                                <div class="col-md-5 text-right">
                                    <div class="next-post mb-30 ps-45">
                                        <h5 class="h5-xs">Next Post <i class="fas fa-arrow-right"></i></h5>
                                        <a href="single-post.html">Top Reasons for Australian Working Visa
                                            Rejection</a>
                                    </div>
                                </div>

                            </div> <!-- End row -->
                        </div> <!-- END OTHER POSTS -->


                        <!-- POST COMMENTS -->
                        <div class="single-post-comments">


                            <!-- Title -->
                            <h5 class="h5-xl">4 Comments</h5>


                            <!-- COMMENT #1 -->
                            <div class="d-flex mt-50">

                                <!-- Comment-1 Avatar -->
                                <img class="me-3" src="images/post-author-1.jpg" alt="comment-avatar">

                                <div class="flex-grow-1">

                                    <!-- Comment-1 Meta -->
                                    <div class="comment-meta">
                                        <h5 class="h5-sm mt-0 noto-font-700 purple-color">Thomas</h5>
                                        <span class="comment-date">5 days ago&#8194;- </span>
                                        <span class="btn-reply"><a href="#leave-comment" class="internal-link"><i class="fas fa-reply"></i>
                                                Reply</a></span>
                                    </div>

                                    <!-- Comment-1 Text -->
                                    <p>Etiam sapien sem magna at vitae pulvinar congue augue egestas pretium
                                        neque id viverra
                                        suscipit egestas magna porta ratione, mollis risus lectus porta rutrum
                                        arcu aenean
                                        primis in augue luctus neque purus ipsum neque dolor primis
                                    </p>

                                    <hr />

                                    <!-- COMMENT #2 -->
                                    <div class="d-flex mt-3">

                                        <!-- Comment-2 Avatar -->
                                        <a href="#" class="pe-3">
                                            <img src="images/post-author-2.jpg" alt="comment-avatar">
                                        </a>

                                        <div class="flex-grow-1">

                                            <!-- Comment-2 Meta -->
                                            <div class="comment-meta">
                                                <h5 class="h5-sm mt-0 noto-font-700 purple-color">David Clark
                                                </h5>
                                                <span class="comment-date">6 days ago&#8194;- </span>
                                                <span class="btn-reply"><a href="#leave-comment" class="internal-link"><i class="fas fa-reply"></i>
                                                        Reply</a></span>
                                            </div>

                                            <!-- Comment-2 Text -->
                                            <p>Etiam sapien sem magna at vitae pulvinar congue augue egestas
                                                pretium neque id
                                                viverra suscipit porta ratione, mollis risus lectus porta
                                                aliquet lorem purus,
                                                quis mollis nisi laoreet vitae
                                            </p>

                                        </div>
                                    </div> <!-- END COMMENT #2 -->

                                </div>
                            </div> <!-- END COMMENT #1 -->


                            <hr />


                            <!-- COMMENT #3 -->
                            <div class="d-flex mt-40">

                                <!-- Comment-4 Avatar -->
                                <img class="me-3" src="images/post-author-3.jpg" alt="comment-avatar">

                                <div class="flex-grow-1">

                                    <!-- Comment-4 Meta -->
                                    <div class="comment-meta">
                                        <h5 class="h5-sm mt-0 noto-font-700 purple-color">Jasmine</h5>
                                        <span class="comment-date">13 days ago&#8194;- </span>
                                        <span class="btn-reply"><a href="#leave-comment" class="internal-link"><i class="fas fa-reply"></i>
                                                Reply</a></span>
                                    </div>

                                    <!-- Comment-4 Text -->
                                    <p>Porta ratione, mollis risus lectus porta rutrum arcu aenean primis in
                                        augue luctus
                                        neque purus ipsum neque dolor primis libero tempus, tempor posuere
                                        ligula varius
                                        impedit enim tempor vitae pulvinar congue augue egestas. Praesent
                                        aliquet lorem purus,
                                        quis mollis nisi laoreet vitae ьauris nec consequat tortor
                                    </p>

                                </div>
                            </div> <!-- END COMMENT #3 -->


                            <hr />


                            <!-- COMMENT #4 -->
                            <div class="d-flex mt-40">

                                <!-- Comment-4 Avatar -->
                                <img class="me-3" src="images/post-author-4.jpg" alt="comment-avatar">

                                <div class="flex-grow-1">

                                    <!-- Comment-4 Meta -->
                                    <div class="comment-meta">
                                        <h5 class="h5-sm mt-0 noto-font-700 purple-color">Rady Smith</h5>
                                        <span class="comment-date">42 days ago&#8194;- </span>
                                        <span class="btn-reply"><a href="#leave-comment" class="internal-link"><i class="fas fa-reply"></i>
                                                Reply</a></span>
                                    </div>

                                    <!-- Comment-4 Text -->
                                    <p>Etiam sapien sem magna at vitae pulvinar congue augue egestas pretium
                                        neque id viverra
                                        suscipit egestas magna porta ratione, mollis risus lectus porta rutrum
                                        arcu aenean
                                        primis in augue auctor integer congue
                                    </p>

                                </div>
                            </div> <!-- END COMMENT #4 -->


                            <hr />


                        </div>
                        <!--END POST COMMENTS -->


                        <!-- COMMENT FORM -->
                        <div id="leave-comment">

                            <!-- Title -->
                            <h5 class="h5-xl noto-font-700 purple-color">Leave a Comment</h5>

                            <!-- Text -->
                            <p class="grey-color">Your email address will not be published. Required fields are
                                marked *</p>

                            <form name="commentForm" class="row comment-form">

                                <div id="input-message" class="col-md-12 input-message">
                                    <p>Add Comment *</p>
                                    <textarea class="form-control message" name="message" rows="6" placeholder="Enter Your Comment Here* ..." required></textarea>
                                </div>

                                <div id="input-name" class="col-md-12">
                                    <p>Name*</p>
                                    <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
                                </div>

                                <div id="input-email" class="col-md-12">
                                    <p>Email*</p>
                                    <input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required>
                                </div>

                                <!-- Contact Form Button -->
                                <div class="col-lg-12 mt-15 form-btn">
                                    <button type="submit" class="btn btn-primary tra-black-hover submit">Post
                                        Comment</button>
                                </div>

                                <!-- Contact Form Message -->
                                <div class="col-md-12 comment-form-msg text-center">
                                    <div class="sending-msg"><span class="loading"></span></div>
                                </div>

                            </form>

                        </div> <!-- END COMMENT FORM -->


                    </div>
                </div> <!-- END POST CONTENT -->


                <!-- SIDEBAR -->
                <aside id="sidebar" class="col-lg-4">


                    <!-- SEARCH FIELD -->
                    <div id="search-field" class="sidebar-div mb-50">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
                            <div class="input-group-append">
                                <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>


                    <!-- BLOG CATEGORIES -->
                    <div class="blog-categories sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-lg">Categories</h5>

                        <!-- List -->
                        <ul class="blog-category-list clearfix">
                            <li><a href="visa-details.html" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Education Visa</a>
                            </li>
                            <li><a href="visa-details.html" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Skilled Woker
                                    Visa</a></li>
                            <li><a href="visa-details.html" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Work Permit
                                    Visa</a></li>
                            <li><a href="visa-details.html" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> PR and Migrate
                                    Visa</a></li>
                            <li><a href="visa-details.html" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Business Visa</a>
                            </li>
                            <li><a href="visa-details.html" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Spouse/Family
                                    Visas</a></li>
                            <li><a href="visa-details.html" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Tourist & Visitor
                                    Visas</a></li>
                            <li><a href="visa-details.html" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Working Holiday
                                    Visas</a></li>
                        </ul>

                    </div>


                    <!-- LATEST POSTS -->
                    <div class="popular-posts sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-lg">Latest Posts</h5>

                        <ul class="latest-posts">

                            <!-- Latest Post #1 -->
                            <li class="clearfix">

                                <!-- Date -->
                                <p class="p-sm lp-date">18 hours ago - <span class="txt-400">Immigration
                                        Visa</span></p>

                                <!-- Link -->
                                <h5 class="h5-sm">
                                    <a href="single-post.html">Ways to move to Denmark</a>
                                </h5>

                                <!-- Text -->
                                <p>Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor
                                    feugiat felis...</p>

                            </li>

                            <!-- Latest Post #2 -->
                            <li class="clearfix">

                                <!-- Date -->
                                <p class="p-sm lp-date">Dec 02, 2019 - <span class="txt-400">Working Visa</span>
                                </p>

                                <!-- Link -->
                                <h5 class="h5-sm0">
                                    <a href="single-post.html">Schengen Countries to begin New Visa Sticker from
                                        21st December</a>
                                </h5>

                                <!-- Text -->
                                <p>Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor
                                    feugiat felis...</p>

                            </li>

                            <!-- Latest Post #3 -->
                            <li class="clearfix">

                                <!-- Date -->
                                <p class="p-sm lp-date">Nov 26, 2019 - <span class="txt-400">Travel Visa</span>
                                </p>

                                <!-- Link -->
                                <h5 class="h5-sm">
                                    <a href="single-post.html">4 Destinations for a Family Holiday in Portugal
                                        2020 </a>
                                </h5>

                                <!-- Text -->
                                <p>Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor
                                    feugiat felis...</p>

                            </li>
                        </ul>

                    </div>


                    <!-- TAGS CLOUD -->
                    <div class="tags-cloud sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-lg">Tags Cloud</h5>

                        <span class="badge"><a href="#">Consultations</a></span>
                        <span class="badge"><a href="#">Education</a></span>
                        <span class="badge"><a href="#">Embassy</a></span>
                        <span class="badge"><a href="#">Immigration</a></span>
                        <span class="badge"><a href="#">Travelling</a></span>
                        <span class="badge"><a href="#">Travel Tips</a></span>
                        <span class="badge"><a href="#">Tourism</a></span>
                        <span class="badge"><a href="#">Visa</a></span>
                    </div>


                    <!-- SIDEBAR COUNTRIES -->
                    <div class="sidebar-countries sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-lg">Countries: </h5>

                        <!-- List -->
                        <ul class="sidebar-country-list clearfix">

                            <li><a href="{{route('country.index')}}">
                                    <img class="img-fluid" src="images/sidebar-canada.jpg" alt="sidebar-image" />Canada</a>
                            </li>



                        </ul>

                    </div>


                </aside> <!-- END SIDEBAR -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END SINGLE POST -->




    @endsection