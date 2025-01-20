@extends('home')

@section('content')
<style>
    .page-indicator {
    display: inline-block;
    width: 30px;
    height: 30px;
    background-color: #007bff;
    color: white;
    border-radius: 50%;
    line-height: 30px;
    text-align: center;
    margin: 0 15px;
    font-size: 18px;
}

.btn {
    margin: 0 10px;
}

</style>
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
                    <h2 class="mt-3 content-title">We have done lots of works, let's check some</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row portfolio-gallery"  id="portfolioItems"  >
            <!-- Page 1 Items -->
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
                        <img src="images/portfolio/Mirchi[1].png" alt="" class="img-fluid w-100">
                        <i class="ti-plus overlay-item"></i>
                        <div class="portfolio-item-content">
                            <h3 class="mb-0 text-white">MIRACHI INDIAN CUSINE</h3>
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
                            <h3 class="mb-0 text-white">SPACE RESTOCAFE</h3>
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
                            <h3 class="mb-0 text-white">HIGH FIT</h3>
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
                            <h3 class="mb-0 text-white">mughrabi pharmacy</h3>
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
                            <h3 class="mb-0 text-white">Amazon</h3>
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
                            <h3 class="mb-0 text-white">Ishq</h3>
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
                            <h3 class="mb-0 text-white">Mines</h3>
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
                            <h3 class="mb-0 text-white">Myaqaba</h3>
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

<!-- Pagination Script -->

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

<!-- section portfolio END -->
 
@endsection