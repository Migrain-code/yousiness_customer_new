@extends('layouts.master')
@section('title', "Salonlar")
@section('meta_description', " Salonlar")
@section('styles')
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
                @include('service.filter')
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <!-- Business Widget -->
                         @forelse($businesses as $business)
                            <div class="row widget-container bg-white @if(!$loop->first) my-3 @endif align-items-center rounded-3" style="box-shadow: 1px 3px 15px #00000036;cursor: pointer" onclick="businessDetailLink('{{route("business.detail", $business->business->slug)}}')">
                                <div class="col-lg-3 p-0">
                                    <div class="position-relative">
                                        <img src="{{image($business->business->logo)}}" class="card-img" alt="User Image">
                                        <span class="badge badge-success" style="position: absolute;top:18px; left: -2px;">Öne Çıkan</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
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
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection