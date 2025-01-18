@extends('home')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our blog</span>
                        <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="{{ url('projects') }}" class="text-white-50">Our
                                    projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <img src="images/projects/mirachi.jpg" alt="" class="img-fluid rounded">

                        <div class="blog-item-content bg-white p-5">

                            <h3 class="mt-3 mb-3"><a href="blog-single.html"> Mirchi Restaurant
                                </a></h3>
                            <div class="blog-item-meta bg-gray py-1 px-2">
                                <span> Branding and Packaging Design
                                </span>
                                <!-- <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                          <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                          <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span> -->
                            </div>
                            <p class="mb-4"><span class="text-black text-capitalize mr-3 ti-time mr-1"></span> Mirchi is
                                an Indian Restaurant located in (Marina Village-Ayla) Aqaba
                                That will be launching end of July 2021. <br> <br>

                                Our mission was to create their brand, packaging therfore, we will be
                                managing their social media accounts as soon as they launch.
                                <br> <br>
                                Moreover we were also consulted their interior design, to be parallel
                                with the brand identity created.
                            </p>

                            <!-- <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <img src="images/projects/pharmacy.jpg" alt="" class="img-fluid rounded">

                        <div class="blog-item-content bg-white p-5">
                            <h3 class="mt-3 mb-3"><a href="blog-single.html"> Al Mughrabi Pharmacy
                                </a></h3>
                            <div class="blog-item-meta bg-gray py-1 px-2">
                                <span>
                                    Branding and Packaging Design
                                </span>
                                <!-- <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Design</span>
                          <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                          <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span> -->
                            </div>

                            <p class="mb-4"><span class="text-black text-capitalize mr-3 ti-time mr-1"></span>Al Moghrabi
                                Pharmacy is Located in Aqaba city in Jordan
                                launched in March 2019</p>

                            <p>
                                Our mission was to create their brand, packaging and manag
                                ing their social media accounts
                            </p>

                            <!-- <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <img src="images/projects/Coral Vision Boat.jpg" alt="" class="img-fluid rounded">

                        <div class="blog-item-content bg-white p-5">
                            <h3 class="mt-3 mb-3"><a href="blog-single.html"> Coral Vision Boat

                                </a></h3>
                            <div class="blog-item-meta bg-gray py-1 px-2">
                                <p> Boat Illustration Design

                                </p>
                                <!-- <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Community</span>
                          <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                          <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span> -->
                            </div>

                            <p class="mb-4"><span class="text-black text-capitalize mr-3 ti-time mr-1"></span> Coral
                                Vision Boat is Located in (Marina Village-Ayla) Aqaba
                                started their business in May 2021</p>
                            <p>
                                Our mission was to create their Boat illustration sticker making
                                it look joyful, represintative and attractive
                            </p>
                            <!-- <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <img src="images/projects/Mazaya.jpg" alt="" class="img-fluid rounded">

                        <div class="blog-item-content bg-white p-5">
                            <h3 class="mt-3 mb-3"><a href="blog-single.html"> Mazaya Annual Event
                                </a></h3>
                            <div class="blog-item-meta bg-gray py-1 px-2">
                                <p> Events and Marketing Campaigns
                                </p>
                                <!-- <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Marketing</span>
                          <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                          <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span> -->
                            </div>

                            <p class="mb-4">Events and marketing campaigns is our specialty, MAZAYA has
                                a yearly event located in Talaby-Aqaba… luckily we had the
                                chance to manage their latest event done</p>

                            <!-- <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>

     
        </div>
    </section>

    <section class="cta-2">
        <div class="container">
            <div class="cta-block p-5 rounded">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-7">
                        <span class="text-color">For Every type business</span>
                        <h2 class="mt-2 text-white">Entrust Your Project to Our Best Team of Professionals</h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('contact') }}" class="btn btn-main btn-round-full float-right">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
