<?php

use App\Http\Controllers\ReclamacaoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfraestruturaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// MAPA
Route::middleware('auth')->group(function () {
    // Rota da tela do mapa
    Route::get('/mapa', function () {
        return view('mapa');
    });

    // Rota para salvar a infraestrutura via POST
    Route::post('/infraestruturas', [InfraestruturaController::class, 'store'])->name('infraestruturas.store');

    // Rotas do perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // rotas reclamacoes
    Route::get('/reclamacoes/criar', [ReclamacaoController::class, 'create'])->name('reclamacoes.create');
    Route::post('/reclamacoes', [ReclamacaoController::class, 'store'])->name('reclamacoes.store');

});
   

require __DIR__.'/auth.php';