<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pago-digital')->group(function () {
    Route::get('/', function() { return view("modules.PagoDigital.index"); })->name('pago.digital');
});