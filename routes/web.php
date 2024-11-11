<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.beranda');
});

Route::get('/profile', function () {
    return view('admin.profile');
}) ->name('profile');

Route::get('/kelas', function () {
    return view('admin.kelas.kelas');
}) ->name('kelas');
Route::get('/kelasform', function () {
    return view('admin.kelas.form');
}) ->name('kelasform');
Route::get('/siswa', function () {
    return view('admin.siswa.siswa');
}) ->name('siswa');
Route::get('/siswaform', function () {
    return view('admin.siswa.form');
}) ->name('siswaform');
Route::get('/pelajaran', function () {
    return view('admin.pelajaran.pelajaran');
}) ->name('pelajaran');
Route::get('/pelajaranform', function () {
    return view('admin.pelajaran.form');
}) ->name('pelajaranform');
Route::get('/pengajar', function () {
    return view('admin.pengajar.pengajar');
}) ->name('pengajar');
Route::get('/pengajarform', function () {
    return view('admin.pengajar.form');
}) ->name('pengajarform');