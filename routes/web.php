<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KuliahController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [DataController::class, 'mahasiswa'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [DataController::class, 'createMahasiswa'])->name('mahasiswa.create');
Route::post('/mahasiswa', [DataController::class, 'storeMahasiswa'])->name('mahasiswa.store');
Route::get('/mahasiswa/{id}/edit', [DataController::class, 'editMahasiswa'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', [DataController::class, 'updateMahasiswa'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', [DataController::class, 'deleteMahasiswa'])->name('mahasiswa.delete');

Route::get('/dosen', [DataController::class, 'dosen'])->name('dosen.index');
Route::get('/dosen/create', [DataController::class, 'createDosen'])->name('dosen.create');
Route::post('/dosen', [DataController::class, 'storeDosen'])->name('dosen.store');
Route::get('/dosen/{id}/edit', [DataController::class, 'editDosen'])->name('dosen.edit');
Route::put('/dosen/{id}', [DataController::class, 'updateDosen'])->name('dosen.update');
Route::delete('/dosen/{id}', [DataController::class, 'deleteDosen'])->name('dosen.delete');

Route::get('/mata-kuliah', [DataController::class, 'mataKuliah'])->name('mata_kuliah.index');
Route::get('/mata-kuliah/create', [DataController::class, 'createMataKuliah'])->name('mata_kuliah.create');
Route::post('/mata-kuliah', [DataController::class, 'storeMataKuliah'])->name('mata_kuliah.store');
Route::get('/mata-kuliah/{id}/edit', [DataController::class, 'editMataKuliah'])->name('mata_kuliah.edit');
Route::put('/mata-kuliah/{id}', [DataController::class, 'updateMataKuliah'])->name('mata_kuliah.update');
Route::delete('/mata-kuliah/{id}', [DataController::class, 'deleteMataKuliah'])->name('mata_kuliah.delete');

Route::get('/perkuliahan', [DataController::class, 'perkuliahan'])->name('perkuliahan.index');


Route::prefix('mhs')->group(function () {
    Route::get('/', [KuliahController::class, 'indexMahasiswa'])->name('mahasiswa.index');
    Route::get('/create', [KuliahController::class, 'createMahasiswa'])->name('mahasiswa.create');
    Route::post('/', [KuliahController::class, 'storeMahasiswa'])->name('mahasiswa.store');
    Route::get('/{nim}/edit', [KuliahController::class, 'editMahasiswa'])->name('mahasiswa.edit');
    Route::put('/{nim}', [KuliahController::class, 'updateMahasiswa'])->name('mahasiswa.update');
    Route::delete('/{nim}', [KuliahController::class, 'destroyMahasiswa'])->name('mahasiswa.delete');
});

Route::prefix('dosen2')->group(function () {
    Route::get('/', [KuliahController::class, 'indexDosen'])->name('dosen.index');
    Route::get('/create', [KuliahController::class, 'createDosen'])->name('dosen.create');
    Route::post('/', [KuliahController::class, 'storeDosen'])->name('dosen.store');
    Route::get('/{nip}/edit', [KuliahController::class, 'editDosen'])->name('dosen.edit');
    Route::put('/{nip}', [KuliahController::class, 'updateDosen'])->name('dosen.update');
    Route::delete('/{nip}', [KuliahController::class, 'destroyDosen'])->name('dosen.delete');
});

Route::prefix('mata_kuliah2')->group(function () {
    Route::get('/', [KuliahController::class, 'indexMataKuliah'])->name('mata_kuliah.index');
    Route::get('/create', [KuliahController::class, 'createMataKuliah'])->name('mata_kuliah.create');
    Route::post('/', [KuliahController::class, 'storeMataKuliah'])->name('mata_kuliah.store');
    Route::get('/{kode_matkul}/edit', [KuliahController::class, 'editMataKuliah'])->name('mata_kuliah.edit');
    Route::put('/{kode_matkul}', [KuliahController::class, 'updateMataKuliah'])->name('mata_kuliah.update');
    Route::delete('/{kode_matkul}', [KuliahController::class, 'destroyMataKuliah'])->name('mata_kuliah.delete');
});

Route::get('/perkuliahan2', [KuliahController::class, 'indexPerkuliahan'])->name('perkuliahan.index');

