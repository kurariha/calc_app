<?php

use App\Http\Controllers\CalcsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calc/{値1}/{演算子}/{値2}', [CalcsController::class, 'calc']);
