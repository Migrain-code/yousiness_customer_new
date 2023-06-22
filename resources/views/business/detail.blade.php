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
                           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                       </div>
                       <div class="carousel-inner">
                           <div class="carousel-item active">
                               <img src="https://via.placeholder.com/500x500" style="height: 100%; object-fit: cover" class="d-block w-100" alt="...">
                           </div>
                           <div class="carousel-item">
                               <img src="https://via.placeholder.com/500x500" style="height: 100%; object-fit: cover" class="d-block w-100" alt="...">
                           </div>
                           <div class="carousel-item">
                               <img src="https://via.placeholder.com/500x500"style="height: 100%; object-fit: cover"  class="d-block w-100" alt="...">
                           </div>
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
                           <img style="100px; width: 100px;" src="https://via.placeholder.com/200x200" alt="">
                         </div>
                        <div class="mx-2 company-title d-flex flex-column justify-content-start my-auto">
                            <h3 class="company-name">MUHAMMET TÜRKMEN</h3>
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
                                <li class="tab-titles active p-3" onclick="tabsFunction(this)">Erkek</li>
                                <li class="tab-titles p-3" onclick="tabsFunction(this)">Kadın</li>
                            @elseif($business->type->id == 2)
                                <li class="tab-titles active p-3" onclick="tabsFunction(this)">Erkek</li>
                            @elseif($business->type->id == 1)
                                <li class="tab-titles p-3" onclick="tabsFunction(this)">Kadın</li>
                            @endif
                        </ul>
                        <div class="tab-contents">
                            <div class="tab-content active">
                                @forelse($manServiceCategories as $manCategories)
                                    <div class="service-card" onclick="cardChange(this)">
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
                                                                <span class="price">{{$service->price}} TL</span>
                                                                <a href="{{route('step1.show', [$business->slug, $service->id])}}" class="appointment-button ms-4 ">Randevu Al</a>
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
                            <div class="tab-content">
                                @forelse($womanServiceCategories as $womanCategories)
                                    <div class="service-card" onclick="cardChange(this)">
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
                                                                <span class="price">{{$service->price}} TL</span>
                                                                <a href="{{route('step1.show', [$business->slug, $service->id])}}" class="appointment-button ms-4 ">Randevu Al</a>
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
                                <h2 id="iletisim_company">İLETİŞİM </h2>
                                    <div class="container mt-2 ms-1" >
                                        <div class=" d-flex">
                                          <p> <h4> <span><i class="fa fa-phone "> <u>0(212)111 44 22</u></i></span></h4>
                                        </div>
                                    </div>

                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 data-aos="fade-left">Hakkımızda</h2>
                                <p> {!! $business->about !!} </p>
                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 id="adres_company" data-aos="fade-left">Adress</h2>
                                <p> {{$business->address}}.</p>
                                <div class="text-center">
                                    {!! $business->embed !!}
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 data-aos="fade-left">Çalışma Saatleri</h2>
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
                                <h2 data-aos="fade-left">Personeller</h2>
                                <div class="row">
                                    @forelse($business->personel as $personel)
                                        <div class="col-md-2 col-xs-2 ">
                                            <img class="personal_mobil_img personal_flex_setting" src="{{image($personel->image)}}" alt="Personal">
                                            <span class="d-block text-center"><small>{{$personel->name}}</small></span>
                                        </div>
                                    @empty

                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="information-title" data-aos="fade-up">
                            <div class="d-flex">
                                <h2 id="yorumlar_company " data-aos="fade-left">Yorumlar</h2>
                                <div class="rating" style="padding-top: 5px;padding-left: 150px;" data-aos="fade-left">
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
                                <h3 class="company_genel_yorum" data-aos="fade-left">({{$business->comments()->where('status', 1)->count()}}) Yorum</h3>
                            </div>
                            <hr>
                            @forelse($business->comments()->where('status', 1)->get() as $comment)
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