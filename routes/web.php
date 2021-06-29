<?php

use App\Http\Controllers\AricleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/article/{article}', [AricleController::class, 'index']);
Route::get('/article', [AricleController::class, 'index']);
