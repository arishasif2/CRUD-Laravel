<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class,'show'])->name('index');

Route::get('/create',[StudentController::class,'index'])->name('create');
Route::post('/create', [StudentController::class,'create'])->name('create');

Route::get('edit/{id}', [StudentController::class,'edit'])->name('edit');
Route::put('edit/{id}', [StudentController::class,'update'])->name('update');

Route::get('delete/{id}', [StudentController::class,'destroy'])->name('delete');

