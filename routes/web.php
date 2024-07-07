<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
})->name("home");

Route::get('/usaha', function () {
    return view('pages.usaha');
})->name("usaha");

Route::get('/sejarah', function () {
    return view('pages.sejarah');
})->name("sejarah");

Route::get('/jenjang', function () {
    return view('pages.jenjang');
})->name("jenjang");

Route::get('/galeri', function () {
    return view('pages.galeri');
})->name("galeri");

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name("kontak");
// Route::get('/')
