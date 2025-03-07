@extends('home') 
@section('title', 'brandditails')

@section('content')
    <section class="page-title bg-2">
        <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100%;"   >
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-4 text-lg">Projects Details</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="{{ url('projects') }}" class="text-white-50">Back to projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
<!-- Brand Details Section -->
<section class="section" style="background-color: #f5f8f9">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="blog-item">
                         <!-- Check if the main image exists -->
                        <img src="{{ asset($brand->main_image) }}" 
                             alt="{{ $brand->name }}" 
                             class="img-fluid rounded" 
                             style="width: 100%; height: auto; object-fit: cover;">
 

                    <div class="  bg-white p-5">
                        <h1 class="mb-3">{{ $brand->name }}</h1>
                        <div class="blog-item-meta bg-gray py-2 px-3 mb-4">
                            <span class="text-dark"><strong>Category:</strong> {{ $brand->category->name }}</span>
                            <br>
                            <span class="text-dark"><strong>Launched At:</strong> {{ $brand->lunched_at }}</span>
                        </div>
                        <p class="mb-4">{{ $brand->description }}</p>
                        <a href="{{ url('projects') }}" class="btn btn-primary">Back to brand</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




    <!-- Mockups Section -->
    <section class="section" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mb-4">
                    <h2>Mockups</h2>
                </div>
                @foreach ($brandimages as $image)
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="image-container text-center" 
                             style="padding: 15px; border: 1px solid #ddd; border-radius: 8px;">
                            <img src="{{ asset( $image->image_path) }}" 
                                 alt="Mockup" 
                                 class="branding-image" 
                                 style="width: 100%; max-width: 700px; height: auto; object-fit: contain;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

<!-- Push styles -->
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

<!-- Push scripts -->
@push('scripts')
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endpush
