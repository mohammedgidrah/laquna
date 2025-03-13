@extends('home')
@section('title', 'Home')

@section('content')

    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10">
                    <div class="block">
                        {{-- <span class="d-block mb-3 text-white text-capitalize">A mint of creativity</span> --}}
                        <h1 id="maintext" class="animated fadeInUp mb-5">Where your <br> vision meets striking <br>transformative designs
                        </h1>
                        <a href="{{ url('contact') }}" 
                            class="discover-button" id="">
                            Discover More<i class="btn-icon fa fa-angle-right ml-2"></i></a>
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
            <div class="row justify-content-center" id="intro">
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
                            and videography. </p>
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

                            <a href="{{ url('contact') }}" class="discover-button">Get started</a>
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
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="10"
                aria-label="Slide 11"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="11"
                aria-label="Slide 12"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="12"
                aria-label="Slide 13"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="13"
                aria-label="Slide 14"></button>
            <button type="button" data-bs-target="#contentCarousel" data-bs-slide-to="14"
                aria-label="Slide 15"></button>

        </div>

        <!-- Wrapper for slides -->
        <div  id="contentCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item ">
                        <figure class="figure-container">
                            <a href="https://www.instagram.com/aqabadevelopmentcorp/" class="image-hvr-effect">
                                <img src="images/portfolio/ADS.png" alt="movida" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/aqabadevelopmentcorp/">Aqaba Development Corpration</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item " data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item ">
                        <figure>
                            <a href="https://www.instagram.com/movidajo_entertainment/" class="image-hvr-effect">
                                <img src="images/portfolio/movida.jpg" alt="movida" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/movidajo_entertainment/">Movida Entertainment</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item   ">
                        <figure>
                            <a href="https://www.instagram.com/talabayresort/" class="image-hvr-effect">
                                <img src="images/portfolio/Talabay_logo-01[1].PNG" alt="Talabay Hotels & Resorts"
                                    class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/talabayresort/">Talabay Hotels & Resorts</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item  ">
                        <figure>
                            <a href="https://www.instagram.com/murasaki.restobar/" class="image-hvr-effect">
                                <img src="images/portfolio/Mursakai logo[1].PNG" alt="Murasakai Restobar"
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
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item  ">
                        <figure>
                            <a href="https://www.instagram.com/mirchi.aqaba/?hl=ar" class="image-hvr-effect">
                                <img src="images/portfolio/Mirchi[1].PNG" alt="MIRACHI INDIAN CUSINE"
                                    class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/mirchi.aqaba/?hl=ar">Mirachi Indian Cusine</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item  ">
                        <figure>
                            <a href="https://www.instagram.com/space_restocafe/" class="image-hvr-effect">
                                <img src="images/portfolio/Space[1].PNG" alt="SPACE RESTOCAFE"
                                    class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/space_restocafe/">Space Restocafe</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item  ">
                        <figure>
                            <a href="https://www.facebook.com/HIGH.FIT.JO/?locale=ar_AR" class="image-hvr-effect">
                                <img src="images/portfolio/Highfit[1].PNG" alt="HIGH FIT" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/HIGH.FIT.JO/?locale=ar_AR">High Fit Fitness Center </a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item  ">
                        <figure>
                            <a href="https://www.instagram.com/almoghrabipharmacy/" class="image-hvr-effect">
                                <img src="images/portfolio/mughrabi pharmacy[1].PNG" alt="mughrabi pharmacy"
                                    class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/almoghrabipharmacy/">Almughrabi Pharmacy</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                {{-- ?????????????????????????? --}}
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item ">
                        <figure>
                            <a href="https://www.facebook.com/AMAZONKITCHENS.JO/" class="image-hvr-effect">
                                <img src="images/portfolio/Amazon[1].PNG" alt="Amazon" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/AMAZONKITCHENS.JO/">Amazon Kitchen & Industrial Wood</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item ">
                        <figure>
                            <a href="#" class="image-hvr-effect">
                                <img src="images/portfolio/ALdallah[1].PNG" alt="ALdallah" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Aldallah</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item ">
                        <figure>
                            <a href="#" class="image-hvr-effect">
                                <img src="images/portfolio/Ishq[1].PNG" alt="Ishq" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Ishq Hotel</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item  ">
                        <figure>
                            <a href="https://www.facebook.com/mines.gaming2025" class="image-hvr-effect">
                                <img src="images/portfolio/mines.PNG" alt="Mines" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/mines.gaming2025">Mines Gaming Center</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
 
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item  ">
                        <figure>
                            <a href="https://www.facebook.com/MyAqaba/?locale=ar_AR" class="image-hvr-effect">
                                <img src="images/portfolio/myaqaba[1].PNG" alt="myaqaba" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.facebook.com/MyAqaba/?locale=ar_AR">MyAqaba</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item  ">
                        <figure>
                            <a href="#" class="image-hvr-effect">
                                <img src="images/portfolio/marina.PNG" alt="marina" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Marina Restaurant & Fishery</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="d-flex justify-content-center align-items-center text-center">
                    <article class="post-item  ">
                        <figure>
                            <a href="https://www.instagram.com/azad.cafe/" class="image-hvr-effect">
                                <img src="images/portfolio/azad.PNG" alt="azad" class="post-image img-fluid">
                            </a>
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="https://www.instagram.com/azad.cafe/">Azad Restaurant</a>
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
</div>


    <!--  Section Services End -->
    <!-- Section Cta Start -->
    <section class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    {{-- <div class="cta-item  bg-white p-5 rounded">
                        <h2 class="mt-2 mb-4">Entrust Your Project to our Best Team of Professionals</h2>
                        <p class="lead mb-4">Have any project on mind? For immidiate support :</p>
                        <h3 class="number"><i class="ti-mobile mr-3 text-color"></i>+962 797992323 </h3>
                        <span class="email" style="padding-left: 5px"> <i class="fa fa-envelope mr-2 color-one"></i><a
                                href="mailto:leensabti@lagunavco.com"> <span style="padding-left: 10px">Contact
                                    Us</span></a>
                        </span>

                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--  Section Cta End-->
    <section class="section latest-blog  ">
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
                        <div class="card-body d-flex flex-column flex-lg-row   align-items-center">
                            <!-- Responsive image -->
                            <img src="images/leen photo.jpg" alt="Founder" id="founder" class="img-fluid col-12 col-md-6 col-lg-4 mb-4"  >

                            <!-- Responsive text block -->
                            <h3 class="mt-3 mb-5 lh-36 text-white"
                                style="font-size: 17px; font-weight: 100; max-width: 450px; text-align: left">
                                Founded by Leen Sabti, an accomplished graphic designer with over 10 years of experience,
                                Laguna Visual Communications stands as a testament to innovation, creativity, and
                                excellence. With a deep passion for transforming ideas into impactful visuals, Leen has
                                mastered the art of blending creativity with strategic thinking to craft solutions that not
                                only define brands but make them unforgettable. Under her leadership, Laguna is dedicated to
                                helping clients stand out and thrive in today’s competitive market.
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
                    <div class="col-lg-2" id="contact-btn">
                        <a href="{{ url('contact') }}" class="btn btn-main btn-round-full float-lg-right ">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
