@extends('web.layouts.app')

@section('main_section')

<!-- HERO-7
			============================================= -->
<section id="hero-7" class="hero-section py-5">

    <!-- <Div style="padding-top: 20px;"></Div> -->


    <div class="container">
        <div class="row">
            @for($i=1;$i<=12;$i++) <div class="col-sm-3">
                <div class="hbox-1" style=" position:relative">
                    <a href="{{route('visa.view')}}">

                        <!-- Image -->
                        <div class="hover-overlay">
                            <img class="img-fluid" src="images/canada-400x400.jpg" alt="country-image" />
                            <div class="item-overlay"></div>
                        </div>

                        <!-- Title -->
                        <div class="hbox-1-content" style="border:0px solid red ;">
                            <div class="hbox-1-txt">
                                <img src="images/flags/canada.png" alt="flag-icon" style="width: 50px; position:absolute; bottom:0; top:0;right: 20px; top:215px;" />
                                <h5 class="h5-sm">Canada</h5>
                            </div>
                        </div>

                    </a>
                </div>
        </div>
        @endfor
    </div>
    </div>



</section> <!-- END HERO-7 -->





<section>
</section>

<!-- ABOUT-2
        ============================================= -->

@endsection