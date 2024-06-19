@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<!-- start page title -->
<section class="page-title-big-typography bg-base-color ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-conference-page-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-lg-8 text-center page-title-extra-large">
                <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                    <span class="d-block text-outline text-outline-width-2px text-outline-color-white" data-fancy-text='{ "string": ["FAQ"], "duration": 500, "delay": 0, "speed": 50, "clipPath": ["inset(0 500px 0 0)", "inset(0px -5px 0px 0px)"], "easing": "easeOutCubic" }'></span>
                    <!-- <span data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad", "duration": 1000, "delay": 300 }'>US</span> -->
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
  <!-- start section -->
<section class="bg-midnight-blue pt-0 half-section d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            <div class="p-0 overlap-section text-start ps-7" data-anime='{ "opacity": [0, 1], "translateY": [50, 0], "delay": 1000, "duration": 600, "easing": "easeOutQuad" }'>
                <img src="images/demo-conference-02.png" alt="" class="animation-rotation">
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@if(count($conferenceFaq) > 0)
 <!-- start section -->
 <section class="bg-dark-midnight-blue border-bottom border-color-transparent-white-light">
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-lg-10 offset-xl-1 lg-ps-50px md-ps-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                @foreach($conferenceFaq as $data)
                                    <!-- start accordion item -->
                                    <div class="accordion-item active-accordion">
                                        <div class="accordion-header border-bottom border-color-transparent-white-light">
                                            <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                                <div class="accordion-title mb-0 position-relative">
                                                    <i class="feather icon-feather-minus body-text-color"></i><span class="fs-18 text-white">{{$data->question}}</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-white-light text-medium-gray">
                                                <p>{{$data->answer}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end accordion item -->
                                     @endforeach
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div> 
            </div>
        </section>
        <!-- end section --> 
         @endif
@endsection