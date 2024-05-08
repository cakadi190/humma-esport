@auth
<!-- user account details popup start  -->
<div class="user-account-popup p-4">
    <div class="account-items d-grid gap-1" data-tilt>
        <div class="user-level-area p-3">
            <div class="user-info d-between">
                <span class="user-name fs-five">{{ auth()->user()->fullname }}</span>
            </div>
            <p class="opacity-75 mt-3">
                @foreach (auth()->user()->getRolesData() as $index => $role)
                <span>
                    {{ $role->label() }}
                    @if (auth()->user()->getRolesData()->count() !== ++$index)
                    <span>,&nbsp;</span>
                    @endif
                </span>
                @endforeach
            </p>
        </div>

        @if(!request()->routeIs('panel.home'))
        <a href="{{ route('panel.home') }}" class="account-item">Ke Dasbor</a>
        @endif
        <a href="{{ url('/profile/change-password') }}" class="account-item">Ubah Sandi</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-flex w-100">
            @csrf
            <button type="submit" class="bttn account-item w-100">Keluar</button>
        </form>
    </div>
</div>
<!-- user account details popup end  -->
@endauth
