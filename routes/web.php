<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\CategoriasController;

use Illuminate\Support\Facades\Route;



//Rotas De Usuarios
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
//Rotas De Contato - Delete
Route::delete('/usuarios/{userID}', [UsuariosController::class, 'delete'])->name('usuarios.delete');
//Rotas De Contato - Create
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create.get');
Route::post('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create.post');
//Rotas De Contato - Update
Route::get('/usuarios/update/{userID}', [UsuariosController::class, 'update'])->name('usuarios.update.get');
Route::put('/usuarios/update/{userID}', [UsuariosController::class, 'update'])->name('usuarios.update.put');

// Rotas Produtos
Route::get('/produtos',[ProdutosController::class, 'index'])->name('produtos.index');

// Rotas Marcas
Route::get('/marcas',[MarcasController::class, 'index'])->name('marcas.index');

// Rotas Categorias
Route::get('/categorias',[CategoriasController::class, 'index'])->name('categorias.index');

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/index', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
