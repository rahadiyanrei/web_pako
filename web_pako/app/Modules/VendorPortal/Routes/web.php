<?php

use App\Modules\VendorPortal\Http\Controllers\DashboardController as PortalDashboardController;
use App\Modules\VendorPortal\Http\Controllers\SupplierController;
use App\Modules\VendorPortal\Http\Controllers\PoController;
use App\Modules\VendorPortal\Http\Controllers\DnController;

/*
|--------------------------------------------------------------------------
| Vendor Portal (Company A) Routes
|--------------------------------------------------------------------------
|
| Secured routes for Vendor Company A.
| Requires authentication.
| Prefix 'portal' is applied in ServiceProvider.
|
*/

Route::get('/', [PortalDashboardController::class, 'index'])->name('portal.dashboard');
Route::get('/supplier', [SupplierController::class, 'index'])->name('portal.supplier');
Route::get('/supplier/po', [PoController::class, 'index'])->name('portal.po');
Route::get('/supplier/dn', [DnController::class, 'index'])->name('portal.dn');
