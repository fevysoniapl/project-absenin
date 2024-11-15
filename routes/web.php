<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/jadwal', function () {
    return view('jadwal');
})->name('jadwal');

Route::get('/matkul', function () {
    return view('matkul');
})->name('matkul');

Route::get('/presensi', function () {
    return view('presensi');
})->name('presensi');

Route::get('/presensi-berhasil', function () {
    return view('presensi-berhasil');
});
Route::get('/presensi-gagal', function () {
    return view('presensi-gagal');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::get('/buat-kelas', function () {
    return view('buat-kelas');
});
