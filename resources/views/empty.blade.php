@extends('layouts.master')
@section('title', config('settings.meta_keywords'))
@section('meta_description', config('settings.meta_description'))
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
                            <li class="breadcrumb-item active" aria-current="page">SSS</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Sık Sorulan Sorular</h2>
                </div>

            </div>
        </div>
    </div>
    <div class="content" style="min-height: 264.8px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h5>Blank Page</h5>
                </div>
            </div>
        </div>

    </div>

@endsection
@section('scripts')

@endsection