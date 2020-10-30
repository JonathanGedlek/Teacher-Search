<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;

use Illuminate\Support\Facades\Route;



Route::get('/home', [HomeController::class, 'index'])->name('index');





Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/teachers', [TeacherController::class, 'index']);

Route::get('/teachers/{teacher}', [TeacherController::class, 'show']);
Route::delete('teachers/{teacher}', [TeacherController::class, 'destroy']);


Route::get('/create', [TeacherController::class, 'create']);
Route::post('teachers',[TeacherController::class, 'store']);

Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'edit']);
Route::post('/teachers/{teacher}', [TeacherController::class, 'update']);


