<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('assets/img/heading-img.png')}}" />
    <!-- CSS only -->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
    <!-- fancybox -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}" />
    <!-- style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <!-- color -->
    <link rel="stylesheet" href="{{asset('assets/css/color.css')}}" />
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/preloader.js')}}"></script>
  </head>
  <body>

    @include('public.templating.header')
    @yield('content')
    @include('public.templating.footer')

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- fancybox -->
    <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
  </body>
</html>