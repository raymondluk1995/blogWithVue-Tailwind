<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth','verified'])
    ->prefix('dashboard')
    ->group(function() {
        Route::get('/dashboard',function(){
            return Inertia\Inertia::render('Dashboard');
        })->name('dashboard');
    });
