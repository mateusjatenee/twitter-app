<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\TweetsController;
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

Route::view('/', 'index');

Route::middleware('auth')->group(function () {
    Route::resource('tweets', TweetsController::class);
});

Route::get('login/twitter', [LoginController::class, 'redirectToProvider'])->name('login');
Route::get('login/twitter/callback', [LoginController::class, 'handleProviderCallback']);

Route::delete('logout', LogoutController::class);
