@extends('layouts.master')
@section('title', "Kommunikation")
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
                            <li class="breadcrumb-item active" aria-current="page">Kommunikation</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Kontaktiere uns</h2>
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
                    <h3 class="mb-4">Kommunikation</h3>
                    <p>Haben Sie Probleme, die Sie in der Dokumentation nicht finden können? Füllen Sie das untenstehende Formular aus oder kontaktieren Sie uns über die Kontaktinformationen.</p>
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
                            <label>Telefonnummer</label>
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
                            <label>Email</label>
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
                            <label>Adresse</label>
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
                <h2>Kontakt Formular</h2>
                <p class="text-warning">Bitte alle Felder ausfüllen!</p>
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
                                    <label>Vorname Familienname <span>*</span></label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-Mail-Adresse <span>*</span></label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thema</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nachricht <span>*</span></label>
                                    <textarea class="form-control" name="content"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn bg-primary" type="submit">Nachricht senden</button>
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