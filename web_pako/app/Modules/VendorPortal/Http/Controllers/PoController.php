<?php

namespace App\Modules\VendorPortal\Http\Controllers;

use App\Http\Controllers\Controller;

class PoController extends Controller
{
    public function index()
    {
        return view('vendor-portal::po');
    }
}
