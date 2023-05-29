@extends('layouts.master')
@section('title', $business->name)
@section('meta_description', $business->name ." Detayı")
@section('styles')

@endsection
@section('content')
    <div class="content" style="margin-top: -30px;">
        <section class="profil__cover">
            <img src="{{asset($business->wallpaper)}}" class="cover" alt="{{$business->name}}">
            <div class="bottom">
                <div class="container">
                    <div class="in">
                        <div class="photo__name">
                            <figure class="photo rounded-circle" style="background-image: url('{{asset($business->logo)}}')">
                            </figure>
                            <h1 class="name">{{$business->name}}</h1>
                        </div>
                        <div class="star">
                            <div class="rating">
                                @if($business->comments->count() > 0)
                                    @for($i=0; $i < 5; $i++ )
                                        <i class="fas fa-star @if($i < $business->comments->sum('point') / $business->comments->count()) filled @endif"></i>
                                    @endfor
                                @else
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                @endif
                                <small><strong>({{$business->comments->count()}})</strong> </small>
                            </div>
                            <div class="point">
                                {{number_format($business->comments->sum('point') / $business->comments->count(), 1)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="profil__menu">
            <div class="container">
                <ul style="list-style: none">
                    <li>
                        <div class="clinic-details">
                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{$business->cities->name. ", ". $business->districts->name}}</p>
                        </div>
                    </li>
                    <li>
                        @if($business->approve_type==1)
                            <p class="doc-speciality" style="margin-bottom: 2px;">
                                <span class="badge badge-success fs-7"><i class="fas fa-check-circle"></i> Anında Onay</span>
                            </p>
                        @endif
                    </li>
                    <li>

                    </li>
                    <li class="price__button">
                        <div class="clinic-booking">
                            {{--<a class="apt-btn" href="{{route('step1.show', $business->slug)}}" style="padding: 0px 9px;">Randevu Al</a>---}}
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="mt-5">

            <!-- Business Details Tab -->
            <div class="card" style="border: none;">
                <div class="card-body pt-0" style="background-color: rgba(0, 113, 220, 0.05)">

                    <!-- Tab Menu -->
                    <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" href="#business_services" data-bs-toggle="tab">Hizmetler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#business_about" data-bs-toggle="tab">Hakkında</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#business_comments" data-bs-toggle="tab">Yorumlar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#business_work_time" data-bs-toggle="tab">Çalışma Saatleri</a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /Tab Menu -->

                    <!-- Tab Content -->
                    <div class="tab-content pt-0">

                        <!-- Overview Content -->
                        <div role="tabpanel" id="business_about" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">

                                    <!-- About Details -->
                                    <div class="widget about-widget">
                                        <h4 class="widget-title">Hakkımızda</h4>
                                        <p>
                                            {!! $business->about !!}
                                        </p>
                                    </div>
                                    <!-- /About Details -->

                                    <!-- Personel List -->
                                    <div class="widget about-widget">
                                        <h4 class="widget-title">Personeller</h4>
                                        <div class="row">
                                            <div class="col-lg-12 aos" data-aos="fade-up">
                                                <div class="doctor-sliders owl-carousel owl-theme">
                                                    @forelse($business->personel as $personel)
                                                        <!-- Doctor Widget -->
                                                        <div class="profile-widget">
                                                            <div class="doc-img">
                                                                <a href="#">
                                                                    <img class="img-fluid" alt="User Image" src="{{asset($personel->image)}}" style="height: 250px;">
                                                                </a>

                                                            </div>
                                                            <div class="pro-content">
                                                                <h3 class="title" style="font-size: 17px">
                                                                    <a href="#">{{$personel->name}}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <!-- /Doctor Widget -->
                                                    @empty

                                                    @endforelse

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Personel List -->

                                    <!-- Gallery List -->
                                    <div class="widget about-widget">
                                        <h4 class="widget-title">Fotoğraf Galerisi</h4>
                                        <div id="lightgallery" style="background: #e5f1fb80;padding: 15px;border-radius: 18px;">
                                            @forelse($business->gallery as $gallery)
                                                <a href="{{asset($gallery->way)}}">
                                                    <img src="{{asset($gallery->way)}}"  alt="" style="width: 200px;height: 150px;border-radius: 18px;margin-right: 10px;margin-bottom: 10px;">
                                                </a>
                                            @empty
                                                <div class="alert alert-warning text-center">İşletmenin Fotoğraf Galerisi Bulunamadı</div>
                                            @endforelse

                                        </div>
                                    </div>
                                    <!-- /Gallery List -->

                                </div>
                            </div>
                        </div>
                        <!-- /Overview Content -->

                        <!-- Comment Content -->
                        <div role="tabpanel" id="business_comments" class="tab-pane fade">
                            <div class="card blog-comments clearfix" style="border-radius: 18px">
                                <div class="card-header" style="border-radius: 18px 18px 0px 0px;">
                                    <h4 class="card-title" id="head-3">Yorumlar ({{$business->comments()->where('status', 1)->count()}})</h4>
                                </div>
                                <div class="card-body pb-0">
                                    <ul class="comments-list">
                                        @forelse($business->comments()->where('status', 1)->get() as $comment)
                                        <li style="background: aliceblue;border-radius: 15px;" class="py-1 my-2">
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="{{$comment->customer->image}}">
                                                </div>
                                                <div class="comment-block">
													<span class="comment-by">
                                                          <span class="blog-author-name">{{$comment->customer->name}}</span>
													</span>
                                                    <p>{{$comment->content}}.</p>
                                                    <p class="blog-date">{{$comment->created_at->translatedFormat('d F Y')}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @empty
                                            <div class="alert alert-warning">İşletme ile ilgili yorum bulunmamaktadır.</div>
                                        @endforelse

                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- /Reviews Content -->

                        <!-- Business Work Content -->
                        <div role="tabpanel" id="business_work_time" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">

                                    <!-- Business Hours Widget -->
                                    <div class="widget business-widget">
                                        <div class="widget-content">
                                            <div class="listing-hours">
                                                <div class="listing-day current">
                                                    <div class="day">Bugün <span>{{now()->translatedFormat('d F Y')}}</span></div>
                                                    <div class="time-items">
                                                        <span class="open-status">
                                                            @if($business->end_time > \Illuminate\Support\Carbon::now() or \Illuminate\Support\Carbon::now() > $business->start_time)
                                                                <span class="badge bg-success-light">Açık</span>
                                                            @else
                                                                <span class="badge bg-danger-light">Kapalı</span>
                                                            @endif

                                                        </span>
                                                        <span class="time">{{$business->start_time}} - {{$business->end_time}}</span>
                                                    </div>
                                                </div>

                                                @forelse($dayList as $day)
                                                    <div class="listing-day">
                                                        <div class="day">{{$day->name}}</div>
                                                        <div class="time-items">
                                                            <span class="time">
                                                                @if($day->id == $business->off_day)
                                                                    <span class="badge bg-danger-light">Kapalı</span>
                                                                @else
                                                                    {{$business->start_time}} - {{$business->end_time}}
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>

                                                @empty

                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Business Hours Widget -->

                                </div>
                            </div>
                        </div>
                        <!-- /Business Hours Content -->

                        <!-- Business Services Content -->
                        <div role="tabpanel" id="business_services" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <!-- About Details -->
                                    <div class="widget about-widget">

                                        <h3>Hizmetler</h3>
                                        <section class="services__list">
                                            <!-- hizmet tab -->
                                            <ul class="nav nav-tabs list__tab" id="myTab" role="tablist">
                                               @if($business->type->id == 3)
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="service-tab" data-bs-toggle="tab" data-bs-target="#service-tab-pane-woman" type="button" role="tab" aria-controls="service-tab-pane" aria-selected="true"><i class="fa fa-venus me-2"></i><span>Kadın</span></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="type-tab" data-bs-toggle="tab" data-bs-target="#service-tab-pane-man" type="button" role="tab" aria-controls="type-tab-pane" aria-selected="false" tabindex="-1"><i class="fa fa-mars me-2"></i><span>Erkek</span></button>
                                                    </li>
                                                @elseif($business->type->id == 2)
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="type-tab" data-bs-toggle="tab" data-bs-target="#service-tab-pane-man" type="button" role="tab" aria-controls="type-tab-pane" aria-selected="false" tabindex="-1"><i class="fa fa-mars me-2"></i><span>Erkek</span></button>
                                                    </li>
                                                @elseif($business->type->id == 1)
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="service-tab" data-bs-toggle="tab" data-bs-target="#service-tab-pane-woman" type="button" role="tab" aria-controls="service-tab-pane" aria-selected="true"><i class="fa fa-venus me-2"></i><span>Kadın</span></button>
                                                    </li>
                                               @endif
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                @if($business->type->id == 3)
                                                    <div class="tab-pane fade @if($business->type->id==1 or $business->type->id == 3) show active @endif" id="service-tab-pane-woman" role="tabpanel" aria-labelledby="service-tab" tabindex="0">
                                                    <!-- hizmet listesi woman-->
                                                        <div class="d-flex align-items-start">
                                                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            @forelse($womanCategories as $womanCategorie)
                                                                    <button class="nav-link {{$loop->first ? "active" : ""}}" @if($loop->first) style="margin-top: 15px;" @endif id="v-pills-services-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-services-{{$womanCategorie->slug}}k" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">{{$womanCategorie->name}}</button>
                                                            @empty
                                                            @endforelse
                                                        </div>

                                                        <div class="tab-content list__content" id="v-pills-tabContent">
                                                            @forelse($womanServiceCategories as $womanCategories)
                                                                <div class="tab-pane fade {{$loop->first ? "show active" : ""}}" id="v-pills-services-{{$womanCategories->first()->categorys->slug}}k" role="tabpanel" aria-labelledby="v-pills-services-1-tab" tabindex="0">
                                                                    <ul class="s__list">
                                                                        <li class="head"><span>Hizmet</span><span>Fiyat</span><span>İşlem</span></li>
                                                                        @forelse($womanCategories as $service)
                                                                                <li>
                                                                                    <span>{{$service->subCategory->name}}</span>
                                                                                    <label>{{$service->price}}TL</label>

                                                                                    <a href="{{route('step1.show', [$business->slug, $service->id])}}">Randevu Al</a>
                                                                                </li>
                                                                        @empty
                                                                        @endforelse

                                                                    </ul>
                                                                </div>
                                                            @empty
                                                            @endforelse

                                                        </div>
                                                    </div>
                                                    <!-- /hizmet listesi -->
                                                    </div>
                                                    <!-- hizmet listesi man-->

                                                    <div class="tab-pane fade" id="service-tab-pane-man" role="tabpanel" aria-labelledby="service-tab" tabindex="0">
                                                        <!-- hizmet listesi -->
                                                        <div class="d-flex align-items-start">
                                                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                @forelse($manCategories as $manCategorie)
                                                                    <button class="nav-link {{$loop->first ? "active": ""}}" @if($loop->first) style="margin-top: 15px;" @endif id="v-pills-services-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-services-{{$manCategorie->slug}}e" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">{{$manCategorie->name}}</button>
                                                                @empty
                                                                @endforelse
                                                            </div>

                                                            <div class="tab-content list__content" id="v-pills-tabContent">
                                                                @forelse($manServiceCategories as $manCategories)
                                                                    <div class="tab-pane fade {{$loop->first ? "show active" : ""}}" id="v-pills-services-{{$manCategories->first()->categorys->slug}}e" role="tabpanel" aria-labelledby="v-pills-services-1-tab" tabindex="0">
                                                                        <ul class="s__list">
                                                                            <li class="head"><span>Hizmet</span><span>Fiyat</span><span>İşlem</span></li>
                                                                            @forelse($manCategories as $service)
                                                                                <li>
                                                                                    <span>{{$service->subCategory->name}}</span>
                                                                                    <label>{{$service->price}}TL</label>

                                                                                    <a href="{{route('step1.show', [$business->slug, $service->id])}}">Randevu Al</a>
                                                                                </li>
                                                                            @empty
                                                                            @endforelse

                                                                        </ul>
                                                                    </div>
                                                                @empty
                                                                @endforelse

                                                            </div>
                                                        </div>
                                                        <!-- /hizmet listesi -->
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- /hizmet tab -->
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Business Details Tab -->

        </div>
    </div>

@endsection
@section('scripts')

@endsection