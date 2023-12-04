@extends('layouts.master')
@section('title', 'Kampagnen')
@section('meta_description', 'Sie können Rabatte auf Termine erhalten, indem Sie die von Unternehmen definierten Kampagnen nutzen.')
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
                            <li class="breadcrumb-item active" aria-current="page">Kampagnen</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Meine Kampagnen</h2>
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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Meine Kampagnen</h3>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        @forelse($campaigns as $campaign)
                                            @if($campaign->campaign->business)
                                                <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="profile-widget">
                                                    <div class="doc-img">

                                                        <a href="{{route('business.detail', $campaign->campaign->business->slug)}}">
                                                            <img class="img-fluid" alt="User Image" src="{{image($campaign->campaign->business->logo)}}">
                                                        </a>
                                                    </div>
                                                    <div class="pro-content">
                                                        <h3 class="title">
                                                            <a href="{{route('business.detail', $campaign->campaign->business->slug)}}">{{$campaign->campaign->business->name}}</a>
                                                            <i class="fas fa-check-circle verified"></i>
                                                        </h3>

                                                        <ul class="available-info">
                                                            <li>
                                                                <i class="fas fa-check"></i>{{$campaign->campaign->title}}
                                                            </li>
                                                            <li>
                                                                <i class="far fa-clock"></i> {{\Illuminate\Support\Carbon::parse($campaign->campaign->start_time)->format('d.m.Y H:i')}} Başlangıç
                                                            </li>
                                                            <li>
                                                                <i class="far fa-clock"></i> {{\Illuminate\Support\Carbon::parse($campaign->campaign->end_date)->format('d.m.Y H:i')}} Bitiş
                                                            </li>
                                                        </ul>
                                                        <div class="row row-sm">
                                                            <div class="col-6">
                                                                <a onclick="showModal('{{$campaign->campaign->id}}')" class="btn btn-outline-warning w-100">Detay</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @empty
                                            <div class="alert alert-warning text-center">Keine Kampagnen vorhanden</div>
                                        @endforelse

                                    </div>
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            {{$campaigns->links()}}
                                        </div>
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
    <div class="modal fade custom-modal" id="detailModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Kampagnendetails</h3>

                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <style>
                        .modal-body ul li{
                            line-height: 2em;
                        }
                        .modal-body ul li span {
                            margin-left: 5px;
                        }
                    </style>
                    <ul>
                        <li>
                            <b style="color: #24ae91">Salonname:</b> <span id="companyName"></span>
                        </li>
                        <li>
                            <b style="color: #d28745">Startzeit:</b><span id="startTime"></span>
                        </li>
                        <li>
                            <b style="color: #24ae91">Kampagnencode:</b><span id="campaignCode"></span>
                        </li>
                        <li>
                            <b style="color: #c65f6a">Rabatt:</b><span id="campaignDiscount"></span>
                        </li>
                        <li>
                            <b style="color: #4f6fa3">Erläuterung:</b><span id="campaignDescription"></span>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

    <script src="/front/assets/js/cutomer-menu.js"></script>
    <script>
        function showModal(id){
            $.ajax({
                'url': '{{route('customer.campaign.detail')}}',
                'method': 'POST',
                'data': {
                    '_token' : '{{csrf_token()}}',
                    'id' : id
                },
                dataType: 'JSON',
                success:function (res){
                    console.log(res[0].business.name);
                    $('#companyName').text(res[0].business.name);
                    $('#startTime').text(res[0].start_time);
                    $('#campaignCode').text(res[0].code);
                    $('#campaignDiscount').text(res[0].discount);
                    $('#campaignDescription').text(res[0].description);
                }
            })

            $('#detailModal').modal('show');

        }
    </script>
@endsection