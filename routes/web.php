<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->controller(App\Http\Controllers\HomepageController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
    Route::get('/tournament', 'tournament')->name('tournament');
    Route::get('/team', 'team')->name('team');
    Route::get('/game', 'game')->name('game');
});

Auth::routes();

# Panel Routing
Route::prefix('panel')->name('panel.')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('tournament', App\Http\Controllers\TournamentController::class);

    Route::controller(App\Http\Controllers\GameCategoryController::class)->group(function () {
        Route::get('/game-category', 'index')->name('game-category.index');
        Route::get('/game-category/create', 'create')->name('game-category.create');
        Route::post('/game-category', 'store')->name('game-category.store');
        Route::get('/game-category/{gameCategory}/edit', 'edit')->name('game-category.edit');
        Route::put('/game-category/{gameCategory}', 'update')->name('game-category.update');
        Route::delete('/game-category/{gameCategory}', 'destroy')->name('game-category.destroy');
        Route::get('/game-category/{gameCategory:slug}', 'show')->name('game-category.show');
    });
});
