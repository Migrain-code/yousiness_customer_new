@extends('layouts.master')
@section('title', 'Meine Favoriten Salons')
@section('meta_description', 'Liste der Unternehmen, die Sie zu Ihren Favoriten hinzugefügt haben')
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
                    <h2 class="breadcrumb-title">Meine Favoriten Salons</h2>
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
                    <label for="customer-menu-toggle" class="customer-menu-toggle-label"><i class="fas fa-bars" style="padding-right: 5px;"></i>Speisekarte</label>
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
                                        <h3>Favoriten</h3>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        @forelse($favorites as $favorite)
                                            @if($favorite->business)
                                                <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="profile-widget">
                                                    <div class="doc-img">
                                                        <a href="{{route('business.detail', $favorite->business->slug)}}">
                                                            <img class="img-fluid" alt="User Image" src="{{image($favorite->business->logo)}}">
                                                        </a>
                                                    </div>
                                                    <div class="pro-content">
                                                        <h3 class="title">
                                                            <a href="{{route('business.detail', $favorite->business->slug)}}">{{$favorite->business->name}}</a>
                                                            <i class="fas fa-check-circle verified"></i>
                                                        </h3>

                                                        <ul class="available-info">
                                                            <li>
                                                                @if($favorite->business->cities)
                                                                    <i class="fas fa-map-marker-alt"></i>{{$favorite->business->cities->name .', '.$favorite->business->cities->country->name}}
                                                                @endif
                                                            </li>
                                                            <li>
                                                                <i class="far fa-clock"></i> {{$favorite->business->start_time}} Açılış
                                                            </li>
                                                        </ul>
                                                        <div class="row row-sm">
                                                            <div class="col-6">
                                                                <a href="{{route('business.detail', $favorite->business->slug)}}" class="btn btn-outline-warning w-100">Detail</a>
                                                            </div>
                                                            <div class="col-6">
                                                                <a href="#" class="btn btn-outline-danger w-100 removeFavorite" b_id="{{$favorite->id}}"><i class="fa fa-trash me-1"></i>Löschen</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @empty
                                            <div class="alert alert-warning text-center">Sie haben noch Keine Favoriten hinzugefügt</div>
                                        @endforelse

                                    </div>
                                    <div class="row">
                                       <div class="d-flex justify-content-center">
                                           {{$favorites->links()}}
                                       </div>
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
    <script>
        $('.removeFavorite').on('click', function (){
            let b_id=$(this).attr('b_id');
            $.ajax({
                url: '{{route('customer.favorite.remove')}}',
                type: 'POST',
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': b_id
                },
                dataType:'json',
                success:function (res){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
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
                    });
                   setTimeout(function (){
                       location.reload();
                   }, 3000)
                }
            });
        });
    </script>
    <script src="/front/assets/js/cutomer-menu.js"></script>

@endsection