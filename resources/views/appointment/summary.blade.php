<div class="col-lg-4 col-md-12">
    <div class="on-board-wizard">
        <ul>
            <li>
                <a href="#">
                    <div class="onboarding-progress active">
                        <span><i class="fa fa-check-circle"></i></span>
                    </div>
                    <div class="onboarding-list">
                        <h6>İşletme Seçimi</h6>
                        <p>{{session('appointment')['businessName']}}. </p>
                    </div>
                </a>
            </li>
            @if(request()->routeIs('step2.show') or request()->routeIs('step3.show') or request()->routeIs('step4.show'))
            <li>
                <a href="#">
                    <div class="onboarding-progress active">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <div class="onboarding-list">
                        <h6>Hizmet Seçimleriniz</h6>
                        <style>
                            .on-board-wizard ul li a:hover {
                                color: black;
                                box-shadow: 8px 7px 14px -15px rgb(0 0 0 / 40%);
                            }
                            ul:hover{
                                color: black;
                            }
                            ul li:hover{
                                color: #089e76;
                            }
                        </style>
                        <ul style="font-size: 15px;list-style-type: decimal;padding-left: 15px;">
                            @foreach($ap_services as $service)
                                <li>{{$service->subCategory->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </a>
            </li>
            @else
                <li>
                    <a href="#">
                        <div class="onboarding-progress">
                            <span>2</span>
                        </div>
                        <div class="onboarding-list">
                            <h6>Hizmet Seçimi</h6>
                            <p>Hizmet Seçimi Yapmanız gerekmektedir</p>
                        </div>
                    </a>
                </li>
            @endif
            @if(request()->routeIs('step3.show') or request()->routeIs('step4.show'))
                <li>
                    <a href="#">
                        <div class="onboarding-progress active">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        <div class="onboarding-list">
                            <h6>Personel Seçimleriniz</h6>
                            <ul style="list-style-type: decimal;padding-left: 15px">
                                @foreach($personels as $personel)
                                    <li>{{$personel->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </a>
                </li>

            @else
                <li>
                    <a href="#">
                        <div class="onboarding-progress">
                            <span>3</span>
                        </div>
                        <div class="onboarding-list">
                            <h6>Personel Seçimi</h6>
                            <p>Hizmet Seçiniz</p>
                        </div>
                    </a>
                </li>
            @endif
            @if(request()->routeIs('step4.show'))
                <li>
                    <a href="#">
                        <div class="onboarding-progress active">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        <div class="onboarding-list">
                            <h6>Tarih/Saat Seçimi</h6>
                            <p><b style="color: black">{{session('appointment')['appointment_date']}}</b></p>
                        </div>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>