<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function (){

    // Login routes
    Route::get('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');

    // Logout route
    Route::post('/logout', [App\Http\Controllers\Auth\AdminLogoutController::class, 'logout'])->name('admin.logout');

});
