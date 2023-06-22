@extends('layouts.master')
@section('title', "Salonlar")
@section('meta_description', " Salonlar")
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container {
            background-color: transparent;
            width: 200px !important;
            right: -30px;
            bottom: -8px;
        }
        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 1px solid #0db9f2;
            border-radius: 15px;
        }
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            height: 40px;
            padding-top: 5px;
            border-radius: 15px;
        }
        .select2-results__options {
            list-style: none;
            margin: 8px;
            padding: 0;
        }
        .select2-container--open .select2-dropdown--below {
            border-top: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #888 transparent transparent transparent;
            border-style: solid;
            border-width: 5px 4px 0 4px;
            height: 0;
            left: 0%;
            margin-left: -175px;
            margin-top: -2px;
            position: absolute;
            top: 65%;
            width: 0;
        }
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
                @include('service.filter')
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <!-- Business Widget -->

                         @forelse($businesses as $business)
                            <div class="row widget-container bg-white @if(!$loop->first) my-3 @endif align-items-center rounded-3" style="box-shadow: 1px 3px 15px #00000036;cursor: pointer" onclick="businessDetailLink('{{route("business.detail", $business->business->slug)}}')">
                                <div class="col-lg-4 p-0">
                                    <div class="position-relative">
                                        <img src="{{asset($business->business->wallpaper)}}" class="card-img" alt="User Image">
                                        <span class="badge badge-success" style="position: absolute;top:18px; left: -2px;transform: rotate(-35deg)">Öne Çıkan</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="clinic-details p-3" style="margin-left: 10%">
                                        <h4 class="doc-name mt-1"><a href="{{route('business.detail', $business->business->slug)}}">{{$business->business->name}}</a></h4>
                                        <div class="rating mt-1">
                                            @if($business->business->comments->count() > 0)
                                                @for($i=0; $i < 5; $i++ )
                                                    <i class="fas fa-star @if($i < $business->business->comments->sum('point') / $business->business->comments->count()) filled @endif"></i>
                                                @endfor
                                            @else
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            @endif
                                            <span class="d-inline-block average-rating">
                                                    <i class="far fa-comment" style="margin-left: 15px"></i> {{$business->business->comments->count()}} Yorum
                                            </span>
                                        </div>
                                        <p class="doc-location mt-1"><i class="fas fa-map-marker-alt"></i> {{$business->business->cities->name. ", ". $business->business->districts->name}}</p>
                                        <div class="alert alert-success py-1 mt-1">Hizli Randvuya Özel %10 İndirim </div>

                                        <div class="single-comment mt-1">
                                            asdasdasldhas
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12 widget-footer">

                                        <div>
                                            <span style="font-size: 25px;color: #ff8a00; font-weight: bold;">{{$business->business->services->min("price")}} TL</span>
                                            'den başlayan
                                        </div>
                                    @if($business->business->approve_type==0)
                                        <p class="doc-speciality">
                                            <span class="badge badge-success" style="font-size: 12px"><i class="fas fa-check-circle"></i> Anında Onay</span>
                                        </p>
                                    @endif
                                </div>
                            </div>
                         @empty
                            <div class="alert alert-danger text-center aos" data-aos="fade-down">
                                Aradığınız türde hizmet veren işletme kaydı bulunamadı.
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        function businessDetailLink(url){
            window.location.href= url;
        }
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection