@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<!-- start section -->
<section class="p-0 full-screen ipad-top-space-margin md-h-600px sm-h-500px position-relative bg-base-color background-position-left-top" style="background-image: url('images/vertical-line-bg-dark.svg')">
    <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100" data-particle="true" data-particle-options='{ "particles": { "number": { "value": 80, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#232323" }, "shape": { "type": "circle", "stroke": { "width": 0, "color": "#232323" }, "polygon": { "nb_sides": 5 }, "image": { "src": "img/github.svg", "width": 100, "height": 100 } }, "opacity": { "value": 0.4, "random": false, "anim": { "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false } }, "size": { "value": 4, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } }, "line_linked": { "enable": true, "distance": 150, "color": "#232323", "opacity": 0.3, "width": 1 }, "move": { "enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false, "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }, "modes": { "grab": { "distance": 400, "line_linked": { "opacity": 1 } }, "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 }, "repulse": { "distance": 200, "duration": 0.4 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } } }, "retina_detect": true}'>
    </div>
    <div class="absolute-middle-center p-7 lg-p-0 sm-w-60 xs-w-80">
        <div class="animation-float">
            <img src="{{$conference->logo}}" width="893" height="893" class="rounded-circle" alt="" data-anime='{ "opacity": [0, 1], "scale": [0.5, 1], "easing": "easeOutCubic", "duration": 1000 }' />
        </div>
    </div>
    <div class="container h-100">
        <div class="row align-items-center h-100 justify-content-center">
            <div class="col-md-12 position-relative text-white d-flex flex-column justify-content-center text-center h-100">
                <span class="alt-font fs-180 lg-fs-190 md-fs-160 sm-fs-150 xs-fs-90 ls-minus-9px md-ls-minus-5px xs-ls-minus-2px fw-600 text-outline text-outline-width-2px d-inline-block" data-fancy-text='{ "string": ["Conference"], "duration": 500, "delay": 500, "speed": 50, "clipPath": ["inset(0 200px 0 0)", "inset(0px 0px 0px 0px)"], "easing": "easeOutCubic" }'></span>
                <span class="alt-font fs-100 md-fs-140 xs-fs-80 position-relative top-minus-40px lg-top-minus-20px xs-top-minus-5px ls-minus-10px md-minus-8px xs-ls-minus-3px text-white fw-600 text-shadow-double-large" data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad", "duration": 1000, "delay": 800 }'>{{$conference->title}}</span>
                <a href="{{route('register')}}" class="btn btn-extra-large btn-base-color btn-hover-animation btn-rounded btn-box-shadow align-self-center lg-mt-20px sm-mt-5px xs-mt-20px" data-anime='{ "opacity": [0, 1], "translateY": [50, 0], "easing": "easeOutCubic", "duration": 1000, "delay": 800 }'>
                    <span>
                        <span class="btn-text">Get tickets now</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                </a>
                <div class="position-absolute bottom-60px md-bottom-40px xs-bottom-20px left-0px right-0px" data-anime='{ "opacity": [0, 1], "translateY": [50, 0], "easing": "easeOutCubic", "duration": 1000, "delay": 1000 }'>
                    <span class="alt-font text-uppercase fw-500 ls-1px fs-15"><i class="feather icon-feather-calendar icon-small me-5px"></i>{{$conference->date}}</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-dark-midnight-blue border-bottom border-color-transparent-white-light half-section">
    <div class="container">
        <div class="row row-cols-auto row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col md-mb-50px sm-mb-30px">
                <div class="feature-box feature-box-left-icon-middle">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-25px lg-me-25px">
                        <h4 class="alt-font text-outline text-outline-width-2px text-outline-color-base-color fw-700 ls-minus-1px mb-0">
                            Phone Number
                        </h4>
                    </div>
                    <div class="feature-box-content border-start border-color-transparent-white-light ps-40px pe-40px lg-ps-25px lg-pe-25px last-paragraph-no-margin">
                        <span class="text-white fs-24 alt-font d-inline-block fw-300">{{$conference->phone_number}}</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->

            <!-- start features box item -->
            <div class="col md-mb-50px sm-mb-30px">
                <div class="feature-box feature-box-left-icon-middle">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-25px lg-me-25px">
                        <h4 class="alt-font text-outline text-outline-width-2px text-outline-color-base-color fw-700 ls-minus-1px mb-0">
                            Whatsapp Number
                        </h4>
                    </div>
                    <div class="feature-box-content border-start border-color-transparent-white-light ps-40px pe-40px lg-ps-25px lg-pe-25px last-paragraph-no-margin">
                        <span class="text-white fs-24 alt-font d-inline-block fw-300">{{$conference->wp_number}}</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->

            <!-- start features box item -->
            <div class="col">
                <div class="feature-box feature-box-left-icon-middle">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-25px lg-me-25px">
                        <h4 class="alt-font text-outline text-outline-width-2px text-outline-color-base-color fw-700 ls-minus-1px mb-0">
                            Email
                        </h4>
                    </div>
                    <div class="feature-box-content border-start border-color-transparent-white-light ps-40px pe-40px lg-ps-25px lg-pe-25px last-paragraph-no-margin">
                        <span class="text-white fs-24 alt-font d-inline-block fw-300">{{$conference->email}}</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->

            <!-- start features box item -->
            <div class="col">
                <div class="feature-box feature-box-left-icon-middle">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-25px lg-me-25px">
                        <h4 class="alt-font text-outline text-outline-width-2px text-outline-color-base-color fw-700 ls-minus-1px mb-0">
                            Address
                        </h4>
                    </div>
                    <div class="feature-box-content border-start border-color-transparent-white-light ps-40px pe-40px lg-ps-25px lg-pe-25px last-paragraph-no-margin">
                        <span class="text-white fs-24 alt-font d-inline-block fw-300">{{$conference->basic_info}}</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col">
                <div class="feature-box feature-box-left-icon-middle">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-25px lg-me-25px">
                        <h4 class="alt-font text-outline text-outline-width-2px text-outline-color-base-color fw-700 ls-minus-1px mb-0">
                            Conference Type
                        </h4>
                    </div>
                    <div class="feature-box-content border-start border-color-transparent-white-light ps-40px pe-40px lg-ps-25px lg-pe-25px last-paragraph-no-margin">
                        <span class="text-white fs-24 alt-font d-inline-block fw-300">{{$conference->basic_info}}</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col">
                <div class="feature-box feature-box-left-icon-middle">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-25px lg-me-25px">
                        <h4 class="alt-font text-outline text-outline-width-2px text-outline-color-base-color fw-700 ls-minus-1px mb-0">
                            Conference Tag
                        </h4>
                    </div>
                    <div class="feature-box-content border-start border-color-transparent-white-light ps-40px pe-40px lg-ps-25px lg-pe-25px last-paragraph-no-margin">
                        <span class="text-white fs-24 alt-font d-inline-block fw-300">{{$conference->basic_info}}</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
 <!-- start section -->
  <div class="container">
    @if($conferenceScheduleData)
        <section class="bg-midnight-blue pt-0 sm-pt-50px">
            <div class="container">
                <div class="col time-schedule text-center">
                    <span class="btn btn-base-color btn-small btn-round-edge bg-base-color text-white d-inline-block d-md-none mb-15px mx-auto">
                        <i class="feather icon-feather-arrow-left align-middle icon-extra-medium m-0 me-5px"></i>
                        Drag to scroll see more
                        <i class="feather icon-feather-arrow-right align-middle icon-extra-medium m-0 ms-5px"></i>
                    </span>
                    <div class="time-schedule-scroll">
                        <div class="time-schedule-min-width">
                            <!-- start time table title -->
                            <div class="time-table bg-dark-midnight-blue fs-18">
                                <div class="time-table-box day border border-color-transparent-white-light">
                                    <div class="inner-box">
                                        <span class="text-white">Time</span>
                                    </div>
                                </div>
                                @foreach($conferenceScheduleData['data'] as $item)
                                    <div class="time-table-box day border border-color-transparent-white-light">
                                        <div class="inner-box">
                                            <span class="text-white">{{ $item['title'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- end time table title -->
                            <!-- start time table content -->
                            <div class="time-table">
                                <div class="time-table-box name-box border border-color-transparent-white-light">
                                    <div class="inner-box">
                                        <div>09:00 - 10:00 AM</div>
                                    </div>
                                </div>
                                @foreach($conferenceScheduleData['data'] as $item)
                                    <div class="time-table-box name-box border border-color-transparent-white-light">
                                        <div class="inner-box">
                                            <div class="text-white">{{ $item['description'] }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- end time table content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <p>No conference schedule available.</p>
    @endif
</div>
        <!-- end section --> 
<!-- start section -->
@if($conferenceAboutUs)
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
                        <div class="mt-10px w-100">{!! $conferenceAboutUs->description !!}</div>
                    </div>
                </div>
                <!-- end features box item -->
                <a href="{{route('about-us')}}" class="btn btn-large btn-dark-gray btn-hover-animation btn-round-edge btn-box-shadow align-self-center">
                    <span>
                        <span class="btn-text">About conference</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
@endif
<!-- end section -->
<!-- start section of Conference Committee Member-->
@if(count($conferenceCommittee) > 0)
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
            @foreach($conferenceCommittee as $data)
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
        <div class="text-center mt-4">
            <a href="{{route('committee-member')}}" class="btn btn-extra-large btn-base-color btn-hover-animation btn-rounded btn-box-shadow align-self-center lg-mt-20px sm-mt-5px xs-mt-20px" data-anime='{ "opacity": [0, 1], "translateY": [50, 0], "easing": "easeOutCubic", "duration": 1000, "delay": 800 }'>
                <span>
                    <span class="btn-text">Show All</span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </span>
            </a>
        </div>
    </div>
</section>
@endif
<!-- end section -->
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
                <div class="text-center mt-4">
                    <a href="{{route('gallery')}}" class="btn btn-extra-large btn-base-color btn-hover-animation btn-rounded btn-box-shadow align-self-center lg-mt-20px sm-mt-5px xs-mt-20px" data-anime='{ "opacity": [0, 1], "translateY": [50, 0], "easing": "easeOutCubic", "duration": 1000, "delay": 800 }'>
                        <span>
                            <span class="btn-text">Show All</span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- end section -->
<!-- start section -->
<section class="p-0 bg-midnight-blue border-bottom border-color-transparent-white-light background-position-left-bottom background-no-repeat overflow-hidden" style="background-image: url('images/demo-conference-schedule-bg.png')">
    <div class="container-fluid">
        <div class="row justify-content-center" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col-xl-3 p-0">
                <div class="ps-20 pe-20 pt-25 pb-25 xxl-ps-15 xxl-pe-15 lg-p-7 sm-p-40px overflow-hidden h-100 text-center text-xl-start border-top border-end border-color-transparent-white-light">
                    <h2 class="alt-font fw-500 text-white ls-minus-2px"><span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Event schedule</h2>
                    <p class="mb-35px lg-w-50 md-w-70 sm-w-100 mx-auto mx-xl-auto">Lorem ipsum dolor consectetur eiusmod
                        tempor incididunt labore exercitation tempor.</p>
                    <a href="demo-conference-schedule.html" class="btn btn-large btn-dark-gray btn-hover-animation btn-round-edge btn-box-shadow align-self-center">
                        <span>
                            <span class="btn-text">Download schedule</span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-xl-3 col-md-4 event-style-01 p-0">
                <div class="bg-midnight-blue hover-box will-change-inherit dark-hover feature-box ps-19 pe-19 pt-22 pb-27 md-p-8 md-pb-25 sm-pb-50px overflow-hidden h-100 text-center text-md-start border-top border-end border-color-transparent-white-light">
                    <div class="feature-box-content w-100 lg-mb-5 last-paragraph-no-margin">
                        <div class="text-white fs-22 alt-font fw-500 mb-20px">Friday, Dec 24</div>
                        <p class="text-light-opacity">Psychologist - John parker<br>10:00 AM to 12:30 PM</p>
                        <div class="divider-style-03 mb-20px divider-style-03-01 border-color-transparent-white-light">
                        </div>
                        <p class="text-light-opacity">Sociology - Herman miller<br>02:00 PM to 04:30 PM</p>
                        <div class="divider-style-03 mb-20px divider-style-03-01 border-color-transparent-white-light">
                        </div>
                        <p class="text-light-opacity">Geologist - Jeremy dupont<br>05:00 PM to 07:30 PM</p>
                        <span class="number fs-120 ls-minus-5px fw-500 text-outline text-outline-width-2px text-outline-color-base-color opacity-5 alt-font position-absolute bottom-minus-50px sm-bottom-minus-40px left-0px ps-20 sm-ps-0 sm-right-0px sm-left-0px">01</span>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-xl-3 col-md-4 event-style-01 p-0">
                <div class="bg-midnight-blue hover-box will-change-inherit dark-hover feature-box ps-19 pe-19 pt-22 pb-27 md-p-8 md-pb-25 sm-pb-50px overflow-hidden h-100 text-center text-md-start border-top border-end border-color-transparent-white-light">
                    <div class="feature-box-content w-100 lg-mb-5 last-paragraph-no-margin">
                        <div class="text-white fs-22 alt-font fw-500 mb-20px">Saturday, Dec 25</div>
                        <p class="text-light-opacity">Economy - Michal ruheen<br>10:00 AM to 12:30 PM</p>
                        <div class="divider-style-03 mb-20px divider-style-03-01 border-color-transparent-white-light">
                        </div>
                        <p class="text-light-opacity">Engineer - Jessica dover<br>02:00 PM to 04:30 PM</p>
                        <div class="divider-style-03 mb-20px divider-style-03-01 border-color-transparent-white-light">
                        </div>
                        <p class="text-light-opacity">Psychologist - John parker<br>05:00 PM to 07:30 PM</p>
                        <span class="number fs-120 ls-minus-5px fw-500 text-outline text-outline-width-2px text-outline-color-base-color opacity-5 alt-font position-absolute bottom-minus-50px sm-bottom-minus-40px left-0px ps-20 sm-ps-0 sm-right-0px sm-left-0px">02</span>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-xl-3 col-md-4 event-style-01 p-0">
                <div class="bg-midnight-blue hover-box will-change-inherit dark-hover feature-box ps-19 pe-19 pt-22 pb-27 md-p-8 md-pb-25 sm-pb-50px overflow-hidden h-100 text-center text-md-start border-top border-end border-color-transparent-white-light">
                    <div class="feature-box-content w-100 lg-mb-5 last-paragraph-no-margin">
                        <div class="text-white fs-22 alt-font fw-500 mb-20px">Sunday, Dec 26</div>
                        <p class="text-light-opacity">Biologist- Saleena fountain<br>10:00 AM to 12:30 PM</p>
                        <div class="divider-style-03 mb-20px divider-style-03-01 border-color-transparent-white-light">
                        </div>
                        <p class="text-light-opacity">Secretary- Paulina morris<br>02:00 PM to 04:30 PM</p>
                        <div class="divider-style-03 mb-20px divider-style-03-01 border-color-transparent-white-light">
                        </div>
                        <p class="text-light-opacity">Politician - Wendaya royin<br>05:00 PM to 07:30 PM</p>
                        <span class="number fs-120 ls-minus-5px fw-500 text-outline text-outline-width-2px text-outline-color-base-color opacity-5 alt-font position-absolute bottom-minus-50px sm-bottom-minus-40px left-0px ps-20 sm-ps-0 sm-right-0px sm-left-0px">03</span>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section Of Conference Speaker-->
@if(count($conferenceSpeaker) > 0)
<section class="bg-dark-midnight-blue background-position-right-bottom background-no-repeat sm-background-image-none" style="background-image: url('images/demo-conference-about-bg.png')">
    <div class="container">
        <div class="row justify-content-center align-items-center mb-6 text-center text-lg-start">
            <div class="col-xxl-8 col-lg-7 md-mb-20px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-white fw-500 ls-minus-2px mb-0">
                    <span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Committee Speaker
                </h2>
            </div>
            <div class="col-xxl-4 col-lg-5 col-md-8 col-sm-10 last-paragraph-no-margin" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 justify-content-center">
            <!-- start team member item -->
            @foreach($conferenceSpeaker as $data)
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
        <div class="text-center mt-4">
            <a href="{{route('speaker')}}" class="btn btn-extra-large btn-base-color btn-hover-animation btn-rounded btn-box-shadow align-self-center lg-mt-20px sm-mt-5px xs-mt-20px" data-anime='{ "opacity": [0, 1], "translateY": [50, 0], "easing": "easeOutCubic", "duration": 1000, "delay": 800 }'>
                <span>
                    <span class="btn-text">Show All</span>
                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                </span>
            </a>
        </div>
    </div>
</section>
@endif
<!-- end section -->
<!-- start section of Media Partner-->
@if(count($conferenceMediaPartner) > 0)
<section class="bg-midnight-blue overflow-hidden">
    <div class="container">
        <div class="row justify-content-center align-items-center mb-6 text-center text-lg-start">
            <div class="col-xxl-8 col-lg-7 md-mb-20px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-white fw-500 ls-minus-2px mb-0"><span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Media Partner</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7 offset-xxl-1" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="outside-box-right-20 lg-outside-box-right-10 md-outside-box-right-0">
                    <div class="swiper magic-cursor light slider-one-slide ps-5px md-ps-0" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loopedSlides": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            @foreach($conferenceMediaPartner as $data)
                            <!-- start review item -->
                            <div class="swiper-slide review-style-04">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle w-70px h-70px me-20px" src="{{$data->image}}" alt="">
                                </div>
                            </div>
                            @endforeach
                            <!-- end review item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endif
<!-- start section -->
<section class="bg-dark-midnight-blue background-position-right-bottom background-no-repeat sm-background-image-none" style="background-image: url('images/demo-conference-about-bg.png')">
    <div class="container">
        <div class="row align-items-center mb-8">
            <div class="col-xl-4 col-lg-5 text-center text-lg-start md-mb-30px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font fw-500 text-white ls-minus-2px"><span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Conference packages</h2>
                <p class="mb-35px md-w-80 sm-w-100 md-mx-auto">Lorem ipsum dolor sit amet consectetur adipiscing elit do
                    eiusmod tempor incididunt labore et dolore magna ut enim.</p>
                <a href="demo-conference-pricing.html" class="btn btn-large btn-dark-gray btn-hover-animation btn-round-edge btn-box-shadow align-self-center">
                    <span>
                        <span class="btn-text">Pricing plans</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
            <div class="col-lg-7 offset-xl-1">
                <div class="row row-cols-1 row-cols-md-2 align-items-center justify-content-center mt-35px sm-mt-20px g-0">
                    <!-- start pricing item -->
                    <div class="col px-md-0 pricing-table-style-02 position-relative transition-inner-all sm-mb-30px" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <div class="pricing-table border border-color-transparent-white-light text-center border-radius-6px pt-17 pb-17 ps-15 pe-15 lg-ps-13 lg-pe-13 box-shadow-large">
                            <div class="pricing-header">
                                <i class="line-icon-Boy align-middle text-center text-base-color icon-extra-large mb-20px"></i>
                                <div class="alt-font text-uppercase fs-16 fw-500">Personal</div>
                                <h3 class="text-white mb-0 fw-500">$250</h3>
                            </div>
                            <div class="pricing-body pt-20px pb-30px">
                                <ul class="list-style-01 ps-0 mb-0">
                                    <li class="border-color-transparent-white-light pt-10px pb-10px"><span class="text-white">Regular</span> seats</li>
                                    <li class="border-color-transparent-white-light pt-10px pb-10px"><span class="text-white">Snacks</span> and brunch</li>
                                    <li class="pt-10px pb-10px"><span class="text-white">Event</span> certificate</li>
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="demo-conference-registration.html" class="btn btn-small btn-dark-gray btn-hover-animation btn-round-edge btn-box-shadow align-self-center">
                                    <span>
                                        <span class="btn-text">Choose package</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end pricing item -->
                    <!-- start pricing item -->
                    <div class="col px-md-0 pricing-table-style-02 position-relative transition-inner-all" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <div class="pricing-table popular-item border border-color-transparent-white-light bg-dark-midnight-blue text-center border-radius-6px pt-25 pb-25 ps-15 pe-15 lg-ps-13 lg-pe-13 box-shadow-large">
                            <div class="pricing-header">
                                <div class="popular-label alt-font fw-500 fs-14 text-white bg-base-color text-uppercase border-radius-2px">
                                    Popular</div>
                                <i class="line-icon-Business-ManWoman align-middle text-center text-base-color icon-extra-large mb-20px"></i>
                                <div class="alt-font text-uppercase fs-16 fw-500">Business</div>
                                <h3 class="text-white mb-0 fw-500">$450</h3>
                            </div>
                            <div class="pricing-body pt-20px pb-30px">
                                <ul class="list-style-01 ps-0 mb-0">
                                    <li class="border-color-transparent-white-light pt-10px pb-10px"><span class="text-white">Regular</span> seats</li>
                                    <li class="border-color-transparent-white-light pt-10px pb-10px"><span class="text-white">Snacks</span> and brunch</li>
                                    <li class="border-color-transparent-white-light pt-10px pb-10px"><span class="text-white">Photos</span> allowed</li>
                                    <li class="pt-10px pb-10px"><span class="text-white">Event</span> certificate</li>
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="demo-conference-registration.html" class="btn btn-small btn-dark-gray btn-hover-animation btn-round-edge btn-box-shadow align-self-center">
                                    <span>
                                        <span class="btn-text">Choose package</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end pricing item -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row position-relative clients-style-08">
            <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-walmart-white.svg" class="h-40px xs-h-30px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-monday-white.svg" class="h-40px xs-h-30px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-envato-white.svg" class="h-40px xs-h-30px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-awwwards-white.svg" class="h-40px xs-h-30px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-woocommerce-white.svg" class="h-40px xs-h-30px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-pingdom-white.svg" class="h-40px xs-h-30px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-monday-white.svg" class="h-40px xs-h-30px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-envato-white.svg" class="h-40px xs-h-30px" alt=""></a>
                    </div>
                    <!-- end client item -->
                </div>
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
                                                <p class="w-90 md-w-100 mx-auto">{!! $data->description !!}.</p>
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
<!-- start section -->
<section class="position-relative" data-parallax-background-ratio="0.5" style="background-image: url('https://via.placeholder.com/1920x1100')" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-8 col-lg-12 text-center position-relative last-paragraph-no-margin parallax-scrolling-style-2">
                <!-- start countdown item -->
                <div class="countdown-style-02 mb-30px mt-40px sm-mb-10px">
                    <div data-enddate="2025/12/24 12:00:00" class="countdown"></div>
                </div>
                <!-- end countdown item -->
                <h1 class="alt-font text-white fw-500 mb-50px sm-mb-40px ls-minus-2px">Hurry up! Don't waste time
                    important event.</h1>
                <a href="demo-conference-registration.html" class="btn btn-extra-large btn-rounded btn-base-color btn-hover-animation btn-box-shadow align-self-center">
                    <span>
                        <span class="btn-text">Get tickets now</span>
                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@if(count($conferenceTestimonial) > 0)
<!-- start section -->
<section class="bg-midnight-blue overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-4 col-lg-5 position-relative text-center text-lg-start" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font fw-500 text-white ls-minus-2px"><span class="w-20px h-4px d-inline-block bg-base-color me-10px"></span>Loved by our past attendees
                </h2>
                <div class="d-flex md-mb-30px justify-content-center justify-content-lg-start">
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-1 text-white swiper-button-prev slider-navigation-style-04 border border-2 border-color-transparent-white-light">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="slider-one-slide-next-1 text-white swiper-button-next slider-navigation-style-04 border border-2 border-color-transparent-white-light">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="col-lg-7 offset-xxl-1" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="outside-box-right-20 lg-outside-box-right-10 md-outside-box-right-0">
                    <div class="swiper magic-cursor light slider-one-slide ps-5px md-ps-0" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loopedSlides": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            @foreach($conferenceTestimonial as $data)
                            <!-- start review item -->
                            <div class="swiper-slide review-style-04">
                                <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 xl-p-10 border border-color-transparent-white-light">
                                    <p>{{$data->review}}</p>
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle w-70px h-70px me-20px" src="{{$data->image}}" alt="">
                                        <div class="d-inline-block align-middle">
                                            <div class="text-white">{{$data->name}}</div>
                                            <div class="lh-20 fs-16">{{$data->designation}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- end review item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- start subscription popup -->
<div id="subscribe-popup" class="mfp-hide subscribe-popup">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10 bg-transparent">
                <div class="row position-relative box-shadow-quadruple-large">
                    <div class="col-12 p-0 newsletter-popup position-relative">
                        <a href="demo-conference-registration.html">
                            <img src="https://via.placeholder.com/813x590" alt="">
                        </a>
                    </div>
                    <button title="Close (Esc)" type="button" class="mfp-close text-white"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end subscription popup -->
<!-- start scroll progress -->
<div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
</div>
<!-- end scroll progress -->
@endsection