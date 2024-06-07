@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<!-- start page title -->
<section class="page-title-big-typography bg-base-color ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-conference-page-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-lg-8 text-center page-title-extra-large">
                <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                    <span class="d-block text-outline text-outline-width-2px text-outline-color-white" data-fancy-text='{ "string": ["Gallery"], "duration": 500, "delay": 0, "speed": 50, "clipPath": ["inset(0 500px 0 0)", "inset(0px -5px 0px 0px)"], "easing": "easeOutCubic" }'></span>
                    <!-- <span data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad", "duration": 1000, "delay": 300 }'>US</span> -->
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section of Gallery-->
@if(count($conferenceGallery) > 0)
<section class="bg-dark-midnight-blue background-position-right-bottom background-no-repeat sm-background-image-none" style="background-image: url('images/demo-conference-about-bg.png')">
    <div class="container">
        <div class="row justify-content-center align-items-center mb-6 text-center text-lg-start">
            <div class="col-xxl-8 col-lg-7 md-mb-20px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-white fw-500 ls-minus-2px mb-0">
                    <span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Gallery
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    @foreach($conferenceGallery as $data)
                    <!-- start gallery item -->
                    <div class="col">
                        <div class="card h-100">
                            <div class="gallery-box overflow-hidden position-relative">
                                <img src="{{$data->data}}" class="card-img-top img-fluid" alt="Gallery Image">
                            </div>
                        </div>
                    </div>
                    <!-- end gallery item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- end section -->
@endsection