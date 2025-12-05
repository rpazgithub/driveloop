<?php

use Illuminate\Support\Facades\Route;

Route::prefix('contrato-garantia')->group(function () {
    Route::get('/', function() { return view("modules.ContratoGarantia.index"); })->name('contrato.garantia');
});