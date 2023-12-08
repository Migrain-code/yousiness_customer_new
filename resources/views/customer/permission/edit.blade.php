@extends('layouts.master')
@section('title', 'Benachrichtigung')
@section('meta_description', 'Sie müssen Benachrichtigungen, die vom System kommen, je nach Typ zulassen. Sie können diese Berechtigungen auf dieser Seite bearbeiten.')
@section('styles')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input[type="checkbox"]:checked + .slider {
            background-color: #1bc523;
        }

        input[type="checkbox"]:focus + .slider {
            box-shadow: 0 0 1px #1bc523;
        }

        input[type="checkbox"]:checked + .slider:before {
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        .card{
            margin-bottom: 0.875rem;
            border-radius: 15px;
        }
        .card .card-header {
            display: flex;
            background-color: #fff;
            border-bottom: 1px solid #f0f0f0;
            border-radius: 15px;
            box-shadow: 0px 9px 19px #daae6f40;
        }
    </style>
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
                    <h2 class="breadcrumb-title">Benachrichtigung</h2>
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
                                        <h3>Benachrichtigung</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            @include('layouts.component.alert')
                                            @include('layouts.component.error')
                                            <!-- Change Password Form -->
                                            <form method="post" action="{{route('customer.permissions.update')}}">
                                                @csrf
                                                <div class="card col-12" style="border-radius: 15px">
                                                    <div class="card-body d-flex align-items-center">
                                                        <div class="col">
                                                            <h3>Mitteilungen</h3>
                                                            Erhalten Sie Push-Benachrichtigungen über die App.
                                                        </div>
                                                        <div class="col d-flex align-items-center justify-content-end">
                                                            <label class="switch">
                                                                <input type="checkbox" @checked(userInfo()->permissions->is_notification == 1) name="is_notification">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-12" style="border-radius: 15px">
                                                    <div class="card-body d-flex align-items-center">
                                                        <div class="col">
                                                            <h3>Email</h3>
                                                            Wir senden Ihnen eine E-Mail an Ihr E-Mail-Konto.
                                                        </div>
                                                        <div class="col d-flex align-items-center justify-content-end">
                                                            <label class="switch">
                                                                <input type="checkbox" @checked(userInfo()->permissions->is_email == 1) name="is_email">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-12" style="border-radius: 15px">
                                                    <div class="card-body d-flex align-items-center">
                                                        <div class="col">
                                                            <h3>SMS</h3>
                                                            Wir informieren Sie per SMS-Nachricht.
                                                        </div>
                                                        <div class="col d-flex align-items-center justify-content-end">
                                                            <label class="switch">
                                                                <input type="checkbox" @checked(userInfo()->permissions->is_sms == 1) name="is_sms">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-12" style="border-radius: 15px">
                                                    <div class="card-body d-flex align-items-center">
                                                        <div class="col">
                                                            <h3>Anrufe</h3>
                                                            Wir werden Sie telefonisch kontaktieren.
                                                        </div>
                                                        <div class="col d-flex align-items-center justify-content-end">
                                                            <label class="switch">
                                                                <input type="checkbox" @checked(userInfo()->permissions->is_phone == 1) name="is_phone">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary float-end">Speichern</button>
                                            </form>
                                            <!-- /Change Password Form -->

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
    <script src="/front/assets/js/cutomer-menu.js"></script>

@endsection