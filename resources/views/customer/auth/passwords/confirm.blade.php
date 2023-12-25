@extends('layouts.master')
@section('title', 'Passwort vergessen')
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
                                    <h2>Passwort vergessen</h2>
                                </div>
                                @include('layouts.component.error')

                                <form action="{{route('customer.forgotPassword')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Rufnummer</label>
                                        <input type="text" id="phone" class="form-control floating phone" name="email">

                                    </div>

                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Schicken</button>
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
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                updatePlaceholder(selectedCountryPlaceholder);
                return selectedCountryPlaceholder;
            },
        });

        // Örnek olarak: Numarayı uluslararası formatta alma
        function getNumber() {
            return iti.getNumber();
        }

        input.addEventListener('countrychange', function () {
            $("#phone").val("");
        });

        function updatePlaceholder(originalData) {
            let mask = "";
            mask = originalData.replace(/[0-9]/g, "9");
           // $("#phone").inputmask({"mask": mask});
        }
    </script>

@endsection