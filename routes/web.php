<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/contato',[\App\Controllers\ContatoController::class,'contato']);

Route::get('/sobre-nos',[\App\Controllers\SobreNosController::class,'sobreNos']);

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/clientes', function () {
    return view('welcome');
});

Route::get('/fornecedores', function () {
    return view('welcome');
});

Route::get('/produtos', function () {
    return view('welcome');
});
