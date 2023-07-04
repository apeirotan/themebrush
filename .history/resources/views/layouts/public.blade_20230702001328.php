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
        @vite
        @foreach(File::glob(resource_path('views/themes/{ env('APP_THEME') }/assets/css/*.css')) as $cssFile)
            <link rel="stylesheet" href="{{ asset(vite_mix($cssFile)) }}">
        @endforeach
          
    
           @stack('styles')
    </head>
    <body class="antialiased">
        @include('themes.'.env('APP_THEME').'.header')
@yield('content')
@include('themes.'.env('APP_THEME').'.footer')
@stack('scripts')
    </body>
</html>