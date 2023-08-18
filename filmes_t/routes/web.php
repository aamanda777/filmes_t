<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registro', [AuthController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [AuthController::class, 'register'])->name('registro.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware(['auth', 'auth.role:administrador,usuario'])->group(function () {
        Route::get('/filmes/listagem', [FilmeController::class, 'listagem'])->name('filmes.listagem');

        Route::get('/filmes/create', [FilmeController::class, 'create'])->name('filmes.create');
        Route::post('/filmes', [FilmeController::class, 'store'])->name('filmes.store');
        Route::get('/filmes/{id}/edit', [FilmeController::class, 'edit'])->name('filmes.edit');
        Route::put('/filmes/{id}', [FilmeController::class, 'update'])->name('filmes.update');
        Route::delete('/filmes/{id}', [FilmeController::class, 'destroy'])->name('filmes.destroy');
        Route::get('/filmes/{id}/detalhes', [FilmeController::class, 'detalhes'])->name('filmes.detalhes');

        // categorias
        Route::get('/categorias/nova', [CategoriaController::class, 'create'])->name('categorias.create');
        Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
    });
});

?>
