<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NivelController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('niveis', NivelController::class);
