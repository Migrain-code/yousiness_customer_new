@extends('layouts.master')
@section('styles')
    <!-- Animate-css include -->
    <link rel="stylesheet" href="/front/appointment/css/animate.min.css">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="/front/appointment/css/style.css">
    <link rel="stylesheet" href="/front/assets/css/app.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .accordion-item {
            border: 1px solid white;
            border-radius: 30px;
        }
        .accordion-button  {
            border: 1px solid white !important;
            border-radius: 30px !important;
        }
        .accordion-header {
            border: 1px solid orange;
            border-radius: 30px;
        }
        .accordion-button:not(.collapsed) {
            background-color: #FC9F33 !important;
        }
    </style>
    <style>
        .select2-container {
            width: 100% !important;
            background-color: transparent;
        }
        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 1px solid #0db9f2;
            border-radius: 5px;
        }
        .select2-results__option {
            padding: 6px;
            border-radius: 5px;
            user-select: none;
            -webkit-user-select: none;
        }
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            height: 50px;
            padding-top: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 26px;
            position: absolute;
            top: 5px;
            right: 1px;
            width: 20px;
        }
        .select2-results__options {
            list-style: none;
            margin: 8px;
            padding: 0;
        }
        .select2-container--open .select2-dropdown--below {
            border-top: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            display: none;
            border-color: #888 transparent transparent transparent;
            border-style: solid;
            border-width: 5px 4px 0 4px;
            height: 0;
            left: 0%;
            margin-left: -4px;
            margin-top: -2px;
            position: absolute;
            top: 65%;
            width: 0;
        }
    </style>

@endsection
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-10 mx-auto">
                <div class="appointment-form">
                    <form action="">

                        <div class="container">
                            <span class="appointment-company-name" style="font-size: 14px; font-weight: bold; text-transform: uppercase">{{$business->name}}</span>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="step-1 my-3">
                                        <h2 style="font-size: 22px;">Hizmet Seçimi</h2>
                                        <div>
                                            <div style="color: rgb(168, 159, 159);">
                                                @forelse($selectedServices as $service)
                                                    {{$service->subCategory->name}}
                                                @empty
                                                    <div class="alert alert-waring">Hizmet Seçimi Yapılmadı. <u>Lütfen Hizmet Seçiniz</u></div>
                                                @endforelse
                                            </div>
                                            <button class="appointment-button add-appointment-btn" type="button">Ekle/Çıkar</button>
                                        </div>
                                    </div>
                                    <div class="step-2 my-3">
                                        <h2 style="font-size: 22px;">Personel Seçimi</h2>
                                        <span style="font-weight: bold; " class="mt-2 d-block">Saç Kaynağı için personel seçin.</span>
                                        <select name="" id="" class="cmb_box-personel mt-2 js-example-basic-single">
                                            <option value="">Çalışan 1</option>
                                            <option value="">Çalışan 2</option>
                                            <option value="">Çalışan 3</option>
                                        </select>
                                        <span style="font-weight: bold; " class="mt-2 d-block">Fön için personel seçin.</span>
                                        <select name="" id="" class="cmb_box-personel mt-2 js-example-basic-single">
                                            <option value="">Çalışan 1</option>
                                            <option value="">Çalışan 2</option>
                                            <option value="">Çalışan 3</option>
                                        </select>
                                        <button class="btn-date my-3 fs-5 fw-light p-3" type="button">Tarih Seç</button>
                                    </div>
                                    <div class="step-3 my-3">
                                        <h2 style="font-size: 22px;">Tarih Seçimi</h2>
                                        <div class="days container">
                                            <button type="button" class="btn-day mx-2 my-2">17 Haziran 2023</button>
                                            <button type="button" class="btn-day mx-2 my-2">17 Haziran 2023</button>
                                            <button type="button" class="btn-day mx-2 my-2">17 Haziran 2023</button>
                                            <button type="button" class="btn-day mx-2 my-2">17 Haziran 2023</button>
                                            <button type="button" class="btn-day mx-2 my-2">17 Haziran 2023</button>
                                            <button type="button" class="btn-day mx-2 my-2">17 Haziran 2023</button>
                                            <button type="button" class="btn-day mx-2 my-2">17 Haziran 2023</button>
                                            <button type="button" class="btn-day mx-2 my-2">17 Haziran 2023</button>
                                            <button type="button" class="btn-day mx-2 my-2">17 Haziran 2023</button>

                                        </div>
                                    </div>
                                    <div class="step-4 my-3">
                                        <h2 style="font-size: 22px;">Saat Seçimi</h2>
                                        <div class="clock container">
                                            <button type="button" class="btn-clock" style="font-size: 18px" >18:20</button>
                                            <button type="button" class="btn-clock" style="font-size: 18px" >18:20</button>
                                            <button type="button" class="btn-clock" style="font-size: 18px" >18:20</button>
                                            <button type="button" class="btn-clock" style="font-size: 18px" >18:20</button>
                                            <button type="button" class="btn-clock" style="font-size: 18px" >18:20</button>
                                            <button type="button" class="btn-clock" style="font-size: 18px" >18:20</button>
                                            <button type="button" class="btn-clock" style="font-size: 18px" >18:20</button>
                                        </div>
                                    </div>
                                    <div class="step-5 my-3">
                                        <h2 style="font-size: 22px;">İletişim</h2>
                                        <div class="container">
                                            <input type="text" placeholder="Telefon Numaranız" class="w-100 p-2">
                                            <div class="contact-buttons d-flex justify-content-between mt-2">
                                                <button class="btn btn-danger">İptal</button>
                                                <button class="btn btn-success">Bitir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="brief-card mx-auto">
                                        <h2 class="text-center py-2" style="background-color: #565A5C; color: #fff; width: 100%; margin: 0 !important;">Özet</h2>
                                        <ul>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Salon</span>
                                                <span class="brief-company-name">company name</span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Hizmetler</span>
                                                <span class="brief-services">-</span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Personel</span>
                                                <span class="brief-personel">-</span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Tarih</span>
                                                <span class="brief-date"></span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Saat</span>
                                                <span class="brief-clock">12:45</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')

    <script>
        /*STEP FORM*/

        const appointmentButton = document.querySelector(".add-appointment-btn");
        const appointmentScreen = document.querySelector(".add-appointment");
        console.log(appointmentButton)

        appointmentButton.addEventListener("click", (e) => {

            if(!appointmentScreen.classList.contains("active")){
                appointmentScreen.classList.add("active");
            }
            e.preventDefault();
        })
        document.querySelector(".appointment-xmark").addEventListener("click",() => {
            appointmentScreen.classList.remove("active");
        })

        document.querySelector(".btn-date").addEventListener("click", () => {
            document.querySelector(".step-3").classList.add("active");

            document.querySelector(".btn-date").style.display = "none";
        })

        const btnDays = document.querySelectorAll(".btn-day");
        const btnClock = document.querySelectorAll(".btn-clock");

        for(let i = 0; i < btnClock.length; i++) {
            btnClock[i].addEventListener("click", () => {
                let a = false;
                for(let j = 0; j < btnClock.length; j++) {
                    if(btnClock[j].classList.contains("active") && btnClock[j] !== btnClock[i]){
                        btnClock[j].classList.remove("active");
                    }
                }
                if(!btnClock[i].classList.contains("active")){
                    btnClock[i].classList.add("active");
                }
                document.querySelector(".step-5").classList.add("active");
            })
        }

        for(let i = 0; i < btnDays.length; i++) {
            btnDays[i].addEventListener("click", () => {
                let a = false;
                for(let j = 0; j < btnDays.length; j++) {
                    if(btnDays[j].classList.contains("active") && btnDays[j] !== btnDays[i]){
                        btnDays[j].classList.remove("active");
                    }
                }
                if(!btnDays[i].classList.contains("active")){
                    btnDays[i].classList.add("active");
                }
                if(!document.querySelector(".step-4").classList.contains("active")){
                    document.querySelector(".step-4").classList.add("active");

                }
            })
        }


    </script>


    <!-- jQuery-js include -->
    <script src="/front/appointment/js/jquery-3.6.0.min.js"></script>
    <!-- Countdown-js include -->
    <script src="/front/appointment/js/countdown.js"></script>
    <!-- Bootstrap-js include -->
    <script src="/front/appointment/js/bootstrap.min.js"></script>
    <!-- jQuery-validate-js include -->
    <script src="/front/appointment/js/jquery.validate.min.js"></script>
    <!-- jQuery-validate-js include -->
    <script src="/front/appointment/js/conditionize.flexible.jquery.min.js"></script>
    <!-- Custom-js include -->
    <script src="/front/appointment/js/script.js"></script>
    {{--    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();

        });
    </script>
    <script src="/front/assets/js/custom.js"></script>

@endsection

