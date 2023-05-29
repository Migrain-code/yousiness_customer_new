@extends('layouts.master')
@section('title', 'Sık Sorulan Sorular')
@section('meta_description', 'Hızlı Randevu Sık Sorulan Sorular')
@section('styles')
 <link rel="stylesheet" href="/front/assets/css/custom-accordion.css">
@endsection
@section('content')
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Ansayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">SSS</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Sık Sorulan Sorular</h2>
                </div>

            </div>
        </div>
    </div>
    <div class="content" style="min-height: 264.8px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header section-header-five text-center aos" data-aos="fade-up">
                        <h2 class="title-five">Sık Sorulan Sorular</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="tp-custom-accordion">
                    <div class="accordion" id="accordionExample">
                        @forelse($faqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{$loop->index}}">
                                    <button class="accordion-button @if($loop->index > 0) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$loop->index}}" aria-expanded="true" aria-controls="collapse{{$loop->index}}">
                                       {{$faq->question}}
                                    </button>
                                </h2>
                                <div id="collapse{{$loop->index}}" class="accordion-collapse @if($loop->index == 0) collapse show @else collapse @endif" aria-labelledby="heading{{$loop->index}}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{$faq->answer}}
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
@endsection
@section('scripts')

@endsection