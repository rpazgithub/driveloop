<?php

use Illuminate\Support\Facades\Route;

Route::prefix('gestion-usuario')->group(function () {
    Route::get('/', function() { return view("modules.GestionUsuario.index"); })->name('gestion.usuario');
});