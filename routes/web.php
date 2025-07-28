<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('app');

Route::group(['prefix' => 'events'], function () {
    Route::get('/', function () {
        return view('homepage');
    })->name('events');

    Route::get('/create', function () {
        return view('homepage');
    })->name('events.create');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('auth.login');

    Route::get('/register', function () {
        return view('homepage');
    })->name('auth.register');
});

Route::get('/about', function () {
    return view('homepage');
})->name('about');

Route::get('/contact', function () {
    return view('homepage');
})->name('contact');
