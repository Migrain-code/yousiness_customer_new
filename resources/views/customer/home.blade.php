@extends('layouts.master')
@section('title', 'Mein Kontoauszug')
@section('meta_description', 'Alle allgemeinen Informationen zu Ihrem Konto sind hier aufgeführt')
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
                    <h2 class="breadcrumb-title">Mein Profil</h2>
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
                        <div class="col-lg-9 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="card-title">Kontoauszug</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="profile-view-bottom">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="info-list">
                                                    <div class="title">Vorname Familienname</div>
                                                    <div class="text" id="bank_name">{{auth('customer')->user()->name}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="info-list">
                                                    <div class="title">Geburtsdatum</div>
                                                    <div class="text" id="branch_name">{{\Illuminate\Support\Carbon::parse(auth('customer')->user()->birthday)->translatedFormat('d F Y')}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="info-list">
                                                    <div class="title">Kundennummer</div>
                                                    <div class="text" id="account_no">#{{auth('customer')->user()->id}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="info-list">
                                                    <div class="title">Status</div>
                                                    <div class="text" id="account_name">
                                                        @if(auth('customer')->user()->status == 0)
                                                            <span class="badge bg-danger">verstopft</span>
                                                        @elseif(auth('customer')->user()->status == 2)
                                                            <span class="badge bg-warning">Warnung gegeben</span>
                                                        @else
                                                            <span class="badge bg-success">Aktiv</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--
                            <div class="col-lg-4 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="account-card bg-success-light">
                                                <span>€{{number_format($payments['appointment'], 2)}}</span> Randevu Ödemeleriniz
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="account-card bg-warning-light">
                                                <span>€{{number_format($payments['packetPayment'], 2)}}</span> Paket Alım Ödemeleriniz
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="account-card bg-purple-light">
                                                <span>€{{number_format($payments['orderTotal'], 2)}}</span> Ürün Alım Ödemeleriniz
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="account-card bg-primary-light">
                                                <span>€{{number_format($payments['total'], 2)}}</span> Toplam Harcamanız
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        --}}

                        <div class="col-lg-3">
                            <div class="customer-panel-ads-banner">
                                <a href="{{$ads->skip(2)->first()->link}}" style="width: 100%;">
                                    <img src="{{image($ads->skip(2)->first()->image)}}" alt="" style="width: 100%;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-9">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Kommende Termine</h3>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        @forelse($appointments as $appointment)
                                            @if($appointment->business)
                                                <div class="col-md-6 col-lg-4 col-xl-3">
                                                    <div class="profile-widget">
                                                        <div class="doc-img">
                                                            <a href="{{route('business.detail', $appointment->business->slug)}}">
                                                                <img class="img-fluid" alt="User Image" src="{{image($appointment->business->logo)}}">
                                                            </a>
                                                            <a href="javascript:void(0)" class="fav-btn addFav" @if(in_array($appointment->business_id, $favorites)) style="background-color: #fb1612;color: white"  @endif b_id="{{$appointment->business_id}}">
                                                                <i class="far fa-bookmark"></i>
                                                            </a>
                                                        </div>
                                                        <div class="pro-content">
                                                            <h3 class="title">
                                                                <a href="{{route('business.detail', $appointment->business->slug)}}">{{$appointment->business->name}}</a>
                                                            </h3>

                                                            <div class="my-2">
                                                                {!! $appointment->status("html") !!}
                                                            </div>
                                                            <ul class="available-info">
                                                                <li>
                                                                    @if($appointment->business->cities)
                                                                        <i class="fas fa-map-marker-alt"></i>{{$appointment->business->cities->name .', '.$appointment->business->cities->country->name}}
                                                                    @endif
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-clock"></i> {{$appointment->start_time}} An
                                                                </li>
                                                                {{--
                                                                    <li>
                                                                    <i class="far fa-money-bill-alt"></i>€{{$appointmentTotals[$loop->index]}}
                                                                </li>
                                                                --}}
                                                            </ul>
                                                            <div class="row row-sm">
                                                                <div class="col-6">
                                                                    <a href="{{route('customer.appointment.detail', $appointment->id)}}" class="btn btn-outline-warning w-100">Detail</a>
                                                                </div>
                                                                @if($appointment->status==0)
                                                                    <div class="col-6">
                                                                        <a href="#" class="btn btn-outline-danger cancelledBtn" ap_id="{{$appointment->id}}">Stornieren</a>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @empty
                                            <div class="alert alert-warning text-center">Ihr Termindatensatz konnte nicht gefunden werden</div>
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
    <style>
        .w-25-px{
            width: 25px;
        }
    </style>
@endsection
@section('scripts')

    <script>
        //$(".phone").inputmask({"mask": "+99 (999)-999-9999"});
        $(".phone").inputmask({"mask": "(999)-999-9999"});
        $('.cancelledBtn').on('click', function (){
           let ap_id=$(this).attr('ap_id');
           $.ajax({
                url: '{{route('customer.appointment.cancel')}}',
                type: 'POST',
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': ap_id
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
                    })
                }
            });
        });
        $('.addFav').on('click', function (){
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
                    })
                }
            });
        });
        $('#city_select').on('change', function (){
            $('#district_select').empty();
           let city_id=$(this).val();
           $.ajax({
              url: '{{route('customer.getDistrict')}}',
              type: 'POST',
              data: {
                  '_token': '{{csrf_token()}}',
                  'city_id': city_id
              },
              dataType:'json',
              success:function (data){
                  $.each(data, function (index, value){
                      $('#district_select').append('<option value="'+value.id + '">'+ value.name+'</option>');
                  });
              }
           });
        });
    </script>
    <script src="/front/assets/js/cutomer-menu.js"></script>
@endsection