<footer class="footer footer-five">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-about">
                        <a href="/" class="footer-logo">
                            <img src="{{image(setting('speed_logo_footer'))}}" style="max-width: 250px" alt="logo">
                        </a>

                        <div class="footer-widget footer-menu footer-menu-five">
                            <!-- <ul>
                                <li><a href="{{setting('speed_facebook_url')}}" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                                </li>
                                <li><a href="{{setting('speed_twitter_url')}}" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                                </li>
                                <li><a href="{{setting('speed_intagram_url')}}" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">

                        <ul>

                            <li><a href="{{route('customer.login')}}">Anmelden</a>
                            </li>
                            <li><a href="{{route('customer.register')}}">Registrieren</a>
                            </li>
                            <li><a href="{{route('faq')}}">FAQ</a>
                            </li>
                            <li><a href="{{route('about')}}">Über uns</a>
                            </li>
                            <li>
                                <a href="{{env('REMOTE_URL')}}">Geschäftspartner</a>
                            </li>

                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-contact">
                        <div class="footer-contact-info">
                            <div class="footer-address"><span><i class="feather-map-pin"></i></span>
                                <p><a style="color: white" href="https://maps.app.goo.gl/QPGuVsV5GANAaKGs6" target="_blank">{{setting('speed_contact_address')}}</a></p>
                            </div>
                            <p><i class="feather-phone"></i>
                                <a style="color: white" href="tel:{{setting('speed_contact_phone')}}">{{setting('speed_contact_phone')}}</a>
                            </p>
                            <p class="mb-0">
                                <i class="feather-mail"></i>
                                <span><a style="color: white" href="mailto:{{setting('speed_contact_email')}}">{{setting('speed_contact_email')}}</a></span>
                            </p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <ul>
                                <li><a href="{{setting('speed_facebook_url')}}" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                                </li>
                                <li><a href="{{setting('speed_twitter_url')}}" target="_blank">
                                        <svg style="margin-left: 9px;" viewBox="0 0 24 24" width="21px" height="21px" aria-hidden="true" class="r-1nao33i r-4qtqp9 r-yyyyoo r-16y2uox r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp">
                                            <g>
                                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231" fill="white"></path>
                                            </g>
                                        </svg>
                                        Twitter
                                    </a>
                                </li>
                                <li><a href="{{setting('speed_instagram_url')}}" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                                </li>
                                <li><a href="{{setting('speed_youtube_url')}}" target="_blank"><i class="fab fa-youtube"></i> Youtube</a>
                                </li>
                                <li><a href="{{setting('speed_tiktok_url')}}" target="_blank">
                                        <svg style="margin-left: 9px;" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                                            <g id="SVGRepo_iconCarrier">

                                                <path d="M20 7.50414C18.5333 7.56942 15.52 6.75998 15.2 3H12.4V13.9666C12.4 17.0999 9.93253 18.4412 8.289 17.2507C6.20169 15.7389 7.60003 12.5958 10.2 12.9874V9.6583C8.20003 9.6583 4 10.4416 4 15.3374C4 21.6041 10.8146 21.4083 12.4 20.5824C14.9798 19.2385 15.6 17.7827 15.6 14.5541C15.6 11.6166 15.6 9.85413 15.6 9.0708C16.2667 9.39719 18.08 10.0891 20 10.2458" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                        </svg>
                                        Tiktok
                                    </a>
                                </li>
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
                            <p class="mb-0">&copy; 2023- {{date("Y")}} {{setting('speed_site_title')}} | Deutschland</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li>
                                    <a href="{{route('page.detail', $globalData['use_pages'][1]->slug)}}">Rechliches</a>
                                </li>
                                <li>
                                    <a href="{{route('page.detail', $globalData['use_pages'][0]->slug)}}">Impressum</a>
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