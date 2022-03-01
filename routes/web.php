<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\PaidController as AdminPaid;
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
    //checkout routes user
    Route::get('/checkouts/success',[CheckoutController::class, 'success'])->name('checkout.success')->middleware('UserRole:user');
    Route::get('/checkouts/{paket:slug}',[CheckoutController::class, 'create'])->name('checkout.create')->middleware('UserRole:user');
    Route::post('checkouts/{paket}',[CheckoutController::class, 'store'])->name('checkout.store')->middleware('UserRole:user'); 

    //dashboard routes
    Route::get('dashboard',[HomeController::class, 'dashboard'])->name('dashboard');   
});

    //user dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('UserRole:user')->group(function(){
        Route::get('/',[UserDashboard::class, 'index'])->name('dashboard');   
    });
    //admin dashboard
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('UserRole:admin')->group(function(){
        Route::get('/',[AdminDashboard::class, 'index'])->name('dashboard');   

        //set to paid
        Route::post('checkouts/{checkout}', [AdminPaid::class, 'paid'])->name('checkout.paid');

        //set to unpaid
        Route::post('checkout/{checkout}', [AdminPaid::class, 'unpaid'])->name('checkout.unpaid');
    });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
