@extends('layouts.master')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">

    <style>
        .step-1{
            background: #d3d3d370;
            border-radius: 15px;
            padding: 10px;
        }
        .step-2{
            background: #d3d3d370;
            border-radius: 15px;
            padding: 10px;
        }
        .step-3{
            background: #d3d3d370;
            border-radius: 15px;
            padding: 10px;
        }
        .step-5{
            background: #d3d3d370;
            border-radius: 15px;
            padding: 10px;
        }
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
            color: white !important;
        }
        .accordion-button:focus {
            box-shadow: none !important;
        }

    </style>


@endsection
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-10 mx-auto">
                <div class="appointment-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="step-1 my-3">
                                        <div class="d-flex align-items-center">
                                            <span class="" style="margin-right: 5px;width: 50px;height: 50px;background-color: #ff890e; color: white;font-size: 25px;font-weight: bold;border-radius: 50%;text-align: center;padding-top: 6px;">1</span>
                                            <h2 style="font-size: 22px;">Hizmet Seçimi</h2>
                                        </div>
                                        <div>
                                            <div style="color: rgb(168, 159, 159);">
                                                @forelse($selectedServices as $service)
                                                    {{$service->subCategory->name . "(" . $service->gender->name ." )".", "}}
                                                @empty
                                                    <div class="alert alert-waring">Hizmet Seçimi Yapılmadı. <u>Lütfen Hizmet Seçiniz</u></div>
                                                @endforelse
                                            </div>
                                            <button class="btn-five mt-2" style="margin-left: auto" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" type="button">Ekle/Çıkar</button>

                                        </div>
                                    </div>
                                    <div class="step-2 my-3">
                                        <div class="d-flex align-items-center">
                                            <span class="" style="margin-right: 5px;width: 50px;height: 50px;background-color: #ff890e; color: white;font-size: 25px;font-weight: bold;border-radius: 50%;text-align: center;padding-top: 6px;">2</span>
                                            <h2 style="font-size: 22px;">Personel Seçimi</h2>
                                        </div>
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
                                            <button class="btn btn-success my-3 fs-5 fw-light p-3" type="submit">Tarih/Saat Seç</button>
                                        </form>
                                    </div>

                                    @if(isset(request()["request"]["step"]))
                                        <div class="step-3 my-3" id="step_3">

                                                <div class="d-flex align-items-center mb-1">
                                                    <span class="" style="margin-right: 5px;width: 50px;height: 50px;background-color: #ff890e; color: white;font-size: 25px;font-weight: bold;border-radius: 50%;text-align: center;padding-top: 6px;">3</span>
                                                    <h2 style="font-size: 22px;">Tarih ve Saat Seçimi</h2>
                                                </div>
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
                                                                                <a class="nav-link custom-link  {{\Illuminate\Support\Carbon::now()->format('d.m.Y')==$date->format('d.m.Y') ? "active" : ""}}" data-bs-toggle="tab" href="#slot_{{$date->format('d_m_Y')}}">
                                                                                    <b>{{$date->translatedFormat('d F')}}</b>
                                                                                    <br>
                                                                                    {{$date->translatedFormat('D')}}
                                                                                </a>
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

                                                                    @endfor
                                                                </div>
                                                            </div>
                                                        @empty
                                                        @endforelse
                                                        <!-- /Sunday Slot -->


                                                    </form>
                                                    <!-- /Schedule Content -->

                                                </div>

                                    </div>
                                    @endif

                                    @if(isset(request()["request"]["step"]))
                                        <div class="step-5 my-3" id="step-4">
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="" style="margin-right: 5px;width: 50px;height: 50px;background-color: #ff890e; color: white;font-size: 25px;font-weight: bold;border-radius: 50%;text-align: center;padding-top: 6px;">4</span>
                                            <h2 style="font-size: 22px;">İletişim Bilgileri</h2>
                                        </div>
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
                                    @endif
                                </div>
                                <div class="col-md-5 my-3">
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
                                                        <div class="badge badge-danger">Personel Seçimi Yapılmadı. <u>Lütfen Personel Seçiniz</u></div>
                                                    @endforelse
                                                </span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Tarih</span>
                                                <span class="brief-date appointment_date">-</span>
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
                                        <div class="accordion-item mb-2">
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
                                        <div class="accordion-item mb-2">
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
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <script>
        $(document).ready(function() {
            var selectElements = document.querySelectorAll('.js-example-basic-single');

            // Her bir öğeye Tom Select'i uygulayın
            selectElements.forEach(function(element) {
                new TomSelect(element, {
                    autocomplete: false,
                    maxItems: 1,
                    language: 'tr'
                });
            });
            var elementId = "step_3";
            scrollToElement(elementId);
        });
        function scrollToElement(elementId) {
            var element = document.getElementById(elementId);
            if (element) {
                element.scrollIntoView({ behavior: "smooth" });
            }
        }


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
            scrollToElement("step-4");
        })
    </script>


@endsection

