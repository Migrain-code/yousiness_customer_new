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
                    <h2 class="breadcrumb-title">En çok görüntülediğiniz işletmeler</h2>
                </div>

            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <!-- Profile Sidebar -->
                @include('customer.layouts.sidebar')
                <!-- / Profile Sidebar -->
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Satın Aldığınız Ürünler</h3>
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
                                                        <th>Sipariş kodu</th>
                                                        <th>İşletme Adı</th>
                                                        <th class="text-center">Adet</th>
                                                        <th class="text-center">Fiyat</th>
                                                        <th>Ödeme Türü</th>
                                                        <th>Sipariş Tarihi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($orders as $order)
                                                            <tr>
                                                                <td>{{$loop->index+1}}</td>
                                                                <td># {{$order->id}}</td>
                                                                <td>{{$order->business->name}}</td>
                                                                <td class="text-center">{{$order->piece}}</td>
                                                                <td class="text-center">{{$order->total}}</td>
                                                                <td>{{$paymentTypes[$order->payment_type]}}</td>
                                                                <td>{{$order->created_at->translatedFormat('d F y')}} <span class="d-block text-info">{{$order->created_at->translatedFormat('H:i')}}</span>
                                                                </td>
                                                            </tr>
                                                        @empty

                                                        @endforelse
                                                    </tbody>
                                                </table>
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

@endsection