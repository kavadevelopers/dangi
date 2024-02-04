@extends('web.layouts.main')

@section('content')

<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="4000" data-simulate-touch="true">
    <div class="swiper-wrapper text-center">
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/home-slider1.jpg') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">Welcome to Dangi</h2>
                            <h3 data-caption-animate="fadeInUp" data-caption-delay="0s">Gateway to Excellence in Accounting and Finance</h3>
                            <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="100">Feel the power of global expertise, consultancy finesse, training excellence, and placement perfection – all under one roof. Join Dangi for a journey that transforms careers and elevates businesses in the field of Accounting and Finance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-scrollbar"></div>
    <div class="swiper-nav-wrap">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<section class="container custom-home-icons">
    <div class="row g-0 justify-content-sm-center justify-content-md-start row-40 row-sm-0">
        <div class="col-sm-10 col-md-6 height-fill">
            <article class="icon-box icon-box-top-line icon-box-hover">
                <div class="box-top">
                    <div class="box-icon"><span class="fa fa-globe"></span></div>
                    <div class="box-header">
                        <h5><a href="{{ url('global') }}">Dangi Global</a></h5>
                        <h6>Connecting Talent Worldwide</h6>
                    </div>
                </div>
                <div class="box-body">
                    <p class="text-black">Unlocking offshore talent in Accounting, Taxation, and Finance. Dangi connects global businesses with expert professionals for seamless financial operations.</p>
                </div>
                <a class="btn btn-icon-only btn-icon-single btn-icon-default" href="{{ url('global') }}"><span class="icon icon-sm material-icons-arrow_forward"></span></a>
            </article>
        </div>
        <div class="col-sm-10 col-md-6 height-fill">
            <article class="icon-box icon-box-top-line icon-box-hover">
                <div class="box-top">
                    <div class="box-icon"><span class="fa fa-briefcase"></span></div>
                    <div class="box-header">
                        <h5><a href="{{ url('consultancy/business-setup') }}">Dangi Consultancy</a></h5>
                        <h6>Guiding Businesses to Success</h6>
                    </div>
                </div>
                <div class="box-body">
                    <p class="text-black">Empowering Indian clients with business setup, GST registrations, tax filing, and comprehensive consultancy services in Accounting and Finance.</p>
                </div>
                <a class="btn btn-icon-only btn-icon-single btn-icon-default" href="{{ url('consultancy/business-setup') }}"><span class="icon icon-sm material-icons-arrow_forward"></span></a>
            </article>
        </div>
        <div class="col-sm-10 col-md-6 height-fill">
            <article class="icon-box icon-box-top-line icon-box-hover">
                <div class="box-top">
                    <div class="box-icon"><span class="fa fa-book"></span></div>
                    <div class="box-header">
                        <h5><a href="{{ url('training') }}">Dangi Training</a></h5>
                        <h6>Shaping Future Accountants</h6>
                    </div>
                </div>
                <div class="box-body">
                    <p class="text-black">Shape your accounting career with Dangi's specialized training programs. Learn accounting and bookkeeping skills, preparing candidates for success in the dynamic world of finance.</p>
                </div>
                <a class="btn btn-icon-only btn-icon-single btn-icon-default" href="{{ url('training') }}"><span class="icon icon-sm material-icons-arrow_forward"></span></a>
            </article>
        </div>
        <div class="col-sm-10 col-md-6 height-fill">
            <article class="icon-box icon-box-top-line icon-box-hover">
                <div class="box-top">
                    <div class="box-icon"><span class="fa fa-users"></span></div>
                    <div class="box-header">
                        <h5><a href="{{ url('placement') }}">Dangi Placement</a></h5>
                        <h6>Connecting Talent with Opportunities</h6>
                    </div>
                </div>
                <div class="box-body">
                    <p class="text-black">Dangi specializes in placing top-notch accountants. We filter and facilitate candidates, ensuring they find the right position while providing companies with skilled professionals.</p>
                </div>
                <a class="btn btn-icon-only btn-icon-single btn-icon-default" href="{{ url('placement') }}"><span class="icon icon-sm material-icons-arrow_forward"></span></a>
            </article>
        </div>
    </div>
</section>

<section class="section-50 section-md-90 section-xl-bottom-120 bg-light-gray custom-home-services">
    <div class="container text-center">
        <h3>Our Core Values</h3>
        
        <div class="row justify-content-sm-center row-50">
            <div class="col-sm-6 col-lg-3 wow fadeInUpSmall">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="fa fa-trophy"></span></div>
                        <div class="box-header">
                            <h5><a href="#">Excellence</a></h5>
                        </div>
                    </div>
                    <div class="icon-box-divider"></div>
                    <div class="box-body">
                        <p>We are committed to delivering services of the highest quality, exceeding expectations and setting new standards in the industry.</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUpSmall" data-wow-delay="0.1s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-san-juan icon-lg fl-puppets-chart6"></span></div>
                        <div class="box-header">
                            <h5><a href="#">Integrity</a></h5>
                        </div>
                    </div>
                    <div class="icon-box-divider"></div>
                    <div class="box-body">
                        <p>We operate with transparency, honesty, and ethical practices, building trust with our clients, partners, and employees.</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUpSmall" data-wow-delay="0.2s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-san-juan icon-lg fl-puppets-bank17"></span></div>
                        <div class="box-header">
                            <h5><a href="#">Innovation</a></h5>
                        </div>
                    </div>
                    <div class="icon-box-divider"></div>
                    <div class="box-body">
                        <p>Embracing change and fostering a culture of continuous improvement, we strive to bring innovative solutions to the financial landscape.</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUpSmall" data-wow-delay="0.3s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-san-juan icon-lg fl-puppets-savings3"></span></div>
                        <div class="box-header">
                            <h5><a href="#">Collaboration</a></h5>
                        </div>
                    </div>
                    <div class="icon-box-divider"></div>
                    <div class="box-body">
                        <p>We believe in the power of collaboration – internally and externally. By working together, we amplify our impact and achieve shared success.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@stop