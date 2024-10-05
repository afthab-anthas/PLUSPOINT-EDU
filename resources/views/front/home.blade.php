@extends('front.layouts.app')

@section('main')

    <section class="section-0 lazy d-flex bg-image-style dark align-items-center" data-bg="{{ asset('assets/images/banner5.jpg') }}"  data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8">
                    <h1 class="mb-0 " data-aos="fade-right" data-aos-delay="400" data-aos-duration="600">Plus Point Education</h1>
                    <p class="fw-bold" data-aos="fade-right" data-aos-delay="500" data-aos-duration="600">Your gateway to global education.</p>
                    <div data-aos="fade-right" data-aos-delay="600" data-aos-duration="600">
                        <a class="btn btn-primary btn-lg px-4 py-2 me-sm-3 fs-6 fw-bolder" href="#about"
                            data-bs-toggle="scroll" data-bs-target="#about" data-bs-offset="100"
                            data-bs-duration="800">Learn More</a>
                        @if (!Auth::check())
                            <a class="btn btn-secondary text-white btn-outline-dark btn-lg px-4 py-2 fs-6 fw-bolder"
                                href="{{ route('account.registration') }}">Register Here</a>
                        @else
                            <a class="btn btn-secondary text-white btn-outline-dark btn-lg px-4 py-2 fs-6 fw-bolder"
                                href="{{ route('account.profile') }}">My Account</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="ud-about" style="background-color: #438ae0;" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
        <div class="container">
            <div class="ud-about-wrapper">
                <div class="ud-about-content-wrapper" style="text-align:justify;">
                    <div class="ud-about-content" data-wow-delay=".2s">

                        <h2>About Us</h2>


                        <p>
                            Plus Point Educational Support Services is dedicated to delivering exceptional and precise
                            assistance in the realm of international university admissions, all at no cost to students. Led
                            and operated by a team of educational experts deeply committed to guiding students through
                            the process of securing admission to foreign universities, our mission is to ensure a seamless
                            and successful experience for every aspiring student. We specialize in supporting deserving
                            students in realizing their dreams of studying at prestigious universities worldwide. From
                            assisting with application forms to credential submissions, interview preparation, and securing
                            merit-based scholarships, we provide comprehensive support at every stage of the journey.
                        </p>

                    </div>
                </div>
                <div class="ud-about-image" data-aos="fade-left" data-aos-delay="400" data-aos-duration="600">
                    <img src="{{ asset('images/girl-ToVUSZvt.webp') }}" alt="about-image" />
                </div>
            </div>
        </div>

    </section>


    <section id="location" class="ud-about">
        <div class="container">
            <div class="ud-about-wrapper" style="background-color: #438ae0;">
                <div class="top-countries py-secondary" data-aos="fade-in" data-aos-duration="1500">
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg"
                            alt="image1" />
                        <p>UK</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg" alt="image2" />
                        <p>Germany</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Flag_of_Romania.svg" alt="image3" />
                        <p>Romania</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/en/c/cf/Flag_of_Canada.svg" alt="image4" />
                        <p>Canada</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/en/b/b9/Flag_of_Australia.svg" alt="image5" />
                        <p>Australia</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/510px-Flag_of_Russia.svg.png"
                            alt="image6" />
                        <p>Russia</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/1600px-Flag_of_Ireland.svg.png"
                            alt="image7" />
                        <p>Ireland</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/510px-Flag_of_the_United_Arab_Emirates.svg.png"
                            alt="image9" />
                        <p>UAE</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Flag_of_the_United_States_%28DoS_ECA_Color_Standard%29.svg/510px-Flag_of_the_United_States_%28DoS_ECA_Color_Standard%29.svg.png" alt="image8" />
                        <p>US</p>
                    </div>
                </div>
                <div class="ud-about-content-wrapper" style="color: white; text-align:justify;" data-aos="fade-in"
                    data-aos-duration="1500">
                    <div class="ud-about-content ">
                        <h3 style="color: white; text-align:center;">Top Abroad Destinations</h3>
                        <p class="text-center">
                            India - Nepal - Bangladesh - Sri Lanka - United Arab Emirates - Uganda - Ghana - Nigeria - South
                            Africa
                        </p>

                        <p>
                            Plus Point Educational Support Services operates across multiple regions, including the UK,
                            Germany, Romania, Canada, Australia, New Zealand, Singapore, Malaysia, UAE, and India. These
                            locations are strategically chosen to provide students with access to top educational
                            institutions around the world. Our presence in these key countries ensures that students receive
                            the best guidance and support tailored to the specific requirements and opportunities of each
                            destination, making their journey to international education as smooth and successful as
                            possible.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="banner-text" style="background-color: #f3f4fe;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-md-4" data-aos="fade-right" data-aos-duration="800">
                    <h1 class="text-warning animate__animated animate__slideInLeft">500+</h1>
                    <p class="font-weight-bold animate__animated animate__slideInLeft">Students Supported</p>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="800">
                    <h1 class="text-warning animate__animated animate__slideInUp">100%</h1>
                    <p class="font-weight-bold animate__animated animate__slideInUp">Success Rate</p>
                </div>
                <div class="col-md-4" data-aos="fade-left" data-aos-duration="800">
                    <h1 class="text-warning animate__animated animate__slideInRight">50+</h1>
                    <p class="font-weight-bold animate__animated animate__slideInRight">Universities Partnered</p>
                </div>
            </div>
        </div>
    </section>

    <section id="bragging-rights" class="ud-about" style="background-color: #438ae0;">
        <div class="container">
            <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
                <div class="ud-about-content-wrapper">
                    <div class="ud-about-content ">

                        <h6>ACHIEVEMENTS, RECOGNITION & AWARDS</h6>
                        <h2>Bragging Rights</h2>

                        <ul style="font-size: 20px; line-height: 2.5;" data-aos="fade-in" data-aos-duration="1500">
                            <li style="list-style-type: disc;">120+ Top University Partnerships</li>
                            <li style="list-style-type: disc;">Most of Top UK & all Irish Universities Work With Us</li>
                            <li style="list-style-type: disc;">Pan India Offices in 9 Key Cities & Counting</li>
                            <li style="list-style-type: disc;">Member of the British Council & UCAS Accredited</li>
                            <li style="list-style-type: disc;">Education in Ireland Authorized Partner</li>
                            <li style="list-style-type: disc;">99% Ireland Student Visa Success Rate</li>
                        </ul>

                    </div>
                </div>
                <div class="col-xxl-7 ud-about-image " data-aos="fade-left" data-aos-delay="400" data-aos-duration="600">
                    <div class="d-flex justify-content-center mt-5 mt-xxl-5">
                        <div class="profile bg-gradient-primary-to-secondary" >
                            <img class="profile-img"  src="{{ asset('images/young-college-student.png') }}" alt="..."  />
                            <div class="dots-1">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                    style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                            <div class="dots-2">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                    style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                            <div class="dots-3">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                    style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                            <div class="dots-4">
                                <!-- SVG Dots-->
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 191.6 1215.4"
                                    style="enable-background: new 0 0 191.6 1215.4" xml:space="preserve">
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
                                        <path
                                            d="M227.7,12788.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,12801.6,289.7,12808.6,227.7,12788.6z">
                                        </path>
                                        <path
                                            d="M1507.7,12788.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,12801.6,1569.7,12808.6,1507.7,12788.6z">
                                        </path>
                                        <path
                                            d="M227.7,11508.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,11521.6,289.7,11528.6,227.7,11508.6z">
                                        </path>
                                        <path
                                            d="M1507.7,11508.6c-151-50-253-216-222-362c25-119,136-230,254-255c194-41,395,142,375,339c-11,105-90,213-190,262        C1663.7,11521.6,1569.7,11528.6,1507.7,11508.6z">
                                        </path>
                                        <path
                                            d="M227.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,10241.6,289.7,10248.6,227.7,10228.6z">
                                        </path>
                                        <path
                                            d="M1507.7,10228.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,10241.6,1569.7,10248.6,1507.7,10228.6z">
                                        </path>
                                        <path
                                            d="M227.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,8961.6,289.7,8968.6,227.7,8948.6z">
                                        </path>
                                        <path
                                            d="M1507.7,8948.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,8961.6,1569.7,8968.6,1507.7,8948.6z">
                                        </path>
                                        <path
                                            d="M227.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,7681.6,289.7,7688.6,227.7,7668.6z">
                                        </path>
                                        <path
                                            d="M1507.7,7668.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,7681.6,1569.7,7688.6,1507.7,7668.6z">
                                        </path>
                                        <path
                                            d="M227.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,6401.6,289.7,6408.6,227.7,6388.6z">
                                        </path>
                                        <path
                                            d="M1507.7,6388.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,6401.6,1569.7,6408.6,1507.7,6388.6z">
                                        </path>
                                        <path
                                            d="M227.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,5121.6,289.7,5128.6,227.7,5108.6z">
                                        </path>
                                        <path
                                            d="M1507.7,5108.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,5121.6,1569.7,5128.6,1507.7,5108.6z">
                                        </path>
                                        <path
                                            d="M227.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,3841.6,289.7,3848.6,227.7,3828.6z">
                                        </path>
                                        <path
                                            d="M1507.7,3828.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,3841.6,1569.7,3848.6,1507.7,3828.6z">
                                        </path>
                                        <path
                                            d="M227.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,2561.6,289.7,2568.6,227.7,2548.6z">
                                        </path>
                                        <path
                                            d="M1507.7,2548.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,2561.6,1569.7,2568.6,1507.7,2548.6z">
                                        </path>
                                        <path
                                            d="M227.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C383.7,1281.6,289.7,1288.6,227.7,1268.6z">
                                        </path>
                                        <path
                                            d="M1507.7,1268.6c-105-35-200-141-222-248c-43-206,163-412,369-369c155,32,275,190,260,339c-11,105-90,213-190,262        C1663.7,1281.6,1569.7,1288.6,1507.7,1268.6z">
                                        </path>
                                    </g>
                                </svg>
                                <!-- END of SVG dots-->
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
        </div>
    </section>



    <section id="dreams" class="py-5"
        style="background-image: url({{ asset('images/9496304.png') }}); background-position: bottom; background-repeat: no-repeat;"">
        <div class="container">
            <div class="row" data-aos="fade-in" data-aos-duration="1500">
                <div class="col-md-12  ud-about-content mt-3">
                    <h2 class="display-6">Conquer Your Dreams</h2>
                </div>
                <div class="container">
                    <p class="mt-2 col-md-8 fw-bold" style="font-size: 22px; line-height: 1.5;">At Plus Point, we uphold
                        the highest standards of educational advising, ensuring accuracy and excellence to facilitate a
                        seamless and successful experience for your admission to foreign universities. With a team of expert
                        counsellors boasting decades of relevant experience, Plus Point stands as your trusted ally in the
                        pursuit of securing admission to your desired foreign university.</p>
                    <div style="height: 300px;"></div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-2 bg-2 py-5"
        style="background-image: url({{ asset('images/line-bg.png') }}); background-position: center; background-size: contain; background-repeat: no-repeat;"">
        <div class="container" style="padding-bottom: 50px;">
            <h2>Latest Posts</h2>
            <div class="row pt-5 ">
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory card" style="background-color: #438ae0; border-radius: 20px;">
                        <a href="{{ route('blog.show', 5) }}">
                            <h4 class="pb-0 text-white text-truncate-2">Exploring Life in the UAE: A Tapestry of Luxury, Middle Class, and Low Class</h4>
                        </a>
                        <img class="img-fluid rounded" style="object-fit: cover; height: 150px; width: 100%;" src="{{ asset('images/blogs-images/1685773811_exploring-life-in-the-uae-a-tapestry-of-luxury-middle-class-and-low-class.jpg') }}" alt="image" />
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory card" style="background-color: #438ae0; border-radius: 20px;">
                        <a href="{{ route('blog.show', 10) }}">
                            <h4 class="pb-0 text-white text-truncate-2">Mastering the Job Market: Your Ultimate Guide to UAE </h4>
                        </a>
                        <img class="img-fluid rounded" style="object-fit: cover; height: 150px; width: 100%;" src="{{ asset('images/blogs-images/1701695819_mastering-the-job-market-your-ultimate-guide-to-uae-recruitment.jpg') }}" alt="image" />
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory card" style="background-color: #438ae0; border-radius: 20px;">
                        <a href="{{ route('blog.show', 15) }}">
                            <h4 class="pb-0 text-white text-truncate-2">Beyond the Desk: Unpacking the Rise and Future of White-Collar Temp Roles</h4>
                        </a>
                        <img class="img-fluid rounded" style="object-fit: cover; height: 150px; width: 100%;" src="{{ asset('images/blogs-images/1707223256_beyond-the-desk-unpacking-the-rise-and-future-of-white-collar-temp-roles.jpg') }}" alt="culinary-image" />
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory card" style="background-color: #438ae0; border-radius: 20px;">
                        <a href="{{ route('blog.show',11) }}">
                            <h4 class="pb-0 text-white text-truncate-2">Elevate Your Organization with Expert Recruitments: A Leader in Talent Solutions</h4>
                        </a>
                        <img class="img-fluid rounded" style="object-fit: cover; height: 150px; width: 100%;" src="{{ asset('images/blogs-images/1707552262_elevate-your-hiring-process-with-innovative-recruitment-methods.jpg') }}" alt="culinary-image" />
                    </div>
                </div>
            </div>
        </div>
    </section>


{{-- Disabled Search Bar Section --}}
    {{-- <section class="section-1 bg-2 py-5 ">
        <div class="container">
            <div class="card border-0 shadow p-5">
                <div class="row">
                    <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                        <input type="text" class="form-control" name="search" id="search"
                            placeholder="University">
                    </div>
                    <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                        <input type="text" class="form-control" name="search" id="search"
                            placeholder="Location">
                    </div>
                    <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                        <select name="category" id="category" class="form-control">
                            <option value="">Select a Discpline</option>
                            <option value="">Engineering and Technology</option>
                            <option value="">Sciences</option>
                            <option value="">Arts</option>
                            <option value="">Business, Management and Economics</option>
                            <option value="">Law, Politics, Social, Community Service and Teaching</option>
                            <option value="">English for Academic Studies</option>
                            <option value="">Health Sciences, Medicine, Nursing, Paramedic and Kinesiology</option>
                            <option value="">Elementary and High School</option>
                        </select>
                    </div>

                    <div class=" col-md-3 mb-xs-3 mb-sm-3 mb-lg-0">
                        <div class="d-grid gap-2">
                            <a href="jobs.html" class="btn btn-primary btn-block">Search</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    
@endsection
