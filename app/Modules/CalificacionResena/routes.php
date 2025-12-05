<?php

use Illuminate\Support\Facades\Route;

Route::prefix('calificacion-resena')->group(function () {
    Route::get('/', function() { return view("modules.CalificacionResena.index"); })->name('calificacion.resena');
});