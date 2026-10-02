<?php

use Illuminate\Support\Facades\Route;

Route::get('/kantin/{canteen}', function (string $canteen) {
    return view('customer.index', [
        'canteen' => $canteen,
    ]);
})->name('customer.canteen');
