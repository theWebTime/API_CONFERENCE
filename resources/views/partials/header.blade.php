<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent disable-fixed">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="demo-conference.html">
                    <img src="images/demo-conference-logo-white.png"
                        data-at2x="images/demo-conference-logo-white@2x.png" alt="" class="default-logo">
                    <img src="images/demo-conference-logo-black.png"
                        data-at2x="images/demo-conference-logo-black@2x.png" alt="" class="alt-logo">
                    <img src="images/demo-conference-logo-black.png"
                        data-at2x="images/demo-conference-logo-black@2x.png" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav alt-font ls-05px">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('scientific-committee') }}" class="nav-link">Scientific
                                Committee</a></li>
                        <li class="nav-item"><a href="{{ route('speaker') }}" class="nav-link">Speaker</a></li>
                        <li class="nav-item"><a href="{{ route('program') }}" class="nav-link">Program</a></li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="" class="nav-link">Information</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href="{{ route('venue-detail') }}">
                                        <div class="submenu-icon-content">
                                            <span>Venue Detail</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('guideline') }}">
                                        <div class="submenu-icon-content">
                                            <span>Guideline</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('faq') }}">
                                        <div class="submenu-icon-content">
                                            <span>FAQ</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('conference-brochure') }}">
                                        <div class="submenu-icon-content">
                                            <span>Conference Brochures</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="" class="nav-link">Other Pages</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href="{{ route('about-us') }}">
                                        <div class="submenu-icon-content">
                                            <span>About Us</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact-us') }}">
                                        <div class="submenu-icon-content">
                                            <span>Contact Us</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('submit-abstract-page') }}">
                                        <div class="submenu-icon-content">
                                            <span>Submit Abstract Page</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end xs-ps-0 xs-pe-0">
                <div class="header-icon">
                    <div class="header-button"><a href="{{ route('register') }}"
                            class="btn btn-small text-transform-none btn-transparent-white-light border-1 left-icon btn-rounded fw-500"><i
                                class="feather icon-feather-mail d-none d-xl-inline-block"></i>Registration</a></div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- end header -->