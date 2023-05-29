@extends('layouts.master')
@section('title', "Salonlar")
@section('meta_description', "Salonlar")
@section('styles')

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
               @include('business.filter')
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <!-- Business Widget -->
                    @forelse($businesses as $business)
                        <div class="card">
                            <div class="card-body">
                                <div class="doctor-widget">
                                    <div class="doc-info-left">
                                        <div class="doctor-img">
                                            <a href="{{route('business.detail', $business->slug)}}">
                                                <img src="{{asset($business->logo)}}" class="img-fluid" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="doc-info-cont">
                                            <h4 class="doc-name"><a href="{{route('business.detail', $business->slug)}}">{{$business->name}}</a></h4>
                                            @if($business->approve_type==1)
                                                <p class="doc-speciality">
                                                    <span class="badge badge-success fs-7"><i class="fas fa-check-circle"></i> Anında Onay</span>
                                                </p>
                                            @endif
                                            <div class="clinic-details">
                                                <p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{$business->cities->name. ", ". $business->districts->name}}</p>

                                            </div>
                                            <div style="margin-bottom: 5px;">
                                                <span class="text-success" style="font-size: 19px;font-weight: bold"> 5 TL</span>'den başlayan fiyatlar
                                            </div>
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

                                            <div class="clinic-services">
                                                <span>{{$business->type->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doc-info-right">
                                        <div class="clini-infos">

                                        </div>
                                        <div class="clinic-booking">
                                            <a class="view-pro-btn" href="{{route('business.detail', $business->slug)}}">Profili Görüntüle</a>
                                            <a class="apt-btn" href="{{route('business.detail', $business->slug)}}">Randevu Al</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty

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

@endsection