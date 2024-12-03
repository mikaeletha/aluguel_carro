<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('home');
});

// CLIENTES
Route::get('/clients', [ClientController::class, 'index'])->name('index_clients');
Route::get('/create_client', [ClientController::class, 'create'])->name('create_client');
Route::post('/create_client', [ClientController::class, 'store'])->name('store_client');
