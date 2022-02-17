<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
})->name('welcome');

Route::get('/checkouts', function () {
    return view('checkouts');
})->name('checkouts');

Route::get('/success-checkouts', function () {
    return view('success_checkouts');
})->name('success-checkout');

Route::get('/sign-in-google',[UserController::class, 'google'])->name('user.login.google');
Route::get('/auth/google/callback',[UserController::class, 'handleProvider']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
