@extends('layouts.master')
@section('meta_keys', config('settings.meta_keywords'))
@section('meta_description', config('settings.meta_description'))
@section('styles')

@endsection
@section('content')
    <div class="onboard-wrapper">
        <div class="right-panel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="right-panel-title text-center">
                            <a href="#" style="color: white;font-weight: bold">Randevu Al</a>
                        </div>
                    </div>
                    @include('appointment.summary')
                    <div class="col-lg-8 col-md-12">
                        <div class="onboarding-content-box content-wrap">
                            <div class="onborad-set">
                                <div class="onboarding-title">
                                    <h2>Neden numaranızı istiyoruz?<span>*</span></h2>
                                    <h6>Sisteme kayıt olmadığınız durumda bu adımda sizden telefon numarası ister. Bu numara ile size hatırlatma mesajı göndereceğiz..
                                    </h6>
                                </div>
                                <div class="onboarding-content">
                                    @include('layouts.component.error')
                                    <div class="row">
                                        <form class="col-lg-12" method="post" id="step-4-form" action="{{route('step4.store')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Adınız</label>
                                                <input class="form-control" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Soyadınız</label>
                                                <input class="form-control" name="surname" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Telefon Numaranız</label>
                                                <input class="form-control" name="phone" id="phone" required>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="onboarding-btn">
                                <a href="#" onclick="$('#step-4-form').submit()">Devam Et</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('scripts')
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js'></script>
    <script>
        $("#phone").on('keyup', function (){
            let val= $(this).val();
            if (val == "(0__) ___-____"){
                $(this).val("");
            }
        });
        $(function (){
            $("#phone").inputmask({"mask": "(999) 999-9999"});
        });
    </script>
@endsection