@extends('home')
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
                            {{-- <p>
                We recognize the premier importance in making sure the design
                process goes smoothly and have carefully crafted our services
                accordingly. The result is firmly what our guest aim for
              </p> --}}

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

                                {{-- We recognize the supreme importance in making sure the design
                process goes smoothly and have carefully crafted our services
                accordingly. The result is excep tional design work and a
                great service. --}}
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


        <!-- section Counter Start -->
 

        <!-- <section class="section counter bg-counter">


                  <div class="container">
                    <div class="row">
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item text-center mb-5 mb-lg-0">
                          <i class="ti-check color-one text-md"></i>
                          <h3 class="mt-2 mb-0 text-white">
                            <span class="counter-stat font-weight-bold">1730</span> +
                          </h3>
                          <p class="text-white-50">Project Done</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item text-center mb-5 mb-lg-0">
                          <i class="ti-flag color-one text-md"></i>
                          <h3 class="mt-2 mb-0 text-white">
                            <span class="counter-stat font-weight-bold">125 </span>M
                          </h3>
                          <p class="text-white-50">User Worldwide</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item text-center mb-5 mb-lg-0">
                          <i class="ti-layers color-one text-md"></i>
                          <h3 class="mt-2 mb-0 text-white">
                            <span class="counter-stat font-weight-bold">39</span>
                          </h3>
                          <p class="text-white-50">Availble Country</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-item text-center">
                          <i class="ti-medall color-one text-md"></i>
                          <h3 class="mt-2 mb-0 text-white">
                            <span class="counter-stat font-weight-bold">14</span>
                          </h3>
                          <p class="text-white-50">Award Winner</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section> -->


        <!-- section Counter End  -->


        <!--  Section Services Start -->



        <!-- <section class="section team">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-7 text-center">
                        <div class="section-title">
                          <span class="h6 text-color">Our Team</span>
                          <h2 class="mt-3 content-title">
                            Expert Team member to get best service
                          </h2>
                        </div>
                      </div>
                    </div>

                    <div class="row justify-content-center">
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-item-wrap mb-5">
                          <div class="team-item position-relative">
                            <img
                              src="images/team/team-1.jpg"
                              alt=""
                              class="img-fluid w-100"
                            />
                            <div class="team-img-hover">
                              <ul class="team-social list-inline">
                                <li class="list-inline-item">
                                  <a href="#" class="facebook"
                                    ><i class="fab fa-facebook-f" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="twitter"
                                    ><i class="fab fa-twitter" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="instagram"
                                    ><i class="fab fa-instagram" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="linkedin"
                                    ><i class="fab fa-linkedin-in" aria-hidden="true"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Justin hammer</h4>
                            <p>Digital Marketer</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-item-wrap mb-5">
                          <div class="team-item position-relative">
                            <img
                              src="images/team/team-2.jpg"
                              alt=""
                              class="img-fluid w-100"
                            />
                            <div class="team-img-hover">
                              <ul class="team-social list-inline">
                                <li class="list-inline-item">
                                  <a href="#" class="facebook"
                                    ><i class="fab fa-facebook-f" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="twitter"
                                    ><i class="fab fa-twitter" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="instagram"
                                    ><i class="fab fa-instagram" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="linkedin"
                                    ><i class="fab fa-linkedin-in" aria-hidden="true"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Jason roy</h4>
                            <p>UI/UX Designer</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-item-wrap mb-5">
                          <div class="team-item position-relative">
                            <img
                              src="images/team/team-3.jpg"
                              alt=""
                              class="img-fluid w-100"
                            />
                            <div class="team-img-hover">
                              <ul class="team-social list-inline">
                                <li class="list-inline-item">
                                  <a href="#" class="facebook"
                                    ><i class="fab fa-facebook-f" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="twitter"
                                    ><i class="fab fa-twitter" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="instagram"
                                    ><i class="fab fa-instagram" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="linkedin"
                                    ><i class="fab fa-linkedin-in" aria-hidden="true"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Henry oswald</h4>
                            <p>Developer</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-item-wrap mb-5 mb-lg-0">
                          <div class="team-item position-relative">
                            <img
                              src="images/team/team-4.jpg"
                              alt=""
                              class="img-fluid w-100"
                            />
                            <div class="team-img-hover">
                              <ul class="team-social list-inline">
                                <li class="list-inline-item">
                                  <a href="#" class="facebook"
                                    ><i class="fab fa-facebook-f" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="twitter"
                                    ><i class="fab fa-twitter" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="instagram"
                                    ><i class="fab fa-instagram" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="linkedin"
                                    ><i class="fab fa-linkedin-in" aria-hidden="true"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">David Williams</h4>
                            <p>Senior Marketer</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-item-wrap mb-5 mb-lg-0">
                          <div class="team-item position-relative">
                            <img
                              src="images/team/team-6.jpg"
                              alt=""
                              class="img-fluid w-100"
                            />
                            <div class="team-img-hover">
                              <ul class="team-social list-inline">
                                <li class="list-inline-item">
                                  <a href="#" class="facebook"
                                    ><i class="fab fa-facebook-f" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="twitter"
                                    ><i class="fab fa-twitter" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="instagram"
                                    ><i class="fab fa-instagram" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="linkedin"
                                    ><i class="fab fa-linkedin-in" aria-hidden="true"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">Peter Odin</h4>
                            <p>App Developer</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-item-wrap mb-5 mb-lg-0">
                          <div class="team-item position-relative">
                            <img
                              src="images/team/team-5.jpg"
                              alt=""
                              class="img-fluid w-100"
                            />
                            <div class="team-img-hover">
                              <ul class="team-social list-inline">
                                <li class="list-inline-item">
                                  <a href="#" class="facebook"
                                    ><i class="fab fa-facebook-f" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="twitter"
                                    ><i class="fab fa-twitter" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="instagram"
                                    ><i class="fab fa-instagram" aria-hidden="true"></i
                                  ></a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="#" class="linkedin"
                                    ><i class="fab fa-linkedin-in" aria-hidden="true"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="team-item-content">
                            <h4 class="mt-3 mb-0 text-capitalize">David Spensor</h4>
                            <p>Project Manager</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section> -->


        <!--  Section Services End -->


        <!-- Section Testimonial Start -->


        <!-- <section class="section testimonial bg-gray">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-7 text-center">
                        <div class="section-title">
                          <span class="h6 text-color">Clients testimonial</span>
                          <h2 class="mt-3 content-title">
                            Check what's our clients say about us
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container">
                    <div class="testimonial-wrap">
                      <div class="testimonial-item position-relative">
                        <i class="ti-quote-left text-color"></i>

                        <div class="testimonial-item-content">
                          <p class="testimonial-text">
                            Quam maiores perspiciatis temporibus odio reiciendis error
                            alias debitis atque consequuntur natus iusto recusandae
                            numquam corrupti facilis blanditiis.
                          </p>

                          <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">Thomas Johnson</h5>
                            <p>Excutive Director,themefisher</p>
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-item position-relative">
                        <i class="ti-quote-left text-color"></i>

                        <div class="testimonial-item-content">
                          <p class="testimonial-text">
                            Consectetur adipisicing elit. Quam maiores perspiciatis
                            temporibus odio reiciendis error alias debitis atque
                            consequuntur natus iusto recusandae .
                          </p>

                          <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">Mickel hussy</h5>
                            <p>Excutive Director,themefisher</p>
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-item position-relative">
                        <i class="ti-quote-left text-color"></i>

                        <div class="testimonial-item-content">
                          <p class="testimonial-text">
                            Quam maiores perspiciatis temporibus odio reiciendis error
                            alias debitis atque consequuntur natus iusto recusandae
                            numquam corrupti.
                          </p>

                          <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">James Watson</h5>
                            <p>Excutive Director,themefisher</p>
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-item position-relative">
                        <i class="ti-quote-left text-color"></i>

                        <div class="testimonial-item-content">
                          <p class="testimonial-text">
                            Consectetur adipisicing elit. Quam maiores perspiciatis
                            temporibus odio reiciendis error alias debitis atque
                            consequuntur natus iusto recusandae .
                          </p>

                          <div class="testimonial-author">
                            <h5 class="mb-0 text-capitalize">Mickel hussy</h5>
                            <p>Excutive Director,themefisher</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section> -->


        <!-- Section Testimonial End -->

        <!-- footer Start -->
        {{-- <footer class="footer section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget">
              <h4 class="text-capitalize mb-4">Company</h4>

              <ul class="list-unstyled footer-menu lh-35">
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="widget">
              <h4 class="text-capitalize mb-4">Quick Links</h4>

              <ul class="list-unstyled footer-menu lh-35">
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget">
              <h4 class="text-capitalize mb-4">Subscribe Us</h4>
              <p>Subscribe to get latest news article and resources</p>

              <form action="#" class="sub-form">
                <input
                  type="text"
                  class="form-control mb-3"
                  placeholder="Subscribe Now ..."
                />
                <a href="#" class="btn btn-main btn-small">subscribe</a>
              </form>
            </div>
          </div>

          <div class="col-lg-3 ml-auto col-sm-6">
            <div class="widget">
              <div class="logo mb-4">
                <h3>Mega<span>kit.</span></h3>
              </div>
              <h6><a href="tel:+23-345-67890">Support@megakit.com</a></h6>
              <a href="mailto:support@gmail.com"
                ><span class="text-color h4">+23-456-6588</span></a
              >
            </div>
          </div>
        </div>

        <div class="footer-btm pt-4">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="copyright">
                &copy; Copyright Reserved to
                <span class="text-color">Megakit.</span> by
                <a href="https://themefisher.com/" target="_blank"
                  >Themefisher</a
                >
              </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="copyright">
                Distributed by
                <a href="https://themewagon.com/" target="_blank"
                  >Themewagon</a
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
              <ul class="list-inline footer-socials">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/themefisher"
                    ><i class="ti-facebook mr-2"></i>Facebook</a
                  >
                </li>
                <li class="list-inline-item">
                  <a href="https://twitter.com/themefisher"
                    ><i class="ti-twitter mr-2"></i>Twitter</a
                  >
                </li>
                <li class="list-inline-item">
                  <a href="https://www.pinterest.com/themefisher/"
                    ><i class="ti-linkedin mr-2"></i>Linkedin</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer> --}}
        {{-- @include('homeincludes.footer'); --}}

    </div>
@endsection
