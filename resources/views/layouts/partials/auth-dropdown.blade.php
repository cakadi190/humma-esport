@auth
    <button class="ntf-btn box-style fs-2xl">
        <i class="ti ti-bell-filled"></i>
    </button>
    <div class="header-profile pointer">
        <div class="profile-wrapper d-flex align-items-center gap-3">
            <div class="img-area overflow-hidden">
                <img class="w-100" src="{{ Gravatar::get(auth()->user()->email) }}" alt="profile">
            </div>
            <span class="user-name d-none d-xxl-block text-nowrap">{{ auth()->user()->fullname }}</span>
            <i class="ti ti-chevron-down d-none d-xxl-block"></i>
        </div>
    </div>
@else
    <a href="{{ route('login') }}" class="btn btn-primary btn-login rounded-pill px-4">Login</a>
@endauth
