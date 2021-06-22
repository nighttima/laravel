<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Public routes
Route::post('/register-check', [AuthController::class, 'register'])->name('register-check');
Route::post('/login-check', [AuthController::class, 'login'])->name('login-check');

//Nova::routes();
// Protected routes
//Route::middleware('auth:api')->group(function () {
//    Route::get('/panel', function (){
//        return view('user-panel');
//    });
//});

//Route::group(['middleware' => ['auth::sanctum']], function (){
//    Route::get('/panel', function (){
//        return view('user-panel');
//    });
//});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
