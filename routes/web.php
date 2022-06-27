<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => ['guest']], function() {
    Route::get('/register', [RegisterController::class, 'show']);
    Route::post('/register/confirm', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login/confirm', [LoginController::class, 'login']);
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [LogoutController::class, 'perform']);

    Route::get('/profile', [UserController::class, 'show']);

    //delete user acc
    Route::get('/delete/{id}', [UserController::class, 'delete']);

    Route::post('/order/step2', [OrderController::class, 'showStep2']);
    Route::post('/order/step2/confirm', [OrderController::class, 'step2']);

    //delete order
    //Route::post('/order/delete', [OrderController::class, 'cancel']);
    Route::match(['get', 'post'], '/order/delete', [OrderController::class,'cancel']);

});

Route::get('/order/step1', [OrderController::class, 'showStep1']);



