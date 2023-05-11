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
                                    <h2>Personel Nasıl Seçerim?<span>*</span></h2>
                                    <h6>İşletmede personellere özgü hizmet ataması yapılır. Bu nedenle her hizmet için bir personel seçmelisiniz.
                                        Not: Aynı Personeli Seçebilirsiniz.
                                    </h6>
                                </div>
                                <div class="onboarding-content">
                                    <div class="row">
                                        <form method="post" action="{{route('step2.store')}}" id="step2-form" class="col-lg-12">
                                            @csrf
                                            @foreach($ap_services as $service)
                                                <div class="form-group">
                                                    <label><b>{{$service->subCategory->name}}</b> için personel seçiniz</label>
                                                    <select class="form-select" name="personels[]" @if($loop->last) id="lastSelect" @endif>
                                                        <option value="">{{$service->subCategory->name}} için personel seçiniz</option>
                                                        @forelse($service->personels as $service_personel)
                                                            <option value="{{$service_personel->personel->id}}">{{$service_personel->personel->name}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                            @endforeach

                                        </form>
                                    </div>
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
    <script>
        $('#lastSelect').on('change', function (){
           $('#step2-form').submit();
        });
    </script>
@endsection