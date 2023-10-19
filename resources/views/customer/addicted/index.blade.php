@extends('layouts.master')
@section('title', 'Meine Salons')
@section('meta_description', 'Es zeigt eine Aufzeichnung aller Unternehmen an, mit denen Sie zuvor Termine oder Transaktionen vereinbart haben.')
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
                            <li class="breadcrumb-item active" aria-current="page">Mein Konto</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Meine Salons</h2>
                </div>

            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="backdrop"></div>
                <div class="w-100 text-end position-absolute text-white font-w800 customer-menu-buttons" style="right: 5px; top: 50px;font-size: 25px">
                    <input type="checkbox" id="customer-menu-toggle" class="customer-menu-toggle" style="visibility: hidden">
                    <label for="customer-menu-toggle" class="customer-menu-toggle-label"><i class="fas fa-bars" style="padding-right: 5px;"></i>Menü</label>
                </div>
                <!-- Profile Sidebar -->
                @include('customer.layouts.sidebar')
                <!-- / Profile Sidebar -->
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Meine Salons</h3>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        @forelse($businesses as $business)
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="profile-widget">
                                                    <div class="doc-img">
                                                        <a href="{{route('business.detail', $business->slug)}}">
                                                            <img class="img-fluid" alt="User Image" src="{{image($business->logo)}}">
                                                        </a>
                                                    </div>
                                                    <div class="pro-content">
                                                        <h3 class="title">
                                                            <a href="{{route('business.detail', $business->slug)}}">{{$business->name}}</a>
                                                            <i class="fas fa-check-circle verified"></i>
                                                        </h3>
                                                        <ul class="available-info">
                                                            <li>
                                                                @if($business->cities)
                                                                    <i class="fas fa-map-marker-alt"></i>{{$business->cities->name .', '.$business->cities->country->name}}
                                                                @endif
                                                            </li>
                                                            <li>
                                                                <i class="far fa-clock"></i> {{$business->start_time}} Öffnungszeit
                                                            </li>
                                                        </ul>
                                                        <div class="row row-sm">
                                                            <div class="col-6">
                                                                <a href="{{route('business.detail', $business->slug)}}" class="btn btn-outline-warning w-100">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="alert alert-warning text-center">Der Geschäftsdatensatz, für den Sie einen Termin vereinbart haben, wurde nicht gefunden</div>
                                        @endforelse
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
    <script src="/front/assets/js/cutomer-menu.js"></script>

@endsection