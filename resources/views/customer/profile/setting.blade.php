@extends('layouts.master')
@section('title', "Profilim")
@section('meta_description', "Kullanıcı Profilim")
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
                            <li class="breadcrumb-item active" aria-current="page">Hesabım</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Hesap Bilgileri</h2>
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
                                        <h3>Hesap Bilgileri</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('layouts.component.alert')
                                    @include('layouts.component.error')
                                    <form method="post" action="{{route('customer.profile.update')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row form-row">
                                            <div class="col-12 col-md-12">
                                                <div class="form-group">
                                                    <div class="change-avatar">
                                                        <div class="profile-img">
                                                            <img src="{{storage(auth('customer')->user()->image)}}" alt="User Image">
                                                        </div>
                                                        <div class="upload-img">
                                                            <div class="change-photo-btn">
                                                                <span><i class="fa fa-upload"></i> Fotoğraf Yükle</span>
                                                                <input type="file" class="upload" name="profile">
                                                            </div>
                                                            <small class="form-text text-muted">İzin verilen JPG, GIF veya PNG.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Ad Soyad</label>
                                                        <input type="text" name="name" class="form-control bank_name" value="{{auth('customer')->user()->name}}">
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Telefon</label>
                                                        <input type="text" name="email" class="form-control branch_name phone" value="{{auth('customer')->user()->phone}}">
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Doğum Günü</label>
                                                        <input type="date" name="birthday" max="{{\Illuminate\Support\Carbon::now()->subYears(18)->format('Y-m-d')}}" class="form-control account_no" value="{{auth('customer')->user()->birthday}}">
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">İl</label>
                                                        <select name="city_id" class="form-control" style="border: 1px solid black !important;" id="city_select">
                                                            <option value="">İl Seçiniz</option>
                                                            @foreach($cities as $city)
                                                                <option value="{{$city->id}}" @selected(auth('customer')->user()->city_id==$city->id)>{{$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">İlçe</label>
                                                        @if(auth('customer')->user()->city_id)
                                                            <select name="district_id" class="form-select" style="border: 1px solid black !important;" id="district_select">
                                                                <option value="">İlçe Seçiniz</option>
                                                                @foreach(auth('customer')->user()->city->districts as $district)
                                                                    <option value="{{$district->id}}" @selected(auth('customer')->user()->district_id==$district->id)>{{$district->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        @else
                                                            <select name="district_id" class="form-select" style="border: 1px solid black !important;" id="district_select">
                                                                <option value="">İlçe Seçiniz</option>
                                                            </select>
                                                        @endif
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="submit-section">
                                            <button type="submit" class="btn btn-primary submit-btn">Güncelle</button>
                                        </div>
                                    </form>
                                    <!-- /Profile Settings Form -->

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
        $(".phone").inputmask({"mask": "(999)-999-9999"});
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