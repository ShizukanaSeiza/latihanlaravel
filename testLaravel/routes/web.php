<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RuanganController;

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

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::post('/mahasiswa',[MahasiswaController::class,'store']);

Route::get('/ruangan',[RuanganController::class,'index']);
Route::post('/ruangan',[RuanganController::class,'store']);