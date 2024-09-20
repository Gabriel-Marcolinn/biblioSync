<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/livros', function () {
    return view('livros.index');
})->middleware(['auth', 'verified'])->name('livros');

Route::get('/generos', function () {
    return view('generos.index');
})->middleware(['auth', 'verified'])->name('generos');

Route::get('/editoras', function () {
    return view('editoras.index');
})->middleware(['auth', 'verified'])->name('editoras');

Route::get('/emprestimos', function () {
    return view('emprestimos.index');
})->middleware(['auth', 'verified'])->name('emprestimos');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
