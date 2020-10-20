<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('search', function () {
    return view('search');
});

Route::get('create', function () {
    return view('create');
});

Route::get('read', function () {
    return view('read');
});

Route::get('update', function () {
    return view('update');
});

Route::get('delete', function () {
    return view('delete');
});
