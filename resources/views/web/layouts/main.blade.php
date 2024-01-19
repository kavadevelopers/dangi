<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>{{ isset($_title) ? $_title.' | ':'' }}{{ CommonHelper::getsetting('app_name') }}</title>
        @include('common.head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:300,300italic,400,400italic,700,900%7CPlayfair+Display:700italic,900">
        <link rel="stylesheet" href="{{ url('themes/web/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('themes/web/css/fonts.css') }}">
        <link rel="stylesheet" href="{{ url('themes/web/css/style.css') }}">
        @include('web.layouts.style')
    </head>
    <body>
        <div class="preloader">
            <div>
                <a class="brand brand-md" href="{{ url('home') }}">
                    <img src="{{ url('themes/logos/logo-invert.png') }}" alt="" style="height:auto !important;"/>
                </a>
                <div class="page-loader-body">
                    <div id="spinningSquaresG">
                        <div class="spinningSquaresG" id="spinningSquaresG_1"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_2"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_3"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_4"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_5"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_6"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_7"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_8"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page">
            <header class="page-head">
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-corporate-light" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px">
                        <div class="rd-navbar-inner">
                            <div class="rd-navbar-aside-wrap">
                                <div class="rd-navbar-aside">
                                    <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                                    <div class="rd-navbar-aside-content">
                                        <ul class="rd-navbar-aside-group list-units">
                                            <li>
                                                <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                                                    <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary material-icons-phone"></span></div>
                                                    <div class="unit-body"><a class="link-secondary" href="tel:{{ CommonHelper::getsetting('web_mobile1') }}">{{ CommonHelper::getsetting('web_mobile1') }}</a></div>
                                                </div>
                                            </li>
                                            @if (CommonHelper::getsetting('web_mobile2') != "")
                                                <li>
                                                    <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                                                        <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary material-icons-phone"></span></div>
                                                        <div class="unit-body"><a class="link-secondary" href="tel:{{ CommonHelper::getsetting('web_mobile2') }}">{{ CommonHelper::getsetting('web_mobile2') }}</a></div>
                                                    </div>
                                                </li>
                                            @endif
                                            <li>
                                                <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                                                    <div class="unit-left"><span class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span></div>
                                                    <div class="unit-body"><a class="link-secondary" href="mailto:{{ CommonHelper::getsetting('web_email') }}">{{ CommonHelper::getsetting('web_email') }}</a></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="rd-navbar-aside-group">
                                            <ul class="list-inline list-inline-reset">
                                                @if (CommonHelper::getsetting('social_media_fb') != "")
                                                    <li><a class="novi-icon icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-facebook" href="{{ CommonHelper::getsetting('social_media_fb') }}" target="_blank"></a></li>
                                                @endif
                                                @if (CommonHelper::getsetting('social_media_insta') != "")
                                                    <li><a class="novi-icon icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-instagram" href="{{ CommonHelper::getsetting('social_media_insta') }}" target="_blank"></a></li>
                                                @endif
                                                @if (CommonHelper::getsetting('social_media_youtube') != "")
                                                    <li><a class="novi-icon icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-youtube-play" href="{{ CommonHelper::getsetting('social_media_youtube') }}" target="_blank"></a></li>
                                                @endif
                                                @if (CommonHelper::getsetting('social_media_linkedin') != "")
                                                    <li><a class="novi-icon icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-linkedin" href="{{ CommonHelper::getsetting('social_media_linkedin') }}" target="_blank"></a></li>
                                                @endif
                                                @if (CommonHelper::getsetting('social_media_skype') != "")
                                                    <li><a class="novi-icon icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-skype" href="{{ CommonHelper::getsetting('social_media_skype') }}" target="_blank"></a></li>
                                                @endif
                                                @if (CommonHelper::getsetting('social_media_x') != "")
                                                    <li><a class="novi-icon icon icon-circle icon-silver-chalice-filled icon-xxs-smallest fa fa-twitter" href="{{ CommonHelper::getsetting('social_media_x') }}" target="_blank"></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rd-navbar-group">
                                <div class="rd-navbar-panel">
                                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                        <span></span>
                                    </button>
                                    <a class="rd-navbar-brand brand" href="{{ url('home') }}">
                                        <img src="{{ url('themes/logos/logo.png') }}" alt="" style="max-width: 100px;"/>
                                    </a>
                                </div>
                                <div class="rd-navbar-nav-wrap">
                                    <div class="rd-navbar-nav-inner">
                                        <div class="rd-navbar-btn-wrap"><a class="btn btn-smaller btn-primary-outline" href="{{ url('contact-us') }}">Enquiry</a></div>
                                        <ul class="rd-navbar-nav">
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('home') }}">Home</a></li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('about-us') }}">About</a></li>
                                            <li class="rd-nav-item">
                                                <a class="rd-nav-link" href="#">Global</a>
                                                <ul class="rd-menu rd-navbar-dropdown">
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ url('global/how-we-operate') }}">How we operate</a>
                                                    </li>
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ url('global/it-and-data-security') }}">IT & Data Security</a>
                                                    </li>
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ url('global/offshoring') }}">Offshoring</a>
                                                    </li>
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ url('global/services') }}">Our Valuable Services</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="rd-nav-item">
                                                <a class="rd-nav-link" href="#">Consultancy</a>
                                                <ul class="rd-menu rd-navbar-dropdown">
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ url('consultancy/business-setup') }}">Business Set Up</a>
                                                    </li>
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ url('consultancy/tax-compliances') }}">Tax & Compliances</a>
                                                    </li>
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ url('consultancy/finance-subsidy') }}">Finance & Subsidy</a>
                                                    </li>
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ url('consultancy/virtual-accountant-cfo') }}">Virtual Accountant & CFO</a>
                                                    </li>
                                                    <li class="rd-dropdown-item">
                                                        <a class="rd-dropdown-link" href="{{ url('consultancy/other-services') }}">Other Services</a>
                                                    </li>
                                                </ul>
                                            </li>   
                                            
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('placement') }}">Placement</a></li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('training') }}">Training</a></li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('blog') }}">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            
            @yield('content')

            <section class="section section-40 section-md-top-75 section-md-bottom-60 bg-cod-gray novi-background">
                <div class="container text-center text-md-start">
                    <div class="row row-30 align-items-md-center justify-content-lg-center justify-content-xl-start">
                        <div class="col-lg-11 col-xl-3"><a class="brand" href="{{ url('home') }}"><img src="{{ url('themes/logos/logo-invert.png') }}" alt="" width="139" height="22"/></a></div>
                        <div class="col-md-7 col-lg-6 col-xl-5">
                            <div class="wrap-justify">
                                <address class="contact-info text-start">
                                    <div class="unit unit-horizontal unit-spacing-xs align-items-center justify-content-center unit-sm-left">
                                        <div class="unit-left"><span class="novi-icon icon icon-md-custom icon-gunsmoke material-icons-place"></span></div>
                                        <div class="unit-body fw-light"><a class="link-light-03 d-inline" href="#">{!! nl2br(CommonHelper::getsetting('web_address')) !!}</a></div>
                                    </div>
                                </address>
                                <address class="contact-info text-start">
                                    <div class="unit unit-horizontal unit-spacing-xs align-items-center justify-content-center unit-sm-left">
                                        <div class="unit-left"><span class="novi-icon icon icon-md-custom icon-gunsmoke material-icons-phone"></span></div>
                                        <div class="unit-body fw-light">
                                            <div class="link-wrap"><a class="link-light-03" href="tel:{{ CommonHelper::getsetting('web_mobile1') }}">{{ CommonHelper::getsetting('web_mobile1') }}</a></div>
                                            @if (CommonHelper::getsetting('web_mobile2') != "")
                                                <div class="link-wrap"><a class="link-light-03" href="tel:{{ CommonHelper::getsetting('web_mobile2') }}">{{ CommonHelper::getsetting('web_mobile2') }}</a></div>
                                            @endif
                                            <div class="link-wrap"><a class="link-light-03" href="mailto:{{ CommonHelper::getsetting('web_email') }}">{{ CommonHelper::getsetting('web_email') }}</a></div>
                                        </div>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-5 col-xl-4 text-lg-center">
                            <ul class="list-inline list-inline-xs">
                                {{-- <li><a class="novi-icon icon icon-sm-custom link-tundora fa-facebook" href="#"></a></li>
                                <li><a class="novi-icon icon icon-sm-custom link-tundora fa-twitter" href="#"></a></li>
                                <li><a class="novi-icon icon icon-sm-custom link-tundora fa-google-plus" href="#"></a></li>
                                <li><a class="novi-icon icon icon-sm-custom link-tundora fa-linkedin" href="#"></a></li>
                                <li><a class="novi-icon icon icon-sm-custom link-tundora fa-skype" href="#"></a></li>
                                <li><a class="novi-icon icon icon-sm-custom link-tundora fa-vine" href="#"></a></li>
                                <li><a class="novi-icon icon icon-sm-custom link-tundora fa-youtube" href="#"></a></li> --}}
                                @if (CommonHelper::getsetting('social_media_fb') != "")
                                    <li><a class="novi-icon icon icon-sm-custom link-tundora fa fa-facebook" href="{{ CommonHelper::getsetting('social_media_fb') }}" target="_blank"></a></li>
                                @endif
                                @if (CommonHelper::getsetting('social_media_insta') != "")
                                    <li><a class="novi-icon icon icon-sm-custom link-tundora fa fa-instagram" href="{{ CommonHelper::getsetting('social_media_insta') }}" target="_blank"></a></li>
                                @endif
                                @if (CommonHelper::getsetting('social_media_youtube') != "")
                                    <li><a class="novi-icon icon icon-sm-custom link-tundora fa fa-youtube-play" href="{{ CommonHelper::getsetting('social_media_youtube') }}" target="_blank"></a></li>
                                @endif
                                @if (CommonHelper::getsetting('social_media_linkedin') != "")
                                    <li><a class="novi-icon icon icon-sm-custom link-tundora fa fa-linkedin" href="{{ CommonHelper::getsetting('social_media_linkedin') }}" target="_blank"></a></li>
                                @endif
                                @if (CommonHelper::getsetting('social_media_skype') != "")
                                    <li><a class="novi-icon icon icon-sm-custom link-tundora fa fa-skype" href="{{ CommonHelper::getsetting('social_media_skype') }}" target="_blank"></a></li>
                                @endif
                                @if (CommonHelper::getsetting('social_media_x') != "")
                                    <li><a class="novi-icon icon icon-sm-custom link-tundora fa fa-twitter" href="{{ CommonHelper::getsetting('social_media_x') }}" target="_blank"></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="page-foot page-foot-default section-35 bg-black novi-background text-center">
                <div class="container">
                    <p class="rights small"><span>{{ CommonHelper::getsetting('app_name') }}</span><span>&nbsp;&#169;&nbsp;</span><span class="copyright-year"></span><span>All Rights Reserved</span><br class="d-md-none"> - Powered By <a class="link-primary" href="http://www.kavadevelopers.com" target="_blank">Kava Developers</a></p>
                </div>
            </footer>
        </div>
        <div class="snackbars" id="form-output-global"></div>
        <script src="{{ url('themes/web/js/core.min.js') }}"></script>
        <script src="{{ url('themes/web/js/script.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @include('web.layouts.script')
    </body>
</html>