@extends('front.layouts.app')

@section('main')
    <section class="section-0 lazy d-flex bg-image-style dark align-items-center " class=""
        data-bg="{{ asset('images/nathan-dumlao-xPHmmVKS8lM-unsplash.jpg') }}" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8">
                    <h1>About Us.</h1>
                    {{-- <p style="font-size: 35px">Your gateway to Global Education.</p> --}}
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="ud-about" style="background-color: #438ae0;" data-aos="fade-up" data-aos-delay="250">
        <div class="container">
            <div class="ud-about-wrapper">
                <div class="ud-about-content-wrapper">
                    <div class="ud-about-content ">

                        <h2>About Us</h2>


                        <p>
                            Plus Point Educational Support Services is dedicated to delivering exceptional and precise
                            assistance in the realm of international university admissions, all at no cost to students. Led
                            and operated by a location of educational experts deeply committed to guiding students through
                            the process of securing admission to foreign universities, our mission is to ensure a seamless
                            and successful experience for every aspiring student. We specialize in supporting deserving
                            students in realizing their dreams of studying at prestigious universities worldwide. From
                            assisting with application forms to credential submissions, interview preparation, and securing
                            merit-based scholarships, we provide comprehensive support at every stage of the journey.
                        </p>

                    </div>
                </div>
                <div class="ud-about-image">
                    <img src="{{ asset('images/about-image.svg') }}" alt="about-image" />
                </div>
            </div>
        </div>

    </section>

    <section id="about" class="ud-about">
        <div class="container">
            <div class="ud-about-wrapper" style="background-color: #438ae0;">
                <div class="top-countries py-secondary">
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
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Singapore.svg"
                            alt="image6" />
                        <p>Singapore</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Flag_of_Malaysia.svg"
                            alt="image7" />
                        <p>Malaysia</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/510px-Flag_of_the_United_Arab_Emirates.svg.png"
                            alt="image9" />
                        <p>UAE</p>
                    </div>
                    <div class="each-country">
                        <img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg" alt="image8" />
                        <p>India</p>
                    </div>
                </div>
                <div class="ud-about-content-wrapper" style="color: white; text-align:justify;">
                    <div class="ud-about-content ">
                        <h3 style="color: white; text-align:center;">Top Abroad Destinations</h3>
                        <p>
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






    <section id="about" class="ud-about" style="background-color: #438ae0;">
        <div class="container">
            <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
                <div class="ud-about-content-wrapper">
                    <div class="ud-about-content ">

                        <h6>ACHIEVEMENTS, RECOGNITION & AWARDS</h6>
                        <h2>Bragging Rights</h2>

                        <ul style="font-size: 20px; line-height: 2.5;">
                            <li style="list-style-type: disc;">120+ Top University Partnerships</li>
                            <li style="list-style-type: disc;">Some UK Top 10 & all 7 Irish Universities Work With Us</li>
                            <li style="list-style-type: disc;">Pan India Offices in 9 Key Cities & Counting</li>
                            <li style="list-style-type: disc;">Pan India Offices in 9 Key Cities & Counting</li>
                            <li style="list-style-type: disc;">35,000+ Dreams Conquered</li>
                            <li style="list-style-type: disc;">Member of the British Council & UCAS Accredited</li>
                            <li style="list-style-type: disc;">Education in Ireland Authorized Partner</li>
                            <li style="list-style-type: disc;">99% Ireland Student Visa Success Rate</li>
                        </ul>

                    </div>
                </div>
                <div class="ud-about-image">
                    <img src="{{ asset('images/girl-ToVUSZvt.webp') }}" alt="about-image" />
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="why-plus-point" class="py-5"
        style="background-image: url({{ asset('images/9496304.png') }}); background-position: bottom;">
        <div class="container">
            <div class="row">
                <div class="col-md-12  ud-about-content mt-3">
                    <h2 class="display-6">Conquer Your Dreams</h2>
                </div>
                <div class="container">
                    <p class="mt-2 col-md-8" style="font-size: 22px; line-height: 1.5; font-weight: bold;">At Plus Point, we
                        uphold the highest standards of educational advising, ensuring accuracy and excellence to facilitate
                        a seamless and successful experience for your admission to foreign universities. With a team of
                        expert counsellors boasting decades of relevant experience, Plus Point stands as your trusted ally
                        in the pursuit of securing admission to your desired foreign university.</p>
                    <div style="height: 300px;"></div>
                </div>

            </div>
        </div>
    </section>
@endsection
