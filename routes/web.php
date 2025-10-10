<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/overview', function () {
    return view('pages.overview');
});

Route::get('/products', function () {
    return view('pages.products');
});

// Individual monitor model pages
Route::get('/products/industrial-et-7', function () {
    return view('pages.models.industrial-et-7');
});

Route::get('/products/industrial-et-10', function () {
    return view('pages.models.industrial-et-10');
});

Route::get('/products/industrial-et-15', function () {
    return view('pages.models.industrial-et-15');
});

Route::get('/products/industrial-et-21', function () {
    return view('pages.models.industrial-et-21');
});


Route::get('/products/industrial-et-17', function () {
    return view('pages.models.industrial-et-17');
});

Route::get('/products/industrial-et-185', function () {
    return view('pages.models.industrial-et-185');
});
