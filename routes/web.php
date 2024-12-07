<?php

use App\Http\Controllers\TpController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::post('/auth', 'App\Http\Controllers\TpController@auth')->name('auth');

Route::resource('tp', TpController::class);