@extends('layouts.master')
@section('title', "Meine Pakete")
@section('meta_description', "Hier werden alle Servicepaketkäufe angezeigt, die Unternehmen für Sie definieren")
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
                    <h2 class="breadcrumb-title">Meine Pakete</h2>
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
                    <label for="customer-menu-toggle" class="customer-menu-toggle-label"><i class="fas fa-bars" style="padding-right: 5px;"></i>Speisekarte</label>
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
                                        <h3>Gekauften Pakete</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Bestellcode</th>
                                                        <th>Salonname</th>
                                                        <th class="text-center">Verbleibende Anzahl</th>
                                                        <th class="text-center">Gesamtbetrag</th>
                                                        <th>Typ</th>
                                                        <th>Auftragsdatum</th>
                                                        <th>Transaktionen</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($packets as $packet)
                                                        <tr>
                                                            <td data-label="Zeilennummer">{{$loop->index+1}}</td>
                                                            <td data-label="Bestellcode"># {{$packet->id}}</td>
                                                            <td data-label="Salonname">{{$packet->business->name}}</td>
                                                            <td data-label="Die restlichen Stücke">{{$packet->amount}}</td>
                                                            <td data-label="Die Gesamtzahlung">{{$packet->total}}</td>
                                                            <td data-label="Typ">{{$packageTypes[$packet->type]}}</td>
                                                            <td data-label="Auftragsdatum">
                                                                {{$packet->created_at->translatedFormat('d F y')}}
                                                                <span class="d-block text-info">
                                                                    {{$packet->created_at->translatedFormat('H:i')}}
                                                                </span>
                                                            </td>
                                                            <td data-label="Transaktionen"><a class="btn-five" href="{{route('customer.packet.detail', $packet->id)}}">Detail</a></td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="8">
                                                                <div class="alert alert-warning">
                                                                    Ihr Paketdatensatz konnte nicht gefunden werden
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex justify-content-center">
                                                {{$packets->links()}}
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