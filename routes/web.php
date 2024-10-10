<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('index');
});

Route::post('send', [ContactController::class, 'getData']);