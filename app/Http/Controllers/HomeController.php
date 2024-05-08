<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Models\GameCategory;
use App\Models\Tournament;
use App\Models\User;
use App\Models\UserTeam;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalEventOrganizer = User::whereHas('roles', fn($query) => $query->where("name", UserRoleEnum::EO->value))->count();
        $totalActiveMember = User::whereHas('roles', fn($query) => $query->where("name", UserRoleEnum::USER->value))->where('banned', '!=', 1)->count();
        $totalGame = GameCategory::count();
        $totalTournament = Tournament::count();
        $totalTeam = UserTeam::count();

        return view('home', compact('totalGame', 'totalEventOrganizer', 'totalActiveMember', 'totalTournament', 'totalTeam'));
    }
}
