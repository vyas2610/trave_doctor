@extends('web.layouts.app')

@section('main_section')

<!-- ABOUT-9
				============================================= -->
<section id="about-9" class="about-section division">
    <div class="container">
        <div class="row">


            <!-- ABOUT TEXT -->
            <div class="col-lg-8">
                <div class="about-9-txt mb-40 pe-15">

                    <!-- Title -->

                    <!-- Text -->

                    <!-- List -->

                    <!-- Image -->
                    <div class="about-9-img mt-40 mb-40">
                        <div class="row">
                            @for($i=1;$i<=4;$i++) <div class="col-sm-4">
                                <div class="my-2" style="border-radius: 5px;">
                                    <div class="border text-center" style="background-color: #c2162c; color:white; font-weight:bold; line-height:35px">
                                        <p>Australia Visa Fees</p>
                                    </div>
                                    <div class="bg-light py-3 px-3" style="font-weight: bold;">
                                        <p>Process Time : 45 Days</p>
                                        <p>Stay Period : 30 Days</p>
                                        <p>Visa Category : Tourist</p>
                                        <p>Entry : single</p>
                                    </div>
                                    <a href="£">
                                        <div class="border py-3 text-center" style="font-weight: bold; background-color:#c2162c;color:white;">

                                            Request For Price


                                        </div>
                                    </a>
                                </div>
                        </div>
                        @endfor

                    </div>
                </div>

                <!-- Text -->

                <!-- Small Title -->
                <h5 class="h5-md mt-25">Documents for Australia visa application</h5>

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

                <!-- Medium Title -->
                <h4 class="h4-xs mt-30">Additional Documents</h4>

                <!-- Text -->
                <p>Quisque laoreet turpis
                    urna augue, viverra a augue eget, dictum tempor diam. Pulvinar vehicula vel
                    imperdiet
                    varius viverra. Pellentesque ac massa lorem. Fusce eu cursus nulla vitae massa
                    dictum
                    tempor diam. Nibh vel imperdiet dui varius viverra. Fusce eu cursus est nulla
                </p>

                <!-- Small Title -->
                <h5 class="h5-md">If the applicant is employed:</h5>

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

                <!-- Small Title -->
                <h5 class="h5-md mt-25">If the applicant has a family in Australia:</h5>

                <!-- List -->
                <ul class="txt-list">

                    <li>Feugiat a primis ultrice ligula risus auctor rhoncus purus ipsum primis</li>
                    <li>Sapien undo pretium purus ligula tempus ipsum</li>
                    <li>Quaerat sodales sapien undo euismod purus and blandit (Luctus Blandit Porta)
                    </li>

                </ul>

                <!-- Small Title -->
                <h5 class="h5-md mt-25">If the applicant is Student:</h5>

                <!-- List -->
                <ul class="txt-list">

                    <li>An magnis nulla dolor sapien augue erat iaculis</li>
                    <li>Pretium ligula rutrum luctus blandit porta justo</li>
                    <li>Feugiat a primis ultrice ligula risus auctor rhoncus purus ipsum primis</li>

                </ul>

                <!-- Small Title -->
                <h5 class="h5-md mt-25">If the applicant is intending to stay more than 3 months:</h5>

                <!-- List -->
                <ul class="txt-list">

                    <li>Tempor magna ipsum vitae purus primis pretium</li>
                    <li>Quaerat sodales sapien undo euismod purus and blandit (Luctus Blandit Porta)
                    </li>

                </ul>


            </div>
        </div> <!-- END ABOUT TEXT -->


        <!-- SIDEBAR -->
        <aside id="sidebar" class="col-lg-4">


            <!-- SIDEBAR CATEGORIES -->
            <div class="blog-categories sidebar-div mb-50">



            </div>





            <!-- LATEST POSTS -->
            <div class="popular-posts sidebar-div mb-50 bg-light px-2">

                <!-- Title -->
                <h5 class="h5-lg py-2 px-2 bg-light text-uppercase" style="color:#c2162c; font-weight:bold; line-height:35px;border-bottom:5px solid white;">Request For Price</h5>


                <form>
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <select class="form-control">
                            <option>Select Visa Type</option>
                            <option>30 Days</option>
                            <option>30 Days</option>
                        </select>

                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example2" class="form-control" placeholder="Name" />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="form4Example2" class="form-control" placeholder="Email" />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example2" class="form-control" placeholder="Mobile" />
                    </div>
                    <!-- Message input -->

                    <div class="form-outline mb-4">
                        <select class="form-control">
                            <option>Select Travellers</option>
                            <option>1 Traveller</option>
                            <option>3 Travellers</option>
                        </select>

                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example2" class="form-control" placeholder="Nationality" />
                    </div>
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="form4Example3" rows="4" placeholder="Enquiry"></textarea>

                    </div>
                    <!-- Checkbox -->

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                </form>

            </div>


        </aside> <!-- END SIDEBAR -->


    </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END ABOUT-9 -->

@endsection