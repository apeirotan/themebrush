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
   
    
    @vite(['resources/assets/css/main.css', 
     'resources/assets/css/all.min.css',
  
    'resources/assets/css/rt-icons.css',
    
    'resources/assets/css/animate.min.css',
      
    'resources/assets/css/magnific-popup.css',
    
    'resources/assets/css/swiper-bundle.min.css',
     
    'resources/assets/css/metisMenu.css',
    
    'resources/assets/css/preloader.css',
    
    'resources/assets/css/rtsmenu.css',
   
    'resources/assets/css/variables/variable3.css',
  
    'resources/assets/css/style.css'])
    

    
           @stack('styles')
    </head>
    <body class="antialiased">
        @include('themes.'.env('APP_THEME').'.header')
@yield('content')
@include('themes.'.env('APP_THEME').'.footer')
@stack('scripts')
    </body>
</html>
