<?php

use App\Modules\PortalInko\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Portal Inko Module Routes (Company B)
|--------------------------------------------------------------------------
|
| Routes for the vendor portal - Company B (INKO).
|
*/

Route::prefix('portal-inko')->name('portal_inko.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/supplier', [HomeController::class, 'supplier'])->name('supplier.index');
    Route::get('/supplier/po', [HomeController::class, 'supplierPo'])->name('supplier.po');
    Route::get('/supplier/dn', [HomeController::class, 'supplierDn'])->name('supplier.dn');
});
