<!-- Header -->
<header class="header">
    <div class="container">
        <div class="nav-bg-five">
            <nav class="navbar navbar-expand-lg header-nav nav-transparent">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">	<span class="bar-icon">
									<span></span>
									<span></span>
									<span></span>
									</span>
                    </a>
                    <a href="/" class="navbar-brand logo">
                        <img src="{{asset(config('settings.logo'))}}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="/" class="menu-logo">
                            <img src="{{asset(config('settings.logo'))}}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);"><i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav black-font">
                        <li class="active">	<a href="/">Anasayfa</a></li>
                        <li class="has-submenu"><a href="{{route('business.all')}}">Salonlar <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('business.category', $category->slug)}}">{{$category->name}}</a>
                                    </li>
                               @endforeach
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="{{route('service.all')}}">Hizmetler <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                @foreach($services as $service)
                                    <li>
                                        <a href="{{route('service.detail', $service->slug)}}">{{$service->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class=""><a href="{{route('about')}}">Hakkımızda</a></li>
                        <li class=""><a href="{{route('faq')}}">S.S.S</a></li>
                        <li class=""><a href="{{route('blog.index')}}">Bloglar</a></li>
                        <li class=""><a href="{{route('contact')}}">İletişim</a></li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    @if(auth('customer')->check())
                        <li class="nav-item">
                            <a class="nav-link btn-five" href="{{route('customer.home')}}">Hesabım</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn-five" href="{{route('customer.login')}}">Giriş Yap</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link btn-five-light" href="{{env('REMOTE_URL')}}" target="_blank">İşletmeler İçin</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- /Header -->