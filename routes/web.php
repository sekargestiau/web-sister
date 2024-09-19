<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [DataController::class, 'mahasiswa']);
Route::get('/dosen', [DataController::class, 'dosen']);
Route::get('/mata_kuliah', [DataController::class, 'mataKuliah']);
Route::get('/perkuliahan', [DataController::class, 'perkuliahan']);
