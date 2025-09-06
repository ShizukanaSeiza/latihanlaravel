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

Route::get('/kelas', function () {
    return "Saya dari kelas ASE-10";
});

Route::get('/ras', function () {
    return "Saya dari mongol";
});