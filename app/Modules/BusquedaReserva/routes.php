<?php

use Illuminate\Support\Facades\Route;

Route::prefix('busqueda-reserva')->group(function () {
    Route::get('/', function() { return view("modules.BusquedaReserva.index"); })->name('busqueda.reserva');
});