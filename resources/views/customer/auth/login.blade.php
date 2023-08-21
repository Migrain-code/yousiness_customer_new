@extends('layouts.master')
@section('title', 'Einloggen')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <style>
        .iti {
            position: relative;
            display: inline-block;
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="content my-3" style="min-height: 257.275px;">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <!-- Login Tab Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="text-center my-2">
                                    <img src="{{image(setting('speed_logo_white'))}}" style="max-width: 250px">
                                </div>
                                <div class="login-header text-center">
                                    <h2>Einloggen</h2>
                                </div>
                                @include('layouts.component.error')
                                @include('layouts.component.alert')
                                <form action="{{route('customer.login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Rufnummer</label>
                                        <input type="text" id="phone" class="form-control floating phone" name="email">

                                    </div>
                                    <div class="form-group">
                                        <label>Chiffre</label>
                                        <input type="password" class="form-control floating" name="password">

                                    </div>
                                    <div class="text-end">
                                        <a class="forgot-link" href="{{route('customer.showForgotView')}}">Passwort vergessen ?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Einloggen</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">beziehungsweise</span>
                                    </div>

                                    <div class="text-center dont-have">Sie haben noch kein Konto? <a href="{{route('customer.register')}}">Registrieren</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Tab Content -->

                </div>
            </div>

        </div>

    </div>
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>

    <script>
        //$(".phone").inputmask({"mask": "+99 (999)-999-9999"});
        //$(".phone").inputmask({"mask": "(999)-999-9999"});
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
            // tercihlerinize göre opsiyonları ayarlayabilirsiniz
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", // numara formatlama ve doğrulama için gereklidir
        });

        // Örnek olarak: Numarayı uluslararası formatta alma
        function getNumber() {
            return iti.getNumber();
        }
    </script>
@endsection