<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Etudiant routes
Route::get('/etudiant', [EtudiantController::class, 'create'])->name('create');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('create');

// Photo routes
Route::get('/photos', [PhotoController::class, 'create'])->name('create');
Route::post('/photos', [PhotoController::class, 'store'])->name('create');

