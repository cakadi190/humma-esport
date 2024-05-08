<!DOCTYPE html>
<html data-bs-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <title>{{ $__env->yieldContent('title') ? "{$__env->yieldContent('title')} • " : '' }}Humma E-Sport</title>

    <link rel="stylesheet" href="{{ asset('assets-panel/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-panel/css/style.css') }}" />

    @yield('links')

    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background-color: rgb(246, 87, 30);
        }

        ::-webkit-scrollbar-thumb {
            background-color: #ff9900;
            border-radius: 5px;
        }

        .btn-login {
            --bs-btn-color: #fff;
            --bs-btn-bg: #ff9900;
            --bs-btn-border-color: #ff9900;
            --bs-btn-hover-bg: #e68a00;
            --bs-btn-hover-border-color: #d17f00;
            --bs-btn-focus-shadow-rgb: 255, 153, 0;
            --bs-btn-active-bg: #d17f00;
            --bs-btn-active-border-color: #cc7700;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-bg: #ff9900;
            --bs-btn-disabled-border-color: #ff9900;
        }
    </style>

    @yield('style')
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <span></span>
        </div>
    </div>

    <!-- cursor effect-->
    <div class="cursor"></div>
    <!-- Header area  -->

    <!-- header-section start -->
    <header class="header-section bgn-4 w-100">
        <div class="py-sm-6 py-3 mx-xxl-20 mx-md-15 mx-3">
            <div class="d-between gap-xxl-10 gap-lg-6">
                <div class="top-bar alt d-flex align-items-center gap-6">
                    <button class="sidebar-toggle-btn" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <a class="navbar-brand d-flex align-items-center gap-4" href="{{ url('/') }}">
                        <img class="w-100 logo1" src="{{ asset('favicon-icon.png') }}" alt="Icon Humma E-Sport" />
                        <img class="w-100 logo2" src="{{ asset('logotype.png') }}" alt="Logo Humma E-Sport" />
                    </a>
                </div>
                <div class="header-btn-area d-between gap-6 w-100 position-relative">
                    <!-- search bar start  -->
                    <div class="search-bar w-100">
                        <form action="#">
                            <div class="input-area d-flex align-items-center gap-3">
                                <i class="ti ti-search"></i>
                                <input type="text" placeholder="Search......">
                            </div>
                        </form>
                    </div>
                    <!-- search bar end  -->

                    <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                        @include('layouts.partials.auth-dropdown')
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    @include('layouts.partials.notification-area')
    @include('layouts.partials.user-area')

    <main class="main-container container-fluid d-flex pt-20 px-0 position-relative">
        @include('layouts.partials.sidebar')

        <article class="main-content">
            <!-- Content start  -->
            @yield('content')
            <!-- Content end  -->

            @include('layouts.partials.cta-footer')
            @include('layouts.partials.footer')
        </article>
    </main>

    <!-- ==== js dependencies start ==== -->
    <!-- jquery  -->
    <script src="{{ asset('assets-panel/js/jquery.min.js') }}"></script>
    <!-- gsap  -->
    <script src="{{ asset('assets-panel/js/gsap.min.js') }}"></script>
    <!-- gsap scroll trigger -->
    <script src="{{ asset('assets-panel/js/ScrollTrigger.min.js') }}"></script>
    <!-- lenis  -->
    <script src="{{ asset('assets-panel/js/lenis.min.js') }}"></script>
    <!-- gsap split text -->
    <script src="{{ asset('assets-panel/js/SplitText.min.js') }}"></script>
    <!-- tilt js -->
    <script src="{{ asset('assets-panel/js/vanilla-tilt.js') }}"></script>
    <!-- scroll magic -->
    <script src="{{ asset('assets-panel/js/ScrollMagic.min.js') }}"></script>
    <!-- animation.gsap -->
    <script src="{{ asset('assets-panel/js/animation.gsap.min.js') }}"></script>
    <!-- gsap customization  -->
    <script src="{{ asset('assets-panel/js/gsap-customization.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets-panel/js/swiper-bundle.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets-panel/js/bootstrap.bundle.min.js') }}"></script>
    <!-- main js  -->
    <script src="{{ asset('assets-panel/js/main.js') }}"></script>
    @yield('scripts')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    @yield('script')
</body>

</html>
