<?php

use App\Modules\Portal\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Portal Module Routes (Company A)
|--------------------------------------------------------------------------
|
| Routes for the vendor portal - Company A.
|
*/

Route::prefix('portal')->name('portal.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/supplier', [HomeController::class, 'supplier'])->name('supplier.index');
    Route::get('/supplier/po', [HomeController::class, 'supplierPo'])->name('supplier.po');
    Route::get('/supplier/dn', [HomeController::class, 'supplierDn'])->name('supplier.dn');
});
