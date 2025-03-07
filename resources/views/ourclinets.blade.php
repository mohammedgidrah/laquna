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
            <!--   -->
  
  
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