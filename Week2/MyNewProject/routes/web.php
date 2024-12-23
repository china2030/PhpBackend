<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PersonPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NewsController::class,'index'])->name('homepage');
//Route::get('/', function () {
//    //return view('welcome');
//    return view('homepage');
//})->name('homepage');

Route::view('/about', view:'company.docker' )->name('about');

Route::get('/news/create-page', [HomePageController::class,'getCreateNewsPage'])->name('create-news');

Route::post('/news', [NewsController::class,'create'])->name('create-news-post');

Route::get('/news/{id}', [NewsController::class,'detail'])->name('one-news');

Route::get('/news/update/{id}', [NewsController::class,'getUpdatePage'])->name('update-news-page');

Route::post('/news/update/{id}', [NewsController::class,'update'])->name('update-news-post');

Route::delete('/news/{id}', [NewsController::class,'delete'])->name('delete-news');

Route::prefix('/profile')->group( function () {
    //return view('welcome');
    Route::get('/{personName}',[PersonPageController::class,'detailPage'])->name(name:'profile.detail');

//    Route::get('/alik',function (){
//        return view(view: 'profile.alik');
//    })->name(name:'alik');
});
