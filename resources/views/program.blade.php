@extends('layouts.app')

@section('title', 'Conference Program')

@section('content')
<!-- start page title -->
<section class="page-title-big-typography bg-base-color ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-conference-page-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-lg-8 text-center page-title-extra-large">
                <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                    <span class="d-block text-outline text-outline-width-2px text-outline-color-white" data-fancy-text='{ "string": ["Conference"], "duration": 500, "delay": 0, "speed": 50, "clipPath": ["inset(0 500px 0 0)", "inset(0px -5px 0px 0px)"], "easing": "easeOutCubic" }'></span>
                    <span data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad", "duration": 1000, "delay": 300 }'>Program</span>
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
<!-- start section of Conference Program -->
@if(count($conferenceProgram) > 0)
<section class="bg-midnight-blue background-position-left-bottom background-no-repeat sm-background-image-none" style="background-image: url('images/demo-conference-experts-bg.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-xl-1 lg-ps-50px md-ps-15px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":150, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="tab-content h-100">
                    <!-- start tab content -->
                    <div class="tab-pane fade in active show" id="tab_seven1">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion accordion-style-02" id="accordion-style-01" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                    @foreach($conferenceProgram as $data)
                                    <!-- start accordion item -->
                                    <div class="accordion-item active-accordion">
                                        <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                            <div class="accordion-title mb-0 position-relative text-dark-gray">
                                               <span class="d-inline-block alt-font text-white fs-20 mb-5px">{{$data->title}}</span>
                                            </div>
                                        </div>
                                        <div id="accordion-style-01-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-01">
                                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                <p class="w-90 md-w-100 mx-auto">{{$data->description}}.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end accordion item -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- end section -->
@endsection