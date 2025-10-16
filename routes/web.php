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

// New models
Route::get('/products/tle-c190-ct-hd', function () {
    return view('pages.models.tle-c190-ct-hd');
});

Route::get('/products/tle-c215-ct-hd', function () {
    return view('pages.models.tle-c215-ct-hd');
});

Route::get('/products/tle-c215b1000-ct-hd', function () {
    return view('pages.models.tle-c215b1000-ct-hd');
});

Route::get('/products/tle-l2382', function () {
    return view('pages.models.tle-l2382');
});

Route::get('/products/tle-l2762', function () {
    return view('pages.models.tle-l2762');
});

Route::get('/products/et-af185-tp', function () {
    return view('pages.models.et-af185-tp');
});

Route::get('/products/et-le1739', function () {
    return view('pages.models.et-le1739');
});
