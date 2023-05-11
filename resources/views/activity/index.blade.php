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
                     <li class="breadcrumb-item active" aria-current="page">Blog</li>
                  </ol>
               </nav>
               <h2 class="breadcrumb-title">Tüm Etkinlikler</h2>
            </div>

         </div>
      </div>
   </div>

   <div class="content" style="min-height: 264.8px;">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <!-- Blog Section Five -->
               <section class="blog-section-five">
                  <div class="container">

                     <div class="row">
                        @forelse($activities as $activity)
                           <div class="col-lg-4 col-md-6 mb-2 d-flex aos" data-aos="fade-up">
                              <div class="blog-grid-five w-100">
                                 <div class="blog-five-img">
                                    <a href="{{route('activity.detail', $activity->slug)}}">
                                       <img src="{{asset($activity->image)}}" class="img-fluid blog-details-img" alt="">
                                    </a>
                                    <div class="blog-item-info">
                                       <div class="blog-news-date">
                                          <a href="{{route('activity.detail', $activity->slug)}}">
                                             <i class="feather-calendar me-2"></i>
                                             <span>{{$activity->created_at->format('d.m.Y')}}</span>
                                          </a>
                                       </div>
                                       <div class="blog-doctors-profile">
                                          <a href="{{route('activity.detail', $activity->slug)}}">
                                             <img src="{{asset(config('settings.favicon'))}}" alt="" class="me-2">
                                             <span>{{config('settings.site_owner')}}</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="blog-info-five">
                                    <h3 class="blog-news-title">
                                       <a href="{{route('activity.detail', $activity->slug)}}">{{$activity->title}}</a>
                                    </h3>
                                    <p>{{\Illuminate\Support\Str::limit(strip_tags($activity->description), 100, '...')}}</p>
                                    <a href="{{route('activity.detail', $activity->slug)}}" class="btn-five" style="max-width: 200px;margin: 0 auto">Etkinlik Detayı</a>
                                 </div>
                              </div>
                           </div>
                        @empty

                        @endforelse

                     </div>
                     <div class="row">
                        <div class="col-md-12 text-center">
                           <div class="blog-five-btn aos" data-aos="fade-up">
                              <ul class="pagination justify-content-center">
                                 {!! $activities->links() !!}
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- /Blog Section Five -->
            </div>
         </div>
      </div>

   </div>

@endsection
@section('scripts')

@endsection