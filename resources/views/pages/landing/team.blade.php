@extends('layouts.home')

@section('title', 'Daftar Tim')

@section('content')
    <!-- teams banner section start  -->
    <section class="teams-section pb-sm-10 pb-6 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-10 mb-sm-6 mb-4">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Teams</h2>
                </div>
                <div class="col-12">
                    <div class="parallax-banner-area parallax-container">
                        <img class="w-100 rounded-5 parallax-img" src="/assets-home/img/team-banner.png"
                            alt="tournament banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teams banner section end  -->

    <!-- teams card section start   -->
    <section class="teams-card-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-lg-15 mb-10">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim">Find Teams</h2>
                </div>
            </div>
            <!-- teams card  -->
            <div class="row g-6 justify-content-md-start justify-content-center mb-lg-15 mb-10">
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="/assets-home/img/team-logo1.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">S2 E-SPORT</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="/assets-home/img/team-logo2.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">ASIA MOK32</h4>
                                </a>
                                <span class="tcn-6">02/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">4 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="/assets-home/img/team-logo3.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">TEAM XR</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="/assets-home/img/team-logo4.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">BG TEAM</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="/assets-home/img/team-logo5.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">TEAM DAEMON</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="/assets-home/img/team-logo6.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">OFF DEAD</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="/assets-home/img/team-logo7.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">LANNUS</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="/assets-home/img/team-logo8.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">NAGUARANETA</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card gap-6 p-xxl-8 p-4 bgn-4 box-style alt-box" data-tilt>
                        <div class="team-thumb">
                            <img class="w-100 rounded-circle" src="/assets-home/img/team-logo9.png" alt="team">
                        </div>
                        <div class="team-info w-100">
                            <div class="title-area d-flex gap-5 align-items-end mb-5">
                                <a href="teams-details.html">
                                    <h4 class="tcn-1 cursor-scale growDown title-anim">EQUIPO DE JUAN</h4>
                                </a>
                                <span class="tcn-6">04/12</span>
                            </div>
                            <div class="player-info d-flex gap-6 align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-users fs-2xl"></i>
                                    <span class="tcn-6">3 players</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="ti ti-world fs-2xl"></i>
                                    <span class="tcn-6">English</span>
                                </div>
                            </div>
                            <div
                                class="d-between justify-content-center justify-content-xl-between flex-wrap w-100 gap-xxl-6 gap-3">
                                <ul class="player-lists d-flex align-items-center">
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player1.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player2.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player3.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden me-n4">
                                        <img src="/assets-home/img/player4.png" alt="player">
                                    </li>
                                    <li class="rounded-circle overflow-hidden heading-font fs-base">
                                        99+
                                    </li>
                                </ul>
                                <a href="teams-details.html"
                                    class="btn-half-border position-relative d-inline-block py-2 px-6 rounded-pill z-2">Request
                                    to join</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-center">
                <button
                    class="btn-half-border position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill z-2 border-0">View
                    More</button>
            </div>
        </div>
    </section>
    <!-- teams card section end   -->
@endsection
