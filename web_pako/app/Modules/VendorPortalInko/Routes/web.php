<?php

use App\Modules\VendorPortalInko\Http\Controllers\DashboardController as InkoDashboardController;
use App\Modules\VendorPortalInko\Http\Controllers\SupplierController;
use App\Modules\VendorPortalInko\Http\Controllers\PoController;
use App\Modules\VendorPortalInko\Http\Controllers\DnController;

/*
|--------------------------------------------------------------------------
| Vendor Portal INKO (Company B) Routes
|--------------------------------------------------------------------------
|
| Secured routes for Vendor Company B (INKO).
| Requires authentication.
| Prefix 'portal-inko' is applied in ServiceProvider.
|
*/

Route::get('/', [InkoDashboardController::class, 'index'])->name('portal-inko.dashboard');
Route::get('/supplier', [SupplierController::class, 'index'])->name('portal-inko.supplier');
Route::get('/supplier/po', [PoController::class, 'index'])->name('portal-inko.po');
Route::get('/supplier/dn', [DnController::class, 'index'])->name('portal-inko.dn');
