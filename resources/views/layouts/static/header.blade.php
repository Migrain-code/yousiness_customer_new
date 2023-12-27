<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{setting('speed_site_title'). ' | '}}@yield('title')</title>
    <meta name="description" content="@yield('meta_description', setting('speed_meta_descriptions'))">

    <!-- Favicons -->
    <link type="image/x-icon" href="{{image(setting('speed_favicon'))}}" rel="icon">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @include('layouts.component.styles')
    <style>
        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");

        }
        .ts-control {
            height: 50px !important;
        }
        .ts-control > .item{
            font-size: 18px;
            padding-top: 5px;
        }
    </style>
    <!-- Hotjar Tracking Code for https://yousiness.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3807108,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</head>
<body class="home-five">
    <div class="main-wrapper">
        @include('layouts.menu.top')