@extends('layouts.master')
@section('title', $business->name)
@section('meta_description', $business->name ." Detayı")
@section('styles')
    <link rel="stylesheet" href="/front/assets/css/app.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css" integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <li class="tab-titles active p-3" onclick="tabsFunction(this)">Erkek</li>
                            <li class="tab-titles p-3" onclick="tabsFunction(this)">Kadın</li>
                        </ul>
                        <div class="tab-contents">
                            <div class="tab-content active">

                                <div class="service-card" onclick="cardChange(this)">
                                    <div class="service-title p-2">
                                        <span>Hizmet Adı</span>
                                    </div>
                                    <div class="services">
                                        <ul class="d-flex flex-column">
                                      @for($i=0; $i<5; $i++)
                                            <li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <div class="service-name fw-bold">Hizmet</div>
                                                    <div class="appointment">
                                                        <span class="price">170 $</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>

                                            </li>
                                      @endfor
                                        </ul>
                                    </div>
                                </div>

                                <div class="service-card mt-1" onclick="cardChange(this)">
                                    <div class="service-title p-2">
                                        <span>Hizmet Adı</span>
                                    </div>
                                    <div class="services">
                                        <ul class="d-flex flex-column">
                                            <li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">Hizmet</div>
                                                    <div class="appointment">
                                                        <span class="price">170 $</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">Hizmet</div>
                                                    <div class="appointment">
                                                        <span class="price">170 $</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">Hizmet</div>
                                                    <div class="appointment">
                                                        <span class="price">170 $</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>
                                            </li><li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">Hizmet</div>
                                                    <div class="appointment">
                                                        <span class="price">170 $</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-card mt-1" onclick="cardChange(this)">
                                    <div class="service-title p-2">
                                        <span>Hizmet Adı</span>
                                    </div>
                                    <div class="services">
                                        <ul class="d-flex flex-column">
                                            <li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">Hizmet</div>
                                                    <div class="appointment">
                                                        <span class="price">170 $</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">Hizmet</div>
                                                    <div class="appointment">
                                                        <span class="price">170 $</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">Hizmet</div>
                                                    <div class="appointment">
                                                        <span class="price">170 $</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">Hizmet</div>
                                                    <div class="appointment">
                                                        <span class="price">170 $</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-card mt-1" onclick="cardChange(this)">
                                    <div class="service-title p-2">
                                        <span>Hizmet Adı</span>
                                    </div>
                                    <div class="services">
                                        <ul class="d-flex flex-column">
                                            <li class="d-flex justify-content-between w-100">
                                                <div class="service-name">Hizmet</div>
                                                <div class="appointment">
                                                    <span class="price">170 $</span>
                                                    <button class="appointment-button ms-4">Randevu Al</button>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between"></li>
                                            <li class="d-flex justify-content-between"></li>
                                            <li class="d-flex justify-content-between"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                               @foreach($womanServiceCategories as $womanCategories)
                                 <div class="service-card mt-1" onclick="cardChange(this)">
                                    <div class="service-title p-2">
                                        <span>{{$loop -> index }}</span>
                                    </div>
                                    <div class="services">
                                        <ul class="d-flex flex-column">
                                            @foreach($womanCategories as $service )
                                            <li class="my-1 ps-1">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <div class="service-name">{{$service -> subCategory -> name}}</div>
                                                    <div class="appointment d-flex flex-row">
                                                        <span class="price d-flex align-items-center">{{$service -> price}}</span>
                                                        <button class="appointment-button ms-4">Randevu Al</button>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">

                        <div class="glide-slider"  >
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide"><img src="https://via.placeholder.com/200x200" alt="" style="width: 100%; height: 500px; object-fit: cover"></li>
                                    <li class="glide__slide"><img src="https://via.placeholder.com/500x500" alt=""  style="width: 100%; height: 500px; object-fit: cover""></li>
                                    <li class="glide__slide"><img src="https://via.placeholder.com/500x500" alt=""  style="width: 100%; height: 500px; object-fit: cover""></li>
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus excepturi quisquam, omnis possimus corrupti temporibus at eaque laudantium, aliquam dolorem veritatis expedita suscipit obcaecati, atque iste molestias nostrum! Quaerat, iure.</p>
                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 id="adres_company" data-aos="fade-left">Adress</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus excepturi quisquam, omnis possimus corrupti temporibus at eaque laudantium, aliquam dolorem veritatis expedita suscipit obcaecati, atque iste molestias nostrum! Quaerat, iure.</p>
                                <div class="text-center">
                                    <iframe class="adress-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12038.523963649952!2d29.101360000000007!3d41.03332845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac8f76d1706ed%3A0xd630fb5e3d1e2cf8!2zw5xtcmFuaXllLCBFbG1hbMSxa2VudCwgMzQ3NjQgw5xtcmFuaXllL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1685841493951!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 data-aos="fade-left">Çalışma Saatleri</h2>
                                <div class="days d-flex justify-content-between mt-4">
                                    <span class="day">Pazartesi</span>
                                    <span class="clock">10:00 - 17:00</span>
                                </div>
                                <hr>
                                <div class="days d-flex justify-content-between">
                                    <span class="day">Salı</span>
                                    <span class="clock">10:00 - 17:00</span>
                                </div>
                                <hr>
                                <div class="days d-flex justify-content-between">
                                    <span class="day">Çarşamba</span>
                                    <span class="clock">10:00 - 17:00</span>
                                </div>
                                <hr>
                                <div class="days d-flex justify-content-between">
                                    <span class="day">Perşembe</span>
                                    <span class="clock">10:00 - 17:00</span>
                                </div>
                                <hr>
                                <div class="days d-flex justify-content-between">
                                    <span class="day">Cuma</span>
                                    <span class="clock">10:00 - 17:00</span>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div>
                            <div class="information-title" data-aos="fade-up">
                                <h2 data-aos="fade-left">Personeller</h2>
                                <div class="row">
                                    @for($i=0; $i < 4; $i++)
                                        <div class="col-md-3">
                                            <img class="personal_mobil_img personal_flex_setting" src="https://via.placeholder.com/200x200" alt="Personal" style="max-width: 100%">
                                            <span class="d-block text-center"><small>Mehmet Öztoprak</small></span>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="comments" id="comments">
                            <div class="row">
                                <div class="col-md-2">
                                    <h2 class="comment-title">Müşteri Yorumları</h2>
                                </div>
                                <div class="col-md-10">
                                    <div class="stars">
                                        <div class="d-flex justify-content-between align-items-center h-100">
                                            <div>
                                                <span class="stars-icon"><i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i></span>
                                                <span>315 Yorum, 584 Puanlama</span>
                                            </div>
                                            <div>
                                                <span>oran</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="comment">
                                            <div class="profile d-flex align-items-center justify-content-between">
                                                <div class="d-flex">
                                                    <div class="profile-logo">
                                                        <img src="https://via.placeholder.com/100x100" style="height: 100px; width: 100px" alt="">
                                                    </div>
                                                    <div class="d-flex align-items-center profile-name ms-2">
                                                        <span>Kullanıcı adı</span>
                                                    </div>
                                                </div>

                                                <div class="comment-date">
                                                    <span class="date-span">14.06.2023</span>
                                                </div>
                                            </div>
                                            <div class="comment-paragraph my-3">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, mollitia.</p>
                                                <div class="company-answer">
                                                     <p class="fst-italic"><span class="fw-bold">company name : </span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, natus.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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