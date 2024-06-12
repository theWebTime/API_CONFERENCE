@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- start page title -->
<section class="page-title-big-typography bg-base-color ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-conference-page-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-lg-8 text-center page-title-extra-large">
                <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                    <span class="d-block text-outline text-outline-width-2px text-outline-color-white" data-fancy-text='{ "string": ["Conference"], "duration": 500, "delay": 0, "speed": 50, "clipPath": ["inset(0 500px 0 0)", "inset(0px -5px 0px 0px)"], "easing": "easeOutCubic" }'></span>
                    <span data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad", "duration": 1000, "delay": 300 }'>Brochure</span>
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
<section class="bg-midnight-blue pt-0">
    <div class="container">
        <div class="row row-cols-md-1 justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-xl-9 col-lg-11">
                <!-- start contact form -->
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('contact.data') }}" method="POST" class="row contact-form-style-02">
                    @csrf
                    <div class="col-md-6 mb-30px">
                        <input class="input-name bg-transparent border-color-transparent-white-light form-control required" type="text" id="name" name="name" placeholder="Your name*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="email" id="email" name="email" placeholder="Your email address*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="number" id="phone" name="phone_number" placeholder="Your phone number*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <select class="bg-transparent border-color-transparent-white-light form-control required" id="country_id" name="country_id">
                            <option value="" disabled selected>Select Country</option>
                            @foreach($country as $data)
                            <option value={{ $data->id }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 mb-40px">
                        <textarea class="bg-transparent border-color-transparent-white-light form-control required" cols="40" rows="4" id="message" name="message" placeholder="Your message*"></textarea>
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <p class="mb-0 lh-30 text-center text-md-start fs-16">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                    </div>
                    <div class="col-lg-5 col-md-4 text-center text-md-end sm-mt-20px">
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-medium btn-base-color btn-hover-animation btn-round-edge btn-box-shadow align-self-center" type="submit">
                            <span>
                                <span class="btn-text">Submit</span>
                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                        </button>
                    </div>
                    <div class="col-12">
                        <div class="form-results mt-20px d-none"></div>
                    </div>
                </form>
                <!-- end contact form -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection