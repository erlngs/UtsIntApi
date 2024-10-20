<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllerss\BukuController;

Route::apiResource('bukus', BukuController::class);
Route::apiResource('kategoris', KategoriController::class);

Route::get('/', function () {
    return view('welcome');
});
