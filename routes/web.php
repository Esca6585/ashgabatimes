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

Route::get('/', [App\Http\Controllers\FrontControllers\FrontController::class, 'index'])->name('main-page');

Route::get('/news/{news_id}', [App\Http\Controllers\FrontControllers\FrontController::class, 'singlePage'])->name('single-page');

Route::get('/addToFavorite/{id}', [App\Http\Controllers\FrontControllers\FrontController::class, 'addToFavorite']);

Route::get('/category/{category_id}/{category_name}', [App\Http\Controllers\FrontControllers\FrontController::class, 'categoryPage'])->name('category-page');

Route::get('/favorite', [App\Http\Controllers\FrontControllers\FrontController::class, 'favoritePage'])->name('favorite-page');

Route::get('/contact-us', [App\Http\Controllers\FrontControllers\FrontController::class, 'contactUs'])->name('contact-us');

Auth::routes([
    'login' => false, // Login Routes...
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__.'/admin-auth.php';
require __DIR__.'/admin-panel.php';
