@extends('layouts.app')

@section('content')
<section class="statistics-section pb-120 pt-120 bgn-4 mb-120">
    <div class="container-fluid">
        <div class="row mb-lg-15 mb-sm-10 mb-6">
            <div class="col">
                <h2 class="display-four tcn-1 cursor-scale growUp title-anim" style="width: fit-content;">
                    Selayang Pandang
                </h2>
            </div>
        </div>
        <div class="row g-6 justify-content-md-start justify-content-center">
            <div class="col-xxl-4 col-md-6 col-sm-8 ">
                <div class="statistics-card cl1 p-xxl-10 p-lg-8 p-sm-6 p-4 d-flex align-items-center gap-xxl-10 gap-lg-8 gap-6 card-tilt box-style alt-box justify-content-start diagram-bg" data-tilt="" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); --x: 504px; --y: 28px;">
                    <div class="statistics-img">
                        <img src="assets-panel/img/tropy.png" alt="img">
                    </div>
                    <div class="statistics-content">
                        <div class="statistics-info">
                            <span class="tcn-6 fs-sm">Penyelenggara</span>
                            <h4 class="statistics-title display-four tcn-1 mb-1 fw-semibold cursor-scale growDown title-anim">
                                {{ $totalEventOrganizer }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 col-sm-8 ">
                <div class="statistics-card cl2 p-xxl-10 p-lg-8 p-sm-6 p-4 d-flex align-items-center gap-xxl-10 gap-lg-8 gap-6 card-tilt box-style alt-box justify-content-start" data-tilt="" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); --x: 272px; --y: 149px;">
                    <div class="statistics-img">
                        <img src="assets-panel/img/game-console.png" alt="img">
                    </div>
                    <div class="statistics-content">
                        <div class="statistics-info">
                            <span class="tcn-6 fs-sm">Kategori E-Sport</span>
                            <h4 class="statistics-title display-four tcn-1 mb-1 fw-semibold cursor-scale growDown title-anim">
                                {{ $totalGame }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 col-sm-8 ">
                <div class="statistics-card cl3 p-xxl-10 p-lg-8 p-sm-6 p-4 d-flex align-items-center gap-xxl-10 gap-lg-8 gap-6 card-tilt box-style alt-box justify-content-start" data-tilt="" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); --x: 19px; --y: 181px;">
                    <div class="statistics-img">
                        <img src="assets-panel/img/user.png" alt="img">
                    </div>
                    <div class="statistics-content">
                        <div class="statistics-info">
                            <span class="tcn-6 fs-sm">Member Aktif</span>
                            <h4 class="statistics-title display-four tcn-1 mb-1 fw-semibold cursor-scale growDown title-anim">
                                {{ $totalActiveMember }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 col-sm-8 ">
                <div class="statistics-card cl2 p-xxl-10 p-lg-8 p-sm-6 p-4 d-flex align-items-center gap-xxl-10 gap-lg-8 gap-6 card-tilt box-style alt-box justify-content-start" data-tilt="" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); --x: 517px; --y: -1px;">
                    <div class="statistics-img">
                        <img src="assets-panel/img/award2.png" alt="img">
                    </div>
                    <div class="statistics-content">
                        <div class="statistics-info">
                            <span class="tcn-6 fs-sm">Turnamen</span>
                            <h4 class="statistics-title display-four tcn-1 mb-1 fw-semibold cursor-scale growDown title-anim">
                                {{ $totalTournament }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 col-sm-8 ">
                <div class="statistics-card cl1 p-xxl-10 p-lg-8 p-sm-6 p-4 d-flex align-items-center gap-xxl-10 gap-lg-8 gap-6 card-tilt box-style alt-box justify-content-start " data-tilt="" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); --x: -1px; --y: 30px;">
                    <div class="statistics-img">
                        <img src="assets-panel/img/wallet.png" alt="img">
                    </div>
                    <div class="statistics-content">
                        <div class="statistics-info">
                            <span class="tcn-6 fs-sm">Tim</span>
                            <h4 class="statistics-title display-four tcn-1 mb-1 fw-semibold cursor-scale growDown title-anim">
                                {{ $totalTeam }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tournament-section pb-120">
    <div class="tournament-wrapper alt">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-end mb-8">
                <div class="col">
                    <h2 class="display-four tcn-1 cursor-scale growUp title-anim"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">T</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div></h2>
                </div>
            </div>
            <div class="singletab tournaments-tab">
                <div class="d-between gap-6 flex-wrap mb-lg-15 mb-sm-10 mb-6">
                    <ul class="tablinks d-flex flex-wrap align-items-center gap-3">
                        <li class="nav-links active">
                            <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">All</button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Active</button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Upcoming</button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink py-sm-3 py-2 px-sm-8 px-6 rounded-pill tcn-1">Finished</button>
                        </li>
                    </ul>
                    <div class="px-6">
                        <a href="tournaments.html" class="btn-half-border position-relative d-inline-block py-2 bgp-1 px-6 rounded-pill">View
                            More</a>
                    </div>
                </div>
                <div class="tabcontents">
                    <div class="tabitem active">
                        <div class="row justify-content-md-start justify-content-center  g-6">
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/slide-3d-1.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">z</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">'</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">B</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/slide-3d-2.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">E</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">G</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">V</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">I</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">v</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">l</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">#</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">1</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/slide-3d-3.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">G</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">x</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">C</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">p</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Solos Edition</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/slide-3d-4.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">C</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">p</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">P</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">G</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">-</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">B</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/slide-3d-6.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">p</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">W</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">k</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">y</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/slide-3d-5.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">z</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">'</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">B</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Bienvenidos a AAG Blast Cup</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/slide-3d-7.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">T</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">D</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">L</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">E</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">P</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">1</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">1</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx1.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">L</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">T</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">f</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">QUALIFIER 3</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row justify-content-md-start justify-content-center  g-6">
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx10.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">z</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">'</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">B</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx12.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">E</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">G</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">V</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">I</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">v</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">l</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">#</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">1</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx13.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">G</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">x</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">C</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">p</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Solos Edition</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx14.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">C</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">p</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">P</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">G</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">-</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">B</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row justify-content-md-start justify-content-center  g-6">
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx2.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">z</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">'</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">B</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx3.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">E</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">G</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">V</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">I</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">v</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">l</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">#</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">1</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx4.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">C</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">p</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">P</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">G</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">-</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">B</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx5.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">p</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">W</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">k</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">y</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx6.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">z</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">'</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">B</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Bienvenidos a AAG Blast Cup</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx7.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">T</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">D</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">L</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">E</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">P</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">1</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">1</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx1.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">L</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">T</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">f</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">QUALIFIER 3</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row justify-content-md-start justify-content-center  g-6">
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx5.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">z</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">'</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">B</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">l</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">g</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx8.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">E</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">G</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">S</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">V</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">I</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">v</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">d</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">l</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">#</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">1</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx9.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">G</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">x</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">C</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">p</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Solos Edition</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx14.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">C</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">p</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">P</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">G</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">-</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">B</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx13.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">G</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">A</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">x</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">i</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">C</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">p</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Solos Edition</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
                                                <i class="ti ti-arrow-right fs-2xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="tournament-card p-xl-4 p-3 pb-xl-8 bgn-4">
                                    <div class="tournament-img mb-8 position-relative">
                                        <div class="img-area overflow-hidden">
                                            <img class="w-100" src="assets-panel/img/game-xx3.png" alt="tournament">
                                        </div>
                                        <span class="card-status position-absolute start-0 py-2 px-6 tcn-1 fs-sm">
                                            <span class="dot-icon alt-icon ps-3">Playing</span>
                                        </span>
                                    </div>
                                    <div class="tournament-content px-xxl-4">
                                        <div class="tournament-info mb-5">
                                            <a href="tournaments.html" class="d-block">
                                                <h4 class="tournament-title tcn-1 mb-1 cursor-scale growDown title-anim"> <div style="position:relative;display:inline-block;"> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">C</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">p</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">P</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">u</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">n</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">t</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">o</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">G</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">a</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">m</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">e</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">r</div><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">s</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">-</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; opacity: 0; visibility: hidden; transform: translate(70px, 0px);">B</div></div> </h4>
                                            </a>
                                            <span class="tcn-6 fs-sm">Torneo Individual</span>
                                        </div>
                                        <div class="hr-line line3"></div>
                                        <div class="card-info d-flex align-items-center gap-3 flex-wrap my-5">
                                            <div class="price-money bgn-3 d-flex align-items-center gap-3 py-2 px-3 h-100">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/bitcoin.png" alt="bitcoin">
                                                    <span class="tcn-1 fs-sm">75</span>
                                                </div>
                                                <div class="v-line"></div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img class="w-100" src="assets-panel/img/tether.png" alt="tether">
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
                                            <a href="tournaments.html" class="btn2">
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

        </div>
    </div>
</section>
@endsection
