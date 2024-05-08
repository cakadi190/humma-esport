<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.landing.homepage');
    }

    /**
     * Display the tournament page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function tournament()
    {
        return view('pages.landing.tournament');
    }

    /**
     * Display the team page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function team()
    {
        return view('pages.landing.team');
    }

    /**
     * Display the game page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function game()
    {
        return view('pages.landing.game');
    }
}
