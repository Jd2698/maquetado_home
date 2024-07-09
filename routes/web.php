<?php

use App\Http\Controllers\DemosController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::group(['controller' => HomeController::class], function () {
    Route::get('/', 'home')->name('welcome');
    Route::get('/about', 'about')->name('about');
    Route::get('/help', 'help')->name('help');
    Route::get('/demo', 'demo')->name('demo');
});

Route::post('/demo', [DemosController::class, 'store'])->name('demos.store');

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('demos.index');

    Route::get('/demos/index', [DemosController::class, 'index']);
});
