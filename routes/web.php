<?php

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


Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::view('profile_admin', 'profile_admin')->name('profile_admin');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');
    
    Route::view('create_user', 'create_user')->name('create_user');
    Route::put('create_user', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])
        ->name('create_user.store');

    Route::view('create_url', 'create_url')->name('create_url');
    Route::put('create_url', [\App\Http\Controllers\CreateURL::class, 'store'])
        ->name('create_url.store');

});

// USER DASHBOARD
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'user'])->name('dashboard');

// ADMIN DASHBOARD
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'admin'])->name('admin_dashboard');

require __DIR__.'/auth.php';
