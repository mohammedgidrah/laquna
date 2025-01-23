@extends('home')
@section('title', 'Our Clinets')

@section('content')
 
<section class="page-title bg-4">
    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100%;">
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
                    {{-- <span class="h6 text-color">Our Clients</span> --}}
                    <h2 class="mt-3 content-title">Our Clients</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row portfolio-gallery"  id="portfolioItems"  >
            <!-- Page 1 Items -->
            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/movidea.jpg" class="popup-gallery">
                        <img src="images/portfolio/Talabay_logo-01[1].png" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Talabay Hotels & Resorts</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Talabay_logo-01[1].png" class="popup-gallery">
                        <img src="images/portfolio/Talabay_logo-01[1].png" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Talabay Hotels & Resorts</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Mursakai logo[1].png" class="popup-gallery">
                        <img src="images/portfolio/Mursakai logo[1].png" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Murasakai Restobar</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Mirchi[1].png" class="popup-gallery">
                        <img src="images/portfolio/ADS.png" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Aqaba Development Corp</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Mirchi[1].png" class="popup-gallery">
                        <img src="images/portfolio/Mirchi[1].png" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Mirachi Indian Cusine</h3>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Page 2 Items (Hidden by default) -->
            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Space[1].PNG" class="popup-gallery">
                        <img src="images/portfolio/Space[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Space Restocafe</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Highfit[1].PNG" class="popup-gallery">
                        <img src="images/portfolio/Highfit[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">High Fit  Fitness Center</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/mughrabi pharmacy[1].PNG" class="popup-gallery">
                        <img src="images/portfolio/mughrabi pharmacy[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Almughrabi Pharmacy</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Amazon[1].PNG" class="popup-gallery">
                        <img src="images/portfolio/Amazon[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Amazon Kitchen & Industrial Wood</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/ALdallah[1].PNG" class="popup-gallery">
                        <img src="images/portfolio/ALdallah[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">ALdallah</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Ishq[1].PNG" class="popup-gallery">
                        <img src="images/portfolio/Ishq[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Ishq Hotel</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Mines[1].PNG" class="popup-gallery">
                        <img src="images/portfolio/Mines[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Mines Gaming Center</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/Mazaya[1].PNG" class="popup-gallery">
                        <img src="images/portfolio/Mazaya[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">Mazaya</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/myaqaba[1].PNG" class="popup-gallery">
                        <img src="images/portfolio/myaqaba[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">MyAqaba</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 page-2">
                <div class="portflio-item position-relative mb-4">
                    <a href="images/portfolio/marina.PNG" class="popup-gallery">
                        <img src="images/portfolio/myaqaba[1].PNG" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">MyAqaba</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pagination Controls -->
        <div class="text-center">
            <button class="btn btn-primary" id="prevPage">Prev</button>
            
            <!-- Page number circle -->
            <span class="page-indicator" id="pageNumber">1</span>
      
            <button class="btn btn-primary" id="nextPage">Next</button>
        </div>
    </div>
</section>

 
 
@endsection