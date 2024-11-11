<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.beranda');
});

Route::get('profile', function () {
    return view('admin.profile');
});

Route::get('kelas', function () {
    return view('admin.kelas.kelas');
});
Route::get('kelasform', function () {
    return view('admin.kelas.form');
});
Route::get('siswa', function () {
    return view('admin.siswa.siswa');
});
Route::get('siswaform', function () {
    return view('admin.siswa.form');
});
Route::get('pelajaran', function () {
    return view('admin.pelajaran.pelajaran');
});
Route::get('pelajaranform', function () {
    return view('admin.pelajaran.form');
});
Route::get('pengajar', function () {
    return view('admin.pengajar.pengajar');
});
Route::get('pengajarform', function () {
    return view('admin.pengajar.form');
});