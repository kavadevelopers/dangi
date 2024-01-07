@extends('web.layouts.main')

@section('content')

<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="4000" data-simulate-touch="true">
    <div class="swiper-wrapper text-center">
        @foreach ($banners as $key => $banner)
            <div class="swiper-slide" data-slide-bg="{{ CommonHelper::getHomeBanner($banner->image) }}">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-11 col-lg-10 col-xl-9">
                                <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">{{ $banner->title }}</h2>
                                <p class="text-bigger slider-text" data-caption-animate="fadeInUp" data-caption-delay="100">{{ $banner->subtitle }}</p>
                                {{-- <div class="group-xl-responsive"><a class="btn btn-xl btn-white-outline-variant-1" data-caption-animate="fadeInUp" data-caption-delay="250" href="#" data-custom-scroll-to="section-start-journey">Start a journey</a><a class="btn btn-xl btn-primary-contrast" data-caption-animate="fadeInUp" data-caption-delay="250" href="https://www.templatemonster.com/website-templates/starbis.html" target="_blank">Get starbis now</a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-scrollbar"></div>
    <div class="swiper-nav-wrap">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>
<section class="bg-decoration-wrap bg-decoration-bottom section-bottom-60 section-xl-top-100 section-xl-bottom-100 bg-whisper novi-background">
    <div class="container bg-decoration-content">
        <div class="row justify-content-md-center">
            <div class="col-lg-10 col-xl-12">
                <div class="row row-40 align-items-md-end">
                    @foreach (App\Models\HeadersModel::get() as $item)
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table">
                                <div class="pricing-table-body">
                                    <h5 class="pricing-table-header">{{ $item->title }}</h5>
                                    <div class="divider-circle"></div>
                                    <p>{{ $item->description }}</p>
                                </div>
                                <div class="pricing-table-footer"><a class="btn btn-round-bottom btn-default btn-block" href="{{ url($item->slug) }}">Readmore</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bg-decoration-object bg-iron"></div>
</section>
@stop