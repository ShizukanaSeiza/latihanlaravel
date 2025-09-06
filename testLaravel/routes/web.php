<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hai', function () {
    return "Hello world from Laravel";
});

Route::get('/nama', function () {
    return "Ore no nawa seiza tomoshimase";
});