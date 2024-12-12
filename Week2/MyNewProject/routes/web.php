<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PersonPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class,'homepage'])->name('homepage');
//Route::get('/', function () {
//    //return view('welcome');
//    return view('homepage');
//})->name('homepage');

Route::view('/company', view:'company.docker' )->name('about');


Route::prefix('/profile')->group( function () {
    //return view('welcome');
    Route::get('/{personName}',[PersonPageController::class,'detailPage'])->name(name:'profile.detail');

//    Route::get('/alik',function (){
//        return view(view: 'profile.alik');
//    })->name(name:'alik');
});
