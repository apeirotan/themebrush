<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        @stack('meta')
        @stack('open-graph')
        @stack('twitter-card')
        @stack('json-ld')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @php $cssFiles = []; @endphp
   @foreach(File::glob(resource_path('views/themes/{{  }}/assets/css/*.css')) as $cssFile)
   $cssFiles[] = $cssFile;
        @endforeach
        @vite( $cssFiles[])
    
           @stack('styles')
    </head>
    <body class="antialiased">
        @include('themes.'.env('APP_THEME').'.header')
@yield('content')
@include('themes.'.env('APP_THEME').'.footer')
    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn scroll-top-btn1 scroll-top-btn2"><i class="fas fa-angle-up arrow-up"></i><i
        class="fas fa-circle-notch"></i></div>
<!--================= Scroll to Top End =================-->

<!--================= Jquery latest version =================-->
<script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
<!--================= Bootstrap latest version =================-->
<script src="assets/js/vendors/bootstrap.min.js"></script>
<!--================= Wow.js =================-->
<script src="assets/js/vendors/wow.min.js"></script>
<!--================= Swiper Slider =================-->
<script src="assets/js/vendors/swiper-bundle.min.js"></script>
 <!--================= Nice Select =================-->
 <script src="assets/js/vendors/jquery.nice-select.js"></script>
<!--================= metisMenu Plugin =================-->
<script src="assets/js/vendors/metisMenu.min.js"></script>
<!--================= Main Menu Plugin =================-->
<script src="assets/js/vendors/rtsmenu.js"></script>
<!--================= Magnefic Popup Plugin =================-->
<script src="assets/js/vendors/isotope.pkgd.min.js"></script>
<!--================= Magnefic Popup Plugin =================-->
<script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
<!--================= Main Script =================-->
<script src="assets/js/main.js"></script>
@stack('scripts')
    </body>
</html>
