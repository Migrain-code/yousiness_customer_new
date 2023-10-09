@extends('layouts.master')
@section('title', "Alle Dienstleistungen")
@section('meta_description',"Alle Dienstleistungen")
@section('styles')

@endsection
@section('content')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Startseite</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dienstleistungen</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">{{count($womanServices) + count($manServices)}} Ergebnis gefunden</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <!-- Browse Section Five -->
    <section class="browse-section-five" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">Frau</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($womanServices as $service)
                    <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card-five">
                           <img src="{{image($service->cover_image)}}" style="width: 100%;height: 100px;border-radius: 5px">
                            <div class="mt-2">
                                <a href="{{route('service.detail', $service->slug)}}">{{$service->name}}</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <!-- /Browse Section Five -->
    <!-- Browse Section Five -->
    <section class="browse-section-five" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">Männlich</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($manServices as $service)
                    <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                        <div class="specialist-card-five">
                            <img src="{{image($service->cover_image)}}" style="width: 100%;height: 100px;border-radius: 5px">
                            <div class="mt-2">
                                <a href="{{route('service.detail', $service->slug)}}">{{$service->name}}</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
    <!-- /Browse Section Five -->
@endsection
@section('scripts')

@endsection