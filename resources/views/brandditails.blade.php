@extends('home') <!-- This assumes 'home' is your layout -->

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        {{-- <span class="text-white">Our blog</span> --}}
                        <h1 class="text-capitalize mb-4 text-lg">Projects Details </h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="{{ url('projects') }}" class="text-white-50">Back to
                                    projects</a></li>
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
                        <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}"
                            class="img-fluid rounded mb-4" style="width: 100%; height: auto; object-fit: cover;">
                        <div class="blog-item-content bg-white p-5">
                            <h1 class="mb-3">{{ $brand->name }}</h1>
                            <div class="blog-item-meta bg-gray py-2 px-3 mb-4">
                                <span class="text-dark"><strong>Category:</strong> {{ $brand->category->name }}</span>
                                <br>
                                <span class="text-dark"><strong>Launched At:</strong> {{ $brand->lunched_at }}</span>
                            </div>
                            <p class="mb-4">{{ $brand->description }}</p>
                            <a href="{{ url('projects') }}" class="btn btn-primary">Back to Brands</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Branding Assets Section (Color Palette, Illustrations, Fonts, Mockups) -->
    <section class="section" style="background-color: #ffffff;">
        <div class="container">
            <div class="row">
                <!-- Color Palette -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="image-container">
                        <h2 class="text-center">Color Palette</h2>
                        <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}"
                            class="img-fluid rounded mb-4"><img src="{{ asset('storage/' . $brand->image) }}"
                            alt="{{ $brand->name }}" class="img-fluid rounded mb-4"><img
                            src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}"
                            class="img-fluid rounded mb-4">
                        {{-- <img src="color_palette_1.jpg" alt="Color Palette 1" class="branding-image mb-3">
                    <img src="color_palette_2.jpg" alt="Color Palette 2" class="branding-image"> --}}
                    </div>
                </div>

                <!-- Illustrations -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="image-container">
                        <h2 class="text-center">Illustrations</h2>
                        <img src="illustration_1.jpg" alt="Illustration 1" class="branding-image mb-3">
                        <img src="illustration_2.jpg" alt="Illustration 2" class="branding-image mb-3">
                        <img src="illustration_3.jpg" alt="Illustration 3" class="branding-image">
                    </div>
                </div>

                <!-- Fonts -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="image-container">
                        <h2 class="text-center">Fonts</h2>
                        <img src="font_example_1.jpg" alt="Font Example 1" class="branding-image mb-3">
                        <img src="font_example_2.jpg" alt="Font Example 2" class="branding-image">
                    </div>
                </div>

                <!-- Mockups -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="image-container">
                        <h2 class="text-center">Mockups</h2>
                        <img src="mockup_1.jpg" alt="Mockup 1" class="branding-image mb-3">
                        <img src="mockup_2.jpg" alt="Mockup 2" class="branding-image mb-3">
                        <img src="mockup_3.jpg" alt="Mockup 3" class="branding-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional: Add Footer or other sections if needed -->

    <!-- Add custom styles for images -->
@endsection

<!-- Push styles -->
@push('styles')
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

<!-- Push scripts -->
@push('scripts')
    <!-- Main jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup-->
    <script src="{{ asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('plugins/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Google Map -->
    <script src="{{ asset('plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endpush
