<?php

use Illuminate\Support\Facades\Route;

//Route::get('/login',  'LoginController@index')->name('login.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hakkimda', [\App\Http\Controllers\HomeController::class, 'ShowView']);
//Route::get('/login', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/login1', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.index');
Route::get('/forgotPassword', [\App\Http\Controllers\LoginController::class, 'forgotPassword'])->name('login.forgotPassword');
Route::post('/smsPassword', [\App\Http\Controllers\LoginController::class, 'smsPassword'])->name('login.smsPassword');

Route::get('/odev',[\App\Http\Controllers\ProjeController::class, 'index']);



