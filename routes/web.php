<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
//use Laravel\Nova\Nova;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [ApiController::class, 'register']);
Route::get('/login', [ApiController::class, 'login']);

//Route::get('/form', function () {
//    return view('form');
//})->name('form');

//Route::post('/form', 'App\Http\Controllers\FormController@store')->name('form-contact');
//Route::group(['middleware' => ['role:admin']], function () {
//    Route::get('/admin', 'App\Http\Controllers\FormController@index')->name('form-data');
//    Route::get('/admin/{id}', 'App\Http\Controllers\FormController@show')->name('form-show');
//    Route::put('/admin/{id}', 'App\Http\Controllers\FormController@update')
//        ->name('form-update-submit');
//    Route::delete('/admin/{id}', 'App\Http\Controllers\FormController@delete')
//        ->name('form-delete-submit');
//});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
