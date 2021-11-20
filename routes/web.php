<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ViewUsersController;
use App\Http\Controllers\ViewAdminsController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\BookingHistoryController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth'])->group(function () {

    // vehicle routes
    Route::get('/vehicles',[VehicleController::class, 'index'])->name('vehicles');
    Route::get('/vehicles/addvehicle',[VehicleController::class, 'create'])->name('addvehicle');

    //search routes
    Route::get('/search',[SearchController::class, 'index'])->name('search');
    Route::get('/search/newbooking', [SearchController::class, 'create'])->name('newbooking');

    //payment routes
    Route::get('/bookingcomplete',[PaymentController::class, 'index'])->name('bookingcomplete');
    Route::get('/payment',[PaymentController::class, 'card'])->name('card');

    //profile routes
    Route::get('/rate', [UserProfileController::class, 'index'])->name('rate');

});

Route::middleware(['role:admin'])->group(function () {

    Route::get('/admin', [UserProfileController::class, 'index'])->name('admin');

    Route::get('/Admin', function () {
        return Inertia::render('Admin');
    })->middleware(['auth', 'verified'])->name('Admin');

    Route::get('/BookingHistory', function () {
        return Inertia::render('BookingHistory');
    })->middleware(['auth', 'verified'])->name('BookingHistory');
    
    Route::get('/Reviews', function () {
        return Inertia::render('Reviews');
    })->middleware(['auth', 'verified'])->name('Reviews');

});

Route::middleware(['role:superadmin'])->group(function () {

    Route::get('/SuperAdmin', function () {
        return Inertia::render('SuperAdmin');
    })->middleware(['auth', 'verified'])->name('SuperAdmin');

    Route::get('/ViewAdmins', function () {
        return Inertia::render('ViewAdmins');
    })->middleware(['auth', 'verified'])->name('ViewAdmins');
    
    Route::get('/ViewUsers', function () {
        return Inertia::render('ViewUsers');
    })->middleware(['auth', 'verified'])->name('ViewUsers');
});





Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/editprofile', function () {
    return Inertia::render('UserEditProfile');
})->middleware(['auth', 'verified'])->name('editprofile');














require __DIR__.'/auth.php';
