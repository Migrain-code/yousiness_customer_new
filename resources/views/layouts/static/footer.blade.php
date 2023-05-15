<footer class="footer footer-five">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="{{image(setting('speed_logo_white'))}}" alt="logo">
                        </div>
                        <div class="footer-about-content">
                            <p>{{setting('footer_about')}}</p>
                        </div>
                        <div class="footer-widget footer-menu footer-menu-five">
                            <ul>
                                <li><a href="{{setting('speed_facebook_url')}}" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                                </li>
                                <li><a href="{{setting('speed_twitter_url')}}" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                                </li>
                                <li><a href="{{setting('speed_intagram_url')}}" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">İletişime Geç</h2>
                        <div class="footer-contact-info">
                            <div class="footer-address"><span><i class="feather-map-pin"></i></span>
                                <p>{{setting('speed_address')}}</p>
                            </div>
                            <p><i class="feather-phone"></i>
                                {{setting('speed_phone')}}</p>
                            <p class="mb-0"><i class="feather-mail"></i>
                                {{setting('speed_email')}}</p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Müşteriler İçin</h2>
                        <ul>

                            <li><a href="{{route('customer.login')}}">Giriş Yap</a>
                            </li>
                            <li><a href="{{route('customer.register')}}">Kayıt Ol</a>
                            </li>
                            <li><a href="{{route('faq')}}">S.S.S</a>
                            </li>
                            <li>
                                <a href="{{env('REMOTE_URL')}}">İşletmeler İçin</a>
                            </li>

                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Önerilen Linkler</h2>
                        <ul>

                            {{--
                                 <li><a href="{{route('page.detail', $page->slug)}}">{{$page->title}}</a>
                                </li>
                            --}}

                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="copyright-text">
                            <p class="mb-0">&copy; {{setting('speed_site_title')}}. Tüm hakları saklıdır.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li>
                                    <a href="{{route('page.detail', $globalData['use_pages'][1]->slug)}}">Şartlar ve Koşullar</a>
                                </li>
                                <li>
                                    <a href="{{route('page.detail', $globalData['use_pages'][0]->slug)}}">Gizlilik Koşulları</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->
</footer>
</div>

@include('layouts.component.scripts')
</body>
</html>