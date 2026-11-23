<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/explore', function () {
    return view('pages.explore');
});

Route::get('/pelamar', function () {
    return view('pages.applicant-dashboard');
});
