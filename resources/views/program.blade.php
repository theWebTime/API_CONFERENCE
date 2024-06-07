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
        <div class="row align-items-center justify-content-center text-center mb-2" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-lg-8">
                <h2 class="alt-font text-white fw-500 ls-minus-2px"><span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Conference Program</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
            @foreach($conferenceProgram as $data)

            <!-- start features box item -->
            <div class="col icon-with-text-style-03">
                <div class="feature-box p-10 sm-p-8">
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font text-white fs-20 mb-5px">{{$data->title}}</span>
                        <p class="w-90 md-w-100 mx-auto">{{$data->description}}.</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end features box item -->
        </div>
    </div>
</section>
@endif
<!-- end section -->
@endsection