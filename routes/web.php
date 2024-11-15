<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditoraController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\ItemEmprestimoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*  Professor mandou mudar as rotas para não usar somente get
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
*/

//rota pelo middleware é para pode escolher quais funções quero, como edit, update, destroy
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//usando o resource, a rota já sabe se estou fazendo edit, update ou destroy
Route::resource('livros',LivroController::class);
Route::resource('generos',GeneroController::class);
Route::resource('editoras',EditoraController::class);
Route::resource('emprestimos',EmprestimoController::class);
Route::resource('itemEmprestimos',ItemEmprestimoController::class);
Route::resource('clientes',ClienteController::class);
Route::resource('users',UserController::class);

require __DIR__.'/auth.php';
