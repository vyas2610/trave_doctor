@extends('web.layouts.app')

@section('main_section')

<!-- BLOG PAGE CONTENT
				============================================= -->
<section id="blog-page" class="wide-100 blog-page-section division">
    <div class="container">
        <div class="row">


            <!-- BLOG POSTS HOLDER -->
            <div class="col-lg-8">
                <div class="posts-holder pe-15">


                    <!-- BLOG POST #1 -->
                    <div class="blog-post">


                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-30">
                            <img class="img-fluid" src="images/blog/post-4-img.jpg" alt="blog-post-image" />
                        </div>

                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Meta -->
                            <p class="post-meta"><a href="#" class="grey-color">Immigration Visa</a> - 12
                                min read</p>

                            <!-- Title -->
                            <h4 class="h4-xs">
                                <a href="{{route('single-blog.view')}}" class="darkblue-color">What visa do you need to
                                    work legally in Singapore?</a>
                            </h4>

                            <!-- Text -->
                            <p>Aliqum mullam blandit tempor sapien gravida donec ipsum, at porta justo.
                                Velna vitae
                                auctor congue magna tempor sodales sapien. Quaerat neque purus ipsum neque
                                dolor primis...
                            </p>

                            <!-- Post Data -->
                            <p class="post-data">By <a href="">Sean McMarthy</a> - 18 hours ago</p>

                        </div>


                    </div> <!-- END BLOG POST #1 -->




                    <!-- BLOG PAGE PAGINATION -->
                    <div class="blog-page-pagination">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center primary-pagination">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a> </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div> <!-- END BLOG POSTS HOLDER -->


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

                        <li>
                            <a href="{{route('country.index')}}">
                                <img class="img-fluid" src="images/sidebar-canada.jpg" alt="sidebar-image" />Canada
                            </a>
                        </li>


                    </ul>

                </div>


            </aside> <!-- END SIDEBAR -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END BLOG PAGE CONTENT -->

@endsection