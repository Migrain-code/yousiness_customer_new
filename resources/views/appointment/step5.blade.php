@extends('layouts.master')
@section('title', config('settings.meta_keywords'))
@section('meta_description', config('settings.meta_description'))
@section('styles')

@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Startseite</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Termin erfolgreich</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Termin erstellt</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content success-page-cont">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <!-- Success Card -->
                    <div class="card success-card">
                        <div class="card-body">
                            <div class="success-cont">
                                <i class="fas fa-check"></i>
                                <h3>Termin erfolgreich vereinbart!!</h3>
                                Ihr Termin für <strong>{{$business->name}}</strong> <br>
                                <p>
                                    wurde für den {{$appointment->services->first()->start_time}} vereinbart

                                </p>
                                <a href="/" class="btn btn-primary view-inv-btn">Startseite</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Success Card -->

                </div>
            </div>

        </div>
    </div>
    <!-- /Page Content -->

@endsection
@section('scripts')

@endsection