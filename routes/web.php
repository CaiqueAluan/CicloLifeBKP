<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RotaController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [FeedController::class, 'read'])->name('dashboard');

    Route::get('/update/{id}', [FeedController::class, 'update'])->name('update');
    Route::get('/updatecoment/{id}', [RotaController::class, 'update'])->name('updatecoment');

    Route::get('/rotas', [RotaController::class, 'read'])->name('rotas');

    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');

    Route::post('/novopost', [FeedController::class, 'store'])->name('novopost');
    Route::delete('/deletar/{id}', [FeedController::class, 'deletar'])->name('deletar');

    Route::post('/editperfil', [PerfilController::class, 'store'])->name('editperfil');

    Route::post('/comentario', [RotaController::class, 'store'])->name('comentario');
    Route::delete('/deletarcoment/{id}', [RotaController::class, 'deletar'])->name('deletarcoment');
});
