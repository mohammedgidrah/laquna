@extends('home')
@section('title', 'About')
@section('content')
    <div class="main-wrapper">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <h1 class="text-capitalize mb-4 text-lg">Our Company</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ url('/') }}" class="text-white">Home</a>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-white">/</span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('about') }}" class="text-white-50">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section About Start -->
        <section class="section about-2 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-item pr-3 mb-5 mb-lg-0">
                            <span class="h6 text-color"> About Us </span>
                            <h2 class="mt-3 mb-4 position-relative content-title">
                                A dynamic team of innovative professionals. </h2>
                            <p class="mb-3">
                                Laguna is a creative visual communications agency dedicated to bringing ideas to
                                life through bespoke branding, illustrations, advertisements, social media content,
                                and event designs.
                            </p>
                            <p class="mb-3">
                                We proudly partner with one of the region's most talented interior designers and
                                wood manufacturers, specializing in modern furniture, kitchens, and booths.
                            </p>
                            <p class="mb-3">
                                Our goal is to provide innovative design solutions for businesses of all kinds, com
                                bining creativity with efficiency to deliver timely results. With a commitment to
                                exceptional quality and superior customer service, we strive to exceed expectations
                                and create designs that inspire.
                            </p>


                            <a href="{{ url('contact') }}" class="btn btn-main btn-round-full">Get started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-item-img">
                            <img src="images/about/img2.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section About End -->

        <section class="about-info section pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about-info-item mb-4 mb-lg-0">
                            <h3 class="mb-3">
                                <span class="text-color mr-2 text-md">01.</span>Our Mission
                            </h3>
                            <p>
                                Delivering impactful, tailored creative solutions to elevate brand identities.
                                <br /><br />


                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about-info-item mb-4 mb-lg-0">
                            <h3 class="mb-3">
                                <span class="text-color mr-2 text-md">02.</span>Vission
                            </h3>
                            <p>To lead in innovative design, empowering brands to inspire and thrive.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about-info-item mb-4 mb-lg-0">
                            <h3 class="mb-3">
                                <span class="text-color mr-2 text-md">03.</span>Our Approach
                            </h3>
                            <p>
                                Our approach combines creativity and strategy to elevate your brand’s impact.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
