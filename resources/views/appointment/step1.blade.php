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
        .ts-dropdown-content{
            font-size: 20px;
        }
        :root {
            --swiper-navigation-size: 34px !important;
            --swiper-theme-color: #d59c4b !important;
        }
        .swiper {
            width: 100%;
            height: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <link rel="stylesheet" href="/front/assets/css/calendar.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
                                            <h2 style="font-size: 22px;">Dienstleistung/en Auswählen</h2>
                                        </div>
                                        <div>
                                            <div style="color: rgb(168, 159, 159);">
                                                @forelse($selectedServices as $service)
                                                    {{$service->subCategory->name . "(" . $service->gender->name ." )".", "}}
                                                @empty
                                                    <div class="alert alert-waring">Es wurde keine Serviceauswahl getroffen. <u>Bitte wählen Sie Service aus</u></div>
                                                @endforelse
                                            </div>
                                            <button class="btn-five-light my-3 fs-5 fw-light p-2" style="background-color: #01af00;color: white;margin-left: auto" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" type="button">Hinzufügen/Entfernen</button>

                                        </div>
                                    </div>
                                    <div class="step-2 my-3">
                                        <div class="d-flex align-items-center">
                                            <span class="" style="margin-right: 5px;width: 50px;height: 50px;background-color: #ff890e; color: white;font-size: 25px;font-weight: bold;border-radius: 50%;text-align: center;padding-top: 6px;">2</span>
                                            <h2 style="font-size: 22px;">Mitarbeiter Auswählen</h2>
                                        </div>
                                        <form method="get" action="{{route('step1.store', ['business' => $business->slug])}}">
                                            <input type="hidden" name="step" value="3">

                                            @foreach($ap_services as $service)
                                                <input type="hidden" name="services[]" value="{{$service->id}}">
                                                <div class="form-group">
                                                    <label><b>{{$service->subCategory->name}}</b> Mitarbeiter Wählen</label>
                                                    <select class="js-example-basic-single" name="personels[]"  @if($loop->last) id="lastSelect" @endif required>
                                                        <option value="">{{$service->subCategory->name}} Mitarbeiter auswählen</option>
                                                        @forelse($service->personels as $service_personel)
                                                            @if($service_personel)
                                                                <option value="{{$service_personel->personel->id}}" @selected(in_array($service_personel->personel->id, $selectedPersonelIds))>{{$service_personel->personel->name}}</option>
                                                            @endif
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                            @endforeach
                                            <button class="btn-five-light my-3 fs-5 fw-light p-2" style="background-color: #01af00;color: white;margin-left: auto" type="submit">Wählen Sie Datum/Uhrzeit</button>
                                        </form>
                                    </div>

                                    @if(isset(request()["request"]["step"]))

                                        <div class="step-3 my-3" id="step_3">
                                                <div class="d-flex align-items-center mb-1">
                                                    <span class="" style="margin-right: 5px;width: 50px;height: 50px;background-color: #ff890e; color: white;font-size: 25px;font-weight: bold;border-radius: 50%;text-align: center;padding-top: 6px;">3</span>
                                                    <h2 style="font-size: 22px;">Datum Auswählen</h2>
                                                </div>
                                                <div class="card schedule-widget mb-0">
                                                    <!-- Schedule Header -->
                                                    <div class="schedule-header">
                                                        @include('layouts.component.error')

                                                        <div class="calendar calendar-first" id="calendar_first">
                                                            <div class="calendar_header">
                                                                <button class="switch-month switch-left">
                                                                    <i class="fa fa-chevron-left"></i>
                                                                </button>
                                                                <h2></h2>
                                                                <button class="switch-month switch-right">
                                                                    <i class="fa fa-chevron-right"></i>
                                                                </button>
                                                            </div>
                                                            <div class="calendar_weekdays"></div>
                                                            <div class="calendar_content"></div>
                                                        </div>
                                                    </div>
                                                    <!-- /Schedule Header -->

                                                    <!-- Schedule Content -->
                                                    <form class="tab-content schedule-cont" id="step-3-form" method="post" action="">

                                                        @csrf
                                                        <!-- Sunday Slot -->

                                                        <!-- /Sunday Slot -->
                                                        <div class="swiper mySwiper">
                                                            <div class="swiper-wrapper">

                                                            </div>
                                                            <!-- Add Pagination -->
                                                            <div class="swiper-pagination"></div>
                                                            <!-- Add Navigation -->
                                                            <div class="swiper-button-next"></div>
                                                            <div class="swiper-button-prev"></div>
                                                        </div>

                                                    </form>
                                                    <!-- /Schedule Content -->

                                                </div>

                                    </div>
                                    @endif

                                    @if(isset(request()["request"]["step"]))
                                        <div class="step-5 my-3" id="step-4">
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="" style="margin-right: 5px;width: 50px;height: 50px;background-color: #ff890e; color: white;font-size: 25px;font-weight: bold;border-radius: 50%;text-align: center;padding-top: 6px;">4</span>
                                            <h2 style="font-size: 22px;">Kontaktinformationen</h2>
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
                                                <div id="personelTimes">

                                                </div>
                                                <input type="hidden" name="business_id" value="{{$business->id}}">
                                                <input type="hidden" name="appointment_date" id="appointment_date" value="">
                                                @if(auth('customer')->check())
                                                    <div class="alert alert-info"> Da Sie in Ihrem Konto angemeldet sind, werden Sie nicht nach weiteren Informationen gefragt.</div>
                                                @else
                                                    <div class="form-group">
                                                        <label>Ihr Name</label>
                                                        <input class="form-control" name="name" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Dein Familienname</label>
                                                        <input class="form-control" name="surname" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deine Telefonnummer</label>
                                                        <input class="form-control" name="phone" id="phone" required="">
                                                    </div>
                                                @endif
                                                <div class="contact-buttons d-flex justify-content-between mt-2">
                                                    <a class="btn btn-danger" href="{{route('business.detail', $business->slug)}}" type="button">Stornieren</a>
                                                    <button class="btn btn-success" type="submit">Erstellen Sie einen Termin</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-5 my-3">
                                    <div class="brief-card mx-auto">
                                        <h2 class="text-center py-2" style="background-color: #565A5C; color: #fff; width: 100%; margin: 0 !important;">Zusammenfassung</h2>
                                        <ul>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Wohnzimmer</span>
                                                <span class="brief-company-name">{{$business->name}}</span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Dienstleistungen</span>
                                                <span class="brief-services">
                                                    @forelse($selectedServices as $service)
                                                        {!! $service->subCategory->name . "(" . $service->gender->name ." )"."<br> "!!}
                                                    @empty
                                                        <div class="alert alert-waring">Es wurde keine Serviceauswahl getroffen. <u>Bitte wählen Sie Service aus</u></div>
                                                    @endforelse
                                                </span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Mitarbeiter</span>
                                                <span class="brief-personel">
                                                    @forelse($personels as $personel)
                                                        {!! $personel->name."<br> "!!}
                                                    @empty
                                                        <div class="badge badge-danger">Personalauswahl nicht getroffen. <u>LBitte wählen Sie Mitarbeiter aus</u></div>
                                                    @endforelse
                                                </span>
                                            </li>
                                            <hr>
                                            <li class="d-flex justify-content-between my-2">
                                                <span style="font-weight: bold;">Datum</span>
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
                    <h4 class="modal-title" id="myLargeModalLabel">Dienst hinzufügen/entfernen</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-original-title="" title=""></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 mt-3">
                        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                            @if($business->type->id == 3)
                                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab">Frau</a></li>
                                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Mann</a></li>
                            @elseif($business->type->id==2)
                                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Mann</a></li>
                            @elseif($business->type->id==1)
                                <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab">Frau</a></li>

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
                                                                <span class="text-success fw-bold">{{$service->price}} €</span>
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
                                                                    <input type="checkbox" value="{{$service->id}}" @checked(in_array($service->id, $serviceIds)) name="services[]">
                                                                    <span class="checkmark"></span> {{$service->subCategory->name}}
                                                                </label>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-success fw-bold">{{$service->price}} €</span>
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
                    <button class="btn btn-success">Terminieren</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var mySwiper = new Swiper('.mySwiper', {
                slidesPerView: 1, // Sadece bir slide görünür
                spaceBetween: 10, // Slide'lar arasındaki boşluk
                loop: false, // Sonsuz döngü
                navigation: {
                    nextEl: '.swiper-button-next', // İleri gitme düğmesi
                    prevEl: '.swiper-button-prev' // Geri gitme düğmesi
                }
            });
        });
    </script>
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
        $('input[name="appointment_time"]').on('change', function() {
            var selected = $('input[name="appointment_time"]:checked');
            var selectedValue=selected.val();
            $.ajax({
                url:'{{route('appointment.time.control')}}',
                method:'POST',
                data:{
                    '_token':'{{csrf_token()}}',
                    'time':selectedValue,
                    'business_id': '{{$business->id}}'
                },
                dataType:"JSON",
                success:function (res){
                    Swal.fire({
                        title: res.title,
                        text: res.message,
                        icon: res.icon,
                        confirmButtonText: "OK"
                    });
                    selected.prop('checked', false);
                    selected.attr('disabled', 'disabled');
                }
            });
        });
    </script>
    <script>
        var times = [];

        // Tıklanabilir elementi (örneğin, bir form veya bir belirli bir element) seçin veya document.body'ye ekleyin
        var container = document.body; // Örneğin, document.body olarak ayarlanabilir

        // Delegasyon kullanarak tıklama olayını yakalayın
        container.addEventListener('click', function(event) {
            var target = event.target;

            // Sadece radio butonlarına tepki ver
            if (target && target.type === 'radio' && target.name.startsWith('appointment_time')) {
                var name = target.getAttribute('name');
                var time = target.getAttribute('value');
                var id = name.replace('appointment_time', '');
                times.push(id);
                $('#'+ name).val(time);

            }
        });

        $('.active-time').on('click', function (){

            let val = $(this).val();

            $("#appointment_date").val(val);
            $(".appointment_date").text(val);



                console.log('times', times);
            scrollToElement("step-4");
        })
    </script>
    <script>
        var appUrl = "{{env('APP_URL')}}";
        var offDay = "{{$business->off_day}}";
        var businessId = "{{$business->id}}";
       var personels = {!! isset(request()->query()['request']['personels']) ? json_encode(request()->query()['request']['personels']) : "" !!};
    </script>
    <script src="/front/assets/js/appointment-calendar.js"></script>

@endsection

