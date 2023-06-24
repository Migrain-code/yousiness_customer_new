@extends('layouts.master')
@section('styles')

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
                        <div class="container">
                            <span class="appointment-company-name" style="font-size: 14px; font-weight: bold; text-transform: uppercase">{{$business->name}}</span>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="step-1 my-3">
                                        <h2 style="font-size: 22px;">Hizmet Seçimi</h2>
                                        <div>
                                            <div style="color: rgb(168, 159, 159);">
                                                @forelse($selectedServices as $service)
                                                    {{$service->subCategory->name . "(" . $service->gender->name ." )".", "}}
                                                @empty
                                                    <div class="alert alert-waring">Hizmet Seçimi Yapılmadı. <u>Lütfen Hizmet Seçiniz</u></div>
                                                @endforelse
                                            </div>
                                            <button class="btn-five mt-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" type="button">Ekle/Çıkar</button>
                                        </div>
                                    </div>
                                    <div class="step-2 my-3">
                                        <form method="get" action="{{route('step1.store', ['business' => $business->slug])}}">
                                            <input type="hidden" name="step" value="3">
                                            @foreach($ap_services as $service)
                                                <input type="hidden" name="services[]" value="{{$service->id}}">
                                                <div class="form-group">
                                                    <label><b>{{$service->subCategory->name}}</b> için personel seçiniz</label>
                                                    <select class="js-example-basic-single" name="personels[]"  @if($loop->last) id="lastSelect" @endif>
                                                        <option value="">{{$service->subCategory->name}} için personel seçiniz</option>
                                                        @forelse($service->personels as $service_personel)
                                                            <option value="{{$service_personel->personel->id}}" @selected(in_array($service_personel->personel->id, $selectedPersonelIds))>{{$service_personel->personel->name}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                            @endforeach
                                            <button class="btn btn-success my-3 fs-5 fw-light p-3" type="submit">Tarih Seç</button>
                                        </form>
                                    </div>
                                    <div class="step-3 my-3">
                                        <h2 style="font-size: 22px;">Tarih/Saat Seçimi</h2>
                                        @if(isset(request()["request"]["step"]))
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
                                                                    @forelse($remainingDate as $date)
                                                                        <div class="item custom-owl">
                                                                            <li class="nav-item" style="background: aliceblue;border-radius: 15px;">
                                                                                <a class="nav-link custom-link  {{\Illuminate\Support\Carbon::now()->format('d.m.Y')==$date->format('d.m.Y') ? "active" : ""}}" data-bs-toggle="tab" href="#slot_{{$date->format('d_m_Y')}}"><b>{{$date->translatedFormat('d F')}}</b> <br> {{$date->translatedFormat('D')}}</a>
                                                                            </li>
                                                                        </div>
                                                                    @empty
                                                                    @endforelse
                                                                </div>
                                                            </ul>
                                                        </div>
                                                        <!-- /Schedule Nav -->

                                                    </div>
                                                    <!-- /Schedule Header -->

                                                    <!-- Schedule Content -->
                                                    <form class="tab-content schedule-cont" id="step-3-form" method="post" action="">
                                                        @csrf
                                                        <!-- Sunday Slot -->
                                                        @forelse($remainingDate as $date)
                                                            <div id="slot_{{$date->format('d_m_Y')}}" class="tab-pane fade {{\Illuminate\Support\Carbon::now()->format('d.m.Y')==$date->format('d.m.Y') ? "show active" : ""}}">
                                                                <div class="doc-times">
                                                                    @for($i=\Illuminate\Support\Carbon::parse($business->start_time); $i < \Illuminate\Support\Carbon::parse($business->end_time); $i->addMinute($business->appoinment_range))
                                                                        @if(in_array($date->format('d.m.Y '. $i->format('H:i')), $disabledDays) or \Illuminate\Support\Carbon::parse($date->format('d.m.Y '). $i->format('H:i')) < \Illuminate\Support\Carbon::now())
                                                                            <div class="form-check-inline visits me-1">
                                                                                <label class="visit-btns">
                                                                                    <input type="radio" name="appointment_time" disabled class="form-check-input" value="{{$date->format('d.m.Y '. $i->format('H:i'))}}">
                                                                                    <span class="visit-rsn" data-bs-toggle="tooltip" title="@if(\Illuminate\Support\Carbon::parse($date->format('d.m.Y '). $i->format('H:i')) < \Illuminate\Support\Carbon::now()) Kapalı @else Dolu @endif">{{$i->format('H:i')}}</span>
                                                                                </label>
                                                                            </div>
                                                                        @else
                                                                            <div class="form-check-inline visits me-1">
                                                                                <label class="visit-btns">
                                                                                    <input type="radio" name="appointment_time" class="form-check-input active-time" value="{{$date->format('d.m.Y '. $i->format('H:i'))}}" required>
                                                                                    <span class="visit-rsn" data-bs-toggle="tooltip" title="Saat Seçimi Zorunludur">{{$i->format('H:i')}}</span>
                                                                                </label>
                                                                            </div>
                                                                        @endif
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                        @empty
                                                        @endforelse
                                                        <!-- /Sunday Slot -->


                                                    </form>
                                                    <!-- /Schedule Content -->

                                                </div>
                                            @endif
                                    </div>

                                    <div class="step-5 my-3">
                                        <h2 style="font-size: 22px;">İletişim</h2>
                                        <div class="">
                                            <form class="col-lg-12" method="post" id="step-4-form" action="{{route('appointment.create')}}">
                                                @csrf
                                                @foreach($ap_services as $service)
                                                    <input type="hidden" name="services[]" value="{{$service->id}}">
                                                @endforeach
                                                @foreach($selectedPersonelIds as $personel_id)
                                                    <input type="hidden" name="personels[]" value="{{$personel_id}}">
                                                @endforeach
                                                <input type="hidden" name="business_id" value="{{$business->id}}">
                                                <input type="hidden" name="appointment_date" id="appointment_date" value="">
                                                @if(auth('customer')->check())
                                                    <div class="alert alert-info"> Hesabınıza Giriş Yapmış Olduğunuz İçin Ek bilgi istenmeyecektir</div>
                                                @else
                                                    <div class="form-group">
                                                        <label>Adınız</label>
                                                        <input class="form-control" name="name" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Soyadınız</label>
                                                        <input class="form-control" name="surname" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Telefon Numaranız</label>
                                                        <input class="form-control" name="phone" id="phone" required="">
                                                    </div>
                                                @endif
                                                <div class="contact-buttons d-flex justify-content-between mt-2">
                                                    <a class="btn btn-danger" href="{{route('business.detail', $business->slug)}}" type="button">İptal Et</a>
                                                    <button class="btn btn-success" type="submit">Randevu Oluştur</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="brief-card mx-auto">
                                        <h2 class="text-center py-2" style="background-color: #565A5C; color: #fff; width: 100%; margin: 0 !important;">Özet</h2>
                                        <ul>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Salon</span>
                                                <span class="brief-company-name">{{$business->name}}</span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Hizmetler</span>
                                                <span class="brief-services">
                                                    @forelse($selectedServices as $service)
                                                        {!! $service->subCategory->name . "(" . $service->gender->name ." )"."<br> "!!}
                                                    @empty
                                                        <div class="alert alert-waring">Hizmet Seçimi Yapılmadı. <u>Lütfen Hizmet Seçiniz</u></div>
                                                    @endforelse
                                                </span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Personel</span>
                                                <span class="brief-personel">
                                                    @forelse($personels as $personel)
                                                        {!! $personel->name."<br> "!!}
                                                    @empty
                                                        <div class="alert alert-waring">Personel Seçimi Yapılmadı. <u>Lütfen Personel Seçiniz</u></div>
                                                    @endforelse
                                                </span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Tarih</span>
                                                <span class="brief-date appointment_date"></span>
                                            </li>
                                            <hr>

                                        </ul>
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
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form class="modal-content" id="select-service-form" method="get" action="{{route('step1.store')}}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Hizmet Ekle/Çıkar</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-original-title="" title=""></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 mt-3">
                        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                            @if($business->type->id == 3)
                                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab">Kadın</a></li>
                                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Erkek</a></li>
                            @elseif($business->type->id==2)
                                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Erkek</a></li>
                            @elseif($business->type->id==1)
                                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab">Kadın</a></li>

                            @endif

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                                <div class="accordion" id="accordionWoman">
                                    @forelse($womanServiceCategories as $womanCategories)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading{{$womanCategories->first()->category}}Woman">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$womanCategories->first()->category}}Woman" aria-expanded="true" aria-controls="collapse{{$womanCategories->first()->category}}Woman">
                                                    {{$womanCategories->first()->categorys->name}}
                                                </button>
                                            </h2>
                                            <div id="collapse{{$womanCategories->first()->category}}Woman" class="accordion-collapse collapse show" aria-labelledby="heading{{$womanCategories->first()->category}}Woman" data-bs-parent="#accordionWoman">
                                                <div class="accordion-body">
                                                    @forelse($womanCategories as $service)
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <label class="custom_check">
                                                                    <input type="checkbox" value="{{$service->id}}" @checked(in_array($service->id, $serviceIds)) name="services[]">
                                                                    <span class="checkmark"></span> {{$service->subCategory->name}}
                                                                </label>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-success fw-bold">{{$service->price}} TL</span>
                                                            </div>
                                                        </div>

                                                    @empty
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="tab-pane @if($business->type->id==2) show active @endif" id="solid-rounded-justified-tab2">
                                <div class="accordion" id="accordionMan">
                                    @forelse($manServiceCategories as $manCategories)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading{{$manCategories->first()->category}}Man">
                                                <button class="accordion-button" type="button"  data-bs-toggle="collapse" data-bs-target="#collapse{{$manCategories->first()->category}}Man" aria-expanded="true" aria-controls="collapse{{$manCategories->first()->category}}Man">
                                                    {{$manCategories->first()->categorys->name}}
                                                </button>
                                            </h2>
                                            <div id="collapse{{$manCategories->first()->category}}Man" class="accordion-collapse @if($loop->first) collapse show @else collapsed @endif" aria-labelledby="heading{{$manCategories->first()->category}}Man" data-bs-parent="#accordionMan">
                                                <div class="accordion-body">
                                                    @forelse($manCategories as $service)
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <label class="custom_check">
                                                                    <input type="checkbox" value="{{$service->id}}" @checked(in_array($service->id, $serviceIds)) name="service_ids[]">
                                                                    <span class="checkmark"></span> {{$service->subCategory->name}}
                                                                </label>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-success fw-bold">{{$service->price}} TL</span>
                                                            </div>
                                                        </div>

                                                    @empty
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success">Randevu Al</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();

        });
    </script>
    <script>
        $('.custom-link').on('click', function (){
            var activeLinks = document.querySelectorAll('.nav-link.active');
            activeLinks.forEach(function(link) {
                link.classList.remove('active');
            });
            $(this).addClass('nav-link active');
        });
    </script>
    <script>
        $('.active-time').on('click', function (){
            let val = $(this).val();
            $("#appointment_date").val(val);
            $(".appointment_date").text(val);
        })
    </script>


@endsection

