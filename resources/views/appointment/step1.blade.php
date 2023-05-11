<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hızlı randevu</title>

    <!-- Favicons -->
    @include('layouts.component.styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container {
            width: 100% !important;
            box-sizing: border-box;
            display: inline-block;
            margin: 0;
            position: relative;
            vertical-align: middle;
        }
        .accordion-button:focus {
            z-index: 3;
            border-color: #ff8a00;
            background-color: #ff8a00;
            outline: 0;
            color: white;
            box-shadow: 0 0 0 0.25rem rgb(255, 138, 0);
        }
        .accordion-button:not(.collapsed) {
            color: white;
            background-color: #ff8a00;
            box-shadow: inset 0 -1px 0 rgba(0,0,0,.125);
        }
        .accordion-button:not(.collapsed)::after {
            background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e);
            transform: rotate(-180deg);
        }
        .select2-container--default.select2-container--disabled .select2-selection--multiple {
            background-color: #ff8a00;
            cursor: default;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #ffffff;
            border: 1px solid #aaa;
            border-radius: 12px;
            box-sizing: border-box;
            display: inline-block;
            margin-left: 5px;
            margin-top: 5px;
            padding: 0;
            padding-left: 20px;
            position: relative;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: bottom;
            white-space: nowrap;
        }
        .select2-container--default .select2-selection--multiple {
            background-color: #4CAF50;
            border: 1px solid #aaa;
            border-radius: 18px;
            cursor: text;
            padding-bottom: 5px;
            padding-right: 5px;
            position: relative;
        }
        .select2-results {
            display: none !important;
        }

    </style>
</head>
<body class="home-five">

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    @include('layouts.menu.top')

    <!-- /Breadcrumb -->
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
                                    <h2>Hizmet Seçiniz?<span>*</span></h2>
                                    <h6>Not: Birden fazla hizmet seçebilirsiniz.</h6>
                                </div>
                                <div class="onboarding-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Seçtiğiniz Hizmetler</label>
                                                <select class="js-example-basic-single" multiple name="service_ids">
                                                    @forelse($selectedServices as $service)
                                                        <option value="{{$service->id}}" selected>{{$service->subCategory->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <button class="btn btn-five" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Hizmet Ekle / Çıkar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="onboarding-btn">
                                <a href="javascript:void(0)" onclick="$('#select-service-form').submit()">Devam Et</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page Content -->


</div>
<!-- /Main Wrapper -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content" id="select-service-form" method="post" action="{{route('step1.store')}}">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Hizmet Ekle/Çıkar</h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-original-title="" title=""></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 mt-3">
                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                        @if($business->type->id == 3)
                            <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab">Kadın</a></li>
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Erkek</a></li>
                        @elseif($business->type->id==2)
                            <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab2" data-bs-toggle="tab">Erkek</a></li>
                        @elseif($business->type->id==1)
                            <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-bs-toggle="tab">Kadın</a></li>

                        @endif

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="solid-rounded-justified-tab1">
                            <div class="accordion" id="accordionWoman">
                                @forelse($womanServiceCategories as $womanCategories)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{$womanCategories->first()->category}}Woman">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$womanCategories->first()->category}}Woman" aria-expanded="true" aria-controls="collapse{{$womanCategories->first()->category}}Woman">
                                                {{$womanCategories->first()->categorys->name}}
                                            </button>
                                        </h2>
                                        <div id="collapse{{$womanCategories->first()->category}}Woman" class="accordion-collapse collapse show" aria-labelledby="heading{{$womanCategories->first()->category}}Woman" data-bs-parent="#accordionWoman">
                                            <div class="accordion-body">
                                                @forelse($womanCategories as $service)
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <label class="custom_check">
                                                                <input type="checkbox" value="{{$service->id}}" @checked(in_array($service->id, $serviceIds)) name="service_ids[]">
                                                                <span class="checkmark"></span> {{$service->subCategory->name}}
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <span class="text-success fw-bold">{{$service->price}} TL</span>
                                                        </div>
                                                    </div>

                                                @empty
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <div class="tab-pane @if($business->type->id==2) show active @endif" id="solid-rounded-justified-tab2">
                            <div class="accordion" id="accordionMan">
                                @forelse($manServiceCategories as $manCategories)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{$manCategories->first()->category}}Man">
                                            <button class="accordion-button" type="button"  data-bs-toggle="collapse" data-bs-target="#collapse{{$manCategories->first()->category}}Man" aria-expanded="true" aria-controls="collapse{{$manCategories->first()->category}}Man">
                                                {{$manCategories->first()->categorys->name}}
                                            </button>
                                        </h2>
                                        <div id="collapse{{$manCategories->first()->category}}Man" class="accordion-collapse @if($loop->first) collapse show @else collapsed @endif" aria-labelledby="heading{{$manCategories->first()->category}}Man" data-bs-parent="#accordionMan">
                                            <div class="accordion-body">
                                                @forelse($manCategories as $service)
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <label class="custom_check">
                                                                <input type="checkbox" value="{{$service->id}}" name="service_ids[]">
                                                                <span class="checkmark"></span> {{$service->subCategory->name}}
                                                            </label>
                                                        </div>
                                                        <div class="col-2">
                                                            <span class="text-success fw-bold">{{$service->price}} TL</span>
                                                        </div>
                                                    </div>

                                                @empty
                                                @endforelse
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
            <div class="modal-footer">
                <button class="btn btn-success">Randevu Al</button>
            </div>
        </form>
    </div>
</div>

<!-- jQuery -->
<script src="/front/assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="/front/assets/js/bootstrap.bundle.min.js"></script>

<!-- Owl Carousel JS -->
<script src="/front/assets/js/owl.carousel.min.js"></script>

<!-- Slick JS -->
<script src="/front/assets/js/slick.js"></script>

<!-- Feather Icon JS -->
<script src="/front/assets/js/feather.min.js"></script>

<!-- Animation JS -->
<script src="/front/assets/js/aos.js"></script>

<!-- Custom JS -->
<script src="/front/assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
</body>
</html>