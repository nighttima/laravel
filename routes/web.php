<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/form', function () {
    return view('form');
});
Route::post('/form/submit', 'App\Http\Controllers\FormController@submit')->name('form');
