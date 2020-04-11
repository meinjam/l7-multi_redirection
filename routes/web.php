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

Route::get('/admin', function () {
    return view('admin');
})->name('admin.page')->middleware('admin');

Route::get('/delivery', function () {
    return view('delivery');
})->name('delivery.page')->middleware('delivery');

Route::get('/user', function () {
    return view('user');
})->name('user.page')->middleware('auth');

Auth::routes();