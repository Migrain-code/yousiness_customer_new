@extends('layouts.master')
@section('meta_keys', config('settings.meta_keywords'))
@section('meta_description', config('settings.meta_description'))
@section('styles')

@endsection
@section('content')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Ansayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hesabım</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Paket Detayı</h2>
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
                                        <div class="col-sm-6">
                                            <h3 class="card-title">Paket Özeti</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="profile-view-bottom">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Paket Kodu</div>
                                                    <div class="text" id="bank_name">#{{$packet->id}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Alım Tarihi</div>
                                                    <div class="text" id="branch_name">{{$packet->seller_date->format('d.m.Y H:i')}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Hizmet Adı</div>
                                                    <div class="text" id="account_no">#{{$packet->service->subCategory->name ?? ""}}</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="info-list">
                                                    <div class="title">Durumu</div>
                                                    <div class="text" id="account_name">
                                                        @if($packet->usages->sum('amount') == $packet->amount and $packet->payments->sum('price') == $packet->total)
                                                            <span class="badge bg-success-light">Tamamlandı</span>
                                                        @else
                                                            @if($packet->usages->sum('amount') != $packet->amount)
                                                                <span class="badge bg-primary-light">Kullanım Hakkınız Var</span>
                                                            @else
                                                                @if($packet->payments->sum('price') != $packet->total)
                                                                    <span class="badge bg-warning-light">Ödeme Tamamlanmadı</span>
                                                                @else
                                                                    <span class="badge bg-danger">Ödeme Tamamlandı</span>
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
                                                <span>{{$packet->amount}} {{$packageTypes[$packet->type]}}</span>Hakkınız Var
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-lightblue">
                                                <span>₺{{$packet->total}}</span> Toplam Ödenecek Tutar
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-success-light">
                                                <span>{{$packet->usages->sum('amount')}} {{$packageTypes[$packet->type]}}</span> Paket Kullandınız
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-warning-light">
                                                <span>₺{{$packet->payments->sum('price')}}</span> Paket Ödemesi Yaptınız
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-purple-light">
                                                <span>{{$packet->amount - $packet->usages->sum('amount')}}</span> Kalan Kullanım Hakkınız
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="account-card bg-primary-light">
                                                <span>₺{{$packet->total -$packet->payments->sum('price')}}</span> Kalan Ödemeniz
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
                                        <h3>Paket Kullanım Detayları</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>Personel</th>
                                            <th>Kullanım Tarihi</th>
                                            <th>Adet</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         @forelse($packet->usages()->paginate(10) as $usage)
                                            <tr>
                                                <td>{{$usage->personel->name ?? "Silinmiş"}}</td>
                                                <td>{{$usage->created_at->format('d.m.Y H:i')}}</td>
                                                <td>{{$usage->amount}}</td>
                                            </tr>
                                         @empty
                                             <tr>
                                                 <td colspan="3">
                                                     <div class="alert alert-primary text-center">Paket Kullanımınız Bulunamadı</div>
                                                 </td>
                                             </tr>
                                         @endforelse
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center my-2">
                                        {{$packet->usages()->paginate(10)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Paket Ödeme Detayları</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>Fiyat</th>
                                            <th>Adet</th>
                                            <th>Ödeme Tarihi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($packet->payments()->paginate(10) as $payment)
                                            <tr>
                                                <td>{{$payment->price}}</td>
                                                <td>{{$payment->amount}}</td>
                                                <td>{{$payment->created_at->format('d.m.Y H:i')}}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3">
                                                    <div class="alert alert-primary text-center">Paket Ödemeniz Bulunamadı</div>
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center my-2">
                                        {{$packet->payments()->paginate(10)}}
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