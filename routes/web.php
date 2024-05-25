<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\PernikahanController;
use App\Http\Controllers\DonaturController;

Route::get('/', function () {
    return view('welcome');
});

// Route Jamaah
Route::get('/Jamaah', [JamaahController::class, 'index'])->name('Jamaah');

Route::get('/Jamaah/addform', [JamaahController::class, 'add'])->name('addJamaah');

Route::post('/Jamaah/addform', [JamaahController::class, 'insertdata'])->name('insertJamaah');
    
Route::get('/Jamaah/updateform/{id}', [JamaahController::class, 'readdata'])->name('readJamaah');
    
Route::post('/Jamaah/updateform/{id}', [JamaahController::class, 'updatedata'])->name('updateJamaah');
    
Route::get('/Jamaah/{id}', [JamaahController::class, 'deletedata'])->name('deleteJamaah');

Route::get('/pdf-Jamaah', [JamaahController::class, 'exportpdf'])->name('pdfJamaah');

// Route Pernikahan
Route::get('/Pernikahan', [PernikahanController::class, 'index'])->name('Pernikahan');

Route::get('/Pernikahan/addform', [PernikahanController::class, 'add'])->name('addPernikahan');

Route::post('/Pernikahan/addform', [PernikahanController::class, 'insertdata'])->name('insertPernikahan');
    
Route::get('/Pernikahan/updateform/{id}', [PernikahanController::class, 'readdata'])->name('readPernikahan');
    
Route::post('/Pernikahan/updateform/{id}', [PernikahanController::class, 'updatedata'])->name('updatePernikahan');
    
Route::get('/Pernikahan/{id}', [PernikahanController::class, 'deletedata'])->name('deletePernikahan');

Route::get('/pdf-Pernikahan', [PernikahanController::class, 'exportpdf'])->name('pdfPernikahan');

// Route Donatur
Route::get('/Donatur', [DonaturController::class, 'index'])->name('Donatur');

Route::get('/Donatur/addform', [DonaturController::class, 'add'])->name('addDonatur');

Route::post('/Donatur/addform', [DonaturController::class, 'insertdata'])->name('insertDonatur');
    
Route::get('/Donatur/updateform/{id}', [DonaturController::class, 'readdata'])->name('readDonatur');
    
Route::post('/Donatur/updateform/{id}', [DonaturController::class, 'updatedata'])->name('updateDonatur');
    
Route::get('/Donatur/{id}', [DonaturController::class, 'deletedata'])->name('deleteDonatur');

Route::get('/pdf-Donatur', [DonaturController::class, 'exportpdf'])->name('pdfDonatur');