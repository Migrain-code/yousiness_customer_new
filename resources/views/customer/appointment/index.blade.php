@extends('layouts.master')
@section('title', 'Termine')
@section('meta_description', 'Zeigt eine Aufzeichnung aller Ihrer vergangenen Termine an')
@section('styles')
    <style>
        @media (max-width: 768px) {
            .table-responsive {
                overflow: hidden;
            }

            .table-responsive table {
                width: 100%;
                table-layout: fixed;
            }
            .table-responsive tr{
                background-color: #ececec;
                border-radius: 15px;
            }
            .table-responsive tbody,
            .table-responsive thead,
            .table-responsive tr,
            .table-responsive td,
            .table-responsive th {
                display: block;
            }

            .table-responsive tr {
                margin-bottom: 1rem;
            }

            .table-responsive td,
            .table-responsive th {
                display: flex;
                align-items: center;
                border-bottom: 1px solid #dee2e6;
                padding: 0.75rem;
                min-height: 50px;
                word-wrap: break-word;
                white-space: normal;
            }

            .table-responsive th {
                display: none;
            }

            .table-responsive td::before {
                content: attr(data-label);
                font-weight: bold;
                display: inline-block;
                width: 120px; /* İlgili alanın genişliğini buradan ayarlayabilirsiniz */
                margin-right: 5px;
            }
        }
    </style>
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
                    <h2 class="breadcrumb-title">Terminübersicht</h2>
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
                                        <h3>Mein Terminübersicht</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Termincode</th>
                                                        <th>Salonname</th>
                                                        <th>Datum</th>
                                                        <th>Status</th>
                                                        <th>Transaktionen</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($customer->appointments as $appointment)
                                                            <tr>
                                                                <td data-label="Termincode">#{{$appointment->id}}</td>
                                                                <td data-label="Salonname">{{$appointment->business->name}}</td>
                                                                <td data-label="Datum">{{$appointment->start_time}}</td>
                                                                <td data-label="Status">{!!$appointment->status('html') !!}</td>
                                                                <td data-label="Transaktionen"><a href="{{route('customer.appointment.detail', $appointment->id)}}" class="btn btn-outline-info">Detail</a></td>
                                                            </tr>

                                                        @empty
                                                            <tr>
                                                                <td colspan="5">
                                                                    <div class="alert alert-warning">
                                                                    Sie haben noch keine Termine                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex justify-content-center">

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

    </div>
@endsection
@section('scripts')
    <script src="/front/assets/js/cutomer-menu.js"></script>

@endsection