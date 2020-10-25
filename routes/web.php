<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/teachers', [TeacherController::class, 'index']);

Route::get('/teachers/{teacher}', [TeacherController::class, 'show']);

Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'edit']);

Route::delete('teachers/{teacher}/delete', [TeacherController::class, 'destroy']);
