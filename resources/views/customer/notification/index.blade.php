@extends('layouts.master')
@section('title', 'Bildirimler')
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
                    <h2 class="breadcrumb-title">Benachrichtigung</h2>
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
                                        <h3>Benachrichtigungen</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            @include('layouts.component.alert')
                                            @include('layouts.component.error')
                                            <div class="card blog-comments clearfix" style="border-radius: 18px">
                                                <div class="card-body pb-0">
                                                    <ul class="comments-list">
                                                        @foreach($customer->notifications as $notification)
                                                                <li>
                                                                    <div class="comment">
                                                                        <div class="comment-author">
                                                                            <img class="avatar" alt="" src="/front/assets/img/notification.png">
                                                                        </div>
                                                                        <div class="comment-block">
                                                                            <span class="comment-by">
                                                                                <span class="blog-author-name">{{$notification->title}}</span>
                                                                                <p>{{$notification->content}}</p>
                                                                            </span>
                                                                            <p class="blog-date">{{$notification->created_at->translatedFormat('d.F.Y H:i:s')}}</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Change Password Form -->

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