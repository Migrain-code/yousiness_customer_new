@extends('layouts.master')
@section('meta_keys', config('settings.meta_keywords'). ",Salonlar")
@section('meta_description', config('settings.meta_description'). ", Salonlar")
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container {
            width: 100% !important;
            background-color: transparent;
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
            margin-left: -4px;
            margin-top: -2px;
            position: absolute;
            top: 65%;
            width: 0;
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
                        <div class="card">
                            <div class="card-body">
                                <div class="doctor-widget">
                                    <div class="doc-info-left">
                                        <div class="doctor-img">
                                            <a href="{{route('business.detail', $business->business->slug)}}">
                                                <img src="{{asset($business->business->logo)}}" class="img-fluid" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="doc-info-cont">
                                            <h4 class="doc-name"><a href="{{route('business.detail', $business->business->slug)}}">{{$business->business->name}}</a></h4>
                                            @if($business->business->approve_type==1)
                                                <p class="doc-speciality">
                                                    <span class="badge badge-success fs-7"><i class="fas fa-check-circle"></i> Anında Onay</span>
                                                </p>
                                            @endif
                                            <div class="clinic-details">
                                                <p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{$business->business->cities->name. ", ". $business->business->districts->name}}</p>

                                            </div>
                                            <div style="margin-bottom: 5px;">
                                                <span class="text-success" style="font-size: 19px;font-weight: bold"> {{$business->business->services()->min('price')}} TL</span>'den başlayan fiyatlar
                                            </div>
                                            <div class="rating">
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

                                            <div class="clinic-services">
                                                <span>{{$business->business->type->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right">
                                        <div class="clini-infos">

                                        </div>
                                        <div class="clinic-booking">
                                            <a class="view-pro-btn" href="{{route('business.detail', $business->business->slug)}}">Profili Görüntüle</a>
                                            <a class="apt-btn" href="{{route('business.detail', $business->business->slug)}}">Randevu Al</a>
                                        </div>
                                    </div>
                                </div>
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
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection