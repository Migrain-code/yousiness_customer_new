@extends('layouts.master')
@section('styles')
    <!-- Animate-css include -->
    <link rel="stylesheet" href="/front/appointment/css/animate.min.css">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="/front/appointment/css/style.css">
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
    <div class="container-md-fluid p-3 p-lg-0 me-5">
        <div class="row">
            <div class="col-xl-4">

                <div class="steps_area step_area_fixed d-none d-xl-block">
                    <div class="image_holder">
                        <img class="overflow-hidden" src="/front/appointment/images/background/bg_0.png" alt="image-not-found">
                    </div>
                    <div class="progress_bar step_items position-absolute">
                        <div class="step d-block text-center bg-white position-relative active current">1</div>
                        <div class="step d-block text-center bg-white position-relative">2
                        </div>
                        <div class="step d-block text-center bg-white position-relative">3
                        </div>
                        <div class="step d-block text-center bg-white position-relative last">4
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 ps-5 pt-5">
                <form class="multisteps_form" id="wizard" method="POST" action="">
                    <!------------------- Step-1 -------------------->
                    <div class="multisteps_form_panel active">
                        <!-- form-content -->
                        <div class="form_content">
                            <div class="step_content d-flex justify-content-between pt-5 pb-2">
                                <h4>Randevu Al</h4>
                            </div>
                            <div class="step_progress_bar">
                                <div class="progress rounded-pill">
                                    <div class="progress-bar" style="width:25%"></div>
                                </div>
                            </div>
                            <div class="question_title py-5">
                                <h1 class="text-capitalize">Almak İstediğiniz Hizmeti Seçiniz</h1>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 form_items radio-list">
                                <div class="col" data-toggle="modal" data-target="#exampleModalCenter">
                                    <label id="opt_4" class="step_1 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_150ms">
                                        <div class="step_box_icon"><img src="/front/appointment/images/item-img/item_3.png"  alt="image-not-found"></div>
                                        <span class="step_box_text pt-2">Hizmet Ekle</span>
                                        <p class="step_box_desc"></p>
                                        <input for="opt_4" type="radio" name="stp_1_select_option" value="Heavy">
                                    </label>
                                </div>
                            </div>
                            <div class="row col-md-10 mt-lg-5 mt-4 conditional" data-condition="#condition1 && stp_1_select_option == 'Moderate'">
                                <div class="form-inner-area">
                                    <label for="field">
                                        <h6>Which Sector</h6>
                                    </label>
                                    <input type="text" name="field" class="form-control required" minlength="2" placeholder="Write Here">
                                </div>
                            </div>
                        </div>
                        <!-- Form-btn -->
                        <div class="form_btn pt-5 d-flex justify-content-between">
                            <button type="button" class="js-btn-next next_btn text-uppercase text-white" id="nextBtn">Sonraki <span><i class="fas fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                    <!------------------- Step-2 -------------------->
                    <div class="multisteps_form_panel">
                        <!-- form-content -->
                        <div class="form_content">
                            <div class="step_content d-flex justify-content-between pt-5 pb-2">
                                <h4>Randevu Al</h4>
                            </div>
                            <div class="step_progress_bar">
                                <div class="progress rounded-pill">
                                    <div class="progress-bar" style="width:50%"></div>
                                </div>
                            </div>
                            <div class="question_title py-5">
                                <h1 class="text-capitalize">Hizmetiniz İçin Personelinizi Seçiniz</h1>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="section-header section-header-five text-center aos aos-init aos-animate" data-aos="fade-up">

                                </div>
                                <select class="js-example-basic-single" style="" name="service_id">
                                    <option value="">Personel Seçiniz</option>
                                    <option value="">Masar Çıldıran</option>
                                    <option value="">Fuat Özkanlımayan</option>
                                    <option value="">Özkan Delgin</option>
                                    <option value="">Nazdrowya Canova</option>
                                </select>
                            </div>
                        </div>
                        <!-- Form-btn -->
                        <div class="form_btn pt-5 d-flex justify-content-between">
                            <button type="button" class="js-btn-prev prev_btn text-uppercase bg-white" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Önceki</button>
                            <button type="button" class="js-btn-next next_btn text-uppercase text-white" id="nextBtn">Sonraki <span><i class="fas fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                    <!------------------- Step-3 -------------------->
                    <div class="multisteps_form_panel">
                        <!-- form-content -->
                        <div class="form_content">
                            <div class="step_content d-flex justify-content-between pt-5 pb-2">
                                <h4>Randevu AL</h4>
                            </div>
                            <div class="step_progress_bar">
                                <div class="progress rounded-pill">
                                    <div class="progress-bar" style="width:75%"></div>
                                </div>
                            </div>
                            <div class="question_title py-5">
                                <h1 class="text-capitalize">Hizmetiniz İçin Randevu Tarihini Seçiniz</h1>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card schedule-widget mb-0">
                                        <!-- Schedule Header -->
                                        <div class="schedule-header">
                                            @include('layouts.component.error')
                                            <!-- Schedule Nav -->
                                            <div class="schedule-nav">
                                                <div class="col-md-6 text-end aos" data-aos="fade-up">
                                                    <div class="owl-nav slide-nav-3 text-end nav-control"></div>
                                                </div>
                                                <ul class="nav nav-tabs nav-justified">
                                                    <div class="owl-carousel clinic-feature owl-theme aos" data-aos="fade-up">

                                                        <div class="item custom-owl">
                                                            <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                                                <a class="nav-link custom-link active" data-bs-toggle="tab" href="#slot_0"><b>Pazartesi</b> <br> </a>
                                                            </li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-content schedule-cont" id="step-3-form" >
                                            <div id="slot_0" class="tab-pane fade show active">
                                                <div class="doc-times">
                                                    <div class="form-check-inline visits me-1">
                                                        <label class="visit-btns">
                                                            <input type="radio" name="appointment_time" disabled class="form-check-input" value="Tarih ve saat">
                                                            <span class="visit-rsn" data-bs-toggle="tooltip" title="">12.45</span>
                                                        </label>
                                                    </div>

                                                    <div class="form-check-inline visits me-1">
                                                        <label class="visit-btns">
                                                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="Tarih" required>
                                                            <span class="visit-rsn" data-bs-toggle="tooltip" title="Saat Seçimi Zorunludur">12.45</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Form-btn -->
                        <div class="form_btn pt-5 d-flex justify-content-between">
                            <button type="button" class="js-btn-prev prev_btn text-uppercase bg-white" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Önceki</button>
                            <button type="button" class="js-btn-next next_btn text-uppercase text-white" id="nextBtn">Sonraki <span><i class="fas fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                    <!------------------ Step-4 -------------------->
                    <div class="multisteps_form_panel">
                        <!-- form-content -->
                        <div class="form_content">
                            <div class="step_content d-flex justify-content-start ">
                                <h4>Randevu Al</h4>
                            </div>
                            <div class="step_progress_bar">
                                <div class="progress rounded-pill">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                            </div>
                            <div class="question_title py-5">
                                <h1 class="text-capitalize">Hizmet Randevu Sahibi</h1>
                            </div>
                            <label for="">Ad Soyad</label>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control mb-2" placeholder="Adınız ve soyadınızı giriniz">
                            </div>
                            <label for="">İletişim Numarası</label>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control mb-2" placeholder="İletişim Numaranızı giriniz">
                            </div>

                        </div>
                        <!-- Form-btn -->
                        <div class="form_btn pt-5 d-flex justify-content-between">
                            <button type="button" class="js-btn-prev prev_btn text-uppercase bg-white" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Önceki</button>
                            <button type="submit" class="next_btn text-uppercase text-white" id="nextBtn">Randevu Al</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('scripts')

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                    <li class="nav-item"><a class="nav-link " href="#solid-rounded-justified-tab1" data-bs-toggle="tab">Kadın</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Erkek</a></li>
                </ul>
                <div class="modal-body">
                    <div class="tab-content">
                        <div class="tab-pane" id="solid-rounded-justified-tab1">
                            <div class="accordion" id="accordionWoman">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingWoman">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse Woman" aria-expanded="true" aria-controls="collapseWoman">

                                        </button>
                                    </h2>
                                    <div id="collapseWoman" class="accordion-collapse collapse show" aria-labelledby="headingWoman" data-bs-parent="#accordionWoman">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom_check">
                                                        <input type="checkbox" value=""  name="service_ids[]">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <span class="text-success fw-bold"> TL</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane show active " id="solid-rounded-justified-tab2">
                            <div class="accordion" id="accordionMan">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingMan">
                                        <button class="accordion-button" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseMan" aria-expanded="true" aria-controls="collapse Man">AAAA
                                        </button>
                                    </h2>
                                    <div id="collapse Man" class="accordion-collapse  collapse show  collapsed " aria-labelledby="headingMan" data-bs-parent="#accordionMan">
                                        <div class="accordion-body">

                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom_check">
                                                        <input type="checkbox" value="" name="service_ids[]">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-2">
                                                    <span class="text-success fw-bold">TL</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

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

