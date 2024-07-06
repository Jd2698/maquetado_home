<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('welcome');

Route::get('/about', function () {
    return Inertia::render('AboutUs');
})->name('about');

Route::get('/help', function () {
    return Inertia::render('Help');
})->name('help');

Route::get('/demo', function () {
    return Inertia::render('Demo');
})->name('demo');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Welcome');
    });
});
