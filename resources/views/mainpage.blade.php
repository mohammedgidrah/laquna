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
    <div id="contentCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="9"
                aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="10"
                aria-label="Slide 11"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="11"
                aria-label="Slide 12"></button>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://talabayhotelaqaba.com-jordan.com/" class="image-hvr-effect">
                                <img src="images/portfolio/Talabay_logo-01[1].png" alt="Talabay Hotels & Resorts"
                                    class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://talabayhotelaqaba.com-jordan.com/">Talabay Hotels & Resorts</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.instagram.com/murasaki.restobar/" class="image-hvr-effect">
                                <img src="images/portfolio/Mursakai logo[1].png" alt="Murasakai Restobar"
                                    class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/murasaki.restobar/">Murasakai Restobar</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.instagram.com/mirchi.aqaba/?hl=ar" class="image-hvr-effect">
                                <img src="images/portfolio/Mirchi[1].png" alt="MIRACHI INDIAN CUSINE"
                                    class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/mirchi.aqaba/?hl=ar">MIRACHI INDIAN CUSINE</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.instagram.com/space_restocafe/" class="image-hvr-effect">
                                <img src="images/portfolio/Space[1].PNG" alt="SPACE RESTOCAFE"
                                    class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/space_restocafe/">SPACE RESTOCAFE</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.facebook.com/HIGH.FIT.JO/?locale=ar_AR" class="image-hvr-effect">
                                <img src="images/portfolio/Highfit[1].PNG" alt="HIGH FIT" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/HIGH.FIT.JO/?locale=ar_AR">HIGH FIT</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.facebook.com/AlMoghrabipharmacy/?locale=ar_AR" class="image-hvr-effect">
                                <img src="images/portfolio/mughrabi pharmacy[1].PNG" alt="mughrabi pharmacy"
                                    class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/AlMoghrabipharmacy/?locale=ar_AR">mughrabi pharmacy</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                {{-- ?????????????????????????? --}}
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.facebook.com/AlMoghrabipharmacy/?locale=ar_AR" class="image-hvr-effect">
                                <img src="images/portfolio/Amazon[1].PNG" alt="Amazon" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/AlMoghrabipharmacy/?locale=ar_AR">Amazon</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.facebook.com/AlMoghrabipharmacy/?locale=ar_AR" class="image-hvr-effect">
                                <img src="images/portfolio/ALdallah[1].PNG" alt="ALdallah" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/AlMoghrabipharmacy/?locale=ar_AR">ALdallah</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.facebook.com/AlMoghrabipharmacy/?locale=ar_AR" class="image-hvr-effect">
                                <img src="images/portfolio/Ishq[1].PNG" alt="Ishq" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/AlMoghrabipharmacy/?locale=ar_AR">Ishq</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.facebook.com/mines.gaming2025" class="image-hvr-effect">
                                <img src="images/portfolio/Mines[1].PNG" alt="Mines" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/mines.gaming2025">Mines</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://mazayaworld.com/en" class="image-hvr-effect">
                                <img src="images/portfolio/Mazaya[1].PNG" alt="Mazaya" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://mazayaworld.com/en">Mazaya</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center">
                    <article class="post-item text-center">
                        <figure>
                            <a href="https://www.facebook.com/MyAqaba/?locale=ar_AR" class="image-hvr-effect">
                                <img src="images/portfolio/myaqaba[1].PNG" alt="myaqaba" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/MyAqaba/?locale=ar_AR">myaqaba</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Add more slides (e.g., Slide 3 to Slide 10) -->
            <!-- Ensure you keep the `carousel-item` class and unique content for each slide -->
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#contentCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#contentCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
    </div>


    {{-- <section class="section service border-top">
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
    </section> --}}
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
    
            <div class="row">
                <div class="col-12">
                    <div class="card bg-transparent border-0">
                        <div class="card-body mt-2 d-flex flex-column flex-lg-row justify-content-center align-items-center">
                            <!-- Responsive image -->
                            <img src="images/leen photo.jpg" alt="Founder" class="img-fluid col-lg-4 mb-4 mb-lg-0">
                            
                            <!-- Responsive text block -->
                            <h3 class="mt-3 mb-5 lh-36 text-white" style="font-size: 17px; font-weight: 100; max-width: 450px;">
                                Founded by Leen Sabti, a seasoned retail and graphic designer with over 10 years of experience, Laguna Visual Communications is driven by a passion for innovation and a commitment to excellence.
                                Leen’s vision is to blend creativity with strategy, offering clients powerful, visually impactful solutions that stand out in a competitive market.
                            </h3>
                        </div>
                    </div>
                </div>
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
