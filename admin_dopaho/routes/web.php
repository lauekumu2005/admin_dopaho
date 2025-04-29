<?php

use Illuminate\Support\Facades\Route;


Route::get('/accueil', function () {
    return view('accueil');
});


Route::get('/', function () {
    return view('splash');
});

Route::get('/login', function () {
    return view('login');
});
