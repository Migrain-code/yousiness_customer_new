@extends('layouts.master')
@section('title', 'Anasayfa')
@section('meta_description', config('settings.meta_description'))
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.css" integrity="sha512-ShLuspGzRsTiMlQ2Rg0e+atjy/gVQr3oYKnKmQkHQ6sxcnDAEOtOaPz2rRmeygV2CtnwUawDyHkGgH4zUbP3Hw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">

    <style>
        .ts-dropdown [data-selectable] .highlight {
            background: rgb(129 129 129);
            border-radius: 14px;
            padding: 5px;
        }
    </style>
@endsection
@section('content')
    <style>
        .tab-content{
            background: #ff8a00;
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
                            <p>{{main('speed_main_page_description')}}</p>
                          </div>
                            <div class="search-box-five">
                                <div class="col-md-12 p-0">
                                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                                        <li class="nav-item"><a class="nav-link active" href="#solid-rounded-tab1" data-bs-toggle="tab">Hizmet</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#solid-rounded-tab2" data-bs-toggle="tab">Salon Türü</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#solid-rounded-tab3" data-bs-toggle="tab">Salon Adı</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="solid-rounded-tab1">
                                            @include('layouts.component.error')
                                            <form action="{{route('searchService')}}" method="post">
                                                @csrf
                                                <div class="search-input-five">
                                                    <i class="feather-scissors bficon"></i>
                                                    <div class="form-group my-1">
                                                        <select id="select-service" class="js-example-basic-single" placeholder="Hizmet Seçiniz" style="" name="service_id">
                                                            <option value="">Hizmet Seçiniz</option>
                                                            @forelse($services as $service)
                                                                <option value="{{$service->id}}">{{$service->name}}</option>
                                                            @empty

                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="search-input-five line-five">
                                                    <i class="feather-compass bficon compass-icon"></i>
                                                    <div class="form-group my-1">
                                                        <select class="js-example-basic-single" placeholder="Şehir Seçiniz" name="city_id">
                                                            <option value="">Şehir Seçiniz</option>
                                                            @forelse($cities as $city)
                                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                            @empty

                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="search-btn-five">
                                                    <button class="btn search_service" type="submit"><i class="fas fa-search me-2"></i> Arama Yap</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="solid-rounded-tab2">
                                            <form action="{{route('businessCategorySearch')}}" method="post">
                                                @csrf
                                                <div class="search-input-five">
                                                    <i class="feather-scissors bficon"></i>
                                                    <div class="form-group my-1">
                                                        <select id="select-salon-type" class="js-example-basic-single" placeholder="Salon Türü Seçiniz" style="" name="category_id">
                                                            <option value="">Salon Türü Seçiniz</option>
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
                                                        <select class="js-example-basic-single" placeholder="Şehir Seçiniz" id="select-city-2" name="city_id">
                                                            <option value="">Şehir Seçiniz</option>
                                                            @forelse($cities as $city)
                                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                            @empty

                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="search-btn-five">
                                                    <button class="btn search_service" type="submit"><i class="fas fa-search me-2"></i>Arama Yap</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="solid-rounded-tab3">
                                            <form action="#">
                                                <div class="search-input-five" style="width: 100%;margin-right: 5px;">
                                                    <i class="feather-scissors bficon"></i>
                                                    <div class="form-group mb-0">
                                                        <input type="text" class="form-control" name="business_name" value="" id="search">
                                                        <div class="" id="search-result">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search-btn-five">
                                                    <button class="btn search_service" type="submit"><i class="fas fa-search me-2"></i>Göster</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row adds_mobil">
                    <div class="glide mt-4" data-aos="fade-up">
                        <div class="glide__track glide_mobil_slide" data-glide-el="track" style="margin-bottom: -70px !important;">
                            <ul class="glide__slides">
                                @forelse($ads as $ad)
                                <li class="glide__slide" style="text-align: center ;">
                                    <img src="{{image($ad->image)}}" alt="" style="height: 200px; width: 200px; object-fit: cover;border-radius: 5px"></li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Five Banner -->
    <!-- Looking Section Five -->
    @if(setting('speed_main_page_section_1') == 1)
        <section class="looking-section-five">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                            <h2 class="title-five">{{main('speed_section_1_main_title')}}</h2>
                        </div>
                    </div>
                </div>
                <div class="looking-bg-five">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                            <div class="looking-grid-five looking-grid-blue w-100">
                                <div class="looking-icon-five">
                                   <img src="{{image(main('speed_section_1_box_1_image'))}}" style="width: 100px;border-radius: 50%;">
                                </div>
                                <div class="looking-info-five">
                                    <a href="#">{{main('speed_section_1_box_1_title')}}</a>
                                    <p>{{main('speed_section_1_box_1_description')}}</p>
                                </div>
                                <div class="looking-info-btn">
                                    <a href="javascript:void(0)" class="btn btn-five">Salon Ara <i class="feather-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                            <div class="looking-grid-five looking-grid-green w-100">
                                <div class="looking-icon-five">
                                    <img src="{{image(main('speed_section_1_box_2_image'))}}" style="width: 100px;border-radius: 50%;">
                                </div>
                                <div class="looking-info-five">
                                    <a href="#">{{main('speed_section_1_box_2_title')}}</a>
                                    <p>{{main('speed_section_1_box_2_description')}}</p>
                                </div>
                                <div class="looking-info-btn">
                                    <a href="#services" class="btn btn-five">Hizmetleri Göster <i class="feather-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                            <div class="looking-grid-five looking-grid-orange w-100">
                                <div class="looking-icon-five">
                                    <img src="{{image(main('speed_section_1_box_3_image'))}}" style="width: 100px;border-radius: 50%;">
                                </div>
                                <div class="looking-info-five">
                                    <a href="#">{{main('speed_section_1_box_3_title')}}</a>
                                    <p>{{main('speed_section_1_box_3_description')}}</p>
                                </div>
                                <div class="looking-info-btn">
                                    <a href="#services" class="btn btn-five">Puan Kazan <i class="feather-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- /Looking Section Five -->

    <!-- Clinic Section Five -->
    @if(setting('speed_main_page_section_2') == 1)
    <section class="clinic-section-five">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">Salon Türleri</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse($categories as $category)
                    <!--ITEM-->
                    <div class="col-lg-3 col-md-4 d-flex aos" data-aos="fade-up">
                        <div class="clinic-grid-five w-100 hvr-bounce-to-bottom">
                            <div class="clinic-grid-img">
                                <div class="clinic-img-five">
                                    <img src="{{asset($category->icon)}}" alt="">
                                </div>
                            </div>
                            <div class="clinic-grid-info">
                                <p>{{$category->name}}</p>
                                <div class="clinic-five-btn">
                                    <a href="{{route('categoryGet', $category->slug)}}" class="btn">Göster</a>
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
    <!-- Clinic Section Five -->
    @if(setting('speed_main_page_section_3') == 1)
    <!-- Doctor Section Five -->
    <section class="doctor-section-five" style="background-image: url('{{image('front/main_page_bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="doctor-grid-five w-100">
                        <div class="doctor-details">
                            <h4>{{main('speed_section_3_box_1_title')}}</h4>
                            <p>{{main('speed_section_3_box_1_description')}}</p>
                            <a href="{{env('REMOTE_URL')}}" class="btn">Hadi Başlayalım</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 doctor-img2 aos" data-aos="fade-up">
                    <div class="doctor-grid-five w-100">
                        <img src="{{image(main('speed_section_3_main_image'))}}" alt="" class="img-fluid" style="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex aos" data-aos="fade-up">
                    <div class="doctor-grid-five w-100">
                        <div class="doctor-details doctor-details-one">
                            <h4>{{main('speed_section_3_box_2_title')}}</h4>
                            <p>{{main('speed_section_3_box_2_description')}}</p>
                            <a href="{{route('customer.register')}}" class="btn">Hadi Keşfedelim</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Doctor Section Five -->
    @endif
    @if(setting('speed_main_page_section_4') == 1)
    <!-- Browse Section Five -->
    <section class="browse-section-five" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">Öne Çıkan Hizmetler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($featuredServices as $subCategory)
                    <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card-five d-flex hvr-bounce-to-right">
                            <div class="specialist-img-five">

                                <img src="{{image($subCategory->icon)}}" alt="" class="img-fluid">
                            </div>
                            <div class="specialist-info">
                                <a href="{{route('service.detail', [$subCategory->category->slug, 'alt-kategori'=> $subCategory->slug])}}">{{$subCategory->name}}</a>
                            </div>
                            <div class="specialist-nav-five ms-auto">
                                <a href="{{route('service.detail', [$subCategory->category->slug, 'alt-kategori'=> $subCategory->slug])}}"><i class="feather-arrow-right"></i></a>
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
            @forelse($featuredCategories as $fCategory)
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">{{$fCategory->category->name}}</h2>
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
                                    <a href="{{route('categoryAllGet', [$city->city->slug, $fCategory->category->slug])}}">{{$city->city->name}} {{$fCategory->category->name}}</a>
                                </div>
                                <div class="specialist-nav-five ms-auto">
                                    <a href="{{route('categoryAllGet', [$city->city->slug, $fCategory->category->slug])}}"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
           </div>
            @empty
            @endforelse



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
                                <h2 class="title-five">Yaklaşan Etkinlikler!</h2>
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
                                        <a href="{{route('activity.detail', $activity->slug)}}" class="btn-five" style="max-width: 200px;margin: 0 auto"> Detayı Göster</a>

                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div>
                    @if($activities->count() >= 4)
                        <div class="doctor-see-btn text-center aos" data-aos="fade-up">
                            <a href="{{route('activity.index')}}" class="btn btn-six">Tüm etkinlikler</a>
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
                                <h2 class="title-five">Son Yayınlanan Bloglarımız</h2>
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
                                        <a href="{{route('blog.detail', $blog->slug)}}" class="read-news">Haberi Oku</a>
                                    </div>
                                </div>

                            </div>

                        @empty

                        @endforelse
                        <div class="row text-center">
                            <div class="blog-five-btn aos" data-aos="fade-up">
                                <a href="{{route('blog.index')}}" class="btn btn-six">Daha Fazla</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /Blog Section Five -->
        @endif
    @endif
@endsection
<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

            const options = {
                type : "careousel",
                perView : 5,
                autoplay: "1500",
                hoverpause: true,
                breakpoints: {
                    1024: {
                        perView: 3
                    },
                    600: {
                        perView: 1
                    }
                }
            };

            new Glide('.glide', options).mount()

        });
        // Arama kutusunu seçin
        var search = document.querySelector('#search');

        // Arama kutusuna her karakter girildiğinde AJAX isteği gönderin
        search.addEventListener('input', function() {

            if(search.value==""){
                document.querySelector('#search-result').innerHTML="";
            }

            // AJAX isteği göndermek için bir XMLHttpRequest nesnesi oluşturun
            var xhr = new XMLHttpRequest();

            // AJAX isteği göndermek için kullanacağımız URL'yi belirleyin
            var url = '{{ route('live-search') }}?search=' + encodeURIComponent(search.value);

            // AJAX isteği gönderin
            xhr.open('GET', url);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onload = function() {
                // AJAX isteği başarılı olduysa, live-search bölgesinde sonuçları gösterin
                if (xhr.status === 200) {
                    document.querySelector('#search-result').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
