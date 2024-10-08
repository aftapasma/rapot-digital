<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('profile', function () {
    return view('admin.profile');
});