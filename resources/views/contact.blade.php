@extends('layouts.master')
@section('title', "İletişim")
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
                            <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">İletişime Geç</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <section class="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h3 class="mb-4">İletişim</h3>
                    <p>Aklınıza takılan ve dökümanlarda bulamadığınız sorunlar mı var? Aşağıdaki formu doldurun veya iletişim bilgilerinden bize ulaşın.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="contact-box flex-fill">
                        <div class="infor-img">
                            <div class="image-circle">
                                <i class="feather-phone"></i>
                            </div>
                        </div>
                        <div class="infor-details text-center">
                            <label>Telefon</label>
                            <p>{{setting('speed_contact_phone')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="contact-box flex-fill">
                        <div class="infor-img">
                            <div class="image-circle bg-primary">
                                <i class="feather-mail"></i>
                            </div>
                        </div>
                        <div class="infor-details text-center">
                            <label>E-posta</label>
                            <p>{{setting('speed_contact_email')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="contact-box flex-fill">
                        <div class="infor-img">
                            <div class="image-circle">
                                <i class="feather-map-pin"></i>
                            </div>
                        </div>
                        <div class="infor-details text-center">
                            <label>Adres</label>
                            <p>{{setting('speed_contact_address')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form">
        <div class="container">
            <div class="section-header text-center">
                <h2>İletişim Formu!</h2>
                <p class="text-warning">Lütfen Tüm Alanları Doldurun</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.component.error')
                    @include('layouts.component.alert')
                    <form action="{{route('contact.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ad Soyad <span>*</span></label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-posta Adresi <span>*</span></label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Konu</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>İçerik <span>*</span></label>
                                    <textarea class="form-control" name="content"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn bg-primary" type="submit">Mesajı Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Form -->

    <!-- Contact Map -->
    <section class="contact-map d-flex">
        {!! setting('speed_address_map') !!}
    </section>
    <!-- /Contact Map -->

@endsection
@section('scripts')

@endsection