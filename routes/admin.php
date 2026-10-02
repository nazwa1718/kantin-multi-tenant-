<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.index');
})
    ->middleware(['web', 'auth', 'verified', 'active', 'role:admin'])
    ->name('admin.dashboard');
