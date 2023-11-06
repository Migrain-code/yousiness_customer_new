@extends('layouts.master')
@section('title', 'Termindetails')
@section('meta_description', 'Zeigt alle Detailinformationen zu dem von Ihnen vereinbarten Termin an')
@section('styles')

@endsection
@section('content')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Startseite</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mein Konto</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Termindetails</h2>
                </div>

            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="backdrop"></div>
                <div class="w-100 text-end position-absolute text-white font-w800 customer-menu-buttons" style="right: 5px; top: 50px;font-size: 25px">
                    <input type="checkbox" id="customer-menu-toggle" class="customer-menu-toggle" style="visibility: hidden">
                    <label for="customer-menu-toggle" class="customer-menu-toggle-label"><i class="fas fa-bars" style="padding-right: 5px;"></i>Menü</label>
                </div>
                <!-- Profile Sidebar -->
                @include('customer.layouts.sidebar')
                <!-- / Profile Sidebar -->
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-lg-5 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="card-title">Terminübersicht</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="profile-view-bottom">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Termincode</div>
                                                    <div class="text" id="bank_name">#{{$appointment->id}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Datum</div>
                                                    <div class="text" id="branch_name">{{$appointment->start_time}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                        <div class="title">Salonname</div>
                                                    <div class="text" id="account_no"><a target="_blank" href="{{route('business.detail', $appointment->business->slug)}}" class="text-primary">{{$appointment->business->name}}</a></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Status</div>
                                                    <div class="text" id="account_name">
                                                        {!! $appointment->status('html') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Details zum Terminservice</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>Mitarbeiter</th>
                                            <th>Transaktionsdatum</th>
                                            <th>Dienstname</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($appointment->services as $service)
                                            <tr>
                                                <td>{{$service->personel->name}}</td>
                                                <td>{{$service->start_time}}</td>
                                                <td>{{$service->service->subCategory->name}}</td>
                                            </tr>
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('layouts.component.alert')
                        </div>
                    </div>
                    @if($appointment->status == 7 and $appointment->comment_status == 0)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Bewerten Sie den Service, den Sie erhalten</div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="write-review">

                                            @include('layouts.component.error')
                                            <!-- Write Review Form -->
                                            <form method="post" action="{{route('customer.appointment.comment.store')}}">
                                                @csrf
                                                <input type="hidden" name="business_id" value="{{$appointment->business_id}}">
                                                <input type="hidden" name="appointment_id" value="{{$appointment->id}}">

                                                <div class="form-group">
                                                    <div class="star-rating" style="margin-top: 15px;margin-bottom: -40px">
                                                        <input id="star-5" type="radio" name="rating" value="5">
                                                        <label for="star-5" title="puan 5">
                                                            <i class="active fa fa-star"></i>
                                                        </label>
                                                        <input id="star-4" type="radio" name="rating" value="4">
                                                        <label for="star-4" title="puan 4">
                                                            <i class="active fa fa-star"></i>
                                                        </label>
                                                        <input id="star-3" type="radio" name="rating" value="3">
                                                        <label for="star-3" title="puan 3">
                                                            <i class="active fa fa-star"></i>
                                                        </label>
                                                        <input id="star-2" type="radio" name="rating" value="2">
                                                        <label for="star-2" title="puan 2">
                                                            <i class="active fa fa-star"></i>
                                                        </label>
                                                        <input id="star-1" type="radio" name="rating" value="1">
                                                        <label for="star-1" title="puan 1">
                                                            <i class="active fa fa-star"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Meine Kommantare</label>
                                                    <textarea id="review_desc" maxlength="300" class="form-control" rows="10" name="content" placeholder="Yorumunuzu Bu alana giriniz"></textarea>

                                                    <div class="d-flex justify-content-between mt-3"><small class="text-muted">Rest <span id="chars">300</span> Charakter</small></div>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="terms-accept d-flex align-items-center">
                                                            <input type="checkbox" id="terms_accept" name="terms" style="height: 20px; width: 20px">
                                                            <label for="terms_accept" style="padding-top: 7px;margin-left: 5px;"><a href="{{route('page.detail', $globalData['use_pages'][0]->slug)}}" target="_blank">Ich habe die Allgemeinen Geschäftsbedingungen gelesen und akzeptiere sie</a> </label>
                                                    </div>
                                                </div>
                                                <div class="submit-section">
                                                    <button type="submit" class="btn btn-primary submit-btn">Kommentar abgeben</button>
                                                </div>
                                            </form>
                                            <!-- /Write Review Form -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>


        </div>

    </div>
@endsection
@section('scripts')
    <script src="/front/assets/js/cutomer-menu.js"></script>

@endsection