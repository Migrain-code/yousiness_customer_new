<footer class="footer footer-five">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="{{image(setting('speed_logo_footer'))}}" style="max-width: 250px" alt="logo">
                        </div>

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

                            <li><a href="{{route('customer.login')}}">Anmeldung</a>
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
                                <p>{{setting('speed_contact_address')}}</p>
                            </div>
                            <p><i class="feather-phone"></i>
                                {{setting('speed_contact_phone')}}</p>
                            <p class="mb-0">
                                <i class="feather-mail"></i>
                                <span>{{setting('speed_contact_email')}}</span>
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
                                <li><a href="{{setting('speed_twitter_url')}}" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                                </li>
                                <li><a href="{{setting('speed_intagram_url')}}" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                                </li>
                                <li><a href="{{setting('speed_youtube_url')}}" target="_blank"><i class="fab fa-youtube"></i> Youtube</a>
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
                            <p class="mb-0">&copy; 2023- <?php echo date("Y"); ?> {{setting('speed_site_title')}} | Deutschland</p>
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