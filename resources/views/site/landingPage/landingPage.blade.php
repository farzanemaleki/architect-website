<!-- Page Header-->
<header class="section page-header-custom">
    <!--RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
             data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed"
             data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
             data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!--RD Navbar Brand-->
                    <div class="rd-navbar-brand">
                        <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark"
                                                                            src="{{asset('site/images/logo-default-121x110.png')}}"
                                                                            alt="" width="60" height="55"/><img
                                class="brand-logo-light" src="{{asset('site/images/logo-inverse-121x110.png')}}" alt=""
                                width="60" height="55"/>
                            <div class="brand-text">Interior Design</div>
                        </a>
                    </div>
                    <!--RD Navbar Toggle-->
                    <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-nav-wrap"
                         data-multitoggle-isolate="">
                        <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span
                                class="project-hamburger-arrow-center"></span></div>
                        <div class="project-hamburger-text">Menu</div>
                    </div>
                    <!--RD Navbar Social-->
                    <ul class="rd-navbar-list-social">
                        <li><a class="icon fa fa-facebook" href="#"></a></li>
                        <li><a class="icon fa fa-twitter" href="#"></a></li>
                        <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                    <!--RD Navbar Aside-->
                    <div class="rd-navbar-aside">
                        <!-- RD Navbar Search-->
                        <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" href="#"><span
                                    class="material-icons">search</span></a>
                            <form class="rd-search" action="#" data-search-live="rd-search-results-live" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                    <input class="rd-navbar-search-form-input form-input"
                                           id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    <button class="rd-search-form-submit fl-soft-icons-search63" type="submit"></button>
                                </div>
                            </form>
                        </div>
                        <!-- RD Navbar Switcher-->
                    </div>
                </div>
                <!-- RD Navbar Nav Wrap-->
                <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-sidebar-toggle" data-multitoggle=".rd-navbar-nav-wrap"
                         data-multitoggle-isolate=""><span class="fa fa-window-close"></span></div>
                    <ul class="rd-navbar-nav">
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#about-us">about</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#gallery">gallery</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">contact</a></li>
                    </ul>
                    <!--RD Navbar Social-->
                    <ul class="rd-navbar-list-social">
                        <li><a class="icon fa fa-facebook" href="#"></a></li>
                        <li><a class="icon fa fa-twitter" href="#"></a></li>
                        <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container custom-container">
        <div class="row">
            <div class="col-xl-7 offset-xl-1 offset-xxl-1 swiper-container-wrap">
                <!-- Swiper-->
                <div class="swiper-container swiper-slider swiper-slider-modern" data-slide-effect="fade"
                     data-loop="true" data-autoplay="4000" data-nav="true" data-thumb="#swiper-thumbs">
                    <div class="swiper-wrapper text-left">
                        <div class="swiper-slide bg-image-lg bg-overlay-2"
                             data-slide-bg="{{asset('site/images/slider-1.jpg')}}"></div>
                        <div class="swiper-slide bg-image-lg bg-overlay-2"
                             data-slide-bg="{{asset('site/images/slider-2.jpg')}}"></div>
                        <div class="swiper-slide bg-image-lg bg-overlay-2"
                             data-slide-bg="{{asset('site/images/slider-3.jpg')}}"></div>
                        <div class="swiper-slide bg-image-lg bg-overlay-2"
                             data-slide-bg="{{asset('site/images/slider-4.jpg')}}"></div>
                    </div>
                    <div class="swiper-pagination__module">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-counter"></div>
                    </div>
                </div>
                <!-- Swiper Thumb-->
                <div class="swiper-container swiper-slider swiper-thumbs" id="swiper-thumbs" data-nav="true"
                     data-slides-per-view="3" data-secondary="" data-center="true" data-space-between="30"
                     data-loop="true">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-slide-bg="{{asset('site/images/slider-1.jpg')}}"></div>
                        <div class="swiper-slide" data-slide-bg="{{asset('site/images/slider-2.jpg')}}"></div>
                        <div class="swiper-slide" data-slide-bg="{{asset('site/images/slider-3.jpg')}}"></div>
                        <div class="swiper-slide" data-slide-bg="{{asset('site/images/slider-4.jpg')}}"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-xxl-6 offset-xl-5 offset-xxl-6">
                <div class="swiper-modern-content">
                    @foreach($titles as $title)
                        @if($title->id == 1)
                    <h3>{{ $title->firstTitle  }}</h3>
                    <h1>{{ $title->secondTitle }}</h1>
                    <p class="font-weight-regular">{{ $title->description }}</p>
                            <a class="link-decorative link-decorative-2" href="#">بیشتر</a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</header>
