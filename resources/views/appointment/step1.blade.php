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
        /* your CSS goes here*/
        body {
            background: #eee
        }
        #regForm {
            background-color: #ffffff;
            margin: 0px auto;
            font-family: Raleway;

            border-radius: 10px
        }
        h1 {
            text-align: center
        }
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa
        }
        input.invalid {
            background-color: #ffdddd
        }
        .tab {
            display: none
        }
        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer
        }
        button:hover {
            opacity: 0.8
        }
        #prevBtn {

        }
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5
        }
        .step.active {
            opacity: 1
        }
        .step.finish {
            background-color: #4CAF50
        }
        .all-steps {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px
        }
        .thanks-message {
            display: none
        }
        .container {
            display: f;
            position: relative;
            padding-left: 20px;
            margin-bottom: 9px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

        }
        /* Hide the browser's default radio button */

        .container input[type="radio"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }
        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }
        /* On mouse-over, add a grey background color */
        .container:hover input~.checkmark {
            background-color: #ccc;
        }
        /* When the radio button is checked, add a blue background */
        .container input:checked~.checkmark {
            background-color: #2196F3;
        }
        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }
        /* Show the indicator (dot/circle) when checked */
        .container input:checked~.checkmark:after {
            display: block;
        }
        /* Style the indicator (dot/circle) */
        .container .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
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
                    <div class="col-lg-8 ">
                        <div class="onboarding-content-box content-wrap">
                            <div class="onborad-set">
                                <div class="onboarding-title">
                                    <h2>Hizmet Seçiniz?<span>*</span></h2>
                                    <h6>Not: Birden fazla hizmet seçebilirsiniz.</h6>
                                </div>
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
                                <div class="onboarding-content">
                                    <div class="row">
                                        <div class="container mt-5">
                                            <div class="row d-flex justify-content-center align-items-center">
                                                <div class="col-md-12">
                                                    <div class="content" >
                                                        <div class="container">
                                                            <div class="accordion" id="accordionExample">
                                                                <div class="accordion-item col-md-12 ">
                                                                    <h2 class="accordion-header ">
                                                                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                            <p class="paragraf mt-3">HİZMET EKLE/ÇIKAR </p>
                                                                        </button>
                                                                    </h2>

                                                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <div class="col-md-12 mt-3">
                                                                              <form id="regForm">
                                                                                 <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                                                                               <div class="tab">
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
                                                                                  <div class="tab">
                                                                                      <p><input placeholder="First Name" oninput="this.className = ''" name="first"></p>
                                                                                      <p><input placeholder="Last Name" oninput="this.className = ''" name="last"></p>
                                                                                      <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
                                                                                      <p><input placeholder="Phone" oninput="this.className = ''" name="phone"></p>
                                                                                      <p><input placeholder="Street Address" oninput="this.className = ''" name="address"></p>
                                                                                      <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
                                                                                      <p><input placeholder="State" oninput="this.className = ''" name="state"></p>
                                                                                      <p><input placeholder="Country" oninput="this.className = ''" name="country"></p>
                                                                                  </div>
                                                                                  <div class="tab">
                                                                                      <p><input placeholder="Credit Card #" oninput="this.className = ''" name="email"></p>
                                                                                      <p>Exp Month
                                                                                          <select id="month">
                                                                                              <option value="1">January</option>
                                                                                              <option value="2">February</option>
                                                                                              <option value="3">March</option>
                                                                                              <option value="4">April</option>
                                                                                              <option value="5">May</option>
                                                                                              <option value="6">June</option>
                                                                                              <option value="7">July</option>
                                                                                              <option value="8">August</option>
                                                                                              <option value="9">September</option>
                                                                                              <option value="10">October</option>
                                                                                              <option value="11">November</option>
                                                                                              <option value="12">December</option>
                                                                                          </select></p>
                                                                                      <p>Exp Year
                                                                                          <select id="year">
                                                                                              <option value="2021">2021</option>
                                                                                              <option value="2022">2022</option>
                                                                                              <option value="2023">2023</option>
                                                                                              <option value="2024">2024</option>
                                                                                          </select></p>

                                                                                      <p><input placeholder="CVV" oninput="this.className = ''" name="phone"></p>
                                                                                  </div>
                                                                                  <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                                                                                      <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you shortly!</span>
                                                                                  </div>

                                                                              </form>
                                                                            </div>
                                                                            <div style="overflow:auto; float: right;"  class="col-md-4" id="nextprevious">
                                                                                <div style="float:right;">
                                                                                    <button style="width: 100px;" type="button" class="btn btn-outline-success col-md-3 mb-2 mx-auto" id="nextBtn" onclick="nextPrev(1)">İlerle</button>
                                                                                </div>
                                                                                <div style="float:left;">
                                                                                    <button style="width: 100px;" type="button" class="btn btn-outline-danger col-md-3 mb-2" id="prevBtn" onclick="nextPrev(-1)">Önceki</button>
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
    <!-- Page Content -->



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
<script>
    //your javascript goes here
    var currentTab = 0;
    document.addEventListener("DOMContentLoaded", function(event) {
        showTab(currentTab);
    });
    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        fixStepIndicator(n)
    }
    function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        if (currentTab >= x.length) {
            // document.getElementById("regForm").submit();
            // return false;
            //alert("sdf");
            document.getElementById("nextprevious").style.display = "none";
            document.getElementById("all-steps").style.display = "none";
            document.getElementById("register").style.display = "none";
            document.getElementById("text-message").style.display = "block";
        }
        showTab(currentTab);
    }
    function validateForm() {
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
                y[i].className += " invalid";
                valid = false;
            }
        }
        if (valid) { document.getElementsByClassName("step")[currentTab].className += " finish"; }
        return valid;
    }
    function fixStepIndicator(n) {
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) { x[i].className = x[i].className.replace(" active", ""); }
        x[n].className += " active";
    }
</script>
</body>
</html>