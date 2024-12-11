<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', \App\Http\Controllers\HomePageController::)->name('homepage');
Route::get('/', function () {
    //return view('welcome');
    return view('homepage');
})->name('homepage');

Route::view('/company', view:'company.docker' )->name('about');


Route::prefix('/profile')->group( function () {
    //return view('welcome');
    Route::get('/chingiz',function (){
    return view(view: 'profile.chingiz');
    })->name(name:'chingiz');

    Route::get('/alik',function (){
        return view(view: 'profile.alik');
    })->name(name:'alik');
});
