@extends('home')

@section('content')
<style>
/* General Styles */
.service-item {
    display: flex;
    flex-direction: column;  /* Stack icon and text vertically */
    align-items: center;  /* Center both icon and text horizontally */
    justify-content: center;  /* Center content vertically */
    padding-top: 13px;
    text-align: center;  /* Ensure the text is centered below the icon */
}

/* Icon Styling */
.service-item i {
    font-size: 40px;  /* Adjust icon size */
    margin-bottom: 10px;  /* Space between icon and text */
}

/* Heading Styling */
.service-item h4 {
    font-size: 18px;  /* Adjust heading font size as necessary */
    margin: 0;  /* Remove default margin */
    line-height: 1.4;  /* Add line height for better spacing */
}

/* Responsiveness */
@media (max-width: 1200px) {
    .service-item {
        flex-direction: row;  /* Switch to row layout on medium screens */
        text-align: left;  /* Align text to the left */
    }

    .service-item i {
        font-size: 35px;  /* Slightly smaller icons on medium screens */
        margin-bottom: 0;  /* Remove space between icon and text in row layout */
        margin-right: 15px;  /* Space between icon and text */
    }

    .service-item h4 {
        font-size: 16px;  /* Slightly smaller text for medium screens */
    }
}

@media (max-width: 767px) {
    .service-item {
        flex-direction: column;  /* Stack icon and text vertically on small screens */
        text-align: center;  /* Center the text */
    }

    .service-item i {
        font-size: 30px;  /* Smaller icons for mobile devices */
        margin-bottom: 10px;  /* Space between icon and text on mobile */
    }

    .service-item h4 {
        font-size: 14px;  /* Smaller text for mobile devices */
    }
}


</style>
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