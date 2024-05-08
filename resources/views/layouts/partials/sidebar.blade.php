<aside class="sidebar">
    <div class="sidebar-wrapper d-flex">
        <div class="sidebar-game-list-wrapper py-xxl-15 py-sm-10 py-4 px-xxl-7 px-lg-4 px-md-3 px-2">
            <div class="sidebar-game-list" data-lenis-prevent="">
                <ul class="d-grid gap-xxl-6 gap-lg-4 gap-3">
                    @if ($gameCategories->isNotEmpty())
                        @foreach ($gameCategories as $category)
                            <li class="game-list-link">
                                <a href="{{ url("tournament?category={$category->slug}") }}" class="w-100 h-100">
                                    <img src="{{ url("storage/{$category->image}") }}" alt="{{ $category->name }}" />
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="discord-live-chat d-center w-100 z-3">
                <a href="{{ route('panel.tournament.index', ['action' => 'create']) }}">
                    <i class="ti ti-plus fs-2xl"></i>
                </a>
            </div>
        </div>
        <div class="sidebar-menu py-xxl-15 py-sm-10 py-4 px-xxl-5 px-md-3 px-2">
            <div class="d-grid gap-sm-8 gap-4 sidebar-menu-items">
                <div class="p-lg-2 p-1">
                    <a href="{{ route('panel.home') }}"
                        class="home-btn box-style {{ request()->routeIs('panel.home') ? 'active' : '' }}"
                        style="--x: 5px; --y: 10px;">
                        <i class="ti ti-home fs-2xl"></i>
                    </a>
                </div>
                <ul class="d-grid gap-sm-6 gap-3 p-lg-2 p-1">
                    <li>
                        <a href="{{ route('panel.tournament.index') }}"
                            class="menu-link box-style {{ request()->routeIs('panel.tournament.*') ? 'active' : '' }}">
                            <i class="ti ti-trophy fs-2xl"></i>
                        </a>
                    </li>
                    @role('admin')
                        <li>
                            <a href="{{ route('panel.game-category.index') }}"
                                class="menu-link box-style {{ request()->routeIs('panel.game-category.*') ? 'active' : '' }}">
                                <i class="ti ti-device-gamepad fs-2xl"></i>
                            </a>
                        </li>
                    @endrole
                    <li>
                        <a href="teams.html" class="menu-link box-style">
                            <i class="ti ti-users-group fs-2xl"></i>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html" class="menu-link box-style">
                            <i class="ti ti-messages fs-2xl"></i>
                        </a>
                    </li>
                    <li>
                        <a href="faq.html" class="menu-link box-style">
                            <i class="ti ti-message-circle-question fs-2xl"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
