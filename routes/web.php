<?php
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehicleController;
<<<<<<< HEAD
use App\Http\Controllers\ViewCarwashController;
=======
use App\Http\Controllers\ViewUsersController;
use App\Http\Controllers\ViewAdminsController;
use App\Http\Controllers\SuperAdminController;
>>>>>>> husky
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
    Route::get('/vehicles',[VehicleController::class, 'index'])->name('vehicles');
    Route::get('/search',[SearchController::class, 'index'])->name('search');
    Route::get('/viewcarwash',[ViewCarwashController::class, 'index']);

});




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/SuperAdmin', function () {
    return Inertia::render('SuperAdmin');
})->middleware(['auth', 'verified'])->name('SuperAdmin');

Route::get('/ViewAdmins', function () {
    return Inertia::render('ViewAdmins');
})->middleware(['auth', 'verified'])->name('ViewAdmins');

Route::get('/ViewUsers', function () {
    return Inertia::render('ViewUsers');
})->middleware(['auth', 'verified'])->name('ViewUsers');

Route::get('/Admin', function () {
    return Inertia::render('Admin');
})->middleware(['auth', 'verified'])->name('Admin');





require __DIR__.'/auth.php';
