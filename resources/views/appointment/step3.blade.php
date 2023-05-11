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
                                    <h2>Tarih/Saat Nasıl Seçerim?<span>*</span></h2>
                                    <h6>
                                        Tarih, saati seçtiğiniz sütundaki tarih olarak verilecektir.<br> Saati seçmek için bir kutucuğu tıklayıp seçmeniz yeterlidir.
                                    </h6>
                                </div>
                                <div class="onboarding-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card schedule-widget mb-0">
                                                <!-- Schedule Header -->
                                                <div class="schedule-header">

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
                                                <form class="tab-content schedule-cont" id="step-3-form" method="post" action="{{route('step3.store')}}">
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
                                                                                <input type="radio" name="appointment_time" class="form-check-input" value="{{$date->format('d.m.Y '. $i->format('H:i'))}}">
                                                                                <span class="visit-rsn" data-bs-toggle="tooltip">{{$i->format('H:i')}}</span>
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

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="onboarding-btn">
                                <a href="#" onclick="$('#step-3-form').submit()">Tarih ve saati seç</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $('.custom-link').on('click', function (){
            var activeLinks = document.querySelectorAll('.nav-link.active');
            activeLinks.forEach(function(link) {
                link.classList.remove('active');
            });
            $(this).addClass('nav-link active');
        });
    </script>
@endsection