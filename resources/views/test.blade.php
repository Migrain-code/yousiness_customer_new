@extends('layouts.master')
@section('title', "İletişim")
@section('meta_description', config('settings.meta_description'))
@section('styles')

@endsection
@section('content')

    <div class="container">
        <form method="post" action="https://test.hizlirandevu.istanbulyazilim.net/randevu-al/adim-2/save" id="step2-form" class="col-lg-12">
            <input type="hidden" name="_token" value="bvNyTX9kKMNrgxjLfkLELObSJl1ZDoMfJ9R0a6o4">                                                                                            <div class="form-group">
                <label><b>Lazer Epilasyon (Bacak)</b> için personel seçiniz</label>
                <select class="form-select" name="personels[]" id="lastSelect">
                    <option value="">Lazer Epilasyon (Bacak) için personel seçiniz</option>
                    <option value="1">Chase Soto</option>
                </select>
            </div>

        </form>
        <hr>
    </div>

  <div class="container">
    <div class="card schedule-widget mb-0">
        <!-- Schedule Header -->
        <div class="schedule-header">
            <!-- Schedule Nav -->
            <div class="schedule-nav">
                <div class="col-md-6 text-end aos aos-init aos-animate" data-aos="fade-up">
                    <div class="owl-nav slide-nav-3 text-end nav-control"><button type="button" role="presentation" class="owl-prev"><i class="fas fa-chevron-left custom-arrow"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-chevron-right custom-arrow"></i></button></div>
                </div>
                <ul class="nav nav-tabs nav-justified">
                    <div class="owl-carousel clinic-feature owl-theme aos owl-loaded owl-drag aos-init aos-animate" data-aos="fade-up">
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1959px, 0px, 0px); transition: all 0s ease 0s; width: 7688px;"><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_17_06_2023"><b>17 Haziran</b> <br> Cts</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_18_06_2023"><b>18 Haziran</b> <br> Paz</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_19_06_2023"><b>19 Haziran</b> <br> Pts</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_20_06_2023"><b>20 Haziran</b> <br> Sal</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_21_06_2023"><b>21 Haziran</b> <br> Çar</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_22_06_2023"><b>22 Haziran</b> <br> Per</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_23_06_2023"><b>23 Haziran</b> <br> Cum</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_24_06_2023"><b>24 Haziran</b> <br> Cts</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_25_06_2023"><b>25 Haziran</b> <br> Paz</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_26_06_2023"><b>26 Haziran</b> <br> Pts</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_27_06_2023"><b>27 Haziran</b> <br> Sal</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_28_06_2023"><b>28 Haziran</b> <br> Çar</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_29_06_2023"><b>29 Haziran</b> <br> Per</a>
                                        </li>
                                    </div></div><div class="owl-item active" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  active" data-bs-toggle="tab" href="#slot_05_06_2023"><b>05 Haziran</b> <br> Pts</a>
                                        </li>
                                    </div></div><div class="owl-item active" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_06_06_2023"><b>06 Haziran</b> <br> Sal</a>
                                        </li>
                                    </div></div><div class="owl-item active" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_07_06_2023"><b>07 Haziran</b> <br> Çar</a>
                                        </li>
                                    </div></div><div class="owl-item active" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_08_06_2023"><b>08 Haziran</b> <br> Per</a>
                                        </li>
                                    </div></div><div class="owl-item active" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_09_06_2023"><b>09 Haziran</b> <br> Cum</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_10_06_2023"><b>10 Haziran</b> <br> Cts</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_11_06_2023"><b>11 Haziran</b> <br> Paz</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_12_06_2023"><b>12 Haziran</b> <br> Pts</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_13_06_2023"><b>13 Haziran</b> <br> Sal</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_14_06_2023"><b>14 Haziran</b> <br> Çar</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_15_06_2023"><b>15 Haziran</b> <br> Per</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_16_06_2023"><b>16 Haziran</b> <br> Cum</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_17_06_2023"><b>17 Haziran</b> <br> Cts</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_18_06_2023"><b>18 Haziran</b> <br> Paz</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_19_06_2023"><b>19 Haziran</b> <br> Pts</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_20_06_2023"><b>20 Haziran</b> <br> Sal</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_21_06_2023"><b>21 Haziran</b> <br> Çar</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_22_06_2023"><b>22 Haziran</b> <br> Per</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_23_06_2023"><b>23 Haziran</b> <br> Cum</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_24_06_2023"><b>24 Haziran</b> <br> Cts</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_25_06_2023"><b>25 Haziran</b> <br> Paz</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_26_06_2023"><b>26 Haziran</b> <br> Pts</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_27_06_2023"><b>27 Haziran</b> <br> Sal</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_28_06_2023"><b>28 Haziran</b> <br> Çar</a>
                                        </li>
                                    </div></div><div class="owl-item" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_29_06_2023"><b>29 Haziran</b> <br> Per</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  active" data-bs-toggle="tab" href="#slot_05_06_2023"><b>05 Haziran</b> <br> Pts</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_06_06_2023"><b>06 Haziran</b> <br> Sal</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_07_06_2023"><b>07 Haziran</b> <br> Çar</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_08_06_2023"><b>08 Haziran</b> <br> Per</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_09_06_2023"><b>09 Haziran</b> <br> Cum</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_10_06_2023"><b>10 Haziran</b> <br> Cts</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_11_06_2023"><b>11 Haziran</b> <br> Paz</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_12_06_2023"><b>12 Haziran</b> <br> Pts</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_13_06_2023"><b>13 Haziran</b> <br> Sal</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_14_06_2023"><b>14 Haziran</b> <br> Çar</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_15_06_2023"><b>15 Haziran</b> <br> Per</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_16_06_2023"><b>16 Haziran</b> <br> Cum</a>
                                        </li>
                                    </div></div><div class="owl-item cloned" style="width: 135.731px; margin-right: 15px;"><div class="item custom-owl">
                                        <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                            <a class="nav-link custom-link  " data-bs-toggle="tab" href="#slot_17_06_2023"><b>17 Haziran</b> <br> Cts</a>
                                        </li>
                                    </div></div></div></div><div class="owl-dots disabled"></div></div>
                </ul>
            </div>
            <!-- /Schedule Nav -->

        </div>
        <!-- /Schedule Header -->

        <!-- Schedule Content -->
        <form class="tab-content schedule-cont" id="step-3-form" method="post" action="https://test.hizlirandevu.istanbulyazilim.net/randevu-al/adim-3/save">
            <input type="hidden" name="_token" value="bvNyTX9kKMNrgxjLfkLELObSJl1ZDoMfJ9R0a6o4">                                                    <!-- Sunday Slot -->
            <div id="slot_05_06_2023" class="tab-pane fade show active">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="05.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_06_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="06.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_07_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="07.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_08_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="08.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_09_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="09.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_10_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="10.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_11_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="11.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_12_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="12.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_13_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="13.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_14_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="14.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_15_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="15.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_16_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="16.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_17_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="17.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_18_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="18.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_19_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="19.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_20_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="20.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_21_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="21.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_22_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="22.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_23_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="23.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_24_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="24.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_25_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="25.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_26_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="26.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_27_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="27.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_28_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="28.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <div id="slot_29_06_2023" class="tab-pane fade ">
                <div class="doc-times">
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 09:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">09:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 10:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 10:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">10:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 11:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 11:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">11:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 12:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 12:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">12:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 13:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 13:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">13:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 14:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 14:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">14:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 15:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 15:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">15:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 16:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 16:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">16:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 17:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 17:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">17:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 18:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 18:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">18:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 19:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:00</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 19:30" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">19:30</span>
                        </label>
                    </div>
                    <div class="form-check-inline visits me-1">
                        <label class="visit-btns">
                            <input type="radio" name="appointment_time" class="form-check-input aktive-time" value="29.06.2023 20:00" required="">
                            <span class="visit-rsn" data-bs-toggle="tooltip" title="" data-bs-original-title="Saat Seçimi Zorunludur">20:00</span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /Sunday Slot -->


        </form>
        <!-- /Schedule Content -->

    </div>
  </div>
@endsection
@section('scripts')

@endsection