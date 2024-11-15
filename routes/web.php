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

use App\Models\Livro;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    //para trazer os dados do livro em tela para listar no dashboard
    $livros = Livro::whereNotNull('linkIMG') // Certificando-se de que tem imagem
                   ->inRandomOrder()         // Pegando aleatoriamente
                   ->take(2)                 // Pegando 2 livros
                   ->get();

    return view('dashboard', compact('livros'));
})->middleware(['auth', 'verified'])->name('dashboard');

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
