<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
    <meta name="author" content="themefisher.com">
    <meta name="keywords"
        content="Branding, Social Media, Graphic Design, Photography, Videography, Events, Wood Manufacturing, Web Development, Content Creation, Advertising">

    <meta name="robots" content="index, follow">
    <meta name="author" content="lagunavco">
    <meta name="copyright" content="lagunavco">
    <meta name="language" content="English">
    <meta name="rating" content="General">

    <title> @yield('title')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/fav icon.png') }}">

    <meta property="og:title" content="lagunavco">
    <meta property="og:description"
        content="A creative agency specializing in branding, social media management, graphic design, web development, photography, videography, and content creation. We help businesses grow with innovative digital solutions and compelling visuals.">
    <meta property="og:url" content="https://www.lagunavco.com">
    <meta property="og:type" content="website">

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- In your home.blade.php, add this inside the <head> section for styles -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('styles')

</head>

<body>

    <!-- Header Start -->
    @include('homeincludes.nav')
    <!-- Header Close -->

    <div class="main-wrapper ">
        <!-- Slider Start -->
        @yield('content')
        <!-- footer Start -->
        @include('homeincludes.footer')
    </div>

    <!--
        Essential Scripts
        =====================================-->

    <!-- At the bottom of your layout, just before the closing </body> tag, add this for scripts -->
    @stack('scripts')

    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script src="js/script.js"></script>

</body>

</html>
