@extends('beauty_salon.layouts.master')

@section('content')
    <section
        class="pb-0 top-space-padding bg-dark-gray full-screen border-top position-relative md-h-700px sm-h-600px sm-pb-70px"
        data-parallax-background-ratio="0.3" style="background-image: url('{{ asset('assets/beauty_salon/images/demo-beauty-salon-home-banner.jpg') }}')">
        <div class="position-absolute left-0px top-0px d-none d-lg-inline-block"
            data-anime='{ "el": "childs", "translateY": [100, 0], "opacity": [0,1], "duration": 600, "delay": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <img src="{{ asset('assets/images/demo-beauty-salon-home-banner-bg.png') }}"
            data-bottom-top="transform: translateY(-150px)"
                data-top-bottom="transform: translateY(150px)" alt="">
        </div>
        <div class="pe-8 pt-8 absolute-middle-right lg-pe-2 lg-pt-2 d-none d-lg-inline-block">
            <img src="{{ asset('assets/images/demo-beauty-salon-banner-img.png')}}" class="animation-rotation" alt="">
        </div>
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-6 position-relative"
                    data-anime='{ "el": "childs", "translateY": [30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div
                        class="alt-font fs-150 text-white ls-minus-3px lh-120 mb-25px lg-fs-120 xs-fs-90 xs-lh-80 lg-lh-100">
                        Beauty studio</div>
                    <div class="text-light-medium-gray fs-20 w-60 mb-35px xs-mb-25px lg-w-75 md-w-100 sm-w-70 xs-w-90">A
                        salon is an establishment dealing with natural cosmetic treatments.</div>
                    <a href="#contact"
                        class="btn btn-extra-large btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow">
                        <span>
                            <span class="btn-text">Book appointment</span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right fs-14"></i></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right fs-14"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner slider -->
    <!-- start banner slider -->
    <section class="p-0 position-relative border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="w-50 bg-white position-absolute top-minus-40px left-0px text-end">
                <div class="fs-15 lh-30 text-dark-gray pt-5px pb-5px ps-25px pe-25px fw-600 d-inline-block bg-yellow">wow
                    awesome!</div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 icon-with-text-style-01 pt-40px pb-40px pe-8 lg-pe-15px xs-pb-30px border-end md-border-end-0 md-border-bottom border-color-extra-medium-gray"
                    data-anime='{ "el": "childs", "translateX": [-30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-icon-01.png') }} class="h-65px" alt="">
                        </div>
                        <div class="feature-box-content">
                            <h6 class="text-dark-gray fw-400 mb-0 alt-font ls-minus-05px">Best beauty salon <span
                                    class="text-decoration-line-bottom-medium">award 2023</span></h6>
                            <p>Multi award winning beauty salon services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-40px pb-40px xs-pt-30px ps-8 lg-ps-15px"
                    data-anime='{ "el": "childs", "translateX": [30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
                    <h6 class="fw-400 mb-0 alt-font"><a href="demo-beauty-salon-story.html"
                            class="text-dark-gray text-dark-gray-hover">Get <span
                                class="text-decoration-line-bottom-medium">20%</span> off on bridal makeup<i
                                class="bi bi-arrow-right align-middle icon-extra-medium position-relative top-3px md-top-0px ms-10px"></i></a>
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner slider -->
    <!-- start banner slider -->
    <section class="p-0" id="about">
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">
                <div class="col-xl-6 col-lg-6 position-relative top-minus-2px md-mb-30px"
                    data-anime='{ "effect": "slide", "color": "#f2e0dc", "direction":"lr", "easing": "easeOutQuad", "duration": 600, "delay":500}'>
                    <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-img-01.png') }} class="border-radius-rb-50px w-100" alt="">
                </div>
                <div class="col-xl-4 col-lg-6 offset-xl-1 lg-ps-15px lg-pe-15px text-center text-lg-start"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 mb-10px ls-1px d-inline-block">About
                        the salon</span>
                    <h2 class="alt-font fw-400 text-dark-gray w-75 xl-w-90 lg-w-100 ls-minus-1px">Body treatments. Skin care
                        beauty.</h2>
                    <p class="mb-30px w-60 xl-w-90 lg-w-100 lg-mb-25px">With over 35 years of experience footprint of over
                        400+ salons in 125 cities across the length and breadth of the country. We have developed a deep
                        understanding of the beauty industry.</p>
                    <div class="d-sm-flex align-items-center justify-content-center justify-content-lg-start">
                        <a href="#contact"
                            class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow xs-me-20px xs-mb-10px">
                            <span>
                                <span class="btn-text">Contact Us</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                        {{-- <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                            class="btn btn-link hover-text-light btn-extra-large text-dark-gray popup-youtube xs-ps-0 xs-mb-10px"><i
                                class="bi bi-play-circle align-middle lh-normal icon-extra-medium me-10px"></i>Luxury
                            salon</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner slider -->
    <!-- start section -->
    <section class="border-bottom border-color-extra-medium-gray pt-4 pb-4">
        <div class="container">
            <div class="row align-items-center row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateX": [-20, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start process step item -->
                <div
                    class="col process-step-style-08 border-end border-color-extra-medium-gray d-flex justify-content-center sm-border-end-0 md-mb-40px">
                    <div class="process-step-item d-flex align-items-start">
                        <div class="process-step-icon-wrap d-flex align-items-center col-auto">
                            <span class="number text-dark-gray fs-26 alt-font">01</span>
                            <span
                                class="progress-step-separator bg-base-color w-20px separator-line-2px d-block ms-15px"></span>
                        </div>
                        <div class="col process-content last-paragraph-no-margin ms-15px">
                            <span class="d-block text-dark-gray fs-24 alt-font">Excellent care</span>
                            <p>No compromises</p>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div
                    class="col process-step-style-08 border-end border-color-extra-medium-gray d-flex justify-content-center md-border-end-0 md-mb-40px">
                    <div class="process-step-item d-flex align-items-start">
                        <div class="process-step-icon-wrap d-flex align-items-center col-auto">
                            <span class="number text-dark-gray fs-26 alt-font">02</span>
                            <span
                                class="progress-step-separator bg-base-color w-20px separator-line-2px d-block ms-15px"></span>
                        </div>
                        <div class="col process-content last-paragraph-no-margin ms-15px">
                            <span class="d-block text-dark-gray fs-24 alt-font">Cruelty free</span>
                            <p>No tested on animals</p>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col process-step-style-08 d-flex justify-content-center">
                    <div class="process-step-item d-flex align-items-start">
                        <div class="process-step-icon-wrap d-flex align-items-center col-auto">
                            <span class="number text-dark-gray fs-26 alt-font">03</span>
                            <span
                                class="progress-step-separator bg-base-color w-20px separator-line-2px d-block ms-15px"></span>
                        </div>
                        <div class="col process-content last-paragraph-no-margin ms-15px">
                            <span class="d-block text-dark-gray fs-24 alt-font">Certified experts</span>
                            <p>Professional people</p>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overlap-height" id="services">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center align-items-center mb-6"
                data-anime='{ "el": "childs", "translateY": [30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
                <div class="col-auto pe-25px border-2 border-end border-color-dark-gray sm-border-end-0 sm-pe-15px">
                    <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px">Beauty salon
                        services</span>
                </div>
                <div class="col-12 col-md-auto ps-25px sm-ps-15px text-center">
                    <h3 class="alt-font fw-400 text-dark-gray ls-minus-1px mb-0">Makeup and hairstyles</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 transition-inner-all justify-content-center mb-4"
                data-anime='{ "el": "childs", "translateY": [20, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start fancy text box item -->
                <div class="col mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-02.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-22 text-dark-gray alt-font">Hair treatment</span>
                            <p class="lh-26">Advanced hair treatment</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-03.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-22 text-dark-gray alt-font">Reflexology</span>
                            <p class="lh-26">Different amounts of pressure</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-04.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-22 text-dark-gray alt-font">Makeup</span>
                            <p class="lh-26">Rethink your lash look</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col md-mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-05.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-22 text-dark-gray alt-font">Skin care</span>
                            <p class="lh-26">Believe in your beauty</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col md-mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-06.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-22 text-dark-gray alt-font">Cosmetology</span>
                            <p class="lh-26">Fabulous in every way</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-07.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                        <div class="p-25px last-paragraph-no-margin text-center">
                            <span class="fs-22 text-dark-gray alt-font">Grooming</span>
                            <p class="lh-26">Especially crafted to suit</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
            </div>
            <!-- start pricing style -->
            <div class="row justify-content-between align-items-center mb-5 xs-mb-6">
                <div class="col-lg-6 pe-50px lg-pe-30px md-pe-15px pricing-table-style-09"
                    data-anime='{ "el": "childs", "translateX": [-30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
                    <div class="row border-top border-color-extra-medium-gray g-0 xs-pt-20px xs-pb-20px">
                        <div class="col-sm-3 text-center align-self-center">
                            <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-icon-02.png') }} class="w-55px" alt="">
                        </div>
                        <div
                            class="col-sm-7 text-center text-sm-start last-paragraph-no-margin ps-40px pe-40px pt-30px pb-30px border-start border-color-extra-medium-gray xs-border-start-0 lg-ps-20px lg-pe-20px">
                            <span class="alt-font text-dark-gray fs-20 lg-fs-19">Hair wash and dry</span>
                            <p class="lh-26">Quick hair wash and blow</p>
                        </div>
                        <div class="col-sm-2 text-center text-sm-start align-self-center">
                            <h4 class="alt-font text-dark-gray mb-0 fw-400">$35</h4>
                        </div>
                    </div>
                    <div
                        class="row border-top border-color-extra-medium-gray align-items-center g-0 xs-pt-20px xs-pb-20px">
                        <div class="col-sm-3 align-self-center text-center">
                            <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-icon-03.png') }} class="w-55px" alt="">
                        </div>
                        <div
                            class="col-sm-7 text-center text-sm-start last-paragraph-no-margin ps-40px pe-40px pt-30px pb-30px border-start border-color-extra-medium-gray xs-border-start-0 lg-ps-20px lg-pe-20px">
                            <span class="alt-font text-dark-gray fs-20 lg-fs-19">Express makeup</span>
                            <p class="lh-26">Lovely on your special day</p>
                        </div>
                        <div class="col-sm-2 text-center text-sm-start align-self-center">
                            <h4 class="alt-font text-dark-gray mb-0 fw-400">$65</h4>
                        </div>
                    </div>
                    <div
                        class="row border-top border-bottom border-color-extra-medium-gray align-items-center g-0 xs-pt-20px xs-pb-20px">
                        <div class="col-sm-3 align-self-center text-center">
                            <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-icon-04.png') }} class="w-55px" alt="">
                        </div>
                        <div
                            class="col-sm-7 text-center text-sm-start last-paragraph-no-margin ps-40px pe-40px pt-30px pb-30px border-start border-color-extra-medium-gray xs-border-start-0 lg-ps-20px lg-pe-20px">
                            <span class="alt-font text-dark-gray fs-20 lg-fs-19">Haircut by expert</span>
                            <p class="lh-26">Get the best haircut</p>
                        </div>
                        <div class="col-sm-2 text-center text-sm-start align-self-center">
                            <h4 class="alt-font text-dark-gray mb-0 fw-400">$25</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-50px lg-ps-30px md-ps-15px pricing-table-style-09"
                    data-anime='{ "el": "childs", "translateX": [30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
                    <div class="row border-top border-color-extra-medium-gray g-0 md-border-top-0 xs-pt-20px xs-pb-20px">
                        <div class="col-sm-3 text-center align-self-center">
                            <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-icon-05.png') }} class="w-55px" alt="">
                        </div>
                        <div
                            class="col-sm-7 text-center text-sm-start last-paragraph-no-margin ps-40px pe-40px pt-30px pb-30px border-start border-color-extra-medium-gray xs-border-start-0 lg-ps-20px lg-pe-20px">
                            <span class="alt-font text-dark-gray fs-20 lg-fs-19">New hair styling</span>
                            <p class="lh-26">Trendy and glam hair style</p>
                        </div>
                        <div class="col-sm-2 text-center text-sm-start align-self-center">
                            <h4 class="alt-font text-dark-gray mb-0 fw-400">$25</h4>
                        </div>
                    </div>
                    <div
                        class="row border-top border-color-extra-medium-gray align-items-center g-0 xs-pt-20px xs-pb-20px">
                        <div class="col-sm-3 align-self-center text-center">
                            <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-icon-06.png') }} class="w-55px" alt="">
                        </div>
                        <div
                            class="col-sm-7 text-center text-sm-start last-paragraph-no-margin ps-40px pe-40px pt-30px pb-30px border-start border-color-extra-medium-gray xs-border-start-0 lg-ps-20px lg-pe-20px">
                            <span class="alt-font text-dark-gray fs-20 lg-fs-19">Wash and plain dry</span>
                            <p class="lh-26">Advanced hair treatment</p>
                        </div>
                        <div class="col-sm-2 text-center text-sm-start align-self-center">
                            <h4 class="alt-font text-dark-gray mb-0 fw-400">$45</h4>
                        </div>
                    </div>
                    <div
                        class="row border-top border-bottom border-color-extra-medium-gray align-items-center g-0 xs-pt-20px xs-pb-20px">
                        <div class="col-sm-3 align-self-center text-center">
                            <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-icon-07.png') }} class="w-55px" alt="">
                        </div>
                        <div
                            class="col-sm-7 text-center text-sm-start last-paragraph-no-margin ps-40px pe-40px pt-30px pb-30px border-start border-color-extra-medium-gray xs-border-start-0 lg-ps-20px lg-pe-20px">
                            <span class="alt-font text-dark-gray fs-20 lg-fs-19">Organic skin treatment </span>
                            <p class="lh-26">Reduce dryness from skin</p>
                        </div>
                        <div class="col-sm-2 text-center text-sm-start align-self-center">
                            <h4 class="alt-font text-dark-gray mb-0 fw-400">$55</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end pricing style -->
            {{-- <div class="row">
                <div class="col-12 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
                    <h6 class="text-dark-gray alt-font">Our flexible beauty salon pricing plans. <a
                            href="demo-beauty-salon-wedding.html"
                            class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom-medium">Explore
                            package</a></h6>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overlap-height" id="gallery">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center align-items-center mb-6"
                data-anime='{ "el": "childs", "translateY": [30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
                <div class="col-auto pe-25px border-2 border-end border-color-dark-gray sm-border-end-0 sm-pe-15px">
                    <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px">Beauty salon
                        gallery</span>
                </div>
                <div class="col-12 col-md-auto ps-25px sm-ps-15px text-center">
                    <h3 class="alt-font fw-400 text-dark-gray ls-minus-1px mb-0">Explore Gallery</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 transition-inner-all justify-content-center mb-4"
                data-anime='{ "el": "childs", "translateY": [20, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start fancy text box item -->
                <div class="col mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-02.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-03.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-04.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col md-mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-05.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col md-mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-06.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-07.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
            </div>

            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 transition-inner-all justify-content-center mb-4"
                data-anime='{ "el": "childs", "translateY": [20, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start fancy text box item -->
                <div class="col mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-02.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-03.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-04.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col md-mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-05.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col md-mb-20px">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-06.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col">
                    <div class="services-box-style-01 hover-box">
                        <div class="position-relative box-image border-radius-6px overflow-hidden">
                            <a href="demo-beauty-salon-services.html">
                                <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-07.png') }} alt="">
                                <div class="box-overlay bg-gradient-blue-ironstone-brown"></div>
                                <span
                                    class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
            </div>
            <!-- start pricing style -->
          
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="cover-background p-0" style="background-image: url('{{ asset('assets/images/demo-beauty-salon-home-bg-04.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-end order-2 order-lg-1"
                    data-anime='{ "el": "childs", "translateY": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="outside-box-left-5 outside-box-right-5">
                        <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-home-10.png') }} alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 pt-8 pb-10 align-self-end order-1 order-lg-2"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-16 text-uppercase text-base-color fw-600 mb-20px d-inline-block ls-2px">Beauty salon
                        focus on</span>
                    <h2 class="alt-font fw-400 text-white">The quest for quality and safety.</h2>
                    <div class="accordion accordion-style-02 mb-25px xs-mb-15px" id="accordion-style-02"
                        data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                        <!-- start accordion item -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-transparent-white-light">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01"
                                    aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-white">
                                        <i class="feather icon-feather-minus"></i><span class="fw-500 fs-19">Quality and
                                            safety as our absolute priority</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-white-light">
                                    <p class="text-white opacity-5">For more than 110 years, we have devoted our energy and
                                        our competencies solely to one business beauty. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02"
                                    aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-white">
                                        <i class="feather icon-feather-plus"></i><span class="fw-500 fs-19">Helping
                                            hundreds of millions of women</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-02">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <p class="text-white opacity-5">For more than 110 years, we have devoted our energy and
                                        our competencies solely to one business beauty. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                    </div>
                    <a href="#contact"
                        class="btn btn-large btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow">
                        <span>
                            <span class="btn-text">Book appointment</span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right fs-14"></i></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right fs-14"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0 border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 md-mt-30px text-center text-lg-start">
                    <h5 class="alt-font text-dark-gray mb-0">2023 beauty tips</h5>
                </div>
                <div
                    class="col-xl-9 col-lg-8 p-45px border-start border-color-extra-medium-gray text-center md-border-start-0 md-pt-15px md-pb-30px sm-ps-0 sm-pe-0">
                    <div class="swiper slider-one-slide magic-cursor"
                        data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start text slider item -->
                            <div class="swiper-slide pe-60px ps-60px">
                                <div class="h-100 d-flex justify-content-center align-items-center flex-column">
                                    <div class="fs-20"><span class="text-dark-gray fw-600">Turmeric:</span> Its healing
                                        properties can repair sun damage and reduce sunburns.</div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide pe-60px ps-60px">
                                <div class="h-100 d-flex justify-content-center align-items-center flex-column">
                                    <div class="fs-20"><span class="text-dark-gray fw-600">Honey:</span> This golden
                                        potion is great for your health when taken externally.</div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide pe-60px ps-60px">
                                <div class="h-100 d-flex justify-content-center align-items-center flex-column">
                                    <div class="fs-20"><span class="text-dark-gray fw-600">Avocado:</span> The fruit is
                                        rich in antioxidants and contains anti-inflammatory.</div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                        </div>
                        <!-- start slider navigation -->
                        <div class="swiper-button-previous-nav swiper-button-prev"><i
                                class="bi bi-arrow-left icon-extra-medium text-dark-gray d-flex"></i></div>
                        <div class="swiper-button-next-nav swiper-button-next"><i
                                class="bi bi-arrow-right icon-extra-medium text-dark-gray d-flex"></i></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-6">
                <div class="col-auto pe-25px border-2 border-end border-color-dark-gray sm-border-end-0 sm-pe-15px">
                    <span class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px">Our
                        specialists</span>
                </div>
                <div class="col-12 col-md-auto ps-25px sm-ps-15px text-center">
                    <h3 class="alt-font fw-400 text-dark-gray ls-minus-1px mb-0">Beauty experts</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 mb-5 md-mb-40px"
                data-anime='{ "el": "childs", "translateY": [20, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start team member item -->
                <div class="col text-center team-style-05 md-mb-35px border-radius-6px">
                    <div class="position-relative mb-30px">
                        <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-team-01.png') }} class="border-radius-6px" alt="" />
                        {{-- <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-40px lg-p-20px team-content bg-gradient-dark-transparent border-radius-6px">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="alt-font text-dark-gray lh-24 fs-20">Jeremy dupont</div>
                    <span>Director</span>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-05 md-mb-35px border-radius-6px">
                    <div class="position-relative mb-30px">
                        <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-team-02.png') }} class="border-radius-6px" alt="" />
                        {{-- <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-40px lg-p-20px team-content bg-gradient-dark-transparent border-radius-6px">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="alt-font text-dark-gray lh-24 fs-20">Matthew taylor</div>
                    <span>Makeup</span>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-05 sm-mb-35px border-radius-6px">
                    <div class="position-relative mb-30px">
                        <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-team-03.png') }} class="border-radius-6px" alt="" />
                        {{-- <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-40px lg-p-20px team-content bg-gradient-dark-transparent border-radius-6px">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="alt-font text-dark-gray lh-24 fs-20">Herman miller</div>
                    <span>Therapist</span>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-05 border-radius-6px">
                    <div class="position-relative mb-30px">
                        <img src={{ asset('assets/beauty_salon/images/demo-beauty-salon-team-04.png') }} class="border-radius-6px" alt="" />
                        {{-- <div
                            class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-40px lg-p-20px team-content bg-gradient-dark-transparent border-radius-6px">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.dribbble.com" target="_blank" class="text-white"><i
                                        class="fa-brands fa-dribbble"></i></a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="alt-font text-dark-gray lh-24 fs-20">Johncy parker</div>
                    <span>Consultant</span>
                </div>
                <!-- end team member item -->
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="fs-26 text-dark-gray alt-font">
                        <div
                            class="text-center bg-base-color text-white fs-16 lh-36 border-radius-30px d-inline-block ps-20px pe-20px align-middle me-10px">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <div class="d-inline-block align-middle">25,000+ Beauty lovers visited our beauty salon.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative overflow-hidden pt-0">
        <div class="container">
            <div class="row"
                data-anime='{"el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-xl-3 col-lg-4 md-mb-35px text-center text-lg-start">
                    <span
                        class="fs-16 text-uppercase text-gradient-san-blue-new-york-red fw-700 ls-1px mb-5px d-inline-block">Testimonial</span>
                    <h4 class="alt-font fw-400 text-dark-gray ls-minus-1px">Our happy beauty lovers.</h4>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <!-- start slider navigation -->
                        <div
                            class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray">
                            <i class="bi bi-arrow-left-short icon-very-medium text-dark-gray"></i></div>
                        <div
                            class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray">
                            <i class="bi bi-arrow-right-short icon-very-medium text-dark-gray"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 review-style-10 position-relative ps-4 lg-ps-15px">
                    <div class="outside-box-right-25 sm-outside-box-right-0">
                        <div class="swiper magic-cursor"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 400000, "disableOnInteraction": false },  "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start review item -->
                                    <div class="border border-color-extra-medium-gray border-radius-6px d-flex">
                                        <div class="p-15px">
                                            <div class="vertical-title-center align-items-center">
                                                <div class="title fs-16 text-dark-gray fw-700 text-uppercase ls-1px">Emma
                                                    causer</div>
                                            </div>
                                        </div>
                                        <div
                                            class="p-40px border-start border-color-extra-medium-gray d-flex justify-content-center xs-p-25px">
                                            <div>
                                                <p class="mb-10px w-95 xl-w-100">A wonderfully professional salon,
                                                    beautiful location and beautifully kept. Great products knowledge.</p>
                                                <div class="text-gradient-san-blue-new-york-red d-inline-block fs-20">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start review item -->
                                    <div class="border border-color-extra-medium-gray border-radius-6px d-flex">
                                        <div class="p-15px">
                                            <div class="vertical-title-center align-items-center">
                                                <div class="title fs-16 text-dark-gray fw-700 text-uppercase ls-1px">Lesley
                                                    simms</div>
                                            </div>
                                        </div>
                                        <div
                                            class="p-40px border-start border-color-extra-medium-gray d-flex justify-content-center xs-p-25px">
                                            <div>
                                                <p class="mb-10px w-95 xl-w-100">Perfection isn't just any other salon.
                                                    It's a complete cut above the rest. Highly recommended!</p>
                                                <div class="text-gradient-san-blue-new-york-red d-inline-block fs-20">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start review item -->
                                    <div class="border border-color-extra-medium-gray border-radius-6px d-flex">
                                        <div class="p-15px">
                                            <div class="vertical-title-center align-items-center">
                                                <div class="title fs-16 text-dark-gray fw-700 text-uppercase ls-1px">Nickie
                                                    coombs</div>
                                            </div>
                                        </div>
                                        <div
                                            class="p-40px border-start border-color-extra-medium-gray d-flex justify-content-center xs-p-25px">
                                            <div>
                                                <p class="mb-10px w-95 xl-w-100">Perfection should be everyones number one
                                                    choice to relax and treat yourself or loved ones.</p>
                                                <div class="text-gradient-san-blue-new-york-red d-inline-block fs-20">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start review item -->
                                    <div class="border border-color-extra-medium-gray border-radius-6px d-flex">
                                        <div class="p-15px">
                                            <div class="vertical-title-center align-items-center">
                                                <div class="title fs-16 text-dark-gray fw-700 text-uppercase ls-1px">Bella
                                                    roberts</div>
                                            </div>
                                        </div>
                                        <div
                                            class="p-40px border-start border-color-extra-medium-gray d-flex justify-content-center xs-p-25px">
                                            <div>
                                                <p class="mb-10px w-95 xl-w-100">Dedicated team will do their best to meet
                                                    your needs and give you your ultimate treatment.</p>
                                                <div class="text-gradient-san-blue-new-york-red d-inline-block fs-20">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start review item -->
                                    <div class="border border-color-extra-medium-gray border-radius-6px d-flex">
                                        <div class="p-15px">
                                            <div class="vertical-title-center align-items-center">
                                                <div class="title fs-16 text-dark-gray fw-700 text-uppercase ls-1px">Herman
                                                    miller</div>
                                            </div>
                                        </div>
                                        <div
                                            class="p-40px border-start border-color-extra-medium-gray d-flex justify-content-center xs-p-25px">
                                            <div>
                                                <p class="mb-10px w-95 xl-w-100">Perfection isn't just any other salon.
                                                    It's a complete cut above the rest. Wonderfully professional.</p>
                                                <div class="text-gradient-san-blue-new-york-red d-inline-block fs-20">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start review item -->
                                    <div class="border border-color-extra-medium-gray border-radius-6px d-flex">
                                        <div class="p-15px">
                                            <div class="vertical-title-center align-items-center">
                                                <div class="title fs-16 text-dark-gray fw-700 text-uppercase ls-1px">Shoko
                                                    mugikura</div>
                                            </div>
                                        </div>
                                        <div
                                            class="p-40px border-start border-color-extra-medium-gray d-flex justify-content-center xs-p-25px">
                                            <div>
                                                <p class="mb-10px w-95 xl-w-100">Dedicated team will do their best to meet
                                                    your needs and give you your ultimate treatment.</p>
                                                <div class="text-gradient-san-blue-new-york-red d-inline-block fs-20">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                </div>
                                <!-- end slider item -->
                            </div>
                        </div>
                    </div>
                    <!-- start slider pagination -->
                    <!--<div class="swiper-pagination slider-three-slide-pagination swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <section
    class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center"
    id="contact"
    style="background-image: url('{{ asset('assets/restaurant/images/demo-restaurant-about-title-bg.jpg') }}')">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen" style="height: 161px !important"
            >
                <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large"
                   >
                    <h1 class="alt-font text-dark-gray text-uppercase ls-minus-1px mb-0">Contact us</h1>
                    <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                            class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Beauty Salon<span
                            class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="pt-0 mb-5">
    <div class="container"
>
        {{-- <div class="row">
            <div class="col-12 pe-17 background-position-right-top background-no-repeat md-pe-15px" > 
                <div id="map" class="map sm-h-350px" data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Retro", "marker": { "type": "HTML", "color": "#d39121" }, "popup": { "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Restaurants</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'></div>
            </div> 
        </div> --}}
        <div class="row align-items-end justify-content-center">
            {{-- <div class="col-xl-7 col-lg-6 align-self-start">
                <span class="fs-140 lg-fs-100 xs-fs-90 fw-700 text-very-light-gray ls-minus-8px lg-ls-minus-5px xs-ls-minus-4px md-w-100 d-block text-center text-lg-start">Write here</span>
            </div> --}}
            <div
                class="col-xl-5 col-lg-6 col-md-12 contact-form-style-03 position-relative overlap-section-one-fourth md-mt-0" style="margin-top: 0px !important;">
                <div
                    class="bg-very-light-gray p-14 position-relative overflow-hidden mt-50px md-mt-25px sm-mt-15px lg-p-10">
                    <i
                        class="bi bi-chat-text fs-140 text-base-color opacity-1 position-absolute top-minus-35px right-minus-20px"></i>
                    <h2 class="alt-font text-dark-gray mb-15px">How we can help you?</h2>
                    <form action="email-templates/contact-form.php" method="post">
                        <div class="position-relative form-group mb-10px">
                            <span class="form-icon text-medium-gray"><i class="bi bi-emoji-smile"></i></span>
                            <input
                                class="ps-0 border-radius-0px bg-transparent border-color-transparent-dark-very-light form-control required"
                                type="text" name="name" placeholder="Your name*">
                        </div>
                        <div class="position-relative form-group mb-10px">
                            <span class="form-icon medium-gray"><i class="bi bi-envelope"></i></span>
                            <input
                                class="ps-0 border-radius-0px bg-transparent border-color-transparent-dark-very-light form-control required"
                                type="email" name="email" placeholder="Your email address*">
                        </div>
                        <div class="position-relative form-group form-textarea mt-10px mb-0">
                            <textarea class="ps-0 border-radius-0px bg-transparent border-color-transparent-dark-very-light form-control"
                                name="comment" placeholder="Your message" rows="3"></textarea>
                            <span class="form-icon medium-gray"><i class="bi bi-chat-square-dots"></i></span>
                            <input type="hidden" name="redirect" value="">
                            <button
                                class="btn btn-dark-gray btn-medium btn-switch-text btn-round-edge btn-box-shadow submit mt-30px"
                                type="submit">
                                <span>
                                    <span class="btn-double-text" data-text="Send a message">Send a message</span>
                                </span>
                            </button>
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end section -->
    <!-- start section -->

    <!-- start section -->
    <section class="p-0 h-550px sm-h-auto position-relative">
        {{-- <div id="map" class="map h-100 sm-h-350px w-100 position-absolute sm-position-relative"
            data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Silver", "marker": { "type": "image", "class": "marker01", "src": "https://via.placeholder.com/100x100" }, "popup": { "defaultOpen": false, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Beauty Salon</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'>
        </div> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.2092990197843!2d74.3224732!3d31.518411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190487cc9571bb%3A0xaf85a5e061138579!2sMuslim%20Town%2C%20Lahore%2C%20Punjab%2054000!5e0!3m2!1sen!2s!4v1727253254075!5m2!1sen!2s" style="width: 100%; position: absolute;" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="container h-100 position-relative sm-pt-30px sm-pb-30px pointer-events-none"
            data-anime='{"translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="row h-100 align-items-end justify-content-end align-items-lg-center pointer-events-none">
                <div class="col-md-auto pointer-events-all">
                    <div
                        class="bg-white box-shadow-quadruple-large w-380px md-w-300px sm-w-100 border-radius-6px md-mb-20px xs-mb-0">
                        <div class="ps-60px pe-60px pt-50px pb-40px md-p-30px text-center text-md-start">
                            <h4 class="alt-font text-dark-gray mb-10px">Contact us</h4>
                            <span class="text-dark-gray fw-600">Beauty salon</span>
                            <p class="w-80 mb-10px lh-30 sm-w-100">Muslim Town Lahore , Pakistan</p>
                            <div class="w-100 d-block">
                                <span class="d-block"><span class="fw-600 text-dark-gray">Phone:</span> <a
                                        href="tel:1800222000" class="text-medium-gray">+92-319-5199686</a></span>
                                <span class="d-block"><span class="fw-600 text-dark-gray">Email:</span> <a
                                        href="mailto:info@yourdomain.com"
                                        class="text-dark-gray text-decoration-line-bottom fw-500">info@oveelabs.com</a></span>
                            </div>
                        </div>
                        <div class="text-center pt-15px pb-15px border-top border-color-extra-medium-gray">
                            <a href="https://www.google.com/maps/place/Envato/@-37.8041098,144.9615898,16z/data=!4m5!3m4!1s0x0:0xb6899234e561db11!8m2!3d-37.8056733!4d144.9623021?hl=en-US"
                                target="_blank"
                                class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray text-uppercase btn-icon-left fw-700 p-0">
                                <span>
                                    <span class="btn-text">Show on google maps</span>
                                    <span class="btn-icon"><i class="feather icon-feather-map-pin"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-map-pin"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
