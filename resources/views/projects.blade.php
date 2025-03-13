@extends('home')
@section('title', 'Projects')

@section('content')
    <section class="page-title bg-2">
        <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100%;">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                         <h1 class="text-capitalize mb-4 text-lg">Our Projects</h1>
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
            @foreach ($Brands->chunk(2) as $brandRow) <!-- Chunk the brands into groups of 2 -->
                <div class="row">
                    @foreach ($brandRow as $brand)
                        <div class="col-lg-6 col-md-6 mb-5">
                            <div class="blog-item">
                                     <!-- Check if a main image exists -->
                                    <img src="{{ asset($brand->main_image) }}" 
                                         alt="{{ $brand->name }}" 
                                         class="img-fluid rounded">
                    
                                <div class="blog-item-content bg-white p-5">
                                    <h3 class="mt-3 mb-3" id="brandName">
                                        <a href="{{ route('brand.showdetails', $brand->id) }}">{{ $brand->name }}</a>
                                    </h3>
                                    <div class="blog-item-meta bg-gray py-1 px-2">
                                        <span>{{ $brand->category->name }}</span>
                                    </div>
                                    <p class="mb-4">
                                        <span class="text-black text-capitalize mr-3 ti-time mr-1"></span>
                                        {{ $brand->lunched_at }}
                                    </p>
                                    <a href="{{ route('brand.showdetails', $brand->id) }}" class="btn btn-small btn-main btn-round-full" id="viewDetails">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
    
    
    



 
 
    
 
 

         

 
@endsection
