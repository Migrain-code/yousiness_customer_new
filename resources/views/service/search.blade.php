@extends('layouts.master')
@section('title', "Salonlar")
@section('meta_description', "Salonlar")
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
                            <li class="breadcrumb-item"><a href="/">Ansayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Salonlar</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">{{$businesses->count()}} Sonuç Bulundu</h2>
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
                            <h4 class="card-title mb-0">Filtrele</h4>
                        </div>
                        <div class="card-body">
                            @if(isset($city))
                                <form class="" method="post" action="{{route('businessCategorySearch')}}">
                                    @csrf
                                    <div class="filter-widget" style="margin-left: 5px !important;">
                                        <div class="form-group">
                                            <label>Ülke</label>
                                            <select class="js-example-basic-single" name="country_id">
                                                <option value="">Ülke Seçiniz</option>
                                                @forelse($countries as $country)
                                                    <option value="{{$country->id}}" @selected($country->id == $city->country_id)>{{$country->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Şehir Seçiniz</label>
                                            <select class="js-example-basic-single" name="city_id">
                                                <option value="">Şehir Seçiniz</option>
                                                @forelse($city->country->cities as $row)
                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                        <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Arama Yap <i class="fa fa-search" style="padding-left: 5px"></i></button>

                                    </div>
                                </form>
                            @else
                                <form class="" method="get" action="">

                                    <div class="filter-widget" style="margin-left: 5px !important;">
                                        <input type="hidden" name="lat" value="{{$lat}}">
                                        <input type="hidden" name="long" value="{{$lng}}">
                                        <div class="form-group">
                                            <label>Yakınlık (10 - 100) (<span id="rangeText"></span> )</label>

                                            <input type="range" name="km" class="form-range" id="customRange1" min="10" max="100" value="{{request()->query('km') ? request()->query('km') : 10}}">
                                            {{-- <select class="js-example-basic-single" name="km">
                                                <option value="">Km Seçiniz</option>
                                                @for($i=10; $i <= 100; $i += 10)
                                                    <option value="{{$i}}" @selected(request()->query('km') == $i)>{{$i}}</option>
                                                @endfor
                                            </select>--}}
                                        </div>

                                        <button type="submit" class="btn-five w-10 p-2" style=" bottom: -8px; left: -2px;"> Arama Yap <i class="fa fa-search" style="padding-left: 5px"></i></button>

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
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-toggle="popover" title="Favorilere Ekle"  class="@if(in_array($business->id, $favoriteIds)) fav-btn-active @else fav-btn @endif addFav" b_id="{{$business->id}}">
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
                                    <p class="doc-location mt-1"><i class="fas fa-map-marker-alt"></i> {{$business->cities->name. ", ". $business->districts->name}}</p>
                                    <div class="alert alert-success py-1 mt-1">{{setting('speed_site_title')}} %10 İndirim </div>

                                    <div class="single-comment mt-1">
                                        asdasdasldhas
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12 widget-footer">

                                <div>
                                    <span style="font-size: 25px;color: #ff8a00; font-weight: bold;">{{$business->services->min("price")}} TL</span>
                                    'den başlayan
                                </div>
                                @if($business->approve_type==0)
                                    <p class="doc-speciality">
                                        <span class="badge badge-success" style="font-size: 12px"><i class="fas fa-check-circle"></i> Anında Onay</span>
                                    </p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger text-center aos" data-aos="fade-down">
                            Aradığınız şehirde hizmet veren işletme kaydı bulunamadı.
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
@endsection