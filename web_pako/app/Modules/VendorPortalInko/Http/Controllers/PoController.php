<?php

namespace App\Modules\VendorPortalInko\Http\Controllers;

use App\Http\Controllers\Controller;

class PoController extends Controller
{
    public function index()
    {
        return view('vendor-portal-inko::po');
    }
}
