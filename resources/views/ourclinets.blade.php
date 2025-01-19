@extends('home')

@section('content')
<section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
             <h1 class="text-capitalize mb-4 text-lg">Our Clinets</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="{{url('/')}}" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="{{url('ourclinent')}}" class="text-white-50">Our Clinets</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!-- section portfolio start -->
  <section class="section portfolio pb-0">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-7 text-center">
                  <div class="section-title">
                      <span class="h6 text-color">Our works</span>
                      <h2 class="mt-3 content-title ">We have done lots of works, lets check some</h2>
                  </div>
              </div>
          </div>
      </div>
  
      <div class="container-fluid">
          <div class="row portfolio-gallery">
              <div class="col-lg-4 col-md-6">
                  <div class="portflio-item position-relative mb-4">
                      <a href="images/portfolio/1.jpg" class="popup-gallery">
                          <img src="images/portfolio/1.jpg" alt="" class="img-fluid w-100">
  
                          <i class="ti-plus overlay-item"></i>
                          <div class="portfolio-item-content">
                              <h3 class="mb-0 text-white">Project california</h3>
                              <p class="text-white-50">Web Development</p>
                          </div>
                      </a>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6">
                  <div class="portflio-item position-relative mb-4">
                      <a href="images/portfolio/2.jpg" class="popup-gallery">
                          <img src="images/portfolio/2.jpg" alt="" class="img-fluid w-100">
  
                          <i class="ti-plus overlay-item"></i>
                          <div class="portfolio-item-content">
                              <h3 class="mb-0 text-white">Project california</h3>
                              <p class="text-white-50">Web Development</p>
                          </div>
                      </a>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6">
                  <div class="portflio-item position-relative mb-4">
                      <a href="images/portfolio/3.jpg" class="popup-gallery">
                          <img src="images/portfolio/3.jpg" alt="" class="img-fluid w-100">
  
                          <i class="ti-plus overlay-item"></i>
                          <div class="portfolio-item-content">
                              <h3 class="mb-0 text-white">Project california</h3>
                              <p class="text-white-50">Web Development</p>
                          </div>
                      </a>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6">
                  <div class="portflio-item position-relative mb-4">
                      <a href="images/portfolio/4.jpg" class="popup-gallery">
                          <img src="images/portfolio/4.jpg" alt="" class="img-fluid w-100">
  
                          <i class="ti-plus overlay-item"></i>
                          <div class="portfolio-item-content">
                              <h3 class="mb-0 text-white">Project california</h3>
                              <p class="text-white-50">Web Development</p>
                          </div>
                      </a>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6">
                  <div class="portflio-item position-relative  mb-4">
                      <a href="images/portfolio/5.jpg" class="popup-gallery">
                          <img src="images/portfolio/5.jpg" alt="" class="img-fluid w-100">
  
                          <i class="ti-plus overlay-item"></i>
                          <div class="portfolio-item-content">
                              <h3 class="mb-0 text-white">Project california</h3>
                              <p class="text-white-50">Web Development</p>
                          </div>
                      </a>
                  </div>
              </div>
  
              <div class="col-lg-4 col-md-6">
                  <div class="portflio-item position-relative mb-4">
                      <a href="images/portfolio/6.jpg" class="popup-gallery">
                          <img src="images/portfolio/6.jpg" alt="" class="img-fluid w-100">
                          
                          <i class="ti-plus overlay-item"></i>
                          <div class="portfolio-item-content">
                              <h3 class="mb-0 text-white">Project california</h3>
                              <p class="text-white-50">Web Development</p>
                          </div>
                      </a>
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
                    <a href="{{url('contact')}}" class="btn btn-main btn-round-full float-right">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
  
  <!-- section portfolio END -->
  
  @endsection