@extends('layouts.master')
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
                                    <img src="{{asset(config('settings.logo'))}}">
                                </div>
                                <div class="login-header text-center">
                                    <h2>Giriş Yap</h2>
                                </div>
                                @include('layouts.component.error')
                                @include('layouts.component.alert')
                                <form action="{{route('customer.login')}}" method="post">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <input type="text" id="phone" class="form-control floating phone" name="email">
                                        <label class="focus-label">Telefon</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating" name="password">
                                        <label class="focus-label">Şifre</label>
                                    </div>
                                    <div class="text-end">
                                        <a class="forgot-link" href="{{route('customer.showForgotView')}}">Şifremi Unuttum ?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Giriş yap</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">veya</span>
                                    </div>

                                    <div class="text-center dont-have">Hesabın Yok mu? <a href="{{route('customer.register')}}">Kayıt Ol</a></div>
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
        $(".phone").inputmask({"mask": "(999)-999-9999"});
    </script>
@endsection