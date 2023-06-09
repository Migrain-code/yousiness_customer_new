<!-- Header -->
<header class="header">
    <div class="container">
        <div class="nav-bg-five">
            <nav class="navbar navbar-expand-lg header-nav header-nav nav-transparent">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand logo">
                        <img src="{{image(setting('speed_logo_white'))}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="mobile_btn" href="javascript:void(0);" style="float: right">	<span class="bar-icon">
									<span></span>
									<span></span>
									<span></span>
									</span>
                    </a>
                </div>
                <div class="main-menu-wrapper ">
                    <div class="menu-header">
                        <a href="/" class="menu-logo">
                            <img src="/front/assets/img/logo-mobil-menu.png" class="img-fluid"  alt="Logo">
                          <!-- <img src="{{image(setting('speed_logo_white'))}}" class="img-fluid" style="max-width: 95% !important;" alt="Logo">  -->
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);"><i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav black-font">
                      <div class="main-nav-sec">
                        @if(auth('customer')->check())
                        <li class="active">	<a href="{{route('customer.home')}}">HESABIM</a></li>
                        @else
                        <li class="active">	<a href="{{route('customer.login')}}">GİRİŞ YAP</a></li>
                        @endif
                        <li class="active"><a  href="/">İŞLETMELER</a></li>
                      </div>
                        <li class="active">	<a href="/">ANASAYFA</a></li>
                        <li class="has-submenu"><a href="{{route('business.all')}}">SALONLAR <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('business.category', $category->slug)}}">{{$category->name}}</a>
                                    </li>
                               @endforeach
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="{{route('service.all')}}">HİZMETLER <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                @foreach($services as $service)
                                    <li>
                                        <a href="{{route('service.detail', $service->slug)}}">{{$service->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class=""><a href="{{route('about')}}">HAKKIMIZDA</a></li>
                        <li class=""><a href="{{route('faq')}}">S.S.S</a></li>
                        <li class=""><a href="{{route('blog.index')}}">BLOGLAR</a></li>
                        <li class=""><a href="{{route('contact')}}">İLETİŞİM</a></li>
                    </ul>
                </div>

                <ul class="nav header-navbar-rht">
                  <div class="main-nav-secdefault">
                    @if(auth('customer')->check())
                        <li class="nav-item">
                            <a class="nav-link btn-five" href="{{route('customer.home')}}">HESABIM</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn-five" href="{{route('customer.login')}}">GİRİŞ YAP</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link btn-five-light" href="{{image('')}}" target="_blank">İŞLETMELER</a>
                    </li>
                  </div>
                </ul>
    a
            </nav>
        </div>
    </div>
</header>
<!-- /Header -->