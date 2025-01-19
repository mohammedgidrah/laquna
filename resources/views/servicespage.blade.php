@extends('home')

@section('content')
<section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
             <h1 class="text-capitalize mb-4 text-lg">What We Do</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="{{url('/')}}" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="{{url('services')}}" class="text-white-50">our services</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!--  Section Services Start -->
  {{-- <section class="section service border-top">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-7 text-center">
                  <div class="section-title">
                      <span class="h6 text-color">Our Services</span>
                      <h2 class="mt-3 content-title ">We provide a wide range of creative services </h2>
                  </div>
              </div>
          </div>
  
          <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="service-item mb-5">
                      <i class="ti-desktop"></i>
                      <h4 class="mb-3">Web development.</h4>
                      <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="service-item mb-5">
                      <i class="ti-layers"></i>
                      <h4 class="mb-3">Interface Design.</h4>
                      <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="service-item mb-5">
                      <i class="ti-bar-chart"></i>
                      <h4 class="mb-3">Business Consulting.</h4>
                      <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="service-item mb-5">
                      <i class="ti-vector"></i>
                      <h4 class="mb-3">Branding.</h4>
                      <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="service-item mb-5">
                      <i class="ti-android"></i>
                      <h4 class="mb-3">App development.</h4>
                      <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="service-item mb-5">
                      <i class="ti-pencil-alt"></i>
                      <h4 class="mb-3">Content creation.</h4>
                      <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="service-item">
                      <i class="ti-layers"></i>
                      <h4 class="mb-3">Interface Design.</h4>
                      <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="service-item">
                      <i class="ti-bar-chart"></i>
                      <h4 class="mb-3">Business Consulting.</h4>
                      <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="service-item">
                      <i class="ti-vector"></i>
                      <h4 class="mb-3">Branding.</h4>
                      <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}

  <section class="section service border-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <span class="h6 text-color">Our Services</span>
                    <h2 class="mt-3 content-title " style="font-size: 22px; line-height: 30px; width: 100%; ">A comprehensive suite of creative services, tailored to meet
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
  
  {{-- <section class="cta-2">
      <div class="container">
          <div class="cta-block p-5 rounded">
              <div class="row justify-content-center align-items-center ">
                  <div class="col-lg-7">
                      <span class="text-color">For Every type business</span>
                      <h2 class="mt-2 text-white">Entrust Your Project to Our Best Team of Professionals</h2>
                  </div>
                  <div class="col-lg-4">
                      <a href="{{url('contact')}}" class="btn btn-main btn-round-full float-right">Contact Us</a>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  
  @endsection