<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', \App\Http\Controllers\HomePageController::)->name('homepage');
Route::get('/', function () {
    return view('welcome');
});
