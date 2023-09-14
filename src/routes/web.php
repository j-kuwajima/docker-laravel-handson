<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\EmailVerificationController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/register/confirm', '/register');    //’Ç‹L
Route::post('/register/confirm', [App\Http\Controllers\Auth\RegisterController::class,'confirm']);    //’Ç‹L
Route::post('/register/complete', [App\Http\Controllers\Auth\RegisterController::class,'register']);  //’Ç‹L
 
Route::controller(EmailVerificationController::class)
    ->prefix('email')->name('verification.')->group(function () {
        // ?????????
        Route::get('verify', 'index')->name('notice');
        // ???????
        Route::post('verification-notification', 'notification')
            ->middleware('throttle:6,1')->name('send');
        // ???????????
        Route::get('verification/{id}/{hash}', 'verification')
            ->middleware(['signed', 'throttle:6,1'])->name('verify');
    });

    Route::middleware(['web', 'verified', 'auth']);