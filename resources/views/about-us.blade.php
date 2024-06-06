@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- start page title -->
<section class="page-title-big-typography bg-base-color ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-conference-page-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-lg-8 text-center page-title-extra-large">
                <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                    <span class="d-block text-outline text-outline-width-2px text-outline-color-white" data-fancy-text='{ "string": ["About"], "duration": 500, "delay": 0, "speed": 50, "clipPath": ["inset(0 500px 0 0)", "inset(0px -5px 0px 0px)"], "easing": "easeOutCubic" }'></span>
                    <span data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad", "duration": 1000, "delay": 300 }'>US</span>
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
<!-- start section -->
<section class="bg-dark-midnight-blue background-position-right-top background-no-repeat md-background-image-none" style="background-image: url('images/demo-conference-about-bg.png')">
    <div class="container-fluid d-none d-md-block">
        <div class="row">
            <div class="p-0 overlap-section text-end pe-4 md-pe-5">
                <img src="images/demo-conference-02.png" alt="" class="animation-rotation lg-w-120px">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10 md-mb-30px md-pt-25px">
                <figure class="position-relative mb-50px sm-ps-50px">
                    <div class="overflow-hidden border-radius-4px position-relative">
                        <div class="w-100" data-anime='{ "effect": "slide", "direction": "bt", "color": "#17161a", "duration": 1000, "delay": 0 }'>
                            <img src="{{$conferenceAboutUs->image}}" alt="" class="w-100 border-radius-5px liquid-parallax" data-parallax-liquid="true" data-parallax-position="top" data-parallax-scale="1.2">
                        </div>
                    </div>
                    <figcaption class="position-absolute z-index-1 bottom-minus-50px lg-bottom-minus-30px sm-bottom-minus-50px left-minus-50px lg-left-minus-30px sm-left-minus-0px w-50 md-w-220px text-center last-paragraph-no-margin" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1000, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="atropos" data-atropos>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner border-radius-5px bg-base-color text-white ps-12 pe-12 pt-50px pb-50px lg-pt-35px lg-pb-35px" data-atropos-offset="3">
                                        <span class="fs-130 lg-fs-110 d-inline-block ls-minus-5px fw-600 text-shadow-double-large text-outline text-outline-width-2px alt-font">{{$conferenceAboutUs->international_speaker}}</span>
                                        <span class="alt-font text-uppercase fw-500 ls-2px fs-17 lh-24 d-inline-block">International
                                            speakers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xl-4 offset-lg-1 col-md-10 col-lg-5" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-white fw-500 ls-minus-2px mb-40px sm-mb-30px">
                    <span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>About conference
                </h2>
                <!-- start features box item -->
                <div class="icon-with-text-style-01 mb-30px pb-30px border-bottom border-color-transparent-white-light">
                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-white fs-20">{{$conferenceAboutUs->title}}</span>
                        </div>
                        <div class="mt-10px w-100">{{$conferenceAboutUs->description}}</div>
                    </div>
                </div>
                <!-- end features box item -->
                <a href="demo-conference-about-event.html" class="btn btn-large btn-dark-gray btn-hover-animation btn-round-edge btn-box-shadow align-self-center">
                    <span>
                        <span class="btn-text">About conference</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection