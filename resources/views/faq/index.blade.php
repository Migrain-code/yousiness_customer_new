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
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="section-header section-header-five text-center aos aos-init aos-animate" data-aos="fade-up">
                    <h2 class="title-five">Sık Sorulan Sorular</h2>
                </div>
                @forelse($faqs as $faq)
                    <div class="accordion-item">
                    <h2 class="accordion-header ">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapseThree">
                            <p class="paragraf mt-3">{{$faq->question}}</p>
                        </button>
                    </h2>
                    <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {!! $faq->answer !!}
                        </div>
                    </div>
                </div>
                @empty
                @endforelse


            </div>

        </div>

    </div>
@endsection
@section('scripts')

@endsection