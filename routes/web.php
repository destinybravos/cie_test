<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia\Inertia::render('HomePage');
})->name('home');

Route::get('/about', function () {
    return Inertia\Inertia::render('AboutPage');
})->name('about');

Route::get('/register', function () {
    return Inertia\Inertia::render('Register');
})->name('register');

Route::get('/login', function () {
    return Inertia\Inertia::render('Login');
})->name('login');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Auth/Dashboard');
    })->name('dashboard');

    Route::get('/news-feeds', function () {
        return Inertia\Inertia::render('Auth/Dashboard');
    })->name('newsfeed');

    Route::get('/profile', function () {
        return Inertia\Inertia::render('Auth/Profile');
    })->name('profile');
    
    Route::get('/apply-for-program', function () {
        return Inertia\Inertia::render('Auth/ApplyProgram');
    })->name('apply_program');
});
