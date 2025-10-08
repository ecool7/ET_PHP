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
