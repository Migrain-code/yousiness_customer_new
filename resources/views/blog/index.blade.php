@extends('layouts.master')
@section('title', 'Bloglar')
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
               <h2 class="breadcrumb-title">Tüm Blog Yazıları</h2>
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
                        <div class="col-md-12">
                           <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                              <h2 class="title-five">Son Yayınlanan Bloglarımız</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        @forelse($blogs as $blog)
                           <div class="col-lg-4 col-md-6 mb-2 d-flex aos" data-aos="fade-up">
                              <div class="blog-grid-five w-100">
                                 <div class="blog-five-img">
                                    <a href="{{route('blog.detail', $blog->slug)}}">
                                       <img src="{{image($blog->image)}}" class="img-fluid blog-details-img" alt="">
                                    </a>
                                    <div class="blog-item-info">
                                       <div class="blog-news-date">
                                          <a href="{{route('blog.detail', $blog->slug)}}">
                                             <i class="feather-calendar me-2"></i>
                                             <span>{{$blog->created_at->format('d.m.Y')}}</span>
                                          </a>
                                       </div>
                                       <div class="blog-doctors-profile">
                                          <a href="{{route('blog.detail', $blog->slug)}}">
                                             <img src="{{image(setting('speed_favicon'))}}" alt="" class="me-2">
                                             <span>{{config('settings.site_owner')}}</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="blog-info-five">
                                    <h3 class="blog-news-title">
                                       <a href="{{route('blog.detail', $blog->slug)}}">{{$blog->title}}</a>
                                    </h3>
                                    <p>{{substr(strip_tags($blog->description), 0, 200)}}</p>
                                    <a href="{{route('blog.detail', $blog->slug)}}" class="read-news">Haberi Oku</a>
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
                                 {{$blogs->links()}}
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