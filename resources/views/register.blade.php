@extends('layouts.app')

@section('title', 'Register')

@section('content')
<!-- start page title -->
<section class="page-title-big-typography bg-base-color ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-conference-page-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-lg-8 text-center page-title-extra-large">
                <h1 class="mb-0 text-white alt-font fw-600 ls-minus-5px">
                    <span class="d-block text-outline text-outline-width-2px text-outline-color-white" data-fancy-text='{ "string": ["Conference"], "duration": 500, "delay": 0, "speed": 50, "clipPath": ["inset(0 500px 0 0)", "inset(0px -5px 0px 0px)"], "easing": "easeOutCubic" }'></span>
                    <span data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad", "duration": 1000, "delay": 300 }'>registration</span>
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
<!-- start section -->
<section class="bg-midnight-blue pt-0">
    <div class="container">
        <div class="row justify-content-center mb-3 xs-mb-8" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-xl-7 col-lg-8 text-center">
                <h2 class="alt-font text-white fw-500 ls-minus-2px"><span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Online Registration.</h2>
            </div>
        </div>
        <div class="row row-cols-md-1 justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-xl-9 col-lg-11">
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
                <!-- start contact form -->
                <form action="{{ route('register.data') }}" method="POST" class="row contact-form-style-02">
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
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="number" id="phone" name="phone_number" placeholder="Your phone number*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control" type="number" id="whatsapp_number" name="whatsapp_number" placeholder="Your whatsapp number" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="bg-transparent border-color-transparent-white-light form-control required" type="text" id="institution" name="institution" placeholder="Your Institution*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <select class="bg-transparent border-color-transparent-white-light form-control required" id="country_id" name="country_id">
                            <option value="" disabled selected>Select Country</option>
                            @foreach($country as $data)
                            <option value={{ $data->id }}>{{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="row row-cols-1 row-cols-lg-3 align-items-center justify-content-center">
                            @foreach($conferencePlan as $data)
                            <!-- start pricing item -->
                            <div class="col-lg-4 col-md-8 px-md-0 pricing-table-style-02 position-relative transition-inner-all md-mb-30px" data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                <div class="pricing-table border border-color-transparent-white-light text-center border-radius-6px pt-17 pb-17 ps-15 pe-15 lg-ps-13 lg-pe-13 box-shadow-large">
                                    <div class="pricing-header">
                                        <i class="line-icon-Boy align-middle text-center text-base-color icon-extra-large mb-20px"></i>
                                        <div class="alt-font text-uppercase fs-16 fw-500">{{$data->title}}</div>
                                        <h3 class="text-white mb-0 fw-500">${{ rtrim(rtrim($data->amount, '0'), '.') }}</h3>
                                    </div>
                                    <div class="pricing-body pt-20px pb-30px">
                                        <ul class="list-style-01 ps-0 mb-0">
                                            <li class="border-color-transparent-white-light pt-10px pb-10px"><span class="text-white">{{$data->description}}</span></li>
                                        </ul>
                                    </div>
                                    <div class="pricing-footer">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="plan_id" id="package{{ $loop->index }}" value="{{ $data->id }}">
                                            <label class="form-check-label text-white" for="package{{ $loop->index }}">
                                                Choose package
                                            </label>
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <!-- end pricing item -->
                            @endforeach
                        </div>
                    <div class="col-lg-7 col-md-8">
                        <p class="mb-0 lh-30 text-center text-md-start fs-16">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                    </div>
                    <div class="col-lg-5 col-md-4 text-center text-md-end sm-mt-20px">
                        <!-- <input type="hidden" name="redirect" value=""> -->
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