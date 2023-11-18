@extends('layouts.master')
@section('title', "über uns")
@section('meta_description', strip_tags(config('sections.speed_about_main_description')))
@section('styles')

@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Startseite</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Über uns</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Über uns</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <section class="about-section" style="background-image: url('{{image(config('sections.speed_about_main_image'))}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 aos" data-aos="fade-left" style="background-color: rgba(255,255,255,0.7); padding: 15px;border-radius: 15px">
                    <h3 class="mb-4">{{config('sections.speed_about_main_title')}}</h3>
                    <p>
                        {!! config('sections.speed_about_main_description') !!}
                    </p>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    {{--
        <section class="select-category">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 category-col d-flex">
                    <div class="category-subox pb-0 d-flex flex-wrap w-100">
                        <h4>{{config('sections.speed_section_1_box_1_title')}}</h4>
                        <p>{{config('sections.speed_section_1_box_1_description')}}</p>
                        <div class="subox-img">
                            <div class="subox-circle">
                                <img src="{{image(config('sections.speed_section_1_box_1_image'))}}" alt="" width="42">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 category-col d-flex">
                    <div class="category-subox pb-0 d-flex flex-wrap w-100">
                        <h4>{{config('sections.speed_section_1_box_2_title')}}</h4>
                        <p>{{config('sections.speed_section_1_box_2_description')}}</p>
                        <div class="subox-img">
                            <div class="subox-circle">
                                <img src="{{image(config('sections.speed_section_1_box_2_image'))}}" alt="" width="42">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 category-col d-flex">
                    <div class="category-subox pb-0 d-flex flex-wrap w-100">
                        <h4>{{config('sections.speed_section_1_box_3_title')}}</h4>
                        <p>{{config('sections.speed_section_1_box_3_description')}}</p>
                        <div class="subox-img">
                            <div class="subox-circle">
                                <img src="{{image(config('sections.speed_section_1_box_3_image'))}}" alt="" width="42">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    <!-- Category Section -->

   {{--
     <section class="section section-featurebox">
        <div class="container">
            <div class="section-header text-center">
                <h2>TOP DIENSTLEISTUNGEN</h2>
                <p class="sub-title"></p>
            </div>
            <div class="row justify-content-center">
                <div class="feature-col-list">
                  @foreach($services as $service)
                        <div class="feature-col">
                            <div class="feature-subox d-flex flex-wrap justify-content-center">
                                <img src="{{image($service->cover_image)}}" style="width: 323px;height: 217px" class="img-fluid" alt="Features">
                                <h4>{{$service->name}}</h4>
                            </div>
                        </div>
                  @endforeach

                </div>
            </div>
        </div>

    </section>
   --}}


    
    <!-- Testimonial Section -->
    {{--
        <section class="section section-testimonial">
        <div class="container">
            <div class="section-header text-center mb-4">
                <h2>Kommentare</h2>
                <!--<p class="sub-title">Müşteri yorumlarımız.</p>-->
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- Slider -->
                    <div class="testimonial-slider slider">

                        @forelse($comments as $comment)
                            <!-- Slider Item -->
                            <div class="testimonial-item text-center">
                                <div class="testimonial-img">
                                    <img src="{{image($comment->image)}}" class="img-fluid" style="height: 150px" alt="Speciality">
                                </div>
                                <div class="testimonial-content">
                                    <p>{{$comment->description}}</p>
                                    <p class="user-name">{{$comment->name}}</p>

                                </div>
                            </div>
                            <!-- /Slider Item -->
                        @empty
                        @endforelse
                    </div>
                    <!-- /Slider -->
                </div>
            </div>
        </div>
    </section>
    --}}
    <!-- Testimonial Section -->

@endsection
@section('scripts')

@endsection