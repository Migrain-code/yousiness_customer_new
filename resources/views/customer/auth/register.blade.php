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
                                <div class="login-header text-center">
                                    <h3>{{setting('speed_site_title')}} Kayıt Ol</h3>
                                </div>
                                @include('layouts.component.error')
                                @include('layouts.component.alert')
                                <form action="{{route('customer.register')}}" method="post">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating" name="name">
                                        <label class="focus-label">Ad Soyad</label>
                                    </div>

                                    <div class="form-group form-focus">
                                        <input type="text" id="phone" class="form-control floating phone" name="email">
                                        <label class="focus-label">Telefon</label>
                                    </div>

                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Kayıt Ol</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">veya</span>
                                    </div>

                                    <div class="text-center dont-have">Hesabın Var mı? <a href="{{route('customer.login')}}">Giriş yap</a></div>
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