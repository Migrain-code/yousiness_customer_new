@extends('layouts.master')
@section('title', $activity->meta_keys)
@section('meta_description', $activity->meta_description)
@section('styles')
    <style>
        .pulse-button {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .pulse-button::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            box-shadow: 0 0 0 0 rgba(255, 165, 0, 0.4);
            animation: pulse 1s ease-out infinite;
        }

        @keyframes pulse{
            0% {
                box-shadow: 0 0 0 0 rgba(255, 165, 0, 0.4);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(255, 165, 0, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 165, 0, 0);
            }
        }
    </style>
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Etkinlikler</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Etkinlik Detayı</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-view">
                        <div class="blog blog-single-post">
                            <div class="blog-image">
                                <div class="slick-wrapper">
                                    <div class="pharm-slider">
                                        <div class="col-12 d-flex">
                                            <a href="javascript:void(0);"><img alt="" src="{{image($activity->image)}}" class="img-fluid"></a>

                                        </div>
                                        <div class="col-12 d-flex">
                                            <a href="javascript:void(0);"><img alt="" src="{{image($activity->image)}}" class="img-fluid"></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="blog-title">{{$activity->title}}</h3>
                            <div class="blog-info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li>
                                            <div class="post-author">
                                                <a href="#">
                                                    <img src="{{image(setting('speed_favicon'))}}" alt="" class="me-2">
                                                    <span>Admin</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-calendar"></i><span data-bs-toggle="tooltip" title="Başlangıç Tarihi">{{$activity->start_date->format('d.m.Y H:i')}}</span> - <span data-bs-toggle="tooltip" title="Bitiş Tarihi">{{$activity->stop_date->format('d.m.Y H:i')}}</span></li>
                                        <li data-bs-toggle="tooltip" title="Katılımcı"><i class="fas fa-users"></i>{{$activity->personels->count()}}</li>
                                        <li data-bs-toggle="tooltip" title="Sponsor"><i class="fas fa-handshake"></i>{{$activity->sponsors->count()}}</li>
                                        <li>
                                            <a class="btn-fifteen pulse-button" href="#account_modal" data-bs-toggle="modal" style="background-color: #ff8a00;color: white;padding: 8px;border-radius: 5px;text-decoration: underline;">Etkinliğe Katıl</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p>{!! $activity->description !!}</p>
                            </div>
                        </div>

                        <div class="card blog-share clearfix" style="border-radius: 18px">
                            <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                                <h4 class="card-title">Paylaş</h4>
                            </div>
                            <div class="card-body">
                                <ul class="social-share">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{route('activity.detail', $activity->slug)}}" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url={{route('activity.detail', $activity->slug)}}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)" link="{{route('activity.detail', $activity->slug)}}" class="social-link" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)" link="{{route('activity.detail', $activity->slug)}}" class="social-link" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card blog-comments clearfix" style="border-radius: 18px">
                            <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                                <h4 class="card-title">Katılımcılar ({{$activity->personels->count()}})</h4>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row">
                                    @forelse($activity->personels as $personel)
                                        <div class="col-lg-4 col-md-4 d-flex aos" data-aos="fade-up">
                                            <div class="clinic-grid-five w-100 hvr-bounce-to-bottom pb-0">
                                                <div class="clinic-grid-img">
                                                    <div class="clinic-img-five clinic-img-five1">
                                                        <img src="{{image($personel->personel->image)}}" alt="" style="width: 100%;height: 140px;border-radius: 5px;">
                                                    </div>
                                                </div>
                                                <div class="clinic-grid-info">
                                                    <p>{{$personel->personel->name}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="alert alert-warning text-center">
                                            Katılımcı Bulunamadı
                                        </div>
                                    @endforelse

                                </div>
                            </div>
                        </div>

                        <div class="card new-comment clearfix" style="border-radius: 18px;">
                            <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                                <h4 class="card-title">Sponsorlar</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @forelse($activity->sponsors as $sponsor)
                                        <div class="col-lg-4 col-md-6 d-flex aos aos-init aos-animate" data-aos="fade-up">
                                            <div class="blog-grid-five w-100" style="margin-bottom: 10px">
                                                <div class="blog-five-img" style="border-radius: 5px">
                                                    <a href="{{$sponsor->link}}">
                                                        <img src="{{image($sponsor->image)}}" class="img-fluid blog-details-img" alt="">
                                                    </a>

                                                        <div class="blog-item-info">

                                                            <div class="blog-doctors-profile">
                                                                <a href="{{$sponsor->link}}">
                                                                    <i class="fa fa-check-circle text-success me-2" style="font-size: 35px"></i>
                                                                    @if($sponsor->status==1)
                                                                        Ana Sponsor
                                                                    @else
                                                                        {{$sponsor->name}}
                                                                    @endif
                                                                </a>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>

                                    @empty

                                    @endforelse
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-12 sidebar-right">

                    <!-- Latest Posts -->
                    <div class="card post-widget" style="border-radius: 18px">
                        <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                            <h4 class="card-title">Yeni Eklenen Etkinlikler</h4>
                        </div>
                        <div class="card-body">
                            <ul class="latest-posts">
                                @forelse($activities as $activity)
                                    <li>
                                        <div class="post-thumb">
                                            <a href="{{route('activity.detail', $activity->slug)}}">
                                                <img class="img-fluid" src="{{image($activity->image)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <h4>
                                                <a href="{{route('activity.detail', $activity->slug)}}">{{$activity->title}}</a>
                                            </h4>
                                            <p>{{\Illuminate\Support\Str::limit(strip_tags($activity->description), 50, '...')}}</p>
                                            <p>{{$activity->created_at->translatedFormat('d F Y')}}</p>
                                        </div>
                                    </li>
                                @empty

                                @endforelse

                            </ul>
                        </div>
                    </div>
                    <!-- /Latest Posts -->
                </div>
                <!-- /Blog Sidebar -->

            </div>
        </div>

    </div>

@endsection
@section('scripts')
    <div class="modal fade custom-modal" id="account_modal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Personel Bilgileri</h3>

                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2"><b class="text-warning">Not:</b> Etkinliğe katılabilmek için bilgilerinizi doğrulamanız gerekmektedir</div>
                    <form id="accounts_form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Telefon</label>
                                    <input type="text" id="phone" class="form-control branch_name phone" value="">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Şifre</label>
                                    <input type="password" id="password" class="form-control" autocomplete="false" value="">

                                </div>
                            </div>
                        </div>


                        <div class="modal-footer text-center">
                            <button type="button" id="acc_btn" class="btn btn-five">Bilgilerimi Doğrula</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script>
        $('.social-link').on('click', function (){
            navigator.clipboard.writeText($(this).attr('link'));
            Swal.fire(
                'Link Kopyalandı.!',
                'Linki ilgili siteye giderek yapıştırın.!',
                'success'
            )
        });
    </script>
    <script>
        $(document).ready(function (){
            $('#phone').val("");
            $(".phone").inputmask({"mask": "(999)-999-9999"});
            const h4Elements = document.getElementsByTagName('h4');

            for (let i = 0; i < h4Elements.length; i++) {
                h4Elements[i].setAttribute('id', `head-${i}`);
            }
        });
        $('#acc_btn').on('click', function (){
           $.ajax({
               url: "{{route('activity.personel.control')}}",
               type:"POST",
               data:{
                   '_token': '{{csrf_token()}}',
                   'activity_id': '{{$activity->id}}',
                   'phone': $('#phone').val(),
                   'password': $('#password').val(),
               },
               dataType:'JSON',
               success:function (res){
                   if(res.status == "success"){
                       Swal.fire({
                           position: 'center',
                           icon: 'success',
                           title: res.message,
                           showConfirmButton: false,
                           timer: 3000
                       });
                   }
                   else{
                       Swal.fire({
                           position: 'center',
                           icon: 'error',
                           title: res.message,
                           showConfirmButton: false,
                           timer: 3000
                       });
                   }
               }
           })
        });
    </script>
@endsection