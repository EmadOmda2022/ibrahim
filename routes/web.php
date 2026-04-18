<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
