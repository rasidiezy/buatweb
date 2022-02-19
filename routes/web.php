<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
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


Route::get('/sign-in-google',[UserController::class, 'google'])->name('user.login.google');
Route::get('/auth/google/callback',[UserController::class, 'handleProvider']);



//halaman yg tidak bisa diakses sebelum login
Route::middleware(['auth'])->group(function () {
    //checkout routes
    Route::get('/checkouts/success',[CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('/checkouts/{paket:slug}',[CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('checkouts/{paket}',[CheckoutController::class, 'store'])->name('checkout.store');

    //dashboard routes
    Route::get('dashboard',[HomeController::class, 'dashboard'])->name('dashboard');    
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
