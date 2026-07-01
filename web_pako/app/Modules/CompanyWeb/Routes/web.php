<?php

use App\Modules\CompanyWeb\Http\Controllers\HomeController;
use App\Modules\CompanyWeb\Http\Controllers\AboutController;
use App\Modules\CompanyWeb\Http\Controllers\ContactController;
use App\Modules\CompanyWeb\Http\Controllers\BodController;

/*
|--------------------------------------------------------------------------
| Company Web Module Routes
|--------------------------------------------------------------------------
|
| Public facing company website routes.
| No authentication required.
|
*/

Route::get('/', [HomeController::class, 'index'])->name('company.home');
Route::get('/about', [AboutController::class, 'index'])->name('company.about');
Route::get('/contact', [ContactController::class, 'index'])->name('company.contact');
Route::get('/bod', [BodController::class, 'index'])->name('company.bod');
