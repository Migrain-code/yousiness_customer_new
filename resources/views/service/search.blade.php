@extends('layouts.master')
@section('title', "Hallen")
@section('meta_description', "Hallen")
@section('styles')
    <style>
        .fav-btn{
            width: 38px;
            top: 10px;
            z-index: 2;
            right: 10px;
            font-size: 20px;
            position: absolute;
        }
        .fav-btn-active{
            width: 38px;
            top: 10px;
            z-index: 2;
            right: 10px;
            font-size: 20px;
            position: absolute;
            background-color:red;
            color : white;
            text-align: center;
            border-radius: 5px;
        }

    </style>
    <style>

        .card-img{

            height: 250px;
        }
        .doc-name {
            font-size: 30px !important;
        }
        .single-comment{
            padding:10px;
            margin-top:10px;
            max-height:65px;
            overflow:hidden;
            margin-bottom: 20px;
            background-color: #efefef;
            border: 1px solid #efefef;
            border-radius: 12px;
        }
        .widget-footer{
            border-left: 1px solid #00000073;
            padding-left: 35px;
        }
        .clinic-details{
            margin: 0px !important;
        }
        @media (max-width: 1000px) {
            .clinic-details{
                text-align: center;
                padding: 15px;
                margin-left: 0px !important;
                width: 100% !important;
            }
            .widget-footer{
                border-left: 1px solid #00000073;
                padding-left: 0px;
                text-align: center;
            }
            .widget-container{
                margin-left: 15px;
                margin-right: 15px;
            }
        }
        @media (max-width: 768px) {
            .clinic-details{
                text-align: center;
                padding: 15px;
                margin-left: 0px !important;
                width: 100% !important;
            }
            .widget-container{
                margin-left: 15px;
                margin-right: 15px;
            }
            .widget-footer{
                border-left: 1px solid #00000073;
                padding-left: 0px;
                text-align: center;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">

@endsection
@section('content')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Startseite</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hallen</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">{{$businesses->count()}} ERGEBNISSE</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3">
                    <div class="card search-filter">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Filtern</h4>
                        </div>
                        <div class="card-body">

                            @if(isset($city))
                                @if($city->country_id == 4)
                                    <form class="" method="post" action="{{route('searchSubService')}}">
                                        @csrf
                                        <div class="filter-widget" style="margin-left: 5px !important;">
                                            <div class="form-group">
                                                <label>Land</label>
                                                <select class="js-example-basic-single" name="country_id">
                                                    <option value="">Bitte Land auswählen</option>
                                                    @forelse($countries as $country)
                                                        <option value="{{$country->id}}" @selected($country->id == $city->country_id)>{{$country->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>PLZ / Stadt</label>
                                                <select class="js-example-basic-single" name="city_id">
                                                    <option value="{{$city->id}}" selected>{{$city->post_code. ",".$city->name}}</option>
                                                    @forelse($city->country->cities as $row)
                                                        <option value="{{$row->id}}">{{$row->post_code. ",".$row->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Service</label>
                                                <select class="js-example-basic-single" name="sub_category">
                                                    <option value="">Bitte Service auswählen</option>
                                                    @forelse($abroadServices as $service)
                                                        <option value="{{$service->id}}">{{$service->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                            <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Suchen <i class="fa fa-search" style="padding-left: 5px"></i></button>

                                        </div>
                                    </form>
                                @else
                                    <form class="" method="post" action="{{route('businessCategorySearch')}}">
                                        @csrf
                                        <div class="filter-widget" style="margin-left: 5px !important;">
                                            <div class="form-group">
                                                <label>Land</label>
                                                <select class="js-example-basic-single" name="country_id">
                                                    <option value="">Bitte Land auswählen</option>
                                                    @forelse($countries as $country)
                                                        <option value="{{$country->id}}" @selected($country->id == $city->country_id)>{{$country->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>PLZ / Stadt</label>
                                                <select class="js-example-basic-single" name="city_id">
                                                    <option value="{{$city->id}}" selected>{{$city->post_code. ",".$city->name}}</option>
                                                    @forelse($city->country->cities as $row)
                                                        <option value="{{$row->id}}">{{$row->post_code. ",".$row->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                            <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Suchen <i class="fa fa-search" style="padding-left: 5px"></i></button>

                                        </div>
                                    </form>
                                @endif
                            @endif
                            @if(isset($lat))
                                <form class="" method="get" action="">

                                    <div class="filter-widget" style="margin-left: 5px !important;">
                                        <input type="hidden" name="lat" value="{{isset($lat)}}">
                                        <input type="hidden" name="long" value="{{isset($lng)}}">
                                        <div class="form-group">
                                            <label>Yakınlık (10 - 100) (<span id="rangeText"></span> )</label>

                                            <input type="range" name="km" class="form-range" id="customRange1" min="10" max="100" value="{{request()->query('km') ? request()->query('km') : 10}}">

                                        </div>

                                        <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Suchen <i class="fa fa-search" style="padding-left: 5px"></i></button>

                                    </div>
                                </form>
                            @endif
                            @if(request()->routeIs('searchSubService'))
                                    <form class="" method="post" action="{{route('searchSubService')}}">
                                        @csrf
                                        <div class="filter-widget" style="margin-left: 5px !important;">
                                            <input type="hidden" name="sub_category" value="{{$subCategory->id}}">
                                            <input type="hidden" name="category" value="{{$subCategory->category_id}}">
                                            <div class="form-group">
                                                <select class="js-example-basic-single" placeholder="PLZ / Stadt" id="city_service" name="city_id">
                                                    <option value="">PLZ / Stadt</option>
                                                    @forelse($cities as $city)
                                                        <option value="{{$city->id}}">{{$city->post_code. ",".$city->name}}</option>
                                                    @empty

                                                    @endforelse
                                                </select>
                                            </div>
                                            <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Suchen <i class="fa fa-search" style="padding-left: 5px"></i></button>

                                        </div>
                                    </form>
                            @endif
                            @if(request()->routeIs('serviceSubCategoryGet'))
                                  <form class="" method="post" action="{{route('searchSubService')}}">
                                        @csrf
                                      @if($subCategory->is_abroad == 1)
                                        <div class="filter-widget" style="margin-left: 5px !important;">
                                            <input type="hidden" name="sub_category" value="{{$subCategory->id}}">
                                            <input type="hidden" name="category" value="{{$subCategory->category_id}}">
                                            <div class="form-group">
                                                <select class="js-example-basic-single" placeholder="Bitte Land auswählen" id="country" name="country">
                                                    <option value="">Bitte Land auswählen</option>
                                                    <option value="{{$abroadCities->first()->country->id}}" selected>{{$abroadCities->first()->country->name}}</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="js-example-basic-single" placeholder="PLZ / Stadt" id="city" name="city_id">
                                                    <option value="">PLZ / Stadt</option>
                                                    @forelse($abroadCities as $city)
                                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                                    @empty

                                                    @endforelse
                                                </select>
                                            </div>
                                            <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Suchen <i class="fa fa-search" style="padding-left: 5px"></i></button>

                                        </div>
                                      @else
                                          <div class="filter-widget">
                                              <h4>Geschlecht</h4>
                                              <div>
                                                  <label class="custom_check">
                                                      <input type="radio" name="gender_type" value="1">
                                                      <span class="checkmark"></span> Frau
                                                  </label>
                                              </div>
                                              <div>
                                                  <label class="custom_check">
                                                      <input type="radio" name="gender_type" value="2">
                                                      <span class="checkmark"></span>Mann
                                                  </label>
                                              </div>
                                              <div>
                                                  <label class="custom_check">
                                                      <input type="radio" name="gender_type" value="3">
                                                      <span class="checkmark"></span> Beides
                                                  </label>
                                              </div>
                                          </div>
                                         <div class="filter-widget" style="margin-left: 5px !important;">
                                              <input type="hidden" name="sub_category" value="{{$subCategory->id}}">
                                              <input type="hidden" name="category" value="{{$subCategory->category_id}}">

                                              <div class="form-group">
                                                  <select class="js-example-basic-single" placeholder="PLZ / Stadt" id="city_service" name="city_id">
                                                      <option value="">PLZ / Stadt</option>
                                                      @forelse($cities as $city)
                                                          <option value="{{$city->id}}">{{$city->post_code. ",".$city->name}}</option>
                                                      @empty

                                                      @endforelse
                                                  </select>
                                              </div>
                                              <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Suchen <i class="fa fa-search" style="padding-left: 5px"></i></button>

                                          </div>

                                      @endif
                                    </form>
                            @endif
                            @if(request()->routeIs('categoryGet'))
                                <form class="" method="post" action="{{route('businessCategorySearch')}}">
                                    @csrf
                                    <div class="filter-widget" style="margin-left: 5px !important;">
                                        <div class="form-group">
                                            <select id="select-salon-type" class="js-example-basic-single" placeholder="Wählen Sie Hallentyp" style="" name="category_id">
                                                <option value="">Wählen Sie Hallentyp</option>
                                                @forelse($categories as $category1)
                                                    <option value="{{$category1->id}}" @selected($category1->id == $category->id)>{{$category1->name}}</option>
                                                @empty

                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select placeholder="PLZ / Stadt" id="city_service" name="city_id">
                                                <option value="">PLZ / Stadtn</option>
                                                @forelse($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->post_code. ",".$city->name}}</option>
                                                @empty

                                                @endforelse
                                            </select>
                                        </div>
                                        <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Suchen <i class="fa fa-search" style="padding-left: 5px"></i></button>

                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                    <!-- /Search Filter -->
                </div>

                <div class="col-md-12 col-lg-8 col-xl-9">
                    <!-- Business Widget -->
                    @forelse($businesses as $business)
                        <div class="row widget-container bg-white position-relative @if(!$loop->first) my-3 @endif align-items-center rounded-3" style="box-shadow: 1px 3px 15px #00000036;cursor: pointer" >
                            @if(auth('customer')->check())
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-toggle="popover" title="Zu den Favoriten hinzufügen"  class="@if(in_array($business->id, $favoriteIds)) fav-btn-active @else fav-btn @endif addFav" b_id="{{$business->id}}">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                            @endif
                            <div class="col-lg-3 p-0">
                                <div class="position-relative">
                                    <img src="{{image($business->logo)}}" onclick="businessDetailLink('{{route("business.detail", $business->slug)}}')" class="card-img" alt="User Image">
                                    <span class="badge badge-success" style="position: absolute;top:18px; left: -2px;">Öne Çıkan</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="clinic-details p-3" style="margin-left: 10%">
                                    <h4 class="doc-name mt-1"><a href="{{route('business.detail', $business->slug)}}" onclick="businessDetailLink('{{route("business.detail", $business->slug)}}')">{{$business->name}}</a></h4>
                                    <div class="rating mt-1">
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
                                    <p class="doc-location mt-1"><i class="fas fa-map-marker-alt"></i> {{isset($business->cities) ? $business->cities->name. ", ". $business->cities->country->name : ""}}</p>
                                   {{--  <div class="alert alert-success py-1 mt-1">{{setting('speed_site_title')}} %10 İndirim </div> --}}

                                    <div class="single-comment mt-1">
                                        @if($business->comments->count() > 0)
                                            {{$business->comments->first()->content}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12 widget-footer">


                                    <div>
                                    <span style="font-size: 25px;color: #ff8a00; font-weight: bold;">{{$business->services->min("price")}}</span>
                                        Ab €
                                </div>

                                @if($business->approve_type==0)
                                    <p class="doc-speciality">
                                        <span class="badge badge-success" style="font-size: 12px"><i class="fas fa-check-circle"></i> Sofortige Genehmigung</span>
                                    </p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger text-center aos" data-aos="fade-down">
                            Salon konnte nicht gefunden werden (Kooperationsgespräche werden durchgeführt)
                        </div>
                    @endforelse



                    <div class="load-more text-center">
                        <div>
                            <ul class="pagination justify-content-center">
                                {!! $businesses->links() !!}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    @if(request()->routeIs('searchSubService') || request()->routeIs('categoryGet') || request()->routeIs('serviceSubCategoryGet'))
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
                                    text: item.post_code + "," + item.name,
                                };
                            });

                            callback(results);
                        },
                        error: function() {
                            console.error("Bei der Suche ist ein Fehler aufgetreten.");
                        }
                    });
                }
            });

        </script>
        <script>
            $(document).ready(function() {
                var selectElements = document.querySelectorAll('.js-example-basic-single');

                // Her bir öğeye Tom Select'i uygulayın
                selectElements.forEach(function (element) {
                    new TomSelect(element, {
                        autocomplete: false,
                        maxItems: 1,
                        language: 'tr'
                    });
                });
            });
        </script>
    @else
        <script>
            $(document).ready(function() {
                var selectElements = document.querySelectorAll('.js-example-basic-single');

                // Her bir öğeye Tom Select'i uygulayın
                selectElements.forEach(function (element) {
                    new TomSelect(element, {
                        autocomplete: false,
                        maxItems: 1,
                        language: 'tr'
                    });
                });
            });
        </script>
    @endif

    <script>
        function businessDetailLink(url){
            window.location.href= url;
        }
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        });
        $('.addFav').on('click', function (){
            var element =  $(this);

            let b_id=$(this).attr('b_id');
            $.ajax({
                url: '{{route('customer.favorite.add')}}',
                type: 'POST',
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': b_id
                },
                dataType:'json',
                success:function (res){

                    if(res.type == "add"){
                        element.removeClass('fav-btn');
                        element.addClass('fav-btn-active');
                    }
                    else{
                        element.addClass('fav-btn');
                        element.removeClass('fav-btn-active');
                    }
                    Swal.fire({
                        position: 'center',
                        icon: res.status,
                        title: res.message,
                        showConfirmButton: false,
                        timer: 3000,
                        background: '#fff',
                        customClass: {
                            title: 'text-primary fs-6',
                            content: 'text-dark',
                            popup: 'bg-light',

                        },
                        timerProgressBar: true,
                        width: '25rem',
                        height: '2.5rem',
                        fontsize:'15px'
                    })
                }
            });
        });
    </script>
    <script>
        // Input elemanını alın
        var rangeInput = $("#customRange1");

        // Span elementini alın
        var rangeText = $("#rangeText");

        // Input değeri değiştiğinde bir olay dinleyici ekleyin
        rangeInput.on("input", function() {
            // Input değerini span elementinin metni olarak ayarlayın
            rangeText.text(rangeInput.val());
        });
        $(function (){
            rangeText.text(rangeInput.val());
        })
    </script>
    <script>
    </script>
@endsection