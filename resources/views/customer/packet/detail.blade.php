@extends('layouts.master')
@section('title', 'Paketdetails')
@section('meta_description', 'Hier werden alle Informationen zu Nutzung, Zahlung und Transaktionsdaten des von Ihnen erworbenen Pakets angezeigt.')
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
                    <h2 class="breadcrumb-title">Paketdetails</h2>
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
                        <div class="col-lg-5 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="card-title w-100">Paketzusammenfassung</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="profile-view-bottom">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Paketcode</div>
                                                    <div class="text" id="bank_name">#{{$packet->id}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Kaufdatum</div>
                                                    <div class="text" id="branch_name">{{$packet->seller_date->format('d.m.Y H:i')}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Dienstleistung</div>
                                                    <div class="text" id="account_no">#{{$packet->service->subCategory->name ?? ""}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Status</div>
                                                    <div class="text" id="account_name">
                                                        @if($packet->usages->sum('amount') == $packet->amount and $packet->payments->sum('price') == $packet->total)
                                                            <span class="badge bg-success-light">Vollendet</span>
                                                        @else
                                                            @if($packet->usages->sum('amount') != $packet->amount)
                                                                <span class="badge bg-primary-light">Sie haben das Nutzungsrecht</span>
                                                            @else
                                                                @if($packet->payments->sum('price') != $packet->total)
                                                                    <span class="badge bg-warning-light">Die Zahlung konnte nicht abgeschlossen werden</span>
                                                                @else
                                                                    <span class="badge bg-danger">Zahlung abgeschlossen</span>
                                                                @endif
                                                            @endif


                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="account-card bg-info-light">
                                                <span>{{$packet->amount}} {{$packageTypes[$packet->type]}}</span>Gekauft
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-lightblue">
                                                <span>€{{$packet->total}}</span> Gesamtbetrag
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-success-light">
                                                <span>{{$packet->usages->sum('amount')}} {{$packageTypes[$packet->type]}}</span> Verbraucht
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-warning-light">
                                                <span>€{{$packet->payments->sum('price')}}</span> Bezahlt
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-purple-light">
                                                <span>{{$packet->amount - $packet->usages->sum('amount')}}</span> Verbleibend
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-primary-light">
                                                <span>€{{$packet->total -$packet->payments->sum('price')}}</span> Restzahlung
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                            <h3>Details zur Paketnutzung</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>Arbeiter</th>
                                            <th>Datum der Nutzung</th>
                                            <th>Anzahl</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         @forelse($packet->usages()->paginate(setting('speed_pagination_number')) as $usage)
                                            <tr>
                                                <td>{{$usage->personel->name ?? "gelöscht"}}</td>
                                                <td>{{$usage->created_at->format('d.m.Y H:i')}}</td>
                                                <td>{{$usage->amount}}</td>
                                            </tr>
                                         @empty
                                             <tr>
                                                 <td colspan="3">
                                                     <div class="alert alert-primary text-center">Ihre Paketnutzung konnte nicht gefunden werden</div>
                                                 </td>
                                             </tr>
                                         @endforelse
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center my-2">
                                        {{$packet->usages()->paginate(setting('speed_pagination_number'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Zahlungsdetails für das Paket</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>Preis</th>
                                            <th>Anzahl</th>
                                            <th>Zahlungsdatum</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($packet->payments()->paginate(setting('speed_pagination_number')) as $payment)
                                            <tr>
                                                <td>{{$payment->price}}</td>
                                                <td>{{$payment->amount}}</td>
                                                <td>{{$payment->created_at->format('d.m.Y H:i')}}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3">
                                                    <div class="alert alert-primary text-center">Ihre Paketzahlung wurde nicht gefunden</div>
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center my-2">
                                        {{$packet->payments()->paginate(setting('speed_pagination_number'))}}
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