@extends('layouts.master')
@section('title', 'Nummernüberprüfung')
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
                                    <h2>Nummernüberprüfung</h2>
                                </div>
                                @include('layouts.component.error')
                                @include('layouts.component.alert')
                                <form action="{{route('customer.phone.verify.action')}}" method="post">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <input type="text" id="code" class="form-control floating phone" name="phone">
                                        <label class="focus-label">Rufnummer</label>
                                    </div>
                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Senden Sie den Bestätigungscode</button>
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