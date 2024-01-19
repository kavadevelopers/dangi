@extends('web.layouts.main')

@section('content')


<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="background-image: url({{ url('themes/web/images/blog-grid-5-570x253.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2>{{ $_title }}</h2>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 novi-background">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            <div class="col-md-6 col-xl-6 text-secondary">
                <img src="{{ url('themes/images/home-training.jpg') }}" />
            </div>
            <div class="col-md-6 col-xl-6 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <br>
                    <h4 class="text-secondary">Welcome to Dangi Training, your gateway to a successful career in accounting!</h4>
                    <p>We understand the challenges that individuals face in the accounting field and are here to bridge the gap with our comprehensive training programs. Our courses, led by expert faculties, including chartered accountants, are designed to take you from the fundamentals to advanced levels, ensuring you are well-equipped for practical job roles in the market.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light-gray wow animate__fadeIn it-data-section" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="inset-md-left-50">
                    <h4 class="text-center">Courses Offered</h4>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Certified Expert Accountant Course</h6>
                        <div style="margin-left: 20px;">
                            <p><strong>Foundational Understanding</strong></p>
                            <p style="margin-top: 0;">Master the fundamentals of accounting, including practical working with Tally ERP 9 and other similar softwares.</p>
                        </div>
                        <div style="margin-left: 20px; margin-top:20px;">
                            <p><strong>Taxation Expertise</strong></p>
                            <p style="margin-top: 0;">Gain insights into income tax, TDS, indirect tax (Goods &amp; Service Tax), professional tax, PF, and ESI to handle diverse financial scenarios.</p>
                        </div>
                        <div style="margin-left: 20px; margin-top:20px;">
                            <p><strong>Financial Management</strong></p>
                            <p style="margin-top: 0;">Learn about banking, MIS reporting, auditing, company law, and the essentials of import & export.</p>
                        </div>
                        <div style="margin-left: 20px; margin-top:20px;">
                            <p><strong>Soft Skills and Personality Development</strong></p>
                            <p style="margin-top: 0;">Develop not only technical expertise but also enhance your soft skills for professional success.</p>
                        </div>
                        <div style="margin-left: 20px; margin-top:20px;">
                            <p><strong>Job Assurance</strong></p>
                            <p style="margin-top: 0;">Our Certified Expert Accountant Course comes with a 100% job assurance guarantee.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Online Live and Offline Courses Available</h6>
                        <div style="margin-left: 20px;">
                            <p><strong>Online Course</strong></p>
                            <p style="margin-top: 0;">Accessible from anywhere, our online courses provide flexibility. All you need is a computer setup to embark on your learning journey.</p>
                        </div>
                        <div style="margin-left: 20px; margin-top:20px;">
                            <p><strong>Offline Course</strong></p>
                            <p style="margin-top: 0;">Join us in person for a traditional classroom experience. Immerse yourself in a focused and interactive learning environment.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 novi-background">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-6 text-secondary">
                <img src="{{ url('themes/images/why-placement.jpg') }}" />
            </div>
            <div class="col-md-6 col-xl-6 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <br>
                    <h4>Why Choose Us</h4>
                    <p><strong>Expert Faculty : </strong> Learn from industry professionals and chartered accountants who bring real-world experience to the classroom.</p>
                    <p><strong>Job Placement Services : </strong> As a part of our commitment to your success, we offer HR placement services, ensuring you find the right job with the right salary.</p>
                    <p><strong>Global Opportunities : </strong> Explore offshore accountant services with job placements in countries like the UK, US, Australia, Canada, and more.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light-gray wow animate__fadeIn it-data-section" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-6 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <br>
                    <h4>Our Verticals</h4>
                    <p><strong>Accounting and Taxation Consultancy : </strong> Rely on our expertise for sound financial advice and efficient tax planning.</p>
                    <p><strong>HR Placement Services : </strong> We connect skilled accountants with the right employers, fostering a mutually beneficial partnership.</p>
                    <p><strong>Offshore Accountant Services : </strong> Join our elite team providing accounting services to clients around the globe.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 text-secondary">
                <img src="{{ url('themes/images/our-v-traning.jpg') }}" />
            </div>
        </div>
    </div>
</section>

@stop