<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>StarMetrics</title>
        <!-- My css link metrics -->
        <link href="{{ asset('/css/metrics/header.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/calendar.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/footer.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/cardPoints.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/table.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/app.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/chart.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/workspace.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/performance.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/produtos.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/login.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/pop.code.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/1024.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/768.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/600.css') }}" rel="stylesheet"> 
        <link href="{{ asset('/css/metrics/sidebar-mobile.css') }}" rel="stylesheet"> 

         <!-- My css link living --> 
        <link href="{{ asset('/css/living/bootstrap/dist/css/bootstrap.min.css') }}" rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="{{ asset('/css/living/sidebar.css') }}" rel='stylesheet'> 
        <link href="{{ asset('/css/living/header.css') }}" rel='stylesheet'> 
        <link href="{{ asset('/css/living/calendar.css') }}" rel='stylesheet'> 
        <link href="{{ asset('/css/living/block.css') }}" rel='stylesheet'> 
        <link href="{{ asset('/css/living/card.css') }}" rel='stylesheet'> 
        <link href="{{ asset('/css/living/app.css') }}" rel='stylesheet'> 
        <link href="{{ asset('/css/living/responsive.css') }}" rel='stylesheet'> 
        <link href="
        https://cdn.jsdelivr.net/npm/notiflix@3.2.6/dist/notiflix-3.2.6.min.css
        " rel="stylesheet">
        <script src="
        https://cdn.jsdelivr.net/npm/notiflix@3.2.6/dist/notiflix-aio-3.2.6.min.js
        "></script>

        <!-- Risize page js -->
        <script src="{{ asset('/js/living/resize.js')}}"></script>

        <!-- Datapicker range calendar css -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <!-- Icons BOX ICONS css -->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
        <!-- Cdn font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body id="admin-body">
        {{ $slot }}
    </body>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JQuery Mask CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <!-- Datapicker CDN JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script src="{{ asset('/js/metrics/counter.code.js') }}"></script>
    <script src="{{ asset('/js/metrics/pop.code.js') }}"></script>
    <script src="{{ asset('/js/metrics/animation.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('/css/living/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

    <script src="{{ asset('/js/living/loader.js')}}"></script>

    <!-- Icons js -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    
    <!-- Dates js -->
    <script src="{{ asset('/js/living/dates.js')}}"></script>
    <!-- Calendar js -->
    <script src="{{ asset('/js/living/calendar.js')}}"></script>
    <!-- Drag drop input js js -->
    <script src="{{ asset('/js/living/dragdrop.js')}}"></script>
    <!-- Block animation input js js -->
    <script src="{{ asset('/js/living/block.js')}}"></script>
    <!-- Scripts js --> 
    <script src="{{ asset('/js/living/script.js')}}"></script>

</html>