<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>iamgrsagor</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body id="top">
    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="{{ asset('assets/images/Kitchen_video_Afternoon_11_21_2024__3_.mp4') }}" type="video/mp4" />
            <div class="video-fallback"></div>
        </video>
        <div class="overlay"></div>
    </div>

    @include('front.layout.header')
    @yield('content')
    @include('front.layout.footer')
    @include('front.layout.preloader')

    <script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
