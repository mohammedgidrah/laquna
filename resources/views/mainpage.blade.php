@extends('home')

@section('content')
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10">
                    <div class="block">
                        {{-- <span class="d-block mb-3 text-white text-capitalize">A mint of creativity</span> --}}
                        <h1 class="animated fadeInUp mb-5">Where your <br> vision meets striking <br>transformative designs
                        </h1>
                        <a href="{{ url('contact') }}" target="_blank"
                            class="btn btn-main animated fadeInUp btn-round-full">Get
                            started<i class="btn-icon fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Intro Start -->

    <section class="section intro">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="h6 text-color ">We are visionary minds and masterful creators</span>
                        <h2 class="mt-3 content-title">
                            Your brand thrives in expert hands
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="intro-item mb-5 mb-lg-0">
                        <i class="ti-medall color-one"></i>

                        <h4 class="mt-4 mb-3">First Retail Branding Agency in Aqaba </h4>
                        <p> Aqaba’s first retail branding agency since 2019, specializing in bringing brands to life.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-item mb-5 mb-lg-0">
                        <i class="ti-desktop color-one"></i>
                        {{-- <i class="ti-medall color-one"></i> --}}
                        <h4 class="mt-4 mb-3">Web Design is Our Speciality </h4>
                        <p>Crafting exceptional websites that captivate and convert—web design is our expertise. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-item">
                        <i class="ti-layers-alt color-one"></i>
                        <h4 class="mt-4 mb-3"> Event Production, Photography, and Videography Excellence</h4>
                        <p>Delivering seamless event experiences while capturing every moment with professional photography
                            and videography </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Intro END -->
    <!-- Section About Start -->

    <section class="section about position-relative">
        <div class="bg-about"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 offset-md-0">
                    <div class="about-item ">
                        <span class="h6 text-color">Our Identity</span>
                        <h2 class="mt-3 mb-4 position-relative content-title">A dynamic team of innovative professionals.
                        </h2>
                        <div class="about-content">
                            <h4 class="mb-3 position-relative">The ideal solution for your needs.</h4>
                            <p class="mb-5">As the ideal solution for your needs, we combine expertise, creativity, and
                                innovation to deliver exceptional results. Whether it’s branding, design, or event
                                management, our team ensures your vision is brought to life with precision and impact.</p>

                            <a href="{{ url('contact') }}" class="btn btn-main btn-round-full">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About End -->
    <!-- section Counter Start -->
    <section class="section counter">
        <div class="container">
            <div class="row" style="display: flex; justify-content: center;">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">200</span> +</h3>
                        <p class="text-muted">Project Done</p>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">4 </span> </h3>
                        <p class="text-muted">Countries Worldwide</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center mb-5 mb-lg-0">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">3</span></h3>
                        <p class="text-muted">Availble Country</p>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-item text-center">
                        <h3 class="mb-0"><span class="counter-stat font-weight-bold">50</span></h3>
                        <p class="text-muted">Clients </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section Counter End  -->
    <!--  Section Services Start -->
    <section class="section service border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">Our Services</span>
                        <h2 class="mt-3 content-title ">A comprehensive suite of creative services, tailored to meet
                            diverse needs.</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5 mb-lg-0" style="display: flex; padding-top: 13px; align-items: center;">
                        <i class="ti-vector"></i>
                        <h4>Branding</h4>
                        <p> </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5 mb-lg-0" style="display: flex; padding-top: 13px; align-items: center;">
                        <i class="fa fa-share-alt"></i>
                        <h4 class="mb-3">Social Media</h4>
                        <p> </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5 mb-lg-0" style="display: flex; padding-top: 13px; align-items: center;">
                        <i class="fa fa-paint-brush"></i>
                        <h4 class="mb-3"> Graphic Design </h4>
                        <p> </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" style="padding-top: 35px;">
                    <div class="service-item mb-5 mb-lg-0" style="display: flex; padding-top: 13px; align-items: center;">
                        <i class="fa fa-camera"></i>
                        <h4 class="mb-3">Photography & Videography </h4>
                        <p> </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" style="padding-top: 35px;">
                    <div class="service-item mb-5" style="display: flex; padding-top: 13px; align-items: center;">
                        <i class="ti-layers"></i>
                        <h4 class="mb-3">Events </h4>
                        <p> </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" style="padding-top: 35px;">
                    <div class="service-item mb-5" style="display: flex; padding-top: 13px; align-items: center; ">
                        <i class="fa fa-cogs"></i>
                        <h4 class="mb-3"> Wood Manufacturing</h4>
                        <p> </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5" style="display: flex; padding-top: 13px; align-items: center;">
                        <i class="ti-desktop"></i>
                        <h4 class="mb-3">Web development</h4>
                        <p> </p>
                    </div>
                </div>






                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5 mb-lg-0" style="display: flex; padding-top: 13px; align-items: center;">
                        <i class="ti-pencil-alt"></i>
                        <h4 class="mb-3">Content creation</h4>
                        <p> </p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-5 mb-lg-0" style="display: flex; padding-top: 13px; align-items: center;">
                        <i class="fa fa-bullhorn"></i>
                        <h4 class="mb-3">Advertising</h4>
                        <p> </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--  Section Services End -->
    <!-- Section Cta Start -->
    <section class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cta-item  bg-white p-5 rounded">
                        <h2 class="mt-2 mb-4">Entrust Your Project to our Best Team of Professionals</h2>
                        <p class="lead mb-4">Have any project on mind? For immidiate support :</p>
                        <h3><i class="ti-mobile mr-3 text-color"></i>+962 797992323 </h3>
                        <span style="padding-left: 5px"> <i class="fa fa-envelope mr-2 color-one"></i><a
                                href="mailto:leensabti@lagunavco.com"> <span
                                    style="padding-left: 10px">leensabti@lagunavco.com</span></a>
                        </span>
                        {{-- <a href="mailto:leensabti@lagunavco.com" ><i class="fa fa-envelope mr-2"></i><span>leensabti@lagunavco.com</span></a> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Section Cta End-->
    <!-- Section Testimonial Start -->
    {{-- <section class="section testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ">
                    <div class="section-title">
                        <span class="h6 text-color">Clients testimonial</span>
                        <h2 class="mt-3 content-title">Check what's our clients say about us</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row testimonial-wrap">
                <div class="testimonial-item position-relative">
                    <i class="ti-quote-left text-color"></i>

                    <div class="testimonial-item-content">
                        <p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error
                            alias debitis atque consequuntur natus iusto recusandae numquam corrupti facilis
                            blanditiis.</p>

                        <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">Thomas Johnson</h5>
                            <p>Excutive Director,themefisher</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative">
                    <i class="ti-quote-left text-color"></i>

                    <div class="testimonial-item-content">
                        <p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis
                            temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae
                            .</p>

                        <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">Mickel hussy</h5>
                            <p>Excutive Director,themefisher</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative">
                    <i class="ti-quote-left text-color"></i>

                    <div class="testimonial-item-content">
                        <p class="testimonial-text">Quam maiores perspiciatis temporibus odio reiciendis error
                            alias debitis atque consequuntur natus iusto recusandae numquam corrupti.</p>

                        <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">James Watson</h5>
                            <p>Excutive Director,themefisher</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative">
                    <i class="ti-quote-left text-color"></i>

                    <div class="testimonial-item-content">
                        <p class="testimonial-text">Consectetur adipisicing elit. Quam maiores perspiciatis
                            temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae
                            .</p>

                        <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">Mickel hussy</h5>
                            <p>Excutive Director,themefisher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Section Testimonial End -->
    <section class="section latest-blog bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <span class="h6 text-color">About</span>
                        <h2 class="mt-3 content-title text-white">Our Founder</h2>
                    </div>
                </div>
            </div>

            <div class="row  ">
                <div class=" w-100">
                    <div class="card bg-transparent border-0">
                        
                        
                        <div class="card-body mt-2" style="display: flex; justify-content: space-around; align-items: center;">
                            <img src="images/leen photo.jpg" alt="" class="col-lg-4    ">
             

                            <h3 class="mt-3 mb-5 lh-36 text-white" style="font-size: 17px; font-weight: 100; width: 450px"> Founded by Leen Sabti, a
                                    seasoned retail and graphic designer with over 10 years of experience, Laguna Visual
                                    Communications is driven by a passion for innovation and a commitment to excellence.
                                    Leen’s vision is to blend creativity with strategy, offering clients powerful, visually
                                    impactful solutions that stand out in a competitive market. </h3>

                            {{-- <a href="blog-single.html"
                                class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a> --}}
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card border-0 bg-transparent">
                        <img src="images/blog/2.jpg" alt="" class="img-fluid rounded">

                        <div class="card-body mt-2">
                            <div class="blog-item-meta">
                                <a href="#" class="text-white-50">Design<span class="ml-2 mr-2">/</span></a>
                                <a href="#" class="text-white-50">Ui/Ux<span class="ml-2">/</span></a>
                                <a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
                            </div>

                            <h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white">Interactivity design
                                    may connect consumer</a></h3>

                            <a href="blog-single.html"
                                class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card border-0 bg-transparent">
                        <img src="images/blog/3.jpg" alt="" class="img-fluid rounded">

                        <div class="card-body mt-2">
                            <div class="blog-item-meta">
                                <a href="#" class="text-white-50">Design<span class="ml-2 mr-2">/</span></a>
                                <a href="#" class="text-white-50">Ui/Ux<span class="ml-2">/</span></a>
                                <a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>admin</a>
                            </div>

                            <h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white">Marketing Strategy
                                    to bring more affect</a></h3>

                            <a href="blog-single.html"
                                class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="mt-70 position-relative">
        <div class="container">
            <div class="cta-block-2 bg-gray p-5 rounded border-1">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-7">
                        {{-- <span class="text-color">For Every type business</span> --}}
                        <h2 class="mt-2 mb-4 mb-lg-0">Entrust Your Project to Our Best Team of Professionals</h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('contact') }}" class="btn btn-main btn-round-full float-lg-right ">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
