<?php

use Illuminate\Support\Facades\Route;

// Company Website Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('company.about');
});

Route::get('/contact', function () {
    return view('company.contact');
});

Route::get('/bod', function () {
    return view('company.bod');
});

// Portal Vendor Company A Routes
Route::prefix('portal')->group(function () {
    Route::get('/', function () {
        return view('portal.index');
    })->name('portal.index');

    Route::get('/supplier', function () {
        return view('portal.supplier.index');
    })->name('portal.supplier.index');

    Route::get('/supplier/po', function () {
        return view('portal.supplier.po');
    })->name('portal.supplier.po');

    Route::get('/supplier/dn', function () {
        return view('portal.supplier.dn');
    })->name('portal.supplier.dn');
});

// Portal Vendor Company B Routes (portal-inko)
Route::prefix('portal-inko')->group(function () {
    Route::get('/', function () {
        return view('portal-inko.index');
    })->name('portal-inko.index');

    Route::get('/supplier', function () {
        return view('portal-inko.supplier.index');
    })->name('portal-inko.supplier.index');

    Route::get('/supplier/po', function () {
        return view('portal-inko.supplier.po');
    })->name('portal-inko.supplier.po');

    Route::get('/supplier/dn', function () {
        return view('portal-inko.supplier.dn');
    })->name('portal-inko.supplier.dn');
});
