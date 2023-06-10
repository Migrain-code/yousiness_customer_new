@extends('layouts.master')
@section('title', $business->name)
@section('meta_description', $business->name ." Detayı")
@section('styles')
    <link rel="stylesheet" href="/front/assets/css/app.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css" integrity="sha512-YQlbvfX5C6Ym6fTUSZ9GZpyB3F92hmQAZTO5YjciedwAaGRI9ccNs4iw2QTCJiSPheUQZomZKHQtuwbHkA9lgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <a href="/resources/views/appointment/step1">Step 1</a>
    <div class="container mt-5">
        <div class="company-title">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex">
{{--                        <div class="company-logo">--}}
{{--                            <img src="https://via.placeholder.com/200x200" alt="" style="height: 100px; width: 100px;">--}}
{{--                        </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <hr>
            <div class="row" data-aos="fade-out">
                <div class="col-md-4">
                    <div class="d-flex mb-3">
                         <div class="col-md-3">
                           <img style="100px; width: 100px;" src="https://via.placeholder.com/200x200" alt="">
                         </div>
                        <div class="col-md-9 company_mobil_name ">
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
                            <div class="d-flex detail-links">

                                    <a href="#galeri_company"><button type="button" class="company-buttons btn-search border border-right active company_left_menu" ><i class="fa fa-comment"></i> Galeri</button></a>
                                    <a href="#adres_company"> <button type="button" class=" company-buttons btn-search border border-right company_left_menu"><i class="fa fa-map"></i> Adres</button></a>

                                    <a href="#iletisim_company"><button type="button" class=" company-buttons btn-search border border-right company_left_menu"><i class="fa fa-phone"></i> İletişim</button></a>
                                    <a href="#yorumlar_company"><button type="button"  style="width: 122px;" class=" company-buttons btn-search border border-right company_left_menu"><i class="fa fa-comment"></i> Yorumlar</button></a>

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
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">Hizmet</div>
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
                                                <div class="d-flex justify-content-between w-100">
                                                    <div class="service-name">{{$service -> subCategory -> name}}</div>
                                                    <div class="appointment">
                                                        <span class="price">{{$service -> price}}</span>
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
                <div class="col-md-8">

                        <div class="glide">
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
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12038.523963649952!2d29.101360000000007!3d41.03332845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac8f76d1706ed%3A0xd630fb5e3d1e2cf8!2zw5xtcmFuaXllLCBFbG1hbMSxa2VudCwgMzQ3NjQgw5xtcmFuaXllL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1685841493951!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                              <div class="col-md-12">
                                <div class="row">
                                  @for($i=0; $i < 4; $i++)
                                    <div class="col-md-2 col-xs-2 ">
                                        <img class="personal_mobil_img personal_flex_setting" src="https://via.placeholder.com/200x200" alt="Personal">
                                        <span class="d-block text-center"><small>Mehmet Öztoprak</small></span>
                                    </div>
                                  @endfor
                                </div>
                              </div>
                            </div>
                        </div>
                        <hr>
                        <div class="information-title" data-aos="fade-up">
                          <div class="d-flex">
                            <h2 id="yorumlar_company " data-aos="fade-left">Yorumlar</h2>
                            <div class="rating" style="padding-top: 5px;padding-left: 150px;" data-aos="fade-left">
                                @if($business->comments->count() > 0)
                                    @for($i=0; $i < 5; $i++ )
                                        <i class="fas fa-star @if($i < $business->comments->sum('point') / $business->comments->count()) filled @endif"></i>
                                    @endfor
                                @else
                                    <i class="fas fa-star" style="font-weight: 42px;"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                @endif
                            </div>
                              <h3 class="company_genel_yorum" data-aos="fade-left">(1000) Yorum, (2000) Müşteri Puanlaması</h3>
                          </div>
                            <hr>
                           <div class="col-md-12 d-flex">
                               <div class="col-md-3 m-5">
                                 <div class="">
                                   <img src="https://via.placeholder.com/100x100" class="comment_mobil_img" alt="">
                                 </div>
                               </div>
                               <div class="col-md-9 ">
                                  <h2 class="comment_company_position">Muhammet Türkmen</h2>
                                   <div class="rating ">
                                     <div class="comment_rating">
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
                                     </div>
                                   </div>
                               </div>
                           </div>
                            <div class="col-md-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aperiam consequuntur dolor ea esse eveniet exercitationem, laborum magni maxime officia pariatur quis reprehenderit repudiandae totam unde ut, veritatis voluptates.</p>
                            </div>
                            <hr>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js" integrity="sha512-IkLiryZhI6G4pnA3bBZzYCT9Ewk87U4DGEOz+TnRD3MrKqaUitt+ssHgn2X/sxoM7FxCP/ROUp6wcxjH/GcI5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const options = {
            type : "carousel",
            perView : 1,
            autoplay : 1500,
        }

        new Glide('.glide', options).mount()
    </script>
    <script>
        AOS.init({
            once: true,
            delay : 150
        });
    </script>
    <script src="/front/assets/js/app.min.js" ></script>
@endsection