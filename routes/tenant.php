<?php

use Illuminate\Support\Facades\Route;

Route::get('/tenant/{tenant}', function (string $tenant) {
    return view('tenant.index', [
        'tenant' => $tenant,
    ]);
})
    ->middleware(['web', 'auth', 'active', 'role:tenant'])
    ->name('tenant.dashboard');
