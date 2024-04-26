<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');
// Statistik
Route::get('/statistik', function () {
    return view('dashboard.statistik');
})->name('statistik');

// Produk
Route::get('/produk', function () {
    return view('dashboard.produk');
})->name('produk');
// // Dashboard
// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// });