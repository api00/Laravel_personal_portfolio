<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Metadata of the Webpage -->
    <!-- Character-set Metadata -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Viewport Metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Description Metadata-->
    <meta name="description" content="Portfolio Website" />
    <!-- Author Metadata -->
    <meta name="author" content="Api Alam Apu" />
    <!-- Keyword Metadata -->
   
    <!-- Webpage Logo -->
    <link rel="shortcut icon" href="{{ asset('storage/img/favicon.ico') }}" />
    <!-- Webpage Title -->
    <title>Api Alam Apu</title>

    <!-- Import CSS: Main Stylesheet -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
    

    
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}" />

  </head>

  <body>
 @include('portfolio.layout.header')
 

   @yield('content')
   @include('portfolio.layout.contact')
 @include('portfolio.layout.footer')
    <!-- Import JS: Particles Theme -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- Import JS: Sweet Scroll -->
    <script src="{{ asset('storage/js/sweet-scroll.min.js') }}"></script>
 
    <!-- Import JS: Main Script -->
    <script src="{{ asset('storage/js/main.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
