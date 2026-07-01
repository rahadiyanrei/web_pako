<?php

use App\Modules\WebPako\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| WebPako Module Routes
|--------------------------------------------------------------------------
|
| Routes for the main company website.
|
*/

Route::get('/', [HomeController::class, 'index'])->name('web_pako.home');
Route::get('/about', [HomeController::class, 'about'])->name('web_pako.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('web_pako.contact');
Route::get('/bod', [HomeController::class, 'bod'])->name('web_pako.bod');
