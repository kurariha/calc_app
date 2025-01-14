<?php

use App\Http\Controllers\CalcsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calc/{number1}/{operator}/{number2}', [CalcsController::class, 'calc']);
