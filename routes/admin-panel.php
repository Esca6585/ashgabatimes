<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [App\Http\Controllers\AdminControllers\Dashboard\DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resources([
        '/{categoryType}/category' => App\Http\Controllers\AdminControllers\Category\CategoryController::class,
        '/news' => App\Http\Controllers\AdminControllers\News\NewsController::class,
    ]);
});
