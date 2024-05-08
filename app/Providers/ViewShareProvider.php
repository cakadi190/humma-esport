<?php

namespace App\Providers;

use App\Models\GameCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('gameCategories', GameCategory::latest()->limit(10)->get());
    }
}
