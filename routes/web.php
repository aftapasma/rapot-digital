<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('profile', function () {
    return view('admin.profile');
});

Route::get('kelas', function () {
    return view('admin.class');
});
Route::get('siswa', function () {
    return view('admin.student');
});