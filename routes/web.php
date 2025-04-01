<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/{vue_capture?}', function () {
    return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');


Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/gallery',[HomeController::class,'photo'])->name('gallery');
Route::get('/events',[HomeController::class,'event'])->name('event');
Route::get('/board-members',[HomeController::class,'boardM'])->name('boardM');
Route::get('/management-team',[HomeController::class,'manage'])->name('manage');