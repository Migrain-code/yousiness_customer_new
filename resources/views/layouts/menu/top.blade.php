<!-- Header -->
<header class="header">
    <div class="container">
        <div class="nav-bg-five">
            <nav class="navbar navbar-expand-lg header-nav header-nav nav-transparent">
                <div class="navbar-header">

                    <a href="/" class="navbar-brand logo">
                        <img src="{{request()->routeIs('welcome') ? image(setting('speed_logo_dark')) : image(setting('speed_logo_white'))}}"
                             style="max-width: 180px" class="img-fluid" alt="Logo">
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
                            <img src="{{image(setting('speed_logo_white'))}}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);"><i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav black-font">
                        <div class="main-nav-sec">
                            @if(auth('customer')->check())
                                <li class="active"><a href="{{route('customer.home')}}">Mein Konto mobil</a></li>
                            @else
                                <li class="active"><a href="{{route('customer.login')}}">Anmelden</a></li>
                            @endif
                            <li class="active"><a href="/">Geschäftspartner</a></li>
                        </div>

                        @if(!request()->routeIs('welcome'))
                            <li class="active"><a href="/">Startseite</a></li>
                            <li class="has-submenu"><a href="{{route('business.all')}}">Salons <i
                                            class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="{{route('business.category', $category->slug)}}">{{$category->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('service.all')}}">Dienstleistungen
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    @foreach($services as $service)
                                        <li>
                                            <a href="{{route('service.detail', $service->slug)}}">{{$service->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class=""><a href="{{route('about')}}">Über uns</a></li>
                            <li class=""><a href="{{route('faq')}}">FAQ</a></li>
                            <li class=""><a href="{{route('contact')}}">Kontakt</a></li>
                        @endif
                    </ul>
                </div>

                <ul class="nav header-navbar-rht">
                    <div class="main-nav-secdefault">
                        @if(auth('customer')->check())
                            <li class="nav-item">
                                <a class="nav-link btn-five" href="{{route('customer.home')}}">Mein Konto</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link btn-five" href="{{route('customer.login')}}">Anmelden</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link btn-five-light" href="{{image('')}}" target="_blank">Geschäftspartner</a>
                        </li>
                    </div>
                </ul>

            </nav>
        </div>
    </div>
</header>
<!-- /Header -->