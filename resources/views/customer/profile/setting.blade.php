@extends('layouts.master')
@section('title', "Persöhnliche Daten")
@section('meta_description', "Mein Benutzerprofil")
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
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
                    <h2 class="breadcrumb-title">Persöhnliche Daten</h2>
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
                                        <h3>Persöhnliche Daten</h3>
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
                                                            <img src="{{storage(userInfo()->image)}}" alt="User Image">
                                                        </div>
                                                        <div class="upload-img">
                                                            <div class="change-photo-btn">
                                                                <span><i class="fa fa-upload"></i> Foto hochladen</span>
                                                                <input type="file" class="upload" name="profile">
                                                            </div>
                                                            <small class="form-text text-muted">JPG, GIF oder PNG erlaubt.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Name Nachname</label>
                                                        <input type="text" name="name" class="form-control bank_name" value="{{userInfo()->name}}">
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Geburtsdatum</label>
                                                        <input type="date" name="birthday" max="{{\Illuminate\Support\Carbon::now()->subYears(18)->format('Y-m-d')}}" class="form-control account_no" value="{{userInfo()->birthday}}">
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Mobilnummer</label>
                                                        <input type="text" name="email" class="form-control branch_name phone" value="{{userInfo()->phone}}">
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">E-Mail</label>
                                                        <input type="text" name="custom_email" class="form-control branch_name phone" placeholder="{{userInfo()->custom_email ?? "E-Mail"}}" value="{{userInfo()->custom_email}}">
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Anschrift</label>
                                                        <textarea type="text" name="address" class="form-control branch_name phone" placeholder="{{userInfo()->address ?? "Adresse"}}">{{userInfo()->address}}</textarea>
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">PLZ / Stadt</label>
                                                        <select name="city_id" class="" style="border: 1px solid black !important;" id="city_select">
                                                            <option value="">PLZ / Stadt</option>
                                                            @if(isset(auth('customer')->user()->district))
                                                                <option value="{{auth('customer')->user()->district->id}}" selected>{{auth('customer')->user()->district->post_code.",".userInfo()->district->name}}</option>
                                                            @endif
                                                            @foreach($cities as $city)
                                                                <option value="{{$city->id}}">{{$city->post_code.",".$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Geschlecht</label> <br>
                                                        <div class="form-check-inline visits me-1">
                                                            <label class="visit-btns">
                                                                <input type="radio" name="gender" class="form-check-input active-time" @checked(userInfo()->gender == 1) value="1" required="">
                                                                <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Geschlecht">
                                                                    Frau
                                                                </span>
                                                            </label>
                                                        </div>

                                                        <div class="form-check-inline visits me-1">
                                                            <label class="visit-btns">
                                                                <input type="radio" name="gender" class="form-check-input active-time" @checked(userInfo()->gender == 2) value="2" required="">
                                                                <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Cinsiyet Seçimi Zorunludur">
                                                                  Mann
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="submit-section">
                                            <button type="submit" class="btn btn-primary submit-btn float-end">Speichern</button>
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
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

    <script>
        var mySelect = new TomSelect("#city_select", {
            remoteUrl: '/api/city/search',
            remoteSearch: true,
            create: false,
            highlight: false,
            load: function(query, callback) {
                $.ajax({
                    url: '/api/city/search', // Sunucu tarafındaki arama API'sinin URL'si
                    method: 'POST',
                    data: { q: query }, // Arama sorgusu
                    dataType: 'json', // Beklenen veri tipi
                    success: function(data) {

                        var results = data.cities.map(function(item) {
                            console.log('item', item.name);
                            return {
                                value: item.id,
                                text: item.post_code + "," + item.name
                            };
                        });

                        callback(results);
                    },
                    error: function() {
                        console.error("Bei der Suche ist ein Fehler aufgetreten.");
                    }
                });
            }
        });
    </script>
    <script src="/front/assets/js/cutomer-menu.js"></script>

@endsection