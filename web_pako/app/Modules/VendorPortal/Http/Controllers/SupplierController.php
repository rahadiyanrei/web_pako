<?php

namespace App\Modules\VendorPortal\Http\Controllers;

use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    public function index()
    {
        return view('vendor-portal::supplier');
    }
}
