<!-- Header -->
<header class="header">
    <div class="container">
        <div class="nav-bg-five">
            <nav class="navbar navbar-expand-lg header-nav header-nav nav-transparent">
                <div class="navbar-header">

                    <a href="/" class="navbar-brand logo">
                        <img src="{{image(setting('speed_logo_white'))}}" style="max-width: 180px" class="img-fluid" alt="Logo">
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
                            <img src="{{image(setting('speed_logo_white'))}}" class="img-fluid"  alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);"><i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav black-font">
                      <div class="main-nav-sec">
                        @if(auth('customer')->check())
                        <li class="active">	<a href="{{route('customer.home')}}">Hesabım</a></li>
                        @else
                        <li class="active">	<a href="{{route('customer.login')}}">Giriş Yap</a></li>
                        @endif
                        <li class="active"><a  href="/">İşletmeler</a></li>
                      </div>
                        <li class="active">	<a href="/">Startseite</a></li>
                        <li class="has-submenu"><a href="{{route('business.all')}}">Hallen <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('business.category', $category->slug)}}">{{$category->name}}</a>
                                    </li>
                               @endforeach
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="{{route('service.all')}}">Dienstleistungen <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                @foreach($services as $service)
                                    <li>
                                        <a href="{{route('service.detail', $service->slug)}}">{{$service->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class=""><a href="{{route('about')}}">über uns</a></li>
                        <li class=""><a href="{{route('faq')}}">Unterstützung</a></li>
                        <li class=""><a href="{{route('contact')}}">Kommunikation</a></li>
                    </ul>
                </div>

                <ul class="nav header-navbar-rht">
                  <div class="main-nav-secdefault">
                    @if(auth('customer')->check())
                        <li class="nav-item">
                            <a class="nav-link btn-five" href="{{route('customer.home')}}">Hesabım</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn-five" href="{{route('customer.login')}}">Anmeldung</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link btn-five-light" href="{{image('')}}" target="_blank">Unternehmen</a>
                    </li>
                  </div>
                </ul>

            </nav>
        </div>
    </div>
</header>
<!-- /Header -->