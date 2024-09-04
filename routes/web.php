<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('front.home');
});

Route::group(['prefix' => '/', 'as' => 'front.'], function () {
    Route::get('/', [\App\Http\Controllers\FrontController::class, 'home'])->name('home');
    Route::get('/about', [\App\Http\Controllers\FrontController::class, 'aboutUs'])->name('about');
    Route::get('/room', [\App\Http\Controllers\FrontController::class, 'room'])->name('room');
    Route::get('/gallery', [\App\Http\Controllers\FrontController::class, 'gallery'])->name('gallery');
    Route::get('/blog', [\App\Http\Controllers\FrontController::class, 'blog'])->name('blog');
    Route::get('/contact-us', [\App\Http\Controllers\FrontController::class, 'contactUs'])->name('contact');
});

Route::get('lang/{locale}', [\App\Http\Controllers\LanguageController::class, 'switchLang']);

require __DIR__ . '/auth.php';
