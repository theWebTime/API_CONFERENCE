@extends('layouts.app')

@section('title', 'Committee Member')

@section('content')
<!-- start page title -->
<section class="page-title-big-typography bg-base-color ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-conference-page-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-lg-8 text-center page-title-extra-large">
                <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                    <span class="d-block text-outline text-outline-width-2px text-outline-color-white" data-fancy-text='{ "string": ["Conference"], "duration": 500, "delay": 0, "speed": 50, "clipPath": ["inset(0 500px 0 0)", "inset(0px -5px 0px 0px)"], "easing": "easeOutCubic" }'></span>
                    <span data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad", "duration": 1000, "delay": 300 }'>Committee Member</span>
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
<!-- start section of Conference Committee Member-->
@if(count($conferenceCommitteeMember) > 0)
<section class="bg-midnight-blue background-position-left-bottom background-no-repeat sm-background-image-none" style="background-image: url('images/demo-conference-experts-bg.png')">
    <div class="container">
        <div class="row justify-content-center align-items-center mb-6 text-center text-lg-start">
            <div class="col-xxl-8 col-lg-7 md-mb-20px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-white fw-500 ls-minus-2px mb-0">
                    <span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Committee Member
                </h2>
            </div>
            <div class="col-xxl-4 col-lg-5 col-md-8 col-sm-10 last-paragraph-no-margin" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 justify-content-center">
            <!-- start team member item -->
            @foreach($conferenceCommitteeMember as $data)
            <div class="col text-center team-style-05 md-mb-50px">
                <div class="position-relative mb-25px">
                    <img class="border-radius-4px w-100" src="{{$data->image}}" alt="" />
                    <div class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-3 team-content bg-base-color-transparent border-radius-4px position-absolute top-0 start-0">
                        <div class="text-white opacity-7">Contact Me</div>
                        <div class="social-icon fs-19 mt-2">
                            @if($data->facebook_link)
                            <a href="{{$data->facebook_link}}" target="_blank" class="text-white mx-1"><i class="fa-brands fa-facebook-f"></i></a>
                            @endif
                            @if($data->linkedin_link)
                            <a href="{{$data->linkedin_link}}" target="_blank" class="text-white mx-1"><i class="fa-brands fa-linkedin"></i></a>
                            @endif
                            @if($data->x_Link)
                            <a href="{{$data->x_Link}}" target="_blank" class="text-white mx-1"><i class="fa-brands fa-twitter"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                <a href="demo-conference-speaker-details.html" class="fs-18 alt-font text-white text-base-color-hover d-block mb-1">{{$data->name}}</a>
                <span class="fs-16 d-block lh-normal text-white">{{$data->designation}}</span>
            </div>
            @endforeach
            <!-- end team member item -->
        </div>
    </div>
</section>
@endif
<!-- end section -->
@endsection