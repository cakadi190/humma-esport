<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <title>Beranda • Humma E-Sport</title>

    <link rel="stylesheet" href="{{ asset('assets-home/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-home/css/style.css') }}" />

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
    <header class="header-section w-100">
        <div class="py-sm-6 py-3 mx-xxl-20 mx-md-15 mx-3">
            <div class="d-flex align-items-center justify-content-between gap-xxl-10 gap-lg-8 w-100">
                <nav
                    class="navbar-custom d-flex gap-lg-6 align-items-center flex-column flex-lg-row justify-content-start justify-content-lg-between w-100">
                    <div class="top-bar w-100 d-flex align-items-center gap-lg-0 gap-6">
                        <button class="navbar-toggle-btn d-block d-lg-none" type="button">
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
                    <div class="navbar-toggle-item w-100 position-lg-relative">
                        @include('layouts.partials.navbar-menu')
                    </div>
                </nav>
                <div class="header-btn-area d-flex align-items-center gap-sm-6 gap-3">
                    @include('layouts.partials.auth-dropdown')
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    @include('layouts.partials.notification-area')
    @include('layouts.partials.user-area')

    <!-- Hero Section start  -->
    <section class="hero-section pt-20 pb-120 position-relative">
        <div class="gradient-bg"></div>
        <div class="gradient-bg2"></div>
        <div class="star-area">
            <div class="big-star">
                <img class="w-100" src="{{ asset('assets-home/img/big-star.png') }}" alt="star">
            </div>
            <div class="small-star">
                <img class="w-100" src="{{ asset('assets-home/img/small-star.png') }}" alt="star">
            </div>
        </div>
        <div class="rotate-award">
            <img class="w-100" src="{{ asset('assets-home/img/award.png') }}" alt="award">
        </div>
        <div class="container pt-120 pb-15">
            <div class="row g-6 justify-content-between">
                <div class="col-lg-5 col-md-6 col-sm-8">
                    <div class="hero-content">
                        <ul class="d-flex gap-3 fs-2xl fw-semibold heading-font mb-5 list-icon title-anim">
                            <li>Main</li>
                            <li>Menang</li>
                            <li>Juara</li>
                        </ul>
                        <h1 class="hero-title display-one tcn-1 cursor-scale growUp mb-10">
                            KOMPETISI
                            <span class="d-block tcp-1">GAME</span>
                            BERGENGSI
                        </h1>
                        <a href="https://www.youtube.com/watch?v=G5kzUpWAusI"
                            class="btn-half-border position-relative d-inline-block py-2 px-6 bgp-1 rounded-pill popupvideo mfp-iframe">Play
                            Now</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-2 col-4 order-md-last order-lg-1">
                    <div class="hero-banner-area">
                        <div class="hero-banner-bg">
                            <img class="w-100" src="{{ asset('assets-home/img/bg-1.png') }}" alt="banner">
                        </div>
                        <div class="hero-banner-img">
                            <img class="w-100 hero" src="{{ asset('assets-home/img/hero.png') }}" alt="banner">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 order-md-1 order-lg-last">
                    <div class="hero-content">
                        <div class="card-area py-lg-8 py-6 px-lg-6 px-3 rounded-5 tilt mb-10" data-tilt>
                            <h3 class="tcn-1 dot-icon cursor-scale growDown mb-6 title-anim">
                                Last Winners
                            </h3>
                            <div class="hr-line mb-6"></div>
                            <div class="card-items d-grid gap-5">
                                <div class="card-item d-flex align-items-center gap-4">
                                    <div class="card-img-area rounded-circle overflow-hidden">
                                        <img class="w-100" src="{{ asset('assets-home/img/avatar1.png') }}" alt="profile">
                                    </div>
                                    <div class="card-info">
                                        <h4
                                            class="card-title fw-semibold tcn-1 mb-1 cursor-scale growDown2 title-anim">
                                            Cristofer Dorwart
                                        </h4>
                                        <p class="card-text tcs-1 fw-medium">+$220</p>
                                    </div>
                                </div>
                                <div class="hr-line"></div>
                                <div class="card-item d-flex align-items-center gap-4">
                                    <div class="card-img-area rounded-circle overflow-hidden">
                                        <img class="w-100" src="{{ asset('assets-home/img/avatar2.png') }}" alt="profile">
                                    </div>
                                    <div class="card-info">
                                        <h4
                                            class="card-title fw-semibold tcn-1 mb-1 cursor-scale growDown2 title-anim">
                                            Cristofer Dorwart
                                        </h4>
                                        <p class="card-text tcs-1 fw-medium">+$220</p>
                                    </div>
                                </div>
                                <div class="hr-line"></div>
                                <div class="card-item d-flex align-items-center gap-4">
                                    <div class="card-img-area rounded-circle overflow-hidden">
                                        <img class="w-100" src="{{ asset('assets-home/img/avatar3.png') }}" alt="profile">
                                    </div>
                                    <div class="card-info">
                                        <h4
                                            class="card-title fw-semibold tcn-1 mb-1 cursor-scale growDown2 title-anim">
                                            Cristofer Dorwart
                                        </h4>
                                        <p class="card-text tcs-1 fw-medium">+$220</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="active-player-list d-grid justify-content-end gap-2">
                            <ul class="player-lists d-flex align-items-center">
                                <li class="rounded-circle overflow-hidden me-n6">
                                    <img src="{{ asset('assets-home/img/player1.png') }}" alt="player">
                                </li>
                                <li class="rounded-circle overflow-hidden me-n6">
                                    <img src="{{ asset('assets-home/img/player2.png') }}" alt="player">
                                </li>
                                <li class="rounded-circle overflow-hidden me-n6">
                                    <img src="{{ asset('assets-home/img/player3.png') }}" alt="player">
                                </li>
                                <li class="rounded-circle overflow-hidden me-n6">
                                    <img src="{{ asset('assets-home/img/player4.png') }}" alt="player">
                                </li>
                                <li class="rounded-circle overflow-hidden me-n6 heading-font fs-xl">
                                    99+
                                </li>
                            </ul>
                            <span class="d-block tcn-1 dot-icon cursor-scale growDown2 fs-xl text-end">Active
                                Players</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-lines overflow-hidden">
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="lines">
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
                <div class="line-vertical"></div>
            </div>
        </div>
    </section>
    <!-- Hero Section end  -->

    <!-- 3D swiper section start-->
    <section class="swiper-3d-section position-relative z-1" id="swiper-3d">
        <div class="container">
            <!-- Slider main container -->
            <div class="swiper swiper-3d-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="{{ asset('assets-home/img/slide-3d-1.png') }}" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">Apex Legends</h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="{{ asset('assets-home/img/slide-3d-2.png') }}" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Super Mario Odyssey
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-3.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Ghost of Tsushima
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-4.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Copa Punto Gamer - A
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-5.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Ghost of Tsushima
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-6.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Super Mario Odyssey
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-7.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">Apex Legends</h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-1.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">Apex Legends</h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-2.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Super Mario Odyssey
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-3.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Ghost of Tsushima
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-4.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Copa Punto Gamer - A
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-5.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Ghost of Tsushima
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-6.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">
                                Super Mario Odyssey
                            </h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-3d d-grid justify-content-center p-3">
                            <div class="img-area w-100 mb-8 position-relative">
                                <span
                                    class="card-date position-absolute top-0 end-0 py-2 px-3 mt-4 me-5 tcn-1 d-flex align-items-center gap-1 fs-sm">
                                    <i class="ti ti-calendar-due"></i> 15.02.2022</span>
                                <img class="w-100" src="/assets-home/img/slide-3d-7.png" alt="game">
                                <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                    <span class="dot-icon alt-icon ps-3">Playing</span>
                                </span>
                            </div>
                            <h5 class="card-title text-center tcn-1 mb-4 title-anim">Apex Legends</h5>
                            <div class="d-center">
                                <div class="card-info d-center gap-3 py-1 px-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/bitcoin.png" alt="bitcoin">
                                        <span class="tcn-1 fs-xs">75</span>
                                    </div>
                                    <div class="v-line"></div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                        <span class="tcn-1 fs-xs">$49.97</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-btn-area d-center gap-6">
                <div class="swiper-btn swiper-3d-button-prev box-style">
                    <i class="ti ti-chevron-left fs-xl"></i>
                </div>
                <div class="swiper-btn swiper-3d-button-next box-style">
                    <i class="ti ti-chevron-right fs-xl"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- 3D swiper section end-->

    <!-- top player section start  -->
    <section class="top-player-section pt-120 pb-120" id="top-player">
        <!-- sword animation -->
        <div class="sword-area">
            <img class="w-100" src="/assets-home/img/sword.png" alt="sword">
        </div>
        <div class="red-ball end-0"></div>
        <div class="container">
            <div class="row justify-content-between mb-15">
                <div class="col-sm-6">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Top Player</h2>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <div class="d-flex justify-content-end align-items-center gap-6">
                        <div class="swiper-btn top-player-prev box-style">
                            <i class="ti ti-chevron-left fs-xl"></i>
                        </div>
                        <div class="swiper-btn top-player-next box-style">
                            <i class="ti ti-chevron-right fs-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="swiper swiper-top-player">
                        <div class="swiper-wrapper my-1">
                            <div class="swiper-slide">
                                <div class="player-card d-grid gap-6 p-6 card-tilt" data-tilt>
                                    <div class="player-info-area d-between w-100">
                                        <div class="player-info d-flex align-items-center gap-4">
                                            <div class="player-img position-relative">
                                                <img class="w-100 rounded-circle"
                                                    src="/assets-home/img/top-player1.png" alt="player">
                                                <span
                                                    class="player-status position-absolute end-0 bottom-0 tcn-1 fs-xs d-center">1</span>
                                            </div>
                                            <div>
                                                <h5 class="player-name tcn-1 mb-1 title-anim">Jane Cooper</h5>
                                                <span class="tcn-6 fs-sm">Duelist</span>
                                            </div>
                                        </div>
                                        <form action="#">
                                            <button class="follow-btn box-style">
                                                <i class="ti ti-user-plus fs-xl"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="player-score-details d-flex align-items-center flex-wrap gap-3">
                                        <div class="score">
                                            <h6 class="score-title tcn-6 mb-2">Score</h6>
                                            <ul class="d-flex align-items-center gap-1 tcp-2">
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-half-filled"></i></li>
                                                <li><i class="ti ti-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="rank">
                                            <h6 class="rank-title tcn-6 mb-2">Rank</h6>
                                            <span class="tcn-1 fs-sm">
                                                <i class="ti ti-diamond"></i> Diamond</span>
                                        </div>
                                        <div class="region">
                                            <h6 class="region-title tcn-6 mb-2">Region</h6>
                                            <span class="tcn-1 fs-sm text-uppercase"> EUW</span>
                                        </div>
                                        <div class="team">
                                            <h6 class="team-title tcn-6 mb-2">Team</h6>
                                            <span class="tcs-1 fs-sm text-uppercase"> fire</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="player-card d-grid gap-6 p-6 card-tilt" data-tilt>
                                    <div class="player-info-area d-between w-100">
                                        <div class="player-info d-flex align-items-center gap-4">
                                            <div class="player-img position-relative">
                                                <img class="w-100 rounded-circle"
                                                    src="/assets-home/img/top-player2.png" alt="player">
                                                <span
                                                    class="player-status position-absolute end-0 bottom-0 tcn-1 fs-xs d-center">2</span>
                                            </div>
                                            <div>
                                                <h5 class="player-name tcn-1 mb-1 title-anim">
                                                    Savannah Nguyen
                                                </h5>
                                                <span class="tcn-6 fs-sm">Duelist</span>
                                            </div>
                                        </div>
                                        <form action="#">
                                            <button class="follow-btn box-style">
                                                <i class="ti ti-user-plus fs-xl"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="player-score-details d-flex align-items-center flex-wrap gap-3">
                                        <div class="score">
                                            <h6 class="score-title tcn-6 mb-2">Score</h6>
                                            <ul class="d-flex align-items-center gap-1 tcp-2">
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-half-filled"></i></li>
                                                <li><i class="ti ti-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="rank">
                                            <h6 class="rank-title tcn-6 mb-2">Rank</h6>
                                            <span class="tcn-1 fs-sm">
                                                <i class="ti ti-diamond"></i> Diamond</span>
                                        </div>
                                        <div class="region">
                                            <h6 class="region-title tcn-6 mb-2">Region</h6>
                                            <span class="tcn-1 fs-sm text-uppercase"> EUW</span>
                                        </div>
                                        <div class="team">
                                            <h6 class="team-title tcn-6 mb-2">Team</h6>
                                            <span class="tcs-1 fs-sm text-uppercase"> lft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="player-card d-grid gap-6 p-6 card-tilt" data-tilt>
                                    <div class="player-info-area d-between w-100">
                                        <div class="player-info d-flex align-items-center gap-4">
                                            <div class="player-img position-relative">
                                                <img class="w-100 rounded-circle"
                                                    src="/assets-home/img/top-player3.png" alt="player">
                                                <span
                                                    class="player-status position-absolute end-0 bottom-0 tcn-1 fs-xs d-center">3</span>
                                            </div>
                                            <div>
                                                <h5 class="player-name tcn-1 mb-1 title-anim">Guy Hawkins</h5>
                                                <span class="tcn-6 fs-sm">Duelist</span>
                                            </div>
                                        </div>
                                        <form action="#">
                                            <button class="follow-btn box-style">
                                                <i class="ti ti-user-plus fs-xl"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="player-score-details d-flex align-items-center flex-wrap gap-3">
                                        <div class="score">
                                            <h6 class="score-title tcn-6 mb-2">Score</h6>
                                            <ul class="d-flex align-items-center gap-1 tcp-2">
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-half-filled"></i></li>
                                                <li><i class="ti ti-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="rank">
                                            <h6 class="rank-title tcn-6 mb-2">Rank</h6>
                                            <span class="tcn-1 fs-sm">
                                                <i class="ti ti-diamond"></i> Diamond</span>
                                        </div>
                                        <div class="region">
                                            <h6 class="region-title tcn-6 mb-2">Region</h6>
                                            <span class="tcn-1 fs-sm text-uppercase"> EUW</span>
                                        </div>
                                        <div class="team">
                                            <h6 class="team-title tcn-6 mb-2">Team</h6>
                                            <span class="tcs-1 fs-sm text-uppercase">liqud</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="player-card d-grid gap-6 p-6 card-tilt" data-tilt>
                                    <div class="player-info-area d-between w-100">
                                        <div class="player-info d-flex align-items-center gap-4">
                                            <div class="player-img position-relative">
                                                <img class="w-100 rounded-circle"
                                                    src="/assets-home/img/top-player1.png" alt="player">
                                                <span
                                                    class="player-status position-absolute end-0 bottom-0 tcn-1 fs-xs d-center">1</span>
                                            </div>
                                            <div>
                                                <h5 class="player-name tcn-1 mb-1 title-anim">Jane Cooper</h5>
                                                <span class="tcn-6 fs-sm">Duelist</span>
                                            </div>
                                        </div>
                                        <form action="#">
                                            <button class="follow-btn box-style">
                                                <i class="ti ti-user-plus fs-xl"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="player-score-details d-flex align-items-center flex-wrap gap-3">
                                        <div class="score">
                                            <h6 class="score-title tcn-6 mb-2">Score</h6>
                                            <ul class="d-flex align-items-center gap-1 tcp-2">
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-half-filled"></i></li>
                                                <li><i class="ti ti-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="rank">
                                            <h6 class="rank-title tcn-6 mb-2">Rank</h6>
                                            <span class="tcn-1 fs-sm">
                                                <i class="ti ti-diamond"></i> Diamond</span>
                                        </div>
                                        <div class="region">
                                            <h6 class="region-title tcn-6 mb-2">Region</h6>
                                            <span class="tcn-1 fs-sm text-uppercase"> EUW</span>
                                        </div>
                                        <div class="team">
                                            <h6 class="team-title tcn-6 mb-2">Team</h6>
                                            <span class="tcs-1 fs-sm text-uppercase"> fire</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="player-card d-grid gap-6 p-6 card-tilt" data-tilt>
                                    <div class="player-info-area d-between w-100">
                                        <div class="player-info d-flex align-items-center gap-4">
                                            <div class="player-img position-relative">
                                                <img class="w-100 rounded-circle"
                                                    src="/assets-home/img/top-player2.png" alt="player">
                                                <span
                                                    class="player-status position-absolute end-0 bottom-0 tcn-1 fs-xs d-center">2</span>
                                            </div>
                                            <div>
                                                <h5 class="player-name tcn-1 mb-1 title-anim">
                                                    Savannah Nguyen
                                                </h5>
                                                <span class="tcn-6 fs-sm">Duelist</span>
                                            </div>
                                        </div>
                                        <form action="#">
                                            <button class="follow-btn box-style">
                                                <i class="ti ti-user-plus fs-xl"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="player-score-details d-flex align-items-center flex-wrap gap-3">
                                        <div class="score">
                                            <h6 class="score-title tcn-6 mb-2">Score</h6>
                                            <ul class="d-flex align-items-center gap-1 tcp-2">
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-half-filled"></i></li>
                                                <li><i class="ti ti-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="rank">
                                            <h6 class="rank-title tcn-6 mb-2">Rank</h6>
                                            <span class="tcn-1 fs-sm">
                                                <i class="ti ti-diamond"></i> Diamond</span>
                                        </div>
                                        <div class="region">
                                            <h6 class="region-title tcn-6 mb-2">Region</h6>
                                            <span class="tcn-1 fs-sm text-uppercase"> EUW</span>
                                        </div>
                                        <div class="team">
                                            <h6 class="team-title tcn-6 mb-2">Team</h6>
                                            <span class="tcs-1 fs-sm text-uppercase"> lft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="player-card d-grid gap-6 p-6 card-tilt" data-tilt>
                                    <div class="player-info-area d-between w-100">
                                        <div class="player-info d-flex align-items-center gap-4">
                                            <div class="player-img position-relative">
                                                <img class="w-100 rounded-circle"
                                                    src="/assets-home/img/top-player3.png" alt="player">
                                                <span
                                                    class="player-status position-absolute end-0 bottom-0 tcn-1 fs-xs d-center">3</span>
                                            </div>
                                            <div>
                                                <h5 class="player-name tcn-1 mb-1 title-anim">Guy Hawkins</h5>
                                                <span class="tcn-6 fs-sm">Duelist</span>
                                            </div>
                                        </div>
                                        <form action="#">
                                            <button class="follow-btn box-style">
                                                <i class="ti ti-user-plus fs-xl"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="player-score-details d-flex align-items-center flex-wrap gap-3">
                                        <div class="score">
                                            <h6 class="score-title tcn-6 mb-2">Score</h6>
                                            <ul class="d-flex align-items-center gap-1 tcp-2">
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-filled"></i></li>
                                                <li><i class="ti ti-star-half-filled"></i></li>
                                                <li><i class="ti ti-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="rank">
                                            <h6 class="rank-title tcn-6 mb-2">Rank</h6>
                                            <span class="tcn-1 fs-sm">
                                                <i class="ti ti-diamond"></i> Diamond</span>
                                        </div>
                                        <div class="region">
                                            <h6 class="region-title tcn-6 mb-2">Region</h6>
                                            <span class="tcn-1 fs-sm text-uppercase"> EUW</span>
                                        </div>
                                        <div class="team">
                                            <h6 class="team-title tcn-6 mb-2">Team</h6>
                                            <span class="tcs-1 fs-sm text-uppercase">liqud</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top player section end -->

    <!-- tournament section start -->
    <section class="tournament-section pb-120" id="tournament-hero">
        <!-- Diamond animation -->
        <div class="diamond-area">
            <img class="w-100" src="/assets-home/img/diamond.png" alt="diamond">
        </div>
        <!-- game console animation -->
        <div class="game-console-area">
            <img class="w-100" src="/assets-home/img/game-console2.png" alt="game-console">
        </div>
        <div class="red-ball top-50"></div>
        <div class="tournament-wrapper">
            <div class="tournament-wrapper-border">
                <div class="container pt-120 pb-120">
                    <div class="row justify-content-between align-items-center gy-sm-0 gy-4 mb-15">
                        <div class="col-md-6 col-sm-8">
                            <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Tournaments</h2>
                        </div>
                        <div class="col-md-6 col-sm-4 text-sm-end">
                            <a href="tournaments.html"
                                class="btn-half-border position-relative d-inline-block py-2 px-6 bgp-1 rounded-pill">View
                                More</a>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center g-6">
                        <div class="col-xl-4 col-md-6">
                            <div class="tournament-card p-xl-4 p-3 bgn-4">
                                <div class="tournament-img mb-8 position-relative">
                                    <div class="img-area overflow-hidden">
                                        <img class="w-100" src="/assets-home/img/tournament1.png" alt="tournament">
                                    </div>
                                    <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                        <span class="dot-icon alt-icon ps-3">Playing</span>
                                    </span>
                                </div>
                                <div class="tournament-content px-xl-4 px-sm-2">
                                    <div class="tournament-info mb-5">
                                        <a href="tournaments-details.html" class="d-block">
                                            <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                Azariaria's Battlegrounds
                                            </h4>
                                        </a>
                                        <span class="tcn-6 fs-sm">Torneo Individual</span>
                                    </div>
                                    <div class="hr-line line3"></div>
                                    <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                        <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                            <div class="d-flex align-items-center gap-2">
                                                <img class="w-100" src="/assets-home/img/bitcoin.png"
                                                    alt="bitcoin">
                                                <span class="tcn-1 fs-sm">75</span>
                                            </div>
                                            <div class="v-line"></div>
                                            <div class="d-flex align-items-center gap-2">
                                                <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                                <span class="tcn-1 fs-sm">$49.97</span>
                                            </div>
                                        </div>
                                        <div class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-ticket fs-base tcp-2"></i>
                                            <span class="tcn-1 fs-sm">Free Entry</span>
                                        </div>
                                        <div class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-calendar fs-base tcn-1"></i>
                                            <span class="tcn-1 fs-sm">OCT 07, 5:10 AM</span>
                                        </div>
                                    </div>
                                    <div class="hr-line line3"></div>
                                    <div class="card-more-info d-between mt-6">
                                        <div class="teams-info d-between gap-xl-5 gap-3">
                                            <div class="teams d-flex align-items-center gap-1">
                                                <i class="ti ti-users fs-base"></i>
                                                <span class="tcn-6 fs-sm">12/12 Teams</span>
                                            </div>
                                            <div class="player d-flex align-items-center gap-1">
                                                <i class="ti ti-user fs-base"></i>
                                                <span class="tcn-6 fs-sm">128 Players</span>
                                            </div>
                                        </div>
                                        <a href="tournaments-details.html" class="btn2">
                                            <i class="ti ti-arrow-right fs-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="tournament-card p-xl-4 p-3 bgn-4">
                                <div class="tournament-img mb-8 position-relative">
                                    <div class="img-area overflow-hidden">
                                        <img class="w-100" src="/assets-home/img/tournament2.png" alt="tournament">
                                    </div>
                                    <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                        <span class="dot-icon alt-icon ps-3">Playing</span>
                                    </span>
                                </div>
                                <div class="tournament-content px-xl-4 px-sm-2">
                                    <div class="tournament-info mb-5">
                                        <a href="tournaments-details.html" class="d-block">
                                            <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                Superliga Weekly
                                            </h4>
                                        </a>
                                        <span class="tcn-6 fs-sm">Torneo Individual</span>
                                    </div>
                                    <div class="hr-line line3"></div>
                                    <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                        <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                            <div class="d-flex align-items-center gap-2">
                                                <img class="w-100" src="/assets-home/img/bitcoin.png"
                                                    alt="bitcoin">
                                                <span class="tcn-1 fs-sm">75</span>
                                            </div>
                                            <div class="v-line"></div>
                                            <div class="d-flex align-items-center gap-2">
                                                <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                                <span class="tcn-1 fs-sm">$49.97</span>
                                            </div>
                                        </div>
                                        <div class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-ticket fs-base tcp-2"></i>
                                            <span class="tcn-1 fs-sm">Free Entry</span>
                                        </div>
                                        <div class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-calendar fs-base tcn-1"></i>
                                            <span class="tcn-1 fs-sm">OCT 07, 5:10 AM</span>
                                        </div>
                                    </div>
                                    <div class="hr-line line3"></div>
                                    <div class="card-more-info d-between mt-6">
                                        <div class="teams-info d-between gap-xl-5 gap-3">
                                            <div class="teams d-flex align-items-center gap-1">
                                                <i class="ti ti-users fs-base"></i>
                                                <span class="tcn-6 fs-sm">12/12 Teams</span>
                                            </div>
                                            <div class="player d-flex align-items-center gap-1">
                                                <i class="ti ti-user fs-base"></i>
                                                <span class="tcn-6 fs-sm">128 Players</span>
                                            </div>
                                        </div>
                                        <a href="tournaments-details.html" class="btn2">
                                            <i class="ti ti-arrow-right fs-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="tournament-card p-xl-4 p-3 bgn-4">
                                <div class="tournament-img mb-8 position-relative">
                                    <div class="img-area overflow-hidden">
                                        <img class="w-100" src="/assets-home/img/tournament3.png" alt="tournament">
                                    </div>
                                    <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                        <span class="dot-icon alt-icon ps-3">Playing</span>
                                    </span>
                                </div>
                                <div class="tournament-content px-xl-4 px-sm-2">
                                    <div class="tournament-info mb-5">
                                        <a href="tournaments-details.html" class="d-block">
                                            <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim">
                                                Liga
                                                Triunfo</h4>
                                        </a>
                                        <span class="tcn-6 fs-sm">Torneo Individual</span>
                                    </div>
                                    <div class="hr-line line3"></div>
                                    <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                        <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                            <div class="d-flex align-items-center gap-2">
                                                <img class="w-100" src="/assets-home/img/bitcoin.png"
                                                    alt="bitcoin">
                                                <span class="tcn-1 fs-sm">75</span>
                                            </div>
                                            <div class="v-line"></div>
                                            <div class="d-flex align-items-center gap-2">
                                                <img class="w-100" src="/assets-home/img/tether.png" alt="tether">
                                                <span class="tcn-1 fs-sm">$49.97</span>
                                            </div>
                                        </div>
                                        <div class="ticket-fee bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-ticket fs-base tcp-2"></i>
                                            <span class="tcn-1 fs-sm">Free Entry</span>
                                        </div>
                                        <div class="date-time bgn-3 d-flex align-items-center gap-1 py-2 px-3 h-100">
                                            <i class="ti ti-calendar fs-base tcn-1"></i>
                                            <span class="tcn-1 fs-sm">OCT 07, 5:10 AM</span>
                                        </div>
                                    </div>
                                    <div class="hr-line line3"></div>
                                    <div class="card-more-info d-between mt-6">
                                        <div class="teams-info d-between gap-xl-5 gap-3">
                                            <div class="teams d-flex align-items-center gap-1">
                                                <i class="ti ti-users fs-base"></i>
                                                <span class="tcn-6 fs-sm">12/12 Teams</span>
                                            </div>
                                            <div class="player d-flex align-items-center gap-1">
                                                <i class="ti ti-user fs-base"></i>
                                                <span class="tcn-6 fs-sm">128 Players</span>
                                            </div>
                                        </div>
                                        <a href="tournaments-details.html" class="btn2">
                                            <i class="ti ti-arrow-right fs-2xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tournament section end -->

    <!-- game section start  -->
    <section class="game-section">
        <div class="red-ball bottom-0 end-0"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center mb-15">
                <div class="col-6">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Games</h2>
                </div>
                <div class="col-6 text-end">
                    <a href="game.html"
                        class="btn-half-border position-relative d-inline-block py-2 px-6 bgp-1 rounded-pill">View
                        More</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="swiper game-swiper">
                        <div class="swiper-wrapper mb-lg-15 mb-10">
                            <div class="swiper-slide">
                                <div class="game-card-wrapper mx-auto">
                                    <div class="game-card mb-5 p-2">
                                        <div class="game-card-border"></div>
                                        <div class="game-card-border-overlay"></div>
                                        <div class="game-img alt">
                                            <img class="w-100 h-100" src="/assets-home/img/game-x4.png"
                                                alt="game">
                                        </div>
                                        <div class="game-link d-center">
                                            <a href="game.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="game.html">
                                        <h3 class="game-title mb-0 tcn-1 cursor-scale growDown2">AAG Axie Cup</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="game-card-wrapper mx-auto">
                                    <div class="game-card mb-5 p-2">
                                        <div class="game-card-border"></div>
                                        <div class="game-card-border-overlay"></div>
                                        <div class="game-img alt">
                                            <img class="w-100 h-100" src="/assets-home/img/game3.png" alt="game">
                                        </div>
                                        <div class="game-link d-center">
                                            <a href="game.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="game.html">
                                        <h3 class="game-title mb-0 tcn-1 cursor-scale growDown2">Axie Origin</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="game-card-wrapper mx-auto">
                                    <div class="game-card mb-5 p-2">
                                        <div class="game-card-border"></div>
                                        <div class="game-card-border-overlay"></div>
                                        <div class="game-img alt">
                                            <img class="w-100 h-100" src="/assets-home/img/game4.png"
                                                alt="game">
                                        </div>
                                        <div class="game-link d-center">
                                            <a href="game.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="game.html">
                                        <h3 class="game-title mb-0 tcn-1 cursor-scale growDown2">Free Fire</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="game-card-wrapper mx-auto">
                                    <div class="game-card mb-5 p-2">
                                        <div class="game-card-border"></div>
                                        <div class="game-card-border-overlay"></div>
                                        <div class="game-img alt">
                                            <img class="w-100 h-100" src="/assets-home/img/game2.png"
                                                alt="game">
                                        </div>
                                        <div class="game-link d-center">
                                            <a href="game.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="game.html">
                                        <h3 class="game-title mb-0 tcn-1 cursor-scale growDown2">Fortnite</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center d-center">
                            <div class="game-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- game section end  -->

    <!-- next level gaming section start -->
    <section class="next-level-gaming-section pt-120 pb-120" id="next-level-gaming">
        <div class="red-ball bottom-50"></div>
        <div class="container">
            <div class="row justify-content-between mb-15">
                <div class="col-lg-6 col-sm-10">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim"><span class="d-block">Gaming To
                        </span> The Next Level</h2>
                </div>
            </div>
            <div class="row g-6">
                <div class="col-lg-4 col-md-6">
                    <div class="next-level-game-card d-grid gap-5 py-lg-10 py-sm-6 py-4 px-xl-9 px-sm-5 px-3">
                        <div class="card-icon">
                            <i class="ti ti-12-hours fs-2xl tcn-1"></i>
                        </div>
                        <h4 class="card-title tcn-1 cursor-scale growDown2 title-anim">Industry Best Support</h4>
                        <p class="card-text tcs-6">Get a reply in under 90 seconds from our friendly, in-house staff.
                            24/7.</p>
                        <div class="pt-3">
                            <a href="game.html" class="card-link d-inline-flex align-items-center w-auto">Play Now<i
                                    class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="next-level-game-card d-grid gap-5 py-lg-10 py-sm-6 py-4 px-xl-9 px-sm-5 px-3">
                        <div class="card-icon">
                            <i class="ti ti-tools fs-2xl tcn-1"></i>
                        </div>
                        <h4 class="card-title tcn-1 cursor-scale growDown2 title-anim">Play To Earn</h4>
                        <p class="card-text tcs-6">Earn our TXT tokens with every bet you make. TXT tokens can be
                            profits.</p>
                        <div class="pt-3">
                            <a href="game.html" class="card-link d-inline-flex align-items-center w-auto">Play Now<i
                                    class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="next-level-game-card d-grid gap-5 py-lg-10 py-sm-6 py-4 px-xl-9 px-sm-5 px-3">
                        <div class="card-icon">
                            <i class="ti ti-coins fs-2xl tcn-1"></i>
                        </div>
                        <h4 class="card-title tcn-1 cursor-scale growDown2 title-anim">Instant Payouts</h4>
                        <p class="card-text tcs-6">Withdraw easily with instant payouts on over 99.4% withdrawals.</p>
                        <div class="pt-3">
                            <a href="game.html" class="card-link d-inline-flex align-items-center w-auto">Play Now<i
                                    class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="next-level-game-card d-grid gap-5 py-lg-10 py-sm-6 py-4 px-xl-9 px-sm-5 px-3">
                        <div class="card-icon">
                            <i class="ti ti-free-rights fs-2xl tcn-1"></i>
                        </div>
                        <h4 class="card-title tcn-1 cursor-scale growDown2 title-anim">Free Withdrawals</h4>
                        <p class="card-text tcs-6">Withdraw easily with instant payouts on over 99.4% withdrawals.</p>
                        <div class="pt-3">
                            <a href="game.html" class="card-link d-inline-flex align-items-center w-auto">Play Now<i
                                    class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="next-level-game-card d-grid gap-5 py-lg-10 py-sm-6 py-4 px-xl-9 px-sm-5 px-3">
                        <div class="card-icon">
                            <i class="ti ti-scale fs-2xl tcn-1"></i>
                        </div>
                        <h4 class="card-title tcn-1 cursor-scale growDown2 title-anim">Prove-able Fairness</h4>
                        <p class="card-text tcs-6">Get a reply in under 90 seconds from our friendly, in-house staff.
                            24/7.</p>
                        <div class="pt-3">
                            <a href="game.html" class="card-link d-inline-flex align-items-center w-auto">Play Now<i
                                    class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="next-level-game-card d-grid gap-5 py-lg-10 py-sm-6 py-4 px-xl-9 px-sm-5 px-3">
                        <div class="card-icon">
                            <i class="ti ti-license fs-2xl tcn-1"></i>
                        </div>
                        <h4 class="card-title tcn-1 cursor-scale growDown2 title-anim">Fully Licensed</h4>
                        <p class="card-text tcs-6">Get a reply in under 90 seconds from our friendly, in-house staff.
                            24/7.</p>
                        <div class="pt-3">
                            <a href="game.html" class="card-link d-inline-flex align-items-center w-auto">Play Now<i
                                    class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- next level gaming section end -->

    @include('layouts.partials.cta-footer')
    @include('layouts.partials.footer')

    <!-- ==== js dependencies start ==== -->
    <!-- jquery  -->
    <script src="{{ asset('assets-home/js/jquery.min.js') }}"></script>
    <!-- gsap  -->
    <script src="{{ asset('assets-home/js/gsap.min.js') }}"></script>
    <!-- gsap scroll trigger -->
    <script src="{{ asset('assets-home/js/ScrollTrigger.min.js') }}"></script>
    <!-- lenis  -->
    <script src="{{ asset('assets-home/js/lenis.min.js') }}"></script>
    <!-- gsap split text -->
    <script src="{{ asset('assets-home/js/SplitText.min.js') }}"></script>
    <!-- tilt js -->
    <script src="{{ asset('assets-home/js/vanilla-tilt.js') }}"></script>
    <!-- scroll magic -->
    <script src="{{ asset('assets-home/js/ScrollMagic.min.js') }}"></script>
    <!-- animation.gsap -->
    <script src="{{ asset('assets-home/js/animation.gsap.min.js') }}"></script>
    <!-- gsap customization  -->
    <script src="{{ asset('assets-home/js/gsap-customization.js') }}"></script>
    <!-- apex chart  -->
    <script src="{{ asset('assets-home/js/apexcharts.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets-home/js/swiper-bundle.min.js') }}"></script>
    <!-- magnific popup  -->
    <script src="{{ asset('assets-home/js/magnific-popup.js_1.1.0_jquery.magnific-popup.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets-home/js/bootstrap.bundle.min.js') }}"></script>
    <!-- main js  -->
    <script src="{{ asset('assets-home/js/main.js') }}"></script>
</body>

</html>
