<!-- footer section start  -->
<footer class="footer bgn-4 bt">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                <div class="py-lg-10">
                    <div class="footer-logo mb-8">
                        <a href="{{ url('/') }}" class="d-grid gap-6">
                            <div class="flogo-1">
                                <img class="w-100" src="{{ asset('favicon-icon.png') }}" alt="favicon">
                            </div>
                            <div class="flogo-2">
                                <img class="w-100" src="{{ asset('logotype.png') }}" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="social-links">
                        <ul class="d-flex align-items-center gap-3 flex-wrap">
                            <li>
                                <a href="#"><i class="ti ti-brand-facebook fs-2xl"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ti ti-brand-twitter fs-2xl"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ti ti-brand-youtube fs-2xl"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ti ti-brand-linkedin fs-2xl"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ti ti-brand-instagram fs-2xl"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 br br-res py-lg-20 pt-sm-15 pt-10 footer-card-area">
                <div class="py-lg-10">
                    <h4 class="footer-title mb-8 title-anim">Tautan Ringkas</h4>
                    <ul class="footer-list d-grid gap-4">
                        <li><a href="{{ url('/tournament') }}" class="footer-link d-flex align-items-center tcn-6">
                                <i class="ti ti-chevron-right"></i> Turnamen</a></li>
                        <li><a href="{{ url('/game') }}" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> Game</a></li>
                        <li><a href="{{ url('/team') }}" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> Tim</a></li>
                        <li><a href="faq.html" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 br py-lg-20 pt-sm-15 pt-10 footer-card-area">
                <div class="py-lg-10">
                    <h4 class="footer-title mb-8 title-anim">Explore</h4>
                    <ul class="footer-list d-grid gap-4">
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> Top Players</a></li>
                        <li><a href="chat.html" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> messages</a></li>
                        <li><a href="profile.html" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-lg-20 pt-sm-15 pt-10 footer-card-area">
                <div class="py-lg-10">
                    <h4 class="footer-title mb-8 title-anim">Follow Us</h4>
                    <ul class="footer-list d-grid gap-4">
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> Facebook</a></li>
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> Instagram</a></li>
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> Twitter</a></li>
                        <li><a href="#" class="footer-link d-flex align-items-center tcn-6"> <i
                                    class="ti ti-chevron-right"></i> Linkedln</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row pb-4 pt-lg-4 pt-8 justify-content-between g-2">
            <div class="col-xxl-4 col-lg-6 order-last order-lg-first">
                <span>Copyright © <span class="currentYear"></span> GamePlex | Designed by <a
                        href="https://themeforest.net/user/pixelaxis" class="tcp-1">Pixelaxis </a></span>
            </div>
            <div class="col-xxl-3 col-lg-5">
                <ul class="d-flex align-items-center gap-lg-10 gap-sm-6 gap-4">
                    <li><a href="terms-condition.html">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer banner img  -->
    <div class="footer-banner-img" id="faa">
        <img class="w-100" src="{{ asset('assets-home/img/fbanner.png') }}" alt="banner">
    </div>
</footer>
<!-- footer section end  -->
