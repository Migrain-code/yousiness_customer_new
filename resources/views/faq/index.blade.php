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
                <div class="accordion-item ">
                    <h2 class="accordion-header ">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="paragraf mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, omnis!</p>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>

                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                            <p class="paragraf mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda enim iure laborum minima minus nam neque nisi, nostrum nulla officiis, qui sed ut voluptate? Animi aperiam consequatur cumque magni pariatur? Lorem ipsum dolor sit.</p>
                        </button>

                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                            <p class="paragraf mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('scripts')

@endsection