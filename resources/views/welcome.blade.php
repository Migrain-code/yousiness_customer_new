@extends('layouts.master')
@section('title', 'Startseite')
@section('meta_description', config('settings.meta_description'))
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.css" integrity="sha512-EDXaYrpumQKF+Ic8nuEsgJWBwMOhgwWvNINclFu91nx5VR4MeZ5xlUvyRaYQJTMImwbXSeDjtZMtTs8EB65Z0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .ts-dropdown [data-selectable] .highlight {
            background: rgb(129 129 129);
            border-radius: 14px;
            padding: 5px;
        }
        .header {
             background: transparent;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            display: block;
        }
        .ts-dropdown.plugin-optgroup_columns .ts-dropdown-content {
            display: flex;
            flex-direction: column;
        }
        @media (min-width: 1360px)
        {
            .container, .container-lg, .container-md, .container-sm, .container-xl {
                max-width:1200px;
            }
        }
        .feather-arrow-right:before {
            content: "\e912";
            margin-right: 5px;
        }
    </style>
@endsection
@section('content')
    <style>
        .tab-content{
            background: #d59c4b;
            padding: 10px;
            border-radius: 0px 5px 5px 5px;
        }

        .form-group{
            margin-right: 5px;
        }
        .search-input-five {
            float: left;
            display: block;
            vertical-align: middle;
            position: relative;
            width: 50%;
        }
        .search-result{
            position: absolute;
            background: white;
            width: 98%;
            top: 50px;
            border-bottom-right-radius: 15px;
            border-bottom-left-radius: 15px;
        }
    </style>
    <!-- Home Five Banner -->
    <section class="home-section-five" style="background-image: url('{{image(main('speed_main_page_header_image'))}}')">
        <div class="container mb-2">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="banner-wrapper-five aos" data-aos="fade-up">
                        <div class="section-search-five text-center">
                            <div class="tit-secret">
                                <span>{{main('speed_main_page_small_title')}} </span>
                                <h2>{{main('speed_main_page_big_title')}}</h2>

                            </div>
                            <div class="search-box-five">
                                <div class="col-md-12 p-0">
                                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded" style="justify-content: space-evenly!important;">
                                        <li class="nav-item"><a class="nav-link active" href="#solid-rounded-tab1" data-bs-toggle="tab"><img src="https://i.hizliresim.com/b5gpjf2.png"></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#solid-rounded-tab2" data-bs-toggle="tab"><img src="https://i.hizliresim.com/gpjmx06.png"></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#solid-rounded-tab3" data-bs-toggle="tab"><img src="https://i.hizliresim.com/nm41k5u.png"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="solid-rounded-tab1">
                                            @include('layouts.component.error')
                                            <form action="{{route('searchSubService')}}" method="post">
                                                @csrf
                                                <div class="search-input-five">
                                                    <i class="feather-scissors bficon"></i>
                                                    <div class="form-group my-1">
                                                        <select id="select-service" class="" placeholder="Suche nach Dienstleistung" style="" name="sub_category">
                                                            <option value="">Suche nach Dienstleistung</option>
                                                            @forelse($service_sub_categories as $service)
                                                                <option value="{{$service->id}}">{{$service->name}}</option>
                                                            @empty

                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="search-input-five line-five">
                                                    <i class="feather-compass bficon compass-icon"></i>
                                                    <div class="form-group my-1">
                                                        <input type="hidden" name="lat" id="lat" value="">
                                                        <input type="hidden" name="long" id="long" value="">
                                                        <select class="" placeholder="PLZ oder Stadt" id="city_service" name="city_id">
                                                            <option value="">PLZ oder Stadt</option>
                                                            <option value="nach_Standort">nach Standort</option>
                                                            @forelse($cities as $city)
                                                                <option value="{{$city->id}}">{{$city->name. ",".$city->post_code}}</option>
                                                            @empty

                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="search-btn-five">
                                                    <button class="btn search_service" type="submit"><i class="fas fa-search me-2"></i>Suchen</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="solid-rounded-tab2">
                                            <form action="{{route('businessCategorySearch')}}" method="post">
                                                @csrf
                                                <div class="search-input-five">
                                                    <i class="feather-scissors bficon"></i>
                                                    <div class="form-group my-1">
                                                        <select id="select-salon-type" class="js-example-basic-single" placeholder="Suche nach Salon Kategorien" style="" name="category_id">
                                                            <option value="">Suche nach Salon Kategorien</option>
                                                            @forelse($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @empty

                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="search-input-five line-five">
                                                    <i class="feather-compass bficon compass-icon"></i>
                                                    <div class="form-group my-1">

                                                        <select class="" placeholder="PLZ oder Stadt" id="city_service_2" name="city_id">
                                                            <option value="">PLZ oder Stadt</option>

                                                            @forelse($cities as $city)
                                                                <option value="{{$city->id}}">{{$city->name. ",".$city->post_code}}</option>
                                                            @empty

                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="search-btn-five">
                                                    <button class="btn search_service" type="submit"><i class="fas fa-search me-2"></i>Suchen</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="solid-rounded-tab3">
                                            <form action="#">
                                                <div class="search-input-five" style="width: 100%;margin-right: 5px;">
                                                    <i class="feather-shopping-bag bficon shopping-bag-icon"></i>
                                                    <div class="form-group mb-0">

                                                        <input type="text" class="form-control" placeholder="Salonname" name="business_name" value="" id="search">
                                                        <div class="" id="search-result">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search-btn-five">
                                                    <button class="btn search_service" type="submit"><i class="fas fa-search me-2"></i>Suchen</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="text-center mt-3 header-description">
                                <p>{{main('speed_main_page_description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


        <!-- Clinic Section Five -->
        @if(setting('speed_main_page_section_2') == 1)
        <section class="clinic-section-five">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">SALON KATEGORIEN</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse($categories as $category)
                    <!--ITEM-->
                    <div class="col-6 col-md-4 d-flex aos col-custom" data-aos="fade-up">
                        <div class="clinic-grid-five w-100 hvr-bounce-to-bottom">
                            <div class="clinic-grid-img">
                                <div class="clinic-img-five">
                                    <img src="{{image($category->icon)}}" alt="">
                                </div>
                            </div>
                            <div class="clinic-grid-info">
                                <p>{{$category->name}}</p>
                                <div class="clinic-five-btn">
                                    <a href="{{route('categoryGet', $category->slug)}}" class="btn">Anzeigen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ITEM-->
                @empty

                @endforelse


            </div>
            <!--
             <div class="clinic-see-btn text-center aos" data-aos="fade-up">
                <a href="#" class="btn btn-six">Tüm Salon Türlerini Göster</a>
            </div>
            --->
        </div>
    </section>
    @endif

    <!-- /Home Five Banner -->
    <!-- Looking Section Five -->
    @if(setting('speed_main_page_section_1') == 1)
        <section class="how-to-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                                <h2 class="title-five">{{main('speed_section_1_main_title')}}</h2>
                    </div>
                </div>
            </div>

            <div class="how-to-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="number">
                                1
                            </div>
                            <div class="image">
                                <img src="{{image(main('speed_section_1_box_1_image'))}}" alt="">
                            </div>
                            <div class="hero">{{main('speed_section_1_box_1_title')}}
                                <br><br>
                            </div>

                            <p style="height: 96px;">{{main('speed_section_1_box_1_description')}}
                                <br><br>
                            </p>
                            <a href="{{main('speed_section_1_box_1_button_link')}}" class="btn btn-five">{{main('speed_section_1_box_1_button_text')}}</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="item">
                            <div class="number">
                                2
                            </div>
                            <div class="image">
                                <img src="{{image(main('speed_section_1_box_2_image'))}}" alt="">
                            </div>
                            <div class="hero">{{main('speed_section_1_box_2_title')}}</div>

                            <p>{{main('speed_section_1_box_2_description')}}</p>
                        <a href="{{main('speed_section_1_box_2_button_link')}}" class="btn btn-five">{{main('speed_section_1_box_2_button_text')}}</a>

                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="item">
                            <div class="number">
                                3
                            </div>
                            <div class="image">
                                <img src="{{image(main('speed_section_1_box_3_image'))}}" alt="">
                            </div>
                            <div class="hero">{{main('speed_section_1_box_3_title')}}</div>

                            <p>{{main('speed_section_1_box_3_description')}}
                                <br><br><br>
                            </p>
                            <a href="{{main('speed_section_1_box_3_button_link')}}" style="margin-top: -5px !important;" class="btn btn-five">{{main('speed_section_1_box_3_button_text')}}</a>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="how-to-area">
        <div class="container" style="padding: 30px;border-radius: 25px;background: #d59c4b;">
            <iframe width="100%"
                    style="border-radius: 25px"
                    height="600px"
                    src="{{main('speed_main_page_video')}}"
                    title="Main Page Video"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        </div>
    </section>
   <section class="homepage-first-ads-banner bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="first-ads-banner">
                        <a href="{{$ads->first()->link}}" style="width: 100%;">
                            <img src="{{image($ads->first()->image)}}" alt="970*90" style="max-height: 180px;width: 100%">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(setting('speed_main_page_section_4') == 1)
    <!-- Browse Section Five -->
    <section class="browse-section-five" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">TOP DIENSTLEISTUNGEN</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($featuredServices as $subCategory)
                    <div class="col-6 col-custom aos" data-aos="fade-up">
                        <div class="specialist-card-five d-flex hvr-bounce-to-right">
                            <div class="specialist-img-five">

                                <img src="{{image($subCategory->icon)}}" alt="" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="{{route('serviceSubCategoryGet', [$subCategory->category->slug,  $subCategory->slug])}}">{{$subCategory->name}}</a>
                            </div>
                            <div class="specialist-nav-five ms-auto">
                                <a href="{{route('serviceSubCategoryGet', [$subCategory->category->slug, $subCategory->slug])}}"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <section class="homepage-first-ads-banner bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="first-ads-banner">
                        <a href="{{$ads->first()->link}}" style="width: 100%;">
                            <img src="{{image($ads->first()->image)}}" alt="970*90" style="max-height: 180px;width: 100%">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="browse-section-five" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">DIENSTLEITUNGEN</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($abroadServices as $subCategory)
                    <div class="col-6 col-custom aos" data-aos="fade-up">
                        <div class="specialist-card-five d-flex hvr-bounce-to-right">
                            <div class="specialist-img-five">

                                <img src="{{image($subCategory->icon)}}" alt="" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="{{route('serviceSubCategoryGet', [$subCategory->category->slug,  $subCategory->slug])}}">{{$subCategory->name}}</a>
                            </div>
                            <div class="specialist-nav-five ms-auto">
                                <a href="{{route('serviceSubCategoryGet', [$subCategory->category->slug, $subCategory->slug])}}"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <section class="browse-section-five" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">STANDORTE</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                    @forelse($abroadCities as $cityA)
                    <div class="col-6 col-custom aos" data-aos="fade-up">
                        <div class="specialist-card-five d-flex hvr-bounce-to-right">
                            <div class="specialist-info">
                                <a href="{{route('categoryCityGet', $cityA->slug)}}">{{$cityA->name}}</a>
                            </div>
                            <div class="specialist-nav-five ms-auto">
                                <a href="{{route('categoryCityGet', $cityA->slug)}}"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>

    <section class="homepage-first-ads-banner bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="first-ads-banner">
                        <a href="{{$ads->skip(1)->first()->link}}" style="width: 100%;">
                            <img src="{{image($ads->skip(1)->first()->image)}}" alt="970*90" style="max-height: 180px;width: 100%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Browse Section Five -->
    @endif

    @if(setting('speed_main_page_section_5') == 1)
        @if($activities->count() > 0)
            <!-- Best Section Five -->
            <section class="best-section-five">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                                <h2 class="title-five">EVENTS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @forelse($activities as $activity)
                            <div class="col-lg-4 col-md-6 mb-2 d-flex aos" data-aos="fade-up">
                                <div class="blog-grid-five w-100">
                                    <div class="blog-five-img">
                                        <a href="{{route('activity.detail', $activity->slug)}}">
                                            <img src="{{image($activity->image)}}" class="img-fluid blog-details-img" alt="">
                                        </a>
                                        <div class="blog-item-info">
                                            <div class="blog-news-date">
                                                <a href="{{route('activity.detail', $activity->slug)}}">
                                                    <i class="feather-calendar me-2"></i>
                                                    <span>{{$activity->created_at->translatedFormat('d F Y')}}</span>
                                                </a>
                                            </div>
                                            <div class="blog-doctors-profile">
                                                <a href="{{route('activity.detail', $activity->slug)}}">
                                                    <img src="{{image(setting('speed_favicon'))}}" alt="" class="me-2">
                                                    <span>Admin</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-info-five">
                                        <h3 class="blog-news-title">
                                            <a href="{{route('activity.detail', $activity->slug)}}">{{$activity->title}}</a>
                                        </h3>
                                        <p>
                                            {{\Illuminate\Support\Str::limit(strip_tags($activity->description), 100, '...')}}
                                        </p>
                                        <a href="{{route('activity.detail', $activity->slug)}}" class="btn-five" style="max-width: 200px;margin: 0 auto"> Demnächst</a>

                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div>
                    @if($activities->count() >= 4)
                        <div class="doctor-see-btn text-center aos" data-aos="fade-up">
                            <a href="{{route('activity.index')}}" class="btn btn-six">Alle Events</a>
                        </div>
                    @endif
                </div>
            </section>
            <!-- /Best Section Five -->
        @endif

    @endif
    @if(setting('speed_main_page_section_6') == 1)
        @if($blogs->count() > 0)
            <!-- Blog Section Five -->
            <section class="blog-section-five">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                                <h2 class="title-five">BLOGS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @forelse($blogs as $blog)
                            <div class="col-lg-4 col-md-6 mb-2 d-flex aos" data-aos="fade-up">
                                <div class="blog-grid-five w-100">
                                    <div class="blog-five-img">
                                        <a href="{{route('blog.detail', $blog->slug)}}">
                                            <img src="{{image($blog->image)}}" class="img-fluid blog-details-img" style="height: 285px;" alt="">
                                        </a>
                                        <div class="blog-item-info">
                                            <div class="blog-news-date">
                                                <a href="{{route('blog.detail', $blog->slug)}}">
                                                    <i class="feather-calendar me-2"></i>
                                                    <span>{{$blog->created_at->format('d.m.Y')}}</span>
                                                </a>
                                            </div>
                                            <div class="blog-doctors-profile">
                                                <a href="{{route('blog.detail', $blog->slug)}}">
                                                    <img src="{{image(setting('speed_favicon'))}}" alt="" class="me-2">
                                                    <span>Admin</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-info-five">
                                        <h3 class="blog-news-title">
                                            <a href="{{route('blog.detail', $blog->slug)}}">{{$blog->title}}</a>
                                        </h3>
                                        <p>{{substr(strip_tags($blog->description), 0, 200)}}</p>
                                        <a href="{{route('blog.detail', $blog->slug)}}" class="read-news">weiter lesen</a>
                                    </div>
                                </div>

                            </div>

                        @empty

                        @endforelse
                        <div class="row text-center">
                            <div class="blog-five-btn aos" data-aos="fade-up">
                                <a href="{{route('blog.index')}}" class="btn btn-six">Mehr</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /Blog Section Five -->
        @endif
    @endif
    <section class="section section-testimonial">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 order-1 order-md-1 wow tpfadeLeft" data-wow-duration=".9s"
                 data-wow-delay=".5s"
                 style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: tpfadeLeft;">
                <div class="tp-sales-section-box pb-20">
                    <h3 class="tp-section-title-3 pb-15 " style="font-size: 35px;font-family: 'Poppins';">{{main("business_section_1_box_3_title")}}</h3>
                    <p class="tp-title-anim" style="perspective: 300px;">
                    <div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 285px 14px; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                        {{main("business_section_1_box_3_description")}}
                    </div>
                    </p>
                </div>
                <div class="tp-sales-feature">
                    <div class="d-flex justify-content-start">
                        <div class="col-lg-4 col-md-6 col-sm-12 me-4">
                            <a href="{{setting('speed_app_store')}}">
                            <img src="/front/apple_store_logo.svg" width="200" height="80"
                                 class="">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <a href="{{setting('speed_google_play')}}">
                                <img src="/front/google_play_logo.svg" width="200" height="80">
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-xl-6 col-lg-6 order-0 order-md-2 wow tpfadeRight" data-wow-duration=".9s"
                 data-wow-delay=".7s"
                 style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: tpfadeRight;">
                <div class="tp-sales-img-wrapper p-relative text-end">
                    <div class="tp-plan-2-img-box p-relative">
                        <img src="{{image(main("business_section_1_box_3_image"))}}">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    @if($comments->count() > 0)
        <section class="section section-testimonial">
            <div class="container">
                <div class="section-header text-center mb-4">
                    <h2>Kunden-Kommentare</h2>
                    <!--<p class="sub-title">Müşteri yorumlarımız.</p>-->
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <!-- Slider -->
                        <div class="testimonial-slider slider">

                            @forelse($comments as $comment)
                                <!-- Slider Item -->
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-img">
                                        <img src="{{image($comment->image)}}" class="img-fluid" style="height: 150px" alt="Speciality">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>{{$comment->description}}</p>
                                        <p class="user-name">{{$comment->name}}</p>

                                    </div>
                                </div>
                                <!-- /Slider Item -->
                            @empty
                            @endforelse
                        </div>
                        <!-- /Slider -->
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="browse-section-five" id="services">
        <div class="container">
            @forelse($featuredCategories as $fCategory)
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                            <h2 class="title-five">{{strtoupper($fCategory->category?->name)}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row col-lg-12">
                    <!---Buraya Şehirlerin Döngüsü gelecek---->
                    @foreach($fCategory->cities as $city)
                        <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                            <div class="specialist-card-five d-flex hvr-bounce-to-right">
                                <div class="specialist-img-five">
                                    <img src="/front/map.png" alt="" class="img-fluid">
                                </div>
                                <div class="specialist-info">
                                    <a href="{{route('featuredCategoryAllGet', [$city->city->slug, $fCategory->category->slug])}}">{{$city->city->name}} <br> {{$fCategory->category->name}}</a>
                                </div>
                                <div class="specialist-nav-five ms-auto">
                                    <a href="{{route('featuredCategoryAllGet', [$city->city->slug, $fCategory->category->slug])}}"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @empty
            @endforelse



        </div>


    </section>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

    <script>
        $(document).ready(function() {
            var selectElements = document.querySelectorAll('.js-example-basic-single');

            // Her bir öğeye Tom Select'i uygulayın
            selectElements.forEach(function(element) {
                new TomSelect(element, {
                    autocomplete: false,
                    maxItems: 1,
                    language: 'tr'
                });
            });

        });
        // Arama kutusunu seçin
        var search = document.querySelector('#search');

        search.addEventListener('input', function() {

            if(search.value==""){
                document.querySelector('#search-result').innerHTML="";
            }
            var xhr = new XMLHttpRequest();

            var url = '{{ route('live-search') }}?search=' + encodeURIComponent(search.value);

            xhr.open('GET', url);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.querySelector('#search-result').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>

    <script>

        var mySelect = new TomSelect("#city_service", {
            remoteUrl: '/api/city/search',
            remoteSearch: true,
            create: false,
            highlight: false,
            load: function(query, callback) {
                $.ajax({
                    url: '/api/city/search', // Sunucu tarafındaki arama API'sinin URL'si
                    method: 'POST',
                    data: { q: query }, // Arama sorgusu
                    dataType: 'json', // Beklenen veri tipi
                    success: function(data) {

                        var results = data.cities.map(function(item) {
                            console.log('item', item.name);
                            return {
                                value: item.id,
                                text: item.name + "," + item.post_code,
                            };
                        });

                        callback(results);
                    },
                    error: function() {
                        console.error("Arama sırasında bir hata oluştu.");
                    }
                });
            }
        });
        var mySelect2 = new TomSelect("#city_service_2", {
            remoteUrl: '/api/city/search',
            remoteSearch: true,
            create: false,
            highlight: false,
            load: function(query, callback) {
                $.ajax({
                    url: '/api/city/search', // Sunucu tarafındaki arama API'sinin URL'si
                    method: 'POST',
                    data: { q: query }, // Arama sorgusu
                    dataType: 'json', // Beklenen veri tipi
                    success: function(data) {

                        var results = data.cities.map(function(item) {
                            console.log('item', item.name);
                            return {
                                value: item.id,
                                text: item.name + "," + item.post_code,
                            };
                        });

                        callback(results);
                    },
                    error: function() {
                        console.error("Arama sırasında bir hata oluştu.");
                    }
                });
            }
        });

        var mySelect3 = new TomSelect("#select-service", {
            remoteUrl: '/api/city/search',
            remoteSearch: true,
            create: false,
            highlight: false,
            load: function(query, callback) {
                $.ajax({
                    url: '/api/services/all-subcategory', // Sunucu tarafındaki arama API'sinin URL'si
                    method: 'POST',
                    data: { q: query }, // Arama sorgusu
                    dataType: 'json', // Beklenen veri tipi
                    success: function(data) {

                        var results = data.sub_categories.map(function(item) {
                            console.log('item', item.name);
                            return {
                                value: item.id,
                                text: item.name,
                            };
                        });

                        callback(results);
                    },
                    error: function() {
                        console.error("Arama sırasında bir hata oluştu.");
                    }
                });
            }
        });
        $(function (){
            //getLocation();
        });
        mySelect.on('change', function() {
            var selectedOption = mySelect.getValue();

            if (selectedOption == "nach_Standort") {
                getLocation();
            }
        });

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                // Tarayıcı konum API'si desteklenmiyor.
                alert("Tarayıcınız konum servisini desteklemiyor.");
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            $('#lat').val(latitude);
            $('#long').val(longitude);

        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("Konum izni reddedildi.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Konum bilgisi mevcut değil.");
                    break;
                case error.TIMEOUT:
                    alert("İstek zaman aşımına uğradı.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("Bilinmeyen bir hata oluştu.");
                    break;
            }
        }
    </script>

@endsection
