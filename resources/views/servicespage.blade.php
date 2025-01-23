@extends('home')
@section('title', 'Services')

@section('content')
 
<section class="page-title bg-1">
    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100%;">
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
    

  <section class="section service border-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <span class="h6 text-color">Our Services</span>
                    <h2 class="mt-3 content-title">A comprehensive suite of creative services, tailored to meet diverse needs.</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="service-item">
                    <i class="ti-vector"></i>
                    <h4>Branding</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="service-item">
                    <i class="fa fa-share-alt"></i>
                    <h4>Social Media</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="service-item">
                    <i class="fa fa-paint-brush"></i>
                    <h4>Graphic Design</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="service-item">
                    <i class="fa fa-camera"></i>
                    <h4>Photography & Videography</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="service-item">
                    <i class="ti-layers"></i>
                    <h4>Events</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="service-item">
                    <i class="fa fa-cogs"></i>
                    <h4>Wood Manufacturing</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="service-item">
                    <i class="ti-desktop"></i>
                    <h4>Web Development</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="service-item">
                    <i class="ti-pencil-alt"></i>
                    <h4>Content Creation</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="service-item">
                    <i class="fa fa-bullhorn"></i>
                    <h4>Advertising</h4>
                </div>
            </div>
        </div>
    </div>
</section>

  <!--  Section Services End -->
  
 
  
  @endsection