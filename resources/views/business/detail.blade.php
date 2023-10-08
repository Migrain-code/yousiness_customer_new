@extends('layouts.master')
@section('title', $business->name)
@section('meta_description', $business->name ." Detayı")
@section('styles')
    <link rel="stylesheet" href="/front/assets/css/app.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css" integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        iframe {
            width: 100%;
            height: 350px;
            border-radius: 15px;
        }
        @media (max-width: 1090px) {
            .yorum_mobil_rating {
                padding-top: 5px;
                width: 100px;
            }
        }
            @media (min-width: 1090px) {
                .yorum_mobil_rating {
                    padding-top: 5px;
                    padding-left: 50%;
                }
        }
    </style>
@endsection
@section('content')

    <div class="gallery">

        <div class="gallery-background d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-xmark xmark-icon"></i>
            <div class="container">
               <div>
                   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                       <div class="carousel-indicators">
                           @forelse($business->gallery as $gallery)
                               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}" @if($loop->first) class="active" @endif aria-current="true" aria-label="Slide {{$loop->index}}"></button>
                           @empty
                               <div class="alert alert-warning text-center">İşletmenin Fotoğraf Galerisi Bulunamadı</div>
                           @endforelse

                       </div>
                       <div class="carousel-inner">
                           @forelse($business->gallery as $gallery)
                               <div class="carousel-item @if($loop->first) active @endif">
                                   <img src="{{image($gallery->way)}}" style="height: 100%; object-fit: cover" class="d-block w-100" alt="...">
                               </div>
                           @empty
                               <div class="alert alert-warning text-center">İşletmenin Fotoğraf Galerisi Bulunamadı</div>
                           @endforelse

                       </div>
                       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Previous</span>
                       </button>
                       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="visually-hidden">Next</span>
                       </button>
                   </div>
               </div>
            </div>




        </div>
    </div>

    <div class="container mt-5">
        <div class="company-title">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex">
{{--                        <div class="company-logo"> --}}
{{--                            <img src="https://via.placeholder.com/200x200" alt="" style="height: 100px; width: 100px;">--}}
{{--                        </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <hr>
            <div class="row" data-aos="fade-out">
                <div class="col-md-5">
                    <div class="d-flex mb-3">
                         <div class="company-logo">
                           <img style="100px; width: 100px;" src="{{image($business->logo)}}" alt="">
                         </div>
                        <div class="mx-2 company-title d-flex flex-column justify-content-start my-auto">
                            <h3 class="company-name">{{$business->name}}</h3>
                            <div class="rating">
                                @if($business->comments->count() > 0)
                                    @for($i=0; $i < 5; $i++ )
                                        <i class="fas fa-star @if($i < $business->comments->sum('point') / $business->comments->count()) filled @endif"></i>
                                    @endfor
                                @else
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                @endif
                                <span class="d-inline-block average-rating">
                                                    <i class="far fa-comment" style="margin-left: 15px"></i> {{$business->comments->count()}} Yorum
                                </span>
                            </div>
                        </div>
                    </div>


                        <div class="btn-group btn-group-toggle ust_menu_mar detail-links">
                            <div class="d-flex detail-links ">

                                    <a  class="gallery-button"><button type="button" class="company-buttons btn-search border border-right active company_left_menu" ><i class="fa fa-comment"></i> Galeri</button></a>
                                    <a href="#adres_company" class="adres"> <button type="button" class=" company-buttons btn-search border border-right company_left_menu"><i class="fa fa-map"></i> Adres</button></a>

                                    <a href="#iletisim_company"><button type="button" class=" company-buttons btn-search border border-right company_left_menu"><i class="fa fa-phone"></i> İletişim</button></a>
                                    <a href="#comments"><button type="button"  style="width: 122px;" class=" company-buttons btn-search border border-right company_left_menu"><i class="fa fa-comment"></i> Yorumlar</button></a>

                            </div>
                         </div>

                    <div class="tabs mt-5">
                        <ul>
                            @if($business->type->id == 3)
                                @if($manServiceCategories->count() > $womanServiceCategories->count())
                                    <li class="tab-titles active p-3" onclick="tabsFunction(this)">Erkek</li>
                                    <li class="tab-titles p-3" onclick="tabsFunction(this)">Kadın</li>
                                @else
                                    <li class="tab-titles  p-3" onclick="tabsFunction(this)">Erkek</li>
                                    <li class="tab-titles active p-3" onclick="tabsFunction(this)">Kadın</li>
                                @endif
                            @elseif($business->type->id == 2)
                                <li class="tab-titles active p-3" onclick="tabsFunction(this)">Erkek</li>
                            @elseif($business->type->id == 1)
                                <li class="tab-titles p-3 active" onclick="tabsFunction(this)">Kadın</li>
                            @endif
                        </ul>
                        <div class="tab-contents">
                            <div class="tab-content @if($business->type->id == 3 && $manServiceCategories->count() > $womanServiceCategories->count()) active @endif">
                                @forelse($manServiceCategories as $manCategories)
                                    <div class="service-card mb-1" onclick="cardChange(this)">
                                        <div class="service-title p-2">
                                            <span>{{$manCategories->first()->categorys->name}}</span>
                                        </div>
                                        <div class="services">
                                            <ul class="d-flex flex-column">
                                                @forelse($manCategories as $service)
                                                    <li class="my-1 ps-1">
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <div class="service-name">{{$service->subCategory->name}}</div>
                                                            <div class="appointment">
                                                                <span class="price">{{$service->price . "€"}}</span>
                                                                <a href="{{ route('step1.show', ['business' => $business->slug, 'request' => array('services' => array($service->id))])}}" class="appointment-button ms-4 ">Randevu Al</a>

                                                            </div>
                                                        </div>

                                                    </li>
                                                @empty
                                                @endforelse

                                            </ul>
                                        </div>
                                    </div>

                                @empty
                                @endforelse

                            </div>
                            <div class="tab-content @if($business->type->id == 3 && $manServiceCategories->count() < $womanServiceCategories->count()) active @endif">
                                @forelse($womanServiceCategories as $womanCategories)
                                    <div class="service-card mb-1" onclick="cardChange(this)">
                                        <div class="service-title p-2">
                                            <span>{{$womanCategories->first()->categorys->name}}</span>
                                        </div>
                                        <div class="services">
                                            <ul class="d-flex flex-column">
                                                @forelse($womanCategories as $service)
                                                    <li class="my-1 ps-1">
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <div class="service-name">{{$service->subCategory->name}}</div>
                                                            <div class="appointment">
                                                                <span class="price">{{$service->price}} €</span>
                                                                <a href="{{ route('step1.show', ['business' => $business->slug, 'request' => array('services' => array($service->id))])}}" class="appointment-button ms-4 ">Randevu Al</a>

                                                            </div>
                                                        </div>

                                                    </li>
                                                @empty
                                                @endforelse

                                            </ul>
                                        </div>
                                    </div>

                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">

                        <div class="glide-slider"  >
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    @forelse($business->gallery as $gallery)
                                        <li class="glide__slide">
                                            <img src="{{image($gallery->way)}}" alt="" style="width: 100%; height: 500px; object-fit: cover">
                                        </li>
                                    @empty
                                        <div class="alert alert-warning text-center">İşletmenin Fotoğraf Galerisi Bulunamadı</div>
                                    @endforelse
                                </ul>
                            </div>
                        </div>

                    <hr>
                    <div class="informations">
                        <div>
                            <div class="information-title ms-0" data-aos="fade-up">
                                <h2 id="iletisim_company" style="margin-bottom: -10px;">İLETİŞİM </h2>
                                <svg xmlns="http://www.w3.org/2000/svg" data-aos="fade-left" width="95" height="18" viewBox="0 0 300 12" fill="">
                                    <path d="M275.982 1.4409C269.424 1.12484 262.867 0.892429 256.309 0.622849C254.145 0.529889 251.971 0.529918 249.807 0.483438C245.111 0.381188 240.414 0.288218 235.717 0.185959C233.104 0.130186 230.482 0.0651215 227.87 0.0186415C227.107 0.00934547 226.357 3.05176e-05 225.594 3.05176e-05C223.891 3.05176e-05 222.186 0.0185935 220.483 0.0278895C212.737 0.0371855 204.98 0.0464995 197.234 0.0464995C195.384 0.0464995 193.546 0.0836815 191.696 0.102274C187.122 0.148754 182.561 0.204559 177.998 0.251039C172.842 0.306819 167.696 0.325359 162.54 0.436918C154.2 0.604239 145.872 0.780908 137.531 0.948238C132.7 1.0505 127.88 1.10624 123.048 1.26427C114.731 1.54315 106.424 1.81274 98.1069 2.08232C93.567 2.23106 89.0159 2.35193 84.4759 2.56573C75.8782 2.96546 67.2803 3.35586 58.6825 3.75559C54.0866 3.9694 49.4906 4.12743 44.9058 4.45279C36.3417 5.05703 27.7888 5.66128 19.2246 6.26552C17.3749 6.39566 15.5254 6.52579 13.6758 6.65593C9.97655 6.91622 6.29982 7.32527 2.61185 7.66922C2.37644 7.69711 2.15225 7.72501 1.91685 7.7436C1.47968 7.84586 1.08733 8.03176 0.762257 8.30134C0.280242 8.70107 0 9.25882 0 9.82592C0 10.3929 0.280242 10.9507 0.762257 11.3597C1.19943 11.7222 1.96169 12.0569 2.61185 11.9919C7.06208 11.5735 11.5011 11.1366 15.9513 10.8206C20.0877 10.5324 24.2128 10.2349 28.3493 9.94672C32.8555 9.63072 37.3618 9.31462 41.8681 8.99854C43.684 8.86839 45.5 8.70109 47.3272 8.61743C54.3557 8.29207 61.3841 7.97597 68.4125 7.65061C72.7955 7.4461 77.1785 7.25092 81.5614 7.0464C83.3774 6.96274 85.1822 6.86047 86.9981 6.79539C93.9593 6.563 100.932 6.34917 107.893 6.13536C112.119 6.00522 116.333 5.86578 120.56 5.73564C121.983 5.68916 123.396 5.63337 124.819 5.60548C132.341 5.45675 139.863 5.31734 147.384 5.1779C151.588 5.09424 155.781 5.01986 159.985 4.9362C161.475 4.90831 162.977 4.86181 164.468 4.85251C172.225 4.78744 179.982 4.7224 187.739 4.65733C192.582 4.61085 197.413 4.57365 202.256 4.58295C210.495 4.60154 218.734 4.61082 226.962 4.62941C228.588 4.62941 230.213 4.68523 231.838 4.73171C236.389 4.84327 240.929 4.9548 245.481 5.06636C248.888 5.15002 252.296 5.23364 255.715 5.31731C258.136 5.37308 260.546 5.52184 262.967 5.6334C270.085 5.94946 277.204 6.28414 284.311 6.64668C286.115 6.73964 287.92 6.85116 289.725 6.96272C291.664 7.07427 293.603 7.19512 295.531 7.37174C295.834 7.40893 296.125 7.45543 296.428 7.5112C297.191 7.64135 297.919 7.60416 298.603 7.2788C299.231 6.97204 299.701 6.46075 299.903 5.8751C300.307 4.64803 299.41 3.33726 297.93 2.99331C296.63 2.69584 295.284 2.57504 293.951 2.46349C293.032 2.38912 292.124 2.30546 291.204 2.23109C289.445 2.08236 287.674 2.00794 285.913 1.89639C282.607 1.71977 279.289 1.59893 275.982 1.4409Z" fill="#FF8A00"/>
                                </svg>
                                    <div class="container mt-2 ms-1" >
                                        <div class=" d-flex">
                                          <p> <h4> <span><i class="fa fa-phone "> <u>{{$business->phone}}</u></i></span></h4>
                                        </div>
                                    </div>

                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 data-aos="fade-left" style="margin-bottom: -10px;">Hakkımızda</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" data-aos="fade-left" width="125" height="18" viewBox="0 0 300 12" fill="">
                                    <path d="M275.982 1.4409C269.424 1.12484 262.867 0.892429 256.309 0.622849C254.145 0.529889 251.971 0.529918 249.807 0.483438C245.111 0.381188 240.414 0.288218 235.717 0.185959C233.104 0.130186 230.482 0.0651215 227.87 0.0186415C227.107 0.00934547 226.357 3.05176e-05 225.594 3.05176e-05C223.891 3.05176e-05 222.186 0.0185935 220.483 0.0278895C212.737 0.0371855 204.98 0.0464995 197.234 0.0464995C195.384 0.0464995 193.546 0.0836815 191.696 0.102274C187.122 0.148754 182.561 0.204559 177.998 0.251039C172.842 0.306819 167.696 0.325359 162.54 0.436918C154.2 0.604239 145.872 0.780908 137.531 0.948238C132.7 1.0505 127.88 1.10624 123.048 1.26427C114.731 1.54315 106.424 1.81274 98.1069 2.08232C93.567 2.23106 89.0159 2.35193 84.4759 2.56573C75.8782 2.96546 67.2803 3.35586 58.6825 3.75559C54.0866 3.9694 49.4906 4.12743 44.9058 4.45279C36.3417 5.05703 27.7888 5.66128 19.2246 6.26552C17.3749 6.39566 15.5254 6.52579 13.6758 6.65593C9.97655 6.91622 6.29982 7.32527 2.61185 7.66922C2.37644 7.69711 2.15225 7.72501 1.91685 7.7436C1.47968 7.84586 1.08733 8.03176 0.762257 8.30134C0.280242 8.70107 0 9.25882 0 9.82592C0 10.3929 0.280242 10.9507 0.762257 11.3597C1.19943 11.7222 1.96169 12.0569 2.61185 11.9919C7.06208 11.5735 11.5011 11.1366 15.9513 10.8206C20.0877 10.5324 24.2128 10.2349 28.3493 9.94672C32.8555 9.63072 37.3618 9.31462 41.8681 8.99854C43.684 8.86839 45.5 8.70109 47.3272 8.61743C54.3557 8.29207 61.3841 7.97597 68.4125 7.65061C72.7955 7.4461 77.1785 7.25092 81.5614 7.0464C83.3774 6.96274 85.1822 6.86047 86.9981 6.79539C93.9593 6.563 100.932 6.34917 107.893 6.13536C112.119 6.00522 116.333 5.86578 120.56 5.73564C121.983 5.68916 123.396 5.63337 124.819 5.60548C132.341 5.45675 139.863 5.31734 147.384 5.1779C151.588 5.09424 155.781 5.01986 159.985 4.9362C161.475 4.90831 162.977 4.86181 164.468 4.85251C172.225 4.78744 179.982 4.7224 187.739 4.65733C192.582 4.61085 197.413 4.57365 202.256 4.58295C210.495 4.60154 218.734 4.61082 226.962 4.62941C228.588 4.62941 230.213 4.68523 231.838 4.73171C236.389 4.84327 240.929 4.9548 245.481 5.06636C248.888 5.15002 252.296 5.23364 255.715 5.31731C258.136 5.37308 260.546 5.52184 262.967 5.6334C270.085 5.94946 277.204 6.28414 284.311 6.64668C286.115 6.73964 287.92 6.85116 289.725 6.96272C291.664 7.07427 293.603 7.19512 295.531 7.37174C295.834 7.40893 296.125 7.45543 296.428 7.5112C297.191 7.64135 297.919 7.60416 298.603 7.2788C299.231 6.97204 299.701 6.46075 299.903 5.8751C300.307 4.64803 299.41 3.33726 297.93 2.99331C296.63 2.69584 295.284 2.57504 293.951 2.46349C293.032 2.38912 292.124 2.30546 291.204 2.23109C289.445 2.08236 287.674 2.00794 285.913 1.89639C282.607 1.71977 279.289 1.59893 275.982 1.4409Z" fill="#FF8A00"/>
                                </svg>
                                <p> {!! $business->about !!} </p>
                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 id="adres_company" style="margin-bottom: -10px;" data-aos="fade-left">Adress</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" data-aos="fade-left" width="75" height="18" viewBox="0 0 300 12" fill="">
                                    <path d="M275.982 1.4409C269.424 1.12484 262.867 0.892429 256.309 0.622849C254.145 0.529889 251.971 0.529918 249.807 0.483438C245.111 0.381188 240.414 0.288218 235.717 0.185959C233.104 0.130186 230.482 0.0651215 227.87 0.0186415C227.107 0.00934547 226.357 3.05176e-05 225.594 3.05176e-05C223.891 3.05176e-05 222.186 0.0185935 220.483 0.0278895C212.737 0.0371855 204.98 0.0464995 197.234 0.0464995C195.384 0.0464995 193.546 0.0836815 191.696 0.102274C187.122 0.148754 182.561 0.204559 177.998 0.251039C172.842 0.306819 167.696 0.325359 162.54 0.436918C154.2 0.604239 145.872 0.780908 137.531 0.948238C132.7 1.0505 127.88 1.10624 123.048 1.26427C114.731 1.54315 106.424 1.81274 98.1069 2.08232C93.567 2.23106 89.0159 2.35193 84.4759 2.56573C75.8782 2.96546 67.2803 3.35586 58.6825 3.75559C54.0866 3.9694 49.4906 4.12743 44.9058 4.45279C36.3417 5.05703 27.7888 5.66128 19.2246 6.26552C17.3749 6.39566 15.5254 6.52579 13.6758 6.65593C9.97655 6.91622 6.29982 7.32527 2.61185 7.66922C2.37644 7.69711 2.15225 7.72501 1.91685 7.7436C1.47968 7.84586 1.08733 8.03176 0.762257 8.30134C0.280242 8.70107 0 9.25882 0 9.82592C0 10.3929 0.280242 10.9507 0.762257 11.3597C1.19943 11.7222 1.96169 12.0569 2.61185 11.9919C7.06208 11.5735 11.5011 11.1366 15.9513 10.8206C20.0877 10.5324 24.2128 10.2349 28.3493 9.94672C32.8555 9.63072 37.3618 9.31462 41.8681 8.99854C43.684 8.86839 45.5 8.70109 47.3272 8.61743C54.3557 8.29207 61.3841 7.97597 68.4125 7.65061C72.7955 7.4461 77.1785 7.25092 81.5614 7.0464C83.3774 6.96274 85.1822 6.86047 86.9981 6.79539C93.9593 6.563 100.932 6.34917 107.893 6.13536C112.119 6.00522 116.333 5.86578 120.56 5.73564C121.983 5.68916 123.396 5.63337 124.819 5.60548C132.341 5.45675 139.863 5.31734 147.384 5.1779C151.588 5.09424 155.781 5.01986 159.985 4.9362C161.475 4.90831 162.977 4.86181 164.468 4.85251C172.225 4.78744 179.982 4.7224 187.739 4.65733C192.582 4.61085 197.413 4.57365 202.256 4.58295C210.495 4.60154 218.734 4.61082 226.962 4.62941C228.588 4.62941 230.213 4.68523 231.838 4.73171C236.389 4.84327 240.929 4.9548 245.481 5.06636C248.888 5.15002 252.296 5.23364 255.715 5.31731C258.136 5.37308 260.546 5.52184 262.967 5.6334C270.085 5.94946 277.204 6.28414 284.311 6.64668C286.115 6.73964 287.92 6.85116 289.725 6.96272C291.664 7.07427 293.603 7.19512 295.531 7.37174C295.834 7.40893 296.125 7.45543 296.428 7.5112C297.191 7.64135 297.919 7.60416 298.603 7.2788C299.231 6.97204 299.701 6.46075 299.903 5.8751C300.307 4.64803 299.41 3.33726 297.93 2.99331C296.63 2.69584 295.284 2.57504 293.951 2.46349C293.032 2.38912 292.124 2.30546 291.204 2.23109C289.445 2.08236 287.674 2.00794 285.913 1.89639C282.607 1.71977 279.289 1.59893 275.982 1.4409Z" fill="#FF8A00"/>
                                </svg>
                                <p> {{$business->address}}.</p>
                                <div class="text-center">
                                    {!! $business->embed !!}
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 data-aos="fade-left" style="margin-bottom: -10px;" >Çalışma Saatleri</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" data-aos="fade-left" width="170" height="18" viewBox="0 0 300 12" fill="">
                                    <path d="M275.982 1.4409C269.424 1.12484 262.867 0.892429 256.309 0.622849C254.145 0.529889 251.971 0.529918 249.807 0.483438C245.111 0.381188 240.414 0.288218 235.717 0.185959C233.104 0.130186 230.482 0.0651215 227.87 0.0186415C227.107 0.00934547 226.357 3.05176e-05 225.594 3.05176e-05C223.891 3.05176e-05 222.186 0.0185935 220.483 0.0278895C212.737 0.0371855 204.98 0.0464995 197.234 0.0464995C195.384 0.0464995 193.546 0.0836815 191.696 0.102274C187.122 0.148754 182.561 0.204559 177.998 0.251039C172.842 0.306819 167.696 0.325359 162.54 0.436918C154.2 0.604239 145.872 0.780908 137.531 0.948238C132.7 1.0505 127.88 1.10624 123.048 1.26427C114.731 1.54315 106.424 1.81274 98.1069 2.08232C93.567 2.23106 89.0159 2.35193 84.4759 2.56573C75.8782 2.96546 67.2803 3.35586 58.6825 3.75559C54.0866 3.9694 49.4906 4.12743 44.9058 4.45279C36.3417 5.05703 27.7888 5.66128 19.2246 6.26552C17.3749 6.39566 15.5254 6.52579 13.6758 6.65593C9.97655 6.91622 6.29982 7.32527 2.61185 7.66922C2.37644 7.69711 2.15225 7.72501 1.91685 7.7436C1.47968 7.84586 1.08733 8.03176 0.762257 8.30134C0.280242 8.70107 0 9.25882 0 9.82592C0 10.3929 0.280242 10.9507 0.762257 11.3597C1.19943 11.7222 1.96169 12.0569 2.61185 11.9919C7.06208 11.5735 11.5011 11.1366 15.9513 10.8206C20.0877 10.5324 24.2128 10.2349 28.3493 9.94672C32.8555 9.63072 37.3618 9.31462 41.8681 8.99854C43.684 8.86839 45.5 8.70109 47.3272 8.61743C54.3557 8.29207 61.3841 7.97597 68.4125 7.65061C72.7955 7.4461 77.1785 7.25092 81.5614 7.0464C83.3774 6.96274 85.1822 6.86047 86.9981 6.79539C93.9593 6.563 100.932 6.34917 107.893 6.13536C112.119 6.00522 116.333 5.86578 120.56 5.73564C121.983 5.68916 123.396 5.63337 124.819 5.60548C132.341 5.45675 139.863 5.31734 147.384 5.1779C151.588 5.09424 155.781 5.01986 159.985 4.9362C161.475 4.90831 162.977 4.86181 164.468 4.85251C172.225 4.78744 179.982 4.7224 187.739 4.65733C192.582 4.61085 197.413 4.57365 202.256 4.58295C210.495 4.60154 218.734 4.61082 226.962 4.62941C228.588 4.62941 230.213 4.68523 231.838 4.73171C236.389 4.84327 240.929 4.9548 245.481 5.06636C248.888 5.15002 252.296 5.23364 255.715 5.31731C258.136 5.37308 260.546 5.52184 262.967 5.6334C270.085 5.94946 277.204 6.28414 284.311 6.64668C286.115 6.73964 287.92 6.85116 289.725 6.96272C291.664 7.07427 293.603 7.19512 295.531 7.37174C295.834 7.40893 296.125 7.45543 296.428 7.5112C297.191 7.64135 297.919 7.60416 298.603 7.2788C299.231 6.97204 299.701 6.46075 299.903 5.8751C300.307 4.64803 299.41 3.33726 297.93 2.99331C296.63 2.69584 295.284 2.57504 293.951 2.46349C293.032 2.38912 292.124 2.30546 291.204 2.23109C289.445 2.08236 287.674 2.00794 285.913 1.89639C282.607 1.71977 279.289 1.59893 275.982 1.4409Z" fill="#FF8A00"/>
                                </svg>
                                @forelse($dayList as $day)
                                    <div class="days d-flex justify-content-between mt-4">
                                        <span class="day">{{$day->name}}</span>
                                        <span class="clock">
                                            @if($day->id == $business->off_day)
                                                <span class="badge bg-danger-light">Kapalı</span>
                                            @else
                                                {{$business->start_time}} - {{$business->end_time}}
                                            @endif
                                        </span>
                                    </div>
                                    <hr>
                                @empty

                                @endforelse
                            </div>
                        </div>
                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 data-aos="fade-left" style="margin-bottom: -10px;">Personeller</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" data-aos="fade-left" width="120" height="18" viewBox="0 0 300 12" fill="">
                                    <path d="M275.982 1.4409C269.424 1.12484 262.867 0.892429 256.309 0.622849C254.145 0.529889 251.971 0.529918 249.807 0.483438C245.111 0.381188 240.414 0.288218 235.717 0.185959C233.104 0.130186 230.482 0.0651215 227.87 0.0186415C227.107 0.00934547 226.357 3.05176e-05 225.594 3.05176e-05C223.891 3.05176e-05 222.186 0.0185935 220.483 0.0278895C212.737 0.0371855 204.98 0.0464995 197.234 0.0464995C195.384 0.0464995 193.546 0.0836815 191.696 0.102274C187.122 0.148754 182.561 0.204559 177.998 0.251039C172.842 0.306819 167.696 0.325359 162.54 0.436918C154.2 0.604239 145.872 0.780908 137.531 0.948238C132.7 1.0505 127.88 1.10624 123.048 1.26427C114.731 1.54315 106.424 1.81274 98.1069 2.08232C93.567 2.23106 89.0159 2.35193 84.4759 2.56573C75.8782 2.96546 67.2803 3.35586 58.6825 3.75559C54.0866 3.9694 49.4906 4.12743 44.9058 4.45279C36.3417 5.05703 27.7888 5.66128 19.2246 6.26552C17.3749 6.39566 15.5254 6.52579 13.6758 6.65593C9.97655 6.91622 6.29982 7.32527 2.61185 7.66922C2.37644 7.69711 2.15225 7.72501 1.91685 7.7436C1.47968 7.84586 1.08733 8.03176 0.762257 8.30134C0.280242 8.70107 0 9.25882 0 9.82592C0 10.3929 0.280242 10.9507 0.762257 11.3597C1.19943 11.7222 1.96169 12.0569 2.61185 11.9919C7.06208 11.5735 11.5011 11.1366 15.9513 10.8206C20.0877 10.5324 24.2128 10.2349 28.3493 9.94672C32.8555 9.63072 37.3618 9.31462 41.8681 8.99854C43.684 8.86839 45.5 8.70109 47.3272 8.61743C54.3557 8.29207 61.3841 7.97597 68.4125 7.65061C72.7955 7.4461 77.1785 7.25092 81.5614 7.0464C83.3774 6.96274 85.1822 6.86047 86.9981 6.79539C93.9593 6.563 100.932 6.34917 107.893 6.13536C112.119 6.00522 116.333 5.86578 120.56 5.73564C121.983 5.68916 123.396 5.63337 124.819 5.60548C132.341 5.45675 139.863 5.31734 147.384 5.1779C151.588 5.09424 155.781 5.01986 159.985 4.9362C161.475 4.90831 162.977 4.86181 164.468 4.85251C172.225 4.78744 179.982 4.7224 187.739 4.65733C192.582 4.61085 197.413 4.57365 202.256 4.58295C210.495 4.60154 218.734 4.61082 226.962 4.62941C228.588 4.62941 230.213 4.68523 231.838 4.73171C236.389 4.84327 240.929 4.9548 245.481 5.06636C248.888 5.15002 252.296 5.23364 255.715 5.31731C258.136 5.37308 260.546 5.52184 262.967 5.6334C270.085 5.94946 277.204 6.28414 284.311 6.64668C286.115 6.73964 287.92 6.85116 289.725 6.96272C291.664 7.07427 293.603 7.19512 295.531 7.37174C295.834 7.40893 296.125 7.45543 296.428 7.5112C297.191 7.64135 297.919 7.60416 298.603 7.2788C299.231 6.97204 299.701 6.46075 299.903 5.8751C300.307 4.64803 299.41 3.33726 297.93 2.99331C296.63 2.69584 295.284 2.57504 293.951 2.46349C293.032 2.38912 292.124 2.30546 291.204 2.23109C289.445 2.08236 287.674 2.00794 285.913 1.89639C282.607 1.71977 279.289 1.59893 275.982 1.4409Z" fill="#FF8A00"/>
                                </svg>
                                <div class="row">
                                    @forelse($business->personel as $personel)
                                        <div class="col-md-3 col-xs-3 my-2 text-center" style="border-right: 1px solid lightgrey">
                                            <img     style="max-width: 150px" src="{{image($personel->image)}}" alt="Personal">
                                            <span class="d-block text-center"><small>{{$personel->name}}</small></span>
                                        </div>
                                    @empty

                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="information-title" data-aos="fade-up" id="comments">

                            <div class="d-flex">
                                <div class="row">
                                     <h2 id="yorumlar_company" style="margin-bottom: -10px;" data-aos="fade-left">Yorumlar</h2>
                                     <svg xmlns="http://www.w3.org/2000/svg" data-aos="fade-left" width="10" height="12" viewBox="90 0 300 12" fill="">
                                        <path d="M275.982 1.4409C269.424 1.12484 262.867 0.892429 256.309 0.622849C254.145 0.529889 251.971 0.529918 249.807 0.483438C245.111 0.381188 240.414 0.288218 235.717 0.185959C233.104 0.130186 230.482 0.0651215 227.87 0.0186415C227.107 0.00934547 226.357 3.05176e-05 225.594 3.05176e-05C223.891 3.05176e-05 222.186 0.0185935 220.483 0.0278895C212.737 0.0371855 204.98 0.0464995 197.234 0.0464995C195.384 0.0464995 193.546 0.0836815 191.696 0.102274C187.122 0.148754 182.561 0.204559 177.998 0.251039C172.842 0.306819 167.696 0.325359 162.54 0.436918C154.2 0.604239 145.872 0.780908 137.531 0.948238C132.7 1.0505 127.88 1.10624 123.048 1.26427C114.731 1.54315 106.424 1.81274 98.1069 2.08232C93.567 2.23106 89.0159 2.35193 84.4759 2.56573C75.8782 2.96546 67.2803 3.35586 58.6825 3.75559C54.0866 3.9694 49.4906 4.12743 44.9058 4.45279C36.3417 5.05703 27.7888 5.66128 19.2246 6.26552C17.3749 6.39566 15.5254 6.52579 13.6758 6.65593C9.97655 6.91622 6.29982 7.32527 2.61185 7.66922C2.37644 7.69711 2.15225 7.72501 1.91685 7.7436C1.47968 7.84586 1.08733 8.03176 0.762257 8.30134C0.280242 8.70107 0 9.25882 0 9.82592C0 10.3929 0.280242 10.9507 0.762257 11.3597C1.19943 11.7222 1.96169 12.0569 2.61185 11.9919C7.06208 11.5735 11.5011 11.1366 15.9513 10.8206C20.0877 10.5324 24.2128 10.2349 28.3493 9.94672C32.8555 9.63072 37.3618 9.31462 41.8681 8.99854C43.684 8.86839 45.5 8.70109 47.3272 8.61743C54.3557 8.29207 61.3841 7.97597 68.4125 7.65061C72.7955 7.4461 77.1785 7.25092 81.5614 7.0464C83.3774 6.96274 85.1822 6.86047 86.9981 6.79539C93.9593 6.563 100.932 6.34917 107.893 6.13536C112.119 6.00522 116.333 5.86578 120.56 5.73564C121.983 5.68916 123.396 5.63337 124.819 5.60548C132.341 5.45675 139.863 5.31734 147.384 5.1779C151.588 5.09424 155.781 5.01986 159.985 4.9362C161.475 4.90831 162.977 4.86181 164.468 4.85251C172.225 4.78744 179.982 4.7224 187.739 4.65733C192.582 4.61085 197.413 4.57365 202.256 4.58295C210.495 4.60154 218.734 4.61082 226.962 4.62941C228.588 4.62941 230.213 4.68523 231.838 4.73171C236.389 4.84327 240.929 4.9548 245.481 5.06636C248.888 5.15002 252.296 5.23364 255.715 5.31731C258.136 5.37308 260.546 5.52184 262.967 5.6334C270.085 5.94946 277.204 6.28414 284.311 6.64668C286.115 6.73964 287.92 6.85116 289.725 6.96272C291.664 7.07427 293.603 7.19512 295.531 7.37174C295.834 7.40893 296.125 7.45543 296.428 7.5112C297.191 7.64135 297.919 7.60416 298.603 7.2788C299.231 6.97204 299.701 6.46075 299.903 5.8751C300.307 4.64803 299.41 3.33726 297.93 2.99331C296.63 2.69584 295.284 2.57504 293.951 2.46349C293.032 2.38912 292.124 2.30546 291.204 2.23109C289.445 2.08236 287.674 2.00794 285.913 1.89639C282.607 1.71977 279.289 1.59893 275.982 1.4409Z" fill="#FF8A00"/>
                                    </svg>
                                </div>
                                <div class="rating yorum_mobil_rating"  data-aos="fade-left">
                                    @if($business->comments()->where('status', 1)->count() > 0)
                                        @for($i=0; $i < 5; $i++ )
                                            <i class="fas fa-star @if($i < $business->comments()->where('status', 1)->sum('point') / $business->comments()->where('status', 1)->count()) filled @endif"></i>
                                        @endfor
                                    @else
                                        <i class="fas fa-star" style="font-weight: 42px;"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    @endif
                                </div>
                                <h3 data-aos="fade-left">({{$business->comments()->where('status', 1)->count()}}) Yorum</h3>
                            </div>
                            <hr>
                            @forelse($business->comments()->where('status', 1)->get() as $comment)
                                @if(isset($comment->customer))
                                    <div class="row">
                                    <div class="col-md-2 comment-profile">
                                        <img src="{{storage($comment->customer->image)}}" alt="" style="width: 110px;border-radius: 15px">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="mobile-header">
                                            <img src="{{storage($comment->customer->image)}}" class="comment-profile-mobile" style="width: 50px;height: 50px;border-radius: 50%"  alt="">
                                            <h2> {{$comment->customer->name}} </h2>
                                        </div>
                                        <div class="rating mobile-rating-bar" style="margin: 0 -1px 7px!important;">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div style="clear: both">
                                            <p>{{$comment->content}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                        </div>
                        @empty
                            <div class="alert alert-warning">İşletme ile ilgili yorum bulunmamaktadır.</div>

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('scripts')

    <script>
        const xmark = document.querySelector(".xmark-icon");
        const gallery = document.querySelector(".gallery");
        const galleryButton = document.querySelector(".gallery-button");
        xmark.addEventListener("click", () => {
            gallery.style.display = "none";
        });
        galleryButton.addEventListener("click", () => {
            gallery.style.display = "block";
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const options = {
            type : "carousel",
            perView : 1,
            autoplay : 1500,
        }

        new Glide('.glide-slider', options).mount()
    </script>
    <script>
        const options2 = {
            type : "carousel",
            perView : 1,
            autoplay : 1500
        }

        new Glide('.glide', options2).mount()
    </script>
    <script>
        AOS.init({
            once: true,
            delay : 150
        });
    </script>
    <script src="/front/assets/js/app.min.js" ></script>
@endsection