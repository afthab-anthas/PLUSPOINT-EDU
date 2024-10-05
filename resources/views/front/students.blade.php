@extends('front.layouts.app')

@section('main')



<section class="section-0 lazy d-flex bg-image-style dark align-items-center" data-bg="{{ asset('assets/images/banner5.jpg') }}"  data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <h1 data-aos="fade-right" data-aos-delay="400" data-aos-duration="600">Plus Point Students Page</h1>
                <p class="fw-normal" data-aos="fade-right" data-aos-delay="500" data-aos-duration="600">The next step to your future.</p>
                <div class=""><a href="{{ route('home') }}" class="btn btn-primary btn-lg px-4 py-2 me-sm-3 fs-6 fw-bolder" data-aos="fade-right" data-aos-delay="600" data-aos-duration="600">Explore Now</a></div>
            </div>
        </div>
    </div>
    
</section>






    <section id="about" class="ud-about bg-light" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
        <div class="container">
            <div class="ud-about-wrapper">
                <div class="ud-about-content-wrapper">
                    <div class="ud-about-content" data-wow-delay=".2s" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">

                        <h2 >Discover Your Path to Success with Plus Point</h2>


                        <p data-aos="fade-in" data-aos-duration="1500" class="fw-normal" style="text-align:justify;">
                            At Plus Point Educational Support Services, we’re here to make your dream of studying at a top
                            international university a reality without any cost to you. Our dedicated team of education
                            experts is committed to guiding you through every step of the admission process. From filling
                            out applications and submitting credentials to preparing for interviews and securing
                            scholarships, we offer personalized support tailored to your needs. Our mission is to ensure you
                            have a smooth and successful journey to achieving your educational goals. Let us help you turn
                            your aspirations into achievements with ease and confidence.
                        </p>

                    </div>
                </div>
                <div class="col-xxl-7 ud-about-image " data-aos="fade-left" data-aos-delay="400" data-aos-duration="600">
                    <div class="d-flex justify-content-center mt-5 mt-xxl-5">
                        <div class="profile bg-gradient-primary-to-secondary" >
                            <img class="profile-img"  src="{{ asset('images/young-college-student2.png') }}" alt="..."  />
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

    </section>

    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h3 class="display-5 fw-bolder"><span class="text-gradient-secondary d-inline">Why Us?</span></h3>
                        <p class="lead fw-light mb-4">Because we turn your aspirations into reality with tailored support
                            &amp; guidance.</p>
                        <p class="text-muted">We believe in your dreams and are dedicated to making them come true. We’ll
                            help you find and apply to programs and institutions that perfectly match your background,
                            skills, and interests. Our mission is to ensure you connect with the right opportunities for
                            your future success. Let us be your guide in turning your aspirations into achievements.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient-secondary d-inline">Next step?</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    
                    <section>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h3 class="text-primary fw-bolder mb-0 ">Complete Your Profile</h3>
                            <a class="btn btn-primary btn-lg  me-sm-3 fs-6 fw-bolder"
                                href="{{ route('account.registration') }}" type="submit">Register</a>
                        </div>
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <img src="{{ asset('images/register.png') }}" alt="about-image" />
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h4 class="text-primary fw-bolder mb-0 ">
                                                <a href="{{ route('account.registration') }}"
                                                    class="text-decoration-none text-primary">Register Now</a>
                                            </h4>
                                        </div>
                                        <div>We'll find the best study programs tailored to you. Just complete your
                                            registeration to answer a few questions about you and your education goals. What
                                            do you want to study? Where do you dream of living?</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0 mt-2">
                                        <div class="bg-light p-4 rounded-4">
                                            <img src="{{ asset('images/select.png') }}" alt="about-image" />
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h4 class="text-primary fw-bolder mb-0">
                                                <a href="jobs.html"
                                                    class="text-decoration-none text-primary">Select A Program</a>
                                            </h4>
                                        </div>
                                        <div>Take your time to explore and compare programs based on campus location,
                                            tuition, and other factors with PlusPoint. Once you’re ready to apply, simply
                                            sign up with your email address if you haven’t already. PlusPoint is completely
                                            free to use; the only expense you might incur is the application fee charged by
                                            the university or college, if applicable.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <img src="{{ asset('images/submit.png') }}" alt="about-image" />
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h4 class="text-primary fw-bolder mb-0 ">
                                                <a href="{{ route('account.registration') }}"
                                                    class="text-decoration-none text-primary">Submit Your Application</a>
                                            </h4>
                                        </div>
                                        <div>We’ll ensure that you have all the necessary documents and review them for
                                            quality, so you can submit your application with confidence.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pb-5"></div>

                        <section>

                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">

                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div
                                                class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                                <i class="bi bi-geo-alt"></i>
                                            </div>
                                            <h3 class="fw-bolder mb-0 mt-3"><span
                                                    class="text-gradient-secondary d-inline">Our Branches</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0">
                                                <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">India
                                                </div>
                                            </div>
                                            <div class="col mb-4 mb-md-0">
                                                <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">United
                                                    Arab Emirates</div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">South
                                                    Africa</div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0">
                                                <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Sri
                                                    Lanka</div>
                                            </div>
                                            <div class="col mb-4 mb-md-0">
                                                <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                    Australia</div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">United
                                                    Kingdom</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div
                                                class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                                <i class="bi bi-linkedin"></i>
                                            </div>
                                            <a href="https://www.linkedin.com/company/expertlaborsupplyservices/"
                                                target="blank" class="text-decoration-none">
                                                <h3 class="fw-bolder mb-0 mt-3"><span
                                                        class="text-gradient-secondary d-inline">Connect With Us</span>
                                                </h3>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                </div>
            </div>
        </div>
    </section>
@endsection
