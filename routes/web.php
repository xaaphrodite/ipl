<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('RegisterView');
    Route::get('/', [LoginController::class, 'index'])->name('LoginView');
});

Route::post('/register', [RegisterController::class, 'store'])->name('Register');
Route::post('/', [LoginController::class, 'store'])->name('LoginAuth');


Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('Home');
    })->name('HomeView');

    Route::post('/logout', [LogoutController::class, '__invoke'])->name('Logout');
});
