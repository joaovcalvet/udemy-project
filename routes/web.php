<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;

Route::get(uri: '/', action: [PrincipalController::class, 'principal']);
Route::get(uri: 'contato', action: [ContatoController::class, 'contato']);
Route::get(uri: '/sobre-nos', action: [SobreNosController::class, 'sobreNos']);