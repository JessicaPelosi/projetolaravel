<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InstrumentoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

Route::resources([
    'cliente' => ClienteController::class,
    'instrumento' => InstrumentoController::class,
]);

Route::get('/cliente/{id}/delete', [ClienteController::class, 'delete']);

Route::get('/instrumento/{id}/delete', [InstrumentoController::class, 'delete'])->name('instrumento.delete');