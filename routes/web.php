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
});

// Route::get('/')
