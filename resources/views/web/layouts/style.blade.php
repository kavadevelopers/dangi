<style>
    p{
        text-align: justify !important;
        font-size: 15px !important;
    }
    .angled_section_wrapper.purple {
        background-color: #fdf2fd;
    }
    .angled_section_wrapper.purple .col_content .angle {
        background-color: #fdf2fd !important;
    }


    .about-mission-child-item p{
        margin-top: 0;
    }
    .about-mission-child-item {
        margin-top: 20px;
        margin-left: 20px;
    }
    .custom-about-top .inner p{
        font-size: 16px;
    }


    .custom-home-blogs .post-boxed {
        text-align: left;
    }
    .custom-home-blogs .post-boxed-img-wrap a {
        display: block;
    }
    .custom-home-blogs .post-boxed img {
        width: 100%;
    }
    .custom-home-blogs .post-boxed-title {
        font-size: 16px;
        line-height: 24px;
    }
    .custom-home-blogs .post-boxed-title a:hover {
        color: #ffcb19;
    }
    .custom-home-blogs .post-boxed .list-inline {
        margin-top: 15px;
        font-size: 11px;
        color: #aaaaaa;
    }
    .custom-home-blogs .list-inline > li {
        display: inline-block;
        padding-left: 5px;
        padding-right: 5px;
    }
    .custom-home-blogs .list-inline-dashed li:after {
        content: '|';
        position: relative;
        right: -12.5px;
        color: #e5e7e9;
    }
    .custom-home-blogs .list-inline-dashed li {
        padding-left: 15px;
        padding-right: 10px;
    }
    .custom-home-blogs .post-boxed-title a {
        display: inline;
        color: #25313d;
    }
    .custom-home-blogs .post-boxed-caption {
        padding: 20px 20px 28px;
        border-left: 1px solid #e5e7e9;
        border-right: 1px solid #e5e7e9;
        border-bottom: 1px solid #e5e7e9;
    }
    @media (min-width: 1200px){
        .custom-home-blogs .d-xl-inline-block {
            display: inline-block !important;
        }
    }



    .custom-home-counter h5{
        color: #ffcb19 !important;
    }

    .custom-home-services .icon-box:before, .custom-home-services .icon-box:after{
        display: none;
    }
    .custom-home-services .icon-box {
        padding: 0;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        max-width: 280px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        cursor: default;
    }
    .custom-home-services .icon-box .icon-box-divider {
        position: relative;
        max-width: 100%;
        margin: 15px auto;
        transition: .33s all ease;
        background-color: transparent;
    }
    .custom-home-services .icon-box .icon-box-divider::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        display: inline-block;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #ffcb19;
        animation: .3s animated-state-prev both;
    }
    @media (min-width: 768px){
        .custom-home-services .icon-box {
            max-width: 308px;
            margin-left: auto;
            margin-right: auto;
        }
    }
    .custom-home-services .icon-box .box-icon {
        min-height: 46px;
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }
    .custom-home-services .box-icon span {
        width: 45px;
        height: 45px;
        font-size: 45px;
        line-height: 45px;
        color: #ffcb19;
    }
    .custom-home-services .icon-box.hover .icon-box-divider::after, .custom-home-services .icon-box:hover .icon-box-divider::after {
        animation: .3s animated-state-next both;
    }
    @keyframes animated-state-next {
        0% {
            width: 7px;
            height: 7px;
            border-radius: 50%;
        }

        5% {
            height: 2px;
        }

        100% {
            width: 160px;
            height: 2px;
            border-radius: 0;
        }
    }



    .custom-home-icons .row-40 > *{
        margin-bottom: 0;
    }
    .custom-home-icons{
        margin-top: 0;
    }
    .custom-home-icons .icon-box{
        max-width: 100% !important;
    }
    .custom-home-icons .icon-box {
        padding: 67px 110px 61px;
    }
    .custom-home-icons .icon-box .box-top, .icon-box .box-body {
        position: relative;
        will-change: transform;
        transition: .33s all ease;
        -webkit-filter: blur(0);
    }
    .custom-home-icons .icon-box .box-top {
        top: 0;
    }
    .custom-home-icons .icon-box .box-icon {
        min-height: 46px;
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }
    .custom-home-icons .box-icon .fa {
        width: 45px;
        height: 45px;
        font-size: 45px;
        line-height: 45px;
        color: #ffcb19;
    }
    .custom-home-icons .height-fill {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
    }
    .custom-home-icons .icon-box{
        margin: 0;
    }



    .timeline-new .timeline {
        position: relative;
        padding-left: 4rem;
        margin: 0 0 0 30px;
    }
    .timeline-new .timeline:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background: #ffcb19;
    }

    .timeline-new .timeline .timeline-container {
        position: relative;
        margin-bottom: 2.5rem;
    }
    .timeline-new .timeline .timeline-container .timeline-icon {
        position: absolute;
        left: -63px;
        top: 4px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        text-align: center;
        font-size: 2rem;
        background: #4f537b;
    }
    .timeline-new .timeline .timeline-container .timeline-icon span {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        color: #ffcb19;
    }
    .timeline-new .timeline .timeline-container .timeline-icon img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }
    .timeline-new .timeline .timeline-container .timeline-body {
        border-radius: 3px;
        padding: 20px 20px 15px;
        box-shadow: 1px 3px 9px rgba(0, 0, 0, 0.1);
        background: #fff;
    }
    .timeline-new .timeline .timeline-container .timeline-body:before {
        content: "";
        background: inherit;
        width: 20px;
        height: 20px;
        display: block;
        position: absolute;
        left: -10px;
        transform: rotate(45deg);
        border-radius: 0 0 0 2px;
        
    }
    .timeline-new .timeline .timeline-container .timeline-body p{
        margin: 0;
    }
    .timeline-new .timeline .timeline-container .timeline-body .timeline-title {
        margin-bottom: 0.5rem;
        color: #ffcb19;
    }
    .timeline-new .timeline .timeline-container .timeline-body div{
        margin: 0;
    }
    .timeline-new .timeline .timeline-container .timeline-body .timeline-title .badge {
        background: #4f537b;
        padding: 4px 8px;
        border-radius: 3px;
        font-size: 12px;
        font-weight: bold;
    }
    .timeline-new .timeline .timeline-container .timeline-body .timeline-subtitle {
        font-weight: 300;
        font-style: italic;
        opacity: 0.4;
        margin-top: 16px;
        font-size: 11px;
    }
    .timeline-new .timeline .timeline-container.primary .badge,
    .timeline-new .timeline .timeline-container.primary .timeline-icon {
        background: #1d8cf8 !important;
    }
    .timeline-new .timeline .timeline-container.info .badge,
    .timeline-new .timeline .timeline-container.info .timeline-icon {
        background: #11cdef !important;
    }
    .timeline-new .timeline .timeline-container.success .badge,
    .timeline-new .timeline .timeline-container.success .timeline-icon {
        background: #00bf9a !important;
    }
    .timeline-new .timeline .timeline-container.warning .badge,
    .timeline-new .timeline .timeline-container.warning .timeline-icon {
        background: #ff8d72 !important;
    }
    .timeline-new .timeline .timeline-container.danger .badge,
    .timeline-new .timeline .timeline-container.danger .timeline-icon {
        background: #fd5d93 !important;
    }


    .height-100px{
        height: 100px;
        overflow: hidden;
    }
    .height-auto{
        height: auto !important;
    }
    .angled_section_wrapper.yellow p{
        color:#00030a;
    }
    .angled_section_wrapper.yellow {
        background-color: #fbf7f1;
    }
    .angled_section_wrapper.green {
        background-color: #f1f7e6;
    }
    .angled_section_wrapper.green .col_content .angle {
        background-color: #f1f7e6;
    }
    .angled_section_wrapper.yellow .col_content .angle {
        background-color: #fbf7f1;
    }
    .angled_section_wrapper.blue .col_content .angle {
        background-color: #F0FBFF;
    }
    .angled_section_wrapper .col_content.left {
        padding-right: 50px;
    }
    @media (min-width: 1440px){
        .container.large {
            width: 1350px;
        }
    }
    .angled_section_wrapper .col_content.left .angle {
        left: unset;
    }
    .angled_section_wrapper.blue {
        background-color: #F0FBFF;
    }
    .angled_section_wrapper .col_content .standard_ticks {
        padding-top: 20px;
    }
    .angled_section_wrapper h2{
        font-size: 35px;
        color:#00030a;
    }
    .angled_section_wrapper .col_content>.inner {
        display: table;
        width: 100%;
        max-width: 600px;
        height: 100%;
        position: relative;
        z-index: 2;
    }
    .angled_section_wrapper .col_content>.inner>.inner {
        display: table-cell;
        vertical-align: middle;
    }
    .standard_ticks .feature {
        display: inline-block;
        padding-bottom: 20px;
        vertical-align: top;
        float: left;
    }
    .standard_ticks .feature .the_label {
        vertical-align: top;
        font-size: 16px;
        padding-right: 15px;
        padding-left: 4px;
        color:#00030a;
    }
    .standard_ticks svg {
        max-width: 28px;
        max-height: 28px;
    }
    .standard_ticks[columns="2"] .feature {
        width: 100% !important;
    }
    .standard_ticks .feature .tick {
        width: 36px;
        min-width: 36px;
    }
    .standard_ticks .feature .tick, .standard_ticks .feature .the_label {
        display: table-cell;
    }
    .angled_section_wrapper .col_content>.inner {
        display: table;
        width: 100%;
        max-width: 600px;
        height: 100%;
        position: relative;
        z-index: 2;
    }   
    .angled_section_wrapper .col_content>.inner>.inner {
        display: table-cell;
        vertical-align: middle;
    }
    .angled_section_wrapper.purple .col_content .angle {
        background-color: #F0FBFF;
    }
    .container.large {
        max-width: 100%;
    }
    .angled_section_wrapper .col_content.right .angle {
        right: unset;
        left: 0;
    }
    @media (min-width: 992px){
        .angled_section_wrapper .col_content .angle {
            height: 100%!important;
            top: 0!important;
            margin-top: 0!important;
        }
    }
    .angled_section_wrapper .col_content {
        padding-top: 100px;
        padding-bottom: 100px;
        position: relative;
        z-index: 1;
    }
    .angled_section_wrapper .col_content.right {
        padding-left: 50px;
    }
    .angled_section_wrapper .angle_image_wrap .col_image .background_image {
        position: absolute;
        top: 0;
        left: 0%;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
    }

    .angled_section_wrapper .angle_image_wrap {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 0;
    }

    .angled_section_wrapper .angle_image_wrap .col_image {
        position: relative;
    }
    @media (min-width: 992px){
        .col-md-push-5 {
            left: 41.6666666667%;
        }
    }

    .angled_section_wrapper .col_content .angle {
        -webkit-transform: skewX(-10deg);
        -o-transform: skewX(-10deg);
        transform: skewX(-10deg);
        -webkit-transform-origin: 100% 0;
        -o-transform-origin: 100% 0;
        transform-origin: 100% 0;
        position: absolute;
        background: inherit;
        content: '';
        position: absolute;
        width: 70%;
        z-index: 1;
        -webkit-backface-visibility: hidden;
    }
    

    .bg-yellow {
        background-color: #fbf7f1 !important;
    }
    .bg-l_blue {
        background-color: #F0FBFF !important;
    }

    .child-nav.fixed{
        position: fixed;
        top: 79.812px;
        width: 100%;
        display: table;
        z-index: 9;
        background: #ffcb19;
    }
    .child-nav .nav-link{
        color:#00030a;
        font-size: 16px;
        margin: 0 10px;
        padding-top: 10px !important;
    }
    .child-nav .nav-link.active{
        color:#ffcb19;
        font-weight: 700;
        font-size: 16px;
        border-bottom: 3px solid #ffcb19;   
    }
    .child-nav .navbar-nav{
        margin: 0 auto;
    }
    .child-nav .navbar{
        padding: 0;
    }


    .rd-navbar-corporate-light.rd-navbar-static .rd-navbar-group {
        padding-top: 17px;
        padding-bottom: 17px;
    }
    .table-cus thead tr th{
        background: #fbf9f7!important;
        color:#ffcb19 !important;
    }
    .table-cus tbody tr th:first-child {
        color: #ffcb19 !important;
        background: #fbf9f7!important;
        font-weight: 600;
    }
    .table-cus th{
        color:#00030a;
        font-weight: 800;
    }
    .table-cus td{
        color:#00030a;
        font-weight: 400;
    }
    .table-cus th,.table-cus td{
        size: 14px;
        padding: 8px 15px;
        text-align: left;
        vertical-align: text-top;
        border-color: #f0e4d4 !important;
        line-height: 1;
    }
    /* p{
        font-size: 1.7rem;
    }
    ol li{
        font-size: 1.7rem;
    } */
    .row-item > [class*='col-'] {
        display: flex;
    }
    .ol-number{
        list-style: numbers;
    }
    .ol-number li{
        display: list-item;
    }
    .it-data-section {
        padding: 130px 0;
        overflow: hidden;
    }
    .font-weight-600 {
        font-weight: 600!important;
    }
    .feature-box * {
        transition-duration: .4s;
        -webkit-transition-duration: .4s;
        -moz-transition-duration: .4s;
        -ms-transition-duration: .4s;
    }
    .feature-box .feature-box-content {
        max-width: 100%;
    }
    .feature-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        text-align: center;
        z-index: 1;
        position: relative;
        transition-duration: .4s;
        -webkit-transition-duration: .4s;
        -moz-transition-duration: .4s;
        -ms-transition-duration: .4s;
    }
    .padding-4-rem-all {
        padding: 4rem;
    }
    .bg-white {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-white-rgb),var(--bs-bg-opacity))!important;
    }
    .bg-white {
        background-color: #fff;
    }
    .box-shadow-large, .box-shadow-large-hover:hover {
        box-shadow: 0 0 30px rgba(0,0,0,.08);
        transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -webkit-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
    }
    .feature-box.text-start {
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }
    .margin-5-rem-bottom {
        margin-bottom: 5rem;
    }
    .margin-10px-bottom {
        margin-bottom: 10px;
    }
    .bg-light-gray {
        background-color: #f7f7f7;
    }
    .bg-pink{
        background: #fefbf7;
    }

    .how-we-operate .timeline {
        position: relative;
        margin: -40px auto;
        padding: 40px 0;
        width: 1000px;
        box-sizing: border-box;
    }

    .how-we-operate .timeline:before {
        content: '';
        position: absolute;
        left: 50%;
        width: 2px;
        height: 100%;
        background: #c5c5c5;
    }

    .how-we-operate .timeline ul {
        padding: 0;
        margin: 0;
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .how-we-operate .timeline ul li {
        list-style: none;
        position: relative;
        width: 50%;
        padding: 20px 40px;
        box-sizing: border-box;
    }

    .how-we-operate .timeline ul li:nth-child(odd) {
        float: left;
        text-align: right;
        clear: both;
    }

    .how-we-operate .timeline ul li:nth-child(even) {
        float: right;
        text-align: left;
        clear: both;
    }

    .how-we-operate .content {
        padding-bottom: 20px;
    }

    .how-we-operate .timeline ul li:nth-child(odd):before {
        content: '';
        position: absolute;
        width: 10px;
        height: 10px;
        top: 24px;
        right: -6px;
        background: #ffcb19;
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(233, 33, 99, 0.2);
    }

    .how-we-operate .timeline ul li:nth-child(even):before {
        content: '';
        position: absolute;
        width: 10px;
        height: 10px;
        top: 24px;
        left: -4px;
        background: #ffcb19;
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(233, 33, 99, 0.2);
    }

    .how-we-operate .timeline ul li h3 {
        padding: 0;
        margin: 0;
        color: #ffcb19;
        font-weight: 600;
    }

    .how-we-operate .timeline ul li p {
        margin: 10px 0 0;
        padding: 0;
    }

    .how-we-operate .timeline ul li .time h4 {
        margin: 0;
        padding: 0;
        font-size: 14px;
    }

    .how-we-operate .timeline ul li:nth-child(odd) .time {
        position: absolute;
        top: 12px;
        right: -70px;
        margin: 0;
        padding: 8px 16px;
        background: #ffcb19;
        color: #fff;
        border-radius: 18px;
        box-shadow: 0 0 0 3px #cda214;
    }

    .how-we-operate .timeline ul li:nth-child(even) .time {
        position: absolute;
        top: 12px;
        left: -70px;
        margin: 0;
        padding: 8px 16px;
        background: #ffcb19;
        color: #fff;
        border-radius: 18px;
        box-shadow: 0 0 0 3px #cda214;
    }

    @media(max-width:1000px) {
        .how-we-operate .timeline {
            width: 100%;
        }
    }

    @media(max-width:767px) {
        .how-we-operate .timeline {
            width: 100%;
            padding-bottom: 0;
        }

        .how-we-operate h1 {
            font-size: 40px;
            text-align: center;
        }

        .how-we-operate .timeline:before {
            left: 20px;
            height: 100%;
        }

        .how-we-operate .timeline ul li:nth-child(odd),
        .how-we-operate .timeline ul li:nth-child(even) {
            width: 100%;
            text-align: left;
            padding-left: 50px;
            padding-bottom: 50px;
        }

        .how-we-operate .timeline ul li:nth-child(odd):before,
        .how-we-operate .timeline ul li:nth-child(even):before {
            top: -18px;
            left: 16px;
        }

        .how-we-operate .timeline ul li:nth-child(odd) .time,
        .how-we-operate .timeline ul li:nth-child(even) .time {
            top: -30px;
            left: 50px;
            right: inherit;
        }
    }


    ul,ol{
        padding-left: 20px;
    }
    /* p{
        text-align: justify !important;
    } */
    .-req{
		color: red;
		font-weight: bold;
	}
    .form-control{
        border-radius: 5px;
        background: rgb(249, 250, 250);
        border: 1px solid rgb(181, 189, 196);
        font-size: 16px;
        line-height: 24px;
        padding: 7px 8px;
        color: rgb(8, 9, 10);
        box-shadow: none;
    }
    .form-control:focus{
        background-color: #fff;
        border-color: #ffcb19;
        box-shadow: 1px 1px 0 #ffcb19;
    }
</style>