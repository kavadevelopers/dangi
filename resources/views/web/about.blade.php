@extends('web.layouts.main')

@section('content')


<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="background-image: url({{ url('themes/web/images/bg-image-8.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2>About us</h2>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 novi-background">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            <div class="col-md-12 col-xl-12 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <p>Welcome to Dangi Global, your premier destination for comprehensive and innovative offshoring solutions. As a global leader, we specialize in providing offshoring services tailored to meet the unique needs of accounting firms located outside India. Our cutting-edge approach revolves around two distinctive models designed to maximize your efficiency and minimize costs.</p>
                    <p>In the first model, we offer flexibility through a per-hour rate structure, allowing you to appoint and place candidates based on your specific requirements. Our dedicated team ensures seamless integration with your operations, providing skilled professionals to support your business processes.</p>
                    <p>In the second model, we redefine transparency in offshoring. By disclosing the candidate's salary to you, we empower you to access top-tier talent at a significantly reduced cost compared to traditional offshoring. We charge transparently for candidate placement, infrastructure, employee responsibilities, and benefits, combining the employee's salary with our fees. This unique approach gives you unparalleled insight into your team's costs and fosters a true partnership built on openness and clarity.</p>
                    <p>But that's not all. Dangi Global goes beyond offshoring – we are your one-stop destination for training, placement, and consultancy services in India. Our holistic ecosystem is designed to elevate your experience, ensuring excellence in every aspect of your journey. Whether you're looking for skilled professionals, comprehensive training programs, or strategic consulting, we've got you covered.</p>
                    <p>Discover a new era of offshoring with Dangi Global, where innovation meets transparency, and excellence is the standard. Join us in building a global ecosystem that redefines success in training, placement, and consulting. Your journey to unparalleled efficiency starts here. Welcome to the future of offshoring and business excellence.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-60 section-md-90 bg-athens-gray bg-image bg-image-1 novi-background" style="background-image: url(images/about-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="inset-md-left-50">
                    <h3>Why Choose Us</h3>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-12">
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="inset-md-left-30 inset-md-right-30">
                    <ul class="list-xl">
                        <li>
                            <article class="icon-box-horizontal">
                                <div class="unit unit-spacing-md">
                                    <div class="unit-left"><span class="novi-icon icon icon-primary icon-md fa-leanpub"></span></div>
                                    <div class="unit-body">
                                        <h5><a href="#">Our Vision</a></h5>
                                        <p>To become the global leader in transformative offshoring solutions, shaping the future of business excellence through innovation, transparency, and a commitment to fostering meaningful partnerships. We envision a world where organizations seamlessly leverage top-tier talent from around the globe, maximizing efficiency and propelling them towards unprecedented success.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="icon-box-horizontal">
                                <div class="unit unit-spacing-md">
                                    <div class="unit-left"><span class="novi-icon icon icon-primary icon-md fa fa-gg-circle"></span></div>
                                    <div class="unit-body">
                                        <h5><a href="#">Our Mission</a></h5>
                                        <p>Our mission is to redefine the offshoring landscape by providing dynamic and transparent solutions that transcend traditional boundaries. We are dedicated to empowering businesses worldwide with the flexibility to choose between hourly rates and transparent cost structures, ensuring unparalleled access to skilled professionals at competitive prices. Through our comprehensive ecosystem, we aim to not only meet but exceed the evolving needs of our clients, fostering a culture of excellence, transparency, and collaboration. As we expand globally, our mission is to be the catalyst for positive change, driving success for businesses, professionals, and communities alike.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-60 section-md-100 novi-background bg-black">
    <div class="container">
        <div class="row row-40">
            <div class="col-sm-6 col-md-3">
                <div class="box-counter">
                    <span class="novi-icon icon icon-md icon-primary material-icons-content_copy"></span>
                    <div class="text-large counter">58249</div>
                    <h5 class="box-header">templates</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter">
                    <span class="novi-icon icon icon-md icon-primary material-icons-mood"></span>
                    <div class="text-large counter counter-k">246</div>
                    <h5 class="box-header">happy clients</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter">
                    <span class="novi-icon icon icon-md icon-primary material-icons-access_time"></span>
                    <div class="text-large counter">1200</div>
                    <h5 class="box-header">hours of coding</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter">
                    <span class="novi-icon icon icon-md icon-primary material-icons-code"></span>
                    <div class="text-large counter counter-k">834</div>
                    <h5 class="box-header">lines of code</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-60 section-md-100 bg-accent novi-background">
    <div class="container text-center text-lg-start">
        <div class="row row-30 align-items-md-center justify-content-lg-center">
            <div class="col-lg-8 col-xl-7">
                <h3>Need to know more</h3>
            </div>
            <div class="col-lg-4 col-xl-3"><a class="btn btn-xl btn-black-outline" href="{{ url('contact-us') }}" target="_blank">Enquire here</a></div>
        </div>
    </div>
</section>
@stop