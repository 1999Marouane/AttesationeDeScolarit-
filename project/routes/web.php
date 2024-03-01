<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');


});




// Etudiant routes
Route::get('/create', [EtudiantController::class, 'create'])->name('test');
Route::post('/create', [EtudiantController::class, 'store'])->name('create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
    Route::get('/etudiants/{id}', [EtudiantController::class, 'show'])->name('etudiants.show');
    Route::get('/etudiants/{id}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit');
    Route::put('/etudiants/{id}', [EtudiantController::class, 'update'])->name('etudiants.update');
    Route::delete('/etudiants/{id}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');


    Route::get('/students/search', [EtudiantController::class, 'search'])->name('etudiants.search');
    Route::get('/supprimer', [EtudiantController::class, 'supprimer'])->name('supprimer.index');
    Route::get('/editer', [EtudiantController::class, 'editer'])->name('editer.index');

    Route::put('/toggle-card-status/{card}', [EtudiantController::class, 'toggleCardStatus'])
        ->name('toggle.card.status');
});



require __DIR__.'/auth.php';
