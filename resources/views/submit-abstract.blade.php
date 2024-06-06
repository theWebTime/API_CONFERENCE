@extends('layouts.app')

@section('title', 'Submit Abstract')

@section('content')
<!-- start page title -->
<section class="page-title-big-typography bg-base-color ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-conference-page-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-lg-8 text-center page-title-extra-large">
                <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                    <span class="d-block text-outline text-outline-width-2px text-outline-color-white" data-fancy-text='{ "string": ["Conference"], "duration": 500, "delay": 0, "speed": 50, "clipPath": ["inset(0 500px 0 0)", "inset(0px -5px 0px 0px)"], "easing": "easeOutCubic" }'></span>
                    <span data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad", "duration": 1000, "delay": 300 }'>Submit Abstract</span>
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
<section class="bg-midnight-blue pt-0 sm-pt-50px overflow-hidden">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 md-mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 border-radius-5px front-side border border-color-transparent-white-light">
                        <div class="rotate-content-front z-index-2">
                            <i class="line-icon-Geo2-Love icon-extra-large text-base-color mb-25px"></i>
                            <div class="fs-20 text-white mb-5px">Attend here</div>
                            <span class="w-60 lg-w-70 d-block m-auto">401 Broadway, 24th floor New york, NY 10013</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden border-radius-5px back-side cover-background" style="background-image:url('https://via.placeholder.com/600x450')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-15">
                            <a href="https://www.google.com/maps/dir//Envato+121+King+St+Melbourne+VIC+3000+Australia/@-37.8171933,144.885885,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x6ad65d4c2b349649:0xb6899234e561db11!2m2!1d144.955925!2d-37.817214" target="_blank" class="btn btn-large btn-dark-gray btn-hover-animation btn-round-edge btn-box-shadow align-self-center">
                                <span>
                                    <span class="btn-text">Location map</span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 md-mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 border-radius-5px front-side border border-color-transparent-white-light">
                        <div class="rotate-content-front z-index-2">
                            <i class="line-icon-Headset icon-extra-large text-base-color mb-25px"></i>
                            <div class="fs-20 text-white mb-5px">Let's talk</div>
                            <span class="d-block m-auto">Feel free to get in touch?</span>
                            <span class="d-block m-auto">Give us a call toady.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden border-radius-5px back-side cover-background" style="background-image:url('https://via.placeholder.com/600x450')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-15">
                            <a href="tel:+1-800-222-000" class="btn btn-large btn-dark-gray btn-hover-animation btn-round-edge btn-box-shadow align-self-center">
                                <span>
                                    <span class="btn-text">Talk with us</span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 border-radius-5px front-side border border-color-transparent-white-light">
                        <div class="rotate-content-front z-index-2">
                            <i class="line-icon-Mail-Read icon-extra-large text-base-color mb-25px"></i>
                            <div class="fs-20 text-white mb-5px">Say hello</div>
                            <span class="d-block m-auto">How can we help you?</span>
                            <span class="d-block m-auto">Send us an email.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden border-radius-5px back-side cover-background" style="background-image:url('https://via.placeholder.com/600x450')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-15">
                            <a href="mailto:info@yourdomain.com" class="btn btn-large btn-dark-gray btn-hover-animation btn-round-edge btn-box-shadow align-self-center">
                                <span>
                                    <span class="btn-text">Support desk</span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
        </div>
    </div>
</section>
<!-- end section -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<!-- start section -->
<section class="bg-midnight-blue pt-0">
    <div class="container">
        <div class="row justify-content-center mb-3 xs-mb-8" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-xl-7 col-lg-8 text-center">
                <h2 class="alt-font text-white fw-500 ls-minus-2px"><span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Register now and be a part of the conference.</h2>
            </div>
        </div>
        <div class="row row-cols-md-1 justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-xl-9 col-lg-11">
                <!-- start contact form -->
                <form action="{{ route('submit.data') }}" method="POST" class="row contact-form-style-02" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 mb-30px">
                        <input class="input-name bg-transparent border-color-transparent-white-light form-control required" type="text" id="title" name="title" placeholder="Your title*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="input-name bg-transparent border-color-transparent-white-light form-control required" type="text" id="name" name="name" placeholder="Your name*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="email" id="email" name="email" placeholder="Your email address*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control" type="email" id="alternative_email" name="alternative_email" placeholder="Your Alternative email address" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="tel" id="phone" name="phone_number" placeholder="Your phone" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control" type="tel" id="whatsapp_number" name="whatsapp_number" placeholder="Your whatsapp phone" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="text" id="organization" name="organization" placeholder="Your organization" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <select class="bg-transparent border-color-transparent-white-light form-control required" id="country_id" name="country_id">
                            <option value="" disabled selected>Select Country</option>
                            @foreach($country as $data)
                            <option value={{ $data->id }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="text" id="city" name="city" placeholder="Your city" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="text" id="interested_in" name="interested_in" placeholder="Your Interest" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="text" id="abstract_title" name="abstract_title" placeholder="Abstract Title" />
                    </div>
                    <div class="col-md-12 mb-40px">
                        <textarea class="bg-transparent border-color-transparent-white-light form-control required" cols="40" rows="4" id="message" name="message" placeholder="Your message"></textarea>
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="file" id="submit_abstract_file" name="submit_abstract_file" placeholder="Your Abstract File" />
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <p class="mb-0 lh-30 text-center text-md-start fs-16">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                    </div>
                    <div class="col-lg-5 col-md-4 text-center text-md-end sm-mt-20px">
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
<!-- start section -->
<section class="bg-dark-midnight-blue border-bottom border-color-transparent-white-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50px position-relative" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                <img class="w-100 border-radius-5px" src="https://via.placeholder.com/600x600" alt="">
                <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU" class="z-index-0 absolute-middle-center d-inline-block text-center bg-white rounded-circle video-icon-box video-icon-large popup-youtube" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span>
                        <span class="video-icon bg-white">
                            <i class="feather icon-feather-play text-dark-gray"></i>
                            <span class="video-icon-sonar">
                                <span class="video-icon-sonar-bfr bg-white opacity-9"></span>
                                <span class="video-icon-sonar-afr bg-white"></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-white fw-500 ls-minus-2px mb-35px lg-mb-30px"><span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Frequently asked and question.</h2>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <!-- start accordion item -->
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom border-color-transparent-white-light">
                                    <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative">
                                            <i class="feather icon-feather-minus body-text-color"></i><span class="fs-18 text-white">Can i try event advice for free?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-white-light text-medium-gray">
                                        <p>Lorem ipsum is simply dummy text of typesetting industry. standard dummy text.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent-white-light">
                                    <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative">
                                            <i class="feather icon-feather-plus body-text-color"></i><span class="fs-18 text-white">What are my payment options?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-white-light text-medium-gray">
                                        <p>Lorem ipsum is simply dummy text of typesetting industry. standard dummy text.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent">
                                    <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative">
                                            <i class="feather icon-feather-plus body-text-color"></i><span class="fs-18 text-white">Is it safe to provide credit card data?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent text-medium-gray">
                                        <p>Lorem ipsum is simply dummy text of typesetting industry. standard dummy text.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection