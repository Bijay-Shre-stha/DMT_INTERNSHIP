<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurdController;


Route::get('/',[CurdController::class,'index'])->name('index');
Route::get('/create',[CurdController::class,'create'])->name('create');
Route::post('/',[CurdController::class,'store'])->name('store');
Route::get('/edit/{id}',[CurdController::class,'edit'])->name('edit');
Route::put('/update/{id}',[CurdController::class,'update'])->name('update');
Route::get('/delete/{id}',[CurdController::class,'delete'])->name('delete');
Route::get('/sortDesc', [CurdController::class,'sortByDateDesc']);
Route::get('/sortAsc', [CurdController::class,'sortByDateAsc']);

