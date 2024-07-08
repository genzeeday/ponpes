<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name("home");

Route::get('/usaha', function () {
    return view('pages.usaha');
})->name("usaha");

Route::get('/bisnis/dayama-agro', function () {
    return view('pages.bisnis.dayama-agro');
})->name("bisnis.dayama-agro");

Route::get('/bisnis/dayama-farm', function () {
    return view('pages.bisnis.dayama-farm');
})->name("bisnis.dayama-farm");

Route::get('/bisnis/migas', function () {
    return view('pages.bisnis.migas');
})->name("bisnis.migas");

Route::get('/bisnis/vaname', function () {
    return view('pages.bisnis.vaname');
})->name("bisnis.vaname");

Route::get('/bisnis/garam', function () {
    return view('pages.bisnis.garam');
})->name("bisnis.garam");

Route::get('/bisnis/ikan', function () {
    return view('pages.bisnis.ikan');
})->name("bisnis.ikan");

Route::get('/bisnis/grosir', function () {
    return view('pages.bisnis.grosir');
})->name("bisnis.grosir");

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

Route::get('/pendidikan/raudatul', function () {
    return view('pages.pendidikan.raudatul');
})->name("pendidikan.raudatul");

Route::get('/pendidikan/ibtidaiyah', function () {
    return view('pages.pendidikan.ibtidaiyah');
})->name("pendidikan.ibtidaiyah");

Route::get('/pendidikan/tsanawiyah', function () {
    return view('pages.pendidikan.tsanawiyah');
})->name("pendidikan.tsanawiyah");

Route::get('/pendidikan/aliyah', function () {
    return view('pages.pendidikan.aliyah');
})->name("pendidikan.aliyah");

Route::get('/pendidikan/tahfiz', function () {
    return view('pages.pendidikan.tahfiz');
})->name("pendidikan.tahfiz");

Route::get('/pendidikan/diniyah', function () {
    return view('pages.pendidikan.diniyah');
})->name("pendidikan.diniyah");

Route::get('/pendidikan/quran', function () {
    return view('pages.pendidikan.quran');
})->name("pendidikan.quran");

Route::get('/pendidikan/panti', function () {
    return view('pages.pendidikan.panti');
})->name("pendidikan.panti");

Route::get('/pendidikan/stit', function () {
    return view('pages.pendidikan.stit');
})->name("pendidikan.stit");

Route::get('/galeri', function () {
    return view('pages.galeri');
})->name("galeri");

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name("kontak");
