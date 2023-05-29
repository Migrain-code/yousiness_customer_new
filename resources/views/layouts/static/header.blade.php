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

</head>
<body class="home-five">
    <div class="main-wrapper">
        @include('layouts.menu.top')