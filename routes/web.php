<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/admin', 'App\Http\Controllers\FormController@index')->name('form-data');
Route::get('/admin/{id}', 'App\Http\Controllers\FormController@show')->name('form-show');
Route::put('/admin/{id}', 'App\Http\Controllers\FormController@update')
    ->name('form-update-submit');
Route::post('/form', 'App\Http\Controllers\FormController@store')->name('form-contact');
Route::delete('/admin/{id}', 'App\Http\Controllers\FormController@delete')
    ->name('form-delete-submit');
