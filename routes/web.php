<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/form/submit', 'App\Http\Controllers\FormController@submit')->name('form-contact');
Route::get('/list/all', 'App\Http\Controllers\FormController@allData')->name('form-data');
Route::get('/list/all/{id}/update', 'App\Http\Controllers\FormController@upDate')->name('form-update');
Route::post('/list/all/{id}/update', 'App\Http\Controllers\FormController@upDateSubmit')->name('form-update-submit');
Route::get('/list/all/{id}/delete', 'App\Http\Controllers\FormController@deleteData')->name('form-delete-submit');
//Route::get('/list/all/{id}/update', [FormController::class, 'upDate'])->name('form-update');

