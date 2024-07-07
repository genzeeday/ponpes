<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name("home");

Route::get('/usaha', function () {
    return view('pages.usaha');
})->name("usaha");

Route::get('/sejarah', function () {
    return view('pages.sejarah');
})->name("sejarah");

Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
})->name("visi-misi");

Route::get('/struktur-organisasi', function () {
    return view('pages.struktur-organisasi');
})->name("struktur-organisasi");

Route::get('/jenjang', function () {
    return view('pages.jenjang');
})->name("jenjang");

Route::get('/galeri', function () {
    return view('pages.galeri');
})->name("galeri");

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name("kontak");
