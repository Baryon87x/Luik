<?php

use App\Http\Controllers\PresentationController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeControlller;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeControlller::class,'index'])->name('home');
Route::get('/boutique', [BoutiqueController::class,'index'])->name('boutique');
Route::get('/boutique/{id}', [BoutiqueController::class,'search'])->name('boutique.search');
Route::get('/presentation',[PresentationController::class,'index'])->name('presentation');
Route::get('/nous-contacter', [ContactController::class,'index'])->name('nous-contacter');


require __DIR__.'/auth.php';
